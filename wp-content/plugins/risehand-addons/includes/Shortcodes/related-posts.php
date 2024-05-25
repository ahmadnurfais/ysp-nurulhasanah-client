<?php
/*
**================================
** risehand Related Posts
**================================
*/  
add_action('risehand_get_related_post', 'risehand_related_post'); 
function risehand_related_post() {
$post_id = get_the_ID(); 
$cat_ids = array();
if(is_singular('portfolio')){
    $service_categories = get_the_terms($post_id, 'service_category'); // Replace 'service_category' with the actual name of your custom taxonomy
    if (!empty($service_categories) && !is_wp_error($service_categories)) {
        foreach ($service_categories as $service_category) {
            array_push($cat_ids, $service_category->term_id);
        }
    } 
} 
elseif(is_singular('portfolio')){ 
    $portfolio_categories = get_the_terms($post_id, 'portfolio_category'); // Replace 'portfolio_category' with the actual name of your custom taxonomy
    if (!empty($portfolio_categories) && !is_wp_error($portfolio_categories)) {
        foreach ($portfolio_categories as $portfolio_category) {
            array_push($cat_ids, $portfolio_category->term_id);
        }
    } 
}
elseif(is_singular('volunteer')){ 
    $volunteer_categories = get_the_terms($post_id, 'volunteer_category'); // Replace 'portfolio_category' with the actual name of your custom taxonomy
    if (!empty($volunteer_categories) && !is_wp_error($volunteer_categories)) {
        foreach ($volunteer_categories as $volunteer_category) {
            array_push($cat_ids, $volunteer_category->term_id);
        }
    } 
}else{
    $categories = get_the_category($post_id);
    if (!empty($categories) && is_wp_error($categories)) {
        foreach ($categories as $category) {
            array_push($cat_ids, $category->term_id);
        }
    }
} 
$current_post_type = get_post_type($post_id);
$query_args = array(  
    'post_type'      => $current_post_type,
    'post_not_in'    => array($post_id), 
);
$related_post_query = new WP_Query($query_args);
$related_post_title = get_risehand_option('related_post_title');
$risehand_layout = get_risehand_option('default_layouts' , 'right-sidebar');    
$service_layouts =  get_risehand_option('service_layouts' , 'no-sidebar') ;  
$portfolio_layouts =  get_risehand_option('portfolio_layouts' , 'no-sidebar') ;
$desktop = '3';
$margin = "30";
if(is_singular('service')){ 
    $desktop = '3';
    $margin = "5";
    $related_post_title = get_risehand_option('service_related_post_title');
    if($service_layouts == "right-sidebar" || $service_layouts == "left-sidebar"){
        $desktop = '2';
    } 
}elseif(is_singular('portfolio')){
    $desktop = '3';
    $related_post_title = get_risehand_option('portfolio_related_post_title');
    if($portfolio_layouts == "right-sidebar" || $portfolio_layouts == "left-sidebar"){
        $desktop = '2';
    } 
}elseif(is_singular('volunteer')){
    $desktop = '4';
    $related_post_title = get_risehand_option('volunteer_related_post_title'); 
}else{
    if($risehand_layout == "right-sidebar" || $risehand_layout == "left-sidebar"){
        $desktop = '2';
    } 
    $related_post_title = get_risehand_option('related_post_title');
}
?> 
<section class="related_post position-relative"> <h2 class="title_no_a_36"> <?php if (!empty($related_post_title)) { echo esc_html($related_post_title); } else { echo esc_html__('Related Posts', 'risehand'); } ?> </h2> <div class="swiper swiper-container swiper_container" data-swiper='{ "loop": false, "autoplay": { "delay": 500 }, "speed": 5000, "centeredSlides": false, "spaceBetween": <?php echo esc_attr($margin); ?>, "navigation": { "nextEl": ".c-next-one", "prevEl": ".c-prev-one" }, "grabCursor": true, "breakpoints": { "1200": { "slidesPerView": <?php echo esc_attr($desktop); ?> }, "1024": { "slidesPerView": 2 }, "768": { "slidesPerView": 2 }, "576": { "slidesPerView": 1 } }}'> <div class="swiper-wrapper"> <?php if ($related_post_query->have_posts()): while ($related_post_query->have_posts()): $related_post_query->the_post(); global $post; ?> <div class="swiper-slide"> <?php $post_type = get_post_type(); if ($post_type === 'service') { do_action('get_risehand_service_card_1'); }elseif($post_type === 'portfolio'){ do_action('get_risehand_portfolio_card_4'); } elseif($post_type === 'volunteer'){ do_action('get_risehand_volunteer_card_1'); }else{ get_template_part('template-parts/content/content', 'blog'); } ?> </div> <?php endwhile; wp_reset_postdata(); endif; ?> </div> </div> <div class="arrow_portfolio common_arrow post_three"> <div class="c-prev-one prev trans"><i class="risehand-chevron-left"></i></div> <div class="c-next-one next trans"><i class="risehand-chevron-right"></i></div> </div></section> 
<?php
}