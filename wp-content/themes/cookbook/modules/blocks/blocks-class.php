<?php
namespace CookBook\Modules\Blocks;
class Blocks {
    public function __construct() {
        add_action( 'acf/init', [ $this, 'banner_block' ] );
        add_action( 'acf/init', [ $this, 'banner_slider_block' ] );
        add_action( 'acf/init', [ $this, 'recipe_block' ] );
    }
    public function banner_block() {
        acf_register_block_type( [
            'name'            => 'bg_banner',
            'title'           => __( 'Dishes Banner Block', DISHES_DB_TEXT_DOMAIN ),
            'render_template' => 'template-parts/blocks/banner-block.php',
            'mode'            => 'edit',
        ] );
    }
    public function banner_slider_block() {
        acf_register_block_type( [
            'name'            => 'chef-slider',
            'title'           => __( 'Banner Slider Block', DISHES_DB_TEXT_DOMAIN ),
            'render_template' => 'template-parts/blocks/home-bg-slider.php',
            'mode'            => 'edit',
        ] );
    }
    public function recipe_block() {
        acf_register_block_type( [
            'name'            => 'dish-recipe',
            'title'           => __( 'Recipe Block', DISHES_DB_TEXT_DOMAIN ),
            'render_template' => 'template-parts/blocks/recipe.php',
            'mode'            => 'edit',
        ] );
    }
}