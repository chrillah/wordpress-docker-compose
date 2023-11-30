<?php get_header(); ?>

<main class="a-page">
    <?php
    while (have_posts()):
        the_post();
        ?>
        <section>
            <h1 class="page-title">
                <?php the_title(); ?>
            </h1>
        </section>

        <section>
            <?php the_content(); ?>
        </section>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>
