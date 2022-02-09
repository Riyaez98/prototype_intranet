<?php get_header(); 


if ( 'POST' == $_SERVER['REQUEST_METHOD'] && ! empty($_POST['post_id']) && ! empty($_POST['post_title']) && isset($_POST['update_post_nonce']) && isset($_POST['postcontent']) )
{
    $post_id   = $_POST['post_id'];
    $post_type = get_post_type($post_id);
    $capability = ( 'page' == $post_type ) ? 'edit_page' : 'edit_post';
    if ( current_user_can($capability, $post_id) && wp_verify_nonce( $_POST['update_post_nonce'], 'update_post_'. $post_id ) )
    {
        $post = array(
            'ID'             => esc_sql($post_id),
            'post_content'   => esc_sql($_POST['postcontent']),
            'post_title'     => esc_sql($_POST['post_title'])
        );
        $updatedPostID = wp_update_post($post);

        //Image
        require_once( ABSPATH . 'wp-admin/includes/image.php' );
        require_once( ABSPATH . 'wp-admin/includes/file.php' );
        require_once( ABSPATH . 'wp-admin/includes/media.php' );
        $attachment_id = media_handle_upload( 'img', 55 );
       
        set_post_thumbnail($updatedPostID, $attachment_id);

        if ( isset($_POST['materiel']) ) update_post_meta($post_id, 'materiel', esc_sql($_POST['materiel']) );
        if ( isset($_POST['origin']) ) update_post_meta($post_id, 'origin', esc_sql($_POST['origin']) );

        header("Location:" . $_SERVER['REQUEST_URI']);
    }
    else
    {
        wp_die("You can't do that");
    }
}
?>

<main class="wrapper">

    <h1><?php the_title(); ?></h1>
    
    <!-- https://www.w3schools.com/tags/att_input_value.asp  predefine value input -->
    <form  class="info-atelier" method="POST" enctype="multipart/form-data">

        <input style="display:none;" type="text" id="post_id" name="post_id" value="<?php the_ID(); ?>">
        <div class="info-atelier__item info-atelier__date">
            <label for="title"> <strong> Titre : </strong> </label>
            <input type="text" id="title" name="title" 
                value="<?php the_title();?>">
        </div>     
        
        <div class="info-atelier__item info-atelier__date">
            <label for="event-date"> <strong> Date : </strong> </label>
            <input type="date" id="event-date" name="event-date" 
                value="<?php the_field('event_date');?>" min="2020-01-01" max="2050-12-31">
        </div>     

        <div class="info-atelier__item info-atelier__start">
            <label for="starttime"> <strong> Heure début : </strong></label>
            <input type="time" id="starttime" name="starttime" min="00:00" max="23:59"
                value="<?php the_field('event_starttime');?>">
        </div>      

        <div class="info-atelier__item info-atelier__end">
            <label for="endtime"> <strong> Heure fin : </strong></label>
            <input type="time" id="endtime" name="endtime" min="00:00" max="23:59"
                value="<?php the_field('event_endtime');?>">
        </div>   

        <div class="info-atelier__item info-atelier__mod">
            <label for="moderatrice"> <strong> Modératrice(s) : </strong></label>
            <div>
                <?php $noms = array("Elinor Fueter", "Maryse Carrier", "Rachel Harris");
                    $selected = explode(", ", get_field('event_teacher'));
                        $i=0;
                    foreach($noms as $current_nom){
                        $is_selected = false;
                        foreach($selected as $selected_item){
                            if($current_nom === $selected_item){
                                $is_selected = true;
                            }
                        }
                        if($is_selected) {
                            echo "
                                <div class='input checkbox'>
                                    <input type='checkbox' class='input__element' name='moderatrice[]' id='moderatrice" . $i . "' value='" . $current_nom . "' checked><label for='moderatrice" . $i . "' class='input__label'>" . $current_nom . "</label>
                                </div>";
                        } else {
                            echo "
                                <div class='input checkbox'>
                                    <input type='checkbox' class='input__element' name='moderatrice[]' id='moderatrice" . $i . "' value='" . $current_nom . "'><label for='moderatrice" . $i . "' class='input__label'>" . $current_nom . "</label>
                                </div>";
                        } 
                        $i++;                  
                    }
                ?>
            </div>        
        </div> 

        <div class="info-atelier__item info-atelier__partner">
        <label for="partner"> <strong> Partenaire : </strong></label>
            <input type="text" id="partner" name="partner" value="<?php the_field('event_partner');?>">
        </div>  

        <div class="info-atelier__item info-atelier__mod">
            <label for="exercice"> <strong> Exercices : </strong></label>
            <input type="text" id="exercice" name="exercice" value="<?php the_field('event_exercices')?>">         
        </div> 

        <div class="info-atelier__item info-atelier__description">
            <label for="description"> <strong> Description : </strong></label>
                <textarea class="input__element u-grid-fullwidth" id="description" name="description" rows="6" cols="25"><?php echo the_field('event_description');?></textarea>
        </div>        
        <input type="submit" value="Submit">
    </form>

</main>

<?php get_footer(); ?>
