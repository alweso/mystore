<?php
/* -------------------- Product opening wrapper ---------------------------------------------------------- */

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
add_action('woocommerce_before_main_content', 'storezz_opening_wrapper', 5);

function storezz_opening_wrapper() {
  global $product;
  if( is_product() ) :
    $product = wc_get_product( get_the_id() );
    $attachment_ids = $product->get_gallery_image_ids();
    $product_layout = get_theme_mod( 'storezz-choose-product-layout' );
  endif;

  if (is_product() && !empty($attachment_ids) ) : ?>
  <?php else : ?>
    <section id="main-content" class="container" role="main">
  <?php endif;
}

/* -------------------- Shop columns ---------------------------------------------------------- */

add_filter('loop_shop_columns', 'storezz_loop_columns', 999);

if ( !function_exists('storezz_loop_columns') ) :
  function storezz_loop_columns() {
  $shop_layout = get_theme_mod( 'storezz-choose-shop-layout', 'layout_1' );
  if ( $shop_layout === 'layout_1' || $shop_layout === 'layout_2' ) :
    return 2;
  elseif ( $shop_layout === 'layout_3' || $shop_layout === 'layout_4' || $shop_layout === 'layout_5' ):
    return 3;
  elseif ( $shop_layout === 'layout_6' ):
    return 4;
  elseif ( $shop_layout === 'layout_7' ):
    return 5;
  endif;
  }
endif;

/* -------------------- Adding opening Bootstrap divs ---------------------------------------------------------- */

add_action('woocommerce_before_shop_loop', 'storezz_add_bootstrap_opening', 4);

function storezz_add_bootstrap_opening() {
  remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
  $shop_layout = get_theme_mod( 'storezz-choose-shop-layout' );
  echo '<div class="row">';
  if ( is_shop() && ( $shop_layout === 'layout_1' || $shop_layout === 'layout_2' || $shop_layout === 'layout_3' || $shop_layout === 'layout_4' ) ) :
    get_sidebar();
    echo '<div class="col-9">';
  else :
    echo '<div class="col-12">';
  endif;
}

/* -------------------- Closing Bootstrap divs ---------------------------------------------------------- */

add_action('woocommerce_after_shop_loop', 'storezz_add_bootstrap_closing', 3);

function storezz_add_bootstrap_closing() {
$shop_layout = get_theme_mod( 'storezz-choose-shop-layout' );
echo '</div>';
if ( is_shop() && $shop_layout === 'layout_1' ) :
  get_sidebar();
endif;
echo '</div>';
}

/* -------------------- Add to cart ajaxify ---------------------------------------------------------- */

add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

function woocommerce_header_add_to_cart_fragment( $fragments ) {
  global $woocommerce;
  ob_start();
  ?>
  <?php echo '<a class="storezz-menu-cart" href="' . esc_url(wc_get_cart_url()) . '" title="' . esc_attr_e('View your shopping cart', 'storezz') . '">' . sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'storezz'), $woocommerce->cart->cart_contents_count) .  '–' . $woocommerce->cart->get_cart_total() . '</a>'; ?>
  <?php
  $fragments['a.storezz-menu-cart'] = ob_get_clean();
  return $fragments;
}

/* -------------------- Removing reviews title  ---------------------------------------------------------- */

add_filter( 'woocommerce_reviews_title', 'storezz_reviews_heading', 10, 3 );
function storezz_reviews_heading( $heading, $count, $product ) {
  return '';
}
?>
