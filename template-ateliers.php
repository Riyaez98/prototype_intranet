<?php
/* Template Name: Page ateliers*/
?>

<?php get_header(); ?>

    <main class="wrapper">
        
    <h1>    <?php the_title() ;?>  </h1>

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
                        <p>Modératrice : <?php the_field('event_teacher'); ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
            <!-- test  filezilla -->
        <?php wp_reset_query(); ?>
    </div>
</main>

<?php get_footer(); ?>