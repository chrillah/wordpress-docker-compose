<!-- det här är ett inlägg  / blogg/ post-->
<?php get_header(); ?>
<main class="a-page">
    <section>
        <a href="javascript:history.back()" class="app-button">Tillbaka</a>
        <h1 class="page-title">
            <?php single_post_title(); ?>

        </h1>
    </section>
    <section>
        <?php if (have_posts()):
            while (have_posts()):
                the_post(); ?>
                <div class="single-post">
                    <img src="<?= the_post_thumbnail_url("large") ?>" alt="">

                    <ul class="single-blogg-info">
                        <li>
                            <?= the_time("j F, Y"); ?>
                        </li>
                        <li>
                            <?= the_author_posts_link(); ?>
                        </li>
                        <li>
                            <?php the_category(", "); ?>
                        </li>
                    </ul>

                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <aside id="secondary" class="sidebar-container">
            <?php get_sidebar(); ?>
        </aside>
    </section>
</main>
<?php get_footer(); ?>
