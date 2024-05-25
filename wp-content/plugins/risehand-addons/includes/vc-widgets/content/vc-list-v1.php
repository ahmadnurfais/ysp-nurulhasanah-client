<?php
add_action( 'vc_before_init', 'vc_list_v1_vcmap' );
function vc_list_v1_vcmap() {
 vc_map( array(
  "name" => __( "List Items V1", "risehand-addons" ),
  "base" => "vc_list_v1_init",
  "class" => "",
  "icon" => "icon-risehand-svg", 
  "category" => __( "Risehand Content", "risehand-addons"),
  "params" => array(  
   
    array(
      'type'       => 'dropdown',
      'heading'    => esc_html__( 'List Display Type', 'risehand-addons' ),
      'param_name' => 'list_dsplay',
      'value'      => array( 
          esc_html__( 'List', 'risehand-addons' )  => 'list_type', 
          esc_html__( 'Inline', 'risehand-addons' )  => 'inline_type',
      ), 
      'group' => esc_html__('General', 'risehand-addons') ,
    ), 
    array(
      'type'       => 'dropdown',
      'heading'    => esc_html__( 'List Types', 'risehand-addons' ),
      'param_name' => 'list_type',
      'value'      => array(
          esc_html__( 'Dots ( Not Work on Inline Type) ', 'risehand-addons' )  => 'dots',
          esc_html__( 'Icons', 'risehand-addons' )  => 'icons',
          esc_html__( 'Numbers', 'risehand-addons' )  => 'numbers',
      ),
      'default' => 'dots',
      'group' => esc_html__('General', 'risehand-addons') ,
  ), 
    array(
        'type'       => 'dropdown',
        'heading'    => esc_html__( 'Title Color Type ', 'risehand-addons' ),
        'param_name' => 'dark_white',
        'value'      => array(
            esc_html__('Dark Color', 'risehand-addons')  => 'dark_color', 
            esc_html__('White Color', 'risehand-addons')  => 'white_color', 
            esc_html__('Light Color', 'risehand-addons')  => 'light_color', 
        ),
        'group' => esc_html__('General', 'risehand-addons') ,
      ), 
    array(
        'type' => 'param_group',
        'heading' => esc_html__('Faqs Content', 'risehand-addons') ,
        'value' => '',
        'param_name' => 'list_v1_repeater',
        'params' => array( 
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
                'heading' => esc_html__('List Items', 'risehand-addons') ,
                'param_name' => 'list_items',
                'value' => esc_html__('How do I make a yearly payment?', 'risehand-addons') ,
            ), 
            array(
                'heading'    => esc_html__( 'URL (Link)', 'risehand-addons' ),
                'type'       => 'vc_link',
                'param_name' => 'button_link',
                'group' => esc_html__('General', 'risehand-addons') ,
            ), 
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Description', 'risehand-addons') ,
                'param_name' => 'description',
                'value' => esc_html__('', 'risehand-addons') ,
            ),  
        ),
        'group' => esc_html__('General', 'risehand-addons') ,
    ),   
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Box Padding', 'risehand-addons') ,
        'param_name' => 'box_padding',
        'description' => esc_html__('Enter the box padding like this eg( 10px 10px 20px 10px )', 'risehand-addons'),
        'group' => esc_html__('Styling', 'risehand-addons'),
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('List Icon Color', 'risehand-addons') ,
        'param_name' => 'list_icon_color',
        'value' => '',
        'group' => esc_html__('Styling', 'risehand-addons'),
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('List Color', 'risehand-addons') ,
        'param_name' => 'list_color',
        'value' => '',
        'group' => esc_html__('Styling', 'risehand-addons'),
    ), 
    array(
        'type' => 'textfield',
        'heading' => esc_html__('List Font Size', 'risehand-addons') ,
        'param_name' => 'list_fsize',
        'description' => esc_html__('Enter the  list fontsize like this eg( 16px or 1rem or 1em )', 'risehand-addons'),
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ), 
    array(
        'type' => 'textfield',
        'heading' => esc_html__('List Line Height', 'risehand-addons') ,
        'param_name' => 'list_line_height',
        'description' => esc_html__('Enter the  list line height like this eg( 20px or 30px )  based on your font size', 'risehand-addons'),
        'group' => esc_html__('Styling', 'risehand-addons'),
    ), 
    array(
        'type' => 'textfield',
        'heading' => esc_html__('List Font Weight Padding', 'risehand-addons') ,
        'param_name' => 'list_font_weight',
        'description' => esc_html__('Enter the  list font weight like this eg( 400 or 400i or 500 or 500i or 600 or 600i )', 'risehand-addons'),
        'group' => esc_html__('Styling', 'risehand-addons'),
    ), 
    array(
        'type' => 'textfield',
        'heading' => esc_html__('List Padding', 'risehand-addons') ,
        'param_name' => 'list_padding',
        'description' => esc_html__('Enter the  list padding like this eg( 0px 0px 0px 0px )', 'risehand-addons'),
        'group' => esc_html__('Styling', 'risehand-addons'),
    ), 
    array(
      'type'        => 'checkbox',
      'heading'     => esc_html__( 'Disbale Paddign for first and last child', 'risehand-addons' ),
      'param_name'  => 'd_paddind',
      'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ), 
      'group' => esc_html__('Styling', 'risehand-addons') ,
      'dependency'  => array(
          'element' => 'list_dsplay',
          'value'   => 'inline_type',
      ),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Content Color', 'risehand-addons') ,
        'param_name' => 'content_color',
        'value' => '',
        'group' => esc_html__('Styling', 'risehand-addons'),
    ), 
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Content Font Size', 'risehand-addons') ,
        'param_name' => 'content_font_size',
        'description' => esc_html__('Enter the  Content fontsize like this eg( 16px or 1rem or 1em )', 'risehand-addons'),
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ), 
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Content Line Height', 'risehand-addons') ,
        'param_name' => 'content_height',
        'description' => esc_html__('Enter the  Content line height like this eg( 20px or 30px )  based on your font size', 'risehand-addons'),
        'group' => esc_html__('Styling', 'risehand-addons'),
    ), 
    array(
      'type' => 'dropdown',
      'heading' => esc_html__('List Content Alignment', 'risehand-addons'),
      'value' => array( 
          esc_html__( 'Alignment Left', 'risehand-addons' ) => 'flex-start',
          esc_html__( 'Alignment Center', 'risehand-addons' ) => 'center',
          esc_html__( 'Alignment Right', 'risehand-addons' ) => 'flex-end', 
      ), 
      'param_name' => 'listalignment', 
      'group' => esc_html__('Styling', 'risehand-addons') , 
  ),
)));
}
// shortcode
add_shortcode( 'vc_list_v1_init', 'vc_list_v1' );
function vc_list_v1( $atts, $content = null ) { 
$unique_id = uniqid();
$atts = shortcode_atts(
   array(
      'list_type' => 'dots',
      'button_link' => '',
      'dark_white'  => 'dark_color',
      'box_padding' => '',
      'list_v1_repeater' => '',
      'list_icon_color' => '',
      'list_color' => '',
      'list_padding' => '',
      'list_font_weight' => '',
      'list_line_height' => '',
      'list_fsize' => '', 
      'content_color' => '',
      'content_font_size' => '',
      'content_height' => '',
      'list_dsplay' => 'list_type',
      'listalignment' => 'flex-start' ,
   ), $atts
); 
 
$allowed_tags = wp_kses_allowed_html('post'); 
$list_v1_repeaters = function_exists( 'vc_param_group_parse_atts' ) ? vc_param_group_parse_atts( $atts['list_v1_repeater'] ) : array();
ob_start(); 
?>    
<style type="text/css" data-type="vc_shortcodes-custom">
 
  <?php if($atts['box_padding']): ?>
    .list-id-<?php echo esc_attr($unique_id); ?> {padding:<?php echo esc_attr($atts['box_padding']); ?>!important;} 
  <?php endif; ?>  
  <?php if($atts['list_icon_color']): ?>
    .list-id-<?php echo esc_attr($unique_id); ?> i , .list-id-<?php echo esc_attr($unique_id); ?> span    {color:<?php echo esc_attr($atts['list_icon_color']); ?>;} 
  <?php endif; ?>  
  <?php if($atts['list_color']): ?>
    .list-id-<?php echo esc_attr($unique_id); ?> li::marker  ,
    .list-id-<?php echo esc_attr($unique_id); ?> li .title_no_a_20 , .list-id-<?php echo esc_attr($unique_id); ?> li .title_no_a_20 a{color:<?php echo esc_attr($atts['list_color']); ?>;} 
  <?php endif; ?>  
  <?php if($atts['list_fsize']): ?>
    .list-id-<?php echo esc_attr($unique_id); ?> li .title_no_a_20 , .list-id-<?php echo esc_attr($unique_id); ?> li .title_no_a_20 a {font-size:<?php echo esc_attr($atts['list_fsize']); ?>;} 
  <?php endif; ?>  
  <?php if($atts['list_font_weight']): ?>
    .list-id-<?php echo esc_attr($unique_id); ?> li .title_no_a_20 , .list-id-<?php echo esc_attr($unique_id); ?> li .title_no_a_20 a {font-weight:<?php echo esc_attr($atts['list_font_weight']); ?>;} 
  <?php endif; ?>   
  <?php if($atts['list_line_height']): ?>
    .list-id-<?php echo esc_attr($unique_id); ?> li .title_no_a_20 , .list-id-<?php echo esc_attr($unique_id); ?> li .title_no_a_20 a {line-height:<?php echo esc_attr($atts['list_line_height']); ?>;} 
  <?php endif; ?>  
  <?php if($atts['list_padding']): ?>
    .list-id-<?php echo esc_attr($unique_id); ?> li  {padding:<?php echo esc_attr($atts['list_padding']); ?>!important;} 
  <?php endif; ?>   
  <?php if($atts['content_color']): ?>
    .list-id-<?php echo esc_attr($unique_id); ?> li p.desc_p {color:<?php echo esc_attr($atts['content_color']); ?>!important;} 
  <?php endif; ?>  
  <?php if($atts['content_font_size']): ?>
    .list-id-<?php echo esc_attr($unique_id); ?> li p.desc_p {font-size:<?php echo esc_attr($atts['content_font_size']); ?>!important;} 
  <?php endif; ?>   
  <?php if($atts['content_height']): ?>
    .list-id-<?php echo esc_attr($unique_id); ?> li p.desc_p {line-height:<?php echo esc_attr($atts['content_height']); ?>;} 
  <?php endif; ?>
  <?php if($atts['listalignment']): ?>
    .list-id-<?php echo esc_attr($unique_id); ?> {justify-content:<?php echo esc_attr($atts['listalignment']); ?>;} 
  <?php endif; ?>  
</style> 
<ul class="list_items_box list-id-<?php echo esc_attr($unique_id); ?> ul_<?php echo esc_attr($atts['list_type']); ?> <?php echo esc_attr($atts['dark_white']); ?> <?php echo esc_attr($atts['list_dsplay']); ?>">  
<?php if(!empty($list_v1_repeaters)): foreach($list_v1_repeaters as $key => $list_block):  
$link  = '';
$link_target  = '';
$link_unfollow  = '';
 if (!empty( $list_block['button_link'])) {
    $link_go = vc_build_link($list_block['button_link']);
    // Extract the URL
    $link = $link_go['url'];
    // Extract the target option
    $link_target = !empty($link_go['target']) ? ' target="' . esc_attr($link_go['target']) . '"' : '';
    // Extract the nofollow option
    $link_unfollow = !empty($link_go['rel']) && $link_go['rel'] === 'nofollow' ? ' rel="nofollow"' : '';
}
?>
<li class="list_items trans <?php echo esc_attr($atts['list_type']); ?>"> 
    <div class="l_box d_flex align-items-center ">  
        <?php if($list_block['icontype'] != 'disable_icon' && $atts['list_type'] == 'icons'): ?>
              <div class="icon_box<?php if( $list_block['icontype'] == 'icon_fonts' ): ?> icon_yes<?php endif; ?>"> 
                <?php if( $list_block['icontype'] == 'icon_image_enable'):
                  $icon_image = wp_get_attachment_image_src( intval(  $list_block['icon_images'] ), 'full' );
                  $icon_images = $icon_image ? $icon_image[0] : '';
                  $icon_images_alt = get_post_meta($atts['icon_images'], '_wp_attachment_image_alt', true);
                  $icon_images_alt = !empty($icon_images_alt) ? $icon_images_alt : 'risehand-addons';
                  if(!empty($icon_images)): ?> 
                    <img src="<?php echo esc_url($icon_images); ?>" class="img-fluid svg_image" alt="<?php echo esc_attr($icon_images_alt); ?>" /> 
                <?php endif; ?>
              <?php endif; ?>
            <?php if($list_block['icontype'] == 'custom'): ?> 
                  <span class="<?php echo esc_html( $list_block['icon_fonts']); ?>"></span> 
            <?php endif; ?>
            <?php if($list_block['icontype'] == 'fontawesome'): ?>
              <?php if(!empty($list_block['icon_fontawesome'])): ?> 
                  <i class="<?php echo esc_attr($list_block['icon_fontawesome']); ?>"></i> 
              <?php endif; ?>	 
            <?php endif; ?>	   
          </div>
        <?php endif; ?>	 
        <?php if(!empty($link)): ?>
        <?php if(!empty($list_block['list_items'])): ?>   
           <div class="title_20"> <a class="d-block mb_0" href="<?php echo esc_url($link); ?>" <?php echo esc_url($link_target); ?> <?php echo esc_url($link_unfollow); ?>><?php echo wp_kses($list_block['list_items'] , $allowed_tags);?></a></div>
        <?php endif; ?>
        <?php else: ?>
            <div class="title_no_a_20"><?php echo wp_kses($list_block['list_items'] , $allowed_tags);?></div>
        <?php endif; ?>
    </div>
    <?php if(!empty($list_block['description'])): ?>
        <p class="desc_p mt_15"><?php echo wp_kses($list_block['description'] , $allowed_tags);?></p>
    <?php endif; ?>	  
</li>
<?php endforeach; endif;?> 
</ul> 
<?php
return ob_get_clean();
}



