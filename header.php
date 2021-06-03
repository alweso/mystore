<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
  <script src="https://kit.fontawesome.com/eb33fc95bf.js" crossorigin="anonymous"></script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open();
$navmenu = get_theme_mod( 'storezz-navmenu' );
if ($navmenu === "menu_1") {
get_template_part( 'template-parts/navmenus/menu_1');
} elseif ($navmenu === "menu_2") {
  get_template_part( 'template-parts/navmenus/menu_2');
} else {
  get_template_part( 'template-parts/navmenus/menu_3');
}

$smth = storezz_choose_smth();
echo 'aaaaaaaaaaaaaaaaaaaaaaa' . $smth['display_sticky_2'];


// check to see if the logo exists and add it to the page
if ( get_theme_mod( 'storezz-header-navmenu' ) ) : ?>

<img src="<?php echo get_theme_mod( 'storezz-header-navmenu' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" >
<h2>dddddddddddd<?php echo get_theme_mod( 'storezz-navmenu' )?></h2>
<?php // add a fallback if the logo doesn't exist
else : ?>

<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>

<?php endif;

?>
