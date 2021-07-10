<?php
get_header();

$shop_layout = get_theme_mod( 'storezz-choose-shop-layout', 'layout_1' );
  ?>
  <?php if (is_shop() && $shop_layout === 'layout_1' ) { ?>
    <div style="height:200px;background-color:red;"></div>
  <?php } elseif (is_shop() && $shop_layout === 'layout_2' ) { ?>
    <div style="height:200px;background-color:blue;"></div>
<?php } ?>
<section id="main-content" class="container" role="main">
	<div class="row">
		<div class="col-12">
			<div id="content" class="<?php echo esc_attr($sidebar = is_active_sidebar( 'sidebar-woo' ) == true && is_shop() ? 'col-md-8' : 'col-md-12');  ?>">
				<div class="main-content-inner wooshop clearfix">
					<?php if ( have_posts() ) : ?>
						<?php woocommerce_content(); ?>
					<?php endif; ?>
				</div> <!-- close .col-sm-12 -->
			</div><!--/.row -->
			<?php
			if ( is_shop() || is_product() ) {
				get_sidebar();
			}
			?>

		</div><!--/.row -->
	</div><!--/.row -->
</section><!--/.row -->


<?php get_footer(); ?>
