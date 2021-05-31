<?php
/**
* Template Name: Full width top image
* Template Post Type: post
* @package WordPress
* @subpackage personal-blog
* @since personal-blog 1.0
*/
?>

<?php get_header(); ?>
<?php storezz_breadcrumbs(); ?>
<main  id="site-content" class="container-fluid" >
	<div class="row">
		<?php get_sidebar(); ?>
		<?php
		if ( have_posts() ) {
			while ( have_posts() ) : the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('col-4'); ?>>
				<?php get_template_part( 'template-parts/blog/single/content', get_post_type() ); ?>
			</article><!-- #post-<?php the_ID(); ?> -->
			<?php
		endwhile;
	} else { ?>
		<div class="col-4">
		<?php get_template_part( 'template-parts/single/archive/content-none'); ?>
	</div>
	<?php }
	?>
	<?php get_sidebar(); ?>
</div>
</main>
<?php get_footer(); ?>
