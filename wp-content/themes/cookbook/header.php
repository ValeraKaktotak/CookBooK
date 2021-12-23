<?php
$logo = get_field('opt_logo', 'option');
$size = 'thumbnail';
?>
<html>
    <title>
        <?php echo __( 'CookBook', DISHES_DB_TEXT_DOMAIN ); ?>
    </title>
    <head>
        <meta charset="utf-8">
        <link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css" />
        <?php wp_head();?>
    </head>
    <body>
        <header class="p-3 bg-dark text-white">
            <div class="container">
                <div class="margin-20" style="display: inline-block;">
                    <a href="<?php echo site_url(); ?>"><?php echo wp_get_attachment_image( $logo['id'], $size ); ?></a>
                </div>
                <div class="margin-20" style="display: inline-block;">
                    <?php echo get_field("opt_phone_number", "option");?>
                </div>
                <div style="display: inline-block;">
                    <?php wp_nav_menu( array(
                        'theme_location' => 'header',
                        'container' => null,
                        'menu_class' => 'nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0',
                        'menu_id' => 'my_nav_menu'
                    ))?>
                </div>
            </div>
        </header>
