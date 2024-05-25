<?php


add_action( 'vc_before_init', 'vc_themebtn_v1_vcmap' );
function vc_themebtn_v1_vcmap() {
 vc_map( array(
  "name" => __( "Theme Button V1", "risehand-addons" ),
  "base" => "vc_themebtn_v1_init",
  "class" => "",
  "icon" => "icon-risehand-svg", 
  "category" => __( "Risehand Content", "risehand-addons"),
  "params" => array( 
    array(
      'type'       => 'dropdown',
      'heading'    => esc_html__( 'Theme Button style', 'risehand-addons' ),
      'param_name' => 'theme_btn_styles',
      'value'      => array(
          esc_html__( 'Style One', 'risehand-addons' )  => 'style_one',
          esc_html__( 'Style Two', 'risehand-addons' )  => 'style_two', 
      ),
      'group' => esc_html__('General', 'risehand-addons') ,
    ),  
     // ================== icons ================
     array(
      'type' => 'dropdown',
      'heading' => esc_html__( 'Icon library', 'risehand-addons' ),
      'value' => array( 
          esc_html__( 'Risehand Custom Icons', 'risehand-addons' ) => 'custom',
          esc_html__( 'Font Awesome 5', 'risehand-addons' ) => 'fontawesome',
          esc_html__( 'Icon Image Type', 'risehand-addons' ) => 'icon_image_enable' , 
          esc_html__( 'Disable Icon', 'risehand-addons' ) => 'disable_icon' , 
      ), 
      'param_name' => 'icontype',
      'default' => 'custom',
      'description' => esc_html__( 'Select icon library.', 'risehand-addons' ),
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
        'type' => 'textfield',
        'heading' => esc_html__('Button Text', 'risehand-addons') ,
        'param_name' => 'button_text', 
        'group' => esc_html__('General', 'risehand-addons') ,
    ), 
    array(
        'heading'    => esc_html__( 'URL (Link)', 'risehand-addons' ),
        'type'       => 'vc_link',
        'param_name' => 'button_link',
        'group' => esc_html__('General', 'risehand-addons') ,
    ), 
     // ================== Styling ================
    
    array(
        'type'       => 'dropdown',
        'heading'    => esc_html__('Button alignments', 'risehand-addons'),
        'param_name' => 'btn_alignments',
        'value'      => array(
            esc_html__( 'Text Left', 'risehand-addons' ) => '' ,
            esc_html__( 'Text Center', 'risehand-addons' ) => 'center' ,
            esc_html__( 'Text Right', 'risehand-addons' ) => 'end',
        ),
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ),  
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Button Color', 'risehand-addons') ,
        'param_name' => 'btn_color',
        'value' => '',
        'group' => esc_html__('Styling', 'risehand-addons'),
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Button Border Color', 'risehand-addons') ,
        'param_name' => 'btnbor_color',
        'value' => '',
        'group' => esc_html__('Styling', 'risehand-addons'),
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Button Background Color', 'risehand-addons') ,
        'param_name' => 'btnbg_color',
        'value' => '',
        'group' => esc_html__('Styling', 'risehand-addons'),
    ), 
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Button Font Size', 'risehand-addons') ,
        'param_name' => 'btn_fsize',
        'description' => esc_html__('Enter the  Button fontsize like this eg( 16px or 1rem or 1em )', 'risehand-addons'),
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ), 
    array(
        'type' => 'textfield',
        'heading' => esc_html__(' Button Border Radius', 'risehand-addons') ,
        'param_name' => 'btnbot_rad',
        'description' => esc_html__('Enter the Button border radius like this eg( 0px 0px 0px 0px )', 'risehand-addons'),
        'group' => esc_html__('Styling', 'risehand-addons'),
    ), 
    array(
        'type' => 'textfield',
        'heading' => esc_html__(' Button Padding', 'risehand-addons') ,
        'param_name' => 'btn_padding',
        'description' => esc_html__('Enter the border  padding like this eg( 0px 0px 0px 0px )', 'risehand-addons'),
        'group' => esc_html__('Styling', 'risehand-addons'),
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Hover Button Color', 'risehand-addons') ,
        'param_name' => 'hbtn_color',
        'value' => '',
        'group' => esc_html__('Styling', 'risehand-addons'),
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Hover Button Border Color', 'risehand-addons') ,
        'param_name' => 'hbtnbor_color',
        'value' => '',
        'group' => esc_html__('Styling', 'risehand-addons'),
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Hover Button Background Color', 'risehand-addons') ,
        'param_name' => 'hbtnbg_color',
        'value' => '',
        'group' => esc_html__('Styling', 'risehand-addons'),
    ), 
)));
} 
// shortcode 
add_shortcode( 'vc_themebtn_v1_init', 'vc_themebtn_v1' );
function vc_themebtn_v1( $atts, $content = null ) { 
$unique_id = uniqid();
$atts = shortcode_atts(
   array(
      'theme_btn_styles' => 'style_one', 
      'button_text' => 'Contact Us',
      'button_link' => '', 
      'icontype' => 'custom',
      'icon_images' => '',
      'icon_fontawesome' => '',
      'icon_fonts' => 'risehand-chevrons-right',  
      'btn_alignments' => '',
      'btn_color'  => '',
      'btnbg_color'  => '',
      'btnbor_color'  => '',
      'btn_fsize'  => '',
      'btn_padding'  => '',
      'btnbot_rad'  => '',
      'hbtn_color'  => '',
      'hbtnbg_color'  => '',
      'hbtnbor_color'  => '',
   ), $atts
);  
$allowed_tags = wp_kses_allowed_html('post'); 
$link  = '#';
$link_target  = '';
$link_unfollow  = '';
 if (!empty( $atts['button_link'])) {
    $link_go = vc_build_link($atts['button_link']);
    // Extract the URL
    $link = $link_go['url'];
    // Extract the target option
    $link_target = !empty($link_go['target']) ? ' target="' . esc_attr($link_go['target']) . '"' : '';
    // Extract the nofollow option
    $link_unfollow = !empty($link_go['rel']) && $link_go['rel'] === 'nofollow' ? ' rel="nofollow"' : '';
}
ob_start();
?> 
<style type="text/css" data-type="vc_shortcodes-custom">
<?php if($atts['btn_alignments'] == "center" || $atts['btn_alignments'] == "end"): ?>
  .theme_btn_all.unique-id-<?php echo esc_attr($unique_id); ?> {text-align:<?php echo esc_attr($atts['btn_alignments']); ?>;} 
<?php endif; ?>  
<?php if($atts['btn_color']): ?>
  .theme_btn_all.unique-id-<?php echo esc_attr($unique_id); ?> a{color:<?php echo esc_attr($atts['btn_color']); ?>;} 
<?php endif; ?>  
<?php if($atts['btnbg_color']): ?>
  .theme_btn_all.unique-id-<?php echo esc_attr($unique_id); ?> a{background:<?php echo esc_attr($atts['btnbg_color']); ?>;} 
<?php endif; ?>  
<?php if($atts['btnbor_color']): ?>
  .theme_btn_all.unique-id-<?php echo esc_attr($unique_id); ?> a{border-color:<?php echo esc_attr($atts['btnbor_color']); ?>;} 
<?php endif; ?>  
<?php if($atts['btn_fsize']): ?>
  .theme_btn_all.unique-id-<?php echo esc_attr($unique_id); ?> a{font-size:<?php echo esc_attr($atts['btn_fsize']); ?>;} 
<?php endif; ?>   
<?php if($atts['btn_padding']): ?>
  .theme_btn_all.unique-id-<?php echo esc_attr($unique_id); ?> a{padding:<?php echo esc_attr($atts['btn_padding']); ?>;} 
<?php endif; ?>  
<?php if($atts['btnbot_rad']): ?>
  .theme_btn_all.unique-id-<?php echo esc_attr($unique_id); ?> a{border-radius:<?php echo esc_attr($atts['btnbot_rad']); ?>;} 
<?php endif; ?>  

<?php if($atts['hbtn_color']): ?>
  .theme_btn_all.unique-id-<?php echo esc_attr($unique_id); ?> a:hover{color:<?php echo esc_attr($atts['hbtn_color']); ?>;} 
<?php endif; ?>  
<?php if($atts['hbtnbg_color']): ?>
  .theme_btn_all.unique-id-<?php echo esc_attr($unique_id); ?> a:hover{background:<?php echo esc_attr($atts['hbtnbg_color']); ?>;} 
<?php endif; ?>  
<?php if($atts['hbtnbor_color']): ?>
  .theme_btn_all.unique-id-<?php echo esc_attr($unique_id); ?> a:hover{border-color:<?php echo esc_attr($atts['hbtnbor_color']); ?>;} 
<?php endif; ?>  
</style> 
  <div class="theme_btn_all unique-id-<?php echo esc_attr($unique_id); ?>">
      <?php  if($atts['theme_btn_styles'] == 'style_two'):?>  
        <a class="text_btn" href="<?php echo esc_url($link); ?>">
        <?php echo esc_html($atts['button_text']);?>  
            <?php if($atts['icontype'] != 'disable_icon'): ?>    <div class="icon">
                <?php if( $atts['icontype'] == 'icon_image_enable'):
                      $icon_image = wp_get_attachment_image_src( intval(  $atts['icon_images'] ), 'full' );
                      $icon_images = $icon_image ? $icon_image[0] : '';
                      if(!empty($icon_images)): ?> 
                            <img src="<?php echo esc_url($icon_images); ?>" class="img-fluid svg_image" alt="<?php esc_attr_e('icon png', 'risehand-addons'); ?>" /> 
                      <?php endif; ?>
                  <?php endif; ?>
                  <?php if($atts['icontype'] == 'custom'): ?>
                        <span class="<?php echo esc_html( $atts['icon_fonts']); ?>"></span>
                  <?php endif; ?>
                  <?php if($atts['icontype'] == 'fontawesome'): ?>
                      <?php if(!empty($atts['icon_fontawesome'])): ?>
                        <i class="<?php echo esc_attr($atts['icon_fontawesome']); ?>"></i>
                      <?php endif; ?>	 
                  <?php endif; ?>	 
                </div>   
          <?php endif; ?>	 
        </a>
    
      <?php else:?>
          <a href="<?php echo esc_url($link); ?>"  class="theme_btn" <?php echo esc_attr($link_target); ?> <?php echo esc_attr($link_unfollow); ?>>
            <?php echo esc_html($atts['button_text']);?>   
            <?php if($atts['icontype'] != 'disable_icon'): ?> 
                  <?php if( $atts['icontype'] == 'icon_image_enable'):
                      $icon_image = wp_get_attachment_image_src( intval(  $atts['icon_images'] ), 'full' );
                      $icon_images = $icon_image ? $icon_image[0] : '';
                      if(!empty($icon_images)): ?> 
                            <img src="<?php echo esc_url($icon_images); ?>" class="img-fluid svg_image" alt="<?php esc_attr_e('icon png', 'risehand-addons'); ?>" /> 
                      <?php endif; ?>
                  <?php endif; ?>
                  <?php if($atts['icontype'] == 'custom'): ?>
                        <span class="<?php echo esc_html( $atts['icon_fonts']); ?>"></span>
                  <?php endif; ?>
                  <?php if($atts['icontype'] == 'fontawesome'): ?>
                      <?php if(!empty($atts['icon_fontawesome'])): ?>
                        <i class="<?php echo esc_attr($atts['icon_fontawesome']); ?>"></i>
                      <?php endif; ?>	 
                  <?php endif; ?>	  
          <?php endif; ?>	 
          </a>
      <?php endif; ?>
  </div>
<?php
return ob_get_clean();
}



