<?php 

function studio_scripts() {
    wp_register_style('main', get_stylesheet_directory_uri() .'/dist/main.css', [], 1, 'all');
    wp_enqueue_style('main');
    wp_register_style('custom', get_stylesheet_directory_uri() .'/src/css/custom.css', [], 1, 'all');
    wp_enqueue_style('custom');

    wp_register_script('main', get_stylesheet_directory_uri() . '/dist/main.js', ['jquery'], 1, true);
    wp_enqueue_script('main');
}

add_action('wp_enqueue_scripts', 'studio_scripts'); 

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );