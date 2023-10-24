<?php

function addToCart(){
	global $woocommerce;

	$p_id = $_POST['p_id'];
	$p_q = $_POST['p_q'];

	if( $woocommerce->cart->add_to_cart( $product_id = $p_id, $quantity = $p_q ) ){
		$result = [
			"status" => 'success',
			"id" => $p_id,
			"qty" => $p_q,
			"count" => count($woocommerce->cart->get_cart())
		];
	} else {
		$result = [
			"status" => 'error'
		];
	}

	echo json_encode($result);

	wp_die();
}
add_action('wp_ajax_addToCart', 'addToCart');
add_action('wp_ajax_nopriv_addToCart', 'addToCart');