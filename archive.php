<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
<section>
	<div class="container">
		<div class="main">
			<h1 class="page-title">
					<?php
						if ( is_month() ) :
							printf( __( '%s', 'wordpress_starter' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'wordpress_starter' ) ) );
						else :
							_e( 'Archives', 'wordpress_starter' );
						endif;
					?>
				</h1>
				<?php while ( have_posts() ) : the_post(); ?>
					<a href="<?php the_permalink() ?>"><?php the_title(); ?></a> - <?php the_time('l, F j, Y') ?>
					<?php the_excerpt(); ?>
				<?php endwhile; ?>
		</div>
		<div class="sidebar">
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
<?php endif; ?>

<?php get_footer(); ?>