<?php 
// function login_redirect( $redirect_to, $request, $user ){
//     return get_site_url();
// }
// add_filter( 'login_redirect', 'login_redirect', 1 );

add_filter( 'login_redirect', function( $url, $query, $user ) {
    return home_url();
}, 1, 3 );