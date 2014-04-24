<?php
/* Sidebar Widget */
function register_widgets() {
	register_sidebar( array(
		'id' => 'sidebar_widget',
		'name' => __('Sidebar Widget Area', 'wordpress_starter'),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => "</li>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		) );
}

add_action( 'widgets_init', 'register_widgets' );
?>