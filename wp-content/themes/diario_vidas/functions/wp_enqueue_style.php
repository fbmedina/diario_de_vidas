<?php 
	
	function dl_enqueue_style() {
		$theme_data = wp_get_theme();

		/* Register Scripts */
		wp_register_style('reset', get_parent_theme_file_uri('/assets/css/reset.css'), null, $theme_data->get( 'Version' ), 'screen');
		wp_register_style('mainStyle', get_parent_theme_file_uri('/assets/css/main.css'), array('reset'), $theme_data->get( 'Version' ), 'screen');
		wp_register_style('extraSmallScreen', get_theme_file_uri() . '/assets/css/screen-xs.css', null, null, null);
		wp_register_style('smallScreen', get_theme_file_uri() . '/assets/css/screen-sm.css', array('extraSmallScreen'), null, null);
		wp_register_style('mediumScreen', get_theme_file_uri() . '/assets/css/screen-md.css', array('smallScreen'), null, null);
		wp_register_style('largeScreen', get_theme_file_uri() . '/assets/css/screen-lg.css', array('mediumScreen'), null, null);
		wp_register_style('extraLargeScreen', get_theme_file_uri() . '/assets/css/screen-xl.css', array('largeScreen'), null, null);
		
		/* Enqueue Scripts */
		wp_enqueue_style('mainStyle');
		wp_enqueue_style('extraLargeScreen');
	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );
?>