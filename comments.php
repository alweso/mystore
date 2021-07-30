<?php
/**
* The template for displaying comments
* @since Storezz 1.0.0
**/

if ( post_password_required() ) {
	return;
}

if ( $comments ) {
	?>

	<div class="storezz-comments" id="comments">

		<?php
		$comments_number = absint( get_comments_number() );
		?>

		<div class="comments-header section-inner small max-percentage">

			<h2 class="comment-reply-title">
			<?php
			if ( ! have_comments() ) {
				_e( 'Leave a comment', 'storezz' );
			} elseif ( 1 === $comments_number ) {
				/* translators: %s: Post title. */
				printf( _x( 'One reply on &ldquo;%s&rdquo;', 'comments title', 'storezz' ), get_the_title() );
			} else {
				printf(
					/* translators: 1: Number of comments, 2: Post title. */
					_nx(
						'%1$s comment',
						'%1$s comments',
						$comments_number,
						'comments title',
						'storezz'
					),
					number_format_i18n( $comments_number ),
					get_the_title()
				);
			}

			?>
			</h2><!-- .comments-title -->

		</div><!-- .comments-header -->

		<ul class="storezz-post-comments">

			<?php
			wp_list_comments(
				array(
					'avatar_size' => 60,
					'short_ping'	 => false,
					'type'              => 'all',
				)
			);

			$comment_pagination = paginate_comments_links(
				array(
					'echo'      => false,
					'end_size'  => 0,
					'mid_size'  => 0,
					'next_text' => __( 'Newer Comments', 'storezz' ) . ' <i class="fas fa-angle-double-right"></i>',
					'prev_text' => '<i class="fas fa-angle-double-left"></i> ' . __( 'Older Comments', 'storezz' ),
				)
			);

			if ( $comment_pagination ) {
				$pagination_classes = '';

				// If we're only showing the "Next" link, add a class indicating so.
				if ( false === strpos( $comment_pagination, 'prev-comments' ) ) {
					$pagination_classes = ' only-next';
				}
				?>

				<nav class="storezz-comments-pagination <?php  esc_html_e( $pagination_classes ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static output ?>" aria-label="<?php esc_attr_e( 'Comments', 'storezz' ); ?>">
					<?php echo wp_kses_post( $comment_pagination ); ?>
				</nav>

				<?php
			}
			?>

		</ul>
	</div>
	<?php
}

if ( comments_open() || pings_open() ) {

	comment_form(
		array(
			'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
			'title_reply_after'  => '</h2>',
		)
	);

} elseif ( is_single() ) {

	?>

	<div class="comment-respond" id="respond">

		<p class="comments-closed"><?php _e( 'Comments are closed.', 'storezz' ); ?></p>

	</div><!-- #respond -->

	<?php
}
