<?php get_header() ?>
<?php the_post() ?>
	<section class="title">
		<h2><?php the_title() ?></h2>
	</section>
	<section class="content">
		<?php the_content(); ?>
	</section>
</main>

<?php get_footer() ?>