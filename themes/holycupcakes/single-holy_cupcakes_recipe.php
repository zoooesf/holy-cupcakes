<?php
/**
 * Template Name: single-recipe
 * Template Post Type: post, page, recipe
 * The template for displaying all recipe posts
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Holy_Cupcakes
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
				<img id="recipeBanner" src="http://holycupcake.local/wp-content/uploads/2020/03/skinnyBanner.jpg" alt="Cupcakes in a line">
		<div class="grid-container">
			<div class="grid-x" id="recipe">
				<div class="large-4 grid-margin-x show-for-large sidebar-box">
					<?php
					get_sidebar();
					?>
				</div>
		<section class="large-8 medium-12 grid-x align-justify blog">
		<?php
		while ( have_posts() ) :
			the_post();
		?>
			<h1><?php echo get_the_title();?></h1>
			<hr class="eSeparator">
			<p><?php get_template_part( 'template-parts/content', get_post_type() );?><p><?php

			the_post_navigation();

			

		endwhile; // End of the loop.
		?>
</section>
		</main><!-- #main -->
		</div>
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
