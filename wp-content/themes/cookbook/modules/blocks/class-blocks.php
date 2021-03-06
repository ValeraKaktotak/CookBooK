<?php
namespace CookBook\Modules\Blocks;

class Blocks {
    public function __construct() {
        add_action( 'acf/init', [ $this, 'register_blocks' ] );
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
}