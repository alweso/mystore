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
  wp_enqueue_style( 'storezz_style', get_stylesheet_uri(), 'bootstrap' );
}

add_action( 'wp_enqueue_scripts', 'storezz_scripts_and_styles' );

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
  set_post_thumbnail_size( 850, 560, ['center', 'center'] );
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails', array( 'post', 'page', 'product' ) );
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
        'name'          => 'blog sidebar 1',
        'id'            => 'blog_sidebar_1',
        'before_widget' => '<div class="storezz-blog-sidebar-1">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'blog sidebar 2',
        'id'            => 'blog_sidebar_2',
        'before_widget' => '<div class="storezz-blog-sidebar-2">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'single sidebar 1',
        'id'            => 'single_sidebar_1',
        'before_widget' => '<div class="storezz-single-sidebar-1>',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'single sidebar 2',
        'id'            => 'single_sidebar_2',
        'before_widget' => '<div class="storezz-single-sidebar-2">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'page sidebar 1',
        'id'            => 'page_sidebar_1',
        'before_widget' => '<div class="storezz-page-sidebar-1">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'page sidebar 2',
        'id'            => 'page_sidebar_2',
        'before_widget' => '<div class="storezz-page-sidebar-2">',
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
