<header class="storezz-entry-header entry-header">
<?php

$show_categories = get_theme_mod( 'storezz-show-categories-blog', 'yes' );
$show_tags = get_theme_mod( 'storezz-show-tags-blog', 'yes' );

if ( $show_categories === 'yes' ) : ?>
<div class="storezz-entry-header_categories">
  <?php the_category() ?>
</div>
<?php endif; 

if ( is_single() ) :
  the_title( '<h1 class="entry-title">', '</h1>' );
 else :
  the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
endif;

if ( $show_tags === 'yes' ) : ?>
<div class="storezz-entry-header_tags">
  <?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?>
</div>
<?php endif ?>
<?php get_template_part( 'template-parts/blog/author-comments-date' ); ?>
</header>
