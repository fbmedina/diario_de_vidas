<?php get_header() ?>

	<?php if ( have_posts() ) { ?>
		<section class="full">
			<?php while ( have_posts() ) { ?>
				<?php the_post(); ?>

				<article class="miembro">
			     	<div class="image">
			     		<?php the_post_thumbnail('member'); ?>
			     	</div>

			     	<div class="description">
			     		<h3 class="member_name"><?php the_title() ?></h3>
			     		<h4 class="rol"><?php echo get_post_meta($post->ID, 'Rol', true); ?></h4>
			     		<p><?php the_content() ?></p>
			     		<p class="align_right"><a href="mailto:<?php echo get_post_meta($post->ID, 'mail', true); ?>"><?php echo get_post_meta($post->ID, 'mail', true); ?></a></p>
			     	</div>
			     </article>

			<?php } ?>
		</section>
	<?php } else { ?>
		<!-- Content -->
	<?php } wp_reset_query(); ?>
</main>
<?php get_footer() ?>