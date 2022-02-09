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
                        <p><strong>Courriel : </strong><?php the_field('moderatrice_courriel'); ?></p>
                        <p><strong>Téléphone : </strong><?php the_field('moderatrice_telephone'); ?></p>
                        <p><strong>Bio : </strong><?php the_content(); ?></p>                        
                    </div>
                </div>
            <?php endwhile; ?>
            <!-- test  filezilla -->
        <?php wp_reset_query(); ?>
    </div>
</main>

<?php get_footer(); ?>