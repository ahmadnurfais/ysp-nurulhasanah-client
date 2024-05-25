<?php
/*
====================
Script Settings
====================
*/
Redux::setSection( $opt_name, array(
            'title'  => esc_html__( 'Split Text / Smooth Scrool Settings', 'risehand' ),
            'id'     => 'script_settings',
            'desc'   => esc_html__( '', 'risehand' ),
            'icon'   => 'el el-wrench',
            'fields' => array( 
              
                //split text
                array(
                    'id' => 'jssection',
                    'type' => 'section',
                    'title' => __('Javascript Section', 'risehand'),
                    'indent' => true ,
                ),
                array(
                    'id'       => 'split_enable',
                    'type'     => 'switch', 
                    'default'  => false,
                    'title'    => __('Split Text Enable /  Disable', 'risehand'),
                    'desc'   => esc_html__( 'Split Text Not Work perfectly on Gtranslate Pluign', 'risehand' ),
                ), 
                array(
                    'id'    => 'split_option',
                    'type'  => 'select',
                    'title' => esc_html__( 'Split Text Option' , 'risehand' ),
                    'options'  => array(
                        'risehandsplit-active fade-in' => esc_html__( 'Fade In', 'risehand' ),
                        'risehandsplit-active slide-in-right' => esc_html__( 'Slide In Right', 'risehand' ),
                        'risehandsplit-active slide-in-left' => esc_html__( 'Slide In Right ', 'risehand' ), 
                        'risehandsplit-active slide-in-up' => esc_html__( 'Slide In Up ', 'risehand' ), 
                        'risehandsplit-active slide-in-down' => esc_html__( 'Slide In Down ', 'risehand' ), 
                    ),
                    'default'  => 'risehandsplit-active fade-in',
                ),
               
                array(
                    'id'        => 'word_spacing',
                    'type'      => 'slider',
                    'title'     => __('Word Spacing', 'risehand'),
                    'subtitle'  => __('This slider displays the value as a label.', 'risehand'),
                    'desc'      => __('Slider description. Min: 1, max: 500, step: 1, default value: 250', 'risehand'),
                    "default"   => '',
                    "min"       => 0,
                    "step"      => 1,
                    "max"       => 500,
                    'display_value' => 'label',
                  
                ), 
                array(
                    'id'       => 'smooth_scroll',
                    'type'     => 'switch', 
                    'default'  => false,
                    'title'    => __('Smooth Scroll Enable /  Disable', 'risehand'),
                ), 
                
            ),
        ));