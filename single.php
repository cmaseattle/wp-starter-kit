<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<section>
	<div class="container">
		<div class="main">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</div>
		<div class="sidebar">
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
<?php endwhile; ?>

<?php get_footer(); ?>