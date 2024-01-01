<?php
$define = [
    'MODULE_PAYMENT_PAYPAL_TEXT_ADMIN_TITLE' => 'PayPal Payments Standard',
    'MODULE_PAYMENT_PAYPAL_TEXT_ADMIN_TITLE_NONUSA' => 'PayPal Website Payments Standard',
    'MODULE_PAYMENT_PAYPAL_TEXT_CATALOG_TITLE' => 'PayPal',
    'MODULE_PAYMENT_PAYPAL_MARK_BUTTON_IMG' => 'https://www.paypal.com/en_US/i/logo/PayPal_mark_37x23.gif',
    'MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT' => 'Realice pagos con PayPal',
    'MODULE_PAYMENT_PAYPAL_ACCEPTANCE_MARK_TEXT' => 'Ahorre tiempo. Pagos Seguros. <br>Pagar sin compartir su información financiera.',
    'MODULE_PAYMENT_PAYPAL_PURCHASE_DESCRIPTION_TITLE' => 'Todos los artículos en el carro (ver los detalles en la tienda y en el comprobante de la tienda).',
    'MODULE_PAYMENT_PAYPAL_PURCHASE_DESCRIPTION_ITEMNUM' => STORE_NAME . 'Compra ',
    'MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_ONETIME_CHARGES_PREFIX' => 'Cargo único relacionado a ',
    'MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_SURCHARGES_SHORT' => 'Recargos',
    'MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_SURCHARGES_LONG' => 'Cargos de manipulación y otros recargos',
    'MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_DISCOUNTS_SHORT' => 'Descuentos',
    'MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_DISCOUNTS_LONG' => 'Créditos aplicados, incluyendo Cupones de Descuento, Tarjetas Regalo etc.',
    'MODULES_PAYMENT_PAYPALSTD_NOT_RECOMMENDED' => 'Tenga en cuenta que este módulo ya no se recomienda. Consulte <a href = "https://docs.zen-cart.com/user/payment/paypal_standard/" target = "_ blank" rel = "noreferrer noopener "> esta página </a> para obtener una explicación. ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_FIRST_NAME' => 'Nombre',
    'MODULE_PAYMENT_PAYPAL_ENTRY_LAST_NAME' => 'Apellidos:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_BUSINESS_NAME' => 'Empresa:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_NAME' => 'Nombre Dirección:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STREET' => 'Calle:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_CITY' => 'Localidad:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATE' => 'Provincia:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_ZIP' => 'Código Postal:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_COUNTRY' => 'País:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_EMAIL_ADDRESS' => 'Email Pagador:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_EBAY_ID' => 'ID Ebay:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_ID' => 'ID Pagador:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_STATUS' => 'Estado Pagador:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATUS' => 'Estado Dirección:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_TYPE' => 'Tipo de Pago:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_STATUS' => 'Estado del Pago:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PENDING_REASON' => 'Razón Pendiente:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_INVOICE' => 'Pedido:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_DATE' => 'Fecha del Pago:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_CURRENCY' => 'Moneda:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_GROSS_AMOUNT' => 'Cantidad Bruta:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_FEE' => 'Tarifa del Pago:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_EXCHANGE_RATE' => 'Tasa de Cambio:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_CART_ITEMS' => 'Productos en el Carro:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_TXN_TYPE' => 'Tipo de Transacción:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_TXN_ID' => 'ID Trans.:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PARENT_TXN_ID' => 'ID Trans. Padre:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_COMMENTS' => 'Comentarios del Sistema: ',
];

if (IS_ADMIN_FLAG === true) {
    $define['MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION'] = '<strong>PayPal Payments Standard </strong> (Servicio PayPal antiguo, menos fiable que ExpressCheckout)<br><a href="https://www.paypal.com" rel="noreferrer noopener" target="_blank">Gestionar su cuenta PayPal.</a><br><br><b>Configuración:</b><br>1. <a href="https://www.zen-cart.com/partners/paypal-std" rel="noopener" target="_blank">Abra una cuenta PayPal aquí.</a><br>2. En su cuenta PayPal, en "Perfil",<ul><li>Fije su <strong>Instant Payment Notification Preferences</strong> URL a:<br><pre>' . str_replace('index.php?main_page=index', 'ipn_main_handler.php', zen_catalog_href_link(FILENAME_DEFAULT)) . '</pre><br>(Si ya hay otro URL válido en el campo, déjelo.)<br><span class="alert">¡Asegúrese de que la casilla para habilitar IPN está marcada!</span><br><br></li><li>en <strong>Website Payments Preferences</strong> fije su <strong>Automatic Return URL</strong> a:<br><pre>' . zen_catalog_href_link(FILENAME_CHECKOUT_PROCESS, '', 'SSL', false) . '</pre></li>' . (defined('MODULE_PAYMENT_PAYPALSTD_STATUS') ? '' : '<li>... y pinche en "install" arriba para habilitar soporte PayPal Standard... y  "edit" para decir a Zen Cart cuáles son sus parámetros PayPal.</li>') . '</ul><hr><strong>Requisitos:</strong><br><hr>*<strong>Cuenta PayPal </strong> (<a href="https://www.zen-cart.com/partners/paypal-std" rel="noopener" target="_blank">pinche para abrir una cuenta</a>)<br>*<strong>CURL con SSL</strong> es muy recomendada<br>*<strong>Puerta 80 (y puerta 443 si SSL está habilitada)</strong> está utilizada para comunicación <strong>*bidireccional*</strong> con la puerta de enlace, por lo que hay que abrir esta puerta(s) en el router y el cortafuegos del servidor.<br>*<strong>Hay que configurar los parámetros</strong> como se describa arriba.';
} else {
    $define['MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION'] = '<strong>PayPal</strong>';
}
$define['MODULE_PAYMENT_PAYPAL_TEXT_CATALOG_LOGO'] = '<img src="' . $define['MODULE_PAYMENT_PAYPAL_MARK_BUTTON_IMG'] . '" alt="' . $define['MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT'] . '" title="' . $define['MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT'] . '"> &nbsp;' .
        '<span class="smallText">' . $define['MODULE_PAYMENT_PAYPAL_ACCEPTANCE_MARK_TEXT'] . '</span>';

return $define;
