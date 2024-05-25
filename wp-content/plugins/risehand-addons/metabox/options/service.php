<?php
return array(
	'id'     => 'risehand_addons_service_settings',
	'title'  => esc_html__( "Service Settings", "risehand-addons" ),
	'fields' => array( 
		array(
			'id'       => 'service_icon_type',
			'type'     => 'button_set',
			'title' => esc_html__( 'Choose Icon Type', 'risehand-addons' ), 
			//Must provide key => value pairs for options
			'options' => array(
				'icon' => 'Icon', 
				'image' => 'Image' 
			 ), 
			'default' => 'icon'
		),
        array(
			'id'    => 'ser_icon',
			'type'  => 'select',
			'title' => esc_html__( 'Choose Icon', 'risehand-addons' ),
			'options' => get_risehand_icons(),
			'required' => array( 'service_icon_type', '=', 'icon' ),
		), 
        array(
            'id'       => 'ser_icon_img',
            'type'     => 'media', 
            'url'      => true,
            'default'  => array(
                'url'=>  get_template_directory_uri().'/assets/images/icon.png', 
            ),
            'title'    => __('Icon Image', 'risehand-addons'),
            'required' => array('service_icon_type', '=', 'image'),
        ), 
	),
);

