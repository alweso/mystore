<?php

/**
* Storezz main template file
* @since 1.0.0
**/

get_header();
$blog_layout = get_theme_mod( 'storezz-choose-blog-layout' );

if (is_search()) {
 get_template_part( 'template-parts/blog/archive/search-header' );
} else {
 get_template_part( 'template-parts/blog/archive/blog-header' );
}
?>
<main id="site-content" class="container">
  <div class="row">
    <div class="col-9">
      <div class="<?php echo esc_attr( $blog_layout ); ?>">
      <?php if ( have_posts() ) {
        while ( have_posts() ) {
          the_post();
          ?>
          <div>
            <?php get_template_part( 'template-parts/blog/archive/content'); ?>
          </div>
          <?php
        } ?>
        <?php echo get_theme_mod( 'storezz-blog-layout' ); ?>
        <div class="col-12">
          <?php echo the_posts_pagination(); ?>
        </div>
        <?php wp_reset_postdata();
      } else { ?>
        <div class="col-12">
        <?php get_template_part( 'template-parts/blog/archive/content-none' ); ?>
      </div>
    <?php } ?>
    </div>
    </div>
      <?php get_sidebar(); ?>
  </div>
</main>
<?php get_footer(); ?>
