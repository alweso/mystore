<?php
/**
* Template Name: Page with sidebar
*
* @package WordPress
* @subpackage Storezz
* @since Storezz 1.0.0
*/


get_header();
?>

<main id="main-content" class="container storezz-post-container">
	<div class="row">
			<div class="col-9">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/page/content', 'page' );
				endwhile;
			endif;
		get_template_part( 'template-parts/post-navigation' ); ?>
	</div>
  <aside class="col-3">
  	<ul id="sidebar">
  		<?php dynamic_sidebar( 'page_sidebar' ); ?>
  	</ul>
  </aside>
</div>
</main>
<?php get_footer(); ?>
