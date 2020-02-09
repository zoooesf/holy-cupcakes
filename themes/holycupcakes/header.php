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

				<div class="top-bar" id="site-navigation">
					<div class="top-bar-left">
						<?php
						the_custom_logo();
						if (is_front_page() && is_home()) :
						?>
							<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
						<?php
						else :
						?>
							<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
						<?php
						endif;
						// $holy_cupcakes_description = get_bloginfo('description', 'display');
						//if ($holy_cupcakes_description && is_customize_preview()) :
						?>
							<!-- <p class="site-description"><?php //echo $holy_cupcakes_description; /* WPCS: xss ok. */ ?></p> -->
						<?php //endif; ?>
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
						<ul class="menu">
							<li><input type="search" placeholder="Search"></li>
							<li><button type="button" class="button">Search</button></li>
						</ul>
					</div>
				</div> <!-- #site-navigation -->

			</div><!-- .site-branding -->

		</header><!-- #masthead -->

		<div id="content" class="site-content">