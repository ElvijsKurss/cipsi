<?php
// STYLES AND SCRIPTS
function enqueue_my_styles()
{
    wp_enqueue_style('cipsi', get_stylesheet_directory_uri() . '/style.css', array());
    wp_enqueue_style('cipsi-font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
}

add_action('wp_enqueue_scripts', 'enqueue_my_styles');


// MENUS
function register_my_menu()
{
    register_nav_menu('header-menu', __('Header Menu'));
}
add_action('init', 'register_my_menu');
