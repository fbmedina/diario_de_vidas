<?php 
	
	function dl_enqueue_style() {
		$theme_data = wp_get_theme();

		/* Register Scripts */
		wp_register_style('reset', get_parent_theme_file_uri('/assets/css/reset.css'), null, $theme_data->get( 'Version' ), 'screen');
		wp_register_style('mainStyle', get_parent_theme_file_uri('/assets/css/main.css'), array('reset'), $theme_data->get( 'Version' ), 'screen');
		wp_register_style('extraSmallScreen', get_theme_file_uri() . '/assets/css/screen-xs.css', array('mainStyle'), $theme_data->get( 'Version' ), 'screen');
		wp_register_style('smallScreen', get_theme_file_uri() . '/assets/css/screen-sm.css', array('extraSmallScreen'), $theme_data->get( 'Version' ), 'screen');
		wp_register_style('mediumScreen', get_theme_file_uri() . '/assets/css/screen-md.css', array('smallScreen'), $theme_data->get( 'Version' ), 'screen');
		wp_register_style('largeScreen', get_theme_file_uri() . '/assets/css/screen-lg.css', array('mediumScreen'), $theme_data->get( 'Version' ), 'screen');
		wp_register_style('xtraLargeScreen', get_theme_file_uri() . '/assets/css/screen-xl.css', array('largeScreen'), $theme_data->get( 'Version' ), 'screen');
		
		/* Enqueue Scripts */
		wp_enqueue_style('xtraLargeScreen');
	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );
?>