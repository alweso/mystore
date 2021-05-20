<?php
/**
* The template for displaying archive pages
*
* @package Meta Store
*/
get_header();

$sidebar = get_post_meta(get_option('page_for_posts'), 'storezz_sidebar_layout')[0];
$columns = get_post_meta(get_option('page_for_posts'), 'storezz_column_layout')[0];
?>
<div id="storezz-primary" class="container">
  <div class="row">
    <div class="col-12">
      <?php get_template_part('template-parts/breadcrumbs'); ?>
      <?php get_template_part('template-parts/category-links'); ?>
    </div>
    <?php if ($sidebar === "left-sidebar") : ?>
      <aside class="col-4">
    <?php get_sidebar('blog-left'); ?>
    </aside>
  <?php endif ?>
  <?php if ($sidebar === "left-sidebar" || $sidebar === "right-sidebar"): ?>
    <main class="col-12 col-md-8 col-lg-8">
    <?php else : ?>
      <main class="col-12">
    <?php endif ?>
      <h1>category.php</h1>
      <div class="row">
        <?php
        if (have_posts()) : ?>
        <?php
        /* Start the Loop */
        while (have_posts()) :
          the_post(); ?>
          <div class="<?php echo $columns; ?>">
            <?php  get_template_part('template-parts/content', 'blog'); ?>
          </div>
        <?php endwhile; ?>
        <div class="col-12">
          <?php get_template_part('template-parts/pagination'); ?>
        </div>
        <?php
        else :
          get_template_part('template-parts/content', 'none');
        endif; ?>
      </div>
    </main>
    <?php if ($sidebar === "right-sidebar") {?>
      <aside class="col-4">
    <?php get_sidebar('blog-right'); ?>
    </aside>
    <?php } ?>
  </div>
</div><!-- #primary -->

<?php
get_footer();
