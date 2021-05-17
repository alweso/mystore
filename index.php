<?php
/**
* Template Name: Index Page
* Template Post Type: page
* @package WordPress
* @subpackage personal-blog
* @since personal-blog 1.0
*/

get_header(); ?>
<?php get_template_part( 'template-parts/blog/archive/blog-header'); ?>
<main  id="site-content" class="container" >
  <div class="row">
  <?php  if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		//
		// Post Content here
		//
	} // end while
} // end if ?>
  </div>
</main>
<?php get_footer(); ?>
