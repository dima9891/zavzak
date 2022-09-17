<?php
/**
 * Child-Theme functions and definitions
 */
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'my_plugin_add_stylesheet' );
function my_plugin_add_stylesheet() {
    wp_enqueue_style( 'head-style', get_stylesheet_directory_uri() . '/css/header.css');
}

// SVG upload enable hook
require_once( get_stylesheet_directory() . '/wp-hooks/svg-enable.php' );


?>