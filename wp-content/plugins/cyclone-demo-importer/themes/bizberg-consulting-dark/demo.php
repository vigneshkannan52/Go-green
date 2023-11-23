<?php

add_filter( 'pt-ocdi/import_files', 'cdi_import_files' );
function cdi_import_files() {
    return array(
        array(
            'import_file_name'             => __('Bizberg Consulting Dark Lite Free','cdi'),
            'categories'                   =>  array( 'Free' , 'Homepage' ),
            'local_import_file'            => CDI_PLUGIN_DIR_PATH . '/themes/bizberg-consulting-dark/inc/content.xml',
            'local_import_customizer_file' => CDI_PLUGIN_DIR_PATH . '/themes/bizberg-consulting-dark/inc/options.dat',
            'import_preview_image_url'     => CDI_PLUGIN_DIR_URL . '/assets/images/bizberg-consulting-dark/homepage-1.jpg',
            'preview_url'                  => 'https://bizbergthemes.com/bizberg-consulting-dark-pro/'
        ),
        array(
            'import_file_name'             => __('Bizberg Consulting Dark Homepage 2','cdi'),
            'categories'                   =>  array( 'PRO' , 'Homepage' ),
            'import_preview_image_url'     => CDI_PLUGIN_DIR_URL . '/assets/images/bizberg-consulting-dark/homepage-2.jpg',
            'preview_url'                  => 'https://bizbergthemes.com/bizberg-consulting-dark-pro/bizberg-consulting-dark-pro-homepage-2/'
        ),
        array(
            'import_file_name'             => __('About US','cdi'),
            'categories'                   =>  array( 'PRO' , 'Pages' ),
            'import_preview_image_url'     => CDI_PLUGIN_DIR_URL . '/assets/images/bizberg-consulting-dark/about-us.jpg',
            'preview_url'                  => 'https://bizbergthemes.com/bizberg-consulting-dark-pro/about-us/'
        ),
        array(
            'import_file_name'             => __('Services','cdi'),
            'categories'                   =>  array( 'PRO' , 'Pages' ),
            'import_preview_image_url'     => CDI_PLUGIN_DIR_URL . '/assets/images/bizberg-consulting-dark/services.jpg',
            'preview_url'                  => 'https://bizbergthemes.com/bizberg-consulting-dark-pro/services/'
        ),
        array(
            'import_file_name'             => __('Projects','cdi'),
            'categories'                   =>  array( 'PRO' , 'Pages' ),
            'import_preview_image_url'     => CDI_PLUGIN_DIR_URL . '/assets/images/bizberg-consulting-dark/projects.jpg',
            'preview_url'                  => 'https://bizbergthemes.com/bizberg-consulting-dark-pro/projects/'
        ),
        array(
            'import_file_name'             => __('Pricing Table','cdi'),
            'categories'                   =>  array( 'PRO' , 'Pages' ),
            'import_preview_image_url'     => CDI_PLUGIN_DIR_URL . '/assets/images/bizberg-consulting-dark/pricing-table.jpg',
            'preview_url'                  => 'https://bizbergthemes.com/bizberg-consulting-dark-pro/pricing-table/'
        ),
        array(
            'import_file_name'             => __('Our People','cdi'),
            'categories'                   =>  array( 'PRO' , 'Pages' ),
            'import_preview_image_url'     => CDI_PLUGIN_DIR_URL . '/assets/images/bizberg-consulting-dark/team.jpg',
            'preview_url'                  => 'https://bizbergthemes.com/bizberg-consulting-dark-pro/our-people/'
        ),
        array(
            'import_file_name'             => __('Gallery','cdi'),
            'categories'                   =>  array( 'PRO' , 'Pages' ),
            'import_preview_image_url'     => CDI_PLUGIN_DIR_URL . '/assets/images/bizberg-consulting-dark/gallery.jpg',
            'preview_url'                  => 'https://bizbergthemes.com/bizberg-consulting-dark-pro/gallery/'
        ),
    );
}

add_action( 'pt-ocdi/after_import', 'cdi_after_import_setup' );
function cdi_after_import_setup( $selected_import ) {

    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'menu-1' => $main_menu->term_id,
        )
    );

    $import_file_name = $selected_import['import_file_name'];

    switch ( $import_file_name ) {

        case 'Bizberg Consulting Dark Lite Free':
             $front_page_id = get_page_by_title( 'Bizberg Consulting Dark Lite Free' );
            break;
        
        default:
            # code...
            break;
    }

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );

    // Change elementor options
    update_option( 'elementor_disable_color_schemes' , 'yes' );
    update_option( 'elementor_disable_typography_schemes' , 'yes' );
    update_option( 'elementor_page_title_selector' , 'h3.blog-title' );

    cdi_set_elementor_active_kit();

}

function cdi_set_elementor_active_kit(){

    $args = array(
        'post_type' => 'elementor_library',
        'numberposts' => 1,
        'post_status' => 'publish',
        'name' => 'default-kit-cyclone'
    );

    $my_posts = get_posts($args);
    if( $my_posts ) :
        update_option( 'elementor_active_kit',  absint( $my_posts[0]->ID ) );
    endif;

}

function cdi_register_plugins( $plugins ) {

    $theme_plugins = [
        [ 
          'name'     => 'Contact Form 7', 
          'slug'     => 'contact-form-7', 
          'required' => true,             
        ],
        [ 
          'name'     => 'Elementor Page Builder', 
          'slug'     => 'elementor', 
          'required' => true,             
        ],
        [ 
          'name'     => 'Essential Addons for Elementor', 
          'slug'     => 'essential-addons-for-elementor-lite', 
          'required' => true,             
        ],
    ];
 
    return $theme_plugins;

}
add_filter( 'ocdi/register_plugins', 'cdi_register_plugins' );