<?php 
add_action( 'vc_before_init', 'vc_contact_box_vcmap' );
function vc_contact_box_vcmap() {
 vc_map( array(
  "name" => __( "Contact Box V1", "risehand-addons" ),
  "base" => "vc_contact_box_init",
  "class" => "",
  "icon" => "icon-risehand-svg", 
  "category" => __( "Risehand Content", "risehand-addons"),
  "params" => array( 
    array(
        'type'       => 'dropdown',
        'heading'    => esc_html__( 'Contact Box style', 'risehand-addons' ),
        'param_name' => 'contact_box_styles',
        'value'      => array(
            esc_html__( 'Style One', 'risehand-addons' )  => 'style_one',
            esc_html__( 'Style Two', 'risehand-addons' )  => 'style_two',
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
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Icon  Enable / Disable', 'risehand-addons' ),
        'param_name'  => 'icon_enable',
        'value'      => array( esc_html__( 'Yes', 'risehand-addons' ) => '1' ), 
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'contact_box_styles',
            'value'   => 'style_one',
        ),
    ),
    array(
        'type'       => 'dropdown',
        'heading'    => esc_html__( 'Mode', 'risehand-addons' ),
        'param_name' => 'box_color',
        'value'      => array(
            esc_html__( 'Dark', 'risehand-addons' )  => 'dark',
            esc_html__( 'Light', 'risehand-addons' )  => 'light',
            esc_html__( 'White', 'risehand-addons' )  => 'white',
        ),
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'contact_box_styles',
            'value'   => 'style_two',
        ),
    ),  
    array(
        'type' => 'attach_image',
        'heading' => esc_html__('Image', 'risehand-addons') ,
        'param_name' => 'contact_image',
        'value' => '',
        'dependency'  => array(
            'element' => 'contact_box_styles',
            'value'   => 'style_two',
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
            'element' => 'contact_box_styles',
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
        'type' => 'textfield',
        'heading' => esc_html__('Heading', 'risehand-addons') ,
        'param_name' => 'heading',
        'value' => esc_html__('General Enquires', 'risehand-addons') ,
        'group' => esc_html__('General', 'risehand-addons') ,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Address', 'risehand-addons') ,
        'param_name' => 'address_title',
        'value' => esc_html__('Find Us', 'risehand-addons') ,
        'group' => esc_html__('General', 'risehand-addons') ,
    ), 
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Address', 'risehand-addons') ,
        'param_name' => 'address',
        'value' => esc_html__('575 Main Street, D-block, 2nd floor, South Africa', 'risehand-addons') ,
        'group' => esc_html__('General', 'risehand-addons') ,
    ),  
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Mail Title', 'risehand-addons') ,
        'param_name' => 'mail_title',
        'value' => esc_html__('Find Us', 'risehand-addons') ,
        'group' => esc_html__('General', 'risehand-addons') ,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Mail Id', 'risehand-addons') ,
        'param_name' => 'mail',
        'value' => esc_html__('sendmail@qetus.com', 'risehand-addons') ,
        'group' => esc_html__('General', 'risehand-addons') ,
    ), 
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Phone Title', 'risehand-addons') ,
        'param_name' => 'phone_title',
        'value' => esc_html__('Call Us', 'risehand-addons') ,
        'group' => esc_html__('General', 'risehand-addons') ,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Phone Number', 'risehand-addons') ,
        'param_name' => 'phone',
        'value' => esc_html__('+98 060 712 34', 'risehand-addons') ,
        'group' => esc_html__('General', 'risehand-addons') ,
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Box Background Color', 'risehand-addons'),
        'param_name' => 'box_bg_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
        'dependency' => array(
            'element' => 'contact_box_styles',
            'value' => 'style_one',
        ), 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Box Border Color', 'risehand-addons'),
        'param_name' => 'box_br_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
        'dependency' => array(
            'element' => 'contact_box_styles',
            'value' => 'style_one',
        ), 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Icon Color', 'risehand-addons'),
        'param_name' => 'icon_color',
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Pattern Color', 'risehand-addons'),
        'param_name' => 'pattern_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
        'dependency' => array(
            'element' => 'contact_box_styles',
            'value' => 'style_one',
        ), 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Title Color', 'risehand-addons'),
        'param_name' => 'title_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
        'dependency' => array(
            'element' => 'contact_box_styles',
            'value' => 'style_one',
        ), 
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Contact Title Color', 'risehand-addons'),
        'param_name' => 'c_title_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
   
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Contact Color', 'risehand-addons'),
        'param_name' => 'cc_title_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    
)));
} 
// shortcode 
add_shortcode( 'vc_contact_box_init', 'vc_contact_box_v1' );
function vc_contact_box_v1( $atts, $content = null ) { 
$unique_id = uniqid();
$atts = shortcode_atts(
   array(
        'icon_enable' => '' ,
        'tag_type' => 'div' ,
        'contact_box_styles' => 'style_one',
        'icon_fonts' => 'fa fa-map-marker',
        'heading' => 'General Enquires', 
        'address_title' => 'Find Us' , 
        'address' => '575 Main Street, D-block, 2nd floor, South Africa' , 
        'phone_title' => 'Call Us' , 
        'phone' => '+9806071234' , 
        'mail_title' => 'Mail Us' ,
        'mail' => 'sendmail@qetus.com' , 
        'icontype' => 'custom',
        'icon_images' => '',
        'box_color' => 'dark',
        'icon_fontawesome' => '',
        'icon_fonts' => 'risehand-food',  
        'contact_image'  => '',
        'box_bg_color' => '',
        'box_br_color' => '',
        'icon_color' => '',
        'pattern_color' => '',
        'title_color' => '',
        'title_typography' => '',
        'c_title_color' => '',
        'c_title_typography' => '',
        'cc_title_color' => '',
        'cc_title_typography' => '',
   ), $atts
);
$allowed_tags = wp_kses_allowed_html('post');
ob_start();
?> 
<style>
    <?php if($atts['box_bg_color']): ?>
    .contact-id-<?php echo esc_attr($unique_id); ?> .contact_style_one {
        background: <?php echo esc_attr($atts['box_bg_color']); ?> !important;
    }
    <?php endif; ?>
    <?php if($atts['box_br_color']): ?>
    .contact-id-<?php echo esc_attr($unique_id); ?> .contact_style_one  , .contact-id-<?php echo esc_attr($unique_id); ?> .contact_style_one .common {
        border-color: <?php echo esc_attr($atts['box_br_color']); ?> !important;
    }
    <?php endif; ?>
    <?php if($atts['icon_color']): ?>
    .contact-id-<?php echo esc_attr($unique_id); ?> .contact_style_one .icon_box i , .contact-id-<?php echo esc_attr($unique_id); ?> .contact_style_one .icon_box span  , 
    .contact-id-<?php echo esc_attr($unique_id); ?> .contact_style_two .common i   {
        color: <?php echo esc_attr($atts['icon_color']); ?> !important;
    } 
    .contact-id-<?php echo esc_attr($unique_id); ?> .contact_style_one .icon_box svg path  {
        fill: <?php echo esc_attr($atts['icon_color']); ?> !important;
    }
    <?php endif; ?>
    <?php if($atts['pattern_color']): ?>
    .contact-id-<?php echo esc_attr($unique_id); ?> .contact_style_one .icon_box .spattern_bg {
        background: <?php echo esc_attr($atts['pattern_color']); ?> !important;
    }
    <?php endif; ?>
    <?php if($atts['title_color']): ?>
    .contact-id-<?php echo esc_attr($unique_id); ?> .contact_style_one .font_special {
        color: <?php echo esc_attr($atts['title_color']); ?> !important; 
    }
    <?php endif; ?>
    <?php if($atts['c_title_color']): ?>
    .contact-id-<?php echo esc_attr($unique_id); ?> .contact_style_one .common .title_no_a_20 , .contact-id-<?php echo esc_attr($unique_id); ?> .contact_style_two .common .title_no_a_20 {
        color: <?php echo esc_attr($atts['c_title_color']); ?> !important; 
    }
    <?php endif; ?>
    <?php if($atts['cc_title_color']): ?>
    .contact-id-<?php echo esc_attr($unique_id); ?> .contact_style_one .common p , .contact-id-<?php echo esc_attr($unique_id); ?> .contact_style_one .common p a ,
    .contact-id-<?php echo esc_attr($unique_id); ?> .contact_style_two .common p, .contact-id-<?php echo esc_attr($unique_id); ?> .contact_style_two .common p a {
        color: <?php echo esc_attr($atts['cc_title_color']); ?> !important; 
    }
    <?php endif; ?>
</style>
<div class="contact-id-<?php echo esc_attr($unique_id); ?>">
<?php if($atts['contact_box_styles'] == 'style_two'): ?>
<?php //  style ?>
<div class="contact_style_two trans  <?php echo esc_attr($atts['box_color']); ?>">
    <?php $contact_image = wp_get_attachment_image_src( intval(  $atts['contact_image'] ), 'full' );
    $contact_images = $contact_image ? $contact_image[0] : '';
    $contact_image_alt = get_post_meta($atts['contact_image'], '_wp_attachment_image_alt', true);
    $contact_image_alt = !empty($contact_image_alt) ? $contact_image_alt : 'contact-image-one';
    if(!empty($contact_images)): ?>
    <div class="image"> 
        <img src="<?php echo esc_url($contact_images); ?>" class="img-fluid" alt="<?php echo esc_attr($contact_image_alt); ?>" /> 
    </div>
    <?php endif; ?>
    <div class="contnet"> 
         <?php if(!empty($atts['address_title']) || !empty($atts['address'])):?>
            <div class="address d_flex common">
                <?php if(!empty($atts['icon_enable'])): ?>
                    <i class="risehand-map-pin"></i>
                <?php endif; ?>
                <div class="outer">
                <?php if(!empty($atts['address_title'])):?>
                    <<?php echo esc_attr($atts['tag_type']); ?> class="title_no_a_20">
                        <?php echo wp_kses($atts['address_title'] , $allowed_tags) ?>
                    </<?php echo esc_attr($atts['tag_type']); ?>>
                <?php endif; ?>
                <?php if(!empty($atts['address'])):?>
                <p>
                    <?php echo wp_kses($atts['address'] , $allowed_tags) ?>
                </p>
                <?php endif; ?>
                </div>
             </div>
        <?php endif; ?>
        <?php if(!empty($atts['mail_title']) || !empty($atts['mail'])):?>
            <div class="mail common d_flex">
                <?php if(!empty($atts['icon_enable'])): ?>
                    <i class="risehand-mail"></i>
                <?php endif; ?>
                <div class="outer">
                    <?php if(!empty($atts['mail_title'])):?>
                        <<?php echo esc_attr($atts['tag_type']); ?> class="title_no_a_20">
                            <?php echo wp_kses($atts['mail_title'] , $allowed_tags) ?>
                        </<?php echo esc_attr($atts['tag_type']); ?>>
                    <?php endif; ?>
                    <?php if(!empty($atts['mail'])):?>
                        <p>
                            <a href="mailto:<?php echo esc_attr($atts['mail']) ?>"><?php echo esc_attr($atts['mail']) ?></a>
                        </p>
                    <?php endif; ?>
                </div> 
            </div> 
        <?php endif; ?>
        <?php if(!empty($atts['phone_title']) || !empty($atts['phone'])):?>
            <div class="phone common d_flex">
                <?php if(!empty($atts['icon_enable'])): ?>
                    <i class="risehand-phone"></i>
                <?php endif; ?>
                <div class="outer">
                    <?php if(!empty($atts['phone_title'])):?>
                        <<?php echo esc_attr($atts['tag_type']); ?> class="title_no_a_20">
                            <?php echo wp_kses($atts['phone_title'] , $allowed_tags) ?>
                        </<?php echo esc_attr($atts['tag_type']); ?>>
                    <?php endif; ?>
                    <?php if(!empty($atts['phone'])):?>
                        <p>
                            <a href="mailto:<?php echo esc_attr($atts['phone']) ?>"><?php echo esc_attr($atts['phone']) ?></a>
                        </p>
                    <?php endif; ?>
                </div> 
            </div> 
        <?php endif; ?> 
        </div>
    </div> 

<?php //  style ?>
<?php else: ?>
<?php //  style ?>
 <div class="contact_style_one  trans">
    <div class="contact_box_inner <?php if(!empty($atts['icon_fonts'])): ?> icon_yes <?php endif; ?>">
        <?php if($atts['icontype'] != 'disable_icon'): ?>
        <div class="icon_box<?php if( $atts['icontype'] == 'icon_fonts' ): ?> icon_yes<?php endif; ?>">
            <div class="spattern_bg mask_image" 
                    style="mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-3.png' ?>); 
                    -webkit-mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-3.png' ?>);">
                    </div>
            <?php if( $atts['icontype'] == 'icon_image_enable'):
                $icon_image = wp_get_attachment_image_src( intval(  $atts['icon_images'] ), 'full' );
                $icon_images = $icon_image ? $icon_image[0] : '';
                $icon_images_alt = get_post_meta($atts['icon_images'], '_wp_attachment_image_alt', true);
                $icon_images_alt = !empty($icon_images_alt) ? $icon_images_alt : 'icon-image-one';
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
    <div class="contnet">
        <?php if(!empty($atts['heading'])):?>
            <div class="font_special"> <?php echo wp_kses($atts['heading'] , $allowed_tags) ?> </div>
        <?php endif; ?>
         <?php if(!empty($atts['address_title']) || !empty($atts['address'])):?>
            <div class="address common">
                <?php if(!empty($atts['address_title'])):?>
                    <<?php echo esc_attr($atts['tag_type']); ?> class="title_no_a_20">
                        <?php echo wp_kses($atts['address_title'] , $allowed_tags) ?>
                    </<?php echo esc_attr($atts['tag_type']); ?>>
                <?php endif; ?>
                <?php if(!empty($atts['address'])):?>
                <p>
                    <?php echo wp_kses($atts['address'] , $allowed_tags) ?>
                </p>
                <?php endif; ?>
             </div>
        <?php endif; ?>
        <?php if(!empty($atts['mail_title']) || !empty($atts['mail'])):?>
            <div class="mail common">
                <?php if(!empty($atts['mail_title'])):?>
                    <div class="title_no_a_20">
                        <?php echo wp_kses($atts['mail_title'] , $allowed_tags) ?>
                    </div>
                <?php endif; ?>
                <?php if(!empty($atts['mail'])):?>
                    <p>
                        <a href="mailto:<?php echo esc_attr($atts['mail']) ?>"><?php echo esc_attr($atts['mail']) ?></a>
                    </p>
                <?php endif; ?>
            </div> 
        <?php endif; ?>
        <?php if(!empty($atts['phone_title']) || !empty($atts['phone'])):?>
            <div class="phone common">
                <?php if(!empty($atts['phone_title'])):?>
                    <<?php echo esc_attr($atts['tag_type']); ?> class="title_no_a_20">
                        <?php echo wp_kses($atts['phone_title'] , $allowed_tags) ?>
                    </<?php echo esc_attr($atts['tag_type']); ?>>
                <?php endif; ?>
                <?php if(!empty($atts['phone'])):?>
                    <p>
                        <a href="mailto:<?php echo esc_attr($atts['phone']) ?>"><?php echo esc_attr($atts['phone']) ?></a>
                    </p>
                <?php endif; ?>
            </div> 
        <?php endif; ?> 
        </div>
    </div> 
</div>
<?php //  style ?>
<?php endif; ?>
                </div>
<?php
return ob_get_clean();
}



