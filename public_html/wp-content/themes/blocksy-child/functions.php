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