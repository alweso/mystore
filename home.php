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
    <header class="col-12">
      <?php get_template_part('template-parts/breadcrumbs'); ?>
      <?php echo wp_list_categories(); ?>
    </header>
    <?php if ($sidebar === "left-sidebar") {?>
      <aside class="col-12 col-md-4 col-lg-4">
        <?php get_sidebar('blog-left'); ?>
      </aside>
    <?php } ?>
      <?php if ($sidebar === "left-sidebar" || $sidebar === "right-sidebar"): ?>
        <main class="col-12 col-md-8 col-lg-8">
        <?php else : ?>
          <main class="col-12">
        <?php endif ?>
        <h1>home.php</h1>
        <div class="row">
          <?php
          if (have_posts()) : ?>
          <?php
          /* Start the Loop */
          while (have_posts()) :
            the_post(); ?>
            <article class="<?php echo $columns; ?>">
              <?php get_template_part('template-parts/content', 'blog'); ?>
            </article>
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
        <aside class="col-12 col-md-4 col-lg-4">
          <?php get_sidebar('blog-right'); ?>
        </aside>
      <?php } ?>
    </div>
  </div><!-- #primary -->

  <?php
  get_footer();
