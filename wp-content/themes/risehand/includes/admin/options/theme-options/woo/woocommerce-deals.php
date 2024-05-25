<?php
/*
=======================
 Woocommerce Settings
=======================
*/
Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Woocommerce Deals Settings', 'risehand' ),
        'id'     => 'woocommerce_deals_settings',
        'desc'   => esc_html__( '', 'risehand' ),
        'icon'   => 'el el-shopping-cart-sign',
        'subsection' => true ,
        'fields' => array( 
            array(
                'id' => 'woocommerce_dealsection',
                'type' => 'section',
                'title' => __('Woocommerce Deals Settings', 'risehand'),
                'indent' => true 
            ),  
            array(
                'id' => 'enable_woocommerce_deals',
                'type' => 'switch',
                'title' => __('Enable Woocommerce Deals', 'risehand'),
                'default' => true 
            ),  
            array(
                'id'       => 'deals_banner_enable_disable',
                'type'     => 'switch', 
                'title'    => __('Deals Banner Above Shop Enable  / Disable In Shop Page', 'risehand'),
                'default'  => true,
                'required' => array('enable_woocommerce_deals', '=', true),
            ), 
            array(
                'id'       => 'dbanner_image',
                'type'     => 'media', 
                'url'      => true,  
                'title'    => __('Logo', 'risehand'),
                'required' => array( 'enable_woocommerce_deals', '=', true ), 
            ),
            array(
                'id'       => 'dbanner_title',
                'type'     => 'text',
                'title'    => esc_html__( 'Title', 'risehand' ),
                'default' => esc_html__('MEGA DEAL', 'risehand') , 
                'required' => array( 'enable_woocommerce_deals', '=', true ), 
            ),
            array(
                'id'       => 'dbanner_decription',
                'type'     => 'text',
                'title'    => esc_html__( 'Content', 'risehand' ),
                'default' => esc_html__('Hurry and get discounts on selected products up to 60%', 'risehand') ,
                'required' => array( 'enable_woocommerce_deals', '=', true ), 
            ),
            array(
                'id'       => 'dbanner_deals_date',
                'type'     => 'text',
                'title'    => esc_html__( 'Deals Date', 'risehand' ),
                'desc' => 'Example ( Enter Deals Date End Time Like this 2024-10-08 15:00:00)',
                'default' => esc_html__('2024-10-08 15:00:00', 'risehand') ,
                'required' => array( 'enable_woocommerce_deals', '=', true ), 
            ),
        ),
    )
);