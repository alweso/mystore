<div class="entry-media entry-media--blog entry-media">
  <div class="entry-media_inner">
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="entry-media_feature-image">
      <?php the_post_thumbnail( 'post-thumbnail', ['class' => 'w-100 h-auto', 'title' => 'Feature image'] ); ?>
    </a>
  </div>
</div>
