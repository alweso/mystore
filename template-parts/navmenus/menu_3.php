<div class="container" style="background:green;">
  <div class="row">
    <div class="col-12">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
          <?php the_custom_logo() ?>
        </a>
        <div>
          <?php
            wp_nav_menu(array(
              'menu' => 'primary',
              'theme_location'    => 'primary',
              'container_id' => 'storezz-menu',
              'walker' => new Storezz_Menu_Walker()
            )); ?>
        </div>
      </nav>
      <?php get_search_form(); ?>
    </div>
    <a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart', 'storezz' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count(), 'storezz' ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?></a>
  </div>
</div>
