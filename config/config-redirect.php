<?php 
// function login_redirect( $redirect_to, $request, $user ){
//     return get_site_url();
// }
// add_filter( 'login_redirect', 'login_redirect', 1 );

// add_filter( 'login_redirect', function( $url, $query, $user ) {
//     return home_url();
// }, 1, 3 );

// add_action("wp_login", function($user_login, $user) {
//     wp_redirect(home_url());
// }, 1, 2);

// add_action("wp", function() {
//     if(!is_user_logged_in()) {
//         wp_redirect( get_site_url().'/login', 301 ); 
//         exit;
//     }

// }, 1);