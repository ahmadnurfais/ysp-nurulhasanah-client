<?php
add_action( 'vc_before_init', 'vc_header_extra_v1_vcmap' );
function vc_header_extra_v1_vcmap() {
 vc_map( array(
  "name" => __( "Logo , Phone Number , Mail Id , Address ", "risehand-addons" ),
  "base" => "vc_header_extra_v1_init",
  "class" => "",
  "icon" => "icon-risehand-svg", 
  "category" => __( "Risehand Header", "risehand-addons"),
  "params" => array( 
    array(
        'type'       => 'dropdown',
        'heading'    => esc_html__('Choose', 'risehand-addons'),
        'param_name' => 'header_extra_items',
        'value'      => array( 
            esc_html__( 'Logo', 'risehand-addons' ) => 'logo' ,  
            esc_html__( 'Phone Number', 'risehand-addons' ) => 'contact' , 
            esc_html__( 'Mail Id', 'risehand-addons' ) => 'mailid' , 
            esc_html__( 'Address', 'risehand-addons' ) => 'address' ,   
        ),
        'group' => esc_html__('General', 'risehand-addons') ,
    ), 
    array(
        'type'       => 'dropdown',
        'heading'    => esc_html__('Choose Style', 'risehand-addons'),
        'param_name' => 'differnet_types',
        'value'      => array( 
            esc_html__( 'Type One', 'risehand-addons' ) => 'type_one' ,  
            esc_html__( 'Type Two', 'risehand-addons' ) => 'type_two' ,  
        ), 
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'header_extra_items',
            'value'   => array('contact' , 'mailid' , 'address'),
        ),
    ), 
    array(
        'type' => 'attach_image',
        'heading' => esc_html__('Logo Default', 'risehand-addons') ,
        'param_name' => 'logo_default',
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'header_extra_items',
            'value'   => 'logo',
        ),
    ), 
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Logo Width', 'risehand-addons') ,
        'param_name' => 'logo_width',
        'value' => '170px',
        "description" => __( "Enter logo width here in (px , rem and em )", "risehand-addons" ),
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'header_extra_items',
            'value'   => 'logo',
        ),
     ) ,
    
     array(
        'type' => 'textfield',
        'heading' => esc_html__('Logo Margin', 'risehand-addons') ,
        'param_name' => 'margin_logo',
        'value' => '0px 0px 0px 0px',
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'header_extra_items',
            'value'   => 'logo',
        ),
     ) ,

     array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Custom Link Enable / Disable', 'risehand-addons' ),
        'param_name'  => 'custom_link_enable',
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ),
        'description' => esc_html__( 'Click Check box to enable Top Bar', 'risehand-addons' ),
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'header_extra_items',
            'value'   => 'logo',
        ),
    ),
    array(
        'heading'    => esc_html__( 'Logo  URL (Link)', 'risehand-addons' ),
        'type'       => 'vc_link',
        'param_name' => 'logo_link',
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'header_extra_items',
            'value'   => 'logo',
        ),
    ),
 

    // top bar content
   
    // Contact
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
            'element' => 'header_extra_items',
            'value'   => array('contact' , 'mailid' , 'address'),
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
        'type' => 'textfield',
        'heading' => esc_html__('Contact Title', 'risehand-addons') ,
        'param_name' => 'contact_us_title',
        'value' => esc_html__('Need help? Call Us:', 'risehand-addons') ,
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'header_extra_items',
            'value'   => 'contact',
        ),
    ) ,
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Phone Number', 'risehand-addons') ,
        'param_name' => 'contact_us_number',
        'value' => esc_html__('+1800900122', 'risehand-addons') ,
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'header_extra_items',
            'value'   => 'contact',
        ),
    ) ,
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Mail Title', 'risehand-addons') ,
        'param_name' => 'mailtitle',
        'value' => esc_html__('Just Mail Us:', 'risehand-addons') ,
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'header_extra_items',
            'value'   => 'mailid',
        ),
    ) ,
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Mail Id', 'risehand-addons') ,
        'param_name' => 'getmailid',
        'value' => esc_html__('support@gmail.com', 'risehand-addons') ,
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'header_extra_items',
            'value'   => 'mailid',
        ),
    ) ,
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Addres Title', 'risehand-addons') ,
        'param_name' => 'addresstitle',
        'value' => esc_html__('Locate Us:', 'risehand-addons') ,
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'header_extra_items',
            'value'   => 'address',
        ),
    ) ,
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Address', 'risehand-addons') ,
        'param_name' => 'getaddress',
        'value' => esc_html__('55 Main Street, 2nd Blok, 3rd    Floor, New York City', 'risehand-addons') ,
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'header_extra_items',
            'value'   => 'address',
        ),
    ) ,
    // information  end
    array(
        'type' => 'colorpicker',
        'heading' => __('Contact Icon Color', 'risehand-addons'),
        'param_name' => 'contact_icon_color', 
        'dependency'  => array(
            'element' => 'header_extra_items',
            'value'   => array('contact', 'mailid', 'address'),
        ),
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => __('Contact Title Color', 'risehand-addons'),
        'param_name' => 'contact_title_color',
        'dependency'  => array(
            'element' => 'header_extra_items',
            'value'   => array('contact', 'mailid', 'address'),
        ),
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Title Font Weight', 'risehand-addons' ),
        'value' => array( 
            esc_html__( 'Normal', 'risehand-addons' ) => 'normal',
            esc_html__( '500', 'risehand-addons' ) => '500',
            esc_html__( '600', 'risehand-addons' ) => '600' , 
            esc_html__( '700', 'risehand-addons' ) => '700' , 
            esc_html__( '800', 'risehand-addons' ) => '800' , 
        ), 
        'param_name' => 'title_font_weight',
        'default' => 'normal',
        'description' => esc_html__( 'Select font weight', 'risehand-addons' ),
        'group' => esc_html__('Styling', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'header_extra_items',
            'value'   => array('contact' , 'mailid' , 'address'),
        ),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Contact Color', 'risehand-addons'),
        'param_name' => 'contact_color',
        'dependency'  => array(
            'element' => 'header_extra_items',
            'value'   => array('contact', 'mailid', 'address'),
        ),
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Contact Font Weight', 'risehand-addons' ),
        'value' => array( 
            esc_html__( 'Normal', 'risehand-addons' ) => 'normal',
            esc_html__( '500', 'risehand-addons' ) => '500',
            esc_html__( '600', 'risehand-addons' ) => '600' , 
            esc_html__( '700', 'risehand-addons' ) => '700' , 
            esc_html__( '800', 'risehand-addons' ) => '800' , 
        ), 
        'param_name' => 'contact_font_weight',
        'default' => 'normal',
        'description' => esc_html__( 'Select font weight', 'risehand-addons' ),
        'group' => esc_html__('Styling', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'header_extra_items',
            'value'   => array('contact' , 'mailid' , 'address'),
        ),
    ),
    
)));
}

// shortcode

add_shortcode( 'vc_header_extra_v1_init', 'vc_header_extra_v1' );
function vc_header_extra_v1( $atts, $content = null ) { 
    $unique_id = uniqid();
 $atts = shortcode_atts(
   array(
      'header_extra_items' => 'logo' ,
      'differnet_types'  => 'type_one' ,
      'logo_default' => '' ,
      'logo_width' => '' ,
      'margin_logo' => '' ,
      'custom_link_enable' => '',
      'logo_link' => '',
      'logo_width' => '',
      'margin_logo' => '', 
      'link_repeater' => '', 
      'info_content_ones' => 'Free shipping for all orders over',
      'info_content_two' => '$75.00', 
      'contact_us_title' => 'Need help? Call Us:',
      'contact_us_number' => '+1800900122',  
      'mailtitle'  => 'Just Mail Us :' , 
      'getmailid'  => 'support@gmail.com' , 
      'addresstitle'  => 'Locate Us :' , 
      'getaddress'  => '55 Main Street, 2nd Blok, 3rd 
      Floor, New York City' , 
      'icontype' => 'custom',
      'icon_images' => '',
      'icon_fontawesome' => '',
      'icon_fonts' => 'risehand-018-conversation', 
      'contact_icon_color' => '', 
      'contact_title_color' => '', 
      'contact_color' => '',
      'title_font_weight' => '', 
      'contact_font_weight' => '',
   ), $atts
);
$allowed_tags = wp_kses_allowed_html('post'); 
ob_start();
?>
<style>
    <?php if($atts['contact_icon_color']): ?>
   .head-ex-<?php echo esc_attr($unique_id); ?> .header_contact .icon i,
   .head-ex-<?php echo esc_attr($unique_id); ?> .header_contact .icon span {
        color: <?php echo esc_attr($atts['contact_icon_color']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['contact_icon_color']): ?>
    .head-ex-<?php echo esc_attr($unique_id); ?> .header_contact .icon svg path {
        fill: <?php echo esc_attr($atts['contact_icon_color']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['contact_title_color'] || $atts['title_font_weight']): ?>
    .head-ex-<?php echo esc_attr($unique_id); ?> .header_contact .titles { 
        <?php if($atts['contact_title_color']): ?>  color: <?php echo esc_attr($atts['contact_title_color']); ?>!important;<?php endif; ?>
        <?php if($atts['title_font_weight']): ?> font-weight: <?php echo esc_attr($atts['title_font_weight']); ?>!important;<?php endif; ?>
    }
    <?php endif; ?>
    <?php if($atts['contact_color'] || $atts['contact_font_weight']): ?>
    .head-ex-<?php echo esc_attr($unique_id); ?> .header_contact a,
    .head-ex-<?php echo esc_attr($unique_id); ?> .header_contact p { 
        <?php if($atts['contact_color']): ?>  color: <?php echo esc_attr($atts['contact_color']); ?>!important;<?php endif; ?>
        <?php if($atts['contact_font_weight']): ?> font-weight: <?php echo esc_attr($atts['contact_font_weight']); ?>!important;<?php endif; ?>
    }
    <?php endif; ?>
</style> 
<div class="head-ex-<?php echo esc_attr($unique_id); ?>">
<?php if($atts['header_extra_items'] == 'contact'): ?>
    <div class="header_contact <?php echo esc_attr($atts['differnet_types']); ?> d_flex align-items-center">
    <?php if($atts['icontype'] != 'disable_icon'): ?>
        <div class="icon_box<?php if( $atts['icontype'] == 'icon_fonts' ): ?> icon_yes<?php endif; ?>"> 
                <?php if( $atts['icontype'] == 'icon_image_enable'):
                  $icon_image = wp_get_attachment_image_src( intval(  $atts['icon_images'] ), 'full' );
                  $icon_images = $icon_image ? $icon_image[0] : '';
                  $icon_images_alt = get_post_meta($atts['icon_images'], '_wp_attachment_image_alt', true);
                  $icon_images_alt = !empty($icon_images_alt) ? $icon_images_alt : 'risehand-addons';
                  if(!empty($icon_images)): ?>
                  <div class="icon d_flex">
                    <img src="<?php echo esc_url($icon_images); ?>" class="img-fluid svg_image" alt="<?php echo esc_attr($icon_images_alt); ?>" />
                  </div>
                <?php endif; ?>
              <?php endif; ?>
            <?php if($atts['icontype'] == 'custom'): ?>
              <div class="icon d_flex">
                  <span class="<?php echo esc_html( $atts['icon_fonts']); ?>"></span>
              </div>
            <?php endif; ?>
            <?php if($atts['icontype'] == 'fontawesome'): ?>
              <?php if(!empty($atts['icon_fontawesome'])): ?>
                <div class="icon d_flex">
                  <i class="<?php echo esc_attr($atts['icon_fontawesome']); ?>"></i>
                </div> 
              <?php endif; ?>	 
            <?php endif; ?>	   
          </div>
          <?php endif; ?>	
        <div class="content">
        <?php if(!empty($atts['contact_us_title'])): ?>
            <span class="titles"><?php echo esc_attr($atts['contact_us_title']); ?> </span>
        <?php endif; ?>
        <?php if(!empty($atts['contact_us_number'])): ?>
        <a href="tel:<?php echo esc_attr($atts['contact_us_number']); ?>">
            <?php echo esc_attr($atts['contact_us_number']); ?>
        </a>
        <?php endif; ?>
        </div>
    </div>
<?php elseif ($atts['header_extra_items'] == 'mailid'): ?>
    <div class="header_contact <?php echo esc_attr($atts['differnet_types']); ?> d_flex align-item-center">
    <?php if($atts['icontype'] != 'disable_icon'): ?>
        <div class="icon_box<?php if( $atts['icontype'] == 'icon_fonts' ): ?> icon_yes<?php endif; ?>"> 
                <?php if( $atts['icontype'] == 'icon_image_enable'):
                  $icon_image = wp_get_attachment_image_src( intval(  $atts['icon_images'] ), 'full' );
                  $icon_images = $icon_image ? $icon_image[0] : '';
                  $icon_images_alt = get_post_meta($atts['icon_images'], '_wp_attachment_image_alt', true);
                  $icon_images_alt = !empty($icon_images_alt) ? $icon_images_alt : 'risehand-addons';
                  if(!empty($icon_images)): ?>
                  <div class="icon d_flex">
                    <img src="<?php echo esc_url($icon_images); ?>" class="img-fluid svg_image" alt="<?php echo esc_attr($icon_images_alt); ?>" />
                  </div>
                <?php endif; ?>
              <?php endif; ?>
            <?php if($atts['icontype'] == 'custom'): ?>
              <div class="icon d_flex">
                  <span class="<?php echo esc_html( $atts['icon_fonts']); ?>"></span>
              </div>
            <?php endif; ?>
            <?php if($atts['icontype'] == 'fontawesome'): ?>
              <?php if(!empty($atts['icon_fontawesome'])): ?>
                <div class="icon d_flex">
                  <i class="<?php echo esc_attr($atts['icon_fontawesome']); ?>"></i>
                </div> 
              <?php endif; ?>	 
            <?php endif; ?>	   
          </div>
          <?php endif; ?>	
          <div class="content">
        <?php if(!empty($atts['mailtitle'])): ?>
            <span class="titles"><?php echo esc_attr($atts['mailtitle']); ?> </span>
        <?php endif; ?>
        <?php if(!empty($atts['getmailid'])): ?>
        <a href="mailto:<?php echo esc_attr($atts['getmailid']); ?>">
            <?php echo esc_attr($atts['getmailid']); ?>
        </a>
        <?php endif; ?>
        </div>
    </div>
<?php elseif ($atts['header_extra_items'] == 'address'): ?>
        <div class="header_contact <?php echo esc_attr($atts['differnet_types']); ?> address d_flex align-item-center">
            <?php if($atts['icontype'] != 'disable_icon'): ?>
              <div class="icon_box<?php if( $atts['icontype'] == 'icon_fonts' ): ?> icon_yes<?php endif; ?>"> 
                <?php if( $atts['icontype'] == 'icon_image_enable'):
                  $icon_image = wp_get_attachment_image_src( intval(  $atts['icon_images'] ), 'full' );
                  $icon_images = $icon_image ? $icon_image[0] : '';
                  $icon_images_alt = get_post_meta($atts['icon_images'], '_wp_attachment_image_alt', true);
                  $icon_images_alt = !empty($icon_images_alt) ? $icon_images_alt : 'risehand-addons';
                  if(!empty($icon_images)): ?>
                  <div class="icon d_flex">
                    <img src="<?php echo esc_url($icon_images); ?>" class="img-fluid svg_image" alt="<?php echo esc_attr($icon_images_alt); ?>" />
                  </div>
                <?php endif; ?>
              <?php endif; ?>
            <?php if($atts['icontype'] == 'custom'): ?>
              <div class="icon v">
                  <span class="<?php echo esc_html( $atts['icon_fonts']); ?>"></span>
              </div>
            <?php endif; ?>
            <?php if($atts['icontype'] == 'fontawesome'): ?>
              <?php if(!empty($atts['icon_fontawesome'])): ?>
                <div class="icon d_flex">
                  <i class="<?php echo esc_attr($atts['icon_fontawesome']); ?>"></i>
                </div> 
              <?php endif; ?>	 
            <?php endif; ?>	   
          </div>
          <?php endif; ?>	
          <div class="content">
        <?php if(!empty($atts['addresstitle'])): ?>
            <span class="titles"><?php echo esc_attr($atts['addresstitle']); ?> </span>
        <?php endif; ?>
        <?php if(!empty($atts['getaddress'])): ?>
        <p>
            <?php echo esc_attr($atts['getaddress']); ?>
        </p>
        <?php endif; ?>
        </div>
    </div>
 
 
<?php else:  
    $link = home_url();     
    $link_target = '';
    $link_unfollow = ''; 
    if($atts['custom_link_enable']){  
        if (!empty($atts['logo_link'])) {
            $link_go = vc_build_link($atts['logo_link']);
            $link = $link_go['url'];
            $link_target = !empty($link_go['target']) ? ' target="' . esc_attr($link_go['target']) . '"' : '';
            $link_unfollow = !empty($link_go['rel']) && $link_go['rel'] === 'nofollow' ? ' rel="nofollow"' : '';
        } 
    } 
    ?>
<div class="header-logo">
    <a href="<?php echo esc_url($link); ?>" class="d-flex" <?php echo esc_attr($link_target); ?> <?php echo esc_attr($link_unfollow); ?>>
        <?php if (!empty($atts['logo_default'])):  
                $logo_default = wp_get_attachment_image_src(intval($atts['logo_default']), 'full');
                $logo_defaults = $logo_default ? $logo_default[0] : '';
             ?>
                <img class="logo_default" src="<?php echo esc_url($logo_defaults); ?>" alt="<?php echo esc_html(get_bloginfo('name')); ?>">
        <?php else: ?>
            <img class="logo_default" src="<?php echo RISEHAND_ADDONS_URL . 'assets/image/logo-dark.png' ?>" alt="<?php echo esc_html(get_bloginfo('name')); ?>">
        <?php endif; ?>
    </a>
</div> 
<?php endif;  ?>
 </div> 
 <?php
return ob_get_clean();
}