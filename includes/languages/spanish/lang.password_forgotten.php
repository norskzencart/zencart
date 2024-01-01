<?php
$define = [
    'NAVBAR_TITLE_1' => 'Entrar',
    'NAVBAR_TITLE_2' => 'Contraseña Olvidada',
    'HEADING_TITLE' => 'Contraseña Olvidada',
    'TEXT_MAIN' => 'Introduzca su e-mail y le enviaremos un mensaje con su nueva contraseña.',
    'EMAIL_PASSWORD_REMINDER_SUBJECT' => STORE_NAME . ' - Nueva contraseña',
    'EMAIL_PASSWORD_REMINDER_BODY' => 'Existe una solicitud de una nueva contraseña desde ' . $_SERVER['REMOTE_ADDR'] . '.' . "\n\n" . 'Su contraseña nueva para \'' . STORE_NAME . '\' es:' . "\n\n" . '   %s' . "\n\n Después de entrar en su cuenta con esta nueva contraseña, puede cambiarla en la página 'Mi Cuenta'.",
    'SUCCESS_PASSWORD_SENT' => 'Gracias. Si esa dirección de correo electrónico existe en nuestro sistema, le enviaremos instrucciones de recuperación de contraseña a esa dirección (no olvide revisar la carpeta Spam).',
];

return $define;
