<?php

if ( ! function_exists( 'itworksb5_setup' ) ) :
	
	function itworksb5_setup() {

		load_theme_textdomain( 'itworksb5', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'customize-selective-refresh-widgets' );
	
		add_theme_support( 'align-wide' );

		add_theme_support( 'responsive-embeds' );

		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'itworksb5' ),
		) );

		register_nav_menus( array(
			'footer' => esc_html__( 'Footer', 'itworksb5' ),
		) );

		add_theme_support( 'custom-logo', array(
			'height'      => 75,
			'width'       => 320,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;

add_action( 'after_setup_theme', 'itworksb5_setup' );

require get_template_directory() . '/inc/scripts.php';

require get_template_directory() . '/inc/widgets.php';

require get_template_directory() . '/inc/template-tags.php';

require get_template_directory() . '/inc/bootstrap-pagination.php';

require get_template_directory() . '/inc/bootstrap-walker.php';

if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
