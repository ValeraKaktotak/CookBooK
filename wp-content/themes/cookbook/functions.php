<?php

//подключаем стили хук на  wp_head();
add_action( 'wp_enqueue_scripts', 'add_theme_style' );
function add_theme_style() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap.css', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.css');
    wp_enqueue_style('default.css', get_template_directory_uri() . '/assets/css/default.css');
}