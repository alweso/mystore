<?php
get_header();

$shop_layout = get_theme_mod( 'storezz-choose-shop-layout', 'layout_1' );
$product_layout = get_theme_mod( 'storezz-choose-product-layout', 'horizontal' );

if ( is_shop() && $shop_layout === 'layout_1' ) :
  add_filter('loop_shop_columns', 'loop_columns', 999);
if (!function_exists('loop_columns')) {
 function loop_columns() {
   return 2; // 3 products per row
 }
}
endif;
  ?>

  <?php if (is_shop() && $shop_layout === 'layout_1' ) { ?>
    <div style="height:200px;background-color:red;">

    </div>
  <?php } elseif (is_shop() && $shop_layout === 'layout_2' ) { ?>
    <div style="height:200px;background-color:blue;"></div>
<?php }

if (is_product()) :?>
<section id="main-content" class="container storezz-product-<?php echo $product_layout; ?>" role="main">
<?php else : ?>
<section id="main-content" class="container" role="main">
<?php endif; ?>
	<div class="row">
    <?php if (is_shop() && $shop_layout === 'layout_1' ) :  ?>
		<div class="col-9">
    <?php else : ?>
    <div class="col-12">
  <?php endif ?>
			<div id="content">
        <?php woocommerce_breadcrumb();
        if ( have_posts() ) :
           woocommerce_content();
        endif; ?>
			</div><!--/.row -->
		</div><!--/.row -->
    <?php

    if ( is_shop() && $shop_layout === 'layout_1' ) :
      get_sidebar();
    endif;

    ?>
	</div><!--/.row -->
</section><!--/.row -->


<?php get_footer(); ?>
