<?php
$define = [
    'MODULE_PAYMENT_MONEYORDER_TEXT_TITLE' => 'Cheque/Giro Postal',
    'MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION' => 'Clientes puede enviar su pago por correos. Su email de confirmación del pedido le pedirá que <br><br>Por favor, remita su cheque o giro postal a:<br>' . (defined('MODULE_PAYMENT_MONEYORDER_PAYTO') ? MODULE_PAYMENT_MONEYORDER_PAYTO : '<br>(nombre de la tienda)') . '<br><br>Envie su pago a:<br>' . nl2br(STORE_NAME_ADDRESS) . '<br><br>' . 'El pedido no será enviado hasta que el pago sea recibido.',
];
if (defined('MODULE_PAYMENT_MONEYORDER_STATUS')) {
    $define['MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER'] = 'Por favor, remita su cheque o giro postal a:' . "\n\n" . MODULE_PAYMENT_MONEYORDER_PAYTO . "\n\n" . '

' . "\n" . STORE_NAME_ADDRESS . "\n\n" . 'Your order will not ship until we receive payment.';
}

return $define;
