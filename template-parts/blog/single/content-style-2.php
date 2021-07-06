<div class="col-12">
	<?php get_template_part( 'template-parts/blog/single/single-header-1'); ?>
</div>
<div class="col-8">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-content">
			<?php the_content(); ?>
		</div>
		<?php
		if ( comments_open() || get_comments_number() ) : ?>
			<div>
		<?php	comments_template(); ?>
		</div>
		<?php endif ?>
		</article>
	</div>
