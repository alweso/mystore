<?php
/**
* The template for displaying comments
* @since Storezz 1.0.0
**/

if ( post_password_required() ) :
	return;
endif;

if ( have_comments() ) : ?>
<ul class="storezz-post-comments">
	<?php
	wp_list_comments(array(
		'style'       => 'ul',
		'short_ping'  => true,
		'avatar_size' => 60,
	));
	?>
</ul>
<?php
if ( get_comment_pages_count() > 1 && get_option('page_comments') ) :
	the_comments_pagination();
endif;
endif;

comment_form(
	array(
		'id_form' => 'storezz-comments',
		'class_form'         => 'storezz-comments',
		'title_reply_before' => '<h2 id="storezz-reply-title" class="storezz-comments_reply-title">',
		'title_reply_after'  => '</h2>',
	)
);

if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
<div class="storezz-comments_no-comments">
	<p><?php esc_html_e( 'Comments are closed.', 'storezz' ); ?></p>
</div>
<?php
endif;
