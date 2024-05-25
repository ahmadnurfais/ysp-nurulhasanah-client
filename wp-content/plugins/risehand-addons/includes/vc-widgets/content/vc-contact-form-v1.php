<?php 
add_action( 'vc_before_init', 'vc_contact_form_v1_vcmap' );
function vc_contact_form_v1_vcmap() {
 vc_map( array(
  "name" => __( "Contact Form v1", "risehand-addons" ),
  "base" => "contact_form_v1_init",
  "class" => "",
  "icon" => "icon-risehand-svg", 
  "category" => __( "Risehand Content", "risehand-addons"),
  "params" => array( 
    array(
      'type'       => 'dropdown',
      'heading'    => esc_html__( 'Contact Form Type', 'risehand-addons' ),
      'param_name' => 'form_type',
      'value'      => array(
          esc_html__( 'Contact Form 7', 'risehand-addons' )  => 'contact_form_seven',
          esc_html__( 'Wp Forms', 'risehand-addons' )  => 'wp_forms', 
          esc_html__( 'Shortcode', 'risehand-addons' )  => 'shortcode', 
      ),
      'group' => esc_html__('General', 'risehand-addons') ,
    ),  
    array(
      'type'       => 'dropdown',
      'heading'    => esc_html__( 'Contact Form 7', 'risehand-addons' ),
      'param_name' => 'contact_form_url_seven',
      'value'      => array_merge(array('' => esc_html__('Select a form', 'risehand-addons')), risehand_contact_form_query('wpcf7_contact_form')),
      'group'      => esc_html__('General', 'risehand-addons'),
      'dependency' => array(
          'element' => 'form_type',
          'value'   => 'contact_form_seven',
      ),
    ),
    array(
        'type'       => 'dropdown',
        'heading'    => esc_html__( 'WP Forms', 'risehand-addons' ),
        'param_name' => 'contact_form_url',
        'value'      => array_merge(array('' => esc_html__('Select a form', 'risehand-addons')), risehand_contact_form_query('wpforms')),
        'group'      => esc_html__('General', 'risehand-addons'),
        'dependency' => array(
            'element' => 'form_type',
            'value'   => 'wp_forms',
        ),
    ),
    array(
      "type" => "textarea_html",
      "holder" => "div", 
      "heading" => __( "Contact Form Shortcode", "risehand-addons" ),
      "param_name" => "content",
      "value" => __( "Enter your Contact Form Shortcode", "risehand-addons" ),
      'group' => esc_html__('General', 'risehand-addons') ,
      'dependency' => array(
        'element' => 'form_type',
        'value' => 'shortcode',
      ),
   ),

    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Label Color', 'risehand-addons'),
        'param_name' => 'label_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Label Padding', 'risehand-addons'),
        'param_name' => 'label_padding',
        'description' => esc_html__('Enter the padding like this eg 10px 10px or 1rem .5rem', 'risehand-addons') ,
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Range Slider Background Color (Wp forms)', 'risehand-addons'),
        'param_name' => 'range_slider_bg',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Range Slider Active Background Color (Wp forms)', 'risehand-addons'),
        'param_name' => 'range_ac_slider_bg',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Range Slider Handle Background Color (Wp forms)', 'risehand-addons'),
        'param_name' => 'range_han_slider_bg',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Input Check / Radio Background Color', 'risehand-addons'),
        'param_name' => 'input_check_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Input Check / Radio Border Color', 'risehand-addons'),
        'param_name' => 'input_checkbr_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Input Check / Radio Active Background Color', 'risehand-addons'),
        'param_name' => 'input_check_ac_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Input Check / Radio Active Border Color', 'risehand-addons'),
        'param_name' => 'input_check_acbr_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Input / Select Height', 'risehand-addons'),
        'param_name' => 'inputheight',
        'group' => esc_html__('Styling', 'risehand-addons') ,
        'description' => esc_html__('Enter the input height like this eg 60px', 'risehand-addons') ,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Textarea Height', 'risehand-addons'),
        'param_name' => 'textareaheight',
        'group' => esc_html__('Styling', 'risehand-addons') ,
        'description' => esc_html__('Enter the textarea height like this eg 60px', 'risehand-addons') ,
    ),
     
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Input / Textarea Color', 'risehand-addons'),
        'param_name' => 'input_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
      'type' => 'colorpicker',
      'heading' => esc_html__('Input / Textarea Placeholder Color', 'risehand-addons'),
      'param_name' => 'input_place_holder_color',
      'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Input / Textarea Background Color', 'risehand-addons'),
        'param_name' => 'input_bg_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Input Border Width', 'risehand-addons'),
        'param_name' => 'input_border_width',
        'group' => esc_html__('Styling', 'risehand-addons') ,
        'description' => esc_html__('Enter the input border width like this eg 2px', 'risehand-addons'),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Input / Textarea Border Color', 'risehand-addons'),
        'param_name' => 'input_border_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Input Border Radius', 'risehand-addons'),
        'param_name' => 'input_border_radius',
        'group' => esc_html__('Styling', 'risehand-addons') ,
        'description' => esc_html__('Enter the input border radius like this eg 10px 10px 10px 10px', 'risehand-addons'),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Input / Textarea Padding', 'risehand-addons'),
        'param_name' => 'input_padding',
        'group' => esc_html__('Styling', 'risehand-addons') ,
        'description' => esc_html__('Enter the input padding like this eg 10px 10px 10px 10px', 'risehand-addons'),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Input / Textarea Margin', 'risehand-addons'),
        'param_name' => 'input_margin',
        'group' => esc_html__('Styling', 'risehand-addons') ,
        'description' => esc_html__('Enter the input margin like this eg 10px 10px 10px 10px', 'risehand-addons'),
    ),
    
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Select Color', 'risehand-addons'),
        'param_name' => 'select_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
      'type' =>  'colorpicker',
      'heading' => esc_html__('Select Background Color', 'risehand-addons'),
      'param_name' => 'select_bg_color',
      'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Select Border Width', 'risehand-addons'),
        'param_name' => 'select_border_width',
        'group' => esc_html__('Styling', 'risehand-addons') ,
        'description' => esc_html__('Enter the select border width   like this eg 2px or 2px 2px 2px 2px', 'risehand-addons'),
    ),
    array(
        'type' =>  'colorpicker',
        'heading' => esc_html__('Select Border Color', 'risehand-addons'),
        'param_name' => 'select_border_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Select Border Radius', 'risehand-addons'),
        'param_name' => 'select_border_radius',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Select Padding', 'risehand-addons'),
        'param_name' => 'select_padding',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Select Margin', 'risehand-addons'),
        'param_name' => 'select_margin',
        'group' => esc_html__('Styling', 'risehand-addons') ,
        'description' => esc_html__('Enter the   margin like this eg 10px 10px 10px 10px', 'risehand-addons'),
    ),
    array(
        'type' => 'dropdown',
        'heading' => __('Button Position', 'risehand-addons'),
        'param_name' => 'button_position',
        'value' => array(
          __('Absolute', 'risehand-addons') => 'absolute'  ,
          __('Relative', 'risehand-addons') => 'relative' ,
        ), 
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'dropdown',
        'heading' => __('Button Position', 'risehand-addons'),
        'param_name' => 'button_pos',
        'value' => array(
              __('Bottom Right', 'risehand-addons') => 'button_bottom_right', 
              __('Bottom Left', 'risehand-addons') => 'button_bottom_left',
        ), 
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'textfield',
        'heading' => __('Button Bottom', 'risehand-addons'),
        'param_name' => 'button_bottom',
        'group' => esc_html__('Styling', 'risehand-addons') , 
        'dependency' => array(
          'element' => 'button_pos',
          'value' => array('button_bottom_right', 'button_bottom_left'),
        ),
    ),
    array(
        'type' => 'textfield',
        'heading' => __('Button Right', 'risehand-addons'),
        'param_name' => 'button_right',
        'group' => esc_html__('Styling', 'risehand-addons') ,
        'dependency' => array(
          'element' => 'button_pos',
          'value' => array('button_bottom_right'),
        ), 
    ),
    array(
      'type' => 'textfield',
      'heading' => esc_html__('Button Left', 'risehand-addons'),
      'param_name' => 'button_left',
      'group' => esc_html__('Styling', 'risehand-addons') ,
      'dependency' => array(
        'element' => 'button_pos',
        'value' => array('button_bottom_left'),
      ),  
  ),
  array(
      'type' => 'textfield',
      'heading' => esc_html__('Button Padding', 'risehand-addons'),
      'param_name' => 'button_padding',
      'group' => esc_html__('Styling', 'risehand-addons') ,
      'description' => esc_html__('Enter the padding like this eg 10px 10px 10px 10px', 'risehand-addons'),
  ),
  array(
      'type' => 'textfield',
      'heading' => esc_html__('Button Border Radius', 'risehand-addons'),
      'param_name' => 'button_borderradiuse',
      'group' => esc_html__('Styling', 'risehand-addons') ,
      'description' => esc_html__('Enter the border radius like this eg 10px 10px 10px 10px', 'risehand-addons'),
  ),
  array(
      'type' => 'textfield',
      'heading' => esc_html__('Button Margin', 'risehand-addons'),
      'param_name' => 'buttonmargin',
      'group' => esc_html__('Styling', 'risehand-addons') ,
      'description' => esc_html__('Enter the  margin like this eg 10px 10px 10px 10px', 'risehand-addons'),
  ), 
  array(
      'type' => 'colorpicker',
      'heading' => __('Button Color', 'risehand-addons'),
      'param_name' => 'button_color',
      'group' => esc_html__('Styling', 'risehand-addons') ,
  ),
  array(
      'type' => 'colorpicker',
      'heading' => __('Button Border Color', 'risehand-addons'),
      'param_name' => 'button_border_color',
      'group' => esc_html__('Styling', 'risehand-addons') ,
  ),
  array(
      'type' => 'colorpicker',
      'heading' => __('Button Background Color', 'risehand-addons'),
      'param_name' => 'button_bg_color',
      'group' => esc_html__('Styling', 'risehand-addons') ,
  ),
  array(
      'type' => 'colorpicker',
      'heading' => __('Button Hover Color', 'risehand-addons'),
      'param_name' => 'button_hover_color',
      'group' => esc_html__('Styling', 'risehand-addons') ,
  ),
  array(
      'type' => 'colorpicker',
      'heading' => __('Button Hover Border Color', 'risehand-addons'),
      'param_name' => 'button_hover_bor_color',
      'group' => esc_html__('Styling', 'risehand-addons') ,
  ),
  array(
      'type' => 'colorpicker',
      'heading' => __('Button Hover Background Color', 'risehand-addons'),
      'param_name' => 'button_hover_bg_color',
      'group' => esc_html__('Styling', 'risehand-addons') ,
  ),
)));
} 
// shortcode 
add_shortcode( 'contact_form_v1_init', 'vc_contact_form_v1' );
function vc_contact_form_v1( $atts, $content = null ) { 
  $unique_id = uniqid();
 $atts = shortcode_atts(
   array( 
      'form_type' => 'contact_form_seven',
      'contact_form_url' => '',
      'contact_form_url_seven' => '',
      'label_color' => '',
      'label_padding' => '',
      'range_slider_bg' => '',
      'range_ac_slider_bg' => '',
      'range_han_slider_bg' => '',
      'input_check_color' => '',
      'input_checkbr_color' => '',
      'input_check_ac_color' => '',
      'input_check_acbr_color' => '',
      'inputheight' => '',
      'textareaheight' => '', 
      'input_color' => '',
      'input_place_holder_color' => '',
      'input_bg_color' => '',
      'input_border_width' => '',
      'input_border_color' => '',
      'input_border_radius' => '',
      'input_padding' => '',
      'input_margin' => '', 
      'select_color' => '',
      'select_bg_color' => '',
        'select_border_width' => '',
        'select_border_color' => '',
        'select_border_radius' => '',
        'select_padding' => '',
        'select_margin' => '',
        'button_position' => 'relative',
        'button_pos' => 'button_bottom_right',
        'button_bottom' => '',
        'button_right' => '',
        'button_left' => '',
        'button_padding' => '',
        'button_borderradiuse' => '',
        'buttonmargin' => '', 
        'button_color' => '',
        'button_border_color' => '',
        'button_bg_color' => '',
        'button_hover_color' => '',
        'button_hover_bor_color' => '',
        'button_hover_bg_color' => '',
   ), $atts
);
 
$allowed_tags = wp_kses_allowed_html('post'); 
ob_start();
?>
<style>
    <?php if(!empty($atts['label_color'])): ?>
    .form-id-<?php echo esc_attr($unique_id); ?>  label ,
    .form-id-<?php echo esc_attr($unique_id); ?> .wpforms-field-number-slider-hint {
        color: <?php echo esc_attr($atts['label_color']); ?>!important; 
    }
    <?php endif; ?>
    <?php if(!empty($atts['label_padding'])): ?>
    .form-id-<?php echo esc_attr($unique_id); ?>  label ,
    .form-id-<?php echo esc_attr($unique_id); ?> .wpforms-field-number-slider-hint { 
        padding: <?php echo esc_attr($atts['label_padding']); ?>;
    }
    <?php endif; ?>
    <?php if(!empty($atts['range_slider_bg'])): ?>
    .form-id-<?php echo esc_attr($unique_id); ?>   .rangeslider {
        background: <?php echo esc_attr($atts['range_slider_bg']); ?>!important;
    }   
    <?php endif; ?>
    <?php if(!empty($atts['range_ac_slider_bg'])): ?>
    .form-id-<?php echo esc_attr($unique_id); ?>   .rangeslider__fill {
        background: <?php echo esc_attr($atts['range_ac_slider_bg']); ?>!important;
    }
    <?php endif; ?>
    <?php if(!empty($atts['range_han_slider_bg'])): ?>
    .form-id-<?php echo esc_attr($unique_id); ?>   .rangeslider__handle {
        background: <?php echo esc_attr($atts['range_han_slider_bg']); ?>!important;
    }
    <?php endif; ?>
    <?php if(!empty($atts['input_check_color'])): ?>
    .form-id-<?php echo esc_attr($unique_id); ?>   input[type=checkbox]:after , .form-id-<?php echo esc_attr($unique_id); ?>   input[type=radio]:after {
        border-color: <?php echo esc_attr($atts['input_check_color']); ?>!important;
    }
    <?php endif; ?>
    <?php if(!empty($atts['input_checkbr_color'])): ?>
    .form-id-<?php echo esc_attr($unique_id); ?>   input[type=checkbox] , .form-id-<?php echo esc_attr($unique_id); ?>   input[type=radio] {
        border-color: <?php echo esc_attr($atts['input_checkbr_color']); ?>!important;
    }
    <?php endif; ?>
    <?php if(!empty($atts['input_check_ac_color'])): ?>
    .form-id-<?php echo esc_attr($unique_id); ?>   input[type=checkbox]:checked:after, .form-id-<?php echo esc_attr($unique_id); ?>  input[type=radio]:checked:after {
        border-color: <?php echo esc_attr($atts['input_check_ac_color']); ?>!important;
    }
    <?php endif; ?>
    <?php if(!empty($atts['input_check_acbr_color'])): ?>
    .form-id-<?php echo esc_attr($unique_id); ?>   input[type=checkbox]:checked , .form-id-<?php echo esc_attr($unique_id); ?>  input[type=radio]:checked {
        border-color: <?php echo esc_attr($atts['input_check_acbr_color']); ?>!important;
    }
    <?php endif; ?>
    <?php if(!empty($atts['inputheight'])): ?>
    .form-id-<?php echo esc_attr($unique_id); ?> input:not([type="checked"]) , 
    .form-id-<?php echo esc_attr($unique_id); ?> input:not([type="radio"])  , 
    .form-id-<?php echo esc_attr($unique_id); ?> select   
    {
        height: <?php echo esc_attr($atts['inputheight']); ?>!important;
        min-height: <?php echo esc_attr($atts['inputheight']); ?>!important;
    }
  .form-id-<?php echo esc_attr($unique_id); ?> input[type=submit] ,  .form-id-<?php echo esc_attr($unique_id); ?>   button[type=submit], 
  .form-id-<?php echo esc_attr($unique_id); ?> div.wpforms-container-full .wpforms-form button[type=submit],
  .form-id-<?php echo esc_attr($unique_id); ?> div.wpforms-container-full .wpforms-form .wpforms-page-button{
    height:unset!important;
    min-height: unset!important;
  }
                     
    <?php endif; ?>
    <?php if(!empty($atts['textareaheight'])): ?>
    .form-id-<?php echo esc_attr($unique_id); ?>  textarea {
        height: <?php echo esc_attr($atts['textareaheight']); ?>!important;
        min-height: <?php echo esc_attr($atts['textareaheight']); ?>!important;
    }
    <?php endif; ?>
    <?php if(!empty($atts['input_color'])): ?>
    .form-id-<?php echo esc_attr($unique_id); ?>  input , .form-id-<?php echo esc_attr($unique_id); ?>  textarea {
        color: <?php echo esc_attr($atts['input_color']); ?>!important;
    }
    <?php endif; ?>
    <?php if(!empty($atts['input_place_holder_color'])): ?>
    .form-id-<?php echo esc_attr($unique_id); ?>  input::placeholder , .form-id-<?php echo esc_attr($unique_id); ?>  textarea::placeholder  {
        color: <?php echo esc_attr($atts['input_place_holder_color']); ?>!important;
    }
    <?php endif; ?>
    <?php if(!empty($atts['input_bg_color'])): ?>
    .form-id-<?php echo esc_attr($unique_id); ?>  input , .form-id-<?php echo esc_attr($unique_id); ?>  textarea  {
        background: <?php echo esc_attr($atts['input_bg_color']); ?>!important;
       
    }
    <?php endif; ?>
    <?php if(!empty($atts['input_border_width'])): ?>
    .form-id-<?php echo esc_attr($unique_id); ?>  input , .form-id-<?php echo esc_attr($unique_id); ?>  textarea  {
        border-width: <?php echo esc_attr($atts['input_border_width']); ?>!important; 
    }
    <?php endif; ?>
    <?php if(!empty($atts['input_border_color'])): ?>
    .form-id-<?php echo esc_attr($unique_id); ?>  input , .form-id-<?php echo esc_attr($unique_id); ?>  textarea  {
        border-color: <?php echo esc_attr($atts['input_border_color']); ?>!important; 
    }
    <?php endif; ?>
    <?php if(!empty($atts['input_border_radius'])): ?>
    .form-id-<?php echo esc_attr($unique_id); ?>  input , .form-id-<?php echo esc_attr($unique_id); ?>  textarea  {
        border-radius: <?php echo esc_attr($atts['input_border_radius']); ?>; 
    }
    <?php endif; ?>
    <?php if(!empty($atts['input_padding'])): ?>
    .form-id-<?php echo esc_attr($unique_id); ?>  input , .form-id-<?php echo esc_attr($unique_id); ?>  textarea  {
        padding: <?php echo esc_attr($atts['input_padding']); ?>;
    }
    <?php endif; ?>
    <?php if(!empty($atts['input_margin'])): ?>
    .form-id-<?php echo esc_attr($unique_id); ?>  input , .form-id-<?php echo esc_attr($unique_id); ?>  textarea  {
        margin: <?php echo esc_attr($atts['input_margin']); ?>;
    }
    <?php endif; ?>
    <?php if(!empty($atts['select_color'])): ?>
    .form-id-<?php echo esc_attr($unique_id); ?> .wpforms-form .choices::after , .form-id-<?php echo esc_attr($unique_id); ?>  .select2-selection__arrow::before , .form-id-<?php echo esc_attr($unique_id); ?>  select {
        color: <?php echo esc_attr($atts['select_color']); ?>!important;
    }
    <?php endif; ?>
    
    <?php if(!empty($atts['select_bg_color'])): ?>
    .form-id-<?php echo esc_attr($unique_id); ?>   .select2-selection--single,
    .form-id-<?php echo esc_attr($unique_id); ?>  .wpforms-field .select2-selection--single,
    .form-id-<?php echo esc_attr($unique_id); ?> .wpforms-field-select select,
    .form-id-<?php echo esc_attr($unique_id); ?> div.wpforms-container .wpforms-form .choices__inner,
    .form-id-<?php echo esc_attr($unique_id); ?> select {
        background: <?php echo esc_attr($atts['select_bg_color']); ?> !important; ;
    }
    <?php endif; ?>
    <?php if(!empty($atts['select_border_width'])): ?>
    .form-id-<?php echo esc_attr($unique_id); ?>   .select2-selection--single,
    .form-id-<?php echo esc_attr($unique_id); ?>  .wpforms-field .select2-selection--single,
    .form-id-<?php echo esc_attr($unique_id); ?> .wpforms-field-select select,
    .form-id-<?php echo esc_attr($unique_id); ?> div.wpforms-container .wpforms-form .choices__inner,
    .form-id-<?php echo esc_attr($unique_id); ?> select { 
        border-width: <?php echo esc_attr($atts['select_border_width']); ?> !important; 
    }
    <?php endif; ?>
    <?php if(!empty($atts['select_border_color'])): ?>
    .form-id-<?php echo esc_attr($unique_id); ?>   .select2-selection--single,
    .form-id-<?php echo esc_attr($unique_id); ?>  .wpforms-field .select2-selection--single,
    .form-id-<?php echo esc_attr($unique_id); ?> .wpforms-field-select select,
    .form-id-<?php echo esc_attr($unique_id); ?> div.wpforms-container .wpforms-form .choices__inner,
    .form-id-<?php echo esc_attr($unique_id); ?> select { 
        border-color: <?php echo esc_attr($atts['select_border_color']); ?> !important; 
    }
    <?php endif; ?>
    <?php if(!empty($atts['select_border_radius'])): ?>
    .form-id-<?php echo esc_attr($unique_id); ?>   .select2-selection--single,
    .form-id-<?php echo esc_attr($unique_id); ?>  .wpforms-field .select2-selection--single,
    .form-id-<?php echo esc_attr($unique_id); ?> .wpforms-field-select select,
    .form-id-<?php echo esc_attr($unique_id); ?> div.wpforms-container .wpforms-form .choices__inner,
    .form-id-<?php echo esc_attr($unique_id); ?> select { 
        border-radius: <?php echo esc_attr($atts['select_border_radius']); ?> !important; 
    }
    <?php endif; ?>
    <?php if(!empty($atts['select_padding'])): ?>
    .form-id-<?php echo esc_attr($unique_id); ?>   .select2-selection--single,
    .form-id-<?php echo esc_attr($unique_id); ?>  .wpforms-field .select2-selection--single,
    .form-id-<?php echo esc_attr($unique_id); ?> .wpforms-field-select select,
    .form-id-<?php echo esc_attr($unique_id); ?> div.wpforms-container .wpforms-form .choices__inner,
    .form-id-<?php echo esc_attr($unique_id); ?> select {  
        padding: <?php echo esc_attr($atts['select_padding']); ?> !important; 
    }
    <?php endif; ?>
    <?php if(!empty($atts['select_margin'])): ?>
    .form-id-<?php echo esc_attr($unique_id); ?>   .select2-selection--single,
    .form-id-<?php echo esc_attr($unique_id); ?>  .wpforms-field .select2-selection--single,
    .form-id-<?php echo esc_attr($unique_id); ?> .wpforms-field-select select,
    .form-id-<?php echo esc_attr($unique_id); ?> div.wpforms-container .wpforms-form .choices__inner,
    .form-id-<?php echo esc_attr($unique_id); ?> select {  
        margin: <?php echo esc_attr($atts['select_margin']); ?> !important;
    }
    <?php endif; ?>
    <?php if(!empty($atts['button_position'])): ?>
    .form-id-<?php echo esc_attr($unique_id); ?>    input[type=submit],
    .form-id-<?php echo esc_attr($unique_id); ?>    button[type=submit],
    .form-id-<?php echo esc_attr($unique_id); ?>    div.wpforms-container-full .wpforms-form button[type=submit],
    .form-id-<?php echo esc_attr($unique_id); ?>    div.wpforms-container-full .wpforms-form .wpforms-page-button {
        position: <?php echo esc_attr($atts['button_position']); ?> !important; 
    }
    <?php endif; ?>
    <?php if(!empty($atts['button_bottom'])): ?>
    .form-id-<?php echo esc_attr($unique_id); ?>    input[type=submit],
    .form-id-<?php echo esc_attr($unique_id); ?>    button[type=submit],
    .form-id-<?php echo esc_attr($unique_id); ?>    div.wpforms-container-full .wpforms-form button[type=submit],
    .form-id-<?php echo esc_attr($unique_id); ?>    div.wpforms-container-full .wpforms-form .wpforms-page-button {
        bottom: <?php echo esc_attr($atts['button_bottom']); ?> !important; 
    }
    <?php endif; ?>
    <?php if(!empty($atts['button_right'])): ?>
    .form-id-<?php echo esc_attr($unique_id); ?>    input[type=submit],
    .form-id-<?php echo esc_attr($unique_id); ?>    button[type=submit],
    .form-id-<?php echo esc_attr($unique_id); ?>    div.wpforms-container-full .wpforms-form button[type=submit],
    .form-id-<?php echo esc_attr($unique_id); ?>    div.wpforms-container-full .wpforms-form .wpforms-page-button , {
        right: <?php echo esc_attr($atts['button_right']); ?> !important;
    }
    <?php endif; ?>
    <?php if(!empty($atts['button_left'])): ?>
    .form-id-<?php echo esc_attr($unique_id); ?>    input[type=submit] , .form-id-<?php echo esc_attr($unique_id); ?>    button[type=submit], 
    .form-id-<?php echo esc_attr($unique_id); ?>    div.wpforms-container-full .wpforms-form button[type=submit],
    .form-id-<?php echo esc_attr($unique_id); ?>    div.wpforms-container-full .wpforms-form .wpforms-page-button  {
        left: <?php echo esc_attr($atts['button_left']); ?>!important; 
    }
    <?php endif; ?>
    <?php if(!empty($atts['button_padding'])): ?>
    .form-id-<?php echo esc_attr($unique_id); ?>    input[type=submit] , .form-id-<?php echo esc_attr($unique_id); ?>    button[type=submit], 
    .form-id-<?php echo esc_attr($unique_id); ?>    div.wpforms-container-full .wpforms-form button[type=submit],
    .form-id-<?php echo esc_attr($unique_id); ?>    div.wpforms-container-full .wpforms-form .wpforms-page-button  {
        padding: <?php echo esc_attr($atts['button_padding']); ?>;
    }
    <?php endif; ?>
    <?php if(!empty($atts['button_borderradiuse'])): ?>
    .form-id-<?php echo esc_attr($unique_id); ?>    input[type=submit] , .form-id-<?php echo esc_attr($unique_id); ?>    button[type=submit], 
    .form-id-<?php echo esc_attr($unique_id); ?>    div.wpforms-container-full .wpforms-form button[type=submit],
    .form-id-<?php echo esc_attr($unique_id); ?>    div.wpforms-container-full .wpforms-form .wpforms-page-button  {
        border-radius: <?php echo esc_attr($atts['button_borderradiuse']); ?>;
    }
    <?php endif; ?>
    <?php if(!empty($atts['buttonmargin'])): ?>
    .form-id-<?php echo esc_attr($unique_id); ?>    input[type=submit] , .form-id-<?php echo esc_attr($unique_id); ?>    button[type=submit], 
    .form-id-<?php echo esc_attr($unique_id); ?>    div.wpforms-container-full .wpforms-form button[type=submit],
    .form-id-<?php echo esc_attr($unique_id); ?>    div.wpforms-container-full .wpforms-form .wpforms-page-button  {
        margin: <?php echo esc_attr($atts['buttonmargin']); ?>; 
    }
    <?php endif; ?>
    <?php if(!empty($atts['button_color'])): ?>
    .form-id-<?php echo esc_attr($unique_id); ?>    input[type=submit] , .form-id-<?php echo esc_attr($unique_id); ?>    button[type=submit], 
    .form-id-<?php echo esc_attr($unique_id); ?>    div.wpforms-container-full .wpforms-form button[type=submit],
    .form-id-<?php echo esc_attr($unique_id); ?>    div.wpforms-container-full .wpforms-form .wpforms-page-button  {
        color: <?php echo esc_attr($atts['button_color']); ?>!important;
    }
    <?php endif; ?>
    <?php if(!empty($atts['button_border_color'])): ?>
    .form-id-<?php echo esc_attr($unique_id); ?>    input[type=submit] , .form-id-<?php echo esc_attr($unique_id); ?>    button[type=submit], 
    .form-id-<?php echo esc_attr($unique_id); ?>    div.wpforms-container-full .wpforms-form button[type=submit],
    .form-id-<?php echo esc_attr($unique_id); ?>    div.wpforms-container-full .wpforms-form .wpforms-page-button  {
        border-color: <?php echo esc_attr($atts['button_border_color']); ?>!important;
    }
    <?php endif; ?>
    <?php if(!empty($atts['button_bg_color'])): ?>
    .form-id-<?php echo esc_attr($unique_id); ?>    input[type=submit] , .form-id-<?php echo esc_attr($unique_id); ?>    button[type=submit], 
    .form-id-<?php echo esc_attr($unique_id); ?>    div.wpforms-container-full .wpforms-form button[type=submit],
    .form-id-<?php echo esc_attr($unique_id); ?>    div.wpforms-container-full .wpforms-form .wpforms-page-button  {
        background: <?php echo esc_attr($atts['button_bg_color']); ?>!important;
    }
    <?php endif; ?>
    <?php if(!empty($atts['button_hover_color'])): ?>
    .form-id-<?php echo esc_attr($unique_id); ?>   input[type=submit]:hover , .form-id-<?php echo esc_attr($unique_id); ?>    button[type=submit]:hover, 
    .form-id-<?php echo esc_attr($unique_id); ?>   div.wpforms-container-full .wpforms-form button[type=submit]:hover,
    .form-id-<?php echo esc_attr($unique_id); ?>   div.wpforms-container-full .wpforms-form .wpforms-page-button:hover {
        color: <?php echo esc_attr($atts['button_hover_color']); ?>!important; 
    }
    <?php endif; ?>
    <?php if(!empty($atts['button_hover_bor_color'])): ?>
    .form-id-<?php echo esc_attr($unique_id); ?>   input[type=submit]:hover , .form-id-<?php echo esc_attr($unique_id); ?>    button[type=submit]:hover, 
    .form-id-<?php echo esc_attr($unique_id); ?>   div.wpforms-container-full .wpforms-form button[type=submit]:hover,
    .form-id-<?php echo esc_attr($unique_id); ?>   div.wpforms-container-full .wpforms-form .wpforms-page-button:hover {
        border-color: <?php echo esc_attr($atts['button_hover_bor_color']); ?>!important; 
    }
    <?php endif; ?>
    <?php if(!empty($atts['button_hover_bg_color'])): ?>
    .form-id-<?php echo esc_attr($unique_id); ?>   input[type=submit]:hover , .form-id-<?php echo esc_attr($unique_id); ?>    button[type=submit]:hover, 
    .form-id-<?php echo esc_attr($unique_id); ?>   div.wpforms-container-full .wpforms-form button[type=submit]:hover,
    .form-id-<?php echo esc_attr($unique_id); ?>   div.wpforms-container-full .wpforms-form .wpforms-page-button:hover {
        background: <?php echo esc_attr($atts['button_hover_bg_color']); ?>!important;
    }
    <?php endif; ?>
</style>
<section class="contact_form_box_all form-id-<?php echo esc_attr($unique_id); ?>"> 
  <?php if($atts['form_type'] == 'wp_forms'): ?>
    <?php if(!empty($atts['contact_form_url'])): ?>
        <?php echo do_shortcode('[wpforms id="' . $atts['contact_form_url'] . '"]'); ?>
    <?php else: ?>
        <p><?php echo esc_html('There is no contact form please create it' , 'risehand-addons'); ?></p>
    <?php endif; ?>
    <?php elseif($atts['form_type'] == 'shortcode'): ?>
      <?php if(!empty($content)): echo do_shortcode($content); endif; ?>
    <?php else: ?>
        <?php if(!empty($atts['contact_form_url_seven'])): ?>
            <?php echo do_shortcode('[contact-form-7 id="' . $atts['contact_form_url_seven'] . '"]'); ?>
        <?php else: ?>
            <p><?php echo esc_html('There is no contact form please create it' , 'risehand-addons'); ?></p>
        <?php endif; ?>
    <?php endif; ?>              
 
</section>
<?php
return ob_get_clean();
}




