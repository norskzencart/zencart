<?php
$define = [
    'NAVBAR_TITLE' => 'Expiró el tiempo de sesión',
    'HEADING_TITLE' => '¡Vaya! Expiró el tiempo de sesión',
    'HEADING_TITLE_LOGGED_IN' => '¡Vaya! Lo sentimos, no se puede realizar la operación solicitada.',
    'TEXT_INFORMATION' => '<p>Si estaba realizando un pedido, por favor identifíquese de nuevo y su carro de la compra será recuperado. Deberá volver a realizar el pago y completar su última compra. </p><p>Si completó su pedido y desea revisarlo' . (DOWNLOAD_ENABLED == 'true' ? ', o tiene una descarga y desea completarla' : '') . ', por favor, vaya a <a href="' . zen_href_link(FILENAME_ACCOUNT) . '">Mi Cuenta</a> para visualizar su pedido.</p>',
    'TEXT_INFORMATION_LOGGED_IN' => 'Aún está conectado a su cuenta y puede seguir comprando.',
    'HEADING_RETURNING_CUSTOMER' => 'Entrar',
];

return $define;
