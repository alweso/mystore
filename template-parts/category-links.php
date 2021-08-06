<?php $categoryArgs = array(
  'show_option_all' => 'All',
  'exclude' => '1',
  'hierarchical' => false,
  'depth' => 1,
  'title_li' => '',
); ?>

<ul class="blog-category-links">
  <?php wp_list_categories( $categoryArgs ); ?>
</ul>
