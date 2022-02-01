<?php
/* Template Name: Page ateliers*/
?>

<?php get_header(); ?>

    <main class="wrapper">
        
    <h1>    <?php the_title() ;?>  </h1>

    <?php
    query_posts(array(
    'post_type' => 'evenements',
    'post_status' => 'publish'
    )); ?>
        <?php while (have_posts()) : the_post(); ?>
        <div>
            <div>
                <h3><?php the_title(); ?></h3>
                
            </div>
        </div>
        <?php endwhile; ?>

    <?php wp_reset_query(); ?>
</main>

<?php get_footer(); ?>