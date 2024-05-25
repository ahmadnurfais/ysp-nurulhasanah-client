<?php
add_action( 'vc_before_init', 'vc_slider_builder_vcmap' );
function vc_slider_builder_vcmap() {
 vc_map( array(
  "name" => __( "Slider Builder", "risehand-addons" ),
  "base" => "vc_slider_builder_init",
  "class" => "",
  "icon" => "icon-risehand-svg", 
  "category" => __( "Risehand Slider", "risehand-addons"),
  "params" => array( 
    
    array(
        'type' => 'param_group',
        'heading' => esc_html__('Slider  Content', 'risehand-addons') ,
        'param_name' => 'slider_repeater',
        'params' => array(
            array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Choose Slider', 'risehand-addons' ),
				'value' => risehand_common_query_two('Sliders'), 
				'param_name' => 'slider_get', 
				'description' => esc_html__( 'Get Slider from slider post', 'risehand-addons' ),
			),   
        ),
        'group' => esc_html__('Slider Content', 'risehand-addons') , 
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
        'param_name'  => 'arrows_enable', 
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
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Dots  Enable / Disable', 'risehand-addons' ),
        'param_name'  => 'dots_enable', 
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ), 
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
         
    ),
    array(
        'type'       => 'dropdown',
        'heading'    => esc_html__('Pagination Type', 'risehand-addons'),
        'param_name' => 'dots_type',
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
            esc_html__( 'Text Center', 'risehand-addons' ) => 'text-center' ,
            esc_html__( 'Text Start', 'risehand-addons' ) => 'text-start' ,
            esc_html__( 'Text Right', 'risehand-addons' ) => 'text-end' ,   
        ),
 
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'dots_type',
            'value'   => array('bullets' , 'fraction') ,
        ),
    ), 
    // crousel options end 
)));
}

// shortcode
 
add_shortcode( 'vc_slider_builder_init', 'vc_slider_builder' );
function vc_slider_builder( $atts, $content = null) { 
$unique_id = uniqid();
$atts = shortcode_atts(
   array( 
        'slider_repeater' => '', 
        'loop_enable'  => '' , 
        'duration' => '7000' , 
        'speed' => '1000' ,  
        'margin'  => '30' , 
        'desk_top'  => '1' , 
        'tablet'  => '1' , 
        'mobile'  => '1' ,
        'mini_mobile'  => '1' ,  
        'arrows_enable'  => '' ,  
        'arrow_post'  => 'post_default' ,  
        'dots_enable'  => '' , 
        'scroll_con_type'   => 'linline' , 
        'scroll_side'   => 'ltr' , 
        'in_margin'   => '30' , 
        'in_speed'   => '8' ,
        'item_width' => '' , 
        'dots_type' => 'bullets' , 
         'dot_alignment' => 'text-center' , 
   ), $atts
);
$allowed_tags = wp_kses_allowed_html('post');
$loop_enable = '';
if($atts['loop_enable'] ==  true):
    $loop_enable = 'true';
else:
    $loop_enable = 'false';
endif; 
echo '
<style>
    .sldier_custom .swiper-wrapper { 
        width: 100%;
    } 
    .sldier_custom  .swiper-wrapper .wp-post{
        width: 100%;
    }
</style>';
  // Get slider repeaters
  $slider_repeaters = function_exists( 'vc_param_group_parse_atts' ) ? vc_param_group_parse_atts( $atts['slider_repeater'] ) : array();

ob_start();
 // Define the inline CSS styles
?>
 <style type="text/css" data-type="vc_shortcodes-custom">
 </style> 
<?php 
// slider repeater
?>
 
<section class="sldier_custom unique-id-<?php echo esc_attr($unique_id); ?>">
<div class="swiper swiper-container<?php if($atts['dots_enable'] == "yes"): ?> dots_enabled<?php endif; ?> swiper_container" data-swiper='{
  "loop": <?php echo esc_attr($loop_enable); ?>,
  "autoplay": {
    "delay": <?php echo esc_attr($atts['duration']); ?>
  },
  "speed":  <?php echo esc_attr($atts['speed']); ?>, 
  "spaceBetween": <?php echo esc_attr($atts['margin']); ?>,
  "navigation": {
    "nextEl": ".port-next-one",
    "prevEl": ".port-prev-one"
  },
  "pagination": {
    "el": ".port-pagination", 
    "clickable": true  ,
    "type": "<?php echo esc_attr($atts['dots_type']); ?>"
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
                    <?php if(!empty($slider_repeaters)): 
                        foreach($slider_repeaters as $key =>  $slider_repeater): ?> 
                        <div class="swiper-slide">
                            <?php
                         
                                    echo do_shortcode(get_the_content(null, false, $slider_repeater['slider_get']));
                                     
                            ?>
                       
                        </div>
                        <?php endforeach; ?>
                    <?php endif;?> 
                </div>
            </div>
            <?php if($atts['dots_enable'] == "yes" && $atts['dots_type'] == "progressbar"): ?>
            <div class="<?php echo esc_attr($atts['dot_alignment']) ?>">
                <div class="port-pagination common-progress"></div>
            </div>
        <?php endif; ?>  
        <?php if($atts['arrows_enable'] == "yes"): ?>
            <div class="arrow_portfolio common_arrow <?php echo esc_attr($atts['arrow_post']); ?>"> 
                <div class="port-prev-one prev trans"><i class="risehand-chevron-left"></i></div>
                <div class="port-next-one next trans"><i class="risehand-chevron-right"></i></div>
            </div>
        <?php endif; ?>  
        <?php if($atts['dots_enable'] == "yes" && $atts['dots_type'] == "bullets"): ?>
            <div class="<?php echo esc_attr($atts['dot_alignment']) ?>">
                <div class="port-pagination common-dots"></div>
            </div>
        <?php endif; ?>  
        <?php if($atts['dots_enable'] == "yes" && $atts['dots_type'] == "fraction"): ?>
            <div class="<?php echo esc_attr($atts['dot_alignment']) ?>">
                <div class="port-pagination common-fraction"></div>
            </div>
        <?php endif; ?> 
        </section> 
 
 
<?php
return ob_get_clean();
}