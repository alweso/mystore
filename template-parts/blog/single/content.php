<article class="post-wrap post-wrap--standard">
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
