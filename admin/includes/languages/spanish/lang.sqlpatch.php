<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: torvista 2022 Feb 26 New in v1.5.8-alpha $
*/

$define = [
    'HEADING_TITLE' => 'Ejecutor de Consultas SQL',
    'HEADING_INFO' => 'El Ejecutor de Consultas SQL le permite ejecutar consultas SQL directamente en la base de datos pegando un script en el área de texto o cargando un archivo de texto que contiene el script. Está pensado para la instalación manual de Plugins y sus propias correcciones/adiciones.',
    'HEADING_WARNING_INSTALLSCRIPTS' => 'Esta herramienta <b>NO</b> debe usarse para ejecutar las actualizaciones de Zen Cart: use el instalador de Zen Cart según la documentación.',
    'HEADING_WARNING' => '<p>ANTES de realizar CUALQUIER operación de base de datos con esta herramienta, asegúrese de tener una copia de seguridad VERIFICADA de su base de datos y de saber cómo restaurarla.<br>Si está instalando Plugins/modificaciones de terceros, tenga en cuenta que lo hace bajo su propio riesgo. Zen Cart&reg; no garantiza la seguridad de los scripts proporcionados por terceros.</p><p>¡Pruebe siempre cada script en un servidor de DESARROLLO antes de usarlo en su tienda en producción!</p>',
    'TEXT_QUERY_RESULTS' => 'Resultados de la consulta:',
    'TEXT_ENTER_QUERY_STRING' => 'Escriba la consulta <br>a ser ejecutada:&nbsp;&nbsp;<br><br>Asegúrese de<br>terminar cada línea con ";".',
    'TEXT_QUERY_FILENAME' => 'Cargar archivo de texto SQL:',
    'ERROR_NOTHING_TO_DO' => 'Error: Nada que hacer - no se especificó una consulta o archivo de consulta.',
    'SQLPATCH_HELP_TEXT' => 'La herramienta SQLPATCH le permite instalar parches del sistema pegando código SQL directamente en la zona de texto ',
    'REASON_TABLE_ALREADY_EXISTS' => 'No se puede crear la tabla %s porque ya existe',
    'REASON_TABLE_DOESNT_EXIST' => 'No se puede borrar la tabla %s porque no existe.',
    'REASON_TABLE_NOT_FOUND' => 'No se puede ejecutar porque la tabla %s no existe.',
    'REASON_CONFIG_KEY_ALREADY_EXISTS' => 'No se puede introducir configuration_key "%s" porque ya existe',
    'REASON_COLUMN_ALREADY_EXISTS' => 'No se pudo AÑADIR columna %s porque ya existe.',
    'REASON_COLUMN_DOESNT_EXIST_TO_DROP' => 'No se pudo BORRAR la columna %s porque no existe.',
    'REASON_COLUMN_DOESNT_EXIST_TO_CHANGE' => 'No se pudo CAMBIAR la columna %s porque no existe.',
    'REASON_PRODUCT_TYPE_LAYOUT_KEY_ALREADY_EXISTS' => 'No se pudo insertar prod-type-layout configuration_key "%s" porque ya existe',
    'REASON_INDEX_DOESNT_EXIST_TO_DROP' => 'No se pudo borrar %s en la tabla %s porque no existe.',
    'REASON_PRIMARY_KEY_DOESNT_EXIST_TO_DROP' => 'No se pudo borrar la clave primaria en la tabla %s porque no existe.',
    'REASON_INDEX_ALREADY_EXISTS' => 'No se pudo añadir el índice %s a la tabla %s porque ya existe.',
    'REASON_PRIMARY_KEY_ALREADY_EXISTS' => 'No se pudo añadir la clave primaria a la tabla %s porque ya existe la clave primaria.',
    'REASON_NO_PRIVILEGES' => 'Usuario ' . DB_SERVER_USERNAME . '@' . DB_SERVER . ' no tiene privilegios de %s para la base de datos ' . DB_DATABASE . '.',
    'ERROR_RENAME_TABLE' => 'RENAME TABLE no está soportado por la herramienta SQLpatch. Debe usar phpMyAdmin.',
    'ERROR_LINE_INCOMPLETE' => 'Consulta incompleta: falta la ";" final.',
    'TEXT_EXECUTE_SUCCESS' => 'Éxito: %u consulta(s) procesadas.',
    'ERROR_EXECUTE_FAILED' => 'Consulta fallada: %u consultas procesadas.',
    'ERROR_EXECUTE_IGNORED' => 'Nota: %u consulta(s) ignorada(s). Mire la tabla "upgrade_exceptions" para más detalles.',
    'TEXT_UPLOADQUERY_SUCCESS' => 'Éxito: %u consulta(s) procesada(s) por la subida del archivo',
    'ERROR_UPLOADQUERY_FAILED' => 'Consulta fallada: %u consulta(s) procesada(s) por la subida del archivo',
    'ERROR_UPLOADQUERY_IGNORED' => 'Nota: %u consulta(s) ignoradas por la subida del archivo. Mire la tabla "upgrade_exceptions" para más detalles.',
];

return $define;
