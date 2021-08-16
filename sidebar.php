<?php
/**
 * Storezz sidebar
 * @since 1.0.0
 **/

 if ( (is_home() || is_archive()) && !is_shop() && !is_product_category() && !is_product_tag() ) {
   $sidebar_id = 'blog_sidebar';
 } elseif ( is_single() && !is_product() ) {
	 $sidebar_id = 'single_sidebar';
 } elseif ( is_page() ) {
	 $sidebar_id = 'page_sidebar';
 } elseif ( is_shop() || is_product_category() || is_product_tag() ) {
	 $sidebar_id = 'shop_sidebar';
 }


if ( !empty($sidebar_id )) : ?>
<aside class="col-3">
	<ul id="sidebar">
		<?php dynamic_sidebar( $sidebar_id ); ?>
	</ul>
</aside>
<?php endif; ?>
