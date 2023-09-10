<?php

add_action( 'wp_enqueue_scripts', function () {

    wp_enqueue_style( 'fonts-preconnect', "https://fonts.googleapis.com" );
    wp_enqueue_style( 'fonts-preconnect-crossorigin', "https://fonts.gstatic.com" );
    wp_enqueue_style( 'fonts', "https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;700&display=swap" );
    wp_enqueue_style( 'style', get_template_directory_uri() . "/assets/css/style.css" );

    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', get_template_directory_uri() . "/assets/js/jquery-3.7.0.min.js" );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( "main", get_template_directory_uri() . "/assets/js/main.js", array('jquery'), null, true );

});

add_action( 'after_setup_theme', 'theme_register_nav_menu' );

function theme_register_nav_menu() {
    register_nav_menu( 'header_menu', 'Header menu' );
    register_nav_menu( 'footer_menu_1', 'Footer menu 1' );
    register_nav_menu( 'footer_menu_2', 'Footer menu 2' );
    register_nav_menu( 'footer_menu_3', 'Footer menu 3' );
    register_nav_menu( 'footer_menu_4', 'Footer menu 4' );
}

add_theme_support( 'admin-bar', array( 'callback' => '__return_false' ) );

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

function create_custom_post_types() {
  register_post_type('news',
      array(
          'labels' => array(
              'name' => __('Новини'),
              'singular_name' => __('Новина')
          ),
          'public' => true,
          'has_archive' => true,
          'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
      )
  );

  register_post_type('events',
      array(
          'labels' => array(
              'name' => __('Події'),
              'singular_name' => __('Подія')
          ),
          'public' => true,
          'has_archive' => true,
          'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
      )
  );

  register_post_type('portfolio',
      array(
          'labels' => array(
              'name' => __('Портфоліо'),
              'singular_name' => __('Портфоліо')
          ),
          'public' => true,
          'has_archive' => true,
          'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
      )
  );
}
add_action('init', 'create_custom_post_types');

function create_custom_taxonomies() {
  register_taxonomy(
      'news_category',
      'news',
      array(
          'label' => __('Категорії новин'),
          'hierarchical' => true,
      )
  );

  register_taxonomy(
      'event_category',
      'events',
      array(
          'label' => __('Категорії подій'),
          'hierarchical' => true,
      )
  );

  register_taxonomy(
      'portfolio_category',
      'portfolio',
      array(
          'label' => __('Категорії портфоліо'),
          'hierarchical' => true,
      )
  );
}
add_action('init', 'create_custom_taxonomies');

?>