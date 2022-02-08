<?php
/* Template Name: Page users*/
?>

<?php get_header(); ?>

    <main class="wrapper">
        
    <h1 >    <?php the_title() ;?>  </h1>

    <div class="container_cards-atelier">
        <?php
        query_posts(array(
        'post_type' => 'moder',
        'post_status' => 'publish'
        )); ?>
        
            <?php while (have_posts()) : the_post(); ?>
            
                <div class="card_atelier">
                    <h3><?php the_title(); ?></h3>
                    <div class="card_atelier--info">    
                        <p>Courriel : <?php the_field('moderatrice_courriel'); ?></p>
                        <p>Téléphone : <?php the_field('moderatrice_telephone'); ?></p>
                        <p>Bio : <?php the_content(); ?></p>                        
                    </div>
                </div>
            <?php endwhile; ?>
            <!-- test  filezilla -->
        <?php wp_reset_query(); ?>
    </div>
</main>

<?php get_footer(); ?>