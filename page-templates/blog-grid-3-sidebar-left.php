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
    <?php get_template_part( 'template-parts/archive-post/article-header'); ?>
    <div class="col-3">
      <?php get_sidebar(); ?>
    </div>
    <div class="col-9">
      <div class="row">
        <?php
        $args = array(
          'post_type' => 'post',
        );
        $post_query = new WP_Query($args);
        if($post_query->have_posts() ) {
          while($post_query->have_posts() ) {
            $post_query->the_post();
            ?>
            <div class="col-4">
              <?php get_template_part( 'template-parts/archive-post/content', get_post_format() ); ?>
            </div>
            <?php
          }
        }?>
      </div>
    </div>
  </div>
<?php get_footer(); ?>
