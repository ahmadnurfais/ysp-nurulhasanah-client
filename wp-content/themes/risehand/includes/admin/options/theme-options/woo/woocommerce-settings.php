<?php
/*
=======================
 Woocommerce Settings
=======================
*/
Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Woocommerce Settings', 'risehand' ),
        'id'     => 'woocommerce_settings',
        'desc'   => esc_html__( '', 'risehand' ),
        'icon'   => 'el el-shopping-cart-sign',
        'fields' => array(

            array(
                'id' => 'woocommerce-archive-settings',
                'type' => 'section',
                'title' => __('Woocommerce Archive  Settings', 'risehand'),
                'indent' => true 
            ), 
            array(
                'id'       => 'disable_mini_cart',
                'type'     => 'switch', 
                'title'    => __('Mini Cart Enable  / Disable In Shop Page', 'risehand'),
                'default'  => true,
            ),  
            array(
                'id'       => 'grid_list_vide_enable',
                'type'     => 'switch', 
                'title'    => __('Grid / List View Enable  / Disable In Shop Page', 'risehand'),
                'default'  => true,
            ),  
            array(
                'id'       => 'per_page_enable',
                'type'     => 'switch', 
                'title'    => __('Select Products Per Page View Enable  / Disable In Shop Page', 'risehand'),
                'default'  => true,
            ),   
            array(
                'id'       => 'active_filters',
                'type'     => 'switch', 
                'title'    => __('Active Filter Enable  / Disable In Shop Page', 'risehand'),
                'default'  => true,
            ),
            
            array(
                'id'       => 'recently_viewd_poducts',
                'type'     => 'switch', 
                'title'    => __('Recently Viewed Products Enable  / Disable In Shop Page', 'risehand'),
                'default'  => true,
            ),
            array(
                'id'       => 'recent_title',
                'type'     => 'text',
                'title'    => esc_html__( 'Recently Viewd Products Title', 'risehand' ),
                'default' => esc_html__('Recently Viewd Products', 'risehand') ,
                'required' => array('recently_viewd_poducts', '=', true),
            ),
            
            array(
                'id' => 'woocommerce-single-settings',
                'type' => 'section',
                'title' => __('Woocommerce Single  Settings', 'risehand'),
                'indent' => true 
            ),  
            array(
                'id'    => 'product_single_style',
                'type'  => 'select',
                'title' => esc_html__( 'Product Single Style' , 'risehand' ),
                'options'  => array(
                    'style_one' => esc_html__( 'Style One (Default)', 'risehand' ),
                    'style_two' => esc_html__( 'Style Two', 'risehand' ),
                    'style_three' => esc_html__( 'Style Three ', 'risehand' ),
                    'style_four' => esc_html__( 'Style Four ', 'risehand' ),
                ),
                'default'  => 'style_one',
            ),

            array(
                'id'       => 'product_paginaion_type',
                'type'     => 'button_set',
                'title'    => __('Pagination , Load More or Infinite Product Scroll', 'risehand'),
                //Must provide key => value pairs for options
                'options' => array(
                    'pagination' => esc_html__( 'Woocommerce Product Pagination', 'risehand' ),
                    'loadmore' => esc_html__( 'Woocommerce Product Loadmore', 'risehand' ), 
                    'infinite' => esc_html__( 'Woocommerce Product Infinite Scroll', 'risehand' ),
                 ), 
                'default' => 'pagination'
            ),

            array(
                'id' => 'woocommerce-related-settings',
                'type' => 'section',
                'title' => __('Related Posts', 'risehand'),
                'indent' => true 
            ), 
            array(
                'id'       => 'related_post_count_woo',
                'type'     => 'text',
                'title'    => esc_html__( 'Related Post Count', 'risehand' ),
                'default' => esc_html__('3', 'risehand') ,
            ),
            
            array(
                'id' => 'woocommerce-deals-settings',
                'type' => 'section',
                'title' => __('Deals Text Changing', 'risehand'),
                'indent' => true 
            ), 
           
            
            array(
                'id'       => 'deal_day',
                'type'     => 'text',
                'title'    => esc_html__( 'Days', 'risehand' ),
                'default' => esc_html__('Days', 'risehand') ,
            ),
            array(
                'id'       => 'deal_hours',
                'type'     => 'text',
                'title'    => esc_html__( 'Hours', 'risehand' ),
                'default' => esc_html__('Hours', 'risehand') ,
            ),
            array(
                'id'       => 'deal_min',
                'type'     => 'text',
                'title'    => esc_html__( 'Minutes', 'risehand' ),
                'default' => esc_html__('Mins', 'risehand') ,
            ),
            array(
                'id'       => 'deal_sec',
                'type'     => 'text',
                'title'    => esc_html__( 'Secs', 'risehand' ),
                'default' => esc_html__('Secs', 'risehand') ,
            ),   
            
        ),
    )
);