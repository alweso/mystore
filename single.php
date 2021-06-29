<?php

/**
* Storezz single post template
* @since 1.0.0
**/

get_header();
$single_layout = get_theme_mod( 'storezz-choose-single-layout' );
?>
<main id="main-content" class="container storezz-post-container">
	<div class="row">
		<?php
		storezz_breadcrumbs();
		if ( have_posts() ) {
			while ( have_posts() ) : the_post();
			if ( $single_layout === 'single_1' || $single_layout === 'single_2' ) {
				get_template_part( 'template-parts/blog/single/content', 'style-1' );
				get_sidebar();
			} elseif ( $single_layout === 'single_3' || $single_layout === 'single_4' ) {
				get_template_part( 'template-parts/blog/single/content', 'style-2' );
				get_sidebar();
			} else {
				get_template_part( 'template-parts/blog/single/content', 'style-3' );
			}
		endwhile;
	}
	get_template_part( 'template-parts/post-navigation' );
	 ?>
</div>
</main>
<?php get_footer(); ?>
