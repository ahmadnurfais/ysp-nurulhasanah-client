<?php
/*
=======================
 Woocommerce Settings
=======================
*/
Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Product Card Settings', 'risehand' ),
        'id'     => 'woocommerce_product_settings',
        'desc'   => esc_html__( '', 'risehand' ),
        'icon'   => 'el el-shopping-cart-sign',
        'subsection' => true ,
        'fields' => array(

            array(
                'id' => 'woocommerce-product-card-settings',
                'type' => 'section',
                'title' => __('Woocommerce Product Card  Settings', 'risehand'),
                'indent' => true 
            ), 
            array(
                'id'       => 'image_size_enable',
                'type'     => 'switch', 
                'title'    => __('Product Image Resize Enable / Disable', 'risehand'),
                'default'  => false,
            ), 
            array(
                'id'       => 'pro_image_size',
                'type'     => 'text',
                'title'    => esc_html__( 'Product Card Image size ( Desktop )', 'risehand' ), 
                'default' => esc_html__('150px', 'risehand') ,  
                'desc' => esc_html__('Enter the image size like this 100px or 120px or 150px', 'risehand') , 
                'required' => array('image_size_enable', '=', true),
            ), 
            array(
                'id'       => 'mdpro_image_size',
                'type'     => 'text',
                'title'    => esc_html__( 'Product Card Image size ( Mobile )', 'risehand' ), 
                'default' => esc_html__('150px', 'risehand') ,  
                'desc' => esc_html__('Enter the image size like this 100px or 120px or 150px', 'risehand') , 
                'required' => array('image_size_enable', '=', true),
            ), 
            array(
                'id'       => 'product_title_resize',
                'type'     => 'switch', 
                'title'    => __('Product Title Resize Enable / Disable', 'risehand'),
                'default'  => false,
            ), 
            array(
                'id'       => 'text_over_flow_size',
                'type'     => 'text',
                'title'    => esc_html__( 'Title Text Overflow Size', 'risehand' ), 
                'default' => esc_html__('2', 'risehand') ,  
                'desc' => esc_html__('Enter the numbers like this 2 or 3 or 4', 'risehand') ,  
                'required' => array('product_title_resize', '=', true),
            ), 
            array(
                'id'       => 'title_height',
                'type'     => 'text',
                'title'    => esc_html__( 'Title Height', 'risehand' ), 
                'default' => esc_html__('50px', 'risehand') ,  
                'desc' => esc_html__('Enter the numbers like this 30px or 40px 0r 50px', 'risehand') ,  
                'required' => array('product_title_resize', '=', true),
            ), 
            array(
                'id'       => 'rating_enable',
                'type'     => 'switch', 
                'title'    => __('Rating Enable / Disable', 'risehand'),
                'default'  => true,
            ),  
            array(
                'id'       => 'category_enable',
                'type'     => 'switch', 
                'title'    => __('Category Enable  / Disable', 'risehand'),
                'default'  => true,
            ),  
            array(
                'id'       => 'brand_enable',
                'type'     => 'switch', 
                'title'    => __('Brand Enable View Enable  / Disable', 'risehand'),
                'default'  => true,
            ),    
            array(
                'id'    => 'brand_type',
                'type'  => 'select',
                'title' => esc_html__( 'Brand Type' , 'risehand' ),
                'options'  => array(
                    'title' => esc_html__( 'Show Title', 'risehand' ),
                    'image' => esc_html__( 'Show Brand image', 'risehand' ),
                ),
                'default'  => 'title',
            ),
            array(
                'id'       => 'quick_view_enable',
                'type'     => 'switch', 
                'title'    => __('Quick View', 'risehand'),
                'default'  => true,
            ),  
            array(
                'id'       => 'add_to_cart_enable_disable',
                'type'     => 'switch', 
                'title'    => __('Add to cart Enable  / Disable ', 'risehand'),
                'default'  => true,
            ),  
 
            array(
                'id'       => 'sold_items_enable',
                'type'     => 'switch', 
                'title'    => __('Sold Items Progress Bar Enable  / Disable ', 'risehand'),
                'default'  => true,
            ),

            array(
                'id'    => 'sold_type',
                'type'  => 'select',
                'title' => esc_html__( 'Sold Type' , 'risehand' ),
                'options'  => array(
                    'default' => esc_html__( 'Default based on avilable products and sold products', 'risehand' ),
                    'bymeta' => esc_html__( 'By using meta option Manually', 'risehand' ),
                ),
                'default'  => 'bymeta',
            ),

            array(
                'id'       => 'badge_enable',
                'type'     => 'switch', 
                'title'    => __('Badge Enable  / Disable ', 'risehand'),
                'default'  => true,
            ),
            array(
                'id'       => 'percent_enable',
                'type'     => 'switch', 
                'title'    => __('Badge Percentage Enable  / Disable ', 'risehand'),
                'default'  => true,
            ), 
        ),
    )
);