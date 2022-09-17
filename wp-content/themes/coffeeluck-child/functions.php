<?php
/**
 * Child-Theme functions and definitions
 */
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'header-style', get_template_directory_uri() . 'css/header.css' );

}

// SVG upload enable hook
require_once( get_stylesheet_directory() . '/wp-hooks/svg-enable.php' );


?>