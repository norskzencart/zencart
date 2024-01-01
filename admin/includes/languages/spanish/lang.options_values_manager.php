<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Steve 2022 Feb 08 New in v1.5.8-alpha $
*/

$define = [
    'HEADING_TITLE_ATRIB' => 'Atributos de Productos',
    'TABLE_HEADING_DOWNLOAD' => 'Productos descargables:',
    'TABLE_TEXT_FILENAME' => 'Archivo:',
    'TABLE_TEXT_MAX_DAYS' => 'Días hasta caducidad:',
    'TABLE_TEXT_MAX_COUNT' => 'Nº máximo de descargas:',
    'TEXT_WARNING_OF_DELETE' => '<span class="alert">Esta opción tiene productos y valores enlazados - no es seguro borrarla.<br>NOTA: Una descarga asociada con esta Opción no será borrada del servidor.</span>',
    'TEXT_OK_TO_DELETE' => 'Esta opción no tiene productos enlazados - es seguro borrarla.',
    'ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE_SPECIFIC' =>  'Possible Duplicate Options Value Added: "<b>%1$s</b>" %2$s for option name "%3$s" (values ids: %4$s)',
    'TEXT_DOWNLOADS_DISABLED' => 'NOTA: Las descargas están desactivadas',
    'TABLE_TEXT_MAX_DAYS_SHORT' => 'Días:',
    'TABLE_TEXT_MAX_COUNT_SHORT' => 'Max:',
    'TEXT_SORT' => ' Orden: ',
    'TEXT_OPTION_VALUE_COMMENTS' => 'Comentarios: ',
    'TEXT_OPTION_VALUE_SIZE' => 'Mostrar tamaño: ',
    'TEXT_OPTION_VALUE_MAX' => 'Longitud máxima: ',
    'TEXT_ATTRIBUTES_IMAGE' => 'Cambio de imagen de atributo:',
    'TEXT_ATTRIBUTES_IMAGE_DIR' => 'Directorio de imágenes de atributo:',
    'TEXT_ATTRIBUTES_FLAGS' => 'Banderas<br>de atributo:',
    'TEXT_ATTRIBUTES_DISPLAY_ONLY' => 'Usado con motivos<br>de visualización solamente:',
    'TEXT_ATTRIBUTES_IS_FREE' => 'El atributo es gratis<br>cuando el producto es gratis:',
    'TEXT_ATTRIBUTES_DEFAULT' => 'Atributo por defecto<br>para marcar como seleccionado:',
    'TEXT_ATTRIBUTE_IS_DISCOUNTED' => 'Aplicar los mismos descuentos<br>usados para el producto:',
    'TEXT_PRODUCT_OPTIONS_INFO' => 'Editar opciones de producto para ajustes adicionales',
    'TEXT_OPTION_VALUE_COPY_ALL' => '<strong>Copiar una Opción y uno de sus Valores a TODOS los productos que tienen una Opción y su Valor = ...</strong>',
    'TEXT_INFO_OPTION_VALUE_COPY_ALL' => 'Seleccione una Opción y Valor de la Opción que existe actualmente en un producto o productos =>  a continuación seleccione la Opción y Valor de Opción que quieres copia a todos los productos (o dentro de UNA categoría) que cumplen con la primera elección.',
    'TEXT_SELECT_OPTION_FROM' => 'Nombre de Opción a coincidir:',
    'TEXT_SELECT_OPTION_VALUES_FROM' => 'Valor de Opción a coincidir:',
    'TEXT_SELECT_OPTION_TO' => 'Nombre de Opción a añadir:',
    'TEXT_SELECT_OPTION_VALUES_TO' => 'Valor de Opción a añadir:',
    'TEXT_SELECT_OPTION_VALUES_TO_CATEGORIES_ID' => 'Deje la casilla en blanco para añadir el Valor a TODOS los productos o<br>introducir un ID de UNA CATEGORÍA para limitarlo',
    'TEXT_OPTION_VALUE_COPY_OPTIONS_TO' => '<strong>Copiar una Opción y uno de sus Valores a TODOS los productos que tienen una Opción = ...</strong>',
    'TEXT_INFO_OPTION_VALUE_COPY_OPTIONS_TO' => 'Seleccione una Opción y uno de sus Valores para añadir a todos los productos (o sólo los productos en la categoría seleccionada) que tienen la Opción elegida en la segunda caja.
                                                   <br><strong>Ejemplo:</strong> Añadir nombre de opción: Valor de opción de color: Rojo a todos los productos con nombre de opción: Tamaño
                                                   <br><strong>Ejemplo:</strong> Añadir nombre de opción: Valor de opción de color: Verde con valores por defecto desde el ID de producto: 34 a todos los productos con el nombre de opción: Tamaño
                                                   <br><strong>Ejemplo:</strong> Añadir nombre de opción: Valor de opción de color: Verde con valores por defecto desde el ID de producto: 34 a todos los productos con nombre de opción: Tamaño para ID de categorías: 65
        ',
    'TEXT_SELECT_OPTION_TO_ADD_TO' => 'Nombre Opción a coincidir:',
    'TEXT_SELECT_OPTION_FROM_ADD' => 'Nombre de Opción a añadir:',
    'TEXT_SELECT_OPTION_VALUES_FROM_ADD' => 'Valor de Opción a añadir:',
    'TEXT_SELECT_OPTION_FROM_PRODUCTS_ID' => 'Copiar los valores por defecto del nuevo atributo del producto de este ID => o dejar la casilla en blanco para no usar un valor por defecto:',
    'TEXT_INFO_FROM' => ' desde: ',
    'TEXT_INFO_TO' => ' a: ',
    'ERROR_OPTION_VALUES_COPIED' => 'Error: Nombre y Valor de Opción duplicados',
    'ERROR_OPTION_VALUES_COPIED_MISMATCH' => 'Error: Valor y nombre de Opción no concordantes',
    'ERROR_OPTION_VALUES_NONE' => 'Error: No se encontró nada para copiar',
    'SUCCESS_OPTION_VALUES_COPIED' => '¡Copia exitosa! ',
    'ERROR_OPTION_VALUES_COPIED_MISMATCH_PRODUCTS_ID' => 'Error: Falta el nombre/valor de opción para los ID de productos',
    'TEXT_OPTION_VALUE_DELETE_ALL' => '<strong>Borrar el Atributo coincidente de TODOS los productos (o los de UNA categoría) donde la Opción y Valor de Opción = ...</strong>',
    'TEXT_INFO_OPTION_VALUE_DELETE_ALL' => 'Seleccione una Opción y Valor de Opción que exista actualmente en un producto que quiera borrar de TODOS los productos (o los productos de UNA categoría).',
    'TEXT_SELECT_DELETE_OPTION_FROM' => 'Nombre de Opción a coincidir:',
    'TEXT_SELECT_DELETE_OPTION_VALUES_FROM' => 'Valor de Opción a coincidir:',
    'ERROR_OPTION_VALUES_DELETE_MISMATCH' => 'Error: Nombre de Opción y Valor de Opción no concordantes seleccionados',
    'SUCCESS_OPTION_VALUES_DELETE' => 'Exitosa borradura de: ',
    'LABEL_FILTER' => 'Seleccione Nombre de Opción para filtrar sus Valores',
    'TEXT_DISPLAY_NUMBER_OF_OPTION_VALUES' => 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> Valores de Opciones)',
    'TEXT_SHOW_ALL' => 'Mostrar Todo',
];

return $define;
