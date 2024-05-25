<?php
add_action( 'vc_before_init', 'vc_blog_post_v1_vcmap' );
function vc_blog_post_v1_vcmap() {
 vc_map( array(
  "name" => __( "Blog Grid V1", "risehand-addons" ),
  "base" => "blog_post_v1_init",
  "class" => "",
  "icon" => "icon-risehand-svg", 
  "category" => __( "Risehand Post", "risehand-addons"),
  "params" => array( 
   
    array(
        'type'       => 'dropdown',
        'heading'    => esc_html__('Card Style  ', 'risehand-addons'),
        'param_name' => 'news_styles',
        'value'      => array( 
            esc_html__( 'Style One', 'risehand-addons' ) => 'style_one' ,
            esc_html__( 'Style Two', 'risehand-addons' ) => 'style_two' , 
            esc_html__( 'Style Three', 'risehand-addons' ) => 'style_four' ,   
            esc_html__( 'Style Four', 'risehand-addons' ) => 'style_six' , 
            esc_html__( 'Style Five', 'risehand-addons' ) => 'style_seven' ,  
        ),
        'group' => esc_html__('General', 'risehand-addons') ,
      ), 
      array(
        'type'       => 'dropdown',
        'heading'    => esc_html__('Column Size ', 'risehand-addons'),
        'param_name' => 'news_column',
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
        'heading' => esc_html__('Enter the Post Id to dispay', 'risehand-addons') ,
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
        'param_name' => 'query_orderby',
        'value'      => array( 
            esc_html__( 'Date', 'risehand-addons' ) => 'date' ,
            esc_html__( 'Title', 'risehand-addons' ) => 'Title' ,
            esc_html__( 'Menu Order', 'risehand-addons' ) => 'menu_order' ,
            esc_html__( 'Random', 'risehand-addons' ) => 'rand' ,
  
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
        'default' => 'DESC',
        'group' => esc_html__('General', 'risehand-addons') ,
      ),
      array(
        'type'       => 'dropdown',
        'heading'    => esc_html__('Category', 'risehand-addons'),
        'param_name' => 'query_category',
        'value'      => risehand_get_blog_categories(),
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
        'heading'     => esc_html__( 'Comment Disable', 'risehand-addons' ),
        'param_name'  => 'comment_enable',
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ),
        'description' => esc_html__( 'Click Check box to enable Comment', 'risehand-addons' ),
        'group' => esc_html__('General', 'risehand-addons') ,
      ),
      array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Date Disable', 'risehand-addons' ),
        'param_name'  => 'dte_enable',
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ),
        'description' => esc_html__( 'Click Check box to enable Date', 'risehand-addons' ),
        'group' => esc_html__('General', 'risehand-addons') ,
      ),
    
      array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Masonry Enable / Disable', 'risehand-addons' ),
        'param_name'  => 'masonry_enable',
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
      array(
        'type' => 'textfield',
        'heading' => esc_html__('Image Height', 'risehand-addons') ,
        'param_name' => 'image_height',
        'value' => esc_html__('', 'risehand-addons') ,
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'news_styles',
            'value'   => array('style_two' , 'style_eight'),
        ), 
     ) , 
     array(
        'type' => 'textfield',
        'heading' => esc_html__('Blog Card Margin Bottom', 'risehand-addons') ,
        'param_name' => 'margin_bottom',
        'value' => esc_html__('', 'risehand-addons') ,
        'group' => esc_html__('General', 'risehand-addons') ,  
     ) , 
     
    // styling
    array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Styling Enable / Disable', 'risehand-addons' ),
        'param_name'  => 'style_enable',
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ),
        'description' => esc_html__( 'Click Check box to enable Custom Styling', 'risehand-addons' ),
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => 'Box Background Color',
        'param_name' => 'boxbg', 
        'group' => esc_html__('Styling', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'style_enable',
            'value'   => 'yes',
        ),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => 'Box Border Color',
        'param_name' => 'boxbrcolor', 
        'group' => esc_html__('Styling', 'risehand-addons') ,
        'description' => esc_html__('Box border color is for only style 4 and 5', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'style_enable',
            'value'   => 'yes',
        ),
    ),

    array(
        'type' => 'colorpicker',
        'heading' => 'Category Color',
        'param_name' => 'catcolor', 
        'group' => esc_html__('Styling', 'risehand-addons') , 
        'dependency'  => array(
            'element' => 'style_enable',
            'value'   => 'yes',
        ),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => 'Category Background Color',
        'param_name' => 'catbgcolor', 
        'group' => esc_html__('Styling', 'risehand-addons') , 
        'dependency'  => array(
            'element' => 'style_enable',
            'value'   => 'yes',
        ),
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => 'Meta  Color',
        'param_name' => 'metacolor', 
        'group' => esc_html__('Styling', 'risehand-addons') , 
        'dependency'  => array(
            'element' => 'style_enable',
            'value'   => 'yes',
        ),
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => 'Title Color',
        'param_name' => 'titlecolor', 
        'group' => esc_html__('Styling', 'risehand-addons') , 
        'dependency'  => array(
            'element' => 'style_enable',
            'value'   => 'yes',
        ),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => 'Description Color',
        'param_name' => 'descolor', 
        'group' => esc_html__('Styling', 'risehand-addons') , 
        'dependency'  => array(
            'element' => 'style_enable',
            'value'   => 'yes',
        ),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => 'Read More Color',
        'param_name' => 'rdcolor', 
        'group' => esc_html__('Styling', 'risehand-addons') , 
        'dependency'  => array(
            'element' => 'style_enable',
            'value'   => 'yes',
        ),
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => 'Image Overlay Color',
        'param_name' => 'overlaybg', 
        'group' => esc_html__('Styling', 'risehand-addons') , 
        'dependency'  => array(
            'element' => 'style_enable',
            'value'   => 'yes',
        ),
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => 'Image Gradient Color',
        'param_name' => 'gradientcolor', 
        'group' => esc_html__('Styling', 'risehand-addons') , 
        'description' => esc_html__('Gradient Color is only for style 3', 'risehand-addons') , 
        'dependency'  => array(
            'element' => 'style_enable',
            'value'   => 'yes',
        ),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => 'Hover Title Color',
        'param_name' => 'hovertitlecolor', 
        'group' => esc_html__('Styling', 'risehand-addons') ,  
        'dependency'  => array(
            'element' => 'style_enable',
            'value'   => 'yes',
        ),
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => 'Hover Read More Color',
        'param_name' => 'hoverrdmorecolor', 
        'group' => esc_html__('Styling', 'risehand-addons') ,  
        'dependency'  => array(
            'element' => 'style_enable',
            'value'   => 'yes',
        ),
    ),

    array(
        'type' => 'colorpicker',
        'heading' => 'Hover Category Color',
        'param_name' => 'hovercatcolor', 
        'group' => esc_html__('Styling', 'risehand-addons') ,  
        'dependency'  => array(
            'element' => 'style_enable',
            'value'   => 'yes',
        ),
    ),

    array(
        'type' => 'colorpicker',
        'heading' => 'Hover Category Background Color',
        'param_name' => 'hovercatbgcolor', 
        'group' => esc_html__('Styling', 'risehand-addons') ,  
        'dependency'  => array(
            'element' => 'style_enable',
            'value'   => 'yes',
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

add_shortcode( 'blog_post_v1_init', 'vc_blog_post_v1' );
function vc_blog_post_v1( $atts, $content = null ) { 
    $unique_id = uniqid();
    $atts = shortcode_atts(
    array(  
        'hopagibgcolor' => '' , 
        'hopagibrcolor' => '' , 
        'hopagicolor' => '' , 
        'pagibgcolor' => '' , 
        'pagibrcolor' => '' , 
        'pagicolor' => '' , 
        'pagination_style_enable' => 'yes' , 
        'style_enable' => 'yes' , 
        'boxbg' => '' ,
        'boxbrcolor' => '' ,
        'catcolor' => '' ,
        'catbgcolor' => '' ,
        'metacolor' => '' , 
        'titlecolor' => '' ,
        'descolor' => '' ,
        'rdcolor' => '' ,
        'overlaybg' => '' ,
        'gradientcolor' => '' ,
        'hovertitlecolor' => '' ,
        'hoverrdmorecolor' => '' ,
        'hovercatcolor' => '' ,
        'hovercatbgcolor' => '' , 
        'news_styles' => 'style_one',
        'normal_view' => '',
        'news_column' => 'col-xl-3 col-lg-4 col-md-6 col-sm-6',
        'post_count' => '4', 
        'query_orderby' => 'date',
        'query_order' => 'DESC',
        'query_category' => '',
        'excerpt_enable' => '',
        'post_id'         => '',  
        'text_limit' => '12',
        'comment_enable'  => '',
        'dte_enable' => '',
        'masonory_enable' => '',
        'pagination_enable' => 'no',
        'pagination_alignment' => 'text-center',
        'image_height' => '',
        'margin_bottom' => '',
        'masonry_enable' => '',
        'post_id_not' => '' , 
   ), $atts
);
ob_start();
/*-- ==== styling start ==== -- */
if(!empty($atts['image_height'])): 
?>
<style type="text/css" data-type="vc_shortcodes-custom">  
    .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .blog-style_2 .image-box img{
        height: <?php echo esc_attr($atts['image_height']); ?>;
    }
</style>
<?php
endif; 
if(!empty($atts['margin_bottom'])): 
    ?>
    <style type="text/css" data-type="vc_shortcodes-custom">  
        .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .mb_40{
            margin-bottom: <?php echo esc_attr($atts['margin_bottom']); ?>;
        }
    </style>
    <?php
endif; 
if(!empty($atts['pagination_style_enable']) == "yes"): 
?>
<style type="text/css" data-type="vc_shortcodes-custom">
<?php if($atts['hopagibgcolor']): ?>
    .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .pagination  .page-numbers li a:hover ,   
      .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .pagination  .page-numbers li  span.current    
    { background:<?php echo esc_attr($atts['hopagibgcolor']); ?>;   } 
<?php endif; ?> 
<?php if($atts['hopagibrcolor']): ?>
    .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .pagination  .page-numbers li a:hover ,   
      .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .pagination  .page-numbers li  span.current     
    { border-color:<?php echo esc_attr($atts['hopagibrcolor']); ?>;   } 
<?php endif; ?> 
<?php if($atts['hopagicolor']): ?>
    .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .pagination  .page-numbers li a:hover ,   
      .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .pagination  .page-numbers li  span.current   
    { color:<?php echo esc_attr($atts['hopagicolor']); ?>;   } 
<?php endif; ?> 
<?php if($atts['pagibgcolor']): ?>
    .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .pagination  .page-numbers li a  
    { background:<?php echo esc_attr($atts['pagibgcolor']); ?>;   } 
<?php endif; ?> 
<?php if($atts['pagibrcolor']): ?>
    .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .pagination  .page-numbers li a   
    { border-color:<?php echo esc_attr($atts['pagibrcolor']); ?>;   } 
<?php endif; ?> 
<?php if($atts['pagicolor']): ?>
    .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .pagination  .page-numbers li a ,   
      .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .pagination  .page-numbers li a span
    { color:<?php echo esc_attr($atts['pagicolor']); ?>;   } 
<?php endif; ?> 
</style>
<?php
endif;
if(!empty($atts['style_enable']) == "yes"): 
?>
<style type="text/css" data-type="vc_shortcodes-custom">
<?php if($atts['hovercatbgcolor']): ?>
.blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .blog-style_1:hover .content_box_outer .content_box .d-flex .cat_gry   ,
.blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?>  .blog-style_2:hover .image-box .cat_gry ,
.blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?>  .blog-style_3:hover .image-box .cat_gry ,
.blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .blog-style_4:hover .content_box .cat_gry , 
.blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?>  .blog-style_6:hover .image-box .cat_gry ,
.blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?>  .blog-style_7:hover .image-box .cat_gry
{ background:<?php echo esc_attr($atts['hovercatbgcolor']); ?>; border-color:<?php echo esc_attr($atts['hovercatbgcolor']); ?>;} 
<?php endif; ?> 
<?php if($atts['hovercatcolor']): ?>
.blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .blog-style_1:hover .content_box_outer .content_box .d-flex .cat_gry  ,
.blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .blog-style_2:hover .image-box .cat_gry ,
.blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?>  .blog-style_3:hover .image-box .cat_gry ,
.blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .blog-style_4:hover .content_box .cat_gry , 
.blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?>  .blog-style_6:hover .image-box .cat_gry ,
.blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?>  .blog-style_7:hover .image-box .cat_gry
{ color:<?php echo esc_attr($atts['hovercatcolor']); ?>; } 
<?php endif; ?> 
<?php if($atts['hoverrdmorecolor']): ?>
    .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .text_btn:hover small  { color:<?php echo esc_attr($atts['hoverrdmorecolor']); ?>; } 
<?php endif; ?> 
<?php if($atts['hoverrdmorecolor']): ?>
    .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .text_btn:hover small:before  { background:<?php echo esc_attr($atts['hoverrdmorecolor']); ?>; } 
<?php endif; ?> 
<?php if($atts['hovertitlecolor']): ?>
    .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .title_24 a:hover  ,
      .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .title_26 a:hover
      { color:<?php echo esc_attr($atts['hovertitlecolor']); ?>!important; text-decoration-color:<?php echo esc_attr($atts['hovertitlecolor']); ?>!important; } 
<?php endif; ?> 
<?php if($atts['gradientcolor']): ?>
    .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .blog-style_3 .image-box:after  { background:linear-gradient(0deg, <?php echo esc_attr($atts['gradientcolor']); ?> 6%, rgba(0, 0, 0, 0) 122%) } 
<?php endif; ?> 
<?php if($atts['overlaybg']): ?>
    .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?>  .image-box .img_link::before   
    { background:<?php echo esc_attr($atts['overlaybg']); ?>; } 
<?php endif; ?> 
<?php if($atts['rdcolor']): ?>
    .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?>  .text_btn small  ,   .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?>  .text_btn a
    { color:<?php echo esc_attr($atts['rdcolor']); ?>; } 
<?php endif; ?> 
 
<?php if($atts['descolor']): ?>
    .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?>  .des_cription  { color:<?php echo esc_attr($atts['descolor']); ?>; } 
<?php endif; ?> 
<?php if($atts['titlecolor']): ?>
    .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .title_24 a  ,
      .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .title_26 a
       { color:<?php echo esc_attr($atts['titlecolor']); ?>!important; } 
<?php endif; ?> 
 
<?php if($atts['metacolor']): ?>
    .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?>  .date_tm time , .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?>    .date_tm i ,
    .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .comments a  ,  .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .comments ,  
    .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .comments i
     { color:<?php echo esc_attr($atts['metacolor']); ?>!important; } 
<?php endif; ?> 
<?php if($atts['catbgcolor']): ?>
    .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .blog-style_1 .content_box_outer .content_box   .cat_gry , 
    .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .blog-style_2 .image-box .cat_gry ,
    .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?>  .blog-style_3 .image-box .cat_gry ,
    .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .blog-style_4 .content_box .cat_gry , 
    .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?>  .blog-style_6 .image-box .cat_gry ,
    .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?>  .blog-style_7 .image-box .cat_gry
    { background:<?php echo esc_attr($atts['catbgcolor']); ?>;  border-color:<?php echo esc_attr($atts['catbgcolor']); ?>; } 
<?php endif; ?> 
<?php if($atts['catcolor']): ?>
    .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .blog-style_1 .content_box_outer .content_box  .cat_gry ,
    .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .blog-style_2 .image-box .cat_gry ,
    .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?>  .blog-style_3 .image-box .cat_gry ,
    .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .blog-style_4 .content_box .cat_gry , 
    .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?>  .blog-style_6 .image-box .cat_gry ,
    .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?>  .blog-style_7 .image-box .cat_gry
       { color:<?php echo esc_attr($atts['catcolor']); ?>; } 
<?php endif; ?> 
<?php if($atts['boxbg']): ?>
    .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .blog-style_1 .content_box_outer .content_box  ,
    .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .blog-style_2 , 
    .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?>  .blog-style_4 ,  
    .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?>  .blog-style_6 ,
    .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?>  .blog-style_7  
    { background:<?php echo esc_attr($atts['boxbg']); ?>; } 
<?php endif; ?> 
<?php if($atts['boxbrcolor']): ?>
    .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .blog-style_4:hover .content_box  , 
    .blog_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .blog-style_7 .content_box .d-flex 
    { border-color:<?php echo esc_attr($atts['boxbrcolor']); ?>; } 
<?php endif; ?> 
</style> 
<?php
endif;
/*-- ==== styling end ==== -- */
$masonry_enable  = isset($atts['masonry_enable']) ? $atts['masonry_enable'] : '';
$masonry_class = "";
if($masonry_enable == "yes"){
    $masonry_class = "blog-wrapper";
}
$allowed_tags = wp_kses_allowed_html('post');

?> 
<section class="blog_post_section unique-id-<?php echo esc_attr($unique_id); ?><?php if($atts['excerpt_enable'] == "yes"): ?> excerpt_enable<?php endif; ?><?php if($atts['comment_enable'] == "yes"): ?> comment_enable<?php endif; ?><?php if($atts['dte_enable'] == "yes"): ?> dte_enable<?php endif; ?>">
    <div class="row <?php if($masonry_enable == "yes"): ?>  blog_container clearfix<?php endif; ?>">
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
        $post_id_not = '';
        if(!empty($atts['post_id_not'])){
             $post_id_not = explode(',', $atts['post_id_not']);
        } 
        $args = array(
            'post_type' => 'post',
            'ignore_sticky_posts' => true, 
            'paged'             => $paged,
            'posts_per_page' => $atts['post_count'],
            'orderby'        => $atts['query_orderby'],
            'order'          =>  $atts['query_order'],
            'post__in'         => $post_in,  
            'post__not_in'         => $post_id_not,  
        );
        
        if ($atts['query_category']) {
            $args['tax_query'] = array(
                array(
                    'taxonomy' => 'category',
                    'field'    => 'slug',
                    'terms'    => $atts['query_category'],
                ),
            );
        } 
        $blog_grid_query = new \WP_Query( $args ); 
        ?>
        <?php while ($blog_grid_query->have_posts()) : ?>
        <?php $blog_grid_query->the_post(); ?>
        <?php global $post;  
        // blog card ?>
        <?php if($atts['news_styles'] == 'style_two'): ?>
            <div class="<?php echo esc_attr($atts['news_column']); ?> <?php echo esc_attr($masonry_class); ?>  "> 
                <?php do_action('get_risehand_blog_card_2'); ?>
            </div>  
        <?php elseif($atts['news_styles'] == 'style_four'): ?>
            <div class="<?php echo esc_attr($atts['news_column']); ?> <?php echo esc_attr($masonry_class); ?>  "> 
                <?php do_action('get_risehand_blog_card_4'); ?>
            </div>  
        <?php elseif($atts['news_styles'] == 'style_six'): ?>
            <div class="<?php echo esc_attr($atts['news_column']); ?> <?php echo esc_attr($masonry_class); ?>  "> 
                <?php do_action('get_risehand_blog_card_6'); ?>
            </div> 
        <?php elseif($atts['news_styles'] == 'style_seven'): ?>
            <div class="<?php echo esc_attr($atts['news_column']); ?> <?php echo esc_attr($masonry_class); ?>  "> 
                <?php do_action('get_risehand_blog_card_7'); ?>
            </div>  
        <?php else: ?> 
            <div class="<?php echo esc_attr($atts['news_column']); ?> <?php echo esc_attr($masonry_class); ?>  "> 
            <?php do_action('get_risehand_blog_card_1'); ?>
            </div> 
        <?php endif; ?>
        <?php // blog card end ?>
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
                    'total' => $blog_grid_query->max_num_pages,
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