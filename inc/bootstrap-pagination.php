<?php

if ( ! function_exists( 'bootstrap_pagination' ) ):

  function bootstrap_pagination( \WP_Query $wp_query = null, $echo = true, $params = [] ) {
      if ( null === $wp_query ) {
          global $wp_query;
      }

      $add_args = [];

      $pages = paginate_links( array_merge( [
              'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
              'format'       => '?paged=%#%',
              'current'      => max( 1, get_query_var( 'paged' ) ),
              'total'        => $wp_query->max_num_pages,
              'type'         => 'array',
              'show_all'     => false,
              'end_size'     => 3,
              'mid_size'     => 1,
              'prev_next'    => true,
              'prev_text'    => __( '« Wstecz' ),
              'next_text'    => __( 'Dalej »' ),
              'add_args'     => $add_args,
              'add_fragment' => ''
          ], $params )
      );

      if ( is_array( $pages ) ) {
          //$current_page = ( get_query_var( 'paged' ) == 0 ) ? 1 : get_query_var( 'paged' );
          $pagination = '<div class="pagination"><ul class="pagination">';

          foreach ( $pages as $page ) {
              $pagination .= '<li class="page-item' . (strpos($page, 'current') !== false ? ' active' : '') . '"> ' . str_replace('page-numbers', 'page-link', $page) . '</li>';
          }

          $pagination .= '</ul></div>';

          if ( $echo ) {
              echo $pagination;
          } else {
              return $pagination;
          }
      }

      return null;
  }

endif;