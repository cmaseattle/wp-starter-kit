<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
<section>
	<div class="container">
		<div class="main">
			<h1 class="page-title">
				<?php	printf( __( 'Search Results for: %s', 'wordpress-starter' ), get_search_query() ); ?>
			</h1>
			<?php while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>"><?php the_title(); ?></a> - <?php the_time('l, F j, Y') ?>
				<?php the_excerpt(); ?>
			<?php endwhile; ?>
		<?php else: ?>
			<p>No results found!</p>
		<?php endif; ?>
		</div>
		<div class="sidebar">
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>


<?php get_footer(); ?>