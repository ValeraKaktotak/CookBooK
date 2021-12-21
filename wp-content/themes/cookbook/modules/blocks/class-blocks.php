<?php
namespace CookBook\Modules\Blocks;
class Blocks {
    public function __construct() {
        add_action( 'acf/init', [ $this, 'blocks_registers' ] );
    }
    public function blocks_registers() {
        acf_register_block_type( [
            'name'            => 'bg_banner',
            'title'           => __( 'Dishes Banner Block', DISHES_DB_TEXT_DOMAIN ),
            'render_template' => 'template-parts/blocks/banner-block.php',
            'mode'            => 'edit',
        ] );
        acf_register_block_type( [
            'name'            => 'chef-slider',
            'title'           => __( 'Banner Slider Block', DISHES_DB_TEXT_DOMAIN ),
            'render_template' => 'template-parts/blocks/home-bg-slider.php',
            'mode'            => 'edit',
        ] );
        acf_register_block_type( [
            'name'            => 'dish-recipe',
            'title'           => __( 'Recipe Block', DISHES_DB_TEXT_DOMAIN ),
            'render_template' => 'template-parts/blocks/recipe.php',
            'mode'            => 'edit',
        ] );
    }
}