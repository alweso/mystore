<article class="post-wrap post-wrap--link">
	<?php if ( has_post_thumbnail() ) : ?>
		<?php get_template_part( 'template-parts/blog/single/post-media'); ?>
	<?php endif; ?>
	<?php get_template_part( 'template-parts/blog/single/single-header'); ?>
	<?php
	if ( is_single()) { ?>
		<div class="entry-content">
			<?php the_content(); ?>
		</div>
	<?php } ?>
</article>
