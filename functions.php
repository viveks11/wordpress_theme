<?php
// Enqueue styles and scripts
function theme_enqueue_styles() {
    wp_enqueue_style('theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

// Register navigation menu
function theme_register_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'your-theme'),
    ));
}
add_action('init', 'theme_register_menus');

// Add support for post thumbnails
add_theme_support('post-thumbnails');

// Register widget area
function theme_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar Widget Area', 'your-theme'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here to appear in your sidebar.', 'your-theme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'theme_widgets_init');
