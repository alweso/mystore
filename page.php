<?php
/**
 * The template for displaying all pages
 *
 * @package Meta Store
 */
get_header();
?>

<div id="ms-primary" class="ms-content-area">

    <?php
    while (have_posts()) :
        the_post();

        get_template_part('template-parts/content', 'page'); ?>
        <h1><?php echo get_post_meta(get_the_ID(), 'meta_store_sidebar_layout')[0]; ?></h1>
        <?php echo '<pre>'; var_dump(get_post_meta(get_the_ID())); echo '</pre>';
        // If comments are open or we have at least one comment, load up the comment template.
        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;

    endwhile; // End of the loop.
    ?>

</div>

<?php
get_sidebar();
get_footer();
