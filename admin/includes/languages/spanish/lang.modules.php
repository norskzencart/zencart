<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: torvista 2022 Feb 14 New in v1.5.8-alpha $
*/

$define = [
    'HEADING_TITLE_MODULES_PAYMENT' => 'Módulos de Pago',
    'HEADING_TITLE_MODULES_SHIPPING' => 'Módulos de Envío',
    'HEADING_TITLE_MODULES_ORDER_TOTAL' => 'Módulos de Total del Pedido',
    'TABLE_HEADING_ORDERS_STATUS' => 'Estados de pedidos',
    'TEXT_MODULE_DIRECTORY' => 'Carpeta del Módulo:',
    'ERROR_MODULE_FILE_NOT_FOUND' => 'ERROR: no se instaló el módulo porque falta un archivo de idioma: ',
    'TEXT_EMAIL_SUBJECT_ADMIN_SETTINGS_CHANGED' => 'AVISO: Una opción del Admin ha sido cambiada en la tienda "' . STORE_NAME . '"',
    'TEXT_EMAIL_MESSAGE_ADMIN_SETTINGS_CHANGED' => 'Este es un email automático de "' . STORE_NAME . '" para avisarle de un cambio en sus opciones administrativas que acaba de ocurrir: ' . "\n\n" . 'NOTA: Las opciones de Admin han sido CAMBIADAS en el módulo [%s]  => por el usuario %s.' . "\n\n" . 'Si no llevó a cabo estos cambios, debería verificar las opciones inmediatamente.' . "\n\n" . 'Si está al corriente con estos cambios => puede ignorar este email.',
    'TEXT_EMAIL_MESSAGE_ADMIN_MODULE_INSTALLED' => 'Este es un email automático de "' . STORE_NAME . '" para avisarle de un cambio en sus opciones administrativas que acaba de ocurrir: ' . "\n\n" . 'NOTA: Las opciones de Admin han sido CAMBIADAS. El módulo [%s] ha sido instalado por el usuario %s.' . "\n\n" . 'Si no llevó a cabo estos cambios, debería verificar las opciones inmediatamente.' . "\n\n" . 'Si está al corriente con estos cambios => puede ignorar este email.',
    'TEXT_EMAIL_MESSAGE_ADMIN_MODULE_REMOVED' => 'Este es un email automático de "' . STORE_NAME . '" para avisarle de un cambio en sus opciones administrativas que acaba de ocurrir: ' . "\n\n" . 'NOTA: Las opciones de Admin han sido CAMBIADAS. El módulo [%s] ha sido quitado por el usuario %s.' . "\n\n" . 'Si no llevó a cabo estos cambios, debería verificar las opciones inmediatamente.' . "\n\n" . 'Si está al corriente con estos cambios => puede ignorar este email.',
    'TEXT_DELETE_INTRO' => '¿Está seguro que quiere quitar este módulo?',
    'TEXT_WARNING_SSL_EDIT' => 'ALERT: <a href="https://docs.zen-cart.com/user/installing/enable_ssl/" rel="noopener" target="_blank">Por razones de seguridad no se puede hacer cambios en este módulo hasta que el acceso al Admin utilice SSL.</a>.',
    'TEXT_WARNING_SSL_INSTALL' => 'ALERT: <a href="https://docs.zen-cart.com/user/installing/enable_ssl/" rel="noopener" target="_blank">Por razones de seguridad no se puede instalar este módulo hasta que el acceso al Admin utilice SSL.</a>.',
    'TEXT_POSITIVE_INT' => '%s debe ser un integer igual o mayor que 0',
    'TEXT_POSITIVE_FLOAT' => '%s debe ser un decimal igual o mayor que 0',
];

return $define;
