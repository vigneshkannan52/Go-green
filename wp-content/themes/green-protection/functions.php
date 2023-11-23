<?php

require get_stylesheet_directory() . '/customizer/options-about.php';
require get_stylesheet_directory() . '/customizer/call-to-action.php';
require get_stylesheet_directory() . '/sections/about.php';
require get_stylesheet_directory() . '/sections/call-to-action.php';

add_action( 'wp_enqueue_scripts', 'green_protection_chld_thm_parent_css' );
function green_protection_chld_thm_parent_css() {

    wp_enqueue_style( 
    	'green_protection_chld_css', 
    	trailingslashit( get_template_directory_uri() ) . 'style.css', 
    	array( 
    		'bootstrap',
    		'font-awesome-5',
    		'bizberg-main',
    		'bizberg-component',
    		'bizberg-style2',
    		'bizberg-responsive' 
    	) 
    );

    if ( is_rtl() ) {
        wp_enqueue_style( 
            'green_protection_parent_rtl', 
            trailingslashit( get_template_directory_uri() ) . 'rtl.css'
        );
    }
    
}

add_action( 'after_setup_theme', 'green_protection_setup_theme' );
function green_protection_setup_theme() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
}

add_filter( 'bizberg_sidebar_settings', 'green_protection_sidebar_settings' );
function green_protection_sidebar_settings(){
    return '1';
}

add_filter( 'bizberg_footer_social_links' , 'green_protection_footer_social_links' );
function green_protection_footer_social_links(){
    return [];
}

add_filter( 'bizberg_link_color', 'green_protection_link_color' );
function green_protection_link_color(){
    return '#6ab43e';
}

add_filter( 'bizberg_theme_color', 'green_protection_change_theme_color' );
add_filter( 'bizberg_header_menu_color_hover_sticky_menu', 'green_protection_change_theme_color' );
add_filter( 'bizberg_header_button_color_sticky_menu', 'green_protection_change_theme_color' );
add_filter( 'bizberg_header_button_color_hover_sticky_menu', 'green_protection_change_theme_color' );
add_filter( 'bizberg_header_menu_color_hover', 'green_protection_change_theme_color' );
add_filter( 'bizberg_header_button_color', 'green_protection_change_theme_color' );
add_filter( 'bizberg_header_button_color_hover', 'green_protection_change_theme_color' );
add_filter( 'bizberg_slider_title_box_highlight_color', 'green_protection_change_theme_color' );
add_filter( 'bizberg_slider_arrow_background_color', 'green_protection_change_theme_color' );
add_filter( 'bizberg_slider_dot_active_color', 'green_protection_change_theme_color' );
add_filter( 'bizberg_read_more_background_color', 'green_protection_change_theme_color' );
add_filter( 'bizberg_read_more_background_color_2', 'green_protection_change_theme_color' );
add_filter( 'bizberg_link_color_hover', 'green_protection_change_theme_color' );
add_filter( 'bizberg_blog_listing_pagination_active_hover_color', 'green_protection_change_theme_color' );
add_filter( 'bizberg_sidebar_widget_link_color_hover', 'green_protection_change_theme_color' );
add_filter( 'bizberg_sidebar_widget_title_color', 'green_protection_change_theme_color' );
add_filter( 'bizberg_footer_social_icon_background', 'green_protection_change_theme_color' );
add_filter( 'bizberg_background_color_1', 'green_protection_change_theme_color' );
add_filter( 'bizberg_background_color_2', 'green_protection_change_theme_color' );
add_filter( 'bizberg_transparent_header_menu_color_hover', 'green_protection_change_theme_color' );
add_filter( 'bizberg_transparent_header_sticky_menu_color_hover', 'green_protection_change_theme_color' );
function green_protection_change_theme_color(){
    return '#6ab43e';
}

add_filter( 'bizberg_three_col_listing_radius', 'green_protection_three_col_listing_radius' );
function green_protection_three_col_listing_radius(){
    return '0';
}

add_filter( 'bizberg_transparent_header_homepage', 'green_protection_transparent_header_homepage' );
function green_protection_transparent_header_homepage(){
    return false;
}

add_filter( 'bizberg_transparent_navbar_background', 'green_protection_transparent_navbar_background' );
function green_protection_transparent_navbar_background(){
    return 'rgba(10,10,10,0)';
}

add_filter( 'bizberg_header_blur', 'green_protection_header_blur' );
function green_protection_header_blur(){
    return 0;
}

add_filter( 'bizberg_transparent_header_menu_sticky_background', 'green_protection_transparent_header_menu_sticky_background' );
add_filter( 'bizberg_transparent_header_menu_toggle_color_mobile', 'green_protection_transparent_header_menu_sticky_background' );
function green_protection_transparent_header_menu_sticky_background(){
    return '#fff';
}

add_filter( 'bizberg_transparent_header_menu_sticky_text_color', 'green_protection_transparent_header_menu_sticky_text_color' );
function green_protection_transparent_header_menu_sticky_text_color(){
    return '#64686d';
}

add_filter( 'bizberg_banner_spacing', 'green_protection_banner_spacing' );
function green_protection_banner_spacing(){
    return [
        'padding-top'    => '60px',
        'padding-bottom' => '60px',
        'padding-left'   => '150px',
        'padding-right'  => '150px',
    ];
}

add_filter( 'bizberg_banner_image', 'green_protection_banner_image' );
function green_protection_banner_image(){
    return [
        'background-color'      => 'rgba(20,20,20,.8)',
        'background-image'      => get_stylesheet_directory_uri() . '/img/architecture-structure-sky-technology-skyscraper-line-1397380-pxhere.com.jpg',
        'background-repeat'     => 'repeat',
        'background-position'   => 'center center',
        'background-size'       => 'cover',
        'background-attachment' => 'fixed'
    ];
}

add_filter( 'bizberg_banner_title', 'green_protection_banner_title' );
function green_protection_banner_title(){
    return current_user_can( 'edit_theme_options' ) ? esc_html__( "Sustainability in Every Shade of Green.", 'green-protection' ) : '';
}

add_filter( 'bizberg_banner_subtitle', 'green_protection_banner_subtitle' );
function green_protection_banner_subtitle(){
    return current_user_can( 'edit_theme_options' ) ? esc_html__( 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour.', 'green-protection' ) : '';
}

add_filter( 'bizberg_banner_title_font_status' , 'green_protection_banner_title_font_status' );
function green_protection_banner_title_font_status(){
    return true;
}

add_filter( 'bizberg_banner_title_font_desktop' , 'green_protection_banner_title_font_desktop' );
function green_protection_banner_title_font_desktop(){
    return [
        'font-family'    => 'Lato',
        'variant'        => '500',
        'font-size'      => '50px',
        'line-height'    => '1.1',
        'letter-spacing' => '0',
        'text-transform' => 'none'
    ];
}

add_filter( 'bizberg_banner_title_font_tablet' , 'green_protection_banner_title_font_tablet' );
function green_protection_banner_title_font_tablet(){
    return [
        'font-size'      => '70px',
        'line-height'    => '1',
        'letter-spacing' => '0'
    ];
}

add_filter( 'bizberg_banner_title_font_mobile' , 'green_protection_banner_title_font_mobile' );
function green_protection_banner_title_font_mobile(){
    return [
        'font-size'      => '55px',
        'line-height'    => '1',
        'letter-spacing' => '0'
    ];
}

add_filter( 'bizberg_banner_subtitle_font_status' , 'green_protection_banner_subtitle_font_status' );
function green_protection_banner_subtitle_font_status(){
    return true;
}

add_filter( 'bizberg_banner_subtitle_font_settings_desktop' , 'green_protection_banner_subtitle_font_settings_desktop' );
function green_protection_banner_subtitle_font_settings_desktop(){
    return [
        'font-family'    => 'Poppins',
        'variant'        => 'regular',
        'font-size'      => '16px',
        'line-height'    => '1.6',
        'letter-spacing' => '0',
        'text-transform' => 'none'
    ];
}

add_filter( 'bizberg_transparent_header_sticky_menu_toggle_color_mobile' , 'green_protection_transparent_header_sticky_menu_toggle_color_mobile' );
function green_protection_transparent_header_sticky_menu_toggle_color_mobile(){
    return '#434343';
}

add_filter( 'bizberg_site_title_font', 'green_protection_site_title_font' );
function green_protection_site_title_font(){
    return [
        'font-family'    => 'Montserrat',
        'variant'        => '600',
        'font-size'      => '23px',
        'line-height'    => '1.5',
        'letter-spacing' => '0',
        'text-transform' => 'uppercase',
        'text-align'     => 'left',
    ];
}

add_filter( 'bizberg_site_tagline_font', 'green_protection_site_tagline_font' );
function green_protection_site_tagline_font(){
    return [
        'font-family'    => 'Montserrat',
        'variant'        => '300',
        'font-size'      => '13px',
        'line-height'    => '1.5',
        'letter-spacing' => '0',
        'text-transform' => 'none',
        'text-align'     => 'left',
    ];
}

add_filter( 'bizberg_sidebar_spacing_status', 'green_protection_sidebar_spacing_status' );
function green_protection_sidebar_spacing_status(){
    return '0px';
}

add_filter( 'bizberg_sidebar_widget_border_color', 'green_protection_sidebar_widget_background_color' );
add_filter( 'bizberg_sidebar_widget_background_color', 'green_protection_sidebar_widget_background_color' );
function green_protection_sidebar_widget_background_color(){
    return 'rgba(251,251,251,0)';
}

add_filter( 'bizberg_sticky_header_status', 'green_protection_sticky_header_status' );
function green_protection_sticky_header_status(){
    return 'false';
}

add_filter( 'bizberg_sticky_sidebar_margin_top_status', 'green_protection_sticky_sidebar_margin_top_status' );
function green_protection_sticky_sidebar_margin_top_status(){
    return 20;
}

add_filter( 'bizberg_banner_text_position' , 'green_protection_banner_text_position' );
function green_protection_banner_text_position(){
    return 'center';
}

add_filter( 'bizberg_sticky_content_sidebar' , 'green_protection_sticky_content_sidebar' );
function green_protection_sticky_content_sidebar(){
    return false;
}

add_filter( 'bizberg_hide_homepage_page_title' , 'green_protection_hide_homepage_page_title' );
function green_protection_hide_homepage_page_title(){
    return 'none';
}

add_filter( 'bizberg_getting_started_screenshot', 'green_protection_getting_started_screenshot' );
function green_protection_getting_started_screenshot(){
    return true;
}

add_action( 'after_switch_theme', 'green_protection_switch_theme' );
function green_protection_switch_theme() {

    $flag = get_theme_mod( 'green_protection_copy_settings', false );

    if ( true === $flag ) {
        return;
    }

    foreach( Kirki::$fields as $field ) {
        set_theme_mod( $field["settings"],$field["default"] );
    }

    //Set flag
    set_theme_mod( 'green_protection_copy_settings', true );
    
}