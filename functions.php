<?php
function bootstrapstarter_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
    wp_enqueue_style( 'bootstrapstarter-style', get_stylesheet_uri(), $dependencies );
}

function bootstrapstarter_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '3.3.6', true );
}
function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'style-name',  get_template_directory_uri() . '/fontawesome-free-5.11.2-web/css/all.css');
}

function my_theme_scripts() {
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0.0', true );
}

function menheer_add_google_fonts() {
wp_enqueue_style( ' wpblog_google_fonts ', 'https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap', false );
}


function owl_carousel_styles() {
    wp_enqueue_style( 'owl_carousel_styles',  get_template_directory_uri() . '/assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css');
    wp_enqueue_style( 'owl_carousel_styles_demo',  get_template_directory_uri() . '/assets/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css');

    }

function owl_carousel_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('owl_carousel_scripts', get_template_directory_uri().'/assets/OwlCarousel2-2.3.4/dist/owl.carousel.min.js', $dependencies, '3.3.6', true );
}

add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_scripts' );
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );
add_action( 'wp_enqueue_scripts', 'owl_carousel_scripts' );
add_action( 'wp_enqueue_scripts', 'owl_carousel_styles' );
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );
add_action( 'wp_enqueue_scripts', 'menheer_add_google_fonts' );

function bootstrapstarter_wp_setup() {
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'bootstrapstarter_wp_setup' );

// add_action( 'init', 'bootstrapstarter_register_menu' );

function bootstrapstarter_widgets_init() {

    register_sidebar( array(
        'name'          => 'Footer 1',
        'id'            => 'footer_1',
        'before_widget' => '<div class="">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'Footer 2',
        'id'            => 'footer_2',
        'before_widget' => '<div class="">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'Footer 3',
        'id'            => 'footer_3',
        'before_widget' => '<div class="">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'Sidebar - Inset',
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="sidebar-module sidebar-module-inset">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'Sidebar - Default',
        'id'            => 'sidebar-2',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

}
add_action( 'widgets_init', 'bootstrapstarter_widgets_init' );
add_theme_support( 'post-formats', array('standard', 'aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio' ) );
add_theme_support( 'post-thumbnails', array( 'post', 'page', 'product' ) ); // Posts and Pages
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
add_theme_support(
    'custom-logo',
    array(
        'height'      => 100,
        'width'       => 200,
        'flex-width'  => true,
        'flex-height' => true,
    )
);

if ( ! isset( $content_width ) ) $content_width = 1300;


register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'personal-blog' ),
) );
register_nav_menus( array(
    'secondary' => __( 'Secondary Menu', 'personal-blog' ),
) );


function themename_custom_header_setup() {
    $args = array(
        'default-image'      => get_template_directory_uri() . 'img/default-image.jpg',
        'default-text-color' => '000',
        'width'              => 1000,
        'height'             => 250,
        'flex-width'         => true,
        'flex-height'        => true,
    );
    add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'themename_custom_header_setup' );


add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {

set_post_thumbnail_size(1200, 628, true);
    // Add featured image sizes


}

/**
 * Registers an editor stylesheet for the theme.
 */
function wpdocs_theme_add_editor_styles() {
    add_editor_style( 'style.css' );
}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );

add_action( 'wp_enqueue_scripts', 'site_scripts' );

function site_scripts() {
    wp_enqueue_script('masonry');
    wp_enqueue_script( 'site-script', get_template_directory_uri() . '/js/site-script.js', array(), false, true );
}





require_once get_template_directory() . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'personal_blog_register_required_plugins' );

function personal_blog_register_required_plugins() {
  /*
   * Array of plugin arrays. Required keys are name and slug.
   * If the source is NOT from the .org repo, then source is also required.
   */
  $plugins = array(

    // This is an example of how to include a plugin bundled with a theme.
    array(
            'name' => 'Elementor', // The plugin name.
            'slug' => 'elementor', // The plugin slug (typically the folder name).
            'required' => true, // If false, the plugin is only 'recommended' instead of required.
        ),
        array(
                'name' => 'WooCommerce', // The plugin name.
                'slug' => 'woocommerce', // The plugin slug (typically the folder name).
                'required' => true, // If false, the plugin is only 'recommended' instead of required.
            ),
     array(
            'name' => 'ElementsKit Lite', // The plugin name.
            'slug' => 'elementskit-lite', // The plugin slug (typically the folder name).
            'required' => true, // If false, the plugin is only 'recommended' instead of required.
        ),
    array(
            'name' => 'Ad Inserter', // The plugin name.
            'slug' => 'ad-inserter', // The plugin slug (typically the folder name).
            'required' => true, // If false, the plugin is only 'recommended' instead of required.
        ),
    array(
            'name' => 'Smart Slider 3', // The plugin name.
            'slug' => 'smart-slider-3', // The plugin slug (typically the folder name).
            'required' => true, // If false, the plugin is only 'recommended' instead of required.
        ),
    array(
            'name' => 'Unyson', // The plugin name.
            'slug' => 'unyson', // The plugin slug (typically the folder name).
            'required' => true, // If false, the plugin is only 'recommended' instead of required.
        ),
    array(
      'name'               => 'Advanced Custom Fields Pro', // The plugin name.
      'slug'               => 'advanced-custom-fields-pro', // The plugin slug (typically the folder name).
      'source'             => get_template_directory() . '/inc/plugins/advanced-custom-fields-pro.zip', // The plugin source.
      'required'           => true, // If false, the plugin is only 'recommended' instead of required.
    ),
  );

  /*
   * Array of configuration settings. Amend each line as needed.
   *
   * TGMPA will start providing localized text strings soon. If you already have translations of our standard
   * strings available, please help us make TGMPA even better by giving us access to these translations or by
   * sending in a pull-request with .po file(s) with the translations.
   *
   * Only uncomment the strings in the config array if you want to customize the strings.
   */
  $config = array(
    'id'           => 'personal-blog',                 // Unique ID for hashing notices for multiple instances of TGMPA.
    'default_path' => '',                      // Default absolute path to bundled plugins.
    'menu'         => 'tgmpa-install-plugins', // Menu slug.
    'has_notices'  => true,                    // Show admin notices or not.
    'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
    'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
    'is_automatic' => false,                   // Automatically activate plugins after installation or not.
    'message'      => '',                      // Message to output right before the plugins table.

    /*
    'strings'      => array(
      'page_title'                      => __( 'Install Required Plugins', 'personal-blog' ),
      'menu_title'                      => __( 'Install Plugins', 'personal-blog' ),
      /* translators: %s: plugin name. * /
      'installing'                      => __( 'Installing Plugin: %s', 'personal-blog' ),
      /* translators: %s: plugin name. * /
      'updating'                        => __( 'Updating Plugin: %s', 'personal-blog' ),
      'oops'                            => __( 'Something went wrong with the plugin API.', 'personal-blog' ),
      'notice_can_install_required'     => _n_noop(
        /* translators: 1: plugin name(s). * /
        'This theme requires the following plugin: %1$s.',
        'This theme requires the following plugins: %1$s.',
        'personal-blog'
      ),
      'notice_can_install_recommended'  => _n_noop(
        /* translators: 1: plugin name(s). * /
        'This theme recommends the following plugin: %1$s.',
        'This theme recommends the following plugins: %1$s.',
        'personal-blog'
      ),
      'notice_ask_to_update'            => _n_noop(
        /* translators: 1: plugin name(s). * /
        'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
        'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
        'personal-blog'
      ),
      'notice_ask_to_update_maybe'      => _n_noop(
        /* translators: 1: plugin name(s). * /
        'There is an update available for: %1$s.',
        'There are updates available for the following plugins: %1$s.',
        'personal-blog'
      ),
      'notice_can_activate_required'    => _n_noop(
        /* translators: 1: plugin name(s). * /
        'The following required plugin is currently inactive: %1$s.',
        'The following required plugins are currently inactive: %1$s.',
        'personal-blog'
      ),
      'notice_can_activate_recommended' => _n_noop(
        /* translators: 1: plugin name(s). * /
        'The following recommended plugin is currently inactive: %1$s.',
        'The following recommended plugins are currently inactive: %1$s.',
        'personal-blog'
      ),
      'install_link'                    => _n_noop(
        'Begin installing plugin',
        'Begin installing plugins',
        'personal-blog'
      ),
      'update_link'             => _n_noop(
        'Begin updating plugin',
        'Begin updating plugins',
        'personal-blog'
      ),
      'activate_link'                   => _n_noop(
        'Begin activating plugin',
        'Begin activating plugins',
        'personal-blog'
      ),
      'return'                          => __( 'Return to Required Plugins Installer', 'personal-blog' ),
      'plugin_activated'                => __( 'Plugin activated successfully.', 'personal-blog' ),
      'activated_successfully'          => __( 'The following plugin was activated successfully:', 'personal-blog' ),
      /* translators: 1: plugin name. * /
      'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'personal-blog' ),
      /* translators: 1: plugin name. * /
      'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'personal-blog' ),
      /* translators: 1: dashboard link. * /
      'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'personal-blog' ),
      'dismiss'                         => __( 'Dismiss this notice', 'personal-blog' ),
      'notice_cannot_install_activate'  => __( 'There are one or more required or recommended plugins to install, update or activate.', 'personal-blog' ),
      'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'personal-blog' ),

      'nag_type'                        => '', // Determines admin notice type - can only be one of the typical WP notice classes, such as 'updated', 'update-nag', 'notice-warning', 'notice-info' or 'error'. Some of which may not work as expected in older WP versions.
    ),
    */
  );

  tgmpa( $plugins, $config );
}


/**
 * Fetch image post objects for all gallery images in a post.
 *
 * @param $post_id
 *
 * @return array
 */

 /**
  * Load WooCommerce compatibility file.
  */
 if (class_exists('WooCommerce')) {
     require get_template_directory() . '/inc/woocommerce.php';
 }

 add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);

function my_wp_nav_menu_objects( $items, $args ) {

	// loop
	foreach( $items as &$item ) {

		// vars
		$badge_text = get_field('badge_text', $item);


		// append icon
		if( $badge_text ) {

			$item->title .= '<span style="display:inline-block;margin-left:5px;color:white;padding:0 7px;background-color:' . get_field('badge_color', $item) . '">'. $badge_text .'</span>';

		}

	}


	// return
	return $items;

}

// Breadcrums

function storezz_breadcrumbs() {

    // Settings
    $separator          = '&gt;';
    $breadcrums_id      = 'breadcrumbs';
    $breadcrums_class   = 'breadcrumbs';
    $home_title         = 'Homepage';

    // If you have any custom post types with custom taxonomies, put the taxonomy name below (e.g. product_cat)
    $custom_taxonomy    = 'product_cat';

    // Get the query & post information
    global $post,$wp_query;

    // Do not display on the homepage
    if ( !is_front_page() ) {

        // Build the breadcrums
        echo '<ul id="' . $breadcrums_id . '" class="' . $breadcrums_class . '">';

        // Home page
        echo '<li class="item-home"><a class="bread-link bread-home" href="' . get_home_url() . '" title="' . $home_title . '">' . $home_title . '</a></li>';
        echo '<li class="separator separator-home"> ' . $separator . ' </li>';

        if ( is_archive() && !is_tax() && !is_category() && !is_tag() ) {

            echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . post_type_archive_title($prefix, false) . '</strong></li>';

        } else if ( is_archive() && is_tax() && !is_category() && !is_tag() ) {

            // If post is a custom post type
            $post_type = get_post_type();

            // If it is a custom post type display name and link
            if($post_type != 'post') {

                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);

                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';

            }

            $custom_tax_name = get_queried_object()->name;
            echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . $custom_tax_name . '</strong></li>';

        } else if ( is_single() ) {

            // If post is a custom post type
            $post_type = get_post_type();

            // If it is a custom post type display name and link
            if($post_type != 'post') {

                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);

                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';

            }

            // Get post category info
            $category = get_the_category();

            if(!empty($category)) {

                // Get last category post is in
                $last_category = end(array_values($category));

                // Get parent any categories and create array
                $get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','),',');
                $cat_parents = explode(',',$get_cat_parents);

                // Loop through parent categories and store in variable $cat_display
                $cat_display = '';
                foreach($cat_parents as $parents) {
                    $cat_display .= '<li class="item-cat">'.$parents.'</li>';
                    $cat_display .= '<li class="separator"> ' . $separator . ' </li>';
                }

            }

            // If it's a custom post type within a custom taxonomy
            $taxonomy_exists = taxonomy_exists($custom_taxonomy);
            if(empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists) {

                $taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
                $cat_id         = $taxonomy_terms[0]->term_id;
                $cat_nicename   = $taxonomy_terms[0]->slug;
                $cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
                $cat_name       = $taxonomy_terms[0]->name;

            }

            // Check if the post is in a category
            if(!empty($last_category)) {
                echo $cat_display;
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';

            // Else if post is in a custom taxonomy
            } else if(!empty($cat_id)) {

                echo '<li class="item-cat item-cat-' . $cat_id . ' item-cat-' . $cat_nicename . '"><a class="bread-cat bread-cat-' . $cat_id . ' bread-cat-' . $cat_nicename . '" href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';

            } else {

                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';

            }

        } else if ( is_category() ) {

            // Category page
            echo '<li class="item-current item-cat"><strong class="bread-current bread-cat">' . single_cat_title('', false) . '</strong></li>';

        } else if ( is_page() ) {

            // Standard page
            if( $post->post_parent ){

                // If child page, get parents
                $anc = get_post_ancestors( $post->ID );

                // Get parents in the right order
                $anc = array_reverse($anc);

                // Parent page loop
                if ( !isset( $parents ) ) $parents = null;
                foreach ( $anc as $ancestor ) {
                    $parents .= '<li class="item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
                    $parents .= '<li class="separator separator-' . $ancestor . '"> ' . $separator . ' </li>';
                }

                // Display parent pages
                echo $parents;

                // Current page
                echo '<li class="item-current item-' . $post->ID . '"><strong title="' . get_the_title() . '"> ' . get_the_title() . '</strong></li>';

            } else {

                // Just display current page if not parents
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</strong></li>';

            }

        } else if ( is_tag() ) {

            // Tag page

            // Get tag information
            $term_id        = get_query_var('tag_id');
            $taxonomy       = 'post_tag';
            $args           = 'include=' . $term_id;
            $terms          = get_terms( $taxonomy, $args );
            $get_term_id    = $terms[0]->term_id;
            $get_term_slug  = $terms[0]->slug;
            $get_term_name  = $terms[0]->name;

            // Display the tag name
            echo '<li class="item-current item-tag-' . $get_term_id . ' item-tag-' . $get_term_slug . '"><strong class="bread-current bread-tag-' . $get_term_id . ' bread-tag-' . $get_term_slug . '">' . $get_term_name . '</strong></li>';

        } elseif ( is_day() ) {

            // Day archive

            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';

            // Month link
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('m') . '"> ' . $separator . ' </li>';

            // Day display
            echo '<li class="item-current item-' . get_the_time('j') . '"><strong class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</strong></li>';

        } else if ( is_month() ) {

            // Month Archive

            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';

            // Month display
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><strong class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</strong></li>';

        } else if ( is_year() ) {

            // Display year archive
            echo '<li class="item-current item-current-' . get_the_time('Y') . '"><strong class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</strong></li>';

        } else if ( is_author() ) {

            // Auhor archive

            // Get the author information
            global $author;
            $userdata = get_userdata( $author );

            // Display author name
            echo '<li class="item-current item-current-' . $userdata->user_nicename . '"><strong class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</strong></li>';

        } else if ( get_query_var('paged') ) {

            // Paginated archives
            echo '<li class="item-current item-current-' . get_query_var('paged') . '"><strong class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.__('Page') . ' ' . get_query_var('paged') . '</strong></li>';

        } else if ( is_search() ) {

            // Search results page
            echo '<li class="item-current item-current-' . get_search_query() . '"><strong class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Search results for: ' . get_search_query() . '</strong></li>';

        } elseif ( is_404() ) {

            // 404 page
            echo '<li>' . 'Error 404' . '</li>';
        }

        echo '</ul>';

    }

}
