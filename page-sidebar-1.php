<?php
/**
* Template Name: Page sidebar 1
*
* @package WordPress
* @subpackage Storezz
* @since Storezz 1.0.0
*/


get_header();
?>

<main id="main-content" class="container storezz-post-container">
	<div class="row">
			<div class="col-8">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/page/content', 'page' );
				endwhile;
			endif;
		get_template_part( 'template-parts/post-navigation' ); ?>
	</div>
  <aside class="col-4">
  	<ul id="sidebar">
  		<?php dynamic_sidebar( 'page_sidebar_1' ); ?>
  	</ul>
  </aside>
</div>
</main>
<?php get_footer(); ?>
