<?php
if (is_page_template( 'page-templates/blog-grid-2.php' ) || is_page_template( 'page-templates/blog-grid-2-sidebar-left.php' ) || is_page_template( 'page-templates/blog-grid-2-sidebar-right.php' )) {
  $columns = 'col-6';
} elseif (is_page_template( 'page-templates/blog-grid-3.php' ) || is_page_template( 'page-templates/blog-grid-3-sidebar-left.php' ) || is_page_template( 'page-templates/blog-grid-3-sidebar-right.php' )) {
  $columns = 'col-4';
} elseif (is_page_template( 'page-templates/blog-grid-4.php' )) {
  $columns = 'col-3';
} else {
  $columns = 'col-12';
}

?>
<div class="row">
  <?php
  // $args = array(
  //   'post_type' => 'post',
  //   'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
  // );
  // $query = new WP_Query($args);
  if(have_posts()) {
    while(have_posts() ) {
      the_post();
      ?>
      <div class="<?php echo $columns ?>">
        <?php get_template_part( 'template-parts/blog/archive/content', get_post_format() ); ?>
      </div>
      <?php
    } ?>
    <?php echo 'dsdsdsdsd' . get_post_meta(get_option('page_for_posts'), 'storezz_blog_layout')[0];;?>
    <div class="col-12">
      <?php echo the_posts_pagination(); ?>
    </div>
    <?php wp_reset_postdata();
  } else { ?>
    <div class="col-12">
    <?php get_template_part( 'template-parts/blog/archive/content-none'); ?>
  </div>
<?php } ?>
</div>
