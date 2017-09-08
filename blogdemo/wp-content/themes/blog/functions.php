<?php

// Register Custom Navigation Walker for Bootstrap 4
require_once('class-wp-bootstrap-navwalker.php');

//Add menu items for navbar
add_theme_support('menus');

function register_theme_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __('Primary Menu')
            )
        );
}
add_action('init', 'register_theme_menus');

add_action( 'wp_enqueue_scripts', 'mat_assets');
function mat_assets() {
  wp_enqueue_style( 'blog', get_stylesheet_uri() );
}

//add widgets to sidebar
add_action( 'widgets_init', 'mat_widget_areas' );
function mat_widget_areas() {
    register_sidebar( array(
    'name'          => 'Theme Sidebar',
    'id'            => 'mat-sidebar',
    'description'   => 'The main sidebar shown on the right in our awesome theme',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<p class="widget-title">',
    'after_title'   => '</p>',
    ));
}

function blog_theme_styles() {
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
  wp_enqueue_style('blog_style', get_template_directory_uri() . '/css/blog-style.css');
  wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
}
add_action( 'wp_enqueue_scripts', 'blog_theme_styles');


function blog_theme_js() {
    wp_enqueue_script('main_js', get_template_directory_uri() . '/js/script.js', array('jquery'), '', true);
}
add_action( 'wp_enqueue_scripts', 'blog_theme_js');
?>
