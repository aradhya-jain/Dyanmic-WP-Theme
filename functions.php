<?php
/*
Theme Function File
*/
function html2wp_theme_setup() {
    add_theme_support('custom-logo');

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_image_size('home-featured', 680, 400, array ('center', 'center'));

    add_theme_support('automatic-feed-links');

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'html2wp')
    ));

};
add_action('after_setup_theme', 'html2wp_theme_setup');
function html2wp_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('jquery');
    wp_enqueue_script('html2wp-browser', get_template_directory_uri(). '/assets/js/browser.min.js');
    wp_enqueue_script('html2wp-breakpoints', get_template_directory_uri(). '/assets/js/breakpoints.min.js');
    wp_enqueue_script('html2wp-util', get_template_directory_uri(). '/assets/js/util.min.js');
    wp_enqueue_script('html2wp-main', get_template_directory_uri(). '/assets/js/main.min.js');
}
add_action('wp_enqueue_scripts', 'html2wp_scripts');

function html2wp_widgets_init() {
    register_sidebar(array(
        'name'          => __( 'Primary Sidebar', 'html2wp'),
        'id'            => 'main-sidebar',
        'description'   => 'Main Sidebar on Right Side',
        'before_widget' => '<section id= "%1$s" class = "widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => __( 'Footer Widget 1', 'html2wp'),
        'id'            => 'footer-1',
        'before_widget' => '<section id= "%1$s" class = "widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<header><h2 class="widget-title">',
        'after_title'   => '</h2></header>',
    ));
    register_sidebar(array(
        'name'          => __( 'Footer Widget 2', 'html2wp'),
        'id'            => 'footer-2',
        'before_widget' => '<section id= "%1$s" class = "widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<header><h2 class="widget-title">',
        'after_title'   => '</h2></header>',
    ));
    register_sidebar(array(
        'name'          => __( 'Footer Widget 3', 'html2wp'),
        'id'            => 'footer-3',
        'before_widget' => '<section id= "%1$s" class = "widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<header><h2 class="widget-title">',
        'after_title'   => '</h2></header>',
    ));
}  