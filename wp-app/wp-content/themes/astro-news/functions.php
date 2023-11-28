<?php

function load_custom_scripts_and_styles() {
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('styles', get_template_directory_uri() . '/css/styles.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');

    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', array(), '3.6.0', true);
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0', false);
}

add_action('wp_enqueue_scripts', 'load_custom_scripts_and_styles');



?>
