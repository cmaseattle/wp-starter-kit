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

?>