<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Enqueue styles and scripts
function simple_theme_enqueue_scripts() {
    wp_enqueue_style( 'simple-theme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'simple_theme_enqueue_scripts' );

// Register navigation menu
function simple_theme_register_menus() {
    register_nav_menus(
        array(
            'main-menu' => __( 'Main Menu', 'simple-theme' )
        )
    );
}
add_action( 'init', 'simple_theme_register_menus' );
