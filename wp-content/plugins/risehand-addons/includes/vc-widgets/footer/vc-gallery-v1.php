<?php
add_action( 'vc_before_init', 'vc_gallery_v1_vcmap' );
function vc_gallery_v1_vcmap() {
 vc_map( array(
  "name" => __( "Gallery v1", "risehand-addons" ),
  "base" => "portfolio_gallery_v1_init",
  "class" => "",
  "icon" => "icon-risehand-svg", 
  "category" => __( "Risehand Footer", "risehand-addons"),
  "params" => array(  
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
            'heading' => esc_html__('Image Height', 'risehand-addons') ,
            'param_name' => 'img_height', 
            'group' => esc_html__('General', 'risehand-addons') ,
        ) , 
    
)));
}

// shortcode

add_shortcode( 'portfolio_gallery_v1_init', 'vc_gallery_v1' );
function vc_gallery_v1( $atts, $content = null ) { 
    $unique_id = uniqid();
    $atts = shortcode_atts(
    array( 
        'img_height' => '',
        'n_post_count' => '4',
        'n_query_orderby' => 'date',
        'n_query_order' => 'DESC',
        'n_query_category' => '',  
   ), $atts
);
ob_start();
$allowed_tags = wp_kses_allowed_html('post');
?>
<style type="text/css" data-type="vc_shortcodes-custom">
<?php if($atts['img_height']): ?>
    .gallery_sec.unique-id-<?php echo esc_attr($unique_id); ?>  .gallery-box img  { height:<?php echo esc_attr($atts['img_height']); ?>!important; } 
<?php endif; ?> 
</style>   
<section class="gallery_sec unique-id-<?php echo esc_attr($unique_id); ?>"> 
    <div class="d_flex">
    <?php  
        $post_count  = ! empty( $atts['n_post_count'] ) ? $atts['n_post_count'] : '';
        $query_orderby  = ! empty( $atts['n_query_orderby'] ) ? $atts['n_query_orderby'] : '';
        $query_order  = ! empty( $atts['n_query_order'] ) ? $atts['n_query_order'] : ''; 
         $args = array(
            'post_type' => 'portfolio',
            'ignore_sticky_posts' => true,  
            'posts_per_page' => $post_count,
            'orderby'        =>  $query_orderby,
            'order'          =>  $query_order,
        );
        if( $atts['n_query_category'] ) $args['portfolio_category'] = $atts['n_query_category'];
        $portfolio_grid_query = new \WP_Query( $args ); 
        ?>
        <?php while ($portfolio_grid_query->have_posts()) : ?>
        <?php $portfolio_grid_query->the_post(); ?>
        <?php global $post; ?>
        <?php // portfolio card ?> 
        <?php if (has_post_thumbnail()): ?>
            <div class="gallery-box">
                <a href="<?php echo esc_url(get_permalink()); ?>" class="img_link img_obj_fit_center trans">
                    <?php the_post_thumbnail('risehand-image-100-100 trans'); ?> 
                </a> 
            </div>
        <?php endif; ?>
        <?php // portfolio card end ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>   
    </div> 
</section>

<?php
return ob_get_clean();
}