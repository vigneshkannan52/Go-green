<?php

add_filter( 'pt-ocdi/import_files', 'cdi_import_files' );
function cdi_import_files() {
    return array(
        array(
            'import_file_name'=> __('Education Business School Homepage','cdi'),
            'categories'      =>  array( 'Free' , 'Homepage' ),
            'local_import_file'=> CDI_PLUGIN_DIR_PATH . '/themes/education-business-school/inc/content.xml',
            'local_import_customizer_file' => CDI_PLUGIN_DIR_PATH . '/themes/education-business-school/inc/options.dat',
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/education-business/homepage-pro.jpg',            
            'preview_url' => 'https://bizbergthemes.com/education-business-pro/homepage-pro/'
        ),
        array(
            'import_file_name'=> __('Homepage PRO','cdi'),
            'categories'      =>  array( 'PRO' , 'Homepage' ),
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/education-business/homepage.jpg',
            'preview_url' => 'https://bizbergthemes.com/education-business-pro/'
        ),
        array(
            'import_file_name'=> __('Higher Education Business PRO','cdi'),
            'categories'      =>  array( 'PRO' , 'Homepage' ),
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/education-business/homepage-higher-education.jpg',
            'preview_url' => 'https://bizbergthemes.com/education-business-pro/higher-education-business-pro/'
        ),
        array(
            'import_file_name'=> __('Education Shop PRO','cdi'),
            'categories'      =>  array( 'PRO' , 'Homepage' ),
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/education-business/homepage-pro-shop.jpg',
            'preview_url' => 'https://bizbergthemes.com/education-business-pro/education-shop-pro/'
        ),
        array(
            'import_file_name'=> __('Homepage 5','cdi'),
            'categories'      =>  array( 'PRO' , 'Homepage' ),
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/education-business/home-5.jpg',
            'preview_url' => 'https://bizbergthemes.com/education-business-pro/homepage-5/'
        ),
        array(
            'import_file_name'=> __('Services','cdi'),
            'categories'      =>  array( 'PRO' , 'Pages' ),
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/education-business/services.jpg',
            'preview_url' => 'https://bizbergthemes.com/education-business-pro/services/'
        ),
        array(
            'import_file_name'=> __('Course List','cdi'),
            'categories'      =>  array( 'PRO' , 'Pages' ),
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/education-business/course-1.jpg',
            'preview_url' => 'https://bizbergthemes.com/education-business-pro/courses-1/'
        ),
        array(
            'import_file_name'=> __('Course Grid','cdi'),
            'categories'      =>  array( 'PRO' , 'Pages' ),
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/education-business/course-grid.jpg',
            'preview_url' => 'https://bizbergthemes.com/education-business-pro/courses-2/'
        ),
        array(
            'import_file_name'=> __('Event List','cdi'),
            'categories'      =>  array( 'PRO' , 'Pages' ),
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/education-business/event-list.jpg',
            'preview_url' => 'https://bizbergthemes.com/education-business-pro/event-listing-list/'
        ),
        array(
            'import_file_name'=> __('Event Grid','cdi'),
            'categories'      =>  array( 'PRO' , 'Pages' ),
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/education-business/event-grid.jpg',
            'preview_url' => 'https://bizbergthemes.com/education-business-pro/event-listing-grid/'
        ),
        array(
            'import_file_name'=> __('Meeting List','cdi'),
            'categories'      =>  array( 'PRO' , 'Pages' ),
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/education-business/meeting-list.jpg',
            'preview_url' => 'https://bizbergthemes.com/education-business-pro/meeting-1/'
        ),
        array(
            'import_file_name'=> __('Meeting Grid','cdi'),
            'categories'      =>  array( 'PRO' , 'Pages' ),
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/education-business/meeting-grid.jpg',
            'preview_url' => 'https://bizbergthemes.com/education-business-pro/meeting-2/'
        ),
        array(
            'import_file_name'=> __('Our Instructor','cdi'),
            'categories'      =>  array( 'PRO' , 'Pages' ),
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/education-business/our-instructor.jpg',
            'preview_url' => 'https://bizbergthemes.com/education-business-pro/instructor/'
        ),
        array(
            'import_file_name'=> __('Pricing Plan 1','cdi'),
            'categories'      =>  array( 'PRO' , 'Pages' ),
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/education-business/pricing-plan-1.jpg',
            'preview_url' => 'https://bizbergthemes.com/education-business-pro/pricing-plan-1/'
        ),
        array(
            'import_file_name'=> __('Pricing Plan 2','cdi'),
            'categories'      =>  array( 'PRO' , 'Pages' ),
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/education-business/pricing-plan-2.jpg',
            'preview_url' => 'https://bizbergthemes.com/education-business-pro/pricing-plan-2/'
        ),
        array(
            'import_file_name'=> __('Pricing Plan 3','cdi'),
            'categories'      =>  array( 'PRO' , 'Pages' ),
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/education-business/pricing-plan-3.jpg',
            'preview_url' => 'https://bizbergthemes.com/education-business-pro/pricing-plan-3/'
        ),
        array(
            'import_file_name'=> __('Gallery 1','cdi'),
            'categories'      =>  array( 'PRO' , 'Pages' ),
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/education-business/gallery-1.jpg',
            'preview_url' => 'https://bizbergthemes.com/education-business-pro/gallery-1/'
        ),
        array(
            'import_file_name'=> __('Gallery 2','cdi'),
            'categories'      =>  array( 'PRO', 'Pages' ),
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/education-business/gallery-2.jpg',
            'preview_url' => 'https://bizbergthemes.com/education-business-pro/gallery-2/'
        ),
        array(
            'import_file_name'=> __('Contact Us 1','cdi'),
            'categories'      =>  array( 'PRO', 'Pages' ),
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/education-business/contact-1.jpg',
            'preview_url' => 'https://bizbergthemes.com/education-business-pro/contact-us-1/'
        ),
        array(
            'import_file_name'=> __('Contact Us 2','cdi'),
            'categories'      =>  array( 'PRO' , 'Pages' ),
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/education-business/contact-2.jpg',
            'preview_url' => 'https://bizbergthemes.com/education-business-pro/contact-us-2/'
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

        case 'Education Business School Homepage':
             $front_page_id = get_page_by_title( 'Education Business School Homepage' );
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