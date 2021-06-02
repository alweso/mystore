<?php
/**
* Template Name: Blog grid 3 sidebar left
* Template Post Type: page
* @package WordPress
* @subpackage personal-blog
* @since personal-blog 1.0
*/ ?>

<?php get_header(); ?>
<?php get_template_part( 'template-parts/blog/archive/blog-header'); ?>
<main  id="site-content" class="container" >
  <div class="row">
    <div class="col-4">
    <?php dynamic_sidebar(get_post_meta(get_the_ID(), 'storezz_sidebar_left')[0]); ?>
  </div>
    <div class="col-8">
      <?php get_template_part( 'template-parts/blog/archive/blog-columns'); ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>
