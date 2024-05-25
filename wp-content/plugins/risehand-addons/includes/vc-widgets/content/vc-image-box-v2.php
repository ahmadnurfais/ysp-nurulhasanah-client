<?php 
add_action( 'vc_before_init', 'vc_image_box_v2_vcmap' );
function vc_image_box_v2_vcmap() {
 vc_map( array(
  "name" => __( "Image Box V2", "risehand-addons" ),
  "base" => "vc_image_box_v2_init",
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
            'element' => 'image_box_styles',
            'value'   => array('style_one' , 'style_two' , 'style_three' , 'style_four'),
          ),
    ), 
    array(
        'type' => 'attach_image',
        'heading' => esc_html__('Image', 'risehand-addons') ,
        'param_name' => 'image_one',
        'value' => '',
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'image_box_styles',
            'value'   => array('style_two' , 'style_three' , 'style_four'),
        ),
     ),
     array(
        'type' => 'attach_image',
        'heading' => esc_html__('Image', 'risehand-addons') ,
        'param_name' => 'image_two',
        'value' => '',
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'image_box_styles',
            'value'   => array('style_four'),
        ),
     ),
    
     array(
        'type' => 'textfield',
        'heading' => esc_html__('Pattern Move Top', 'risehand-addons') ,
        'param_name' => 'patter_move',
        'value' => esc_html__('10px', 'risehand-addons') ,
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'image_box_styles',
            'value'   => 'style_one',
        ),
    ), 
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Pattern Move Left', 'risehand-addons') ,
        'param_name' => 'patter_move_left',
        'value' => esc_html__('-10px', 'risehand-addons') ,
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'image_box_styles',
            'value'   => 'style_one',
        ),
    ), 
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Pattern Width', 'risehand-addons') ,
        'param_name' => 'patter_height',
        'value' => esc_html__('500px', 'risehand-addons') ,
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'image_box_styles',
            'value'   => 'style_one',
        ),
    ), 
     array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Image Fit Enable / Disable', 'risehand-addons' ),
        'param_name'  => 'img_fit',
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ), 
        'group' => esc_html__('General', 'risehand-addons') ,
    ),
    array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Image Scroll Enable / Disable', 'risehand-addons' ),
        'param_name'  => 'image_scroll',
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ), 
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'img_fit',
            'value'   => 'yes',
        ),
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Pattern Color', 'risehand-addons') ,
        'param_name' => 'pattern_color', 
        'group' => esc_html__('General', 'risehand-addons' ) ,
        'dependency'  => array(
            'element' => 'image_box_styles',
            'value'   => array('style_one' , 'style_two'  , 'style_four'),
        ),
    ),  
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Image Height', 'risehand-addons'),
        'param_name' => 'img_height',  
        'group' => esc_html__('General', 'risehand-addons' ) ,
        'description' => esc_html__('Enter the image height like this eg -> 500px or 10rem   ', 'risehand-addons') ,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Image 2 Height', 'risehand-addons'),
        'param_name' => 'img_height_two',
        'group' => esc_html__('General', 'risehand-addons' ) , 
        'dependency'  => array(
            'element' => 'image_box_styles',
            'value'   => array('style_two' , 'style_three' , 'style_four'),
        ),
        'description' => esc_html__('Enter the image height like this eg -> 500px or 10rem   ', 'risehand-addons') ,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Image 3 Height', 'risehand-addons'),
        'param_name' => 'img_height_three',
        'group' => esc_html__('General', 'risehand-addons' ) , 
        'dependency'  => array(
            'element' => 'image_box_styles',
            'value'   => array('style_four'),
        ),
        'description' => esc_html__('Enter the image height like this eg -> 500px or 10rem   ', 'risehand-addons') ,
    ),
)));
}

// shortcode

add_shortcode( 'vc_image_box_v2_init', 'vc_image_box_v2' );
function vc_image_box_v2( $atts, $content = null ) { 
$unique_id = uniqid();
 $atts = shortcode_atts(
   array(
      'image_box_styles' => 'style_one', 
      'image_zero' => '',
      'image_one' => '',
      'image_two' => '',
      'text_content' => 'Best charity foundation' , 
      'icontype' => 'custom',
      'icon_images' => '',
      'icon_fontawesome' => '',
      'icon_fonts' => 'risehand-food', 
      'video_link_enable' => '',
      'video_link' => '', 
      'video_text'  => 'Play Video',  
      'pattern_color'  => '',  
      'patter_move' => '',
      'patter_move_left' => '',
      'patter_height' => '',
      'img_fit' => '', 
      'img_height' => '',
      'img_height_two' => '',
      'img_height_three' => '',
      'image_scroll'  => '',
   ), $atts
);
 
$allowed_tags = wp_kses_allowed_html('post'); 
 
$image_zero = wp_get_attachment_image_src( intval( $atts['image_zero'] ), 'full' );
$image_zeros  = $image_zero ? $image_zero[0] : '';
$image_zeros_alt = get_post_meta($atts['image_zero'], '_wp_attachment_image_alt', true);
$image_zeros_alt = !empty($image_zeros_alt) ? $image_zeros_alt : 'risehand-addons';

$image_one = wp_get_attachment_image_src( intval( $atts['image_one'] ), 'full' );
$image_ones  = $image_one ? $image_one[0] : '';  
$image_ones_alt = get_post_meta($atts['image_one'], '_wp_attachment_image_alt', true);
$image_ones_alt = !empty($image_ones_alt) ? $image_ones_alt : 'risehand-addons';
 
$image_two = wp_get_attachment_image_src( intval( $atts['image_two'] ), 'full' );
$image_twos  = $image_two ? $image_two[0] : '';
$image_twos_alt = get_post_meta($atts['image_two'], '_wp_attachment_image_alt', true);
$image_twos_alt = !empty($image_twos_alt) ? $image_twos_alt : 'risehand-addons';
ob_start();
?>
<style type="text/css" data-type="vc_shortcodes-custom"> 
<?php if($atts['patter_move']): ?>
    .image_box_v2_one.image2-id-<?php echo esc_attr($unique_id); ?> .spattern_bg {top:<?php echo esc_attr($atts['patter_move']); ?>!important;} 
<?php endif; ?>
<?php if($atts['patter_move_left']): ?>
    .image_box_v2_one.image2-id-<?php echo esc_attr($unique_id); ?> .spattern_bg {left:<?php echo esc_attr($atts['patter_move_left']); ?>!important;} 
<?php endif; ?>
<?php if($atts['patter_height']): ?>
    .image_box_v2_one.image2-id-<?php echo esc_attr($unique_id); ?> .spattern_bg {height:<?php echo esc_attr($atts['patter_height']); ?>!important;} 
<?php endif; ?>
<?php if($atts['pattern_color']): ?>
    .image_box_v2_one.image2-id-<?php echo esc_attr($unique_id); ?> .spattern_bg , 
    .image_box_v2_two.image2-id-<?php echo esc_attr($unique_id); ?> .spattern_bg ,
    .image_box_v2_four.image2-id-<?php echo esc_attr($unique_id); ?> .spattern_bg {
        background:<?php echo esc_attr($atts['pattern_color']); ?>!important;
    } 
<?php endif; ?>
<?php if($atts['img_height']): ?>
    .image_box_v2_one.image2-id-<?php echo esc_attr($unique_id); ?>  img , .image_box_v2_three.image2-id-<?php echo esc_attr($unique_id); ?> .image.one img, .image_box_v2_two.image2-id-<?php echo esc_attr($unique_id); ?> .image.one img , .image_box_v2_four.image2-id-<?php echo esc_attr($unique_id); ?> .image.one img {height:<?php echo esc_attr($atts['img_height']); ?>!important;} 
<?php endif; ?>
<?php if($atts['img_height_two']): ?>
 .image_box_v2_three.image2-id-<?php echo esc_attr($unique_id); ?> .image.two img,
 .image_box_v2_two.image2-id-<?php echo esc_attr($unique_id); ?> .image.two img  ,
 .image_box_v2_four.image2-id-<?php echo esc_attr($unique_id); ?> .image.three img{
        height: <?php echo esc_attr($atts['img_height_two']); ?> !important;
}
<?php endif; ?>
<?php if($atts['img_height_three']): ?>
    .image_box_v2_four.image2-id-<?php echo esc_attr($unique_id); ?> .image.two img {
        height: <?php echo esc_attr($atts['img_height_three']); ?> !important;
    }
<?php endif; ?>
</style> 
 
        <?php if($atts['image_box_styles'] == 'style_two'): ?>
            <?php // style  ?>
            <div class="image_box_v2_two image2-id-<?php echo esc_attr($unique_id); ?>">
                <div class="spattern_bg trans mask_image" 
                    style="mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-3.png' ?>); 
                    -webkit-mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-3.png' ?>);">
                </div> 
                <?php if(!empty($image_zeros)): ?>
                    <div class="image<?php if($atts['img_fit'] == "yes"): ?><?php if($atts['image_scroll'] == "yes"): ?> imagereveal<?php endif; ?> img_obj_fit_center<?php endif; ?> one">
                        <img src="<?php echo esc_url($image_zeros); ?>" class="img" alt="<?php echo esc_attr($image_zeros_alt); ?>" />
                    </div>
                <?php endif; ?> 
                <?php if(!empty($image_ones)): ?>
                    <div class="image<?php if($atts['img_fit'] == "yes"): ?><?php if($atts['image_scroll'] == "yes"): ?> imagereveal<?php endif; ?> img_obj_fit_center<?php endif; ?> two">
                        <img src="<?php echo esc_url($image_ones); ?>" class="img" alt="<?php echo esc_attr($image_ones_alt); ?>" />
                    </div>
                <?php endif; ?> 
            </div>
        <?php // style  ?>
        <?php elseif($atts['image_box_styles'] == 'style_three'):?>
        <?php // style  ?>
        <div class="image_box_v2_three image2-id-<?php echo esc_attr($unique_id); ?>"> 
                <?php if(!empty($image_zeros)): ?>
                    <div class="image<?php if($atts['img_fit'] == "yes"): ?><?php if($atts['image_scroll'] == "yes"): ?> imagereveal<?php endif; ?> img_obj_fit_center<?php endif; ?> one">
                        <img src="<?php echo esc_url($image_zeros); ?>" class="img" alt="<?php echo esc_attr($image_zeros_alt); ?>" />
                    </div>
                <?php endif; ?> 
                <?php if(!empty($image_ones)): ?>
                    <div class="image<?php if($atts['img_fit'] == "yes"): ?><?php if($atts['image_scroll'] == "yes"): ?> imagereveal<?php endif; ?> img_obj_fit_center<?php endif; ?> two">
                        <img src="<?php echo esc_url($image_ones); ?>" class="img" alt="<?php echo esc_attr($image_ones_alt); ?>" />
                    </div>
                <?php endif; ?> 
            </div>
        <?php // style  ?>
        <?php elseif($atts['image_box_styles'] == 'style_four'):?>
        <?php // style  ?>
        <div class="image_box_v2_four image2-id-<?php echo esc_attr($unique_id); ?>"> 
                <div class="spattern_bg trans mask_image" 
                    style="mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-3.png' ?>); 
                    -webkit-mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-3.png' ?>);">
                </div> 
                <?php if(!empty($image_zeros)): ?>
                    <div class="image<?php if($atts['img_fit'] == "yes"): ?><?php if($atts['image_scroll'] == "yes"): ?> imagereveal<?php endif; ?> img_obj_fit_center<?php endif; ?> one">
                        <img src="<?php echo esc_url($image_zeros); ?>" class="img" alt="<?php echo esc_attr($image_zeros_alt); ?>" />
                    </div>
                <?php endif; ?> 
                <?php if(!empty($image_ones)): ?>
                    <div class="image<?php if($atts['img_fit'] == "yes"): ?><?php if($atts['image_scroll'] == "yes"): ?> imagereveal<?php endif; ?> img_obj_fit_center<?php endif; ?> two">
                        <img src="<?php echo esc_url($image_ones); ?>" class="img" alt="<?php echo esc_attr($image_ones_alt); ?>" />
                    </div>
                <?php endif; ?> 
                <?php if(!empty($image_twos)): ?>
                    <div class="image<?php if($atts['img_fit'] == "yes"): ?><?php if($atts['image_scroll'] == "yes"): ?> imagereveal<?php endif; ?> img_obj_fit_center<?php endif; ?> three">
                        <img src="<?php echo esc_url($image_twos); ?>" class="img" alt="<?php echo esc_attr($image_twos_alt); ?>" />
                    </div>
                <?php endif; ?> 
            </div>
        <?php // style  ?>
        <?php elseif($atts['image_box_styles'] == 'style_five'):?>
        <?php // style  ?>
      
        <?php // style  ?>
        <?php else:?>
            <?php // style  ?>
            <div class="image_box_v2_one image2-id-<?php echo esc_attr($unique_id); ?>">
            <div class="spattern_bg trans mask_image" 
                style="mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-3.png' ?>); 
                -webkit-mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-3.png' ?>);">
            </div> 
                <?php if(!empty($image_zeros)): ?>
                    <div class="image<?php if($atts['img_fit'] == "yes"): ?><?php if($atts['image_scroll'] == "yes"): ?> imagereveal<?php endif; ?> img_obj_fit_center<?php endif; ?> one">
                        <img src="<?php echo esc_url($image_zeros); ?>" class="img" alt="<?php echo esc_attr($image_zeros_alt); ?>" />
                    </div>
                <?php endif; ?> 
            </div>
            <?php // style  ?>
        <?php endif;?> 
 
<?php
return ob_get_clean();
}



