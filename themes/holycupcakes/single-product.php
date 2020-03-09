<?php
/**
 * The Template for displaying all single products
 */

get_header( 'shop' ); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="grid-container">
            <div class="grid-x">
                <div class="large-12 small-12">
        
                <?php
                    /**
                     * woocommerce_before_main_content hook.
                     */
                    do_action( 'woocommerce_before_main_content' );
                ?>
                </div>
                <div class="large-12 small-12 grid-x">
                    
                    <?php while ( have_posts() ) : the_post(); ?>
                    <div class="large-6 medium-5 small-12">
                        <?php do_action( 'woocommerce_before_single_product_summary' );?>
                    </div>

                    <div class="large-6 medium-7 small-12 product_right_summary">
                    <h3>
                        <?php the_title(); ?>
                    </h3>
                        <?php do_action( 'woocommerce_single_product_summary' ); ?>
                    </div>
                    
                    <?php endwhile; // end of the loop. ?>
                </div>

                <div class="large-12 small-12">
                    <?php
                        /**
                         * woocommerce related products
                         */
                        
                        do_action( 'woocommerce_after_single_product_summary' );
                    ?>
                </div>
                
                <?php
                    /**
                     * woocommerce_sidebar hook.
                     *
                     * @hooked woocommerce_get_sidebar - 10
                     */
                    do_action( 'woocommerce_sidebar' );
                ?>
			</div><!-- .grid-x -->
		</div><!-- .grid-container -->
	</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer( 'shop' );