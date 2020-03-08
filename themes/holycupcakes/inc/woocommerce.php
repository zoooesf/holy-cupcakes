<?php 
/**
 * Change number of products that are displayed per page (shop page)
 */

function holy_cupcakes_shop_per_page( $cols ) {
    // $cols contains the current number of products per page based on the value stored on Options -> Reading
    // Return the number of products you wanna show per page.
    $cols = 9;
    return $cols;
}

add_filter( 'loop_shop_per_page', 'holy_cupcakes_shop_per_page', 20 );

/**
 * Change number or products per row to 3
 */

if (!function_exists('loop_columns')) {
    function loop_columns() {
        return 3; // 3 products per row
    }
}
add_filter('loop_shop_columns', 'loop_columns', 999);

// disable default woocommerce style

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

?>
