<?php
$show_categories = get_theme_mod( 'storezz-show-categories-single', 'yes' );
$show_tags = get_theme_mod( 'storezz-show-tags-single', 'yes' );
?>
<header class="storezz-entry-header entry-header">
   <?php if ( has_post_thumbnail() ) : ?>
     <?php get_template_part( 'template-parts/blog/single/post-media'); ?>
   <?php endif; ?>
   <?php the_title( '<h1 class="storezz-entry-header_entry-title">', '</h1>' ); ?>
   <?php get_template_part( 'template-parts/blog/author-comments-date' ); ?>
   <?php if ( $show_tags === 'yes' ) : ?>
   <div class="storezz-entry-header_tags">
     <?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?>
   </div>
   <?php endif ?>
   <?php if ( $show_categories === 'yes' ) : ?>
   <div class="storezz-entry-header_categories">
     <?php the_category() ?>
   </div>
    <?php endif ?>
</header>
