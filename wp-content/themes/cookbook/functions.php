<?php

//вешаем хуки
add_action( 'wp_enqueue_scripts', 'add_theme_style' );
add_action( 'after_setup_theme', 'header_menu' );
add_action( 'after_setup_theme', 'footer_menu' );
//CPT
add_action( 'init', 'create_post_type' );

//подключаем стили
function add_theme_style() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap.css', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.css' );
    wp_enqueue_style( 'default.css', get_template_directory_uri() . '/assets/css/default.css', array( 'bootstrap.css' ) );
}

//регистрируем меню в хедере
function header_menu(){
    register_nav_menu( 'header', 'Меню в шапке' );
}
//регистрируем меню в футере
function footer_menu(){
    register_nav_menu( 'footer', 'Меню в подвале' );
}

// Our custom post type function
function create_post_type() {
    register_post_type( 'recipes',
        // CPT Options
        array(
            'labels' => array(
                'name' => __( 'recipes' ),
                'singular_name' => __( 'recipe' )
            ),
            'public' => true,
            'has_archive' => true,
        )
    );
}
$args = array( 'post_type' => 'recipes', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );