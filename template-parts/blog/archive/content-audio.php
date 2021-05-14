<article class="post-wrap post-wrap--audio">
	<?php if ( has_post_thumbnail() ) : ?>
		<?php get_template_part( 'template-parts/blog/archive/post-media'); ?>
	<?php endif; ?>
	<?php get_template_part( 'template-parts/blog/archive/single-header'); ?>
	<?php
	if ( is_single() ) { ?>
		<div class="entry-content">
			<?php the_content(); ?>
		</div>
	<?php } ?>
</article>
