<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Holy_Cupcakes
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.typekit.net/acd8moh.css">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'holycupcakes'); ?></a>

		<header id="masthead" class="site-header">
			<div class="site-branding">

				<div class="top-bar grid-container" id="site-navigation">
					<div class="top-bar-left">
						<?php
						// if there's no custom logo load the title text
						if (!has_custom_logo()) :
						?>
							<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
						<?php
						else :
							// else if there is a custom logo load the logo
							the_custom_logo();
						endif;
						?>
					</div>
					<div class="top-bar-left">
						<?php
						wp_nav_menu(array(
							'theme_location' => 'menu',
							'menu_id'        => 'primary-menu',
							'container'		 => 'ul',
							'container_class' => 'menu',

						));
						?>
					</div>
					<div class="top-bar-right">
						<?php
						if (is_active_sidebar('header-widget')) {
							dynamic_sidebar('header-widget');
						}
						?>
					</div>
				</div> <!-- #site-navigation -->

			</div><!-- .site-branding -->

		</header><!-- #masthead -->

		<div id="content" class="site-content">