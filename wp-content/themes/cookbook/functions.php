<?php


//подключаем стили
function add_theme_style() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap.css', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.css' );
    wp_enqueue_style( 'default.css', get_template_directory_uri() . '/assets/css/default.css', array( 'bootstrap.css' ) );
}
add_action( 'wp_enqueue_scripts', 'add_theme_style' );

//добавили отображение thumbnails
add_theme_support( 'post-thumbnails', array( 'post', 'recipes' ) );

//регистрируем меню
function theme_register_nav_menu() {
    register_nav_menu( 'header', 'Меню в шапке' );
    register_nav_menu( 'footer', 'Меню в подвале' );
}
add_action( 'after_setup_theme', 'theme_register_nav_menu' );

//CPT
function create_post_type() {
    $args = [
        'public'      => true,
        'has_archive' => true,
        'supports'    => [
            'title',
            'excerpt',
            'editor',
            'thumbnail',
        ]
    ];

    register_post_type( 'dishes', $args );
}

add_action( 'init', 'create_post_type' );

function custom_taxonomy_category() {
    $labels = array(
        'name'      => 'categories',
        'singular'  => 'category',
        'menu_name' => 'categories'
    );

    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud'     => true,
        'rewrite' => array( 'slug' => 'dishes_category' )
    );

    register_taxonomy( 'categories', 'dishes', $args );
}

// Hook into the 'init' action
add_action( 'init', 'custom_taxonomy_category', 10 );
