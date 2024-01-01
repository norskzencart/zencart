<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Zen4All 2020 Aug 20 New in v1.5.8-alpha $
*/

$define = [
    'HEADING_TITLE' => 'Enviar ' . '%%TEXT_GV_NAME%%' . ' a los Clientes',
    'TEXT_FROM' => 'De:',
    'TEXT_TO' => 'Email a:',
    'TEXT_TO_CUSTOMERS' => 'Al listado de Clientes:',
    'TEXT_TO_EMAIL' => 'o a un email individual:',
    'TEXT_TO_EMAIL_NAME' => 'Nombre (opcional):',
    'TEXT_TO_EMAIL_INFO' => '<span class="smallText">Elija un listado del menu desplegable o utilice los campos siguientes para enviar un email individual.</span>',
    'TEXT_SUBJECT' => 'Asunto:',
    'TEXT_AMOUNT' => '%%TEXT_GV_NAME%%' . ' Valor:',
    'ERROR_GV_AMOUNT' => 'Introduzca un número con un punto decimal para fracciones p.ej.: 25.00.</span>',
    'TEXT_AMOUNT_INFO' => '%%ERROR_GV_AMOUNT%%',
    'TEXT_HTML_MESSAGE' => 'Mensaje HTML::',
    'TEXT_MESSAGE' => 'Mensaje de Texto:',
    'TEXT_MESSAGE_INFO' => '<p>Opcionalment => se puede añadir un mensaje personalizado que se incluirá antes del texto estándar ' . '</p>' . ' email text.</p>',
    'NOTICE_EMAIL_SENT_TO' => 'Aviso: %1s email(s) enviado(s) a: %2s',
    'ERROR_NO_CUSTOMER_SELECTED' => 'Error: No se seleccionó ningún Cliente.',
    'ERROR_NO_AMOUNT_ENTERED' => 'Error: Valor inválido.',
    'ERROR_NO_SUBJECT' => 'Error: email sin Asunto.',
    'TEXT_GV_ANNOUNCE' => 'Nos complace ofrecerle un ' . '%%TEXT_GV_NAME%%' . ' para %s',
    'TEXT_GV_TO_REDEEM_TEXT' => 'Para canjear este ' . '%%TEXT_GV_NAME%%' . "\n\n " . '%1$s%2$s' . "\n\n" . '

' . STORE_NAME . "o visite " . HTTP_CATALOG_SERVER . DIR_WS_CATALOG . "\n" . 'and enter the code %2$s on the Checkout-Payment page.',
    'TEXT_GV_TO_REDEEM_HTML' => '<a href="%1$s%2$s">Pinche aquí para canjear este ' . '%%TEXT_GV_NAME%%' . '</a> o visite <a href="' . HTTP_CATALOG_SERVER . DIR_WS_CATALOG . '">' . STORE_NAME . '</a> y introduzca el código <strong>%2$s</strong> en la página de Pago.',
];

return $define;
