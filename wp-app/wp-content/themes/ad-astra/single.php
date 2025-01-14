<?php get_header(); ?>
<main class="a-page">
    <section>
        <a href="javascript:history.back()" class="back-button">
            <div class="caret-container">
                <div class="caret"></div>
            </div>
            <p>Tillbaka</p>
        </a>
        <div class="single-post">
            <h1 class="single-page-title">
                <?php single_post_title(); ?>
            </h1>
            <div class="single-blogg-misc-item">
                <svg xmlns="http://www.w3.org/2000/svg" class="single-icon" viewBox="0 0 256 256">
                    <path
                        d="M240.49,138.83,141.17,39.51A11.93,11.93,0,0,0,132.69,36H40a4,4,0,0,0-4,4v92.69a11.93,11.93,0,0,0,3.51,8.48l99.32,99.32a12,12,0,0,0,17,0l84.69-84.69a12,12,0,0,0,0-17Zm-5.66,11.31-84.69,84.69a4,4,0,0,1-5.65,0L45.17,135.51A4,4,0,0,1,44,132.69V44h88.69a4,4,0,0,1,2.82,1.17l99.32,99.32A4,4,0,0,1,234.83,150.14ZM92,84a8,8,0,1,1-8-8A8,8,0,0,1,92,84Z">
                    </path>
                </svg>
                <?php the_category(", "); ?>
            </div>
        </div>
    </section>
    <div class="aside-button-container">
        <button class="app-button" id="openAsideButton">Meny</button>
        <button class="app-button" id="closeAsideButton">Stäng</button>
    </div>
    <section class="single-page-container">
        <?php if (have_posts()):
            while (have_posts()):
                the_post(); ?>
                <div class="single-post">
                    <img src="<?= the_post_thumbnail_url("large") ?>" alt="">
                    <ul class="blogg-misc">
                        <li class="single-blogg-misc-item">
                            <svg xmlns="http://www.w3.org/2000/svg" class="single-icon" viewBox="0 0 256 256">
                                <path
                                    d="M208,36H180V24a4,4,0,0,0-8,0V36H84V24a4,4,0,0,0-8,0V36H48A12,12,0,0,0,36,48V208a12,12,0,0,0,12,12H208a12,12,0,0,0,12-12V48A12,12,0,0,0,208,36ZM48,44H76V56a4,4,0,0,0,8,0V44h88V56a4,4,0,0,0,8,0V44h28a4,4,0,0,1,4,4V84H44V48A4,4,0,0,1,48,44ZM208,212H48a4,4,0,0,1-4-4V92H212V208A4,4,0,0,1,208,212Z">
                                </path>
                            </svg>
                            <?= the_time("j F, Y"); ?>
                        </li>
                    </ul>
                    <?php the_content(); ?>
                    <div class="single-blogg-misc-item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="single-icon" viewBox="0 0 256 256">
                            <path
                                d="M208,36H48A12,12,0,0,0,36,48V208a12,12,0,0,0,12,12H208a12,12,0,0,0,12-12V48A12,12,0,0,0,208,36ZM63,212a68,68,0,0,1,130,0Zm149-4a4,4,0,0,1-4,4h-6.66a76,76,0,0,0-52.75-53.13,44,44,0,1,0-41.18,0A76,76,0,0,0,54.66,212H48a4,4,0,0,1-4-4V48a4,4,0,0,1,4-4H208a4,4,0,0,1,4,4Zm-84-52a36,36,0,1,1,36-36A36,36,0,0,1,128,156Z">
                            </path>
                        </svg>
                        <?= the_author_posts_link(); ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <aside id="secondary" class="sidebar-container">
            <?php get_sidebar(); ?>
        </aside>
    </section>
</main>
<?php get_footer(); ?>
