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
    [
        'page_title' => 'My site phone number',
        'menu_title' => 'Phone number Settings',
        'menu_slug'  => 'phone-number-settings',
        'capability' => 'edit_posts',
        'redirect'   => false,
    ],
    [
        'page_title' => 'My site logo',
        'menu_title' => 'Logo Settings',
        'menu_slug'  => 'logo-settings',
        'capability' => 'edit_posts',
        'redirect'   => false,
    ]
];