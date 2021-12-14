<?php


//подключаем стили
function add_theme_style() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap.css', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.css' );
    wp_enqueue_style( 'default.css', get_template_directory_uri() . '/assets/css/default.css', array( 'bootstrap.css' ) );
}
add_action( 'wp_enqueue_scripts', 'add_theme_style' );
add_filter( 'excerpt_length', function(){
    return 20;
} );

//добавили отображение thumbnails
//add_theme_support( 'post-thumbnails', array( 'post', 'dishes' ) );
add_theme_support( 'post-thumbnails' );

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
        'label'       => __( 'dishes' ),
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


function modify_archive_dishes_query( WP_Query $query ) {
    if ( is_admin() || ! $query->is_post_type_archive( 'dishes' ) || ! $query->is_main_query() ) {
        return;
    }

    $search        = filter_input( INPUT_GET, 'filter_search', FILTER_SANITIZE_STRING );
    $expiration_date   = filter_input( INPUT_GET, 'expiration_date', FILTER_VALIDATE_INT );
    $rating_over = filter_input( INPUT_GET, 'rating', FILTER_VALIDATE_BOOLEAN );

    $meta_query = [];

    if ( $search ) {
        $query->set( 's', $search );
    }

    if ( $expiration_date ) {
        $meta_query[] = [
            'key'   => 'expiration_date',
            'value' => $expiration_date
        ];
    }

    if ( $rating_over ) {
        $meta_query[] = [
            [
                'key'     => 'rating',
                'value'   => 4,
                'compare' => '>=',
                'type'    => 'numeric',
            ]
        ];
    }

    if ( $meta_query ) {
        $query->set( 'meta_query', $meta_query );
    }
}

add_action( 'pre_get_posts', 'modify_archive_dishes_query' );



include 'inc/acf-config.php';