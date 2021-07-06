<header class="storezz-entry-header entry-header">
  <div class="categories">
    <?php the_category() ?>
  </div>
   <?php if ( has_post_thumbnail() ) : ?>
     <?php get_template_part( 'template-parts/blog/single/post-media'); ?>
   <?php endif; ?>
   <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
   <?php get_template_part( 'template-parts/blog/author-comments-date' ); ?>
</header>
