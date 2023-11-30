<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <title>Labb 1</title>
    <?php wp_head(); ?>
</head>

<body>
    <header id="header">
        <div class="header-container">
            <div>
                <a class="logo-type" href="index.html">Labb 1</a>
            </div>
            <form id="searchform" class="searchform" action="/">
                <div>
                    <input placeholder="Sök efter..." type="text" value="<?php get_search_query(); ?>" name="s" />
                    <input class="app-button" type="submit" value="Sök" />
                </div>
            </form>
        </div>
        <nav id="nav">
            <div class="nav-container">
                <?php
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
    <div id="wrap">
