<?php 
function login_redirect( $redirect_to, $request, $user ){
    return get_site_url();
}
add_filter( 'login_redirect', 'login_redirect', 10, 3 );