<?php

/**
 * Storezz customizer panel
 * @since Storezz 1.0.0
**/

function storezz_new_customizer_settings($wp_customize) {
  $wp_customize->add_panel( 'storezz_theme_options', array(
    'title'            => esc_html__( 'Storezz Theme Options', 'storezz' ),
    'description'      => esc_html__( 'Theme Modifications panel', 'storezz' ),
  )
);

/** Navmenu **/

$wp_customize->add_setting( 'storezz-navmenu', array(
  'default'           => 'menu_1',
  'sanitize_callback' => 'storezz_sanitize_radio',
) );

$wp_customize->add_section( 'storezz-header-navmenu', array(
  'title' => esc_html__( 'Menu Layout', 'storezz' ),
  'panel' => 'storezz_theme_options',
  'priority' => 120,
));

$wp_customize->add_control( 'storezz-navmenu', array(
  'type' => 'radio',
  'label' => esc_html__( 'Choose menu layout:', 'storezz' ),
  'section' => 'storezz-header-navmenu',
  'settings' => 'storezz-navmenu',
  'choices' => array(
    'menu_1' => esc_html__( 'Menu 1', 'storezz' ),
    'menu_2' => esc_html__( 'Menu 2', 'storezz' ),
    'menu_3' => esc_html__( 'Menu 3', 'storezz' ),
  ),
)
);

/** Blog **/

$wp_customize->add_setting( 'storezz-choose-blog-layout', array(
  'default'           => 'blog_1',
  'sanitize_callback' => 'storezz_sanitize_radio',
) );

$wp_customize->add_setting( 'storezz-blog-choose-sidebar', array(
  'default'           => 'blog_sidebar_1',
  'sanitize_callback' => 'storezz_sanitize_radio',
) );

$wp_customize->add_section( 'storezz-blog-layout', array(
  'title' => esc_html__( 'Blog Layout', 'storezz' ),
  'panel' => 'storezz_theme_options',
));

$wp_customize->add_control( 'storezz-choose-blog-layout', array(
  'type' => 'radio',
  'label' => esc_html__( 'Choose blog layout:', 'storezz' ),
  'section' => 'storezz-blog-layout',
  'settings' => 'storezz-choose-blog-layout',
  'choices' => array(
    'blog_1' => esc_html__( 'Blog 1', 'storezz' ),
    'blog_2' => esc_html__( 'Blog 2', 'storezz' ),
    'blog_3' => esc_html__( 'Blog 3', 'storezz' ),
    'blog_4' => esc_html__( 'Blog 4', 'storezz' ),
  ),
)
);

$wp_customize->add_control( 'storezz-blog-choose-sidebar', array(
  'type' => 'radio',
  'label' => esc_html__( 'Choose sidebar:', 'storezz' ),
  'section' => 'storezz-blog-layout',
  'settings' => 'storezz-blog-choose-sidebar',
  'choices' => array(
    'blog_sidebar_1' => esc_html__( 'Blog sidebar 1', 'storezz' ),
    'blog_sidebar_2' => esc_html__( 'Blog sidebar 2', 'storezz' ),
  ),
)
);

/** Single post **/

$wp_customize->add_setting( 'storezz-choose-single-layout', array(
  'default'           => 'single_1',
  'sanitize_callback' => 'storezz_sanitize_radio',
) );

$wp_customize->add_setting( 'storezz-single-choose-sidebar', array(
  'default'           => 'single_sidebar_1',
  'sanitize_callback' => 'storezz_sanitize_radio',
) );

$wp_customize->add_section( 'storezz-single-layout', array(
  'title' => esc_html__( 'Single Post Layout', 'storezz' ),
  'panel' => 'storezz_theme_options',
));

$wp_customize->add_control( 'storezz-choose-single-layout', array(
  'type' => 'radio',
  'label' => esc_html__( 'Choose single post layout:', 'storezz' ),
  'section' => 'storezz-single-layout',
  'settings' => 'storezz-choose-single-layout',
  'choices' => array(
    'single_1' => esc_html__( 'Single 1', 'storezz' ),
    'single_2' => esc_html__( 'Single 2', 'storezz' ),
    'single_3' => esc_html__( 'Single 3', 'storezz' ),
    'single_4' => esc_html__( 'Single 4', 'storezz' ),
    'single_5' => esc_html__( 'Single 5', 'storezz' ),
  ),
)
);

$wp_customize->add_control( 'storezz-single-choose-sidebar', array(
  'type' => 'radio',
  'label' => esc_html__( 'Choose sidebar:', 'storezz' ),
  'section' => 'storezz-single-layout',
  'settings' => 'storezz-single-choose-sidebar',
  'choices' => array(
    'single_sidebar_1' => esc_html__( 'Single sidebar 1', 'storezz' ),
    'single_sidebar_2' => esc_html__( 'Single sidebar 2', 'storezz' ),
  ),
)
);

/** Page **/

$wp_customize->add_setting( 'storezz-choose-page-layout', array(
  'default'           => 'page_1',
  'sanitize_callback' => 'storezz_sanitize_radio',
) );

$wp_customize->add_setting( 'storezz-page-choose-sidebar', array(
  'default'           => 'page_sidebar_1',
  'sanitize_callback' => 'storezz_sanitize_radio',
) );

$wp_customize->add_section( 'storezz-page-layout', array(
  'title' => esc_html__( 'Page Layout', 'storezz' ),
  'panel' => 'storezz_theme_options',
));

$wp_customize->add_control( 'storezz-choose-page-layout', array(
  'type' => 'radio',
  'label' => esc_html__( 'Choose page layout:', 'storezz' ),
  'section' => 'storezz-page-layout',
  'settings' => 'storezz-choose-page-layout',
  'choices' => array(
    'page_1' => esc_html__( 'Page 1', 'storezz' ),
    'page_2' => esc_html__( 'Page 2', 'storezz' ),
  ),
)
);

$wp_customize->add_control( 'storezz-page-choose-sidebar', array(
  'type' => 'radio',
  'label' => esc_html__( 'Choose sidebar:', 'storezz' ),
  'section' => 'storezz-page-layout',
  'settings' => 'storezz-page-choose-sidebar',
  'choices' => array(
    'page_sidebar_1' => esc_html__( 'Page sidebar 1', 'storezz' ),
    'page_sidebar_2' => esc_html__( 'Page sidebar 2', 'storezz' ),
  ),
)
);

/** Footer **/

$wp_customize->add_setting( 'storezz-copyright-text', array(
  'default'           => 'Storezz 2021',
  'sanitize_callback' => 'wp_filter_nohtml_kses',
) );

$wp_customize->add_section( 'storezz-footer', array(
  'title' => esc_html__( 'Footer' ),
  'panel' => 'storezz_theme_options',
));

$wp_customize->add_control( 'storezz-copyright-text', array(
  'type' => 'text',
  'label' => esc_html__( 'Copyright text', 'storezz' ),
  'section' => 'storezz-footer',
  'settings' => 'storezz-copyright-text',
)
);
}

add_action( 'customize_register', 'storezz_new_customizer_settings' );

function storezz_sanitize_radio( $input, $setting ) {
  $input = sanitize_key( $input );
  $choices = $setting->manager->get_control( $setting->id )->choices;
  return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

?>
