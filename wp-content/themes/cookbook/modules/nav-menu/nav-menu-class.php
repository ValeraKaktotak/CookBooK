<?php

namespace CookBook\Modules\NavMenu;

class NavMenu {
    public function __construct() {

        $this->register_nav_menu();
        //add_action( 'init', [ $this, 'register_nav_menu' ] );

    }
    private function register_nav_menu() {
        register_nav_menu( 'header', 'Меню в шапке', DISHES_DB_TEXT_DOMAIN );
        register_nav_menu( 'footer', 'Меню в подвале', DISHES_DB_TEXT_DOMAIN );
    }
}