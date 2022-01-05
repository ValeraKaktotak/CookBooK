<?php
namespace CookBook\Modules\Likes;
class Choice {
    public function __construct() {
        add_action('wp_enqueue_scripts', [ $this, 'enqueue_assets' ]);
        add_action('wp_ajax_nopriv_my_choice', [ $this, 'my_choice_func' ]);
        add_action('wp_ajax_my_choice', [ $this, 'my_choice_func' ]);
    }
    function enqueue_assets(){
        $my_ajax = [
            'ajaxurl' => admin_url( 'admin-ajax.php' )
        ];
        wp_localize_script( 'likes', 'ajax_script', $my_ajax );
    }
    function my_choice_func()
    {
        $post_id = $_POST('post_id');
        $dishes = get_user_meta( get_current_user_id(), 'likes_dishes', true ) ?: [];
        if( in_array( $post_id, $dishes ) ) {
            $action = 'deleted';
            array_splice( $dishes, array_search( $post_id, $dishes ), 1);
        } else{
            $action = 'added';
            $dishes[] = $post_id;
        }
        update_user_meta( get_current_user_id(), 'likes_dishes', $dishes );
        wp_send_json_success( [
            'action' => $action
        ] );
    }
}