<?php get_header(); ?>

<main>
    <section class="hero">
        <div class="hero-image" style="background-image: url('<?php echo the_post_thumbnail_url("large"); ?>');">
            <div class="hero-text-container">
                <h1 class="hero-title">
                    <?php the_title(); ?>
                </h1>
                <?php the_content(); ?>
                <!-- <a class="app-button"
                    href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>">Nyheter</a> -->
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
