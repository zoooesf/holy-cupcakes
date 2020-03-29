<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Holy_Cupcakes
 */

?>

</div><!-- #content -->
<footer id="colophon" class="site-footer">
	<div class="site-info">
		<div class="grid-container">
			<div id="footer-sidebar" class="secondary grid-x">
				<div class="cell small-12 medium-3 large-3 ">
					<div id="footer-sidebar1">
						<?php
						if (is_active_sidebar('footer-sidebar-1')) {
							dynamic_sidebar('footer-sidebar-1');
						}
						?>
						<h4>Quick links</h4>
						<?php
						wp_nav_menu(array(
							'theme_location' => 'menu',
							'menu_id'        => 'primary-menu',
							'container'		 => 'ul',
							'container_class' => 'menu',

						));
						?>
					</div>
				</div>
				<div class="cell small-12 medium-5 large-5 ">
					<div id="footer-sidebar2">
						<div>
							<h4>Subscribe to our newsletter!</h4>
							<?php
							if (is_active_sidebar('footer-sidebar-2')) {
								dynamic_sidebar('footer-sidebar-2');
							}
							?>
						</div>
						<div>
							<?php if (get_theme_mod('holy_cupcakes_facebook_url') || get_theme_mod('holy_cupcakes_twitter_url')) { ?>
								<div class="social-media">
									<?php if (get_theme_mod('holy_cupcakes_facebook_url')) { ?>
										<!-- <li class="facebook"> -->
										<a href="<?php echo get_theme_mod('holy_cupcakes_facebook_url'); ?>"><?php echo esc_html__('', 'holy_cupcakes'); ?> <img src="<?php echo get_template_directory_uri() . '/assets/img/facebook.svg'; ?>" title="<?php echo esc_html__('', 'holy_cupcakes'); ?>" height="50" width="50"> </a>
										<!-- </li> -->
										<!-- <li class="twitter"> -->
										<a href="<?php echo get_theme_mod('holy_cupcakes_twitter_url'); ?>"><?php echo esc_html__('', 'holy_cupcakes'); ?> <img src="<?php echo get_template_directory_uri() . '/assets/img/twitter.svg'; ?>" title="<?php echo esc_html__('', 'holy_cupcakes'); ?>" height="50" width="50"> </a>
										<!-- </li> -->
										<!-- <li class="instagram"> -->
										<a href="<?php echo get_theme_mod('holy_cupcakes_instagram_url'); ?>"><?php echo esc_html__('', 'holy_cupcakes'); ?> <img src="<?php echo get_template_directory_uri() . '/assets/img/instagram.svg'; ?>" title="<?php echo esc_html__('', 'holy_cupcakes'); ?>" height="50" width="50"> </a>
										<!-- </li> -->
									<?php } ?>

								<?php } ?>
								</div>
						</div>
					</div>
				</div>
				<div class="cell small-12 medium-4 large-4 ">
					<div id="footer-sidebar3">
						<?php
						if (is_active_sidebar('footer-sidebar-3')) {
							dynamic_sidebar('footer-sidebar-3');
						}
						?>
						<h4>Contact</h4>
						<?php if (get_theme_mod('holy_cupcakes_address_line1') || get_theme_mod('holy_cupcakes_address_line2') || get_theme_mod('holy_cupcakes_address_city') || get_theme_mod('holy_cupcakes_address_province') || get_theme_mod('holy_cupcakes_address_postal_code')) { ?>
							<!-- Physical Address -->
							<?php if (get_theme_mod('holy_cupcakes_address_line1')) { ?>
								<p class="address">
									<?php echo get_theme_mod('holy_cupcakes_address_line1');
									echo esc_html__('', 'holy_cupcakes'); ?>,
								<?php } ?>
								<?php if (get_theme_mod('holy_cupcakes_address_line2')) { ?>
									<?php echo get_theme_mod('holy_cupcakes_address_line2');
									echo esc_html__('', 'holy_cupcakes'); ?>
								<?php } ?>
								<?php if (get_theme_mod('holy_cupcakes_address_city')) { ?>
									<?php echo get_theme_mod('holy_cupcakes_address_city');
									echo esc_html__('', 'holy_cupcakes'); ?>,
								<?php } ?>
								<?php if (get_theme_mod('holy_cupcakes_address_province')) { ?>
									<?php echo get_theme_mod('holy_cupcakes_address_province');
									echo esc_html__('', 'holy_cupcakes'); ?>
								<?php } ?>
								<?php if (get_theme_mod('holy_cupcakes_address_postal_code')) { ?>
									<?php echo get_theme_mod('holy_cupcakes_address_postal_code');
									echo esc_html__('', 'holy_cupcakes'); ?>
								</p>
							<?php } ?>
						<?php } ?>

						<?php if (get_theme_mod('holy_cupcakes_email_address') || get_theme_mod('holy_cupcakes_phone_number')) { ?>
							<!-- Email Address -->
							<?php if (get_theme_mod('holy_cupcakes_email_address')) { ?>
								<p class="email">
									<?php echo get_theme_mod('holy_cupcakes_email_address');
									echo esc_html__('', 'holy_cupcakes'); ?>
								</p>
							<?php } ?>
							<!-- Phone Number -->
							<?php if (get_theme_mod('holy_cupcakes_phone_number')) { ?>
								<p class="phone">
									<?php echo get_theme_mod('holy_cupcakes_phone_number');
									echo esc_html__('', 'holy_cupcakes'); ?>
								</p>
							<?php } ?>
						<?php } ?>
						<p>hollycupcakes.ca</p>
					</div>
				</div>
			</div>
		</div>
		<div id="copyright">
			<a href="<?php echo esc_url(__('https://wordpress.org/', 'holycupcakes')); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf(esc_html__('Proudly powered by %s', 'holycupcakes'), 'WordPress');
				?>
			</a>
			<span class="sep"> | </span>
			<?php
			/* translators: 1: Theme name, 2: Theme author. */
			printf(esc_html__('Theme: %1$s by %2$s.', 'holycupcakes'), 'Holy Cupcakes', '<a href="/">WP Doctors</a>');
			?>
		</div>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>