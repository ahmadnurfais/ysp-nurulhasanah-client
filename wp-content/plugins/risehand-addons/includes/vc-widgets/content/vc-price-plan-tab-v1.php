<?php


add_action( 'vc_before_init', 'vc_price_pan_tab_v1_vcmap' );
function vc_price_pan_tab_v1_vcmap() {
 vc_map( array(
  "name" => __( "Price Plan Tab V1", "risehand-addons" ),
  "base" => "vc_price_pan_tab_v1_init",
  "class" => "",
  "icon" => "icon-risehand-svg", 
  "category" => __( "Risehand Content", "risehand-addons"),
  "params" => array( 
        array(
            'type'       => 'dropdown',
            'heading'    => esc_html__('Price Style', 'risehand-addons'),
            'param_name' => 'price_styles',
            'value'      => array(
                esc_html__('Price Style One', 'risehand-addons') => 'type_one' ,
                esc_html__('Price Style Two', 'risehand-addons') => 'type_two' ,
            ), 
            'group' => esc_html__('General', 'risehand-addons') ,
        ), 
        array(
            'type'       => 'dropdown',
            'heading'    => esc_html__('Price Tab Style', 'risehand-addons'),
            'param_name' => 'price_tabstyle',
            'value'      => array( 
                esc_html__('Price Tab Style One', 'risehand-addons') => 'type_one' ,
                esc_html__('Price Tab Style Two', 'risehand-addons') => 'type_two' ,
            ), 
            'group' => esc_html__('General', 'risehand-addons') ,
        ),
        array(
            'type'       => 'dropdown',
            'heading'    => esc_html__('Price Column', 'risehand-addons'),
            'param_name' => 'price_column',
            'value'      => array(
                esc_html__('Four Column', 'risehand-addons')    =>  'col-xl-3 col-lg-4 col-md-6 col-sm-6',
                esc_html__('Three Column', 'risehand-addons')   =>  'col-xl-4 col-lg-4 col-md-6 col-sm-6',
                esc_html__('Two Column', 'risehand-addons')     =>  'col-xl-6 col-lg-6 col-md-6 col-sm-6',
                esc_html__('One Column', 'risehand-addons')     =>  'col-xl-12',
            ),
            'group' => esc_html__('General', 'risehand-addons') ,
        ), 
        array(
            'type'       => 'dropdown',
            'heading'    => esc_html__('Tab Alignment', 'risehand-addons'),
            'param_name' => 'tabbtn_alignment',
            'value'      => array(
                esc_html__('Start', 'risehand-addons') =>  'start',
                esc_html__('Center', 'risehand-addons') =>  'center',
                esc_html__('End', 'risehand-addons')    =>  'end',
            ),
            'group' => esc_html__('General', 'risehand-addons') ,
        ),
        array(
            'type'       => 'dropdown',
            'heading'    => esc_html__( 'Heading Tag Type', 'risehand-addons' ),
            'param_name' => 'tag_type',
            'value'      => array(
                esc_html__( 'Div', 'risehand-addons' )  => 'div',
                esc_html__( 'H1', 'risehand-addons' )  => 'h1',
                esc_html__( 'H2', 'risehand-addons' )  => 'h2',
                esc_html__( 'H3', 'risehand-addons' )  => 'h3', 
                esc_html__( 'H4', 'risehand-addons' )  => 'h4',
                esc_html__( 'H5', 'risehand-addons' )  => 'h5', 
                esc_html__( 'H6', 'risehand-addons' )  => 'h6', 
            ),
            'group' => esc_html__('General', 'risehand-addons') ,
        ), 
        array(
            'type'       => 'textfield',
            'heading'    => esc_html__('Offer Percentage', 'risehand-addons'),
            'param_name' => 'percentage',
            'value'      => esc_html__('save 65%', 'risehand-addons'), 
            'group' => esc_html__('General', 'risehand-addons') ,
        ),
        array(
            'type'       => 'dropdown',
            'heading'    => esc_html__('Button Alignment', 'risehand-addons'),
            'param_name' => 'offer_for',
            'value'      => array(
                esc_html__('Offer for tab one', 'risehand-addons') =>  'offer_for_tab_one',
                esc_html__('Offer for tab two', 'risehand-addons') =>  'offer_for_tab_two',
            ),
            'group' => esc_html__('General', 'risehand-addons') ,
        ),
        // tab 1 start
        
        array(
            'type'       => 'textfield',
            'heading'    => esc_html__('Tab Id', 'risehand-addons'),
            'param_name' => 'tab_id', 
            'value'      => esc_html__('tabone', 'risehand-addons'),
            'description' => esc_html__('Enter the tab id without a gap; both tab ids should not be the same.', 'risehand-addons'),
            'group' => esc_html__('Tab 1', 'risehand-addons') ,
        ),
        array(
            'type'       => 'textfield',
            'heading'    => esc_html__('Tab Title', 'risehand-addons'),
            'param_name' => 'tab_title',
            'value'      => esc_html__('Monthly', 'risehand-addons'),
            'group' => esc_html__('Tab 1', 'risehand-addons') ,
        ),
        // repeater
        array(
            'type' => 'param_group',
            'heading' => esc_html__('Price Content Repeater', 'risehand-addons') ,
            'value' => '',
            'param_name' => 'price_repeater',
            'params' => array( 
                array(
                    'type'        => 'checkbox',
                    'heading'     => esc_html__('Price Box Active', 'risehand-addons'),
                    'param_name'  => 'actived',
                    'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ),  
                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => esc_html__('Tag', 'risehand-addons'),
                    'param_name' => 'tag', 
                ),  
                // ================== contnet ================
                array(
                    'type'       => 'textfield',
                    'heading'    => esc_html__('Title', 'risehand-addons'),
                    'param_name' => 'title', 
                ),
                array(
                    'type'       => 'textarea',
                    'heading'    => esc_html__('Description', 'risehand-addons'),
                    'param_name' => 'description', 
                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => esc_html__('Price Symbol', 'risehand-addons'),
                    'param_name' => 'price_symbol', 
                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => esc_html__('Price', 'risehand-addons'),
                    'param_name' => 'price', 
                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => esc_html__('Price Duration', 'risehand-addons'),
                    'param_name' => 'price_duration', 
                ),
                array(
                    'type'       => 'param_group',
                    'heading'    => esc_html__('Features Repeater', 'risehand-addons'),
                    'param_name' => 'features_repeater_one',
                    'value'      => array(),
                    'params'     => array(
                        array(
                            'type'       => 'dropdown',
                            'heading'    => esc_html__('Features Type', 'risehand-addons'),
                            'param_name' => 'fone_yesno',
                            'value'      => array(
                                esc_html__('Select', 'risehand-addons') =>'select',
                                esc_html__('Yes', 'risehand-addons') =>'yes',
                                esc_html__('No', 'risehand-addons')   => 'no',
                            ), 
                        ),
                        array(
                            'type'       => 'textfield',
                            'heading'    => esc_html__('Enter The Text Here', 'risehand-addons'),
                            'param_name' => 'features_text_one', 
                        ),
                    ),
                ),
                
                array(
                    'type'       => 'textfield',
                    'heading'    => esc_html__('Button One', 'risehand-addons'),
                    'param_name' => 'btnone', 
                ),
                array(
                    'type'       => 'vc_link',
                    'heading'    => esc_html__('Button One Link', 'risehand-addons'),
                    'param_name' => 'btnonelink', 
                ), 
                array(
                    'type'        => 'checkbox',
                    'heading'     => esc_html__('Button 2 Enable / Disable', 'risehand-addons'),
                    'param_name'  => 'btn2_enable',
                    'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ), 
                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => esc_html__('Button Two', 'risehand-addons'),
                    'param_name' => 'btntwo', 
                    'dependency' => array(
                        'element' => 'btn2_enable',
                        'value'   => 'yes',
                    ),
                ), 
                array(
                    'type'       => 'vc_link',
                    'heading'    => esc_html__('Button Two Link', 'risehand-addons'),
                    'param_name' => 'btntwolink',
                     
                    'dependency' => array(
                        'element' => 'btn2_enable',
                        'value'   => 'yes',
                    ),
                ),
                
            ),
            'group' => esc_html__('Tab 1', 'risehand-addons') ,
        ),  

        // tab 1 end

        // tab 2 start

        array(
            'type'       => 'textfield',
            'heading'    => esc_html__('Tab Id', 'risehand-addons'),
            'param_name' => 'tab_id_two',
            'value'      => esc_html__('tabtwo', 'risehand-addons'),
            'description' => esc_html__('Enter the tab id without a gap; both tab ids should not be the same.', 'risehand-addons'),
            'group' => esc_html__('Tab 2', 'risehand-addons') ,
        ),
        array(
            'type'       => 'textfield',
            'heading'    => esc_html__('Tab Title', 'risehand-addons'),
            'param_name' => 'tab_title_two',
            'value'      => esc_html__('Yearly', 'risehand-addons'),
            'group' => esc_html__('Tab 2', 'risehand-addons') ,
        ),
        array(
            'type' => 'param_group',
            'heading' => esc_html__('Price Content Repeater', 'risehand-addons') ,
            'value' => '',
            'param_name' => 'price_repeater_two',
            'params' => array( 
                array(
                    'type'        => 'checkbox',
                    'heading'     => esc_html__('Price Box Active', 'risehand-addons'),
                    'param_name'  => 'actived_two',
                    'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ),  
                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => esc_html__('Tag', 'risehand-addons'),
                    'param_name' => 'tag_two',
                   
                ), 
               // === content
                array(
                    'type'       => 'textfield',
                    'heading'    => esc_html__('Title', 'risehand-addons'),
                    'param_name' => 'title_two', 
                ),
                array(
                    'type'       => 'textarea',
                    'heading'    => esc_html__('Description', 'risehand-addons'),
                    'param_name' => 'description_two', 
                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => esc_html__('Price Symbol', 'risehand-addons'),
                    'param_name' => 'price_symbol_two', 
                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => esc_html__('Price', 'risehand-addons'),
                    'param_name' => 'price_two', 
                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => esc_html__('Price Duration', 'risehand-addons'),
                    'param_name' => 'price_duration_two', 
                ),
                array(
                    'type'       => 'param_group',
                    'heading'    => esc_html__('Features Repeater', 'risehand-addons'),
                    'param_name' => 'features_repeater_two',
                    'value'      => array(),
                    'params'     => array(
                        array(
                            'type'       => 'dropdown',
                            'heading'    => esc_html__('Features Type', 'risehand-addons'),
                            'param_name' => 'fone_yesno_two',
                            'value'      => array(
                                esc_html__('Select', 'risehand-addons') =>'select',
                                esc_html__('Yes', 'risehand-addons') =>'yes',
                                esc_html__('No', 'risehand-addons')   => 'no',
                            ), 
                        ),
                        array(
                            'type'       => 'textfield',
                            'heading'    => esc_html__('Enter The Text Here', 'risehand-addons'),
                            'param_name' => 'features_text_two', 
                        ),
                    ),
                ),
                
                array(
                    'type'       => 'textfield',
                    'heading'    => esc_html__('Button One', 'risehand-addons'),
                    'param_name' => 'btnone_two', 
                ),
                array(
                    'type'       => 'vc_link',
                    'heading'    => esc_html__('Button One Link', 'risehand-addons'),
                    'param_name' => 'btnonelink_two', 
                ), 
                array(
                    'type'        => 'checkbox',
                    'heading'     => esc_html__('Button 2 Enable / Disable', 'risehand-addons'),
                    'param_name'  => 'btn2_enable_two',
                    'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ), 
                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => esc_html__('Button Two', 'risehand-addons'),
                    'param_name' => 'btntwo_two', 
                    'dependency' => array(
                        'element' => 'btn2_enable_two',
                        'value'   => 'yes',
                    ),
                ), 
                array(
                    'type'       => 'vc_link',
                    'heading'    => esc_html__('Button Two Link', 'risehand-addons'),
                    'param_name' => 'btntwolink_two', 
                    'dependency' => array(
                        'element' => 'btn2_enable_two',
                        'value'   => 'yes',
                    ),
                ),
                
            ),
            'group' => esc_html__('Tab 2', 'risehand-addons') ,
        ),  
        // tab 2 end 

        // tab css
        array(
            'type'       => 'textfield',
            'heading'    => esc_html__('Tab Margin', 'risehand-addons'),
            'param_name' => 'tab_margin',
            'description' => esc_html__('Enter the box margin like this eg( 10px 10px 20px 10px )', 'risehand-addons'),
            'group' => esc_html__('Tab Button Css', 'risehand-addons'),
        ),
        array(
            'type'       => 'colorpicker',
            'heading'    => esc_html__('Tab  Color', 'risehand-addons'),
            'param_name' => 'tabtcss',
            'group' => esc_html__('Tab Button Css', 'risehand-addons'),
        ),
        array(
            'type'       => 'colorpicker',
            'heading'    => esc_html__('Tab Bg Color', 'risehand-addons'),
            'param_name' => 'tabbtn_bg',
            'group' => esc_html__('Tab Button Css', 'risehand-addons'),
        ),
        array(
            'type'       => 'colorpicker',
            'heading'    => esc_html__('Tab Border Color', 'risehand-addons'),
            'param_name' => 'tabbtn_bpor',
            'group' => esc_html__('Tab Button Css', 'risehand-addons'),
        ),
        array(
            'type'       => 'colorpicker',
            'heading'    => esc_html__('Active / Hover Tab Item Color', 'risehand-addons'),
            'param_name' => 'actabcolo',
            'group' => esc_html__('Tab Button Css', 'risehand-addons'),
        ),
        array(
            'type'       => 'colorpicker',
            'heading'    => esc_html__('Active / Hover  Tab Background Color', 'risehand-addons'),
            'param_name' => 'actabgcolo',
            'group' => esc_html__('Tab Button Css', 'risehand-addons'),
        ),
        // tab end css
        // offer css 
           array(
            'type'       => 'colorpicker',
            'heading'    => esc_html__('Offer Color', 'risehand-addons'),
            'param_name' => 'offer_color',  
            'group' => esc_html__('Price Content Css', 'risehand-addons'),
        ),
        array(
            'type'       => 'colorpicker',
            'heading'    => esc_html__('Offer Arrow Color', 'risehand-addons'),
            'param_name' => 'offersvg_color',
            'group' => esc_html__('Price Content Css', 'risehand-addons'),
        ),
        array(
            'type'       => 'colorpicker',
            'heading'    => esc_html__('Offer Background Color', 'risehand-addons'),
            'param_name' => 'offerbg_color',
            'group' => esc_html__('Price Content Css', 'risehand-addons'),
        ),
        // offer end css 
        array(
            'type' => 'colorpicker',
            'heading' => __('Tag Color', 'risehand-addons'),
            'param_name' => 'tagcolor',
            'value' => '',
            'description' => __('Select the color for the tag.', 'risehand-addons'),
            'group' => esc_html__('Price Content Css', 'risehand-addons'),
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __('Tag Background Color', 'risehand-addons'),
            'param_name' => 'tagvfcolor',
            'value' => '',
            'description' => __('Select the background color for the tag.', 'risehand-addons'),
            'group' => esc_html__('Price Content Css', 'risehand-addons'),
        ),
      
        array(
            'type' => 'colorpicker',
            'heading' => __('Price Color', 'risehand-addons'),
            'param_name' => 'pricecolor',
            'value' => '',
            'description' => __('Select the color for the price.', 'risehand-addons'),
            'group' => esc_html__('Price Content Css', 'risehand-addons'),
        ),

        array(
            'type' => 'colorpicker',
            'heading' => __('Price Period Color', 'risehand-addons'),
            'param_name' => 'priceprcolor',
            'value' => '',
            'description' => __('Select the color for the price period.', 'risehand-addons'),
            'group' => esc_html__('Price Content Css', 'risehand-addons'),
        ),

        array(
            'type' => 'colorpicker',
            'heading' => __('Title Color', 'risehand-addons'),
            'param_name' => 'title_color',
            'value' => '',
            'description' => __('Select the color for the title.', 'risehand-addons'),
            'group' => esc_html__('Price Content Css', 'risehand-addons'),
        ),
 
        array(
            'type' => 'colorpicker',
            'heading' => __('Small Description Color', 'risehand-addons'),
            'param_name' => 'des_color',
            'value' => '',
            'description' => __('Select the color for the small description.', 'risehand-addons'),
            'group' => esc_html__('Price Content Css', 'risehand-addons'),
        ), 
        array(
            'type' => 'colorpicker',
            'heading' => __('Feature Icon Color 1', 'risehand-addons'),
            'param_name' => 'listiconcolor',
            'value' => '',
            'description' => __('Select the color for feature icon 1.', 'risehand-addons'),
            'group' => esc_html__('Price Content Css', 'risehand-addons'),
        ),

        array(
            'type' => 'colorpicker',
            'heading' => __('Feature Icon Color 2', 'risehand-addons'),
            'param_name' => 'listiconcolortwo',
            'value' => '',
            'description' => __('Select the color for feature icon 2.', 'risehand-addons'),
            'group' => esc_html__('Price Content Css', 'risehand-addons'),
        ),

        array(
            'type' => 'colorpicker',
            'heading' => __('Feature Color', 'risehand-addons'),
            'param_name' => 'listcolor',
            'value' => '',
            'description' => __('Select the color for feature.', 'risehand-addons'),
            'group' => esc_html__('Price Content Css', 'risehand-addons'),
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __('Button One Color', 'risehand-addons'),
            'param_name' => 'btncolor',
            'group' => esc_html__('Price Content Css', 'risehand-addons'),
        ),
        array(
            'type' => 'textfield',
            'heading' => __('Button One Border Radius', 'risehand-addons'),
            'param_name' => 'button_border_radius',
            'description' => __('Enter the border radius for Button One (e.g., 5px or 5%).', 'risehand-addons'),
            'group' => esc_html__('Price Content Css', 'risehand-addons'),
        ),
        array(
            'type' => 'textfield',
            'heading' => __('Button One Padding', 'risehand-addons'),
            'param_name' => 'button_padding_radius',
            'description' => __('Enter the padding for Button One (e.g., 10px or 2%).', 'risehand-addons'),
            'group' => esc_html__('Price Content Css', 'risehand-addons'),
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __('Button One Background', 'risehand-addons'),
            'param_name' => 'background',
            'group' => esc_html__('Price Content Css', 'risehand-addons'),
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __('Button One Border Color', 'risehand-addons'),
            'param_name' => 'btnoneborder_color',
            'group' => esc_html__('Price Content Css', 'risehand-addons'),
        ),
        // Add other parameters here...

        // Parameters for Button Two
        array(
            'type' => 'colorpicker',
            'heading' => __('Button Two Color', 'risehand-addons'),
            'param_name' => 'tbtncolor',
            'group' => esc_html__('Price Content Css', 'risehand-addons'),
        ),
        array(
            'type' => 'textfield',
            'heading' => __('Button Two Border Radius', 'risehand-addons'),
            'param_name' => 'tbutton_border_radius',
            'description' => __('Enter the border radius for Button Two (e.g., 5px or 5%).', 'risehand-addons'),
            'group' => esc_html__('Price Content Css', 'risehand-addons'),
        ),
        array(
            'type' => 'textfield',
            'heading' => __('Button Two Padding', 'risehand-addons'),
            'param_name' => 'tbutton_padding_radius',
            'description' => __('Enter the padding for Button Two (e.g., 10px or 2%).', 'risehand-addons'),
            'group' => esc_html__('Price Content Css', 'risehand-addons'),
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __('Button Two Background', 'risehand-addons'),
            'param_name' => 'tbackground',
            'group' => esc_html__('Price Content Css', 'risehand-addons'),
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __('Button Two Border Color', 'risehand-addons'),
            'param_name' => 'btntwoborder_color',
            'group' => esc_html__('Price Content Css', 'risehand-addons'),
        ),
        // Add other parameters here...

        // Parameters for Hover Styles
        array(
            'type' => 'colorpicker',
            'heading' => __('Hover Button One Color', 'risehand-addons'),
            'param_name' => 'hbtncolor',
            'group' => esc_html__('Price Content Css', 'risehand-addons'),
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __('Hover Button One Border Color', 'risehand-addons'),
            'param_name' => 'hbtnbrcolor',
            'group' => esc_html__('Price Content Css', 'risehand-addons'),
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __('Hover Button One Background', 'risehand-addons'),
            'param_name' => 'hbackground',
            'group' => esc_html__('Price Content Css', 'risehand-addons'),
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __('Hover Button Two Color', 'risehand-addons'),
            'param_name' => 'htbtncolor',
            'group' => esc_html__('Price Content Css', 'risehand-addons'),
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __('Hover Button Two Border Color', 'risehand-addons'),
            'param_name' => 'htbtnvcolor',
            'group' => esc_html__('Price Content Css', 'risehand-addons'),
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __('Hover Button Two Background', 'risehand-addons'),
            'param_name' => 'htbackground',
            'group' => esc_html__('Price Content Css', 'risehand-addons'),
        ),

        //  box css
        array(
            'type' => 'colorpicker',
            'heading' => __('Price Box Background Color', 'risehand-addons'),
            'param_name' => 'priceboxbgt',
            'group' => esc_html__('Price Box Css', 'risehand-addons'),
        ), 
        array(
            'type' => 'colorpicker',
            'heading' => __('Price Box Border Color', 'risehand-addons'),
            'param_name' => 'boxborder_color',
            'group' => esc_html__('Price Box Css', 'risehand-addons'),
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __('Price Box Active / Hover Border Color', 'risehand-addons'),
            'param_name' => 'activeboxborder_color',
            'group' => esc_html__('Price Box Css', 'risehand-addons'),
        ), 
        array(
            'type' => 'textfield',
            'heading' => __('Box Padding', 'risehand-addons'),
            'param_name' => 'boxpadding',
            'description' => __('Enter the padding for the Price Box (e.g., 10px or 2%).', 'risehand-addons'),
            'group' => esc_html__('Price Box Css', 'risehand-addons'),
        ),
 
)));
} 
// shortcode 
add_shortcode( 'vc_price_pan_tab_v1_init', 'vc_price_pan_tab_v1' );
function vc_price_pan_tab_v1( $atts, $content = null ) { 
$unique_id = uniqid();
$atts = shortcode_atts(
   array(
    'tag_type' => 'div' ,
    'priceboxbgt' => '', 
    'boxborder_color' => '',
    'activeboxborder_color' => '', 
    'boxpadding' => '',
    'btnoneborder_color'  => '',
    'btntwoborder_color'  => '',
    'btncolor' => '',
    'button_border_radius' => '',
    'button_padding_radius' => '',
    'background' => '',
    'tbtncolor' => '', 
    'tbutton_border_radius' => '',
    'tbutton_padding_radius' => '',
    'tbackground' => '',
    'hbtncolor' => '',
    'hbtnbrcolor' => '',
    'hbackground' => '',
    'htbtncolor' => '',
    'htbtnvcolor' => '',
    'htbackground' => '',
    'pricecolor' => '',
    'priceprcolor' => '',
    'title_color' => '', 
    'des_color' => '', 
    'listiconcolor' => '',
    'listiconcolortwo' => '',
    'listcolor' => '', 
    'tagvfcolor' => '', 
    'tagcolor' => '', 
    'tabtcss'  => '',
    'tab_margin'  => '', 
    'tabbtn_bg'  => '', 
    'tabbtn_bpor'  => '', 
    'actabcolo'  => '', 
    'actabgcolo'  => '', 
    'offer_color' => '', 
    'offersvg_color' => '', 
    'offerbg_color' => '', 
    'price_styles' => 'type_one',  
    'price_tabstyle' => 'type_one', 
    'price_column' => 'col-xl-3 col-lg-4 col-md-6 col-sm-6', 
    'tabbtn_alignment' => 'start', 
    'percentage' => 'save 65%', 
    'offer_for' => 'offer_for_tab_one',  
    'tab_id' => 'tabone', 
    'tab_title' => 'Monthly', 
    'price_repeater' => '', 
    'tab_id_two' => 'tabtwo', 
    'tab_title_two' => 'Yearly', 
    'price_repeater_two' => '', 
   ), $atts
); 
ob_start();
$allowed_tags = wp_kses_allowed_html('post');
$price_repeaters = function_exists( 'vc_param_group_parse_atts' ) ? vc_param_group_parse_atts( $atts['price_repeater'] ) : array();
$price_repeaters_twos = function_exists( 'vc_param_group_parse_atts' ) ? vc_param_group_parse_atts( $atts['price_repeater_two'] ) : array();
?>

<style type="text/css" data-type="vc_shortcodes-custom"> 
        <?php if($atts['priceboxbgt']): ?>  
            .price-tab-id-<?php echo esc_attr($unique_id); ?> .price_box {
                background: <?php echo esc_attr($atts['priceboxbgt']); ?>!important;
            } 
        <?php endif; ?>
        <?php if($atts['boxborder_color']): ?>  
            .price-tab-id-<?php echo esc_attr($unique_id); ?> .price_box  ,
            .price-tab-id-<?php echo esc_attr($unique_id); ?>  .price_box.style_one .nk-list-link {
                border-color: <?php echo esc_attr($atts['boxborder_color']); ?>!important;
            } 
        <?php endif; ?>
       
        <?php if($atts['boxpadding']): ?>  
            .price-tab-id-<?php echo esc_attr($unique_id); ?> .price_box   {
                padding: <?php echo esc_attr($atts['boxpadding']); ?>!important;
            } 
        <?php endif; ?>

        <?php if($atts['activeboxborder_color']): ?>  
            .price-tab-id-<?php echo esc_attr($unique_id); ?> .price_box:hover ,
             .price-tab-id-<?php echo esc_attr($unique_id); ?> .price_box.active   {
                border-color: <?php echo esc_attr($atts['activeboxborder_color']); ?>!important;
            } 
        <?php endif; ?>

        <?php if($atts['btncolor']): ?>  
            .price-tab-id-<?php echo esc_attr($unique_id); ?> .price_box .theme_btn.one {
                color: <?php echo esc_attr($atts['btncolor']); ?>!important;
            } 
        <?php endif; ?>
        <?php if($atts['button_border_radius']): ?>  
            .price-tab-id-<?php echo esc_attr($unique_id); ?> .price_box .theme_btn.one { 
                border-radius: <?php echo esc_attr($atts['button_border_radius']); ?>!important; 
            } 
        <?php endif; ?>
        <?php if($atts['button_padding_radius']): ?>  
            .price-tab-id-<?php echo esc_attr($unique_id); ?> .price_box .theme_btn.one {
                padding: <?php echo esc_attr($atts['button_padding_radius']); ?>!important;
            } 
        <?php endif; ?>
        <?php if($atts['background']): ?>  
            .price-tab-id-<?php echo esc_attr($unique_id); ?> .price_box .theme_btn.one {
                background: <?php echo esc_attr($atts['background']); ?>!important;
            } 
        <?php endif; ?>
        <?php if($atts['btnoneborder_color']): ?>  
            .price-tab-id-<?php echo esc_attr($unique_id); ?> .price_box .theme_btn.one { 
                border-color: <?php echo esc_attr($atts['btnoneborder_color']); ?>!important;
        } 
        <?php endif; ?> 
        <?php if($atts['tbtncolor']): ?>  
            .price-tab-id-<?php echo esc_attr($unique_id); ?> .price_box .theme_btn.two {
                color: <?php echo esc_attr($atts['tbtncolor']); ?>!important;  
            }
        <?php endif; ?>
        <?php if($atts['tbutton_border_radius']): ?>  
            .price-tab-id-<?php echo esc_attr($unique_id); ?> .price_box .theme_btn.two { 
                border-radius: <?php echo esc_attr($atts['tbutton_border_radius']); ?>!important; 
            }
        <?php endif; ?>
        <?php if($atts['tbutton_padding_radius']): ?>  
            .price-tab-id-<?php echo esc_attr($unique_id); ?> .price_box .theme_btn.two { 
                padding: <?php echo esc_attr($atts['tbutton_padding_radius']); ?>!important; 
            }
        <?php endif; ?>
        <?php if($atts['tbackground']): ?>  
            .price-tab-id-<?php echo esc_attr($unique_id); ?> .price_box .theme_btn.two { 
                background: <?php echo esc_attr($atts['tbackground']); ?>!important; 
            }
        <?php endif; ?>
        <?php if($atts['btntwoborder_color']): ?>  
            .price-tab-id-<?php echo esc_attr($unique_id); ?> .price_box .theme_btn.two { 
                border-color: <?php echo esc_attr($atts['btntwoborder_color']); ?>!important;
            }
        <?php endif; ?> 
        <?php if($atts['hbtncolor']): ?>  
            .price-tab-id-<?php echo esc_attr($unique_id); ?> .price_box .theme_btn.one:hover,
                .price-tab-id-<?php echo esc_attr($unique_id); ?> .price_box.active .theme_btn.one {
                    color: <?php echo esc_attr($atts['hbtncolor']); ?>!important; 
                }
        <?php endif; ?>
        <?php if($atts['hbtnbrcolor']): ?>  
            .price-tab-id-<?php echo esc_attr($unique_id); ?> .price_box .theme_btn.one:hover,
                .price-tab-id-<?php echo esc_attr($unique_id); ?> .price_box.active .theme_btn.one { 
                    border-color: <?php echo esc_attr($atts['hbtnbrcolor']); ?>!important; 
                }
        <?php endif; ?>
        <?php if($atts['hbackground']): ?>  
            .price-tab-id-<?php echo esc_attr($unique_id); ?> .price_box .theme_btn.one:hover,
                .price-tab-id-<?php echo esc_attr($unique_id); ?> .price_box.active .theme_btn.one { 
                    background: <?php echo esc_attr($atts['hbackground']); ?>!important;
                }
        <?php endif; ?>
        <?php if($atts['htbtncolor']): ?>  
            .price-tab-id-<?php echo esc_attr($unique_id); ?> .price_box .theme_btn.two:hover,
            .price-tab-id-<?php echo esc_attr($unique_id); ?> .price_box.active .theme_btn.two {
                color: <?php echo esc_attr($atts['htbtncolor']); ?>!important; 
            }
        <?php endif; ?>
        <?php if($atts['htbtnvcolor']): ?>  
            .price-tab-id-<?php echo esc_attr($unique_id); ?> .price_box .theme_btn.two:hover,
            .price-tab-id-<?php echo esc_attr($unique_id); ?> .price_box.active .theme_btn.two {
                border-color: <?php echo esc_attr($atts['htbtnvcolor']); ?>!important; 
            }
        <?php endif; ?>    
        <?php if($atts['htbackground']): ?>  
            .price-tab-id-<?php echo esc_attr($unique_id); ?> .price_box .theme_btn.two:hover,
            .price-tab-id-<?php echo esc_attr($unique_id); ?> .price_box.active .theme_btn.two {
                background: <?php echo esc_attr($atts['htbackground']); ?>!important;
            }
        <?php endif; ?>  
        <?php if($atts['pricecolor']): ?>  
        /* Price Color */
        .price-tab-id-<?php echo esc_attr($unique_id); ?>  .price_box .amount {
            color: <?php echo esc_attr($atts['pricecolor']); ?>!important;
        }
        <?php endif; ?>  
        <?php if($atts['priceprcolor']): ?> 
        /* Price Period Color */
        .price-tab-id-<?php echo esc_attr($unique_id); ?>  .price_box .amount-text {
            color: <?php echo esc_attr($atts['priceprcolor']); ?>!important;
        }
        <?php endif; ?>  
        <?php if($atts['title_color']): ?> 
        /* Title Color */
        .price-tab-id-<?php echo esc_attr($unique_id); ?>  .nk-pricing-head .title_no_a_20 {
            color: <?php echo esc_attr($atts['title_color']); ?>!important;
           
        }
        <?php endif; ?>  
        <?php if($atts['des_color']): ?> 
        /* Small Description Color */
        .price-tab-id-<?php echo esc_attr($unique_id); ?>  .nk-pricing-head p {
            color: <?php echo esc_attr($atts['des_color']); ?>!important;
           
        }
        <?php endif; ?>  
        <?php if($atts['listiconcolor']): ?> 
        /* Feature Icon Color 1 */
        .price-tab-id-<?php echo esc_attr($unique_id); ?>  .price_box .nk-list-link li em {
            color: <?php echo esc_attr($atts['listiconcolor']); ?>!important;
        }
        <?php endif; ?>  
        <?php if($atts['listiconcolortwo']): ?> 
        /* Feature Icon Color 2 */
        .price-tab-id-<?php echo esc_attr($unique_id); ?>  .price_box .nk-list-link li em.risehand-cross-circle-fill {
            color: <?php echo esc_attr($atts['listiconcolortwo']); ?>!important;
        }
        <?php endif; ?>  
        <?php if($atts['listcolor']): ?> 
        /* Feature Color */
        .price-tab-id-<?php echo esc_attr($unique_id); ?>  .price_box .nk-list-link li {
            color: <?php echo esc_attr($atts['listcolor']); ?>!important; 
        }
        <?php endif; ?>  
    <?php if($atts['tagvfcolor']): ?> 
    .price-tab-id-<?php echo esc_attr($unique_id); ?>  .price_box .badged {
        background: <?php echo esc_attr($atts[tagvfcolor]); ?>!important;
    }
    <?php endif; ?>  
    <?php if($atts['tagcolor']): ?> 
    .price-tab-id-<?php echo esc_attr($unique_id); ?> .price_box .badged , .price-tab-id-<?php echo esc_attr($unique_id); ?>  .price_box .badged {
        color: <?php echo esc_attr($atts['tagcolor']); ?>!important;
    }
    <?php endif; ?>  
    <?php if($atts['offer_color']): ?>
        .price-tab-id-<?php echo esc_attr($unique_id); ?> .showcase_tabs_btns .percentage small {color:<?php echo esc_attr($atts['offer_color']); ?>!important;} 
    <?php endif; ?>  
    <?php if($atts['offersvg_color']): ?>
        .price-tab-id-<?php echo esc_attr($unique_id); ?> .showcase_tabs_btns .percentage svg path {fill:<?php echo esc_attr($atts['offersvg_color']); ?>!important;} 
    <?php endif; ?>  
    <?php if($atts['offerbg_color']): ?>
        .price-tab-id-<?php echo esc_attr($unique_id); ?> .showcase_tabs_btns .percentage small {background:<?php echo esc_attr($atts['offerbg_color']); ?>!important;} 
    <?php endif; ?>  
    <?php // tab margin ?>
    <?php if($atts['tab_margin']): ?>
        .price-tab-id-<?php echo esc_attr($unique_id); ?> .tab_over_all_box .showcase_tabs_btns {margin:<?php echo esc_attr($atts['tab_margin']); ?>!important;} 
    <?php endif; ?>  
    <?php if($atts['tabtcss']): ?> 
        .price-tab-id-<?php echo esc_attr($unique_id); ?>  .tab_over_all_box .showcase_tabs_btns .title_no_a_20 {
            color:<?php echo esc_attr($atts['tabtcss']); ?>!important;
        } 
    <?php endif; ?> 
    <?php if($atts['tabbtn_alignment']): ?> 
        .price-tab-id-<?php echo esc_attr($unique_id); ?>  .tabs_header {
            text-align:<?php echo esc_attr($atts['tabbtn_alignment']); ?>!important;
        } 
    <?php endif; ?> 
    <?php if($atts['tabbtn_bg']): ?> 
        .price-tab-id-<?php echo esc_attr($unique_id); ?>  .tab_over_all_box .showcase_tabs_btns , 
        .price-tab-id-<?php echo esc_attr($unique_id); ?>  .price_tab .nav-item:first-child .nav-link:before {
            background:<?php echo esc_attr($atts['tabbtn_bg']); ?>!important;
        } 
    <?php endif; ?> 
    <?php if($atts['tabbtn_bpor']): ?>
        .price-tab-id-<?php echo esc_attr($unique_id); ?> .tab_over_all_box .showcase_tabs_btns , 
        .price-tab-id-<?php echo esc_attr($unique_id); ?> .price_tab .nav-item:first-child .nav-link:before {
            border-color:<?php echo esc_attr($atts['tabbtn_bpor']); ?>!important;
        } 
    <?php endif; ?> 
    <?php if($atts['actabcolo']): ?>
        .price-tab-id-<?php echo esc_attr($unique_id); ?> .price_tab .nav-item .nav-link.active .title_no_a_20 , 
        .price-tab-id-<?php echo esc_attr($unique_id); ?> .price_tab .nav-item .nav-link:hover .title_no_a_20 {color:<?php echo esc_attr($atts['actabcolo']); ?>!important;} 
    <?php endif; ?> 
    <?php if($atts['actabgcolo']): ?>
        .price-tab-id-<?php echo esc_attr($unique_id); ?> .price_tab .nav-item .nav-link.active , .price-tab-id-<?php echo esc_attr($unique_id); ?>  .price_tab .nav-item .nav-link:hover , .price-tab-id-<?php echo esc_attr($unique_id); ?>
        .price_tab .nav-item:first-child .nav-link.active::after , .price-tab-id-<?php echo esc_attr($unique_id); ?>  .price_tab .nav-item:first-child .nav-link:hover::after , .price-tab-id-<?php echo esc_attr($unique_id); ?> 
        .price_tab .nav-item.last .nav-link.active::after , .price-tab-id-<?php echo esc_attr($unique_id); ?>  .price_tab .nav-item.last .nav-link:hover::after {background:<?php echo esc_attr($atts['actabgcolo']); ?>!important; border-color:<?php echo esc_attr($atts['actabgcolo']); ?>!important;} 
    <?php endif; ?> 
   
   <?php // tab margin ?>
</style> 
 
<section class="price_tab_box price-tab-id-<?php echo esc_attr($unique_id); ?> risehand_tab p_<?php echo esc_attr($atts['price_styles']); ?> ptab_<?php echo esc_attr($atts['price_tabstyle']); ?> <?php if(!empty($atts['percentage'])): ?> ptab_<?php echo esc_attr($atts['offer_for']); ?> <?php endif; ?>">
    <div class="tab_over_all_box"> 
        <div class="tabs_header clearfix">
            <ul class="showcase_tabs_btns price_tab nav-pills nav clearfix">
                <?php if(!empty($atts['tab_title'])): ?>
                <li class="nav-item">
                    <a class="s_tab_btn nav-link active" data-tab="#risehand_price_<?php echo esc_attr($atts['tab_id']); ?>">
                    <?php if($atts['price_tabstyle'] == 'type_two'): ?> <em class="dot left"></em> <?php endif; ?>
                        <small class="title_no_a_20"><?php echo esc_attr($atts['tab_title']); ?></small>
                    </a>
                </li>
                <?php endif; ?>
                <?php if(!empty($atts['tab_title_two'])): ?>
                <li class="nav-item last">
                    <a class="s_tab_btn nav-link" data-tab="#risehand_price_<?php echo esc_attr($atts['tab_id_two']); ?>">
                        <?php if($atts['price_tabstyle'] == 'type_two'): ?> <em class="dot right"></em> <?php endif; ?>
                        <small class="title_no_a_20"><?php echo esc_attr($atts['tab_title_two']); ?></small>
                    </a>
                </li>
                <?php if(!empty($atts['percentage'])): ?>
                <div class="percentage"> <small><?php echo esc_attr($atts['percentage']); ?></small>
                <svg width="62" height="26" viewBox="0 0 62 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M43.4381 5.24806C43.5252 5.53058 43.6028 5.77372 43.645 5.9021C43.9053 6.68293 44.1244 8.66552 45.1286 10.0139C45.8941 11.0427 47.1175 11.7065 48.9781 11.4674C50.6692 11.2501 51.7219 10.3221 52.2285 9.03901C53.3188 6.27764 52.004 1.86621 50.9816 0.589959C50.8698 0.450665 50.5751 0.387526 50.3221 0.449043C50.0702 0.510246 49.9555 0.672451 50.0672 0.811744C51.0478 2.03661 52.2984 6.27131 51.2517 8.92229C50.8424 9.95843 50.1164 10.7561 48.7502 10.9315C47.402 11.1049 46.6087 10.5513 46.0538 9.80541C45.0761 8.49329 44.8813 6.56306 44.6286 5.8027C44.4697 5.32608 43.9569 3.49891 43.8445 3.34813C43.7039 3.15927 43.4129 3.16443 43.3176 3.17007C43.2438 3.17439 42.8782 3.20902 42.8616 3.45903C42.6213 7.02381 37.7702 12.4025 30.6347 16.003C23.562 19.572 14.211 21.3923 4.84281 17.8519C4.61497 17.7661 4.30348 17.7981 4.14712 17.9229C3.99133 18.0483 4.04933 18.2198 4.27717 18.3055C14.0931 22.0149 23.9005 20.1479 31.31 16.4091C37.5549 13.2581 42.0715 8.77617 43.4381 5.24806Z" fill="#0A1425"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.09394 18.2266C6.26876 18.1734 7.4416 18.1409 8.60959 18.0374C11.7214 17.7619 14.8488 17.1127 17.3726 16.0632C17.5931 15.9711 17.6361 15.7986 17.4704 15.6775C17.3031 15.5561 16.9897 15.5325 16.7697 15.6237C14.3755 16.6206 11.4034 17.2324 8.45101 17.4937C7.11399 17.6119 5.769 17.6357 4.42348 17.7063C4.35641 17.7103 3.77003 17.7312 3.64849 17.7543C3.36487 17.8073 3.30885 17.9289 3.29605 17.987C3.28425 18.0355 3.29122 18.0951 3.34847 18.1616C3.39597 18.2161 3.53025 18.3078 3.75716 18.4094C4.48216 18.736 6.37182 19.3644 6.66215 19.4856C9.99077 20.8747 12.6638 22.4747 15.5546 24.1204C15.7472 24.2292 16.0642 24.2324 16.2626 24.127C16.4609 24.0216 16.4655 23.8474 16.274 23.7382C13.3469 22.0715 10.6358 20.4534 7.2664 19.0476C7.06736 18.9639 5.91853 18.534 5.09394 18.2266Z" fill="#0A1425"/>
                </svg>
                </div>
                <?php endif; ?>
                <?php endif; ?>
            </ul>
        </div>
        <div class="s_tab_wrapper">
            <div class="s_tabs_content">
                <?php //  tab ?>
                <div class="s_tab fade active-tab show" id="risehand_price_<?php echo esc_attr($atts['tab_id']); ?>">
                    <div class="row">
                        <?php if(!empty($price_repeaters)): foreach($price_repeaters as $key => $price_repeater):    
                            $features_repeater_one = function_exists( 'vc_param_group_parse_atts' ) ? vc_param_group_parse_atts( $price_repeater['features_repeater_one'] ) : array();
                            // btn one 
                            $link  = '#';
                            $link_target  = '';
                            $link_unfollow  = '';
                             if (!empty( $price_repeater['btnonelink'])) {
                                $link_go = vc_build_link($price_repeater['btnonelink']);
                                // Extract the URL
                                $link = $link_go['url'];
                                // Extract the target option
                                $link_target = !empty($link_go['target']) ? ' target="' . esc_attr($link_go['target']) . '"' : '';
                                // Extract the nofollow option
                                $link_unfollow = !empty($link_go['rel']) && $link_go['rel'] === 'nofollow' ? ' rel="nofollow"' : '';
                            }   
                            // btn two
                            $link_two  = '#';
                            $link_target_two  = '';
                            $link_unfollow_two  = '';
                             if (!empty( $price_repeater['btntwolink'])) {
                                $link_go_two = vc_build_link($price_repeater['btntwolink']);
                                // Extract the URL
                                $link_two = $link_go_two['url'];
                                // Extract the target option
                                $link_target_two = !empty($link_go_two['target']) ? ' target="' . esc_attr($link_go_two['target']) . '"' : '';
                                // Extract the nofollow option
                                $link_unfollow_two = !empty($link_go_two['rel']) && $link_go_two['rel'] === 'nofollow' ? ' rel="nofollow"' : '';
                            }   
                            ?>
                        <div class="<?php echo esc_attr($atts['price_column']); ?>">
                            <?php // price box style ?>
                            <?php if($atts['price_styles'] == 'type_two'): ?>
                            <?php // price box style ?>
                            <div class="price_box style_two mb_30 trans <?php if(!empty($price_repeater['actived']) == 'yes'): ?> active<?php endif; ?>">
                            <div class="price_box_inner">
                                <div class="nk-pricing-head pb-2">
                                    <?php if(!empty($price_repeater['tag'])): ?>
                                    <div class="nk-pricing-title-group mb-2 text-end"> 
                                        <span class="font_special trans badged"><?php echo wp_kses($price_repeater['tag'] , $allowed_tags);  ?></span>
                                    </div> 
                                    <?php endif; ?>
                                    <div class="nk-year-amount amount-wrap">
                                        <?php if(!empty($price_repeater['price'])): ?>
                                        <span class="amount h1 mb-0">
                                            <?php if(!empty($price_repeater['price_symbol'])): ?>
                                            <sub><?php echo wp_kses($price_repeater['price_symbol'] , $allowed_tags);  ?></sub>
                                            <?php endif; ?>
                                            <?php echo wp_kses($price_repeater['price'] , $allowed_tags);  ?>
                                        </span>
                                        <?php if(!empty($price_repeater['price_duration'])): ?>
                                        <span class="amount-text"> /
                                            <?php echo wp_kses($price_repeater['price_duration'] , $allowed_tags);  ?></span>
                                        <?php endif; ?>
                                        <?php endif; ?>
                                    </div> 
                                        <div class="icon_title d-flex align-items-center">  
                                            <?php if(!empty($price_repeater['title'])): ?>
                                            <<?php echo esc_attr($atts['tag_type']); ?> class="title_no_a_20">
                                                <?php echo wp_kses($price_repeater['title'] , $allowed_tags);  ?>
                                            </<?php echo esc_attr($atts['tag_type']); ?>>
                                            <?php endif; ?>
                                        </div> 
                                    <?php if(!empty($price_repeater['description'])): ?>
                                    <p class="text mt-2 mb-2">
                                        <?php echo wp_kses($price_repeater['description'] , $allowed_tags);  ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="nk-pricing-body">
                                    
                                    <ul class="nk-list-link">
                                        <?php if(!empty($features_repeater_one)): foreach($features_repeater_one as $key => $features_text_one): ?>
                                        <li>
                                        <?php if($features_text_one['fone_yesno'] == "yes"): ?>
                                            <em class="icon risehand-check-circle-fill"></em>
                                        <?php elseif($features_text_one['fone_yesno'] == "no"): ?>
                                            <em class="icon risehand-cross-circle"></em>
                                        <?php endif; ?>
                                            <?php if(!empty($features_text_one['features_text_one'])): ?>
                                            <span><?php echo wp_kses($features_text_one['features_text_one'] , $allowed_tags); ?></span>
                                            <?php endif; ?>
                                        </li>
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                                    </ul>

                                    <ul class="gap g-3">
                                        <?php if(!empty($price_repeater['btnone'])): 
                                        ?>
                                        <li>
                                            <a href="<?php echo esc_url($link); ?>"
                                                class="theme_btn one" <?php echo esc_attr($link_target); ?> <?php echo esc_attr($link_unfollow); ?>>
                                                <?php echo wp_kses($price_repeater['btnone'] , $allowed_tags);  ?>
                                            </a>
                                        </li>
                                        <?php endif; ?>
                                        <?php if(!empty($price_repeater['btn2_enable']) == 'yes'): ?>
                                        <?php if(!empty($price_repeater['btntwo'])): 
                                        ?>
                                        <li>
                                        <a href="<?php echo esc_url($link_two); ?>"
                                                class="theme_btn two" <?php echo esc_attr($link_target_two); ?> <?php echo esc_attr($link_unfollow_two); ?>>
                                                <?php echo wp_kses($price_repeater['btntwo'] , $allowed_tags);  ?>
                                            </a>
                                        </li>
                                        <?php endif; ?>
                                        <?php endif; ?>
                                    </ul>

                                </div>
                            </div>
                            </div>
                            <?php // price box style ?>
                            <?php else: ?>
                            <?php // price box style ?>
                            <div class="price_box style_one trans <?php if(!empty($price_repeater['actived']) == 'yes'): ?> active<?php endif; ?>">
                                <div class="nk-pricing-head pb-4">
                                    <div class="nk-pricing-title-group mb-2">
                                       
                                    <div class="icon_title d-flex align-items-center">  
                                            <?php if(!empty($price_repeater['title'])): ?>
                                            <<?php echo esc_attr($atts['tag_type']); ?> class="title_no_a_20">
                                                <?php echo wp_kses($price_repeater['title'] , $allowed_tags);  ?>
                                            </<?php echo esc_attr($atts['tag_type']); ?>>
                                            <?php endif; ?>
                                        </div>
                                        <?php if(!empty($price_repeater['tag'])): ?>
                                        <span
                                            class="font_special trans badged"><?php echo wp_kses($price_repeater['tag'] , $allowed_tags);  ?></span>
                                        <?php endif; ?>
                                    </div>

                                    <div class="nk-year-amount amount-wrap">
                                        <?php if(!empty($price_repeater['price'])): ?>
                                        <span class="amount h1 mb-0">
                                            <?php if(!empty($price_repeater['price_symbol'])): ?>
                                            <sub><?php echo wp_kses($price_repeater['price_symbol'] , $allowed_tags);  ?></sub>
                                            <?php endif; ?>
                                            <?php echo wp_kses($price_repeater['price'] , $allowed_tags);  ?>
                                        </span>
                                        <?php if(!empty($price_repeater['price_duration'])): ?>
                                        <span class="amount-text"> /
                                            <?php echo wp_kses($price_repeater['price_duration'] , $allowed_tags);  ?></span>
                                        <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                    <?php if(!empty($price_repeater['description'])): ?>
                                    <p class="text mt-2 mb-2">
                                        <?php echo wp_kses($price_repeater['description'] , $allowed_tags);  ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="nk-pricing-body">
                                    
                                    <ul class="gap g-3">
                                        <?php if(!empty($price_repeater['btnone'])): ?>
                                        <li>
                                        <a href="<?php echo esc_url($link); ?>"
                                                class="theme_btn one" <?php echo esc_attr($link_target); ?> <?php echo esc_attr($link_unfollow); ?>>
                                                <?php echo wp_kses($price_repeater['btnone'] , $allowed_tags);  ?>
                                            </a>
                                        </li>
                                        <?php endif; ?>
                                        <?php if(!empty($price_repeater['btn2_enable']) == 'yes'): ?>
                                        <?php if(!empty($price_repeater['btntwo'])): ?>
                                        <li>
                                        <a href="<?php echo esc_url($link_two); ?>"
                                                class="theme_btn two" <?php echo esc_attr($link_target_two); ?> <?php echo esc_attr($link_unfollow_two); ?>>
                                                <?php echo wp_kses($price_repeater['btntwo'] , $allowed_tags);  ?>
                                            </a>
                                        </li>
                                        <?php endif; ?>
                                        <?php endif; ?>
                                    </ul>
                                 
                                    <ul class="nk-list-link">
                                    <?php if(!empty($features_repeater_one)): foreach($features_repeater_one as $key => $features_text_one): ?>
                                        <li>
                                        <?php if($features_text_one['fone_yesno'] == "yes"): ?>
                                            <em class="icon risehand-check-circle-fill"></em>
                                        <?php elseif($features_text_one['fone_yesno'] == "no"): ?>
                                            <em class="icon risehand-cross-circle"></em>
                                        <?php endif; ?>
                                            <?php if(!empty($features_text_one['features_text_one'])): ?>
                                            <span><?php echo wp_kses($features_text_one['features_text_one'] , $allowed_tags); ?></span>
                                            <?php endif; ?>
                                        </li>
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                                    </ul>
                                 
                                </div>
                            </div>
                            <?php // price box style ?>
                            <?php endif; ?>
                            <?php // price box style ?>
                        </div>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <?php //  tab end ?>
                <?php //  tab  ?>
                <div class="s_tab fade" id="risehand_price_<?php echo esc_attr($atts['tab_id_two']); ?>">
                    <div class="row">
                        <?php if(!empty($price_repeaters_twos)): foreach($price_repeaters_twos as $key => $price_repeater_two):    
                        $features_repeater_two = function_exists( 'vc_param_group_parse_atts' ) ? vc_param_group_parse_atts( $price_repeater_two['features_repeater_two'] ) : array();
                        // btn one 
                        $two_link  = '#';
                        $two_link_target  = '';
                        $two_link_unfollow  = '';
                        if (!empty( $price_repeater_two['btnonelink'])) {
                            $two_link_go = vc_build_link($price_repeater_two['btnonelink']);
                            // Extract the URL
                            $two_link = $two_link_go['url'];
                            // Extract the target option
                            $two_link_target = !empty($two_link_go['target']) ? ' target="' . esc_attr($two_link_go['target']) . '"' : '';
                            // Extract the nofollow option
                            $two_link_unfollow = !empty($two_link_go['rel']) && $two_link_go['rel'] === 'nofollow' ? ' rel="nofollow"' : '';
                        }  
                        // btn two
                        $two_link_two  = '#';
                        $two_link_target_two  = '';
                        $two_link_unfollow_two  = '';
                        if (!empty( $price_repeater['btntwolink'])) {
                            $two_link_go_two = vc_build_link($price_repeater['btntwolink']);
                            // Extract the URL
                            $two_link_two = $two_link_go_two['url'];
                            // Extract the target option
                            $two_link_target_two = !empty($two_link_go_two['target']) ? ' target="' . esc_attr($two_link_go_two['target']) . '"' : '';
                            // Extract the nofollow option
                            $two_link_unfollow_two = !empty($two_link_go_two['rel']) && $two_link_go_two['rel'] === 'nofollow' ? ' rel="nofollow"' : '';
                        }   
                        
                        ?>
                        <div class="<?php echo esc_attr($atts['price_column']); ?>">
                        <?php // price box style ?>
                            <?php if($atts['price_styles'] == 'type_two'): ?>
                            <?php // price box style ?>
                            <div class="price_box style_two mb_30 trans <?php if(!empty($price_repeater_two['actived_two']) == 'yes'): ?> active<?php endif; ?>">
                            <div class="price_box_inner">
                                <div class="nk-pricing-head pb-2">
                                    <?php if(!empty($price_repeater_two['tag_two'])): ?>
                                    <div class="nk-pricing-title-group mb-2 text-end"> 
                                        <span class="font_special trans badged"><?php echo wp_kses($price_repeater_two['tag_two'] , $allowed_tags);  ?></span>
                                    </div> 
                                    <?php endif; ?>
                                    <div class="nk-year-amount amount-wrap">
                                        <?php if(!empty($price_repeater_two['price_two'])): ?>
                                        <span class="amount h1 mb-0">
                                            <?php if(!empty($price_repeater_two['price_symbol_two'])): ?>
                                            <sub><?php echo wp_kses($price_repeater_two['price_symbol_two'] , $allowed_tags);  ?></sub>
                                            <?php endif; ?>
                                            <?php echo wp_kses($price_repeater_two['price_two'] , $allowed_tags);  ?>
                                        </span>
                                        <?php if(!empty($price_repeater_two['price_duration_two'])): ?>
                                        <span class="amount-text"> /
                                            <?php echo wp_kses($price_repeater_two['price_duration_two'] , $allowed_tags);  ?></span>
                                        <?php endif; ?>
                                        <?php endif; ?>
                                    </div> 
                                        <div class="icon_title d-flex align-items-center">  
                                            <?php if(!empty($price_repeater_two['title_two'])): ?>
                                            <<?php echo esc_attr($atts['tag_type']); ?> class="title_no_a_20">
                                                <?php echo wp_kses($price_repeater_two['title_two'] , $allowed_tags);  ?>
                                            </<?php echo esc_attr($atts['tag_type']); ?>>
                                            <?php endif; ?>
                                        </div> 
                                    <?php if(!empty($price_repeater_two['description_two'])): ?>
                                    <p class="text mt-2  mb-1">
                                        <?php echo wp_kses($price_repeater_two['description_two'] , $allowed_tags);  ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="nk-pricing-body"> 
                                    <ul class="nk-list-link">
                                    <?php if(!empty($features_repeater_two)): foreach($features_repeater_two as $key => $features_repeater_two): ?>
                                        <li>
                                            <?php if($features_repeater_two['fone_yesno_two'] == "yes"): ?>
                                            <em class="icon risehand-check-circle-fill"></em>
                                        <?php elseif($features_repeater_two['fone_yesno_two'] == "no"): ?>
                                            <em class="icon risehand-cross-circle"></em>
                                        <?php endif; ?> 
                                            <span><?php echo wp_kses($features_repeater_two['features_text_two'] , $allowed_tags); ?></span>
                                        </li>
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                                    </ul>

                                    <ul class="gap g-3">
                                        <?php if(!empty($price_repeater_two['btnone_two'])):  ?>
                                        <li>
                                        <a href="<?php echo esc_url($two_link); ?>"
                                                class="theme_btn one" <?php echo esc_attr($two_link_target); ?> <?php echo esc_attr($two_link_unfollow); ?>>
                                                <?php echo wp_kses($price_repeater_two['btnone_two'] , $allowed_tags);  ?>
                                            </a>
                                        </li>
                                        <?php endif; ?>
                                        <?php if(!empty($price_repeater_two['btn2_enable_two']) == 'yes'): ?>
                                        <?php if(!empty($price_repeater_two['btntwo_two'])): ?>
                                        <li>
                                        <a href="<?php echo esc_url($two_link_two); ?>"
                                                class="theme_btn two" <?php echo esc_attr($two_link_target_two); ?> <?php echo esc_attr($two_link_unfollow_two); ?>>
                                                <?php echo wp_kses($price_repeater_two['btntwo_two'] , $allowed_tags);  ?>
                                            </a>
                                        </li>
                                        <?php endif; ?>
                                        <?php endif; ?>
                                    </ul>

                                </div>
                            </div>
                                        </div>
                            <?php // price box style ?>
                            <?php else: ?>
                            <?php // price box style ?>
                            <div
                                class="price_box style_one trans <?php if(!empty($price_repeater_two['actived_two']) == 'yes'): ?> active<?php endif; ?>">
                                <div class="nk-pricing-head pb-4">
                                    <div class="nk-pricing-title-group mb-2">
                                    <div class="icon_title d-flex align-items-center">    
                                        <?php if(!empty($price_repeater_two['title_two'])): ?>
                                            <<?php echo esc_attr($atts['tag_type']); ?> class="title_no_a_20">
                                                <?php echo wp_kses($price_repeater_two['title_two'] , $allowed_tags);  ?>
                                            </<?php echo esc_attr($atts['tag_type']); ?>>
                                            <?php endif; ?>
                                        </div> 
                                        <?php if(!empty($price_repeater_two['tag_two'])): ?>
                                        <span
                                            class="font_special trans badged"><?php echo wp_kses($price_repeater_two['tag_two'] , $allowed_tags);  ?></span>
                                        <?php endif; ?>
                                    </div>

                                    <div class="nk-year-amount amount-wrap">
                                        <?php if(!empty($price_repeater_two['price_two'])): ?>
                                        <span class="amount h1 mb-0">
                                            <?php if(!empty($price_repeater_two['price_symbol_two'])): ?>
                                            <sub><?php echo wp_kses($price_repeater_two['price_symbol_two'] , $allowed_tags);  ?></sub>
                                            <?php endif; ?>
                                            <?php echo wp_kses($price_repeater_two['price_two'] , $allowed_tags);  ?>
                                        </span>
                                        <?php if(!empty($price_repeater_two['price_duration_two'])): ?>
                                        <span class="amount-text"> /
                                            <?php echo wp_kses($price_repeater_two['price_duration_two'] , $allowed_tags);  ?></span>
                                        <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                    <?php if(!empty($price_repeater_two['description_two'])): ?>
                                    <p class="text mt-2  mb-1">
                                        <?php echo wp_kses($price_repeater_two['description_two'] , $allowed_tags);  ?>
                                    </p>
                                    <?php endif; ?>
                                </div>
                                <div class="nk-pricing-body">
                             
                                    <ul class="gap g-3">
                                        <?php if(!empty($price_repeater_two['btnone_two'])): ?>
                                        <li>
                                        <a href="<?php echo esc_url($two_link); ?>"
                                                class="theme_btn one" <?php echo esc_attr($two_link_target); ?> <?php echo esc_attr($two_link_unfollow); ?>>
                                                <?php echo wp_kses($price_repeater_two['btnone_two'] , $allowed_tags);  ?>
                                            </a>
                                        </li>
                                        <?php endif; ?>
                                        <?php if(!empty($price_repeater_two['btn2_enable_two']) == 'yes'): ?>
                                        <?php if(!empty($price_repeater_two['btntwo_two'])): ?>
                                        <li>
                                        <a href="<?php echo esc_url($two_link_two); ?>"
                                                class="theme_btn two" <?php echo esc_attr($two_link_target_two); ?> <?php echo esc_attr($two_link_unfollow_two); ?>>
                                                <?php echo wp_kses($price_repeater_two['btntwo_two'] , $allowed_tags);  ?>
                                            </a>
                                        </li>
                                        <?php endif; ?>
                                        <?php endif; ?>
                                    </ul>
                               
                                    <ul class="nk-list-link">
                                    <?php if(!empty($features_repeater_two)): foreach($features_repeater_two as $key => $features_repeater_two): ?>
                                        <li>
                                        <?php if($features_repeater_two['fone_yesno_two'] == "yes"): ?>
                                            <em class="icon risehand-check-circle-fill"></em>
                                        <?php elseif($features_repeater_two['fone_yesno_two'] == "no"): ?>
                                            <em class="icon risehand-cross-circle"></em>
                                        <?php endif; ?>
                                            <span><?php echo wp_kses($features_repeater_two['features_text_two'] , $allowed_tags); ?></span>
                                        </li>
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                                    </ul>
                                     
                                </div>
                            </div>
                            <?php // price box style ?>
                            <?php endif; ?>
                            <?php // price box style ?>
                        </div>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <?php //  tab end ?>
            </div>
        </div>
    </div>
</section>
 
<?php
return ob_get_clean();
}



