<?php
/*
====================
Footer Settings
====================
*/
Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Footer Settings', 'risehand' ),
        'id'     => 'footer_settings_all',
        'desc'   => esc_html__( '', 'risehand' ),
        'icon'   => 'el el-photo',
        'fields' => array(
            array(
                'id'       => 'footer_custom_enables',
                'type'     => 'switch', 
                'title'    => __('Footer Custom Enable / Disable', 'risehand'),
                'default'  => false,
            ),
            array(
                'id'       => 'footer_custom_style',
                'type'     => 'select',
                'title'    => __('Select Footer Style', 'risehand'), 
                 // Must provide key => value pairs for select options
                'options'  => risehand_common_query('footer'),
                'required' => array( 'footer_custom_enables', '=', true ),
            ),
        )
    ) 
);