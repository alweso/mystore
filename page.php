<?php

/**
* Storezz page template
* @since 1.0.0
**/

get_header();
$sidebar_id = get_theme_mod( 'storezz-page-choose-sidebar' );
$show_sidebar = get_theme_mod( 'storezz-page-show-sidebar' );
$page_layout = get_theme_mod( 'storezz-choose-page-layout' );
?>
<main id="main-content" class="container storezz-post-container">
	<div class="row">
		<?php
		if ( have_posts() ) {
			while ( have_posts() ) : the_post();
			if ( $page_layout === 'page_1' ) {
				get_template_part( 'template-parts/page/content', 'style-1' );
			} elseif ( $page_layout === 'page_2' ) {
				get_template_part( 'template-parts/page/content', 'style-2' );
        get_sidebar();
			}
		endwhile;
	}
	get_template_part( 'template-parts/post-navigation' );
  ?>
</div>
</main>
<?php get_footer(); ?>
