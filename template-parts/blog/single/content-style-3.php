<div class="col-8 offset-sm-2">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php get_template_part( 'template-parts/blog/single/single-header-1'); ?>
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
	</div>
