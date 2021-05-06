
<?php
get_header();

?>
<section id="main-content" class="blog main-container" role="main">
	<div class="container">
     <div class="row">
       <!-- <?php get_sidebar();  ?> -->
			<div class="col-8">
				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'template-parts/blog/contents/content', get_post_format() ); ?>
					<?php endwhile; ?>

					<h2><?php the_posts_pagination(); ?></h2>
				<?php else : ?>

				<?php endif; ?>
			</div><!-- .col-md-8 -->

         <?php get_sidebar();  ?>
		</div><!-- .row -->
	</div><!-- .container -->
</section><!-- #main-content -->
<?php get_footer(); ?>
