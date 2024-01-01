<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2022 Jan 11 New in v1.5.8-alpha $
*/

$define = [
    'HEADING_TITLE' => 'Ofertas',
    'TEXT_ADD_SPECIAL_SELECT' => 'Añadir Oferta por Selección',
    'TEXT_ADD_SPECIAL_PID' => 'Añadir Oferta por ID Producto',
    'TEXT_SEARCH_SPECIALS' => 'Buscar en las Ofertas Actuales',
    'TEXT_SPECIAL_ACTIVE' => 'Oferta Activada:',
    'TEXT_SPECIAL_INACTIVE' => 'Oferta Desactivada',
    'TEXT_SPECIAL_STATUS_BY_DATE' => 'Estatus definido por las fechas',
    'TEXT_SPECIALS_PRODUCT' => 'Producto:',
    'TEXT_SPECIALS_SPECIAL_PRICE' => 'Precio Oferta:',
    'TEXT_SPECIALS_AVAILABLE_DATE' => 'Fecha Oferta Activada:',
    'TEXT_SPECIALS_EXPIRES_DATE' => 'Fecha Oferta Desactivada:',
    'TEXT_INFO_NEW_PRICE' => 'Precio Oferta:',
    'TEXT_INFO_ORIGINAL_PRICE' => 'Precio Original:',
    'TEXT_INFO_DISPLAY_PRICE' => 'Precio Publicado Actualmente:',
    'TEXT_INFO_STATUS_CHANGED' => 'Estado Cambiado:',
    'TEXT_INFO_HEADING_DELETE_SPECIALS' => 'Eliminar oferta',
    'TEXT_INFO_DELETE_INTRO' => '¿Esta seguro que desea eliminar la Oferta del producto?',
    'WARNING_SPECIALS_PRE_ADD_PID_EMPTY' => 'Aviso: No especifica el ID del Producto.',
    'WARNING_SPECIALS_PRE_ADD_PID_DUPLICATE' => 'Aviso: ID#%u Producto ya está en Oferta.',
    'WARNING_SPECIALS_PRE_ADD_PID_NO_EXIST' => 'Aviso: ID#%u Producto no existe.',
    'WARNING_SPECIALS_PRE_ADD_PID_GIFT' => 'Aviso: ID#%u Producto es un ' . '%%TEXT_GV_NAME%%' . '.',
    'TEXT_INFO_HEADING_PRE_ADD_SPECIALS' => 'Añade nueva Oferta por el ID de un Producto',
    'TEXT_INFO_PRE_ADD_INTRO' => 'Se puede añadir una Oferta por ID del Producto. Puede ser apropiado usar este método para bases de datos grandes => cuando la página tarda mucho tiempo en cargar el menú desplegable.',
    'TEXT_PRE_ADD_PRODUCTS_ID' => 'Tecle el ID de Producto para ser pre-añadido: ',
    'TEXT_SPECIALS_PRICE_NOTES_HEAD' => '<b>Notas:</b>', 
    'TEXT_SPECIALS_PRICE_NOTES_BODY' => '<li>El Precio Especial puede ser un precio (sin impuestos). El separador decimal debe ser un "." (punto decimal), por ejemplo: <b>49.99</b>. El porcentaje de descuento calculado se muestra junto al nuevo precio del producto en el catálogo.</li><li>El Precio Especial puede ser un porcentaje de descuento, por ejemplo: <b>20%</b>.</li><li>Las fechas de inicio / finalización no son obligatorias. Puede dejar la fecha de vencimiento vacía para que no caduca.</li> <li> Cuando se establecen las fechas, el estado del Precio Especial se habilita / deshabilita automáticamente en consecuencia.</li>',
    'ERROR_INVALID_ACTIVE_DATE' => 'The &quot;Active&quot; date is not valid, please re-enter.',
    'ERROR_INVALID_EXPIRES_DATE' => 'The &quot;Expires&quot; date is not valid, please re-enter.',
];

return $define;
