<?php

// Register Custom Post Type
function portfolio_post_type() {

	$labels = array(
		'name'                  => _x( 'portafolios', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'portafolio', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'portafolio', 'text_domain' ),
		'name_admin_bar'        => __( 'Portafolio', 'text_domain' ),
		'archives'              => __( 'Archivos de elemento', 'text_domain' ),
		'attributes'            => __( 'Atributos de elemento', 'text_domain' ),
		'parent_item_colon'     => __( 'Elemento principal', 'text_domain' ),
		'all_items'             => __( 'Todos los elementos', 'text_domain' ),
		'add_new_item'          => __( 'Agregar nuevo elemento', 'text_domain' ),
		'add_new'               => __( 'añadir nuevos', 'text_domain' ),
		'new_item'              => __( 'Nuevo elemento', 'text_domain' ),
		'edit_item'             => __( 'Editar elemento', 'text_domain' ),
		'update_item'           => __( 'Actualizar el elemento', 'text_domain' ),
		'view_item'             => __( 'Ver elemento', 'text_domain' ),
		'view_items'            => __( 'Ver elementos', 'text_domain' ),
		'search_items'          => __( 'Buscar elementos', 'text_domain' ),
		'not_found'             => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Eliminar imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en el elemento', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Subido a este elemento', 'text_domain' ),
		'items_list'            => __( 'Lista de elementos', 'text_domain' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'text_domain' ),
		'filter_items_list'     => __( 'Filtrar lista de elementos', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'portfolio', 'text_domain' ),
		'description'           => __( 'Personalización del portafolio', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-portfolio',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'portfolio_post_type', 0 );

?>
