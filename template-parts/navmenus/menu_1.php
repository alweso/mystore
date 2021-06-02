<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <?php the_custom_logo(); ?>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="align-items: center;justify-content: center;">
    <?php  /* menu */
    wp_nav_menu( array(
      'menu'              => 'primary',
      'theme_location'    => 'primary',
      'depth'             => 5,
      'container'         => 'div',
      'menu_class'        => 'navbar-nav mr-auto',
      'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
      'walker'            => new wp_bootstrap_navwalker())
    );
    ?>
  </div>
  <div>
    <?php get_template_part( 'template-parts/navmenus/menu_icons'); ?>
  </div>
</nav>
