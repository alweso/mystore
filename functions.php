<?php

/**
 * Storezz functions
 * @since Storezz 1.0.0
 **/

/*** Scripts and styles ***/

function storezz_scripts_and_styles() {
  wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/vendors/Bootstrap/js/bootstrap.min.js', 'jquery', '3.3.6', true );
  wp_enqueue_script( 'owl_carousel_scripts', get_template_directory_uri().'/vendors/OwlCarousel/dist/owl.carousel.min.js', 'jquery', '3.3.6', true );
  wp_enqueue_script( 'storezz_scripts', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), true );
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vendors/Bootstrap/css/bootstrap.min.css' );
  wp_enqueue_style( 'fontawesome',  get_template_directory_uri() . '/vendors/Fontawesome/css/all.css' );
  wp_enqueue_style( 'owl_carousel_styles',  get_template_directory_uri() . '/vendors/OwlCarousel/dist/assets/owl.carousel.min.css' );
  wp_enqueue_style( 'owl_carousel_styles_demo',  get_template_directory_uri() . '/vendors/OwlCarousel/dist/assets/owl.theme.default.min.css' );
  wp_enqueue_style( 'google_fonts ', 'https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap', false );
  wp_enqueue_style( 'storezz_gutenberg', get_template_directory_uri() . '/css/gutenberg-style.css', 'storezz' );
  wp_enqueue_style( 'storezz_style', get_stylesheet_uri(), 'storezz' );
  wp_enqueue_style( 'woocommerce_style', get_theme_file_uri( '/woocommerce.css' ), 'storezz' );
  // wp_enqueue_style( 'site-block-editor-styles', get_theme_file_uri( '/editor-style.css' ), false, '1.0', 'all' );
}

add_action( 'wp_enqueue_scripts', 'storezz_scripts_and_styles' );





function prefix_block_styles() {
  wp_enqueue_style( 'prefix-editor-font', get_template_directory_uri() . '/vendors/Fontawesome/css/all.css');
  wp_enqueue_style( 'prefix-editor-font', 'https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap');
  wp_enqueue_style( 'prefix-editor-styles', get_theme_file_uri( '/editor-style.css' ) );
  // add_editor_style('editor-style.css');
  // add_editor_style('https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap');
}
add_action( 'enqueue_block_editor_assets', 'prefix_block_styles' );

//* Loading editor styles for the block editor (Gutenberg)

add_editor_style('editor-style.css');
add_editor_style('https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap');


/*** Basic theme settings  ***/

function storezz_theme_setup() {
  if ( !isset( $content_width ) ) {
    $content_width = 1300;
  }
  register_nav_menus( array(
  	'primary' => __( 'Primary Menu', 'storezz' ),
  ) );
  register_nav_menus( array(
      'secondary' => __( 'Footer', 'storezz' ),
  ) );
  set_post_thumbnail_size(1000, 550, ['center', 'center'] );
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails', array( 'post', 'page', 'product' ) );
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
  add_theme_support( 'editor-styles' );
  add_theme_support( 'responsive-embeds' );
  add_theme_support( 'responsive-videos' );
  add_theme_support ('align-wide');
  add_theme_support ('align-full');
  add_theme_support(
      'custom-logo',
      array(
          'height'      => 100,
          'width'       => 200,
          'flex-width'  => true,
          'flex-height' => true,
      )
  );
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

add_action( 'after_setup_theme', 'storezz_theme_setup' );

/*** Comment reply form ***/

function storezz_enqueue_comment_reply_script() {
  if ( is_single() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
  };
}

add_action( 'comment_form_before', 'storezz_enqueue_comment_reply_script' );

/*** Widget areas ***/

function storezz_widgets_init() {
    register_sidebar( array(
        'name'          => 'Footer 1',
        'id'            => 'footer_1',
        'before_widget' => '<div class="storezz-footer-1">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'Footer 2',
        'id'            => 'footer_2',
        'before_widget' => '<div class="storezz-footer-2">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'Footer 3',
        'id'            => 'footer_3',
        'before_widget' => '<div class="storezz-footer-3">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'Footer 4',
        'id'            => 'footer_4',
        'before_widget' => '<div class="storezz-footer-4">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'Blog sidebar',
        'id'            => 'blog_sidebar',
        'before_widget' => '<div class="storezz-blog-sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'Single sidebar',
        'id'            => 'single_sidebar',
        'before_widget' => '<div class="storezz-single-sidebar>',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'Page sidebar',
        'id'            => 'page_sidebar',
        'before_widget' => '<div class="storezz-page-sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'Shop sidebar',
        'id'            => 'shop_sidebar',
        'before_widget' => '<div class="storezz-shop-sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'Product sidebar',
        'id'            => 'product_sidebar',
        'before_widget' => '<div class="storezz-product-sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
}

add_action( 'widgets_init', 'storezz_widgets_init' );

/*** Editor stylesheet for the theme ***/

function storezz_add_editor_styles() {
    add_editor_style( 'style.css' );
}
add_action( 'admin_init', 'storezz_add_editor_styles' );

/*** Required files ***/

require_once get_template_directory() . '/inc/class-storezz-menu-walker.php';
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
require_once get_template_directory() . '/inc/tgmpa-plugin.php';
require get_template_directory() . '/inc/breadcrumbs.php';
require get_template_directory() . '/inc/customizer.php';
if (class_exists('WooCommerce')) {
    require get_template_directory() . '/inc/woocommerce.php';
}

function storezz_add_woocommerce_support() {
    add_theme_support( 'woocommerce', array(
        'product_grid'          => array(
            'default_rows'    => 3,
            'min_rows'        => 2,
            'max_rows'        => 8,
            'default_columns' => 4,
            'min_columns'     => 2,
            'max_columns'     => 5,
        ),
    ) );
}

add_action( 'after_setup_theme', 'storezz_add_woocommerce_support' );

add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
