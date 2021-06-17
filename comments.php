<?php
/**
 * The template for displaying comments
* @since 1.0.0
**/

if (post_password_required()) {
	return;
}

if (have_comments()) { ?>
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
     if (get_comment_pages_count() > 1 && get_option('page_comments') ) {
   the_comments_pagination();
 }
};

comment_form(
  array(
    'id_form' => 'dsds',
    'class_form'         => 'storezz-comment-form',
    'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
    'title_reply_after'  => '</h2>',
  )
);

if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) { ?>
<div class="storezz-no-comments">
  <p><?php esc_html_e( 'Comments are closed.', 'storezz' ); ?></p>
</div>
<?php
};
