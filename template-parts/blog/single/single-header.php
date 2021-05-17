<header class="entry-header">
<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  <div class="author-and-date">
    <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" class="author-avatar">
      <?php echo get_avatar( get_the_author_meta( 'ID' ), 40); ?>
    </a>
    <span>by <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a></span>
    <?php the_date( 'F j, Y' ); ?>
    <?php if (has_category() ) { ?>
    <span><?php the_category() ?></span>
  <?php } ?>
  </div>
</header>
