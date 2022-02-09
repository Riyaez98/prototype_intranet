<?php get_header(); ?>

<main class="wrapper">

    <h1><?php the_title(); ?></h1>
    
    <!-- https://www.w3schools.com/tags/att_input_value.asp  predefine value input -->
    <form action="<?php bloginfo('template_url') ?>/update.php" class="info-atelier" method="POST">

        <input style="display:none;" type="text" id="id" name="id" value="<?php the_ID(); ?>">
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
                                <div class='input__checkbox'>
                                    <input type='checkbox' name='moderatrice[]' id='moderatrice" . $i . "' value='" . $current_nom . "'><label for='moderatrice" . $i . "'>" . $current_nom . "</label>
                                </div>";
                        } else {
                            echo "<li>" . $current_nom  . " est pas selected</li>";
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
            <label for="moderatrice"> <strong> Exercices : </strong></label>
            <input type="text" id="moderatrice" name="moderatrice" value="<?php the_field('event_exercices')?>">         
        </div> 

        <div class="info-atelier__item info-atelier__description">
            <label for="description"> <strong> Description : </strong></label>
                <textarea class="input__element u-grid-fullwidth" id="description" name="description" rows="6" cols="25"><?php echo the_field('event_description');?></textarea>
        </div>        
        <input type="submit" value="Submit">
    </form>

</main>

<?php get_footer(); ?>
