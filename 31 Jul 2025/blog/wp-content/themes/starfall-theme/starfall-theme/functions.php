<?php
function starfall_theme_scripts() {
    wp_enqueue_style('starfall-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'starfall_theme_scripts');
