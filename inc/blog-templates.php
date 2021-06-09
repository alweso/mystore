<?php
/**
* Adds a box to the main sidebars on the Post and Page edit screens.
*/
function storezz_blog_layout_meta_box() {

  $screens = array('page', 'post');

  add_meta_box(
    'storezz_blog_layout', esc_html__('Sidebars', 'meta-store'), 'storezz_blog_layout_meta_box_callback', $screens, 'side', 'low'
  );
}

add_action('add_meta_boxes', 'storezz_blog_layout_meta_box');

/**
* Prints the box content.
*
* @param WP_Post $post The object for the current post/page.
*/
function storezz_blog_layout_meta_box_callback($post) {

  // Add a nonce field so we can check for it later.
  wp_nonce_field('storezz_blog_layout_save_meta_box', 'storezz_blog_layout_meta_box_nonce');

  /*
  * Use get_post_meta() to retrieve an existing value
  * from the database and use the value for the form.
  */
  $storezz_blog_layout = get_post_meta($post->ID, 'storezz_blog_layout', true);

  if (!$storezz_blog_layout) {
    $storezz_blog_layout = 'col-12 col-md-6';
  } ?>

  <h4>Keep in mind this only works on page and post templates that have those specific sidebars.</h4>
    <h4>In another case this will have no effect on your layout.</h4>
  <div class="mb-5">
  <label for="storezz_sidebar_left">Choose sidebar left:</label>
  <select name="storezz_sidebar_left" id="sidebar_left">
    <option value="layout-1">Layout 1</option>
    <option value="layout-2">Layout 2</option>
    <option value="layout-3">Layout 3</option>
    <option value="layout-4">Layuot 4</option>
  </select>
</div>
  <?php
}

/**
* When the post is saved, saves our custom data.
*
* @param int $post_id The ID of the post being saved.
*/
function storezz_blog_layout_save_meta_box($post_id) {

  /*
  * We need to verify this came from our screen and with proper authorization,
  * because the save_post action can be triggered at other times.
  */

  // Check if our nonce is set.
  if (!isset($_POST['storezz_blog_layout_meta_box_nonce'])) {
    return;
  }

  // Verify that the nonce is valid.
  if (!wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['storezz_blog_layout_meta_box_nonce'] ) ), 'storezz_blog_layout_save_meta_box')) {
    return;
  }

  // If this is an autosave, our form has not been submitted, so we don't want to do anything.
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return;
  }

  // Check the user's permissions.
  if (!current_user_can('edit_post', $post_id)) {
    return;
  }

  /* OK, it's safe for us to save the data now. */

  // Make sure that it is set.
  if (isset($_POST['storezz_sidebar_left'])) {
    // Sanitize user input.
    $storezz_data = sanitize_text_field( wp_unslash( $_POST['storezz_sidebar_left']) );
    // Update the meta field in the database.
    update_post_meta($post_id, 'storezz_sidebar_left', $storezz_data);
  }

  if (isset($_POST['storezz_sidebar_right'])) {
    // Sanitize user input.
    $storezz_data = sanitize_text_field( wp_unslash( $_POST['storezz_sidebar_right']) );
    // Update the meta field in the database.
    update_post_meta($post_id, 'storezz_sidebar_right', $storezz_data);
  }
}

add_action('save_post', 'storezz_blog_layout_save_meta_box');
