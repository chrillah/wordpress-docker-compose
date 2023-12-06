<?php get_header(); ?>
<main class="a-page">
    <section class="single-post">
        <?php if (have_posts()):
            while (have_posts()):
                the_post(); ?>
                <h1>
                    <?php the_title(); ?>
                </h1>
                <?php if (has_post_thumbnail()): ?>
                    <img src="<?= esc_url(the_post_thumbnail_url('large')); ?>" alt="">
                <?php endif; ?>
                <p>
                    <?php the_content(); ?>
                </p>

            <?php endwhile; ?>
        <?php endif; ?>
    </section>
</main>
<?php get_footer(); ?>
