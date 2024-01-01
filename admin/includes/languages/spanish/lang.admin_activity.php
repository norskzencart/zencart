<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: torvista 2022 Jun 12 New in v1.5.8-alpha $
*/

$define = [
    'HEADING_TITLE' => 'Gestión de los Historiales de Actividad Admin',
    'HEADING_SUB1' => 'Examinar o Exportar Archivos',
    'HEADING_SUB2' => 'Limpiar el historial de archivos',
    'TEXT_ACTIVITY_EXPORT_FORMAT' => 'Formato de Archivo de Exportación:',
    'TEXT_ACTIVITY_EXPORT_FILENAME' => 'Nombre de Archivo de Exportación:',
    'TEXT_ACTIVITY_EXPORT_SAVETOFILE' => '¿Guardar en el servidor? (si no => se descargará directamente desde esta ventana)',
    'TEXT_ACTIVITY_EXPORT_DEST' => 'Destino: ',
    'SUCCESS_EXPORT_ADMIN_ACTIVITY_LOG' => 'Exportación completada: ',
    'FAILURE_EXPORT_ADMIN_ACTIVITY_LOG' => 'AVISO: La exportación falló. No se pudo escribir el archivo',
    'TEXT_INSTRUCTIONS' => '<u>INSTRUCCIONES</u><br>
En esta página se puede exportar el archivo de actividades Admin Zen Cart&reg; a un archivo CSV para guardar.<br>
Debe archivar esta información por si acaso es requerida en una investigación de fraude. Es imprescindible para cumplir con la ley PCI.<br>
<ol>
<li>Elija mostrar o exportar un archivo.</li>
<li>Escriba un nombre para el archivo (debe tener una extensión .csv .txt .htm .html .xml).</li>
<li>Pulse en Guardar para seguir.</li>
<li>Elija si quiere guardar o abrir el archivo => dependiendo de lo que ofrece el navegador.</li></ol>
',
    'TEXT_INFO_ADMIN_ACTIVITY_LOG' => '<strong>Tabla del Archivo de Admin vacío en la base de datos<br>¡AVISO: ASEGÚRESE DE HACER UNA COPIA DE SEGURIDAD DE LA BASE DE DATOS ANTES DE INICIAR ESTA ACTUALIZACIÓN!</strong><br>El Archivo de Actividades Admin es un método para grabar las actividades en el Admin. <br>Puede aumentar en tamaño rápidamente; hay que vaciarlo a menudo.<br>Salen avisos cuando la tabla alcanza 50.000 actividades o han pasado 60 días.<br><span class="alert">NOTA: Para cumplir con PCI => debe guardar estos datos de actividad durante 12 meses.<br>Recomendamos que guarde un copia - EXPORTAR A CSV => y GUARDAR - antes de limpiar el archivo.</span>',
    'TEXT_ADMIN_LOG_PLEASE_CONFIRM_ERASE' => '<strong><span class="alert">¡PRECAUCIÓN! Se dispone a BORRAR entradas *importantes* de las Actividades de Admin de la base de datos.</span></strong><br>Asegúrese de que tiene un backup de estas entradas ANTES de borrarlas.<br>Si continúa => ud. acepta que está borrando las entradas y que entiende sus responsabilidades legales con respecto a estas entradas.<br><br>Entiendo mis responsabilidades y quiero borrar los datos cuando pincho en Resetear:<br>',
    'SUCCESS_CLEAN_ADMIN_ACTIVITY_LOG' => 'El archivo del Actividades de Admin ha sido <strong>borrado</strong>',
    'TEXT_NO_RECORDS_FOUND' => 'No se encontró actividades utilizando el filtro que seleccionó.',
    'TEXT_EXPORTFORMAT0' => 'Exportar como HTML (para ver en pantalla)',
    'TEXT_EXPORTFORMAT1' => 'Exportar como CSV (para ver como una hoja de cálculo)',
    'TEXT_EXPORTFORMAT2' => 'Exportar como TXT',
    'TEXT_EXPORTFORMAT3' => 'Exportar como XML',
    'TEXT_ACTIVITY_EXPORT_FILTER' => '¿Qué tipo de actividades quiere examinar?',
    'TEXT_EXPORTFILTER0' => 'Todos los datos de actividad',
    'TEXT_EXPORTFILTER1' => 'INFO – Actividades generales',
    'TEXT_EXPORTFILTER2' => 'NOTICE – Actividades para revisar de vez en cuando',
    'TEXT_EXPORTFILTER3' => 'WARNING – Actividades para revisar a diario',
    'TEXT_EXPORTFILTER4' => 'NOTICE + WARNING (la combinación más común para revisar).',
    'TEXT_ACTIVITY_EXPORT_FILTER_USER' => 'Filtrar por Usuario:',
	'TEXT_EXPORTFILTER_USER' => 'Elije Usuario',
    'TEXT_INTERPRETING_LOG_DATA' => '<p><strong>Interpretación de los datos</strong></p><ul>
<li><strong>Severidad</strong> - Los estándares de historiales suelen definir los niveles de importancia así:
  <ul>
  <li><strong>INFO</strong> - actividades generales de administración.</li>
  <li><strong>NOTICE</strong> - actividades que precisa un nivel de acceso mayor; puede incluir la creación de usuarios nuevos o añadir módulos de pago nuevo. También graba el envío de páginas web cuando incluye contenido potencialmente peligroso => como etiquetas script o iframe que puede haber sido añadido por empleados descontentos o intrusos. Debería revisar estos actividades a menudo.</li>
  <li><strong>WARNING</strong> - actividades CRíTICAS como cambios en los módulos de pago o el borrado de una cuenta de un administrador que puede significar problemas urgentes. Debería revisarlos a diario.</li>
  </ul>
</li>
<li><strong>admin_user</strong> - Muestra el número ID de la cuenta del administrador y su nombre de usuario. Si no ha entrado en su cuenta => muestra 0.</li>
<li><strong>page_accessed</strong> - Muestra el nombre de la página visitada => indicado el tipo de actividad.</li>
<li><strong>parameters</strong> - Muestra los parámetros del URI de la página visitada => para ofrecer más información al tipo de actividad.</li>
<li><strong>flagged</strong> - Si este campo está puesto a 1 => indica que debería inspeccionar el campo “postdata” para contenido no autorizado como etiquetas script o iframe. Habrá una explicación de contenido sospechoso en el campo “attention”.</li>
<li><strong>attention</strong> - Muestra sugerencias relacionada al campo “postdata”.</li>
<li><strong>logmessage</strong> - Muestra cualquier mensaje generado por el sistema sobre la actividad => como la instalación de un módulo.</li>
<li><strong>postdata</strong> - Muestra los datos POST (sin el contenido sensible) para facilitar la investigación en el caso de sospechar actividad maliciosa.</li>
</ul>',
];

return $define;
