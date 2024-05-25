<?php
return array(
	'id'     => 'risehand_header_settings',
	'title'  => esc_html__( "General Settings", "risehand-addons" ),
	'fields' => array(
		array(
			'id'       => 'custom_header',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Style', 'risehand-addons' ),
			'default'  => false,
		),
		array(
			'id'    => 'header_settings_meta',
			'type'  => 'select',
			'title' => esc_html__( 'Choose Header Style', 'risehand-addons' ),
			'options' => risehand_default_query('header'),
			'required' => array( 'custom_header', '=', true ),
		), 
		array(
			'id'       => 'sticky_custom_header',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Sticky Header Style', 'risehand-addons' ),
			'default'  => false,
		),
		array(
			'id'    => 'sticky_header_settings_meta',
			'type'  => 'select',
			'title' => esc_html__( 'Choose Sticky Header Style', 'risehand-addons' ),
			'options' => risehand_default_query('header'),
			'required' => array( 'sticky_custom_header', '=', true ),
		),
		array(
			'id'       => 'custom_footer',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Style', 'risehand-addons' ),
			'default'  => false,
		),
		array(
			'id'    => 'footer_settings_meta',
			'type'  => 'select',
			'title' => esc_html__( 'Choose Footer Style', 'risehand-addons' ),
			'options' => risehand_default_query('footer'),
			'required' => array( 'custom_footer', '=', true ),
		),

		array(
			'id'       => 'custom_layout',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Custom Layout', 'risehand-addons' ),
			'default'  => false,
		),
		array(
			'title' => esc_html__('Choose Layout', 'risehand-addons') ,
			'id' => 'layout',
			'type' => 'image_select',
			'options' => array(
				'no-sidebar' => get_template_directory_uri() . '/assets/images/full-width.png',
				'right-sidebar' => get_template_directory_uri() . '/assets/images/right-sidebar.png',
				'left-sidebar' => get_template_directory_uri() . '/assets/images/left-sidebar.png',
			) ,
			'required' => array( 'custom_layout', '=', true ),
		) ,

		array(
			'id'       => 'custom_sidebarwidgets',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Sidebar Widgets ', 'risehand-addons' ),
			'default'  => false,
		),
		array(
			'title' => esc_html__('Choose Sidebar Widgets to display on this page', 'risehand-addons') ,
			'id' => 'choose_sidebar_widgets',
			'type' => 'select',
			'options' => array(
				'sidebar-blog' => esc_html__('Blog Sidebar', 'risehand-addons') ,
				'page-sidebar' => esc_html__('Page Sidebar', 'risehand-addons') ,
				'portfolio-sidebar' => esc_html__('Portfolio Sidebar', 'risehand-addons') ,
				'service-sidebar' => esc_html__('Service Sidebar', 'risehand-addons') ,
				'shop-sidebar' => esc_html__('Shop Sidebar', 'risehand-addons') ,
				'shop-single-sidebar' => esc_html__('Shop Single Sidebar', 'risehand-addons') , 
			) ,
			'default'  => 'page-sidebar',
			'required' => array( 'custom_sidebarwidgets', '=', true ),
		) ,
		 
		 
	),
);