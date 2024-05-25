<?php 
add_action( 'vc_before_init', 'vc_client_logo_vcmap' );
function vc_client_logo_vcmap() {
 vc_map( array(
  "name" => __( "Client Logo V1", "risehand-addons" ),
  "base" => "vc_client_logo_init",
  "class" => "",
  "icon" => "icon-risehand-svg", 
  "category" => __( "Risehand Content", "risehand-addons"),
  "params" => array(  
    array(
        'type' => 'param_group',
        'heading' => esc_html__('Client Logo Content', 'risehand-addons') ,
        'value' => '',
        'param_name' => 'client_logo_repeater',
        'params' => array(
            array(
                'type' => 'attach_image',
                'heading' => esc_html__('Image', 'risehand-addons') ,
                'param_name' => 'brand_image',
            ), 
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Image Width', 'risehand-addons') ,
                'param_name' => 'image_width',
                'description' => esc_html__('you Can set the image height here eg: (100px , 10rem  or 10rem) like this', 'risehand-addons'),
            ),
            array(
                'heading'    => esc_html__( 'URL (Link)', 'risehand-addons' ),
                'type'       => 'vc_link',
                'param_name' => 'brand_link', 
            ),    
        ),
        'group' => esc_html__( 'General', 'risehand-addons' ),
    ),  
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Image Opacity', 'risehand-addons') ,
        'param_name' => 'opacity',
        'group' => esc_html__('General', 'risehand-addons') , 
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Hover Image Opacity', 'risehand-addons') ,
        'param_name' => 'hover_opacity',
        'group' => esc_html__('General', 'risehand-addons') , 
    ), 
    // carouse options 
    array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Item Loop Enable / Disable', 'risehand-addons' ),
        'param_name'  => 'loop_enable', 
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ), 
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
        
    ),
    array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Centered Items Enable / Disable', 'risehand-addons' ),
        'param_name'  => 'centered_enable', 
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ), 
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Duration', 'risehand-addons') ,
        'param_name' => 'duration',
        'value' => '5000',
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('speed', 'risehand-addons') ,
        'param_name' => 'speed',
        'value' => '5000',
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Margin', 'risehand-addons') ,
        'param_name' => 'margin',
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
        'description' => esc_html__('Enter the space numbers like this -> 30 or 40 or 50 ', 'risehand-addons') ,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Items to display in Desktop View', 'risehand-addons') ,
        'param_name' => 'desk_top',
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
        'description' => esc_html__('Enter only the numbers like this -> 3 or 4 or 5 ', 'risehand-addons') ,
        
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Items to display in Tablet', 'risehand-addons') ,
        'param_name' => 'tablet',
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
        'description' => esc_html__('Enter only the numbers like this -> 3 or 4 or 5 ', 'risehand-addons') ,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Items to display in Mobile', 'risehand-addons') ,
        'param_name' => 'mobile',
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
        'description' => esc_html__('Enter only the numbers like this -> 3 or 4 or 5 ', 'risehand-addons') ,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Items to display in Extra Small Mobile', 'risehand-addons') ,
        'param_name' => 'mini_mobile',
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
        'description' => esc_html__('Enter only the numbers like this -> 3 or 4 or 5 ', 'risehand-addons') ,
    ),
    array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Arrow  Enable / Disable', 'risehand-addons' ),
        'param_name'  => 'arrow_enable', 
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ),  
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
    ),
    array(
        'type'       => 'dropdown',
        'heading'    => esc_html__('Arrow Position', 'risehand-addons'),
        'param_name' => 'arrow_post',
        'value'      => array( 
            esc_html__( 'Position One', 'risehand-addons' ) => 'post_default' ,
            esc_html__( 'Position One Left', 'risehand-addons' ) => 'post_default_left' ,
            esc_html__( 'Position One Right', 'risehand-addons' ) => 'post_default_right' ,
            esc_html__( 'Position Two', 'risehand-addons' ) => 'post_two' ,
            esc_html__( 'Position Three', 'risehand-addons' ) => 'post_three' , 
            esc_html__( 'Position Four', 'risehand-addons' ) => 'post_four' ,    
        ),
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
    ), 
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Arrow Move Top', 'risehand-addons') ,
        'param_name' => 'arrow_top',
        'value' => esc_html__('', 'risehand-addons') ,
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
        'description' => esc_html__('Enter the numbers like this eg - 10px or  -10px  or 10rem  or -10rem ', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'arrow_post',
            'value'   => array('post_two' , 'post_three' , 'post_four') ,
        ),
    ) ,
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Arrow Move Left', 'risehand-addons') ,
        'param_name' => 'arrow_left',
        'value' => esc_html__('', 'risehand-addons') ,
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
        'description' => esc_html__('Enter the numbers like this eg - 10px or  -10px  or 10rem  or -10rem ', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'arrow_post',
            'value'   => array('post_two' , 'post_three') ,
        ),
    ) ,
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Arrow Move Right', 'risehand-addons') ,
        'param_name' => 'arrow_right',
        'value' => esc_html__('', 'risehand-addons') ,
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
        'description' => esc_html__('Enter the numbers like this eg - 10px or  -10px  or 10rem  or -10rem ', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'arrow_post',
            'value'   => array('post_two' ,  'post_four') ,
        ),
    ) ,
    array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Dots  Enable / Disable', 'risehand-addons' ),
        'param_name'  => 'dot_enables',  
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ), 
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
    ),
    array(
        'type'       => 'dropdown',
        'heading'    => esc_html__('Pagination Type', 'risehand-addons'),
        'param_name' => 'dot_type',
        'value'      => array( 
            esc_html__( 'Bullets', 'risehand-addons' ) => 'bullets' ,
            esc_html__( 'Progressbar', 'risehand-addons' ) => 'progressbar' ,
            esc_html__( 'Fraction', 'risehand-addons' ) => 'fraction' ,   
        ),
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
    ), 
    array(
        'type'       => 'dropdown',
        'heading'    => esc_html__('Pagination Alignment', 'risehand-addons'),
        'param_name' => 'dot_alignment',
        'value'      => array( 
            esc_html__( 'Text Center', 'risehand-addons' ) => 'center' ,
            esc_html__( 'Text Start', 'risehand-addons' ) => 'left' ,
            esc_html__( 'Text Right', 'risehand-addons' ) => 'right' ,  
        ),
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'dot_type',
            'value'   => array('bullets' , 'fraction') ,
        ),
    ), 
    // crousel options end 
    
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Prev / Next Arrow Color', 'risehand-addons'),
        'param_name' => 'nav1color',
        'group' => esc_html__('Arrow / Dot Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Prev / Next Border Color', 'risehand-addons'),
        'param_name' => 'nav2color',
        'group' => esc_html__('Arrow / Dot Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Prev / Next Background Color', 'risehand-addons'),
        'param_name' => 'nav2colors',
        'group' => esc_html__('Arrow / Dot Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Hover Prev / Next Arrow Color', 'risehand-addons'),
        'param_name' => 'nav1hocolor',
        'group' => esc_html__('Arrow / Dot Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Hover Prev / Next Arrow Bg Color', 'risehand-addons'),
        'param_name' => 'nav1hobgcolor',
        'group' => esc_html__('Arrow / Dot Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Hover Prev / Next Border Color', 'risehand-addons'),
        'param_name' => 'nav2hocolor',
        'group' => esc_html__('Arrow / Dot Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Dot Color', 'risehand-addons'),
        'param_name' => 'nav3color',
        'group' => esc_html__('Arrow / Dot Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Dot Border Color', 'risehand-addons'),
        'param_name' => 'nav4color',
        'group' => esc_html__('Arrow / Dot Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Dot Active Color', 'risehand-addons'),
        'param_name' => 'nav5color',
        'group' => esc_html__('Arrow / Dot Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Dot Active Border Color', 'risehand-addons'),
        'param_name' => 'nav6color',
        'group' => esc_html__('Arrow / Dot Styling', 'risehand-addons') ,
    ),
)));
}

// shortcode

add_shortcode( 'vc_client_logo_init', 'vc_client_logo_v1' );
function vc_client_logo_v1( $atts, $content = null ) { 
$unique_id = uniqid();
$atts = shortcode_atts(
   array(
      'client_logo_style' => 'type_one',
      'client_logo_repeater' => '',
      'loop_enable'  => '' , 
      'duration' => '7000' , 
      'speed' => '1000' ,  
      'margin'  => '30' , 
      'desk_top'  => '4' , 
      'tablet'  => '3' , 
      'mobile'  => '2' ,
      'mini_mobile'  => '1' ,  
      'arrow_enable'  => '' ,  
      'arrow_post'  => 'post_default' ,  
      'dot_enables'  => '' , 
      'dot_type' => 'bullets' ,
      'dot_alignment'  => 'center' ,
      'arrow_top' => '' ,
      'arrow_left' => '' ,
      'arrow_right' => '' ,
      'opacity'  => '0.7' ,
      'hover_opacity' => '1' ,   
        'nav1color' => '',
      'nav2color' => '',
      'nav2colors' => '',
      'nav1hocolor' => '',
      'nav1hobgcolor' => '',
      'nav2hocolor' => '',
      'nav3color' => '',
      'nav4color' => '',
      'nav5color' => '',
      'nav6color' => '',
   ), $atts
);
 
$allowed_tags = wp_kses_allowed_html('post');
$client_logo_repeaters = function_exists( 'vc_param_group_parse_atts' ) ? vc_param_group_parse_atts( $atts['client_logo_repeater'] ) : array();
// Define the inline CSS styles
?>
<?php if(!empty($atts['opacity']) || !empty($atts['hover_opacity'])): ?>
<style type="text/css" data-type="vc_shortcodes-custom">
  .client_logo.unique-id-<?php echo esc_attr($unique_id); ?> .brand_iamge {opacity:<?php echo esc_attr($atts['opacity']); ?>;} 
  .client_logo.unique-id-<?php echo esc_attr($unique_id); ?> .brand_iamge:hover {opacity:<?php echo esc_attr($atts['hover_opacity']); ?>;} 
</style> 
<?php endif; ?>  
<?php 
// End of Define the inline CSS styles
ob_start();
$loop_enable = '';
if($atts['loop_enable'] ==  'yes'):
    $loop_enable = 'true';
else:
    $loop_enable = 'false';
endif;
?>
<style>
     <?php if($atts['arrow_top']): ?>
        .client_logo.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow {
            top:<?php echo esc_attr($atts['arrow_top']); ?>
        }
    <?php endif; ?>
    <?php if($atts['arrow_left']): ?>
        .client_logo.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .prev {
            left:<?php echo esc_attr($atts['arrow_left']); ?>
        }
    <?php endif; ?>
    <?php if($atts['arrow_right']): ?>
        .client_logo.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow  .next {
            right:<?php echo esc_attr($atts['arrow_right']); ?>
        }
    <?php endif; ?>
    <?php if($atts['dot_alignment']): ?>
        .client_logo.unique-id-<?php echo esc_attr($unique_id); ?> .common-dots {
        text-align: <?php echo esc_attr($atts['dot_alignment']); ?>!important;
    }
    <?php endif; ?>
      <?php if($atts['nav1color']): ?>
        .client_logo.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .prev .risehand-chevron-left,
        .client_logo.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .next .risehand-chevron-right {
        color: <?php echo esc_attr($atts['nav1color']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['nav2color']): ?>
        .client_logo.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .prev,
        .client_logo.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .next {
        border-color: <?php echo esc_attr($atts['nav2color']); ?>!important; 
    }
    <?php endif; ?>
    <?php if($atts['nav2colors']): ?>
        .client_logo.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .prev,
        .client_logo.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .next { 
        background: <?php echo esc_attr($atts['nav2colors']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['nav1hocolor']): ?>
        .client_logo.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .prev:hover .risehand-chevron-left,
        .client_logo.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .next:hover .risehand-chevron-right {
        color: <?php echo esc_attr($atts['nav1hocolor']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['nav1hobgcolor']): ?>
        .client_logo.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .prev:hover,
        .client_logo.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .next:hover {
        background: <?php echo esc_attr($atts['nav1hobgcolor']); ?>!important; 
    }
    <?php endif; ?>
    <?php if($atts['nav2hocolor']): ?>
        .client_logo.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .prev:hover,
        .client_logo.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .next:hover { 
        border-color: <?php echo esc_attr($atts['nav2hocolor']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['nav3color']): ?>
        .client_logo.unique-id-<?php echo esc_attr($unique_id); ?> .swiper-pagination-bullet:before {
        background: <?php echo esc_attr($atts['nav3color']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['nav4color']): ?>
        .client_logo.unique-id-<?php echo esc_attr($unique_id); ?> .swiper-pagination-bullet {
        border-color: <?php echo esc_attr($atts['nav4color']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['nav5color']): ?>
        .client_logo.unique-id-<?php echo esc_attr($unique_id); ?> .swiper-pagination-bullet.swiper-pagination-bullet-active:before,
        .client_logo.unique-id-<?php echo esc_attr($unique_id); ?> .swiper-pagination-bullet:hover:before {
        background: <?php echo esc_attr($atts['nav5color']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['nav6color']): ?>
        .client_logo.unique-id-<?php echo esc_attr($unique_id); ?> .swiper-pagination-bullet.swiper-pagination-bullet-active,
        .client_logo.unique-id-<?php echo esc_attr($unique_id); ?> .swiper-pagination-bullet:hover {
        border-color: <?php echo esc_attr($atts['nav6color']); ?>!important;
    }
    <?php endif; ?>
</style>
<section class="client_logo unique-id-<?php echo esc_attr($unique_id); ?>">
    <div class="swiper swiper-container<?php if($atts['dot_enables']): ?> dot_enabled<?php endif; ?> swiper_container" data-swiper='{
    "loop": <?php echo esc_attr($loop_enable); ?>,
    "autoplay": {
        "delay": <?php echo esc_attr($atts['duration']); ?>
    },
    "speed":  <?php echo esc_attr($atts['speed']); ?>,
    "centeredSlides": false, 
    "spaceBetween": <?php echo esc_attr($atts['margin']); ?>,
    "navigation": {
        "nextEl": ".client-next-one",
        "prevEl": ".client-prev-one"
    },  
    "pagination": {
        "el": ".client-pagination", 
    "clickable": true  ,
    "type": "<?php echo esc_attr($atts['dot_type']); ?>"
    },
    "grabCursor": true,  
    "breakpoints": {
        "1200": {
        "slidesPerView": <?php echo esc_attr($atts['desk_top']); ?>
        },
        "1024": {
        "slidesPerView": <?php echo esc_attr($atts['tablet']); ?>
        },
        "768": {
        "slidesPerView": <?php echo esc_attr($atts['mobile']); ?> 
        },
        "576": {
        "slidesPerView": <?php echo esc_attr($atts['mini_mobile']); ?> 
        }
    }
    }'>
        <div class="swiper-wrapper"> 
            <?php if(!empty($client_logo_repeaters)): foreach($client_logo_repeaters as $key =>  $client_logo_repeater): 
                $image  = ! empty( $client_logo_repeater['brand_image'] ) ? $client_logo_repeater['brand_image'] : ''; 
                $image_get = wp_get_attachment_image_src( intval( $image ), 'full' );
                $image_put = $image_get ? $image_get[0] : '';
                $alt_brand_image = get_post_meta($client_logo_repeater['brand_image'], '_wp_attachment_image_alt', true);
                $alt_brand_image = !empty($alt_brand_image) ? $alt_brand_image : 'slider-image-two';
                $link  = '#';
                $link_target  = '';
                $link_unfollow  = '';
                 if (!empty( $client_logo_repeater['brand_link'])) {
                    $link_go = vc_build_link($client_logo_repeater['brand_link']);
                    // Extract the URL
                    $link = $link_go['url'];
                    // Extract the target option
                    $link_target = !empty($link_go['target']) ? ' target="' . esc_attr($link_go['target']) . '"' : '';
                    // Extract the nofollow option
                    $link_unfollow = !empty($link_go['rel']) && $link_go['rel'] === 'nofollow' ? ' rel="nofollow"' : '';
                } 
                $image_width = '';
                $image_width_css  = '';
                if(!empty($client_logo_repeater['image_width'])):
                    $image_width = $client_logo_repeater['image_width'];
                    $image_width = ! empty( $image_width ) ? "width: $image_width!important;" : '';
                    $image_width_css  = "style='$image_width'";    
                endif;  
                ?>
                <div class="swiper-slide"> 
                    <?php if(!empty($client_logo_repeater['brand_link']['url'])): ?>
                        <?php if(!empty($image_put)): ?>
                        <a href="<?php echo esc_url($link); ?>" class="mb_0" <?php echo esc_attr($link_target); ?> <?php echo esc_attr($link_unfollow); ?>>
                            <img src="<?php echo esc_url($image_put); ?>" class="brand_iamge trans img-fluid" alt="<?php echo esc_attr($alt_brand_image); ?>" <?php if(!empty($image_width_css)): echo $image_width_css; endif; ?> />
                        </a>
                        <?php endif; ?>
                    <?php else: ?>
                        <?php if(!empty($image_put)): ?>
                            <img src="<?php echo esc_url($image_put); ?>" class="brand_iamge trans img-fluid" alt="<?php echo esc_attr($alt_brand_image); ?>" <?php if(!empty($image_width_css)): echo $image_width_css; endif; ?> />
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
                <?php endforeach;?>
            <?php endif;?> 
        </div>
    </div>
    <?php if(!empty($atts['arrow_enable']) == "yes"): ?>
        <div class="arrow_client common_arrow <?php echo esc_attr($atts['arrow_post']); ?>"> 
            <div class="client-prev-one prev trans"><i class="risehand-chevron-left"></i></div>
            <div class="client-next-one next trans"><i class="risehand-chevron-right"></i></div>
        </div>
        <?php endif; ?>   
        <?php if(!empty($atts['dot_enables']) == "yes"): ?>
            <div class="client-pagination common-dots"></div>
        <?php endif; ?>  
</section>
<?php
return ob_get_clean();
}



