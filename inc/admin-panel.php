<?php
add_action('admin_menu', 'wnb_settings_page');
function wnb_settings_page() {
   add_submenu_page(
      'options-general.php',
      __('Notifications Bar', 'arch-wnb'),
      __('Notifications Bar', 'arch-wnb'),
      'manage_options',
      'wnb_notifications',
      'wnb_render_settings_page'
   );
}

/**
 * Creates the settings page
 */
function wnb_render_settings_page() {
   ?>
    <!-- Create a header in the default WordPress 'wrap' container -->
    <div class="wrap">

        <h2><?php esc_html_e('Notification Bar Settings',
                             'arch-wnb'); ?></h2>

        <form method="post" action="options.php">

           <?php
           // Get plugin  settings to display in the form
           settings_fields('wnb_settings');
           do_settings_sections('wnb_settings');
           // Form submit button
           submit_button();
           ?>

        </form>

    </div><!-- /.wrap -->
   <?php
}

/**
 * Creates settings for the plugin
 */
add_action('admin_init', 'wnb_initialize_settings');
function wnb_initialize_settings() {
   add_settings_section(
      'general_section',
      __('General Settings', 'arch-wnb'),
      'general_settings_callback',
      'wnb_settings'
   );
   add_settings_field(
      'notification_text',
      __('Notification Text', 'arch-wnb'),
      'text_input_callback',
      'wnb_settings',
      'general_section',
      [
         'label_for' => 'notification_text',
         'option_group' => 'wnb_settings',
         'option_id' => 'notification_text',
      ]
   );
   add_settings_field(
      'display_location',
      __('Where will the notification bar display?', 'arch-wnb'),
      'radio_input_callback',
      'wnb_settings',
      'general_section',
      [
         'label_for' => 'display_location',
         'option_group' => 'wnb_settings',
         'option_id' => 'display_location',
         'option_description' => 'Display notification bar on bottom of the site',
         'radio_options' => [
            'display_none' => 'Do not display notification bar',
            'display_top' => 'Display notification bar on the top of the site',
            'display_bottom' => 'Display notification bar on the bottom of the site',
         ],
      ]
   );
   add_settings_field(
      'display_sticky',
      __('Will the notificaton bar be sticky?', 'arch-wnb'),
      'radio_input_callback',
      'wnb_settings',
      'general_section',
      [
         'label_for' => 'display_sticky',
         'option_group' => 'wnb_settings',
         'option_id' => 'display_sticky',
         'option_description' => 'Make display sticky or not',
         'radio_options' => [
            'display_sticky' => 'Make the notification bar sticky',
            'display_relative' => 'Do not make the notification bar sticky',
         ],
      ]
   );
   register_setting(
      'wnb_settings',
      'wnb_settings'
   );
}

/**
 * Displays the header of the general settings
 */
function general_settings_callback() {
   esc_html_e('Notification Settings', 'arch-wnb');
}

/**
 * Text Input Callbacks
 */
function text_input_callback($text_input) {
   // Get arguments from setting
   $option_group = $text_input['option_group'];
   $option_id = $text_input['option_id'];
   $option_name = "{$option_group}[{$option_id}]";
   // Get existing option from database
   $options = get_option($option_group);
   $option_value = $options[$option_id] ?? '';
   // Render the output
   echo "<input type='text' size='50' id='{$option_id}'
                name='{$option_name}' value='{$option_value}' />";
}

/**
 * Radio Input Callbacks
 */
function radio_input_callback($radio_input) {
   // Get arguments from setting
   $option_group = $radio_input['option_group'];
   $option_id = $radio_input['option_id'];
   $radio_options = $radio_input['radio_options'];
   $option_name = "{$option_group}[{$option_id}]";
   // Get existing option from database
   $options = get_option($option_group);
   $option_value = $options[$option_id] ?? '';
   // Render the output
   $input = '';
   foreach ($radio_options as $radio_option_id => $radio_option_value) {
      $input .= "<input type='radio' id='{$radio_option_id}'
                        name='{$option_name}'
                        value='{$radio_option_id}' " .
         checked($radio_option_id, $option_value, false) . ' />';
      $input .= "<label for='{$radio_option_id}'>'"
             . "{$radio_option_value}</label><br />";
   }
   echo $input;
}





add_action('wp_footer', 'wnb_display_notification_bar');
function wnb_display_notification_bar() {
   if (null !== get_option('wnb_settings')) {
      $options = get_option('wnb_settings');
      ?>
       <div class="wnb-notification-bar <?php echo $options['display_location']; ?>
            <?php echo $options['display_sticky']; ?>">
           <div class="wnb-notification-text">
              <?php echo $options['notification_text']; ?>
           </div>
       </div>
      <?php
   }
}


?>
