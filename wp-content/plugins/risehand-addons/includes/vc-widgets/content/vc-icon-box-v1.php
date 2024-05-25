<?php 
add_action( 'vc_before_init', 'vc_icon_box_v1_vcmap' );
function vc_icon_box_v1_vcmap() {
 vc_map( array(
  "name" => __( "Icon Box V1", "risehand-addons" ),
  "base" => "vc_icon_box_v1_init",
  "class" => "",
  "icon" => "icon-risehand-svg", 
  "category" => __( "Risehand Content", "risehand-addons"),
  "params" => array( 
    array(
        'type'       => 'dropdown',
        'heading'    => esc_html__( 'Icon Styles', 'risehand-addons' ),
        'param_name' => 'iconboxstyle',
        'value'      => array(
            esc_html__( 'Style One', 'risehand-addons' )  => 'style_one',
            esc_html__( 'Style Two', 'risehand-addons' )  => 'style_two',
            esc_html__( 'Style Three', 'risehand-addons' )  => 'style_three',
            esc_html__( 'Style Four', 'risehand-addons' )  => 'style_four', 
            esc_html__( 'Style Five', 'risehand-addons' )  => 'style_five', 
            esc_html__( 'Style Six', 'risehand-addons' )  => 'style_six', 
            esc_html__( 'Style Seven', 'risehand-addons' )  => 'style_seven', 
        ),
        'group' => esc_html__('General', 'risehand-addons') ,
    ),  
    array(
        'type'       => 'dropdown',
        'heading'    => esc_html__( 'Flex Direction', 'risehand-addons' ),
        'param_name' => 'flex_column',
        'value'      => array(
            esc_html__( 'Row', 'risehand-addons' )  => 'crow',
            esc_html__( 'Column', 'risehand-addons' )  => 'ccolumn', 
        ), 
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency' => array(
            'element' => 'iconboxstyle',
            'value' => 'style_seven',
        ),
    ),  
    array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Enable /  Disable - Background for style two', 'risehand-addons' ),
        'param_name'  => 'enable_background',
        'value'      => array( esc_html__( 'Yes', 'risehand-addons' ) => '1' ), 
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency' => array(
            'element' => 'iconboxstyle',
            'value' => 'style_two',
        ),
    ),
    array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Enable /  Disable - Border for style One', 'risehand-addons' ),
        'param_name'  => 'enable_border',
        'value'      => array( esc_html__( 'Yes', 'risehand-addons' ) => '1' ), 
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency' => array(
            'element' => 'iconboxstyle',
            'value' => 'style_one',
        ),
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
        'heading' => esc_html__('Heading', 'risehand-addons') ,
        'param_name' => 'icon_box_heading',
        'value' => esc_html__('Conserve Water', 'risehand-addons') ,
        'group' => esc_html__('General', 'risehand-addons') ,
    ), 
    array(
        'type' => 'textarea',
        'heading' => esc_html__('Description', 'risehand-addons') ,
        'param_name' => 'icon_box_description',
        'value' => esc_html__('Duis Aute Irure Dolor In Reprehenderit In Voluptate Velit Esse Cillum.', 'risehand-addons') ,
        'group' => esc_html__('General', 'risehand-addons') ,
    ), 
    array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Button Text Enable / Disable', 'risehand-addons' ),
        'param_name'  => 'button_text_enable',
        'value'      => array( esc_html__( 'Yes', 'risehand-addons' ) => '1' ), 
        'group' => esc_html__('General', 'risehand-addons') ,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Button Text', 'risehand-addons') ,
        'param_name' => 'button_text',
        'value' => esc_html__('Read More', 'risehand-addons') ,
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'button_text_enable',
            'value'   => '1',
        ),
    ),
    array(
        'type' => 'vc_link',
        'heading' => esc_html__('Link', 'risehand-addons') ,
        'param_name' => 'link_box',
        'value' => esc_html__('#', 'risehand-addons') ,
        'group' => esc_html__('General', 'risehand-addons') , 
    ), 
    // end vc maps
    array(
        'type' => 'colorpicker',
        'heading' => __('Box Border Color', 'risehand-addons'),
        'param_name' => 'cstyle_zone',
        'group' => esc_html__('Styling', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'iconboxstyle',
            'value'   => array('style_one' , 'style_two' , 'style_three' , 'style_four' , 'style_five'),
        ),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Box Background Color', 'risehand-addons'),
        'param_name' => 'cstyle_ztwo',
        'group' => esc_html__('Styling', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'iconboxstyle',
            'value'   => array('style_one' , 'style_two' , 'style_three' , 'style_four' , 'style_five'  , 'style_six'),
        ),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Icon Color', 'risehand-addons'),
        'param_name' => 'cstyle_seven',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Pattern Color', 'risehand-addons'),
        'param_name' => 'cstyle_eleven',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Pattern Circle Color', 'risehand-addons'),
        'param_name' => 'cstyle_zsix',
        'group' => esc_html__('Styling', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'iconboxstyle',
            'value'   => array('style_four'),
        ),
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => __('Title Color', 'risehand-addons'),
        'param_name' => 'cstyle_four',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => __('Content Color', 'risehand-addons'),
        'param_name' => 'cstyle_six',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => __('Button Color', 'risehand-addons'),
        'param_name' => 'cstyle_two',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Button Border Color', 'risehand-addons'),
        'param_name' => 'cstyle_zfour', 
        'dependency'  => array(
            'element' => 'iconboxstyle',
            'value'   => array('style_four' , 'style_six'),
        ),
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Button Background Color', 'risehand-addons'),
        'param_name' => 'cstyle_zseven',
        'dependency'  => array(
            'element' => 'iconboxstyle',
            'value'   => array('style_four' , 'style_six'),
        ),
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => __('Hover Icon Color', 'risehand-addons'),
        'param_name' => 'hoverone',
        'dependency'  => array(
            'element' => 'iconboxstyle',
            'value'   => array('style_five'),
        ),
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Hover Pattern Color', 'risehand-addons'),
        'param_name' => 'hovertwo',
        'dependency'  => array(
            'element' => 'iconboxstyle',
            'value'   => array('style_five'),
        ),
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Hover Title Color', 'risehand-addons'),
        'param_name' => 'hoverthree',
        'dependency'  => array(
            'element' => 'iconboxstyle',
            'value'   => array('style_five'),
        ),
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Hover Content Color', 'risehand-addons'),
        'param_name' => 'hoverfour',
        'dependency'  => array(
            'element' => 'iconboxstyle',
            'value'   => array('style_five'),
        ),
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Hover Link Color', 'risehand-addons'),
        'param_name' => 'hoverfive',
        'dependency'  => array(
            'element' => 'iconboxstyle',
            'value'   => array('style_five'),
        ),
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Hover Background Color', 'risehand-addons'),
        'param_name' => 'hoversize',
        'dependency'  => array(
            'element' => 'iconboxstyle',
            'value'   => array('style_five'),
        ),
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
)));
}

// shortcode

add_shortcode( 'vc_icon_box_v1_init', 'vc_icon_box_v1' );
function vc_icon_box_v1( $atts, $content = null ) { 
    $unique_id = uniqid();
 $atts = shortcode_atts(
    array(
        'cstyle_zone' => '',
        'cstyle_ztwo' => '',
        'cstyle_seven' => '',
        'cstyle_eleven' => '',
        'cstyle_zsix' => '', 
        'cstyle_four' => '', 
        'cstyle_six' => '', 
        'cstyle_two' => '',
        'cstyle_zfour' => '',
        'cstyle_zseven' => '', 
        'hoverone' => '',
        'hovertwo' => '',
        'hoverthree' => '',
        'hoverfour' => '',
        'hoverfive' => '',
        'hoversize' => '',

        'tag_type' => 'div' , 
        'iconboxstyle' => 'style_one', 
        'icontype' => 'custom',
        'icon_images' => '',
        'icon_fontawesome' => '',
        'icon_fonts' => 'risehand-food', 
        'icon_box_heading' => 'Conserve Water',
        'icon_box_description' => 'We denounce with righteous indignation dislike men who are so beguiled demoralized by the charms of pleasure of the moment,',
        'button_text_enable' => '' ,
        'button_text' => 'Read More',
        'link_box' => '', 
        'enable_background'  => '', 
        'enable_border'  => '', 
        'flex_column' => 'crow', 
   ), $atts
); 

$allowed_tags = wp_kses_allowed_html('post');
$link  = '#';
$link_target  = '';
$link_unfollow  = '';
 if (!empty( $atts['link_box'])) {
    $link_go = vc_build_link($atts['link_box']);
    // Extract the URL
    $link = $link_go['url'];
    // Extract the target option
    $link_target = !empty($link_go['target']) ? ' target="' . esc_attr($link_go['target']) . '"' : '';
    // Extract the nofollow option
    $link_unfollow = !empty($link_go['rel']) && $link_go['rel'] === 'nofollow' ? ' rel="nofollow"' : '';
} 
ob_start();
?>
<style>
    <?php if($atts['cstyle_zone']): ?>
    .ic-tab-id-<?php echo esc_attr($unique_id); ?> .icon_box_all,
     .ic-tab-id-<?php echo esc_attr($unique_id); ?> .icon_box_all.style_one .d_flex.enable_bors,
     .ic-tab-id-<?php echo esc_attr($unique_id); ?> .icon_box_all .inner_icon_box.enable_bgs {
        border-color: <?php echo esc_attr($atts['cstyle_zone']); ?>!important;
    } 
    .ic-tab-id-<?php echo esc_attr($unique_id); ?> .icon_box_all.style_one {
        border-color: unset!important;
    }
    <?php endif; ?>
    <?php if($atts['cstyle_ztwo']): ?>
     .ic-tab-id-<?php echo esc_attr($unique_id); ?> .icon_box_all,
     .ic-tab-id-<?php echo esc_attr($unique_id); ?> .icon_box_all .inner_icon_box.enable_bgs,
     .ic-tab-id-<?php echo esc_attr($unique_id); ?> .icon_box_all:not(.style_four) .txt_content {
        background: <?php echo esc_attr($atts['cstyle_ztwo']); ?>!important;
    } 
    .ic-tab-id-<?php echo esc_attr($unique_id); ?> .icon_box_all.style_two  ,
     .ic-tab-id-<?php echo esc_attr($unique_id); ?> .icon_box_all.style_two .txt_content,
     .ic-tab-id-<?php echo esc_attr($unique_id); ?> .icon_box_all.style_six {
        background: unset!important;
    }
    <?php endif; ?>
    <?php if($atts['cstyle_seven']): ?>
     .ic-tab-id-<?php echo esc_attr($unique_id); ?> .icon_box_all .icon span,
     .ic-tab-id-<?php echo esc_attr($unique_id); ?> .icon_box_all .icon i {
        color: <?php echo esc_attr($atts['cstyle_seven']); ?>!important; 
    }
    .ic-tab-id-<?php echo esc_attr($unique_id); ?> .icon_box_all .icon svg path{
        fill: <?php echo esc_attr($atts['cstyle_seven']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['cstyle_eleven']): ?>  
     .ic-tab-id-<?php echo esc_attr($unique_id); ?> .icon_box_all .spattern_bg {
        background: <?php echo esc_attr($atts['cstyle_eleven']); ?>!important;
    }  
    <?php endif; ?>
    <?php if($atts['cstyle_zsix']): ?> 
     .ic-tab-id-<?php echo esc_attr($unique_id); ?> .icon_box_all.style_four::before {
        border-color: <?php echo esc_attr($atts['cstyle_zsix']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['cstyle_four']): ?> 
     .ic-tab-id-<?php echo esc_attr($unique_id); ?> .icon_box_all .title_no_a_24 { 
        color: <?php echo esc_attr($atts['cstyle_four']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['cstyle_six']): ?> 
     .ic-tab-id-<?php echo esc_attr($unique_id); ?> .icon_box_all .desc_p { 
        color: <?php echo esc_attr($atts['cstyle_six']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['cstyle_two']): ?> 
    .ic-tab-id-<?php echo esc_attr($unique_id); ?> .icon_box_all .text_btn small,
    .ic-tab-id-<?php echo esc_attr($unique_id); ?> .icon_box_all.style_four .theme_btn { 
        color: <?php echo esc_attr($atts['cstyle_two']); ?>!important;
        text-decoration-color: <?php echo esc_attr($atts['cstyle_two']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['cstyle_zseven']): ?> 
     .ic-tab-id-<?php echo esc_attr($unique_id); ?> .icon_box_all .theme_btn { 
        background: <?php echo esc_attr($atts['cstyle_zseven']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['cstyle_zfour']): ?> 
     .ic-tab-id-<?php echo esc_attr($unique_id); ?> .icon_box_all .theme_btn {
        border-color: <?php echo esc_attr($atts['cstyle_zfour']); ?>!important; 
    }
    <?php endif; ?> 
    <?php if($atts['hoverone']): ?> 
     .ic-tab-id-<?php echo esc_attr($unique_id); ?> .icon_box_all.style_five:hover .icon_box .icon i,
     .ic-tab-id-<?php echo esc_attr($unique_id); ?> .icon_box_all.style_five:hover .icon_box .icon span {
        color: <?php echo esc_attr($atts['hoverone']); ?>!important;
    } 
     .ic-tab-id-<?php echo esc_attr($unique_id); ?> .icon_box_all.style_five:hover .icon_box .icon svg path {
        fill: <?php echo esc_attr($atts['hoverone']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['hovertwo']): ?> 
    .ic-tab-id-<?php echo esc_attr($unique_id); ?> .icon_box_all.style_five:hover .icon_box .spattern_bg {
        background: <?php echo esc_attr($atts['hovertwo']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['hoverthree']): ?> 
     .ic-tab-id-<?php echo esc_attr($unique_id); ?> .icon_box_all.style_five:hover .title_no_a_24 {
        color: <?php echo esc_attr($atts['hoverthree']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['hoverfour']): ?> 
     .ic-tab-id-<?php echo esc_attr($unique_id); ?> .icon_box_all.style_five:hover p {
        color: <?php echo esc_attr($atts['hoverfour']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['hoverfive']): ?> 
     .ic-tab-id-<?php echo esc_attr($unique_id); ?> .icon_box_all.style_five:hover .text_btn small {
        color: <?php echo esc_attr($atts['hoverfive']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['hoversize']): ?> 
     .ic-tab-id-<?php echo esc_attr($unique_id); ?> .icon_box_all.style_five:hover {
        background: <?php echo esc_attr($atts['hoversize']); ?>!important;
    }
    <?php endif; ?>
</style>
<?php
$icon_image = wp_get_attachment_image_src( intval(  $atts['icon_images'] ), 'full' );
$icon_images = $icon_image ? $icon_image[0] : ''; 
$icon_images_alt = get_post_meta($atts['icon_images'], '_wp_attachment_image_alt', true);
$icon_images_alt = !empty($icon_images_alt) ? $icon_images_alt : 'icon-image-one';
?>
<div class="ic-tab-id-<?php echo esc_attr($unique_id); ?>">
<div class="icon_box_all trans   <?php echo esc_attr($atts['iconboxstyle']); ?> <?php echo esc_attr($atts['flex_column']); ?>">
<?php // icon style two start ?>
<?php if($atts['iconboxstyle'] == 'style_two'): ?>
    <div class="inner_icon_box trans<?php if(!empty($atts['enable_background'])): ?> enable_bgs<?php endif; ?>">
    <div class="spattern_bg mask_image" 
                    style="mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-1.png' ?>); 
                    -webkit-mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-1.png' ?>);">
                    </div>
    <?php if($atts['icontype'] != 'disable_icon'): ?>
        <div class="icon_box<?php if( $atts['icontype'] == 'icon_fonts' ): ?> icon_yes<?php endif; ?>"> 
            <?php if( $atts['icontype'] == 'icon_image_enable'): 
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
        <div class="txt_content">
           <?php if(!empty($atts['icon_box_heading'])):?>
                <?php if(!empty($atts['link_box'])): ?>
                    <<?php echo esc_attr($atts['tag_type']); ?> class="title_24 mb_0">
                        <a href="<?php echo esc_url($link); ?>" class="mb_0" <?php echo esc_attr($link_target); ?> <?php echo esc_attr($link_unfollow); ?>>
                            <?php echo wp_kses($atts['icon_box_heading'] , $allowed_tags) ?>
                        </a>
                    </<?php echo esc_attr($atts['tag_type']); ?>>
                <?php else: ?>
                    <<?php echo esc_attr($atts['tag_type']); ?> class="title_no_a_24 mb_0"> 
                        <?php echo wp_kses($atts['icon_box_heading'] , $allowed_tags) ?> 
                    </<?php echo esc_attr($atts['tag_type']); ?>>
                <?php endif; ?>
            <?php endif; ?>
            <?php if(!empty($atts['icon_box_description'])):?>
            <p class="desc_p mt_10">
                <?php echo wp_kses($atts['icon_box_description'] , $allowed_tags) ?>
            </p>
            <?php endif; ?>
            <?php if(!empty($atts['button_text_enable'])): ?>
                <div class="mt_25">
                    <a class="text_btn" href="<?php echo esc_url($link); ?>" <?php echo esc_attr($link_target); ?> <?php echo esc_attr($link_unfollow); ?>>
                        <small><?php echo esc_attr($atts['button_text']); ?></small>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php // icon style two end ?>
<?php // icon style three start ?>
<?php elseif($atts['iconboxstyle'] == 'style_three'): ?> 
    <?php if($atts['icontype'] != 'disable_icon'): ?>
        <div class="icon_box<?php if( $atts['icontype'] == 'icon_fonts' ): ?> icon_yes<?php endif; ?>"> 
            <?php if( $atts['icontype'] == 'icon_image_enable'):
              
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
        <div class="txt_content">
           <?php if(!empty($atts['icon_box_heading'])):?>
                <?php if(!empty($atts['link_box'])): ?>
                    <<?php echo esc_attr($atts['tag_type']); ?> class="title_24 mb_0">
                        <a href="<?php echo esc_url($link); ?>" class="mb_0 color_white" <?php echo esc_attr($link_target); ?> <?php echo esc_attr($link_unfollow); ?>>
                            <?php echo wp_kses($atts['icon_box_heading'] , $allowed_tags) ?>
                        </a>
                    </<?php echo esc_attr($atts['tag_type']); ?>>
                <?php else: ?>
                    <<?php echo esc_attr($atts['tag_type']); ?> class="title_no_a_24 color_white mb_0"> 
                        <?php echo wp_kses($atts['icon_box_heading'] , $allowed_tags) ?> 
                    </<?php echo esc_attr($atts['tag_type']); ?>>
                <?php endif; ?>
            <?php endif; ?>
            <?php if(!empty($atts['icon_box_description'])):?>
            <p class="desc_p mt_10">
                <?php echo wp_kses($atts['icon_box_description'] , $allowed_tags) ?>
            </p>
            <?php endif; ?>
            <?php if(!empty($atts['button_text_enable'])): ?>
                <div class="mt_20">
                    <a class="text_btn" href="<?php echo esc_url($link); ?>" <?php echo esc_attr($link_target); ?> <?php echo esc_attr($link_unfollow); ?>>
                        <small><?php echo esc_attr($atts['button_text']); ?></small>
                    </a>
                </div>
            <?php endif; ?>
        </div>
<?php // icon style three end ?>
<?php // icon style four start ?>
<?php elseif($atts['iconboxstyle'] == 'style_four'): ?>
    <div class="spattern_bg mask_image" 
                    style="mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-1.png' ?>); 
                    -webkit-mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-1.png' ?>);">
                    </div>
  
        <div class="txt_content zin_2 position-relative">
            <div class="d_flex align-items-center<?php if($atts['icontype'] != 'disable_icon'): ?> icon_yes<?php endif; ?>">
            <?php if($atts['icontype'] != 'disable_icon'): ?>
                <div class="icon_box"> 
                    <?php if( $atts['icontype'] == 'icon_image_enable'):
                       
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
            <?php if(!empty($atts['icon_box_heading'])):?>
                <?php if(!empty($atts['link_box'])): ?>
                    <<?php echo esc_attr($atts['tag_type']); ?> class="mb_0">
                        <a href="<?php echo esc_url($link); ?>" class="mb_0 color_white font_special" <?php echo esc_attr($link_target); ?> <?php echo esc_attr($link_unfollow); ?>>
                            <?php echo wp_kses($atts['icon_box_heading'] , $allowed_tags) ?>
                        </a>
                    </<?php echo esc_attr($atts['tag_type']); ?>>
                <?php else: ?>
                    <<?php echo esc_attr($atts['tag_type']); ?> class="font_special color_white mb_0"> 
                        <?php echo wp_kses($atts['icon_box_heading'] , $allowed_tags) ?> 
                    </<?php echo esc_attr($atts['tag_type']); ?>>
                <?php endif; ?>
            <?php endif; ?>
            </div> 
            <?php if(!empty($atts['icon_box_description'])):?>
            <p class="desc_p color_white mt_10">
                <?php echo wp_kses($atts['icon_box_description'] , $allowed_tags) ?>
            </p>
            <?php endif; ?>
            <?php if(!empty($atts['button_text_enable'])): ?>
                <div class="mt_30">
                    <a class="theme_btn" href="<?php echo esc_url($link); ?>" <?php echo esc_attr($link_target); ?> <?php echo esc_attr($link_unfollow); ?>>
                        <?php echo esc_attr($atts['button_text']); ?> <i class="risehand-chevrons-right"></i>
                    </a>
                </div>
            <?php endif; ?>
        </div>
<?php // icon style four end ?>
<?php // icon style five start ?>
<?php elseif($atts['iconboxstyle'] == 'style_five'): ?>
  
    <?php if($atts['icontype'] != 'disable_icon'): ?>
        <div class="icon_box<?php if( $atts['icontype'] == 'icon_fonts' ): ?> icon_yes<?php endif; ?>"> 
            <div class="spattern_bg mask_image trans" 
                    style="mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-1.png' ?>); 
                    -webkit-mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-1.png' ?>);">
                    </div>
            <?php if( $atts['icontype'] == 'icon_image_enable'):
             
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
        <div class="txt_content">
           <?php if(!empty($atts['icon_box_heading'])):?>
                <?php if(!empty($atts['link_box'])): ?>
                    <<?php echo esc_attr($atts['tag_type']); ?> class="title_24  mb_0">
                        <a href="<?php echo esc_url($link); ?>" class="mb_0 pb_5" <?php echo esc_attr($link_target); ?> <?php echo esc_attr($link_unfollow); ?>>
                            <?php echo wp_kses($atts['icon_box_heading'] , $allowed_tags) ?>
                        </a>
                    </<?php echo esc_attr($atts['tag_type']); ?>>
                <?php else: ?>
                    <<?php echo esc_attr($atts['tag_type']); ?> class="title_no_a_24 pb_5 mb_0"> 
                        <?php echo wp_kses($atts['icon_box_heading'] , $allowed_tags) ?> 
                    </<?php echo esc_attr($atts['tag_type']); ?>>
                <?php endif; ?>
            <?php endif; ?>
            <?php if(!empty($atts['icon_box_description'])):?>
            <p class="desc_p mt_10">
                <?php echo wp_kses($atts['icon_box_description'] , $allowed_tags) ?>
            </p>
            <?php endif; ?>
            <?php if(!empty($atts['button_text_enable'])): ?>
                <div class="mt_20">
                    <a class="text_btn" href="<?php echo esc_url($link); ?>" <?php echo esc_attr($link_target); ?> <?php echo esc_attr($link_unfollow); ?>>
                        <small><?php echo esc_attr($atts['button_text']); ?></small>
                    </a>
                </div>
            <?php endif; ?>
        </div>
   
<?php // icon style five end ?>
<?php elseif($atts['iconboxstyle'] == 'style_six'): ?>
<?php // icon style six start ?> 
    <?php if($atts['icontype'] != 'disable_icon'): ?>
        <div class="icon_box<?php if( $atts['icontype'] == 'icon_fonts' ): ?> icon_yes<?php endif; ?>"> 
            <div class="spattern_bg mask_image trans" 
                    style="mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/pattern-circle.png' ?>); 
                    -webkit-mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/pattern-circle.png' ?>);">
                    </div>
            <?php if( $atts['icontype'] == 'icon_image_enable'):
             
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
        <div class="txt_content trans">
           <?php if(!empty($atts['icon_box_heading'])):?>
                <?php if(!empty($atts['link_box'])): ?>
                    <<?php echo esc_attr($atts['tag_type']); ?> class="title_24 mb_0">
                        <a href="<?php echo esc_url($link); ?>" class="mb_0" <?php echo esc_attr($link_target); ?> <?php echo esc_attr($link_unfollow); ?>>
                            <?php echo wp_kses($atts['icon_box_heading'] , $allowed_tags) ?>
                        </a>
                    </<?php echo esc_attr($atts['tag_type']); ?>>
                <?php else: ?>
                    <<?php echo esc_attr($atts['tag_type']); ?> class="title_no_a_24 mb_0"> 
                        <?php echo wp_kses($atts['icon_box_heading'] , $allowed_tags) ?> 
                    </<?php echo esc_attr($atts['tag_type']); ?>>
                <?php endif; ?>
            <?php endif; ?>
            <?php if(!empty($atts['icon_box_description'])):?>
            <p class="desc_p mt_10">
                <?php echo wp_kses($atts['icon_box_description'] , $allowed_tags) ?>
            </p>
            <?php endif; ?>
            <?php if(!empty($atts['button_text_enable'])): ?>
                <div class="mt_25">
                    <a class="theme_btn" href="<?php echo esc_url($link); ?>" <?php echo esc_attr($link_target); ?> <?php echo esc_attr($link_unfollow); ?>>
                      <?php echo esc_attr($atts['button_text']); ?>  <i class="risehand-chevrons-right"></i>
                    </a>
                </div>
            <?php endif; ?>
        </div>
<?php // icon style six end  ?>
<?php elseif($atts['iconboxstyle'] == 'style_seven'): ?>
<?php // icon style one start ?>
    <div class="d_flex">
        <?php if($atts['icontype'] != 'disable_icon'): ?>
        <div class="icon_box<?php if( $atts['icontype'] == 'icon_fonts' ): ?> icon_yes<?php endif; ?>"> 
            <?php if( $atts['icontype'] == 'icon_image_enable'):
               
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
        <div class="txt_content">
           <?php if(!empty($atts['icon_box_heading'])):?>
                <?php if(!empty($atts['link_box'])): ?>
                    <<?php echo esc_attr($atts['tag_type']); ?> class="title_24 mb_0">
                        <a href="<?php echo esc_url($link); ?>" class="pb_5" <?php echo esc_attr($link_target); ?> <?php echo esc_attr($link_unfollow); ?>>
                            <?php echo wp_kses($atts['icon_box_heading'] , $allowed_tags) ?>
                        </a>
                    </<?php echo esc_attr($atts['tag_type']); ?>>
                <?php else: ?>
                    <<?php echo esc_attr($atts['tag_type']); ?> class="title_no_a_24 pb_5"> 
                        <?php echo wp_kses($atts['icon_box_heading'] , $allowed_tags) ?> 
                    </<?php echo esc_attr($atts['tag_type']); ?>>
                <?php endif; ?>
            <?php endif; ?>
            <?php if(!empty($atts['icon_box_description'])):?>
            <p class="desc_p mt_10">
                <?php echo wp_kses($atts['icon_box_description'] , $allowed_tags) ?>
            </p>
            <?php endif; ?>
            <?php if(!empty($atts['button_text_enable'])): ?>
                <div class="mt_20">
                    <a class="text_btn" href="<?php echo esc_url($link); ?>" <?php echo esc_attr($link_target); ?> <?php echo esc_attr($link_unfollow); ?>>
                        <small><?php echo esc_attr($atts['button_text']); ?></small>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php // icon style seven end ?>
<?php // icon style one start ?>
<?php else: ?>
<?php // icon style one start ?>
    <div class="d_flex align-items-center <?php if(!empty($atts['enable_border'])): ?> enable_bors<?php endif; ?>">
        <?php if($atts['icontype'] != 'disable_icon'): ?>
        <div class="icon_box<?php if( $atts['icontype'] == 'icon_fonts' ): ?> icon_yes<?php endif; ?>">
            <div class="spattern_bg mask_image" 
                    style="mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-1.png' ?>); 
                    -webkit-mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-1.png' ?>);">
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
        <div class="txt_content">
           <?php if(!empty($atts['icon_box_heading'])):?>
                <?php if(!empty($atts['link_box'])): ?>
                    <<?php echo esc_attr($atts['tag_type']); ?> class="title_24 mb_0">
                        <a href="<?php echo esc_url($link); ?>" class="mb_5" <?php echo esc_attr($link_target); ?> <?php echo esc_attr($link_unfollow); ?>>
                            <?php echo wp_kses($atts['icon_box_heading'] , $allowed_tags) ?>
                        </a>
                    </<?php echo esc_attr($atts['tag_type']); ?>>
                <?php else: ?>
                    <<?php echo esc_attr($atts['tag_type']); ?> class="title_no_a_24 mb_5">  
                        <?php echo wp_kses($atts['icon_box_heading'] , $allowed_tags) ?> 
                    </<?php echo esc_attr($atts['tag_type']); ?>>
                <?php endif; ?>
            <?php endif; ?>
            <?php if(!empty($atts['icon_box_description'])):?>
            <p class="desc_p mt_10">
                <?php echo wp_kses($atts['icon_box_description'] , $allowed_tags) ?>
            </p>
            <?php endif; ?>
            <?php if(!empty($atts['button_text_enable']) == "1"): ?>
                <div class="mt_20">
                    <a class="text_btn" href="<?php echo esc_url($link); ?>" <?php echo esc_attr($link_target); ?> <?php echo esc_attr($link_unfollow); ?>>
                        <small><?php echo esc_attr($atts['button_text']); ?></small>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>
<?php // icon style one end ?> 
</div> 
</div> 
<?php
return ob_get_clean();
}
