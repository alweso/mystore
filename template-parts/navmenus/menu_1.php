<div class="container">
  <div class="row">
    <div class="col-12">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
          <?php the_custom_logo(); ?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="align-items: center;justify-content: center;">
          <?php
            wp_nav_menu(array(
              'menu' => 'primary',
              'theme_location'    => 'primary',
              'container_id' => 'storezz-menu',
              'walker' => new Storezz_Menu_Walker()
            )); ?>
        </div>
        <div>
          <?php get_template_part( 'template-parts/navmenus/menu_icons'); ?>
        </div>
      </nav>
    </div>
  </div>
</div>
