<?php
function bootstrapstarter_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
    wp_enqueue_style( 'bootstrapstarter-style', get_stylesheet_uri(), $dependencies );
}

function bootstrapstarter_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '3.3.6', true );
}
function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'style-name',  get_template_directory_uri() . '/fontawesome-free-5.11.2-web/css/all.css');
}

function my_theme_scripts() {
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0.0', true );
}

function menheer_add_google_fonts() {
wp_enqueue_style( ' wpblog_google_fonts ', 'https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap', false );
}


function owl_carousel_styles() {
    wp_enqueue_style( 'owl_carousel_styles',  get_template_directory_uri() . '/assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css');
    wp_enqueue_style( 'owl_carousel_styles_demo',  get_template_directory_uri() . '/assets/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css');

    }

function owl_carousel_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('owl_carousel_scripts', get_template_directory_uri().'/assets/OwlCarousel2-2.3.4/dist/owl.carousel.min.js', $dependencies, '3.3.6', true );
}

add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_scripts' );
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );
add_action( 'wp_enqueue_scripts', 'owl_carousel_scripts' );
add_action( 'wp_enqueue_scripts', 'owl_carousel_styles' );
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );
add_action( 'wp_enqueue_scripts', 'menheer_add_google_fonts' );

function bootstrapstarter_wp_setup() {
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'bootstrapstarter_wp_setup' );

// add_action( 'init', 'bootstrapstarter_register_menu' );

function bootstrapstarter_widgets_init() {

    register_sidebar( array(
        'name'          => 'Footer 1',
        'id'            => 'footer_1',
        'before_widget' => '<div class="">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'Footer 2',
        'id'            => 'footer_2',
        'before_widget' => '<div class="">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'Footer 3',
        'id'            => 'footer_3',
        'before_widget' => '<div class="">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'Sidebar - Inset',
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="sidebar-module sidebar-module-inset">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'Sidebar - Default',
        'id'            => 'sidebar-2',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

}
add_action( 'widgets_init', 'bootstrapstarter_widgets_init' );
add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio' ) );
add_theme_support( 'post-thumbnails', array( 'post', 'page', 'product' ) ); // Posts and Pages
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
add_theme_support(
    'custom-logo',
    array(
        'height'      => 100,
        'width'       => 200,
        'flex-width'  => true,
        'flex-height' => true,
    )
);

if ( ! isset( $content_width ) ) $content_width = 1300;


register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'personal-blog' ),
) );
register_nav_menus( array(
    'secondary' => __( 'Secondary Menu', 'personal-blog' ),
) );


function themename_custom_header_setup() {
    $args = array(
        'default-image'      => get_template_directory_uri() . 'img/default-image.jpg',
        'default-text-color' => '000',
        'width'              => 1000,
        'height'             => 250,
        'flex-width'         => true,
        'flex-height'        => true,
    );
    add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'themename_custom_header_setup' );


add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {

set_post_thumbnail_size(850, 560, ['center', 'center']);
    // Add featured image sizes
    

}

/**
 * Registers an editor stylesheet for the theme.
 */
function wpdocs_theme_add_editor_styles() {
    add_editor_style( 'style.css' );
}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );

add_action( 'wp_enqueue_scripts', 'site_scripts' );

function site_scripts() {
    wp_enqueue_script('masonry');
    wp_enqueue_script( 'site-script', get_template_directory_uri() . '/js/site-script.js', array(), false, true );
}





require_once get_template_directory() . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'personal_blog_register_required_plugins' );

function personal_blog_register_required_plugins() {
  /*
   * Array of plugin arrays. Required keys are name and slug.
   * If the source is NOT from the .org repo, then source is also required.
   */
  $plugins = array(

    // This is an example of how to include a plugin bundled with a theme.
    array(
            'name' => 'Elementor', // The plugin name.
            'slug' => 'elementor', // The plugin slug (typically the folder name).
            'required' => true, // If false, the plugin is only 'recommended' instead of required.
        ),
        array(
                'name' => 'WooCommerce', // The plugin name.
                'slug' => 'woocommerce', // The plugin slug (typically the folder name).
                'required' => true, // If false, the plugin is only 'recommended' instead of required.
            ),
     array(
            'name' => 'ElementsKit Lite', // The plugin name.
            'slug' => 'elementskit-lite', // The plugin slug (typically the folder name).
            'required' => true, // If false, the plugin is only 'recommended' instead of required.
        ),
    array(
            'name' => 'Ad Inserter', // The plugin name.
            'slug' => 'ad-inserter', // The plugin slug (typically the folder name).
            'required' => true, // If false, the plugin is only 'recommended' instead of required.
        ),
    array(
            'name' => 'Smart Slider 3', // The plugin name.
            'slug' => 'smart-slider-3', // The plugin slug (typically the folder name).
            'required' => true, // If false, the plugin is only 'recommended' instead of required.
        ),
    array(
            'name' => 'Unyson', // The plugin name.
            'slug' => 'unyson', // The plugin slug (typically the folder name).
            'required' => true, // If false, the plugin is only 'recommended' instead of required.
        ),
    array(
      'name'               => 'Advanced Custom Fields Pro', // The plugin name.
      'slug'               => 'advanced-custom-fields-pro', // The plugin slug (typically the folder name).
      'source'             => get_template_directory() . '/inc/plugins/advanced-custom-fields-pro.zip', // The plugin source.
      'required'           => true, // If false, the plugin is only 'recommended' instead of required.
    ),
  );

  /*
   * Array of configuration settings. Amend each line as needed.
   *
   * TGMPA will start providing localized text strings soon. If you already have translations of our standard
   * strings available, please help us make TGMPA even better by giving us access to these translations or by
   * sending in a pull-request with .po file(s) with the translations.
   *
   * Only uncomment the strings in the config array if you want to customize the strings.
   */
  $config = array(
    'id'           => 'personal-blog',                 // Unique ID for hashing notices for multiple instances of TGMPA.
    'default_path' => '',                      // Default absolute path to bundled plugins.
    'menu'         => 'tgmpa-install-plugins', // Menu slug.
    'has_notices'  => true,                    // Show admin notices or not.
    'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
    'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
    'is_automatic' => false,                   // Automatically activate plugins after installation or not.
    'message'      => '',                      // Message to output right before the plugins table.

    /*
    'strings'      => array(
      'page_title'                      => __( 'Install Required Plugins', 'personal-blog' ),
      'menu_title'                      => __( 'Install Plugins', 'personal-blog' ),
      /* translators: %s: plugin name. * /
      'installing'                      => __( 'Installing Plugin: %s', 'personal-blog' ),
      /* translators: %s: plugin name. * /
      'updating'                        => __( 'Updating Plugin: %s', 'personal-blog' ),
      'oops'                            => __( 'Something went wrong with the plugin API.', 'personal-blog' ),
      'notice_can_install_required'     => _n_noop(
        /* translators: 1: plugin name(s). * /
        'This theme requires the following plugin: %1$s.',
        'This theme requires the following plugins: %1$s.',
        'personal-blog'
      ),
      'notice_can_install_recommended'  => _n_noop(
        /* translators: 1: plugin name(s). * /
        'This theme recommends the following plugin: %1$s.',
        'This theme recommends the following plugins: %1$s.',
        'personal-blog'
      ),
      'notice_ask_to_update'            => _n_noop(
        /* translators: 1: plugin name(s). * /
        'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
        'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
        'personal-blog'
      ),
      'notice_ask_to_update_maybe'      => _n_noop(
        /* translators: 1: plugin name(s). * /
        'There is an update available for: %1$s.',
        'There are updates available for the following plugins: %1$s.',
        'personal-blog'
      ),
      'notice_can_activate_required'    => _n_noop(
        /* translators: 1: plugin name(s). * /
        'The following required plugin is currently inactive: %1$s.',
        'The following required plugins are currently inactive: %1$s.',
        'personal-blog'
      ),
      'notice_can_activate_recommended' => _n_noop(
        /* translators: 1: plugin name(s). * /
        'The following recommended plugin is currently inactive: %1$s.',
        'The following recommended plugins are currently inactive: %1$s.',
        'personal-blog'
      ),
      'install_link'                    => _n_noop(
        'Begin installing plugin',
        'Begin installing plugins',
        'personal-blog'
      ),
      'update_link'             => _n_noop(
        'Begin updating plugin',
        'Begin updating plugins',
        'personal-blog'
      ),
      'activate_link'                   => _n_noop(
        'Begin activating plugin',
        'Begin activating plugins',
        'personal-blog'
      ),
      'return'                          => __( 'Return to Required Plugins Installer', 'personal-blog' ),
      'plugin_activated'                => __( 'Plugin activated successfully.', 'personal-blog' ),
      'activated_successfully'          => __( 'The following plugin was activated successfully:', 'personal-blog' ),
      /* translators: 1: plugin name. * /
      'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'personal-blog' ),
      /* translators: 1: plugin name. * /
      'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'personal-blog' ),
      /* translators: 1: dashboard link. * /
      'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'personal-blog' ),
      'dismiss'                         => __( 'Dismiss this notice', 'personal-blog' ),
      'notice_cannot_install_activate'  => __( 'There are one or more required or recommended plugins to install, update or activate.', 'personal-blog' ),
      'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'personal-blog' ),

      'nag_type'                        => '', // Determines admin notice type - can only be one of the typical WP notice classes, such as 'updated', 'update-nag', 'notice-warning', 'notice-info' or 'error'. Some of which may not work as expected in older WP versions.
    ),
    */
  );

  tgmpa( $plugins, $config );
}


/**
 * Fetch image post objects for all gallery images in a post.
 *
 * @param $post_id
 *
 * @return array
 */

 /**
  * Load WooCommerce compatibility file.
  */
 if (class_exists('WooCommerce')) {
     require get_template_directory() . '/inc/woocommerce.php';
 }
