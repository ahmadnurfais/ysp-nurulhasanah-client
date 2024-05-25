<?php
/*
====================
General Settings
====================
*/
Redux::setSection( $opt_name, array(
            'title'  => esc_html__( 'General Settings', 'risehand' ),
            'id'     => 'general_settings',
            'desc'   => esc_html__( '', 'risehand' ),
            'icon'   => 'el el-wrench',
            'fields' => array( 
             
                array(
                    'id' => 'maintanace_mode',
                    'type' => 'section',
                    'title' => __('Maintenance Mode Section', 'risehand'),
                    'indent' => true ,
                ), 
                array(
                    'id'       => 'enable_maintenance',
                    'type'     => 'switch',
                    'title'    => esc_html__( 'Maintenance Mode Enable / Disable ', 'risehand' ),
                    'default'  => false,
                ), 
                array(
                    'id'       => 'maintenance_image',
                    'type'     => 'media', 
                    'url'      => true,
                    'title'    => __('Maintenance Image', 'risehand'),
                    'required' => [ 'enable_maintenance', '=', true ],
                ),
                array(
                    'id'       => 'maintenance_title',
                    'type'     => 'text', 
                    'default'  =>  __('Site Under Maintenance.', 'risehand'),
                    'title'    => __('Maintenance Title', 'risehand'),
                    'required' => [ 'enable_maintenance', '=', true ],
                ),
                array(
                    'id'       => 'maintenance_description',
                    'type'     => 'textarea', 
                    'default'  =>  __('This website is currently undergoing maintenance.', 'risehand'),
                    'title'    => __('Maintenance Description', 'risehand'),
                    'required' => [ 'enable_maintenance', '=', true ],
                ),
                array(
                    'id' => 'cookies_sec',
                    'type' => 'section',
                    'title' => __('Cookies Section', 'risehand'),
                    'indent' => true ,
                ), 
                array(
                    'id'       => 'enable_cookies',
                    'type'     => 'switch',
                    'title'    => esc_html__( 'Cookies Mode Enable / Disable ', 'risehand' ),
                    'default'  => false,
                ), 
                array(
                    'id'       => 'cookies_description',
                    'type'     => 'textarea', 
                    'default'  =>  __('This website uses cookies to ensure you get the best experience on our website.', 'risehand'),
                    'title'    => __('Cookies Description', 'risehand'),
                    'required' => [ 'enable_cookies', '=', true ],
                ),
                array(
                    'id'       => 'cookies_button_one',
                    'type'     => 'text', 
                    'default'  =>  __('Accept', 'risehand'),
                    'title'    => __('Button One', 'risehand'),
                    'required' => [ 'enable_cookies', '=', true ],
                ),
                
                //preloader back ti top
                array(
                    'id' => 'preloadersect',
                    'type' => 'section',
                    'title' => __('Preloader Section', 'risehand'),
                    'indent' => true ,
                ),
                array(
                    'id'       => 'preloader_enables',
                    'type'     => 'switch', 
                    'title'    => __('Preloader Enable  / Disable', 'risehand'),
                    'subtitle' => __('Preloader', 'risehand'),
                    'default'  => false,
                ),  
                
                 array(
                    'id'       => 'preloader_image',
                    'type'     => 'media', 
                    'url'      => true,
                    'default'  => array(
                        'url'=> '', 
                    ),
                    'title'    => __('Preloader Image', 'risehand'),
                    'required' => [ 'preloader_enables', '=', true ],
                ),
             
                array(         
                    'id'       => 'pre_loader_color_one',
                    'type'     => 'color',
                    'title'    => __('Preloader Color One', 'risehand'),
                    'validate' => 'color',
                    'required' => [ 'preloader_enables', '=', true ],
                ),

                array(         
                    'id'       => 'pre_loader_color_two',
                    'type'     => 'color',
                    'title'    => __('Preloader Color Two', 'risehand'),
                    'validate' => 'color',
                    'required' => [ 'preloader_enables', '=', true ],
                ),

                array(         
                    'id'       => 'pre_loader_color_three',
                    'type'     => 'color',
                    'title'    => __('Preloader Color Three', 'risehand'),
                    'validate' => 'color',
                    'required' => [ 'preloader_enables', '=', true ],
                ), 
                array(         
                    'id'       => 'pre_loader_color_four',
                    'type'     => 'color',
                    'title'    => __('Preloader Color Four', 'risehand'),
                    'validate' => 'color',
                    'required' => [ 'preloader_enables', '=', true ],
                ), 
                array(         
                    'id'       => 'pre_loader_color_text',
                    'type'     => 'color',
                    'title'    => __('Preloader Close Background Color', 'risehand'),
                    'validate' => 'color',
                    'required' => [ 'preloader_enables', '=', true ],
                ), 
                array(         
                    'id'       => 'pre_loader_color_text_one',
                    'type'     => 'color',
                    'title'    => __('Preloader Close Icon Color', 'risehand'),
                    'validate' => 'color',
                    'required' => [ 'preloader_enables', '=', true ],
                ), 
                array(
                    'id'       => 'bactotop_enable',
                    'type'     => 'switch', 
                    'default'  => false,
                    'title'    => __('Back to top Enable /Disable', 'risehand'),
                ),  
                //animation
                array(
                    'id' => 'jssection',
                    'type' => 'section',
                    'title' => __('Enable / Disable Back to top Section', 'risehand'),
                    'indent' => true ,
                ),
                array(
                    'id'       => 'bactotop_enable',
                    'type'     => 'switch', 
                    'default'  => false,
                    'title'    => __('Back to Top Enable /  Disable', 'risehand'),
                ),
                
                
            ),
        ));