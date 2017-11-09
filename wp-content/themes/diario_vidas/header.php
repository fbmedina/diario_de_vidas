<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php get_template_part('_includes/iOS', 'icons') ?>
	<?php wp_head() ?>
</head>
<body>

<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
	<nav class="header">
		<p class="centered bigger"><i class="fa fa-bars" aria-hidden="true"></i></p>
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'header_menu' ) ); ?>
	</nav>
<?php } ?>

	<header>
		<h1>Diario de Vidas</h1>
		<div class="main_description">
			<p>Autobiografía y relatos de vida para el apoyo a la diversidad sexual adolescente.</p>
		</div>
		<div class="down">
			<a href="#main"><p class="big"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i></p></a>
		</div>
	</header>
<main id="main">
	<section class="remarkable">
		<h1>Diario de Vidas</h1>
	</section>