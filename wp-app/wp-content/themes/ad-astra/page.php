<?php get_header(); ?>

<main class="about-page" id="main-content" role="main">
    <?php
    while (have_posts()):
        the_post();
        ?>
        <section class="about-hero">
            <h1 class="hero-title">
                <?php the_title(); ?>
            </h1>
        </section>

        <section>
            <div class="about-text">
                <?php the_content(); ?>
            </div>
        </section>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>
