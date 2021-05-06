<?php
get_header(); ?>

<?php if (is_page_template( 'blog-grid-4.php' )) {
  $columns = 'col-3';
} else if (is_page_template( 'blog-grid-3.php' ) || is_page_template( 'blog-grid-3-sidebar-right.php' ) || is_page_template( 'blog-grid-3-sidebar-left.php' )) {
  $columns = 'col-4';
} else if (is_page_template( 'blog-grid-2.php' ) || is_page_template( 'blog-grid-2-sidebar-right.php' )  || is_page_template( 'blog-grid-2-sidebar-left.php' )) {
  $columns = 'col-6';
}; ?>

<?php if (is_page_template( 'blog-grid-4.php' ) || is_page_template( 'blog-grid-3.php' )) {
  $sidebar_right = false;
} else if (is_page_template( 'blog-grid-2-sidebar-right.php' ) || is_page_template( 'blog-grid-3-sidebar-right.php' )) {
  $sidebar_right = true;
}; ?>

<?php if (is_page_template( 'blog-grid-4.php' ) || is_page_template( 'blog-grid-3.php' )) {
  $sidebar_left = false;
} else if (is_page_template( 'blog-grid-2-sidebar-left.php' ) || is_page_template( 'blog-grid-3-sidebar-left.php' )) {
  $sidebar_left = true;
}; ?>

<?php if (is_page_template( 'blog-grid-4.php' ) || is_page_template( 'blog-grid-3.php' )) {
  $main_column = 'col-12';
} else if (is_page_template( 'blog-grid-2-sidebar-right.php' ) || is_page_template( 'blog-grid-3-sidebar-right.php' )  || is_page_template( 'blog-grid-2-sidebar-left.php' )  || is_page_template( 'blog-grid-3-sidebar-left.php' )) {
  $main_column = 'col-10';
}; ?>

<div class="container">
	<div class="row">
    <div class="col-12">
      <header class="page-header">
				<h1 class="page-title mt-4 mb-4">Blog</h1>
			</header><!-- .page-header -->
    </div>
    <?php if($sidebar_left) { ?>
      <div class="col-2">
          <?php get_sidebar(); ?>
      </div>
    <?php } ?>
		<div class="<?php echo $main_column ?>">
			<div class="row">
				<?php
				$args = array(
					'post_type' => 'post',
				);

				$post_query = new WP_Query($args);
				if($post_query->have_posts() ) {
					while($post_query->have_posts() ) {
						$post_query->the_post();
						?>
						<div class="<?php echo $columns ?>"><?php get_template_part( 'template-parts/archive-post/content', get_post_format() ); ?></div>
						<?php
					}
				}?>
			</div>
		</div><!-- /.blog-main -->
    <?php if($sidebar_right) { ?>
      <div class="col-2">
          <?php get_sidebar(); ?>
      </div>
    <?php } ?>
  </div> <!-- / .row -->
</div> <!-- / .container -->
<?php get_footer(); ?>
