<?php
/**
 * Main Shopping Cart actions supported.
 *
 * The main cart actions supported by the shopping_cart class.
 * This can be added to externally using the extra_cart_actions directory.
 *
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2021 Jan 04 Modified in v1.5.8-alpha $
 */
if (!defined('IS_ADMIN_FLAG')) {
    die('Illegal Access');
}

/**
 * NOTE: the $goto and $parameters variables are set by init_cart_handler.php
 */

/**
 * include the list of extra cart action files  (*.php in the extra_cart_actions folder)
 */
foreach (zen_get_files_in_directory(DIR_WS_INCLUDES . 'extra_cart_actions') as $file) {
    include($file);
}

switch ($_GET['action']) {
    /**
     * customer wants to update the product quantity in their shopping cart
     * delete checkbox or 0 quantity removes from cart
     */
    case 'update_product' :
        $_SESSION['cart']->actionUpdateProduct($goto, $parameters);
        break;
    /**
     * customer adds a product from the products page
     */
    case 'add_product' :
        $_SESSION['cart']->actionAddProduct($goto, $parameters);
        break;
    case 'buy_now' :
        /**
         * performed by the 'buy now' button in product listings and review page
         */
        $_SESSION['cart']->actionBuyNow($goto, $parameters);
        break;
    case 'multiple_products_add_product' :
        /**
         * performed by the multiple-add-products button
         */
        $_SESSION['cart']->actionMultipleAddProduct($goto, $parameters);
        break;
    case 'notify' :
        $_SESSION['cart']->actionNotify($goto, $parameters);
        break;
    case 'notify_remove' :
        $_SESSION['cart']->actionNotifyRemove($goto, $parameters);
        break;
    case 'cust_order' :
        $_SESSION['cart']->actionCustomerOrder($goto, $parameters);
        break;
    case 'remove_product' :
        $_SESSION['cart']->actionRemoveProduct($goto, $parameters);
        break;
    case 'cart' :
        $_SESSION['cart']->actionCartUserAction($goto, $parameters);
        break;
    case 'empty_cart' :
        $_SESSION['cart']->reset(true);
        break;
}
