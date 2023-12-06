<?php
/*
Template Name: Undersida2
*/

get_header(); ?>

<main class="a-page">
    <section>
        <h1 class="page-title">
            <?php the_title(); ?>
        </h1>
    </section>
    <section class="page-container">
        <aside>
            <?php
            wp_nav_menu(array('theme_location' => 'ad-astra-secondary-meny'));
            ?>
        </aside>
        <div id="primary">
            <?php the_content(); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
