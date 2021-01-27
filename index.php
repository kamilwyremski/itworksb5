<?php
/**
 * The main template file
 *
 */

get_header(); ?>

	<main id="main" class="site-main container section" role="main">
		<div class="container">
			<div class="row">
				<div class="col-md-9"> 
			<?php
			if ( have_posts() ) :

				if ( is_home() && ! is_front_page() ) : ?>
					<header>
						<h1><?php single_post_title(); ?></h1>
					</header>
				<?php	endif;			

						/* Start the Loop */
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', get_post_format() );

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
			</div>
			<?php require get_template_directory() . '/sidebar.php'; ?>
		</div>
	</main><!-- #main -->

<?php
get_footer();
