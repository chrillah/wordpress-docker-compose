<?php
function adastra_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('adastra-style', get_template_directory_uri() . '/style.css', array(), $version, 'all');
}
add_action('wp_enqueue_scripts', 'adastra_styles');

function register_my_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
        )
    );
}
add_action('after_setup_theme', 'register_my_menus');



function adastra_theme_support() {
    add_theme_support('post-thumbnails');
    add_image_size('adastra-img', 1200, 800, true);
}
add_action('after_setup_theme', 'adastra_theme_support');

?>
