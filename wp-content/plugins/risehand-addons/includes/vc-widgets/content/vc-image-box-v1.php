<?php 
add_action( 'vc_before_init', 'vc_image_box_v1_vcmap' );
function vc_image_box_v1_vcmap() {
 vc_map( array(
  "name" => __( "Image Box V1", "risehand-addons" ),
  "base" => "vc_image_box_v1_init",
  "class" => "",
  "icon" => "icon-risehand-svg", 
  "category" => __( "Risehand Content", "risehand-addons"),
  "params" => array(
    array(
    'type'       => 'dropdown',
    'heading'    => esc_html__( 'Image Box Styles', 'risehand-addons' ),
    'param_name' => 'image_box_styles',
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
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Image Scroll Enable / Disable', 'risehand-addons' ),
        'param_name'  => 'image_scroll',
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ), 
        'group' => esc_html__('General', 'risehand-addons') ,
    ), 
    array(
        'type' => 'attach_image',
        'heading' => esc_html__('Image', 'risehand-addons') ,
        'param_name' => 'image_zero',
        'value' => '',
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'image_box_styles',
            'value'   => array('style_one' , 'style_two' , 'style_three' , 'style_four' , 'style_five' , 'style_six' , 'style_seven'),
          ),
     ),
     //  text for style two ,  style four , style five
     array(
        'type' => 'textfield',
        'heading' => esc_html__('Text', 'risehand-addons') ,
        'param_name' => 'text_content',
        'value' =>esc_html__('25 Years Of  Experience', 'risehand-addons') , 
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'image_box_styles',
            'value'   => array('style_two', 'style_four' , 'style_five' , 'style_six' , 'style_seven'),
        ),
    ),
    //  text for style two ,  style four , style five
    //  Icon for style Three
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
            'element' => 'image_box_styles',
            'value'   => 'style_three',
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
    //  Icon for style Three
     array(
        'type' => 'attach_image',
        'heading' => esc_html__('Image', 'risehand-addons') ,
        'param_name' => 'image_one',
        'value' => '',
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'image_box_styles',
            'value'   => 'style_one',
        ),
     ),
     array(
        'type' => 'attach_image',
        'heading' => esc_html__('Logo Image', 'risehand-addons') ,
        'param_name' => 'image_two',
        'value' => '',
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'image_box_styles',
            'value'   => array('style_one'),
        ),
     ),
     array(
        'type' => 'attach_image',
        'heading' => esc_html__('Experience Image', 'risehand-addons') ,
        'param_name' => 'image_three',
        'value' => '',
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'image_box_styles',
            'value'   => array('style_one'),
        ),
     ), 
      
     array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Video Enable / Disable', 'risehand-addons' ),
        'param_name'  => 'video_link_enable',
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ),
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'image_box_styles',
            'value'   => array('style_five' , 'style_seven'),
        ),
    ), 
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Video Link', 'risehand-addons') ,
        'param_name' => 'video_link',
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'video_link_enable',
            'value'   => 'yes',
        ), 
    ),  
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Video Text', 'risehand-addons') ,
        'param_name' => 'video_text',
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'video_link_enable',
            'value'   => 'yes',
        ), 
    ),  
    // style
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Pattern Background Color', 'risehand-addons'),
        'param_name' => 'styleone',
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'image_box_styles',
            'value'   => array('style_one', 'style_four', 'style_six', 'style_seven'), 
        ),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Experience Move Top', 'risehand-addons'),
        'param_name' => 'styletwo', 
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'image_box_styles',
            'value'   => array('style_one'), 
        ), 
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Experience Move Left', 'risehand-addons'),
        'param_name' => 'stylethree', 
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'image_box_styles',
            'value'   => array('style_one'), 
        ),  
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Text Color', 'risehand-addons'),
        'param_name' => 'stylefour',
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'image_box_styles',
            'value'   => array('style_two', 'style_four', 'style_five', 'style_six', 'style_seven'),
        ),  
    ),
   
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Border Color', 'risehand-addons'),
        'param_name' => 'stylesix', 
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'image_box_styles',
            'value'   => array('style_two'),
        ), 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Quote Color', 'risehand-addons'),
        'param_name' => 'stylesixteen', 
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'image_box_styles',
            'value'   => array('style_five'),
        ), 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Video Icon Color', 'risehand-addons'),
        'param_name' => 'stylethirteen', 
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'image_box_styles',
            'value'   => array('style_five', 'style_seven'),
        ), 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Video Icon Background Color', 'risehand-addons'),
        'param_name' => 'styleseventeen', 
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'image_box_styles',
            'value'   => array('style_five', 'style_seven'),
        ), 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Video Icon Background 2 Color', 'risehand-addons'),
        'param_name' => 'styleeighteen',
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'image_box_styles',
            'value'   => array('style_seven'),
        ),  
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Video Icon Border Color', 'risehand-addons'),
        'param_name' => 'stylefourteen',
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'image_box_styles',
            'value'   => array('style_five'),
        ),  
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Video Text Color', 'risehand-addons'),
        'param_name' => 'styletwelve',  
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'image_box_styles',
            'value'   => array('style_five' , 'style_seven'),
        ), 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Background Color', 'risehand-addons'),
        'param_name' => 'styleseven', 
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'image_box_styles',
            'value'   => array('style_four' , 'style_five'),
        ), 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Border Color', 'risehand-addons'),
        'param_name' => 'styleeight', 
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'image_box_styles',
            'value'   => array('style_three'),
        ), 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Icon Color', 'risehand-addons'),
        'param_name' => 'stylenine', 
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'image_box_styles',
            'value'   => array('style_three'),
        ), 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Icon Backgorund Color', 'risehand-addons'),
        'param_name' => 'styleten', 
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'image_box_styles',
            'value'   => array('style_three'),
        ), 
    ),
    array(
        'type' => 'textfield',
        'heading' => __('Image height', 'risehand-addons'),
        'param_name' => 'styleeleven', 
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'image_box_styles',
            'value'   => array('style_five'),
        ), 
    ),

)));
}

// shortcode

add_shortcode( 'vc_image_box_v1_init', 'vc_image_box_v1' );
function vc_image_box_v1( $atts, $content = null ) { 
    $unique_id = uniqid();
 $atts = shortcode_atts(
   array(
      'image_box_styles' => 'style_one', 
      'image_zero' => '',
      'image_one' => '',
      'image_two' => '',
      'text_content' => 'Best charity foundation' , 
      'image_three' => '',
      'icontype' => 'custom',
      'icon_images' => '',
      'icon_fontawesome' => '',
      'icon_fonts' => 'risehand-013-quotation', 
      'image_four' => '',
      'image_three' => '',  
      'video_link_enable' => '',
      'video_link' => '', 
      'video_text'  => 'Play Video', 
      'styleone' => '',
        'styletwo' => '',
        'stylethree' => '',
        'stylefour' => '',
        'stylefive' => '',
        'stylesix' => '',
        'stylesixteen' => '',
        'stylethirteen' => '',
        'styleseventeen' => '',
        'styleeighteen' => '',
        'stylefourteen' => '',
        'stylefivteen' => '',
        'styletwelve' => '',
        'styleseven' => '',
        'styleeight' => '',
        'stylenine' => '',
        'styleten' => '',
        'styleeleven' => '',
        'image_scroll'  => '',
   ), $atts
);
 
$allowed_tags = wp_kses_allowed_html('post');  
ob_start();
$image_zero = wp_get_attachment_image_src( intval( $atts['image_zero'] ), 'full' );
$image_zeros  = $image_zero ? $image_zero[0] : '';
$image_zero_alt = get_post_meta($atts['image_zero'], '_wp_attachment_image_alt', true);
$image_zero_alt = !empty($image_zero_alt) ? $image_zero_alt : 'risehand-addons';

$image_one = wp_get_attachment_image_src( intval( $atts['image_one'] ), 'full' );
$image_ones  = $image_one ? $image_one[0] : '';  
$image_ones_alt = get_post_meta($atts['image_one'], '_wp_attachment_image_alt', true);
$image_ones_alt = !empty($image_ones_alt) ? $image_ones_alt : 'risehand-addons';

$image_two = wp_get_attachment_image_src( intval( $atts['image_two'] ), 'full' );
$image_twos  = $image_two ? $image_two[0] : '';
$image_twos_alt = get_post_meta($atts['image_two'], '_wp_attachment_image_alt', true);
$image_twos_alt = !empty($image_twos_alt) ? $image_twos_alt : 'risehand-addons';
 
$image_three = wp_get_attachment_image_src( intval( $atts['image_three'] ), 'full' );
$image_threes           = $image_three ? $image_three[0] : '';
$image_threes_alt = get_post_meta($atts['image_three'], '_wp_attachment_image_alt', true);
$image_threes_alt = !empty($image_threes_alt) ? $image_threes_alt : 'risehand-addons';
?>
<style> 
        <?php if($atts['styleone']): ?>
        .imagev1-id-<?php echo esc_attr($unique_id); ?> .image_box_one::before,
        .imagev1-id-<?php echo esc_attr($unique_id); ?> .image_box_four .spattern_bg,
        .imagev1-id-<?php echo esc_attr($unique_id); ?> .image_box_six .content_box .spattern_bg,
        .imagev1-id-<?php echo esc_attr($unique_id); ?> .image_box_seven .content_box .spattern_bg {
            background: <?php echo esc_attr($atts['styleone']); ?>;
        }
        <?php endif; ?>
        <?php if($atts['styletwo']): ?>
        .imagev1-id-<?php echo esc_attr($unique_id); ?> .image_box_one .image.four {
            bottom: <?php echo esc_attr($atts['styletwo']); ?>;
        }
        <?php endif; ?>
        <?php if($atts['stylethree']): ?>
        .imagev1-id-<?php echo esc_attr($unique_id); ?> .image_box_one .image.four {
            left: <?php echo esc_attr($atts['stylethree']); ?>;
        }
        <?php endif; ?>
        <?php if($atts['stylefour']): ?>
        .imagev1-id-<?php echo esc_attr($unique_id); ?> .image_box_two .vertical-text,
        .imagev1-id-<?php echo esc_attr($unique_id); ?> .image_box_four .font_special,
        .imagev1-id-<?php echo esc_attr($unique_id); ?> .image_box_five .content_box .font_special .title_no_a_30,
        .imagev1-id-<?php echo esc_attr($unique_id); ?> .image_box_six .content_box .font_special,
        .imagev1-id-<?php echo esc_attr($unique_id); ?> .image_box_seven .content_box .font_special {
            color: <?php echo esc_attr($atts['stylefour']); ?>;
        }
        <?php endif; ?>
        <?php if($atts['stylefive']): ?> 
        .imagev1-id-<?php echo esc_attr($unique_id); ?> .image_box_two .vertical-text,
        .imagev1-id-<?php echo esc_attr($unique_id); ?> .image_box_four .font_special,
        .imagev1-id-<?php echo esc_attr($unique_id); ?> .image_box_five .content_box .font_special .title_no_a_30,
        .imagev1-id-<?php echo esc_attr($unique_id); ?> .image_box_six .content_box .font_special,
        .imagev1-id-<?php echo esc_attr($unique_id); ?> .image_box_seven .content_box .font_special {
            <?php echo esc_attr($atts['stylefive']); ?>;
        }
        <?php endif; ?>
        <?php if($atts['stylesix']): ?> 
        .imagev1-id-<?php echo esc_attr($unique_id); ?> .image_box_two .vertical-text {
            border-color: <?php echo esc_attr($atts['stylesix']); ?>;
        }
        <?php endif; ?>
        <?php if($atts['stylesixteen']): ?> 
        .imagev1-id-<?php echo esc_attr($unique_id); ?> .image_box_five .content_box .font_special .quote {
            color: <?php echo esc_attr($atts['stylesixteen']); ?>;
        }
        <?php endif; ?>
        <?php if($atts['stylethirteen']): ?>  
        .imagev1-id-<?php echo esc_attr($unique_id); ?> .image_box_five .content_box .font_special .video_box_null a i,
        .imagev1-id-<?php echo esc_attr($unique_id); ?> .image_box_seven .content_box .video_box_null a i:before {
            color: <?php echo esc_attr($atts['stylethirteen']); ?>;
            z-index: 2;
        }
        <?php endif; ?>
        <?php if($atts['styleseventeen']): ?> 
        .imagev1-id-<?php echo esc_attr($unique_id); ?> .image_box_seven .content_box .video_box_null a i:before {
            background: <?php echo esc_attr($atts['styleseventeen']); ?>;
        }
        <?php endif; ?>
        <?php if($atts['styleeighteen']): ?> 
        .imagev1-id-<?php echo esc_attr($unique_id); ?> .image_box_seven .content_box .video_box_null a i::after {
            background: <?php echo esc_attr($atts['styleeighteen']); ?>;
        }
        <?php endif; ?>
        <?php if($atts['stylefourteen']): ?>  
        .imagev1-id-<?php echo esc_attr($unique_id); ?> .image_box_five .content_box .font_special .video_box_null a i {
            border-color: <?php echo esc_attr($atts['stylefourteen']); ?>;
        }
        <?php endif; ?>
        <?php if($atts['stylefivteen']): ?>  
        .imagev1-id-<?php echo esc_attr($unique_id); ?> .image_box_five .content_box .font_special .video_box_null a,
        .imagev1-id-<?php echo esc_attr($unique_id); ?> .image_box_seven .content_box .video_box_null a {
            <?php echo esc_attr($atts['stylefivteen']); ?>;
        }
        <?php endif; ?>
        <?php if($atts['styletwelve']): ?>   
        .imagev1-id-<?php echo esc_attr($unique_id); ?> .image_box_five .content_box .font_special .video_box_null a,
        .imagev1-id-<?php echo esc_attr($unique_id); ?> .image_box_seven .content_box .video_box_null a {
            color: <?php echo esc_attr($atts['styletwelve']); ?>;
        }
        <?php endif; ?>
        <?php if($atts['styleseven']): ?>  
        .imagev1-id-<?php echo esc_attr($unique_id); ?> .image_box_four .font_special,
        .imagev1-id-<?php echo esc_attr($unique_id); ?> .image_box_five .content_box .font_special {
            background: <?php echo esc_attr($atts['styleseven']); ?>;
        } 
        <?php endif; ?>
        <?php if($atts['styleeight']): ?>  
        .imagev1-id-<?php echo esc_attr($unique_id); ?> .image_box_three::before {
            border-color: <?php echo esc_attr($atts['styleeight']); ?>;
        }
        <?php endif; ?>
        <?php if($atts['stylenine']): ?>   
        .imagev1-id-<?php echo esc_attr($unique_id); ?> .image_box_three .icon i,
        .imagev1-id-<?php echo esc_attr($unique_id); ?> .image_box_three .icon span {
            color: <?php echo esc_attr($atts['stylenine']); ?>;
        } 
        .imagev1-id-<?php echo esc_attr($unique_id); ?> .image_box_three .icon svg path {
            fill: <?php echo esc_attr($atts['stylenine']); ?>;
        }
        <?php endif; ?>
        <?php if($atts['styleten']): ?>  
        .imagev1-id-<?php echo esc_attr($unique_id); ?> .image_box_three .icon {
            background: <?php echo esc_attr($atts['styleten']); ?>;
        }
        <?php endif; ?>
        <?php if($atts['styleeleven']): ?>  
        .imagev1-id-<?php echo esc_attr($unique_id); ?> .image_box_five .image {
            height: <?php echo esc_attr($atts['styleeleven']); ?>;
        }
        <?php endif; ?> 
</style>
<div class="imagev1-id-<?php echo esc_attr($unique_id); ?>">
<?php
      
if($atts['image_box_styles'] == 'style_two'): ?>
        <?php // style  ?>
            <div class="image_box_two d_flex">
                <?php if(!empty($atts['text_content'])): ?>
                    <div class="vertical-text font_special">
                        <?php echo wp_kses($atts['text_content'] , $allowed_tags);?>
                    </div>
                <?php endif; ?> 
                <?php if(!empty($image_zeros)): ?>
                    <div class="image img_obj_fit_center <?php if(!empty($atts['image_scroll']) == "yes"): ?> imagereveal  <?php endif; ?>">
                        <img src="<?php echo esc_url($image_zeros); ?>" class="img" alt="<?php echo esc_attr($image_zero_alt); ?>" />
                    </div>
                <?php endif; ?> 
            </div>
            <?php // style  ?>
        <?php elseif($atts['image_box_styles'] == 'style_three'):?>
            <?php // style  ?>
            <div class="image_box_three">
                <?php if(!empty($image_zeros)): ?>
                    <div class="image img_obj_fit_center <?php if(!empty($atts['image_scroll']) == "yes"): ?> imagereveal  <?php endif; ?> mask_image" style="mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-3.png' ?>); 
                    -webkit-mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-3.png' ?>);">
                        <img src="<?php echo esc_url($image_zeros); ?>" class="main-img" alt="<?php echo esc_attr($image_zero_alt); ?>" />
                    </div>
                    <?php if( $atts['icontype'] == 'icon_image_enable'):
                  $icon_image = wp_get_attachment_image_src( intval(  $atts['icon_images'] ), 'full' );
                  $icon_images = $icon_image ? $icon_image[0] : ''; 
                  $icon_images_alt = get_post_meta($atts['icon_images'], '_wp_attachment_image_alt', true);
                  $icon_images_alt = !empty($icon_images_alt) ? $icon_images_alt : 'icon-image-one';
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
                <?php endif; ?> 
            </div>
        <?php // style  ?>
        <?php elseif($atts['image_box_styles'] == 'style_four'):?>
        <?php // style  ?>
        <div class="image_box_four">
                <div class="spattern_bg mask_image" 
                            style="mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/mask-2-1.png' ?>); 
                            -webkit-mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/mask-2-1.png' ?>);">
                            </div>
               
                <?php if(!empty($image_zeros)): ?>
                    <div class="image img_obj_fit_center <?php if(!empty($atts['image_scroll']) == "yes"): ?> imagereveal  <?php endif; ?> mask_image" style="mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-4.png' ?>); 
                    -webkit-mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-4.png' ?>);">
                        <img src="<?php echo esc_url($image_zeros); ?>" class="img" alt="<?php echo esc_attr($image_zero_alt); ?>" />
                    </div>
                <?php endif; ?> 
                <?php if(!empty($atts['text_content'])): ?>
                    <div class="font_special">
                        <?php echo wp_kses($atts['text_content'] , $allowed_tags);?>
                    </div>
                <?php endif; ?> 
            </div>
        <?php // style  ?>
        <?php elseif($atts['image_box_styles'] == 'style_five'):?>
        <?php // style  ?>
        <div class="image_box_five"> 
                <?php if(!empty($image_zeros)): ?>
                    <div class="image img_obj_fit_center <?php if(!empty($atts['image_scroll']) == "yes"): ?> imagereveal  <?php endif; ?> mask_image" style="mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-5.png' ?>); 
                    -webkit-mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-5.png' ?>);">
                        <img src="<?php echo esc_url($image_zeros); ?>" class="img" alt="<?php echo esc_attr($image_zero_alt); ?>" />
                    </div>
                <?php endif; ?> 
                <?php if(!empty($atts['text_content'])): ?>
                    <div class="content_box"> 
                    <div class="font_special">
                        <i class="risehand-019-right-quote quote"></i>
                        <div class="title_no_a_30"><?php echo wp_kses($atts['text_content'] , $allowed_tags);?></div>
                        <?php if($atts['video_link_enable'] == true): ?>
                            <div class="video_box_null title_16">
                                <a href="<?php echo esc_attr($atts['video_link']); ?>" class="lightbox-image d_flex">
                                    <i class="risehand-play d_flex"></i> 
                                    <?php echo wp_kses($atts['video_text'] , $allowed_tags);?>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                    </div>
                <?php endif; ?> 
            </div>
        <?php // style  ?>  
        <?php elseif($atts['image_box_styles'] == 'style_six'):?>
        <?php // style  ?>
            <div class="image_box_six"> 
                <?php if(!empty($image_zeros)): ?>
                    <div class="image img_obj_fit_center <?php if(!empty($atts['image_scroll']) == "yes"): ?> imagereveal  <?php endif; ?>">
                        <img src="<?php echo esc_url($image_zeros); ?>" class="img" alt="<?php echo esc_attr($image_zero_alt); ?>" />
                    </div>
                <?php endif; ?> 
                <?php if(!empty($atts['text_content'])): ?>
                    <div class="content_box"> 
                    <div class="spattern_bg trans mask_image" 
                    style="mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-3.png' ?>); 
                    -webkit-mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-3.png' ?>);">
                </div> 
                <div class="d_flex">
                        <div class="font_special">
                            <?php echo wp_kses($atts['text_content'] , $allowed_tags);?> 
                        </div>
                    </div>
                    </div>
                <?php endif; ?> 
            </div>
        <?php // style  ?>  
        <?php elseif($atts['image_box_styles'] == 'style_seven'):?>
        <?php // style  ?>
            <div class="image_box_seven"> 
                <?php if(!empty($image_zeros)): ?>
                    <div class="image img_obj_fit_center <?php if(!empty($atts['image_scroll']) == "yes"): ?> imagereveal  <?php endif; ?>">
                        <img src="<?php echo esc_url($image_zeros); ?>" class="img" alt="<?php echo esc_attr($image_zero_alt); ?>" />
                    </div>
                <?php endif; ?> 
    
                <div class="content_box"> 
                    <div class="spattern_bg trans mask_image" 
                    style="mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/pattern-circle-2.png' ?>); 
                    -webkit-mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/pattern-circle-2.png' ?>);">
                    </div> 
                    <div class="content">
                        <?php if($atts['video_link_enable'] == true): ?>
                            <div class="video_box_null title_16"> 
                                <a href="<?php echo esc_attr($atts['video_link']); ?>" class="lightbox-image  d_flex">
                                    <i class="risehand-play-fill d_flex"></i> 
                                    <?php echo wp_kses($atts['video_text'] , $allowed_tags);?>
                                </a>
                            </div>
                        <?php endif; ?>
                        <?php if(!empty($atts['text_content'])): ?>
                            <div class="font_special">
                                <?php echo wp_kses($atts['text_content'] , $allowed_tags);?> 
                            </div>
                        <?php endif; ?> 
                    </div>
                </div>
             
            </div>
        <?php // style  ?>
        <?php else:?>
        <?php // style  ?>
            <div class="image_box_one d_flex">
                <?php if(!empty($image_zeros)): ?>
                    <div class="image one">
                        <img src="<?php echo esc_url($image_zeros); ?>" class="img" alt="<?php echo esc_attr($image_zero_alt); ?>" />
                    </div>
                <?php endif; ?>
                <?php if(!empty($image_ones)): ?>
                    <div class="image two">
                        <img src="<?php echo esc_url($image_ones); ?>" class="img" alt="<?php echo esc_attr($image_ones_alt); ?>" />
                    </div>
                <?php endif; ?>
                <?php if(!empty($image_twos)): ?>
                    <div class="image three">
                        <img src="<?php echo esc_url($image_twos); ?>" class="img" alt="<?php echo esc_attr($image_twos_alt); ?>" />
                    </div>
                <?php endif; ?>
                <?php if(!empty($image_threes)): ?>
                    <div class="image four">
                        <img src="<?php echo esc_url($image_threes); ?>" class="img" alt="<?php echo esc_attr($image_threes_alt); ?>" />
                    </div>
                <?php endif; ?>
            </div>
            <?php // style  ?>
        <?php endif;?> 
        </div>
<?php
return ob_get_clean();
}



