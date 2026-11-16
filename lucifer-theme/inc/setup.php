
<?php

if (!defined('ABSPATH')) {
    exit;
}

function lucifer_theme_setup() {

    load_theme_textdomain(
        'lucifer-sexshop',
        get_template_directory() . '/languages'
    );

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_theme_support('custom-logo', array(
        'height'      => 120,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    add_theme_support('responsive-embeds');

    add_theme_support('woocommerce');

    register_nav_menus(array(
        'primary' => __('Menú principal', 'lucifer-sexshop'),
        'footer'  => __('Menú inferior', 'lucifer-sexshop'),
    ));
}

add_action('after_setup_theme', 'lucifer_theme_setup');
