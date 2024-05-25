<?php
/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.0.0
*/
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
global $product;
$class = "";
$product_id = get_the_ID();
$product_categories = wc_get_product_category_list($product_id);
$tag_list = wc_get_product_tag_list($product_id);

if (strlen($product_categories) > 3 || strlen($tag_list) > 3) {
    $class = "enable_width";
}
?> 
	 <div class="product_meta d-flex align-items-top">
		 <?php do_action( 'woocommerce_product_meta_start' ); ?>
				<ul class="<?php echo esc_attr($class); ?>">
			<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>
			<li class="sku_wrapper">
				<span class="sku"><?php echo esc_html__( 'SKU:', 'risehand' ); ?></span>
				<?php echo esc_html( $sku = $product->get_sku() ) ? esc_html( $sku ) : esc_html__( 'N/A', 'risehand' ); ?>


			</li>
			<?php endif; ?>
			<?php echo wc_get_product_category_list( $product->get_id(), ', ', '<li class="posted_in"><span>' . esc_html__( 'Category:' , 'risehand' ).'</span> <em class="d-none">'. esc_attr(count( $product->get_category_ids() )) . ' </em> ', '</li>' ); ?>
			<?php echo wc_get_product_tag_list( $product->get_id(), ', ', '<li class="tagged_as"><span>' . esc_html__( 'Tag:' , 'risehand' ).'</span> <em class="d-none">'.esc_attr(count( $product->get_tag_ids() )) . ' </em>', '</li>' ); ?>
		 
			</ul>
			<?php do_action( 'woocommerce_product_meta_end' ); ?>
			<?php
			// Get the product ID
			$product_id = get_the_ID();
			// Get the product_data_enable value
			$product_data_enable = get_post_meta($product_id, 'product_data_enable', true);
			// Get the product_mfg value
			$product_mfg = get_post_meta($product_id, 'product_mfg', true);
			// Get the product_type value
			$product_type = get_post_meta($product_id, 'product_type', true);
			// Get the product_life value
			$product_life = get_post_meta($product_id, 'product_life', true); 
			?>
			<?php if($product_data_enable == true): ?>
				<ul class="custom_meta">
					<li><span><?php echo esc_html__( 'Product MFG:' , 'risehand' ); ?></span><?php echo esc_attr($product_mfg); ?></li>
					<li><span><?php echo esc_html__( 'Product Type:' , 'risehand' ); ?></span><?php echo esc_attr($product_type); ?></li>	
					<li><span><?php echo esc_html__( 'Product LIfe:' , 'risehand' ); ?></span><?php echo esc_attr($product_life); ?></li>			
				</ul>
			<?php endif; ?>

		</div>
		
	