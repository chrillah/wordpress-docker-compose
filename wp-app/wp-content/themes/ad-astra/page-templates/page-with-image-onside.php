<?php
/*
Template Name: Undersida4
*/
?>
<?php get_header(); ?>
<?php
while (have_posts()):
    the_post();
?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8">
                    <h1><?php the_title(); ?></h1>
                    <p><?php the_content(); ?></p>
                </div>
                <div class="col-xs-12 col-md-4">
                <img src="<?= the_post_thumbnail_url("large") ?>" alt="">
                </div>
            </div>
        </div>
    </section>
</main>
<?php endwhile; ?>
<?php get_footer(); ?>
