<article id="post-<?php the_ID(); ?>" <?php post_class();?> >
	<?php if ( has_post_thumbnail() ) : ?>
		<?php get_template_part( 'template-parts/blog/archive/post-media'); ?>
	<?php endif; ?>
	<div>
	<?php get_template_part( 'template-parts/blog/archive/single-header'); ?>
		<div class="entry-content">
			<?php the_excerpt(); ?>
		</div>
		<a class="storezz-post-readmore" href="<?php echo esc_url(get_permalink()); ?>">
			<?php esc_html_e('Read More', 'storezz'); ?>
		</a>
	</div>
</article>
