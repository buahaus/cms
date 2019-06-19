<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta chartset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="container">
        <h1 class="school-logo-text float-left"><a href="<?php echo site_url() ?>"><strong>Happy Songs For Happy People</strong></a></h1>
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
            <nav class="main-navigation">

                <!--<?php 
                    wp_nav_menu(array(
                    'theme_location' => 'headerMenuLocation'
                ));
                ?>
                -->

            <ul>
            <li <?php if (is_page('about') or wp_get_post_parent_id(0) == 13) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/about') ?>">About</a></li>
            <li><a href="<?php echo site_url('/discography') ?>">Discography</a></li>
            <li><a href="<?php echo site_url('/shop') ?>">Shop</a></li>
            <li><a href="<?php echo site_url('/tour') ?>">Tour</a></li>
            </ul>
            </nav>
            <div class="site-header__util">
            <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
            <a href="#" class="btn btn--small  btn--dark-orange float-left">Sign Up</a>
            <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
            </div>
        </div>
        </div>
    </header>