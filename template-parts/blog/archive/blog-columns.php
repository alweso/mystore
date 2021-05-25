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
  $args = array(
    'post_type' => 'post',
    'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
  );
  $query = new WP_Query($args);
  if($query->have_posts()) {
    while($query->have_posts() ) {
      $query->the_post();
      ?>
      <div class="<?php echo $columns ?>">
        <?php get_template_part( 'template-parts/blog/archive/content', get_post_format() ); ?>
      </div>
      <?php
    } ?>
    <div class="col-12">
    <?php $big = 999999999;
      echo paginate_links( array(
        'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $query->max_num_pages
      ) ); ?>
    </div>
    <?php wp_reset_postdata();
  } else { ?>
    <div class="col-12">
    <?php get_template_part( 'template-parts/blog/archive/content-none'); ?>
  </div>
<?php } ?>
</div>
