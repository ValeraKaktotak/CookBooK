<?php

namespace CookBook\Dishes\Modules\cpt;

class CPT {
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
            'show_in_rest'        => true,
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