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
        <div id="primary">
            <?php the_content(); ?>
        </div>
        <aside>
            <?php
            if (has_nav_menu('undersida_nav')) {
                wp_nav_menu(array('theme_location' => 'undersida_nav', 'menu_class' => 'side-menu'));
            }
            ?>
        </aside>
    </section>
</main>

<?php get_footer(); ?>
