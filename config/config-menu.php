<?php

/***
 *       ###    ########  ##     ## #### ##    ##    ##     ## ######## ##    ## ##     ## 
 *      ## ##   ##     ## ###   ###  ##  ###   ##    ###   ### ##       ###   ## ##     ## 
 *     ##   ##  ##     ## #### ####  ##  ####  ##    #### #### ##       ####  ## ##     ## 
 *    ##     ## ##     ## ## ### ##  ##  ## ## ##    ## ### ## ######   ## ## ## ##     ## 
 *    ######### ##     ## ##     ##  ##  ##  ####    ##     ## ##       ##  #### ##     ## 
 *    ##     ## ##     ## ##     ##  ##  ##   ###    ##     ## ##       ##   ### ##     ## 
 *    ##     ## ########  ##     ## #### ##    ##    ##     ## ######## ##    ##  #######  
 */

add_filter('custom_menu_order','custom_admin_menu');
add_filter('menu_order','custom_admin_menu');
function custom_admin_menu($menu_ord){

  global $menu;
  if(!$menu_ord)
    return true;

  //Enlève certaines pages
  remove_menu_page("edit.php");
  // remove_menu_page("plugins.php");
  remove_menu_page("edit-comments.php");
  
  // Spécifie les liens de menu dans l'ordre désiré
  $menu_ord = array(
    'index.php',                            // Tableau de bord
    'separator1',                           // ----------------
    'edit.php?post_type=exercices',         // CPT Exercices
    'edit.php?post_type=evenements',        // CPT Évènement
    'edit.php?post_type=moder',             // CPT Modératices
    'separator2',                           // ----------------
    'upload.php',                           // Média
    'edit.php?post_type=page',              // Pages
    'users.php',                            // Users
    'themes.php',                           // Thèmes
    'separator3',                           // ----------------
    'plugins.php',                          // Extensions
    'options-general.php',                  // Réglages
  );

  return $menu_ord;

}

/***
 *     ######  #### ######## ########    ##     ## ######## ##    ## ##     ## 
 *    ##    ##  ##     ##    ##          ###   ### ##       ###   ## ##     ## 
 *    ##        ##     ##    ##          #### #### ##       ####  ## ##     ## 
 *     ######   ##     ##    ######      ## ### ## ######   ## ## ## ##     ## 
 *          ##  ##     ##    ##          ##     ## ##       ##  #### ##     ## 
 *    ##    ##  ##     ##    ##          ##     ## ##       ##   ### ##     ## 
 *     ######  ####    ##    ########    ##     ## ######## ##    ##  #######  
 */
register_nav_menus( array(
    'menu_principal' =>  'Menu principal',
));