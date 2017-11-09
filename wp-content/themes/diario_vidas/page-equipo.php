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
		    <?php } wp_reset_postdata();
		?>
</main>

<?php get_footer() ?>
