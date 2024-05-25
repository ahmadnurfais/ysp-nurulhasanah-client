<?php 
return array(
	'id'     => 'risehand_addons_volunteer_settings',
	'title'  => esc_html__( "Volunteer Settings", "risehand-addons" ),
	'fields' => array(  
        array(
            'title'    =>  esc_html__('Volunteer Position', 'risehand-addons') ,  
			'id'       => 'volunteer_position',
			'type'     => 'text', 
            'default'  =>  'CEO & Founder'
		), 
        array(
			'id'       => 'v_media_enable',
			'type'     => 'switch', 
			'title' => esc_html__('Media   Enable / Disable', 'risehand-addons') ,
			'default'  => false,
		), 
        array(
            'title'    =>  esc_html__('Media Text One', 'risehand-addons') ,  
			'id'       => 'v_media_one',
			'type'     => 'text', 
            'default'  =>  'fa fa-facebook' ,
			'required' => array('v_media_enable', '=', true),
		), 
        array(
            'title'    =>  esc_html__('Media One Link', 'risehand-addons') ,  
			'id'       => 'v_media_one_link',
			'type'     => 'text', 
            'default'  =>  'https://www.facebook.com',
			'required' => array('v_media_enable', '=', true),
		),
        array(
            'title'    =>  esc_html__('Media Text Two', 'risehand-addons') ,  
			'id'       => 'v_media_two',
			'type'     => 'text', 
            'default'  =>  'fa fa-instagram',
			'required' => array('v_media_enable', '=', true),
		), 
        array(
            'title'    =>  esc_html__('Media Two Link', 'risehand-addons') ,  
			'id'       => 'v_media_two_link',
			'type'     => 'text', 
            'default'  =>  'https://www.instagram.com',
			'required' => array('v_media_enable', '=', true),
		),
        array(
            'title'    =>  esc_html__('Media Text Three', 'risehand-addons') ,  
			'id'       => 'v_media_three',
			'type'     => 'text', 
            'default'  =>  'fa fa-twitter',
			'required' => array('v_media_enable', '=', true),
		), 
        array(
            'title'    =>  esc_html__('Media Three Link', 'risehand-addons') ,  
			'id'       => 'v_media_three_link',
			'type'     => 'text', 
            'default'  =>  'https://twitter.com',
			'required' => array('v_media_enable', '=', true),
		),
        array(
            'title'    =>  esc_html__('Media Text Four', 'risehand-addons') ,  
			'id'       => 'v_media_four',
			'type'     => 'text', 
            'default'  =>  'fa fa-skype',
			'required' => array('v_media_enable', '=', true),
		), 
        array(
            'title'    =>  esc_html__('Media One Four', 'risehand-addons') ,  
			'id'       => 'v_media_four_link',
			'type'     => 'text', 
            'default'  =>  'https://www.skype.com',
			'required' => array('v_media_enable', '=', true),
		), 
	),
);

