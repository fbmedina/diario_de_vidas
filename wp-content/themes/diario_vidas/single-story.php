<?php get_header() ?>

	<?php if ( have_posts() ) { ?>
		<section class="full">
			<?php while ( have_posts() ) { ?>
				<?php the_post(); ?>

				<article class="full relato">
			     	<div class="about">
			     		<h3 class="story_title"><?php the_title() ?></h3>
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
	    							<img src="<?php echo $image2['sizes']['story_img']; ?>">
	    					</div>
						<?php endif ?>

						<?php if (get_field('imagen_3')): ?>
							<div>
	    						<?php $image3 = get_field('imagen_3'); ?>
	    							<img src="<?php echo $image3['sizes']['story_img']; ?>">
	    					</div>
						<?php endif ?>
			     	</div>
			     	<div class="hashtags">
			     		<p class="story_tags"><?php the_tags( '#', ' #', '' ); ?></p>
			     	</div>
			    </article>

			<?php } ?>
		</section>
	<?php } else { ?>
		<!-- Content -->
	<?php } wp_reset_query(); ?>
</main>
<?php get_footer() ?>