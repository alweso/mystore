<?php $columns = get_post_meta(get_option('page_for_posts'), 'storezz_column_layout')[0]; ?>

<article class="post-wrap post-wrap--standard">
	<?php if ( has_post_thumbnail() ) : ?>
		<?php get_template_part( 'template-parts/post-media'); ?>
	<?php endif; ?>
	<?php get_template_part( 'template-parts/post-header'); ?>
	<?php
	if ($columns === 'col-12') { ?>
		<div class="entry-content">
			<?php the_excerpt(); ?>
		</div>
	<?php } ?>
</article>
