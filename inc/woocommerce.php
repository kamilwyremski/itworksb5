<?php
/**
 * WooCommerce Compatibility File
 */

function itworksb5_woocommerce_setup() {
	add_theme_support( 'woocommerce', array(
		'thumbnail_image_width' => 150,
		'single_image_width'    => 300,

		'product_grid'          => array(
					'default_rows'    => 3,
					'min_rows'        => 2,
					'max_rows'        => 8,
					'default_columns' => 3,
					'min_columns'     => 2,
					'max_columns'     => 5,
			),
	) );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'itworksb5_woocommerce_setup' );

function itworksb5_woocommerce_scripts() {
	wp_enqueue_style( 'itworksb5-woocommerce-style', get_template_directory_uri() . '/woocommerce.css' );
}
add_action( 'wp_enqueue_scripts', 'itworksb5_woocommerce_scripts' );

add_filter('woocommerce_form_field_args','wc_form_field_args',10,3);

function wc_form_field_args( $args, $key, $value = null ) {

	switch ( $args['type'] ) {

    case "select" : 
        $args['class'][] = 'form-group'; 
        $args['input_class'] = array('form-control', 'input-lg'); 
        $args['label_class'] = array('control-label');
        $args['custom_attributes'] = array( 'data-plugin' => 'select2', 'data-allow-clear' => 'true', 'aria-hidden' => 'true',  ); 
    break;

    case 'country' :
        $args['class'][] = 'form-group single-country';
        $args['label_class'] = array('control-label');
    break;

    case "state" :
        $args['class'][] = 'form-group'; 
        $args['input_class'] = array('form-control', 'input-lg'); 
        $args['label_class'] = array('control-label');
        $args['custom_attributes'] = array( 'data-plugin' => 'select2', 'data-allow-clear' => 'true', 'aria-hidden' => 'true',  );
    break;

    case "password" :
    case "text" :
    case "email" :
    case "tel" :
    case "number" :
        $args['class'][] = 'form-group';
        $args['input_class'] = array('form-control', 'input-lg');
        $args['label_class'] = array('control-label');
    break;

    case 'textarea' :
        $args['input_class'] = array('form-control', 'input-lg');
        $args['label_class'] = array('control-label');
    break;

    case 'checkbox' :  
    break;

    case 'radio' :
    break;

    default :
        $args['class'][] = 'form-group';
        $args['input_class'] = array('form-control', 'input-lg');
        $args['label_class'] = array('control-label');
    break;
  }

  return $args;
}

remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
add_action( 'woocommerce_before_shop_loop_item_title', 'custom_loop_product_thumbnail', 10 );
function custom_loop_product_thumbnail() {
    global $product;
    $size = 'woocommerce_thumbnail';
    $image_size = apply_filters( 'single_product_archive_thumbnail_size', $size );
    echo $product ? '<div class="woocommerce-loop-product__img">'.$product->get_image( $image_size ).'</div>' : '';
}
