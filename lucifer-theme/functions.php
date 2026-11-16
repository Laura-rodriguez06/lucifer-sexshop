
<?php
/**
 * Lucifer Sexshop - Theme Functions
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Cargar configuración del tema.
 */
require_once get_template_directory() . '/inc/setup.php';

/**
 * Cargar estilos y scripts.
 */
require_once get_template_directory() . '/inc/assets.php';

/**
 * Integración WooCommerce.
 */
require_once get_template_directory() . '/inc/woocommerce.php';
