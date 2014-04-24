<?php
// excerpt length
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
	wp_enqueue_style( 'site-css',  get_stylesheet_uri() );
	wp_enqueue_script( 'site-js',  get_template_directory_uri() . '/js/site.js', array('jquery') );
}
add_action( 'wp_enqueue_scripts', 'wordress_starter_queue' );