<?php
/*
Template Name: Undersida
*/

get_header(); ?>

<main class="a-page">
    <section>
        <h1 class="page-title">
            <?php the_title(); ?>
        </h1>
    </section>
    <section class="page-container">
        <div class="single-post">
            <?php the_content(); ?>
        </div>
        <aside>
            <h2>Länkar</h2>
            <?php
            wp_nav_menu(array('theme_location' => 'ad-astra-secondary-meny'));
            ?>
        </aside>
    </section>
</main>

<?php get_footer(); ?>
