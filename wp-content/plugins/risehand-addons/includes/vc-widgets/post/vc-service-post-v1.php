<?php
add_action( 'vc_before_init', 'vc_service_v1_vcmap' );
function vc_service_v1_vcmap() {
 vc_map( array(
  "name" => __( "Service Grid v1", "risehand-addons" ),
  "base" => "service_post_v1_init",
  "class" => "",
  "icon" => "icon-risehand-svg", 
  "category" => __( "Risehand Post", "risehand-addons"),
  "params" => array( 
    array(
        'type'       => 'dropdown',
        'heading'    => esc_html__('Service Style  ', 'risehand-addons'),
        'param_name' => 'service_styles',
        'value'      => array( 
            esc_html__( 'Style 1 With Image', 'risehand-addons' ) => 'style_one' ,
            esc_html__( 'Style 1 Without Image', 'risehand-addons' ) => 'style_two' , 
            esc_html__( 'Style 2 With Image', 'risehand-addons' ) => 'style_three' ,
            esc_html__( 'Style 2 Without Image', 'risehand-addons' ) => 'style_four' , 
            esc_html__( 'Style 3', 'risehand-addons' ) => 'style_five' ,  
            esc_html__( 'Style 4', 'risehand-addons' ) => 'style_six' ,
        ),
        'group' => esc_html__('General', 'risehand-addons') ,
      ),
      
      array(
        'type'       => 'dropdown',
        'heading'    => esc_html__('Column Size ', 'risehand-addons'),
        'param_name' => 'service_column',
        'value'      => array( 
            esc_html__( 'Four Column', 'risehand-addons' ) => 'col-xl-3 col-lg-4 col-md-6 col-sm-6' ,
            esc_html__( 'Three Column', 'risehand-addons' ) => 'col-xl-4 col-lg-4 col-md-6 col-sm-6' ,
            esc_html__( 'Two Column', 'risehand-addons' ) => 'col-xl-6 col-lg-6 col-md-6 col-sm-6' ,
            esc_html__( 'One Column', 'risehand-addons' ) => 'col-xl-12' ,
        ), 
        'group' => esc_html__('General', 'risehand-addons') , 
      ), 
      array(
        'type' => 'textfield',
        'heading' => esc_html__('Post Count', 'risehand-addons') ,
        'param_name' => 'post_count',
        'value' => esc_html__('4', 'risehand-addons') ,
        'group' => esc_html__('General', 'risehand-addons') ,
     ) , 
     array(
        'type' => 'textfield',
        'heading' => esc_html__('Enter the Post Id to dispay that Post Only', 'risehand-addons') ,
        'param_name' => 'post_id',
        'value' => esc_html__('', 'risehand-addons') ,
        'group' => esc_html__('General', 'risehand-addons') ,
     ) ,
     array(
        'type' => 'textfield',
        'heading' => esc_html__('Enter the Post id number that do not disaply post', 'risehand-addons') ,
        'param_name' => 'post_not_in',
        'value' => esc_html__('', 'risehand-addons') ,
        'group' => esc_html__('General', 'risehand-addons') ,
    ) , 
     array(
        'type'       => 'dropdown',
        'heading'    => esc_html__('Order By', 'risehand-addons'),
        'param_name' => 'query_orderby',
        'value'      => array( 
            esc_html__( 'Date', 'risehand-addons' ) => 'date' ,
            esc_html__( 'Title', 'risehand-addons' ) => 'Title' ,
            esc_html__( 'Menu Order', 'risehand-addons' ) => 'menu_order' ,
            esc_html__( 'Random', 'risehand-addons' ) => 'rand' , 
            esc_html__( 'Publish Date', 'risehand-addons' ) => 'publish_date' ,
        ), 
        'group' => esc_html__('General', 'risehand-addons') ,
      ),

      array(
        'type'       => 'dropdown',
        'heading'    => esc_html__('Order', 'risehand-addons'),
        'param_name' => 'query_order',
        'value'      => array( 
            esc_html__( 'DESC', 'risehand-addons' ) => 'DESC' ,
            esc_html__( 'ASC', 'risehand-addons' ) => 'ASC' , 
        ),
        'group' => esc_html__('General', 'risehand-addons') ,
      ),
 
      array(
        'type'       => 'dropdown',
        'heading'    => esc_html__('Category', 'risehand-addons'),
        'param_name' => 'query_category',
        'value'      => risehand_get_service_categories(),
        'group' => esc_html__('General', 'risehand-addons') ,
      ),
      array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Excerpt Disable', 'risehand-addons' ),
        'param_name'  => 'excerpt_enable',
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ),
        'description' => esc_html__( 'Click Check box to enable Excerpt', 'risehand-addons' ),
        'group' => esc_html__('General', 'risehand-addons') ,
      ),
 
     array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Pagination Enable / Disable', 'risehand-addons' ),
        'param_name'  => 'pagination_enable',
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ),
        'description' => esc_html__( 'Click Check box to enable Pagination', 'risehand-addons' ),
        'group' => esc_html__('General', 'risehand-addons') ,
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
            'element' => 'pagination_enable',
            'value'   => 'yes',
        ),
      ),
   
    // styling
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Pattern Background Color', 'risehand-addons'),
        'param_name' => 'pattern_bg_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'service_styles',
            'value'   => array('style_one' , 'style_two' , 'style_three' , 'style_four' , 'style_five'),
        ), 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Box Background Color', 'risehand-addons'),
        'param_name' => 'box_bg',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Overlay Color', 'risehand-addons'),
        'param_name' => 'overlaybg',
        'group' => esc_html__('Styling', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'service_styles',
            'value'   => array('style_three' , 'style_five'),
        ),  
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Box Border Color', 'risehand-addons'),
        'param_name' => 'ser_bor_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'service_styles',
            'value'   => array('style_three' , 'style_four'),
        ),   
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Hover Box Border Color', 'risehand-addons'),
        'param_name' => 'hser_bor_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'service_styles',
            'value'   => array('style_three' , 'style_four'),
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
        'heading' => esc_html__('Category Color', 'risehand-addons'),
        'param_name' => 'c_color',
        'group' => esc_html__('Styling', 'risehand-addons') , 
        'dependency'  => array(
            'element' => 'service_styles',
            'value'   => array('style_six'),
        ),  
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Title Color', 'risehand-addons'),
        'param_name' => 'titles_color',
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Hover Title Color', 'risehand-addons'),
        'param_name' => 'htitles_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,  
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Hover Title Background Color', 'risehand-addons'),
        'param_name' => 'htitlesbg_color',
        'group' => esc_html__('Styling', 'risehand-addons') , 
        'dependency'  => array(
            'element' => 'service_styles',
            'value'   => array('style_one' , 'style_two'),
        ),  
         
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Description Color', 'risehand-addons'),
        'param_name' => 'des_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,  
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Link Color', 'risehand-addons'),
        'param_name' => 'link_color',
        'group' => esc_html__('Styling', 'risehand-addons') , 
        'dependency'  => array(
            'element' => 'service_styles',
            'value'   => array('style_one', 'style_two', 'style_three', 'style_four', 'style_six'),
        ), 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Link Hover Color', 'risehand-addons'),
        'param_name' => 'linkH_color',
        'group' => esc_html__('Styling', 'risehand-addons') , 
        'dependency'  => array(
            'element' => 'service_styles',
            'value'   => array('style_one', 'style_two', 'style_three', 'style_four', 'style_six'),
        ),  
    ),
     
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Background Color', 'risehand-addons'),
        'param_name' => 'bg_color',
        'group' => esc_html__('Styling', 'risehand-addons') , 
        'dependency'  => array(
            'element' => 'service_styles',
            'value'   => array('style_six'),
        ),
        'condition' => array(
            'service_styles' => ['style_six'],
        ),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Background Hover Color', 'risehand-addons'),
        'param_name' => 'hbg_color',
        'group' => esc_html__('Styling', 'risehand-addons') , 
        'dependency'  => array(
            'element' => 'service_styles',
            'value'   => array('style_six'),
        ), 
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
        'heading' => 'Pagitnation Color',
        'param_name' => 'hopagicolor', 
        'group' => esc_html__('Pagination Style', 'risehand-addons') ,  
        'dependency'  => array(
            'element' => 'pagination_style_enable',
            'value'   => 'yes',
        ),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => 'Pagitnation Border Color',
        'param_name' => 'hopagibrcolor', 
        'group' => esc_html__('Pagination Style', 'risehand-addons') ,  
        'dependency'  => array(
            'element' => 'pagination_style_enable',
            'value'   => 'yes',
        ),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => 'Pagitnation Background Color',
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
add_shortcode( 'service_post_v1_init', 'vc_service_post_v1' );
function vc_service_post_v1( $atts, $content = null ) { 
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
        'style_enable' => '' ,  
        'service_styles' => 'style_one',
        'normal_view' => '',
        'service_column' => 'col-xl-3 col-lg-4 col-md-6 col-sm-6',
        'post_count' => '4',
        'query_orderby' => 'date',
        'query_order' => 'DESC',
        'query_category' => '', 
        'masonory_enable' => '',
        'pagination_enable' => '',
        'pagination_alignment' => 'text-center',
        'excerpt_enable' => '',
        'post_id'         => '',  
        'post_not_in'    => '',  
        'pattern_bg_color' => '',
        'box_bg' => '',
        'overlaybg' => '',
        'ser_bor_color' => '',
        'hser_bor_color' => '',
        'icon_color' => '',
        'c_color' => '', 
        'titles_color' => '', 
        'htitles_color' => '',
        'htitlesbg_color' => '',
        'des_color' => '', 
        'link_color' => '',
        'linkH_color' => '', 
        'bg_color' => '',
        'hbg_color' => '', 
       
   ), $atts
);
ob_start();
/*-- ==== styling start ==== -- */
if($atts['pagination_style_enable'] == "yes"): 
?>
<style type="text/css" data-type="vc_shortcodes-custom">  
<?php if($atts['hopagibgcolor']): ?>
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .pagination  .page-numbers li a:hover ,   
      .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .pagination  .page-numbers li  span.current    
    { background:<?php echo esc_attr($atts['hopagibgcolor']); ?>;  } 
<?php endif; ?> 
<?php if($atts['hopagibrcolor']): ?>
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .pagination  .page-numbers li a:hover ,   
      .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .pagination  .page-numbers li  span.current     
    { border-color:<?php echo esc_attr($atts['hopagibrcolor']); ?>;  } 
<?php endif; ?> 
<?php if($atts['hopagicolor']): ?>
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .pagination  .page-numbers li a:hover ,   
      .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .pagination  .page-numbers li  span.current   
    { color:<?php echo esc_attr($atts['hopagicolor']); ?>;  } 
<?php endif; ?> 
<?php if($atts['pagibgcolor']): ?>
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .pagination  .page-numbers li a  
    { background:<?php echo esc_attr($atts['pagibgcolor']); ?>;  } 
<?php endif; ?> 
<?php if($atts['pagibrcolor']): ?>
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .pagination  .page-numbers li a   
    { border-color:<?php echo esc_attr($atts['pagibrcolor']); ?>;  } 
<?php endif; ?> 
<?php if($atts['pagicolor']): ?>
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .pagination  .page-numbers li a ,   
      .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .pagination  .page-numbers li a span
    { color:<?php echo esc_attr($atts['pagicolor']); ?>;  } 
<?php endif; ?> 
</style>
<?php
endif; 
 
?>
<style type="text/css" data-type="vc_shortcodes-custom"> 
    <?php if($atts['pattern_bg_color']): ?>
        .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .service-style_1 .content_box_outer .icon .spattern_bg  , 
        .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .service-style_2 .content_box_outer .spattern_bg , .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .service-style_3 .image-box .icon .spattern_bg {
            background:<?php echo esc_attr($atts['pattern_bg_color']); ?>;
        }
    <?php endif; ?> 
    <?php if($atts['box_bg']): ?>  
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .service-style_1,
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .service-style_2,
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .service-style_3 .content_box_outer .content_box_in,
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .service-style_4 {
        background: <?php echo esc_attr($atts['box_bg']); ?>;
    }
    <?php endif; ?>
    <?php if($atts['overlaybg']): ?> 
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .service-style_2.with_img.has_images .image-box .img_link::before,
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .service-style_3 .image-box .img_link::before {
        background: <?php echo esc_attr($atts['overlaybg']); ?>;
    }
    <?php endif; ?>
    <?php if($atts['ser_bor_color']): ?> 
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .service-style_2 {
        border-color: <?php echo esc_attr($atts['ser_bor_color']); ?>;
    }
    <?php endif; ?>
    <?php if($atts['hser_bor_color']): ?> 
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .service-style_2:hover {
        border-color: <?php echo esc_attr($atts['hser_bor_color']); ?>;
    }
    <?php endif; ?>
    <?php if($atts['icon_color']): ?> 
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .service-style_3 .icon i,
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .service-style_2 .icon i,
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .service-style_1 .icon i,
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .service-style_4 .icon i {
        color: <?php echo esc_attr($atts['icon_color']); ?>;
    }
    <?php endif; ?>
    <?php if($atts['c_color']): ?> 
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .service-style_4 .content_box_in p a {
        color: <?php echo esc_attr($atts['c_color']); ?>; 
    }
    <?php endif; ?>
    <?php if($atts['titles_color']): ?> 
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .service-style_1 .title_no_a_24,
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .service-style_1 .title_20 a,
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .service-style_1 .title_24 a,
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .service-style_3 .title_24 a,
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .service-style_4 .title_24 a {
        color: <?php echo esc_attr($atts['titles_color']); ?>; 
    }
    <?php endif; ?>
    <?php if($atts['htitles_color']): ?> 
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .service-style_1 .title_20 a,
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .service-style_1 .title_24 a:hover,
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .service-style_2 .title_24 a:hover,
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .service-style_3 .title_24 a:hover,
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .service-style_4 .title_24 a:hover {
        color: <?php echo esc_attr($atts['htitles_color']); ?>;
    }
    <?php endif; ?>
    <?php if($atts['htitlesbg_color']): ?> 
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .service-style_1 .title_20 {
        background: <?php echo esc_attr($atts['htitlesbg_color']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['des_color']): ?> 
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .service-style_1 .des_cription,
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .service-style_2 .des_cription,
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .service-style_3 .des_cription,
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .service-style_4 .des_cription {
        color: <?php echo esc_attr($atts['des_color']); ?>; 
    }
    <?php endif; ?>
    <?php if($atts['link_color']): ?> 
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .service-style_1 .text_btn small,
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .service-style_2 .text_btn small,
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .service-style_4 .content_box_in .theme_btn {
        color: <?php echo esc_attr($atts['link_color']); ?>;
        text-decoration-color: <?php echo esc_attr($atts['link_color']); ?>; 
    } 
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .service-style_1 .text_btn small:before,
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .service-style_2 .text_btn small:before {
        background: <?php echo esc_attr($atts['link_color']); ?>;
    }
    <?php endif; ?>
    <?php if($atts['linkH_color']): ?> 
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .service-style_1 .text_btn:hover small,
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .service-style_2 .text_btn:hover small,
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .service-style_4 .content_box_in .theme_btn:hover {
        color: <?php echo esc_attr($atts['linkH_color']); ?>;
        text-decoration-color: <?php echo esc_attr($atts['linkH_color']); ?>;
    } 
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .service-style_1 .text_btn:hover small:before,
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .service-style_2 .text_btn:hover small:before {
        background: <?php echo esc_attr($atts['linkH_color']); ?>;
    }
    <?php endif; ?>
    <?php if($atts['bg_color']): ?> 
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .service-style_4 .content_box_in .theme_btn {
        background: <?php echo esc_attr($atts['bg_color']); ?>;
    }
    <?php endif; ?>
    <?php if($atts['hbg_color']): ?> 
    .service_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .service-style_4 .content_box_in .theme_btn:hover {
        background: <?php echo esc_attr($atts['hbg_color']); ?>;
    }
    <?php endif; ?>
</style> 
<?php
 
/*-- ==== styling end ==== -- */

$allowed_tags = wp_kses_allowed_html('post');

?>

<section class="service_post_section unique-id-<?php echo esc_attr($unique_id); ?>
<?php if($atts['excerpt_enable'] == "yes"): ?> excerpt_enable<?php  endif; ?>">
    <div class="row">
        <?php 
        if(get_query_var('paged')){ 
            $paged = get_query_var( 'paged' ); 
        } elseif ( get_query_var( 'page' ) ) { 
            $paged = get_query_var( 'page' ); 
        } else { 
            $paged = 1; 
        }
        $post_in = '';
        if(!empty($atts['post_id'])){
             $post_in = explode(',', $atts['post_id']);
        }
        $post_not_in = '';
        if(!empty($value['post_not_in'])){
            $post_not_in = explode(',', $value['post_not_in']);
        }
         $args = array(
            'post_type' => 'service',
            'ignore_sticky_posts' => true, 
            'paged'             => $paged,
            'posts_per_page' => $atts['post_count'],
            'orderby'        => $atts['query_orderby'],
            'order'          =>  $atts['query_order'],
            'post__in'         => $post_in,  
            'post__not_in'   =>  $post_not_in,
        );
        if( $atts['query_category'] ) $args['service_category'] = $atts['query_category'];
        $service_grid_query = new \WP_Query( $args ); 
        ?>
        <?php while ($service_grid_query->have_posts()) : ?>
        <?php $service_grid_query->the_post(); ?>
        <?php global $post;  
        // service card ?>
        <?php if($atts['service_styles'] == 'style_two'): ?>
            <div class="<?php echo esc_attr($atts['service_column']); ?>"> 
                <?php do_action('get_risehand_service_card_1_no_image'); ?>
            </div>
        <?php elseif($atts['service_styles'] == 'style_three'): ?>
            <div class="<?php echo esc_attr($atts['service_column']); ?>"> 
                <?php do_action('get_risehand_service_card_2'); ?>
            </div>
        <?php elseif($atts['service_styles'] == 'style_four'): ?>
            <div class="<?php echo esc_attr($atts['service_column']); ?>"> 
                <?php do_action('get_risehand_service_card_2_no_image'); ?>
            </div>
        <?php elseif($atts['service_styles'] == 'style_five'): ?>
            <div class="<?php echo esc_attr($atts['service_column']); ?>"> 
                <?php do_action('get_risehand_service_card_3'); ?>
            </div>
        <?php elseif($atts['service_styles'] == 'style_six'): ?>
            <div class="<?php echo esc_attr($atts['service_column']); ?>"> 
                <?php do_action('get_risehand_service_card_4'); ?>
            </div>
        <?php else: ?> 
            <div class="<?php echo esc_attr($atts['service_column']); ?>">  
                <?php do_action('get_risehand_service_card_1'); ?>
            </div> 
        <?php endif; ?>
        <?php // service card end ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

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
                    'total' => $service_grid_query->max_num_pages,
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
</section> 
<?php
return ob_get_clean();
}