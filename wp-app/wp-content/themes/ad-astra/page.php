<?php
get_header(); ?>

<main class="a-page">
    <section>
        <h1 class="page-title">
            <?php the_title(); ?>
        </h1>
    </section>
    <section class="blogg-container">
        <div id="primary">
            <?php the_content(); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
