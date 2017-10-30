<?php 

	$files = glob(get_template_directory() . '/functions/*.php');

	foreach($files as $file) {
		if (basename($file, ".php") != 'back-compat') {
			require_once $file;
		}
	}

	function dl_enqueue_style() {
		wp_register_style('reset', get_theme_file_uri() . '/assets/css/reset.css', null, null, null);
		wp_register_style('mainStyle', get_theme_file_uri() . '/assets/css/style.css', null, null, null);
		wp_enqueue_style('reset');
		wp_enqueue_style('mainStyle');
	}
	
	add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );


	/**
	 * This Theme only works in WordPress 4.8 or later.
	*/

	$GLOBALS['wp_min_version'] = '4.8';

	if ( version_compare( $GLOBALS['wp_version'], $GLOBALS['wp_min_version'], '<' ) ) {
		require get_template_directory() . '/functions/back-compat.php';
		return;
	}

?>