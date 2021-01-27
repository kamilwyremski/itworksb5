<?php
/**
 * The template for displaying archive pages
 */

get_header(); ?>

	<main id="main" class="site-main container section" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<div class="row">
				<div class="col">
					<?php

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
				
				<?php include get_template_directory() . '/sidebar.php'; ?>

		</div>

	</main><!-- #main -->

<?php
get_footer();
