<?php get_header() ?>

	<section class="title">
		<h2><?php the_title() ?></h2>
	</section>
	<section class="content">
		<div>
			<p><?php the_field('que_es_ddv_1'); ?></p>
		</div>
		<div>
			<p class="significant align_right">:Ejemplo de foto</p>
			<?php $image = get_field('imagen_1'); ?>
    		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
		</div>
		<div>
			<p class="significant">Ejemplo de video:</p>
			<?php the_field('video_de_ejemplo'); ?>
		</div>
		<div>
			<p><?php the_field('que_es_ddv_2'); ?></p>
		</div>
	</section>
	<section class="relato_example">
		<p>El siguiente es un ejemplo de relato real enviado anónimamente:</p>
		<p class="significant"><?php the_field('ejemplo_relato'); ?></p>
	</section>
</main>

<?php get_footer() ?>
