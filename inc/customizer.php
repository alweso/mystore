<?php

/**
* Create Logo Setting and Upload Control
*/
function storezz_new_customizer_settings($wp_customize) {
// add a setting for the site logo
$wp_customize->add_setting('storezz-header-navmenu');
// Add a control to upload the logo
// $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'storezz_logo',
// array(
// 'label' => 'Upload Logo',
// 'section' => 'title_tagline',
// 'settings' => 'storezz_logo',
// ) ) );
// Add Footer Section
$wp_customize->add_section('storezz-header-navmenu', array(
'title' => 'Footer',
'description' => '',
'priority' => 120,
));
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'storezz-header-navmenu',
array(
'label' => 'Upload Logo',
'section' => 'storezz-header-navmenu',
'settings' => 'storezz-header-navmenu',
) ) );

}
add_action('customize_register', 'storezz_new_customizer_settings');


 ?>
