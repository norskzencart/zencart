<?php
/**
 * MySQL query_factory class.
 * Class used for database abstraction to MySQL via mysqli
 *
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @copyright Portions adapted from http://www.data-diggers.com/
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id:  Modified in v1.5.8 $
 */
if (!defined('IS_ADMIN_FLAG')) {
    die('Illegal Access');
}

/**
 * Queryfactory - A simple database abstraction layer
 *
 */
class queryFactory extends base
{
    var $link; // mysqli object
    var $count_queries = 0;
    var $total_query_time;
    var $dieOnErrors = false;
    var $error_number = 0;
    var $error_text = '';
    /**
     * @var bool
     */
    private $db_connected = false;

    private $host = '';
    private $database = '';
    private $user = '';
    private $password = '';
    private $zf_sql = '';

    function __construct()
    {
        $this->count_queries = 0;
        $this->total_query_time = 0;
    }

    /**
     * @param string $db_host database server hostname
     * @param string $db_user db username
     * @param string $db_password db password
     * @param string $db_name database name
     * @param string $pconnect unused
     * @param false $dieOnErrors debug flag
     * @param array $options additional configuration
     * @return bool
     */
    public function connect(string $db_host, string $db_user, string $db_password, string $db_name, $pconnect = 'unused', bool $dieOnErrors = false, array $options = []): bool
    {
        $this->database = $db_name;
        $this->user = $db_user;
        $this->host = $db_host;
        $this->password = $db_password;
        $this->pConnect = $pconnect;
        $this->dieOnErrors = $dieOnErrors;

        if (defined('DB_CHARSET')) $dbCharset = DB_CHARSET;
        if (isset($options['dbCharset'])) $dbCharset = $options['dbCharset'];

        if (!function_exists('mysqli_connect')) die ('Call to undefined function: mysqli_connect().  Please install the MySQL Connector for PHP');

        $connectionRetry = 10;
        while (!isset($this->link) || ($this->link == FALSE && $connectionRetry != 0)) {
            $this->link = mysqli_connect($db_host, $db_user, $db_password, $db_name, (defined('DB_PORT') ? DB_PORT : NULL), (defined('DB_SOCKET') ? DB_SOCKET : NULL));
            $connectionRetry--;
        }

        if ($this->link) {
            if (mysqli_select_db($this->link, $db_name)) {
                if (isset($dbCharset)) {
                    mysqli_query($this->link, "SET NAMES '" . $dbCharset . "'");
                    if (function_exists('mysqli_set_charset')) {
                        mysqli_set_charset($this->link, $dbCharset);
                    } else {
                        mysqli_query($this->link, "SET CHARACTER SET '" . $dbCharset . "'");
                    }
                }
                $this->db_connected = true;

                // Set time zone to match PHP, unless disabled by this constant
                if (!defined('DISABLE_MYSQL_TZ_SET')) {
                    mysqli_query($this->link, "SET time_zone = '" . substr_replace(date("O"), ":", -2, 0) . "'");
                }

                // Set MySQL mode, if one is defined before execution. Ref: https://dev.mysql.com/doc/refman/5.7/en/sql-mode.html (must be only A-Z or _ or , characters)
                if (defined('DB_MYSQL_MODE') && DB_MYSQL_MODE != '') {
                    mysqli_query($this->link, "SET SESSION sql_mode = '" . preg_replace('/[^A-Z_,]/', '', DB_MYSQL_MODE) . "'");
                }

                return true;

            }

            $this->set_error(mysqli_errno($this->link), mysqli_error($this->link), $dieOnErrors);
            return false;
        }

        $this->set_error(mysqli_connect_errno(), mysqli_connect_error(), $dieOnErrors);
        return false;
    }

    /**
     * @param string $db_host database server hostname
     * @param string $db_user db username
     * @param string $db_password db password
     * @param string $db_name database name
     * @return bool
     */
    public function simpleConnect($db_host, $db_user, $db_password, $db_name): bool
    {
        $this->database = $db_name;
        $this->user = $db_user;
        $this->host = $db_host;
        $this->password = $db_password;
        $this->link = mysqli_connect($db_host, $db_user, $db_password, $db_name, (defined('DB_PORT') ? DB_PORT : NULL), (defined('DB_SOCKET') ? DB_SOCKET : NULL));

        if ($this->link) {
            $this->db_connected = true;
            return true;
        }

        $this->set_error(mysqli_connect_errno(), mysqli_connect_error(), $this->dieOnErrors);
        return false;
    }

    /**
     * @param string $sqlQuery
     * @param bool $remove_from_queryCache
     * @return bool|mixed|mysqli_result
     */
    protected function ensureDbConnected(string $sqlQuery, bool $remove_from_queryCache)
    {
        // connect to db
        if (!$this->db_connected) {
            if (!$this->connect($this->host, $this->user, $this->password, $this->database, null, $this->dieOnErrors))
                $this->set_error(0, DB_ERROR_NOT_CONNECTED, $this->dieOnErrors);
        }
        $zp_db_resource = $this->query($this->link, $sqlQuery, $remove_from_queryCache);
        // second attempt in case of 2006 response
        if (!$zp_db_resource) {
            if (mysqli_errno($this->link) == 2006) {
                $this->link = FALSE;
                $this->connect($this->host, $this->user, $this->password, $this->database, null, $this->dieOnErrors);
                $zp_db_resource = mysqli_query($this->link, $sqlQuery);
            }
        }
        return $zp_db_resource;
    }

    /**
     * Escape SQL query value for binding
     *
     * @param string $string
     * @return string
     */
    public function prepare_input(string $string): string
    {
        return mysqli_real_escape_string($this->link, $string);
    }

    /**
     * Alias to prepare_input()
     * @param $string
     * @return string
     * @see $this->prepare_input()
     */
    function prepareInput($string)
    {
        return $this->prepare_input($string);
    }

    /**
     * @param string $sqlQuery
     * @param string|null $limit
     * @param bool $enableCaching
     * @param int $cacheSeconds
     * @param bool $remove_from_queryCache
     * @return queryFactoryResult
     */
    public function Execute(string $sqlQuery, string $limit = null, bool $enableCaching = false, int $cacheSeconds = 0, bool $remove_from_queryCache = false): \queryFactoryResult
    {
        // do SELECT logging if enabled
        $this->logQuery($sqlQuery);

        global $zc_cache;

        $obj = new queryFactoryResult($this->link);

        if ($limit) {
            $sqlQuery .= ' LIMIT ' . $limit;
            $obj->limit = $limit;
        }

        $this->zf_sql = $sqlQuery;
        $obj->sql_query = $sqlQuery;

        // Use cached result
        if ($enableCaching && $zc_cache->sql_cache_exists($sqlQuery, $cacheSeconds)) {
            $obj->is_cached = true;
            $zp_result_array = $zc_cache->sql_cache_read($sqlQuery);
            $obj->result = $zp_result_array;
            if (count($zp_result_array) > 0) {
                $obj->EOF = false;
                $obj->fields = array_replace($obj->fields, $zp_result_array[0]);
            }
            return $obj;
        }


        $time_start = explode(' ', microtime());

        $zp_db_resource = $this->ensureDbConnected($sqlQuery, $remove_from_queryCache);

        // do query and cache the result before returning it
        if ($enableCaching) {
            $zc_cache->sql_cache_expire_now($sqlQuery);

            if (FALSE === $zp_db_resource) {
                $this->set_error(mysqli_errno($this->link), mysqli_error($this->link), $this->dieOnErrors);
            } else {
                $obj->resource = $zp_db_resource;
                $zp_rows = $obj->RecordCount();
                if ($zp_rows > 0) {
                    $zp_ii = 0;
                    while ($zp_ii < $zp_rows) {
                        $obj->result[$zp_ii] = [];
                        $obj->result[$zp_ii] = mysqli_fetch_assoc($zp_db_resource);
                        if (!$obj->result[$zp_ii]) {
                            unset($obj->result[$zp_ii]);
                            $obj->limit = $zp_ii;
                            break;
                        }
                        $zp_ii++;
                    }
                    $obj->fields = array_replace($obj->fields, $obj->result[$obj->cursor]);
                    $obj->EOF = false;
                }
                unset($zp_ii);
            }
            $zc_cache->sql_cache_store($sqlQuery, $obj->result);
            $obj->is_cached = true;
            $time_end = explode(' ', microtime());
            $query_time = $time_end[1] + $time_end[0] - $time_start[1] - $time_start[0];
            $this->total_query_time += $query_time;
            $this->count_queries++;

            return $obj;
        }

        // do uncached query

        if (FALSE === $zp_db_resource) {
            $this->set_error(mysqli_errno($this->link), mysqli_error($this->link), $this->dieOnErrors);
        } else {
            $obj->resource = $zp_db_resource;
            if ($obj->RecordCount() > 0) {
                $zp_result_array = mysqli_fetch_assoc($zp_db_resource);
                if ($zp_result_array) {
                    $obj->fields = array_replace($obj->fields, $zp_result_array);
                    $obj->EOF = false;
                }
            }

            $time_end = explode(' ', microtime());
            $query_time = $time_end[1] + $time_end[0] - $time_start[1] - $time_start[0];
            $this->total_query_time += $query_time;
            $this->count_queries++;
        }

        return $obj;
    }

    /**
     * Use this form of the Execute method to ensure that any SELECT result is pulled from the database, bypassing the cache.
     */
    function ExecuteNoCache($sqlQuery)
    {
        return $this->Execute($sqlQuery, false, false, 0, true);
    }

    function ExecuteRandomMulti($sqlQuery, $limit = 0, $unusedCacheFlag = null, $unusedCacheTtl = null, $remove_from_queryCache = false)
    {
        $time_start = explode(' ', microtime());
        $this->zf_sql = $sqlQuery;
        $obj = new queryFactoryResult($this->link);
        $obj->sql_query = $sqlQuery;
        $obj->limit = $limit;

        $zp_db_resource = $this->ensureDbConnected($sqlQuery, $remove_from_queryCache);

        if (FALSE === $zp_db_resource) {
            $this->set_error(mysqli_errno($this->link), mysqli_error($this->link), $this->dieOnErrors);
        } else {
            $obj->resource = $zp_db_resource;

            $zp_rows = $obj->RecordCount();
            if ($zp_rows > 0 && $limit > 0) {
                $zp_start_row = 0;
                if ($limit) {
                    $zp_start_row = zen_rand(0, $zp_rows - $limit);
                }
                mysqli_data_seek($zp_db_resource, $zp_start_row);
                $zp_ii = 0;
                while ($zp_ii < $limit) {
                    $obj->result[$zp_ii] = [];
                    $obj->result[$zp_ii] = mysqli_fetch_assoc($zp_db_resource);
                    if (!$obj->result[$zp_ii]) {
                        unset($obj->result[$zp_ii]);
                        $obj->limit = $zp_ii;
                        break;
                    }
                    $zp_ii++;
                }
                unset($zp_ii);
                $obj->EOF = false;

                $obj->result_random = array_rand($obj->result, count($obj->result));
                if (is_array($obj->result_random)) {
                    shuffle($obj->result_random);
                } else {
                    $obj->result_random = [0 => $obj->result_random];
                }
                $obj->cursor = -1;
                $obj->MoveNextRandom();
            }
        }

        $time_end = explode(' ', microtime());
        $query_time = $time_end[1] + $time_end[0] - $time_start[1] - $time_start[0];
        $this->total_query_time += $query_time;
        $this->count_queries++;
        return $obj;
    }

    /**
     * Use this ExecuteRandomMulti method to ensure that any SELECT result is pulled from the database, bypassing the cache.
     */
    function ExecuteRandomMultiNoCache($sqlQuery)
    {
        return $this->ExecuteRandomMulti($sqlQuery, 0, false, 0, true);
    }

    /**
     * @param mysqli $link
     * @param string $query
     * @param false $remove_from_queryCache
     * @return bool|mixed|mysqli_result
     */
    protected function query($link, string $query, bool $remove_from_queryCache = false)
    {
        global $queryLog, $queryCache;

        if ($remove_from_queryCache && isset($queryCache)) {
            $queryCache->reset($query);
        }

        if (isset($queryCache) && $queryCache->inCache($query)) {
            $cached_value = $queryCache->getFromCache($query);
            $this->count_queries--;
            return ($cached_value);
        }

        if (isset($queryLog)) $queryLog->start($query);
        $result = mysqli_query($link, $query);
        if (isset($queryLog)) $queryLog->stop($query, $result);
        if (isset($queryCache)) $queryCache->cache($query, $result);
        return $result;
    }

    /**
     * Get ID of last inserted record
     *
     * @return int|string
     */
    public function insert_ID()
    {
        return @mysqli_insert_id($this->link);
    }

    /**
     * Return the number of rows affected by the last INSERT, UPDATE, REPLACE or DELETE query.
     */
    public function affectedRows()
    {
        return ($this->link) ? $this->link->affected_rows : 0;
    }

    /**
     * Return the number of queries executed since the counter started
     * @return int
     */
    public function queryCount(): int
    {
        return $this->count_queries;
    }

    /**
     * Return the number of seconds elapsed for querying, since the counter started
     * @return int
     */
    public function queryTime(): int
    {
        return $this->total_query_time;
    }

    /**
     * Performs an INSERT or UPDATE based on a supplied array of field data
     *
     * @param string $tableName table on which to perform the insert/update
     * @param array $tableData data to be inserted/deleted containing sub-arrays with fieldName/value/type keys (where type is the BindVar rule to apply)
     * @param string $performType INSERT or UPDATE
     * @param string $whereCondition condition for UPDATE (exclude the word "WHERE")
     * @param false $debug developer use only
     */
    public function perform(string $tableName, array $tableData, $performType = 'INSERT', string $whereCondition = '', $debug = false): void
    {
        switch (strtolower($performType)) {
            case 'insert':
                $insertString = "INSERT INTO " . $tableName . " (";
                foreach ($tableData as $key => $value) {
                    if ($debug === true) {
                        echo $value['fieldName'] . '#';
                    }
                    $insertString .= $value['fieldName'] . ", ";
                }
                $insertString = substr($insertString, 0, strlen($insertString) - 2) . ') VALUES (';
                foreach ($tableData as $key => $value) {
                    $bindVarValue = $this->getBindVarValue($value['value'], $value['type']);
                    $insertString .= $bindVarValue . ", ";
                }
                $insertString = substr($insertString, 0, strlen($insertString) - 2) . ')';
                if ($debug === true) {
                    echo $insertString;
                    die();
                }

                $this->Execute($insertString);

                break;

            case 'update':
                $updateString = 'UPDATE ' . $tableName . ' SET ';
                foreach ($tableData as $key => $value) {
                    $bindVarValue = $this->getBindVarValue($value['value'], $value['type']);
                    $updateString .= $value['fieldName'] . '=' . $bindVarValue . ', ';
                }
                $updateString = substr($updateString, 0, strlen($updateString) - 2);
                if (!empty($whereCondition)) {
                    $updateString .= ' WHERE ' . $whereCondition;
                }
                if ($debug === true) {
                    echo $updateString;
                    die();
                }

                $this->Execute($updateString);

                break;
        }
    }

    /**
     * bind variables to a query
     * @param string $sql SQL query fragment to perform binding substitution on
     * @param string $parameterToReplace the string to replace in the origin $sql
     * @param mixed $valueToBind  the variable/value to be bound
     * @param string $bindingRule the pattern to cast the value to
     * @return string original $sql query fragment with patterns substituted
     */
    public function bindVars(string $sql, string $parameterToReplace, $valueToBind, string $bindingRule): string
    {
        $sqlNew = $this->getBindVarValue($valueToBind, $bindingRule);
        $sqlNew = str_replace($parameterToReplace, $sqlNew, $sql);
        return $sqlNew;
    }

    /**
     * Applies binding/sanitization to values in preparation for safe execution
     *
     * @param mixed $value value to be bound/sanitized
     * @param string $type binding rule to apply
     * @return float|int|string
     */
    protected function getBindVarValue($value, string $type)
    {
        $typeArray = explode(':', $type);
        $type = $typeArray[0];
        switch ($type) {
            case 'inConstructInteger':
                $list = explode(',', $value);
                $newList = array_map(function ($value) {
                    return (int)$value;
                }, $list);
                $value = implode(',', $newList);

                return $value;

            case 'inConstructString':
                $list = explode(',', $value);
                $newList = array_map(function ($value) {
                    return '\'' . $this->prepare_input($value) . '\'';
                }, $list);
                $value = implode(',', $newList);

                return $value;

            case 'csv':
                return $value;

            case 'passthru':
                return $value;

            case 'float':
                return (!zen_not_null($value) || $value == '' || $value == 0) ? 0 : (float)$value;

            case 'integer':
                return (int)$value;

            case 'string':
                if (preg_match('/NULL/', $value)) return 'null';
                return '\'' . $this->prepare_input($value) . '\'';

            case 'stringIgnoreNull':
                return '\'' . $this->prepare_input($value) . '\'';

            case 'noquotestring':
                return $this->prepare_input($value);

            case 'currency':
                return '\'' . $this->prepare_input($value) . '\'';

            case 'date':
                if (preg_match('/null/i', $value)) return 'null';
                return '\'' . $this->prepare_input($value) . '\'';

            case 'enum':
                if (isset($typeArray[1])) {
                    $enumArray = explode('|', $typeArray[1]);
                }
                return '\'' . $this->prepare_input($value) . '\'';

            case 'regexp':
                $searchArray = ['[', ']', '(', ')', '{', '}', '|', '*', '?', '.', '$', '^'];
                foreach ($searchArray as $searchTerm) {
                    $value = str_replace($searchTerm, '\\' . $searchTerm, $value);
                }
                return $this->prepare_input($value);

            default:
                trigger_error("var-type undefined: $type ($value).", E_USER_ERROR);
        }
    }

    /**
     * @param string $db_name
     * @return bool
     */
    public function selectdb(string $db_name): bool
    {
        $result = mysqli_select_db($this->link, $db_name);
        if ($result) return $result;

        $this->set_error(mysqli_errno($this->link), mysqli_error($this->link), $this->dieOnErrors);
        return false;
    }

    /**
     * Close db connection
     */
    public function close(): void
    {
        @mysqli_close($this->link);
        unset($this->link);
    }

    /**
     * Close db connection on destroy/shutdown/exit
     */
    public function __destruct()
    {
        $this->close();
    }

    /**
     * Internal queryfactory error handling
     */
    protected function set_error($err_num, $err_text, $dieOnErrors = true): void
    {
        $this->error_number = $err_num;
        $this->error_text = $err_text;
        if ($dieOnErrors && $err_num != 1141) { // error 1141 is okay ... should not die on 1141, but just continue on instead
            $this->show_error();
            die();
        }
    }

    /**
     * Display DB Connection Failure error message
     * and trigger error logging
     */
    protected function show_error()
    {
        if (!headers_sent()) {
            header("HTTP/1.1 503 Service Unavailable");
        }
        if ($this->error_number == 0 && $this->error_text == DB_ERROR_NOT_CONNECTED && file_exists(FILENAME_DATABASE_TEMPORARILY_DOWN)) {
            include(FILENAME_DATABASE_TEMPORARILY_DOWN);
        }
        echo '<div class="systemError">';
        if (defined('STRICT_ERROR_REPORTING') && STRICT_ERROR_REPORTING == true) {
            echo $this->error_number . ' ' . $this->error_text;
            echo '<br>in:<br>[' . (strstr($this->zf_sql, 'db_cache') ? 'db_cache table' : $this->zf_sql) . ']<br>';
        } else {
            echo 'WARNING: An Error occurred, please let us know!';
        }

        $backtrace_array = debug_backtrace();
        $query_factory_caller = '';
        foreach ($backtrace_array as $current_caller) {
            if (strcmp($current_caller['file'], __FILE__) != 0) {
                $query_factory_caller = ' ==> (as called by) ' . $current_caller['file'] . ' on line ' . $current_caller['line'] . ' <==';
                break;
            }
        }
        trigger_error($this->error_number . ':' . $this->error_text . ' :: ' . $this->zf_sql . $query_factory_caller, E_USER_ERROR);

        if (defined('IS_ADMIN_FLAG') && IS_ADMIN_FLAG == true) {
            echo ' If you were entering information, press the BACK button in your browser and re-check the information you had entered to be sure you entered valid data.<br>';
        }

        echo '</div>';
    }

    /**
     * Get column properties for a table
     * @param string $tablename
     * @return mixed
     */
    public function metaColumns(string $tablename)
    {
        $sql = "SHOW COLUMNS from :tableName:";
        $sql = $this->bindVars($sql, ':tableName:', $tablename, 'noquotestring');
        $res = $this->Execute($sql);
        while (!$res->EOF) {
            $obj [strtoupper($res->fields['Field'])] = new queryFactoryMeta($res->fields);
            $res->MoveNext();
        }
        return $obj;
    }

    function get_server_info()
    {
        if ($this->link) {
            return mysqli_get_server_info($this->link);
        }

        return defined('UNKNOWN') ? UNKNOWN : 'UNKNOWN';
    }

    /**
     * If logging is enabled, log SELECT queries for later analysis
     * @param $sqlQuery
     */
    protected function logQuery($sqlQuery)
    {
        if (!defined('STORE_DB_TRANSACTIONS') || STORE_DB_TRANSACTIONS != 'true') {
            return;
        }
        global $PHP_SELF, $box_id, $current_page_base;

        if (strtoupper(substr($sqlQuery, 0, 6)) != 'SELECT' /*&& strstr($sqlQuery,'products_id')*/) {
            return;
        }
// optional isolation
//        if (strpos($sqlQuery, 'products_id') === false) {
//            return;
//        }

        $f = @fopen(DIR_FS_LOGS . '/query_selects_' . $current_page_base . '_' . time() . '.txt', 'ab');
        if ($f) {
            $backtrace = '';

            if (STORE_DB_TRANSACTIONS == 'backtrace') {
                ob_start();
                debug_print_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);
                $backtrace = ob_get_clean();
                $backtrace = preg_replace('/^#0\s+' . __FUNCTION__ . '[^\n]*\n/', '', $backtrace, 1);
                $backtrace = 'query trace: ' . "\n" . $backtrace . "\n";
            }

            fwrite($f, "\n\n" . 'I AM HERE ' . $current_page_base . /*zen_get_all_get_params() .*/ "\n" . $backtrace . 'sidebox: ' . $box_id . "\n\n" . "Explain \n" . $sqlQuery . ";\n\n");
            fclose($f);
        }
        unset($f);
    }
}

class queryFactoryResult implements Countable, Iterator
{
    /**
     * Indicates if the result has reached the last row of data.
     *
     * @var boolean
     */
    public $EOF = true;

    /**
     * Indicates the current database row.
     *
     * @var int
     */
    public $cursor = 0;

    /**
     * Contains the data for the current database row (fields + values).
     *
     * @var array of field => value pairs
     */
    public $fields = [];

    /**
     * Indicates if the result is cached.
     *
     * @var boolean
     */
    public $is_cached = false;

    /**
     * Contains stored results (if any). Typically used by cached results.
     *
     * @var array
     */
    public $result = [];

    /**
     * The maximum number of rows allowed to be iterated over.
     *
     * @var int
     */
    public $limit = null;

    /**
     * The raw result returned by the mysqli call.
     *
     * @var mysqli_result
     */
    public $resource;

    /**
     * @var string
     */
    public $sql_query = '';

    /**
     * @var mysqli MySQL connection link
     */
    public $link;

    /**
     * @param mysqli $link
     */
    function __construct($link)
    {
        $this->link = $link;
    }

    /* (non-PHPdoc)
     * @see Iterator::current()
     */
    public function current()
    {
        return $this->fields;
    }

    /* (non-PHPdoc)
     * @see Iterator::key()
    */
    public function key()
    {
        return $this->cursor;
    }

    /* (non-PHPdoc)
     * @see Iterator::next()
     */
    public function next()
    {
        $this->MoveNext();
    }

    /**
     * Moves the cursor to the next row.
     */
    public function MoveNext()
    {
        $this->cursor++;
        if (!$this->valid()) {
            $this->EOF = true;
        } else if ($this->is_cached) {
            if ($this->cursor >= count($this->result)) {
                $this->EOF = true;
            } else {
                $this->fields = array_replace($this->fields, $this->result[$this->cursor]);
            }
        } else {
            $zp_result_array = @mysqli_fetch_assoc($this->resource);
            $this->fields = array_replace($this->fields, $zp_result_array);
            if (!$zp_result_array) {
                $this->EOF = true;
                unset($this->fields);
            }
        }
    }

    /**
     * Moves to the next randomized result. Typically only used on a result generated by ExecuteRandomMulti
     */
    public function MoveNextRandom()
    {
        $this->cursor++;
        if ($this->cursor < $this->limit) {
            $this->fields = array_replace($this->fields, $this->result[$this->result_random[$this->cursor]]);
        } else {
            $this->EOF = true;
        }
    }

    /* (non-PHPdoc)
     * @see Iterator::rewind()
     */
    public function rewind()
    {
        $this->EOF = ($this->RecordCount() == 0);
        if ($this->RecordCount() !== 0) {
            $this->Move(0);
        }
    }

    /* (non-PHPdoc)
     * @see Iterator::valid()
     */
    public function valid()
    {
        return $this->cursor < $this->RecordCount() && !$this->EOF;
    }

    /* (non-PHPdoc)
     * @see Iterator::count()
     */
    public function count()
    {
        return $this->RecordCount();
    }

    /**
     * Returns the number of rows (records).
     *
     * @return int
     */
    public function RecordCount()
    {
        if ($this->is_cached && is_countable($this->result)) {
            return count($this->result);
        }

        if (!empty($this->resource)) {
            return @mysqli_num_rows($this->resource);
        }
        return 0;
    }

    /**
     * Moves the cursor to the specified row. If the row is not valid,
     * the cursor will be moved past the last row and EOF will be set false.
     *
     * @param int $zp_row the row to move to
     */
    public function Move($zp_row)
    {
        if ($this->is_cached) {
            if ($zp_row >= count($this->result)) {
                $this->cursor = count($this->result);
                $this->EOF = true;
            } else {
                $this->fields = array_replace($this->fields, $this->result[$zp_row]);
                $this->cursor = $zp_row;
                $this->EOF = false;
            }
        } else if (@mysqli_data_seek($this->resource, $zp_row)) {
            $this->fields = array_replace($this->fields, @mysqli_fetch_assoc($this->resource));
            $this->cursor = $zp_row;
            $this->EOF = false;
        } else {
            $this->EOF = true;
        }
    }
}

class queryFactoryMeta
{
    function __construct($field)
    {
        $type = $field['Type'];
        $rgx = preg_match('/^[a-z]*/', $type, $matches);
        $this->type = $matches[0];
        $this->max_length = preg_replace('/[a-z\(\)]/', '', $type);
    }
}
