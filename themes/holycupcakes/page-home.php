<?php
/**
 * The template for displaying the home page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Holy_Cupcakes
 */
get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php

			/* Start the Loop */
			while ( have_posts() ) :
                the_post(); 
                
				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End of the loop.
			?>
			
			<?php
		
			$args = array( 
				'post_type'      => 'post', 
				'posts_per_page' => 3,
			);
			$test_query = new WP_Query( $args );


			if( $test_query->have_posts() ){
				?>
				<div class="recent-posts-wrapper">
					<div class="grid-container recent-post">
						<div class="grid-x">
						<?php
						while( $test_query->have_posts() ){
							$test_query->the_post();
							?>
							<div class="cell small-12 medium-6 large-4 homeExcerpt">
							<div id="post-<?php echo get_the_ID();?>" class="post-individual">
							
							<p class="thumbnail-img"><?php echo get_the_post_thumbnail(); ?></p>
							<h3><?php echo get_the_title(); ?></h3>
							<p class="excerpt"><?php echo get_the_excerpt(); ?></p>
							<a href="<?php echo get_permalink(); ?>">Read More</a>
							</div> 
							</div>
							<?php
						}
						?>
					</div>
					</div>
				</div>
				<?php
			}
			wp_reset_postdata();
			?>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
