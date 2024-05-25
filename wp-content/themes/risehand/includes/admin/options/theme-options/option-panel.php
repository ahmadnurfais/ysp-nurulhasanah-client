<?php
/*
=================================
Mobile Header Settings
==================================
*/
Redux::setSection( $opt_name, array(
            'title'  => esc_html__( 'Option Panel / Search Popup Settings', 'risehand' ),
            'id'     => 'option_panel_settings',
            'desc'   => esc_html__( '', 'risehand' ),
            'icon'   => 'el el-th',
            'fields' => array(
                array(
                    'id' => 'search-start',
                    'type' => 'section',
                    'title' => __('Search Section', 'risehand'),
                    'indent' => true 
                ),   
                array(
                    'id'       => 'fcategory_enable',
                    'type'     => 'switch', 
                    'title'    => __('Category Enable  / Disable', 'risehand'), 
                    'default'  => true,
                ),  
                array(
                    'id'       => 'search_text',
                    'type'     => 'text', 
                    'default'  =>  __('Enter the Keywords..', 'risehand'),
                    'title'    => __('Search Placeholder Text', 'risehand'),
                ),
                array(
                    'id'       => 'search_bg_color',
                    'type'     => 'background',
                    'background-repeat' => false,
                    'background-attachment' => false,
                    'background-position' => false,
                    'background-image' => false,
                    'background-clip' => false,
                    'background-origin' => false,
                    'background-size' => false,
                    'preview_media' => false,
                    'output'      => array('.search-popup '),
                    'title'    => __('Search Button Background', 'risehand'), 
                ),
                array(
                    'id'       => 'search_tet_color',
                    'type'     => 'color',
                    'title'    => __('Search Text Colors', 'risehand'), 
                    'output'      => array('.search-popup .search-form input[type=search] , .search-popup .search-form input[type=search]::placeholder , .search-popup .post-categories li a , .search-popup .search-form button , .search-popup .close-search'),
                    'validate' => 'color',
                ),
                array(
                    'id'       => 'search_br_color', 
                    'type'     => 'color',
                    'title'    => __('Search Border Colors', 'risehand'),   
                ),
                array(
                    'id' => 'optionpanel-start',
                    'type' => 'section',
                    'title' => __('Option Panel Section', 'risehand'),
                    'indent' => true 
                ),   
                array(
                    'id'       => 'panel_logo',
                    'type'     => 'switch', 
                    'title'    => __('Logo Enable  / Disable', 'risehand'), 
                    'default'  => true,
                ),   
                array(
                    'id'       => 'company_logo_modals',
                    'type'     => 'media', 
                    'url'      => true,
               
                    'default'  => array(
                        'url'=> get_template_directory_uri() . '/assets/images/theme-logo.png', 
                    ),
                    'title'    => __('Logo', 'risehand'),
                    'required' => array( 'panel_logo', '=', true ),
                 
                ),

                array(
                    'id'       => 'about_company_modal',
                    'type'     => 'textarea',
                    'title'    => esc_html__( 'About Company', 'risehand' ), 
                    'default' => esc_html__('Denounce with righteous indignation and dislike men who are beguiled
                        and demoralized by the charms pleasure moment so blinded desire that
                        they cannot foresee the pain and trouble.', 'risehand') ,
                        'required' => array( 'panel_logo', '=', true ),
                ),

                array(
                    'id'       => 'post_enable_modal',
                    'type'     => 'switch', 
                    'title'    => __('Post Enable', 'risehand'),
                    'default'  => true,
               ),
                
                array(
                    'id'       => 'post_title_modal',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Title', 'risehand' ),
                    'desc'     => esc_html__( '', 'risehand' ),
                    'default' => esc_html__('Latest Post', 'risehand') , 
                    'required' => array( 'post_enable_modal', '=', true ),
                ),
                 
                array(
                    'id'       => 'form_enable',
                    'type'     => 'switch', 
                    'title'    => __('Form Enable  / Disable', 'risehand'), 
                    'default'  => true,
                ),  
                array(
                    'id'       => 'form_title',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Form Title', 'risehand' ),
                    'default' => esc_html__('Need Any Help? Or Looking For an Agent', 'risehand') , 
                    'required' => array( 'form_enable', '=', true ),
                ),
                array(
                    'id'       => 'modal_form_short_code',
                    'type'     => 'textarea',
                    'title'    => esc_html__( 'Modal Form Shortcode', 'risehand' ),
                    'desc' => esc_html__('Enter Contact Form 7 Short Code here', 'risehand') ,
                    'placeholder'     => esc_html__( '[contact-form-7 id="344" title="Contact Form"]', 'risehand' ),
                    'required' => array( 'form_enable', '=', true ),
                ),

            

                array(
                    'id'       => 'contact_panel_enable',
                    'type'     => 'switch', 
                    'title'    => __('Contact Enable  / Disable', 'risehand'), 
                    'default'  => true,
                ), 

                array(
                    'id'       => 'mobile_phone_number',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Phone Number', 'risehand' ),
                    'default' => esc_html__('9806071234', 'risehand') ,
                    'required' => array( 'contact_panel_enable', '=', true ),
                ),
    
              
                array(
                    'id'       => 'mobile_mail_number',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Mail Id', 'risehand' ),
                    'default' => esc_html__('sendmail@example.com', 'risehand') ,
                    'required' => array( 'contact_panel_enable', '=', true ),
                ),

                array(
                    'id'       => 'working_hours_panels',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Working Hours', 'risehand' ),
                    'default' => esc_html__('Working Hours : <span> Sun-monday, 09am-5pm </span>', 'risehand') ,
                    'required' => array( 'contact_panel_enable', '=', true ),
                ),
    
               
                array(
                    'id'       => 'copy_right_enable',
                    'type'     => 'switch', 
                    'title'    => __('Copy Right Enable  / Disable', 'risehand'), 
                    'default'  => true,
                ),  
                
                array(
                    'id'       => 'copy_right_modal',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Copy Right', 'risehand' ),
                    'desc'     => esc_html__( '', 'risehand' ),
                    'default' => esc_html__('© 2023 risehand. All Rights Reserved.', 'risehand') , 
                    'required' => array( 'copy_right_enable', '=', true ),
                ),
               
    )
));


 