<?php get_header() ?>

	<section class="half-left">
		<p><?php the_field('que_es_ddv_1'); ?></p>
	</section>

	<section class="half-right">
		<p class="significant align_right">:Ejemplo de foto</p>
		<?php $image = get_field('imagen_1'); ?>
		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
	</section>

	<section class="half-left">
		<p class="significant">Ejemplo de video:</p>
		<?php if (get_field('video_de_ejemplo')): ?>
			<?php the_field('video_de_ejemplo'); ?>
		<?php else: ?>
			<?php $image = get_field('imagen_2'); ?>
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
		<?php endif ?>
	</section>

	<section class="half-right">	
		<p><?php the_field('que_es_ddv_2'); ?></p>
	</section>

	<section class="full">
		<p>El siguiente es un ejemplo de relato real enviado anónimamente:</p>
		<p class="significant"><?php the_field('ejemplo_relato'); ?></p>
	</section>
</main>

<?php get_footer() ?>
