<?php get_header(); ?>
<main>
    <section>
        <h1>
            <?php single_post_title(); ?>
        </h1>
    </section>
    <section>
        <div>
            <div>
                <div>
                    <!-- till home.php en blogg kräver single_post_title() -->
                </div>
            </div>
            <div>
                <div>
                    <?php if (have_posts()):
                        while (have_posts()):
                            the_post(); ?>
                            <!-- INNUTI LOOPEN -->
                            <article>
                                <a href="<?= the_permalink(); ?>">
                                    <h1 class="title">
                                        <h1>
                                            <?= the_title(); ?>
                                        </h1>
                                </a>
                                <img src="<?= the_post_thumbnail_url("large") ?>" alt="">
                                <ul class="meta">
                                    <li>
                                        <i class="fa fa-calender"></i>
                                        <?= the_time("j F, Y"); ?>
                                    </li>
                                    <li class="fa fa-calender">
                                        <?= the_author_posts_link(); ?>
                                    </li>
                                    <li>
                                        <i class="fa fa-user"></i>
                                        <?php the_category(", "); ?>
                                    </li>
                                </ul>
                                <?= the_excerpt(); ?>
                            </article>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <aside id="sidebar" class="col-xs-12 col-md-3">
                    <?php get_sidebar(); ?>
                </aside>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
