<?php
/*
======================
 Page Header Settings
======================
*/
Redux::setSection( $opt_name, array(
            'title'  => esc_html__( 'Page Header Settings', 'risehand' ),
            'id'     => 'page_header_settings_option',
            'desc'   => esc_html__( '', 'risehand' ),
            'icon'   => 'el el-website',
            'fields' => array( 
                array(
                    'id'       => 'page_header_enable',
                    'type'     => 'switch', 
                    'title'    => __('Page Header Enable / Disable', 'risehand'),
                    'default'  => true,
                ),  
                array(
                    'id'    => 'page_header_alignment',
                    'type'  => 'select',
                    'title' => esc_html__( 'Page Header Alignment' , 'risehand' ),
                    'options'  => array(
                        'start' => esc_html__( 'Text Start', 'risehand' ),
                        'center' => esc_html__( 'Text Center', 'risehand' ),
                        'end' => esc_html__( 'Text End ', 'risehand' ), 
                    ),
                    'default'  => 'center',
                ), 
                array(
                    'id'       => 'breadcrumb_enable',
                    'type'     => 'switch', 
                    'title'    => __('Breadcrumb Enable / Disable', 'risehand'),
                    'default'  => true,
                    'required' => array( 'page_header_enable', '=', true ),
                ),
    
                array(
                    'id'       => 'page_header_bg_image',
                    'type'     => 'media', 
                    'url'      => true,
                    'title'    => __('Page header Background Image', 'risehand'),
                
                ),
                array(
                    'id'       => 'blog_page_header_bg_image',
                    'type'     => 'media', 
                    'url'      => true,
                    'title'    => __('Blog Page header Background Image', 'risehand'),
                
                ), 
                array(
                    'id'       => 'pageheader_bg_color',
                    'type'     => 'color',
                    'title'    => __('Page Header Background Color', 'risehand'), 
                    'validate' => 'color', 
                ),
                array(
                    'id'       => 'pageheader_overlay_color',
                    'type'     => 'color',
                    'title'    => __('Page Header Image Overlay Color', 'risehand'), 
                    'validate' => 'color', 
                ),
                array(
                    'id'       => 'page_header_padding',
                    'type'     => 'text',
                    'title'    => __('Page Header Padding', 'risehand'),
                    'placeholder'    => __('5rem 0px 5rem 0px', 'risehand'),
                    'default'  => '', 
                ), 
                array(
                    'id'       => 'pageheader_pattern_color',
                    'type'     => 'color',
                    'title'    => __('Page Header Pattern COlor', 'risehand'), 
                    'validate' => 'color',
                
                ),
                array(
                    'id'       => 'pageheader_title_color',
                    'type'     => 'color',
                    'title'    => __('Page Header Title COlor', 'risehand'), 
                    'validate' => 'color',
                
                ),
                array(
                    'id'       => 'pageheader_breadcrumb_color',
                    'type'     => 'color',
                    'title'    => __('Page Header Breadcrumb Color', 'risehand'), 
                    'validate' => 'color',
                
                ), 
                array(
                    'id'       => 'pageheader_breadcrumb_arrow_color',
                    'type'     => 'color',
                    'title'    => __('Page Header Breadcrumb Arrow Color', 'risehand'), 
                    'validate' => 'color',
            
                ), 
            )
        )
);

