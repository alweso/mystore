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
<div class="container">
	<div class="row">
			<?php get_sidebar(); ?>
		<?php
		if ( have_posts()) {
			while ( have_posts() ) : the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('col-9'); ?>>
				<?php get_template_part( 'template-parts/archive-post/content', get_post_type() ); ?>
			</article><!-- #post-<?php the_ID(); ?> -->
			<?php
		endwhile;
	} else { ?>
		<div class="col-9">
		<?php get_template_part( 'template-parts/archive-post/content-none'); ?>
	</div>
	<?php }
	?>
</div><!-- /.blog-main -->

</div> <!-- / .row -->
<?php get_footer(); ?>
