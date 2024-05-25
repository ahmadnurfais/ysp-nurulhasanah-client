<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.6.0
 */
defined( 'ABSPATH' ) || exit;
get_header( 'shop' ); 
global  $product;
$clearfix = ''; 
$per_page_enable = get_risehand_option('product_archive_style');
$filter_content_enable = get_risehand_option('filter_content_enable');
$grid_list_vide_enable = get_risehand_option('grid_list_vide_enable');
$breadcrumb_enable = get_risehand_option('breadcrumb_enable'); 
$flex_enable = ''; 
if($per_page_enable == true || $filter_content_enable == true || $grid_list_vide_enable == true): 
	$flex_enable = 'd-flex';
endif;
if($filter_content_enable == false && $grid_list_vide_enable == false && $per_page_enable == false): 
  $clearfix = 'clearfix';
endif;  
$listview = '';
 if(risehand_get_view_via_url() == 'list-view'): 
	$listview = 'product_display-list';
 endif;
 do_action('risehand_get_deals_banner'); ?>
</div>
<div class="row">
<div id="primary" class="content-area <?php risehand_column_for_shop(); ?>">
	<main id="mains" class="site-main  <?php echo esc_attr($listview);  ?>">
	<div class="row  align-items-center">
		<div class="col-lg-7 col-md-7 col-sm-12 mb_15">
			<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
				<div class="woocommerce-products-header__title title_no_a_36 page-title"><?php woocommerce_page_title(); ?>  </div>
			<?php endif; ?>
		</div>
		<?php if($breadcrumb_enable == true): ?>
		<div class="col-lg-5 col-md-5 col-sm-12 probread mb_15 text-md-end">
			<?php do_action('risehand_custom_breadcrumb'); ?>
		</div>
		<?php endif; ?>
	</div>
		<div class="row">
			<div class="col-lg-12"> 
				<header class="woocommerce-products-header  clearfix">
					<?php
					/**
					 * Hook: woocommerce_archive_description.
					 *
					 * @hooked woocommerce_taxonomy_archive_description - 10
					 * @hooked woocommerce_product_archive_description - 10
					 */	  
					do_action('woocommerce_archive_description'); 
					?>
					<div class="woocommerce_output_all_notices">
						<?php woocommerce_output_all_notices(); ?>
					</div>
					<div class="top_woo_header <?php echo esc_attr($clearfix); ?> <?php echo esc_attr($flex_enable); ?>">
						<?php do_action('risehand_inside_shop_loop'); ?>
						<div class="in_right">
							<?php do_action( 'woocommerce_before_shop_loop' ); ?>
						</div>
					</div>
				 
				</header> 
				<?php do_action('risehand_get_active_filters'); ?>
				<div class="products_box_outer clearfix">
					<?php if ( woocommerce_product_loop() ) { ?> 
						<?php
						woocommerce_product_loop_start();
						if ( wc_get_loop_prop( 'total' ) ) {  
							while ( have_posts() ) {
								the_post();
								/**
								 * Hook: woocommerce_shop_loop.
								 */
								do_action( 'woocommerce_shop_loop' );
								wc_get_template_part( 'content', 'product' ); 
							} ?>
					
							<?php
						}  
						woocommerce_product_loop_end(); 
						do_action( 'woocommerce_after_shop_loop' );
					} else { 
						do_action( 'woocommerce_after_main_content' );
					 
						do_action( 'woocommerce_no_products_found' );
					}
					?>	 
			</div>
		</div>
	</main><!-- #main -->
</div>
<?php 
do_action( 'woocommerce_sidebar' );
get_footer( 'shop' );
