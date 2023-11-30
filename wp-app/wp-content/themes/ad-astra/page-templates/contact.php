<?php /*
Template Name: Kontakt
*/
get_header(); ?>


<main class="a-page">
    <section>
        <h1 class="page-title">
            <?php the_title(); ?>
        </h1>
    </section>
    <section class="contact-form">
        <?= do_shortcode('[contact-form-7 id="f9d07bf" title="Contact form 1"]') ?>
    </section>
</main>



<?php get_footer(); ?>
