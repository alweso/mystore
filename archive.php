<?php
get_header();
$sidebar_id = get_theme_mod('storezz-blog-choose-sidebar');
$sidebar_left_right = get_theme_mod('storezz-blog-sidebar-left-right');

get_template_part('template-parts/blog/archive/blog-header'); ?>
<main id="site-content" class="container"s>
  <div class="row">
    <?php if ($sidebar_left_right === 'sidebar_left') { ?>
      <aside class="col-4">
        <ul id="sidebar">
          <?php dynamic_sidebar($sidebar_id); ?>
        </ul>
      </aside>
    <?php } ?>
    <div class="col-8">
      <?php get_template_part('template-parts/blog/archive/blog-columns'); ?>
    </div>
    <?php if ($sidebar_left_right === 'sidebar_right') { ?>
      <aside class="col-4">
        <ul id="sidebar">
          <?php dynamic_sidebar($sidebar_id); ?>
        </ul>
      </aside>
    <?php } ?>
  </div>
</main>
<?php get_footer(); ?>
