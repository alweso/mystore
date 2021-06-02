<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <?php the_custom_logo(); ?>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php  /* menu */
    wp_nav_menu( array(
      'menu'              => 'primary',
      'theme_location'    => 'primary',
      'depth'             => 5,
      'container'         => 'div',
      'menu_class'        => 'navbar-nav mr-auto',
      'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
      'walker'            => new wp_bootstrap_navwalker())
    );
    ?>
    <?php get_search_form(); ?>
    <a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo WC()->cart->get_cart_contents_count(); ?></a>

  </div>
</nav>
