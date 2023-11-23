<?php

add_action( 'init' , 'green_protection_call_to_action1' );
function green_protection_call_to_action1(){

	Kirki::add_section( 'green_protection_call_to_action1', array(
        'title'   => esc_html__( 'Call to Action', 'green-protection' ),
        'section' => 'homepage'
    ) );

    Kirki::add_field( 'bizberg', [
		'type'        => 'checkbox',
		'settings'    => 'call_to_action_status',
		'label'       => esc_html__( 'Enable / Disable', 'green-protection' ),
		'section'     => 'green_protection_call_to_action1',
		'default'     => false,
	] );

	Kirki::add_field( 'bizberg', [
		'type'     => 'text',
		'settings' => 'call_to_action_subtitle',
		'label'    => esc_html__( 'Subtitle', 'green-protection' ),
		'default'  => esc_html__( 'Become a volunteer', 'green-protection' ),
		'section'  => 'green_protection_call_to_action1',
		'active_callback' => [
			[
				'setting'  => 'call_to_action_status',
				'operator' => '==',
				'value'    => true,
			]
		],
	] );

	Kirki::add_field( 'bizberg', [
		'type'     => 'select',
		'settings' => 'call_to_action_page',
		'label'    => esc_html__( 'Page', 'green-protection' ),
		'section'  => 'green_protection_call_to_action1',
		'choices'  => bizberg_get_all_pages(),
		'active_callback' => [
			[
				'setting'  => 'call_to_action_status',
				'operator' => '==',
				'value'    => true,
			]
		],
	] );

	Kirki::add_field( 'bizberg', array(
    	'type'        => 'advanced-repeater',
    	'label'       => esc_html__( 'Pages', 'green-protection' ),
	   'section'     => 'green_protection_call_to_action1',
	   'settings'    => 'green_protection_call_to_action1',
	   'active_callback' => [
			[
				'setting'  => 'call_to_action_status',
				'operator' => '==',
				'value'    => true,
			]
		],
	   'choices' => [
	   	'limit' => 2,
	      'button_label' => esc_html__( 'Add Pages', 'green-protection' ),
	      'row_label' => [
	         'value' => esc_html__( 'Pages', 'green-protection' ),
	      ],
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
            'image' => [
               'type'        => 'image',
               'label'       => esc_html__( 'Image', 'green-protection' ),
            ],
        ],
	   ]
   ));

}