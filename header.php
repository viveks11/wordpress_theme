<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header class="site-header">
        <!-- <div class="site-title"><?php bloginfo('name'); ?></div> -->
        <div class="site-description"><?php bloginfo('description'); ?></div>

        <?php
        // Display navigation menu
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_class' => 'site-navigation'
        ));
        ?>
    </header>
