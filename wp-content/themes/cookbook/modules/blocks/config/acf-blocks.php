<?php

return [
    [
        'name'            => 'bg_banner',
        'title'           => __( 'Dishes Banner Block', DISHES_DB_TEXT_DOMAIN ),
        'render_template' => 'template-parts/blocks/banner-block.php',
        'mode'            => 'edit',
    ],
    [
        'name'            => 'chef-slider',
        'title'           => __( 'Banner Slider Block', DISHES_DB_TEXT_DOMAIN ),
        'render_template' => 'template-parts/blocks/home-bg-slider.php',
        'mode'            => 'edit',
    ],
    [
        'name'            => 'dish-recipe',
        'title'           => __( 'Recipe Block', DISHES_DB_TEXT_DOMAIN ),
        'render_template' => 'template-parts/blocks/recipe.php',
        'mode'            => 'edit',
    ],

];