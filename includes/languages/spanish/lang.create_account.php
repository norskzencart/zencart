<?php
$define = [
    'NAVBAR_TITLE' => 'Crear Cuenta',
    'HEADING_TITLE' => 'Crear Cuenta',
    'TEXT_ORIGIN_LOGIN' => '<strong class="note">NOTA:</strong> Si ya tiene una cuenta con nosotros, por favor, entre en <a href="%s">su cuenta</a>.',
    'ERROR_CREATE_ACCOUNT_SPAM_DETECTED' => 'Gracias, su petición ha sido enviada para ser revisada por el administrador.',
    'EMAIL_SUBJECT' => 'Bienvenido a ' . STORE_NAME,
    'EMAIL_GREET_MR' => 'Estimado Sr. %s,' . "\n\n",
    'EMAIL_GREET_MS' => 'Estimada Sra. %s,' . "\n\n",
    'EMAIL_GREET_NONE' => 'Estimado/a %s,' . "\n\n",
    'EMAIL_WELCOME' => 'Bienvenido a <strong>' . STORE_NAME . '</strong>.',
    'EMAIL_SEPARATOR' => '--------------------',
    'EMAIL_COUPON_INCENTIVE_HEADER' => '¡Felicidades! Para hacer de su próxima visita a nuestra tienda online una experiencia más gratificante, ¡Aquí tiene un cupón de descuento creado para usted!' . "\n\n",
    'EMAIL_COUPON_REDEEM' => 'Para usar el cupón de descuento, ingrese el ' . TEXT_GV_REDEEM . 'código en el proceso del pago:  <strong>%s</strong>' . "\n\n",
    'EMAIL_GV_INCENTIVE_HEADER' => 'Sólo por hacer las compras de hoy, ¡le enviamos un ' . TEXT_GV_NAME . ' por %s!' . "\n",
    'EMAIL_GV_REDEEM' => 'El ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' es: %s ' . "\n\n" . 'Puede ingresar el ' . TEXT_GV_REDEEM . ' durante el pago, después de haber elegido productos en la tienda.',
    'EMAIL_GV_LINK' => 'o puede canjearlo ahora siguiendo este link: ' . "\n",
    'EMAIL_GV_LINK_OTHER' => 'Una vez que haya añadido el ' . TEXT_GV_NAME . ' a su cuenta, puede usar el ' . TEXT_GV_NAME . ' para usted, ¡o enviárselo a un amigo!' . "\n\n",
    'EMAIL_TEXT' => 'Su nueva cuenta le da acceso a los siguientes servicios:' . STORE_NAME . '

' . "<ul><li><strong>Carro Permanente</strong> - Cualquier de los productos añadidos a su carro online permanecerán allí hasta que usted los elimine o los compre.</li>" . '

' . "\n\n" . '

' . "\n\n" . '

' . "\n\n" . '

' . "</ul>",
    'EMAIL_CONTACT' => 'Para cualquier duda o problema en el uso de la tienda, envíenos un email a: <a href="mailto:' . STORE_OWNER_EMAIL_ADDRESS . '">' . STORE_OWNER_EMAIL_ADDRESS . "</a>.\n\n",
    'EMAIL_GV_CLOSURE' => "\n" . 'Atentamente,' . "\n\n" . STORE_OWNER . "\nPropietario\n\n" . '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">' . HTTP_SERVER . DIR_WS_CATALOG . "</a>\n\n",
    'EMAIL_DISCLAIMER_NEW_CUSTOMER' => 'Este email nos ha sido facilitado por usted o por alguien que se ha registrado en nuestra tienda. Si no ha sido usted, o piensa que ha recibido este mensaje por error, por favor, envíe un email a %s ',
];

return $define;
