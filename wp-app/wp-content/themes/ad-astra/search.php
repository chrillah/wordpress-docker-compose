<?php get_header(); ?>
<main class="a-page">
    <section>
        <?php if (have_posts()):
            while (have_posts()):
                the_post(); ?>
                <!-- INNUTI LOOPEN -->
                <h1>
                    <?php the_title(); ?>
                </h1>
                <p>
                    <?php the_content(); ?>
                </p>

            <?php endwhile; ?>
        <?php endif; ?>
    </section>
</main>
<?php get_footer(); ?>
