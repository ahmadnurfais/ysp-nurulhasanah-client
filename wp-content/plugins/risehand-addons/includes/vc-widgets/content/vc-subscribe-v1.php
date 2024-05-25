<?php 
add_action( 'vc_before_init', 'vc_subscribe_v1_vcmap' );
function vc_subscribe_v1_vcmap() {
 vc_map( array(
  "name" => __( "Subscribe V1", "risehand-addons" ),
  "base" => "vc_subscribe_v1_init",
  "class" => "",
  "icon" => "icon-risehand-svg", 
  "category" => __( "Risehand Content", "risehand-addons"),
  "params" => array( 
    array(
        'type'       => 'dropdown',
        'heading'    => esc_html__( 'Choose style', 'risehand-addons' ),
        'param_name' => 'subscribe_style_two',
        'value'      => array(
            esc_html__( 'Style One', 'risehand-addons' )  => 'type_one',
            esc_html__( 'Style Two', 'risehand-addons' )  => 'type_two', 
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
      'type'       => 'dropdown',
      'heading'    => esc_html__( 'Subscribe Type', 'risehand-addons' ),
      'param_name' => 'subscribe_type',
      'value'      => array(
          esc_html__( 'Dark', 'risehand-addons' )  => 'dark',
          esc_html__( 'Light', 'risehand-addons' )  => 'light', 
      ),
      'group' => esc_html__('General', 'risehand-addons') ,
  ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Title', 'risehand-addons') ,
        'param_name' => 'title',
        'value' => esc_html__('Get Every Single Updates Join Our Newsletters', 'risehand-addons') ,
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'subscribe_style_two',
            'value'   => 'type_one',
        ), 
    ), 
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Description', 'risehand-addons') ,
        'param_name' => 'description',
        'value' => esc_html__('Get the latest posts delivers right to your inbox', 'risehand-addons') ,
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'subscribe_style_two',
            'value'   => 'type_one',
        ), 
    ), 
    array(
        'type' => 'textarea_html',
        'heading' => esc_html__('Shortcode', 'risehand-addons') ,
        'param_name' => 'content',
        'description' => esc_html__('Enter the mail chimp mc4wp form shortcode here', 'risehand-addons') ,
        'value' => esc_html__('[mc4wp_form]', 'risehand-addons') ,
        'group' => esc_html__('General', 'risehand-addons') ,
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Box Background Color', 'risehand-addons'),
        'param_name' => 'box_bg_color',
        'group' => esc_html__('Styling', 'risehand-addons') , 
        'dependency'  => array(
            'element' => 'subscribe_style_two',
            'value'   => 'type_one',
        ), 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Box Border Color', 'risehand-addons'),
        'param_name' => 'box_border_color',
        'group' => esc_html__('Styling', 'risehand-addons') , 
        'dependency'  => array(
            'element' => 'subscribe_style_two',
            'value'   => 'type_one',
        ), 
    ),
    
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Title Color', 'risehand-addons'),
        'param_name' => 'title_color',
        'group' => esc_html__('Styling', 'risehand-addons') , 
        'dependency'  => array(
            'element' => 'subscribe_style_two',
            'value'   => 'type_one',
        ), 
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Description Color', 'risehand-addons'),
        'param_name' => 'description_color',
        'group' => esc_html__('Styling', 'risehand-addons') , 
        'dependency'  => array(
            'element' => 'subscribe_style_two',
            'value'   => 'type_one',
        ), 
    ),  
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Input Color', 'risehand-addons'),
        'param_name' => 'input_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,  
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Input Icon Color', 'risehand-addons'),
        'param_name' => 'inputicon_color',
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Input Placeholder Color', 'risehand-addons'),
        'param_name' => 'input_place_holder_color',
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Input Background Color', 'risehand-addons'),
        'param_name' => 'input_bg_color',
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Input Border Color', 'risehand-addons'),
        'param_name' => 'input_border_color',
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Input Border Radius', 'risehand-addons'),
        'param_name' => 'input_border_radius',
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Button Color', 'risehand-addons'),
        'param_name' => 'button_color',
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Button Border Color', 'risehand-addons'),
        'param_name' => 'button_border_color',
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Button Background Color', 'risehand-addons'),
        'param_name' => 'button_bg_color',
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Button Hover Color', 'risehand-addons'),
        'param_name' => 'button_hover_color',
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Button Hover Border Color', 'risehand-addons'),
        'param_name' => 'button_hover_bor_color',
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Button Hover Background Color', 'risehand-addons'),
        'param_name' => 'button_hover_bg_color',
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ),
  
)));
}
// shortcode
add_shortcode( 'vc_subscribe_v1_init', 'vc_subscribe_v1' );
function vc_subscribe_v1( $atts, $content = null ) { 
    $unique_id = uniqid();
 $atts = shortcode_atts(
   array( 
      'subscribe_style_two' => 'type_one',
      'title'  => 'Get Every Single Updates Join Our Newsletters',
      'description'  => 'Get the latest posts delivers right to your inbox', 
      'subscribe_type' => 'dark', 
      'box_bg_color' => '',
      'box_border_color' => '',
      'tag_type' => 'div',
      'title_color' => '', 
      'description_color' => '',
      'input_color' => '',
      'inputicon_color' => '',
      'input_place_holder_color' => '',
      'input_bg_color' => '', 
      'input_border_color' => '',
      'input_border_radius' => '',
      'btntypo' => '',
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
    <?php if($atts['box_bg_color']): ?>
    .sub-id-<?php echo esc_attr($unique_id); ?> .common_sub {
        background: <?php echo esc_attr($atts['box_bg_color']); ?>; 
    }
    <?php endif; ?>
    <?php if($atts['box_border_color']): ?>
    .sub-id-<?php echo esc_attr($unique_id); ?> .common_sub { 
        border-color: <?php echo esc_attr($atts['box_border_color']); ?>;
    }
    .sub-id-<?php echo esc_attr($unique_id); ?>  .newsteller .divider{
        background: <?php echo esc_attr($atts['box_border_color']); ?>;
    }
    <?php endif; ?>
    <?php if($atts['title_color']): ?>
    .sub-id-<?php echo esc_attr($unique_id); ?> .common_sub .title_no_a_30 {
        color: <?php echo esc_attr($atts['title_color']); ?>;
    }
    <?php endif; ?>
    <?php if($atts['description_color']): ?>
    .sub-id-<?php echo esc_attr($unique_id); ?> .common_sub p {
        color: <?php echo esc_attr($atts['description_color']); ?>;
    }
    <?php endif; ?>
    <?php if($atts['input_color']): ?>
    .sub-id-<?php echo esc_attr($unique_id); ?> .common_sub  input {
        color: <?php echo esc_attr($atts['input_color']); ?>!important;
        
    }
    <?php endif; ?>
    <?php if($atts['input_bg_color']): ?>
    .sub-id-<?php echo esc_attr($unique_id); ?> .common_sub  input { 
        background: <?php echo esc_attr($atts['input_bg_color']); ?>!important;  
    }
    <?php endif; ?>
    <?php if($atts['input_border_color']): ?>
    .sub-id-<?php echo esc_attr($unique_id); ?> .common_sub  input { 
        border-color: <?php echo esc_attr($atts['input_border_color']); ?>!important; 
    }
    <?php endif; ?>
    <?php if($atts['input_border_radius']): ?>
    .sub-id-<?php echo esc_attr($unique_id); ?> .common_sub  input { 
        border-radius: <?php echo esc_attr($atts['input_border_radius']); ?>;
    }
    <?php endif; ?>
    <?php if($atts['inputicon_color']): ?>
    .sub-id-<?php echo esc_attr($unique_id); ?> .common_sub .mc4wp-form-fields::before {
        color: <?php echo esc_attr($atts['inputicon_color']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['input_place_holder_color']): ?>
    .sub-id-<?php echo esc_attr($unique_id); ?> .common_sub  input::placeholder {
        color: <?php echo esc_attr($atts['input_place_holder_color']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['button_color']): ?>
    .sub-id-<?php echo esc_attr($unique_id); ?> .common_sub .mc4wp-form-fields input[type=submit] {
        color: <?php echo esc_attr($atts['button_color']); ?>!important;
      
    }
    <?php endif; ?>
    <?php if($atts['button_border_color']): ?>
    .sub-id-<?php echo esc_attr($unique_id); ?> .common_sub .mc4wp-form-fields input[type=submit] { 
        border-color: <?php echo esc_attr($atts['button_border_color']); ?>!important; 
    }
    <?php endif; ?>
    <?php if($atts['button_bg_color']): ?>
    .sub-id-<?php echo esc_attr($unique_id); ?> .common_sub .mc4wp-form-fields input[type=submit] { 
        background: <?php echo esc_attr($atts['button_bg_color']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['button_hover_color']): ?>
    .sub-id-<?php echo esc_attr($unique_id); ?> .common_sub .mc4wp-form-fields input[type=submit]:hover {
        color: <?php echo esc_attr($atts['button_hover_color']); ?>!important; 
    }
    <?php endif; ?>
    <?php if($atts['button_hover_bor_color']): ?>
    .sub-id-<?php echo esc_attr($unique_id); ?> .common_sub .mc4wp-form-fields input[type=submit]:hover { 
        border-color: <?php echo esc_attr($atts['button_hover_bor_color']); ?>!important; 
    }
    <?php endif; ?>
    <?php if($atts['button_hover_bg_color']): ?>
    .sub-id-<?php echo esc_attr($unique_id); ?> .common_sub .mc4wp-form-fields input[type=submit]:hover { 
        background: <?php echo esc_attr($atts['button_hover_bg_color']); ?>!important;
    }
    <?php endif; ?>
</style>
<section class="sub-id-<?php echo esc_attr($unique_id); ?>">
<?php if($atts['subscribe_style_two'] == 'type_two'): ?> 
    <?php if(!empty($content)): ?> 
         <div class="item_scubscribe_two common_sub"> 
            <?php echo do_shortcode($content);?>
         </div>
    <?php endif;?>
<?php else: ?>
  <div class="newsteller d_flex style_one common_sub <?php echo esc_attr($atts['subscribe_type']); ?>">
      <div class="content column-1"> 
            <?php if(!empty($atts['title'])):?>
               <<?php echo esc_attr($atts['tag_type']); ?> class="title_no_a_30"><?php echo wp_kses($atts['title'] , $allowed_tags); ?></<?php echo esc_attr($atts['tag_type']); ?>>
            <?php endif;?>
            <?php if(!empty($atts['description'])):?>
               <p class="mt_15 mb_0"><?php echo wp_kses($atts['description'] , $allowed_tags); ?> </p>
            <?php endif;?>
      </div>
      <div class="divider"></div>
      <?php if(!empty($content)): ?> 
         <div class="item_scubscribe column-1"> 
            <?php echo do_shortcode($content);?>
         </div>
      <?php endif;?>
</div>
<?php endif; ?> 
</section>
<?php
return ob_get_clean();
}



