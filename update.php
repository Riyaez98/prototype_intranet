<?php 

if ( 'POST' == $_SERVER['REQUEST_METHOD'] && ! empty($_POST['post_id']) && ! empty($_POST['post_title']))
{
    $post_id   = $_POST['post_id'];
    $post_type = get_post_type($post_id);
    // $capability = ( 'page' == $post_type ) ? 'edit_page' : 'edit_post';
    // if ( current_user_can($capability, $post_id) && wp_verify_nonce( $_POST['update_post_nonce'], 'update_post_'. $post_id ) )
    // {
        $post = array(
            'ID'             => esc_sql($post_id),
            'post_content'   => "test",
            'post_title'     => esc_sql($_POST['post_title']),
        );
        $updatedPostID = wp_update_post($post);
               

        if ( isset($_POST['event-date']) ) update_post_meta($post_id, 'event_date', esc_sql($_POST['event-date']) );
        if ( isset($_POST['starttime']) ) update_post_meta($post_id, 'event_starttime', esc_sql($_POST['starttime']) );
        if ( isset($_POST['endtime']) ) update_post_meta($post_id, 'event_endtime', esc_sql($_POST['endtime']) );
        $teachers_string = implode(", ", $_POST['moderatrice']);
        if ( isset($_POST['moderatrice']) ) update_post_meta($post_id, 'event_teacher', $teachers_string );
        if ( isset($_POST['partner']) ) update_post_meta($post_id, 'event_partner', esc_sql($_POST['partner']) );
        $exercices_string = implode(", ", $_POST['exercice']);
        if ( isset($_POST['exercice']) ) update_post_meta($post_id, 'event_exercices', $exercices_string );
        if ( isset($_POST['description']) ) update_post_meta($post_id, 'event_description', esc_sql($_POST['description']) );


        // header("Location:" . $_SERVER['REQUEST_URI']);
        header("Location:" . home_url());
    // }
    // else
    // {
    //     wp_die("You can't do that");
    // }
}

?>