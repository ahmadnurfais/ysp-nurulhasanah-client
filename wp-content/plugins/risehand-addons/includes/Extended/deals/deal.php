<?php
// Enqueue custom scripts
function deals_enqueue_scripts() {
    if(is_tax('product_cat') || is_post_type_archive('product') || is_singular('product')):
        wp_enqueue_style('deals-style', RISEHAND_ADDONS_URL . 'includes/Extended/deals/assets/deal.css', array() , '1.0.0', 'all');
        wp_enqueue_script('deals-countdown', RISEHAND_ADDONS_URL . 'includes/Extended/deals/assets/jquery.countdown.min.js', array('jquery'), '1.0', true);
        wp_enqueue_script('deals-active', RISEHAND_ADDONS_URL . 'includes/Extended/deals/assets/active.js', array('jquery'), '1.0', true);
    endif;
}
add_action('wp_enqueue_scripts', 'deals_enqueue_scripts');

add_action('elementor/widgets/widgets_registered', 'deals_elementor_widgets');
function deals_elementor_widgets() {
    // require_once RISEHAND_ADDONS_DIR . '/includes/Extended/deals/deals-widgets.php';
} 

add_action('risehand_get_deals_banner' , 'risehand_deals_banner');
function risehand_deals_banner(){
$dbanner_image = get_risehand_option('dbanner_image');
$dbanner_title = get_risehand_option('dbanner_title');
$dbanner_decription = get_risehand_option('dbanner_decription');
$dbanner_deals_date = get_risehand_option('dbanner_deals_date');
$class = 'col-lg-12';
if(!empty($dbanner_image)){
    $class = 'col-lg-6 col-md-6 col-sm-12';
} 
?>
    <div class="col-lg-12">
    <div class="deals_banner">
            <div class="row align-items-center">
                <?php if(!empty($dbanner_image['url'])): ?>
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <div class="image">
                            <img src="<?php echo esc_attr($dbanner_image['url']); ?>" class="img-fluid" alr="img" />
                        </div>     
                    </div> 
                    <div class="col-lg-1 col-md-4 col-sm-12">
                </div>
                <?php endif; ?> 
                <div class="<?php echo esc_attr($class); ?>">
                <div class="content">
                    <?php if(!empty($dbanner_title)): ?>
                        <div class="title">
                            <?php echo esc_attr($dbanner_title); ?>
                        </div>
                    <?php endif; ?>
                    <?php if(!empty($dbanner_decription)): ?>
                        <p>
                            <?php echo esc_attr($dbanner_decription); ?>
                         </p>
                    <?php endif; ?>
                    <?php if(!empty($dbanner_deals_date)): ?> 
                        <div class="deal_box_tep  d_days  d_hours  d_min  d_second "> 
                            <div class="dealscountdown" data-countdown="<?php echo esc_attr($dbanner_deals_date); ?>"></div>
                         </div>   
                    <?php endif; ?>
                </div>
                </div>
            </div>
            </div>
    </div>
<?php
}
add_action('wp_enqueue_scripts' , 'risehand_deals_banner_inline');
function risehand_deals_banner_inline(){
    $css=''; 
    $css .= '.countdown-period.days:before{content:"'.esc_html__('Days' , 'risehand-addons').'"!important}';
    $css .= '.countdown-period.hours:before{content:"'.esc_html__('Hours' , 'risehand-addons').'"!important}';
    $css .= '.countdown-period.mins:before{content:"'.esc_html__('Mins' , 'risehand-addons').'"!important}';
    $css .= '.countdown-period.sec:before{content:"'.esc_html__('Sec' , 'risehand-addons').'"!important}';
    wp_add_inline_style('deals-style', $css);
}
