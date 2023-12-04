<?php
/*
Template Name: Undersida4
*/

get_header(); ?>

<main class="a-page">
    <section>
        <h1 class="page-title">
            <?php the_title(); ?>
        </h1>
    </section>
    <section class="page-container-b">
        <div id="primary" class="page-content-container">
            <?php the_content(); ?>
        </div>
        <div class="page-img-container">
            <img src="<?= the_post_thumbnail_url("large") ?>" alt="">
        </div>
    </section>
</main>

<?php get_footer(); ?>
