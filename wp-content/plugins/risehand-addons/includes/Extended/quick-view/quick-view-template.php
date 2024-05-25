<?php
add_action('get_risehand_quick_view_get', 'risehand_quick_view_get');
function risehand_quick_view_get()
{
    global $product, $woocommerce;
    $product_type = get_post_meta(get_the_ID(), 'product_type', true);
    $product_mfg = get_post_meta(get_the_ID(), 'product_mfg', true);
    $product_life = get_post_meta(get_the_ID(), 'product_life', true);
    ?>
 
        <div class="quick_view position_four"> 
                <div id="product-<?php the_ID(); ?>" <?php post_class($classes); ?>>
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <?php woocommerce_show_product_images(); ?> 
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="summary entry-summary scrollbarcolor"> 
                                <div class="top_content_single">
                                    <?php do_action('get_risehand_current_product_category'); ?>
                                    <div class="title"><?php do_action('risehand_single_title'); ?></div>
                                    <div class="divborder"></div>
                                    <?php do_action('risehand_single_rating'); ?>
                                    <?php do_action('risehand_single_meta'); ?> 
                                
                                </div>
                                <div class="top_min_single">  
                                <?php
                                /** 
                                 * Hook: woocommerce_single_product_summary.
                                 *
                                 * @hooked woocommerce_template_single_title - 5
                                 * @hooked woocommerce_template_single_rating - 10
                                 * @hooked woocommerce_template_single_price - 10
                                 * @hooked woocommerce_template_single_excerpt - 20
                                 * @hooked woocommerce_template_single_add_to_cart - 30
                                 * @hooked woocommerce_template_single_meta - 40
                                 * @hooked woocommerce_template_single_sharing - 50
                                 * @hooked WC_Structured_Data::generate_product_data() - 60
                                 */
                                do_action( 'woocommerce_single_product_summary' );
                                ?>
                                </div>
                                <div class="top_bottom_single">
                                <?php do_action('risehand_single_excerpt'); ?> 
                                <?php do_action('risehand_single_sharing'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
      
        </div>
        
 
   
    <?php
}
