<?php

add_filter( 'gform_advancedpostcreation_post_after_creation_4', 'apc_toolset_setparent', 10, 4 );
 
function apc_toolset_setparent( $post_id, $feed, $entry, $form ) {
 
toolset_connect_posts( 'customer-cut-order', $entry[21], $post_id );
 
}