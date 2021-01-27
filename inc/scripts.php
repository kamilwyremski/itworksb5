<?php
/**
 * Enqueue scripts and styles.
 */
function itworksb5_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/bootstrap-5/css/bootstrap.min.css', array(), 'v5.0.0-beta1' );

	wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css', array(), '5.15.1' );

	wp_enqueue_style( 'itworksb5-style', get_template_directory_uri().'/style.css', array(), '1.0.0' );

	wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/assets/bootstrap-5/js/bootstrap.bundle.min.js', array('jquery'), 'v5.0.0-beta1' );

	wp_enqueue_script( 'itworksb5-js', get_template_directory_uri() . '/assets/app.js', array(), '1.0.0' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'itworksb5_scripts' );

/**
 * Filter the HTML script tag of `fontawesome` script to add `defer` attribute.
 *
*/
function itworksb5_defer_scripts( $tag, $handle, $src ) {
	// The handles of the enqueued scripts we want to defer
	$defer_scripts = array( 
		'fontawesome'
	);
    if ( in_array( $handle, $defer_scripts ) ) {
        return '<script src="' . $src . '" defer></script>';
    }
    return $tag;
}
add_filter( 'script_loader_tag', 'itworksb5_defer_scripts', 10, 3 );