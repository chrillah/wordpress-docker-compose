<?php
function adastra_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('adastra-style', get_template_directory_uri() . "/styles.css", array(), $version, 'all');
}
add_action('wp_enqueue_scripts', 'adastra_styles');

?>

