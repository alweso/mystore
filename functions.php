<?php


/**
 * Enqueue scripts and styles.
 */
function storezz_scripts() {
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/Bootstrap/css/bootstrap.min.css' );
  wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/Bootstrap/js/bootstrap.min.js', 'jquery', '3.3.6', true );
  wp_enqueue_style( 'storezz-style', get_stylesheet_uri(), 'bootstrap' );
  wp_enqueue_script('storezz_owl_carousel_scripts', get_template_directory_uri().'/assets/OwlCarousel/dist/owl.carousel.min.js', 'jquery', '3.3.6', true );
  wp_enqueue_style( 'storezz_owl_carousel_styles',  get_template_directory_uri() . '/assets/OwlCarousel/dist/assets/owl.carousel.min.css');
  wp_enqueue_style( 'storezz_owl_carousel_styles_demo',  get_template_directory_uri() . '/assets/OwlCarousel/dist/assets/owl.theme.default.min.css');
  wp_enqueue_style( ' wpblog_google_fonts ', 'https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap', false );
  wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), true );
}

add_action('wp_enqueue_scripts', 'storezz_scripts');

function storezz_theme_setup() {
  if ( ! isset( $content_width ) ) $content_width = 1300;
  register_nav_menus( array(
  	'primary' => __( 'Primary Menu', 'storezz' ),
  ) );
  register_nav_menus( array(
      'secondary' => __( 'Secondary Menu', 'storezz' ),
  ) );
  set_post_thumbnail_size(1200, 628, true);
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-formats', array('standard', 'aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio' ) );
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






require_once get_template_directory() . '/inc/class-wp-bootstrap-walker.php';

function storezz_widgets_init() {

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
        'name'          => 'sidebar 1',
        'id'            => 'sidebar_1',
        'before_widget' => '<div class="sidebar-1">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'sidebar 2',
        'id'            => 'sidebar_2',
        'before_widget' => '<div class="sidebar-2">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'sidebar 3',
        'id'            => 'sidebar_3',
        'before_widget' => '<div class="sidebar-3">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'sidebar 4',
        'id'            => 'sidebar_4',
        'before_widget' => '<div class="sidebar-4">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

}

add_action('widgets_init', 'storezz_widgets_init');



/**
 * Registers an editor stylesheet for the theme.
 */
function storezz_theme_add_editor_styles() {
    add_editor_style( 'style.css' );
}
add_action( 'admin_init', 'storezz_theme_add_editor_styles' );

add_action( 'wp_enqueue_scripts', 'storezz_site_scripts' );

function storezz_site_scripts() {
    wp_enqueue_script('masonry');
    wp_enqueue_script( 'site-script', get_template_directory_uri() . '/js/site-script.js', array(), false, true );
}

require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
require_once get_template_directory() . '/inc/tgmpa-plugin.php';



/**
 * Fetch image post objects for all gallery images in a post.
 *
 * @param $post_id
 *
 * @return array
 */


require get_template_directory() . '/inc/breadcrumbs.php';


/**
 * Show cart contents / total Ajax
 */
 add_filter('add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');

 function woocommerce_header_add_to_cart_fragment( $fragments ) {
     global $woocommerce;

     ob_start();

     ?>
     <a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
       <i class="fas fa-shopping-cart"></i>

       <?php echo WC()->cart->get_cart_contents_count(); ?>
     </a>

     <?php

     $fragments['a.cart-customlocation'] = ob_get_clean();

     return $fragments;

 }

require get_template_directory() . '/inc/woocommerce.php';

/**
* Customizer additions.
*/
require get_template_directory() . '/inc/customizer.php';
