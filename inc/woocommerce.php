<?php

/**
 * Opening div for our content wrapper
 */
add_action('woocommerce_before_main_content', 'iconic_open_div', 5);

function iconic_open_div() {
    echo '<div class="iconic-div">';
}

/**
 * Closing div for our content wrapper
 */
add_action('woocommerce_after_main_content', 'iconic_close_div', 50);

function iconic_close_div() {
    echo '</div>';
}

add_action( 'woocommerce_sidebar', 'boostrapit' );

function boostrapit() {
    echo '<div class="bootstrapit">';
}



/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<a class="storezz-menu-cart" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> – <?php echo $woocommerce->cart->get_cart_total(); ?></a>
	<?php
	$fragments['a.storezz-menu-cart'] = ob_get_clean();
	return $fragments;
}

// add_action( 'woocommerce_before_main_content', 'shopppp' );
// function shopppp() {
//     echo '<div class="shopppp">';
// }



add_filter( 'woocommerce_reviews_title', 'misha_reviews_heading', 10, 3 );
function misha_reviews_heading( $heading, $count, $product ){

	return '';

}



 ?>
