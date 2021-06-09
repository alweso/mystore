<?php

function storezz_new_customizer_settings($wp_customize) {

$wp_customize->add_setting('storezz-navmenu');

$wp_customize->add_section('storezz-header-navmenu', array(
'title' => 'Menu Layout',
'panel' => 'nav_menus',
'description' => '',
'priority' => 120,
));

$wp_customize->add_control('storezz-navmenu', array(
    'type' => 'radio',
    'label' => 'Choose menu layout:',
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
