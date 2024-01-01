<?php
$define = [
    'MODULE_ORDER_TOTAL_COUPON_TITLE' => 'Cupones de Descuento',
    'MODULE_ORDER_TOTAL_COUPON_HEADER' => TEXT_GV_NAMES . '/Cupones de Descuento',
    'MODULE_ORDER_TOTAL_COUPON_DESCRIPTION' => 'Cupón de Descuento',
    'MODULE_ORDER_TOTAL_COUPON_TEXT_ENTER_CODE' => TEXT_GV_REDEEM,
    'MODULE_ORDER_TOTAL_COUPON_REDEEM_INSTRUCTIONS' => '<p>Escriba el código de su cupón en la casilla "Código del Cupón". El cupón se aplicará cuando pulse en "Siguiente". Aviso importante: sólo puede usarse un cupón por pedido.</p>',
    'MODULE_ORDER_TOTAL_COUPON_TEXT_CURRENT_CODE' => 'Su código de descuento: ',
    'TEXT_COMMAND_TO_DELETE_CURRENT_COUPON_FROM_ORDER' => 'QUITAR',
    'TEXT_REMOVE_REDEEM_COUPON' => '¡El Cupón de Descuento ha sido eliminado del pedido!',
    'MODULE_ORDER_TOTAL_COUPON_INCLUDE_ERROR' => ' Include tax = true, solamente cuando recalculate = None',
];

$define['MODULE_ORDER_TOTAL_COUPON_REMOVE_INSTRUCTIONS'] = '<p>Para eliminar un Cupón de Descuento del pedido teclee ' . $define['TEXT_COMMAND_TO_DELETE_CURRENT_COUPON_FROM_ORDER'] . ' y pulse la tecla "Entrar/Return" para recargar la página.</p>';

return $define;
