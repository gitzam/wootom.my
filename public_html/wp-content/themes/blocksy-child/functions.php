<?php

if (! defined('WP_DEBUG')) {
	die( 'Direct access forbidden.' );
}

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
});

// 製品ページでのみ WooCommerce SKU を削除する
function sv_remove_product_page_skus( $enabled ) {
	if ( ! is_admin() && is_product() ) {
		return false;
	}

    return $enabled;
}
add_filter( 'wc_product_sku_enabled', 'sv_remove_product_page_skus' );

function wpb_childtheme_scripts() {
    wp_enqueue_script(
        'custom-js', // Unique identifier (handle) for the script
        get_stylesheet_directory_uri(). '/assets/custom.js', // Path to the custom.js file
        array('jquery'), // Dependencies (optional)
        '', // Version number (optional)
        true // Should the script be placed in footer? Optional
    );
}

// Hook into wp_enqueue_scripts action
add_action('wp_enqueue_scripts', 'wpb_childtheme_scripts');