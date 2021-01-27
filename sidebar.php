<?php
/**
 * The sidebar containing the main widget area
 */

	if ( is_active_sidebar( 'sidebar-1' ) ) { ?>

		<div class="col-md-3">
			<aside class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</aside>
		</div>
	
	<?php } ?>





