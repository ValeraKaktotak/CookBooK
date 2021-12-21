<?php
add_filter( 'acf/settings/show_admin', '__return_false' );

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group (
    array(
        'key' => 'group_61b8c51569d1c',
        'title' => 'Dishes attr',
        'fields' => array(
            array(
                'key' => 'field_61b8c521347ee',
                'label' => 'Vege',
                'name' => 'vege',
                'type' => 'select',
                'instructions' => 'если блюдо постное/веге',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    'yes' => 'yes',
                    'no' => 'no',
                ),
                'default_value' => false,
                'allow_null' => 1,
                'multiple' => 0,
                'ui' => 0,
                'return_format' => 'value',
                'ajax' => 0,
                'placeholder' => '',
            ),
            array(
            'key' => 'field_61b8c8222b71c',
            'label' => 'Dishes Type',
            'name' => 'dishes_type',
            'type' => 'select',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'family' => 'family',
                '' => '',
                'fitness' => 'fitness',
                'original' => 'original',
            ),
            'default_value' => false,
            'allow_null' => 0,
            'multiple' => 0,
            'ui' => 0,
            'return_format' => 'value',
            'ajax' => 0,
            'placeholder' => '',
        ),
        ),
        'location' => array(
            array(
                array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'dishes',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    )
);

acf_add_local_field_group(
    array(
        'key' => 'group_61b8d611a3b3e',
        'title' => 'expiration_date',
        'fields' => array(
            array(
            'key' => 'field_61b8d62957ef2',
            'label' => 'expiration_date',
            'name' => 'expiration_date',
            'type' => 'number',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'min' => 1,
            'max' => 7,
            'step' => 1,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'dishes',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    )
);

acf_add_local_field_group(
    array(
        'key' => 'group_61b8c688436e9',
        'title' => 'rating',
        'fields' => array(
            array(
                'key' => 'field_61b8c72bd63a6',
                'label' => 'rating',
                'name' => 'rating',
                'type' => 'number',
                'instructions' => 'введите рейтинг блюда',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'min' => 0,
                'max' => 10,
                'step' => 1,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'dishes',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    )
);

endif;