<article id="post-<?php the_ID(); ?>" <?php post_class();?> >
	<?php if ( has_post_thumbnail() ) : ?>
		<?php get_template_part( 'template-parts/blog/archive/post-media'); ?>
	<?php endif; ?>
	<div>
	<?php get_template_part( 'template-parts/blog/archive/single-header'); ?>
		<div class="entry-content">
			<?php the_excerpt(); ?>
		</div>
	</div>
</article>
