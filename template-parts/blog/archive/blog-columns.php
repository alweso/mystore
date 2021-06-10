<div class="row">
  <div class="col-12">
  <?php
  $blog_layout = get_theme_mod( 'storezz-blog-layout' );?>
  <div class="<?php echo $blog_layout; ?>">
  <?php if(have_posts()) {
    while(have_posts() ) {
      the_post();
      ?>
      <div class="">
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
    <?php get_template_part( 'template-parts/blog/archive/content-none'); ?>
  </div>
<?php } ?>
</div>
</div>
</div>
