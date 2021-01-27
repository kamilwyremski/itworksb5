<?php
/**
 * Template part for displaying posts
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="row">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php if ( is_single() ) : ?>
					<div class="post-thumbnail">
						<?php the_post_thumbnail('full'); ?>
					</div><!--  .post-thumbnail -->
				<?php else : ?>
					<div class="col-md-2 post-thumbnail">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
								<?php the_post_thumbnail('full', array('class' => 'rounded')); ?>
						</a>
					</div><!--  .post-thumbnail -->
				<?php endif; ?>
			<?php endif; ?>

			<div class="col">
				<header class="entry-header">
					<?php
					if ( is_single() ) :
						the_title( '<h1 class="entry-title">', '</h1>' );
					else :
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" title="'.get_the_title().'">', '</a></h2>' );
					endif; ?>
				</header><!-- .entry-header -->

				<?php
					if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta">
						<?php posted_on(); ?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
				
				<div class="entry-content">

					<?php
						if ( is_single() ) :
							the_content();
						else :
							the_excerpt();
						endif;
					?>
				</div><!-- .entry-content -->

				<footer class="entry-footer">
					<?php entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</div>
	</div>
</article><!-- #post-## -->
