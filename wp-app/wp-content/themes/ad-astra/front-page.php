<?php get_header(); ?>

<main>
    <section class="hero">
        <div class="hero-image">
            <div class="hero-text-container">
                <h1 class="hero-title">
                    <?php the_title(); ?>
                </h1>
                <?php the_content(); ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
