<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
   wp_enqueue_style( 'childs-style', get_stylesheet_directory_uri().'/style.css' );
}
add_filter( 'woocommerce_add_to_cart_validation', 'stores_only_one_in_cart', 99, 2 );
   
function stores_only_one_in_cart( $passed, $added_product_id ) {
   wc_empty_cart();
   return $passed;
}
add_filter( 'woocommerce_is_sold_individually', '__return_true' );

?>