<?php
/**
* Template Name: Blog grid 2 sidebar right
* Template Post Type: page
* @package WordPress
* @subpackage personal-blog
* @since personal-blog 1.0
*/ ?>
<?php get_header(); ?>
<main  id="site-content" class="container" >
  <div class="row">
    <?php get_template_part( 'template-parts/blog/archive/blog-header'); ?>
    <div class="col-9">
      <?php get_template_part( 'template-parts/blog/archive/blog-columns'); ?>
    </div>
    <?php get_sidebar(); ?>
  </div>
</main>
<?php get_footer(); ?>
