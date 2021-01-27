<?php
/**
 * The template for displaying the footer
 */
?>

<footer class="site-footer" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<?php dynamic_sidebar( 'footer-1' ); ?>
			</div>
			<div class="col-md-4">
				<?php dynamic_sidebar( 'footer-2' ); ?>
			</div>
			<div class="col-md-4">
				<?php dynamic_sidebar( 'footer-3' ); ?>
				<?php
					$args = array(
						'theme_location' => 'footer',
						'depth'      => 3,
						'container'  => false,
						'menu_class' => 'list-unstyled',
						'walker'     => new Walker_Nav_Menu()
						);
					if (has_nav_menu('footer')):	
				?>
					<div class="card widget">
						<div class="card-body">
							<?php wp_nav_menu($args); ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="site-info">
		<div class="container">
			<p class="mb-0">&copy; <?php bloginfo( 'name' );	echo ' - ';	echo date("Y"); ?></p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
