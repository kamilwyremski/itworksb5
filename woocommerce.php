<?php
/**
 * The template for displaying product pages
 */

get_header(); ?>

	<main id="main" class="site-main container section" role="main">

		<div class="row">
			<div class="col">
				<?php
					woocommerce_content();
				?>
			</div>
			<?php include get_template_directory() . '/sidebar.php'; ?>
		</div>
		
	</main><!-- #main -->

<?php
get_footer();
