<?php
  if( have_rows('gallery') ): ?>
    <div class="mb-4">
      <?php while ( have_rows('gallery') ) : the_row(); ?>
        <img src="<?php echo get_sub_field('image')['url']; ?>" style="height: 200px">
      <?php endwhile; ?>
    </div>
<?php
  endif;
?>