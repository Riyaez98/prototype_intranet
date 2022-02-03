<?php 

##
##
##The following example dynamically populates a checkbox field with a list of published posts
##
##


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
 
        foreach ( $posts as $post ) {
            $choices[] = array( 'text' => $post->post_title, 'value' => $post->ID );
        }
 
        // update 'Select a Post' to whatever you'd like the instructive option to be
        $field->placeholder = 'test';
        $field->choices = $choices;


        // $input_id = 1;
        // foreach( $posts as $post ) {
 
        //     //skipping index that are multiples of 10 (multiples of 10 create problems as the input IDs)
        //     if ( $input_id % 10 == 0 ) {
        //         $input_id++;
        //     }
 
        //     $choices[] = array( 'text' => $post->post_title, 'value' => $post->post_title );
        //     $inputs[] = array( 'label' => $post->post_title, 'id' => "{$field_id}.{$input_id}" );
 
        //     $input_id++;
        // }
 
        // $field->choices = $choices;
        // $field->inputs = $inputs;
 
    }
 
    return $form;
}



##
##
## This example dynamically populates a drop down, radio button or multi-select field with posts that are in the Business category.
##
##

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
 
    //Reading posts for "Business" category;
    $args = array(
        'post_type' => 'exercices'
    );
    $posts = get_posts($args);
 
    //Creating item array.
    $items = array();
 
    //Add a placeholder to field id 8, is not used with multi-select or radio, will overwrite placeholder set in form editor.
    //Replace 8 with your actual field id.
    // $fields = $form['fields'];
    // foreach( $form['fields'] as &$field ) {
    //   if ( $field->id == 8 ) {
    //     $field->placeholder = 'This is my placeholder';
    //   }
    // }
 
    //Adding post titles to the items array
    foreach ( $posts as $post ) {
        $items[] = array( 'value' => $post->post_title, 'text' => $post->post_title );
    }
 
    //Adding items to field id 8. Replace 8 with your actual field id. You can get the field id by looking at the input name in the markup.
    foreach ( $form['fields'] as &$field ) {
        if ( $field->id == 13 ) {
            $field->choices = $items;
        }
    }
 
    return $form;
}