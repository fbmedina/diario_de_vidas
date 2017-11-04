<?php

	function member() {

		$labels = array(
			'name'                  => _x( 'Members', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'Member', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'Miembros del equipo', 'text_domain' ),
			'name_admin_bar'        => __( 'Miembros del equipo', 'text_domain' ),
			'archives'              => __( 'Archivo del miembro', 'text_domain' ),
			'attributes'            => __( 'Atributos del miembro', 'text_domain' ),
			'parent_item_colon'     => __( 'Miembro principal', 'text_domain' ),
			'all_items'             => __( 'Todos los miembros', 'text_domain' ),
			'add_new_item'          => __( 'Agregar nuevo miembro', 'text_domain' ),
			'add_new'               => __( 'Agrega un miembro del equipo', 'text_domain' ),
			'new_item'              => __( 'Nuevo miembro', 'text_domain' ),
			'edit_item'             => __( 'EdiFeatured Imagetar miembro', 'text_domain' ),
			'update_item'           => __( 'Actualización de miembro', 'text_domain' ),
			'view_item'             => __( 'Ver miembro', 'text_domain' ),
			'view_items'            => __( 'Ver miembros', 'text_domain' ),
			'search_items'          => __( 'Buscar miembro', 'text_domain' ),
			'not_found'             => __( 'No se encontró', 'text_domain' ),
			'not_found_in_trash'    => __( 'No se encontró en la papelera', 'text_domain' ),
			'featured_image'        => __( 'Foto principal', 'text_domain' ),
			'set_featured_image'    => __( 'Establecer imagen principal', 'text_domain' ),
			'remove_featured_image' => __( 'Remover imagen principal', 'text_domain' ),
			'use_featured_image'    => __( 'Usar como imagen principal', 'text_domain' ),
			'insert_into_item'      => __( 'Insertar en miembro', 'text_domain' ),
			'uploaded_to_this_item' => __( 'Cargado a equipo', 'text_domain' ),
			'items_list'            => __( 'Lista de miembros', 'text_domain' ),
			'items_list_navigation' => __( 'Lista de navegación de miembros', 'text_domain' ),
			'filter_items_list'     => __( 'Filtrar lista de miembros', 'text_domain' ),
		);
		$args = array(
			'label'                 => __( 'Member', 'text_domain' ),
			'description'           => __( 'Miembros del equipo', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', ),
			'taxonomies'            => array( 'category', 'post_tag' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-admin-users',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'member', $args );

	}
	add_action( 'init', 'member', 0 );

?>