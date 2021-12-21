<?php

namespace CookBook\Modules\Theme;

class Theme {
    public function __construct() {
        $this->theme_support();
        $this->define_constants();
        $this->add_style();
    }
    private function define_constants() {
        $cur_theme = wp_get_theme();
        define( 'DISHES_DB_VERSION', $cur_theme->get( 'Version' ) );
        define( 'DISHES_DB_TEXT_DOMAIN', $cur_theme->get( 'Text Domain' ) );
    }
    private function theme_support() {
        add_theme_support( 'post-thumbnails' );
    }
    private function add_style() {
        wp_enqueue_style( 'style', get_stylesheet_uri() );
        wp_enqueue_style( 'bootstrap.css', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.css', [],'DISHES_DB_VERSION' );
        wp_enqueue_style( 'default.css', get_template_directory_uri() . '/assets/css/default.css', array( 'bootstrap.css' ), 'DISHES_DB_VERSION' );
        wp_enqueue_script( 'bootstrap.min.js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.js', [],'DISHES_DB_VERSION' );
        add_filter( 'excerpt_length', function(){
            return 20;
        } );
    }
}