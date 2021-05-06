<article id="post-<?php the_ID(); ?>" <?php post_class('w-100 front-page-post'); ?>>
	<div class="big-wrapper">
	  <div class="wrapper wrapper--big">
			<?php if ( has_post_thumbnail() ) : ?>
			  <div>
			    <div class="thumbnail w-100">
			      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="widget-image d-block">
			        <?php the_post_thumbnail('large-horizontal', ['class' => 'img-fluid w-100', 'title' => 'Feature image']); ?>
			      </a>
			    </div>
			  </div>
			<?php endif; ?>
			<div class="description">
			  <div class="description-inner">
			      <div class="category">
			        <?php
			        $categories = get_the_category();
			        foreach ( $categories as $category ) {
			            echo '<span class="category-color">'.$category->name.'</span>';
			        }
			        ?>
			      </div>
			    <h4 class="news-title">
			      <?php if (has_post_format('video')) { ?>
			                <i class="fa fa-video"></i>
			    <?php  } elseif (has_post_format('gallery')) { ?>
			        <i class="fa fa-images"></i>
			  <?php  } ?>
			       <?php echo esc_html(wp_trim_words(get_the_title(), 10,'')); ?>
			    </h4>
			    <span class="comments-views-date">
			        <span class="comments">
			          <i class="fa fa-comment"></i><?php  echo get_comments_number(); ?>
			        </span>
			        <span class="date">
			          <i class="fa fa-calendar"></i><?php echo get_the_date('Y-m-d'); ?>
			        </span>
			        <span class="author">
			          <i class="fa fa-user-edit"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a>
			        </span>
			    </span>
			  </div>
			</div>
	  </div>
	</div>
</article>
