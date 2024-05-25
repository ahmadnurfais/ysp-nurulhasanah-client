<?php
add_action( 'vc_before_init', 'vc_portfolio_post_v1_vcmap' );
function vc_portfolio_post_v1_vcmap() {
 vc_map( array(
  "name" => __( "Portfolio Grid / Masonry / Filter v1", "risehand-addons" ),
  "base" => "portfolio_post_v1_init",
  "class" => "",
  "icon" => "icon-risehand-svg", 
  "category" => __( "Risehand Post", "risehand-addons"),
  "params" => array( 
    array(
        'type'       => 'dropdown',
        'heading'    => esc_html__('Portfolio Type', 'risehand-addons'),
        'param_name' => 'portfolio_type',
        'value'      => array(
            esc_html__( 'Filter Type', 'risehand-addons' ) => 'filter_type' ,
            esc_html__( 'Basic Grid Type', 'risehand-addons' ) => 'grid_type' , 
            esc_html__( 'Masonry Type', 'risehand-addons' ) => 'masnory_type' ,
            esc_html__( 'Grid Type Two', 'risehand-addons' ) => 'grid_type_two' ,
        ),
        'default' => 'filter_type',
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
        ),
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'portfolio_type',
            'value'   => array('filter_type' , 'grid_type' , 'masnory_type'),
        ),
    ),
    array(
        'type'       => 'dropdown',
        'heading'    => esc_html__('Portfolio Style ', 'risehand-addons'),
        'param_name' => 'portfolio_styles_two',
        'value'      => array( 
            esc_html__( 'Style One', 'risehand-addons' ) => 'style_one' ,
            esc_html__( 'Style Two', 'risehand-addons' ) => 'style_two' ,
            esc_html__( 'Style Three', 'risehand-addons' ) => 'style_three' ,  
        ),
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'portfolio_type',
            'value'   => 'grid_type_two',
        ),
    ),
 
      array(
        'type'       => 'dropdown',
        'heading'    => esc_html__('Column Size ', 'risehand-addons'),
        'param_name' => 'portfolio_column',
        'value'      => array( 
            esc_html__( 'Four Column', 'risehand-addons' ) => 'col-xl-3 col-lg-4 col-md-6 col-sm-6' ,
            esc_html__( 'Three Column', 'risehand-addons' ) => 'col-xl-4 col-lg-4 col-md-6 col-sm-6' ,
            esc_html__( 'Two Column', 'risehand-addons' ) => 'col-xl-6 col-lg-6 col-md-6 col-sm-6' ,
            esc_html__( 'One Column', 'risehand-addons' ) => 'col-xl-12' ,
        ), 
        'group' => esc_html__('General', 'risehand-addons') ,   
        'dependency'  => array(
            'element' => 'portfolio_type',
            'value'   => array('filter_type' , 'grid_type' , 'masnory_type'),
        ),
      ), 
          // fitler type start
      array(
        'type' => 'param_group',
        'heading' => esc_html__('Project Content', 'risehand-addons') ,
        'value' => '',
        'param_name' => 'project_filter_repeater',
        'params' => array(
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Post Count', 'risehand-addons') ,
                    'param_name' => 'post_count',
                    'value' => esc_html__('4', 'risehand-addons') ,
                ) , 
                array(
                    'type'       => 'dropdown',
                    'heading'    => esc_html__('Order By', 'risehand-addons'),
                    'param_name' => 'query_orderby',
                    'value'      => array(
                        esc_html__( 'Select Order By', 'risehand-addons' ) => '',
                        esc_html__( 'Date', 'risehand-addons' ) => 'date' ,
                        esc_html__( 'Title', 'risehand-addons' ) => 'Title' ,
                        esc_html__( 'Menu Order', 'risehand-addons' ) => 'menu_order' ,
                        esc_html__( 'Random', 'risehand-addons' ) => 'rand' ,
                    ),
                ), 
                array(
                    'type'       => 'dropdown',
                    'heading'    => esc_html__('Order', 'risehand-addons'),
                    'param_name' => 'query_order',
                    'value'      => array(
                        esc_html__( 'Select Order', 'risehand-addons' ) => '',
                        esc_html__( 'DESc', 'risehand-addons' ) => 'DESc' ,
                        esc_html__( 'ASC', 'risehand-addons' ) => 'ASC' ,
                    ),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Enter the portfolio id number that want disaply portfolio post', 'risehand-addons') ,
                    'param_name' => 'post_in',
                    'value' => esc_html__('', 'risehand-addons') ,
                ) , 
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Enter the portfolio id number that do not disaply portfolio post', 'risehand-addons') ,
                    'param_name' => 'post_not_in',
                    'value' => esc_html__('', 'risehand-addons') ,
                ) , 
                array(
                    'type'       => 'dropdown',
                    'heading'    => esc_html__('Category', 'risehand-addons'),
                    'param_name' => 'query_category',
                    'value'      => risehand_get_portfolio_categories(),

                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => esc_html__('Filter Title', 'risehand-addons'),
                    'param_name' => 'filtertitle',
                    'value'      => esc_html__('Title', 'risehand-addons'),
                ),
        ),
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'portfolio_type',
            'value'   => 'filter_type',
        ),
    ),
    array(
        'type'       => 'dropdown',
        'heading'    => esc_html__('Filter Alignment', 'risehand-addons'),
        'param_name' => 'filter_alignment',
        'value'      => array( 
            esc_html__( 'Left', 'risehand-addons' ) => 'left' ,
            esc_html__( 'Right', 'risehand-addons' ) => 'right' ,
            esc_html__( 'Center', 'risehand-addons' ) => 'center' ,
        ),
        'default' => 'center' ,
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'portfolio_type',
            'value'   => 'filter_type',
        ),
    ),
    // fitler type end
    // grid and masonry start 
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Post Count', 'risehand-addons'),
        'param_name' => 'n_post_count',
        'value' => esc_html__('4', 'risehand-addons'),
        'group' => esc_html__('General', 'risehand-addons'),
        'dependency'  => array( 
            'element' => 'portfolio_type',
            'value'   => array('grid_type', 'masnory_type' , 'grid_type_two'), // Add both values here
        ),
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
        'dependency'  => array( 
            'element' => 'portfolio_type',
            'value'   => array('grid_type', 'masnory_type' , 'grid_type_two'), // Add both values here

        ),
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
        'dependency'  => array(
            'element' => 'portfolio_type',
            'value'   => array('grid_type', 'masnory_type' , 'grid_type_two'), // Add both values here
        ),
      ), 
      array(
        'type'       => 'dropdown',
        'heading'    => esc_html__('Category', 'risehand-addons'),
        'param_name' => 'n_query_category',
        'value'      => risehand_get_portfolio_categories(),
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array( 
            'element' => 'portfolio_type',
            'value'   => array('grid_type', 'masnory_type'), // Add both values here
        ),
      ),
     
      array(
        'type' => 'textfield',
        'heading' => esc_html__('Enter the portfolio id number do not disaply portfolio post', 'risehand-addons') ,
        'param_name' => 'not_post_in',
        'group' => esc_html__('General', 'risehand-addons') , 
           'description' => esc_html__('Enter post id like this -> 3481 , 3440', 'risehand-addons') ,
        'dependency'  => array( 
            'element' => 'portfolio_type',
            'value'   => array('grid_type', 'masnory_type'), // Add both values here
        ),
    ),
       array(
        'type' => 'textfield',
        'heading' => esc_html__('Enter the portfolio id number to disaply portfolio post', 'risehand-addons') ,
        'param_name' => 'n_query_title',
        'group' => esc_html__('General', 'risehand-addons') , 
           'description' => esc_html__('Enter post id like this -> 3481 , 3440', 'risehand-addons') ,
        'dependency'  => array( 
            'element' => 'portfolio_type',
            'value'   => array('grid_type', 'masnory_type'),
        ),
    ),
      array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Pagination Enable / Disable', 'risehand-addons' ),
        'param_name'  => 'pagination_enable',
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ),
        'description' => esc_html__( 'Click Check box to enable Pagination', 'risehand-addons' ),
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array( 
            'element' => 'portfolio_type',
            'value'   => array('grid_type', 'masnory_type'), // Add both values here
        ),
    ),
    array(
        'type'       => 'dropdown',
        'heading'    => esc_html__('Pagination Alignment', 'risehand-addons'),
        'param_name' => 'pagination_alignment',
        'value'      => array(
            esc_html__( 'Pagination Center', 'risehand-addons' ) => 'text-center' ,
            esc_html__( 'Pagination Left', 'risehand-addons' ) => 'text-start' ,
            esc_html__( 'Pagination Right', 'risehand-addons' ) => 'text-end' ,
        ),
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array( 
            'element' => 'portfolio_type',
            'value'   => array('grid_type', 'masnory_type'), // Add both values here
        ),
    ), 
    // styling

    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Filter Alignment', 'risehand-addons' ),
        'param_name' => 'filter_alignment',
        'value'      => array( 
            esc_html__( 'Left', 'risehand-addons' ) => 'left' ,
            esc_html__( 'Center', 'risehand-addons' ) => 'center' ,
            esc_html__( 'Right', 'risehand-addons' ) => 'right' ,
        ), 
        'group' => esc_html__('Styling', 'risehand-addons') ,
        'dependency'  => array( 
            'element' => 'portfolio_type',
            'value'   => array('grid_type', 'masnory_type'), // Add both values here
        ),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Filter Color', 'risehand-addons'),
        'param_name' => 'filter_color',
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Filter Background Color', 'risehand-addons'),
        'param_name' => 'filter_bg_color',
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Filter Border Color', 'risehand-addons'),
        'param_name' => 'filter_br_color',
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Active / Hover Filter Color', 'risehand-addons'),
        'param_name' => 'afilter_color',
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Active / Hover Filter Background Color', 'risehand-addons'),
        'param_name' => 'afilter_bg_color',
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Active / Hover  Filter Border Color', 'risehand-addons'),
        'param_name' => 'afilter_br_color', 
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Image Height', 'risehand-addons' ),
        'param_name' => 'iamge_height',
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Overlay Color', 'risehand-addons'),
        'param_name' => 'overlay_color',
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Box Background Color', 'risehand-addons'),
        'param_name' => 'box_bg_colors',
        'group' => esc_html__('Styling', 'risehand-addons') ,
        'dependency'  => array( 
            'element' => 'portfolio_type',
            'value'   => array('grid_type', 'masnory_type', 'filter_type'), // Add both values here
        ), 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Overlay Background Color', 'risehand-addons'),
        'param_name' => 'overlay_colors',
        'group' => esc_html__('Styling', 'risehand-addons') ,
        'dependency'  => array( 
            'element' => 'portfolio_type',
            'value'   => array('grid_type_two'), // Add both values here
        ),  
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Pattern Background Color', 'risehand-addons'),
        'param_name' => 'pabg_colors',
        'group' => esc_html__('Styling', 'risehand-addons') ,
        'dependency'  => array( 
            'element' => 'portfolio_type',
            'value'   => array('grid_type_two'), // Add both values here
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
    // pagination styling
    array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Pagination Styling Enable / Disable', 'risehand-addons' ),
        'param_name'  => 'pagination_style_enable',
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ),
        'description' => esc_html__( 'Click Check box to enable Pagination Styling', 'risehand-addons' ),
        'group' => esc_html__('Pagination Style', 'risehand-addons') ,
    ),

    array(
        'type' => 'colorpicker',
        'heading' => 'Pagitnation Color',
        'param_name' => 'pagicolor', 
        'group' => esc_html__('Pagination Style', 'risehand-addons') ,  
        'dependency'  => array(
            'element' => 'pagination_style_enable',
            'value'   => 'yes',
        ),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => 'Pagitnation Border Color',
        'param_name' => 'pagibrcolor', 
        'group' => esc_html__('Pagination Style', 'risehand-addons') ,  
        'dependency'  => array(
            'element' => 'pagination_style_enable',
            'value'   => 'yes',
        ),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => 'Pagitnation Background Color',
        'param_name' => 'pagibgcolor', 
        'group' => esc_html__('Pagination Style', 'risehand-addons') ,  
        'dependency'  => array(
            'element' => 'pagination_style_enable',
            'value'   => 'yes',
        ),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => 'Hover Pagitnation Color',
        'param_name' => 'hopagicolor', 
        'group' => esc_html__('Pagination Style', 'risehand-addons') ,  
        'dependency'  => array(
            'element' => 'pagination_style_enable',
            'value'   => 'yes',
        ),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => 'Hover Pagitnation Border Color',
        'param_name' => 'hopagibrcolor', 
        'group' => esc_html__('Pagination Style', 'risehand-addons') ,  
        'dependency'  => array(
            'element' => 'pagination_style_enable',
            'value'   => 'yes',
        ),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => 'Hover Pagitnation Background Color',
        'param_name' => 'hopagibgcolor', 
        'group' => esc_html__('Pagination Style', 'risehand-addons') ,  
        'dependency'  => array(
            'element' => 'pagination_style_enable',
            'value'   => 'yes',
        ),
    ),
)));
}

// shortcode

add_shortcode( 'portfolio_post_v1_init', 'vc_portfolio_post_v1' );
function vc_portfolio_post_v1( $atts, $content = null ) { 
    $unique_id = uniqid();
    $atts = shortcode_atts(
    array( 
        'hopagibgcolor' => '' , 
        'hopagibrcolor' => '' , 
        'hopagicolor' => '' , 
        'pagibgcolor' => '' , 
        'pagibrcolor' => '' , 
        'pagicolor' => '' , 
        'pagination_style_enable' => '' ,  
        'portfolio_type' => 'filter_type', 
        'portfolio_styles' => 'style_one',
        'normal_view' => '',
        'portfolio_column' => 'col-xl-3 col-lg-4 col-md-6 col-sm-6',
        'project_filter_repeater' => '',  
        'filter_alignment' => 'center',  
        'n_post_count' => '4',
        'n_query_orderby' => 'date',
        'n_query_order' => 'DESC',
        'n_query_category' => '',
        'pagination_enable' => '',
        'pagination_alignment' => 'text-center',
        'n_query_title' => '' ,
        'not_post_in' => '' ,
        'portfolio_styles_two' => 'style_one' ,

        'filter_alignment' => '',
        'filter_color' => '',
        'filter_bg_color' => '',
        'filter_br_color' => '',
        'afilter_color' => '',
        'afilter_bg_color' => '',
        'afilter_br_color' => '',
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
    
   ), $atts
);  
$project_filter_repeater = function_exists( 'vc_param_group_parse_atts' ) ? vc_param_group_parse_atts( $atts['project_filter_repeater'] ) : array();
$allowed_tags = wp_kses_allowed_html('post'); 
ob_start(); 
if($atts['pagination_style_enable']): 
?>
<style type="text/css" data-type="vc_shortcodes-custom">
<?php if($atts['hopagibgcolor']): ?>
    .portfolio_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .pagination  .page-numbers li a:hover ,   
      .portfolio_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .pagination  .page-numbers li  span.current    
    { background:<?php echo esc_attr($atts['hopagibgcolor']); ?>!important;  ?>;} 
<?php endif; ?> 
<?php if($atts['hopagibrcolor']): ?>
    .portfolio_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .pagination  .page-numbers li a:hover ,   
      .portfolio_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .pagination  .page-numbers li  span.current     
    { border-color:<?php echo esc_attr($atts['hopagibrcolor']); ?>!important;  ?>;} 
<?php endif; ?> 
<?php if($atts['hopagicolor']): ?>
    .portfolio_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .pagination  .page-numbers li a:hover ,   
      .portfolio_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .pagination  .page-numbers li  span.current   
    { color:<?php echo esc_attr($atts['hopagicolor']); ?>!important;  ?>;} 
<?php endif; ?> 
<?php if($atts['pagibgcolor']): ?>
    .portfolio_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .pagination  .page-numbers li a  
    { background:<?php echo esc_attr($atts['pagibgcolor']); ?>!important;  ?>;} 
<?php endif; ?> 
<?php if($atts['pagibrcolor']): ?>
    .portfolio_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .pagination  .page-numbers li a   
    { border-color:<?php echo esc_attr($atts['pagibrcolor']); ?>!important;  ?>;} 
<?php endif; ?> 
<?php if($atts['pagicolor']): ?>
    .portfolio_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .pagination  .page-numbers li a ,   
      .portfolio_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .pagination  .page-numbers li a span
    { color:<?php echo esc_attr($atts['pagicolor']); ?>!important;  ?>;} 
<?php endif; ?> 
</style>
<?php
endif; 
?>
<style type="text/css" data-type="vc_shortcodes-custom">
    <?php if($atts['filter_alignment']): ?> 
    .portfolio_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .project_filter {
        justify-content: <?php echo esc_attr($atts['filter_alignment']); ?>!important;
    }
    <?php endif; ?> 
    <?php if($atts['filter_color']): ?> 
    .portfolio_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .project_filter li {
        color: <?php echo esc_attr($atts['filter_color']); ?>!important;
    }
    <?php endif; ?> 
    <?php if($atts['filter_bg_color']): ?> 
    .portfolio_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .project_filter li {
        background: <?php echo esc_attr($atts['filter_bg_color']); ?>!important;
    }
    <?php endif; ?> 
    <?php if($atts['filter_br_color']): ?> 
    .portfolio_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .project_filter li {
        border-color: <?php echo esc_attr($atts['filter_br_color']); ?>!important;
    }
    <?php endif; ?> 
    <?php if($atts['afilter_color']): ?> 
    .portfolio_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .project_filter li:hover,
    .portfolio_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .project_filter li.current {
        color: <?php echo esc_attr($atts['afilter_color']); ?>!important; 
    }
    <?php endif; ?> 
    <?php if($atts['afilter_bg_color']): ?> 
    .portfolio_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .project_filter li:hover,
    .portfolio_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .project_filter li.current {
        background: <?php echo esc_attr($atts['afilter_bg_color']); ?>!important;
    }
    <?php endif; ?> 
    <?php if($atts['afilter_br_color']): ?> 
    .portfolio_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .project_filter li:hover,
    .portfolio_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .project_filter li.current {
        border-color: <?php echo esc_attr($atts['afilter_br_color']); ?>!important;
    }
    <?php endif; ?> 
    <?php if($atts['iamge_height']): ?> 
    .portfolio_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .image-box img {
        height: <?php echo esc_attr($atts['iamge_height']); ?>!important;
    }
    <?php endif; ?> 
    <?php if($atts['overlay_color']): ?> 
    .portfolio_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .image-box .img_link::before {
        background: <?php echo esc_attr($atts['overlay_color']); ?>!important;
    }
    <?php endif; ?> 
    <?php if($atts['box_bg_colors']): ?> 
    .portfolio_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .content_box_outer .content_box_in {
        background: <?php echo esc_attr($atts['box_bg_colors']); ?>!important;
    }
    <?php endif; ?> 
    <?php if($atts['overlay_colors']): ?> 
    .portfolio_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .portfolio-style_5:after {
        background: linear-gradient(0deg, <?php echo esc_attr($atts['overlay_colors']); ?> 6%, rgba(0, 0, 0, 0) 100%);
    }
    <?php endif; ?> 
    <?php if($atts['pabg_colors']): ?> 
    .portfolio_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .portfolio-style_5 .content_box_outer .spattern_bg {
        background: <?php echo esc_attr($atts['pabg_colors']); ?>!important;
    }
    <?php endif; ?> 
    <?php if($atts['titles_color']): ?> 
    .portfolio_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .content_box_in .title_24 a {
        color: <?php echo esc_attr($atts['titles_color']); ?>!important;
    }
    <?php endif; ?> 
    <?php if($atts['cat_color']): ?> 
    .portfolio_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .content_box_in p a ,
    .portfolio_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .content_box_in p {
        color: <?php echo esc_attr($atts['cat_color']); ?>!important;
    }
    <?php endif; ?> 
    <?php if($atts['link_color']): ?> 
    .portfolio_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .content_box_in .p_rd_more,
    .portfolio_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .content_box_outer .p_rd_more {
        color: <?php echo esc_attr($atts['link_color']); ?>!important; 
    }
    <?php endif; ?> 
    <?php if($atts['linkbr_color']): ?> 
    .portfolio_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .content_box_in .p_rd_more,
    .portfolio_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .content_box_outer .p_rd_more {
        border-color: <?php echo esc_attr($atts['linkbr_color']); ?>!important;
    }
    <?php endif; ?> 
    <?php if($atts['linkbg_color']): ?> 
    .portfolio_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .content_box_in .p_rd_more,
    .portfolio_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .content_box_outer .p_rd_more {
        background: <?php echo esc_attr($atts['linkbg_color']); ?>!important;
    }
    <?php endif; ?> 
    <?php if($atts['hlink_color']): ?>     
    .portfolio_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .content_box_in .p_rd_more:hover,
    .portfolio_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .content_box_outer .p_rd_more:hover {
        color: <?php echo esc_attr($atts['hlink_color']); ?>!important; 
    }
    <?php endif; ?> 
    <?php if($atts['hlinkbr_color']): ?>     
    .portfolio_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .content_box_in .p_rd_more:hover,
    .portfolio_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .content_box_outer .p_rd_more:hover {
        border-color: <?php echo esc_attr($atts['hlinkbr_color']); ?>!important;
    }
    <?php endif; ?> 
    <?php if($atts['hlinkbg_color']): ?>     
    .portfolio_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .content_box_in .p_rd_more:hover,
    .portfolio_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .content_box_outer .p_rd_more:hover {
        background: <?php echo esc_attr($atts['hlinkbg_color']); ?>!important;
    }
    <?php endif; ?> 
</style> 
<section class="portfolio_post_section unique-id-<?php echo esc_attr($unique_id); ?>">
<?php if($atts['portfolio_type'] == 'grid_type' || $atts['portfolio_type'] == 'masnory_type'): ?>
    <div class="grid_masnory_box<?php if($atts['portfolio_type'] == 'masnory_type'): ?>  project_container clearfix<?php endif; ?>">
    <div class="row">
    <?php  
        $post_count  = ! empty( $atts['n_post_count'] ) ? $atts['n_post_count'] : '';
        $query_orderby  = ! empty( $atts['n_query_orderby'] ) ? $atts['n_query_orderby'] : '';
        $query_order  = ! empty( $atts['n_query_order'] ) ? $atts['n_query_order'] : '';
        if(get_query_var('paged')){ 
            $paged = get_query_var( 'paged' ); 
        } elseif ( get_query_var( 'page' ) ) { 
            $paged = get_query_var( 'page' ); 
        } else { 
            $paged = 1; 
        }
        $post_not_in = '';
        if(!empty($atts['not_post_in'])){
             $post_not_in = explode(',', $atts['not_post_in']);
        }
        $n_query_title = '';
        if(!empty($atts['n_query_title'])){
             $n_query_title = explode(',', $atts['n_query_title']);
        }
         $args = array(
            'post_type' => 'portfolio',
            'ignore_sticky_posts' => true, 
            'paged'             => $paged,
            'posts_per_page' => $post_count,
            'orderby'        =>  $query_orderby,
            'order'          =>  $query_order,
            'post__in'   =>  $n_query_title,
            'post__not_in'   =>  $post_not_in,
        );
        if( $atts['n_query_category'] ) $args['portfolio_category'] = $atts['n_query_category'];
        $portfolio_grid_query = new \WP_Query( $args ); 
        ?>
        <?php while ($portfolio_grid_query->have_posts()) : ?>
        <?php $portfolio_grid_query->the_post(); ?>
        <?php global $post;  
        // portfolio card ?>
        <?php if($atts['portfolio_styles'] == 'style_two'): ?>
            <?php if (has_post_thumbnail()): ?>
                <div class="project-wrapper grid-item mb_40 <?php echo esc_attr($atts['portfolio_column']); ?>"> 
                    <?php do_action('get_risehand_portfolio_card_2'); ?>
                </div>
            <?php endif; ?>
        <?php elseif($atts['portfolio_styles'] == 'style_three'): ?>
            <?php if (has_post_thumbnail()): ?>
                <div class="project-wrapper grid-item mb_40 <?php echo esc_attr($atts['portfolio_column']); ?>"> 
                    <?php do_action('get_risehand_portfolio_card_3'); ?>
                </div>
            <?php endif; ?>
        <?php elseif($atts['portfolio_styles'] == 'style_four'): ?>
            <?php if (has_post_thumbnail()): ?>
                <div class="project-wrapper grid-item mb_40 <?php echo esc_attr($atts['portfolio_column']); ?>"> 
                    <?php do_action('get_risehand_portfolio_card_4'); ?>
                </div>  
            <?php endif; ?>
        <?php else: ?> 
            <?php if (has_post_thumbnail()): ?>
                <div class="project-wrapper grid-item mb_40 <?php echo esc_attr($atts['portfolio_column']); ?>"> 
                <?php do_action('get_risehand_portfolio_card_1'); ?>
                </div> 
            <?php endif; ?>
        <?php endif; ?>
        <?php // portfolio card end ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>   
</div> 
</div> 
<?php if($atts['pagination_enable'] == "yes"):?>
    <div class="row">
        <div class="col-lg-12">
            <div class="pagination <?php echo esc_attr($atts['pagination_alignment']); ?>">
                <?php
                    $pagination = 999999999;
                    echo paginate_links( array(
                    'base' => str_replace( $pagination, '%#%', get_pagenum_link( $pagination ) ),
                    'format' => '?paged=%#%',
                    'current' => max(0, $paged),
                    'total' => $portfolio_grid_query->max_num_pages,
                    'prev_text' => '<i class="fa fa-angle-left"></i>',
                    'next_text' => '<i class="fa fa-angle-right"></i>',
                    'type'=>'list', 
                    'add_args' => false
                    ) );
                ?>
            </div>
        </div>
    </div>
<?php endif; ?> 
<?php elseif($atts['portfolio_type'] == 'grid_type_two'): ?>
    <div class="portfolio_mousewheel">
    <?php    
     $portfolio_inside = '';
     if(!empty($atts['n_query_title'])){
         $portfolio_inside = explode(',', $atts['n_query_title']);
     } 
    $n_post_in = '';
    if(!empty($atts['not_post_in'])){
            $n_post_in = explode(',', $atts['not_post_in']);
    }
     $post_count  = ! empty( $atts['n_post_count'] ) ? $atts['n_post_count'] : '';
        $query_orderby  = ! empty( $atts['n_query_orderby'] ) ? $atts['n_query_orderby'] : '';
        $query_order  = ! empty( $atts['n_query_order'] ) ? $atts['n_query_order'] : ''; 
         $args = array(
            'post_type' => 'portfolio',
            'ignore_sticky_posts' => true,  
            'posts_per_page' => $post_count,
            'orderby'        =>  $query_orderby,
            'order'          =>  $query_order,
            'post__in'   => $portfolio_inside ,
            'post__not_in'         => $n_post_in,  
        ); 
        $portfolio_grid_query = new \WP_Query( $args ); 
        ?>
        <?php while ($portfolio_grid_query->have_posts()) : ?>
        <?php $portfolio_grid_query->the_post(); ?>
        <?php global $post;  
            // portfolio card ?>
            <?php if($atts['portfolio_styles_two'] == 'style_two'): ?>
                <?php if (has_post_thumbnail()): ?>
                    <div class="portfolio-grid-item"> 
                        <?php do_action('get_risehand_portfolio_card_4'); ?>
                    </div> 
                <?php endif; ?>
            <?php elseif($atts['portfolio_styles_two'] == 'style_three'): ?>
                <?php if (has_post_thumbnail()): ?>
                    <div class="portfolio-grid-item"> 
                        <?php do_action('get_risehand_portfolio_card_3'); ?>
                    </div> 
                <?php endif; ?>
            <?php else: ?>
                <?php if (has_post_thumbnail()): ?>
                    <div class="portfolio-grid-item"> 
                        <?php do_action('get_risehand_portfolio_card_5'); ?>
                    </div> 
                <?php endif; ?>
            <?php endif; ?>
            <?php // portfolio card end ?>
        <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>   
</div> 
<?php else: ?>    
  <div class="row">
    <div class="col-lg-12">
      <div class="fliter_group">
        <ul class="project_filter text_<?php echo esc_attr($atts['filter_alignment']); ?> d_flex clearfix">
          <li data-filter="*" class="current theme_btn"><?php echo esc_html__( 'Show All' , 'risehand-addons'); ?></li>
          <?php if (!empty( $project_filter_repeater )) {
       foreach($project_filter_repeater as $key => $value) { ?>
          <li data-filter=".project_category-<?php echo esc_attr($value['query_category']);?>" class="theme_btn">
            <?php echo esc_attr($value['filtertitle']); ?></li>
          <?php }
          } ?>  
        </ul>
      </div>
    </div>
  </div>

<div class="project_container  clearfix">
    <div class="row">
    <?php if (! empty( $project_filter_repeater)):
       foreach ($project_filter_repeater as $key => $value ):
        $post_count  = ! empty( $value['post_count'] ) ? $value['post_count'] : '';
        $query_orderby  = ! empty( $value['query_orderby'] ) ? $value['query_orderby'] : '';
        $query_order  = ! empty( $value['query_order'] ) ? $value['query_order'] : '';
       
        $rpost_not_in = '';
        if(!empty($value['post_not_in'])){
            $rpost_not_in = explode(',', $value['post_not_in']);
        }
        $post_in = '';
        if(!empty($value['post_in'])){
            $post_in = explode(',', $value['post_in']);
        }
        
         $args = array(
            'post_type' => 'portfolio',
            'ignore_sticky_posts' => true,  
            'posts_per_page' => $post_count,
            'orderby'        =>  $query_orderby,
            'order'          =>  $query_order,
            'post__in'         => $post_in,  
            'post__not_in'   =>  $rpost_not_in,
        );
       
        if( $value['query_category'] ) $args['portfolio_category'] = $value['query_category'];
        $portfolio_grid_query = new \WP_Query( $args ); 
        ?>
        <?php while ($portfolio_grid_query->have_posts()) : ?>
        <?php $portfolio_grid_query->the_post(); ?>
        <?php global $post;  
        // portfolio card ?>
        <?php if($atts['portfolio_styles'] == 'style_two'): ?>
            <?php if (has_post_thumbnail()): ?>
                <div class="project-wrapper grid-item mb_40 <?php echo esc_attr($atts['portfolio_column']); ?>    project_category-<?php echo esc_attr($value['query_category']);?>"> 
                    <?php do_action('get_risehand_portfolio_card_2'); ?>
                </div>
            <?php endif; ?>
        <?php elseif($atts['portfolio_styles'] == 'style_three'): ?>
            <?php if (has_post_thumbnail()): ?>
                <div class="project-wrapper grid-item mb_40 <?php echo esc_attr($atts['portfolio_column']); ?>    project_category-<?php echo esc_attr($value['query_category']);?>"> 
                    <?php do_action('get_risehand_portfolio_card_3'); ?>
                </div>
            <?php endif; ?>
        <?php elseif($atts['portfolio_styles'] == 'style_four'): ?>
            <?php if (has_post_thumbnail()): ?>
            <div class="project-wrapper grid-item mb_40 <?php echo esc_attr($atts['portfolio_column']); ?>    project_category-<?php echo esc_attr($value['query_category']);?>"> 
                <?php do_action('get_risehand_portfolio_card_4'); ?>
            </div>  
            <?php endif; ?>
        <?php else: ?> 
            <?php if (has_post_thumbnail()): ?>
            <div class="project-wrapper grid-item mb_40 <?php echo esc_attr($atts['portfolio_column']); ?>    project_category-<?php echo esc_attr($value['query_category']);?>"> 
            <?php do_action('get_risehand_portfolio_card_1'); ?>
            </div> 
            <?php endif; ?>
        <?php endif; ?>
        <?php // portfolio card end ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>  

    <?php endforeach; ?>
    <?php endif; ?> 
    </div>   
</div>
<?php endif; ?>            
</section>

<?php
return ob_get_clean();
}