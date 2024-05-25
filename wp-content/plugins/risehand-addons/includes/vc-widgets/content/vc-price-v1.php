<?php


add_action( 'vc_before_init', 'vc_price_card_v1_vcmap' );
function vc_price_card_v1_vcmap() {
 vc_map( array(
  "name" => __( "Price V1", "risehand-addons" ),
  "base" => "vc_price_card_v1_init",
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
            // repeater 
                array(
                    'type'        => 'checkbox',
                    'heading'     => esc_html__('Price Box Active', 'risehand-addons'),
                    'param_name'  => 'active',
                    'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ),  
                    'group' => esc_html__('General', 'risehand-addons') ,
                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => esc_html__('Tag', 'risehand-addons'),
                    'param_name' => 'tag',
                    'value'    => esc_html__('Popular', 'risehand-addons'),   
                    'group' => esc_html__('General', 'risehand-addons') ,
                ), 
               
                // ================== contnet ================
                // ================== icons ================
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__( 'Icon library', 'risehand-addons' ),
                    'value' => array( 
                        esc_html__( 'Disable Icon', 'risehand-addons' ) => 'disable_icon' , 
                        esc_html__( 'Risehand Custom Icons', 'risehand-addons' ) => 'custom',
                        esc_html__( 'Font Awesome 5', 'risehand-addons' ) => 'fontawesome',
                        esc_html__( 'Icon Image Type', 'risehand-addons' ) => 'icon_image_enable' ,  
                    ), 
                    'param_name' => 'icontype',
                    'default' => 'disable_icon',
                    'description' => esc_html__( 'Select icon library.', 'risehand-addons' ),
                    'dependency'  => array(
                        'element' => 'price_styles',
                        'value'   => 'type_two',
                    ),
                    'group' => esc_html__('General', 'risehand-addons') ,
                    
                ),
                array(
                    'type' => 'attach_image',
                    'heading' => esc_html__('Icon Image', 'risehand-addons') ,
                    'param_name' => 'icon_images',
                    'value' => '',
                    'dependency'  => array(
                        'element' => 'icontype',
                        'value'   => 'icon_image_enable',
                    ),
                    'group' => esc_html__('General', 'risehand-addons') ,
                ),
                array(
                    'type' => 'iconpicker',
                    'heading' => esc_html__( 'Icon', 'risehand-addons' ),
                    'param_name' => 'icon_fontawesome',
                    'value' => 'fas fa-adjust',
                    // default value to backend editor admin_label
                    'settings' => array(
                        'emptyIcon' => false,
                        // default true, display an "EMPTY" icon?
                        'iconsPerPage' => 500,
                        // default 100, how many icons per/page to display, we use (big number) to display all icons in single page
                    ),
                    'dependency' => array(
                        'element' => 'icontype',
                        'value' => 'fontawesome',
                    ),
                    'description' => esc_html__( 'Select icon from library.', 'risehand-addons' ),
                    'group' => esc_html__('General', 'risehand-addons') ,
                ), 
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Icon', 'risehand-addons') ,
                    'param_name' => 'icon_fonts',
                    'value'       => get_risehand_icons(), 
                    'dependency' => array(
                        'element' => 'icontype',
                        'value' => 'custom',
                    ),
                    'group' => esc_html__('General', 'risehand-addons') ,
                ),     
                // ================== icons ================
                array(
                    'type'       => 'textfield',
                    'heading'    => esc_html__('Title', 'risehand-addons'),
                    'param_name' => 'title', 
                    'group' => esc_html__('General', 'risehand-addons') ,
                ),
                array(
                    'type'       => 'textarea',
                    'heading'    => esc_html__('Description', 'risehand-addons'),
                    'param_name' => 'description', 
                    'group' => esc_html__('General', 'risehand-addons') ,
                ),
                
                array(
                    'type'       => 'textfield',
                    'heading'    => esc_html__('Price', 'risehand-addons'),
                    'param_name' => 'price', 
                    'group' => esc_html__('General', 'risehand-addons') ,
                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => esc_html__('Price Duration', 'risehand-addons'),
                    'param_name' => 'price_duration', 
                    'group' => esc_html__('General', 'risehand-addons') ,
                ),
                array( 
                    'type' => 'param_group',
                    'heading' => esc_html__('Features Repeater', 'risehand-addons') ,
                    'value' => '',
                    'param_name' => 'features_this',
                    'params' => array( 
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
                            'value'    => esc_html__('Complete documentation', 'risehand-addons'),
                        ),
                    ),
                    'group' => esc_html__('General', 'risehand-addons') ,
                ),
                
                array(
                    'type'       => 'textfield',
                    'heading'    => esc_html__('Button One', 'risehand-addons'),
                    'param_name' => 'btnone', 
                    'group' => esc_html__('General', 'risehand-addons') ,
                ),
                array(
                    'type'       => 'vc_link',
                    'heading'    => esc_html__('Button One Link', 'risehand-addons'),
                    'param_name' => 'btnonelink', 
                    'group' => esc_html__('General', 'risehand-addons') ,
                ), 
                array(
                    'type'        => 'checkbox',
                    'heading'     => esc_html__('Button 2 Enable / Disable', 'risehand-addons'),
                    'param_name'  => 'btn2_enable',
                    'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ), 
                    'group' => esc_html__('General', 'risehand-addons') ,
                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => esc_html__('Button Two', 'risehand-addons'),
                    'param_name' => 'btntwo', 
                    'dependency' => array(
                        'element' => 'btn2_enable',
                        'value'   => 'yes',
                    ),
                    'group' => esc_html__('General', 'risehand-addons') ,
                ), 
                array(
                    'type'       => 'vc_link',
                    'heading'    => esc_html__('Button Two Link', 'risehand-addons'),
                    'param_name' => 'btntwolink', 
                    'dependency' => array(
                        'element' => 'btn2_enable',
                        'value'   => 'yes',
                    ),
                    'group' => esc_html__('General', 'risehand-addons') ,
                ), 
        // tab 1 end
  
      
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
            'heading' => __('Icon Color', 'risehand-addons'),
            'param_name' => 'icon_color',
            'description' => __('Set the color for the icon.', 'risehand-addons'),
            'group' => esc_html__('Price Content Css', 'risehand-addons'),
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __('Icon Background Color', 'risehand-addons'),
            'param_name' => 'iconbg_color',
            'description' => __('Set the background color for the icon.', 'risehand-addons'),
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

add_shortcode( 'vc_price_card_v1_init', 'vc_price_card_v1' );
function vc_price_card_v1( $atts, $content = null ) { 
$unique_id = uniqid();
$atts = shortcode_atts(
   array(
    'tag_type' => 'div' ,
    'icon_color' => '',
    'iconbg_color' => '', 
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
    'price_styles' => 'type_one',     
    'features_this' => '',
    'icontype' => 'custom',
    'icon_images' => '',
    'icon_fontawesome' => '',
    'icon_fonts' => '', 
    'description'  => 'Basic features for up to 40 users.', 
    'title'  => 'Standard Plan',  
    'price' => '39.83', 
    'price_duration' => 'User', 
    'btnone' => 'Get Started', 
    'btnonelink' => '#', 
    'btn2_enable' => '', 
    'btntwo' => 'Learn More', 
    'tag'  => '', 
    'active' => '', 
    'btntwolink' => '', 
   ), $atts
); 
ob_start();
$allowed_tags = wp_kses_allowed_html('post');
$features_this = function_exists( 'vc_param_group_parse_atts' ) ? vc_param_group_parse_atts( $atts['features_this'] ) : array();

?>

<style type="text/css" data-type="vc_shortcodes-custom"> 
        <?php if($atts['icon_color']): ?>  
        .price-card-id-<?php echo esc_attr($unique_id); ?> .price_box .card-pricing-heading .icon i {
            color: <?php echo esc_attr($atts['icon_color']); ?>!important;
        } 
        <?php endif; ?>
        <?php if($atts['iconbg_color']): ?>  
            .price-card-id-<?php echo esc_attr($unique_id); ?> .price_box .card-pricing-heading .icon {
            background: <?php echo esc_attr($atts['iconbg_color']); ?>!important;
        }
        <?php endif; ?>
        <?php if($atts['priceboxbgt']): ?>  
            .price-card-id-<?php echo esc_attr($unique_id); ?> .price_box {
                background: <?php echo esc_attr($atts['priceboxbgt']); ?>!important;
            } 
        <?php endif; ?>
        <?php if($atts['boxborder_color']): ?>  
            .price-card-id-<?php echo esc_attr($unique_id); ?> .price_box  , .price-card-id-<?php echo esc_attr($unique_id); ?>  .price_box .nk-list-link {
                border-color: <?php echo esc_attr($atts['boxborder_color']); ?>!important;
            } 
        <?php endif; ?>
      
        <?php if($atts['boxpadding']): ?>  
            .price-card-id-<?php echo esc_attr($unique_id); ?> .price_box   {
                padding: <?php echo esc_attr($atts['boxpadding']); ?>!important;
            } 
        <?php endif; ?>

        <?php if($atts['activeboxborder_color']): ?>  
            .price-card-id-<?php echo esc_attr($unique_id); ?> .price_box:hover , .price-card-id-<?php echo esc_attr($unique_id); ?> .price_box.active   {
                border-color: <?php echo esc_attr($atts['activeboxborder_color']); ?>!important;
            } 
        <?php endif; ?>

        <?php if($atts['btncolor']): ?>  
            .price-card-id-<?php echo esc_attr($unique_id); ?> .price_box .theme_btn.one {
                color: <?php echo esc_attr($atts['btncolor']); ?>!important;
            } 
        <?php endif; ?>
        <?php if($atts['button_border_radius']): ?>  
            .price-card-id-<?php echo esc_attr($unique_id); ?> .price_box .theme_btn.one { 
                border-radius: <?php echo esc_attr($atts['button_border_radius']); ?>!important; 
            } 
        <?php endif; ?>
        <?php if($atts['button_padding_radius']): ?>  
            .price-card-id-<?php echo esc_attr($unique_id); ?> .price_box .theme_btn.one {
                padding: <?php echo esc_attr($atts['button_padding_radius']); ?>!important;
            } 
        <?php endif; ?>
        <?php if($atts['background']): ?>  
            .price-card-id-<?php echo esc_attr($unique_id); ?> .price_box .theme_btn.one {
                background: <?php echo esc_attr($atts['background']); ?>!important;
            } 
        <?php endif; ?>
        <?php if($atts['btnoneborder_color']): ?>  
            .price-card-id-<?php echo esc_attr($unique_id); ?> .price_box .theme_btn.one { 
                border-color: <?php echo esc_attr($atts['btnoneborder_color']); ?>!important;
        } 
        <?php endif; ?> 
        <?php if($atts['tbtncolor']): ?>  
            .price-card-id-<?php echo esc_attr($unique_id); ?> .price_box .theme_btn.two {
                color: <?php echo esc_attr($atts['tbtncolor']); ?>!important;  
            }
        <?php endif; ?>
        <?php if($atts['tbutton_border_radius']): ?>  
            .price-card-id-<?php echo esc_attr($unique_id); ?> .price_box .theme_btn.two { 
                border-radius: <?php echo esc_attr($atts['tbutton_border_radius']); ?>!important; 
            }
        <?php endif; ?>
        <?php if($atts['tbutton_padding_radius']): ?>  
            .price-card-id-<?php echo esc_attr($unique_id); ?> .price_box .theme_btn.two { 
                padding: <?php echo esc_attr($atts['tbutton_padding_radius']); ?>!important; 
            }
        <?php endif; ?>
        <?php if($atts['tbackground']): ?>  
            .price-card-id-<?php echo esc_attr($unique_id); ?> .price_box .theme_btn.two { 
                background: <?php echo esc_attr($atts['tbackground']); ?>!important; 
            }
        <?php endif; ?>
        <?php if($atts['btntwoborder_color']): ?>  
            .price-card-id-<?php echo esc_attr($unique_id); ?> .price_box .theme_btn.two { 
                border-color: <?php echo esc_attr($atts['btntwoborder_color']); ?>!important;
            }
        <?php endif; ?> 
        <?php if($atts['hbtncolor']): ?>  
            .price-card-id-<?php echo esc_attr($unique_id); ?> .price_box .theme_btn.one:hover,
                .price-card-id-<?php echo esc_attr($unique_id); ?> .price_box.active .theme_btn.one {
                    color: <?php echo esc_attr($atts['hbtncolor']); ?>!important; 
                }
        <?php endif; ?>
        <?php if($atts['hbtnbrcolor']): ?>  
            .price-card-id-<?php echo esc_attr($unique_id); ?> .price_box .theme_btn.one:hover,
                .price-card-id-<?php echo esc_attr($unique_id); ?> .price_box.active .theme_btn.one { 
                    border-color: <?php echo esc_attr($atts['hbtnbrcolor']); ?>!important; 
                }
        <?php endif; ?>
        <?php if($atts['hbackground']): ?>  
            .price-card-id-<?php echo esc_attr($unique_id); ?> .price_box .theme_btn.one:hover,
                .price-card-id-<?php echo esc_attr($unique_id); ?> .price_box.active .theme_btn.one { 
                    background: <?php echo esc_attr($atts['hbackground']); ?>!important;
                }
        <?php endif; ?>
        <?php if($atts['htbtncolor']): ?>  
            .price-card-id-<?php echo esc_attr($unique_id); ?> .price_box .theme_btn.two:hover,
            .price-card-id-<?php echo esc_attr($unique_id); ?> .price_box.active .theme_btn.two {
                color: <?php echo esc_attr($atts['htbtncolor']); ?>!important; 
            }
        <?php endif; ?>
        <?php if($atts['htbtnvcolor']): ?>  
            .price-card-id-<?php echo esc_attr($unique_id); ?> .price_box .theme_btn.two:hover,
            .price-card-id-<?php echo esc_attr($unique_id); ?> .price_box.active .theme_btn.two {
                border-color: <?php echo esc_attr($atts['htbtnvcolor']); ?>!important; 
            }
        <?php endif; ?>    
        <?php if($atts['htbackground']): ?>  
            .price-card-id-<?php echo esc_attr($unique_id); ?> .price_box .theme_btn.two:hover,
            .price-card-id-<?php echo esc_attr($unique_id); ?> .price_box.active .theme_btn.two {
                background: <?php echo esc_attr($atts['htbackground']); ?>!important;
            }
        <?php endif; ?>  
        <?php if($atts['pricecolor']): ?>  
        /* Price Color */
        .price-card-id-<?php echo esc_attr($unique_id); ?>  .price_box .amount {
            color: <?php echo esc_attr($atts['pricecolor']); ?>!important;
        }
        <?php endif; ?>  
        <?php if($atts['priceprcolor']): ?> 
        /* Price Period Color */
        .price-card-id-<?php echo esc_attr($unique_id); ?>  .price_box .amount-text {
            color: <?php echo esc_attr($atts['priceprcolor']); ?>!important;
        }
        <?php endif; ?>  
        <?php if($atts['title_color']): ?> 
        /* Title Color */
        .price-card-id-<?php echo esc_attr($unique_id); ?>  .card-pricing-heading .title_no_a_24 {
            color: <?php echo esc_attr($atts['title_color']); ?>!important;
           
        }
        <?php endif; ?>  
        <?php if($atts['des_color']): ?> 
        /* Small Description Color */
        .price-card-id-<?php echo esc_attr($unique_id); ?> .card-pricing-heading  .info span {
            color: <?php echo esc_attr($atts['des_color']); ?>!important;
           
        }
        <?php endif; ?>  
        <?php if($atts['listiconcolor']): ?> 
        /* Feature Icon Color 1 */
        .price-card-id-<?php echo esc_attr($unique_id); ?>  .price_box .nk-list-link li em {
            color: <?php echo esc_attr($atts['listiconcolor']); ?>!important;
        }
        <?php endif; ?>  
        <?php if($atts['listiconcolortwo']): ?> 
        /* Feature Icon Color 2 */
        .price-card-id-<?php echo esc_attr($unique_id); ?>  .price_box .nk-list-link li em.risehand-cross-circle-fill {
            color: <?php echo esc_attr($atts['listiconcolortwo']); ?>!important;
        }
        <?php endif; ?>  
        <?php if($atts['listcolor']): ?> 
        /* Feature Color */
        .price-card-id-<?php echo esc_attr($unique_id); ?>  .price_box .nk-list-link li {
            color: <?php echo esc_attr($atts['listcolor']); ?>!important; 
        }
        <?php endif; ?>  
    <?php if($atts['tagvfcolor']): ?> 
    .price-card-id-<?php echo esc_attr($unique_id); ?>  .price_box .badged {
        background: <?php echo esc_attr($atts[tagvfcolor]); ?>!important;
    }
    <?php endif; ?>  
    <?php if($atts['tagcolor']): ?> 
    .price-card-id-<?php echo esc_attr($unique_id); ?> .price_box .badged , .price-card-id-<?php echo esc_attr($unique_id); ?>  .price_box .badged {
        color: <?php echo esc_attr($atts['tagcolor']); ?>!important;
    }
    <?php endif; ?>  
     
</style> 
 
<?php
// btn one 
$link  = '#';
$link_target  = '';
$link_unfollow  = '';
 if (!empty( $atts['btnonelink'])) {
    $link_go = vc_build_link($atts['btnonelink']);
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
 if (!empty( $atts['btntwolink'])) {
    $link_go_two = vc_build_link($atts['btntwolink']);
    // Extract the URL
    $link_two = $link_go_two['url'];
    // Extract the target option
    $link_target_two = !empty($link_go_two['target']) ? ' target="' . esc_attr($link_go_two['target']) . '"' : '';
    // Extract the nofollow option
    $link_unfollow_two = !empty($link_go_two['rel']) && $link_go_two['rel'] === 'nofollow' ? ' rel="nofollow"' : '';
}   
?>
<div class="price-card-id-<?php echo esc_attr($unique_id); ?>">
<?php
if($atts['price_styles'] == 'type_two'): ?>
    <div class="price_box style_four trans<?php if($atts['active']):?> active<?php endif; ?>">
    <div class="nk-pricing-head pb-4">
    <?php if(!empty($atts['tag'])): ?>
            <span
                class="badged trans font_special"><em class="icon ni-star-fill me-1"></em> <?php echo wp_kses($atts['tag'] , $allowed_tags);  ?></span>
            <?php endif; ?>
    <div class="card-pricing-heading d_flex">
        <?php if($atts['icontype'] != 'disable_icon'): ?> 
            <?php if( $atts['icontype'] == 'icon_image_enable'):
                $icon_image = wp_get_attachment_image_src( intval(  $atts['icon_images'] ), 'full' );
                $icon_images = $icon_image ? $icon_image[0] : '';
                $icon_images_alt = get_post_meta($atts['icon_images'], '_wp_attachment_image_alt', true);
                $icon_images_alt = !empty($icon_images_alt) ? $icon_images_alt : 'risehand-addons';
                if(!empty($icon_images)): ?>
                    <div class="icon d_flex">
                        <img src="<?php echo esc_url($icon_images); ?>" class="img-fluid svg_image" alt="<?php echo esc_attr($icon_images_alt); ?>" />
                    </div>
                <?php endif; ?>
            <?php endif; ?>
            <?php if($atts['icontype'] == 'custom'): ?>
                <div class="icon d_flex">
                    <i class="<?php echo esc_html( $atts['icon_fonts']); ?>"></i>
                </div>
            <?php endif; ?>
            <?php if($atts['icontype'] == 'fontawesome'): ?>
                <?php if(!empty($atts['icon_fontawesome'])): ?>
                    <div class="icon d_flex">
                        <i class="<?php echo esc_attr($atts['icon_fontawesome']); ?>"></i>
                    </div> 
                <?php endif; ?>	 
            <?php endif; ?>	   
       
        <?php endif; ?>	  
            <div class="info">
                <?php if(!empty($atts['title'])): ?>
                    <<?php echo esc_attr($atts['tag_type']); ?> class="title_no_a_24"><?php echo wp_kses($atts['title'] , $allowed_tags);  ?></<?php echo esc_attr($atts['tag_type']); ?>>
                <?php endif; ?>
                <?php if(!empty($atts['description'])): ?>
                    <span><?php echo wp_kses($atts['description'] , $allowed_tags);  ?></span>
                <?php endif; ?>
            </div>
        </div> 

        <div class="nk-year-amount amount-wrap">
            <?php if(!empty($atts['price'])): ?>
            <span class="amount h1 mb-0">
                 
                <?php echo wp_kses($atts['price'] , $allowed_tags);  ?>
            </span>
            <?php if(!empty($atts['price_duration'])): ?>
            <span class="amount-text"> /
                <?php echo wp_kses($atts['price_duration'] , $allowed_tags);  ?></span>
            <?php endif; ?>
            <?php endif; ?>
        </div>
         
        <ul class="nk-list-link">
           <?php if(!empty($features_this)): foreach($features_this as $key => $features_this): ?>
           <li>
           <?php if($features_this['fone_yesno'] == "yes"): ?>
                 <em class="icon risehand-check-circle-fill"></em>
             <?php elseif($features_this['fone_yesno'] == "no"): ?>
                <em class="icon risehand-cross-circle"></em>
            <?php endif; ?>
                <?php if(!empty($features_this['features_text_one'])): ?>
                <span><?php echo wp_kses($features_this['features_text_one'] , $allowed_tags); ?></span>
            <?php endif; ?>
           </li>
        <?php endforeach; ?>
        <?php endif; ?>
       </ul>
    </div>
    <div class="nk-pricing-body"> 
        <ul class="gap g-3">
                <?php if(!empty($atts['btnone'])): ?>
                    <li>
                       <a href="<?php echo esc_url($link); ?>"
                        class="theme_btn one" <?php echo esc_attr($link_target); ?> <?php echo esc_attr($link_unfollow); ?>>
                        <?php echo wp_kses($atts['btnone'] , $allowed_tags);  ?>
                    </a>
                 </li>
            <?php endif; ?>
            <?php if(!empty($atts['btn2_enable']) == 'yes'): ?>
                 <?php if(!empty($atts['btntwo'])): 
                ?>
                <li>
                <a href="<?php echo esc_url($link_two); ?>"
                  class="theme_btn two" <?php echo esc_attr($link_target_two); ?> <?php echo esc_attr($link_unfollow_two); ?>>
                    <?php echo wp_kses($atts['btntwo'] , $allowed_tags);  ?>
                  </a>
                 </li>
           <?php endif; ?>
           <?php endif; ?>                                       
        </ul>
        
    </div>
</div>
<?php else: ?>
<div class="price_box style_one style_three trans<?php if($atts['active']):?> active<?php endif; ?>">
    <div class="nk-pricing-head pb-4">
        <div class="nk-pricing-title-group d_flex mb-2">
            <?php if(!empty($atts['title'])): ?>
            <<?php echo esc_attr($atts['tag_type']); ?> class="title_no_a_24">
                <?php echo wp_kses($atts['title'] , $allowed_tags);  ?></<?php echo esc_attr($atts['tag_type']); ?>>
            <?php endif; ?>
            <?php if(!empty($atts['tag'])): ?>
            <span
                class="badged trans font_special"><em class="icon ni-star-fill me-1"></em> <?php echo wp_kses($atts['tag'] , $allowed_tags);  ?></span>
            <?php endif; ?>
        </div> 
        <?php if(!empty($atts['description'])): ?>
        <p class="text mt-2">
            <?php echo wp_kses($atts['description'] , $allowed_tags);  ?></p>
        <?php endif; ?>
        <ul class="nk-list-link">
           <?php if(!empty($features_this)): foreach($features_this as $key => $features_this): ?>
           <li>
            <?php if($features_this['fone_yesno'] == "yes"): ?>
                 <em class="icon risehand-check-circle-fill"></em>
             <?php elseif($features_this['fone_yesno'] == "no"): ?>
                <em class="icon risehand-cross-circle"></em>
            <?php endif; ?>
                <?php if(!empty($features_this['features_text_one'])): ?>
                <span><?php echo wp_kses($features_this['features_text_one'] , $allowed_tags); ?></span>
            <?php endif; ?>
           </li>
        <?php endforeach; ?>
        <?php endif; ?>
       </ul>
    </div>
    <div class="nk-pricing-body">
    <div class="nk-year-amount amount-wrap">
            <?php if(!empty($atts['price'])): ?>
            <span class="amount h1 mb-0"> 
                <?php echo wp_kses($atts['price'] , $allowed_tags);  ?>
            </span>
            <?php if(!empty($atts['price_duration'])): ?>
            <span class="amount-text"> /
                <?php echo wp_kses($atts['price_duration'] , $allowed_tags);  ?></span>
            <?php endif; ?>
            <?php endif; ?>
        </div>
        <ul class="gap g-3">
        <?php if(!empty($atts['btnone'])): ?>
                    <li>
                       <a href="<?php echo esc_url($link); ?>"
                        class="theme_btn one" <?php echo esc_attr($link_target); ?> <?php echo esc_attr($link_unfollow); ?>>
                        <?php echo wp_kses($atts['btnone'] , $allowed_tags);  ?>
                    </a>
                 </li>
            <?php endif; ?>
            <?php if(!empty($atts['btn2_enable']) == 'yes'): ?>
                 <?php if(!empty($atts['btntwo'])): 
                ?>
                <li>
                <a href="<?php echo esc_url($link_two); ?>"
                  class="theme_btn two" <?php echo esc_attr($link_target_two); ?> <?php echo esc_attr($link_unfollow_two); ?>>
                    <?php echo wp_kses($atts['btntwo'] , $allowed_tags);  ?>
                  </a>
                 </li>
           <?php endif; ?>
           <?php endif; ?>    
        </ul>
        
    </div>
</div> 
<?php endif; ?>
</div> 
<?php
return ob_get_clean();
}



