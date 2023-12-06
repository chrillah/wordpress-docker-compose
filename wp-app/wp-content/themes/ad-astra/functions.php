<?php
function load_style_script()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('adastra-style', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'load_style_script');

function add_custom_script()
{
    wp_enqueue_script('my-custom-script', get_template_directory_uri() . '/js/adastra.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'add_custom_script');

function ad_astra_register_menus()
{
    $locations = array(
        'ad-astra-header-meny' => 'ad-astra-header-meny',
        'ad-astra-secondary-meny' => 'ad-astra-secondary-meny'
    );
    register_nav_menus($locations);
}
add_action('init', 'ad_astra_register_menus');

function demotema_register_sidebars()
{
    register_sidebar(
        array(
            'name' => 'adress widget',
            'id' => 'adress-widget',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>'

        )
    );
}

add_action('widgets_init', 'demotema_register_sidebars');

function register_link_widget()
{
    register_sidebar(
        array(
            'name' => 'Link Widget',
            'id' => 'link-widget',
            'description' => 'Widget for links.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
}
add_action('widgets_init', 'register_link_widget');

function register_about_widget()
{
    register_sidebar(
        array(
            'name' => 'About Widget',
            'id' => 'about-widget',
            'description' => 'Widget for About section.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
}
add_action('widgets_init', 'register_about_widget');

function adastra_theme_support()
{
    add_theme_support('post-thumbnails');
    add_image_size('adastra-img', 1200, 800, true);
}
add_action('after_setup_theme', 'adastra_theme_support');

function custom_excerpt_length($length)
{
    return 20;
}
add_filter('excerpt_length', 'custom_excerpt_length');

?>
