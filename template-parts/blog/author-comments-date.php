<?php $avatar = get_avatar( get_the_author_meta( 'ID' ), 25); ?>
<div class="storezz-post-details">
	<div>
		<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" class="storezz-post-details_author-avatar">
			<?php echo wp_kses($avatar, array(
					'img' => array(
							'alt' => array(),
							'src' => array(),
							'srcset' => array(),
							'class' => array(),
							'height' => array(),
							'width' => array()
					)
			)); ?>
		</a>
		<span class="storezz-post-details_name">
			<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a>
		</span>
	</div>
	<div class="storezz-post-details_comments-number">
		<i class="far fa-comments"></i>
		<span><?php echo esc_html(get_comments_number()); ?></span>
		<i class="far fa-clock"></i>
		<span><?php echo esc_html(get_the_date( 'F j, Y' )); ?></span>
	</div>
</div>
