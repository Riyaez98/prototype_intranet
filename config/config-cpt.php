<?php
/***
 *     ######  ##     ##  ######  ########  #######  ##     ##    ########   #######   ######  ########    ######## ##    ## ########  ########  ######  
 *    ##    ## ##     ## ##    ##    ##    ##     ## ###   ###    ##     ## ##     ## ##    ##    ##          ##     ##  ##  ##     ## ##       ##    ## 
 *    ##       ##     ## ##          ##    ##     ## #### ####    ##     ## ##     ## ##          ##          ##      ####   ##     ## ##       ##       
 *    ##       ##     ##  ######     ##    ##     ## ## ### ##    ########  ##     ##  ######     ##          ##       ##    ########  ######    ######  
 *    ##       ##     ##       ##    ##    ##     ## ##     ##    ##        ##     ##       ##    ##          ##       ##    ##        ##             ## 
 *    ##    ## ##     ## ##    ##    ##    ##     ## ##     ##    ##        ##     ## ##    ##    ##          ##       ##    ##        ##       ##    ## 
 *     ######   #######   ######     ##     #######  ##     ##    ##         #######   ######     ##          ##       ##    ##        ########  ######  
 */

// ====================================================================
// EXERCICES
// ====================================================================
register_post_type('exercices',
    array(
      'labels' => array(
        'name'                => 'Exercices',
        'singular_name'       => 'Exercice',
        'add_new'             => 'Ajouter un exercice',
        'add_new_item'        => 'Ajouter un exercice',
        'edit_item'           => 'Modifier l\'exercice',
        'new_item'            => 'Exercice',
        'hide_item'           => 'Cacher l\'exercice',
        'show_item'           => 'Montrer l\'exercice',
        'view_item'           => 'Voir l\'exercice',
        'view_items'          => 'Voir les exercices',
        'search_items'        => 'Chercher un exercice',
        'not_found'           => 'Aucun exercice',
        'not_found_in_trash'  => 'Aucun execrice dans la corbeille',   
      ),
      'public' => true,
      'has_archive' => false,
      'menu_icon' => 'dashicons-universal-access'
    )
);
remove_post_type_support( 'exercices', 'editor' );

// ====================================================================
// CALENDRIER
// ====================================================================
register_post_type('evenements',
    array(
      'labels' => array(
        'name'                => 'Évènements',
        'singular_name'       => 'Évènement',
        'add_new'             => 'Ajouter un évènement',
        'add_new_item'        => 'Ajouter un évènement',
        'edit_item'           => 'Modifier l\'évènement',
        'new_item'            => 'Évènement',
        'hide_item'           => 'Cacher l\'évènement',
        'show_item'           => 'Montrer l\'évènement',
        'view_item'           => 'Voir l\'évènement',
        'view_items'          => 'Voir les évènements',
        'search_items'        => 'Chercher un évènement',
        'not_found'           => 'Aucun évènement',
        'not_found_in_trash'  => 'Aucun évènement dans la corbeille',   
      ),
      'public' => true,
      'has_archive' => false,
      'menu_icon' => 'dashicons-calendar-alt'
    )
);
remove_post_type_support( 'évènements', 'editor' );

// ====================================================================
// MODÉRATRICE
// ====================================================================

function moder() {

	$labels = array(
		'name'                  => _x( 'Modératrices', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Modératrice', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Modératrice', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Ajouter nouvelle modératrice', 'text_domain' ),
		'add_new'               => __( 'Ajouter modératrice', 'text_domain' ),
		'new_item'              => __( 'Nouvelle modératrice', 'text_domain' ),
		'edit_item'             => __( 'Modifier modératrice', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Modératrice', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-businesswoman',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'post_type', $args );

}
add_action( 'init', 'moder', 0 );