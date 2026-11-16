
<?php
if (!defined('ABSPATH')) {
    exit;
}

$cart_url = function_exists('wc_get_cart_url')
    ? wc_get_cart_url()
    : home_url('/carrito/');

$cart_count = function_exists('WC') && WC()->cart
    ? WC()->cart->get_cart_contents_count()
    : 0;

$account_url = function_exists('wc_get_page_permalink')
    ? wc_get_page_permalink('myaccount')
    : wp_login_url();
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="announcement-bar">
    <p>DESCUBRE UNA NUEVA FORMA DE VIVIR TU PASIÓN</p>
</div>

<header class="site-header">
    <div class="container header-container">

        <div class="site-branding">
            <a href="<?php echo esc_url(home_url('/')); ?>"
               class="brand-link"
               aria-label="Lucifer Sex Shop - Inicio">

                <img
                    src="<?php echo esc_url(get_theme_file_uri('/assets/images/lucifer-logo-blanco-rojo.png')); ?>"
                    alt="Lucifer Sex Shop"
                    class="lucifer-logo"
                >

            </a>
        </div>

        <button class="mobile-menu-toggle"
                aria-label="Abrir menú"
                aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav class="main-navigation" aria-label="Menú principal">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container'      => false,
                'fallback_cb'    => false,
                'menu_class'     => 'nav-menu',
            ));
            ?>
        </nav>

        <div class="header-actions">

            <div class="header-search">
                <?php
                if (function_exists('get_product_search_form')) {
                    get_product_search_form();
                }
                ?>
            </div>

            <a href="<?php echo esc_url($account_url); ?>"
               class="header-icon"
               aria-label="Mi cuenta">
                ♙
            </a>

            <a href="<?php echo esc_url($cart_url); ?>"
               class="header-icon cart-link"
               aria-label="Carrito de compras">
                🛒
                <span class="cart-count">
                    <?php echo esc_html($cart_count); ?>
                </span>
            </a>

        </div>

    </div>
</header>
