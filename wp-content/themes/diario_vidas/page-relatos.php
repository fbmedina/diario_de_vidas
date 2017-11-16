<?php get_header() ?>

	<?php
		$arg = array(
			'post_type'		 => 'story',
			'posts_per_page' => -1
		);

		$get_arg = new WP_Query( $arg );

		while ( $get_arg->have_posts() ) {
			$get_arg->the_post();
		?>
			<article class="full relato">
		     	<div class="about">
		     		<a href="<?php the_permalink() ?>">
		     			<h3 class="story_title"><?php the_title() ?></h3>
		     		</a>
		     		<h4 class="story_author">por: <?php echo get_post_meta($post->ID, 'Autor', true); ?>.</h4>
		     		<h5 class="author_age">(<?php echo get_post_meta($post->ID, 'Edad', true); ?> años)</h5>
		     	</div>
		     	<div class="content">
		     		<p><?php the_content() ?></p>
		     	</div>
		     	<div class="multimedia">
		     		<div>
		     			<?php $image = get_field('imagen_1'); ?>
							<img src="<?php echo $image['sizes']['story_img']; ?>">
					</div>

					<?php if (get_field('imagen_2')): ?>
						<div>
    						<?php $image2 = get_field('imagen_2'); ?>
    							<img src="<?php echo $image2['url']; ?>">
    					</div>
					<?php endif ?>

					<?php if (get_field('imagen_3')): ?>
						<div>
    						<?php $image3 = get_field('imagen_3'); ?>
    							<img src="<?php echo $image3['url']; ?>">
    					</div>
					<?php endif ?>
		     	</div>
		     	<div class="hashtags">
		     		<p class="story_tags"><?php the_tags( '#', ' #', '' ); ?></p>
		     	</div>
		    </article>
	    <?php } wp_reset_postdata();
	?>
</main>

<?php get_footer() ?>
