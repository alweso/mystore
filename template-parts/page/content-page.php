<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="storezz-entry-content entry-content">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php the_content(); ?>
	</div>
	<?php
	if ( comments_open() || get_comments_number() ) : ?>
	<div>
		<?php	comments_template(); ?>
	</div>
<?php endif ?>
</article>
