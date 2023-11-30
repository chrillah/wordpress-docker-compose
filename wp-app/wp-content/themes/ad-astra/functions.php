<?php
function load_style_script()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('adastra-style', get_template_directory_uri() . '/style.css');

    wp_enqueue_script('min-jquery', get_template_directory_uri() . '/js/jquery.js', array(), '3.6.0', true);
}
add_action('wp_enqueue_scripts', 'load_style_script');

function register_my_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
        )
    );
}
add_action('after_setup_theme', 'register_my_menus');

function ad_astra_register_menus()
{
    register_nav_menus(
        array(
            'ad-astra-header-meny' => __('Ad Astra Header Meny', 'ad-astra'),
        )
    );
}
add_action('after_setup_theme', 'ad_astra_register_menus');

function custom_side_menu()
{
    register_nav_menu('undersida_nav', __('Undersida Nav'));
}
add_action('after_setup_theme', 'custom_side_menu');

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


// function adastra_menus()
// {
//     $locations = array(
//         'sidemenu' => "Side menu"
//     );
//     register_nav_menus($locations);
// }

// add_action("init", "adastra_menus");



function adastra_theme_support()
{
    add_theme_support('post-thumbnails');
    add_image_size('adastra-img', 1200, 800, true);
}
add_action('after_setup_theme', 'adastra_theme_support');

// pagenation
// function items_per_page($query)
// {
//     $query->set('posts_per_page', 3);
// }

// add_action('pre_get_posts', 'items_per_page');

?>
