<?php
/*
=======================
 Give Settings
=======================
*/
Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'GiveWp  Settings', 'risehand' ),
        'id'     => 'give_product_settings',
        'desc'   => esc_html__( '', 'risehand' ),
        'icon'   => 'el el-shopping-cart-sign',
        //'subsection' => true ,
        'fields' => array( 
            array(
                'id' => 'give-singel-settings',
                'type' => 'section',
                'title' => __('Give Wp Donation Archive / Single Page Settings', 'risehand'),
                'indent' => true 
            ),   
            array(
                'id'       => 'give_feature_image_enable',
                'type'     => 'switch', 
                'default'  => true,
                'title'    => __('Feature Image Enable / Disable on donation single page', 'risehand'), 
            ),
            array(
                'id'    => 'give_archive_column',
                'type'  => 'select',
                'title' => esc_html__( 'Give Archive Card Column' , 'risehand' ),
                'options'  => array(
                    'col-lg-3 col-md-6 col-sm-6 col-xs-12' => esc_html__( '4 Column', 'risehand' ),
                    'col-lg-4 col-md-6 col-sm-6 col-xs-12' => esc_html__( '3 Column', 'risehand' ),
                    'col-lg-6 col-md-6 col-sm-6 col-xs-12' => esc_html__( '2 Column', 'risehand' ),
                    'col-lg-12' => esc_html__( '1 Column', 'risehand' ),
                ),
                'default'  => 'col-lg-4 col-md-6 col-sm-6 col-xs-12',
            ), 
            array(
                'id'    => 'give_archive_form_type',
                'type'  => 'select',
                'title' => esc_html__( 'Give Archive Donation Form Type' , 'risehand' ),
                'options'  => array(
                    'modal' => esc_html__( 'Modal', 'risehand' ),
                    'button' => esc_html__( 'Button', 'risehand' ), 
                ),
                'default'  => 'modal',
            ), 
           
            array(
                'id'    => 'risehand_editor_mode',
                'type'  => 'select',
                'title' => esc_html__( 'WordPress Editor Mode' , 'risehand' ),
                'options'  => array(
                    'editor_one' => esc_html__( 'Gutenberg Editor', 'risehand' ),
                    'editor_two' => esc_html__( 'Classic Editor', 'risehand' ),
                ),
                'default'  => 'editor_two',
            ), 
        ),
    )
);