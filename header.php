<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CakeCorp</title>

    <?php wp_head(); ?>

</head>

<body>

<header class="header">
    <div class="container">
        <div class="row">
            <?php the_custom_logo(); ?>
            <div class="header__menu">
                <nav class="header__menu-left">
                    <ul class="header__menu-list">
                        <?php
                            wp_nav_menu(array(
                            'theme_location' => 'header_menu',
                            'menu_class' => 'header__menu-list',
                            'container' => false,
                            'depth' => 1,
                            'fallback_cb' => false
                            ));
                        ?>
                    </ul>
                </nav>
                <div class="header__menu-right">
                    <a href="#" class="header__menu-right-pool">
                        <img src="<?php  bloginfo('template_url'); ?>/assets/img/svg/pool.svg" alt="pool">
                    </a>
                    <a href="#" class="header__menu-right-pool-by-cake">
                        POOL by CAKE
                        <img src="<?php  bloginfo('template_url'); ?>/assets/img/svg/arrow-header.svg" alt="Arrow">
                    </a>
                </div>
            </div>
            <div class="header__burger-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>