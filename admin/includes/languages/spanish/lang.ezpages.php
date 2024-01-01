<?php
/**
 * @copyright Copyright 2003-2023 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2022 Nov 13 Modified in v1.5.8a $
*/

$define = [
    'HEADING_TITLE' => 'EZ-Pages',
    'TABLE_HEADING_PAGES' => 'Título de la Página',
    'TABLE_HEADING_VSORT_ORDER' => 'Orden de los Recuadros',
    'TABLE_HEADING_HSORT_ORDER' => 'Orden de Pie de página',
    'TEXT_PAGES_TITLE' => 'Título:',
    'TEXT_PAGES_HTML_TEXT' => 'Contenido HTML:',
    'TEXT_PAGES_STATUS_CHANGE' => 'Cambio de Estado: %s',
    'TEXT_INFO_DELETE_INTRO' => '¿Seguro que quiere borrar esta página?',
    'SUCCESS_PAGE_INSERTED' => 'Éxito. La página ha sido introducida.',
    'SUCCESS_PAGE_UPDATED' => 'Éxito. La página ha sido actualizada.',
    'SUCCESS_PAGE_REMOVED' => 'Éxito. La página ha sido borrada.',
    'SUCCESS_PAGE_STATUS_UPDATED' => 'Éxito. El estado de la página ha sido actualizado.',
    'ERROR_PAGE_TITLE_REQUIRED' => 'Error: Título de la página requerido.',
    'ERROR_UNKNOWN_STATUS_FLAG' => 'Error: Marcado del estatus desconocido.',
    'ERROR_MULTIPLE_HTML_URL' => 'Error: Ha definido opciones múltiples del enlace cuando solamente una está permitida. ...<br>Puede definir: Contenido HTML Content -o- URL de un enlace interno -o- URL de un enlace externa ',
    'TABLE_HEADING_STATUS_HEADER' => 'Encabezado:',
    'TABLE_HEADING_STATUS_SIDEBOX' => 'Recuadro:',
    'TABLE_HEADING_STATUS_FOOTER' => 'Pie:',
    'TABLE_HEADING_STATUS_TOC' => 'Table de Contenido:',
    'TABLE_HEADING_CHAPTER' => 'Capítulo:',
    'TABLE_HEADING_VISIBLE' => 'Visible:',
    'TABLE_HEADING_PAGE_OPEN_NEW_WINDOW' => 'Abrir en ventana nueva:',
    'TABLE_HEADING_PAGE_IS_SSL' => 'Página es SSL:',
    'TABLE_HEADING_PAGE_IS_VISIBLE' => 'Páge es visible:',
    'TABLE_HEADING_PAGE_IS_VISIBLE_EXPLANATION' => 'Se muestra la Página aunque no está en la cabecera => pie o recuadro.<br>
(Si todos los valores de Visible => Cabecera => Pie y Recuadro están desactivados => el cliente verá Página No Encontrada.)',
    'TEXT_DISPLAY_NUMBER_OF_PAGES' => 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> páginas)',
    'IMAGE_NEW_PAGE' => 'Página Nueva',
    'TEXT_INFO_PAGES_ID' => 'ID: ',
    'TEXT_INFO_PAGES_ID_SELECT' => 'Elija una página ...',
    'TEXT_HEADER_SORT_ORDER' => 'Orden:',
    'TEXT_SIDEBOX_SORT_ORDER' => ' Orden:',
    'TEXT_FOOTER_SORT_ORDER' => ' Orden:',
    'TEXT_TOC_SORT_ORDER' => ' Orden:',
    'TEXT_CHAPTER' => 'Ant/Sig Capítulo:',
    'TABLE_HEADING_CHAPTER_PREV_NEXT' => 'Capítulo:&nbsp;<br>',
    'TEXT_HEADER_SORT_ORDER_EXPLAIN' => '<strong>Encabezado-Orden:</strong> se utiliza  cuando se generan páginas en una sola fila horizontal en el encabezado.  Para incluir está página en el listado de la fila horizontal el orden debe ser mayor que cero.',
    'TEXT_SIDEBOX_ORDER_EXPLAIN' => '<strong>Cuadro-Orden:</strong> se utiliza cuando las páginas están en un listado vertical de enlaces. Para incluir está página en el listado vertical el orden debe ser mayor que cero. Si no => se considera como texto HTML para intenciones especiales.',
    'TEXT_FOOTER_ORDER_EXPLAIN' => '<strong>Pie de Página-Orden:</strong> se utiliza  cuando se generan páginas en una sola fila horizontal en el pie de página.  Para incluir esta página en el listado de la fila horizontal => el orden debe ser mayor que cero.',
    'TEXT_TOC_SORT_ORDER_EXPLAIN' => '<strong>TdC (Tabla de Contenidos)-Orden:</strong> se utiliza cuando se generan páginas personalizadas como en una fila horizontal (encabezado/pie de página etc.) o fila vertical => dependiendo de los requisitos personales.  Para incluir está página en el listado el orden debe ser mayor que cero.',
    'TEXT_CHAPTER_EXPLAIN' => 'Se usa <strong>Capítulo</strong> con un TdC (Tabla de Contenidos) Orden para los enlaces Anterior/Siguiente. Los enlaces del TdC consisten de las páginas que tienen este número de capítulo and se las ve en el TdC Orden.',
    'TEXT_ALT_URL' => 'URL Enlace Interno:',
    'TEXT_ALT_URL_EXPLAIN' => 'Si así está definido => se ignorará el contenido de la página y se utilizará este enlace local <br>Ejemplo a Reseñas: index.php?main_page=reviews<br>Ejemplo a Mi Cuenta: index.php?main_page=account y marcará como SSL',
    'TEXT_ALT_URL_EXTERNAL' => 'URL Enlace Externa:',
    'TEXT_ALT_URL_EXTERNAL_EXPLAIN' => ' Si así está definido => se ignorará el contenido de la página y se usará este enlace local <br>Ejemplo de un enlace externo: http://www.zen-cart.com',
    'TEXT_SORT_CHAPTER_TOC_TITLE_INFO' => 'Orden de Listado: ',
    'TEXT_SORT_CHAPTER_TOC_TITLE' => 'Capítulo/TdC',
    'TEXT_SORT_HEADER_TITLE' => 'Encabezado',
    'TEXT_SORT_SIDEBOX_TITLE' => 'Recuadro',
    'TEXT_SORT_FOOTER_TITLE' => 'Pie de Página',
    'TEXT_SORT_PAGE_TITLE' => 'Título de la Página',
    'TEXT_SORT_PAGE_ID_TITLE' => 'ID de la Página => Título',
    'TEXT_PAGE_TITLE' => 'Título:',
    'TEXT_WARNING_MULTIPLE_SETTINGS' => 'AVISO: Enlaces Múltiples Definidos',
];

return $define;
