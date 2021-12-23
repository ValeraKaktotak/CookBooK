<?php
namespace CookBook\Modules\Blocks;

class Blocks {
    public function __construct() {
        add_action( 'acf/init', [ $this, 'register_blocks' ] );
        add_action( 'acf/init', [ $this, 'register_option' ]);
    }

    private function get_config(): array {
        return include get_template_directory() . '/modules/blocks/config/acf-blocks.php';
    }

    public function register_blocks() {
        $config = $this->get_config();

        foreach ( $config as $block ) {
            acf_register_block_type( $block );
        }
    }


    function register_option() {
        acf_add_options_page( [
            'page_title' => 'My site phone number',
            'menu_title' => 'Phone number Settings',
            'menu_slug'  => 'phone-number-settings',
            'capability' => 'edit_posts',
            'redirect'   => false,
        ] );
        acf_add_options_page( [
            'page_title' => 'My site logo',
            'menu_title' => 'Logo Settings',
            'menu_slug'  => 'logo-settings',
            'capability' => 'edit_posts',
            'redirect'   => false,
        ] );
    }

}