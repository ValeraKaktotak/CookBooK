<html>
    <title>
        CookBook
    </title>
    <head>
        <meta charset="utf-8">
        <link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css" />
        <?php wp_head();?>
    </head>
    <body>
        <header class="p-3 bg-dark text-white">
            <div class="container">
                <div>
                    <?php wp_nav_menu( array(
                        'theme_location' => 'header',
                        'container' => null,
                        'menu_class' => 'nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0',
                        'menu_id' => 'my_nav_menu'
                    ))?>
                </div>
            </div>
        </header>
