<?php	if( have_rows('carousel') ): ?>
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <?php 
        $i = 0; 
        while ( have_rows('carousel') ) : the_row(); ?>	
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $i ?>" class="<?php if($i==0){echo('active');} $i++;?>"></li>
      <?php endwhile; ?>
    </ol>
    <div class="carousel-inner">
      <?php 
        $flag = true; 
        while ( have_rows('carousel') ) : the_row(); ?>
        <div class="carousel-item <?php if($flag){echo('active');$flag = false;} ?>">
          <img src="<?php echo get_sub_field('image')['url']; ?>" class="d-block w-100" alt="<?php echo get_sub_field('image')['alt']; ?>" loading="lazy">
          <div class="carousel-caption d-none d-md-block">
            <?php echo get_sub_field('caption'); ?>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>
<?php endif; ?>