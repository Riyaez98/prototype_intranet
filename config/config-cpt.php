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
        'name'                => '??v??nements',
        'singular_name'       => '??v??nement',
        'add_new'             => 'Ajouter un ??v??nement',
        'add_new_item'        => 'Ajouter un ??v??nement',
        'edit_item'           => 'Modifier l\'??v??nement',
        'new_item'            => '??v??nement',
        'hide_item'           => 'Cacher l\'??v??nement',
        'show_item'           => 'Montrer l\'??v??nement',
        'view_item'           => 'Voir l\'??v??nement',
        'view_items'          => 'Voir les ??v??nements',
        'search_items'        => 'Chercher un ??v??nement',
        'not_found'           => 'Aucun ??v??nement',
        'not_found_in_trash'  => 'Aucun ??v??nement dans la corbeille',   
      ),
      'public' => true,
      'has_archive' => false,
      'menu_icon' => 'dashicons-calendar-alt'
    )
);
remove_post_type_support( '??v??nements', 'editor' );

// ====================================================================
// MOD??RATRICE
// ====================================================================

register_post_type('moder',
    array(
      'labels' => array(
        'name'                => 'Mod??ratices',
        'singular_name'       => 'Mod??ratice',
        'add_new'             => 'Ajouter un mod??ratice',
        'add_new_item'        => 'Ajouter un mod??ratice',
        'edit_item'           => 'Modifier l\'mod??ratice',
        'new_item'            => 'Mod??ratice',
        'hide_item'           => 'Cacher l\'mod??ratice',
        'show_item'           => 'Montrer l\'mod??ratice',
        'view_item'           => 'Voir l\'mod??ratice',
        'view_items'          => 'Voir les mod??ratices',
        'search_items'        => 'Chercher un mod??ratice',
        'not_found'           => 'Aucun mod??ratice',
        'not_found_in_trash'  => 'Aucun mod??ratice dans la corbeille',   
      ),
      'public' => true,
      'has_archive' => false,
      'menu_icon' => 'dashicons-businesswoman'
    )
);
