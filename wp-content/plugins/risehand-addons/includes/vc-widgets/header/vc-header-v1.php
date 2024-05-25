<?php
add_action( 'vc_before_init', 'vc_header_v1_vcmap' );
function vc_header_v1_vcmap() {
 vc_map( array(
  "name" => __( "Prebuilt Header v1", "risehand-addons" ),
  "base" => "vc_header_v1_init",
  "class" => "",
  "icon" => "icon-risehand-svg", 
  "category" => __( "Risehand Header", "risehand-addons"),
  "params" => array(
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Slider Type', 'risehand-addons' ),
        'value' => array( 
            esc_html__( 'Full Width', 'risehand-addons' ) => 'container-fluid',
            esc_html__( 'Large Container', 'risehand-addons' )     => 'large-container' ,
            esc_html__( 'Auto Container', 'risehand-addons' ) => 'auto-container', 
            esc_html__( 'Medium Container', 'risehand-addons' ) => 'medium-container', 
            esc_html__( 'Container', 'risehand-addons' ) => 'container', 
        ), 
        'param_name' => 'header_layout', 
        'description' => esc_html__( 'Choose Header Layout', 'risehand-addons' ),
        'group' => esc_html__('General', 'risehand-addons') , 
    ),
    array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Topbar Content Enable / Disable', 'risehand-addons' ),
        'param_name'  => 'top_bar_enable',
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => '1' ), 
        'description' => esc_html__( 'You want to enable this to use Topbar Content', 'risehand-addons' ),
        'group' => esc_html__('General', 'risehand-addons') ,
    ),   
    array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Topbar Content Enable / Disable on Mobile', 'risehand-addons' ),
        'param_name'  => 'mobile_top_bar_enable',
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => '1' ),

        'group' => esc_html__('General', 'risehand-addons') ,
    ),   
    //  logo
    array(
        'type' => 'attach_image',
        'heading' => esc_html__('Logo Default', 'risehand-addons') ,
        'param_name' => 'logo_default',
        'group' => esc_html__('General', 'risehand-addons') ,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Logo Width', 'risehand-addons') ,
        'param_name' => 'logo_width',
        'value' => '170px', 
        "description" => __( "Enter logo width here in (px , rem and em )", "risehand-addons" ),
        'group' => esc_html__('General', 'risehand-addons') ,
    ) ,
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Logo Margin', 'risehand-addons') ,
        'param_name' => 'margin_logo',
        'value' => '0px 0px 0px 0px',
        'group' => esc_html__('General', 'risehand-addons') ,
    ) ,
    array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Custom Link Enable / Disable', 'risehand-addons' ),
        'param_name'  => 'custom_link_enable',
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => '1' ),
  
        'description' => esc_html__( 'Click Check box to enable Top Bar', 'risehand-addons' ),
        'group' => esc_html__('General', 'risehand-addons') ,
    ),
    array(
        'heading'    => esc_html__( 'Logo  URL (Link)', 'risehand-addons' ),
        'type'       => 'vc_link',
        'param_name' => 'logo_link',
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'custom_link_enable',
            'value'   => '1',
        ),
    ), 
    array(
        'type' => 'dropdown',
        'heading' => esc_html__('Navigation Menu', 'risehand-addons') ,
        'param_name' => 'navigations',
        'value'       => risehand_navmenu(),
        'group' => esc_html__('General', 'risehand-addons') ,
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Slider Type', 'risehand-addons' ),
        'value' => array( 
            esc_html__( 'Left', 'risehand-addons' ) => 'left',
            esc_html__( 'Center', 'risehand-addons' )     => 'center' ,
            esc_html__( 'Right', 'risehand-addons' ) => 'right',  
        ), 
        'param_name' => 'navigations_pos',
  
        'description' => esc_html__( 'Choose Navigation Menu Position', 'risehand-addons' ),
        'group' => esc_html__('General', 'risehand-addons') , 
    ),
    
    // top bar content
    array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Address Enable / Disable', 'risehand-addons' ),
        'param_name'  => 'addressenable',
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => '1' ),
 
        'description' => esc_html__( 'Click Check box to enable / disable Information ', 'risehand-addons' ),
        'group' => esc_html__('Topbar Content', 'risehand-addons') ,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Address Title', 'risehand-addons') ,
        'param_name' => 'address_title',
        'value' =>  esc_html__('Locate Us :', 'risehand-addons') ,

        'group' => esc_html__('Topbar Content', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'addressenable',
            'value'   => '1',
        ),
     ) ,
     array(
        'type' => 'textfield',
        'heading' => esc_html__('Address', 'risehand-addons') ,
        'param_name' => 'address',
        'value' =>  esc_html__('61W Business Str Hobert, LA', 'risehand-addons') ,
     
        'group' => esc_html__('Topbar Content', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'addressenable',
            'value'   => '1',
        ),
     ) ,
     array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Mail Id Enable / Disable', 'risehand-addons' ),
        'param_name'  => 'mailenable',
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => '1' ), 

        'group' => esc_html__('Topbar Content', 'risehand-addons') ,
    ),
     array(
        'type' => 'textfield',
        'heading' => esc_html__('Mail Id Title', 'risehand-addons') ,
        'param_name' => 'email_title',
        'value' =>  esc_html__('Email Us :', 'risehand-addons') ,
    
        'group' => esc_html__('Topbar Content', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'mailenable',
            'value'   => '1',
        ),
     ) ,
     array(
        'type' => 'textfield',
        'heading' => esc_html__('Mail Id', 'risehand-addons') ,
        'param_name' => 'email_address',
        'value' =>  esc_html__('risehand@gmail.com', 'risehand-addons') ,

        'group' => esc_html__('Topbar Content', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'mailenable',
            'value'   => '1',
        ),
     ) ,
     array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Mail Id Enable / Disable', 'risehand-addons' ),
        'param_name'  => 'phoneenable',
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => '1' ), 
         
        'group' => esc_html__('Topbar Content', 'risehand-addons') ,
    ),
     array(
        'type' => 'textfield',
        'heading' => esc_html__('Phone Title', 'risehand-addons') ,
        'param_name' => 'phone_title',
        'value' =>  esc_html__('Phone : ', 'risehand-addons') ,

        'group' => esc_html__('Topbar Content', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'phoneenable',
            'value'   => '1',
        ),
     ) ,
     array(
        'type' => 'textfield',
        'heading' => esc_html__('Phone Number', 'risehand-addons') ,
        'param_name' => 'phone_number',
        'value' =>  esc_html__('+012 (345) 67 89', 'risehand-addons') ,
     
        'group' => esc_html__('Topbar Content', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'phoneenable',
            'value'   => '1',
        ),
     ) ,
     array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Button Enable / Disable', 'risehand-addons' ),
        'param_name'  => 'top_button_enable',
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => '1' ),  
        'group' => esc_html__('Topbar Content', 'risehand-addons') ,
    ),
     
     array(
        'type' => 'textfield',
        'heading' => esc_html__('Button 1 Text', 'risehand-addons') ,
        'param_name' => 'button_one',
        'value' => 'Popular Causes', 
   
        'group' => esc_html__('Topbar Content', 'risehand-addons') ,
       
    ),  
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Select Icon library', 'risehand-addons' ),
        'value' => array( 
            esc_html__( 'Risehand Custom Icons', 'risehand-addons' ) => 'custom',
            esc_html__( 'Font Awesome 5', 'risehand-addons' ) => 'fontawesome',
            esc_html__( 'None', 'risehand-addons' ) => 'none',
        ),  
        'param_name' => 'button_icontypeone',
      
        'description' => esc_html__( 'Select icon library.', 'risehand-addons' ), 
        'group' => esc_html__('Topbar Content', 'risehand-addons') ,
    ),
    array(
        'type' => 'iconpicker',
        'heading' => esc_html__( 'Button 1 Fontawesome Icon', 'risehand-addons' ),
        'param_name' => 'button_iconfontawe',
        'value' => 'fas fa-adjust',
        // default value to backend editor admin_label
        'atts' => array(
            'emptyIcon' => false,
            // default true, display an "EMPTY" icon?
            'iconsPerPage' => 500,
            // default 100, how many icons per/page to display, we use (big number) to display all icons in single page
        ),
        'dependency' =>  array(
            'element' => 'button_icontypeone',
            'value' => 'fontawesome',
        ),
        'group' => esc_html__('Topbar Content', 'risehand-addons') ,
        'description' => esc_html__( 'Select icon from library.', 'risehand-addons' ),
    ), 
    array(
        'type' => 'dropdown',
        'heading' => esc_html__('Icon', 'risehand-addons') ,
        'param_name' => 'button_icontype',
        'value'       => get_risehand_icons(),

         'dependency' =>   array(
            'element' => 'button_icontypeone',
            'value' => 'custom',
        ),
        'group' => esc_html__('Topbar Content', 'risehand-addons') ,
    ), 
    array(
        'heading'    => esc_html__( 'Button 1 Link', 'risehand-addons' ),
        'type'       => 'vc_link',
        'param_name' => 'button_link', 
        'group' => esc_html__('Topbar Content', 'risehand-addons') ,
    ),  
    array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Social Media Enable / Disable', 'risehand-addons' ),
        'param_name'  => 'social_media_enable',
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => '1' ), 
 
        'group' => esc_html__('Topbar Content', 'risehand-addons') ,
    ),
     
    array(
        'type' => 'param_group',
        'heading' => esc_html__('Media Repeater', 'risehand-addons') ,
        'param_name' => 'social_media_repeater',
        'params' => array( 
            array(
                'type' => 'iconpicker',
                'heading' => esc_html__( 'Icon', 'risehand-addons' ),
                'param_name' => 'media',
                'value' => 'fas fa-facebook',
                // default value to backend editor admin_label
                'atts' => array(
                    'emptyIcon' => false,
                    // default true, display an "EMPTY" icon?
                    'iconsPerPage' => 500,
                    // default 100, how many icons per/page to display, we use (big number) to display all icons in single page
                ),  
                'description' => esc_html__( 'Select icon from library.', 'risehand-addons' ),
            ), 
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Media Link', 'risehand-addons') ,
                'param_name' => 'media_link',
                'value' => '#', 
            ),
             
        ),
        'group' => esc_html__('Topbar Content', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'social_media_enable',
            'value'   => '1',
        ),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Icon Color', 'risehand-addons'),
        'param_name' => 'top_icon_color',
        'group' => esc_html__('Topbar Content', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Title Color', 'risehand-addons'),
        'param_name' => 'top_title_color',
        'group' => esc_html__('Topbar Content', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Content Color', 'risehand-addons'),
        'param_name' => 'top_content_color',
        'group' => esc_html__('Topbar Content', 'risehand-addons') ,
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => __('Button Icon Color', 'risehand-addons'),
        'param_name' => 'topbtncolr',
        'group' => esc_html__('Topbar Content', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Button Color', 'risehand-addons'),
        'param_name' => 'topbtniconcolr',
        'group' => esc_html__('Topbar Content', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Button Hover Line Color', 'risehand-addons'),
        'param_name' => 'hotopbtniconcolr',
        'group' => esc_html__('Topbar Content', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Media Icon Color', 'risehand-addons'),
        'param_name' => 'social_icon_color',
        'group' => esc_html__('Topbar Content', 'risehand-addons') ,
    ),
      // Main Header content
      array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Main Header Content Mode', 'risehand-addons' ),
        'value' => array( 
            esc_html__( 'Dark', 'risehand-addons' ) => 'dark',
            esc_html__( 'White', 'risehand-addons' ) => 'white', 
        ),  
        'param_name' => 'mode',
   
        'group' => esc_html__('Main Header Content', 'risehand-addons') ,
    ),
    array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Language Enable / Disable', 'risehand-addons' ),
        'param_name'  => 'language_enable',
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => '1' ),
     
        'description' => esc_html__( 'Click Check box to enable / disable Language ', 'risehand-addons' ),
        'group' => esc_html__('Main Header Content', 'risehand-addons') ,
    ),
    array(
        'type'       => 'dropdown',
        'heading'    => esc_html__('Language Type  ', 'risehand-addons'),
        'param_name' => 'language_type',
        'value'      => array( 
            esc_html__( 'Custom Link', 'risehand-addons' ) => 'custom_links' ,
            esc_html__( 'Shortcode', 'risehand-addons' ) => 'shortcode_lan' , 
        ),

        'group' => esc_html__('Main Header Content', 'risehand-addons') ,
        'dependency'  => array( 
            'element' => 'language_enable',
            'value'   => '1',
        ),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Default language Text', 'risehand-addons') ,
        'param_name' => 'lang_title',
        'value' => esc_html__('Select Language', 'risehand-addons') ,
        'group' => esc_html__('Main Header Content', 'risehand-addons') ,
        'dependency'  => array(
         
                'element' => 'language_type',
                'value'   => 'custom_links',
       
        ),
    ) ,
    array(
        'type' => 'param_group',
        'heading' => esc_html__('Language  Content', 'risehand-addons') ,
        'param_name' => 'language_repeater',
        'params' => array( 
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Language Text', 'risehand-addons') ,
                'param_name' => 'language_text',
                'value' => 'Italy', 
            ), 
            array(
                'heading'    => esc_html__( 'Link', 'risehand-addons' ),
                'type'       => 'vc_link',
                'param_name' => 'language_link',
            ),
        ),
        'group' => esc_html__('Main Header Content', 'risehand-addons') ,
        'dependency'  => array(
        
                'element' => 'language_type',
                'value'   => 'custom_links',
         
        ),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Place Language Shortcode', 'risehand-addons') ,
        'param_name' => 'shortcode_language',
        'value' => esc_html__('[gtranslate]', 'risehand-addons') ,
        'group' => esc_html__('Main Header Content', 'risehand-addons') ,
        'dependency'  => array( 
                'element' => 'language_type',
                'value'   => 'shortcode_lan', 
        ),
    ) , 
    array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Search Enable / Disable', 'risehand-addons' ),
        'param_name'  => 'search_enable',
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => '1' ), 
        'description' => esc_html__( 'Click Check box to enable / disable Search ', 'risehand-addons' ),
        'group' => esc_html__('Main Header Content', 'risehand-addons') ,
    ),
    array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Button Enable / Disable', 'risehand-addons' ),
        'param_name'  => 'button_enable',
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => '1' ), 
        'description' => esc_html__( 'Click Check box to enable / disable Button ', 'risehand-addons' ),
        'group' => esc_html__('Main Header Content', 'risehand-addons') ,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Button Text', 'risehand-addons') ,
        'param_name' => 'mbutton_one',
        'value' =>  esc_html__('Make Donation', 'risehand-addons') , 
        'group' => esc_html__('Main Header Content', 'risehand-addons') ,
    ),  
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Select Icon library', 'risehand-addons' ),
        'value' => array( 
            esc_html__( 'Risehand Custom Icons', 'risehand-addons' ) => 'custom',
            esc_html__( 'Font Awesome 5', 'risehand-addons' ) => 'fontawesome',
            esc_html__( 'None', 'risehand-addons' ) => 'none',
        ), 
        'param_name' => 'mbutton_icontype', 
        'description' => esc_html__( 'Select icon library.', 'risehand-addons' ), 
        'group' => esc_html__('Main Header Content', 'risehand-addons') ,
    ),
    array(
        'type' => 'iconpicker',
        'heading' => esc_html__( 'Button  Fontawesome Icon', 'risehand-addons' ),
        'param_name' => 'mbutton_iconfontawe',
        'value' => 'fas fa-adjust',
        // default value to backend editor admin_label
        'atts' => array(
            'emptyIcon' => false,
            // default true, display an "EMPTY" icon?
            'iconsPerPage' => 500,
            // default 100, how many icons per/page to display, we use (big number) to display all icons in single page
        ),
        'dependency' =>   
            array(
                'element' => 'mbutton_icontype',
                'value' => 'fontawesome',
            ), 
        'group' => esc_html__('Main Header Content', 'risehand-addons') ,
        'description' => esc_html__( 'Select icon from library.', 'risehand-addons' ),
    ), 
    array(
        'type' => 'dropdown',
        'heading' => esc_html__('Icon', 'risehand-addons') ,
        'param_name' => 'mbutton_icontypeone',
        'value'       => get_risehand_icons(), 
        'dependency' =>  array(
            'element' => 'mbutton_icontype',
            'value' => 'custom',
        ), 
        'group' => esc_html__('Main Header Content', 'risehand-addons') ,
    ), 
    array(
        'heading'    => esc_html__( 'Button  Link', 'risehand-addons' ),
        'type'       => 'vc_link',
        'param_name' => 'mbutton_link', 
        'group' => esc_html__('Main Header Content', 'risehand-addons') ,
    ),  
    array(
        'type' => 'colorpicker',
        'heading' => __('Language Icon Color', 'risehand-addons'),
        'param_name' => 'lang_switch_color_icon',
        'dependency'  => array(
            array(
                'element' => 'language_type',
                'value'   => 'shortcode_lan',
            ), 
        ),
        'group' => esc_html__('Main Header Content', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Language Text Color', 'risehand-addons'),
        'param_name' => 'lang_stext_color',
        'group' => esc_html__('Main Header Content', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Language Dropdown Bg Color', 'risehand-addons'),
        'param_name' => 'lang_drop_bg_color',
        'group' => esc_html__('Main Header Content', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Language Dropdown Border Color', 'risehand-addons'),
        'param_name' => 'lang_drop_br_color',
        'group' => esc_html__('Main Header Content', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Language Dropdown Text Color', 'risehand-addons'),
        'param_name' => 'lang_drop_text_color',
        'group' => esc_html__('Main Header Content', 'risehand-addons') ,
    ),
    //  mennu css
    array(
        'type' => 'colorpicker',
        'heading' => __('Menu Color', 'risehand-addons'),
        'param_name' => 'menu_color',
        'group' => esc_html__('Main Header Content', 'risehand-addons') ,
    ), 
  
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Menu Radius', 'risehand-addons' ),
        'param_name' => 'menubot_rad',
        'group' => esc_html__('Main Header Content', 'risehand-addons') ,
        'description' => esc_html__('Enter the radius like this eg( 0px 0px 0px 0px )', 'risehand-addons'),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Menu Padding', 'risehand-addons'),
        'param_name' => 'menu_padding',
        'group' => esc_html__('Main Header Content', 'risehand-addons') ,
        'description' => esc_html__('Enter the Padding like this eg( 0px 0px 0px 0px )', 'risehand-addons'),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Menu Margin', 'risehand-addons'),
        'param_name' => 'menu_margin',
        'group' => esc_html__('Main Header Content', 'risehand-addons') ,
        'description' => esc_html__('Enter the margin like this eg( 0px 0px 0px 0px )', 'risehand-addons'),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Menu Background Color', 'risehand-addons'),
        'param_name' => 'menubg_color',
        'group' => esc_html__('Main Header Content', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Menu Hover/ Active Color', 'risehand-addons'),
        'param_name' => 'menu_ac_color',
        'group' => esc_html__('Main Header Content', 'risehand-addons') ,
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => __('Menu Hover/ Active Background Color', 'risehand-addons'),
        'param_name' => 'menu_ac_bg_color',
        'group' => esc_html__('Main Header Content', 'risehand-addons') ,
    ),

    // Dropdown Menu Parameters
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Dropdown Menu Radius', 'risehand-addons' ),
        'param_name' => 'drop_menubot_rad',
        'group' => esc_html__('Main Header Content', 'risehand-addons') ,
        'description' => esc_html__('Enter the Radius like this eg( 0px 0px 0px 0px )', 'risehand-addons'),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Dropdown Menu Padding', 'risehand-addons'),
        'param_name' => 'drop_menu_padding',
        'group' => esc_html__('Main Header Content', 'risehand-addons') ,
        'description' => esc_html__('Enter the Padding like this eg( 0px 0px 0px 0px )', 'risehand-addons'),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Dropdown Background Color', 'risehand-addons'),
        'param_name' => 'drop_bg_color',
        'group' => esc_html__('Main Header Content', 'risehand-addons') ,
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => __('Dropdown Menu Color', 'risehand-addons'),
        'param_name' => 'drop_menu_color',
        'group' => esc_html__('Main Header Content', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Dropdown Menu Hover Color', 'risehand-addons'),
        'param_name' => 'drop_homenu_color',
        'group' => esc_html__('Main Header Content', 'risehand-addons') ,
    ),  
    // memu css
    array(
        'type' => 'colorpicker',
        'heading' => __('Search Icon Color', 'risehand-addons'),
        'param_name' => 'search_icon_color',
        'group' => esc_html__('Main Header Content', 'risehand-addons') ,
    ),
      // New parameters for button one styles
      array(
        'type' => 'colorpicker',
        'heading' => __('Button Color', 'risehand-addons'),
        'param_name' => 'button_one_color',
        'group' => esc_html__('Main Header Content', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Button Background Color', 'risehand-addons'),
        'param_name' => 'button_one_bg_color',
        'group' => esc_html__('Main Header Content', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Button Border Color', 'risehand-addons'),
        'param_name' => 'button_one_bor_color',
        'group' => esc_html__('Main Header Content', 'risehand-addons') ,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Button Padding', 'risehand-addons' ),
        'param_name' => 'button_padding_one',
        'group' => esc_html__('Main Header Content', 'risehand-addons') ,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Button Radius', 'risehand-addons' ),
        'param_name' => 'button_border_radius_one',
        'group' => esc_html__('Main Header Content', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Hover Button Color', 'risehand-addons'),
        'param_name' => 'hover_button_one_color',
        'group' => esc_html__('Main Header Content', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Hover Button Background Color', 'risehand-addons'),
        'param_name' => 'hover_button_one_bg_color',
        'group' => esc_html__('Main Header Content', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Hover Button Border Color', 'risehand-addons'),
        'param_name' => 'hover_button_one_bor_color',
        'group' => esc_html__('Main Header Content', 'risehand-addons') ,
    ),
    //  main header content end
    array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Option Panel Enable / Disable', 'risehand-addons' ),
        'param_name'  => 'option_panel_enable',
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => '1' ),
     
        'description' => esc_html__( 'Click Check box to enable / disable Option Panel ', 'risehand-addons' ),
        'group' => esc_html__('Option Panel', 'risehand-addons') ,
    ),
   
    array(
        'type' => 'attach_image',
        'heading' => esc_html__('Option Panel Logo', 'risehand-addons') ,
        'param_name' => 'opt_panel_logo',
        'group' => esc_html__('Option Panel', 'risehand-addons') ,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('About Company Text', 'risehand-addons') ,
        'param_name' => 'about_company_modal',
        'value' => 'Sorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo vive
        maecenas accumsan lacus vel facilisis.',  
        'group' => esc_html__('Option Panel', 'risehand-addons') ,
    ) , 
    
    array(
        'type'        => 'checkbox',
        'heading' => esc_html__('Form Enable / Disable', 'risehand-addons') ,
        'param_name'  => 'form_enable', 
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => '1' ), 
        'group' => esc_html__('Option Panel', 'risehand-addons') ,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Form Title', 'risehand-addons') ,
        'param_name' => 'form_title',
        'value' => 'Contact Us',  
        'group' => esc_html__('Option Panel', 'risehand-addons') ,
    ), 
    array(
        "type" => "textarea_html",
        "holder" => "div", 
        "heading" => __( "Contact Form Shortcode", "risehand-addons" ),
        "param_name" => "content",
        "value" => __( "Enter your Contact Form Shortcode", "risehand-addons" ),
        'group' => esc_html__('Option Panel', 'risehand-addons') ,
    ),
    array(
        'type'        => 'checkbox',
        'heading' => esc_html__('Contact  Enable / Disable', 'risehand-addons') ,
        'param_name'  => 'contact_panel_enable',
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => '1' ),  
        'group' => esc_html__('Option Panel', 'risehand-addons') ,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Phone Number', 'risehand-addons') ,
        'param_name' => 'mobile_phone_number',
        'value' => '+000(123)456989',  
        'group' => esc_html__('Option Panel', 'risehand-addons') ,
    ), 
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Mail Id', 'risehand-addons') ,
        'param_name' => 'mobile_mail_number',
        'value' => 'support@gmail.com',  
        'group' => esc_html__('Option Panel', 'risehand-addons') ,
    ), 
    array(
        'type'        => 'textfield',
        'heading' => esc_html__('Timing', 'risehand-addons') ,
        'param_name'  => 'working_hours',
        'value' => 'support@gmail.com',  
        'group' => esc_html__('Option Panel', 'risehand-addons') ,
    ),  
    array(
        'type'        => 'checkbox',
        'heading' => esc_html__('Copy Right Enable / Disable', 'risehand-addons') ,
        'param_name'  => 'copy_right_enable', 
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => '1' ), 
        'group' => esc_html__('Option Panel', 'risehand-addons') ,
    ),
    array(
        'type'        => 'textfield',
        'heading' => esc_html__('Copyright', 'risehand-addons') ,
        'param_name'  => 'copy_right_modal',
        'value' => 'Copyright © 2023. All Rights Reserved.',  
        'group' => esc_html__('Option Panel', 'risehand-addons') ,
    ), 
    
    
)));
}

// shortcode

add_shortcode( 'vc_header_v1_init', 'vc_header_v1' );
function vc_header_v1( $atts, $content = null ) { 
$unique_id = uniqid();
 $atts = shortcode_atts(
   array(  
        'search_icon_color' => '',
        'button_one_color' => '',
        'button_one_bg_color' => '',
        'button_one_bor_color' => '',
        'button_padding_one' => '',
        'button_border_radius_one' => '',
        'hover_button_one_color' => '',
        'hover_button_one_bg_color' => '',
        'hover_button_one_bor_color' => '',
    
        'top_icon_color' => '',
        'top_title_color' => '',
        'top_content_color' => '', 
        'topbtncolr' => '',
        'topbtniconcolr' => '',
        'hotopbtniconcolr' => '',
        'social_icon_color' => '',

        'lang_switch_color_icon' => '',
        'lang_stext_color' => '',
        'lang_drop_bg_color' => '',
        'lang_drop_br_color' => '',
        'lang_drop_text_color' => '',

        'menu_color' => '',  
        'menubot_rad' => '',
        'menu_padding' => '',
        'menu_margin' => '',
        'menubg_color' => '',
        'menu_ac_color' => '', 
        'menu_ac_bg_color' => '',

        'drop_menubot_rad' => '',
        'drop_menu_padding' => '',
        'drop_bg_color' => '', 
        'drop_menu_color' => '', 
        'drop_menubot_rad' => '',
        'drop_menu_padding' => '',
        'drop_menu_margin' => '',
        'drop_menubg_color' => '',
        'drop_homenu_color' => '',  
   
        'logo_default' => '',
        'logo_width' => '',
        'margin_logo' => '',
        'custom_link_enable' => '',
        'logo_link' => '#',
        'top_bar_enable' => '', 
        'mobile_top_bar_enable' => '', 
        'addressenable' => '', 
        'address_title' => 'Locate Us',
        'address' => '61W Business Str Hobert, LA',
        'mailenable'  => '',
        'email_title' => 'Email Us :',
        'email_address' => 'risehand@gmail.com',
        'phoneenable'  => '',
        'phone_title' => 'Phone :',
        'phone_number' => '+012(345)6789',
        'top_button_enable' => '',
        'button_one' => 'Become a Volunteer',
        'button_icontypeone' => 'custom',
        'button_icontype' => 'risehand-user2',
        'button_iconfontawe' => '',  
        'button_link' => '#', 
        'social_media_enable' => '' ,
        'social_media_repeater' => '' ,
        'header_layout' => 'container-fluid' , 
        'language_enable' => '' ,
        'lang_title'  => 'English' ,
        'language_type' => 'custom_links' ,
        'language_repeater' => '' ,
        'shortcode_language'  => '[gtranslate]' ,
        'navigations'  => '', 
        'navigations_pos'  => 'left', 
        'search_enable'  => '', 
        'button_enable'  => '',  
        'mbutton_icontype' => 'custom',
        'mbutton_icontypeone' => 'risehand-arrow-down-right1',
        'mbutton_iconnfontawe' => '', 
        'mbutton_lik' => '#' ,
        'mbutton_one'  => 'Make Donation',   
        'mode' => 'dark', 
        'option_panel_enable' => '', 
        'opt_panel_logo' => '', 
        'about_company_modal' => 'Denounce with righteous indignation and dislike men who are beguiled and demoralized by the charms pleasure moment so blinded desire that they cannot foresee the pain and trouble.',
     
        'form_enable' => '', 
        'form_title' => 'Need Any Help? Or Looking For an Agent',  
        'contact_panel_enable' => '',
        'mobile_phone_number' => '9806071234',
        'mobile_mail_number' => 'sendmail@example.com',
        'working_hours_panels' => 'Working Hours : Sun-monday, 09am-5pm',
        'copy_right_enable' => '',
        'copy_right_modal' => 'Copyright © 2023. All Rights Reserved.',
   ), $atts
);
$allowed_tags = wp_kses_allowed_html('post');
// logo link
$logo_link  = '';
$logo_target  = '';
$logo_nofollow  = '';
if(!empty($atts['custom_link_enable']) == "1"){
    if (!empty( $atts['logo_link'])) {
        $logo_link_go = vc_build_link($atts['logo_link']);
        // Extract the URL
        $logo_link = $logo_link_go['url'];
        // Extract the target option
        $logo_target = !empty($logo_link_go['target']) ? ' target="' . esc_attr($logo_link_go['target']) . '"' : '';
        // Extract the nofollow option
        $logo_nofollow = !empty($logo_link_go['rel']) && $logo_link_go['rel'] === 'nofollow' ? ' rel="nofollow"' : '';  
    }
} 
$logo_else_link = home_url();                 
 
// logo link
 
if(!empty($atts['social_media_enable']) == "1"){
$social_media_repeater = function_exists( 'vc_param_group_parse_atts' ) ? vc_param_group_parse_atts( $atts['social_media_repeater'] ) : array();
}
if(!empty($atts['language_enable']) == "1"){
$language_repeater = function_exists( 'vc_param_group_parse_atts' ) ? vc_param_group_parse_atts( $atts['language_repeater'] ) : array();
}  
ob_start();
?> 
 <style> 
    <?php if($atts['search_icon_color']): ?> 
    .header-id-<?php echo esc_attr($unique_id); ?> .header_main .search-toggler .risehand-search1 {
        color: <?php echo esc_attr($atts['search_icon_color']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['button_one_color']): ?> 
    .header-id-<?php echo esc_attr($unique_id); ?> .theme_btn.one {
        color: <?php echo esc_attr($atts['button_one_color']); ?>!important; 
    }
    <?php endif; ?> 
    <?php if($atts['button_one_bg_color']): ?> 
    .header-id-<?php echo esc_attr($unique_id); ?> .theme_btn.one {
        background-color: <?php echo esc_attr($atts['button_one_bg_color']); ?>!important; 
    }
    <?php endif; ?>
    <?php if($atts['button_one_bor_color']): ?> 
        .header-id-<?php echo esc_attr($unique_id); ?> .theme_btn.one {
            border-color: <?php echo esc_attr($atts['button_one_bor_color']); ?>!important; 
        }
    <?php endif; ?> 
    <?php if($atts['button_padding_one']): ?>  
        .header-id-<?php echo esc_attr($unique_id); ?> .theme_btn.one {
            padding: <?php echo esc_attr($atts['button_padding_one']); ?>!important; 
        }
    <?php endif; ?>
    <?php if($atts['button_border_radius_one']): ?> 
        .header-id-<?php echo esc_attr($unique_id); ?> .theme_btn.one { 
            border-radius: <?php echo esc_attr($atts['button_border_radius_one']); ?>!important;
        }
    <?php endif; ?> 
    <?php if($atts['hover_button_one_color']): ?> 
        .header-id-<?php echo esc_attr($unique_id); ?> .theme_btn.one:hover {
            color: <?php echo esc_attr($atts['hover_button_one_color']); ?>!important; 
        }
    <?php endif; ?> 
    <?php if($atts['hover_button_one_bg_color']): ?> 
        .header-id-<?php echo esc_attr($unique_id); ?> .theme_btn.one:hover { 
            background-color: <?php echo esc_attr($atts['hover_button_one_bg_color']); ?>!important;
        }
    <?php endif; ?> 
    <?php if($atts['hover_button_one_bor_color']): ?> 
        .header-id-<?php echo esc_attr($unique_id); ?> .theme_btn.one:hover {
            border-color: <?php echo esc_attr($atts['hover_button_one_bor_color']); ?>!important;
        }
    <?php endif; ?> 
        <?php if($atts['logo_width']): ?>
        .header-id-<?php echo esc_attr($unique_id); ?> .logo_box .logo img {
            width: <?php echo esc_attr($atts['logo_width']); ?>!important; 
        }
        <?php endif; ?>
        <?php if($atts['margin_logo']): ?>
        .header-id-<?php echo esc_attr($unique_id); ?> .logo_box{ 
           margin: <?php echo esc_attr($atts['margin_logo']); ?>!important; 
        }
        <?php endif; ?> 
        <?php if($atts['menu_color']): ?>
        .header-id-<?php echo esc_attr($unique_id); ?> .navbar_nav > li > a {
            color: <?php echo esc_attr($atts['menu_color']); ?>!important; 
        }
        <?php endif; ?>
        <?php if($atts['menubot_rad']): ?>
        .header-id-<?php echo esc_attr($unique_id); ?> .navbar_nav > li > a { 
            border-radius: <?php echo esc_attr($atts['menubot_rad']); ?>!important; 
        }
        <?php endif; ?>
        <?php if($atts['menu_padding']): ?>
            .header-id-<?php echo esc_attr($unique_id); ?> .navbar_nav > li > a { 
            padding: <?php echo esc_attr($atts['menu_padding']); ?>!important; 
        }
        <?php endif; ?>
        <?php if($atts['menu_margin']): ?>
        .header-id-<?php echo esc_attr($unique_id); ?> .navbar_nav > li  { 
            margin: <?php echo esc_attr($atts['menu_margin']); ?>!important; 
        }
        <?php endif; ?>
        <?php if($atts['menubg_color']): ?>
            .header-id-<?php echo esc_attr($unique_id); ?> .navbar_nav > li > a { 
            background: <?php echo esc_attr($atts['menubg_color']); ?>!important;
        }
        <?php endif; ?>
        <?php if($atts['menu_ac_color']): ?>
        .header-id-<?php echo esc_attr($unique_id); ?> .navbar_nav > li.active > a,
        .header-id-<?php echo esc_attr($unique_id); ?> .navbar_nav > li:hover > a {
            color: <?php echo esc_attr($atts['menu_ac_color']); ?>!important; 
        }
        <?php endif; ?> 
        <?php if($atts['menu_ac_bg_color']): ?>
        .header-id-<?php echo esc_attr($unique_id); ?> .navbar_nav > li.active > a,
        .header-id-<?php echo esc_attr($unique_id); ?> .navbar_nav > li:hover > a { 
            background: <?php echo esc_attr($atts['menu_ac_bg_color']); ?>!important;
        }
        <?php endif; ?> 
        <?php if($atts['drop_menubot_rad']): ?>
            .header-id-<?php echo esc_attr($unique_id); ?> .navbar_nav li .sub-menu {
            border-radius: <?php echo esc_attr($atts['drop_menubot_rad']); ?>!important; 
        }
        <?php endif; ?>
        <?php if($atts['drop_menu_padding']): ?>
            .header-id-<?php echo esc_attr($unique_id); ?> .navbar_nav li .sub-menu { 
            padding: <?php echo esc_attr($atts['drop_menu_padding']); ?>!important; 
        }
        <?php endif; ?>
        <?php if($atts['drop_bg_color']): ?>
            .header-id-<?php echo esc_attr($unique_id); ?> .navbar_nav li .sub-menu { 
            background: <?php echo esc_attr($atts['drop_bg_color']); ?>!important;
        }   
        <?php endif; ?>
        <?php if($atts['drop_menu_color']): ?>
            .header-id-<?php echo esc_attr($unique_id); ?> .navbar_nav li .sub-menu > li > a {
            color: <?php echo esc_attr($atts['drop_menu_color']); ?>!important; 
        }
        <?php endif; ?>
        <?php if($atts['drop_homenu_color']): ?>
            .header-id-<?php echo esc_attr($unique_id); ?> .navbar_nav .menu-item .sub-menu li a.nav_link:hover,
            .header-id-<?php echo esc_attr($unique_id); ?> .navbar_nav .menu-item .sub-menu li.active a.nav_link  {
            color: <?php echo esc_attr($atts['drop_homenu_color']); ?>!important; 
        }
        <?php endif; ?>   
    <?php if(!empty($atts['top_bar_enable']) == "1"): ?>
        <?php if($atts['top_icon_color']): ?> 
        .header-id-<?php echo esc_attr($unique_id); ?> .header_top .left_side .content i {
            color: <?php echo esc_attr($atts['top_icon_color']); ?>!important;
        }
        <?php endif; ?>
        <?php if($atts['top_title_color']): ?> 
        .header-id-<?php echo esc_attr($unique_id); ?> .header_top .common_css .content .text small {
            color: <?php echo esc_attr($atts['top_title_color']); ?>!important;
        }
        <?php endif; ?>
        <?php if($atts['top_content_color']): ?>
   
        .header-id-<?php echo esc_attr($unique_id); ?> .header_top .common_css .content .text span,
        .header-id-<?php echo esc_attr($unique_id); ?> .header_top .common_css .content .text a {
            color: <?php echo esc_attr($atts['top_content_color']); ?>!important;
        }
        <?php endif; ?>
        <?php if($atts['topbtncolr']): ?> 
        .header-id-<?php echo esc_attr($unique_id); ?> .header_top .text_btn .icon i,
        .header-id-<?php echo esc_attr($unique_id); ?> .header_top .text_btn .icon svg path {
            color: <?php echo esc_attr($atts['topbtncolr']); ?>!important;
        }
        <?php endif; ?>
        <?php if($atts['topbtniconcolr']): ?> 
        .header-id-<?php echo esc_attr($unique_id); ?> .header_top .text_btn small {
            color: <?php echo esc_attr($atts['topbtniconcolr']); ?>!important;
        }
        .header-id-<?php echo esc_attr($unique_id); ?>  .header_top .common_css .content:after {
            background: <?php echo esc_attr($atts['topbtniconcolr']); ?>!important;
        } 
        <?php endif; ?>
        <?php if($atts['hotopbtniconcolr']): ?> 
        .header-id-<?php echo esc_attr($unique_id); ?> .header_top .text_btn small:before {
            background: <?php echo esc_attr($atts['hotopbtniconcolr']); ?>!important;
        }
        <?php endif; ?>
        <?php if($atts['social_icon_color']): ?> 
         .header-id-<?php echo esc_attr($unique_id); ?> .header_top .common_css .content.media a i {
            color: <?php echo esc_attr($atts['social_icon_color']); ?>!important;
        }
        <?php endif; ?>
    <?php endif; ?> 
    <?php if($atts['lang_switch_color_icon']): ?>
   
    .header-id-<?php echo esc_attr($unique_id); ?> .header_main .language_content .title i ,
    .header-id-<?php echo esc_attr($unique_id); ?> .language_shortcode .gt_float_switcher-arrow::before {
        color: <?php echo esc_attr($atts['lang_switch_color_icon']); ?>!important;
    } 
    <?php endif; ?>
    <?php if($atts['lang_stext_color']): ?>
  
    .header-id-<?php echo esc_attr($unique_id); ?> .header_main .language_content .title,
    .header-id-<?php echo esc_attr($unique_id); ?> .header_main .language_content .title i.risehand-chevron-down,
    .header-id-<?php echo esc_attr($unique_id); ?> .gt_float_switcher .gt-selected .gt-current-lang {
        color: <?php echo esc_attr($atts['lang_stext_color']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['lang_drop_bg_color']): ?>
  
    .header-id-<?php echo esc_attr($unique_id); ?> .header_main .language_content .dropdown_menu ,
    .header-id-<?php echo esc_attr($unique_id); ?>  .language_shortcode .gt_float_switcher .gt_options{
        background: <?php echo esc_attr($atts['lang_drop_bg_color']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['lang_drop_br_color']): ?>
  
    .header-id-<?php echo esc_attr($unique_id); ?> .header_main .language_content .dropdown_menu li a ,
    .header-id-<?php echo esc_attr($unique_id); ?> .language_shortcode .gt_float_switcher .gt_options a {
        border-color: <?php echo esc_attr($atts['lang_drop_br_color']); ?>!important;
    } 
    <?php endif; ?>
    <?php if($atts['lang_drop_text_color']): ?>
 
    .header-id-<?php echo esc_attr($unique_id); ?> .header_main .language_content .dropdown_menu li a ,
    .header-id-<?php echo esc_attr($unique_id); ?> .language_shortcode .gt_float_switcher .gt_options a {
        color: <?php echo esc_attr($atts['lang_drop_text_color']); ?>!important;
    }
    <?php endif; ?> 
</style>
<header class="header style_one header-id-<?php echo esc_attr($unique_id); ?>">
    <?php if(!empty($atts['top_bar_enable']) == "1"): ?>
    <div class="header_top <?php if(!empty($atts['mobile_top_bar_enable']) == "1"): ?> no_topbar <?php endif; ?>">
        <div class="<?php echo esc_attr($atts['header_layout']); ?>">
            <div class="top_inner">
                <div class="left_side common_css">
                    <?php if(!empty($atts['addressenable']) == "1"): ?>
                    <div class="content address">
                        <i class="fa fa-map-marker"></i>
                        <div class="text">
                            <?php if(!empty($atts['address_title'])): ?>
                            <small><?php echo esc_attr($atts['address_title']); ?></small>
                            <?php endif; ?>
                            <?php if(!empty($atts['address'])): ?>
                            <span><?php echo esc_attr($atts['address']); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if(!empty($atts['mailenable']) == "1"): ?>
                    <div class="content email">
                        <i class="fa fa-envelope"></i>
                        <div class="text">
                            <?php if(!empty($atts['email_title'])): ?>
                            <small><?php echo esc_attr($atts['email_title']); ?></small>
                            <?php endif; ?>
                            <?php if(!empty($atts['email_address'])): ?>
                            <a
                                href="mailto:<?php echo esc_attr($atts['email_address']); ?>"><?php echo esc_attr($atts['email_address']); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if(!empty($atts['phoneenable']) == "1"): ?>
                    <div class="content phone">
                        <i class="fa fa-phone"></i>
                        <div class="text">
                            <?php if(!empty($atts['phone_title'])): ?>
                            <small><?php echo esc_attr($atts['phone_title']); ?></small>
                            <?php endif; ?>
                            <?php if(!empty($atts['phone_number'])): ?>
                            <a
                                href="tel:<?php echo esc_attr($atts['phone_number']); ?>"><?php echo esc_attr($atts['phone_number']); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="right_side common_css">
                <?php if(!empty($atts['top_button_enable']) == "1"): ?>
                    <div class="content txbutton">
                    <?php if(!empty($atts['button_one'])): 
                                $button_link  = '#';
                                $btntarget  = '';
                                $btnnofollow  = '';
                                if (!empty( $atts['button_link'])) {
                                $button_link_go = vc_build_link($atts['button_link']);
                                // Extract the URL
                                $button_link = $button_link_go['url'];
                                // Extract the target option
                                $btntarget = !empty($button_link_go['target']) ? ' target="' . esc_attr($button_link_go['target']) . '"' : '';
                                // Extract the nofollow option
                                $btnnofollow = !empty($button_link_go['rel']) && $button_link_go['rel'] === 'nofollow' ? ' rel="nofollow"' : '';                           }
                                ?>
                                    <a class="text_btn" href="<?php echo esc_url($button_link);?>"  <?php echo esc_attr($btntarget); ?> <?php echo esc_attr($btnnofollow); ?>>
                                    <?php if($atts['button_icontypeone'] == 'fontawesome'): ?>
                                            <?php if(!empty($atts['button_iconfontawe'])): ?>
                                            <div class="icon">
                                            <i class="<?php echo esc_attr($atts['button_iconfontawe']); ?>"></i>
                                            </div>
                                            <?php endif; ?>		 
                                        <?php // none end ?>
                                        <?php elseif($atts['button_icontypeone'] == 'none'): ?> 
                                        <?php // none end ?>
                                        <?php else: ?>
                                            <?php if(!empty($atts['button_icontype'])): ?>
                                            <div class="icon">
                                                <i class="<?php echo esc_attr($atts['button_icontype']); ?>"></i>
                                            </div> 
                                            <?php endif; ?>		
                                        <?php endif; ?>
                                        <small> <?php echo esc_html($atts['button_one']);?>  </small>
                                    </a> 
                                <?php endif; ?> 
                    </div>
                    <?php endif; ?> 
                    <?php if(!empty($atts['social_media_enable']) == "1" && !empty($social_media_repeater)): ?>
                    <div class="content media"> 
                            <?php foreach($social_media_repeater as $key =>  $media_repearter):  ?>
                                <?php if($media_repearter['media']): ?>
                                    <a href="<?php echo esc_url($media_repearter['media_link']); ?>" target="_blank">
                                        <i class="<?php echo esc_attr($media_repearter['media']); ?>"></i>
                                    </a>
                                <?php endif; ?>
                            <?php endforeach;?>
                        
                    </div>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div> 
    <?php endif;?>
    <div class="header_main  <?php echo esc_attr($atts['mode']); ?>">
        <div class="<?php  echo esc_attr($atts['header_layout']); ?>">
            <nav class="inner_box">
                <div class="lft_content">
                <?php  $logo_default  = ! empty( $atts['logo_default'] ) ? $atts['logo_default'] : ''; 
                    $logo_default_get = wp_get_attachment_image_src( intval( $logo_default ), 'full' );
                    $logo_default_put = $logo_default_get ? $logo_default_get[0] : '';
                    if (!empty($logo_default_put)): 
                    ?>
                    <div class="logo_box"> 
                        <a href="<?php echo esc_url($logo_link); ?>"
                            <?php if(!empty($atts['custom_link_enable']) == "1"):  echo esc_attr($logo_target); echo esc_attr($logo_nofollow);  endif; ?>
                            class="logo navbar_brand">
                            <img src="<?php echo esc_url($logo_default_put); ?>"
                                alt="<?php echo esc_html(get_bloginfo( 'name' )); ?>" class="logo_default">
                        </a> 
                    </div>
                <?php else: ?>
                    <div class="logo_box ssd"> 
                        <a href="<?php echo esc_url($logo_else_link); ?>" 
                            class="logo navbar_brand">
                            <img src="<?php echo  RISEHAND_ADDONS_URL . 'assets/image/logo-white.png' ?>"
                                alt="<?php echo esc_html(get_bloginfo( 'name' )); ?>" class="logo_default">
                        </a> 
                    </div>
                <?php endif; ?>
                <?php if(!empty($atts['language_enable']) == "1"): ?>
                <?php if($atts['language_type'] == 'shortcode_lan'): ?>
                    <div class="language_shortcode">
                        <?php echo do_shortcode($atts['shortcode_language']); ?>
                    </div>
                <?php else: ?>
                 <div class="language_content">
                    <div class="ldropdown">
                        <a class="title">
                            <i class="risehand-globe2"></i>
                            <?php echo esc_attr($atts['lang_title']); ?>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown_menu">
                        <?php foreach($language_repeater  as $key => $lang_repeater):  
                            if(!empty($lang_repeater['language_text'])):
                                $language_link  = '#';
                                $lang_target  = '';
                                $lang_nofollow  = '';
                                if (!empty( $lang_repeater['language_link'])) {
                                    $language_link_go = vc_build_link($lang_repeater['language_link']);
                                    // Extract the URL
                                    $language_link = $language_link_go['url'];
                                    // Extract the target option
                                    $lang_target = !empty($language_link_go['target']) ? ' target="' . esc_attr($language_link_go['target']) . '"' : '';
                                    // Extract the nofollow option
                                    $lang_nofollow = !empty($language_link_go['rel']) && $language_link_go['rel'] === 'nofollow' ? ' rel="nofollow"' : '';
                                }
                            ?>
                            <li>
                                <a href="<?php echo esc_url($language_link); ?>" <?php echo esc_attr($lang_target); ?> <?php echo esc_attr($lang_nofollow); ?>>
                                    <?php echo esc_attr($lang_repeater['language_text']); ?>
                                </a>
                            </li>
                            <?php endif; ?>
                            <?php endforeach; ?> 
                        </ul>
                    </div>
                </div>
                <?php endif; ?> 
                <?php endif; ?> 
                <?php if($atts['navigations_pos'] == "left"): ?>
                <div class="menu_area">
                    <?php if(!empty($atts['navigations'])):
                        wp_nav_menu(array(
                            'menu' => $atts['navigations'],
                            'container' => false,
                            'menu_class' => 'navbar_nav',
                            'fallback_cb'    => 'risehand_navwalker::fallback',
                            'walker' => new \risehand_navwalker()
                    )); endif; ?>
                </div>
                <?php endif; ?>
                </div>
                <?php if($atts['navigations_pos'] == "center"): ?>
                <div class="menu_area">
                    <?php if(!empty($atts['navigations'])):
                        wp_nav_menu(array(
                            'menu' => $atts['navigations'],
                            'container' => false,
                            'menu_class' => 'navbar_nav',
                            'fallback_cb'    => 'risehand_navwalker::fallback',
                            'walker' => new \risehand_navwalker()
                    )); endif; ?>
                </div>
                <?php endif; ?>
                <?php if(!empty($atts['language_enable']) == "1"): ?>
                <?php if($atts['language_type'] == 'shortcode_lan'): ?>
                    <div class="language_shortcode d_block_in_small">
                        <?php echo do_shortcode($atts['shortcode_language']); ?>
                    </div>
                <?php else: ?>
                 <div class="language_content d_block_in_small">
                    <div class="ldropdown">
                        <a class="title">
                            <i class="risehand-globe2"></i>
                            <?php echo esc_attr($atts['lang_title']); ?>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown_menu">
                        <?php foreach($language_repeater  as $key => $lang_repeater):  
                            if(!empty($lang_repeater['language_text'])):
                                $language_link  = '#';
                                $lang_target  = '';
                                $lang_nofollow  = '';
                                if (!empty( $lang_repeater['language_link'])) {
                                    $language_link_go = vc_build_link($lang_repeater['language_link']);
                                    // Extract the URL
                                    $language_link = $language_link_go['url'];
                                    // Extract the target option
                                    $lang_target = !empty($language_link_go['target']) ? ' target="' . esc_attr($language_link_go['target']) . '"' : '';
                                    // Extract the nofollow option
                                    $lang_nofollow = !empty($language_link_go['rel']) && $language_link_go['rel'] === 'nofollow' ? ' rel="nofollow"' : '';
                                }
                            ?>
                            <li>
                                <a href="<?php echo esc_url($language_link); ?>" <?php echo esc_attr($lang_target); ?> <?php echo esc_attr($lang_nofollow); ?>>
                                    <?php echo esc_attr($lang_repeater['language_text']); ?>
                                </a>
                            </li>
                            <?php endif; ?>
                            <?php endforeach; ?> 
                        </ul>
                    </div>
                </div>
                <?php endif; ?> 
                <?php endif; ?> 
                <div class="rgt_content">
                <?php if($atts['navigations_pos'] == "right"): ?>
                <div class="menu_area">
                    <?php if(!empty($atts['navigations'])):
                        wp_nav_menu(array(
                            'menu' => $atts['navigations'],
                            'container' => false,
                            'menu_class' => 'navbar_nav',
                            'fallback_cb'    => 'risehand_navwalker::fallback',
                            'walker' => new \risehand_navwalker()
                    )); endif; ?>
                </div>
                <?php endif; ?>
                <div class="button_box_menu">
                    <div class="navbar_togglers">
                        <button class="navbar-burger">
                             <i class="risehand-menu1"></i>
                        </button>
                    </div>
                </div>
                <div class="right_content">
                    <?php if(!empty($atts['search_enable']) == "1"): ?> 
                        <div class="search-toggler"><i class="risehand-search1"></i></div> 
                     <?php endif;?>
                    <?php if(!empty($atts['button_enable']) == "1"): ?> 
                    <div class="rg_con contact_btn">
                    <?php if(!empty($atts['mbutton_one'])): 
                                $mbutton_link  = '#';
                                $mbtntarget  = '';
                                $mbtnnofollow  = '';
                                if (!empty( $atts['mbutton_link'])) {
                                $mbutton_link_go = vc_build_link($atts['mbutton_link']);
                                // Extract the URL
                                $mbutton_link = $mbutton_link_go['url'];
                                // Extract the target option
                                $mbtntarget = !empty($mbutton_link_go['target']) ? ' target="' . esc_attr($mbutton_link_go['target']) . '"' : '';
                                // Extract the nofollow option
                                $mbtnnofollow = !empty($button_link_go['rel']) && $mbutton_link_go['rel'] === 'nofollow' ? ' rel="nofollow"' : '';                           }
                                ?>
                                    <a class="theme_btn one" href="<?php echo esc_url($mbutton_link);?>"  <?php echo esc_attr($mbtntarget); ?> <?php echo esc_attr($mbtnnofollow); ?>>
                                    <?php if($atts['mbutton_icontype'] == 'fontawesome'): ?>
                                            <?php if(!empty($atts['mbutton_iconfontawe'])): ?>
                                            <div class="icon">
                                            <i class="<?php echo esc_attr($atts['mbutton_iconfontawe']); ?>"></i>
                                            </div>
                                            <?php endif; ?>		 
                                        <?php // none end ?>
                                        <?php elseif($atts['mbutton_icontype'] == 'none'): ?> 
                                        <?php // none end ?>
                                        <?php else: ?>
                                            <?php if(!empty($atts['mbutton_icontypeone'])): ?>
                                            <div class="icon">
                                                <i class="<?php echo esc_attr($atts['mbutton_icontypeone']); ?>"></i>
                                            </div> 
                                            <?php endif; ?>		
                                        <?php endif; ?>
                                    <?php echo esc_html($atts['mbutton_one']);?>  
                                    </a> 
                                <?php endif; ?> 
                    </div>
                    <?php endif; ?>
                    <?php if(!empty($atts['option_panel_enable']) == "1"): ?> 
                        <div class="site-header__sidemenu-nav side-menu__toggler"><i class="risehand-menu-circled"></i></div> 
                     <?php endif;?>
                </div>
                </div>
              
            </nav>
        </div>
    </div>
</header> 
<?php   if(!empty($atts['option_panel_enable']) == "1"): 
    $company_logo_modals = wp_get_attachment_image_src( intval( $atts['opt_panel_logo'] ), 'full' );
    $company_logo_modals_get = $company_logo_modals ? $company_logo_modals[0] : '';
    $about_company_modal = $atts['about_company_modal']; 
    $form_enable = $atts['form_enable'];
    $form_title = $atts['form_title']; 
    $contact_panel_enable = $atts['contact_panel_enable'];
    $mobile_phone_number = $atts['mobile_phone_number'];
    $mobile_mail_number = $atts['mobile_mail_number'];
    $working_hours_panels = $atts['working_hours_panels'];
    $copy_right_enable = $atts['copy_right_enable'];
    $copy_right_modal = $atts['copy_right_modal'];  
?>
<div class="side-menu__block trans">
<div class="side-menu__block-overlay custom-cursor__overlay opt_cursor">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div> 
    <div class="side-menu__block-inner trans scrollbarcolor">
        <div class="opt_close_btn d_flex"><i class="risehand-cross1"></i></div>
        <div class="option_content">
        <?php if(!empty($company_logo_modals_get) || !empty($about_company_modal)): ?>
                <div class="log_bx">
                    <?php if(!empty($company_logo_modals_get)): ?>
                        <a href="<?php  echo esc_url(home_url()); ?>" class="logo navbar-brand">
                            <img src="<?php echo esc_url($company_logo_modals_get); ?>"  alt="<?php echo esc_html(get_bloginfo( 'name' )); ?>" class="logo_default">
                        </a>
                    <?php endif; ?>
                    <?php if(!empty($about_company_modal)): ?>
                        <div class="about_company pb_25">
                            <?php echo wp_kses($about_company_modal , $allowed_tags); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            <div class="contnet_box">
               
                <?php if(!empty($form_enable) == "1"): ?>
                    <div class="title_no_a_28 pb_20">  <?php echo wp_kses($form_title , wp_kses_allowed_html('post'));   ?></div>
                    <?php if(!empty($content)): ?>
                        <div class="form_short pb_25">
                        <?php echo do_shortcode($content); ?>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
                <?php if(!empty($contact_panel_enable) == "1"): ?>
                    <div class="contact_panel pb_25">
                        <?php if(!empty($mobile_phone_number)): ?>
                            <div class="c_pan">
                                <a class="a_c" href="tel:<?php echo esc_attr($mobile_phone_number); ?>">
                                    <i class="risehand-phone"></i> <?php echo esc_attr($mobile_phone_number); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        <?php if(!empty($mobile_mail_number)): ?>
                            <div class="c_pan mail">
                                <a class="a_c" href="mailto:<?php echo esc_attr($mobile_mail_number); ?>">
                                    <i class="risehand-mail"></i>    <?php echo esc_attr($mobile_mail_number); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        <?php if(!empty($working_hours_panels)): ?>
                            <div class="c_pan">
                                <div class="a_c">
                                <i class="risehand-clock"></i>  <?php echo wp_kses($working_hours_panels , $allowed_tags); ?>
                        </div>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <?php if(!empty($copy_right_enable) == "1"): ?>
                    <div class="c_pan coyrite">
                    <?php  echo wp_kses($copy_right_modal , wp_kses_allowed_html('post'));  ?> 
                    </div>
                <?php endif; ?>
            </div> 
        </div>  
    </div>
</div>
<?php endif; ?>
<?php if(!empty($atts['search_enable']) == "1"): ?> 
    <div class="search-<?php echo esc_attr($unique_id);?>">
        <?php do_action('risehand_search_popup_output'); ?>
    </div>  
<?php endif; ?>
<?php
return ob_get_clean();
}