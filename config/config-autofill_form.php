<?php 

 #####   ####  #####  #    # #        ##   ##### ######  ####      ####  #    # ######  ####  #    # #####   ####  #    # 
 #    # #    # #    # #    # #       #  #    #   #      #         #    # #    # #      #    # #   #  #    # #    #  #  #  
 #    # #    # #    # #    # #      #    #   #   #####   ####     #      ###### #####  #      ####   #####  #    #   ##   
 #####  #    # #####  #    # #      ######   #   #           #    #      #    # #      #      #  #   #    # #    #   ##   
 #      #    # #      #    # #      #    #   #   #      #    #    #    # #    # #      #    # #   #  #    # #    #  #  #  
 #       ####  #       ####  ###### #    #   #   ######  ####      ####  #    # ######  ####  #    # #####   ####  #    #


//NOTE: update the '221' to the ID of your form
add_filter( 'gform_pre_render_1', 'populate_checkbox' );
add_filter( 'gform_pre_validation_1', 'populate_checkbox' );
add_filter( 'gform_pre_submission_filter_1', 'populate_checkbox' );
add_filter( 'gform_admin_pre_render_1', 'populate_checkbox' );
function populate_checkbox( $form ) {
 
    foreach( $form['fields'] as &$field )  {
 
        //NOTE: replace 3 with your checkbox field id
        $field_id = 12;
        if ( $field->id != $field_id ) {
            continue;
        }

        
        // you can add additional parameters here to alter the posts that are retreieved
        // more info: http://codex.wordpress.org/Template_Tags/get_posts
        $posts = get_posts( 'numberposts=-1&post_status=publish&post_type=exercices' );
 
        $choices = array();
 
            // $i=0;
            // $exc[]=array();
        foreach ( $posts as $post ) {
            // $choices[] = array( 'text' => $post->post_title, 'value' => $post->ID, 'name'=> $exc  );
            $choices[] = array( 'text' => $post->post_title, 'value' => $post->ID);
            // $i++;
        }
 
        // update 'Select a Post' to whatever you'd like the instructive option to be
        $field->placeholder = 'test';
        $field->choices = $choices;        
 
    }
 
    return $form;
}



                                                                                                                                                                                                                                                                                                             
 #####   ####  #####  #    # #        ##   ##### ######  ####     #####  #####   ####  #####     #####   ####  #    # #    #        #####    ##   #####  #  ####     #####  #    # ##### #####  ####  #    #     ####  #####     #    # #    # #      ##### #        ####  ###### #      ######  ####  ##### 
 #    # #    # #    # #    # #       #  #    #   #      #         #    # #    # #    # #    #    #    # #    # #    # ##   #        #    #  #  #  #    # # #    #    #    # #    #   #     #   #    # ##   #    #    # #    #    ##  ## #    # #        #   #       #      #      #      #      #    #   #   
 #    # #    # #    # #    # #      #    #   #   #####   ####     #    # #    # #    # #    #    #    # #    # #    # # #  #        #    # #    # #    # # #    #    #####  #    #   #     #   #    # # #  #    #    # #    #    # ## # #    # #        #   # #####  ####  #####  #      #####  #        #   
 #####  #    # #####  #    # #      ######   #   #           #    #    # #####  #    # #####     #    # #    # # ## # #  # # ###    #####  ###### #    # # #    #    #    # #    #   #     #   #    # #  # #    #    # #####     #    # #    # #        #   #            # #      #      #      #        #   
 #      #    # #      #    # #      #    #   #   #      #    #    #    # #   #  #    # #         #    # #    # ##  ## #   ## ###    #   #  #    # #    # # #    #    #    # #    #   #     #   #    # #   ##    #    # #   #     #    # #    # #        #   #       #    # #      #      #      #    #   #   
 #       ####  #       ####  ###### #    #   #   ######  ####     #####  #    #  ####  #         #####   ####  #    # #    #  #     #    # #    # #####  #  ####     #####   ####    #     #    ####  #    #     ####  #    #    #    #  ####  ######   #   #        ####  ###### ###### ######  ####    #                                                                                                                                #                                                                                                                                                                               

add_filter( 'gform_pre_render', 'populate_choices' );
 
//Note: when changing choice values, we also need to use the gform_pre_validation so that the new values are available when validating the field.
add_filter( 'gform_pre_validation', 'populate_choices' );
 
//Note: when changing choice values, we also need to use the gform_admin_pre_render so that the right values are displayed when editing the entry.
add_filter( 'gform_admin_pre_render', 'populate_choices' );
 
//Note: this will allow for the labels to be used during the submission process in case values are enabled
add_filter( 'gform_pre_submission_filter', 'populate_choices' );
function populate_choices( $form ) {
 
    //only populating drop down for form id 5
    if ( $form['id'] != 1 ) {
       return $form;
    }

    // The Query
    $users = new WP_User_Query( array('exclude' => array()));

    //Creating item array.
    $items = array();
 
    //Adding post titles to the items array
    foreach ( $users->get_results() as $user ) {
        $items[] = array( 'value' => $user->ID, 'text' => $user->display_name );
    }

    //Adding items to field id 8. Replace 8 with your actual field id. You can get the field id by looking at the input name in the markup.
    foreach ( $form['fields'] as &$field ) {
        if ( $field->id == 7 ) {
            $field->choices = $items;
        }
    }
 
    return $form;
}