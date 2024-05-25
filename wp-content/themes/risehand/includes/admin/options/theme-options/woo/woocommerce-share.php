<?php
/*
=======================
 Woocommerce Settings
=======================
*/
Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Woocommerce Share Settings', 'risehand' ),
        'id'     => 'woocommerce_share_settings',
        'desc'   => esc_html__( '', 'risehand' ),
        'icon'   => 'el el-shopping-cart-sign',
        'subsection' => true ,
        'fields' => array( 
            array(
                'id' => 'facebook',
                'type' => 'section',
                'title' => __('Facebook', 'risehand'),
                'indent' => true 
            ), 
            array(
                'id' => 'twitter',
                'type' => 'section',
                'title' => __('Twitter', 'risehand'),
                'indent' => true 
            ), 
            array(
                'id' => 'skype',
                'type' => 'section',
                'title' => __('Skype', 'risehand'),
                'indent' => true 
            ), 
            array(
                'id' => 'telegram',
                'type' => 'section',
                'title' => __('Telegram', 'risehand'),
                'indent' => true 
            ), 
            array(
                'id' => 'instagram',
                'type' => 'section',
                'title' => __('Instagram', 'risehand'),
                'indent' => true 
            ),  
            array(
                'id' => 'whatsup',
                'type' => 'section',
                'title' => __('Whatsup', 'risehand'),
                'indent' => true 
            ),  
        ),
    )
);