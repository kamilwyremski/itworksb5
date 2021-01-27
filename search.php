<?php
/**
 * The template for displaying search results pages
 */

get_header(); ?>

<main id="main" class="site-main container section" role="main">

	<?php
	if ( have_posts() ) : ?>

		<header class="page-header">
			<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'itworksb5' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		</header><!-- .page-header -->

		<?php
		/* Start the Loop */
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'search' );

		endwhile;

		?>
		<div class="row mt-5">
			<div class="col offset-md-2">
				<?php bootstrap_pagination(); ?>
			</div>
		</div>
		<?php

	else :

		get_template_part( 'template-parts/content', 'none' );

	endif; ?>

</main><!-- #main -->

<?php
get_footer();
