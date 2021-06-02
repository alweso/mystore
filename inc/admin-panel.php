<?php

add_action('admin_menu', 'my_menu_pages');
function my_menu_pages(){
    add_menu_page('Header menu', 'My Menu Title', 'manage_options', 'my-menu' );
    add_submenu_page('my-menu',
    __('Header menu', 'arch-storezz'),
    __('Header menus', 'arch-storezz'),
    'manage_options',
    'my-menu',
    'storezz_render_settings_page');
    add_submenu_page('my-menu', 'Submenu Page Title2', 'Whatever You Want2', 'manage_options', 'my-menu2' );
}

// add_action('admin_menu', 'my_menu_output');


/**
 * Creates the settings page
 */
function storezz_render_settings_page() {
   ?>
    <!-- Create a header in the default WordPress 'wrap' container -->
    <div class="wrap">
        <h2><?php esc_html_e('Storezz Settings',
                             'arch-storezz'); ?></h2>
        <form method="post" action="options.php">
           <?php
           // Get plugin  settings to display in the form
           settings_fields('storezz_settings');
           do_settings_sections('storezz_settings');
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
add_action('admin_init', 'storezz_initialize_settings');
function storezz_initialize_settings() {
   add_settings_section(
      'general_section',
      __('General Settings', 'arch-storezz'),
      'general_settings_callback',
      'storezz_settings'
   );
   add_settings_field(
      'notification_text',
      __('Notification Text', 'arch-storezz'),
      'text_input_callback',
      'storezz_settings',
      'general_section',
      [
         'label_for' => 'notification_text',
         'option_group' => 'storezz_settings',
         'option_id' => 'notification_text',
      ]
   );
   add_settings_field(
      'display_sticky',
      __('Will the notificaton bar be sticky?', 'arch-storezz'),
      'radio_input_callback',
      'storezz_settings',
      'general_section',
      [
         'label_for' => 'display_sticky',
         'option_group' => 'storezz_settings',
         'option_id' => 'display_sticky',
         'option_description' => 'Make display sticky or not',
         'radio_options' => [
            'red' => 'Make menu red',
            'blue' => 'Make menu blue',
         ],
      ]
   );
   register_setting(
      'storezz_settings',
      'storezz_settings'
   );
}

/**
 * Displays the header of the general settings
 */
function general_settings_callback() {
   esc_html_e('Notification Settings', 'arch-storezz');
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





add_action('wp_footer', 'storezz_display_notification_bar');
function storezz_display_notification_bar() {
   if (null !== get_option('storezz_settings')) {
      $options = get_option('storezz_settings');
      return $options;
   }
}


?>
