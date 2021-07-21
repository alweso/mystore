<?php $avatar = get_avatar( get_the_author_meta( 'ID' ), 25); ?>
<div class="storezz-post-details">
	<div class="storezz-post-details_comments-number">
		<i class="far fa-comments"></i>
		<span><?php echo esc_html(get_comments_number()); ?></span>
		<i class="far fa-clock"></i>
		<span><?php echo esc_html(get_the_date( 'F j, Y' )); ?></span>
		<span class="storezz-post-details_name">by
			<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a>
		</span>
	</div>
</div>
