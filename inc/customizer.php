<?php

/**
* Create Logo Setting and Upload Control
*/
function storezz_new_customizer_settings($wp_customize) {
// add a setting for the site logo
$wp_customize->add_setting('storezz-header-navmenu');
$wp_customize->add_setting('storezz-navmenu');

$wp_customize->add_section('storezz-header-navmenu', array(
'title' => 'Storezz navmenu',
'description' => '',
'priority' => 120,
));
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'storezz-header-navmenu',
array(
'label' => 'Upload Logo',
'section' => 'storezz-header-navmenu',
'settings' => 'storezz-header-navmenu',
) ) );

$wp_customize->add_control('storezz-navmenu', array(
    'type' => 'radio',
    'label' => 'Color Scheme:',
    'section' => 'storezz-header-navmenu',
    'settings' => 'storezz-navmenu',
    'choices' => array(
        'menu_1' => 'Menu 1',
        'menu_2' => 'Menu 2',
        'menu_3' => 'Menu 3',
        ),
    )
);


}
add_action('customize_register', 'storezz_new_customizer_settings');


 ?>
