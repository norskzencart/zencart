<?php
$define = [
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_ADMIN_TITLE' => 'Authorize.net (SIM)',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_CATALOG_TITLE' => 'Tarjeta de Crédito',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_TYPE' => 'Tipo:',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_OWNER' => 'Propietario de la tarjeta:',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_NUMBER' => 'Número de la tarjeta:',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_EXPIRES' => 'Fecha de caducidad de la tarjeta:',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_CVV' => 'Número CVV :',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_POPUP_CVV_LINK' => '¿Qué es esto?',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_OWNER' => '* El nombre del propietario de la tarjeta debe tener al menos ' . CC_OWNER_MIN_LENGTH . ' caracteres.\n',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_NUMBER' => '* El número de la tarjeta de crédito debe tener al menos ' . CC_NUMBER_MIN_LENGTH . ' caracteres.\n',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_CVV' => '* Tecle el número de 3 ó 4 dígitos de la cara trasera de la tarjeta.\n',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR_MESSAGE' => 'Hubo un error al procesar su tarjeta de crédito. Por favor, inténtelo otra vez.',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_DECLINED_MESSAGE' => 'Su tarjeta de crédito fue rechazada. Por favor, inténtelo con otra tarjeta o contacte con su banco para más información.',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR' => '¡Error en la tarjeta de crédito!',
];

if (defined('MODULE_PAYMENT_AUTHORIZENET_STATUS') && MODULE_PAYMENT_AUTHORIZENET_STATUS == 'True') {
    $define['MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION'] = '<a rel="noreferrer noopener" target="_blank" href="https://account.authorize.net/">Authorize.net Merchant Login</a>' . (MODULE_PAYMENT_AUTHORIZENET_TESTMODE != 'Production' ? '<br><br>Información de prueba:<br><b>Números de tarjeta de crédito de aprobación automática:</b><br>Visa#: 4007000000027<br>MC#: 5424000000000015<br >Discover#: 6011000000000012<br>AMEX#: 370000000000002<br><br><b>Nota:</b> Estos números de tarjeta de crédito devolverán un rechazo en el modo en vivo y una aprobación en el modo de prueba. Cualquier fecha futura puede para la fecha de vencimiento y cualquier número de 3 o 4 dígitos (AMEX) para el código CVV.<br><br><b>Número de tarjeta de crédito con rechazo automático:</b><br><br>Tarjeta #: 4222222222222<br><br>Este número de tarjeta se puede usar para recibir avisos de rechazo con fines de prueba.' : '') . '<br><br><strong>CONFIGURACIÓN</strong><br>Su configuración de URL de "respuesta" y "recibo" y "retransmisión" en su perfil de comerciante de Authorize.net se puede dejar EN BLANCO o, si es necesario, puede establecer la "URL de retransmisión" para apuntar a https://your_domain.com/foldername/index.php?main_page=checkout_process<br><br>Si tiene problemas con esto, consulte <a href="https://docs .zen-cart.com/user/payment/authorizenet_sim/" rel="noreferrer noopener" target="_blank">el artículo de preguntas frecuentes sobre configuración de SIM</a> para obtener instrucciones de configuración detalladas.';
} else {
    $define['MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION'] = '<a rel="noreferrer noopener" target="_blank" href="https://reseller.authorize.net/application?resellerId=10023">Haga clic aquí para abrir una cuenta</a><br><br><a rel="noreferrer noopener" target="_blank" href="https://account.authorize.net/">Haga clic aquí para identificarse en el Merchant Area</a><br><br><strong>Requerimientos:</strong><br><hr>*<strong>Cuenta Authorize.net</strong> (vea el enlace arriba para abrirla)<br>*<strong>nombre de usuario de Authorize.net y clave de transacción</strong> disponible en la zona Merchant <br><br>Ver <a href="https://docs.zen-cart.com/user/payment/authorizenet_sim/" rel="noreferrer noopener" target="_blank">SIM Setup FAQ</a> para más información.';
}
return $define;
