<?php get_header(); ?>

<main class="wrapper">
    <!-- test push 02-02-2022 9h -->
    <?php component('calendar'); ?>

    <h1><?php the_title(); ?></h1>
    <div class="info-atelier">
        <div class="info-atelier__item info-atelier__date"><strong>Date : </strong><?php the_field('event_date');?></div>
        <div class="info-atelier__item info-atelier__start"><strong>Heure début : </strong><?php the_field('event_starttime');?></div>
        <div class="info-atelier__item info-atelier__end"><strong>Heure fin : </strong><?php the_field('event_endtime');?></div>
        <div class="info-atelier__item info-atelier__mod"><strong>Modératrice : </strong><?php the_field('event_teacher');?></div>
        <div class="info-atelier__item info-atelier__partner"><strong>Partenaire : </strong><?php the_field('event_partner');?></div>
        <div class="info-atelier__item info-atelier__description"><strong>Description : </strong><?php the_field('event_description');?></div>
    </div>
    <!-- https://www.w3schools.com/tags/att_input_value.asp  predefine value input -->

</main>

<?php get_footer(); ?>