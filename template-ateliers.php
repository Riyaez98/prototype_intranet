<?php
/* Template Name: Page ateliers*/
?>

<?php get_header(); ?>

    <main class="wrapper">
        
    <h1 >    <?php the_title() ;?>  </h1>

    <div class="container_cards-atelier">
        <?php
        query_posts(array(
        'post_type' => 'evenements',
        'post_status' => 'publish'
        )); ?>
        
            <?php while (have_posts()) : the_post(); ?>
            
                <div class="card_atelier">
                    <h3><?php the_title(); ?></h3>
                    <div class="card_atelier--info">    
                        <p>Date : <?php the_field('event_date'); ?></p>
                        <p>Heure : <?php the_field('event_starttime'); ?></p>
                        <?php $moder = get_field('event_teacher');
                        // var_dump($moder);
                        if( $moder ): 
                        
                            $users_list = new WP_User_Query( array('exclude' => array()));?>
                            <!-- <br>
                            <br>
                            <br> -->
                            <?php foreach ( $users_list->get_results() as $user ) {
                                if($moder == $user->ID){?>
                                <p>Modératrice : <?php echo $user->display_name;  ?></p>                                    
                        <?php
                                }
                            }
                        ?>
                        <?php endif; ?>
                        <button onClick="window.location.href = '<?php echo the_permalink(); ?>'">
                            Modifier
                        </button>
                    </div>
                </div>
            <?php endwhile; ?>
            <!-- test  filezilla -->
        <?php wp_reset_query(); ?>
    </div>
</main>

<?php get_footer(); ?>