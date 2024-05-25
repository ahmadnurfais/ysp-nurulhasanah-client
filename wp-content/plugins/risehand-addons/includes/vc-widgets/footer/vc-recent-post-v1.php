<?php 
add_action( 'vc_before_init', 'vc_foo_recent_post_v1_vcmap' );
function vc_foo_recent_post_v1_vcmap() {
 vc_map( array(
  "name" => __( "Footer Recent Post v1", "risehand-addons" ),
  "base" => "foo_recent_post_v1_init",
  "class" => "",
  "icon" => "icon-risehand-svg", 
  "category" => __( "Risehand Footer", "risehand-addons"),
  "params" => array( 
        array(
            'type'       => 'dropdown',
            'heading'    => esc_html__('Meta Type', 'risehand-addons'),
            'param_name' => 'date_or_cat',
            'value'      => array(
                esc_html__( 'Date', 'risehand-addons' ) => 'date' ,
                esc_html__( 'Category', 'risehand-addons' ) => 'category' ,
    
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
            'heading'    => esc_html__('Category', 'risehand-addons'),
            'param_name' => 'query_category',
            'value'      => risehand_get_blog_categories(),
            'group' => esc_html__('General', 'risehand-addons') ,
        ), 
        array(
            'type' => 'colorpicker',
            'heading' => esc_html__('Title Color', 'risehand-addons') ,
            'param_name' => 'title_color',
            'value' => '',
            'group' => esc_html__('Styling', 'risehand-addons'), 
        ),  
        array(
            'type' => 'colorpicker',
            'heading' => esc_html__('Meta Color', 'risehand-addons') ,
            'param_name' => 'meta_color',
            'value' => '',
            'group' => esc_html__('Styling', 'risehand-addons'), 
        ),  
)));
}
// shortcode
add_shortcode( 'foo_recent_post_v1_init', 'vc_foo_recent_post_v1' );
function vc_foo_recent_post_v1( $atts, $content = null ) { 
$unique_id = uniqid();
 $atts = shortcode_atts(
   array(
      'date_or_cat' => 'date',
      'post_count' => '4',
      'query_category' => '',
      'title_color' => '',
      'meta_color' => '',
   ), $atts
);
$allowed_tags = wp_kses_allowed_html('post');
ob_start();
?>
<style type="text/css" data-type="vc_shortcodes-custom">
<?php if($atts['title_color']): ?>
    .recent_posts.unique-id-<?php echo esc_attr($unique_id); ?> .news_recent .title_20 a {color:<?php echo esc_attr($atts['title_color']); ?>!important;} 
<?php endif; ?>  
<?php if($atts['meta_color']): ?>
    .recent_posts.unique-id-<?php echo esc_attr($unique_id); ?> .news_recent .content a.cat_gry, .news_recent .content .date {color:<?php echo esc_attr($atts['meta_color']); ?>!important;} 
<?php endif; ?>  
</style> 
 
<div class="recent_posts unique-id-<?php echo esc_attr($unique_id); ?>"> 
        <?php 
        $args = array(
            'post_type' => 'post',
            'ignore_sticky_posts' => true,
            'posts_per_page' => $atts['post_count'],
            'orderby'        => 'date', 
        );
        if($atts['query_category']) $args['category_name'] = $atts['query_category'];
        $blog_grid_query = new \WP_Query( $args ); 
        while ($blog_grid_query->have_posts()) : $blog_grid_query->the_post(); ?> 
        <div class="news_recent d_flex <?php if(has_post_thumbnail()): ?>  image_s  <?php endif;?>">
            <?php if(has_post_thumbnail()): ?>
                <div class="image img_obj_fit_center">
                    <?php the_post_thumbnail(); ?>
                </div>
            <?php endif;?>    
            <div class="content">
                <?php if($atts['date_or_cat'] == "category"): ?>
                    <?php do_action('risehand_theme_blog_category'); ?>
                <?php else: ?>
                    <div class="date"><?php echo esc_attr(get_the_date(get_option('date_format'))); ?></div>
                 <?php endif; ?>
                <?php the_title( '<div class="title_20 trim-2"><a href="' .  esc_url(get_permalink()) . '" rel="bookmark" class="mb_0">', '</a></div>' ); ?> 
            </div>
        </div>        
        <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
</div>    
 
<?php
return ob_get_clean();
} 