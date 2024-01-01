<?php
$define = [
    'MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TEXT_ADMIN_TITLE' => 'First Data Hosted Checkout Payment Pages',
    'MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TEXT_CATALOG_TITLE' => 'Tarjeta de Crédito',
    'MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TEXT_DECLINED_MESSAGE' => 'No se pudo completar la transacción. Inténtelo otra vez con otra tarjeta o póngase en contacto con su banco para más información.  ',
    'MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TEXT_ERROR_MESSAGE' => 'Hubo un error en el procesamiento de la transacción. Inténtelo otra vez.  ',
];

if (IS_ADMIN_FLAG === true) {
    if (defined('MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_STATUS') && MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_STATUS == 'True') {
        $define['MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TEXT_DESCRIPTION'] = '<a rel="noreferrer noopener" target="_blank" href="https://' . (MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TESTMODE == 'Sandbox' ? 'demo.' : '') . 'globalgatewaye4.firstdata.com">First Data GGe4 Inicio de sesión de comerciante</a>' .
            (MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TESTMODE != 'Production' ? '<br><br>Para TARJETAS DE PRUEBA, consulte <a href="https://support.payeezy.com/hc/en-us/articles/204504235-Using-test-credit -card-numbers" rel="noreferrer noopener" target="_blank">Uso de tarjetas de crédito de prueba</a>' : '') .
            '<br><br><strong>CONFIGURACIÓN</strong><br>Su configuración de "URL de enlace de recibo" en la configuración de su Primera página de pago de datos debe apuntar a <u>' . zen_catalog_href_link('checkout_process') . '</u><br>' .
            'Luego, obtenga el ID de la página de pago, la clave de transacción y la clave de respuesta de First Data e ingréselos aquí. Se pueden encontrar iniciando sesión en su cuenta de First Data, eligiendo Páginas de pago y haciendo clic en la ID de página deseada y navegando a la sección Seguridad.';
    } else {
        $define['MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TEXT_DESCRIPTION'] = 'Hosted Checkout Payment Pages son disponibles para todos los usuarios First Data, Global Gateway e4 y Linkpoint.<br><br>
             Su comercial First Data puede ayudar con los cambios necesarios para habilitar Hosted Checkout (HCO) en su cuenta.<br><br>
             <a rel="noreferrer noopener" target="_blank" href="https://www.zen-cart.com/partners/firstdatahosted/">Pinche Aquí para Contratar una cuenta First Data Hosted Checkout</a><br><br>
             <a rel="noreferrer noopener" target="_blank" href="https://globalgatewaye4.firstdata.com/">Pinche para Entrar en la First Data GGe4 Merchant Area</a>';
    }
}

return $define;
