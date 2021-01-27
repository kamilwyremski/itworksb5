<?php
/**
 * Template part for displaying page content in page.php
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php include get_template_directory() . '/template-parts/carousel.php'; ?>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-thumbnail">
			<?php the_post_thumbnail('full', array('class' => 'rounded')); ?>
		</div><!--  .post-thumbnail -->
	<?php endif; ?>
	
	<div class="container section">
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
				the_content();

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'itworksb5' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

		<?php include get_template_directory() . '/template-parts/faq.php'; ?>

		<?php include get_template_directory() . '/template-parts/gallery.php'; ?>

		<?php if ( get_edit_post_link() ) : ?>
			<footer class="entry-footer">
				<?php
					edit_post_link(
						sprintf(
							/* translators: %s: Name of current post */
							esc_html__( 'Edit %s', 'itworksb5' ),
							the_title( '<span class="screen-reader-text">"', '"</span>', false )
						),
						'<span class="edit-link">',
						'</span>'
					);
				?>
			</footer><!-- .entry-footer -->
		<?php endif; ?>
	</div>
</article><!-- #post-## -->
