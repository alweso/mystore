<?php
/**
* Template Name: Full screen top image
* Template Post Type: post
* @package WordPress
* @subpackage personal-blog
* @since personal-blog 1.0
*/
?>
<?php get_header(); ?>
<?php storezz_breadcrumbs(); ?>
<main  id="site-content">
		<?php
		if ( have_posts() ) {
			while ( have_posts() ) : the_post();
			?>
			<article id="post-<?php the_ID(); ?>">
			<div class="container-fluid">
				<div class="row">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php get_template_part( 'template-parts/blog/single/post-media'); ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-12">
					<?php get_template_part( 'template-parts/blog/single/single-header'); ?>
						<div class="entry-content">
							<?php the_content(); ?>
						</div>
						<?php
						if (comments_open()){ ?>
							<div>
						<?php	comments_template(); ?>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</article>
			<?php
		endwhile;
	} else { ?>
		<div class="container">
			<div class="row">
		<div class="col-12">
		<?php get_template_part( 'template-parts/single/archive/content-none'); ?>
		</div>
	</div>
</div>
	<?php } ?>
</main>
<?php get_footer(); ?>
