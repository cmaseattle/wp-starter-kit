<?php
/*
Template Name: Custom Template
*/

/*
This is effectivley the same code as page.php right now,
but you can change this template up any way you want with
whatever loops you need and it will be available on your page's
admin
*/
get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<section>
	<div class="container">
		<div class="main">
			<h1>Custom Template for <?php the_title(); ?></h1>
			<?php the_content(); ?>
		</div>
		<div class="sidebar">
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
<?php endwhile; ?>

<?php get_footer(); ?>