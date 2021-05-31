<?php
/**
 * Adds a box to the main column on the Post and Page edit screens.
 */
function storezz_column_layout_meta_box() {

    $screens = array('page');

    add_meta_box(
            'storezz_column_layout', esc_html__('Column Layout', 'meta-store'), 'storezz_column_layout_meta_box_callback', $screens, 'side', 'low'
    );
}

add_action('add_meta_boxes', 'storezz_column_layout_meta_box');

/**
 * Prints the box content.
 *
 * @param WP_Post $post The object for the current post/page.
 */
function storezz_column_layout_meta_box_callback($post) {

    // Add a nonce field so we can check for it later.
    wp_nonce_field('storezz_column_layout_save_meta_box', 'storezz_column_layout_meta_box_nonce');

    /*
     * Use get_post_meta() to retrieve an existing value
     * from the database and use the value for the form.
     */
    $storezz_column_layout = get_post_meta($post->ID, 'storezz_column_layout', true);

    if (!$storezz_column_layout) {
        $storezz_column_layout = 'col-12 col-md-6';
    }

    echo '<label>one column';
    echo '<input type="radio" name="storezz_column_layout" value="col-12" ' . checked($storezz_column_layout, 'col-12', false) . ' />';
    echo '</label>';

    echo '<label>two columns';
    echo '<input type="radio" name="storezz_column_layout" value="col-12 col-md-6" ' . checked($storezz_column_layout, 'col-12 col-md-6', false) . ' />';
    echo '</label>';

    echo '<label>three columns';
    echo '<input type="radio" name="storezz_column_layout" value="col-12 col-md-6 col-xl-4" ' . checked($storezz_column_layout, 'col-12 col-md-6 col-xl-4', false) . ' />';
    echo '</label>';

}

/**
 * When the post is saved, saves our custom data.
 *
 * @param int $post_id The ID of the post being saved.
 */
function storezz_column_layout_save_meta_box($post_id) {

    /*
     * We need to verify this came from our screen and with proper authorization,
     * because the save_post action can be triggered at other times.
     */

    // Check if our nonce is set.
    if (!isset($_POST['storezz_column_layout_meta_box_nonce'])) {
        return;
    }

    // Verify that the nonce is valid.
    if (!wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['storezz_column_layout_meta_box_nonce'] ) ), 'storezz_column_layout_save_meta_box')) {
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
    if (isset($_POST['storezz_column_layout'])) {
        // Sanitize user input.
        $storezz_data = sanitize_text_field( wp_unslash( $_POST['storezz_column_layout']) );
        // Update the meta field in the database.
        update_post_meta($post_id, 'storezz_column_layout', $storezz_data);
    }
}

add_action('save_post', 'storezz_column_layout_save_meta_box');
