<?php
add_action( 'vc_before_init', 'vc_give_forms_v1_vcmap' );
function vc_give_forms_v1_vcmap() {
 vc_map( array(
  "name" => __( "Donation Simple Post Grid  v1", "risehand-addons" ),
  "base" => "give_forms_v1_init",
  "class" => "",
  "icon" => "icon-risehand-svg", 
  "category" => __( "Risehand Post", "risehand-addons"),
  "params" => array( 
    array(
        'type'       => 'dropdown',
        'heading'    => esc_html__('News Style  ', 'risehand-addons'),
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
        'heading'    => esc_html__('Column Size ', 'risehand-addons'),
        'param_name' => 'donation_column',
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
            esc_html__( 'Select Order By', 'risehand-addons' ) => '',
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
            esc_html__( 'DESc', 'risehand-addons' ) => 'DESc' ,
            esc_html__( 'ASC', 'risehand-addons' ) => 'ASC' , 
        ),
    
        'group' => esc_html__('General', 'risehand-addons') ,
      ),
 
      array(
        'type'       => 'dropdown',
        'heading'    => esc_html__('Category', 'risehand-addons'),
        'param_name' => 'query_category',
        'value'      => risehand_get_donation_categories(),
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
        'heading'     => esc_html__( 'Category Disable', 'risehand-addons' ),
        'param_name'  => 'cat_enable',
        'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ),
        'description' => esc_html__( 'Click Check box to enable Category', 'risehand-addons' ),
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
)));
}

// shortcode

add_shortcode( 'give_forms_v1_init', 'vc_give_forms_v1' );
function vc_give_forms_v1( $atts, $content = null ) { 
$unique_id = uniqid();
$atts = shortcode_atts(
   array(
      'donation_styles' => 'style_one', 
      'donation_column' => 'col-xl-3 col-lg-4 col-md-6 col-sm-6',
      'post_count' => '4',
      'post_id' => '',
      'post_id_not' => '',
      'query_orderby' => 'date',
      'query_order' => 'DESc',
      'query_category' => '', 
      'masonory_enable' => '',
      'pagination_enable' => '',
      'excerpt_enable'  => '',
      'cat_enable'  => '',
      'pagination_alignment' => 'text-center',

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
   ), $atts
);
$allowed_tags = wp_kses_allowed_html('post'); 
ob_start();
?>
<style type="text/css" data-type="vc_shortcodes-custom">
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
    .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .do_common_style:hover .donation_raises  .progress {
        background: <?php echo esc_attr($atts['hprogress_bar_bg_color']); ?> !important;
    }
    <?php endif; ?>
    <?php if($atts['hactive_progress_bar_bg_color']): ?>
    .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .do_common_style:hover  .donation_raises .progress .progress-bar {
        background: <?php echo esc_attr($atts['hactive_progress_bar_bg_color']); ?> !important;
    }
    .give_forms_section.unique-id-<?php echo esc_attr($unique_id); ?> .do_common_style:hover .donation_progress .perin .percent::before {
        border-color: <?php echo esc_attr($atts['hactive_progress_bar_bg_color']); ?> !important;
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
<section class="give_forms_section unique-id-<?php echo esc_attr($unique_id); ?> <?php echo esc_attr($atts['donation_styles']); ?><?php if($atts['cat_enable'] == "yes"): ?> cat_enable<?php endif; ?><?php if($atts['excerpt_enable'] == "yes"): ?> excerpt_enable<?php endif; ?>">
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
            'post_type' => 'give_forms',
            'ignore_sticky_posts' => true, 
            'paged'             => $paged,
            'posts_per_page' => $atts['post_count'],
            'orderby'        => $atts['query_orderby'],
            'order'          =>  $atts['query_order'],
            'post__in'         => $post_in,  
            'post__not_in'         => $post_id_not,  
        );
        if( $atts['query_category'] ) $args['category_name'] = $atts['query_category'];
        $donation_grid_query = new \WP_Query( $args ); 
        ?>
        <?php while ($donation_grid_query->have_posts()) : ?>
        <?php $donation_grid_query->the_post(); ?>
        <?php global $post; ?>
        <?php // Donation card ?>
        <?php if($atts['donation_styles'] == 'style_two'): ?>
            <div class="<?php echo esc_attr($atts['donation_column']); ?>"> 
                    <?php do_action('get_risehand_donation_card_1'); ?>
            </div> 
        <?php // Donation style end?>  
        <?php // Donation card ?>
        <?php elseif($atts['donation_styles'] == 'style_three'): ?>
            <div class="<?php echo esc_attr($atts['donation_column']); ?>"> 
                    <?php do_action('get_risehand_donation_card_2'); ?>
            </div> 
        <?php // Donation style end?>   
        <?php else: ?>
        <?php // Donation card  ?>
            <div class="<?php echo esc_attr($atts['donation_column']); ?>"> 
                <?php do_action('get_risehand_donation_card_1'); ?>
           </div> 
        <?php // Donation style ?>      
            <?php endif; ?>
        <?php // Donation card end ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

    </div>
    <?php if($atts['pagination_enable'] == 'yes'):?>
    <div class="row">
        <div class="col-lg-12">
            <div class="pagination">
                <?php
                    $pagination = 999999999;
                    echo paginate_links( array(
                    'base' => str_replace( $pagination, '%#%', get_pagenum_link( $pagination ) ),
                    'format' => '?paged=%#%',
                    'current' => max(0, $paged),
                    'total' => $donation_grid_query->max_num_pages,
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