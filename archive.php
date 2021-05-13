<?php get_header(); ?>
<div class="container">
  <div class="row">
    <?php get_template_part( 'template-parts/blog-header'); ?>
    <div class="col-12">
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
              <?php get_template_part( 'template-parts/content', get_post_format() ); ?>
            </div>
            <?php
          }
        }?>
      </div>
    </div>
  </div>
<?php get_footer(); ?>
