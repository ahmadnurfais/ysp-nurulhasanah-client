<?php
/*===============================
 Load More And Infinite Scroll
==============================*/
if(!defined('ABSPATH')){
    exit; // Exit if accessed directly
}
/*===============================
    Get Options on url
==============================*/
function nioland_get_spagination_option_via_url() { 
    $shoppaginationstyle  = isset( $_GET['shop-pagination-style'] ) ? $_GET['shop-pagination-style'] : '';
	if($shoppaginationstyle){
		return $shoppaginationstyle;
	}
}
/*===============================
 Enqueue scripts style
==============================*/
function nioland_load_infinite_scripts() {
    global $product;
    $render_js =  get_addons_risehand_option('product_paginaion_type'); 
    if($render_js == 'loadmore' || nioland_get_spagination_option_via_url()  == 'loadmore'):
        wp_enqueue_script('nioland-load-more', RISEHAND_ADDONS_URL . 'includes/Extended/load-infinite/js/loadmore.js', array('jquery'), '1.0.0', true );
    elseif($render_js == 'infinite' || nioland_get_spagination_option_via_url()  == 'infinite'): 
        wp_enqueue_style('infinite-docs', RISEHAND_ADDONS_URL . 'includes/Extended/load-infinite/js/plugins/infinite-scroll-docs.css', array() , '8.0.1', 'all');
        wp_enqueue_script('infinite-scroll', RISEHAND_ADDONS_URL . 'includes/Extended/load-infinite/js/plugins/infinite-scroll.pkgd.min.js', array('jquery') , '4.0.1', true);
        wp_enqueue_script('infinite-active', RISEHAND_ADDONS_URL . 'includes/Extended/load-infinite/js/infinite-active.js', array('jquery'), '1.0.0', true );
    endif;
} 
add_action( 'wp_enqueue_scripts', 'nioland_load_infinite_scripts' );

/*
**=============================================   
**  remove and add pagination
**=============================================
*/
add_action('init','nioland_remove_action_on_pafination');
function nioland_remove_action_on_pafination() {
    remove_action('woocommerce_after_shop_loop', 'woocommerce_pagination', 10);
} 
/*
**=============================================   
**  remove and add custom paginations
**=============================================
*/
add_action('woocommerce_after_shop_loop', 'nioland_custom_funtion_pageload', 10);
function nioland_custom_funtion_pageload(){
    global $product;
    $product_paginaion_type =  get_addons_risehand_option('product_paginaion_type');
    ?>
    <?php  if($product_paginaion_type == 'loadmore' || nioland_get_spagination_option_via_url()  == 'loadmore'): ?>
        <div class="woo_pagination text-center loadmoreproduct">
        <div class="padyopextra_30"></div>
            <?php global $wp_query;
                echo '<div class="woocommerce-pagination button">';
                $next_link = get_next_posts_link( esc_html_e('Load More' , 'risehand-addons'), $wp_query->max_num_pages );
                if ( $next_link ) {
                    echo $next_link;
                }
                echo '</div>';
           ?>
        </div>
    <?php elseif($product_paginaion_type == 'infinite' || nioland_get_spagination_option_via_url()  == 'infinite'): ?>
        <div class="woo_pagination scrollproduct">
            <div class="padyopextra_30">
            </div>
            <div class="scroller-status">
            <div class="loader-ellips infinite-scroll-request">
                <span class="loader-ellips__dot"></span>
                <span class="loader-ellips__dot"></span>
                <span class="loader-ellips__dot"></span>
                <span class="loader-ellips__dot"></span>
            </div>
            <p class="scroller-status__message infinite-scroll-last"><?php echo esc_html_e('No more Products to load' , 'risehand-addons'); ?></p>
            </div>
            <?php woocommerce_pagination(); ?>
        </div>
    <?php else: ?>
        <div class="woo_pagination">
            <div class="padyopextra_30"></div>
            <?php woocommerce_pagination(); ?>
        </div>
    <?php endif; ?>
    <?php
}

 