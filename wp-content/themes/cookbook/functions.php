<?php

//include 'inc/acf-config.php';

include 'modules/theme/theme-class.php';
new \CookBook\Modules\Theme\Theme();

include 'modules/cpt/cpt-dishes-class.php';
new \CookBook\Dishes\Modules\cpt\CPT();

include 'modules/taxonomy/taxonomy-class.php';
new \CookBook\Dishes\Modules\Taxonomy\Taxonomy();

include 'modules/filter/custom-search-filter-class.php';
new \CookBook\Modules\Filter\Dishes_filter();

include 'modules/nav-menu/nav-menu-class.php';
new \CookBook\Modules\NavMenu\NavMenu();

include 'modules/blocks/class-blocks.php';
new \CookBook\Modules\Blocks\Blocks();