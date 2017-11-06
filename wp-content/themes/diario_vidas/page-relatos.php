<?php get_header() ?>

<main>
	<section class="landing">
		<h1>Diario de Vidas</h1>
		<div class="main_description">
			<p>Autobiografía y relatos de vida para el apoyo a la diversidad sexual adolescente.</p>
		</div>
	</section>
	<section class="remarkable">
		<h1>Diario de Vidas</h1>
	</section>
	<section class="content">
		<h2><?php the_title() ?></h2>
		<?php
			$arg = array(
				'post_type'		 => 'story',
				'posts_per_page' => -1
			);

			$get_arg = new WP_Query( $arg );

			while ( $get_arg->have_posts() ) {
				$get_arg->the_post();
			?>
				<article>
			     	<div>
			     		<h3 class="story_title"><?php the_title() ?></h3>
			     		<h4 class="story_author"><?php echo get_post_meta($post->ID, 'Autor', true); ?>.</h4>
			     	</div>
			     	<div>
			     		<p><?php the_content() ?></p>
			     	</div>
			     	<div>
			     		<div>
			     			<?php $image = get_field('imagen_1'); ?>
    							<img src="<?php echo $image['url']; ?>">
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
			     	<div>
			     		<p class="story_tags"><?php the_tags( '#', ' #', '' ); ?></p>
			     	</div>
			    </article>
		    <?php } wp_reset_postdata();
		?>
	</section>
</main>

<?php get_footer() ?>
