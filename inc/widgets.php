<?php
/**
 * Register widget area.
 */
function footer_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'itworksb5' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'itworksb5' ),
		'before_widget' => '<section id="%1$s" class="widget card %2$s"><div class="card-body">',
		'after_widget'  => '</div></section>',
		'before_title'  => '<h3 class="widget-title card-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'itworksb5' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', '' ),
		'before_widget' => '<section id="%1$s" class="widget card %2$s"><div class="card-body">',
		'after_widget'  => '</div></section>',
		'before_title'  => '<h3 class="widget-title card-title">',
		'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'itworksb5' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', '' ),
		'before_widget' => '<section id="%1$s" class="widget card %2$s"><div class="card-body">',
		'after_widget'  => '</div></section>',
		'before_title'  => '<h3 class="widget-title card-title">',
		'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'itworksb5' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', '' ),
		'before_widget' => '<section id="%1$s" class="widget card %2$s"><div class="card-body">',
		'after_widget'  => '</div></section>',
		'before_title'  => '<h3 class="widget-title card-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'footer_widgets_init' );