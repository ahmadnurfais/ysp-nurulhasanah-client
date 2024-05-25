<?php
/** risehand edited
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit; 
global $product; 
$listview = '';
 if(risehand_get_view_via_url() == 'list-view'): 
	$listview = 'display-list';
 endif;
 $clasess = 'product_wrapper';
// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
$product_archive_style = get_risehand_option('product_archive_style');
 if(risehand_get_view_via_url() == 'list-view'): ?>
	<li <?php wc_product_class( $listview, $clasess, $product ); ?>>
		<?php do_action('risehand_get_product_list'); ?>
	</li>
<?php else: ?>
    <li <?php wc_product_class( $clasess, $product ); ?>>
        <?php  do_action('get_risehand_product_card'); ?>
    </li>
<?php endif; ?>