<header class="entry-header">
  <div class="categories">
    <?php the_category() ?>
  </div>
  <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  <?php get_template_part( 'template-parts/blog/single/author-comments-date' ); ?>
   <?php if ( has_post_thumbnail() ) : ?>
     <?php get_template_part( 'template-parts/blog/single/post-media'); ?>
   <?php endif; ?>
</header>
