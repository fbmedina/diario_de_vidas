<?php
	
	function dl_image_sizes( $sizes ) {
		$addsizes = array(
			"member" => __( "Tamaño del la imagen principal del miembro del equipo"),
			"story_img" => __( "Tamaño del las imágenes de los relatos")
		);
		return array_merge($sizes, $addsizes);
	}

	if ( function_exists( 'add_theme_support' ) ) {
		add_image_size( 'member', 600, 600, true);
		add_image_size( 'story_img', 600);
		add_filter('image_size_names_choose', 'dl_image_sizes');
	}

?>