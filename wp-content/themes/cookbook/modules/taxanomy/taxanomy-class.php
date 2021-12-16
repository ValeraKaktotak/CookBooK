<?php

namespace CookBook\Dishes\Modules\Taxanomy;

class Taxanomy {
    public function __construct() {

        $this->create_taxanomy_categories();
        //add_action( 'init', [ $this, 'create_taxanomy_categories' ] );

    }
    private function create_taxanomy_categories() {
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
}