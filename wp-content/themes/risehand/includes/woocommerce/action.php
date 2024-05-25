<?php

//Remove Actions
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10,0); 
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10,0);
remove_action( 'woocommerce_checkout_order_review', 'woocommerce_checkout_payment', 20 );
// single removing summary 
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title',5);
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt',20);
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating',10); 
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 ); 
// single removing summary end
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);
 
// Replace SIilge Content Order
add_action( 'risehand_single_title', 'woocommerce_template_single_title',5);
add_action( 'risehand_single_excerpt', 'woocommerce_template_single_excerpt',20);
add_action( 'risehand_single_rating', 'woocommerce_template_single_rating',10);
add_action( 'risehand_single_meta', 'woocommerce_template_single_meta', 40 );  
add_action( 'wp_footer', 'risehand_wc_loop_add_to_cart_scripts' );
// Quantity Fields Script
add_action( 'wp_footer' , 'risehand_quantity_fields_script' );
// Woocommerce Check pAyment alignment
add_action( 'woocommerce_checkout_before_customer_details', 'woocommerce_checkout_payment', 10 );
add_action( 'woocommerce_after_shop_loop_item_title',  'risehand_wc_template_loop_stock', 10 );
add_filter( 'woocommerce_breadcrumb_defaults', 'risehand_change_breadcrumb_delimiter' );
 
/*
**=================================== 
** Hide default button for wpc wishlist and compare
**===================================
*/
add_filter( 'filter_wooscp_button_archive', function() {
    return '0';
} );

add_filter( 'filter_wooscp_button_single', function() {
    return '0';
} );
/*
**================================== 
**  wcc_change_breadcrumb_delimiter
**==================================
*/
function risehand_change_breadcrumb_delimiter( $defaults ) {
    // Change the breadcrumb delimeter from '/' to '>'
    $defaults['delimiter'] = '';
    return $defaults;
}  
/*
**==============================   
**  risehand_wc_template_loop_stock
**==============================
*/
function risehand_wc_template_loop_stock() {
    global $product;
    if($product->managing_stock() && (int)$product->get_stock_quantity() < 1)
    echo '<p class="stock out-of-stock">'.esc_html_e('Out of Stock' , 'risehand').'</p>';
}   
/*
**=================================== 
** Empty Cart Buton
**===================================
*/
  
// check for empty-cart get param to clear the cart
add_action( 'init', 'nest_woocommerce_clear_cart_url' );
function nest_woocommerce_clear_cart_url() {
    global $woocommerce;

    if ( isset( $_GET['empty-cart'] ) ) {
        $woocommerce->cart->empty_cart();
    }
}
add_action( 'woocommerce_cart_actions', 'nest_add_clear_cart_button', 20 );
add_action( 'risehand_get_empty_cart', 'nest_add_clear_cart_button', 20 );
function nest_add_clear_cart_button() {
    echo "<a class='button empty_carts' href='?empty-cart=true'>" . esc_html__( 'Empty Cart', 'risehand' ) . "</a>";
} 

// Cart Count Action
add_filter( 'woocommerce_add_to_cart_fragments',  'risehand_cart_count'); 
function risehand_cart_count($fragments) {
    ob_start();
    $items_count = WC()->cart->get_cart_contents_count();
    ?>
    <div class="mini-cart-icon">
        <i class="risehand-cart"></i>
        <span class="pro-count">
            <?php
            if (!empty($items_count)) {
                echo esc_attr($items_count);
            } else {
                echo esc_html('0');
            }
            ?>
        </span>
    </div>
    <?php
    $fragments['.mini-cart-icon'] = ob_get_clean();
    return $fragments;
}
 
 
/*
**==================================
**  risehand risehandmerce risehand_mini_cart
**==================================
*/
add_filter( 'woocommerce_add_to_cart_fragments',  'risehand_mini_cart_dropdown');
function  risehand_mini_cart_dropdown($fragments){ 
    global  $woocommerce; 
    ob_start();
    $cart = WC()->cart;
    // If cart is NOT empty
    if(!empty($cart)) {
    ?> 
        <div class="cart_box"> 
            <div class="overlay_box"></div>
                <div class="widget_shopping_carts">
                <div class="d-flex top_content alin-items-center"> 
                    <div class="box-cart-close"><i class="fa fa-close"></i></div> 
                    <?php  if(!empty($cart)) { do_action('risehand_get_empty_cart'); } ?>
                 </div>
                    <div class="widget_shopping_cart_content">
                    <?php woocommerce_mini_cart(); ?>
                    </div>
                </div>
            </div>
        <?php
    }
    $fragments['.contnet_cart_box'] = ob_get_clean();
    return $fragments;  
}
 
/*
**==============================   
**   risehand_quantity_fields_script
**==============================
*/
function risehand_quantity_fields_script(){?>
    <script type='text/javascript'>
        jQuery(function ($) {
            if (!String.prototype.getDecimals) {
                String.prototype.getDecimals = function () {
                    var num = this,
                        match = ('' + num).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
                    if (!match) {
                        return 0;
                    }
                    return Math.max(0, (match[1] ? match[1].length : 0) - (match[2] ? +match[2] : 0));
                }
            }
            // Quantity "plus" and "minus" buttons
            $(document.body).on('click', '.plus, .minus', function () {
                var $qty = $(this).closest('.quantity-input').find('.qty'),
                    currentVal = parseFloat($qty.val()),
                    max = parseFloat($qty.attr('max')),
                    min = parseFloat($qty.attr('min')),
                    step = $qty.attr('step');
    
                // Format values
                if (!currentVal || currentVal === '' || currentVal === 'NaN') currentVal = 0;
                if (max === '' || max === 'NaN') max = '';
                if (min === '' || min === 'NaN') min = 0;
                if (step === 'any' || step === '' || step === undefined || parseFloat(step) === 'NaN')
                    step = 1;
    
                // Change the value
                if ($(this).is('.plus')) {
                    if (max && (currentVal >= max)) {
                        $qty.val(max);
                    } else {
                        $qty.val((currentVal + parseFloat(step)).toFixed(step.getDecimals()));
                    }
                } else {
                    if (min && (currentVal <= min)) {
                        $qty.val(min);
                    } else if (currentVal > 0) {
                        $qty.val((currentVal - parseFloat(step)).toFixed(step.getDecimals()));
                    }
                }
    
                // Trigger change event
                $qty.trigger('change');
            });
        });
    </script>
    <?php
    }   



/*
**==============================   
**  shop product sold count
**==============================
*/
add_action('get_risehand_shop_product_sold_count_default', 'risehand_shop_product_sold_countefault');
function risehand_shop_product_sold_countefault() {
    global $product;
        if (!empty($product)) {
            $product_id = $product->get_id();
            $available_quantity = $product->get_stock_quantity();
            $sold_quantity = $product->get_total_sales();
            if(!empty($available_quantity) && !empty($sold_quantity)): 
            $total_quantity = $available_quantity + $sold_quantity;
            $progress_percentage = ($sold_quantity / $total_quantity) * 100;
            $progress_percentage = round($progress_percentage, 2);
            ?>
            <div class="progressboxs">
            <div class="progress style_two">
                <div class="progress-bar" role="progressbar" style="width: <?php echo esc_attr($progress_percentage) ?>%;" aria-valuenow="<?php echo esc_attr($progress_percentage) ?>" aria-valuemin="0" aria-valuemax="100"></div> 
            </div>
            <div class="d-flex align-items-center">
                <span class="font-xs text-heading"><?php echo esc_html__('Sold' , 'risehand'); ?> : <?php echo esc_attr($sold_quantity); ?>
                    <?php echo esc_html('/'); ?> <?php echo esc_attr($available_quantity); ?> 
                </span>  
                <em><?php echo esc_attr($progress_percentage) ?>%</em>
            </div> 
            </div> 
            <?php
            endif;
        }
}
/*
**====================================================
** risehand risehandmerce Quick View  , Compare  , Wishlist
**====================================================
*/
add_action('risehand_get_product_action_button' , 'risehand_product_action_button');
function risehand_product_action_button(){ 
    global  $product; ;
    $quick_view_enable =  get_risehand_option('quick_view_enable');
    if ( $quick_view_enable == false ) {
        return false;
    }
    ?>
    <ul class="product-action-1"> 
        <li class="btn_same btn-quick">
            <a href="<?php echo esc_attr($product->get_id()); ?>" class="risehand_quick_view_btn">
            <i class="risehand-eye"></i><small class="d-none"><?php echo esc_attr_e('Quick view' ,  'risehand'); ?></small></a> 
            <small><?php echo esc_attr_e('Quick view' ,  'risehand'); ?></small>
        </li>
        <?php if(function_exists('woosc_init')): ?>
        <li class="btn_same btn-compare">
            <?php $woosc_button_text = get_option( 'woosc_button_text' );
            if ( empty( $woosc_button_text ) ) {$woosc_button_text = esc_html__( 'Compare', 'risehand' );} ?>
            <?php echo do_shortcode('[woosc]'); ?>
            <small><?php echo esc_attr( $woosc_button_text); ?></small>
        </li>
        <?php endif; ?>
        <?php if(function_exists('woosw_init' )): ?>
        <li class="btn_same btn-wishlist">
            <?php $woosw_button_text = get_option( 'woosw_button_text' );
            if ( empty( $woosw_button_text ) ) {$woosw_button_text = esc_html__( 'Wishlist', 'risehand' );} ?>
            <?php echo do_shortcode('[woosw]'); ?>
            <small><?php echo esc_attr( $woosw_button_text); ?></small>
        </li>
        <?php endif; ?>
    </ul>
<?php
}   



/*
* ==============================   
**   woocommerce product meta
**==============================
*/
add_action( 'get_risehand_woocommerce_other_product_meta' , 'risehand_woocommerce_other_product_meta' );
function risehand_woocommerce_other_product_meta(){
global $product; 
if(get_post_meta(get_the_ID() , 'product_data_enable', true) == true): 
    $product_type = get_post_meta(get_the_ID() , 'product_type', true);
    $product_mfg = get_post_meta(get_the_ID() , 'product_mfg', true);
    $product_life = get_post_meta(get_the_ID() , 'product_life', true);
?>
    <?php if(!empty($product_type) || !empty($product_mfg) || !empty($product_life)): ?>
    <div class="product_meta right_move">
        <?php if(!empty($product_type)): ?>
        <span class="pro_typ"><?php echo esc_html__('Type:', 'risehand'); ?>
            <span class="metadatacustom"><?php echo esc_attr($product_type); ?></span></span>
        <?php endif; ?>
        <?php if(!empty($product_mfg)): ?>
        <span class="pro_mfg"><?php echo esc_html__('MFG:', 'risehand'); ?>
            <span class="metadatacustom"><?php echo esc_attr($product_mfg); ?></span></span>
        <?php endif; ?>
        <?php if(!empty($product_life)): ?>
        <span class="pro_life"><?php echo esc_html__('LIFE:', 'risehand'); ?>
            <span class="metadatacustom"><?php echo esc_attr($product_life); ?></span></span>
        <?php endif; ?>
    </div>
    <?php endif; ?>
<?php 
endif;
}

/*
**==============================   
** risehand risehandmerce Sales Badges
**==============================
*/
add_action('get_risehand_sales_badges', 'risehand_sales_badges');
function risehand_sales_badges(){
    global $product;
    $bage_one_color_bg  =  get_post_meta( get_the_ID(), 'product_badge_bg_color', true);
    $product_badge_color  =  get_post_meta( get_the_ID(), 'product_badge_color', true);
    $bage_one_color_bg    = ! empty( $bage_one_color_bg ) ? "background: $bage_one_color_bg!important;" : '';
    $product_badge_color    = ! empty( $product_badge_color ) ? "color: $product_badge_color!important;" : '';
    $style_css  = "style='$bage_one_color_bg  $product_badge_color'";
    $product_badge_bg_color_two  =  get_post_meta( get_the_ID(), 'product_badge_bg_color_two', true);
    $product_badge_color_two  =  get_post_meta( get_the_ID(), 'product_badge_color_two', true);
    $product_badge_bg_color_two    = ! empty( $product_badge_bg_color_two ) ? "background: $product_badge_bg_color_two!important;" : '';
    $product_badge_color_two    = ! empty( $product_badge_color_two ) ? "color: $product_badge_color_two!important;" : '';
    $style_css_two  = "style='$product_badge_bg_color_two  $product_badge_color_two'";
    $out_of_stock = $product->get_stock_status();
    $enable_badge_text = get_post_meta(get_the_ID(), 'enable_badge_text', true); 
    $badge_text = get_post_meta(get_the_ID(), 'badge_text', true); 
    $percent_enable = get_risehand_option('percent_enable');
    $badge_enable = get_risehand_option('badge_enable'); 
    ?>
    <div class="badge_box">
    <?php if($percent_enable == true):  
    if($product->is_on_sale() && $product->is_type( 'variable' )):   ?>

            <?php $percentage = ceil(100 - ($product->get_variation_sale_price() / $product->get_variation_regular_price( 'min' )) * 100); ?>
                <small class="badge_type_one on_sale"
                    <?php if(!empty($style_css)): echo wp_kses($style_css, array('style' => true)); endif;?>><?php echo esc_attr($percentage); ?>%
                </small>
          
            <?php elseif( $product->is_on_sale() && $product->get_regular_price()):?>
       
                <?php if($out_of_stock == 'outofstock'): ?>
                    <span class="badge_type_one on_sale outofstock" <?php if(!empty($style_css)): echo wp_kses($style_css, array('style' => true)); endif; ?>>
                    <?php echo esc_html_e('Out of Stock' , 'risehand'); ?></span>
                <?php else: ?>
            <?php $percentage = ceil(100 - ($product->get_sale_price() / $product->get_regular_price()) * 100); ?>
                <span class="badge_type_one on_sale" <?php if(!empty($style_css)): echo wp_kses($style_css, array('style' => true)); endif; ?>>
                    <?php echo esc_attr($percentage); ?>%</span>
                <?php endif; ?>
        
            <?php elseif( $product->is_on_sale() || $product->get_regular_price()):?>
            <?php if($out_of_stock == 'outofstock'): ?>
                <span class="badge_type_one on_sale outofstock" <?php if(!empty($style_css)): echo wp_kses($style_css, array('style' => true)); endif; ?>>
                    <?php echo esc_html_e('Out of Stock' , 'risehand'); ?></span>
                <?php elseif($out_of_stock == 'instock'): ?>
                <span class="badge_type_one on_sale instock" <?php if(!empty($style_css)): echo wp_kses($style_css, array('style' => true)); endif; ?>>
                    <?php echo esc_html_e('In Stock' , 'risehand'); ?></span>
                    <?php elseif($out_of_stock == 'onbackorder'): ?>
                <span class="badge_type_one on_sale onbackorder" <?php if(!empty($style_css)): echo wp_kses($style_css, array('style' => true)); endif; ?>>
                    <?php echo esc_html_e('On Backorder' , 'risehand'); ?></span>
                <?php endif; ?>
            <?php endif; ?>
        <?php endif; ?>
        <?php if($enable_badge_text == true || $badge_enable == true): ?>
            <?php if(!empty($badge_text)): ?>
                <span class="badge_text"
                    <?php if(!empty($style_css_two)): echo wp_kses($style_css_two, array('style' => true)); endif; ?>><?php echo esc_attr($badge_text); ?>
                </span>
            <?php endif; ?>
        <?php endif; ?>
    </div>
<?php
}
 
/*
**==============================   
**  product header list grid view and filter
**==============================
*/ 
function risehand_get_view_via_url() { 
    $shop_views  = isset( $_GET['view'] ) ? $_GET['view'] : '';
	if($shop_views){
		return $shop_views;
	}
}
/*
**==============================   
** Shop Loop Header
**==============================
*/ 
add_action( 'risehand_inside_shop_loop', 'risehand_before_shop_loop');
if(!function_exists('risehand_before_shop_loop' )):
function risehand_before_shop_loop(){  
?>
<div class="woo_products_header clearfix"> 
    <div class="d-flex">
        <?php if(get_risehand_option('grid_list_vide_enable') == true): ?>  
            <div class="d-flex">
                <a class="view-type-grid mr-5 <?php if ( ! isset( $_GET['view'] ) || $_GET['view'] === 'grid-view' ) : ?>active<?php endif; ?>"
                    href="<?php echo esc_url( add_query_arg( array( 'view' => 'grid-view' ) ) );?>">
                    <i class="risehand-grid"></i>
                </a>
                <a class="view-type-list <?php if ( isset( $_GET['view'] ) && $_GET['view'] === 'list-view' ) : ?>active<?php endif; ?>"
                    href="<?php echo esc_url( add_query_arg( array( 'view' => 'list-view' ) ) );?>">
                    <i class="risehand-list"></i>
                </a>
            </div>
 
         <?php endif; ?>
        <?php if(get_risehand_option('per_page_enable') == true): ?>
            <div><?php do_action('risehand_get_per_page_product'); ?></div>
        <?php endif; ?>
        </div>
</div> 
<?php }
endif;

function risehand_get_per_page_option() {
	$getopt = isset($_GET['per_page']) ? $_GET['per_page'] : '';
	return esc_html($getopt);
}

add_action('risehand_get_per_page_product', 'risehand_custom_products_per_page_dropdown', 20);
function risehand_custom_products_per_page_dropdown() {
	$per_page = risehand_get_per_page_option();
	$getper_page = wc_get_default_products_per_row() * wc_get_default_product_rows_per_page();
	$options = array($getper_page, $getper_page * 2, $getper_page * 3, $getper_page * 4 , $getper_page * 5 , $getper_page * 6  , $getper_page * 7 , $getper_page * 8 , $getper_page * 9 , $getper_page * 10);
	?>
	<div class="products-per-page-box d-flex align-items-center">
		<span><?php esc_html_e('Show:', 'risehand'); ?></span>
		<form class="products-per-page" method="get">
			<select name="per_page" class="per_page orderby" data-class="select-filter-per_page" onchange="this.form.submit()">
				<?php foreach ($options as $option) : ?>
					<option value="<?php echo esc_attr($option); ?>" <?php selected($per_page, $option); ?>><?php echo esc_html($option); ?></option>
				<?php endforeach; ?>
			</select>
			<?php wc_query_string_form_fields(null, array('per_page', 'submit', 'paged', 'product-page')); ?>
		</form>
	</div>
	<?php
}

add_action('pre_get_posts', 'risehand_custom_products_per_page');
function risehand_custom_products_per_page($query) {
	if (!is_admin() && $query->is_main_query()) {
		$per_page = risehand_get_per_page_option();
		if ($per_page) {
			$query->set('posts_per_page', $per_page);
		}
	}
}
/*
**==============================   
** Shop Quantity
**==============================
*/ 
function risehand_wc_loop_add_to_cart_scripts() {
    if(is_shop() || is_product_category() || is_product_tag() || is_product() ) : ?>
    <script>
        jQuery( document ).ready( function( $ ) {
            $( document ).on( 'change', '.quantity .qty', function() {
                $( this ).parent( '.quantity' ).next( '.add_to_cart_button' ).attr( 'data-quantity', $( this ).val() );
            });
        });
    </script>
    <?php endif;
}
