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
			<div id="footer-sidebar" class="secondary">
				<div id="footer-sidebar1">
					<?php
						if(is_active_sidebar('footer-sidebar-1')){
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
				<div id="footer-sidebar2">
					<?php
						if(is_active_sidebar('footer-sidebar-2')){
						dynamic_sidebar('footer-sidebar-2');
						}
					?>
					<div>
						<ul class="menu">
							<li><input type="text" placeholder="Search"></li>
						</ul>
					</div>
				</div>
				<div id="footer-sidebar3">
					<?php
						if(is_active_sidebar('footer-sidebar-3')){
						dynamic_sidebar('footer-sidebar-3');
						}
					?>
				</div>
			</div>

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
		</div> <!-- .grid-container -->
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>