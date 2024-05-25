<?php
add_action( 'vc_before_init', 'vc_volunteer_post_v1_vcmap' );
function vc_volunteer_post_v1_vcmap() {
 vc_map( array(
  "name" => __( "Volunteer Grid v1", "risehand-addons" ),
  "base" => "volunteer_post_v1_init",
  "class" => "",
  "icon" => "icon-risehand-svg", 
  "category" => __( "Risehand Post", "risehand-addons"),
  "params" => array( 
        array(
            'type'       => 'dropdown',
            'heading'    => esc_html__('News Style  ', 'risehand-addons'),
            'param_name' => 'volunteer_styles',
            'value'      => array( 
                esc_html__( 'Style One', 'risehand-addons' ) => 'style_one' ,
                esc_html__( 'Style Two', 'risehand-addons' ) => 'style_two' ,
            ),
            'group' => esc_html__('General', 'risehand-addons') ,
        ),
        
        array(
            'type'       => 'dropdown',
            'heading'    => esc_html__('Column Size ', 'risehand-addons'),
            'param_name' => 'volunteer_column',
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
            'value'      => risehand_get_volunteer_categories(),
            'group' => esc_html__('General', 'risehand-addons') ,
        ), 
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
        'heading' => __('Pattern Background Color', 'risehand-addons'),
        'param_name' => 'pattern_bg_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Hover Pattern Background Color', 'risehand-addons'),
        'param_name' => 'hopattern_bg_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Title Color', 'risehand-addons'),
        'param_name' => 'titles_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Desigination Color', 'risehand-addons'),
        'param_name' => 'job_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Social Media Icon Color', 'risehand-addons'),
        'param_name' => 'social_media',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Social Media Border Color', 'risehand-addons'),
        'param_name' => 'social_br_media',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Social Media Background Color', 'risehand-addons'),
        'param_name' => 'social_bg_media',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Hover Social Media Icon Color', 'risehand-addons'),
        'param_name' => 'hsocial_media',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Hover Social Media Border Color', 'risehand-addons'),
        'param_name' => 'hsocial_br_media',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Hover Social Media Background Color', 'risehand-addons'),
        'param_name' => 'hsocial_bg_media',
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

add_shortcode( 'volunteer_post_v1_init', 'vc_volunteer_post_v1' );
function vc_volunteer_post_v1( $atts, $content = null ) { 
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
        'pattern_bg_color' => '',
        'hopattern_bg_color' => '',
        'titles_color' => '',
        'job_color' => '',
        'social_media' => '',
        'social_br_media' => '',
        'social_bg_media' => '',
        'hsocial_media' => '',
        'hsocial_br_media' => '',
        'hsocial_bg_media' => '',
        'volunteer_styles' => 'style_one',
        'normal_view' => '',
        'volunteer_column' => 'col-xl-3 col-lg-4 col-md-6 col-sm-6',
        'post_count' => '4',
        'query_orderby' => 'date',
        'query_order' => 'DESC',
        'post_id'  => '',
        'post_id_not'  => '',
        'query_category' => '',
        'text_limit' => '12',
        'masonory_enable' => '',
        'pagination_enable' => '',
        'pagination_alignment' => 'text-center',
    
   ), $atts
);

$allowed_tags = wp_kses_allowed_html('post');
ob_start();
/*-- ==== styling start ==== -- */
if($atts['pagination_style_enable'] == "yes"): 
?>
<style type="text/css" data-type="vc_shortcodes-custom">
<?php if($atts['hopagibgcolor']): ?>
    .volunteer_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .pagination  .page-numbers li a:hover ,   
      .volunteer_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .pagination  .page-numbers li  span.current    
    { background:<?php echo esc_attr($atts['hopagibgcolor']); ?>;  ?>;} 
<?php endif; ?> 
<?php if($atts['hopagibrcolor']): ?>
    .volunteer_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .pagination  .page-numbers li a:hover ,   
      .volunteer_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .pagination  .page-numbers li  span.current     
    { border-color:<?php echo esc_attr($atts['hopagibrcolor']); ?>;  ?>;} 
<?php endif; ?> 
<?php if($atts['hopagicolor']): ?>
    .volunteer_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .pagination  .page-numbers li a:hover ,   
      .volunteer_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .pagination  .page-numbers li  span.current   
    { color:<?php echo esc_attr($atts['hopagicolor']); ?>;  ?>;} 
<?php endif; ?> 
<?php if($atts['pagibgcolor']): ?>
    .volunteer_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .pagination  .page-numbers li a  
    { background:<?php echo esc_attr($atts['pagibgcolor']); ?>;  ?>;} 
<?php endif; ?> 
<?php if($atts['pagibrcolor']): ?>
    .volunteer_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .pagination  .page-numbers li a   
    { border-color:<?php echo esc_attr($atts['pagibrcolor']); ?>;  ?>;} 
<?php endif; ?> 
<?php if($atts['pagicolor']): ?>
    .volunteer_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .pagination  .page-numbers li a ,   
      .volunteer_post_section.unique-id-<?php echo esc_attr($unique_id); ?>   .pagination  .page-numbers li a span
    { color:<?php echo esc_attr($atts['pagicolor']); ?>;  ?>;} 
<?php endif; ?> 
</style>
<?php
endif; 
?>
<style type="text/css" data-type="vc_shortcodes-custom">
    <?php if($atts['pattern_bg_color']): ?>  
     .volunteer_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .volunteer-style_1 .image-box .spattern_bg {
        background: <?php echo esc_attr($atts['pattern_bg_color']); ?>;
    }
    <?php endif; ?>
    <?php if($atts['hopattern_bg_color']): ?>  
    .volunteer_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .volunteer-style_1:hover .image-box .spattern_bg {
        background: <?php echo esc_attr($atts['hopattern_bg_color']); ?>;
    }
    <?php endif; ?>
    <?php if($atts['titles_color']): ?>  
    .volunteer_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .volunteer-style_1 .title_24 a {
        color: <?php echo esc_attr($atts['titles_color']); ?>;
    }
    <?php endif; ?>
    <?php if($atts['job_color']): ?>  
    .volunteer_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .volunteer-style_1 .content_box .font_special {
        color: <?php echo esc_attr($atts['job_color']); ?>;
    }
    <?php endif; ?>
    <?php if($atts['social_media']): ?>  
    .volunteer_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .social-icons ul li .m_icon {
        color: <?php echo esc_attr($atts['social_media']); ?>; 
    }
    <?php endif; ?>
    <?php if($atts['social_br_media']): ?>  
    .volunteer_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .social-icons ul li .m_icon {
        border-color: <?php echo esc_attr($atts['social_br_media']); ?>;
    }
    <?php endif; ?>
    <?php if($atts['social_bg_media']): ?>  
    .volunteer_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .social-icons ul li .m_icon {
        background: <?php echo esc_attr($atts['social_bg_media']); ?>;
    }
    <?php endif; ?>
    <?php if($atts['hsocial_media']): ?>  
    .volunteer_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .social-icons ul li .m_icon:hover {
        color: <?php echo esc_attr($atts['hsocial_media']); ?>; 
    }
    <?php endif; ?> 
    <?php if($atts['hsocial_br_media']): ?>  
    .volunteer_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .social-icons ul li .m_icon:hover {
        border-color: <?php echo esc_attr($atts['hsocial_br_media']); ?>;
    }
    <?php endif; ?> 
    <?php if($atts['hsocial_bg_media']): ?>  
    .volunteer_post_section.unique-id-<?php echo esc_attr($unique_id); ?> .social-icons ul li .m_icon:hover {
        background: <?php echo esc_attr($atts['hsocial_bg_media']); ?>;
    }
    <?php endif; ?> 
</style> 
 

<section class="volunteer_post_section unique-id-<?php echo esc_attr($unique_id); ?>">
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
        $post_id_not = '';
        if(!empty($atts['post_id_not'])){
             $post_id_not = explode(',', $atts['post_id_not']);
        }
        $args = array(
            'post_type' => 'volunteer',
            'ignore_sticky_posts' => true, 
            'paged'             => $paged,
            'posts_per_page' => $atts['post_count'],
            'orderby'        => $atts['query_orderby'],
            'order'          =>  $atts['query_order'],
            'post__in'         => $post_in,  
            'post__not_in'         => $post_id_not,  
        );
        if( $atts['query_category'] ) $args['volunteer_category'] = $atts['query_category'];
        $volunteer_grid_query = new \WP_Query( $args ); 
        ?>
        <?php while ($volunteer_grid_query->have_posts()) : ?>
        <?php $volunteer_grid_query->the_post(); ?>
        <?php global $post;  
        // volunteer card ?>
        <?php if($atts['volunteer_styles'] == 'style_two'): ?>
            <div class="<?php echo esc_attr($atts['volunteer_column']); ?>"> 
                <?php do_action('get_risehand_volunteer_card_7'); ?>
            </div> 
        <?php else: ?> 
            <div class="<?php echo esc_attr($atts['volunteer_column']); ?>"> 
            <?php do_action('get_risehand_volunteer_card_1'); ?>
            </div> 
        <?php endif; ?>
        <?php // volunteer card end ?>
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
                    'total' => $volunteer_grid_query->max_num_pages,
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