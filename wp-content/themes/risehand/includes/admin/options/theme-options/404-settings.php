<?php
/*
====================
404 Settings
====================
*/
Redux::setSection( $opt_name, array(
            'title'  => esc_html__( '404 Settings', 'risehand' ),
            'id'     => 'fournotfour_settings',
            'desc'   => esc_html__( '', 'risehand' ),
            'icon'   => 'el el-cog',
            'fields' => array(
                array(
                    'id' => 'blog_page_section',
                    'type' => 'section',
                    'title' => __('404 Settings', 'risehand'),
                    'indent' => true ,
                ),
                array(
                    'id'       => '404_image',
                    'type'     => 'media', 
                    'url'      => true,
                    'title'    => __('404 Image', 'risehand'),
                ),
                array(
                    'id'       => 'ftitlecolor',
                    'type'     => 'color',
                    'title'    => __('Title Color', 'risehand'), 
                    'output'      => array('.page-404 .title_no_a_36'),
                    'validate' => 'color',
                ),
                array(
                    'id'       => 'fcontentcolor',
                    'type'     => 'color',
                    'title'    => __('Content Color', 'risehand'), 
                    'output'      => array('.page-404 p'),
                    'validate' => 'color',
                ),
                array(
                    'id'       => 'fsearchbtncolor',
                    'type'     => 'color',
                    'title'    => __('Search Button Color', 'risehand'), 
                    'output'      => array('.page-404 .search-form .sch_btn'),
                    'validate' => 'color',
                ),
                array(
                    'id'       => 'fsearchbtnbgcolor',
                    'type'     => 'background',
                    'background-repeat' => false,
                    'background-attachment' => false,
                    'background-position' => false,
                    'background-image' => false,
                    'background-clip' => false,
                    'background-origin' => false,
                    'background-size' => false,
                    'preview_media' => false,
                    'output'      => array('.page-404 .search-form .sch_btn'),
                    'title'    => __('Search Button Background', 'risehand'), 
                ),

                array(
                    'id'       => 'fbtncolor',
                    'type'     => 'color',
                    'title'    => __('Home Button Color', 'risehand'), 
                    'output'      => array('.page-404 .theme_btn'),
                    'validate' => 'color',
                ),
                array(
                    'id'       => 'fbtnbgcolor',
                    'type'     => 'background',
                    'background-repeat' => false,
                    'background-attachment' => false,
                    'background-position' => false,
                    'background-image' => false,
                    'background-clip' => false,
                    'background-origin' => false,
                    'background-size' => false,
                    'preview_media' => false,
                    'output'      => array('.page-404 .theme_btn'),
                    'title'    => __('Home Button Background', 'risehand'), 
                ),

                array(
                    'id'             => '404_padding',
                    'type'           => 'spacing',
                    'mode'           => 'padding',
                    'units'          => array('em', 'px' , 'rem'),
                    'output'      => array('.error404'),
                    'units_extended' => 'false',
                    'title'          => __('Padding for 404', 'risehand'),
                    'subtitle'       => __('Allow your users to choose the spacing or padding they want.', 'risehand'),
                    'default'            => array(
                        'padding-top'     => '', 
                        'padding-right'   => '', 
                        'padding-bottom'  => '', 
                        'padding-left'    => '',
                        'units'          => 'px', 
                    )
                ),
                array(         
                    'id'       => '404_bg_color',
                    'output'      => array('.error404'),
                    'type'     => 'background',
                    'title'    => __('404 Background', 'risehand'),
                    'subtitle' => __('404 background with image, color, etc.', 'risehand'),
                ),
                
            )
        )
    );