<?php
function starfallcatastrophe_enqueue_assets() {
    wp_enqueue_style('starfall-style', get_template_directory_uri() . '/css/styles.css');
}
add_action('wp_enqueue_scripts', 'starfallcatastrophe_enqueue_assets');

function starfallcatastrophe_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'starfallcatastrophe_setup');
?>
