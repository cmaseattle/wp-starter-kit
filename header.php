<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width" charset="UTF-8">
<title><?php get_bloginfo('name'); ?></title>
<!--[if IE]>
	<script src="<?php bloginfo('template_url') ?>/js/html5shiv.js"></script>
<![endif]-->
<?php wp_head() ?>
</head>

<body>
	<nav>
		<h1><?php bloginfo('name'); ?></h1>
		<?php 
		wp_nav_menu( array(
			'container' => false,
			'menu'		=> 'primary',
		) ); ?>
	</nav>