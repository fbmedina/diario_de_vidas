<?php get_header() ?>

	<?php if ( have_posts() ) { ?>
		
			<?php while ( have_posts() ) { ?>
				<?php the_post(); ?>


			<?php } ?>

	<?php } else { ?>
		<!-- Content -->
	<?php } wp_reset_query(); ?>
</main>
<?php get_footer() ?>