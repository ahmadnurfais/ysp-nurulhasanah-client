<?php


add_action( 'vc_before_init', 'vc_social_media_v1_vcmap' );
function vc_social_media_v1_vcmap() {
 vc_map( array(
  "name" => __( "Social Media V1", "risehand-addons" ),
  "base" => "vc_social_media_v1_init",
  "class" => "",
  "icon" => "icon-risehand-svg", 
  "category" => __( "Risehand Content", "risehand-addons"),
  "params" => array(
    array(
        'type' => 'param_group',
        'heading' => esc_html__('Media Content', 'risehand-addons') ,
        'value' => '',
        'param_name' => 'media_repeater',
        'params' => array(  
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Media Icon', 'risehand-addons') ,
                'param_name' => 'media_icon',
                'value' => esc_html__('fa fa-facebook', 'risehand-addons') , 
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Tooltip', 'risehand-addons') ,
                'param_name' => 'tool_tip',
                'value' => esc_html__('Facebook', 'risehand-addons') ,
            ), 
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Link', 'risehand-addons') ,
                'param_name' => 'media_link',
                'value' => esc_html__('#', 'risehand-addons') , 
            ), 

        ),
        'group' => esc_html__('General', 'risehand-addons') ,
    ), 
    array(
        'type'       => 'dropdown',
        'heading'    => esc_html__('Media alignments', 'risehand-addons'),
        'param_name' => 'media_alignments',
        'value'      => array(
            esc_html__( 'Default', 'risehand-addons' ) => 'flex-start' ,
            esc_html__( 'Text Center', 'risehand-addons' ) => 'center' ,
            esc_html__( 'Text Right', 'risehand-addons' ) => 'flex-end',
        ),
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Icon Color', 'risehand-addons') ,
        'param_name' => 'color_one',
        'group' => esc_html__('Styling', 'risehand-addons'),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Icon Border Color', 'risehand-addons') ,
        'param_name' => 'color_two',
        'group' => esc_html__('Styling', 'risehand-addons'),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Icon Background Color', 'risehand-addons') ,
        'param_name' => 'color_three',
        'group' => esc_html__('Styling', 'risehand-addons'),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Hover Icon Color', 'risehand-addons') ,
        'param_name' => 'hcolor_one',
        'group' => esc_html__('Styling', 'risehand-addons'),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Hover Icon Border Color', 'risehand-addons') ,
        'param_name' => 'hcolor_two',
        'group' => esc_html__('Styling', 'risehand-addons'),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Hover Icon Background Color', 'risehand-addons') ,
        'param_name' => 'hcolor_three',
        'group' => esc_html__('Styling', 'risehand-addons'),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Tooltip  Color', 'risehand-addons') ,
        'param_name' => 'tooltipcolorone',
        'group' => esc_html__('Styling', 'risehand-addons'),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Tooltip Background Color', 'risehand-addons') ,
        'param_name' => 'tooltipcolortwo',
        'group' => esc_html__('Styling', 'risehand-addons'),
    ),
)));
}
// shortcode
add_shortcode( 'vc_social_media_v1_init', 'vc_social_media_v1' );
function vc_social_media_v1( $atts, $content = null ) { 
$unique_id = uniqid();
 $atts = shortcode_atts(
   array(
      'media_repeater' => '',
      'color_one'  => '',
      'tooltipcolorone'  => '',
      'tooltipcolortwo'  => '',
      'color_two'  => '',
      'color_three' => '',
      'hcolor_one'  => '',
      'hcolor_two'  => '',
      'hcolor_three' => '', 
      'media_alignments' => 'flex-start',
   ), $atts
);
$allowed_tags = wp_kses_allowed_html('post'); 
$media_repeaters = function_exists( 'vc_param_group_parse_atts' ) ? vc_param_group_parse_atts( $atts['media_repeater'] ) : array();
ob_start();
?>
  <style type="text/css" data-type="vc_shortcodes-custom">
        <?php if($atts['media_alignments'] == "center" || $atts['media_alignments'] == "end" ): ?>
            .social-icons.socia_m-<?php echo esc_attr($unique_id); ?> ul{ justify-content:<?php echo esc_attr($atts['media_alignments']); ?> }
        <?php endif; ?>
        <?php if(!empty($atts['color_one'])): ?>
            .social-icons.socia_m-<?php echo esc_attr($unique_id); ?> ul li a{ color:<?php echo esc_attr($atts['color_one']); ?> }
        <?php endif; ?>
        <?php if(!empty($atts['color_two'])): ?>
            .social-icons.socia_m-<?php echo esc_attr($unique_id); ?> ul li a{ border-color:<?php echo esc_attr($atts['color_two']); ?> }
        <?php endif; ?>
        <?php if(!empty($atts['color_three'])): ?>
            .social-icons.socia_m-<?php echo esc_attr($unique_id); ?> ul li a{ background:<?php echo esc_attr($atts['color_three']); ?> }
        <?php endif; ?>
        <?php if(!empty($atts['hcolor_one'])): ?>
            .social-icons.socia_m-<?php echo esc_attr($unique_id); ?> ul li a:hover{ color:<?php echo esc_attr($atts['hcolor_one']); ?> }
        <?php endif; ?>
        <?php if(!empty($atts['hcolor_two'])): ?>
            .social-icons.socia_m-<?php echo esc_attr($unique_id); ?> ul li a:hover{ border-color:<?php echo esc_attr($atts['hcolor_two']); ?> }
        <?php endif; ?>
        <?php if(!empty($atts['hcolor_three'])): ?>
            .social-icons.socia_m-<?php echo esc_attr($unique_id); ?> ul li a:hover{ background:<?php echo esc_attr($atts['hcolor_three']); ?> }
        <?php endif; ?>
        <?php if(!empty($atts['tooltipcolorone'])): ?>
            .social-icons.socia_m-<?php echo esc_attr($unique_id); ?>  ul li small{ color:<?php echo esc_attr($atts['tooltipcolorone']); ?> }
        <?php endif; ?>
        <?php if(!empty($atts['tooltipcolortwo'])): ?>
            .social-icons.socia_m-<?php echo esc_attr($unique_id); ?>  ul li small { background:<?php echo esc_attr($atts['tooltipcolortwo']); ?> }
            .social-icons.socia_m-<?php echo esc_attr($unique_id); ?>  ul li small:before{ border-top-color:<?php echo esc_attr($atts['tooltipcolortwo']); ?> }
        <?php endif; ?>
    </style>
<div class="social-icons trans socia_m-<?php echo esc_attr($unique_id); ?>">
    <ul class="d_flex align-items-center">
        <?php if(!empty($media_repeaters)): foreach($media_repeaters as $key => $media):
        $media_link = !empty($media['media_link']) ? $media['media_link'] : '#'; 
        ?>
        <li class="trans">
            <?php if(!empty($media['tool_tip'])): ?>
                <small class="trans"><?php echo esc_attr($media['tool_tip']); ?></small>
            <?php endif; ?>
            <a href="<?php echo esc_url($media_link); ?>" class="m_icon">
                <i class="<?php echo esc_attr($media['media_icon']); ?>"></i> 
            </a>
        </li>
        <?php endforeach; ?>
        <?php endif; ?>
    </ul>
</div>
<?php
return ob_get_clean();
}



