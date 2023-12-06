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
            <div class="single-post">
                <?php if (has_post_thumbnail()): ?>
                    <img src="<?= esc_url(the_post_thumbnail_url('large')); ?>" alt="">
                <?php endif; ?>
                <?php the_content(); ?>
            </div>
        </section>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>
