<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Labb 1</title>
    <?php wp_head(); ?>
</head>

<body>
    <div id="wrap">
        <header id="header">
            <div class="header-container">
                <div>
                    <a class="logo-type" href="index.html">Labb 1</a>
                </div>
                <form id="searchform" class="searchform" action="search.php">
                    <div>
                        <input placeholder="Sök efter..." type="text" value="<?php get_search_query(); ?>" name="s" />
                        <input class="app-button" type="submit" value="Sök" />
                    </div>
                </form>
            </div>

            <nav id="nav">
                <div class="nav-container">
                    <?php
                    // Visa WordPress-menyen med namnet 'ad-astra-header-meny'
                    wp_nav_menu(
                        array(
                            'theme_location' => 'ad-astra-header-meny',
                            'menu_class' => 'nav-menu',
                        )
                    );
                    ?>
                </div>
            </nav>


        </header>

        <!-- <div class="mobile-search">
            <form id="searchform" class="searchform">
                <div>
                    <label class="screen-reader-text">Sök efter:</label>
                    <input type="text" />
                    <input type="submit" value="Sök" />
                </div>
            </form>
        </div> -->
