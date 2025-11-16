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
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>
        <?= get_bloginfo("name") ?>
    </title>

    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/falahz.css">
</head>

<body <?php astra_schema_body(); ?> <?php body_class("relative overflow-x-hidden"); ?>>
    <?php wp_body_open(); ?>
    <header class="mobile absolute w-full z-9">
        <div>
            <div class="menu-btn-3 menu">
                <span></span>
            </div>
        </div>
        <div class="w-12/100">
            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                <?php
                // Method 1: If the theme uses the standard Customizer logo
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');

                if ($logo_url) {
                ?>
                    <img src="<?= esc_url($logo_url) ?>" alt="<?= get_bloginfo('name') ?>" class="w-full">
                <?php
                }
                ?>
            </a>
        </div>
    </header>
    <header class="main-header " >
        <?php
        $args = array(
            'container' => false,
            'theme_location' => 'primary',
            'items_wrap' => '<ul class="primary">%3$s</ul>',
        );
        wp_nav_menu($args);
        ?>
        <form action="#" class="searchForm hidden md:block!">
            <div class="border">
                <div class="trail"></div>
                <div class="trail trail-opposite"></div>
            </div>
            <div class="content">
                <div class="flex">
                    <span class="bg-linear-65 from-primary  to-secondary w-17/100 py-1 px-1 flex justify-center items-center md:h-12! md:p-0!" id="formSpan">
                        <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/falah/search.png" alt="search" class="w-1/2! md:min-h-2! md:w-33/100!">
                    </span>
                    <input type="text" name="search" id="search" class="bg-garyesh! md:h-12! px-4">
                </div>
            </div>
        </form>
    </header>