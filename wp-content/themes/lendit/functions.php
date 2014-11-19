<?php

// Load tht Theme CSS
function theme_styles() {
  wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
//  wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );
//  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
}

// Load the Theme JS
function theme_js() {
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '', true );
  wp_enqueue_script( 'theme', get_template_directory_uri() . '/js/theme.js', array('jquery'), '', true );
}

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');


add_action( 'wp_enqueue_scripts', 'theme_js' );
add_action( 'wp_enqueue_scripts', 'theme_styles' );

// Enable custom menus
add_theme_support( 'menus' );

register_nav_menus( array(
    'primary' => __( 'Main Menu' ),
) );

// Enable thumbnails
add_theme_support('post-thumbnails');

// Disable admin toolbar if you're not the admin user
if (!current_user_can(‘edit_posts’)) {
  show_admin_bar(false);
}

?>