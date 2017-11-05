<?php get_header() ?>
<?php the_post() ?>
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
		<?php the_content(); ?>
	</section>
</main>

<?php get_footer() ?>