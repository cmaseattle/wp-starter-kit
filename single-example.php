<?php 
/*
This template will be prioritized over single.php for a custom post type
created in the functions file (see the functions/custom-post-type.php example).
This file should be named single-{post_type}.php to be recognized as such.
*/

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<section>
	<div class="container">
		<div class="main">
			<h1><?php the_title(); ?></h1>
			<?php 
			the_tags()
			/*
			You can get your custom terms from a custom post's taxonomy if you need them here
			*/
			// the_terms($post->ID, 'category', 'categories: ', ' / ');
			?>
			<p>Post by: <?php the_author_posts_link() ?></p>
			<?php the_content(); ?>
		</div>
		<div class="sidebar">
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
<?php endwhile; ?>

<?php get_footer(); ?>