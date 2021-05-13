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
<div class="container-fluid">
	<div class="row">
		<?php
		if ( have_posts() ) {
			while ( have_posts() ) : the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('col-12'); ?>>
				<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
			</article><!-- #post-<?php the_ID(); ?> -->
			<?php
		endwhile;
	}
	?>
</div><!-- /.blog-main -->

</div> <!-- / .row -->
<?php get_footer(); ?>
