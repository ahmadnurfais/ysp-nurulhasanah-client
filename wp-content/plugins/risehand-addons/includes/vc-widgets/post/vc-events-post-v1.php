<?php  
function vc_risehand_get_events_cat() {
    $options = array();
    $taxonomy = 'tribe_events_cat';
    if (!empty($taxonomy)) {
        $terms = get_terms(
            array(
                'parent' => 0,
                'taxonomy' => $taxonomy,
                'hide_empty' => false,
                )
            );
            if (!empty($terms)) {
                foreach ($terms as $term) {
                if (isset($term)) {
                    $options[''] = 'Select';
                    if (isset($term->slug) && isset($term->name)) {
                        $options[$term->name] = $term->slug; 
                    }
                }
            }
        }
    }
return $options;
}
add_action( 'vc_before_init', 'vc_events_post_v1_vcmap' );
function vc_events_post_v1_vcmap() {
 vc_map( array(
  "name" => __( "Events Grid V1", "risehand-addons" ),
  "base" => "events_v1_init",
  "class" => "",
  "icon" => "icon-risehand-svg", 
  "category" => __( "Risehand Post", "risehand-addons"),
  "params" => array(  
    array(
        'type'       => 'dropdown',
        'heading'    => esc_html__('Card Style  ', 'risehand-addons'),
        'param_name' => 'event_styles',
        'value'      => array(  
            esc_html__( 'Style One', 'risehand-addons' ) => 'style_three' ,  
            esc_html__( 'Style Two', 'risehand-addons' ) => 'style_eight' , 
            esc_html__( 'Style Three', 'risehand-addons' ) => 'style_five' , 
        ),
        'group' => esc_html__('General', 'risehand-addons') ,
      ), 
      array(
        'type'       => 'dropdown',
        'heading'    => esc_html__('Column Size ', 'risehand-addons'),
        'param_name' => 'events_column',
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
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Category Disable', 'risehand-addons' ),
        'param_name'  => 'query_category_enable',
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ),
        'description' => esc_html__( 'Click Check box to enable Excerpt', 'risehand-addons' ),
        'group' => esc_html__('General', 'risehand-addons') ,
      ),
      array(
        'type'       => 'dropdown',
        'heading'    => esc_html__('Event Category', 'risehand-addons'),
        'param_name' => 'query_category',
        'value'      => vc_risehand_get_events_cat(),
        'group' => esc_html__('General', 'risehand-addons') , 
        'dependency'  => array(
            'element' => 'query_category_enable',
            'value'   => 'yes',
        ),
      ), 
      array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Excerpt  Enable / Disable', 'risehand-addons' ),
        'param_name'  => 'excerpt_enable',
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ),
        'description' => esc_html__( 'Click Check box to enable Excerpt', 'risehand-addons' ),
        'group' => esc_html__('General', 'risehand-addons') ,
      ),
      array(
        'type' => 'textfield',
        'heading' => esc_html__('Text Limit Count', 'risehand-addons') ,
        'param_name' => 'events_excerpt_count',
        'value' => esc_html__('14', 'risehand-addons') ,
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'excerpt_enable',
            'value'   => 'yes',
        ),
     ) , 
     
      array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Event Location Enable /  Disable', 'risehand-addons' ),
        'param_name'  => 'events_loca_enable',
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ),
        'description' => esc_html__( 'Click Check box to enable Excerpt', 'risehand-addons' ),
        'group' => esc_html__('General', 'risehand-addons') ,
      ),
       
      array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Date Enable / Disable', 'risehand-addons' ),
        'param_name'  => 'events_timing_enable',
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
        'type' => 'textfield',
        'heading' => esc_html__('Image Height', 'risehand-addons') ,
        'param_name' => 'image_height',
        'value' => esc_html__('', 'risehand-addons') ,
        'group' => esc_html__('General', 'risehand-addons') ,
        'dependency'  => array(
            'element' => 'event_styles',
            'value'   => 'style_eight',
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
    
)));
}

// shortcode

add_shortcode( 'events_v1_init', 'vc_events_post_v1' );
function vc_events_post_v1( $atts, $content = null ) { 
    $unique_id = uniqid();
    $atts = shortcode_atts(
    array( 
        'query_event_location' => '', 
        'style_enable' => '' , 
        'boxbg' => '' , 
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
        'event_styles' => 'style_three',
        'normal_view' => '',
        'events_column' => 'col-xl-3 col-lg-4 col-md-6 col-sm-6',
        'post_count' => '4', 
        'query_orderby' => 'date',
        'query_order' => 'DESC',
        'query_category_enable' => '',
        'query_category' => '',
        'excerpt_enable' => '',
        'events_excerpt_count'  => '14', 
        'events_loca_enable' => '',
        'post_id'         => '',  
        'text_limit' => '12',
        'comment_enable'  => '',
        'events_timing_enable' => '',
        'masonory_enable' => '',
        
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
    .blog_post_section.events-id-<?php echo esc_attr($unique_id); ?> .blog-style_2 .image-box img{
        height: <?php echo esc_attr($atts['image_height']); ?>;
    }
</style>
<?php
endif; 
if(!empty($atts['margin_bottom'])): 
    ?>
    <style type="text/css" data-type="vc_shortcodes-custom">  
        .blog_post_section.events-id-<?php echo esc_attr($unique_id); ?> .mb_40{
            margin-bottom: <?php echo esc_attr($atts['margin_bottom']); ?>;
        }
    </style>
    <?php
endif; 
if(!empty($atts['style_enable']) == "yes"): 
?>
<style type="text/css" data-type="vc_shortcodes-custom">
<?php if($atts['hovercatbgcolor']): ?>
.blog_post_section.events-id-<?php echo esc_attr($unique_id); ?>   .blog-style_1:hover .content_box_outer .content_box .d-flex .cat_gry   ,
.blog_post_section.events-id-<?php echo esc_attr($unique_id); ?>  .blog-style_2:hover .image-box .cat_gry ,
.blog_post_section.events-id-<?php echo esc_attr($unique_id); ?>  .blog-style_3:hover .image-box .cat_gry ,
.blog_post_section.events-id-<?php echo esc_attr($unique_id); ?> .blog-style_4:hover .content_box .cat_gry ,
.blog_post_section.events-id-<?php echo esc_attr($unique_id); ?> .blog-style_5:hover .content_box .cat_gry ,
.blog_post_section.events-id-<?php echo esc_attr($unique_id); ?>  .blog-style_6:hover .image-box .cat_gry ,
.blog_post_section.events-id-<?php echo esc_attr($unique_id); ?>  .blog-style_7:hover .image-box .cat_gry
{ background:<?php echo esc_attr($atts['hovercatbgcolor']); ?>; border-color:<?php echo esc_attr($atts['hovercatbgcolor']); ?>;} 
<?php endif; ?> 
<?php if($atts['hovercatcolor']): ?>
.blog_post_section.events-id-<?php echo esc_attr($unique_id); ?>   .blog-style_1:hover .content_box_outer .content_box .d-flex .cat_gry  ,
.blog_post_section.events-id-<?php echo esc_attr($unique_id); ?>   .blog-style_2:hover .image-box .cat_gry ,
.blog_post_section.events-id-<?php echo esc_attr($unique_id); ?>  .blog-style_3:hover .image-box .cat_gry ,
.blog_post_section.events-id-<?php echo esc_attr($unique_id); ?> .blog-style_4:hover .content_box .cat_gry ,
.blog_post_section.events-id-<?php echo esc_attr($unique_id); ?> .blog-style_5:hover .content_box .cat_gry ,
.blog_post_section.events-id-<?php echo esc_attr($unique_id); ?>  .blog-style_6:hover .image-box .cat_gry ,
.blog_post_section.events-id-<?php echo esc_attr($unique_id); ?>  .blog-style_7:hover .image-box .cat_gry
{ color:<?php echo esc_attr($atts['hovercatcolor']); ?>; } 
<?php endif; ?> 
<?php if($atts['hoverrdmorecolor']): ?>
    .blog_post_section.events-id-<?php echo esc_attr($unique_id); ?> .text_btn:hover small  { color:<?php echo esc_attr($atts['hoverrdmorecolor']); ?>; } 
<?php endif; ?> 
<?php if($atts['hoverrdmorecolor']): ?>
    .blog_post_section.events-id-<?php echo esc_attr($unique_id); ?> .text_btn:hover small:before  { background:<?php echo esc_attr($atts['hoverrdmorecolor']); ?>; } 
<?php endif; ?> 
<?php if($atts['hovertitlecolor']): ?>
    .blog_post_section.events-id-<?php echo esc_attr($unique_id); ?>   .title_24 a:hover  ,
      .blog_post_section.events-id-<?php echo esc_attr($unique_id); ?> .title_26 a:hover
      { color:<?php echo esc_attr($atts['hovertitlecolor']); ?>!important; text-decoration-color:<?php echo esc_attr($atts['hovertitlecolor']); ?>!important; } 
<?php endif; ?> 
<?php if($atts['gradientcolor']): ?>
    .blog_post_section.events-id-<?php echo esc_attr($unique_id); ?> .blog-style_3 .image-box:after  { background:linear-gradient(0deg, <?php echo esc_attr($atts['gradientcolor']); ?> 6%, rgba(0, 0, 0, 0) 122%) } 
<?php endif; ?> 
<?php if($atts['overlaybg']): ?>
    .blog_post_section.events-id-<?php echo esc_attr($unique_id); ?>  .image-box .img_link::before   
    { background:<?php echo esc_attr($atts['overlaybg']); ?>; } 
<?php endif; ?> 
<?php if($atts['rdcolor']): ?>
    .blog_post_section.events-id-<?php echo esc_attr($unique_id); ?>  .text_btn small  ,   .blog_post_section.events-id-<?php echo esc_attr($unique_id); ?>  .text_btn a
    { color:<?php echo esc_attr($atts['rdcolor']); ?>; } 
<?php endif; ?> 
 
<?php if($atts['descolor']): ?>
    .blog_post_section.events-id-<?php echo esc_attr($unique_id); ?>  .des_cription  { color:<?php echo esc_attr($atts['descolor']); ?>; } 
<?php endif; ?> 
<?php if($atts['titlecolor']): ?>
    .blog_post_section.events-id-<?php echo esc_attr($unique_id); ?>   .title_24 a  ,
      .blog_post_section.events-id-<?php echo esc_attr($unique_id); ?> .title_26 a
       { color:<?php echo esc_attr($atts['titlecolor']); ?>!important; } 
<?php endif; ?> 
 
<?php if($atts['metacolor']): ?>
    .blog_post_section.events-id-<?php echo esc_attr($unique_id); ?>  .date_tm time , .blog_post_section.events-id-<?php echo esc_attr($unique_id); ?>    .date_tm i ,
    .blog_post_section.events-id-<?php echo esc_attr($unique_id); ?>   .comments a  ,  .blog_post_section.events-id-<?php echo esc_attr($unique_id); ?>   .comments ,  
    .blog_post_section.events-id-<?php echo esc_attr($unique_id); ?>   .comments i
     { color:<?php echo esc_attr($atts['metacolor']); ?>!important; } 
<?php endif; ?> 
<?php if($atts['catbgcolor']): ?>
 
    .blog_post_section.events-id-<?php echo esc_attr($unique_id); ?>   .blog-style_2 .image-box .cat_gry ,
    .blog_post_section.events-id-<?php echo esc_attr($unique_id); ?>  .blog-style_3 .image-box .cat_gry ,
    .blog_post_section.events-id-<?php echo esc_attr($unique_id); ?> .blog-style_5 .content_box .cat_gry
    
    { background:<?php echo esc_attr($atts['catbgcolor']); ?>;  border-color:<?php echo esc_attr($atts['catbgcolor']); ?>; } 
<?php endif; ?> 
<?php if($atts['catcolor']): ?>
 
    .blog_post_section.events-id-<?php echo esc_attr($unique_id); ?>   .blog-style_2 .image-box .cat_gry ,
    .blog_post_section.events-id-<?php echo esc_attr($unique_id); ?>  .blog-style_3 .image-box .cat_gry ,
    .blog_post_section.events-id-<?php echo esc_attr($unique_id); ?> .blog-style_5 .content_box .cat_gry
       { color:<?php echo esc_attr($atts['catcolor']); ?>; } 
<?php endif; ?> 
<?php if($atts['boxbg']): ?> 
    .blog_post_section.events-id-<?php echo esc_attr($unique_id); ?> .blog-style_2 , 
    { background:<?php echo esc_attr($atts['boxbg']); ?>; } 
<?php endif; ?>  
</style> 
<?php
endif;
/*-- ==== styling end ==== -- */
if(function_exists('tribe_get_events')){
$masonry_enable  = isset($atts['masonry_enable']) ? $atts['masonry_enable'] : '';
$masonry_class = "";
if($masonry_enable == true){
    $masonry_class = "blog-wrapper";
}  
$post_in = '';
if(!empty($atts['post_id'])){
     $post_in = explode(',', $atts['post_id']);
}
$post_id_not = '';
if(!empty($atts['post_id_not'])){
     $post_id_not = explode(',', $atts['post_id_not']);
}

$tax_query = array(
    'relation' => 'AND',
);

if ($atts['query_category_enable'] == "yes") { 
    $events = tribe_get_events(array(
        'posts_per_page' => $atts['post_count'],
        'orderby'        => $atts['query_orderby'],
        'order'          =>  $atts['query_order'],
        'post__in'         => $post_in,  
        'post__not_in'         => $post_id_not,  
        'tax_query'=> array(
            array(
                'taxonomy' => 'tribe_events_cat',
                'field' => 'slug',
                'terms' => $atts['query_category']
            )
        )
    )); 
} else {
    $events = tribe_get_events(array(
        'posts_per_page' => $atts['post_count'],
        'orderby'        => $atts['query_orderby'],
        'order'          =>  $atts['query_order'],
        'post__in'         => $post_in,  
        'post__not_in'         => $post_id_not,  
    )); 
} 
$events_excerpt_enable = $atts['excerpt_enable'];
$events_excerpt_count = $atts['events_excerpt_count'];
$events_loca_enable = $atts['events_loca_enable'];
$events_timing_enable = $atts['events_timing_enable']; 
?>
<section class="blog_post_section events-id-<?php echo esc_attr($unique_id); ?>">
    <div class="row <?php if ($masonry_enable == true): ?>blog_container clearfix<?php endif; ?>">
        <?php
        if (empty($events)):
            echo 'Sorry, nothing found.';
        else:
            foreach ($events as $event) :
                $start_date = tribe_get_start_date($event->ID, true, 'F j, Y');
                $start_time = tribe_get_start_time($event->ID, 'h:i A');
                $the_excerpt = wp_trim_words(get_the_excerpt($event->ID), $events_excerpt_count);
                // blog card ?>
                <?php if ($atts['event_styles'] == 'style_eight'): ?>
                    <div class="<?php echo esc_attr($atts['events_column']); ?> <?php echo esc_attr($masonry_class); ?> style_three_eight">
                        <div class="blog-style_2 mb_40 <?php if (has_post_thumbnail($event->ID)): ?>has_images d_flex align-items-center<?php else: ?>no_images<?php endif; ?>">
                            <?php if (has_post_thumbnail($event->ID)): ?>
                                <div class="image-box img_obj_fit_center">
                                    <a href="<?php echo esc_url(get_permalink($event->ID)); ?>" class="img_link">
                                        <?php echo (get_the_post_thumbnail($event->ID, 'risehand-image-370-270 trans')); ?>
                                    </a>
                                    <?php if ($events_loca_enable == true): ?>
                                        <div class="cat_gry"><?php echo tribe_get_venue($event->ID); ?></div>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                            <div class="content_box trans">
                                <?php if ($events_timing_enable == true): ?>
                                    <div class="d-flex">
                                        <small class="date_tm"><time class="font_special"><i class="risehand-calendar-check"></i><?php echo esc_attr($start_date); ?></time></small>
                                        <small class="date_tm"><time class="font_special"><i class="risehand-clock"></i><?php echo esc_attr($start_time); ?></time></small>
                                    </div>
                                <?php endif; ?>

                                <div class="title_22 mb_15">
                                    <a href="<?php echo esc_url(get_permalink($event->ID)); ?>" class="trim-3">
                                        <?php echo wp_kses(get_the_title($event->ID), true); ?>
                                    </a>
                                </div>

                                <?php if (!empty($the_excerpt) && $events_excerpt_enable == true): ?>
                                    <p class="mb_20 des_cription"><?php echo esc_attr($the_excerpt); ?></p>
                                <?php endif; ?>

                                <div>
                                    <a class="text_btn" href="<?php echo esc_url(get_permalink($event->ID)); ?>">
                                        <small><?php echo esc_html__('Event Details', 'risehand-addons'); ?></small>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php elseif ($atts['event_styles'] == 'style_five'): ?>
                    <div class="<?php echo esc_attr($atts['events_column']); ?> <?php echo esc_attr($masonry_class); ?> style_three_eight">
                        <div class="blog-style_5 trans mb_40 <?php if (has_post_thumbnail($event->ID)): ?>has_images <?php else: ?>no_images<?php endif; ?>">
                            <?php if (has_post_thumbnail($event->ID)): ?>
                                <div class="image-box img_obj_fit_center">
                                    <a href="<?php echo esc_url(get_permalink()); ?>" class="img_link">
                                        <?php echo (get_the_post_thumbnail($event->ID, 'risehand-image-370-270 trans')); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <div class="content_box trans">
                                <?php if ($events_loca_enable == true): ?>
                                    <div class="cat_gry"><?php echo tribe_get_venue($event->ID); ?></div>
                                <?php endif; ?>
                                <?php if ($events_timing_enable == true): ?>
                                    <div class="d-flex">
                                        <small class="date_tm"><time class="font_special"><i class="risehand-calendar-check"></i><?php echo esc_attr($start_date); ?></time></small>
                                        <small class="date_tm"><time class="font_special"><i class="risehand-clock"></i><?php echo esc_attr($start_time); ?></time></small>
                                    </div>
                                <?php endif; ?>
                                <div class="title_22 mb_10">
                                    <a href="<?php echo esc_url(get_permalink($event->ID)); ?>" class="trim-3">
                                        <?php echo wp_kses(get_the_title($event->ID), true); ?>
                                    </a>
                                </div>
                                <?php if (!empty($the_excerpt) && $events_excerpt_enable == true): ?>
                                    <p class="des_cription mb_15"><?php echo esc_attr($the_excerpt); ?></p>
                                <?php endif; ?>

                                <div>
                                    <a class="text_btn" href="<?php echo esc_url(get_permalink($event->ID)); ?>">
                                        <small><?php echo esc_html__('Event Details', 'risehand-addons'); ?></small>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="<?php echo esc_attr($atts['events_column']); ?> <?php echo esc_attr($masonry_class); ?>">
                        <div class="blog-style_3 mb_40 <?php if (has_post_thumbnail($event->ID)): ?>has_images <?php else: ?>no_images<?php endif; ?>">
                            <div class="image-box img_obj_fit_center">
                                    <a href="<?php echo esc_url(get_permalink($event->ID)); ?>" class="img_link">
                                        <?php echo (get_the_post_thumbnail($event->ID, 'risehand-image-570-570 trans')); ?>
                                        <?php if ($events_loca_enable == true): ?>
                                            <div class="cat_gry"><?php echo tribe_get_venue($event->ID); ?></div>
                                        <?php endif; ?>
                                    </a>
                                    <div class="content_box_outer">
                                        <div class="content_box">
                                            <?php if ($events_timing_enable == true): ?>
                                                <div class="d-flex">
                                                    <small class="date_tm"><time class="font_special"><i class="risehand-calendar-check"></i><?php echo esc_attr($start_date); ?></time></small>
                                                    <small class="date_tm"><time class="font_special"><i class="risehand-clock"></i><?php echo esc_attr($start_time); ?></time></small>
                                                </div>
                                            <?php endif; ?>

                                            <div class="title_26 mb_15">
                                                <a href="<?php echo esc_url(get_permalink($event->ID)); ?>" class="trim-3">
                                                    <?php echo wp_kses(get_the_title($event->ID), true); ?>
                                                </a>
                                            </div>

                                            <?php if (!empty($the_excerpt) && $events_excerpt_enable == true): ?>
                                                <p class="des_cription"><?php echo esc_attr($the_excerpt); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                             
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php // blog card end
            endforeach;
        endif;
        ?>
    </div>
</section> 
<?php
}
return ob_get_clean();
}
