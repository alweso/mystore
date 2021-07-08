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

/**
 * Opening div for our content wrapper
 */
add_action('woocommerce_before_main_content', 'iconic_open_div', 5);

function iconic_open_div() {
    echo '<div class="iconic-div">';
}

/**
 * Closing div for our content wrapper
 */
add_action('woocommerce_after_main_content', 'iconic_close_div', 50);

function iconic_close_div() {
    echo '</div>';
}

add_action( 'woocommerce_sidebar', 'boostrapit' );

function boostrapit() {
    echo '<div class="bootstrapit">';
}



/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<a class="storezz-menu-cart" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> – <?php echo $woocommerce->cart->get_cart_total(); ?></a>
	<?php
	$fragments['a.storezz-menu-cart'] = ob_get_clean();
	return $fragments;
}

// add_action( 'woocommerce_before_main_content', 'shopppp' );
// function shopppp() {
//     echo '<div class="shopppp">';
// }
function woocommerce_variable_add_to_cart() {
        global $product, $post;
        $variations = $product->get_available_variations();
        foreach ($variations as $key => $value) {
        ?>
        <form action="<?php echo esc_url( $product->add_to_cart_url() ); ?>"method="post" enctype='multipart/form-data'>
            <input type="hidden" name="variation_id" value="<?php echo $value['variation_id']?>" />
            <input type="hidden" name="product_id" value="<?php echo esc_attr( $post->ID ); ?>" />
            <?php
            if(!empty($value['attributes'])){
                foreach ($value['attributes'] as $attr_key => $attr_value) {
                ?>
                <input type="hidden" name="<?php echo $attr_key?>" value="<?php echo $attr_value?>">
                <?php
                }
            }
            ?>
            <table>
                <tbody>
                    <tr>
                        <td>
                            <b><?php echo implode('/', $value['attributes']);?></b>
                        </td>
                        <td>
                            <?php echo $value['price_html'];?>
                        </td>
                        <td>
                            <button type="submit" class="single_add_to_cart_button button alt"><?php echo apply_filters('single_add_to_cart_text', __( 'Add to cart', 'woocommerce' ), $product->get_type()); ?></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
        <?php
        }}
