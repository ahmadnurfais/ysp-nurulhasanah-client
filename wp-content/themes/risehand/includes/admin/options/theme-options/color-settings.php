<?php
/*
====================
Theme Color Settings
====================
*/
Redux::setSection( $opt_name, array(
            'title'  => esc_html__( 'Color Settings', 'risehand' ),
            'id'     => 'color_scheme',
            'desc'   => esc_html__( '', 'risehand' ),
            'icon'   => 'el el-brush',
            'fields' => array(
                  
                    array(
                        'id' => 'theme_color_section',
                        'type' => 'section',
                        'title' => __('Theme Primary Colors', 'risehand'),
                        'indent' => true ,
                    ),
                
                    array(
                        'id'       => 'theme_color_one',
                        'type'     => 'color',
                        'title'    => __('Theme Color (1)', 'risehand'), 
                        'validate' => 'color',
                    ),
                    array(
                        'id'       => 'theme_color_two',
                        'type'     => 'color',
                        'title'    => __('Theme Color (2)', 'risehand'), 
                        'validate' => 'color',
                    ),
                
                    array(
                        'id'       => 'theme_color_three',
                        'type'     => 'color',
                        'title'    => __('Theme Color (3)', 'risehand'), 
                        'validate' => 'color',
                    ), 

                    array(
                        'id' => 'theme_bgcolor_section',
                        'type' => 'section',
                        'title' => __('Theme Background Colors', 'risehand'),
                        'indent' => true ,
                    ),
                
                    array(
                        'id'       => 'theme_bgcolor_one',
                        'type'     => 'color',
                        'title'    => __('Theme Background Color (1)', 'risehand'), 
                        'validate' => 'color',
                    ),
                    array(
                        'id'       => 'theme_bgcolor_two',
                        'type'     => 'color',
                        'title'    => __('Theme Background Color (2)', 'risehand'), 
                        'description'    => __('Use Light Color', 'risehand'), 
                        'validate' => 'color',
                    ),
                     

                    array(
                        'id' => 'theme_heding_clor_section',
                        'type' => 'section',
                        'title' => __('Theme Heading Colors', 'risehand'),
                        'indent' => true ,
                    ),
                    array(
                        'id'       => 'heading_color',
                        'type'     => 'color',
                        'title'    => __('Heading Color', 'risehand'), 
                        'validate' => 'color',
                    ),
                
                    array(
                        'id'       => 'description_color',
                        'type'     => 'color',
                        'title'    => __('Text  Color', 'risehand'), 
                        'validate' => 'color',
                    ),
                    array(
                        'id' => 'theme_border_color_sect',
                        'type' => 'section',
                        'title' => __('Border Colors', 'risehand'),
                        'indent' => true ,
                    ),

                    array(
                        'id'       => 'border_color',
                        'type'     => 'color',
                        'title'    => __('Border Color (1)', 'risehand'), 
                        'validate' => 'color',
                    ),

                    array(
                        'id'       => 'border_color_two',
                        'type'     => 'color',
                        'title'    => __('Border Color (2)', 'risehand'), 
                        'validate' => 'color',
                        'description'    => __('Use Dark Color', 'risehand'), 
                    ), 
                    array(
                        'id' => 'theme_mobile_color_sect',
                        'type' => 'section',
                        'title' => __('Mobile Menu Colors', 'risehand'),
                        'indent' => true ,
                    ), 
                    array(
                        'id'       => 'menu_color',
                        'type'     => 'color',
                        'title'    => __('Mobile Menu Color', 'risehand'), 
                        'validate' => 'color',
                    ), 
                    array(
                        'id'       => 'menu_active_color',
                        'type'     => 'color',
                        'title'    => __('Mobile Menu Active Color', 'risehand'), 
                        'validate' => 'color',
                    ),
            
        )
    )   
);

