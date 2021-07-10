<?php
/**
 * Storezz sidebar
 * @since 1.0.0
 **/

 if ( !is_front_page() && is_home() ) {
   $sidebar_id = 'blog_sidebar';
 } elseif ( is_single() && !is_product() ) {
	 $sidebar_id = 'single_sidebar';
 } elseif ( is_page() ) {
	 $sidebar_id = 'page_sidebar';
 } elseif ( is_shop() ) {
	 $sidebar_id = 'shop_sidebar';
 } elseif ( is_product() ) {
	 $sidebar_id = 'product_sidebar';
 } else {
	 $sidebar_id = 'blog_sidebar';
 } ?>

<aside class="col-3">
	<ul id="sidebar">
		<?php dynamic_sidebar( $sidebar_id ); ?>
	</ul>
</aside>
