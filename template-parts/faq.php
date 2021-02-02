<?php
if( function_exists( 'have_rows' ) && have_rows('faq') ): ?>
  <div class="accordion mb-4" id="accordion">
    <?php 
      $i = 1;
      while ( have_rows('faq') ) : the_row(); ?>
      <div class="accordion-item">
        <h2 class="accordion-header" id="heading<?= $i ?>">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $i ?>" aria-expanded="<?php if($i==0){echo('true');}else{echo('false');} ?>" aria-controls="collapse<?= $i ?>">
            <?php echo get_sub_field('question'); ?>
          </button>
        </h2>
        <div id="collapse<?= $i ?>" class="accordion-collapse collapse <?php if($i==0){echo('show');} ?>" aria-labelledby="heading<?= $i ?>" data-bs-parent="#accordion">
          <div class="accordion-body">
            <p><?php echo get_sub_field('answer'); ?></p>
          </div>
        </div>
      </div>
    <?php $i++; endwhile; ?>
  </div>
<?php endif; ?>