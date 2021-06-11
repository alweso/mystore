<?php get_header();
$single_layout = get_theme_mod('storezz-single-layout'); ?>

<div class="container post-container">
	<div class="row">
		<?php
		if ( have_posts() ) {
			while ( have_posts() ) : the_post();
			if($single_layout === 'single_1' || $single_layout === 'single_2') :
				get_template_part( 'template-parts/blog/single/content', 'style-1');
				get_sidebar();
				elseif($single_layout === 'single_3' || $single_layout === 'single_4') :
					get_template_part( 'template-parts/blog/single/content', 'style-2');
					get_sidebar();
					elseif($single_layout === 'single_5') :
						get_template_part( 'template-parts/blog/single/content', 'style-3');
							endif;
						endwhile;
					}
					?>
					<?php posts_nav_link(); ?>
				</div> <!-- / .row -->
			</div> <!-- / .container -->
			<?php get_footer(); ?>
