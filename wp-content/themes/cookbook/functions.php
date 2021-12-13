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

// Our custom post type function
function create_post_type() {
    register_post_type( 'dishes',
        array(
            'label'  => null,
            'labels' => [
                'name'               => 'Рецепты', // основное название для типа записи
                'singular_name'      => 'Рецепт', // название для одной записи этого типа
                'add_new'            => 'Добавить рецепт', // для добавления новой записи
                'add_new_item'       => 'Добавление рецепта', // заголовка у вновь создаваемой записи в админ-панели.
                'edit_item'          => 'Редактирование рецепта', // для редактирования типа записи
                'new_item'           => 'Новый рецепт', // текст новой записи
                'view_item'          => 'Смотреть рецепт', // для просмотра записи этого типа.
                'search_items'       => 'Искать', // для поиска по этим типам записи
                'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
                'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
                'parent_item_colon'  => '', // для родителей (у древовидных типов)
                'menu_name'          => 'Рецепты', // название меню
            ],
            'description'         => 'все рецепты',
            'public'              => true,
            'publicly_queryable'  => true, // зависит от public
            'show_ui'             => true, // зависит от public
            'show_in_nav_menus'   => true, // зависит от public
            'show_in_menu'        => true, // показывать ли в меню адмнки
            'show_in_admin_bar'   => true, // зависит от show_in_menu
            'show_in_rest'        => true, // добавить в REST API. C WP 4.7
            'rest_base'           => null, // $post_type. C WP 4.7
            'menu_position'       => 4,
            'menu_icon'           => null,
            //'capability_type'   => 'post',
            //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
            //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
            'hierarchical'        => false,
            'supports'            => [ 'title', 'editor', 'thumbnail', 'author', 'excerpt'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
            'has_archive'         => false,
            'query_var'           => true,
        )
    );
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
