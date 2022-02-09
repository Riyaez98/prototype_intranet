<?php get_header(); 

include(__DIR__ . '/update.php');

?>

<main class="wrapper">

    <h1><?php the_title(); ?></h1>
    
    <!-- https://www.w3schools.com/tags/att_input_value.asp  predefine value input -->
    <!-- <form  class="info-atelier" method="post" action="<?php bloginfo('template_url'); ?>/update.php"> -->
    <form  class="info-atelier" method="POST" enctype="multipart/form-data" >

        <input style="display:none;" type="text" id="post_id" name="post_id" value="<?php the_ID(); ?>">
        <div class="info-atelier__item info-atelier__date">
            <label for="title"> <strong> Titre : </strong> </label>
            <input type="text" id="post_title" name="post_title" 
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
            <label class="input__label" for="province">Province</label>
            <select name="province" id="province" class="input__element" required>
                <option value="" hidden>Choisir une province</option>
                <option value="qc">Quebec</option>
                <option value="on">Ontario</option>
                <option value="ab">Alberta</option>
            </select>
        </div>  

        <div class="info-atelier__item info-atelier__exc">
            <label for="exercice"> <strong> Exercices : </strong></label>
            <div>
                <?php $exercices = array("Automassage", "Casse-tête", "Danse de l’arbre", "Écouter le groupe");
                    $selected_exc = explode(", ", get_field('event_exercices'));
                        $i=0;
                    foreach($exercices as $current_exc){
                        $exc_is_selected = false;
                        foreach($selected_exc as $exc_selected){
                            if($current_exc === $exc_selected){
                                $exc_is_selected = true;
                            }
                        }
                        if($exc_is_selected) {
                            echo "
                                <div class='input checkbox'>
                                    <input type='checkbox' class='input__element' name='exercice[]' id='exercice" . $i . "' value='" . $current_exc . "' checked><label for='exercice" . $i . "' class='input__label'>" . $current_exc . "</label>
                                </div>";
                        } else {
                            echo "
                                <div class='input checkbox'>
                                    <input type='checkbox' class='input__element' name='exercice[]' id='exercice" . $i . "' value='" . $current_exc . "'><label for='exercice" . $i . "' class='input__label'>" . $current_exc . "</label>
                                </div>";
                        } 
                        $i++;                  
                    }
                ?>
            </div>         
        </div> 

        <div class="info-atelier__item info-atelier__description">
            <label for="description"> <strong> Description : </strong></label>
                <textarea class="input__element u-grid-fullwidth" id="description" name="description" rows="6" cols="25"><?php echo the_field('event_description');?></textarea>
        </div>        
        <input type="submit" value="Submit">
    </form>

</main>

<?php get_footer(); ?>
