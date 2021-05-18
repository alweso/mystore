
<?php get_header(); ?>
<?php storezz_breadcrumbs(); ?>
<main  id="site-content" class="container" >
	<div class="row">
		<?php
		if ( have_posts()) {
			while ( have_posts() ) : the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('col-9'); ?>>
				<?php get_template_part( 'template-parts/blog/single/content', get_post_type() ); ?>
				<!-- <h1>blablabla<?php echo get_post_meta(get_the_ID(), 'storezz_sidebar_layout')[0]; ?></h1> -->
		    <!-- <?php echo '<pre>'; var_dump(get_post_meta(get_the_ID())); echo '</pre>'; ?> -->
			</article><!-- #post-<?php the_ID(); ?> -->
			<?php
		endwhile;

	} else { ?>
		<div class="col-9">
		<?php get_template_part( 'template-parts/single/archive/content-none'); ?>
	</div>
	<?php }
	get_sidebar();
	?>
</div>
</main>
<?php get_footer(); ?>
