<?php
/**
* Template Name: Just a  Page
* Template Post Type: page
* @package WordPress
* @subpackage personal-blog
* @since personal-blog 1.0
*/

get_header(); ?>

<div class="">
      <?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				the_content();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End of the loop.
			?>


</div> <!-- / .container -->
<?php get_footer(); ?>
