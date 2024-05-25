<?php 
add_action( 'vc_before_init', 'vc_description_v1_vcmap' );
function vc_description_v1_vcmap() {
 vc_map( array(
  "name" => __( "Text Editor V1", "risehand-addons" ),
  "base" => "vc_description_v1_init",
  "class" => "",
  "icon" => "icon-risehand-svg", 
  "category" => __( "Risehand Content", "risehand-addons"),
  "params" => array( 
      array(
        "type" => "textarea_html",
        "holder" => "div", 
        "heading" => __( "Text Content", "risehand-addons" ),
        "param_name" => "content", 
        'group' => esc_html__('General', 'risehand-addons') , 
    ),
    array(
      'type'       => 'dropdown',
      'heading'    => esc_html__('Alignments', 'risehand-addons'),
      'param_name' => 'des_alignments',
      'value'      => array(
          esc_html__( 'Default', 'risehand-addons' ) => '' ,
          esc_html__( 'Text Center', 'risehand-addons' ) => 'center' ,
          esc_html__( 'Text Right', 'risehand-addons' ) => 'end',
      ),
      'group' => esc_html__('General', 'risehand-addons') ,
    ), 
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Margin', 'risehand-addons') ,
        'param_name' => 'desc_margin',
        'value' => '0px 0px 0px 0px',
        'group' => esc_html__('Css', 'risehand-addons'),
      ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Padding', 'risehand-addons') ,
        'param_name' => 'desc_padding',
        'value' => '0px 0px 0px 0px',
        'group' => esc_html__('Css', 'risehand-addons'),
      ), 
    array(
      'type' => 'colorpicker',
      'heading' => esc_html__('Color', 'risehand-addons') ,
      'param_name' => 'description_color',
      'group' => esc_html__('Css', 'risehand-addons'),
    ), 
    array(
      'type' => 'colorpicker',
      'heading' => esc_html__('A Tag Color', 'risehand-addons') ,
      'param_name' => 'a_color',
      'group' => esc_html__('Css', 'risehand-addons'),
    ), 
    array(
      'type' => 'textfield',
      'heading' => esc_html__('Font Size', 'risehand-addons') ,
      'param_name' => 'font_size',
      'value' => '',
      'description' => esc_html__('Enter the Font size like this -> eg( 16px or 1rem or 1.5em )', 'risehand-addons'),
      'group' => esc_html__('Css', 'risehand-addons'),
    ), 
    array(
      'type' => 'textfield',
      'heading' => esc_html__('Line Height', 'risehand-addons') ,
      'param_name' => 'line_height',
      'description' => esc_html__('Enter the Line height like this -> eg( 16px or 1rem or 1.5em )', 'risehand-addons'),
      'value' => '',
      'group' => esc_html__('Css', 'risehand-addons'),
    ), 
  
)));
}

// shortcode

add_shortcode( 'vc_description_v1_init', 'vc_description_v1' );
function vc_description_v1( $atts, $content = null ) { 
  $unique_id = uniqid();
 $atts = shortcode_atts(
   array(
      'des_alignments' => '', 
      'font_size' => '',
      'a_color' => '',
      'line_height' => '',
      'desc_margin' => '',
      'desc_padding' => '', 
      'description_color' => '', 
   ), $atts
);  
 
$allowed_tags = wp_kses_allowed_html('post'); 
ob_start();
?> 
<style type="text/css" data-type="vc_shortcodes-custom">
   <?php if($atts['des_alignments'] == "center" || $atts['des_alignments'] == "end"): ?>
    .desc-<?php echo esc_attr($unique_id); ?>  {text-align:<?php echo esc_attr($atts['des_alignments']); ?>;} 
  <?php endif; ?>
  <?php if($atts['font_size']): ?>
    .desc-<?php echo esc_attr($unique_id); ?>  {font-size:<?php echo esc_attr($atts['font_size']); ?>;} 
  <?php endif; ?>
  <?php if($atts['description_color']): ?>
    .desc-<?php echo esc_attr($unique_id); ?>  {color:<?php echo esc_attr($atts['description_color']); ?>;} 
  <?php endif; ?>
  <?php if($atts['line_height']): ?>
    .desc-<?php echo esc_attr($unique_id); ?>  {line-height:<?php echo esc_attr($atts['line_height']); ?>;} 
  <?php endif; ?>
  <?php if($atts['a_color']): ?>
    .desc-<?php echo esc_attr($unique_id); ?> a {color:<?php echo esc_attr($atts['a_color']); ?>;} 
  <?php endif; ?>
  <?php if($atts['desc_margin']): ?>
    .desc-<?php echo esc_attr($unique_id); ?> {margin:<?php echo esc_attr($atts['desc_margin']); ?>;} 
  <?php endif; ?>
  <?php if($atts['desc_padding']): ?>
    .desc-<?php echo esc_attr($unique_id); ?>  {padding:<?php echo esc_attr($atts['desc_padding']); ?>;} 
  <?php endif; ?>
</style>
<?php if(!empty($content)):?>
  <div class="description_box desc-<?php echo esc_attr($unique_id); ?> "> 
    <?php echo $content; ?> 
  </div> 
<?php endif; ?>    
<?php
return ob_get_clean();
}



