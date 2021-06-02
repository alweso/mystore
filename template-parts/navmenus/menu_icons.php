<i class="fas fa-search storezz-search-trigger"></i>
<div class="storezz-search-form">
  <div class="storezz-search-form--inner">
    <?php get_search_form(); ?>
    <span class="storezz-search-close">
      Close
      <i class="fas fa-times"></i>
    </span>
  </div>
</div>
<a href="<?php echo get_permalink( wc_get_page_id( 'myaccount' )); ?>">
  <i class="fas fa-user"></i>
</a>
<a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
  <i class="fas fa-shopping-cart"></i>
  <?php echo WC()->cart->get_cart_contents_count(); ?>
</a>
