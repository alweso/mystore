<?php

/**
* Storezz main template file
* @since 1.0.0
**/

get_header();
$sidebar_id = get_theme_mod( 'storezz-blog-choose-sidebar' );
$blog_layout = get_theme_mod( 'storezz-choose-blog-layout' );

if (is_archive()) {
 get_template_part( 'template-parts/blog/archive/blog-header' );
}

if (is_search()) {
 get_template_part( 'template-parts/blog/archive/search-header' );
}
?>
<main id="site-content" class="container">
  <div class="row">
    <div class="col-8">
      <div class="<?php echo esc_attr($blog_layout); ?>">
      <?php if ( have_posts() ) {
        while ( have_posts() ) {
          the_post();
          ?>
          <div>
            <?php get_template_part( 'template-parts/blog/archive/content', get_post_format() ); ?>
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
      <aside class="col-4">
        <ul id="sidebar">
          <?php dynamic_sidebar( $sidebar_id ); ?>
        </ul>
      </aside>
  </div>
</main>
<?php get_footer(); ?>
