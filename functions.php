<?php 

function first_setup() {
    load_theme_textdomain('first');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'first_setup');

// Assets
function first_stylesheet() {
    wp_enqueue_style('first_main_style', get_stylesheet_uri(), '', '1.0.1');
}
add_action('wp_enqueue_scripts', 'first_stylesheet');

?>