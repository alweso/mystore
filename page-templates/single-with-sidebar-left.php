<?php
/**
* Template Name: Single with sidebar left
* Template Post Type: post
* @package WordPress
* @subpackage personal-blog
* @since personal-blog 1.0
*/
?>

<?php get_header(); ?>
<?php storezz_breadcrumbs(); ?>
<main id="site-content" class="container" >
	<div class="row">
		<div class="col-4">
		<?php dynamic_sidebar(get_post_meta(get_the_ID(), 'storezz_sidebar_left')[0]); ?>
	</div>
		<?php
		if ( have_posts()) {
			while ( have_posts() ) : the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('col-8'); ?>>
				<?php get_template_part( 'template-parts/blog/single/content', get_post_type() ); ?>
			</article><!-- #post-<?php the_ID(); ?> -->
			<?php
		endwhile;
	} else { ?>
		<div class="col-8">
		<?php get_template_part( 'template-parts/single/archive/content-none'); ?>
	</div>
	<?php }
	?>
</div>
</main>
<?php get_footer(); ?>
