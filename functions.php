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