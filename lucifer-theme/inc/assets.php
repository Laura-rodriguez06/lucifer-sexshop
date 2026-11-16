
<?php

if (!defined('ABSPATH')) {
    exit;
}

function lucifer_enqueue_assets() {

    $theme_version = wp_get_theme()->get('Version');

    wp_enqueue_style(
        'lucifer-main-style',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        $theme_version
    );

    wp_enqueue_script(
        'lucifer-main-script',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        $theme_version,
        true
    );
}

add_action('wp_enqueue_scripts', 'lucifer_enqueue_assets');
