<?php
function my_theme_enqueue_assets() {
    register_nav_menu('main-menu' __('Main Menu'));
    wp_enqueue_style('main-style', get_stylesheet_uri()); 
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/style.css'); 
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_assets');
?>