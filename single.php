<?php get_header();
$single_layout = get_theme_mod('storezz-single-layout');
echo $single_layout;
?>

<div class="container post-container">
	<div class="row">
		<?php echo get_page_template_slug(); ?>
		<?php
		if ( have_posts() ) {
			while ( have_posts() ) : the_post();
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php
					switch ($single_layout) {
					    case 'single_1': ?>
					        echo "i equals 0";
					        <?php break;
					    case 1:
					        echo "i equals 1";
					        break;
					    case 2:
					        echo "i equals 2";
					        break;
					}
					?>
					<div class="col-sm-8 offset-sm-2 blog-main">
						<?php get_template_part( 'template-parts/blog/single/content', get_post_format() ); ?>
					</div>
					</article><!-- #post-<?php the_ID(); ?> -->
					<?php
				endwhile;
			}
			?>
			<?php posts_nav_link(); ?>
		<?php get_sidebar(); ?>
	</div> <!-- / .row -->
</div> <!-- / .container -->
<?php get_footer(); ?>
