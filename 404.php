<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header(); ?>

	<main id="main" class="site-main container section" role="main">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title text-danger"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'itworksb5' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'itworksb5' ); ?></p>

				<div class="mb-3">
					<?php	include get_template_directory() . '/searchform.php'; ?>
				</div>
				<div class="mb-3">
					<?php
						the_widget( 'WP_Widget_Recent_Posts' );

						// Only show the widget if site has multiple categories.
						if ( itworksb5_categorized_blog() ) :
					?>
				</div>

				<div class="widget mb-3">
					<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'itworksb5' ); ?></h2>
					<ul>
					<?php
						wp_list_categories( array(
							'orderby'    => 'count',
							'order'      => 'DESC',
							'show_count' => 1,
							'title_li'   => '',
							'number'     => 10,
						) );
					?>
					</ul>
				</div><!-- .widget -->
				<div class="mb-3">
					<?php
						endif;

						/* translators: %1$s: smiley */
						$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'itworksb5' ), convert_smilies( ':)' ) ) . '</p>';
						
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
					?>
				</div>
				<div class="mb-3">
					<?php	the_widget( 'WP_Widget_Tag_Cloud' ); ?>
				</div>

			</div><!-- .page-content -->
		</section>

	</main><!-- #main -->
		

<?php
get_footer();
