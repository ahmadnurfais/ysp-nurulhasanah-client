<?php


add_action( 'vc_before_init', 'vc_testimonial_v1_vcmap' );
function vc_testimonial_v1_vcmap() {
 vc_map( array(
  "name" => __( "Testimonial  V1", "risehand-addons" ),
  "base" => "vc_testimonial_v1_init",
  "class" => "",
  "icon" => "icon-risehand-svg", 
  "category" => __( "Risehand Content", "risehand-addons"),
  "params" => array( 
        array(
            'type'       => 'dropdown',
            'heading'    => esc_html__('Testimonial Style', 'risehand-addons'),
            'param_name' => 'testimonial_styles',
            'value'      => array(
                esc_html__('Testimonial Style One', 'risehand-addons')  => 'style_one',
                esc_html__('Testimonial Style Two', 'risehand-addons')  => 'style_two',
                esc_html__('Testimonial Style Three', 'risehand-addons')  => 'style_three',
                esc_html__('Testimonial Style Four', 'risehand-addons')  => 'style_four',
            ),
            'group' => esc_html__('General', 'risehand-addons') ,
        ),
        array(
        'type' => 'param_group',
        'heading' => esc_html__('Testimonial Content', 'risehand-addons') ,
        'value' => '',
        'param_name' => 'testimonial_repeater_c',
        'params' => array(
            array(
                'type'        => 'checkbox',
                'heading'     => esc_html__('Image  Enable', 'risehand-addons'),
                'param_name'  => 'image_enable',
                'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ), 
                'description' => esc_html__( 'Click Check to enable clident details content', 'risehand-addons' ),
            ),
            array(
                'type' => 'attach_image',
                'heading' => esc_html__(' Image', 'risehand-addons') ,
                'param_name' => 'image',
                'dependency'  => array(
                    'element' => 'image_enable',
                    'value'   => 'yes',
                ),
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Client Name', 'risehand-addons') ,
                'param_name' => 'name',
                'value' => esc_html__('Jacob Leonardo', 'risehand-addons') ,
            ) ,
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Client Designation', 'risehand-addons') ,
                'param_name' => 'designation',
                'value' => esc_html__('Senior Manager of Excel Solution', 'risehand-addons') ,
            ) ,
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Highlight Comment', 'risehand-addons') ,
                'param_name' => 'highlight_comment',
                'value' => esc_html__('', 'risehand-addons') ,
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Client Comment', 'risehand-addons') ,
                'param_name' => 'comment',
                'value' => esc_html__('While running an early stage startup everything feels
                hard, that’s why it’s been so nice to have our accounting
                feel easy. We recommed Qetus.', 'risehand-addons') ,
            ),
        
            array(
                'type'        => 'dropdown',
                'heading'     => esc_html__( 'Rating', 'risehand-addons' ),
                'param_name'  => 'rating_one',
                'value'       => array(
                    esc_html__( 'Select', 'risehand-addons' ) => '',
                    esc_html__( '1 star', 'risehand-addons' ) => 'one',
                    esc_html__( '2 star', 'risehand-addons' ) => 'two',
                    esc_html__( '3 star', 'risehand-addons' ) => 'three',
                    esc_html__( '4 star', 'risehand-addons' ) => 'four',
                    esc_html__( '5 star', 'risehand-addons' ) => 'five',
                ),
            ), 
        ),
    'group'  => esc_html__( 'General', 'risehand-addons' ),
    ), 
   
    // carouse options 
    array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Item Loop Enable / Disable', 'risehand-addons' ),
        'param_name'  => 'loop_enable', 
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ), 
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
        
    ),
    array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Centered Items Enable / Disable', 'risehand-addons' ),
        'param_name'  => 'centered_enable', 
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ), 
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Duration', 'risehand-addons') ,
        'param_name' => 'duration',
        'value' => '5000',
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('speed', 'risehand-addons') ,
        'param_name' => 'speed',
        'value' => '5000',
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Margin', 'risehand-addons') ,
        'param_name' => 'margin',
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
        'description' => esc_html__('Enter the space numbers like this -> 30 or 40 or 50 ', 'risehand-addons') ,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Items to display in Desktop View', 'risehand-addons') ,
        'param_name' => 'desk_top',
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
        'description' => esc_html__('Enter only the numbers like this -> 3 or 4 or 5 ', 'risehand-addons') ,
        
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Items to display in Tablet', 'risehand-addons') ,
        'param_name' => 'tablet',
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
        'description' => esc_html__('Enter only the numbers like this -> 3 or 4 or 5 ', 'risehand-addons') ,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Items to display in Mobile', 'risehand-addons') ,
        'param_name' => 'mobile',
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
        'description' => esc_html__('Enter only the numbers like this -> 3 or 4 or 5 ', 'risehand-addons') ,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Items to display in Extra Small Mobile', 'risehand-addons') ,
        'param_name' => 'mini_mobile',
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
        'description' => esc_html__('Enter only the numbers like this -> 3 or 4 or 5 ', 'risehand-addons') ,
    ),
    array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Arrow  Enable / Disable', 'risehand-addons' ),
        'param_name'  => 'arrow_enable', 
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ),  
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
    ),
    array(
        'type'       => 'dropdown',
        'heading'    => esc_html__('Arrow Position', 'risehand-addons'),
        'param_name' => 'arrow_post',
        'value'      => array( 
            esc_html__( 'Position One', 'risehand-addons' ) => 'post_default' ,
            esc_html__( 'Position One Left', 'risehand-addons' ) => 'post_default_left' ,
            esc_html__( 'Position One Right', 'risehand-addons' ) => 'post_default_right' ,
            esc_html__( 'Position Two', 'risehand-addons' ) => 'post_two' ,
            esc_html__( 'Position Three', 'risehand-addons' ) => 'post_three' , 
            esc_html__( 'Position Four', 'risehand-addons' ) => 'post_four' ,    
        ),
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
    ), 
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Arrow Move Top', 'risehand-addons') ,
        'param_name' => 'arrow_top',
        'value' => esc_html__('', 'risehand-addons') ,
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
        'description' => esc_html__('Enter the numbers like this eg - 10px or  -10px  or 10rem  or -10rem ', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'arrow_post',
            'value'   => array('post_two' , 'post_three' , 'post_four') ,
        ),
    ) ,
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Arrow Move Left', 'risehand-addons') ,
        'param_name' => 'arrow_left',
        'value' => esc_html__('', 'risehand-addons') ,
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
        'description' => esc_html__('Enter the numbers like this eg - 10px or  -10px  or 10rem  or -10rem ', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'arrow_post',
            'value'   => array('post_two' , 'post_three') ,
        ),
    ) ,
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Arrow Move Right', 'risehand-addons') ,
        'param_name' => 'arrow_right',
        'value' => esc_html__('', 'risehand-addons') ,
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
        'description' => esc_html__('Enter the numbers like this eg - 10px or  -10px  or 10rem  or -10rem ', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'arrow_post',
            'value'   => array('post_two' ,  'post_four') ,
        ),
    ) ,
    array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Dots  Enable / Disable', 'risehand-addons' ),
        'param_name'  => 'dot_enable', 
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ), 
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
    ),
    array(
        'type'       => 'dropdown',
        'heading'    => esc_html__('Pagination Type', 'risehand-addons'),
        'param_name' => 'dot_type',
        'value'      => array( 
            esc_html__( 'Bullets', 'risehand-addons' ) => 'bullets' ,
            esc_html__( 'Progressbar', 'risehand-addons' ) => 'progressbar' ,
            esc_html__( 'Fraction', 'risehand-addons' ) => 'fraction' ,   
        ),
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
    ), 
    array(
        'type'       => 'dropdown',
        'heading'    => esc_html__('Pagination Alignment', 'risehand-addons'),
        'param_name' => 'dot_alignment',
        'value'      => array( 
            esc_html__( 'Text Center', 'risehand-addons' ) => 'center' ,
            esc_html__( 'Text Start', 'risehand-addons' ) => 'left' ,
            esc_html__( 'Text Right', 'risehand-addons' ) => 'right' ,  
        ),
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'dot_type',
            'value'   => array('bullets' , 'fraction') ,
        ),
    ), 
    // crousel options end 

    array(
        'type' => 'colorpicker',
        'heading' => __('Box Bg Color', 'risehand-addons'),
        'param_name' => 'bg_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'testimonial_styles',
            'value'   => array('style_two' , 'style_four' , 'style_three') ,
        ),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Border Color', 'risehand-addons'),
        'param_name' => 'btnbor_color', 
        'dependency'  => array(
            'element' => 'testimonial_styles',
            'value'   => array('style_three') ,
        ),
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Title Color', 'risehand-addons'),
        'param_name' => 'title_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    
    array(
        'type' => 'colorpicker',
        'heading' => __('Description Color', 'risehand-addons'),
        'param_name' => 'des_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => __('Author Color', 'risehand-addons'),
        'param_name' => 'auth_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => __('Job Color', 'risehand-addons'),
        'param_name' => 'desg_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => __('Quote Color', 'risehand-addons'),
        'param_name' => 'quote_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Quote Background Color', 'risehand-addons'),
        'param_name' => 'quote_bg_color', 
        'dependency'  => array(
            'element' => 'testimonial_styles',
            'value'   => array('style_four') ,
        ),
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Rating Color', 'risehand-addons'),
        'param_name' => 'rating_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),

    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Prev / Next Arrow Color', 'risehand-addons'),
        'param_name' => 'nav1color',
        'group' => esc_html__('Arrow / Dot Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Prev / Next Border Color', 'risehand-addons'),
        'param_name' => 'nav2color',
        'group' => esc_html__('Arrow / Dot Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Prev / Next Background Color', 'risehand-addons'),
        'param_name' => 'nav2colors',
        'group' => esc_html__('Arrow / Dot Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Hover Prev / Next Arrow Color', 'risehand-addons'),
        'param_name' => 'nav1hocolor',
        'group' => esc_html__('Arrow / Dot Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Hover Prev / Next Arrow Bg Color', 'risehand-addons'),
        'param_name' => 'nav1hobgcolor',
        'group' => esc_html__('Arrow / Dot Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Hover Prev / Next Border Color', 'risehand-addons'),
        'param_name' => 'nav2hocolor',
        'group' => esc_html__('Arrow / Dot Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Dot Color', 'risehand-addons'),
        'param_name' => 'nav3color',
        'group' => esc_html__('Arrow / Dot Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Dot Border Color', 'risehand-addons'),
        'param_name' => 'nav4color',
        'group' => esc_html__('Arrow / Dot Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Dot Active Color', 'risehand-addons'),
        'param_name' => 'nav5color',
        'group' => esc_html__('Arrow / Dot Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Dot Active Border Color', 'risehand-addons'),
        'param_name' => 'nav6color',
        'group' => esc_html__('Arrow / Dot Styling', 'risehand-addons') ,
    ),
  
     
)));
}
// shortcode
add_shortcode( 'vc_testimonial_v1_init', 'vc_testimonial_v1' );
function vc_testimonial_v1( $atts, $content = null ) { 
$unique_id = uniqid();
 $atts = shortcode_atts(
   array(
      'testimonial_styles' => 'style_one',
      'dark_white' => '',
      'testimonial_repeater_c' => '', 
      'loop_enable'  => '' , 
      'duration' => '7000' , 
      'speed' => '1000' , 
      'centered_enable'  => '' ,  
      'margin'  => '30' , 
      'desk_top'  => '4' , 
      'tablet'  => '3' , 
      'mobile'  => '2' ,
      'mini_mobile'  => '1' ,  
      'arrow_enable'  => '' ,  
      'arrow_post'  => 'post_default' ,  
      'dot_enable'  => '' , 
      'dot_type' => 'bullets' ,
      'dot_alignment'  => 'center' ,
      'arrow_top' => '' ,
      'arrow_left' => '' ,
      'arrow_right' => '' ,
      'bg_color' => '',
        'btnbor_color' => '',
        'title_color' => '', 
        'des_color' => '', 
        'auth_color' => '', 
        'desg_color' => '', 
        'quote_color' => '',
        'quote_bg_color' => '',
        'rating_color' => '',
        
        'nav1color' => '',
        'nav2color' => '',
        'nav2colors' => '',
        'nav1hocolor' => '',
        'nav1hobgcolor' => '',
        'nav2hocolor' => '',
        'nav3color' => '',
        'nav4color' => '',
        'nav5color' => '',
        'nav6color' => '',
   ), $atts
);
  
$allowed_tags = wp_kses_allowed_html('post');
$testimonial_repeater_cs = function_exists( 'vc_param_group_parse_atts' ) ? vc_param_group_parse_atts($atts['testimonial_repeater_c']) : array();
ob_start();
$loop_enable = '';
if($atts['loop_enable'] ==  'yes'):
    $loop_enable = 'true';
else:
    $loop_enable = 'false';
endif;
$centered_enable = '';
if($atts['centered_enable'] ==  'yes'):
    $centered_enable = 'true';
else:
    $centered_enable = 'false';
endif;
?>  
<style type="text/css" data-type="vc_shortcodes-custom">
    <?php if($atts['arrow_top']): ?>
        .testimonial_sec.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow {
            top:<?php echo esc_attr($atts['arrow_top']); ?>
        }
    <?php endif; ?>
    <?php if($atts['arrow_left']): ?>
        .testimonial_sec.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .prev {
            left:<?php echo esc_attr($atts['arrow_left']); ?>
        }
    <?php endif; ?>
    <?php if($atts['arrow_right']): ?>
        .testimonial_sec.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow  .next {
            right:<?php echo esc_attr($atts['arrow_right']); ?>
        }
    <?php endif; ?>
    <?php if($atts['bg_color']): ?> 
        .testimonial_sec.unique-id-<?php echo esc_attr($unique_id); ?> .testimonial_box.style_two .content_box,
        .testimonial_sec.unique-id-<?php echo esc_attr($unique_id); ?> .testimonial_box.style_three,
        .testimonial_sec.unique-id-<?php echo esc_attr($unique_id); ?> .testimonial_box.style_four .content_box {
        background: <?php echo esc_attr($atts['bg_color']); ?>!important;
    }
    .testimonial_sec.unique-id-<?php echo esc_attr($unique_id); ?> .testimonial_box.style_two .content_box::before {
        border-left-color: <?php echo esc_attr($atts['bg_color']); ?>!important;
        border-top-color: <?php echo esc_attr($atts['bg_color']); ?>!important;
    }
    <?php endif; ?> 
    
    <?php if($atts['btnbor_color']): ?> 
        .testimonial_sec.unique-id-<?php echo esc_attr($unique_id); ?> .testimonial_box.style_three::before,
        .testimonial_sec.unique-id-<?php echo esc_attr($unique_id); ?> .testimonial_box.style_three .authour_details {
        border-color: <?php echo esc_attr($atts['btnbor_color']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['title_color']): ?>
        .testimonial_sec.unique-id-<?php echo esc_attr($unique_id); ?> .testimonial_box .title_no_a_24 {
        color: <?php echo esc_attr($atts['title_color']); ?>!important; 
    }
    <?php endif; ?>
    <?php if($atts['des_color']): ?>
        .testimonial_sec.unique-id-<?php echo esc_attr($unique_id); ?> .testimonial_box .comment {
        color: <?php echo esc_attr($atts['des_color']); ?>!important; 
    }
    <?php endif; ?>
    <?php if($atts['auth_color']): ?>
        .testimonial_sec.unique-id-<?php echo esc_attr($unique_id); ?> .testimonial_box .authour_details .title_no_a_22 {
        color: <?php echo esc_attr($atts['auth_color']); ?>!important; 
    }
    <?php endif; ?>
    <?php if($atts['desg_color']): ?>
        .testimonial_sec.unique-id-<?php echo esc_attr($unique_id); ?> .testimonial_box .authour_details span {
        color: <?php echo esc_attr($atts['desg_color']); ?>!important; 
    }
    <?php endif; ?>
    <?php if($atts['quote_color']): ?>
        .testimonial_sec.unique-id-<?php echo esc_attr($unique_id); ?> .testimonial_box .quote_icons i {
        color: <?php echo esc_attr($atts['quote_color']); ?>!important; 
    }
    <?php endif; ?>
    <?php if($atts['quote_bg_color']): ?>
        .testimonial_sec.unique-id-<?php echo esc_attr($unique_id); ?> .testimonial_box .quote_icons i { 
        background: <?php echo esc_attr($atts['quote_bg_color']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['rating_color']): ?>
        .testimonial_sec.unique-id-<?php echo esc_attr($unique_id); ?> .testimonial_box .rating li span {
        color: <?php echo esc_attr($atts['rating_color']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['nav1color']): ?>
        .testimonial_sec.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .prev .risehand-chevron-left,
        .testimonial_sec.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .next .risehand-chevron-right {
        color: <?php echo esc_attr($atts['nav1color']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['nav2color']): ?>
        .testimonial_sec.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .prev,
        .testimonial_sec.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .next {
        border-color: <?php echo esc_attr($atts['nav2color']); ?>!important; 
    }
    <?php endif; ?>
    <?php if($atts['nav2colors']): ?>
        .testimonial_sec.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .prev,
        .testimonial_sec.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .next { 
        background: <?php echo esc_attr($atts['nav2colors']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['nav1hocolor']): ?>
        .testimonial_sec.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .prev:hover .risehand-chevron-left,
        .testimonial_sec.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .next:hover .risehand-chevron-right {
        color: <?php echo esc_attr($atts['nav1hocolor']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['nav1hobgcolor']): ?>
        .testimonial_sec.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .prev:hover,
        .testimonial_sec.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .next:hover {
        background: <?php echo esc_attr($atts['nav1hobgcolor']); ?>!important; 
    }
    <?php endif; ?>
    <?php if($atts['nav2hocolor']): ?>
        .testimonial_sec.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .prev:hover,
        .testimonial_sec.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .next:hover { 
        border-color: <?php echo esc_attr($atts['nav2hocolor']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['nav3color']): ?>
        .testimonial_sec.unique-id-<?php echo esc_attr($unique_id); ?> .swiper-pagination-bullet:before {
        background: <?php echo esc_attr($atts['nav3color']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['nav4color']): ?>
        .testimonial_sec.unique-id-<?php echo esc_attr($unique_id); ?> .swiper-pagination-bullet {
        border-color: <?php echo esc_attr($atts['nav4color']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['nav5color']): ?>
        .testimonial_sec.unique-id-<?php echo esc_attr($unique_id); ?> .swiper-pagination-bullet.swiper-pagination-bullet-active:before,
        .testimonial_sec.unique-id-<?php echo esc_attr($unique_id); ?> .swiper-pagination-bullet:hover:before {
        background: <?php echo esc_attr($atts['nav5color']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['nav6color']): ?>
        .testimonial_sec.unique-id-<?php echo esc_attr($unique_id); ?> .swiper-pagination-bullet.swiper-pagination-bullet-active,
        .testimonial_sec.unique-id-<?php echo esc_attr($unique_id); ?> .swiper-pagination-bullet:hover {
        border-color: <?php echo esc_attr($atts['nav6color']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['dot_alignment']): ?>
        .testimonial_sec.unique-id-<?php echo esc_attr($unique_id); ?> .common-dots {
        text-align: <?php echo esc_attr($atts['dot_alignment']); ?>!important;
    }
    <?php endif; ?>
    
</style>
<section class="testimonial_sec <?php echo esc_attr($atts['testimonial_styles']); ?> unique-id-<?php echo esc_attr($unique_id); ?>">
    <div class="swiper swiper-container<?php if($atts['dot_enable'] == "yes"): ?> dot_enabled<?php endif; ?> swiper_container" data-swiper='{
    "loop": <?php echo esc_attr($loop_enable); ?>,
    "autoplay": {
        "delay": <?php echo esc_attr($atts['duration']); ?>
    },
    "speed":  <?php echo esc_attr($atts['speed']); ?>,
    "centeredSlides": <?php echo esc_attr($centered_enable); ?>, 
    "spaceBetween": <?php echo esc_attr($atts['margin']); ?>,
    "navigation": {
        "nextEl": ".port-next-one",
        "prevEl": ".port-prev-one"
    },  
    "pagination": {
    "el": ".port-pagination", 
    "clickable": true  ,
    "type": "<?php echo esc_attr($atts['dot_type']); ?>"
    },
    "grabCursor": true,  
    "breakpoints": {
        "1200": {
        "slidesPerView": <?php echo esc_attr($atts['desk_top']); ?>
        },
        "1024": {
        "slidesPerView": <?php echo esc_attr($atts['tablet']); ?>
        },
        "768": {
        "slidesPerView": <?php echo esc_attr($atts['mobile']); ?> 
        },
        "576": {
        "slidesPerView": <?php echo esc_attr($atts['mini_mobile']); ?> 
        }
    }
    }'>
     <div class="swiper-wrapper"> 
        <?php if(!empty($testimonial_repeater_cs)): foreach($testimonial_repeater_cs as $key =>  $testimonial_repeater_c):
            $rating_one  = ! empty( $testimonial_repeater_c['rating_one'] ) ? $testimonial_repeater_c['rating_one'] : ''; 
            $image  = ! empty( $testimonial_repeater_c['image'] ) ? $testimonial_repeater_c['image'] : ''; 
            $image_get = wp_get_attachment_image_src( intval( $image ), 'full' );
            $image_put           = $image_get ? $image_get[0] : '';
            $image_put_alt = get_post_meta($testimonial_repeater_c['image'], '_wp_attachment_image_alt', true);
            $image_put_alt = !empty($image_put_alt) ? $image_put_alt : 'risehand-addons';
            ?>
            <div class="swiper-slide">
                <?php //  style two start ?>
                <?php if($atts['testimonial_styles'] == 'style_two'): ?>
                    <div class="testimonial_box style_two"> 
                        <div class="content_box"> 
                            <div class="quote_icons"><i class="risehand-013-quotation"></i></div>
                                <ul class="rating">
                                    <?php if($rating_one == 'one'): ?>
                                    <li><span class="fa fa-star fill"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span></li>
                                    <?php elseif($rating_one == 'two'): ?>
                                    <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span></li>
                                    <?php elseif($rating_one == 'three'): ?>
                                    <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span></li>
                                    <?php elseif($rating_one == 'four'): ?>
                                    <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star empty"></span></li>
                                    <?php elseif($rating_one == 'five'): ?>
                                    <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span></li>
                                    <?php else: ?>
                                    <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span></li>
                                    <?php endif; ?>
                                </ul> 
                                <?php if(!empty($testimonial_repeater_c['highlight_comment'])): ?>
                                    <div class="title_no_a_24 mb_15"><?php echo wp_kses($testimonial_repeater_c['highlight_comment'] , $allowed_tags); ?></div>
                                <?php endif; ?>
                                <div class="comment">
                                    <?php echo wp_kses($testimonial_repeater_c['comment'] , $allowed_tags); ?>
                                </div>  
                        </div>
                        <div class="authour_details d_flex align-tems-center<?php if(!empty($testimonial_repeater_c['image_enable']) == 'yes'): ?> image_yes <?php endif; ?>">
                            <?php if(!empty($testimonial_repeater_c['image_enable']) == 'yes'): ?>
                                <?php if(!empty($image_put)): ?>
                            <div class="image"> 
                                    <img src="<?php echo esc_url($image_put); ?>" alt="<?php echo esc_attr($image_put_alt) ?>" />
                            </div>
                            <?php endif; ?>
                            <?php endif; ?>
                            <div class="details">
                                <div class="title_no_a_22"><?php echo esc_attr($testimonial_repeater_c['name']); ?></div>
                                <span class="d-block"><?php echo esc_attr($testimonial_repeater_c['designation']); ?></span>
                            </div>
                        </div> 
                </div>
                <?php //  style two end ?>
                <?php //  style three start ?>
                <?php elseif($atts['testimonial_styles'] == 'style_three'): ?>
                    <div class="testimonial_box style_three"> 
                        <div class="content_box"> 
                          
                                <ul class="rating">
                                    <?php if($rating_one == 'one'): ?>
                                    <li><span class="fa fa-star fill"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span></li>
                                    <?php elseif($rating_one == 'two'): ?>
                                    <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span></li>
                                    <?php elseif($rating_one == 'three'): ?>
                                    <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span></li>
                                    <?php elseif($rating_one == 'four'): ?>
                                    <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star empty"></span></li>
                                    <?php elseif($rating_one == 'five'): ?>
                                    <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span></li>
                                    <?php else: ?>
                                    <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span></li>
                                    <?php endif; ?>
                                </ul> 
                                <?php if(!empty($testimonial_repeater_c['highlight_comment'])): ?>
                                    <div class="title_no_a_24 mb_15"><?php echo wp_kses($testimonial_repeater_c['highlight_comment'] , $allowed_tags); ?></div>
                                <?php endif; ?>
                                <div class="comment">
                                    <?php echo wp_kses($testimonial_repeater_c['comment'] , $allowed_tags); ?>
                                </div>  
                        </div>
                        <div class="authour_details d_flex align-tems-center<?php if(!empty($testimonial_repeater_c['image_enable']) == 'yes'): ?> image_yes <?php endif; ?>">
                            <?php if(!empty($testimonial_repeater_c['image_enable']) == 'yes'): ?>
                                <?php if(!empty($image_put)): ?>
                            <div class="image"> 
                                    <img src="<?php echo esc_url($image_put); ?>" alt="<?php echo esc_attr($image_put_alt) ?>" />
                            </div>
                            <?php endif; ?>
                            <?php endif; ?>
                            <div class="details">
                                <div class="title_no_a_22"><?php echo esc_attr($testimonial_repeater_c['name']); ?></div>
                                <span class="d-block"><?php echo esc_attr($testimonial_repeater_c['designation']); ?></span>
                            </div>
                            <div class="quote_icons"><i class="risehand-013-quotation"></i></div>
                        </div> 
                </div>
                <?php //  style three end ?>
                <?php //  style four start ?>
                <?php elseif($atts['testimonial_styles'] == 'style_four'): ?>
                    <div class="testimonial_box style_four"> 
                        <div class="content_box">  
                                <ul class="rating">
                                    <?php if($rating_one == 'one'): ?>
                                    <li><span class="fa fa-star fill"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span></li>
                                    <?php elseif($rating_one == 'two'): ?>
                                    <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span></li>
                                    <?php elseif($rating_one == 'three'): ?>
                                    <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span></li>
                                    <?php elseif($rating_one == 'four'): ?>
                                    <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star empty"></span></li>
                                    <?php elseif($rating_one == 'five'): ?>
                                    <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span></li>
                                    <?php else: ?>
                                    <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span></li>
                                    <?php endif; ?>
                                </ul> 
                                <?php if(!empty($testimonial_repeater_c['highlight_comment'])): ?>
                                    <div class="title_no_a_24 mb_15"><?php echo wp_kses($testimonial_repeater_c['highlight_comment'] , $allowed_tags); ?></div>
                                <?php endif; ?>
                                <div class="comment">
                                    <?php echo wp_kses($testimonial_repeater_c['comment'] , $allowed_tags); ?>
                                </div>  
                                <div class="authour_details d_flex align-tems-center <?php if(!empty($testimonial_repeater_c['image_enable']) == 'yes'): ?> image_yes <?php endif; ?>">
                                    <?php if(!empty($testimonial_repeater_c['image_enable']) == 'yes'): ?>
                                <?php if(!empty($image_put)): ?>
                            <div class="image"> 
                                    <img src="<?php echo esc_url($image_put); ?>" alt="<?php echo esc_attr($image_put_alt) ?>" />
                            </div>
                            <?php endif; ?>
                            <?php endif; ?>
                            <div class="details">
                                <div class="title_no_a_22"><?php echo esc_attr($testimonial_repeater_c['name']); ?></div>
                                <span class="d-block"><?php echo esc_attr($testimonial_repeater_c['designation']); ?></span>
                            </div>
                         
                        </div> 
                        </div>
                        
                        <div class="quote_icons"><i class="risehand-013-quotation"></i></div>
                </div>
                <?php //  style four end ?>
                <?php //  style one start ?>
                <?php else: ?>
                <div class="testimonial_box style_one">
                    <div class="d_flex box_d_flex">
                    <div class="quote_icons"><i class="risehand-013-quotation"></i></div>
                        <div class="content_box"> 
                            <ul class="rating">
                                <?php if($rating_one == 'one'): ?>
                                <li><span class="fa fa-star fill"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span></li>
                                <?php elseif($rating_one == 'two'): ?>
                                <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span></li>
                                <?php elseif($rating_one == 'three'): ?>
                                <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span></li>
                                <?php elseif($rating_one == 'four'): ?>
                                <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star empty"></span></li>
                                <?php elseif($rating_one == 'five'): ?>
                                <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span></li>
                                <?php else: ?>
                                <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span></li>
                                <?php endif; ?>
                            </ul> 
                            <?php if(!empty($testimonial_repeater_c['highlight_comment'])): ?>
                                <div class="title_no_a_24 mb_15"><?php echo wp_kses($testimonial_repeater_c['highlight_comment'] , $allowed_tags); ?></div>
                            <?php endif; ?>
                            <?php if(!empty($testimonial_repeater_c['comment'])): ?>
                            <div class="comment pb_10">
                                <?php echo wp_kses($testimonial_repeater_c['comment'] , $allowed_tags); ?>
                            </div>  
                            <?php endif; ?>
                        <div class="authour_details d_flex align-tems-center <?php if(!empty($testimonial_repeater_c['image_enable']) == 'yes'): ?> image_yes <?php endif; ?>">
                            <?php if(!empty($testimonial_repeater_c['image_enable']) == 'yes'): ?>
                                <?php if(!empty($image_put)): ?>
                                    <div class="image"> 
                                            <img src="<?php echo esc_url($image_put); ?>" alt="<?php echo esc_attr($image_put_alt) ?>" />
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                            <div class="details">
                                <div class="title_no_a_22"><?php echo esc_attr($testimonial_repeater_c['name']); ?></div>
                                <span class="d-block"><?php echo esc_attr($testimonial_repeater_c['designation']); ?></span>
                            </div>
                        </div> 
                    </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php //  style one end ?>
               
            </div>
        <?php endforeach; endif;?> 
        </div>
     
</div> 
        <?php if($atts['dot_enable'] == "yes" && $atts['dot_type'] == "progressbar"): ?>
            <div class="port-pagination common-progress"></div>
        <?php endif; ?>  
        <?php if($atts['arrow_enable'] == "yes"): ?>
            <div class="arrow_portfolio common_arrow <?php echo esc_attr($atts['arrow_post']); ?>"> 
                <div class="port-prev-one prev trans"><i class="risehand-chevron-left"></i></div>
                <div class="port-next-one next trans"><i class="risehand-chevron-right"></i></div>
            </div>
        <?php endif; ?>  
        <?php if($atts['dot_enable'] == "yes" && $atts['dot_type'] == "bullets"): ?>
            <div class="port-pagination common-dots"></div>
        <?php endif; ?>  
        <?php if($atts['dot_enable'] == "yes" && $atts['dot_type'] == "fraction"): ?> 
              <div class="port-pagination common-fraction"></div>
        <?php endif; ?>  
</section>

<?php
return ob_get_clean();
}



