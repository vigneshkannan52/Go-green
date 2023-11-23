<?php

add_filter( 'pt-ocdi/import_files', 'cdi_import_files' );
function cdi_import_files() {
    return array(
        array(
            'import_file_name'=> __('Agency','cdi'),
            'categories'      =>  array( 'Free' , 'Homepage' ),
            'local_import_file'=> CDI_PLUGIN_DIR_PATH . '/themes/bizberg-lite/inc/content.xml',
            'local_import_customizer_file' => CDI_PLUGIN_DIR_PATH . '/themes/bizberg-lite/inc/options.dat',
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/bizberg/agency-free-1.jpg',
            'preview_url' => 'https://bizbergthemes.com/bizberg-pro/'
        ),
        array(
            'import_file_name'=> __('Agency 2','cdi'),
            'categories'      =>  array( 'Free' , 'Homepage' ),
            'local_import_file'=> CDI_PLUGIN_DIR_PATH . '/themes/bizberg-lite/inc/content.xml',
            'local_import_customizer_file' => CDI_PLUGIN_DIR_PATH . '/themes/bizberg-lite/inc/options.dat',
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/bizberg/agency-free-2.jpg',
            'preview_url' => 'https://bizbergthemes.com/bizberg-pro/agency-homepage-2/'
        ),
        array(
            'import_file_name'=> __('Agency 3','cdi'),
            'categories'      =>  array( 'Free' , 'Homepage' ),
            'local_import_file'=> CDI_PLUGIN_DIR_PATH . '/themes/bizberg-lite/inc/content.xml',
            'local_import_customizer_file' => CDI_PLUGIN_DIR_PATH . '/themes/bizberg-lite/inc/options.dat',
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/bizberg/agency-free-3.jpg',
            'preview_url' => 'https://bizbergthemes.com/bizberg-pro/individual-consulting-homepage/'
        ),
        array(
            'import_file_name'=> __('Construction','cdi'),
            'categories'      =>  array( 'Free' , 'Homepage' ),
            'local_import_file'=> CDI_PLUGIN_DIR_PATH . '/themes/building-construction-architecture/inc/content.xml',
            'local_import_customizer_file' => CDI_PLUGIN_DIR_PATH . '/themes/building-construction-architecture/inc/options.dat',
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/building-construction-architecture/homepage.jpg',
            'preview_url' => 'https://bizbergthemes.com/building-construction-architecture-pro/'
        ),
        array(
            'import_file_name'=> __('Construction PRO Slider','cdi'),
            'categories'      =>  array( 'PRO' , 'Homepage' ),
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/building-construction-architecture/homepage-pro.jpg',
            'preview_url' => 'https://bizbergthemes.com/building-construction-architecture-pro/homepage-pro/'
        ),
        array(
            'import_file_name'=> __('Medical','cdi'),
            'categories'      =>  array( 'Free' , 'Homepage' ),
            'local_import_file'=> CDI_PLUGIN_DIR_PATH . '/themes/dr-life-saver-lite/inc/content.xml',
            'local_import_customizer_file' => CDI_PLUGIN_DIR_PATH . '/themes/dr-life-saver-lite/inc/options.dat',
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/dr-life-saver/homepage.jpg',
            'preview_url' => 'https://bizbergthemes.com/dr-life-saver-pro/'
        ),
        array(
            'import_file_name'=> __('Medical PRO Banner','cdi'),
            'categories'      =>  array( 'PRO' , 'Homepage' ),
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/dr-life-saver/homepage-2.jpg',
            'preview_url' => 'https://bizbergthemes.com/dr-life-saver-pro/homepage-pro/'
        ),
        array(
            'import_file_name'=> __('Medical PRO Slider','cdi'),
            'categories'      =>  array( 'PRO' , 'Homepage' ),
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/dr-life-saver/homepage-3.jpg',
            'preview_url' => 'https://bizbergthemes.com/dr-life-saver-pro/homepage-pro-2/'
        ),
        array(
            'import_file_name'=> __('Education','cdi'),
            'categories'      =>  array( 'Free' , 'Homepage' ),
            'local_import_file'=> CDI_PLUGIN_DIR_PATH . '/themes/education-business-lite/inc/content.xml',
            'local_import_customizer_file' => CDI_PLUGIN_DIR_PATH . '/themes/education-business-lite/inc/options.dat',
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/education-business/homepage.jpg',
            'preview_url' => 'https://bizbergthemes.com/education-business-pro/'
        ),
        array(
            'import_file_name'=> __('Education 1 PRO','cdi'),
            'categories'      =>  array( 'PRO' , 'Homepage' ),
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/education-business/homepage-pro.jpg',
            'preview_url' => 'https://bizbergthemes.com/education-business-pro/homepage-pro/'
        ),
        array(
            'import_file_name'=> __('Education 2','cdi'),
            'categories'      =>  array( 'Free' , 'Homepage' ),
            'local_import_file'=> CDI_PLUGIN_DIR_PATH . '/themes/professional-education-consultancy-lite/inc/content.xml',
            'local_import_customizer_file' => CDI_PLUGIN_DIR_PATH . '/themes/professional-education-consultancy-lite/inc/options.dat',
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/professional-education-consultancy/homepage.jpg',
            'preview_url' => 'https://bizbergthemes.com/professional-education-consultancy-pro/'
        ),
        array(
            'import_file_name'=> __('Education 2 Banner 2','cdi'),
            'categories'      =>  array( 'PRO' , 'Homepage' ),
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/professional-education-consultancy/homepage-2.jpg',
            'preview_url' => 'https://bizbergthemes.com/professional-education-consultancy-pro/homepage-pro/'
        ),
        array(
            'import_file_name'=> __('Education 2 Banner 3','cdi'),
            'categories'      =>  array( 'PRO' , 'Homepage' ),
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/professional-education-consultancy/homepage-3.jpg',
            'preview_url' => 'https://bizbergthemes.com/professional-education-consultancy-pro/homepage-pro-2/'
        ),
        array(
            'import_file_name'=> __('Education 2 Banner 4','cdi'),
            'categories'      =>  array( 'PRO' , 'Homepage' ),
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/professional-education-consultancy/homepage-4.jpg',
            'preview_url' => 'https://bizbergthemes.com/professional-education-consultancy-pro/homepage-pro-3/'
        ),
        array(
            'import_file_name'=> __('Education 2 Slider 1','cdi'),
            'categories'      =>  array( 'PRO' , 'Homepage' ),
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/professional-education-consultancy/homepage-5.jpg',
            'preview_url' => 'https://bizbergthemes.com/professional-education-consultancy-pro/homepage-slider/'
        ),
        array(
            'import_file_name'=> __('Nature','cdi'),
            'categories'      =>  array( 'Free' , 'Homepage' ),
            'local_import_file'=> CDI_PLUGIN_DIR_PATH . '/themes/green-eco-planet/inc/content.xml',
            'local_import_customizer_file' => CDI_PLUGIN_DIR_PATH . '/themes/green-eco-planet/inc/options.dat',
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/green-eco-planet/homepage.jpg',
            'preview_url' => 'https://bizbergthemes.com/green-eco-planet-pro/'
        ),
        array(
            'import_file_name'=> __('Nature Banner 2','cdi'),
            'categories'      =>  array( 'PRO' , 'Homepage' ),
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/green-eco-planet/homepage-pro.jpg',
            'preview_url' => 'https://bizbergthemes.com/green-eco-planet-pro/homepage-pro/'
        ),
        array(
            'import_file_name'=> __('Nature Slider 1','cdi'),
            'categories'      =>  array( 'PRO' , 'Homepage' ),
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/green-eco-planet/homepage-slider-1.jpg',
            'preview_url' => 'https://bizbergthemes.com/green-eco-planet-pro/homepage-slider-1/'
        ),
        array(
            'import_file_name'=> __('Nature Slider 2','cdi'),
            'categories'      =>  array( 'PRO' , 'Homepage' ),
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/green-eco-planet/homepage-slider-2.jpg',
            'preview_url' => 'https://bizbergthemes.com/green-eco-planet-pro/homepage-slider-2/'
        ),
        array(
            'import_file_name'=> __('Wedding','cdi'),
            'categories'      =>  array( 'Free' , 'Homepage' ),
            'local_import_file'=> CDI_PLUGIN_DIR_PATH . '/themes/happy-wedding-day-lite/inc/content.xml',
            'local_import_customizer_file' => CDI_PLUGIN_DIR_PATH . '/themes/happy-wedding-day-lite/inc/options.dat',
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/happy-wedding-day/homepage.jpg',
            'preview_url' => 'https://bizbergthemes.com/happy-wedding-day-pro/'
        ),
        array(
            'import_file_name'=> __('Wedding Slider','cdi'),
            'categories'      =>  array( 'PRO' , 'Homepage' ),
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/happy-wedding-day/homepage-pro.jpg',
            'preview_url' => 'https://bizbergthemes.com/happy-wedding-day-pro/homepage-pro/'
        ),
        array(
            'import_file_name'=> __('Charity','cdi'),
            'categories'      =>  array( 'Free' , 'Homepage' ),
            'local_import_file'=> CDI_PLUGIN_DIR_PATH . '/themes/ngo-charity-fundraising-lite/inc/content.xml',
            'local_import_customizer_file' => CDI_PLUGIN_DIR_PATH . '/themes/ngo-charity-fundraising-lite/inc/options.dat',
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/ngo-charity-fundraising-lite/homepage.jpg',
            'preview_url' => 'https://bizbergthemes.com/ngo-charity-fundraising-pro/'
        ),
        array(
            'import_file_name'=> __('Charity Slider','cdi'),
            'categories'      =>  array( 'PRO' , 'Homepage' ),
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/ngo-charity-fundraising-lite/homepage-pro.jpg',
            'preview_url' => 'https://bizbergthemes.com/ngo-charity-fundraising-pro/homepage-pro/'
        ),
        array(
            'import_file_name'=> __('Restaurant','cdi'),
            'categories'      =>  array( 'Free' , 'Homepage' ),
            'local_import_file'=> CDI_PLUGIN_DIR_PATH . '/themes/pizza-hub-lite/inc/content.xml',
            'local_import_customizer_file' => CDI_PLUGIN_DIR_PATH . '/themes/pizza-hub-lite/inc/options.dat',
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/pizza-hub/homepage.jpg',
            'preview_url' => 'https://bizbergthemes.com/pizza-hub-pro/'
        ),
        array(
            'import_file_name'=> __('Restaurant Banner','cdi'),
            'categories'      =>  array( 'PRO' , 'Homepage' ),
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/pizza-hub/homepage-pro-1.jpg',
            'preview_url' => 'https://bizbergthemes.com/pizza-hub-pro/homepage-pro/'
        ),
        array(
            'import_file_name'=> __('Restaurant Slider','cdi'),
            'categories'      =>  array( 'PRO' , 'Homepage' ),
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/pizza-hub/homepage-pro-2.jpg',
            'preview_url' => 'https://bizbergthemes.com/pizza-hub-pro/homepage-pro-2/'
        ),
        array(
            'import_file_name'=> __('Business Event Free','cdi'),
            'categories'      =>  array( 'Free' , 'Homepage' ),
            'local_import_file'=> CDI_PLUGIN_DIR_PATH . '/themes/business-event-lite/inc/content.xml',
            'local_import_customizer_file' => CDI_PLUGIN_DIR_PATH . '/themes/business-event-lite/inc/options.dat',
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/business-event/homepage.jpg',
            'preview_url' => 'https://bizbergthemes.com/business-event-pro/'
        ),
        array(
            'import_file_name'=> __('Business Event Dark Version','cdi'),
            'categories'      =>  array( 'PRO' , 'Homepage' ),
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/business-event/homepage-2.jpg',
            'preview_url' => 'https://bizbergthemes.com/business-event-pro/business-event-1-pro-dark/'
        ),
        array(
            'import_file_name'=> __('Business Event Dark Version 2','cdi'),
            'categories'      =>  array( 'PRO' , 'Homepage' ),
            'import_preview_image_url'   => CDI_PLUGIN_DIR_URL . '/assets/images/business-event/homepage-3.jpg',
            'preview_url' => 'https://bizbergthemes.com/business-event-pro/business-event-homepage-2/'
        ),
    );
}

add_action( 'pt-ocdi/after_import', 'cdi_after_import_setup' );
function cdi_after_import_setup( $selected_import ) {

    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
    $footer_menu = get_term_by( 'name', 'Footer Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'menu-1' => $main_menu->term_id,
            'footer' => $footer_menu->term_id
        )
    );

    $import_file_name = $selected_import['import_file_name'];

    switch ( $import_file_name ) {

        case 'Agency':
            $front_page_id = get_page_by_title( 'Agency Homepage 1' );
            break;

        case 'Agency 2':
            $front_page_id = get_page_by_title( 'Agency Homepage 2' );
            break;

        case 'Agency 3':
            $front_page_id = get_page_by_title( 'Individual Consulting Homepage' );
            cdi_set_page_theme_mod( 'individual-consulting-homepage' );
            break;

        case 'Construction':
            $front_page_id = get_page_by_title( 'Homepage Free' );
            cdi_set_page_theme_mod( 'construction-free' );
            break;

        case 'Medical':
            $front_page_id = get_page_by_title( 'Homepage Free' );
            cdi_set_page_theme_mod( 'dr-life-saver-free' );
            break;

        case 'Education':
            $front_page_id = get_page_by_title( 'Homepage Free' );
            cdi_set_page_theme_mod( 'education-business-free' );
            break;

        case 'Education 2':
            $front_page_id = get_page_by_title( 'Homepage Free' );
            cdi_set_page_theme_mod( 'professional-education-consultancy-free' );
            break;

        case 'Nature':
            $front_page_id = get_page_by_title( 'Homepage Free' );
            cdi_set_page_theme_mod( 'nature-free' );
            break;

        case 'Wedding':
            $front_page_id = get_page_by_title( 'Homepage Free' );
            cdi_set_page_theme_mod( 'wedding-free' );
            break;

        case 'Charity':
            $front_page_id = get_page_by_title( 'Homepage Free' );
            cdi_set_page_theme_mod( 'charity-free' );
            break;

        case 'Restaurant':
            $front_page_id = get_page_by_title( 'Restaurant' );
            cdi_set_page_theme_mod( 'restaurant-free' );
            break;

        case 'Business Event Free':
            $front_page_id = get_page_by_title( 'Business Event Free' );
            cdi_set_page_theme_mod( 'business-event-free' );
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