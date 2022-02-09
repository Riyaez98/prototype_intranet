<?php 

if ( 'POST' == $_SERVER['REQUEST_METHOD'] && ! empty($_POST['post_id']) && ! empty($_POST['post_title']))
{
    echo "allo";
    $post_id   = $_POST['post_id'];
    $post_type = get_post_type($post_id);
    // $capability = ( 'page' == $post_type ) ? 'edit_page' : 'edit_post';
    // if ( current_user_can($capability, $post_id) && wp_verify_nonce( $_POST['update_post_nonce'], 'update_post_'. $post_id ) )
    // {
        $post = array(
            'ID'             => esc_sql($post_id),
            'post_content'   => "test",
            'post_title'     => esc_sql($_POST['post_title'])
        );
        $updatedPostID = wp_update_post($post);
               

        if ( isset($_POST['partner']) ) update_post_meta($post_id, 'event_partner', esc_sql($_POST['partner']) );
        // if ( isset($_POST['origin']) ) update_post_meta($post_id, 'origin', esc_sql($_POST['origin']) );

        // header("Location:" . $_SERVER['REQUEST_URI']);
        header("Location:" . home_url());
    // }
    // else
    // {
    //     wp_die("You can't do that");
    // }
}

?>