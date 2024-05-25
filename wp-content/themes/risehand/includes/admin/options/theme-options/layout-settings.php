<?php
/*
====================
Layout Settings
====================
*/
Redux::setSection( $opt_name, array(
            'title'  => esc_html__( 'Layout Settings', 'risehand' ),
            'id'     => 'layout_settings_all',
            'desc'   => esc_html__( '', 'risehand' ),
            'icon'   => 'el el-list',
            'fields' => array(
                array(
                    'id'       => 'default_layouts',
                    'type'     => 'image_select',
                    'title'    => esc_html__( 'Default Layouts', 'risehand' ),
                    'subtitle' => esc_html__( 'Choose your layouts Styles', 'risehand' ),
                    'options'  => array( 
                        'no-sidebar'  => array(
                            'alt' => esc_html__( 'Full Width', 'risehand' ),
                            'img' => get_template_directory_uri() . '/assets/images/full-width.png',
                        ),
                        'right-sidebar'  => array(
                            'alt' => esc_html__( 'Right Sidebar', 'risehand' ),
                            'img' => get_template_directory_uri() . '/assets/images/right-sidebar.png',
                        ),
                        'left-sidebar'  => array(
                            'alt' => esc_html__( 'Left Sidebar', 'risehand' ),
                            'img' => get_template_directory_uri() . '/assets/images/left-sidebar.png',
                        ),
                    ),
                    'default' => 'right-sidebar',
                ),
                array(
                    'id'       => 'events_layouts',
                    'type'     => 'image_select',
                    'title'    => esc_html__( 'Events Layouts', 'risehand' ),
                    'subtitle' => esc_html__( 'Choose your layouts Styles', 'risehand' ),
                    'options'  => array(
        
                        'no-sidebar'  => array(
                            'alt' => esc_html__( 'Full Width', 'risehand' ),
                            'img' => get_template_directory_uri() . '/assets/images/full-width.png',
                        ),
                        'right-sidebar'  => array(
                            'alt' => esc_html__( 'Right Sidebar', 'risehand' ),
                            'img' => get_template_directory_uri() . '/assets/images/right-sidebar.png',
                        ),
                        'left-sidebar'  => array(
                            'alt' => esc_html__( 'Left Sidebar', 'risehand' ),
                            'img' => get_template_directory_uri() . '/assets/images/left-sidebar.png',
                        ),
                    ),
                    'default' => 'no-sidebar',
                ),
                array(
                    'id'       => 'page_layouts',
                    'type'     => 'image_select',
                    'title'    => esc_html__( 'Page Layouts', 'risehand' ),
                    'subtitle' => esc_html__( 'Choose your layouts Styles', 'risehand' ),
                    'options'  => array(
                        'no-sidebar'  => array(
                            'alt' => esc_html__( 'Full Width', 'risehand' ),
                            'img' => get_template_directory_uri() . '/assets/images/full-width.png',
                        ),
                        'right-sidebar'  => array(
                            'alt' => esc_html__( 'Right Sidebar', 'risehand' ),
                            'img' => get_template_directory_uri() . '/assets/images/right-sidebar.png',
                        ),
                        'left-sidebar'  => array(
                            'alt' => esc_html__( 'Left Sidebar', 'risehand' ),
                            'img' => get_template_directory_uri() . '/assets/images/left-sidebar.png',
                        ),
                    ),
                    'default' => 'right-sidebar',
                ),
                array(
                    'id'       => 'portfolio_layouts',
                    'type'     => 'image_select',
                    'title'    => esc_html__( 'Portfolio Layouts', 'risehand' ),
                    'subtitle' => esc_html__( 'Choose your layouts Styles', 'risehand' ),
                    'options'  => array( 
                        'no-sidebar'  => array(
                            'alt' => esc_html__( 'Full Width', 'risehand' ),
                            'img' => get_template_directory_uri() . '/assets/images/full-width.png',
                        ),
                        'right-sidebar'  => array(
                            'alt' => esc_html__( 'Right Sidebar', 'risehand' ),
                            'img' => get_template_directory_uri() . '/assets/images/right-sidebar.png',
                        ),
                        'left-sidebar'  => array(
                            'alt' => esc_html__( 'Left Sidebar', 'risehand' ),
                            'img' => get_template_directory_uri() . '/assets/images/left-sidebar.png',
                        ),
                    ),
                    'default' => 'no-sidebar',
                ), 
                array(
                    'id'       => 'service_layouts',
                    'type'     => 'image_select',
                    'title'    => esc_html__( 'Service Layouts', 'risehand' ),
                    'subtitle' => esc_html__( 'Choose your layouts Styles', 'risehand' ),
                    'options'  => array( 
                        'no-sidebar'  => array(
                            'alt' => esc_html__( 'Full Width', 'risehand' ),
                            'img' => get_template_directory_uri() . '/assets/images/full-width.png',
                        ),
                        'right-sidebar'  => array(
                            'alt' => esc_html__( 'Right Sidebar', 'risehand' ),
                            'img' => get_template_directory_uri() . '/assets/images/right-sidebar.png',
                        ),
                        'left-sidebar'  => array(
                            'alt' => esc_html__( 'Left Sidebar', 'risehand' ),
                            'img' => get_template_directory_uri() . '/assets/images/left-sidebar.png',
                        ),
                    ),
                    'default' => 'no-sidebar',
                ), 
                array(
                    'id'       => 'donation_layouts',
                    'type'     => 'image_select',
                    'title'    => esc_html__( 'Donation Layouts', 'risehand' ),
                    'subtitle' => esc_html__( 'Choose your layouts Styles', 'risehand' ),
                    'options'  => array( 
                        'no-sidebar'  => array(
                            'alt' => esc_html__( 'Full Width', 'risehand' ),
                            'img' => get_template_directory_uri() . '/assets/images/full-width.png',
                        ),
                        'right-sidebar'  => array(
                            'alt' => esc_html__( 'Right Sidebar', 'risehand' ),
                            'img' => get_template_directory_uri() . '/assets/images/right-sidebar.png',
                        ),
                        'left-sidebar'  => array(
                            'alt' => esc_html__( 'Left Sidebar', 'risehand' ),
                            'img' => get_template_directory_uri() . '/assets/images/left-sidebar.png',
                        ),
                    ),
                    'default' => 'no-sidebar',
                ), 
                array(
                    'id'       => 'product_layouts',
                    'type'     => 'image_select',
                    'title'    => esc_html__( 'Product Layouts', 'risehand' ),
                    'subtitle' => esc_html__( 'Choose your layouts Styles', 'risehand' ),
                    'options'  => array(
        
                        'no-sidebar'  => array(
                            'alt' => esc_html__( 'Full Width', 'risehand' ),
                            'img' => get_template_directory_uri() . '/assets/images/full-width.png',
                        ),
                        'right-sidebar'  => array(
                            'alt' => esc_html__( 'Right Sidebar', 'risehand' ),
                            'img' => get_template_directory_uri() . '/assets/images/right-sidebar.png',
                        ),
                        'left-sidebar'  => array(
                            'alt' => esc_html__( 'Left Sidebar', 'risehand' ),
                            'img' => get_template_directory_uri() . '/assets/images/left-sidebar.png',
                        ),
                       
                    ),
                    'default' => 'no-sidebar',
                ), 
                array(
                    'id'       => 'product_single_layouts',
                    'type'     => 'image_select',
                    'title'    => esc_html__( 'Product Single Layouts', 'risehand' ),
                    'subtitle' => esc_html__( 'Choose your layouts Styles', 'risehand' ),
                    'options'  => array(
        
                        'no-sidebar'  => array(
                            'alt' => esc_html__( 'Full Width', 'risehand' ),
                            'img' => get_template_directory_uri() . '/assets/images/full-width.png',
                        ),
                        'right-sidebar'  => array(
                            'alt' => esc_html__( 'Right Sidebar', 'risehand' ),
                            'img' => get_template_directory_uri() . '/assets/images/right-sidebar.png',
                        ),
                        'left-sidebar'  => array(
                            'alt' => esc_html__( 'Left Sidebar', 'risehand' ),
                            'img' => get_template_directory_uri() . '/assets/images/left-sidebar.png',
                        ),
                    ),
                    'default' => 'no-sidebar',
                ), 
           
                array(
                    'id'       => 'layout_width_enable',
                    'type'     => 'switch', 
                    'title'    => __('Layout Width Enable / Disable', 'risehand'),
                    'default'  => false,
                ),
                array(
                    'id'       => 'layout_width_control',
                    'type'     => 'text', 
                    'default'  =>  '1350px',
                    'desc'  => esc_html__( 'This is for deafult  container width for reduce and increase width. Use Like this eg(1500px , 1170px)', 'risehand' ),
                    'title'    => __('Layout Width', 'risehand'),
                    'required' => array( 'layout_width_enable', '=', true ),
                ),
        )
 ));

