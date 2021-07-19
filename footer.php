<?php
/**
 * The template for displaying the footer
 * @since Storezz 1.0
 */

$copyright_text = get_theme_mod('storezz-copyright-text');
?>

<footer class="storezz-site-footer w-100">
	<div class="container">
		<div class="row">
			<div class="col-3">
				<?php dynamic_sidebar( 'footer_1' ); ?>
			</div>
			<div class="col-3">
				<?php dynamic_sidebar( 'footer_2' ); ?>
			</div>
			<div class="col-3">
				<?php dynamic_sidebar( 'footer_3' ); ?>
			</div>
			<div class="col-3">
				<?php dynamic_sidebar( 'footer_4' ); ?>
			</div>
			<div class="col-12">
				<?php echo '<p>' . esc_html( $copyright_text, 'storezz' ) . '</p>'?>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
