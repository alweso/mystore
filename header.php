<?php
/**
* Header file Storezz theme.
*
* @since Storezz 1.0
*/

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <script
  type="text/javascript"
  src="https://use.fontawesome.com/releases/v5.15.4/js/conflict-detection.js">
</script>
  <?php wp_body_open();
  if ( get_theme_mod( 'storezz-header-navmenu' ) ) :
    $navmenu = get_theme_mod( 'storezz-navmenu' );
    if ( $navmenu === "menu_1" ) {
      get_template_part( 'template-parts/navmenus/menu_1' );
    } elseif ($navmenu === "menu_2") {
      get_template_part( 'template-parts/navmenus/menu_2' );
    } else {
      get_template_part( 'template-parts/navmenus/menu_3' );
    }
  endif;
?>
