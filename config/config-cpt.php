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

register_post_type('moder',
    array(
      'labels' => array(
        'name'                => 'Modératices',
        'singular_name'       => 'Modératice',
        'add_new'             => 'Ajouter un modératice',
        'add_new_item'        => 'Ajouter un modératice',
        'edit_item'           => 'Modifier l\'modératice',
        'new_item'            => 'Modératice',
        'hide_item'           => 'Cacher l\'modératice',
        'show_item'           => 'Montrer l\'modératice',
        'view_item'           => 'Voir l\'modératice',
        'view_items'          => 'Voir les modératices',
        'search_items'        => 'Chercher un modératice',
        'not_found'           => 'Aucun modératice',
        'not_found_in_trash'  => 'Aucun modératice dans la corbeille',   
      ),
      'public' => true,
      'has_archive' => false,
      'menu_icon' => 'dashicons-businesswoman'
    )
);
remove_post_type_support( 'moder', 'editor' );