<?php
/**
* The template for displaying archive pages
*
* @package Meta Store
*/
get_header();
?>

<div id="storezz-primary" class="container">
  <div class="row">
    <div class="col-9">
      <div class="row">
        <?php if (have_posts()) : ?>
          <?php
          /* Start the Loop */
          while (have_posts()) :
            the_post();

            /*
            * Include the Post-Type-specific template for the content.
            * If you want to override this in a child theme, then include a file
            * called content-___.php (where ___ is the Post Type name) and that will be used instead.
            */ ?>
            <div class="col-4">
              <?php  get_template_part('template-parts/content', get_post_type()); ?>
            </div>
          <?php endwhile;
          the_posts_navigation();

          else :

            get_template_part('template-parts/content', 'none');

          endif; ?>
        </div>
      </div>
      <?php get_sidebar(); ?>
    </div>
    <h1><?php echo get_post_meta(get_option( 'page_for_posts' ), 'storezz_sidebar_layout')[0]; ?></h1>
    <?php echo '<pre>'; var_dump(get_post_meta(get_option( 'page_for_posts' ))); echo '</pre>'; ?>
  </div><!-- #primary -->

  <?php
  get_footer();
