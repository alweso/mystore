<?php
/**
* Template Name: Single with sidebar right
* Template Post Type: post
* @package WordPress
* @subpackage personal-blog
* @since personal-blog 1.0
*/
?>

<?php get_header(); ?>
<main  id="site-content" class="container" >
	<div class="row">
		<?php
		if ( have_posts()) {
			while ( have_posts() ) : the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('col-9'); ?>>
				<?php get_template_part( 'template-parts/blog/single/content', get_post_type() ); ?>
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
