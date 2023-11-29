<?php
function load_custom_scripts_and_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style(
        'adastra-style',
        get_template_directory_uri() . "/style.css",
        array(),
        $version,
        'all'
    );
    // wp_enqueue_style('styles', get_template_directory_uri() . '/styles.css');
    // wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', array(), '3.6.0', true);
    // wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0', false);
}

add_action('wp_enqueue_scripts', 'load_custom_scripts_and_styles');

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

?>
