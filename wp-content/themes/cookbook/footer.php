        <footer class="p-3 bg-dark text-white">
            <div class="container">
                <?php wp_nav_menu( array(
                    'theme_location' => 'footer',
                    'container' => null,
                    'menu_class' => 'nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0',
                    'menu_id' => 'my_nav_menu_footer'
                ))?>
                <div class="d-flex flex-wrap align-items-center justify-content-right justify-content-lg-start">
                    <div>
                        <a style="margin: 10px 0; text-decoration: none; display: inline-block;" href="https://www.facebook.com/"><?php echo __( 'Facebook', DISHES_DB_TEXT_DOMAIN ); ?></a>
                        <p>Copyright © 2021</p>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
<?php wp_footer(); ?>