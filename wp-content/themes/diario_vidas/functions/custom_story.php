<?php

	function story() {

		$labels = array(
			'name'                  => _x( 'stories', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'story', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'Relatos', 'text_domain' ),
			'name_admin_bar'        => __( 'Relatos', 'text_domain' ),
			'archives'              => __( 'Archivo del relato', 'text_domain' ),
			'attributes'            => __( 'Atributos del relato', 'text_domain' ),
			'parent_item_colon'     => __( 'Relato principal', 'text_domain' ),
			'all_items'             => __( 'Todos los relatos', 'text_domain' ),
			'add_new_item'          => __( 'Crear nuevo relato', 'text_domain' ),
			'add_new'               => __( 'Crear nuevo', 'text_domain' ),
			'new_item'              => __( 'Nuevo relato', 'text_domain' ),
			'edit_item'             => __( 'Editar relato', 'text_domain' ),
			'update_item'           => __( 'Actualización de relato', 'text_domain' ),
			'view_item'             => __( 'Ver relato', 'text_domain' ),
			'view_items'            => __( 'Ver relatos', 'text_domain' ),
			'search_items'          => __( 'Buscar relato', 'text_domain' ),
			'not_found'             => __( 'No se encontró', 'text_domain' ),
			'not_found_in_trash'    => __( 'No se encontró en la papelera', 'text_domain' ),
			'featured_image'        => __( 'Foto principal', 'text_domain' ),
			'set_featured_image'    => __( 'Establecer imagen principal', 'text_domain' ),
			'remove_featured_image' => __( 'Remover imagen principal', 'text_domain' ),
			'use_featured_image'    => __( 'Usar como imagen principal', 'text_domain' ),
			'insert_into_item'      => __( 'Insertar en relato', 'text_domain' ),
			'uploaded_to_this_item' => __( 'Subido a esta historia', 'text_domain' ),
			'items_list'            => __( 'Lista de relatos', 'text_domain' ),
			'items_list_navigation' => __( 'Lista de navegación de relatos', 'text_domain' ),
			'filter_items_list'     => __( 'Filtrar lista de relatos', 'text_domain' ),
		);
		$args = array(
			'label'                 => __( 'story', 'text_domain' ),
			'description'           => __( 'Relatos', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', ),
			'taxonomies'            => array( 'category', 'post_tag' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-edit',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'story', $args );

	}
	add_action( 'init', 'story', 0 );

?>