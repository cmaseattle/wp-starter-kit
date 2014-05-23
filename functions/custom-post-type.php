<?php
add_action( 'init', 'custom_post_type' );
function custom_post_type() {
  register_post_type( 'example',
    array(
      'labels' => array(
        'name' => __( 'Examples' ),
        'singular_name' => __( 'Example' )
      ),
    'public' => true,
    'has_archive' => false,
    'supports' => array( 'title', 'thumbnail', 'editor' ),
    'show_in_menu' => true
    )
  );
}

/*
This following function will list out the 5 most recent
posts of a custom post type based on the post type slug. It's
using the built-in functionality of WP_Query and can be changed
infinitely to your needs or removed completely. 

Use in any template file you want by simply calling the function:
<?php get_custom_post_list('post-slug'); ?>
*/

function get_custom_post_list($slug) {
  $query = new WP_Query( 
    array(
      'post_type'   => $slug,
      'post_count'  => 5
      /* more arguments */
    )
  );
  if ( $query->have_posts() ) :
    while ( $query->have_posts() ) : $query->the_post();
      echo '<article>';
      echo '<a href="'.get_the_permalink().'">'.get_the_title().'</a>';
      echo '<p>'.get_the_excerpt().'</p>';
      echo '</article>';
    endwhile;
    wp_reset_postdata();
  else:
    echo 'error message';
  endif;
}

?>