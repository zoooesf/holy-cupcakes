<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Holy_Cupcakes
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="grid-container">
			<div class="grid-x">
				<!-- sidebar box -->
				<div class="large-4 grid-margin-x show-for-large sidebar-box">
					<?php
					get_sidebar();
					?>
				</div>

				<?php
				if (have_posts()) :
				?>
					<!-- .page-header -->
					<div class="large-8 medium-12 grid-x align-justify blog-posts-box">
						<header class="large-12 medium-12 small-12">
							<h1 class="page-title screen-reader-text">Results for: <?php echo get_search_query(); ?></h1>
							<hr class="blogHr">
						</header>

						<?php
						/* Start the Loop */
						while (have_posts()) :
							the_post();
							if (get_post_type() != 'page' && get_post_type() != 'attachment') {

						?>
								<div class="card large-5 medium-5 small-10 blogCard">
									<?php
									if (has_post_thumbnail()) {
									?>
										<div class="thumbnail-img">
											<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_post_thumbnail_caption(); ?>" />
										</div>
									<?php
									} ?>
									<div class="card-section blogExcerpt">
										<h3><?php the_title(); ?> </h3>
										<p>
											<?php
											if (get_post_type() == 'post') {
												the_excerpt();
											}
											$link_text = 'continue reading';
											if (get_post_type() == 'product') {
												$price = get_post_meta(get_the_ID(), '_price', true);
												echo wc_price($price);
												$link_text = 'view product';
											}
											?>
										</p>
										<a class="blogBtn" href="<?php echo get_post_permalink(); ?>"><?php echo $link_text; ?></a>
									</div>
								</div>
						<?php
							}
							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
						// get_template_part( 'template-parts/content', 'search' );

						endwhile;
						?>
						<div class="large-8 medium-12 small-12 align-center">
							<?php the_posts_navigation(); ?>
						</div>
					<?php
				else :

					get_template_part('template-parts/content', 'none');

				endif;
					?>
					</div><!-- cell large-8 -->
			</div><!-- .grid-x -->
		</div><!-- .grid-container -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
