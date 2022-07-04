<?php

/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Homepage
 *
 * @package wtshop
 */

get_header(); ?>

<main class="site-main homepage" role="main">

	<figure><img class="mr-ubu" src="<?php echo get_theme_file_uri()?>/assets/images/Véritable_portrait_de_Monsieur_Ubu.png" alt="Véritable_portrait_de_Monsieur_Ubu"></figure>

</main><!-- #main -->
<?php get_footer(); ?>
