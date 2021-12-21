<?php

namespace CookBook\Modules\Filter;

class Dishes_filter {
    public function __construct() {

        //$this->modify_archive_dishes_query();
        add_action( 'pre_get_posts', [ $this, 'modify_archive_dishes_query' ] );

    }
    public function modify_archive_dishes_query( \WP_Query $query ) {
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
}

