<article class="post-wrap post-wrap--standard">
	<?php if ( has_post_thumbnail() ) : ?>
		<?php get_template_part( 'template-parts/post-media'); ?>
	<?php endif; ?>
	<?php get_template_part( 'template-parts/single-header'); ?>
	<div class="entry-content">
		<?php the_content(); ?>
	</div>
	<?php
	if (comments_open()){ ?>
		<div>
	<?php	comments_template(); ?>
	</div>
	<?php } ?>
</article>
