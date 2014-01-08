<?php

/**
 * Duplicate a product action
 *
 * @access public
 * @return void
 */
function woocommerce_duplicate_product_action() {
	include_once('includes/duplicate_product.php');
	woocommerce_duplicate_product();
}

add_action('admin_action_duplicate_product', 'woocommerce_duplicate_product_action');

