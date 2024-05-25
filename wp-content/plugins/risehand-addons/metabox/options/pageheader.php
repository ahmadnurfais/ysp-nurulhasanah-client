<?php
return array(
	'id'     => 'risehand_pageheader_settings',
	'title'  => esc_html__( "Page Header Settings", "risehand" ),
	'fields' => array(
		array(
			'id'       => 'page_header_enable_disable',
			'type'     => 'switch',
			'title'    => esc_html__( 'Page Header Disable', 'risehand-addons' ),
			'default'  => false, 
		), 
		array(
			'id'       => 'hide_breadcrumb',
			'type'     => 'switch',
			'title'    => esc_html__( 'Breadcrumb Enable / Disable', 'risehand-addons' ),
			'default'  => true,
			'required' => array( 'page_header_enable_disable', '=', true ),
			'desc' =>  esc_html__( 'Here  (Switch Off) is Disable and (Switch On) is Enable', 'risehand-addons' ),
		),
		array(
			'id'       => 'page_header_style_enable',
			'type'     => 'switch',
			'title'    => esc_html__( 'Page Header Style', 'risehand-addons' ),
			'default'  => false, 
		), 
		array(
			'id'       => 'page_header_title',
			'type'     => 'textarea',
			'title'    =>  esc_html__('Page Header Title', 'risehand-addons') ,
			'desc'     => esc_html__( 'Enter the title to show in Page Header section', 'risehand-addons' ),
			'required' => array( 'page_header_style_enable', '=', true ),
		),
		array(
			'id'       => 'page_header_bgcolor_enable',
			'type'     => 'switch',
			'title'    => esc_html__( 'Page Header Bakground Color Enable / Disable', 'risehand-addons' ),
			'default'  => false,
			'required' => array( 'page_header_style_enable', '=', true),
			'desc' =>  esc_html__( 'Here  (Switch Off) is Disable and (Switch On) is Enable', 'risehand-addons' ),
		),
		array(
			'id'       => 'page_header_bgcolor',
			'type'     => 'color',
			'title'    => esc_html__( 'Page Header Background Color', 'risehand-addons' ),
			'desc'     => esc_html__( 'Change Background Color for Page Header', 'risehand-addons' ),
			'required' => array( 'page_header_bgcolor_enable', '=', true ),
		),
		array(
			'id'       => 'page_header_bgovcolor',
			'type'     => 'color',
			'title'    => esc_html__( 'Page Header Image Overlay Color', 'risehand-addons' ),
			'desc'     => esc_html__( 'Change Overlay Color for Page Header', 'risehand-addons' ),
			'required' => array( 'page_header_bgcolor_enable', '=', true ),
		),
		array(
			'id'       => 'page_header_bg_image_shows',
			'type'     => 'switch',
			'title'    => esc_html__( 'Page Header Image Enable / Disable', 'risehand-addons' ),
			'default'  => false,
			'required' => array( 'page_header_style_enable', '=', true ),
			'desc' =>  esc_html__( 'Here  (Switch Off) is Disable and (Switch On) is Enable', 'risehand-addons' ),
		), 
		array(
			'id'       => 'page_header_bgimages',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Page Header Background Image', 'risehand-addons' ),
			'desc'     => esc_html__( 'Insert Background Image for Page Header', 'risehand-addons' ),
			'required' => array( 'page_header_bg_image_shows', '=', true ),
		),
	
		array(
			'id'       => 'page_header_custom_style',
			'type'     => 'switch',
			'title'    => esc_html__( 'Custom Style Enable / Disable', 'risehand-addons' ),
			'default'  => false,
			'required' => array( 'page_header_style_enable', '=', true),
			'desc' =>  esc_html__( 'Here  (Switch Off) is Disable and (Switch On) is Enable', 'risehand-addons' ),
		),


		array(
			'id'       => 'page_header_padding_custom',
			'type'     => 'text',
			'title'    => __('Page Header Padding', 'risehand-addons'),
			'placeholder'    => __('5rem 0px 5rem 0px', 'risehand-addons'),
			'default'  => '',
			'required' => array( 'page_header_custom_style', '=', true ),
		),
		
		array(
			'id'       => 'pg_pattern_color',
			'type'     => 'color',
			'title'    => esc_html__( 'Page Header Pattern Color', 'risehand-addons' ),
			'desc'     => esc_html__( 'Change  Color for Page Header pattern color', 'risehand-addons' ), 
			'required' => array( 'page_header_custom_style', '=', true ),
		), 
		array(
			'id'       => 'pg_title_color',
			'type'     => 'color',
			'title'    => esc_html__( 'Page Header Title Color', 'risehand-addons' ),
			'desc'     => esc_html__( 'Change  Color for Page Header Title', 'risehand-addons' ), 
			'required' => array( 'page_header_custom_style', '=', true ),
		), 
		array(
			'id'       => 'breadcrumb_text_color',
			'type'     => 'color',
			'title'    => esc_html__( 'Breadcrumb Color', 'risehand-addons' ),
			'desc'     => esc_html__( 'Change  Color for Breadcrumb', 'risehand-addons' ),
			'required' => array( 'page_header_custom_style', '=', true),
		),
		array(
			'id'       => 'breadcrumb_active_text_color',
			'type'     => 'color',
			'title'    => esc_html__( 'Breadcrumb Active Color', 'risehand-addons' ),
			'desc'     => esc_html__( 'Change  Color for Breadcrumb', 'risehand-addons' ),
			'required' => array( 'page_header_custom_style', '=', true),
		),
		array(
			'id'       => 'breadcrumb_arrow_color',
			'type'     => 'color',
			'title'    => esc_html__( 'Breadcrumb Arrow Color', 'risehand-addons' ),
			'desc'     => esc_html__( 'Change  Color for Breadcrumb Arrow', 'risehand-addons' ),
			'required' => array( 'page_header_custom_style', '=', true),
		),
 
	),
);