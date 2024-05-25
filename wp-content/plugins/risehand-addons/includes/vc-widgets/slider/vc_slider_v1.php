<?php
add_action( 'vc_before_init', 'vc_slider_v1_vcmap' );
function vc_slider_v1_vcmap() {
 vc_map( array(
  "name" => __( "Slider V1", "risehand-addons" ),
  "base" => "vc_slider_v1_init",
  "class" => "",
  "icon" => "icon-risehand-svg", 
  "category" => __( "Risehand Slider", "risehand-addons"),
  "params" => array( 
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Slider Type', 'risehand-addons' ),
        'value' => array( 
            esc_html__( 'Slider Type 1', 'risehand-addons' ) => 'type_one',
            esc_html__( 'Slider Type 2', 'risehand-addons' ) => 'type_two', 
        ), 
        'param_name' => 'slider_style',
 
        'description' => esc_html__( 'Select Slider Style', 'risehand-addons' ),
        'group' => esc_html__('Slider Content', 'risehand-addons') , 
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Content Alignment', 'risehand-addons' ),
        "value" => array(
			"Auto Container" => "auto-container", 
			"Container " => "container",
			'Small container'  => "small-container",
			"Medium Container" => "medium-container", 
			"Large Container" => "large-container",
			"Extra Largre Container " => "full-container",
			"Full Container" => "container-fluid",
		) ,
	 
        'param_name' => 'slider_layout', 
        'group' => esc_html__('Slider Content', 'risehand-addons') , 
    ),
    array(
        'type' => 'param_group',
        'heading' => esc_html__('Slider  Content', 'risehand-addons') ,
        'param_name' => 'slider_repeater',
        'params' => array(
            array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Content Alignment', 'risehand-addons' ),
				'value' => array( 
                    esc_html__( 'Content Left', 'risehand-addons' ) => 'left',
                    esc_html__( 'Content Center', 'risehand-addons' ) => 'center', 
					esc_html__( 'Content Right', 'risehand-addons' ) => 'right', 
				), 
				'param_name' => 'slideralignment', 
				'description' => esc_html__( 'Select icon library.', 'risehand-addons' ),
			), 
            array(
                'type' => 'attach_image',
                'heading' => esc_html__('Slider Image', 'risehand-addons') ,
                'param_name' => 'slider_image', 
            ), 
            array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Icon library', 'risehand-addons' ),
				'value' => array( 
                    esc_html__( 'Risehand Custom Icons', 'risehand-addons' ) => 'custom',
					esc_html__( 'Font Awesome 5', 'risehand-addons' ) => 'fontawesome',
                    esc_html__( 'None', 'risehand-addons' ) => 'none',
				), 
				'param_name' => 'icontype',
         
				'description' => esc_html__( 'Select icon library.', 'risehand-addons' ),
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
            ), 
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Small Title', 'risehand-addons') ,
                'param_name' => 'small_title',
                'value' => 'Non profit Charity Fundation',   
            ), 
            array(
                'type' => 'textarea',
                'heading' => esc_html__('Title', 'risehand-addons') ,
                'param_name' => 'title',
                'value' => 'Raise Your    Helping Hand',  
            ), 
            array(
                'type' => 'textarea',
                'heading' => esc_html__('Content', 'risehand-addons') ,
                'param_name' => 'content',
                'value' => 'Giving to charity strengthens personal values Whatever type of charity work they supported, 96% of people said they felt they had a moral duty to use what they had to help others ', 
                
            ), 
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Button 1 Text', 'risehand-addons') ,
                'param_name' => 'button_one',
                'value' => 'Popular Causes',  
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
			),
			array(
				'type' => 'iconpicker',
				'heading' => esc_html__( 'Button 1 Fontawesome Icon', 'risehand-addons' ),
				'param_name' => 'button_iconfontawe',
				'value' => 'fas fa-adjust',
				// default value to backend editor admin_label
				'settings' => array(
					'emptyIcon' => false,
					// default true, display an "EMPTY" icon?
					'iconsPerPage' => 500,
					// default 100, how many icons per/page to display, we use (big number) to display all icons in single page
				),
				'dependency' => array(
					'element' => 'button_icontypeone',
					'value' => 'fontawesome',
				),
				'description' => esc_html__( 'Select icon from library.', 'risehand-addons' ),
			), 
            array(
                'type' => 'dropdown',
                'heading' => esc_html__('Icon', 'risehand-addons') ,
                'param_name' => 'button_icontype',
                'value'       => get_risehand_icons(),
            
                 'dependency' => array(
					'element' => 'button_icontypeone',
					'value' => 'custom',
				),
            ), 
            array(
                'heading'    => esc_html__( 'Button 1 Link', 'risehand-addons' ),
                'type'       => 'vc_link',
                'param_name' => 'button_1_link',
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Button 2 Text', 'risehand-addons') ,
                'param_name' => 'button_two',
                'value' => 'Become a Volunteer',  
            ), 
            array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Select Icon library', 'risehand-addons' ),
				'value' => array( 
                    esc_html__( 'Risehand Custom Icons', 'risehand-addons' ) => 'custom',
					esc_html__( 'Font Awesome 5', 'risehand-addons' ) => 'fontawesome',
                    esc_html__( 'None', 'risehand-addons' ) => 'none',
				), 
				'param_name' => 'button_icontypetwo',
            
				'description' => esc_html__( 'Select icon library.', 'risehand-addons' ),
			),
			array(
				'type' => 'iconpicker',
				'heading' => esc_html__( 'Button 2 Fontawesome Icon', 'risehand-addons' ),
				'param_name' => 'button_iconfontawetwo',
				'value' => 'fas fa-adjust',
				// default value to backend editor admin_label
				'settings' => array(
					'emptyIcon' => false,
					// default true, display an "EMPTY" icon?
					'iconsPerPage' => 500,
					// default 100, how many icons per/page to display, we use (big number) to display all icons in single page
				),
				'dependency' => array(
					'element' => 'button_icontypetwo',
					'value' => 'fontawesome',
				),
				'description' => esc_html__( 'Select icon from library.', 'risehand-addons' ),
			), 
            array(
                'type' => 'dropdown',
                'heading' => esc_html__('Button 2 Icon', 'risehand-addons') ,
                'param_name' => 'button_icon_two',
                'value'       => get_risehand_icons(),
              
                 'dependency' => array(
					'element' => 'button_icontypetwo',
					'value' => 'custom',
				),
            ), 
            array(
                'heading'    => esc_html__( 'Button 2 Link', 'risehand-addons' ),
                'type'       => 'vc_link',
                'param_name' => 'button_2_link',
            ),
            array(
                'type'        => 'checkbox',
                'heading'     => esc_html__( 'Video Enable / Disable', 'risehand-addons' ),
                'param_name'  => 'video_enables',
                'value'      => array( esc_html__( 'Yes', 'risehand-addons' ) => '1' ),
    
            ), 
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Video Link', 'risehand-addons') ,
                'param_name' => 'video_link',
                'value' => 'https://youtu.be/RN81h85V6D4', 
               
                'dependency' => array(
					'element' => 'video_enables',
					'value' => '1',
				),
            ), 
        ),
        'group' => esc_html__('Slider Content', 'risehand-addons') , 
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Slider Autoplay Speed', 'risehand-addons') ,
        'param_name' => 'autoplays',
        'value' => '5000',  
        'group' => esc_html__('Slider Content', 'risehand-addons') , 
    ), 
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Slider Smart Speed', 'risehand-addons') ,
        'param_name' => 'speeds',
        'value' => '500',   
        'group' => esc_html__('Slider Content', 'risehand-addons') , 
    ), 
    // Slider Styling 
    
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Slider Image Parallax Position', 'risehand-addons' ),
        'value' => array( 
            esc_html__( '0%', 'risehand-addons' ) => '0',
            esc_html__( '10%', 'risehand-addons' ) => '10',
            esc_html__( '20%', 'risehand-addons' ) => '20',
            esc_html__( '30%', 'risehand-addons' ) => '30',
            esc_html__( '40%', 'risehand-addons' ) => '40',
            esc_html__( '50%', 'risehand-addons' ) => '50',
            esc_html__( '60%', 'risehand-addons' ) => '60',
            esc_html__( '70%', 'risehand-addons' ) => '70',
            esc_html__( '80%', 'risehand-addons' ) => '80',
            esc_html__( '90%', 'risehand-addons' ) => '90',
            esc_html__( '100%', 'risehand-addons' ) => '100', 
        ), 
        'param_name' => 'slider_parallax',
  
        'description' => esc_html__( 'Select parallax position', 'risehand-addons' ),
        'group' => esc_html__('Slider Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => 'Slider Overlay Background Color',
        'param_name' => 'slideroverlaybg', 
        'group' => esc_html__('Slider Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => 'Small Title Icon Color',
        'param_name' => 'smiconcolor', 
        'group' => esc_html__('Slider Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => 'Small Title  Color',
        'param_name' => 'smtitlecolor', 
        'group' => esc_html__('Slider Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => 'Title Color',
        'param_name' => 'titlecolor', 
        'group' => esc_html__('Slider Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => 'Content Color',
        'param_name' => 'contentcolor', 
        'group' => esc_html__('Slider Styling', 'risehand-addons') , 
    ),
    // Button 1 styling
    array(
        'type' => 'colorpicker',
        'heading' => 'Button 1 Icon Color',
        'param_name' => 'buttoniconcolor', 
        'group' => esc_html__('Slider Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => 'Button 1 Color',
        'param_name' => 'buttoncolor', 
        'group' => esc_html__('Slider Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => 'Button 1 Background Color',
        'param_name' => 'buttonbgcolor', 
        'group' => esc_html__('Slider Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => 'Button 1 Border Color',
        'param_name' => 'buttonbordercolor', 
        'group' => esc_html__('Slider Styling', 'risehand-addons') , 
    ),
    // hover 
    array(
        'type' => 'colorpicker',
        'heading' => 'Hover Button 1 Icon Color',
        'param_name' => 'hoverbuttoniconcolor', 
        'group' => esc_html__('Slider Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => 'Hover Button 1 Color',
        'param_name' => 'hoverbuttoncolor', 
        'group' => esc_html__('Slider Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => 'Hover Button 1 Background Color',
        'param_name' => 'hoverbuttonbgcolor', 
        'group' => esc_html__('Slider Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => 'Hover Button 1 Border Color',
        'param_name' => 'hoverbuttonbordercolor', 
        'group' => esc_html__('Slider Styling', 'risehand-addons') , 
    ),
    // Button 2 styling
    array(
        'type' => 'colorpicker',
        'heading' => 'Button 2 Icon Color',
        'param_name' => 'buttontwoiconcolor', 
        'group' => esc_html__('Slider Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => 'Button 2 Color',
        'param_name' => 'buttontwocolor', 
        'group' => esc_html__('Slider Styling', 'risehand-addons') , 
    ),
   
    // hover
    array(
        'type' => 'colorpicker',
        'heading' => 'Hover Button 2 Icon Color',
        'param_name' => 'hoverbuttontwoiconcolor', 
        'group' => esc_html__('Slider Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => 'Hover Button 2 Color',
        'param_name' => 'hoverbuttontwocolor', 
        'group' => esc_html__('Slider Styling', 'risehand-addons') , 
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => 'Hover Button 2 Border Color',
        'param_name' => 'hoverbuttonbrcolor', 
        'group' => esc_html__('Slider Styling', 'risehand-addons') , 
    ),
     // video icon css
     array(
        'type' => 'colorpicker',
        'heading' => 'Video Icon Background Color',
        'param_name' => 'videoiconbgcolor', 
        'group' => esc_html__('Slider Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => 'Video Icon  Color',
        'param_name' => 'videoiconcolor', 
        'group' => esc_html__('Slider Styling', 'risehand-addons') , 
    ), 
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Slider Height Desktop', 'risehand-addons') ,
        'param_name' => 'slider_height_desktop',
        'description' => esc_html__('Enter the slider height for desktop Eg : 12rem , 8em , 1000px', 'risehand-addons') , 
        'group' => esc_html__('Slider Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Slider Height Tablet', 'risehand-addons') ,
        'param_name' => 'slider_height_tablets',
        'description' => esc_html__('Enter the slider height for Tablet Eg : 12rem , 8em , 1000px', 'risehand-addons') , 
        'group' => esc_html__('Slider Styling', 'risehand-addons') , 
    ), 
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Slider Height Mobile', 'risehand-addons') ,
        'param_name' => 'slider_height_mobile',
        'description' => esc_html__('Enter the slider height for Mobile Eg : 12rem , 8em , 1000px', 'risehand-addons') , 
        'group' => esc_html__('Slider Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Slider Height Extra Small Size', 'risehand-addons') ,
        'param_name' => 'slider_height_mobiletwo',
        'description' => esc_html__('Enter the slider height for Mobile Eg : 12rem , 8em , 1000px', 'risehand-addons') , 
        'group' => esc_html__('Slider Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Slider Content Padding', 'risehand-addons') ,
        'param_name' => 'slider_content_padding', 
 
        'group' => esc_html__('Slider Styling', 'risehand-addons') , 
        'dependency' => array(
            'element' => 'slider_style',
            'value' => 'type_two',
        ),
    ), 
    // Pattern style
    array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Pattern Enable / Disable', 'risehand-addons' ),
        'param_name'  => 'pattern_enables',
        'value'      => array( esc_html__( 'Yes', 'risehand-addons' ) => '1' ), 
        'group' => esc_html__('Pattern Styling', 'risehand-addons') , 
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => 'Round Color',
        'param_name' => 'patternone', 
        'group' => esc_html__('Pattern Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => 'Line Color',
        'param_name' => 'patterntwo', 
        'group' => esc_html__('Pattern Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => 'Content Bg Pattern Color',
        'param_name' => 'patternthree', 
        'group' => esc_html__('Pattern Styling', 'risehand-addons') , 
    ),
    // Arrow style
    array(
        'type' => 'colorpicker',
        'heading' => 'Border Color',
        'param_name' => 'arrowone', 
        'group' => esc_html__('Arrow / Dot Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => 'Arrow Color',
        'param_name' => 'arrowtwo', 
        'group' => esc_html__('Arrow / Dot Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => ' Background Color',
        'param_name' => 'arrowthree', 
        'group' => esc_html__('Arrow / Dot Styling', 'risehand-addons') , 
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => 'Hover  Border Color',
        'param_name' => 'hoverarrowone', 
        'group' => esc_html__('Arrow / Dot Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => 'Hover Arrow Color',
        'param_name' => 'hoverarrowtwo', 
        'group' => esc_html__('Arrow / Dot Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => 'Hover  Background Color',
        'param_name' => 'hoverarrowthree', 
        'group' => esc_html__('Arrow / Dot Styling', 'risehand-addons') , 
    ), 
    // dot color
    array(
        'type' => 'colorpicker',
        'heading' => 'Dot Background Color',
        'param_name' => 'dotcolorone', 
        'group' => esc_html__('Arrow / Dot Styling', 'risehand-addons') , 
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => 'Dot Active / Hover Background Color',
        'param_name' => 'dotcolortwo', 
        'group' => esc_html__('Arrow / Dot Styling', 'risehand-addons') , 
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => 'Dot Active / Hover Border Color',
        'param_name' => 'dotcolorthree', 
        'group' => esc_html__('Arrow / Dot Styling', 'risehand-addons') , 
    ), 
)));
}

// shortcode
 
add_shortcode( 'vc_slider_v1_init', 'vc_slider_v1' );
function vc_slider_v1( $atts, $content = null) { 
$unique_id = uniqid();
$atts = shortcode_atts(
   array(
        'slider_style' => 'style_one' , 
        'slider_layout' => 'auto-container' , 
        'slider_repeater' => '', 
        'autoplays' => '5000', 
        'speeds' => '500', 
        'slideroverlaybg'  => '', 
        'slider_parallax'  => '50', 
        'smiconcolor' => '',
        'smtitlecolor' => '',
        'titlecolor' => '',
        'contentcolor' => '',
        'buttoniconcolor' => '',
        'buttoncolor' => '',
        'buttonbgcolor' => '',
        'buttonbordercolor' => '',
        'hoverbuttoniconcolor' => '',
        'hoverbuttoncolor' => '',
        'hoverbuttonbgcolor' => '',
        'hoverbuttonbordercolor' => '',
        'buttontwoiconcolor' => '',
        'buttontwocolor' => '',
        'hoverbuttontwoiconcolor' => '',
        'hoverbuttontwocolor' => '', 
        'hoverbuttonbrcolor' => '',  
        'pattern_enables' => '', 
        'patternone' => '', 
        'patterntwo' => '', 
        'patternthree' => '',  
        'arrowone' => '', 
        'arrowtwo' => '', 
        'arrowthree' => '', 
        'hoverarrowone' => '', 
        'hoverarrowtwo' => '', 
        'hoverarrowthree' => '', 
        'dotcolorone' => '', 
        'dotcolortwo' => '', 
        'dotcolorthree' => '', 
        'videoiconbgcolor' => '', 
        'videoiconcolor' => '', 
        'slider_height_desktop' => '',
        'slider_height_tablets' => '',
        'slider_height_mobile' => '',
        'slider_height_mobiletwo' => '',
        'slider_content_padding' => '140px 0px 100px',
   ), $atts
);
$allowed_tags = wp_kses_allowed_html('post');
$slider_repeater = function_exists( 'vc_param_group_parse_atts' ) ? vc_param_group_parse_atts( $atts['slider_repeater'] ) : array();
ob_start();
 // Define the inline CSS styles
?>
 <style type="text/css" data-type="vc_shortcodes-custom">
<?php if($atts['slider_content_padding']): ?>.slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .slider_box_V1 .slider_content {padding:<?php echo esc_attr($atts['slider_content_padding']); ?>!important;}<?php endif; ?>
<?php if($atts['slideroverlaybg']): ?>.slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .slider_box_V1::before{background:<?php echo esc_attr($atts['slideroverlaybg']); ?>;}<?php endif; ?>
<?php if($atts['dotcolorone']): ?>.slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .slider-pagination .swiper-pagination-bullet::before{background:<?php echo esc_attr($atts['dotcolorone']); ?>;}<?php endif; ?>
<?php if($atts['dotcolortwo']): ?>.slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .slider-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active:before,.slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .slider-pagination .swiper-pagination-bullet:hover:before{background:<?php echo esc_attr($atts['dotcolortwo']); ?>!important;}<?php endif; ?>
<?php if($atts['dotcolorthree']): ?>.slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .slider-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active,.slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .slider-pagination .swiper-pagination-bullet:hover{border-color:<?php echo esc_attr($atts['dotcolorthree']); ?>!important;}<?php endif; ?>
<?php if($atts['arrowone']): ?>.slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .swiper_arrows .arrow-prev,.slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .swiper_arrows .arrow-next{border-color:<?php echo esc_attr($atts['arrowone']); ?>;}<?php endif; ?>
<?php if($atts['arrowtwo']): ?>.slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .swiper_arrows .arrow-prev:before,.slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .swiper_arrows .arrow-next:before{color:<?php echo esc_attr($atts['arrowtwo']); ?>;}<?php endif; ?>
<?php if($atts['arrowthree']): ?>.slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .swiper_arrows .arrow-prev,.slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .swiper_arrows .arrow-next{background:<?php echo esc_attr($atts['arrowthree']); ?>;}<?php endif; ?>
<?php if($atts['hoverarrowone']): ?>.slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .swiper_arrows .arrow-prev:hover,.slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .swiper_arrows .arrow-next:hover{border-color:<?php echo esc_attr($atts['hoverarrowone']); ?>;}<?php endif; ?>
<?php if($atts['hoverarrowtwo']): ?>.slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .swiper_arrows .arrow-prev:hover:before,.slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .swiper_arrows .arrow-next:hover:before{color:<?php echo esc_attr($atts['hoverarrowtwo']); ?>;}<?php endif; ?>
<?php if($atts['hoverarrowthree']): ?>.slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .swiper_arrows .arrow-prev:hover,.slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .swiper_arrows .arrow-next:hover{background:<?php echo esc_attr($atts['hoverarrowthree']); ?>;}<?php endif; ?>
<?php if($atts['patternthree']): ?>.slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .slider_box_V1 .slider_content .shape_bg{background:<?php echo esc_attr($atts['patternthree']); ?>;}<?php endif; ?>
<?php if($atts['patterntwo']): ?>.slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .slider_box_V1 .line_image{background:<?php echo esc_attr($atts['patterntwo']); ?>;}<?php endif; ?>
<?php if($atts['patternone']): ?>.slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .slider_box_V1 .round{border-color:<?php echo esc_attr($atts['patternone']); ?>;}<?php endif; ?>
 
<?php if($atts['buttontwocolor']): ?>.slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .slider_box_V1 .text_btn{color:<?php echo esc_attr($atts['buttontwocolor']); ?>;text-decoration-color:<?php echo esc_attr($atts['buttontwocolor']); ?>;}<?php endif; ?>
<?php if($atts['buttontwoiconcolor']): ?>.slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .slider_box_V1 .text_btn i{color:<?php echo esc_attr($atts['buttontwoiconcolor']); ?>;}<?php endif; ?>
<?php if($atts['hoverbuttonbrcolor']): ?>.slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .slider_box_V1 .text_btn:hover:before{background:<?php echo esc_attr($atts['hoverbuttonbrcolor']); ?>;}<?php endif; ?>
<?php if($atts['hoverbuttontwocolor']): ?>.slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .slider_box_V1 .text_btn:hover{color:<?php echo esc_attr($atts['hoverbuttontwocolor']); ?>;}<?php endif; ?>
<?php if($atts['hoverbuttontwoiconcolor']): ?>.slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .slider_box_V1 .text_btn:hover i{color:<?php echo esc_attr($atts['hoverbuttontwoiconcolor']); ?>;}<?php endif; ?>
<?php if($atts['buttoncolor']): ?>.slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .slider_box_V1 .theme_btn{color:<?php echo esc_attr($atts['buttoncolor']); ?>;}<?php endif; ?>
<?php if($atts['buttonbgcolor']): ?>.slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .slider_box_V1 .theme_btn{background:<?php echo esc_attr($atts['buttonbgcolor']); ?>;}<?php endif; ?>
<?php if($atts['buttonbordercolor']): ?>.slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .slider_box_V1 .theme_btn{border-color:<?php echo esc_attr($atts['buttonbordercolor']); ?>;}<?php endif; ?>
<?php if($atts['buttoniconcolor']): ?>.slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .slider_box_V1 .theme_btn i{color:<?php echo esc_attr($atts['buttoniconcolor']); ?>;}<?php endif; ?>
<?php if($atts['hoverbuttoncolor']): ?>.slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .slider_box_V1 .theme_btn:hover{color:<?php echo esc_attr($atts['hoverbuttoncolor']); ?>;}<?php endif; ?>
<?php if($atts['hoverbuttonbgcolor']): ?>.slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .slider_box_V1 .theme_btn:hover{background:<?php echo esc_attr($atts['hoverbuttonbgcolor']); ?>;}<?php endif; ?>
<?php if($atts['hoverbuttonbordercolor']): ?>.slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .slider_box_V1 .theme_btn:hover{border-color:<?php echo esc_attr($atts['hoverbuttonbordercolor']); ?>;}<?php endif; ?>
<?php if($atts['hoverbuttoniconcolor']): ?>.slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .slider_box_V1 .theme_btn:hover i{color:<?php echo esc_attr($atts['hoverbuttoniconcolor']); ?>;}<?php endif; ?>
<?php if($atts['contentcolor']): ?>.slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .slider_box_V1 .content{color:<?php echo esc_attr($atts['contentcolor']); ?>;}<?php endif; ?>
<?php if($atts['titlecolor']): ?>.slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .slider_box_V1 .title{color:<?php echo esc_attr($atts['titlecolor']); ?>;}<?php endif; ?>
<?php if($atts['smtitlecolor']): ?>.slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .slider_box_V1 .intitle{color:<?php echo esc_attr($atts['smtitlecolor']); ?>;}<?php endif; ?>
<?php if($atts['smiconcolor']): ?>.slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .slider_box_V1 .smtitle i{color:<?php echo esc_attr($atts['smiconcolor']); ?>;}<?php endif; ?>
<?php if($atts['videoiconbgcolor']): ?> .slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .slider_box_V1 .video_box svg path{fill:<?php echo esc_attr($atts['videoiconbgcolor']); ?>;}<?php endif; ?>
<?php if($atts['videoiconcolor']): ?> .slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .slider_box_V1 .video_box i{color:<?php echo esc_attr($atts['videoiconcolor']); ?>;}<?php endif; ?>
<?php if($atts['slider_height_mobiletwo']): ?> @media(max-width:768px){ .slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .slider_box_V1 {height:<?php echo esc_attr($atts['slider_height_mobiletwo']); ?>;}}<?php endif; ?>
<?php if($atts['slider_height_mobile']): ?> @media(min-width:769px){ .slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .slider_box_V1{height:<?php echo esc_attr($atts['slider_height_mobile']); ?>;}}<?php endif; ?>
<?php if($atts['slider_height_tablets']): ?> @media(min-width:992px){ .slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .slider_box_V1{height:<?php echo esc_attr($atts['slider_height_tablets']); ?>;}}<?php endif; ?>
<?php if($atts['slider_height_desktop']): ?> @media(min-width:1200px){ .slider_v1.unique-id-<?php echo esc_attr($unique_id); ?> .slider_box_V1{height:<?php echo esc_attr($atts['slider_height_desktop']); ?>;}}<?php endif; ?>
</style> 
<?php 
// slider repeater
?>
<section class="slider_v1 vc_slides unique-id-<?php echo esc_attr($unique_id); ?> sliders_<?php echo esc_attr($atts['slider_style']); ?>">  
<div class="swiper swiper-container swiper_container loading" data-swiper='{
        "loop": false,
        "autoplay": {
            "delay": "<?php echo esc_attr($atts['autoplays']); ?>"
        },
        "speed":  "<?php echo esc_attr($atts['speeds']); ?>",
        "centeredSlides": false,  
        "parallax" : true,
        "spaceBetween": 0,
        "navigation": {
            "nextEl": ".slider-button-next",
            "prevEl": ".slider-button-prev"
        },
        "pagination": {
            "el": ".slider-pagination", 
            "clickable": true  ,
            "type": "bullets"
        },
        "grabCursor": true,  
        "breakpoints": {
            "1200": {
            "slidesPerView": 1
            },
            "1024": {
            "slidesPerView": 1
            },
            "768": {
                "slidesPerView": 1,
                "autoplay": {
                    "delay": 4000,  
                    "disableOnInteraction": false
                },
                "speed": 500 
            },
            "576": {
                "slidesPerView": 1,
                "autoplay": {
                    "delay": 4000,  
                    "disableOnInteraction": false
                },
                "speed": 500 
            }
        }
        }'>
    <div class="swiper-wrapper">
    <?php if(!empty($slider_repeater)): 
           foreach($slider_repeater as $key => $sliderrepeater):?>
            <div class="swiper-slide">
                <div class="slider_box_V1  <?php if(!empty($sliderrepeater['video_enables']) == "1"): ?> video_enables<?php endif; ?> <?php if(!empty($sliderrepeater['image_enable'])): ?> image_enable<?php endif; ?> slideralignment_<?php echo esc_attr($sliderrepeater['slideralignment']); ?>"> 
                <?php if(!empty($sliderrepeater['slider_image'])): 
                       $slider_images = wp_get_attachment_image_src($sliderrepeater['slider_image'], 'full');
                       $alt_slider = get_post_meta($sliderrepeater['slider_image'], '_wp_attachment_image_alt', true);
                       if(!empty($alt_slider)){
                        $alt_slider = $alt_slider;
                       }else{
                        $alt_slider = 'slider-image';
                       } 
                    ?> 
                    <div class="slide-bgimg" style="background-image:url(<?php echo esc_url($slider_images[0]); ?>);" data-swiper-parallax-x="<?php echo esc_attr($atts['slider_parallax']); ?>%">
                    </div>
                <?php endif; ?> 
                <?php if($atts['slider_style'] == "style_one"): ?>
                    <?php if(!empty($atts['pattern_enables']) == "1"): ?>
                <div class="line_image mask_image" 
                    style="mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/slider-1/line.png' ?>); 
                    -webkit-mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/slider-1/line.png' ?>);">
                </div> 
                <?php endif; ?>  
                <?php if(!empty($atts['pattern_enables']) == "1"): ?>
                <div class="round"></div>
                <?php endif; ?> 
                <?php endif; ?> 
                <div class="<?php echo esc_attr($atts['slider_layout']); ?>">
                    <div class="row">
                        <?php if($sliderrepeater['slideralignment'] == 'right'): ?>
                            <div class="col-lg-5 col-md-12 col-sm-12 text-center">
                            <?php if(!empty($sliderrepeater['video_enables']) == "1"):
                                    $video_link = $sliderrepeater['video_link'];
                                    if($video_link):
                                ?>
                                <div class="video_box">
                                <a href="<?php echo esc_url($video_link); ?>" class="lightbox-image">
                                    <svg  class="zoomInOut" version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 97" width="100" height="97">
                                        <path  class="s0" d="m52.2 0.5c28.7-0.7 47 24.4 47.8 51.5-0.3 28.2-22.2 49.6-47.3 44.3-26.2-3-53.7-14.5-52.7-44.3-0.2-27.6 22.5-50.1 52.2-51.5"/>
                                    </svg> 
                                    <i class="risehand-play1"></i>
                                    </a>
                                </div> 
                                <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                        <div class="col-md-12 col-sm-12<?php if($sliderrepeater['slideralignment'] == 'center'): ?> col-lg-8 m-auto text-center<?php else: ?> col-lg-7 <?php endif; ?>">
                            <div class="slider_content"> 
                            <?php if($atts['slider_style'] == "style_one"): ?>
                                <?php if(!empty($atts['pattern_enables']) == "1"): ?>
                                    <div class="shape_bg mask_image" 
                                    style="mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/slider-1/shape-bg.png' ?>); 
                                    -webkit-mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/slider-1/shape-bg.png' ?>);" data-swiper-parallax-y="600">
                                    </div>
                                <?php endif; ?> 
                                <?php endif; ?> 
                                <?php if(!empty($sliderrepeater['small_title'])): ?>
                                    <div class="smtitle d-flex align-items-center<?php if($sliderrepeater['slideralignment'] == 'center'): ?> justify-content-center<?php endif; ?>" data-swiper-parallax-x="30%" data-swiper-parallax-opacity="0">
                                        <?php if($sliderrepeater['icontype'] == 'fontawesome'): ?>
                                            <?php if(!empty($sliderrepeater['icon_fontawesome'])): ?>
                                            <div class="icon">
                                                <i class="<?php echo esc_attr($sliderrepeater['icon_fontawesome']); ?>"></i>
                                            </div> 
                                            <?php endif; ?>	 
                                        <?php // none end ?>
                                        <?php elseif($sliderrepeater['icontype'] == 'none'): ?> 
                                        <?php // none end ?>
                                        <?php else: ?>
                                            <?php if(!empty($sliderrepeater['icon_fonts'])): ?>
                                            <div class="icon">
                                                <i class="<?php echo esc_attr($sliderrepeater['icon_fonts']); ?>"></i>
                                            </div> 
                                            <?php endif; ?>		
                                        <?php endif; ?> 
                                        <div class="intitle color_white">
                                        <?php echo wp_kses($sliderrepeater['small_title'] , $allowed_tags); ?>
                                        </div> 
                                    </div>
                                <?php endif; ?>
                                <?php if(!empty($sliderrepeater['title'])): ?>
                                <div class="title color_white" data-swiper-parallax-x="-50%" data-swiper-parallax-opacity="0">
                                <?php echo wp_kses($sliderrepeater['title'] , $allowed_tags); ?>
                                </div>
                                <?php endif; ?>
                                <?php if(!empty($sliderrepeater['content'])): ?>
                                <p class="content color_white"  data-swiper-parallax-x="-70%" data-swiper-parallax-opacity="0">
                                <?php echo wp_kses($sliderrepeater['content'] , $allowed_tags); ?>
                                </p>
                                <?php endif; ?>
                                <div class="d-flex align-items-center button_group <?php if($sliderrepeater['slideralignment'] == 'center'): ?> justify-content-center<?php endif; ?>">
                                <?php if(!empty($sliderrepeater['button_one'])):
                                    $buttonlinkone  = '#';
                                    $btntargetone  = '';
                                    $btnnofollowone  = '';
                                     if (!empty( $sliderrepeater['button_1_link'])) {
                                        $buttonlinkone_go = vc_build_link($sliderrepeater['button_1_link']);
                                        // Extract the URL
                                        $buttonlinkone = $buttonlinkone_go['url'];
                                        // Extract the target option
                                        $btntargetone = !empty($buttonlinkone_go['target']) ? ' target="' . esc_attr($buttonlinkone_go['target']) . '"' : '';
                                        // Extract the nofollow option
                                        $btnnofollowone = !empty($buttonlinkone_go['rel']) && $buttonlinkone_go['rel'] === 'nofollow' ? ' rel="nofollow"' : '';
                                    }
                                    ?>
                                    <a class="theme_btn two" href="<?php echo esc_url($buttonlinkone);?>"  <?php echo esc_attr($btntargetone); ?> <?php echo esc_attr($btnnofollowone); ?>   data-swiper-parallax-y="100">
                                    <span>  <?php echo esc_html($sliderrepeater['button_one']);?> </span>
                                        <?php if($sliderrepeater['button_icontypeone'] == 'one_eicon'): ?>
                                            <?php if(!empty($sliderrepeater['button_iconfontawe'])): ?>
                                            <div class="icon">
                                            <i class="<?php echo esc_attr($sliderrepeater['button_iconfontawe']); ?>"></i>
                                            </div>
                                            <?php endif; ?>		 
                                        <?php // none end ?>
                                        <?php elseif($sliderrepeater['button_icontypeone'] == 'none'): ?> 
                                        <?php // none end ?>
                                        <?php else: ?>
                                            <?php if(!empty($sliderrepeater['button_icontype'])): ?>
                                            <div class="icon">
                                                <i class="<?php echo esc_attr($sliderrepeater['button_icontype']); ?>"></i>
                                            </div> 
                                            <?php endif; ?>		
                                        <?php endif; ?> 
                                    </a> 
                                <?php endif; ?>
                                <?php if(!empty($sliderrepeater['button_two'])): 
                                $buttonlinktwo  = '#';
                                $btntargettwo  = '';
                                $btnnofollowtwo  = '';
                                if (!empty( $sliderrepeater['button_2_link'])) {
                                $buttonlinktwo_go = vc_build_link($sliderrepeater['button_2_link']);
                                // Extract the URL
                                $buttonlinktwo = $buttonlinktwo_go['url'];
                                // Extract the target option
                                $btntargettwo = !empty($buttonlinktwo_go['target']) ? ' target="' . esc_attr($buttonlinktwo_go['target']) . '"' : '';
                                // Extract the nofollow option
                                $btnnofollowtwo = !empty($buttonlinktwo_go['rel']) && $buttonlinktwo_go['rel'] === 'nofollow' ? ' rel="nofollow"' : '';                           }
                                ?>
                                    <a class="text_btn" href="<?php echo esc_url($buttonlinktwo);?>"  <?php echo esc_attr($btntargettwo); ?> <?php echo esc_attr($btnnofollowtwo); ?> data-swiper-parallax-y="90">
                                    <?php if($sliderrepeater['button_icontypetwo'] == 'fontawesome'): ?>
                                            <?php if(!empty($sliderrepeater['button_iconfontawetwo'])): ?>
                                            <div class="icon">
                                            <i class="<?php echo esc_attr($sliderrepeater['button_iconfontawetwo']); ?>"></i>
                                            </div>
                                            <?php endif; ?>		 
                                        <?php // none end ?>
                                        <?php elseif($sliderrepeater['button_icontypetwo'] == 'none'): ?> 
                                        <?php // none end ?>
                                        <?php else: ?>
                                            <?php if(!empty($sliderrepeater['button_icon_two'])): ?>
                                            <div class="icon">
                                                <i class="<?php echo esc_attr($sliderrepeater['button_icon_two']); ?>"></i>
                                            </div> 
                                            <?php endif; ?>		
                                        <?php endif; ?>
                                    <?php echo esc_html($sliderrepeater['button_two']);?>  
                                    </a> 
                                <?php endif; ?> 
                                </div>
                                <?php if($sliderrepeater['slideralignment'] == 'center'): ?>
                                <?php if(!empty($sliderrepeater['video_enables']) == "1"):
                                    $video_link = $sliderrepeater['video_link'];
                                    if($video_link):
                                ?>
                                <div class="video_box  mt_25 pt_20">
                                <a href="<?php echo esc_url($video_link); ?>" class="lightbox-image">
                                    <svg  class="zoomInOut" version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 97" width="100" height="97">
                                        <path  class="s0" d="m52.2 0.5c28.7-0.7 47 24.4 47.8 51.5-0.3 28.2-22.2 49.6-47.3 44.3-26.2-3-53.7-14.5-52.7-44.3-0.2-27.6 22.5-50.1 52.2-51.5"/>
                                    </svg> 
                                    <i class="risehand-play1"></i>
                                    </a>
                                </div> 
                                <?php endif; ?>
                                <?php endif; ?>
                                <?php endif; ?>
                                </div>
                            </div> 
                            <?php if($sliderrepeater['slideralignment'] == 'left'): ?>
                            <div class="col-lg-5 col-md-12 col-sm-12 text-center">
                                <?php if(!empty($sliderrepeater['video_enables']) == "1"):
                                    $video_link = $sliderrepeater['video_link'];
                                    if($video_link):
                                ?>
                                <div class="video_box">
                                <a href="<?php echo esc_url($video_link); ?>" class="lightbox-image">
                                    <svg  class="zoomInOut" version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 97" width="100" height="97">
                                        <path  class="s0" d="m52.2 0.5c28.7-0.7 47 24.4 47.8 51.5-0.3 28.2-22.2 49.6-47.3 44.3-26.2-3-53.7-14.5-52.7-44.3-0.2-27.6 22.5-50.1 52.2-51.5"/>
                                    </svg> 
                                    <i class="risehand-play1"></i>
                                    </a>
                                </div> 
                                <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>     </div>
                </div>
            </div>
        <?php endforeach; ?> 
        <?php endif; ?> 
    </div>
    <div class="swiper_arrows">
        <div class="slider-button-prev arrow-prev"></div> 
        <div class="slider-button-next arrow-next"></div>
     </div>
    <div class="slider-pagination"></div>
</div> 


</section> 
 
 
<?php
return ob_get_clean();
}