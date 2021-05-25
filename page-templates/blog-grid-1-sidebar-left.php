<?php
/**
* Template Name: Blog grid 1 sidebar left
* Template Post Type: page
* @package WordPress
* @subpackage personal-blog
* @since personal-blog 1.0
*/ ?>
<?php get_header(); ?>
<?php get_template_part( 'template-parts/blog/archive/blog-header'); ?>
<main  id="site-content" class="container" >
  <div class="row">
    <?php get_sidebar(); ?>
    <div class="col-8">
      <?php get_template_part( 'template-parts/blog/archive/blog-columns'); ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>
