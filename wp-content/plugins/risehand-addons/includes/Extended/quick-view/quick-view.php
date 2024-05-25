<?php
/*===============================
    Quick View
==============================*/
if(!defined('ABSPATH')){
    exit; // Exit if accessed directly
}
/*===============================
    enqueue scripts & style
==============================*/ 
function risehand_quick_view_scripts() {
    wp_enqueue_script('wc-add-to-cart-variation');
    if(!class_exists('give')):
        wp_enqueue_style('popupcss', RISEHAND_ADDONS_URL . 'includes/Extended/quick-view/css/popupcss.css', array() , '1.1.0', 'all');
       
    endif;
    wp_enqueue_style('quick-view', RISEHAND_ADDONS_URL . 'includes/Extended/quick-view/css/quick-view.css', array() , '1.0.0', 'all');
    if(!class_exists('give')):
    wp_enqueue_script('magnific-popup', RISEHAND_ADDONS_URL . 'includes/Extended/quick-view/js/jquery.magnific-popup.js', array('jquery') , '1.1.0', true);
    endif;
    wp_enqueue_script( 'risehand-quick-ajax', RISEHAND_ADDONS_URL . 'includes/Extended/quick-view/js/quick.js', array('jquery'), '1.0.0', true );
     // Generate a nonce token
     $risehand_nonce = wp_create_nonce('risehand_nonce'); 
     // Add the nonce to the localized script
     wp_localize_script('risehand-quick-ajax', 'RisehandAjax', array(
         'ajaxurl' => esc_url(admin_url('admin-ajax.php')),
         'nonce' => $risehand_nonce, // Add the nonce to the array
     ));

}
add_action( 'wp_enqueue_scripts', 'risehand_quick_view_scripts' );
 
/*
**================================== 
**  quick view output
**==================================
*/
add_action( 'wp_ajax_nopriv_quick_view', 'risehand_get_quick_view' );
add_action( 'wp_ajax_quick_view', 'risehand_get_quick_view' );
function risehand_get_quick_view(){
	$id = intval( $_POST['id'] );
    $query_args = array(
		'p' => $id,
		'post_type' => 'product',
	);
    $post_query = new WP_Query($query_args);
	if ($post_query->have_posts()) : 
     while($post_query->have_posts()) : $post_query->the_post(); 
        do_action('get_risehand_quick_view_get');
     endwhile; 
    wp_reset_postdata();
    endif;

}
