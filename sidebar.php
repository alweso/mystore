<?php
/**
 * Storezz sidebar
 * @since 1.0.0
 **/

 if (!is_front_page() && is_home()) {
   $sidebar_id = get_theme_mod('storezz-blog-choose-sidebar');
 } elseif (is_single()) {
	 $sidebar_id = get_theme_mod('storezz-single-choose-sidebar');
 } else {
	  $sidebar_id = 'sidebar_1';
 } ?>

<aside class="col-4">
	<ul id="sidebar">
		<?php dynamic_sidebar($sidebar_id); ?>
	</ul>
</aside>
