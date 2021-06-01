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
$menuOptions = storezz_display_notification_bar();
if ($menuOptions['display_sticky'] === "red") {
get_template_part( 'template-parts/navmenus/menu_1');
} elseif ($menuOptions['display_sticky'] === "blue") {
  get_template_part( 'template-parts/navmenus/menu_2');
} else {
  get_template_part( 'template-parts/navmenus/menu_3');
}

?>
