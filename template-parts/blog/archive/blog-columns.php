<?php
if (is_page_template( 'page-templates/blog-grid-2.php' ) || is_page_template( 'page-templates/blog-grid-2-sidebar-left.php' ) || is_page_template( 'page-templates/blog-grid-2-sidebar-right.php' )) {
  $columns = 'col-6';
} elseif (is_page_template( 'page-templates/blog-grid-3.php' ) || is_page_template( 'page-templates/blog-grid-3-sidebar-left.php' ) || is_page_template( 'page-templates/blog-grid-3-sidebar-right.php' )) {
  $columns = 'col-4';
} elseif (is_page_template( 'page-templates/blog-grid-4.php' )) {
  $columns = 'col-3';
} elseif (is_page_template( 'page-templates/blog-grid-1-sidebar-left.php' ) || is_page_template( 'page-templates/blog-grid-1-sidebar-right.php' )) {
  $columns = 'col-12';
}

?>
<div class="row">
  <?php
  $args = array(
    'post_type' => 'post',
  );
  $post_query = new WP_Query($args);
  if($post_query->have_posts()) {
    while($post_query->have_posts() ) {
      $post_query->the_post();
      ?>
      <div class=<?php echo $columns ?>>
        <?php get_template_part( 'template-parts/blog/archive/content', get_post_format() ); ?>
      </div>
      <?php
    }
  } else { ?>
    <div class="col-12">
    <?php get_template_part( 'template-parts/blog/archive/content-none'); ?>
  </div>
  <?php } ?>
</div>
