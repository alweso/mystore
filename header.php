<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
  <script src="https://kit.fontawesome.com/eb33fc95bf.js" crossorigin="anonymous"></script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="container">
  <div class="row">
    <div class="col-12">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
          <?php the_custom_logo() ?>
        </a>
        <div>
          <?php
          wp_nav_menu( array(
          	'theme_location'  => 'primary',
          	'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
          	'container'       => 'div',
          	'container_class' => 'collapse navbar-collapse',
          	'container_id'    => 'bs-example-navbar-collapse-1',
          	'menu_class'      => 'navbar-nav mr-auto',
          	'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          	'walker'          => new WP_Bootstrap_Navwalker(),
          ) ); ?>
        </div>
      </nav>
      <?php get_search_form(); ?>
    </div>
    <a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?></a>
  </div>
</div>
