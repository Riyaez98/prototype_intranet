<?php get_header(); ?>

<main class="wrapper">
    <!-- test push 03-02-2022 9h 30 -->
    <?php component('calendar'); ?>

    <h1>Bienvenue <?php echo wp_get_current_user()->user_firstname; ?> dans l'intranet de
    <br>
    Dance contre la violence</h1>
    <h2>Voici les ateliers crées</h2>
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
                        <p><strong>Date : </strong><?php the_field('event_date'); ?></p>
                        <p><strong>Heure : </strong><?php the_field('event_starttime'); ?></p>
                        <p><strong>Modératrice(s) : </strong><?php the_field('event_teacher');?></p>
                        <p><strong>Exercice(s) : </strong><?php the_field('event_exercices');?></p>
                        <p><strong>Description : </strong><?php the_field('event_description');?></p>
                        <button class="btn_modifier" onClick="window.location.href = '<?php echo the_permalink(); ?>'">
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