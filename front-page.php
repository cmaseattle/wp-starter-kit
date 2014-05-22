<?php get_header(); ?>

<!-- homepage -->

<!-- bare bones loop -->
<?php
$query = new WP_Query( 
	array(
		'post_type'	=> 'post' 
		/* your arguments */
	)
);
if ( $query->have_posts() ) : ?>
	<!-- the loop -->
	<?php while ( $query->have_posts() ) : $query->the_post(); ?>
		<a href="<?php the_permalink() ?>"><?php the_title(); ?></a> - <?php the_time('l, F j, Y') ?>
		<?php the_excerpt(); ?>
	<?php endwhile; ?>
	<!-- end of the loop -->
	<?php wp_reset_postdata(); ?>
<?php else:  ?>
  <p><?php _e( 'Error message or content.' ); ?></p>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>