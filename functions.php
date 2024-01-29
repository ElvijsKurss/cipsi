<?php
// STYLES AND SCRIPTS
function enqueue_my_styles()
{
    wp_enqueue_style('my_theme_style', get_stylesheet_directory_uri() . '/style.css', array());
}

add_action('wp_enqueue_scripts', 'enqueue_my_styles');


// MENUS
function register_my_menu()
{
    register_nav_menu('header-menu', __('Header Menu'));
}
add_action('init', 'register_my_menu');
