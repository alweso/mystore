<header class="entry-header">
<?php
if ( is_single() ) {
  the_title( '<h1 class="entry-title">', '</h1>' );
} else {
  the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
} ?>
<span><?php the_category() ?></span>
<?php get_template_part( 'template-parts/blog/author-comments-date' ); ?>
</header>
