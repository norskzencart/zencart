<?php
$define = [
    'MODULE_SHIPPING_FREEOPTIONS_TEXT_TITLE' => 'Opciones de Envío Gratis',
    'MODULE_SHIPPING_FREEOPTIONS_TEXT_DESCRIPTION' => '
El módulo Free Shipping Options es para mostrar una opción de envío gratis cuando hay otros módulos de envío mostrados.
Puede depender en: Siempre Mostrado, Total de Pedido, Peso de Pedido, Unidades del Pedido.
El módulo Free Shipping Options no se muestra cuando Free Shipper esta mostrado.<br><br>
Fijando Total  >= 0.00 y <= 0.00 activará este módulo para mostrarse con todos los otros módulo, aparte del Free Shipping - freeshipper.<br><br>
NOTA: Si deja todos los campos de Total, Peso y Unidades en blanco desactivará el módulo.<br><br>
NOTA: El módulo Free Shipping Options no se muestra si Free Shipping está en uso, basado en peso cero permite Free Shipping.
Ve: freeshipper
',
    'MODULE_SHIPPING_FREEOPTIONS_TEXT_WAY' => 'Envío Gratis',
];

return $define;