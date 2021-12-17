<?php
namespace CookBook\Modules\Blocks;
class Blocks {
    public function __construct() {
        add_action( 'acf/init', [ $this, 'banner_block' ] );

    }
    public function banner_block() {
        acf_register_block_type( [
            'name'            => 'bg_banner',
            'title'           => __( 'Dishes Banner Block', DISHES_DB_TEXT_DOMAIN ),
            'render_template' => 'template-parts/blocks/banner-block.php',
            'mode'            => 'edit',
        ] );
    }
}