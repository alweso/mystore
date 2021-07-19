<?php $categoryArgs = array(
  'show_option_all' => 'All',
  'exclude' => '1',
); ?>

<ul class="storezz-category-links">
  <?php wp_list_categories( $categoryArgs ); ?>
</ul>
