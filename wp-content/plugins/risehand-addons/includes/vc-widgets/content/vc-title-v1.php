<?php 
add_action( 'vc_before_init', 'vc_title_v1_vcmap' );
function vc_title_v1_vcmap() {
 vc_map( array(
  "name" => __( "Title V1", "risehand-addons" ),
  "base" => "vc_title_v1_init",
  "class" => "",
  "icon" => "icon-risehand-svg", 
  "category" => __( "Risehand Content", "risehand-addons"),
  "params" => array( 
          array(
            'type'       => 'dropdown',
            'heading'    => esc_html__( 'Title Type', 'risehand-addons' ),
            'param_name' => 'title_style',
            'value'      => array(
                esc_html__( 'Style One', 'risehand-addons' )  => 'style_one',
                esc_html__( 'Style Two', 'risehand-addons' )  => 'style_two', 
            ),
            'group' => esc_html__('General', 'risehand-addons') ,
          ), 
          array(
            'type'       => 'dropdown',
            'heading'    => esc_html__( 'Tag Type', 'risehand-addons' ),
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
          'dependency'  => array(
            'element' => 'title_style',
            'value'   => 'style_one',
        ),
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
        'type'       => 'dropdown',
        'heading'    => esc_html__( 'Title Color Type ', 'risehand-addons' ),
        'param_name' => 'dark_white',
        'value'      => array(
            esc_html__('Dark Color', 'risehand-addons')  => 'dark_color', 
            esc_html__('Light Color', 'risehand-addons')  => 'light_color', 
        ),
        'group' => esc_html__('General', 'risehand-addons') ,
      ), 
      array(
          'type' => 'textfield',
          'heading' => esc_html__('Small Heading', 'risehand-addons') ,
          'param_name' => 'title_small_heading',
          'group' => esc_html__('General', 'risehand-addons') ,
          'dependency'  => array(
            'element' => 'title_style',
            'value'   => 'style_one',
        ),
      ), 
      array(
          'type' => 'textarea',
          'heading' => esc_html__('Title', 'risehand-addons') ,
          'param_name' => 'title_heading',
          'group' => esc_html__('General', 'risehand-addons') ,
      ), 
      array(
          'type' => 'textarea',
          'heading' => esc_html__('Description', 'risehand-addons') ,
          'param_name' => 'title_description',
          'group' => esc_html__('General', 'risehand-addons') ,
          'dependency'  => array(
            'element' => 'title_style',
            'value'   => 'style_one',
        ),
      ),  
      // styling
      array(
        'type'       => 'dropdown',
        'heading'    => esc_html__('Title alignments', 'risehand-addons'),
        'param_name' => 'title_alignments',
        'value'      => array(
            esc_html__( 'Default', 'risehand-addons' ) => '' ,
            esc_html__( 'Text Center', 'risehand-addons' ) => 'center' ,
            esc_html__( 'Text Right', 'risehand-addons' ) => 'end',
        ),
        'group' => esc_html__('Styling', 'risehand-addons') ,
      ), 
      array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Small Title Color', 'risehand-addons') ,
        'param_name' => 'smtitle_color',
        'value' => '',
        'group' => esc_html__('Styling', 'risehand-addons'),
        'dependency'  => array(
          'element' => 'title_style',
          'value'   => 'style_one',
      ),
      ),
      array(
        'type' => 'textfield',
        'heading' => esc_html__('Small Heading Font Size', 'risehand-addons') ,
        'param_name' => 'sm_title_fsize',
        'description' => esc_html__('Enter the small title fontsize like this eg( 16px or 1rem or 1em )', 'risehand-addons'),
        'group' => esc_html__('Styling', 'risehand-addons') ,
        'dependency'  => array(
          'element' => 'title_style',
          'value'   => 'style_one',
      ),
      ), 
      array(
        'type' => 'textfield',
        'heading' => esc_html__('Small Title Line Height', 'risehand-addons') ,
        'param_name' => 'sline_height',
        'description' => esc_html__('Enter the Small Title Line Height like this eg( 16px or 1rem or 1em )', 'risehand-addons'),
        'group' => esc_html__('Styling', 'risehand-addons') , 
        'dependency'  => array(
          'element' => 'title_style',
          'value'   => 'style_one',
        ),
      ),
      array(
        'type' => 'textfield',
        'heading' => esc_html__('Small Title Padding', 'risehand-addons') ,
        'param_name' => 'smtitle_padding',
        'description' => esc_html__('Enter the small title padding like this eg( 0px 0px 0px 0px )', 'risehand-addons'),
        'group' => esc_html__('Styling', 'risehand-addons'),
        'dependency'  => array(
          'element' => 'title_style',
          'value'   => 'style_one',
        ),
      ),
      array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Title Color', 'risehand-addons') ,
        'param_name' => 'title_color',
        'value' => '',
        'group' => esc_html__('Styling', 'risehand-addons'),
      ), 
      array(
        'type' => 'textfield',
        'heading' => esc_html__('Title Font Size', 'risehand-addons') ,
        'param_name' => 'title_fsize',
        'description' => esc_html__('Enter the  title fontsize like this eg( 16px or 1rem or 1em )', 'risehand-addons'),
        'group' => esc_html__('Styling', 'risehand-addons') ,
      ), 
      array(
        'type' => 'textfield',
        'heading' => esc_html__('Title Line Height', 'risehand-addons') ,
        'param_name' => 'line_height',
        'description' => esc_html__('Enter the  Title Line Height like this eg( 16px or 1rem or 1em )', 'risehand-addons'),
        'group' => esc_html__('Styling', 'risehand-addons') , 
      ),
      array(
        'type' => 'textfield',
        'heading' => esc_html__(' Title Padding', 'risehand-addons') ,
        'param_name' => 'title_padding',
        'description' => esc_html__('Enter the small title padding like this eg( 0px 0px 0px 0px )', 'risehand-addons'),
        'group' => esc_html__('Styling', 'risehand-addons'),
      ), 
      array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Description Color', 'risehand-addons') ,
        'param_name' => 'description_color',
        'value' => '',
        'group' => esc_html__('Styling', 'risehand-addons'),
        'dependency'  => array(
          'element' => 'title_style',
          'value'   => 'style_one',
      ),
      ),  
      array(
        'type' => 'textfield',
        'heading' => esc_html__('Description Font Size', 'risehand-addons') ,
        'param_name' => 'desc_fsize',
        'description' => esc_html__('Enter the  Description fontsize like this eg( 16px or 1rem or 1em )', 'risehand-addons'),
        'group' => esc_html__('Styling', 'risehand-addons') ,
        'dependency'  => array(
          'element' => 'title_style',
          'value'   => 'style_one',
        ),
      ),
      array(
        'type' => 'textfield',
        'heading' => esc_html__('Description Line Height', 'risehand-addons') ,
        'param_name' => 'dline_height',
        'description' => esc_html__('Enter the  Description Line Height like this eg( 16px or 1rem or 1em )', 'risehand-addons'),
        'group' => esc_html__('Styling', 'risehand-addons') ,
        'dependency'  => array(
          'element' => 'title_style',
          'value'   => 'style_one',
        ),
      ),
      array(
        'type' => 'textfield',
        'heading' => esc_html__('Description  Padding', 'risehand-addons') ,
        'param_name' => 'desc_padding', 
        'description' => esc_html__('Enter the small title padding like this eg( 0px 0px 0px 0px )', 'risehand-addons'),
        'group' => esc_html__('Styling', 'risehand-addons'),
        'dependency'  => array(
          'element' => 'title_style',
          'value'   => 'style_one',
      ),
      ), 
)));
} 
// shortcode 
add_shortcode( 'vc_title_v1_init', 'vc_titles_v1' );
function vc_titles_v1( $atts, $content = null ) { 
$unique_id = uniqid();
$atts = shortcode_atts(
   array( 
    'title_style' => 'style_one',
      'sm_title_fsize' => '',
      'title_color' => '',
      'title_padding' => '',
      'line_height'  => '',
      'title_fsize' => '',
      'desc_fsize' => '',
      'dline_height'  => '',
      'title_alignments' => '',
      'title_small_heading' => '',
      'title_heading' => '',
      'title_description' => '',
      'transitions_enable' => '',
      'transitions' => '', 
      'smtitle_color' => '',
      'description_color' => '',
      'smtitle_padding' => '', 
      'sline_height'  => '',
      'desc_padding' => '', 
      'dark_white' => 'dark_color',
      'tag_type' => 'h4',
      'icontype' => 'custom',
      'icon_images' => '',
      'icon_fontawesome' => '',
      'icon_fonts' => 'risehand-food', 
   ), $atts
);  
$allowed_tags = wp_kses_allowed_html('post');
ob_start(); 
if($atts['title_style'] == "style_two"):  ?>
<style type="text/css" data-type="vc_shortcodes-custom">
  <?php if($atts['title_alignments'] == "center" || $atts['title_alignments'] == "end"): ?>
    .title_all_box.unique-id-<?php echo esc_attr($unique_id); ?> {text-align:<?php echo esc_attr($atts['title_alignments']); ?> !important;}
    .title_all_box.unique-id-<?php echo esc_attr($unique_id); ?> .before_title {justify-content:<?php echo esc_attr($atts['title_alignments']); ?> !important;}
  <?php endif; ?> 
  <?php if($atts['title_color']): ?>
    .title_all_box.unique-id-<?php echo esc_attr($unique_id); ?> .title_no_a_22 {color:<?php echo esc_attr($atts['title_color']); ?> !important;} 
  <?php endif; ?>  
  <?php if($atts['title_fsize']): ?>
    .title_all_box.unique-id-<?php echo esc_attr($unique_id); ?> .title_no_a_22 {font-size:<?php echo esc_attr($atts['title_fsize']); ?> !important;} 
  <?php endif; ?>  
  <?php if($atts['line_height']): ?>
    .title_all_box.unique-id-<?php echo esc_attr($unique_id); ?> .title_no_a_22 {line-height:<?php echo esc_attr($atts['line_height']); ?> !important;} 
  <?php endif; ?>  
  <?php if($atts['title_padding']): ?>
    .title_all_box.unique-id-<?php echo esc_attr($unique_id); ?> .title_no_a_22  {padding:<?php echo esc_attr($atts['title_padding']); ?>!important;} 
  <?php endif; ?>   
</style> 
  <?php 
  else:
?>
<style type="text/css" data-type="vc_shortcodes-custom">
<?php if($atts['title_alignments'] == "center" || $atts['title_alignments'] == "end"): ?>
  .title_all_box.unique-id-<?php echo esc_attr($unique_id); ?> {text-align:<?php echo esc_attr($atts['title_alignments']); ?> !important;}
  .title_all_box.unique-id-<?php echo esc_attr($unique_id); ?> .before_title {justify-content:<?php echo esc_attr($atts['title_alignments']); ?> !important;}
<?php endif; ?> 
<?php if($atts['smtitle_color']): ?>
  .title_all_box.unique-id-<?php echo esc_attr($unique_id); ?> .before_title .font_special , .title_all_box.unique-id-<?php echo esc_attr($unique_id); ?> .before_title i , 
  .title_all_box.unique-id-<?php echo esc_attr($unique_id); ?> .before_title span {color:<?php echo esc_attr($atts['smtitle_color']); ?> !important; text-decoration-color:<?php echo esc_attr($atts['smtitle_color']); ?> !important;} 
<?php endif; ?>  
<?php if($atts['smtitle_padding']): ?>
  .title_all_box.unique-id-<?php echo esc_attr($unique_id); ?> .before_title  {padding:<?php echo esc_attr($atts['smtitle_padding']); ?> !important;} 
<?php endif; ?>  
<?php if($atts['sm_title_fsize']): ?>
  .title_all_box.unique-id-<?php echo esc_attr($unique_id); ?> .before_title  {font-size:<?php echo esc_attr($atts['sm_title_fsize']); ?> !important;} 
<?php endif; ?>  
<?php if($atts['sline_height']): ?>
    .title_all_box.unique-id-<?php echo esc_attr($unique_id); ?> .before_title {line-height:<?php echo esc_attr($atts['sline_height']); ?> !important;} 
<?php endif; ?>
<?php if($atts['title_color']): ?>
  .title_all_box.unique-id-<?php echo esc_attr($unique_id); ?> .title_no_a_46 {color:<?php echo esc_attr($atts['title_color']); ?> !important;} 
<?php endif; ?>  
<?php if($atts['title_fsize']): ?>
  .title_all_box.unique-id-<?php echo esc_attr($unique_id); ?> .title_no_a_46 {font-size:<?php echo esc_attr($atts['title_fsize']); ?> !important;} 
<?php endif; ?>  
<?php if($atts['line_height']): ?>
    .title_all_box.unique-id-<?php echo esc_attr($unique_id); ?> .title_no_a_46 {line-height:<?php echo esc_attr($atts['line_height']); ?> !important;} 
<?php endif; ?>
<?php if($atts['title_padding']): ?>
  .title_all_box.unique-id-<?php echo esc_attr($unique_id); ?> .title_no_a_46  {padding:<?php echo esc_attr($atts['title_padding']); ?>!important;} 
<?php endif; ?>  
<?php if($atts['description_color']): ?>
  .title_all_box.unique-id-<?php echo esc_attr($unique_id); ?> .desc_p {color:<?php echo esc_attr($atts['description_color']); ?>!important;} 
<?php endif; ?>  
<?php if($atts['desc_fsize']): ?>
  .title_all_box.unique-id-<?php echo esc_attr($unique_id); ?> .desc_p {font-size:<?php echo esc_attr($atts['desc_fsize']); ?> !important;} 
<?php endif; ?>  
<?php if($atts['dline_height']): ?>
    .title_all_box.unique-id-<?php echo esc_attr($unique_id); ?> .desc_p {line-height:<?php echo esc_attr($atts['dline_height']); ?> !important;} 
<?php endif; ?>
<?php if($atts['desc_padding']): ?>
  .title_all_box.unique-id-<?php echo esc_attr($unique_id); ?> .desc_p  {padding:<?php echo esc_attr($atts['desc_padding']); ?>!important;} 
<?php endif; ?>
</style> 
<?php 
//stylingend
endif;
$split_enable = get_addons_risehand_option('split_enable');
$split_option = "";
if($split_enable == true){
    $split_option = get_addons_risehand_option('split_option');
}
?>
  <div class="title_all_box style_one unique-id-<?php echo esc_attr($unique_id); ?> <?php echo esc_attr($atts['dark_white']); ?>">   
    <?php if($atts['title_style'] == "style_two"): ?>
      <?php if(!empty($atts['title_heading'])):?>
        <<?php echo esc_attr($atts['tag_type']); ?> class="title_no_a_22 mb_0"><?php echo wp_kses($atts['title_heading'] , $allowed_tags) ?></<?php echo esc_attr($atts['tag_type']); ?>>
      <?php endif; ?>
    <?php else: ?>
    <?php if(!empty($atts['title_small_heading'])):?>
        <div class="before_title pb_15 d_flex align-items-center">
            <?php if($atts['icontype'] != 'disable_icon'): ?>
              <div class="icon_box<?php if( $atts['icontype'] == 'icon_fonts' ): ?> icon_yes<?php endif; ?>"> 
                <?php if( $atts['icontype'] == 'icon_image_enable'):
                  $icon_image = wp_get_attachment_image_src( intval(  $atts['icon_images'] ), 'full' );
                  $icon_images = $icon_image ? $icon_image[0] : '';
                  $icon_images_alt = get_post_meta($atts['icon_images'], '_wp_attachment_image_alt', true);
                  $icon_images_alt = !empty($icon_images_alt) ? $icon_images_alt : 'risehand-addons';
                  if(!empty($icon_images)): ?>
                  <div class="icon">
                    <img src="<?php echo esc_url($icon_images); ?>" class="img-fluid svg_image" alt="<?php echo esc_attr($icon_images_alt); ?>" />
                  </div>
                <?php endif; ?>
              <?php endif; ?>
            <?php if($atts['icontype'] == 'custom'): ?>
              <div class="icon">
                  <span class="<?php echo esc_html( $atts['icon_fonts']); ?>"></span>
              </div>
            <?php endif; ?>
            <?php if($atts['icontype'] == 'fontawesome'): ?>
              <?php if(!empty($atts['icon_fontawesome'])): ?>
                <div class="icon">
                  <i class="<?php echo esc_attr($atts['icon_fontawesome']); ?>"></i>
                </div> 
              <?php endif; ?>	 
            <?php endif; ?>	   
          </div>
          <?php endif; ?>	  
          <div class="sub_title font_special"> 
            <?php echo wp_kses($atts['title_small_heading'] , $allowed_tags) ?>        
          </div> 
        </div>
      <?php endif; ?>
      <?php if(!empty($atts['title_heading'])):?>
        <<?php echo esc_attr($atts['tag_type']); ?> class="title_no_a_46 <?php echo esc_attr($split_option); ?> mb_0 pb_20"><?php echo wp_kses($atts['title_heading'] , $allowed_tags) ?></<?php echo esc_attr($atts['tag_type']); ?>>
      <?php endif; ?>
      <?php if(!empty($atts['title_description'])):?>
        <p class="desc_p"><?php echo wp_kses($atts['title_description'] , $allowed_tags) ?></p>
      <?php endif; ?>
  
    <?php endif; ?>
    </div> 
<?php
return ob_get_clean();
}



