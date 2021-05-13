<?php if ( has_post_thumbnail() ) : ?>
	<?php get_template_part( 'template-parts/archive-post/post-media'); ?>
<?php endif; ?>
<?php get_template_part( 'template-parts/archive-post/single-header'); ?>
<div class="entry-content">
	<?php the_content(); ?>
</div><!-- .entry-content -->
