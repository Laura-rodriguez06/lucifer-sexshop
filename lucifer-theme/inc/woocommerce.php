
<?php

if (!defined('ABSPATH')) {
    exit;
}

function lucifer_woocommerce_setup() {

    if (!class_exists('WooCommerce')) {
        return;
    }

    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}

add_action('after_setup_theme', 'lucifer_woocommerce_setup');
