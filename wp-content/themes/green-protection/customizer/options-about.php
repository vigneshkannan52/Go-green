<?php

add_action( 'init' , 'green_protection_about' );
function green_protection_about(){

	Kirki::add_section( 'green_protection_about', array(
        'title'   => esc_html__( 'About Us', 'green-protection' ),
        'section' => 'homepage'
    ) );

    Kirki::add_field( 'bizberg', [
		'type'        => 'checkbox',
		'settings'    => 'about_status',
		'label'       => esc_html__( 'Enable / Disable', 'green-protection' ),
		'section'     => 'green_protection_about',
		'default'     => false,
	] );

	Kirki::add_field( 'bizberg', [
		'type'        => 'text',
		'settings'    => 'about_title',
		'label'       => esc_html__( 'Title', 'green-protection' ),
		'section'     => 'green_protection_about',
		'default'     => esc_html__( 'WHO WE ARE', 'green-protection' ),
		'active_callback' => [
			[
				'setting'  => 'about_status',
				'operator' => '==',
				'value'    => true,
			]
		],
	] );

	Kirki::add_field( 'bizberg', [
		'type'        => 'text',
		'settings'    => 'about_subtitle',
		'label'       => esc_html__( 'Subtitle', 'green-protection' ),
		'section'     => 'green_protection_about',
		'default'     => esc_html__( 'Solar Innovations: Building a Greener Future', 'green-protection' ),
		'active_callback' => [
			[
				'setting'  => 'about_status',
				'operator' => '==',
				'value'    => true,
			]
		],
	] );

	Kirki::add_field( 'bizberg', [
		'type'        => 'image',
		'settings'    => 'about_image',
		'label'       => esc_html__( 'Image', 'green-protection' ),
		'section'     => 'green_protection_about',
		'active_callback' => [
			[
				'setting'  => 'about_status',
				'operator' => '==',
				'value'    => true,
			]
		],
	] );

	Kirki::add_field( 'bizberg', array(
    	'type'        => 'advanced-repeater',
    	'label'       => esc_html__( 'Services', 'green-protection' ),
	    'section'     => 'green_protection_about',
	    'settings'    => 'green_protection_about',
	    'active_callback' => [
			[
				'setting'  => 'about_status',
				'operator' => '==',
				'value'    => true,
			]
		],
	    'choices' => [
	        'button_label' => esc_html__( 'Add Services', 'green-protection' ),
	        'row_label' => [
	            'value' => esc_html__( 'Services', 'green-protection' ),
	        ],
	        'limit'  => 3,
	        'fields' => [
	        	'icon'  => [
	                'type'        => 'fontawesome',
	                'label'       => esc_html__( 'Icon', 'green-protection' ),
	                'default'     => 'fab fa-accusoft',
	                'choices'     => bizberg_get_fontawesome_options(),
	            ],
	            'page_id' => [
	                'type'        => 'select',
	                'label'       => esc_html__( 'Page', 'green-protection' ),
	                'choices'     => bizberg_get_all_pages()
	            ],
	        ],
	    ]
    ));

}