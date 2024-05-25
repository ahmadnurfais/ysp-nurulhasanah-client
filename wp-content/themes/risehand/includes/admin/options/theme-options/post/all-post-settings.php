<?php
/*
====================
Breadcrumb Settings
====================
*/

Redux::setSection( $opt_name, array(
            'title'  => esc_html__( 'Custom Post Settings', 'risehand' ),
            'id'     => 'all_post_settings',
            'desc'   => esc_html__( '', 'risehand' ), 
            'icon'   => 'el el-wrench',
            'fields' => array(
                
                array(
                    'id' => 'breasectss',
                    'type' => 'section',
                    'title' => __('Archive Page title for Givewp / Woocommerce Section', 'risehand'),
                    'indent' => true ,
                ), 
                
                //  Archive Page title settings 
                array(
                    'id'       => 'tribe_events_name',
                    'type'     => 'text', 
                    'default'  =>  __('Events', 'risehand'),
                    'title'    => __('Events Archive Page Title Name', 'risehand'),
                ), 
                array(
                    'id'       => 'donation_name',
                    'type'     => 'text', 
                    'default'  =>  __('Donations', 'risehand'),
                    'title'    => __('Donation Archive Page Title Name', 'risehand'),
                ), 
                array(
                    'id'       => 'product_name',
                    'type'     => 'text', 
                    'default'  =>  __('Products', 'risehand'),
                    'title'    => __('Products Archive Page Title Name', 'risehand'),
                ),
                //  Slug Change option for custom post type 
                array(
                    'id' => 'breasect',
                    'type' => 'section',
                    'title' => __('Slug Rename Section ', 'risehand'),
                    'indent' => true ,
                ), 
                array(
                    'id'       => 'slug_service',
                    'type'     => 'text', 
                    'default'  =>  __('', 'risehand'),
                    'title'    => __('Change Slug Name for Service', 'risehand'),
                ),
                array(
                    'id'       => 'slug_service_cat',
                    'type'     => 'text', 
                    'default'  =>  __('', 'risehand'),
                    'title'    => __('Change Slug Name for Service Category', 'risehand'),
                ),
                array(
                    'id'       => 'slug_portfolio',
                    'type'     => 'text', 
                    'default'  =>  __('', 'risehand'),
                    'title'    => __('Change Slug Name for Portfolio', 'risehand'),
                ),
                array(
                    'id'       => 'slug_portfolio_cat',
                    'type'     => 'text', 
                    'default'  =>  __('', 'risehand'),
                    'title'    => __('Change Slug Name for Portfolio Category', 'risehand'),
                ),
                array(
                    'id'       => 'slug_volunteer',
                    'type'     => 'text', 
                    'default'  =>  __('', 'risehand'),
                    'title'    => __('Change Slug Name for Volunteer', 'risehand'),
                ),
                array(
                    'id'       => 'slug_volunteer_cat',
                    'type'     => 'text', 
                    'default'  =>  __('', 'risehand'),
                    'title'    => __('Change Slug Name for Volunteer Category', 'risehand'),
                ), 
                array(
                    'id'       => 'slug_events_location',
                    'type'     => 'text', 
                    'default'  =>  __('', 'risehand'),
                    'title'    => __('Change Slug Name for Events Location', 'risehand'),
                ),
            ),
        )
);