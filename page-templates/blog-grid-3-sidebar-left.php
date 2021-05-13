<?php
/**
* Template Name: Blog grid 3 sidebar left
* Template Post Type: page
* @package WordPress
* @subpackage personal-blog
* @since personal-blog 1.0
*/ ?>

<?php get_header(); ?>
<div class="container">
  <div class="row">
    <?php get_template_part( 'template-parts/blog-header'); ?>
    <?php get_sidebar(); ?>
    <div class="col-9">
      <?php get_template_part( 'template-parts/blog-columns'); ?>
    </div>
  </div>
<?php get_footer(); ?>
