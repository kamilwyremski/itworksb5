<?php
/**
 * WooCommerce Compatibility File
 */

function itworksb5_woocommerce_setup() {
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'itworksb5_woocommerce_setup' );

function itworksb5_woocommerce_scripts() {
	wp_enqueue_style( 'itworksb5-woocommerce-style', get_template_directory_uri() . '/woocommerce.css' );
}
add_action( 'wp_enqueue_scripts', 'itworksb5_woocommerce_scripts' );

function wc_form_field_args($args, $key, $value) {
	$args['input_class'] = array( 'form-control' );
	return $args;
} 
add_filter('woocommerce_form_field_args', 'wc_form_field_args' ,10,3);
