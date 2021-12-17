<?php

namespace CookBook\Dishes\Modules\cpt;

class Cpt {
    public function __construct() {
        add_action( 'init', [ $this, 'create_post_type' ] );
    }
    public function create_post_type() {
        $args = [
            'public'       => true,
            'label'        => __( 'dishes', DISHES_DB_TEXT_DOMAIN ),
            'has_archive'  => true,
            'hierarchical' => true,
            'taxonomies'   => array('categories'),
            'supports'     => [
                'title',
                'excerpt',
                'editor',
                'thumbnail',
            ]
        ];
        register_post_type( 'dishes', $args );
    }
}