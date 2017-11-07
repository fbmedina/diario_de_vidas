<?php get_header() ?>

	<section class="title">
		<h2><?php the_title() ?></h2>
	</section>
		<?php
			$arg = array(
				'post_type'			=> 'member',
				'posts_per_page'	=> -1
			);

			$get_arg = new WP_Query( $arg );

			while ( $get_arg->have_posts() ) {
				$get_arg->the_post();
			?>
		     	<section class="half-left">
		     		<?php the_post_thumbnail('member'); ?>
		     	</section>

		     	<section class="half-right">
		     		<h3 class="member_name"><?php the_title() ?></h3>
		     		<h4 class="rol"><?php echo get_post_meta($post->ID, 'Rol', true); ?></h4>
		     		<p><?php the_content() ?></p>
		     	</section>
		    <?php } wp_reset_postdata();
		?>
</main>

<?php get_footer() ?>
