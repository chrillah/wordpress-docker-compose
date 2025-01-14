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
                                    <li class="blogg-misc-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon" viewBox="0 0 256 256">
                                            <path
                                                d="M208,36H180V24a4,4,0,0,0-8,0V36H84V24a4,4,0,0,0-8,0V36H48A12,12,0,0,0,36,48V208a12,12,0,0,0,12,12H208a12,12,0,0,0,12-12V48A12,12,0,0,0,208,36ZM48,44H76V56a4,4,0,0,0,8,0V44h88V56a4,4,0,0,0,8,0V44h28a4,4,0,0,1,4,4V84H44V48A4,4,0,0,1,48,44ZM208,212H48a4,4,0,0,1-4-4V92H212V208A4,4,0,0,1,208,212Z">
                                            </path>
                                        </svg>
                                        <?= the_time("j F, Y"); ?>
                                    </li>
                                    <li class="blogg-misc-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon" viewBox="0 0 256 256">
                                            <path
                                                d="M208,36H48A12,12,0,0,0,36,48V208a12,12,0,0,0,12,12H208a12,12,0,0,0,12-12V48A12,12,0,0,0,208,36ZM63,212a68,68,0,0,1,130,0Zm149-4a4,4,0,0,1-4,4h-6.66a76,76,0,0,0-52.75-53.13,44,44,0,1,0-41.18,0A76,76,0,0,0,54.66,212H48a4,4,0,0,1-4-4V48a4,4,0,0,1,4-4H208a4,4,0,0,1,4,4Zm-84-52a36,36,0,1,1,36-36A36,36,0,0,1,128,156Z">
                                            </path>
                                        </svg>
                                        <?= the_author_posts_link(); ?>
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
