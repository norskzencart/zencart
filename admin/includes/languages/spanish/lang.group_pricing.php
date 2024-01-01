<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: torvista 2022 Feb 14 New in v1.5.8-alpha $
*/

$define = [
    'HEADING_TITLE' => 'Precios para Grupos',
    'TABLE_HEADING_GROUP_NAME' => 'Nombre de Grupo',
    'TABLE_HEADING_GROUP_AMOUNT' => '% Descuento',
    'TEXT_HEADING_NEW_PRICING_GROUP' => 'Nuevo precio de Grupo',
    'TEXT_HEADING_EDIT_PRICING_GROUP' => 'Editar precio de Grupo',
    'TEXT_HEADING_DELETE_PRICING_GROUP' => 'Borrar precio de Grupo',
    'TEXT_NEW_INTRO' => 'Rellene la siguiente información para el nuevo Grupo',
    'TEXT_DELETE_INTRO' => '¿Está seguro de que desea borrar este Grupo?',
    'TEXT_DELETE_PRICING_GROUP' => 'Borrar Grupo',
    'TEXT_DELETE_WARNING_GROUP_MEMBERS' => '<b>AVISO:</b> ¡Hay %s clientes vinculados a este Grupo!',
    'TEXT_GROUP_PRICING_NAME' => 'Nombre de Grupo: ',
    'TEXT_GROUP_PRICING_AMOUNT' => 'Porcentaje de Descuento: ',
    'TEXT_CUSTOMERS' => 'Clientes en el Grupo:',
    'ERROR_GROUP_PRICING_CUSTOMERS_EXIST' => 'ERROR: Existen clientes en este Grupo. Confirme que quiere quitar todos los miembros del Grupo y borrarlo.',
    'ERROR_MODULE_NOT_CONFIGURED' => 'NOTA: Hay definiciones de Precios de Grupo => pero no está activado el módulo Descuento por Grupo.<br>Vaya a Admin->Módulos->Total de Pedido->Descuento por Grupo (ot_group_pricing) e instale y configure el módulo.',
];

return $define;
