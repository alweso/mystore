<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Meta Store
 */
get_header();
?>

<main id="site-content" role="main" class="storezz-404 container">
    <div class="row">
        <div class="col-12">
            <h2 class="storezz-404_page-title"><?php echo esc_html__('404', 'storezz'); ?>
              <span>
                <?php echo esc_html__(' Page Not Found', 'storezz'); ?>
              </span>
            </h2>
            <p><?php echo esc_html__('The page you are looking for cannot be found.', 'storezz'); ?></p>
            <a href="<?php echo esc_url(get_home_url()); ?>" class="storezz-404_home-link">
              <?php echo esc_html__('Homepage', 'storezz'); ?>
            </a>
        </div>
    </div>
</main>
<?php
get_footer();
