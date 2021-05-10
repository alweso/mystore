<?php
/**
* Template Name: Blog grid 2 sidebar left
* Template Post Type: page
* @package WordPress
* @subpackage personal-blog
* @since personal-blog 1.0
*/ ?>
<?php get_header(); ?>
<div class="container">
	<div class="row">
    <div class="col-12">
      <header class="page-header">
				<h1 class="page-title mt-4 mb-4">Buahahahhahaha</h1>
			</header><!-- .page-header -->
    </div>
      <div class="col-2">
          <?php get_sidebar(); ?>
      </div>
		<div class="col-10">
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
						<div class="col-4"><?php get_template_part( 'template-parts/archive-post/content', get_post_format() ); ?></div>
						<?php
					}
				}?>
			</div>
		</div><!-- /.blog-main -->
  </div> <!-- / .row -->
</div> <!-- / .container -->
<?php get_footer(); ?>
