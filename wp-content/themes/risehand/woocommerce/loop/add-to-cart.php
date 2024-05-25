<?php
/**
 * Loop Add to Cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/add-to-cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.3.0
 */
if (!defined('ABSPATH')) exit; // Exit if accessed directly.
global $product;
?>
<?php if (!$product->is_in_stock()) : ?>
    <a href="<?php echo apply_filters('out_of_stock_add_to_cart_url', get_permalink($product->get_id())); ?>" class="rdmor"><i class="risehand-cart"></i><span><?php echo apply_filters('out_of_stock_add_to_cart_text', __('Read More', 'risehand')); ?></span></a>
<?php else : ?>

    <?php
    $link = array(
        'url'   => '',
        'label' => '',
        'class' => ''
    ); 
    switch ($product->get_type()) {
        case "variable":
            $link['url']    = apply_filters('variable_add_to_cart_url', get_permalink($product->get_id()));
            $link['label']  = apply_filters('variable_add_to_cart_text', __('Select options', 'risehand'));
            break;
        case "grouped":
            $link['url']    = apply_filters('grouped_add_to_cart_url', get_permalink($product->get_id()));
            $link['label']  = apply_filters('grouped_add_to_cart_text', __('View options', 'risehand'));
            break;
        case "external":
            $link['url']    = apply_filters('external_add_to_cart_url', get_permalink($product->get_id()));
            $link['label']  = apply_filters('external_add_to_cart_text', __('Read More', 'risehand'));
            break;
        default:
            if ($product->is_purchasable()) {
                $link['url']    = apply_filters('add_to_cart_url', esc_url($product->add_to_cart_url()));
                $link['label']  = apply_filters('add_to_cart_text', __('Add to cart', 'risehand'));
                $link['class']  = apply_filters('add_to_cart_class', 'add_to_cart_button');
            } else {
                $link['url']    = apply_filters('not_purchasable_url', get_permalink($product->get_id()));
                $link['label']  = apply_filters('not_purchasable_text', __('Read More', 'risehand'));
            }
            break;
    } 
    // If there is a simple product.
    if ($product->is_type('simple')) :
    ?>
        <form action="<?php echo esc_url($product->add_to_cart_url()); ?>" class="cart" method="post" enctype="multipart/form-data">
            <?php
            // Displays the quantity box.
            echo woocommerce_quantity_input();

            // Display the submit button.
            echo sprintf('<button type="submit" data-product_id="%s" data-product_sku="%s" data-quantity="1" class="%s  product_type_simple"><i class="risehand-cart"></i><span>%s</span></button>', esc_attr($product->get_id()), esc_attr($product->get_sku()), esc_attr($link['class']), esc_html($link['label']));
            ?>
        </form>
    <?php else : ?>
        <?php
        echo apply_filters('woocommerce_loop_add_to_cart_link', sprintf('<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="%s   product_type_%s"><i class="risehand-cart"></i><span>%s</span></a>', esc_url($link['url']), esc_attr($product->get_id()), esc_attr($product->get_sku()), esc_attr($link['class']), esc_attr($product->get_type()), esc_html($link['label'])), $product, $link);
        ?>
    <?php endif; ?>

<?php endif; ?>
