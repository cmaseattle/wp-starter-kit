<?php
// custom excerpt length
function custom_excerpt_length( $length ) {
	return 80;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// theme supports
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_post_type_support('page', 'excerpt');

// create a primary menu that is used in your header.php file
register_nav_menus( array(
	'primary' => __( 'Primary', 'wordpress_starter' ),
) );

// queue up the stylesheet and javascript that relies on jquery
function wordress_starter_queue() {
	wp_enqueue_style( 'site-css',  get_stylesheet_uri(), array('dashicons') );
	wp_enqueue_script( 'site-js',  get_template_directory_uri() . '/js/site.js', array('jquery') );
}
add_action( 'wp_enqueue_scripts', 'wordress_starter_queue' );

// pagination function
function wordpress_starter_pagination() {
  // Don't print empty markup if there's nowhere to navigate.
  $previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
  $next     = get_adjacent_post( false, '', false );

  if ( ! $next && ! $previous ) {
    return;
  }

  ?>
  <nav class="post-navigation" role="navigation">
    <?php
    if ( is_attachment() ) :
      previous_post_link( '%link', __( '<span class="meta-nav">Published In</span>%title', 'wordpress_starter' ) );
    else :
      previous_post_link( '%link', __( '<span class="prev">&#8592; %title </span>', 'wordpress_starter' ) );
      next_post_link( '%link', __( '<span class="next">%title &#8594; </span>', 'wordpress_starter' ) );
    endif;
    ?>
  </nav><!-- .navigation -->
  <?php
}