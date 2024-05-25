<?php
add_action( 'vc_before_init', 'vc_portfolio_carousel_post_v1_vcmap' );
function vc_portfolio_carousel_post_v1_vcmap() {
 vc_map( array(
  "name" => __( "Portfolio Infinite Scroll / Carousel v1", "risehand-addons" ),
  "base" => "portfolio_carousel_post_v1_init",
  "class" => "",
  "icon" => "icon-risehand-svg", 
  "category" => __( "Risehand Post", "risehand-addons"),
  "params" => array( 
    array(
        'type'       => 'dropdown',
        'heading'    => esc_html__('Portfolio Type', 'risehand-addons'),
        'param_name' => 'portfolio_type',
        'value'      => array( 
            esc_html__( 'Infinite Scroll', 'risehand-addons' ) => 'infinite_scroll' ,
            esc_html__( 'Carousel', 'risehand-addons' ) => 'carousel_type' ,
        ),
        'default' => 'infinite_scroll',
        'group' => esc_html__('General', 'risehand-addons') , 
    ),
    array(
        'type'       => 'dropdown',
        'heading'    => esc_html__('Portfolio Style  ', 'risehand-addons'),
        'param_name' => 'portfolio_styles',
        'value'      => array( 
            esc_html__( 'Style One', 'risehand-addons' ) => 'style_one' ,
            esc_html__( 'Style Two', 'risehand-addons' ) => 'style_two' ,
            esc_html__( 'Style Three', 'risehand-addons' ) => 'style_three' , 
            esc_html__( 'Style Four', 'risehand-addons' ) => 'style_four' , 
            esc_html__( 'Style Five', 'risehand-addons' ) => 'style_five' ,  
        ),
        'group' => esc_html__('General', 'risehand-addons') ,
    ), 
    // grid and masonry start 
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Post Count', 'risehand-addons'),
            'param_name' => 'n_post_count',
            'value' => esc_html__('4', 'risehand-addons'),
            'group' => esc_html__('General', 'risehand-addons'),
        ), 
     array(
        'type'       => 'dropdown',
        'heading'    => esc_html__('Order By', 'risehand-addons'),
        'param_name' => 'n_query_orderby',
        'value'      => array( 
            esc_html__( 'Date', 'risehand-addons' ) => 'date' ,
            esc_html__( 'Title', 'risehand-addons' ) => 'Title' ,
            esc_html__( 'Menu Order', 'risehand-addons' ) => 'menu_order' ,
            esc_html__( 'Random', 'risehand-addons' ) => 'rand' , 
        ),
        'default' => 'date',
        'group' => esc_html__('General', 'risehand-addons') ,
      ), 
      array(
        'type'       => 'dropdown',
        'heading'    => esc_html__('Order', 'risehand-addons'),
        'param_name' => 'n_query_order',
        'value'      => array( 
            esc_html__( 'DESC', 'risehand-addons' ) => 'DESC' ,
            esc_html__( 'ASC', 'risehand-addons' ) => 'ASC' , 
        ),
        'default' => 'DESC',
        'group' => esc_html__('General', 'risehand-addons') ,
      ), 
      array(
        'type'       => 'dropdown',
        'heading'    => esc_html__('Category', 'risehand-addons'),
        'param_name' => 'n_query_category',
        'value'      => risehand_get_portfolio_categories(),
        'group' => esc_html__('General', 'risehand-addons') ,
      ), 
      array(
        'type' => 'textfield',
        'heading' => esc_html__('Enter the Post Id to dispay that Post Only', 'risehand-addons') ,
        'param_name' => 'post_id',
        'value' => esc_html__('', 'risehand-addons') ,
        'group' => esc_html__('General', 'risehand-addons') ,
     ) , 
     array(
        'type' => 'textfield',
        'heading' => esc_html__('Enter the Post Id that do not dispay', 'risehand-addons') ,
        'param_name' => 'post_id_not',
        'value' => esc_html__('', 'risehand-addons') ,
        'group' => esc_html__('General', 'risehand-addons') ,
     ) ,
    // carouse options 

    array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Item Loop Enable / Disable', 'risehand-addons' ),
        'param_name'  => 'loop_enable', 
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ), 
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
        'dependency'  => array( 
            'element' => 'portfolio_type',
            'value'   => 'carousel_type',  
        ),
    ),
    array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Centered Items Enable / Disable', 'risehand-addons' ),
        'param_name'  => 'centered_enable', 
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ), 
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
        'dependency'  => array( 
            'element' => 'portfolio_type',
            'value'   => 'carousel_type',  
        ),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Duration', 'risehand-addons') ,
        'param_name' => 'duration',
        'value' => '5000',
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
        'dependency'  => array( 
            'element' => 'portfolio_type',
            'value'   => 'carousel_type',  
        ),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('speed', 'risehand-addons') ,
        'param_name' => 'speed',
        'value' => '5000',
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
        'dependency'  => array( 
            'element' => 'portfolio_type',
            'value'   => 'carousel_type',  
        ),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Margin', 'risehand-addons') ,
        'param_name' => 'margin',
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
        'description' => esc_html__('Enter the space numbers like this -> 30 or 40 or 50 ', 'risehand-addons') ,
        'dependency'  => array( 
            'element' => 'portfolio_type',
            'value'   => 'carousel_type',  
        ),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Items to display in Desktop View', 'risehand-addons') ,
        'param_name' => 'desk_top',
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
        'description' => esc_html__('Enter only the numbers like this -> 3 or 4 or 5 ', 'risehand-addons') ,
        'dependency'  => array( 
            'element' => 'portfolio_type',
            'value'   => 'carousel_type',  
        ),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Items to display in Tablet', 'risehand-addons') ,
        'param_name' => 'tablet',
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
        'description' => esc_html__('Enter only the numbers like this -> 3 or 4 or 5 ', 'risehand-addons') ,
        'dependency'  => array( 
            'element' => 'portfolio_type',
            'value'   => 'carousel_type',  
        ),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Items to display in Mobile', 'risehand-addons') ,
        'param_name' => 'mobile',
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
        'description' => esc_html__('Enter only the numbers like this -> 3 or 4 or 5 ', 'risehand-addons') ,
        'dependency'  => array( 
            'element' => 'portfolio_type',
            'value'   => 'carousel_type',  
        ),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Items to display in Extra Small Mobile', 'risehand-addons') ,
        'param_name' => 'mini_mobile',
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
        'description' => esc_html__('Enter only the numbers like this -> 3 or 4 or 5 ', 'risehand-addons') ,
        'dependency'  => array( 
            'element' => 'portfolio_type',
            'value'   => 'carousel_type',  
        ),
    ),
    array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Arrow  Enable / Disable', 'risehand-addons' ),
        'param_name'  => 'arrow_enable', 
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ), 
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
        'dependency'  => array( 
            'element' => 'portfolio_type',
            'value'   => 'carousel_type',  
        ),
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
        'dependency'  => array( 
            'element' => 'portfolio_type',
            'value'   => 'carousel_type',  
        ),
    ), 
    array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Dots  Enable / Disable', 'risehand-addons' ),
        'param_name'  => 'dot_enable', 
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ), 
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
        'dependency'  => array( 
            'element' => 'portfolio_type',
            'value'   => 'carousel_type',  
        ),
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
        'dependency'  => array( 
            'element' => 'portfolio_type',
            'value'   => 'carousel_type',  
        ),
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
            'element' => 'dot_type',
            'value'   => array('bullets' , 'fraction') ,
        ),
    ), 
    // crousel options end 
    //  scroll option
    array(
        'type'       => 'dropdown',
        'heading'    => esc_html__('Scroll Type', 'risehand-addons'),
        'param_name' => 'scroll_con_type',
        'value'      => array( 
            esc_html__( 'Inline View', 'risehand-addons' ) => 'linline' ,
            esc_html__( 'List View', 'risehand-addons' ) => 'list' ,
        ),
        'default' => 'linline',
        'group' => esc_html__('Infinite Scroll', 'risehand-addons') ,  
        'dependency'  => array( 
            'element' => 'portfolio_type',
            'value'   => 'infinite_scroll',  
        ),
    ),
    array(
        'type'       => 'dropdown',
        'heading'    => esc_html__('Scroll Side', 'risehand-addons'),
        'param_name' => 'scroll_side',
        'value'      => array( 
            esc_html__( 'Left To Right', 'risehand-addons' ) => 'ltr' ,
            esc_html__( 'Right To Left', 'risehand-addons' ) => 'rtl' ,
        ),
        'default' => 'ltr',
        'group' => esc_html__('Infinite Scroll', 'risehand-addons') , 
        'dependency'  => array( 
            'element' => 'portfolio_type',
            'value'   => 'infinite_scroll',  
        ),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Scroll Item Margin', 'risehand-addons') ,
        'param_name' => 'in_margin',
        'group' => esc_html__('Infinite Scroll', 'risehand-addons') ,
        'description' => esc_html__('Enter margin like this -> 30 or 40 or 50 ', 'risehand-addons') ,
        'dependency'  => array( 
            'element' => 'portfolio_type',
            'value'   => 'infinite_scroll',  
        ),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Scroll Speed', 'risehand-addons') ,
        'param_name' => 'in_speed',
        'group' => esc_html__('Infinite Scroll', 'risehand-addons') ,
        'description' => esc_html__('Enter the speed like this -> 1 to 10', 'risehand-addons') ,
        'dependency'  => array( 
            'element' => 'portfolio_type',
            'value'   => 'infinite_scroll',  
        ),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Scroll Item Width', 'risehand-addons') ,
        'param_name' => 'item_width',
        'group' => esc_html__('Infinite Scroll', 'risehand-addons') ,
        'description' => esc_html__('Enter width like this -> 400px or 500px or 600px ', 'risehand-addons') ,
        'dependency'  => array( 
            'element' => 'portfolio_type',
            'value'   => 'infinite_scroll',  
        ),
    ),
    // scroll option end
    // styling
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Image Height', 'risehand-addons' ),
        'param_name' => 'iamge_height',
        'group' => esc_html__('Styling', 'risehand-addons') ,
        'description' => esc_html__('Enter height like this -> 400px or 500px or 600px ', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Overlay Color', 'risehand-addons'),
        'param_name' => 'overlay_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
        'dependency'  => array( 
            'element' => 'portfolio_styles',
            'value'   => array('style_one' , 'style_two' , 'style_three' , 'style_four'),  
        ),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Box Background Color', 'risehand-addons'),
        'param_name' => 'box_bg_colors',
        'group' => esc_html__('Styling', 'risehand-addons') ,
        'dependency'  => array( 
            'element' => 'portfolio_styles',
            'value'   => array('style_one' , 'style_two' , 'style_three' , 'style_four'),  
        ),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Overlay Background Color', 'risehand-addons'),
        'param_name' => 'overlay_colors',
        'group' => esc_html__('Styling', 'risehand-addons') ,
        'dependency'  => array( 
            'element' => 'portfolio_styles',
            'value'   => 'style_five',  
        ),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Pattern Background Color', 'risehand-addons'),
        'param_name' => 'pabg_colors',
        'group' => esc_html__('Styling', 'risehand-addons') ,
        'dependency'  => array( 
            'element' => 'portfolio_styles',
            'value'   => 'style_five',  
        ),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Title Color', 'risehand-addons'),
        'param_name' => 'titles_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Category Color', 'risehand-addons'),
        'param_name' => 'cat_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => __('Link Color', 'risehand-addons'),
        'param_name' => 'link_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Link Border Color', 'risehand-addons'),
        'param_name' => 'linkbr_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Link Background Color', 'risehand-addons'),
        'param_name' => 'linkbg_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Hover Link Color', 'risehand-addons'),
        'param_name' => 'hlink_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Hover Link Border Color', 'risehand-addons'),
        'param_name' => 'hlinkbr_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Hover Link Background Color', 'risehand-addons'),
        'param_name' => 'hlinkbg_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),

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

add_shortcode( 'portfolio_carousel_post_v1_init', 'vc_portfolio_caro_post_v1' );
function vc_portfolio_caro_post_v1( $atts, $content = null ) { 
    $unique_id = uniqid();
    $atts = shortcode_atts(
    array( 
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
        'iamge_height' => '',
        'overlay_color' => '',
        'box_bg_colors' => '',
        'overlay_colors' => '',
        'pabg_colors' => '',
        'titles_color' => '', 
        'cat_color' => '', 
        'link_color' => '',
        'linkbr_color' => '',
        'linkbg_color' => '',
        'hlink_color' => '',
        'hlinkbr_color' => '',
        'hlinkbg_color' => '',
        'portfolio_type' => 'infinite_scroll', 
        'portfolio_styles' => 'style_one',    
        'n_post_count' => '4',
        'post_id' => '',
        'post_id_not' => '',
        'n_query_orderby' => 'date',
        'n_query_order' => 'DESC',
        'n_query_category' => '', 
        'loop_enable'  => '' , 
        'duration' => '7000' , 
        'speed' => '1000' , 
        'centered_enable'  => '' ,  
        'margin'  => '' , 
        'desk_top'  => '4' , 
        'tablet'  => '3' , 
        'mobile'  => '2' ,
        'mini_mobile'  => '1' ,  
        'arrow_enable'  => '' ,  
        'arrow_post'  => 'post_default' ,  
        'dot_enable'  => '' , 
        'scroll_con_type'   => 'linline' , 
        'scroll_side'   => 'ltr' , 
        'in_margin'   => '30' , 
        'in_speed'   => '8' ,
        'item_width' => '' , 
        'dot_type' => 'bullets' ,  
        'dot_alignment'  => 'text-center' ,  
   ), $atts
);
$allowed_tags = wp_kses_allowed_html('post');
ob_start();
?>  
<style type="text/css" data-type="vc_shortcodes-custom">
    <?php if(!empty($atts['item_width'])): ?> 
    .portfolio_caro_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .scroll_cbox { min-width:<?php echo esc_attr($atts['item_width']); ?>}
    <?php endif; ?> 
    <?php if($atts['iamge_height']): ?> 
    .portfolio_caro_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .image-box img {
        height: <?php echo esc_attr($atts['iamge_height']); ?>!important;
    }
    <?php endif; ?> 
    <?php if($atts['overlay_color']): ?> 
    .portfolio_caro_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .image-box .img_link::before {
        background: <?php echo esc_attr($atts['overlay_color']); ?>!important;
    }
    <?php endif; ?> 
    <?php if($atts['box_bg_colors'] && $atts['portfolio_styles'] != "style_five"): ?> 
    .portfolio_caro_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .content_box_outer .content_box_in {
        background: <?php echo esc_attr($atts['box_bg_colors']); ?>!important;
    }
    <?php endif; ?> 
    <?php if($atts['overlay_colors']): ?> 
    .portfolio_caro_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .portfolio-style_5:after {
        background: linear-gradient(0deg, <?php echo esc_attr($atts['overlay_colors']); ?> 6%, rgba(0, 0, 0, 0) 100%);
    }
    <?php endif; ?> 
    <?php if($atts['pabg_colors']): ?> 
    .portfolio_caro_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .portfolio-style_5 .content_box_outer .spattern_bg {
        background: <?php echo esc_attr($atts['pabg_colors']); ?>!important;
    }
    <?php endif; ?> 
    <?php if($atts['titles_color']): ?> 
    .portfolio_caro_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .content_box_in .title_24 a {
        color: <?php echo esc_attr($atts['titles_color']); ?>!important;
    }
    <?php endif; ?> 
    <?php if($atts['cat_color']): ?> 
    .portfolio_caro_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .content_box_in p a,
    .portfolio_caro_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .content_box_in p {
        color: <?php echo esc_attr($atts['cat_color']); ?>!important;
    }
    <?php endif; ?> 
    <?php if($atts['link_color']): ?>  
    .portfolio_caro_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .content_box_in .p_rd_more,
    .portfolio_caro_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .content_box_outer .p_rd_more {
        color: <?php echo esc_attr($atts['link_color']); ?>!important; 
    }
    <?php endif; ?> 
    <?php if($atts['linkbr_color']): ?>  
    .portfolio_caro_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .content_box_in .p_rd_more,
    .portfolio_caro_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .content_box_outer .p_rd_more {
        border-color: <?php echo esc_attr($atts['linkbr_color']); ?>!important;
    }
    <?php endif; ?> 
    <?php if($atts['linkbg_color']): ?>  
    .portfolio_caro_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .content_box_in .p_rd_more,
    .portfolio_caro_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .content_box_outer .p_rd_more {
        background: <?php echo esc_attr($atts['linkbg_color']); ?>!important;
    }
    <?php endif; ?> 
    <?php if($atts['hlink_color']): ?>  
    .portfolio_caro_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .content_box_in .p_rd_more:hover,
    .portfolio_caro_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .content_box_outer .p_rd_more:hover {
        color: <?php echo esc_attr($atts['hlink_color']); ?>!important; 
    }
    <?php endif; ?> 
    <?php if($atts['hlinkbr_color']): ?>  
    .portfolio_caro_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .content_box_in .p_rd_more:hover,
    .portfolio_caro_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .content_box_outer .p_rd_more:hover {
        border-color: <?php echo esc_attr($atts['hlinkbr_color']); ?>!important;
    }
    <?php endif; ?> 
    <?php if($atts['hlinkbg_color']): ?>  
    .portfolio_caro_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .content_box_in .p_rd_more:hover,
    .portfolio_caro_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .content_box_outer .p_rd_more:hover {
        background: <?php echo esc_attr($atts['hlinkbg_color']); ?>!important;
    }
    <?php endif; ?> 
    <?php if($atts['nav1color']): ?>
        .portfolio_caro_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .prev .risehand-chevron-left,
        .portfolio_caro_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .next .risehand-chevron-right {
        color: <?php echo esc_attr($atts['nav1color']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['nav2color']): ?>
        .portfolio_caro_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .prev,
        .portfolio_caro_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .next {
        border-color: <?php echo esc_attr($atts['nav2color']); ?>!important; 
    }
    <?php endif; ?>
    <?php if($atts['nav2colors']): ?>
        .portfolio_caro_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .prev,
        .portfolio_caro_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .next { 
        background: <?php echo esc_attr($atts['nav2colors']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['nav1hocolor']): ?>
        .portfolio_caro_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .prev:hover .risehand-chevron-left,
        .portfolio_caro_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .next:hover .risehand-chevron-right {
        color: <?php echo esc_attr($atts['nav1hocolor']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['nav1hobgcolor']): ?>
        .portfolio_caro_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .prev:hover,
        .portfolio_caro_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .next:hover {
        background: <?php echo esc_attr($atts['nav1hobgcolor']); ?>!important; 
    }
    <?php endif; ?>
    <?php if($atts['nav2hocolor']): ?>
        .portfolio_caro_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .prev:hover,
        .portfolio_caro_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .next:hover { 
        border-color: <?php echo esc_attr($atts['nav2hocolor']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['nav3color']): ?>
        .portfolio_caro_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .swiper-pagination-bullet:before {
        background: <?php echo esc_attr($atts['nav3color']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['nav4color']): ?>
        .portfolio_caro_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .swiper-pagination-bullet {
        border-color: <?php echo esc_attr($atts['nav4color']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['nav5color']): ?>
        .portfolio_caro_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .swiper-pagination-bullet.swiper-pagination-bullet-active:before,
        .portfolio_caro_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .swiper-pagination-bullet:hover:before {
        background: <?php echo esc_attr($atts['nav5color']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['nav6color']): ?>
        .portfolio_caro_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .swiper-pagination-bullet.swiper-pagination-bullet-active,
        .portfolio_caro_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .swiper-pagination-bullet:hover {
        border-color: <?php echo esc_attr($atts['nav6color']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['dot_alignment']): ?>
        .portfolio_caro_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .common-dots {
        text-align: <?php echo esc_attr($atts['dot_alignment']); ?>!important;
    }
    <?php endif; ?>
</style> 

<section class="portfolio_caro_post_section unique-id-<?php echo esc_attr($unique_id); ?>">
<?php if($atts['portfolio_type'] == 'carousel_type'): 
    $loop_enable = '';
    if($atts['loop_enable'] ==  'yes'):
        $loop_enable = 'true';
    else:
        $loop_enable = 'false';
    endif;
    $centered_enable = '';
    if($atts['centered_enable'] ==  'yes'):
        $centered_enable = 'true';
    else:
        $centered_enable = 'false';
    endif;
    ?> 
    <div class="portfolio_carousel  position-relative  arrows_<?php echo esc_attr($atts['arrow_post']); ?>">
    <div class="swiper swiper-container<?php if($atts['dot_enable'] == "yes"): ?> dot_enabled<?php endif; ?> swiper_container" data-swiper='{
  "loop": <?php echo esc_attr($loop_enable); ?>,
  "autoplay": {
    "delay": <?php echo esc_attr($atts['duration']); ?>
  },
  "speed":  <?php echo esc_attr($atts['speed']); ?>,
  "centeredSlides": <?php echo esc_attr($centered_enable); ?>, 
  "spaceBetween": <?php echo esc_attr($atts['margin']); ?>,
  "navigation": {
    "nextEl": ".port-next-one",
    "prevEl": ".port-prev-one"
  },
  "pagination": {
    "el": ".port-pagination", 
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
    <?php  
        $post_count  = ! empty( $atts['n_post_count'] ) ? $atts['n_post_count'] : '';
        $query_orderby  = ! empty( $atts['n_query_orderby'] ) ? $atts['n_query_orderby'] : '';
        $query_order  = ! empty( $atts['n_query_order'] ) ? $atts['n_query_order'] : '';
        if(get_query_var('paged')){ 
            $paged = get_query_var( 'paged' ); 
        } elseif( get_query_var( 'page' ) ) { 
            $paged = get_query_var( 'page' ); 
        } else { 
            $paged = 1; 
        }
        $post_in = '';
        if(!empty($atts['post_id'])){
             $post_in = explode(',', $atts['post_id']);
        }
        $post_id_not = '';
        if(!empty($atts['post_id_not'])){
             $post_id_not = explode(',', $atts['post_id_not']);
        }
         $args = array(
            'post_type' => 'portfolio',
            'ignore_sticky_posts' => true, 
            'paged'             => $paged,
            'posts_per_page' => $post_count,
            'orderby'        =>  $query_orderby,
            'order'          =>  $query_order,
            'post__in'         => $post_in,  
            'post__not_in'         => $post_id_not,  
        );
        if( $atts['n_query_category'] ) $args['portfolio_category'] = $atts['n_query_category'];
        $portfolio_grid_query = new \WP_Query( $args ); 
        ?>
        <?php while ($portfolio_grid_query->have_posts()) : ?>
        <?php $portfolio_grid_query->the_post(); ?>
        <?php global $post;  
        // portfolio card ?>
        <?php if($atts['portfolio_styles'] == 'style_two'): ?>
            <?php if(has_post_thumbnail()): ?>
                <div class="swiper-slide">
                    <?php do_action('get_risehand_portfolio_card_2'); ?>
                </div>
            <?php endif; ?>
        <?php elseif($atts['portfolio_styles'] == 'style_three'): ?>
            <?php if(has_post_thumbnail()): ?>
                <div class="swiper-slide">
                    <?php do_action('get_risehand_portfolio_card_3'); ?>
                </div>
            <?php endif; ?>
        <?php elseif($atts['portfolio_styles'] == 'style_four'): ?>
            <?php if(has_post_thumbnail()): ?>
                <div class="swiper-slide">
                    <?php do_action('get_risehand_portfolio_card_4'); ?>
                </div>
            <?php endif; ?>
        <?php elseif($atts['portfolio_styles'] == 'style_five'): ?>
            <?php if(has_post_thumbnail()): ?>
                <div class="swiper-slide">
                    <?php do_action('get_risehand_portfolio_card_5'); ?>
                </div>
            <?php endif; ?>
        <?php else: ?> 
            <?php if(has_post_thumbnail()): ?>
                <div class="swiper-slide">
                    <?php do_action('get_risehand_portfolio_card_1'); ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
        <?php // portfolio card end ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>    
</div>  

</div>  
<?php if(!empty($atts['arrow_enable']) == "yes"): ?>
<div class="arrow_portfolio common_arrow <?php echo esc_attr($atts['arrow_post']); ?>"> 
    <div class="port-prev-one prev trans"><i class="risehand-chevron-left"></i></div>
    <div class="port-next-one next trans"><i class="risehand-chevron-right"></i></div>
</div>
<?php endif; ?>  
 
<?php if(!empty($atts['dot_enable']) == "yes"): ?>
<div class="port-pagination common-dots"></div>
<?php endif; ?>  
</div>  
<?php // end of protfolio type  ?>
<?php else: ?>    
<?php // end of protfolio type  ?>
<div class="scroll_carousel_box side_<?php echo esc_attr($atts['scroll_side']); ?>" data-speed="<?php echo esc_attr($atts['in_speed']); ?>" data-margin="<?php echo esc_attr($atts['in_margin']); ?>" data-dir="<?php echo esc_attr($atts['scroll_side']); ?>">
    <?php  
        $post_count  = ! empty( $atts['n_post_count'] ) ? $atts['n_post_count'] : '';
        $query_orderby  = ! empty( $atts['n_query_orderby'] ) ? $atts['n_query_orderby'] : '';
        $query_order  = ! empty( $atts['n_query_order'] ) ? $atts['n_query_order'] : '';
        if(get_query_var('paged')){ 
            $paged = get_query_var( 'paged' ); 
        }elseif( get_query_var( 'page' ) ) { 
            $paged = get_query_var( 'page' ); 
        }else { 
            $paged = 1; 
        }
        $post_in = '';
        if(!empty($atts['post_id'])){
            $post_in = explode(',', $atts['post_id']);
       }
       $post_id_not = '';
       if(!empty($atts['post_id_not'])){
            $post_id_not = explode(',', $atts['post_id_not']);
       }
        $args = array(
            'post_type' => 'portfolio',
            'ignore_sticky_posts' => true, 
            'paged'             => $paged,
            'posts_per_page' => $post_count,
            'orderby'        =>  $query_orderby,
            'order'          =>  $query_order,
            'post__in'         => $post_in,  
            'post__not_in'         => $post_id_not,  
        );
        if( $atts['n_query_category'] ) $args['portfolio_category'] = $atts['n_query_category'];
        $portfolio_grid_query = new \WP_Query( $args ); 
        ?>
        <?php while ($portfolio_grid_query->have_posts()) : ?>
        <?php $portfolio_grid_query->the_post(); ?>
        <?php global $post;  
        // portfolio card ?> 
        <?php if($atts['portfolio_styles'] == 'style_two'): ?>
            <?php if(has_post_thumbnail()): ?>
                <div class="scroll_cbox  scroll_con_type_<?php echo esc_attr($atts['scroll_con_type']); ?>"> 
                <?php do_action('get_risehand_portfolio_card_2'); ?>
                </div>
            <?php endif; ?>
        <?php elseif($atts['portfolio_styles'] == 'style_three'): ?>
            <?php if(has_post_thumbnail()): ?> 
                <div class="scroll_cbox  scroll_con_type_<?php echo esc_attr($atts['scroll_con_type']); ?>"> 
                <?php do_action('get_risehand_portfolio_card_3'); ?> 
                </div>
            <?php endif; ?>
        <?php elseif($atts['portfolio_styles'] == 'style_four'): ?>
            <?php if(has_post_thumbnail()): ?> 
                <div class="scroll_cbox  scroll_con_type_<?php echo esc_attr($atts['scroll_con_type']); ?>"> 
                <?php do_action('get_risehand_portfolio_card_4'); ?> 
                </div>
            <?php endif; ?>
      
        <?php else: ?> 
            <?php if(has_post_thumbnail()): ?> 
                <div class="scroll_cbox  scroll_con_type_<?php echo esc_attr($atts['scroll_con_type']); ?>"> 
                <?php do_action('get_risehand_portfolio_card_1'); ?> 
                </div>
            <?php endif; ?> 
        <?php endif; ?> 
  
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>   
</div> 
 
<?php endif; ?>            
</section>

<?php
return ob_get_clean();
}