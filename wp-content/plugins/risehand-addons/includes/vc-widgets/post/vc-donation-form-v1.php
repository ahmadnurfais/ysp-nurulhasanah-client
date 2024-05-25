<?php
add_action( 'vc_before_init', 'form_give_v1_vcmap' );
function form_give_v1_vcmap() {
 vc_map( array(
  "name" => __( "Donation Form ( Give Wp Form )", "risehand-addons" ),
  "base" => "get_give_forms_init",
  "class" => "",
  "icon" => "icon-risehand-svg", 
  "category" => __( "Risehand Post", "risehand-addons"),
  "params" => array( 
        array(
            'type'       => 'dropdown',
            'heading'    => esc_html__('Donation Form Style  ', 'risehand-addons'),
            'param_name' => 'donation_form_style',
            'value'      => array( 
                esc_html__( 'Style One', 'risehand-addons' ) => 'style_one' ,
                esc_html__( 'Style Two', 'risehand-addons' ) => 'style_two' ,
                esc_html__( 'Style Three', 'risehand-addons' ) => 'style_three' ,  
            ),
         
            'group' => esc_html__('General', 'risehand-addons') ,
        ), 
        array(
            'type' => 'attach_image',
            'heading' => esc_html__('Image', 'risehand-addons') ,
            'param_name' => 'image_zero',
            'value' => '',
            'group' => esc_html__('General', 'risehand-addons') ,
            'dependency'  => array(
                'element' => 'donation_form_style',
                'value'   => array('style_two'),
            ),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Title', 'risehand-addons'),
            'param_name' => 'title', 
            'value' => 'Raise Your Hand To The Poor Children 
            Education For Better Future Life' ,
            'group' => esc_html__('General', 'risehand-addons'), 
            'dependency'  => array(
                'element' => 'donation_form_style',
                'value'   => array('style_two'),
            ),
        ), 
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Description', 'risehand-addons'),
            'param_name' => 'description', 
            'value' => 'There is no better way than to donate your time to the education of impoverished children. Many children NGOs are also providing tuition for them where you can volunteer or donate money.' ,
            'group' => esc_html__('General', 'risehand-addons'),
            'dependency'  => array(
                'element' => 'donation_form_style',
                'value'   => array('style_two'),
            ),
        ), 
        array(
            "type" => "textarea_html",
            "holder" => "div", 
            "heading" => __( "Html Content", "risehand-addons" ),
            "param_name" => "content", 
            'group' => esc_html__('General', 'risehand-addons') , 
            'dependency'  => array(
                'element' => 'donation_form_style',
                'value'   => array('style_three'),
            ),
        ),
        array(
            'type'        => 'checkbox',
            'heading'     => esc_html__( 'Break Word Enable / Disable', 'risehand-addons' ),
            'param_name'  => 'disable_break', 
            'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ), 
 
            'group' => esc_html__('General', 'risehand-addons') ,  
            'dependency'  => array(
                'element' => 'donation_form_style',
                'value'   => array('style_three'),
            ),
        ), 
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Give Wp Form Id', 'risehand-addons'),
            'param_name' => 'form_id',
            'description' => esc_html__('Enter the form id here', 'risehand-addons'),
            'group' => esc_html__('General', 'risehand-addons'), 
        ), 
        array(
            'type'        => 'checkbox',
            'heading'     => esc_html__( 'Title Enable / Disable', 'risehand-addons' ),
            'param_name'  => 'title_enable', 
            'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ), 
      
            'group' => esc_html__('General', 'risehand-addons') , 
            'dependency'  => array( 
                'element' => 'donation_form_style',
                'value'   => 'style_one',  
            ),
        ), 
        array(
            'type'        => 'checkbox',
            'heading'     => esc_html__( 'Show Goal Enable / Disable', 'risehand-addons' ),
            'param_name'  => 'show_goal', 
            'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ), 
        
            'group' => esc_html__('General', 'risehand-addons') ,  
        ), 
        array(
            'type'       => 'dropdown',
            'heading'    => esc_html__('Show Content', 'risehand-addons'),
            'param_name' => 'show_content',
            'value'      => array( 
                esc_html__( 'Above', 'risehand-addons' ) => 'above' ,
                esc_html__( 'Below', 'risehand-addons' ) => 'below' ,
                esc_html__( 'None', 'risehand-addons' ) => 'none' ,  
            ),
        
            'group' => esc_html__('General', 'risehand-addons') ,
            'dependency'  => array( 
                'element' => 'donation_form_style',
                'value'   => 'style_one',  
            ),
        ),
        array(
            'type'       => 'dropdown',
            'heading'    => esc_html__('Display Style', 'risehand-addons'),
            'param_name' => 'display_style',
            'value'      => array( 
                esc_html__( 'Modal', 'risehand-addons' ) => 'modal' ,
                esc_html__( 'Button', 'risehand-addons' ) => 'button' ,
                esc_html__( 'Reveal', 'risehand-addons' ) => 'reveal' ,  
            ),
         
            'group' => esc_html__('General', 'risehand-addons') ,
        ),

        array(
            'type' => 'colorpicker',
            'heading' => __('Box Background Color', 'risehand-addons'),
            'param_name' => 'bgcolos',
            'group' => esc_html__('Styling', 'risehand-addons') ,
             'dependency'  => array( 
                'element' => 'donation_form_style',
                'value'   => array('style_two' , 'style_three'),  
            ),
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __('Title Color', 'risehand-addons'),
            'param_name' => 'title_color', 
            'dependency'  => array( 
                'element' => 'donation_form_style',
                'value'   => array('style_one', 'style_two'),  
            ),
            'group' => esc_html__('Styling', 'risehand-addons') ,
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __('Content Color', 'risehand-addons'),
            'param_name' => 'd_color', 
            'dependency'  => array( 
                'element' => 'donation_form_style',
                'value'   => array('style_three', 'style_two'),  
            ),
            'group' => esc_html__('Styling', 'risehand-addons') ,
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __('Border Color', 'risehand-addons'),
            'param_name' => 'br_color',
            'dependency'  => array( 
                'element' => 'donation_form_style',
                'value'   => array('style_three'),  
            ),
            'group' => esc_html__('Styling', 'risehand-addons') ,
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __('Progress Bar Background Color', 'risehand-addons'),
            'param_name' => 'progress_color',
            'group' => esc_html__('Styling', 'risehand-addons') ,
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __('Progress Bar Active Background Color', 'risehand-addons'),
            'param_name' => 'progress_a_color',
            'group' => esc_html__('Styling', 'risehand-addons') ,
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __('Progress Color', 'risehand-addons'),
            'param_name' => 'progress_color1',
            'group' => esc_html__('Styling', 'risehand-addons') ,
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __('Progress Color 2', 'risehand-addons'),
            'param_name' => 'progress_color2',
            'group' => esc_html__('Styling', 'risehand-addons') ,
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __('Progress Color 3', 'risehand-addons'),
            'param_name' => 'progress_color13',
            'group' => esc_html__('Styling', 'risehand-addons') ,
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __('Notice Warning Border/Icon Color', 'risehand-addons'),
            'param_name' => 'give_notice_border_iconcolor',
            'group' => esc_html__('Styling', 'risehand-addons') ,
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __('Notice Warning Background Color', 'risehand-addons'),
            'param_name' => 'give_notice_bgclor',
            'group' => esc_html__('Styling', 'risehand-addons') ,
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __('Notice Warning Text Color', 'risehand-addons'),
            'param_name' => 'give_notice_clor',
            'group' => esc_html__('Styling', 'risehand-addons') ,
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __('Form Input Color', 'risehand-addons'),
            'param_name' => 'give_imput_color',
            'group' => esc_html__('Styling', 'risehand-addons') ,
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __('Form Input Border Color', 'risehand-addons'),
            'param_name' => 'give_imputbr_color',
            'group' => esc_html__('Styling', 'risehand-addons') ,
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __('Form Input Background Color', 'risehand-addons'),
            'param_name' => 'give_imputbg_color',
            'group' => esc_html__('Styling', 'risehand-addons') ,
        ),
       
        array(
            'type' => 'colorpicker',
            'heading' => __('Price Button Color', 'risehand-addons'),
            'param_name' => 'pribtntypocolor',
            'group' => esc_html__('Styling', 'risehand-addons') ,
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __('Price Button Border Color', 'risehand-addons'),
            'param_name' => 'pribtnbgc',
            'group' => esc_html__('Styling', 'risehand-addons') ,
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __('Price Button Background Color', 'risehand-addons'),
            'param_name' => 'pribtnbor',
            'group' => esc_html__('Styling', 'risehand-addons') ,
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __('Active Price Button Color', 'risehand-addons'),
            'param_name' => 'apribtntypocolor',
            'group' => esc_html__('Styling', 'risehand-addons') ,
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __('Active Price Button Border Color', 'risehand-addons'),
            'param_name' => 'apribtnbgc',
            'group' => esc_html__('Styling', 'risehand-addons') ,
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __('Active Button Background Color', 'risehand-addons'),
            'param_name' => 'apribtnbor',
            'group' => esc_html__('Styling', 'risehand-addons') ,
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __('Form Reveal Tile / Content Color', 'risehand-addons'),
            'param_name' => 'revalonecolor',
            'group' => esc_html__('Styling', 'risehand-addons') ,
        ), 
        array(
            'type' => 'colorpicker',
            'heading' => __('Form Reveal Label Color', 'risehand-addons'),
            'param_name' => 'revaltwocolor',
            'group' => esc_html__('Styling', 'risehand-addons') ,
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __('Input Border Color', 'risehand-addons'),
            'param_name' => 'revalthreecolor',
            'group' => esc_html__('Styling', 'risehand-addons') ,
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __('Input Background Color', 'risehand-addons'),
            'param_name' => 'revalfourcolor',
            'group' => esc_html__('Styling', 'risehand-addons') ,
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __('Input Color', 'risehand-addons'),
            'param_name' => 'revalfivescolor',
            'group' => esc_html__('Styling', 'risehand-addons') ,
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __('Button Color', 'risehand-addons'),
            'param_name' => 'givebtncolor',
            'group' => esc_html__('Styling', 'risehand-addons') ,
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __('Button Border Color', 'risehand-addons'),
            'param_name' => 'givebtnbrcolor',
            'group' => esc_html__('Styling', 'risehand-addons') ,
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __('Button Background Color', 'risehand-addons'),
            'param_name' => 'givebtnbgcolor',
            'group' => esc_html__('Styling', 'risehand-addons') ,
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __('Hover Button Color', 'risehand-addons'),
            'param_name' => 'hgivebtncolor',
            'group' => esc_html__('Styling', 'risehand-addons') ,
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __('Hover Button Border Color', 'risehand-addons'),
            'param_name' => 'hgivebtnbrcolor',
            'group' => esc_html__('Styling', 'risehand-addons') ,
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __('Hover Button Background Color', 'risehand-addons'),
            'param_name' => 'hgivebtnbgcolor',
            'group' => esc_html__('Styling', 'risehand-addons') ,
        ),
)));
}

// shortcode

add_shortcode( 'get_give_forms_init', 'form_give_v1' );
function form_give_v1( $atts, $content = null ) {  
$unique_id = uniqid();
$atts = shortcode_atts(
   array(  
      'donation_form_style' => 'style_one',   
      'title' => 'Raise Your Hand To The Poor Children Education For Better Future Life' ,
      'description' => 'There is no better way than to donate your time to the education of impoverished children. Many children NGOs are also providing tuition for them where you can volunteer or donate money.' ,
      'form_id'  => '',
      'title_enable'  => '',
      'show_goal'   => '',
      'show_content' => 'below',
      'display_style' => 'reveal',
      'image_zero' => '' ,
      'disable_break'  => '' ,

      'bgcolos' => '',
      'title_color' => '',
      'd_color' => '',
      'br_color' => '',
      'progress_color' => '',
      'progress_a_color' => '',
      'progress_color1' => '',
      'progress_color2' => '',
      'progress_color13' => '',
      'give_notice_border_iconcolor' => '',
      'give_notice_bgclor' => '',
      'give_notice_clor' => '',
      'give_imput_color' => '',
      'give_imputbr_color' => '',
      'give_imputbg_color' => '',
      'pribtntypocolor' => '',
      'pribtnbgc' => '',
      'pribtnbor' => '',
      'apribtntypocolor' => '',
      'apribtnbgc' => '',
      'apribtnbor' => '',
      'revalonecolor' => '', 
      'revaltwocolor' => '',
      'revalthreecolor' => '',
      'revalfourcolor' => '',
      'revalfivescolor' => '',
      'givebtncolor' => '',
      'givebtnbrcolor' => '',
      'givebtnbgcolor' => '',
      'hgivebtncolor' => '',
      'hgivebtnbrcolor' => '',
      'hgivebtnbgcolor' => '',
   ), $atts
);
$allowed_tags = wp_kses_allowed_html('post');
 
ob_start();
$form_id = "";
if(!empty($atts['form_id'])){
    $form_id = $atts['form_id'];
}
$show_goal  = false;
if(!empty($atts['show_goal']) == "yes"){
    $show_goal  =  true; 
}
$display_style  = isset($atts['display_style']) ? $atts['display_style'] : '';
$disable_break  = isset($atts['disable_break']) ? $atts['disable_break'] : '';
$image_zero = wp_get_attachment_image_src( intval( $atts['image_zero'] ), 'full' );
$image_zeros  = $image_zero ? $image_zero[0] : '';
?>   
<style>
    <?php if($atts['bgcolos']): ?>
    .give_forms_section_two.unique-id-<?php echo esc_attr($unique_id); ?>,
     .give_forms_section_three.unique-id-<?php echo esc_attr($unique_id); ?> {
        background: <?php echo esc_attr($atts['bgcolos']); ?> !important;
    }
    <?php endif; ?>
    <?php if($atts['title_color']): ?>
     .give-form-title,
     .give_forms_section_two.unique-id-<?php echo esc_attr($unique_id); ?> .title_no_a_30 {
        color: <?php echo esc_attr($atts['title_color']); ?> !important;
    }
    <?php endif; ?>
    <?php if($atts['d_color']): ?>
     .give_forms_section_two.unique-id-<?php echo esc_attr($unique_id); ?> .desc_p,
     .give_forms_section_three.unique-id-<?php echo esc_attr($unique_id); ?> .description_box,
     .give_forms_section_three.unique-id-<?php echo esc_attr($unique_id); ?> .description_box p,
     .give_forms_section_three.unique-id-<?php echo esc_attr($unique_id); ?> .description_box h1,
     .give_forms_section_three.unique-id-<?php echo esc_attr($unique_id); ?> .description_box h2,
     .give_forms_section_three.unique-id-<?php echo esc_attr($unique_id); ?> .description_box h3,
     .give_forms_section_three.unique-id-<?php echo esc_attr($unique_id); ?> .description_box h4,
     .give_forms_section_three.unique-id-<?php echo esc_attr($unique_id); ?> .description_box h5,
     .give_forms_section_three.unique-id-<?php echo esc_attr($unique_id); ?> .description_box h6,
     .give_forms_section_three.unique-id-<?php echo esc_attr($unique_id); ?> .description_box ul li,
     .give_forms_section_three.unique-id-<?php echo esc_attr($unique_id); ?> .description_box a {
        color: <?php echo esc_attr($atts['d_color']); ?> !important;
    }
    <?php endif; ?>
    <?php if($atts['br_color']): ?>
     .give_forms_section_three.unique-id-<?php echo esc_attr($unique_id); ?> .form {
        border-color: <?php echo esc_attr($atts['br_color']); ?> !important;
    }
    <?php endif; ?>
    <?php if($atts['progress_color']): ?>
    .unique-id-<?php echo esc_attr($unique_id); ?> .give-goal-progress .give-progress-bar {
        background: <?php echo esc_attr($atts['progress_color']); ?> !important;
    }
    <?php endif; ?>
    <?php if($atts['progress_a_color']): ?>
    .unique-id-<?php echo esc_attr($unique_id); ?>  .give-goal-progress .give-progress-bar span {
        background: linear-gradient(180deg, <?php echo esc_attr($atts['progress_a_color']); ?> 0%, <?php echo esc_attr($atts['progress_a_color']); ?> 100%), linear-gradient(180deg, #fff 0%, #ccc 100%)!important;
    }
    <?php endif; ?>
    <?php if($atts['progress_color1']): ?>
    .unique-id-<?php echo esc_attr($unique_id); ?> .give-goal-progress .income {
        color: <?php echo esc_attr($atts['progress_color1']); ?> !important;
    }
    <?php endif; ?>
    <?php if($atts['progress_color2']): ?>
    .unique-id-<?php echo esc_attr($unique_id); ?> .give-goal-progress .goal-text {
        color: <?php echo esc_attr($atts['progress_color2']); ?> !important;
    }
    <?php endif; ?>
    <?php if($atts['progress_color13']): ?>
    .unique-id-<?php echo esc_attr($unique_id); ?> .give-goal-progress .raised {
        color: <?php echo esc_attr($atts['progress_color13']); ?> !important;
    }
    <?php endif; ?>
    <?php if($atts['give_notice_border_iconcolor']): ?>
    .unique-id-<?php echo esc_attr($unique_id); ?> .give_warning:before {
        background: <?php echo esc_attr($atts['give_notice_border_iconcolor']); ?> !important;
    }
    <?php endif; ?>
    <?php if($atts['give_notice_bgclor']): ?>
    .unique-id-<?php echo esc_attr($unique_id); ?> .give_warning {
        background: <?php echo esc_attr($atts['give_notice_bgclor']); ?> !important;
    }
    <?php endif; ?>
    <?php if($atts['give_notice_clor']): ?>
    .unique-id-<?php echo esc_attr($unique_id); ?> .give_warning p,
     .unique-id-<?php echo esc_attr($unique_id); ?> .give_warning p strong {
        color: <?php echo esc_attr($atts['give_notice_clor']); ?> !important;
    } 
    <?php endif; ?>
    <?php if($atts['give_imput_color']): ?>
    .unique-id-<?php echo esc_attr($unique_id); ?>  .give-donation-amount #give-amount,
    .unique-id-<?php echo esc_attr($unique_id); ?>  .give-donation-amount #give-amount-text ,
    .unique-id-<?php echo esc_attr($unique_id); ?> .give-donation-amount .give-currency-symbol {
        color: <?php echo esc_attr($atts['give_imput_color']); ?> !important; 
    }
    <?php endif; ?>
    <?php if($atts['give_imputbr_color']): ?>
    .unique-id-<?php echo esc_attr($unique_id); ?> .form_box .give-form  .give-donation-amount #give-amount,
    .unique-id-<?php echo esc_attr($unique_id); ?> .form_box .give-form  .give-donation-amount #give-amount-text ,
    .unique-id-<?php echo esc_attr($unique_id); ?> .form_box .give-form  .give-donation-amount .give-currency-symbol { 
        border-color: <?php echo esc_attr($atts['give_imputbr_color']); ?> !important;
    }
    <?php endif; ?>
    <?php if($atts['give_imputbg_color']): ?>
    .unique-id-<?php echo esc_attr($unique_id); ?>  .give-donation-amount #give-amount,
     .unique-id-<?php echo esc_attr($unique_id); ?>  .give-donation-amount #give-amount-text,
     .unique-id-<?php echo esc_attr($unique_id); ?> .give-donation-amount .give-currency-symbol {
        background: <?php echo esc_attr($atts['give_imputbg_color']); ?> !important;
    }
    <?php endif; ?>
    <?php if($atts['pribtntypocolor']): ?>
    .unique-id-<?php echo esc_attr($unique_id); ?> .give-donation-levels-wrap button.give-donation-level-btn {
        color: <?php echo esc_attr($atts['pribtntypocolor']); ?> !important; 
    }
    <?php endif; ?>
    <?php if($atts['pribtnbgc']): ?>
    .unique-id-<?php echo esc_attr($unique_id); ?> .give-donation-levels-wrap button.give-donation-level-btn { 
        border-color: <?php echo esc_attr($atts['pribtnbgc']); ?> !important; 
    }
    <?php endif; ?>
    <?php if($atts['pribtnbor']): ?>
    .unique-id-<?php echo esc_attr($unique_id); ?> .give-donation-levels-wrap button.give-donation-level-btn { 
        background: <?php echo esc_attr($atts['pribtnbor']); ?> !important;
    }
    <?php endif; ?>
    <?php if($atts['apribtntypocolor']): ?>
    .unique-id-<?php echo esc_attr($unique_id); ?> .give-donation-levels-wrap button.give-btn-level-0 {
        color: <?php echo esc_attr($atts['apribtntypocolor']); ?> !important; 
    }
    <?php endif; ?>
    <?php if($atts['revalonecolor']): ?>
     .give_forms_section_one.unique-id-<?php echo esc_attr($unique_id); ?> legend {
        color: <?php echo esc_attr($atts['revalonecolor']); ?> !important;
    }
    <?php endif; ?>
    <?php if($atts['revaltwocolor']): ?>
     .give_forms_section_one.unique-id-<?php echo esc_attr($unique_id); ?> label,
     .unique-id-<?php echo esc_attr($unique_id); ?> .give-donation-submit .give-donation-total-label,
     .unique-id-<?php echo esc_attr($unique_id); ?> .give-donation-submit .give-final-total-amount,
     .unique-id-<?php echo esc_attr($unique_id); ?> .give-tooltip {
        color: <?php echo esc_attr($atts['revaltwocolor']); ?> !important;
    }
    <?php endif; ?>
    <?php if($atts['revalthreecolor']): ?>
        .unique-id-<?php echo esc_attr($unique_id); ?> #give_purchase_form_wrap input,
        .unique-id-<?php echo esc_attr($unique_id); ?> #give_purchase_form_wrap .give-payment-mode-label,
        .unique-id-<?php echo esc_attr($unique_id); ?> #give_purchase_form_wrap legend,
        .unique-id-<?php echo esc_attr($unique_id); ?> #give-payment-mode-select legend,
        .unique-id-<?php echo esc_attr($unique_id); ?> #give-payment-mode-select input[type=radio] {
        border-color: <?php echo esc_attr($atts['revalthreecolor']); ?> !important;
    }
    <?php endif; ?>
    <?php if($atts['revalfourcolor']): ?>
    .unique-id-<?php echo esc_attr($unique_id); ?> #give_purchase_form_wrap input,
      .unique-id-<?php echo esc_attr($unique_id); ?> #give-payment-mode-select input[type=radio] {
        background: <?php echo esc_attr($atts['revalfourcolor']); ?> !important;
    }
    <?php endif; ?>
    <?php if($atts['revalfivescolor']): ?>
        .unique-id-<?php echo esc_attr($unique_id); ?>  .form-row input,
        .unique-id-<?php echo esc_attr($unique_id); ?>  .form-row input::placeholder {
        color: <?php echo esc_attr($atts['revalfivescolor']); ?> !important;
    }
    <?php endif; ?>
    <?php if($atts['givebtncolor'] || $atts['givebtnbrcolor'] ||$atts['givebtnbgcolor']): ?>
      .unique-id-<?php echo esc_attr($unique_id); ?> #give_purchase_form_wrap > .give-btn,
     .unique-id-<?php echo esc_attr($unique_id); ?> form > .give-btn {
        <?php if($atts['givebtncolor']): ?> color: <?php echo esc_attr($atts['givebtncolor']); ?> !important;  <?php endif; ?>
        <?php if($atts['givebtnbrcolor']): ?> border-color: <?php echo esc_attr($atts['givebtnbrcolor']); ?> !important;  <?php endif; ?>
        <?php if($atts['givebtnbgcolor']): ?> background: <?php echo esc_attr($atts['givebtnbgcolor']); ?> !important; <?php endif; ?>
    }
    <?php endif; ?>
    <?php if($atts['hgivebtncolor'] || $atts['hgivebtnbrcolor'] || $atts['hgivebtnbgcolor']): ?>
    .unique-id-<?php echo esc_attr($unique_id); ?> #give_purchase_form_wrap > .give-btn:hover,
     .unique-id-<?php echo esc_attr($unique_id); ?> form > .give-btn:hover {
        <?php if($atts['hgivebtncolor']): ?> color: <?php echo esc_attr($atts['hgivebtncolor']); ?> !important; <?php endif; ?>
        <?php if($atts['hgivebtnbrcolor']): ?> border-color: <?php echo esc_attr($atts['hgivebtnbrcolor']); ?> !important; <?php endif; ?>
        <?php if($atts['hgivebtnbgcolor']): ?> background: <?php echo esc_attr($atts['hgivebtnbgcolor']); ?> !important; <?php endif; ?>
    }
    <?php endif; ?>
</style>
<?php if($atts['donation_form_style'] == "style_two"): ?>
    <section class="give_forms_section_two d_flex  unique-id-<?php echo esc_attr($unique_id); ?>">
    <?php if(!empty($image_zeros)): ?>
            <div class="image img_obj_fit_center">
                <img src="<?php echo esc_url($image_zeros); ?>" class="img" alt="image" />
            </div>
        <?php endif; ?> 
    <div class="form_box">
        <?php if(!empty($atts['title'])): ?>
            <div class="title title_no_a_30 mb_15"><?php echo esc_attr($atts['title']); ?></div>
        <?php endif; ?>
        <?php if(!empty($atts['title'])): ?>
            <p class="desc_p mb_30"><?php echo esc_attr($atts['description']); ?></p>
        <?php endif; ?>
        <div class="form">
            <?php
            $atts_form = array(
                'id' => $form_id,  // integer.
                'show_title' => false, // boolean. 
                'show_content' => 'none', //above, below, or none
                'display_style' => 'modal', //modal, button, and reveal
                'show_goal' => $show_goal, // boolean.
                'continue_button_title' => '' //string 
            );  
            echo give_get_donation_form( $atts_form ); 
            ?>
        </div>
    </div>      
   
    </section> 
<?php elseif($atts['donation_form_style'] == "style_three"): ?>
    <section class="give_forms_section_three  <?php if(!empty($disable_break) == "yes"): ?> disable_bwords<?php endif; ?> unique-id-<?php echo esc_attr($unique_id); ?>">
        <div class="form_box">
        <?php if(!empty($content)):?>
        <div class="description_box"> 
            <?php echo $content; ?> 
        </div> 
        <?php endif; ?>    
            <div class="form">
                <?php
                $atts_form = array(
                    'id' => $form_id,  // integer.
                    'show_title' => false, // boolean. 
                    'show_content' => 'none', //above, below, or none
                    'display_style' => 'modal', //modal, button, and reveal
                    'show_goal' => $show_goal, // boolean.
                    'continue_button_title' => '' //string 
                );  
                echo give_get_donation_form( $atts_form ); 
                ?>
        </div>
    </div>   
    </section> 
<?php else: ?>
    <section class="give_forms_section_one  unique-id-<?php echo esc_attr($unique_id); ?>">
    <?php 
        $title_enable  = false;
        if(!empty($atts['title_enable']) == "yes"){
            $title_enable  =  true; 
        }  
        $show_content  = isset($atts['show_content']) ? $atts['show_content'] : '';
            $atts_form = array(
                'id' => $form_id,  // integer.
                'show_title' => $title_enable, // boolean.
                'show_goal' => $show_goal, // boolean.
                'show_content' => $show_content, //above, below, or none
                'display_style' => $display_style, //modal, button, and reveal
                'continue_button_title' => '' //string 
            );  
            echo give_get_donation_form( $atts_form ); 
        ?>
    </section> 
<?php endif; ?>
<?php
return ob_get_clean();
}