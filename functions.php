<?php 
/**
 * Dequeue a lot of css
 */
function sf_child_theme_dequeue_style()
{
    wp_dequeue_style('storefront-style');
    wp_deregister_style('storefront-style');
    wp_dequeue_style('storefront-fonts');
    wp_deregister_style('storefront-fonts');
    if(!is_admin()) {
        wp_dequeue_style('dashicons-css');
        wp_deregister_style('dashicons-css');
        wp_dequeue_style('wp-block-library-theme');
        wp_deregister_style('wp-block-library-theme');
        wp_dequeue_style('storefront-gutenberg-blocks');
        wp_deregister_style('storefront-gutenberg-blocks');
        wp_dequeue_style('wp-block-library');
        wp_deregister_style('wp-block-library');
        wp_dequeue_style('storefront-icons');
        wp_deregister_style('storefront-icons');
    }

    // storefront-jetpack-widgets-css
    wp_dequeue_style('storefront-jetpack-widgets');
    wp_deregister_style('storefront-jetpack-widgets');

    wp_dequeue_style('select2');
    wp_deregister_style('select2');

    wp_deregister_style('storefront-woocommerce-style');
}
add_action('wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999);


function artezpress_style() {
    wp_register_style('artezpress-css', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_style('artezpress-css');
}
add_action('wp_enqueue_scripts', 'artezpress_style');

add_action('init' , 'remove_functions' , 15 );

function remove_functions() {
    remove_action( 'woocommerce_before_main_content', 'storefront_before_content', 10 );
    remove_action( 'woocommerce_after_main_content', 'storefront_after_content', 10 );

    remove_action( 'homepage', 'storefront_product_categories', 20 );
    remove_action( 'homepage', 'storefront_recent_products', 30 );
    remove_action( 'homepage', 'storefront_featured_products', 40 );
    remove_action( 'homepage', 'storefront_popular_products', 50 );
    remove_action( 'homepage', 'storefront_on_sale_products', 60 );
    remove_action( 'homepage', 'storefront_homepage_content', 10 );
    remove_action( 'homepage', 'storefront_best_selling_products', 70 );
    remove_action( 'woocommerce_after_shop_loop', 'storefront_sorting_wrapper', 9 );
    remove_action( 'woocommerce_after_shop_loop', 'woocommerce_catalog_ordering', 10 );
    remove_action( 'woocommerce_after_shop_loop', 'woocommerce_result_count', 20 );
    remove_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination', 30 );
    remove_action( 'woocommerce_after_shop_loop', 'storefront_sorting_wrapper_close', 31 );

    remove_action( 'woocommerce_before_shop_loop', 'storefront_sorting_wrapper', 9 );
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 10 );
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
    remove_action( 'woocommerce_before_shop_loop', 'storefront_woocommerce_pagination', 30 );
    remove_action( 'woocommerce_before_shop_loop', 'storefront_sorting_wrapper_close', 31 );

}


if ( ! function_exists( 'storefront_before_content' ) ) {
    /**
     * Before Content
     * Wraps all WooCommerce content in wrappers which match the theme markup
     *
     * @since   1.0.0
     * @return  void
     */
    function storefront_before_content() {
        ?>
        <main class="site-main" role="main">
      <?php 
    }
}

if ( ! function_exists( 'storefront_after_content' ) ) {
    /**
     * After Content
     * Closes the wrapping divs
     *
     * @since   1.0.0
     * @return  void
     */
    function storefront_after_content() {
        ?>
       </main>
        <?php
    }
}
