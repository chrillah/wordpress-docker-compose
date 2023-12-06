<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon" />

    <title>real fake news</title>
    <?php wp_head(); ?>
</head>

<body>
    <header id="header">
        <div class="header-container">
            <div>
                <a class="logo-type" href="<?php echo esc_url(get_home_url()); ?>">rfn</a>
            </div>
            <div>
                <button id="openMenuButton">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 256 256">
                        <path
                            d="M48.07,100H207.93a12,12,0,0,0,11.8-14.55c-3.39-16-14.56-30.68-31.46-41.23S150.11,28,128,28,84.49,33.76,67.73,44.22,39.66,69.41,36.27,85.45A12,12,0,0,0,48.07,100Zm-4-12.89C50.26,58,86.33,36,128,36s77.74,22,83.91,51.11a4,4,0,0,1-.82,3.39,4,4,0,0,1-3.16,1.5H48.07a4,4,0,0,1-3.16-1.5A4,4,0,0,1,44.09,87.11Zm186.54,69.13-42.56,15.48-38.58-15.43a4,4,0,0,0-3,0L108,171.69l-38.51-15.4a4,4,0,0,0-2.86,0l-44,16A4,4,0,0,0,24,180a4.08,4.08,0,0,0,1.37-.24L44,173v11a36,36,0,0,0,36,36h96a36,36,0,0,0,36-36V171.53l21.37-7.77a4,4,0,0,0-2.74-7.52ZM204,184a28,28,0,0,1-28,28H80a28,28,0,0,1-28-28V170.07l15.93-5.79,38.58,15.43a4,4,0,0,0,3,0L148,164.31l38.51,15.4a4,4,0,0,0,2.86,0L204,174.44ZM20,128a4,4,0,0,1,4-4H232a4,4,0,0,1,0,8H24A4,4,0,0,1,20,128Z">
                        </path>
                    </svg>
                </button>
                <button id="closeMenuButton">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 256 256">
                        <path
                            d="M202.83,197.17a4,4,0,0,1-5.66,5.66L128,133.66,58.83,202.83a4,4,0,0,1-5.66-5.66L122.34,128,53.17,58.83a4,4,0,0,1,5.66-5.66L128,122.34l69.17-69.17a4,4,0,1,1,5.66,5.66L133.66,128Z">
                        </path>
                    </svg>
                </button>
                <div id="menu-container" class="menu">
                    <form id="searchform" class="searchform" action="/">
                        <div>
                            <input placeholder="Sök efter..." type="text" value="<?php get_search_query(); ?>"
                                name="s" />
                            <input class="app-button" type="submit" value="Sök" />
                        </div>
                    </form>
                    <nav id="nav">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'ad-astra-header-meny',
                                'menu_class' => 'nav-menu',
                            )
                        );
                        ?>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div id="wrap">
