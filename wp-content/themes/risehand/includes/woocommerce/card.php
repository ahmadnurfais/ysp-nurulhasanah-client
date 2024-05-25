<?php
/*
**==============================   
**  Product Hover Image
**==============================
*/
add_action('risehand_get_product_hover_image', 'risehand_product_hover_image');
function risehand_product_hover_image(){
    global $product;
    $product_hover_image  =  get_post_meta( get_the_ID(), 'product_hover_image', true);
    $product_hover_image_alt = '';
    // Check if the product_hover_image has a value
    if (!empty($product_hover_image)) {
        // Retrieve the attachment ID from the image URL
        $attachment_id = attachment_url_to_postid($product_hover_image);
        // Get the alt text from the attachment
        $product_hover_image_alt = get_post_meta($attachment_id, '_wp_attachment_image_alt', true);
        if(empty($product_hover_image_alt)){
            $product_hover_image_alt = 'img'; 
        } 
    echo '<img src="'.esc_attr($product_hover_image).'" class="hover_image img-fluid" alt="'.esc_attr($product_hover_image_alt).'" />';
    }      
}
/*
**==============================   
** risehand Product Short Description
**==============================
*/
add_action( 'risehand_get_show_excerpt_shop_page', 'risehand_show_excerpt_shop_page', 5 );
function risehand_show_excerpt_shop_page() {
    global $product;
    echo get_the_excerpt( $product->get_id() );
}

/*
**==============================   
**  Product Category
**==============================
*/
add_action('get_risehand_current_product_category', 'risehand_get_current_product_category'); 
function risehand_get_current_product_category(){
    global $product;
    $category_enable = get_risehand_option('category_enable');
    if($category_enable == false):
        return false;
    endif;
    $terms = get_the_terms( $product->get_id(), 'product_cat' );
    if(!empty($terms)):
    foreach($terms  as $term){                         
        $product_cat_name = $term->name;  
        $product_cat_id =  get_term_link( $term->term_id);
            break;
        }
    ?>
    <div class="product-category"> 
            <a href="<?php echo esc_url($product_cat_id); ?>"> <?php echo esc_attr($product_cat_name); ?></a>
    </div>
<?php
endif;
}  
 
/*
**==============================   
**  Rating
**==============================
*/
add_action('get_risehand_get_star_rating', 'risehand_get_star_rating');
function risehand_get_star_rating(){
    global $woocommerce, $product ;
    $rating_enable =  get_risehand_option('rating_enable');
    if($rating_enable == false):
        return false;
    endif; 
    $average = $product->get_average_rating();
    $ratingcount = $product->get_review_count();
    echo '<div class="product-rate-cover woocommerce"> <span class="star-rating"><span style="width:'.( ( esc_attr($average) / 5 ) * 100 ) . '%"><strong  class="rating">'.esc_attr($average).'</strong> '.__( 'out of 5', 'risehand' ).'</span></span> <span class="text-muted"> ' .esc_attr($ratingcount).'</span></div>';
}  

/*
* ==============================   
**   Product Card Style One
**==============================
*/
add_action( 'get_risehand_product_card' , 'risehand_product_card' );
function risehand_product_card(){
    global $product; 
    $sold_items_enable =   get_risehand_option('sold_items_enable');
    $add_to_cart_enable_disable =   get_risehand_option('add_to_cart_enable_disable');
    ?>
<div class="product_card-one">
<div class="sketch-loading"></div>
    <div class="product-img-action-wrap"> 
        <a href="<?php echo esc_url(get_permalink(get_the_id())); ?>">
            <?php echo woocommerce_get_product_thumbnail('default-img'); ?>
            <?php do_action('risehand_get_product_hover_image'); ?>
        </a>
        <?php do_action('risehand_get_product_action_button'); ?>
        <?php  do_action('get_risehand_sales_badges'); ?>
    </div>
    <div class="content-wrap"> 
        <?php do_action('get_risehand_current_product_category'); ?>
   
        <div class="title_20"><a href="<?php echo esc_url(get_permalink(get_the_id())); ?>"><?php the_title(); ?></a></div>
            <?php  do_action('get_risehand_get_star_rating'); ?>
        <div class="d-flex align-tems-center">
            <div class="product-price">
                <?php woocommerce_template_loop_price(); ?>
            </div>  
            <?php if($add_to_cart_enable_disable == true): ?>
            <div class="add-cart">
                <?php  woocommerce_template_loop_add_to_cart(); ?>
            </div> 
            <?php endif; ?>
        </div>
        
        <?php if($sold_items_enable == true): ?>
        <?php do_action('get_risehand_shop_product_sold_count_default'); ?>
        <?php endif; ?>
    </div>
</div>
<?php
 }


/*
* ==============================   
**   Product Card Style One
**==============================
*/
add_action( 'risehand_get_product_list' , 'risehand_product_list' );
function risehand_product_list(){
    global $product;
    $badge_enable =   get_risehand_option('badge_enable');
    $sold_items_enable =    get_risehand_option('sold_items_enable');
    $add_to_cart_enable_disable =  get_risehand_option('add_to_cart_enable_disable');
    $short_description_enable =    get_risehand_option('short_description_enable');
?>
<div class="product_wrapper_list">
<div class="sketch-loading"></div>
    <div class="d-flex align-items-center">
        <div class="left-img">
            <div class="product-img">
                <a href="<?php echo esc_url(get_permalink(get_the_id())); ?>">
                    <?php echo woocommerce_get_product_thumbnail('default-img'); ?> 
                    <?php do_action('risehand_get_product_hover_image'); ?>
                </a> 
            </div>   
        </div>  
    <div class="product-content-wrap">
    <?php if($badge_enable == true): ?>
        <div class="product-badges product-badges-position product-badges-mrg">
            <?php  do_action('get_risehand_sales_badges'); ?>
        </div>
        <?php endif; ?>
        <?php do_action('get_risehand_get_star_rating'); ?>
        <div class="title_28"><a href="<?php echo esc_url(get_permalink(get_the_id())); ?>"><?php the_title(); ?></a></div>
       
            <?php do_action('get_risehand_current_product_category'); ?>
        
            <?php if($sold_items_enable == true): ?>
                <?php do_action('get_risehand_shop_product_sold_count_default'); ?>
            <?php endif; ?>
            <div class="position-relative">
            <div class="product-price mb-10">
                <?php woocommerce_template_loop_price(); ?>
            </div>
            <?php if($add_to_cart_enable_disable == true): ?>
                <?php woocommerce_template_loop_add_to_cart(); ?>
                <?php endif; ?>
            </div>
            <?php if($short_description_enable == true): ?>
            <div class="space_div"></div>
            <div class="list-features-six">
            <?php do_action('risehand_get_show_excerpt_shop_page'); ?>
            </div>
        <?php endif; ?>
    </div>    </div>
    <?php do_action('risehand_get_product_action_button'); ?>
</div>

<?php
 }

 
 
