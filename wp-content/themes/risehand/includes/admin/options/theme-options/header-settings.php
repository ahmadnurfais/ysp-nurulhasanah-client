<?php
/*
====================
Header Settings
====================
*/
Redux::setSection( $opt_name, array(
            'title'  => esc_html__( 'Header Settings', 'risehand' ),
            'id'     => 'header_versions',
            'desc'   => esc_html__( '', 'risehand' ),
            'icon'   => 'el el-photo',
            'fields' => array( 
                array(
                    'id' => 'header-sec-start',
                    'type' => 'section',
                    'title' => __('Header  Section', 'risehand'),
                    'indent' => true 
                ),                
                array(
                    'id'       => 'header_custom_enables',
                    'type'     => 'switch', 
                    'title'    => __('Header Custom Enable / Disable', 'risehand'),
                    'default'  => false,
                ),
                array(
                    'id'       => 'header_custom_style',
                    'type'     => 'select',
                    'title'    => __('Select Header Style', 'risehand'),  
                    // Must provide key => value pairs for select options
                    'options'  => risehand_common_query('header'),
                    'required' => array( 'header_custom_enables', '=', true ),
                ),
                array(
                    'id'       => 'header_archive_style',
                    'type'     => 'select',
                    'title'    => __('Select Header Style For Archive Pages( Blog , Product , Category , Tag)', 'risehand'),  
                    // Must provide key => value pairs for select options
                    'options'  => risehand_common_query('header'),
                    'required' => array( 'header_custom_enables', '=', true ),
                ),
                array(
                    'id'       => 'header_sticky',
                    'type'     => 'switch', 
                    'title'    => __('Header Sticky Enable / Disable', 'risehand'),
                    'default'  => false,
                ),

                array(
                    'id'       => 'header_sticky_custom_style',
                    'type'     => 'select',
                    'title'    => __('Select Sticky Header Style', 'risehand'),  
                    // Must provide key => value pairs for select options
                    'options'  => risehand_common_query('header'),
                    'required' => array( 'header_sticky', '=', true ),
                ),
                array(
                    'id'       => 'stickyheader_archive_style',
                    'type'     => 'select',
                    'title'    => __('Select Sticky Header Style For Archive Pages( Blog , Product , Category , Tag)', 'risehand'),  
                    // Must provide key => value pairs for select options
                    'options'  => risehand_common_query('header'),
                    'required' => array( 'header_sticky', '=', true ),
                ),
        )
));

