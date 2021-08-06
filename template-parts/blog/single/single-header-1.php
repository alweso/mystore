<?php
$show_categories = get_theme_mod( 'storezz-show-categories-single', 'yes' );
?>
<header class="entry-header entry-header">
   <?php if ( $show_categories === 'yes' ) : ?>
   <div class="entry-header_categories">
     <?php the_category() ?>
   </div>
    <?php endif ?>
   <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
   <?php get_template_part( 'template-parts/blog/author-comments-date' ); ?>
   <?php if ( has_post_thumbnail() ) : ?>
     <?php get_template_part( 'template-parts/blog/single/post-media'); ?>
   <?php endif; ?>
</header>
