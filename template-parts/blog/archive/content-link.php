<article class="post-wrap post-wrap--link">
	<?php if ( has_post_thumbnail() ) : ?>
		<?php get_template_part( 'template-parts/post-media'); ?>
	<?php endif; ?>
	<?php get_template_part( 'template-parts/blog/archive/single-header'); ?>
	<?php
	if (is_page_template( 'page-templates/blog-grid-1-sidebar-left.php' ) || is_page_template( 'page-templates/blog-grid-1-sidebar-right.php' )) { ?>
		<div class="entry-content">
			<?php the_excerpt(); ?>
		</div>
	<?php } ?>
</article>
