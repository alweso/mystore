<div class="post-wrap post-wrap--image">
	<?php if ( has_post_thumbnail() ) : ?>
		<?php get_template_part( 'template-parts/post-media'); ?>
	<?php endif; ?>
	<?php get_template_part( 'template-parts/single-header'); ?>
	<?php
	if ( is_single() ) { ?>
		<div class="entry-content">
			<?php the_content(); ?>
		</div>
	<?php } ?>
</div>
