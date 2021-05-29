<?php

// wp_enqueue_style('style-name', get_template_directory_uri().'/mystylefile.css');
function theme_scripts() {
    wp_enqueue_style('default-styles', get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

function theme_slug_setup() {
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'theme_slug_setup' );

function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'extra-menu' => __( 'Extra Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );

?>