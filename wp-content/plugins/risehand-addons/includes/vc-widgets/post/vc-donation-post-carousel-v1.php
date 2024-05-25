<?php
add_action( 'vc_before_init', 'vc_give_forms_carousel_v1_vcmap' );
function vc_give_forms_carousel_v1_vcmap() {
 vc_map( array(
  "name" => __( "Donation Simple Post Caousel  v1", "risehand-addons" ),
  "base" => "give_forms_v1_caro_init",
  "class" => "",
  "icon" => "icon-risehand-svg", 
  "category" => __( "Risehand Post", "risehand-addons"),
  "params" => array( 
        array(
            'type'       => 'dropdown',
            'heading'    => esc_html__('Donation Style  ', 'risehand-addons'),
            'param_name' => 'donation_styles',
            'value'      => array( 
                esc_html__( 'Style One', 'risehand-addons' ) => 'style_one' ,
                esc_html__( 'Style One ( List View )', 'risehand-addons' ) => 'style_two' ,
                esc_html__( 'Style Two', 'risehand-addons' ) => 'style_three' ,  
                 
            ),
 
            'group' => esc_html__('General', 'risehand-addons') ,
        ),
        array(
            'type'       => 'dropdown',
            'heading'    => esc_html__('Donation Type', 'risehand-addons'),
            'param_name' => 'donation_type',
            'value'      => array( 
                esc_html__( 'Infinite Scroll', 'risehand-addons' ) => 'infinite_scroll' ,
                esc_html__( 'Carousel', 'risehand-addons' ) => 'carousel_type' ,
            ),
 
            'group' => esc_html__('General', 'risehand-addons') , 
        ),
       
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Post Count', 'risehand-addons'),
            'param_name' => 'n_post_count',
            'value' => esc_html__('4', 'risehand-addons'),
            'group' => esc_html__('General', 'risehand-addons'),
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
        'param_name' => 'query_category',
        'value'      => risehand_get_donation_categories(),
        'group' => esc_html__('General', 'risehand-addons') ,
      ),
 
    // carouse options 

    array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Item Loop Enable / Disable', 'risehand-addons' ),
        'param_name'  => 'loop_enable', 
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ), 
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
        'dependency'  => array( 
            'element' => 'donation_type',
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
            'element' => 'donation_type',
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
            'element' => 'donation_type',
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
            'element' => 'donation_type',
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
            'element' => 'donation_type',
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
            'element' => 'donation_type',
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
            'element' => 'donation_type',
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
            'element' => 'donation_type',
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
            'element' => 'donation_type',
            'value'   => 'carousel_type',  
        ),
    ),
    array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Arrow  Enable / Disable', 'risehand-addons' ),
        'param_name'  => 'arrows_enable', 
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ),  
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
        'dependency'  => array( 
            'element' => 'donation_type',
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
            'element' => 'donation_type',
            'value'   => 'carousel_type',  
        ),
    ), 
    array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Dots  Enable / Disable', 'risehand-addons' ),
        'param_name'  => 'dots_enable', 
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ), 
        'group' => esc_html__('Carousel Option', 'risehand-addons') ,
        'dependency'  => array( 
            'element' => 'donation_type',
            'value'   => 'carousel_type',  
        ),
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
 
        'dependency'  => array( 
            'element' => 'donation_type',
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
            'element' => 'dots_type',
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
            'element' => 'donation_type',
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
            'element' => 'donation_type',
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
            'element' => 'donation_type',
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
            'element' => 'donation_type',
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
            'element' => 'donation_type',
            'value'   => 'infinite_scroll',  
        ),
    ),
       //  styling
       array(
        'type' => 'colorpicker',
        'heading' => __('Background Color', 'risehand-addons'),
        'param_name' => 'bg_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Border Color', 'risehand-addons'),
        'param_name' => 'br_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),  
    array(
        'type' => 'colorpicker',
        'heading' => __('Category Color', 'risehand-addons'),
        'param_name' => 'catcolor_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Category Bg Color', 'risehand-addons'),
        'param_name' => 'catcolobg_color',
        'dependency'  => array(
            'element' => 'donation_styles',
            'value'   => array('style_one', 'style_two'),
        ), 
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Title Color', 'risehand-addons'),
        'param_name' => 'title_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ), 
    
    array(
        'type' => 'colorpicker',
        'heading' => __('Description Color', 'risehand-addons'),
        'param_name' => 'desc_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => __('Progress Bar Box Background Color', 'risehand-addons'),
        'param_name' => 'progress_bar_box_bg_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Progress Bar Background Color', 'risehand-addons'),
        'param_name' => 'progress_bar_bg_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Progress Bar Active Background Color', 'risehand-addons'),
        'param_name' => 'active_progress_bar_bg_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Progress Percentage Color', 'risehand-addons'),
        'param_name' => 'percentage_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Progress Content Color', 'risehand-addons'),
        'param_name' => 'percentage_content_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Progress  Price Color', 'risehand-addons'),
        'param_name' => 'percentage_content_price_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Hover Progress Bar Box Background Color', 'risehand-addons'),
        'param_name' => 'hprogress_bar_box_bg_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Hover Progress Bar Background Color', 'risehand-addons'),
        'param_name' => 'hprogress_bar_bg_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Hover Progress Bar Active Background Color', 'risehand-addons'),
        'param_name' => 'hactive_progress_bar_bg_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Hover Progress Color', 'risehand-addons'),
        'param_name' => 'hpercentage_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Hover Progress Content Color', 'risehand-addons'),
        'param_name' => 'hpercentage_content_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Hover Progress Price Color', 'risehand-addons'),
        'param_name' => 'hpercentage_content_price_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Price Label Color', 'risehand-addons'),
        'param_name' => 'price_label_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Price Color', 'risehand-addons'),
        'param_name' => 'price_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Price Goal Color', 'risehand-addons'),
        'param_name' => 'price_goal_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),

    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Prev / Next Arrow Color', 'risehand-addons'),
        'param_name' => 'nav1color',
        'group' => esc_html__('Arrow / Dot Styling', 'risehand-addons') ,
        'dependency'  => array( 
            'element' => 'donation_type',
            'value'   => 'carousel_type',  
        ),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Prev / Next Border Color', 'risehand-addons'),
        'param_name' => 'nav2color',
        'group' => esc_html__('Arrow / Dot Styling', 'risehand-addons') ,
        'dependency'  => array( 
            'element' => 'donation_type',
            'value'   => 'carousel_type',  
        ),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Prev / Next Background Color', 'risehand-addons'),
        'param_name' => 'nav2colors',
        'group' => esc_html__('Arrow / Dot Styling', 'risehand-addons') ,
        'dependency'  => array( 
            'element' => 'donation_type',
            'value'   => 'carousel_type',  
        ),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Hover Prev / Next Arrow Color', 'risehand-addons'),
        'param_name' => 'nav1hocolor',
        'group' => esc_html__('Arrow / Dot Styling', 'risehand-addons') ,
        'dependency'  => array( 
            'element' => 'donation_type',
            'value'   => 'carousel_type',  
        ),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Hover Prev / Next Arrow Bg Color', 'risehand-addons'),
        'param_name' => 'nav1hobgcolor',
        'group' => esc_html__('Arrow / Dot Styling', 'risehand-addons') ,
        'dependency'  => array( 
            'element' => 'donation_type',
            'value'   => 'carousel_type',  
        ),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Hover Prev / Next Border Color', 'risehand-addons'),
        'param_name' => 'nav2hocolor',
        'group' => esc_html__('Arrow / Dot Styling', 'risehand-addons') ,
        'dependency'  => array( 
            'element' => 'donation_type',
            'value'   => 'carousel_type',  
        ),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Dot Color', 'risehand-addons'),
        'param_name' => 'nav3color',
        'group' => esc_html__('Arrow / Dot Styling', 'risehand-addons') ,
        'dependency'  => array( 
            'element' => 'donation_type',
            'value'   => 'carousel_type',  
        ),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Dot Border Color', 'risehand-addons'),
        'param_name' => 'nav4color',
        'group' => esc_html__('Arrow / Dot Styling', 'risehand-addons') ,
        'dependency'  => array( 
            'element' => 'donation_type',
            'value'   => 'carousel_type',  
        ),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Dot Active Color', 'risehand-addons'),
        'param_name' => 'nav5color',
        'group' => esc_html__('Arrow / Dot Styling', 'risehand-addons') ,
        'dependency'  => array( 
            'element' => 'donation_type',
            'value'   => 'carousel_type',  
        ),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Dot Active Border Color', 'risehand-addons'),
        'param_name' => 'nav6color',
        'group' => esc_html__('Arrow / Dot Styling', 'risehand-addons') ,
        'dependency'  => array( 
            'element' => 'donation_type',
            'value'   => 'carousel_type',  
        ),
    ),
 
)));
}

// shortcode

add_shortcode( 'give_forms_v1_caro_init', 'vc_give_forms_carousel_v1' );
function vc_give_forms_carousel_v1( $atts, $content = null ) {  
$unique_id = uniqid();
$atts = shortcode_atts(
   array( 
      'donation_type' => 'infinite_scroll', 
      'donation_styles' => 'style_one',   
      'post_id'         => '',   
      'post_id_not' => '',
      'n_post_count' => '4',
      'n_query_orderby' => 'date',
      'n_query_order' => 'DESC',
      'query_category' => '', 
      'loop_enable'  => '' , 
      'duration' => '7000' , 
      'speed' => '1000' , 
      'centered_enable'  => '' ,  
      'margin'  => '30' , 
      'desk_top'  => '4' , 
      'tablet'  => '3' , 
      'mobile'  => '2' ,
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
       'bg_color' => '',
       'br_color' => '', 
       'catcolor_color' => '',
       'catcolobg_color' => '', 
       'title_color' => '', 
       'desc_color' => '',
       'progress_bar_box_bg_color' => '',
       'progress_bar_bg_color' => '',
       'active_progress_bar_bg_color' => '', 
       'percentage_color' => '',
       'percentage_content_color' => '',
       'percentage_content_price_color' => '',
       'hprogress_bar_box_bg_color' => '',
       'hprogress_bar_bg_color' => '',
       'hactive_progress_bar_bg_color' => '',
       'hpercentage_color' => '',
       'hpercentage_content_color' => '',
       'hpercentage_content_price_color' => '',
       'price_label_color' => '',
       'price_color' => '',
       'price_goal_color' => '',
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
ob_start();
?>
<style type="text/css" data-type="vc_shortcodes-custom">
     <?php if($atts['nav1color']): ?>
        .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .prev .risehand-chevron-left,
        .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .next .risehand-chevron-right {
        color: <?php echo esc_attr($atts['nav1color']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['nav2color']): ?>
        .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .prev,
        .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .next {
        border-color: <?php echo esc_attr($atts['nav2color']); ?>!important; 
    }
    <?php endif; ?>
    <?php if($atts['nav2colors']): ?>
        .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .prev,
        .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .next { 
        background: <?php echo esc_attr($atts['nav2colors']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['nav1hocolor']): ?>
        .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .prev:hover .risehand-chevron-left,
        .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .next:hover .risehand-chevron-right {
        color: <?php echo esc_attr($atts['nav1hocolor']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['nav1hobgcolor']): ?>
        .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .prev:hover,
        .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .next:hover {
        background: <?php echo esc_attr($atts['nav1hobgcolor']); ?>!important; 
    }
    <?php endif; ?>
    <?php if($atts['nav2hocolor']): ?>
        .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .prev:hover,
        .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .common_arrow .next:hover { 
        border-color: <?php echo esc_attr($atts['nav2hocolor']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['nav3color']): ?>
        .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .swiper-pagination-bullet:before {
        background: <?php echo esc_attr($atts['nav3color']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['nav4color']): ?>
        .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .swiper-pagination-bullet {
        border-color: <?php echo esc_attr($atts['nav4color']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['nav5color']): ?>
        .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .swiper-pagination-bullet.swiper-pagination-bullet-active:before,
        .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .swiper-pagination-bullet:hover:before {
        background: <?php echo esc_attr($atts['nav5color']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['nav6color']): ?>
        .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .swiper-pagination-bullet.swiper-pagination-bullet-active,
        .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .swiper-pagination-bullet:hover {
        border-color: <?php echo esc_attr($atts['nav6color']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['dot_alignment']): ?>
        .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .common-dots {
        text-align: <?php echo esc_attr($atts['dot_alignment']); ?>!important;
    }
    <?php endif; ?>
    <?php if(!empty($atts['item_width'])): ?> 
    .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .scroll_cbox { min-width:<?php echo esc_attr($atts['item_width']); ?>}
    <?php endif; ?> 
    <?php if($atts['bg_color']): ?>
    .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .do_common_style {
        background: <?php echo esc_attr($atts['bg_color']); ?> !important;
    } 
    <?php endif; ?>
    <?php if($atts['br_color']): ?>
    .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .do_common_style .content .depth_content .goalsdetails > div::before {
        background: <?php echo esc_attr($atts['br_color']); ?> !important;
    } 
    .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .do_common_style .content .depth_content .goalsdetails {
        border-color: <?php echo esc_attr($atts['br_color']); ?> !important;
    }
    <?php endif; ?>
    <?php if($atts['catcolor_color']): ?>
    .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .do_common_style .catdo a {
        color: <?php echo esc_attr($atts['catcolor_color']); ?> !important;
    }
    <?php endif; ?>
    <?php if($atts['catcolobg_color']): ?>
    .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .do_common_style .catdo a {
        background: <?php echo esc_attr($atts['catcolobg_color']); ?> !important;
    }
    <?php endif; ?>
    <?php if($atts['title_color']): ?>
    .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .title_24 a {
        color: <?php echo esc_attr($atts['title_color']); ?> !important;
    }
    <?php endif; ?>
    <?php if($atts['desc_color']): ?>
    .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .desc_p {
        color: <?php echo esc_attr($atts['desc_color']); ?> !important;
    }
    <?php endif; ?>
    <?php if($atts['progress_bar_box_bg_color']): ?>
    .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .do_common_style .donation_raises {
        background: <?php echo esc_attr($atts['progress_bar_box_bg_color']); ?> !important;
    }
    <?php endif; ?>
    <?php if($atts['progress_bar_bg_color']): ?>
    .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .donation_progress .progress {
        background: <?php echo esc_attr($atts['progress_bar_bg_color']); ?> !important;
    }
    <?php endif; ?>
    <?php if($atts['active_progress_bar_bg_color']): ?>
    .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .donation_progress .progress .progress-bar {
        background: <?php echo esc_attr($atts['active_progress_bar_bg_color']); ?> !important;
    }
    <?php endif; ?>
    <?php if($atts['active_progress_bar_bg_color']): ?>
    .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .donation_progress .perin .percent::before {
        border-color: <?php echo esc_attr($atts['active_progress_bar_bg_color']); ?> !important;
    }
    <?php endif; ?>
    <?php if($atts['percentage_color']): ?>
    .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .donation_progress .perin .percent {
        color: <?php echo esc_attr($atts['percentage_color']); ?> !important;
    }
    <?php endif; ?>
    <?php if($atts['percentage_content_color']): ?>
    .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .do_common_style .donation_raises .goals_details div {
        color: <?php echo esc_attr($atts['percentage_content_color']); ?> !important;
    }
    <?php endif; ?>
    <?php if($atts['percentage_content_price_color']): ?>
    .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .do_common_style .donation_raises .goals_details span {
        color: <?php echo esc_attr($atts['percentage_content_price_color']); ?> !important;
    }
    <?php endif; ?>
    <?php if($atts['hprogress_bar_box_bg_color']): ?>
    .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .do_common_style:hover .content .donation_raises {
        background: <?php echo esc_attr($atts['hprogress_bar_box_bg_color']); ?> !important;
    }
    <?php endif; ?>
    <?php if($atts['hprogress_bar_bg_color']): ?>
    .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .do_common_style:hover .content .donation_raises  .progress {
        background: <?php echo esc_attr($atts['hprogress_bar_bg_color']); ?> !important;
    }
    <?php endif; ?>
    <?php if($atts['hactive_progress_bar_bg_color']): ?>
    .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .do_common_style:hover  .content .donation_raises .progress .progress-bar {
        background: <?php echo esc_attr($atts['hactive_progress_bar_bg_color']); ?> !important;
    }
    <?php endif; ?>
    <?php if($atts['hpercentage_color']): ?>
    .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .do_common_style:hover  .content .donation_raises  .perin .percent {
        color: <?php echo esc_attr($atts['hpercentage_color']); ?> !important;
    }
    <?php endif; ?>
    <?php if($atts['hpercentage_content_color']): ?>
    .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .do_common_style:hover .content .donation_raises .goals_details div {
        color: <?php echo esc_attr($atts['hpercentage_content_color']); ?> !important;
    }
    <?php endif; ?>
    <?php if($atts['hpercentage_content_price_color']): ?>
    .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .do_common_style:hover  .donation_raises .goals_details span {
        color: <?php echo esc_attr($atts['hpercentage_content_price_color']); ?> !important;
    }
    <?php endif; ?>
    <?php if($atts['price_label_color']): ?>
    .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .do_common_style   .goals_details .text {
        color: <?php echo esc_attr($atts['price_label_color']); ?> !important;
    }
    <?php endif; ?>
    <?php if($atts['price_color']): ?>
    .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .do_common_style   .goals_details .result {
        color: <?php echo esc_attr($atts['price_color']); ?> !important;
    }
    <?php endif; ?>
    <?php if($atts['price_goal_color']): ?>
    .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .do_common_style .content .depth_content .goalsdetails small.result {
        color: <?php echo esc_attr($atts['price_goal_color']); ?> !important;
    }
    <?php endif; ?> 
</style>
<section class="give_forms_section <?php echo esc_attr($atts['donation_styles']); ?> unique-id-<?php echo esc_attr($unique_id); ?>">
<?php if($atts['donation_type'] == 'carousel_type'): 
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
    <div class="donation_carousel  position-relative  arrows_<?php echo esc_attr($atts['arrow_post']); ?>">
    <div class="swiper swiper-container<?php if($atts['dots_enable'] == "yes"): ?> dots_enabled<?php endif; ?> swiper_container" data-swiper='{
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
    <?php  
        $post_count  = ! empty( $atts['n_post_count'] ) ? $atts['n_post_count'] : '';
        $query_orderby  = ! empty( $atts['n_query_orderby'] ) ? $atts['n_query_orderby'] : '';
        $query_order  = ! empty( $atts['n_query_order'] ) ? $atts['n_query_order'] : '';
        $post_in = '';
        if(!empty($atts['post_id'])){
             $post_in = explode(',', $atts['post_id']);
        }
        $post_id_not = '';
        if(!empty($atts['post_id_not'])){
             $post_id_not = explode(',', $atts['post_id_not']);
        }
         $args = array(
            'post_type' => 'give_forms',
            'ignore_sticky_posts' => true,  
            'posts_per_page' => $post_count,
            'orderby'        =>  $query_orderby,
            'order'          =>  $query_order,
            'post__in'         => $post_in,  
            'post__not_in'         => $post_id_not,  
        );
        if( $atts['query_category'] ) $args['donation_category'] = $atts['query_category'];
        $donation_grid_query = new \WP_Query( $args ); 
        ?>
        <?php while ($donation_grid_query->have_posts()) : ?>
        <?php $donation_grid_query->the_post(); ?>
        <?php global $post;  
            // donation card ?>
            <?php if($atts['donation_styles'] == 'style_two'): ?>
                <div class="swiper-slide">
                    <?php do_action('get_risehand_donation_card_1'); ?>
                </div> 
            <?php // Donation card ?>
            <?php elseif($atts['donation_styles'] == 'style_three'): ?>
                <div class="swiper-slide">
                    <?php do_action('get_risehand_donation_card_2'); ?>
                </div> 
            <?php // Donation style end?>    
            
            <?php else: ?> 
                <div class="swiper-slide">
                    <?php do_action('get_risehand_donation_card_1'); ?>
                </div>
            <?php endif; ?>
            <?php // donation card end ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>    
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
</div>  
<?php // end of protfolio type  ?>
<?php else: ?>    
<?php // end of protfolio type  ?>
<div class="scroll_carousel_box side_<?php echo esc_attr($atts['scroll_side']); ?>" data-speed="<?php echo esc_attr($atts['in_speed']); ?>" data-margin="<?php echo esc_attr($atts['in_margin']); ?>" data-dir="<?php echo esc_attr($atts['scroll_side']); ?>">
    <?php  
        $post_count  = ! empty( $atts['n_post_count'] ) ? $atts['n_post_count'] : '';
        $query_orderby  = ! empty( $atts['n_query_orderby'] ) ? $atts['n_query_orderby'] : '';
        $query_order  = ! empty( $atts['n_query_order'] ) ? $atts['n_query_order'] : '';
        $post_in = '';
        if(!empty($atts['post_id'])){
             $post_in = explode(',', $atts['post_id']);
        }
        $post_id_not = '';
        if(!empty($atts['post_id_not'])){
             $post_id_not = explode(',', $atts['post_id_not']);
        }
        $args = array(
            'post_type' => 'give_forms',
            'ignore_sticky_posts' => true,  
            'posts_per_page' => $post_count,
            'orderby'        =>  $query_orderby,
            'order'          =>  $query_order,
            'post__in'         => $post_in,  
            'post__not_in'         => $post_id_not,  
        );
        if( $atts['query_category'] ) $args['donation_category'] = $atts['query_category'];
        $donation_grid_query = new \WP_Query( $args ); 
        ?>
        <?php while ($donation_grid_query->have_posts()) : ?>
        <?php $donation_grid_query->the_post(); ?>
        <?php global $post;  
        // donation card ?> 
        <?php if($atts['donation_styles'] == 'style_two'): ?> 
            <div class="scroll_cbox  scroll_con_type_<?php echo esc_attr($atts['scroll_con_type']); ?>"> 
                <?php do_action('get_risehand_donation_card_1'); ?>
            </div> 
        <?php // Donation card ?>
        <?php elseif($atts['donation_styles'] == 'style_three'): ?>
            <div class="scroll_cbox  scroll_con_type_<?php echo esc_attr($atts['scroll_con_type']); ?>"> 
                    <?php do_action('get_risehand_donation_card_2'); ?>
                    </div>
        <?php // Donation style end?>    
         
        <?php else: ?> 
            <div class="scroll_cbox  scroll_con_type_<?php echo esc_attr($atts['scroll_con_type']); ?>"> 
                <?php do_action('get_risehand_donation_card_1'); ?> 
            </div>
        <?php endif; ?>  
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>   
    </div>  
<?php endif; ?>            
</section>

<?php
return ob_get_clean();
}