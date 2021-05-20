<?php get_header(); ?>
<div class="container">
	<header class="col-12">
		<?php get_template_part('template-parts/breadcrumbs'); ?>
		<?php echo wp_list_categories(); ?>
	</header>
</div>
<main  id="site-content" class="container" >
	<div class="row">
		<?php $sidebar = get_post_meta(get_the_ID(), 'storezz_sidebar_layout')[0]; ?>
		<?php if ($sidebar === "left-sidebar") {?>
			<aside class="col-12 col-md-4 col-lg-4">
				<?php get_sidebar('blog-left'); ?>
			</aside>
		<?php } ?>
		<?php
		if ( have_posts()) :
			while ( have_posts() ) : the_post();
			if ($sidebar === "left-sidebar" || $sidebar === "right-sidebar") : ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class('col-8'); ?>>
			<?php else : ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class('col-12'); ?>>
			<?php	endif ?>
				<?php get_template_part( 'template-parts/blog/single/content', get_post_type() ); ?>
			</article><!-- #post-<?php the_ID(); ?> -->
			<?php
		endwhile;
	 else : ?>
		<div class="col-9">
		<?php get_template_part( 'template-parts/single/archive/content-none'); ?>
	</div>
<?php endif ?>
<?php if ($sidebar === "right-sidebar") {?>
	<aside class="col-12 col-md-4 col-lg-4">
		<?php get_sidebar('blog-right'); ?>
	</aside>
<?php } ?>
</div>
</main>
<?php get_footer(); ?>
