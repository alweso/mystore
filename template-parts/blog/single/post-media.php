<?php $caption = get_the_post_thumbnail_caption(); ?>
<div class="storezz-entry-media storezz-entry-media--single entry-media">
  <?php the_post_thumbnail( 'post-thumbnail', ['class' => 'img-fluid h-auto', 'title' => 'Feature image'] );
  if($caption) : ?>
  <figcaption>
    <?php the_post_thumbnail_caption(); ?>
  </figcaption>
<?php endif; ?>
</div>
