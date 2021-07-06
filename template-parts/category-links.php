<?php $categoryArgs = array(
  'show_option_all' => 'All',
  'exclude' => '1',
  'title_li' => __( '' ),
); ?>
<ul class="storezz-category-links">
  <?php esc_html__( wp_list_categories( $categoryArgs ) ); ?>
</ul>
