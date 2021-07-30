<?php $show_tags = get_theme_mod( 'storezz-show-tags-single', 'yes' ); ?>

<div class="col-12 col-lg-10 offset-lg-1">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php get_template_part( 'template-parts/blog/single/single-header-1'); ?>
		<div class="entry-content">
			<?php the_content(__( 'Continue reading') ); ?>
		</div>
		<?php
		if ( $show_tags === 'yes' ) : ?>
		<div class="storezz-entry-header_tags clearfix">
			<?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?>
		</div>
	<?php endif;
		get_template_part( 'template-parts/linked-pages' );
		get_template_part( 'template-parts/post-navigation' );
		if ( comments_open() || get_comments_number() ) : ?>
		<div>
			<?php	comments_template(); ?>
		</div>
	<?php endif ?>
</article>
</div>
