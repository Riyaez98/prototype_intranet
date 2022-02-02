<?php get_header(); ?>

<main class="wrapper">
    <!-- test push 02-02-2022 9h -->
    <?php component('calendar'); ?>

    <h1>Bienvenue <?php echo wp_get_current_user()->user_firstname; ?> dans l'intranet de
    <br>
    Dance contre la violence</h1>

</main>

<?php get_footer(); ?>