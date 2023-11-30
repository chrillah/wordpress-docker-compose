<?php
/*
Template Name: Undersida2
*/

get_header(); ?>

<main class="a-page">
    <section>
        <h1 h1 class="page-title">
            <?php the_title(); ?>

        </h1>
    </section>
    <section class="blogg-container">
        <aside id="secondary">
            <?php
            if (has_nav_menu('undersida_nav')) {
                wp_nav_menu(array('theme_location' => 'undersida_nav', 'menu_class' => 'side-menu'));
            }
            ?>
        </aside>
        <div id="primary">
            <?php the_content(); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
