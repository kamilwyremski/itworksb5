<?php
/**
 * The header for our theme
 *
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
		<?php
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
		?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand">
			<?php if ($logo): ?><img src="<?= $logo[0] ?>" alt="<?php bloginfo( 'name' ); ?>" class="navbar-brand__logo"><?php else: bloginfo( 'name' ); endif; ?>
		</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<?php
					$args = array(
						'theme_location' => 'primary',
						'depth'      => 3,
						'container'  => false,
						'menu_class'     => 'navbar-nav me-auto mb-2 mb-lg-0',
						'walker'     => new Bootstrap_Walker_Nav_Menu()
						);
					if (has_nav_menu('primary')) {
						wp_nav_menu($args);
					}
				?>
    </div>
  </div>
</nav>