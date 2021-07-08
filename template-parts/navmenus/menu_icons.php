<i class="fas fa-search storezz-search-trigger"></i>
<div class="storezz-search-form-wrap">
  <div class="storezz-search-form-wrap--inner">
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
<a class="storezz-menu-cart" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart', 'storezz' ); ?>">
  <i class="fas fa-shopping-cart"></i>
  <?php echo WC()->cart->get_cart_contents_count(); ?>
</a>
