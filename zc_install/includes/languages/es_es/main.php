<?php
/**
 * @copyright Copyright 2003-2023 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: mc12345678 2022 Dec 14 Modified in v1.5.8a $
 */

return [
'META_TAG_TITLE' => 'Zen Cart&reg; Instalador',
'HTML_PARAMS' => 'dir="ltr" lang="es"',
'ZC_VERSION_STRING' => '%s v%s',
'TEXT_PAGE_HEADING_INDEX' => 'Inspección del Sistema',
'TEXT_INDEX_FATAL_ERRORS' => 'Antes de seguir, hay algunos problemas que necesitan ser resueltos',
'TEXT_INDEX_WARN_ERRORS' => 'Otros Asuntos:',
'TEXT_INDEX_WARN_ERRORS_ALT' => 'Algunos Asuntos:',
'TEXT_HEADER_MAIN' => 'CONSEJO: Los títulos de los campos son enlaces de ayuda.',
'TEXT_INDEX_HEADER_MAIN' => 'CONSEJO: Puede que haya más ayuda disponible pinchando en los <strong>títulos</strong> de algunos errores y avisos.',
'TEXT_INSTALLER_CHOOSE_LANGUAGE' => 'Idioma del Instalador',
'TEXT_HELP_CONTENT_CHOOSE_LANG' => 'El idioma seleccionado es sólo para el proceso de instalación.<br>Los archivos de instalación de la aplicación Zen Cart&reg; incluyen solamente el idioma Inglés de EE.UU. .<br> Zen Cart&reg; soporta múltiples idiomas (dependiendo en la disponibilidad del pack de idioma).',
'TEXT_PAGE_HEADING_SYSTEM_SETUP' => 'Configuración del Sistema',
'TEXT_SYSTEM_SETUP_ADMIN_SETTINGS' => 'Ajustes Admin',
'TEXT_SYSTEM_SETUP_CATALOG_SETTINGS' => 'Ajustes del Catálogo',
'TEXT_SYSTEM_SETUP_ADMIN_SERVER_DOMAIN' => 'Dominio del Servidor Admin',
'TEXT_SYSTEM_SETUP_ADMIN_SERVER_URL' => 'URL del Servidor Admin',
'TEXT_SYSTEM_SETUP_ADMIN_PHYSICAL_PATH' => 'Ruta Absoluta Admin',
'TEXT_SYSTEM_SETUP_CATALOG_ENABLE_SSL' => '(Marque la casilla para habilitar SSL para el catálogo.)',
'TEXT_SYSTEM_SETUP_CATALOG_HTTP_SERVER_DOMAIN' => 'Dominio HTTP Catálogo',
'TEXT_SYSTEM_SETUP_CATALOG_HTTP_URL' => 'UTL HTTP Catálogo',
'TEXT_SYSTEM_SETUP_CATALOG_HTTPS_SERVER_DOMAIN' => 'Dominio HTTPS Catálogo',
'TEXT_SYSTEM_SETUP_CATALOG_HTTPS_URL' => 'URL HTTPS Catálogo',
'TEXT_SYSTEM_SETUP_CATALOG_PHYSICAL_PATH' => 'Ruta Absoluta Catálogo',
'TEXT_SYSTEM_SETUP_AGREE_LICENSE' => 'Aceptar la licencia: ',
'TEXT_SYSTEM_SETUP_CLICK_TO_AGREE_LICENSE' => '(Marque la casilla para aceptar la licencia GPL 2. Pinche en el título de la izquierda para ver la licencia.)',
'TEXT_SYSTEM_SETUP_ERROR_DIALOG_TITLE' => 'Hay algunos problemas',
'TEXT_SYSTEM_SETUP_ERROR_DIALOG_CONTINUE' => 'Seguir de todos modos',
'TEXT_SYSTEM_SETUP_ERROR_CATALOG_PHYSICAL_PATH' => 'Parece que hay un problema con el ' . '%%TEXT_SYSTEM_SETUP_CATALOG_PHYSICAL_PATH%%',
'TEXT_PAGE_HEADING_DATABASE' => 'Configuración Base de Datos',
'TEXT_DATABASE_HEADER_MAIN' => 'NOTA: <b>ANTES</b> de seguir con la instalación, hay que crear la base de datos MySQL/Maria, y un usuario con contraseña con los permisos correspondientes. Pinche en los títulos a la izquierda para más ayuda.',
'TEXT_DATABASE_SETUP_SETTINGS' => 'Ajustes Básicos',
'TEXT_DATABASE_SETUP_DB_HOST' => 'Host BBDD: ',
'TEXT_DATABASE_SETUP_DB_USER' => 'Usuario BBDD: ',
'TEXT_DATABASE_SETUP_DB_PASSWORD' => 'Contraseña BBDD: ',
'TEXT_DATABASE_SETUP_DB_NAME' => 'Nombre BBDD: ',
'TEXT_DATABASE_SETUP_DEMO_SETTINGS' => 'Datos de Ejemplo',
'TEXT_DATABASE_SETUP_LOAD_DEMO' => 'Productos de Demostración',
'TEXT_DATABASE_SETUP_LOAD_DEMO_DESCRIPTION' => '(Marque la casilla para cargar los productos de demostración en este BBDD.)',
'TEXT_DATABASE_SETUP_ADVANCED_SETTINGS' => 'Ajustes Avanzados',
'TEXT_DATABASE_SETUP_DB_CHARSET' => 'Conjunto de caracteres BBDD: ',
'TEXT_DATABASE_SETUP_DB_PREFIX' => 'Prefijo de Tablas BBDD: ',
'TEXT_DATABASE_SETUP_SQL_CACHE_METHOD' => 'Método Cache SQL: ',
'TEXT_DATABASE_SETUP_JSCRIPT_SQL_ERRORS1' => 'Algunos errores ocurrieron en la ejecución de las consultas SQL de instalación SQL.',
'TEXT_DATABASE_SETUP_JSCRIPT_SQL_ERRORS2' => '<br>Revise los historiales de errores para más información.',
'TEXT_DATABASE_SETUP_CHARSET_OPTION_UTF8MB4' => 'utf8mb4 (ajustes por defecto)',
'TEXT_DATABASE_SETUP_CHARSET_OPTION_UTF8' => 'utf8 (formato más antiguo)',
'TEXT_DATABASE_SETUP_CHARSET_OPTION_LATIN1' => 'latin1 (formato muy antiguo)',
'TEXT_DATABASE_SETUP_CACHE_TYPE_OPTION_NONE' => 'Sin cache SQL',
'TEXT_DATABASE_SETUP_CACHE_TYPE_OPTION_DATABASE' => 'Base de Datos',
'TEXT_DATABASE_SETUP_CACHE_TYPE_OPTION_FILE' => 'Archivo',
'TEXT_EXAMPLE_DB_HOST' => 'normalmente "localhost"',
'TEXT_EXAMPLE_DB_USER' => 'introduzca el nombre de usuario MySQL para este BB.DD.',
'TEXT_EXAMPLE_DB_PWD' => 'introduzca la contraseña para este usuario MySQL',
'TEXT_EXAMPLE_DB_PREFIX' => 'es aconsejable dejarlo en blanco, o use zen_',
'TEXT_EXAMPLE_DB_NAME' => 'introduzca el nombre del BB.DD. MySQL',
'TEXT_EXAMPLE_CACHEDIR' => 'suele dirigir a una ruta similar a /your/user/home/public_html/zencart/cache folder',
'TEXT_DATABASE_SETUP_CONNECTION_ERROR_DIALOG_TITLE' => 'Hay algunos problemas',
'TEXT_CREATING_DATABASE' => 'Creando Base de Datos',
'TEXT_LOADING_CHARSET_SPECIFIC' => 'Cargando datos del Conjunto de Caracteres Específicos',
'TEXT_LOADING_DEMO_DATA' => 'Cargando Datos de Demostración',
'TEXT_LOADING_PLUGIN_DATA' => 'Cargando SQL para los Plugins incluidos',
'TEXT_LOADING_PLUGIN_UPGRADES' => 'Loading SQL for Plugin upgrades',
'TEXT_COULD_NOT_UPDATE_BECAUSE_ANOTHER_VERSION_REQUIRED' => 'No se pudo actualizar la BB.DD a la versión %s. Se ha detectado que la versión actual es v%s, es imprescindible que antes se lleven a cabo actualizaciones para llegar a la %s.',
'TEXT_PAGE_HEADING_ADMIN_SETUP' => 'Configuración Admin',
'TEXT_ADMIN_SETUP_USER_SETTINGS' => 'Configuración Usuario Admin',
'TEXT_ADMIN_SETUP_USER_NAME' => 'Nombre Superuser Admin: ',
'TEXT_EXAMPLE_USERNAME' => 'p.ej. Zenon',
'TEXT_ADMIN_SETUP_USER_EMAIL' => 'Email Admin Superuser: ',
'TEXT_EXAMPLE_EMAIL' => 'p.ej: my_email@example.com',
'TEXT_ADMIN_SETUP_USER_EMAIL_REPEAT' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Confirmar email: ',
'TEXT_ADMIN_SETUP_USER_PASSWORD' => 'Contraseña Admin: ',
'TEXT_ADMIN_SETUP_USER_PASSWORD_HELP' => '<strong>!TOME NOTA!</strong>: Más abajo se muestra la contraseña <em>temporal</em> para el Admin Superuser.',
'TEXT_ADMIN_SETUP_ADMIN_DIRECTORY' => 'Carpeta de archivos Admin: ',
'TEXT_ADMIN_SETUP_ADMIN_DIRECTORY_HELP_DEFAULT' => 'No se pudo renombrar la carpeta de los archivos Admin automáticamente. Tendrá que cambiar el nombre por defecto “admin” por un nombre difícil de adivinar antes de que pueda usar/entrar en la zona Admin.',
'TEXT_ADMIN_SETUP_ADMIN_DIRECTORY_HELP_NOT_ADMIN_CHANGED' => 'No se cambió el nombre de la carpeta de los archivos Admin dado que ya es distinto al nombre por defecto ("admin") ',
'TEXT_ADMIN_SETUP_ADMIN_DIRECTORY_HELP_CHANGED' => 'Es posible que el nombre de la carpeta de los archivos Admin haya sido cambiado automáticamente. El nombre actual/nuevo se muestra a continuación. Se puede cambiar el nombre a otro que no sea "admin" ',
'TEXT_PAGE_HEADING_COMPLETION' => 'Se ha terminado la instalación.',
'TEXT_COMPLETION_HEADER_MAIN' => '',
'TEXT_COMPLETION_INSTALL_COMPLETE' => '',
'TEXT_COMPLETION_INSTALL_LINKS_BELOW' => 'A continuación se muestran los enlaces a la zona Admin y de la tienda:',
'TEXT_COMPLETION_UPGRADE_COMPLETE' => 'Felicidades, la actualización se ha completado.',
'TEXT_COMPLETION_ADMIN_DIRECTORY_WARNING' => 'No se pudo renombrar la carpeta de los archivos Admin automáticamente. Tendrá que cambiar el nombre a uno difícil de adivinar antes de que pueda usar/entrar en la zona Admin',
'TEXT_COMPLETION_INSTALLATION_DIRECTORY_WARNING' => 'Por seguridad, hay que borrar la carpeta "zc_install" <strong>ahora mismo</strong> del servidor.',
'TEXT_COMPLETION_INSTALLATION_DIRECTORY_EXPLANATION' => 'Para evitar que personas ajenas puedan ejecutar el proceso de instalación otra vez, no es posible acceder a la zona del Admin hasta que la carpeta "zc_install" haya sido borrada.',
'TEXT_COMPLETION_CATALOG_LINK_TEXT' => 'Su Tienda',
'TEXT_COMPLETION_ADMIN_LINK_TEXT' => 'Su Admin',
'TEXT_PAGE_HEADING_DATABASE_UPGRADE' => 'Actualización de la Base de Datos',
'TEXT_DATABASE_UPGRADE_HEADER_MAIN' => '',
'TEXT_DATABASE_UPGRADE_STEPS_DETECTED' => 'Se ha comprobado la base de datos y el siguiente listado muestra los pasos que hemos detectado que son necesarios para actualizar su BB.DD.<br>Asegúrese de que tiene un backup <em>verificado</em> del BB.DD. antes de seguir con la actualización.',
'TEXT_DATABASE_UPGRADE_LEGEND_UPGRADE_STEPS' => 'Confirme los pasos requeridos',
'TEXT_DATABASE_UPGRADE_ADMIN_CREDENTIALS' => 'Parámetros Admin (SuperUser)',
'TEXT_VALIDATION_ADMIN_CREDENTIALS' => 'Para autorizar la actualización, debe introducir un nombre de usuario y contraseña del Admin Zen Cart que tenga permisos de SuperUser.',
'TEXT_HELP_TITLE_UPGRADEADMINNAME' => 'TEXT_DATABASE_UPGRADE_ADMIN_CREDENTIALS',
'TEXT_HELP_CONTENT_UPGRADEADMINNAME' => 'Para autorizar la actualización, debe introducir un nombre de usuario y contraseña del Admin Zen Cart que tenga permisos de SuperUser (sin restricciones).<br>Son el nombre de usuario y contraseña que usa para entrar en el Admin.<br>(NO son las credenciales FTP ni de las de la cuenta del hosting. Nadie sabe esa contraseña aparte de usted / el propietario de la tienda. No se puede obtener de la empresa del hosting.)<br>Si no tiene acceso al Admin y tampoco sabe ninguna contraseña, es posible efectuar un reseteo manipulando la base de datos directamente siguiendo los pasos de este tutorial: <a href="https://docs.zen-cart.com/user/troubleshooting/reset_admin_password/"  rel="noopener" target="_blank">https://docs.zen-cart.com/user/troubleshooting/reset_admin_password/</a>.',
'TEXT_DATABASE_UPGRADE_ADMIN_USER' => 'Nombre de usuario',
'TEXT_DATABASE_UPGRADE_ADMIN_PASSWORD' => 'Contraseña',
'TEXT_HELP_TITLE_UPGRADEADMINPWD' => 'Contraseña Admin para la Actualización',
'TEXT_HELP_CONTENT_UPGRADEADMINPWD' => 'TEXT_HELP_CONTENT_UPGRADEADMINNAME',
'TEXT_VALIDATION_ADMIN_PASSWORD' => 'Se requiere una contraseña válida',
'TEXT_ERROR_ADMIN_CREDENTIALS' => 'No se pudieron verificar las credenciales Admin suministradas.<br><br>' . 'TEXT_HELP_CONTENT_UPGRADEADMINNAME',
'TEXT_UPGRADE_IN_PROGRESS' => 'Actualización en proceso. El progreso de cada paso está indicado a continuación ...',
'TEXT_UPGRADE_TO_VER_X_COMPLETED' => 'Actualización a la versión %s completada.',
'TEXT_NO_REMAINING_UPGRADE_STEPS' => '!Felicidades! Parece que no se precisan más actualizaciones.',
'TEXT_CONTINUE' => 'Continuar',
'TEXT_CANCEL' => 'Cancelar',
'TEXT_CONTINUE_FIX' => 'Volver y Corregir',
'TEXT_REFRESH' => 'Refrescar',
'TEXT_UPGRADE' => 'Actualizar ...',
'TEXT_CLEAN_INSTALL' => 'Instalar desde cero (“Clean Install”)',
'TEXT_UPDATE_CONFIGURE' => 'Actualizar configure.php',
'TEXT_NAVBAR_SYSTEM_INSPECTION' => 'Inspección del Sistema',
'TEXT_NAVBAR_SYSTEM_SETUP' => 'Configuración del Sistema',
'TEXT_NAVBAR_DATABASE_UPGRADE' => 'Actualización de la Base de Datos',
'TEXT_NAVBAR_DATABASE_SETUP' => 'Ajustes de la Base de Datos',
'TEXT_NAVBAR_ADMIN_SETUP' => 'Ajustes Admin',
'TEXT_NAVBAR_COMPLETION' => 'Completado',
'TEXT_INDEX_ALERTS' => 'Avisos',
'TEXT_ERROR_PROBLEMS_WRITING_CONFIGUREPHP_FILES' => 'Hubo problemas en la preparación de los archivos configure.php. ¡LA INSTALACIÓN NO SE COMPLETÓ!.<br>Es posible que hayan archivos mostrando el problema en la carpeta /logs/.',
'TEXT_ERROR_COULD_NOT_READ_CFGFILE_TEMPLATE' => 'No se pudo leer master config file layout: %s. Asegúrese de que el archivo existe y de que se puede leer.',
'TEXT_ERROR_COULD_NOT_WRITE_CONFIGFILE' => 'No se pudo editar el archivo config generado: %s. Asegúrese de que el archivo existe y de que se puede editar. ',
'TEXT_ERROR_STORE_CONFIGURE' => 'Archivo catálogo /includes/configure.php no existe /no se puede leer / no se puede editar',
'TEXT_ERROR_ADMIN_CONFIGURE' => 'Archivo admin /admin/includes/configure.php no existe /no se puede leer / no se puede editar ',
'TEXT_ERROR_PHP_VERSION' => str_replace(["\n", "\r"], '', 'Versión PHP Incompatible.<p>La versión PHP que esta utilizando (' . PHP_VERSION . ') no es compatible.</p><p>Está versión Zen Cart&reg; es compatible con versiones PHP 7.3 hasta 8.2, aunque 8.1.x o mayor está recomendado.<br>Revise la página web <a href="https://www.zen-cart.com">www.zen-cart.com</a> para comprobar la versión más actual de Zen Cart&reg;.</p><p>Revise <a href="https://docs.zen-cart.com/user/first_steps/server_requirements/">Zen Cart Server Requirements</a> para más información sobre compatibilidad y los requisitos.</p>'),
'TEXT_ERROR_PHP_VERSION_RECOMMENDED' => '<p>Para mayor seguridad y compatibilidad debería usar PHP %s o mayor. El proceso de instalación puede continuar, pero debería tomar en cuenta que su tienda no cumplirá con los requisitos PCI si está utilizando software no actualizado.</p><p>Consulte <a href="https://www.php.net/supported-versions">página web PHP</a> para más información.</p><p>Revise <a href="https://docs.zen-cart.com/user/first_steps/server_requirements/">Zen Cart Server Requirements</a> para más detalles sobe compatibilidad y requisitos.</p>',
'TEXT_ERROR_PHP_VERSION_MIN' => 'Versión PHP debería ser igual o mayor que %s',
'TEXT_ERROR_PHP_VERSION_MAX' => 'Versión PHP debería ser menor or igual que %s',
'TEXT_ERROR_MYSQL_SUPPORT' => 'Hay problemas con la configuración MySQL (mysqli). Parece que en su servidor falta la extensión mysqli para PHP: sin la extensión no se puede conectar a la base de datos. Su empresa de hosting debería solucionarlo.',
'TEXT_ERROR_PDOMYSQL_SUPPORT' => 'Hay problemas con el soporte MySQL (pdo_mysql). Parece que el servidor falta la extensión pdo_mysql extension para PHP, no se puede conectar a la base de datos sin esta extensión. Debería pedir ayuda a su empresa de hosting.',
'TEXT_ERROR_PDOSQLITE_SUPPORT' => 'Parece que el servidor falta la extensión pdo_sqlite extension para PHP que se usa para almacenar datos y pruebas. Debería pedir ayuda a su empresa de hosting.',
'TEXT_ERROR_PHPZIP_SUPPORT' => 'Parece que a su servidor le falta la extensión php-zip para PHP que se usa para descomprimir archivos zip al instalar las imágenes de datos de demostración. Hable con su empresa de hosting para obtener ayuda.',
'TEXT_ERROR_LOG_FOLDER' => DIR_FS_LOGS . ' no se puede escribir',
'TEXT_ERROR_CACHE_FOLDER' => DIR_FS_SQL_CACHE . ' no se puede escribir',
'TEXT_ERROR_IMAGES_FOLDER' => '/images/ no se puede escribir',
'TEXT_ERROR_DEFINEPAGES_FOLDER' => '/includes/languages/english/html_includes/ no se puede escribir',
'TEXT_ERROR_MEDIA_FOLDER' => '/media/ folder no se pude escribir',
'TEXT_ERROR_PUB_FOLDER' => DIR_FS_DOWNLOAD_PUBLIC . ' no se puede escribir',
'TEXT_ERROR_NGINX_FOLDER' => '/zc_install/includes/nginx_conf/ folder no se puede escribir',
'TEXT_ERROR_CONFIGURE_REQUIRES_UPDATE' => 'El archivo configure.php tiene una estructura obsoleta, precisa actualizarlo antes de continuar. ',
'TEXT_ERROR_HTACCESS_SUPPORT' => 'El soporte para archivos ".htaccess" no está habilitado o no está funcionando correctamente.<br>[ <i><b>NOTA:</b> En el caso de usar un servidor Nginx, siga hasta <u>EL FINAL</u> del proceso de instalación, cuando se generarán instrucciones específicas como resolver este asunto.<i> ]',
'TEXT_ERROR_SESSION_SUPPORT' => 'Problemas con el soporte de sesiones',
'TEXT_ERROR_SESSION_SUPPORT_USE_TRANS_SID' => 'parámetro ini session.use_trans_sid está habilitado',
'TEXT_ERROR_SESSION_SUPPORT_AUTO_START' => 'parámetro ini session.auto_start está habilitado',
'TEXT_ERROR_DB_CONNECTION' => 'Problemas con la Conexión a la Base de Datos',
'TEXT_ERROR_DB_CONNECTION_DEFAULT' => 'Problemas posibles con la conexión a la base de datos',
'TEXT_ERROR_DB_CONNECTION_UPGRADE' => 'Problemas con la base de datos, basados en los valores del configure.php actual',
'TEXT_ERROR_SET_TIME_LIMIT' => 'max_execution_time no habilitado',
'TEXT_ERROR_GD' => 'Extensión GD no habilitado',
'TEXT_ERROR_JSON' => 'Extensión JSON no habilitado. Es necesario para procesando datos en muchas partes de Zen Cart.',
'TEXT_ERROR_FILEINFO' => 'Extensión Fileinfo no habilitado. Está utilizado para calculando tamaños de archivos.',
'TEXT_ERROR_ZLIB' => 'Extensión Zlib Extension no habilitado',
'TEXT_ERROR_OPENSSL' => 'Extensión Openssl no habilitado',
'TEXT_ERROR_CURL' => 'Problemas con la extensión CURL - PHP indica que CURL no está presente.',
'TEXT_ERROR_UPLOADS' => 'Extensión Upload en PHP no habilitado',
'TEXT_ERROR_XML' => 'Extensión XML en PHP no habilitado',
'TEXT_ERROR_GZIP' => 'Extensión GZip en PHP no habilitado<br>[ <i><b>NOTA:</b> Si está utilizando Nginx y utilizando GZip dentro de Ngiz, quizás no es relevante.<i> ]',
'TEXT_ERROR_EXTENSION_NOT_LOADED' => 'Extensión %s no parece estar instalado',
'TEXT_ERROR_FUNCTION_DOES_NOT_EXIST' => 'Parece que la función PHP %s no existe',
'TEXT_ERROR_CURL_LIVE_TEST' => 'No se pudo usar CURL para contactar con un servidor remoto',
'TEXT_ERROR_HTTPS' => 'CONSEJO PRO: Si es posible, ya debería haber instalado un certificado SSL para ejecutar el instalador desde "https://"',
'TEXT_ERROR_SUCCESS_EXISTING_CONFIGURE' => 'Se ha encontrado un archivo configure.php existente, indicando una instalación previa.',
'TEXT_ERROR_SUCCESS_EXISTING_CONFIGURE_NO_UPDATE' => ' Se ha encontrado un archivo configure.php existente y la base de datos parece actualizada. Esto puede indicar que esta es una tienda en producción. ¡El proceso de instalación borrará todo el contenido de la base de datos! ¿Está seguro que quieres continuar??',
'TEXT_ERROR_MULTIPLE_ADMINS_NONE_SELECTED' => 'Parece que hay más de un directorio que contiene archivos de Admin. Debería borrar las copias/versiones viejas o elegir la versión actual y refrescar la página.',
'TEXT_ERROR_MULTIPLE_ADMINS_SELECTED' => ' Parece que hay más de un directorio que contiene archivos de Admin. Si el directorio indicado/preseleccionado es incorrecto, elija el correcto y refresque la página.',
'TEXT_ERROR_MYSQL_VERSION' => 'The server database does not meet the minimum version. MySQL: %s or MariaDB: %s',
'TEXT_ERROR_SUCCESS_NO_ERRORS' => 'No se han encontrado problemas con el sistema. Puede seguir con la instalación.',
'TEXT_UPGRADE_INFO' => '%%TEXT_UPGRADE%%: will inspect your database and subsequently offer the steps required to upgrade to the current version (adding new fields/modifying existing fields). This is intended to be a non-destructive process, but as with all modifications you must ensure you have a verified backup of your database available before proceeding.',
'TEXT_CLEAN_INSTALL_INFO' => '%%TEXT_CLEAN_INSTALL%%: will revert the database to a new state, deleting all data. Optionally, the demonstration data may be loaded as part of this process.',
'TEXT_FORM_VALIDATION_REQUIRED' => 'Obligatorio',
'TEXT_FORM_VALIDATION_AGREE_LICENSE' => 'Debe aceptar los términos de la licencia. ',
'TEXT_FORM_VALIDATION_CATALOG_HTTPS_URL' => 'Es necesaria una URL aquí, a pesar de que no tiene SSL habilitado temporalmente. Intente usar el nombre normal del dominio. ',
'TEXT_NAVBAR_INSTALLATION_INSTRUCTIONS' => 'Instrucciones de Instalación',
'TEXT_NAVBAR_FORUM_LINK' => 'Foro',
'TEXT_HELP_TITLE_HTACCESSSUPPORT' => 'Soporte .htaccess',
'TEXT_HELP_CONTENT_HTACCESSSUPPORT' => 'Parece que hay un problema con el soporte para archivos ".htaccess".<br>Hay archivos y directorios importantes que suelen estar protegidos por los permisos/reglas definidos en los archivos ".htaccess" incluido en los archivos Zen Cart. Actualmente se puede acceder a estos archivos y directorios sin restricción.<br><br>Razones Posibles:
<ul style="list-style-type:square"><li>Quizás Apache no es el servidor (solamente Apache utiliza archivos ".htaccess"), o,</li><li>El soporte para ".htaccess" está deshabilitado o no configurado correctamente, o,</li><li>Los archivos ".htaccess" incluidos con Zen Cart no han sido subidos a la página web.<br><strong><i>Archivos nombrados con ".", como los archivos ".htaccess", suelen estar considerados como "escondidos". Es posible que su programa FTP no haya subido los archivos si la opción de mostrarlos/transferirlos no está activada.</i></strong></li></ul><br>
Se puede continuar con la instalación a pesar de este asunto, pero en el caso de que su servidor web utilice Apache, los archivos de la tienda no estarán tan seguro como deberían.<br><br>En el caso de que esté utilizando un servidor web Nginx, puede continuar con la instalación. Al final del proceso, debería usar los directivos disponibles a través del enlace "<strong>Información Importante de Seguridad Nginx </strong>" en la página final de la instalación.<br><br>Si no sabe que servidor wen está en uso en su hosting, debería asumir que es Apache y pedir asistencia del servicio de hosting para habilitar el soporte para archivos ".htaccess".<br><br>',
'TEXT_HELP_TITLE_FOLDERPERMS' => 'Permisos de Directorios',
'TEXT_HELP_CONTENT_FOLDERPERMS' => 'Los permisos de este directorio no están configurados correctamente. Este directorio debe tener permiso de escritura. Hay más información sobre permisos en <a href="https://docs.zen-cart.com/user/installing/permissions/"  rel="noopener" target="_blank">https://docs.zen-cart.com/user/installing/permissions/</a>',
'TEXT_HELP_TITLE_CONNECTIONDATABASECHECK' => 'Conexión Inicial Base de Datos',
'TEXT_HELP_CONTENT_CONNECTIONDATABASECHECK' => 'Intentó conectar a la bb.dd utilizando una conexión localhost. El fallo no implica que no esté funcionando: algunos servicios de hosting precisan un IP o hostname para acceder al bb.dd. MySQL.<br><br>en caso de que el acceso sea por localhost, debería comprobar que MySQL está funcionando correctamente. ',
'TEXT_HELP_TITLE_CHECKCURL' => '%%TEXT_ERROR_CURL%%',
'TEXT_HELP_CONTENT_CHECKCURL' => 'CURL es un programa que se está ejecutando de fondo, utilizado por PHP para conectar a servidores/servicios externos como pasarelas de pagos, APIs de servicios de mensajería etc. La prueba de CURL no pudo establecer una conexión. Quizás hay un problema con la configuración de su servidor web. Debería contactar con el servicio de hosting para investigar la configuración de soporte CURL.<br><br>En el caso de que esté utilizando un servidor local para desarrollo, no es sorprendente que no funcione. No precisa CURL para el desarrollo hasta que pruebas de transacciones externas sean necesarias. ',
'TEXT_HELP_TITLE_ADMINSERVERDOMAIN' => 'Dominio Servidor Admin',
'TEXT_HELP_CONTENT_ADMINSERVERDOMAIN' => 'Introduzca el nombre del dominio de acceso a la zona Admin. Es muy aconsejable que sea a través de https://. Consulte con el servicio de hosting para habilitarlo. ',
'TEXT_HELP_TITLE_ENABLESSLCATALOG' => '¿Use SSL para la tienda?',
'TEXT_HELP_CONTENT_ENABLESSLCATALOG' => 'Marque la casilla si SSL está activado en su sitio web y quiere que Zen Cart&reg; lo utilice en las páginas que contienen datos privados como Login, Mi Cuenta, Checkout, etc.',
'TEXT_HELP_TITLE_HTTPSERVERCATALOG' => 'Dominio Servidor HTTP Tienda',
'TEXT_HELP_CONTENT_HTTPSERVERCATALOG' => 'Introduzca el domino principal del URL de la tienda. p.ej.: http://www.example.com',
'TEXT_HELP_TITLE_HTTPURLCATALOG' => 'HTTP URL Tienda',
'TEXT_HELP_CONTENT_HTTPURLCATALOG' => 'Introduzca el URL completo de la tienda.  p.ej.: http://www.example.com/zencart/',
'TEXT_HELP_TITLE_HTTPSSERVERCATALOG' => ' Dominio Servidor HTTPS Tienda ',
'TEXT_HELP_CONTENT_HTTPSSERVERCATALOG' => 'Si ha marcado la casilla superior para usar SLL en el checkout, debe introducir aquí el dominio principal https de la tienda.<br>Típicamente sería:<br>https://www.example.com<br>https://www.hostingcompany.com/~username<br>https://www.hostingcompany.com/~username/subdomain.com',
'TEXT_HELP_TITLE_HTTPSURLCATALOG' => 'HTTPS URL Tienda',
'TEXT_HELP_CONTENT_HTTPSURLCATALOG' => 'Introduzca el URL https completo de la tienda. Típicamente es igual que el dominio https, más el directorio donde están los archivos de la tienda. p.ej: https://www.example.com/zencart',
'TEXT_HELP_TITLE_PHYSICALPATH' => 'Ruta Real Tienda',
'TEXT_HELP_CONTENT_PHYSICALPATH' => 'Esta es la ruta (del servidor) a los archivos Zen Cart&reg;, p.ej. "/users/home/public_html/zencart". <br>¡Es imprescindible tener la ruta correcta! ',
'TEXT_HELP_TITLE_DBHOST' => 'Host Servidor Base de Datos',
'TEXT_HELP_CONTENT_DBHOST' => '¿Qué es el host de la base de datos? Puede ser un hostname como "localhost" (que es lo más común) o "db1.myserver.com", o un IP local (al servidor), como "192.168.0.1".<br>La empresa de hosting puede informarle de los datos correctos y el nombre suele esta mostrado en el panel de control del hosting donde se crean las bases de datos y se asignan los permisos.',
'TEXT_HELP_TITLE_DBUSER' => 'Usuario Base de Datos',
'TEXT_HELP_CONTENT_DBUSER' => '¿Cual es el nombre del usuario para conectar a esta base de datos, p.ej. "myusername_store"?<br>Por razones de seguridad y el cumplimiento del PCI, NUNCA deberá usar “root”.<br><br>El usuario precisa los permisos: ALTER, CREATE, DELETE, DROP, INDEX, INSERT, LOCK TABLES, SELECT, UPDATE (o simplemente permite "Grant All").',
'TEXT_HELP_TITLE_DBPASSWORD' => 'Contraseña del Usuario Base de Datos',
'TEXT_HELP_CONTENT_DBPASSWORD' => '¿Cual es la contraseña que ha puesto a este usuario MySQL?',
'TEXT_HELP_TITLE_DBNAME' => 'Nombre Base de Datos',
'TEXT_HELP_CONTENT_DBNAME' => '¿Cual es el nombre de la base de datos que ha creado para Zen Cart? P.ej "zencart" o "myaccount_zencart" o "zencart_157”.<br>NOTA: Debe crear esta bb.dd. ANTES de poder continuar con la instalación.<br>Se puede crear la bb.dd. en el panel del control del hosting.',
'TEXT_HELP_TITLE_DEMODATA' => '%%TEXT_DATABASE_SETUP_LOAD_DEMO%%',
'TEXT_HELP_CONTENT_DEMODATA' => 'El Demo Data instala ejemplos de categorías y productos básico, con atributos, precios y rebajas para demostrar las opciones disponibles y para facilitar pruebas de desarrollo. <br><br>Se pueden borrar los productos manualmente o (mejor) usar este programa de instalación otra vez para resetear la base de datos vacía para sus productos.',
'TEXT_HELP_TITLE_DBCHARSET' => 'Conjunto de Caracteres Base de Datos',
'TEXT_HELP_CONTENT_DBCHARSET' => 'La mayoría de las tiendas utilizarían utf8mb4 or utf8.<br>Si no tiene una razón en concreto para usar otro conjunto, utilice utf8mb4.',
'TEXT_HELP_TITLE_DBPREFIX' => 'Prefijo de las Tablas del Base de Datos',
'TEXT_HELP_CONTENT_DBPREFIX' => '¿Cual es el prefijo de las tablas de la base de datos? Anteriormente era común en las cuentas de hosting compartidos usar una base de datos para varias aplicaciones. Para asegurar una separación entre las aplicaciones, se utilizan prefijos en las tablas p.ej.: <strong>zen_</strong><br><strong class="alert">Nota: déjelo en blanco si no es necesario',
'TEXT_HELP_TITLE_SQLCACHEMETHOD' => 'Método Cache SQL',
'TEXT_HELP_CONTENT_SQLCACHEMETHOD' => 'Valor por defecto es "none”. Alternativas son "database" o "file". Si su servidor es muy lento, utilice "none". Si el sitio tiene bastante tráfico, utilice "database". Si su sitio tiene mucho tráfico, utilice "file". ',
'TEXT_HELP_TITLE_SQLCACHEDIRECTORY' => 'Directorio Cache SQL',
'TEXT_HELP_CONTENT_SQLCACHEDIRECTORY' => 'Introduzca el directorio para usar con un cache tipo “file”. Es un directorio en el servidor con permisos de escribir para que el servidor pueda escribir los archivos.',
'TEXT_HELP_TITLE_ADMINUSER' => 'Nombre Superuser Admin Zen Cart',
'TEXT_HELP_CONTENT_ADMINUSER' => 'Este es el nombre del usuario Admin primario. Este usuario gestionará los otros usuarios y tendrá permisos sin restricciones.',
'TEXT_HELP_TITLE_ADMINEMAIL' => 'Admin Superuser Email',
'TEXT_HELP_CONTENT_ADMINEMAIL' => 'En el caso de perder/olvidarse la contraseña, se utilizará esta dirección para facilitar una contraseña nueva.',
'TEXT_HELP_TITLE_ADMINEMAIL2' => 'Repite Email',
'TEXT_HELP_CONTENT_ADMINEMAIL2' => 'Repite el email para evitar errores',
'TEXT_HELP_TITLE_ADMINPASSWORD' => 'Contraseña Admin Superuser',
'TEXT_HELP_CONTENT_ADMINPASSWORD' => '!COPIAR/GUARDAR ESTA CONTRASEÑA AHORA! Es posible que tenga que cambiarla en el primer login. Si no, se puede cambiar una vez dentro de la zona Admin.',
'TEXT_HELP_TITLE_ADMINDIRECTORY' => 'Directorio Admin',
'TEXT_HELP_CONTENT_ADMINDIRECTORY' => 'El instalador renombra el directorio de los archivos admin para ofrecer otra capa de seguridad. Se puede renombrar el directorio a cualquier nombre aparte de "admin".',
'TEXT_VERSION_CHECK_NEW_VER' => 'Versión Nueva Disponible: v',
'TEXT_VERSION_CHECK_NEW_PATCH' => 'Actualización Nueva Disponible: v',
'TEXT_VERSION_CHECK_PATCH' => 'actualización',
'TEXT_VERSION_CHECK_DOWNLOAD' => 'Descarga desde aquí',
'TEXT_VERSION_CHECK_CURRENT' => 'Su versión Zen Cart&reg; parece ser actual',
'TEXT_ERROR_NEW_VERSION_AVAILABLE' => 'Hay una versión Zen Cart&reg; MÁS ACTUAL disponible desde <a href="https://www.zen-cart.com/files" style="text-decoration:underline" rel="noopener" target="_blank">www.zen-cart.com/files</a>',
'TEXT_DB_VERSION_NOT_FOUND' => '¡No se encontró una base de datos Zen Cart para versión %s!',
'REASON_TABLE_ALREADY_EXISTS' => 'No se puede CREATE tabla %s porque ya existe.',
'REASON_TABLE_DOESNT_EXIST' => 'No se puede DROP tabla %s porque no existe.',
'REASON_TABLE_NOT_FOUND' => 'No se puede ejecutar porque tabla %s no existe.',
'REASON_CONFIG_KEY_ALREADY_EXISTS' => 'No se puede INSERT configuration_key "%s" porque ya existe',
'REASON_COLUMN_ALREADY_EXISTS' => 'No se puede ADD columna %s porque ya existe.',
'REASON_COLUMN_DOESNT_EXIST_TO_DROP' => 'No se puede DROP columna %s porque no existe.',
'REASON_COLUMN_DOESNT_EXIST_TO_CHANGE' => 'No se puede CHANGE columna %s porque no existe.',
'REASON_PRODUCT_TYPE_LAYOUT_KEY_ALREADY_EXISTS' => 'No se puede INSERT prod-type-layout configuration_key "%s" porque ya existe',
'REASON_INDEX_DOESNT_EXIST_TO_DROP' => 'No se puede DROP index %s en tabla %s porque no existe.',
'REASON_PRIMARY_KEY_DOESNT_EXIST_TO_DROP' => 'No se puede DROP primary key en tabla %s porque no existe.',
'REASON_INDEX_ALREADY_EXISTS' => 'No se puede añadir index %s a tabla %s porque ya existe.',
'REASON_PRIMARY_KEY_ALREADY_EXISTS' => 'No se puede añadir primary key a tabla %s porque un primary key ya existe.',
'REASON_CONFIG_GROUP_KEY_ALREADY_EXISTS' => 'No se puede insertar configuration_group_key "%s" porque ya existe.',
'REASON_CONFIG_GROUP_ID_ALREADY_EXISTS' => ' No se puede insertar configuration_group_id "%s" porque ya existe.',
'TEXT_COMPLETION_NGINX_TEXT' => '<u>Nginx Información Importante sobre la Seguridad</u>',
'TEXT_HELP_TITLE_NGINXCONF' => 'Pautas de Seguridad para Zen Cart en servidores Nginx',
'TEXT_HELP_CONTENT_NGINXCONF' => '<p>Los archivos Zen Cart incluyen medidas de seguridad para servidores Apache.<br>
A continuación, hay medidas similares para servidores Nginx.</p>
<hr>
<ul style="list-style-type:square">
<li>En el directorio <strong>"zc_install/includes/nginx_conf"</strong>, abra los archivos de texto:
  <ul style="list-style-type:circle">
    <li>zencart_ngx_http.conf</li>
    <li>zencart_ngx_server.conf</li>
  </ul>
</li>
<li>Añada el contenido de <strong>"zencart_ngx_http.conf"</strong> al apartado <strong>"http"</strong> del archivo de configuración Nginx.
  <ul style="list-style-type:circle">
    <li>Modifique las duraciones de cache en el apartado <strong>"map"</strong> como sea necesario</li>
  </ul>
</li>
<li>Añada el contenido de <strong>"zencart_ngx_server.conf"</strong> al apartado <strong>"server"</strong> para Zen Cart en el archivo de configuración Nginx.
  <ul style="list-style-type:circle">
    <li>Se pueden usar estos directivos para SSL / non-SSL server blocks.</li>
    <li>Los directivos deben estar puestos al principio del server block, antes de otros location blocks.
      <ul style="list-style-type:none">
        <li>- El orden en el que aparecen los directivos es importante.</li>
        <li>- No modifique el orden si no entiende completamente las implicaciones.</li>
      </ul>
  </ul>
</li>
<li>Es especialmente crítico que estos directivos aparezcan antes de cualquier blocks genéricos php como ...<br>
  <pre><code>location ~ \.php { <strong>Nginx PHP Handling Directives;</strong> }</code></pre>
  ... u otros location blocks que pueden ser procesado antes.</li>
<li>En vez de esto, edite el location block <strong>"zencart_php_handler"</strong> para cuadrar con sus Nginx PHP Handling Directives.
  <ul style="list-style-type:circle">
    <li>Duplique el contenido de PHP handling location block existente.
      <ul style="list-style-type:none">
        <li>- Es decir, copiar y pegar los Nginx PHP Handling Directives equivalentes.</li>
        <li>- Si no tiene un PHP handling location block existente, revise las guías disponibles, por ejemplo en <a href="https://www.nginx.com/resources/wiki/start/topics/examples/phpfcgi/" rel="noopener" target="_blank"><u>The Nginx Website</u></a>.</li>
      </ul>
    </li>
  </ul>
</li>
<li>En el caso de usar plugins para "Pretty URLs", insertar los directivos relevantes en el block relevante.</li>
<li>Recargar Nginx.
  <ul style="list-style-type:circle">
    <li>Haga esto antes de cerrar este cuadro de texto.</li>
    <li>Acuérdese de borrar el directorio <strong>"zc_install"</strong> una vez completado.
      <ul style="list-style-type:none">
	<li>- Incluyendo el directorio <strong>"zc_install/includes/nginx_conf"</strong> y su contenido.</li>
      </ul>
    </li>
  </ul>
</li>
<ol>
</div>
<div class="alert-box alert"><strong>IMPORTANTE:</strong> Estos location blocks deben estar <strong>ANTES</strong> de cualquier otro location blocks en la configuración Nginx para Zen Cart.</div>
<hr>',
'TEXT_HELP_TITLE_AGREETOTERMS' => 'Aceptar los términos de la Licencia GNU',
'TEXT_HELP_CONTENT_AGREETOTERMS' => '<a href="http://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html" rel="noopener" target="_blank">Original GPL 2.0 text</a>
<h2>The GNU General Public License (GPL)</h2>
<h3>Version 2, June 1991</h3>
<tt>
<p> Copyright (C) 1989, 1991 Free Software Foundation, Inc.<br>
  59 Temple Place, Suite 330, Boston, MA 02111-1307 USA</p>
<p> Everyone is permitted to copy and distribute verbatim copies<br>
  of this license document, but changing it is not allowed.</p>
<strong>
<p>Preamble</p>
</strong>
<p>The licenses for most software are designed to take away your freedom to share and change it. By contrast, the GNU General Public License is intended to guarantee your freedom to share and change free software--to make sure the software is free for all its users. This General Public License applies to most of the Free Software Foundation\'s software and to any other program whose authors commit to using it. (Some other Free Software Foundation software is covered by the GNU Library General Public License instead.) You can apply it to your programs, too.</p>
<p>When we speak of free software, we are referring to freedom, not price. Our General Public Licenses are designed to make sure that you have the freedom to distribute copies of free software (and charge for this service if you wish), that you receive source code or can get it if you want it, that you can change the software or use pieces of it in new free programs; and that you know you can do these things.</p>
<p> To protect your rights, we need to make restrictions that forbid anyone to deny you these rights or to ask you to surrender the rights. These restrictions translate to certain responsibilities for you if you distribute copies of the software, or if you modify it.</p>
<p>For example, if you distribute copies of such a program, whether gratis or for a fee, you must give the recipients all the rights that you have. You must make sure that they, too, receive or can get the source code. And you must show them these terms so they know their rights.</p>
<p>We protect your rights with two steps: (1) copyright the software, and (2) offer you this license which gives you legal permission to copy, distribute and/or modify the software.</p>
<p>Also, for each author\'s protection and ours, we want to make certain that everyone understands that there is no warranty for this free software. If the software is modified by someone else and passed on, we want its recipients to know that what they have is not the original, so that any problems introduced by others will not reflect on the original authors\' reputations.</p>
<p>Finally, any free program is threatened constantly by software patents. We wish to avoid the danger that redistributors of a free program will individually obtain patent licenses, in effect making the program proprietary. To prevent this, we have made it clear that any patent must be licensed for everyone\'s free use or not licensed at all.</p>
<p>The precise terms and conditions for copying, distribution and modification follow.</p>
<strong>
<p>TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION</p>
</strong>
<p><strong>0</strong>. This License applies to any program or other work which contains a notice placed by the copyright holder saying it may be distributed under the terms of this General Public License. The "Program", below, refers to any such program or work, and a "work based on the Program" means either the Program or any derivative work under copyright law: that is to say, a work containing the Program or a portion of it, either verbatim or with modifications and/or translated into another language. (Hereinafter, translation is included without limitation in the term "modification".) Each licensee is addressed as "you".</p>
<p>Activities other than copying, distribution and modification are not covered by this License; they are outside its scope. The act of running the Program is not restricted, and the output from the Program is covered only if its contents constitute a work based on the Program (independent of having been made by running the Program). Whether that is true depends on what the Program does.</p>
<p><strong>1</strong>. You may copy and distribute verbatim copies of the Program\'s source code as you receive it, in any medium, provided that you conspicuously and appropriately publish on each copy an appropriate copyright notice and disclaimer of warranty; keep intact all the notices that refer to this License and to the absence of any warranty; and give any other recipients of the Program a copy of this License along with the Program.</p>
<p>You may charge a fee for the physical act of transferring a copy, and you may at your option offer warranty protection in exchange for a fee.</p>
<p> <strong>2</strong>. You may modify your copy or copies of the Program or any portion of it, thus forming a work based on the Program, and copy and distribute such modifications or work under the terms of Section 1 above, provided that you also meet all of these conditions:</p>
<blockquote>
  <p>a) You must cause the modified files to carry prominent notices stating that you changed the files and the date of any change.</p>
  <p>b) You must cause any work that you distribute or publish, that in whole or in part contains or is derived from the Program or any part thereof, to be licensed as a whole at no charge to all third parties under the terms of this License.</p>
  <p>c) If the modified program normally reads commands interactively when run, you must cause it, when started running for such interactive use in the most ordinary way, to print or display an announcement including an appropriate copyright notice and a notice that there is no warranty (or else, saying that you provide a warranty) and that users may redistribute the program under these conditions, and telling the user how to view a copy of this License. (Exception: if the Program itself is interactive but does not normally print such an announcement, your work based on the Program is not required to print an announcement.)</p>
</blockquote>
<p>These requirements apply to the modified work as a whole. If identifiable sections of that work are not derived from the Program, and can be reasonably considered independent and separate works in themselves, then this License, and its terms, do not apply to those sections when you distribute them as separate works. But when you distribute the same sections as part of a whole which is a work based on the Program, the distribution of the whole must be on the terms of this License, whose permissions for other licensees extend to the entire whole, and thus to each and every part regardless of who wrote it.</p>
<p>Thus, it is not the intent of this section to claim rights or contest your rights to work written entirely by you; rather, the intent is to exercise the right to control the distribution of derivative or collective works based on the Program.</p>
<p>In addition, mere aggregation of another work not based on the Program with the Program (or with a work based on the Program) on a volume of a storage or distribution medium does not bring the other work under the scope of this License.</p>
<p><strong>3</strong>. You may copy and distribute the Program (or a work based on it, under Section 2) in object code or executable form under the terms of Sections 1 and 2 above provided that you also do one of the following:</p>
<blockquote>
  <p>a) Accompany it with the complete corresponding machine-readable source code, which must be distributed under the terms of Sections 1 and 2 above on a medium customarily used for software interchange; or,</p>
  <p> b) Accompany it with a written offer, valid for at least three years, to give any third party, for a charge no more than your cost of physically performing source distribution, a complete machine-readable copy of the corresponding source code, to be distributed under the terms of Sections 1 and 2 above on a medium customarily used for software interchange; or,</p>
  <p>c) Accompany it with the information you received as to the offer to distribute corresponding source code. (This alternative is allowed only for noncommercial distribution and only if you received the program in object code or executable form with such an offer, in accord with Subsection b above.)</p>
</blockquote>
<p>The source code for a work means the preferred form of the work for making modifications to it. For an executable work, complete source code means all the source code for all modules it contains, plus any associated interface definition files, plus the scripts used to control compilation and installation of the executable. However, as a special exception, the source code distributed need not include anything that is normally distributed (in either source or binary form) with the major components (compiler, kernel, and so on) of the operating system on which the executable runs, unless that component itself accompanies the executable.</p>
<p>If distribution of executable or object code is made by offering access to copy from a designated place, then offering equivalent access to copy the source code from the same place counts as distribution of the source code, even though third parties are not compelled to copy the source along with the object code.</p>
<p><strong>4</strong>. You may not copy, modify, sublicense, or distribute the Program except as expressly provided under this License. Any attempt otherwise to copy, modify, sublicense or distribute the Program is void, and will automatically terminate your rights under this License. However, parties who have received copies, or rights, from you under this License will not have their licenses terminated so long as such parties remain in full compliance.</p>
<p> <strong>5</strong>. You are not required to accept this License, since you have not signed it. However, nothing else grants you permission to modify or distribute the Program or its derivative works. These actions are prohibited by law if you do not accept this License. Therefore, by modifying or distributing the Program (or any work based on the Program), you indicate your acceptance of this License to do so, and all its terms and conditions for copying, distributing or modifying the Program or works based on it.</p>
<p><strong>6</strong>. Each time you redistribute the Program (or any work based on the Program), the recipient automatically receives a license from the original licensor to copy, distribute or modify the Program subject to these terms and conditions. You may not impose any further restrictions on the recipients\' exercise of the rights granted herein. You are not responsible for enforcing compliance by third parties to this License.</p>
<p><strong>7</strong>. If, as a consequence of a court judgment or allegation of patent infringement or for any other reason (not limited to patent issues), conditions are imposed on you (whether by court order, agreement or otherwise) that contradict the conditions of this License, they do not excuse you from the conditions of this License. If you cannot distribute so as to satisfy simultaneously your obligations under this License and any other pertinent obligations, then as a consequence you may not distribute the Program at all. For example, if a patent license would not permit royalty-free redistribution of the Program by all those who receive copies directly or indirectly through you, then the only way you could satisfy both it and this License would be to refrain entirely from distribution of the Program.</p>
<p>If any portion of this section is held invalid or unenforceable under any particular circumstance, the balance of the section is intended to apply and the section as a whole is intended to apply in other circumstances.</p>
<p>It is not the purpose of this section to induce you to infringe any patents or other property right claims or to contest validity of any such claims; this section has the sole purpose of protecting the integrity of the free software distribution system, which is implemented by public license practices. Many people have made generous contributions to the wide range of software distributed through that system in reliance on consistent application of that system; it is up to the author/donor to decide if he or she is willing to distribute software through any other system and a licensee cannot impose that choice.</p>
<p> This section is intended to make thoroughly clear what is believed to be a consequence of the rest of this License.</p>
<p> <strong>8</strong>. If the distribution and/or use of the Program is restricted in certain countries either by patents or by copyrighted interfaces, the original copyright holder who places the Program under this License may add an explicit geographical distribution limitation excluding those countries, so that distribution is permitted only in or among countries not thus excluded. In such case, this License incorporates the limitation as if written in the body of this License.</p>
<p> <strong>9</strong>. The Free Software Foundation may publish revised and/or new versions of the General Public License from time to time. Such new versions will be similar in spirit to the present version, but may differ in detail to address new problems or concerns.</p>
<p>Each version is given a distinguishing version number. If the Program specifies a version number of this License which applies to it and "any later version", you have the option of following the terms and conditions either of that version or of any later version published by the Free Software Foundation. If the Program does not specify a version number of this License, you may choose any version ever published by the Free Software Foundation.</p>
<p><strong>10</strong>. If you wish to incorporate parts of the Program into other free programs whose distribution conditions are different, write to the author to ask for permission. For software which is copyrighted by the Free Software Foundation, write to the Free Software Foundation; we sometimes make exceptions for this. Our decision will be guided by the two goals of preserving the free status of all derivatives of our free software and of promoting the sharing and reuse of software generally.</p>
<p><strong>NO WARRANTY</strong></p>
<p><strong>11</strong>. BECAUSE THE PROGRAM IS LICENSED FREE OF CHARGE, THERE IS NO WARRANTY FOR THE PROGRAM, TO THE EXTENT PERMITTED BY APPLICABLE LAW. EXCEPT WHEN OTHERWISE STATED IN WRITING THE COPYRIGHT HOLDERS AND/OR OTHER PARTIES PROVIDE THE PROGRAM "AS IS" WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE. THE ENTIRE RISK AS TO THE QUALITY AND PERFORMANCE OF THE PROGRAM IS WITH YOU. SHOULD THE PROGRAM PROVE DEFECTIVE, YOU ASSUME THE COST OF ALL NECESSARY SERVICING, REPAIR OR CORRECTION.</p>
<p><strong>12</strong>. IN NO EVENT UNLESS REQUIRED BY APPLICABLE LAW OR AGREED TO IN WRITING WILL ANY COPYRIGHT HOLDER, OR ANY OTHER PARTY WHO MAY MODIFY AND/OR REDISTRIBUTE THE PROGRAM AS PERMITTED ABOVE, BE LIABLE TO YOU FOR DAMAGES, INCLUDING ANY GENERAL, SPECIAL, INCIDENTAL OR CONSEQUENTIAL DAMAGES ARISING OUT OF THE USE OR INABILITY TO USE THE PROGRAM (INCLUDING BUT NOT LIMITED TO LOSS OF DATA OR DATA BEING RENDERED INACCURATE OR LOSSES SUSTAINED BY YOU OR THIRD PARTIES OR A FAILURE OF THE PROGRAM TO OPERATE WITH ANY OTHER PROGRAMS), EVEN IF SUCH HOLDER OR OTHER PARTY HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES.</p>
<p><strong>END OF TERMS AND CONDITIONS</strong></p>',
];
