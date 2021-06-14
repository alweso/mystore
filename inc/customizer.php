<?php

function storezz_new_customizer_settings($wp_customize) {

  // Theme Options Panel
$wp_customize->add_panel( 'storezz_theme_options',
    array(
        'title'            => __( 'Storezz Theme Options', 'storezz' ),
        'description'      => __( 'Theme Modifications like color scheme, theme texts and layout preferences can be done here', 'nd_dosth' ),
    )
);

$wp_customize->add_setting('storezz-navmenu');
$wp_customize->add_setting('storezz-blog-layout');
$wp_customize->add_setting('storezz-blog-choose-sidebar');
$wp_customize->add_setting('storezz-single-layout');
$wp_customize->add_setting('storezz-single-choose-sidebar');


$wp_customize->add_section('storezz-header-navmenu', array(
'title' => 'Menu Layout',
'panel' => 'storezz_theme_options',
'description' => '',
'priority' => 120,
));

$wp_customize->add_section('storezz-blog-layout', array(
'title' => 'Blog Layout',
'panel' => 'storezz_theme_options',
'description' => '',
// 'priority' => 120,
));

$wp_customize->add_section('storezz-single-layout', array(
'title' => 'Single Post Layout',
'panel' => 'storezz_theme_options',
'description' => '',
// 'priority' => 120,
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

$wp_customize->add_control('storezz-choose-blog-layout', array(
    'type' => 'radio',
    'label' => 'Choose blog layout:',
    'section' => 'storezz-blog-layout',
    'settings' => 'storezz-blog-layout',
    'choices' => array(
        'blog_1' => 'Blog 1',
        'blog_2' => 'Blog 2',
        'blog_3' => 'Blog 3',
        'blog_4' => 'Blog 4',
        ),
    )
);

$wp_customize->add_control('storezz-blog-choose-sidebar', array(
    'type' => 'radio',
    'label' => 'Choose sidebar:',
    'section' => 'storezz-blog-layout',
    'settings' => 'storezz-blog-choose-sidebar',
    'choices' => array(
        'sidebar_1' => 'Sidebar 1',
        'sidebar_2' => 'Sidebar 2',
        'sidebar_3' => 'Sidebar 3',
        'sidebar_4' => 'Sidebar 4',
        ),
    )
);

$wp_customize->add_control('storezz-choose-single-layout', array(
    'type' => 'radio',
    'label' => 'Choose single post layout:',
    'section' => 'storezz-single-layout',
    'settings' => 'storezz-single-layout',
    'choices' => array(
        'single_1' => 'Single 1',
        'single_2' => 'Single 2',
        'single_3' => 'Single 3',
        'single_4' => 'Single 4',
        'single_5' => 'Single 5',
        ),
    )
);

$wp_customize->add_control('storezz-single-choose-sidebar', array(
    'type' => 'radio',
    'label' => 'Choose sidebar:',
    'section' => 'storezz-single-layout',
    'settings' => 'storezz-single-choose-sidebar',
    'choices' => array(
        'sidebar_1' => 'Sidebar 1',
        'sidebar_2' => 'Sidebar 2',
        'sidebar_3' => 'Sidebar 3',
        'sidebar_4' => 'Sidebar 4',
        ),
    )
);
}
add_action('customize_register', 'storezz_new_customizer_settings');

?>
