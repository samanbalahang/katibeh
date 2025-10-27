<?php

/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>
        <?= get_bloginfo("name" )?>
    </title>
    <link rel="stylesheet" href="<?= get_template_directory_uri()?>/assets/css/naji.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri()?>/assets/css/swiper-bundle.min.css">

</head>
<body>
  <?php wp_body_open(); ?>
    <header class="mobile justify-end md-none" >
        <div class="menu-btn-3 menu" >
            <span></span>
        </div>
    </header>
    <header class="main-header">
        <?php
        $args = array(
            'container' => false,
            'theme_location' => 'primary',
            'items_wrap' => '<ul class="primary">%3$s</ul>',
        );
        wp_nav_menu($args);
        ?>
    </header>