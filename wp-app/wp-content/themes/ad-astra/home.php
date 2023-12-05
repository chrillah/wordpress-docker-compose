<?php get_header(); ?>
<main class="a-page">
    <section>
        <h1 h1 class="page-title">
            <?php single_post_title(); ?>
        </h1>
    </section>
    <div class="aside-button-container">
        <button class="app-button" id="openAsideButton">Meny</button>
        <button class="app-button" id="closeAsideButton">Stäng</button>
    </div>
    <section class="blogg-container">
        <div class="list-of-bloggs">
            <?php if (have_posts()):
                while (have_posts()):
                    the_post(); ?>
                    <div class="blogg-post">
                        <a href="<?= the_permalink(); ?>">
                            <div class="blogg-img-container">
                                <img src="<?= the_post_thumbnail_url("large") ?>" alt="">
                            </div>


                            <div class="blogg-info">

                                <p class="blogg-title">
                                    <?= the_title(); ?>
                                </p>

                                <ul class="blogg-misc">
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
                            </div>
                            <p>
                                <?= the_excerpt(); ?>
                            </p>
                        </a>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <aside id="secondary" class="sidebar-container">
            <?php get_sidebar(); ?>
        </aside>
    </section>
    <section class="pagination-section">
        <?php
        the_posts_pagination(
            array(
                'prev_text' => __('Föregående', 'textdomain'),
                'next_text' => __('Nästa', 'textdomain'),
            )
        );
        ?>
        <!-- <?= paginate_links(
            array(
                'total' => $wp_query->max_num_comment_pages,
                'prev_text' => _('Föregående'),
                'next_text' => _('Nästa')
            )
        ); ?> -->
    </section>
</main>
<?php get_footer(); ?>
