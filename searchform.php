<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
  <div class="input-group">
    <input type="text" class="search-field form-control" placeholder="<?php echo __( 'Search', 'itworksb5' ) ?>" value="<?php echo get_search_query() ?>" name="s" aria-describedby="search-form">
      <span class="input-group-append">
        <button type="submit" class="btn btn-secondary" id="search-form"><?php echo __( 'Search', 'itworksb5' ) ?>
        </button>
      </span>
  </div>   
</form>