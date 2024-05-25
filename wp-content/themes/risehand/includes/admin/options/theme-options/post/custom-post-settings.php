<?php
/*
====================
Service Settings
====================
*/
Redux::setSection( $opt_name, array(
            'title'  => esc_html__( 'Events / Service / Portfolio / Volunteer Settings', 'risehand' ),
            'id'     => 'service_settings_all',
            'desc'   => esc_html__( '', 'risehand' ),
            // 'subsection' => true,  Enable subsection
            'icon'   => 'el el-edit',
            'fields' => array(
                array(
                    'id' => 'portfolio_page_sections',
                    'type' => 'section',
                    'title' => __('Portfolio Single Settings', 'risehand'),
                    'indent' => true ,
                ),
                array(
                    'id'       => 'portfolio_share_disable',
                    'type'     => 'switch', 
                    'default'  => true,
                    'title'    => __('Portfolio Share Enable / Disable', 'risehand'), 
                ),
                array(
                    'id'       => 'portfolio_next_prev_enable',
                    'type'     => 'switch', 
                    'default'  => true,
                    'title'    => __('Portfolio Next - Prev Post Enable / Disable', 'risehand'), 
                ),
                array(
                    'id'       => 'portfolio_feature_image_enable',
                    'type'     => 'switch', 
                    'default'  => true,
                    'title'    => __('Portfolio Feature Image Enable / Disable', 'risehand'), 
                ),
                array(
                    'id'       => 'portfolio_relatedpost_enable',
                    'type'     => 'switch', 
                    'default'  => true,
                    'title'    => __('Portfolio Related Post Enable / Disable', 'risehand'), 
                ),
                array(
                    'id'       => 'portfolio_related_post_title',
                    'type'     => 'text', 
                    'default'  =>  __('Related Portfolios', 'risehand'),
                    'title'    => __('Related Portfolio Title', 'risehand'),
                    'required' => [ 'portfolio_relatedpost_enable', '=', true ],
                ),
                array(
                    'id'       => 'portfolio_related_post_count',
                    'type'     => 'text', 
                    'default'  =>  __('4', 'risehand'),
                    'title'    => __('Portfolio Related Portfolio Count', 'risehand'),
                    'required' => [ 'portfolio_relatedpost_enable', '=', true ],
                ),
                array(
                    'id' => 'service_single_page_sections',
                    'type' => 'section',
                    'title' => __('Service Single Settings', 'risehand'),
                    'indent' => true ,
                ),
                array(
                    'id'       => 'service_share_disable',
                    'type'     => 'switch', 
                    'default'  => true,
                    'title'    => __('Service Share Enable / Disable', 'risehand'), 
                ),
                array(
                    'id'       => 'service_next_prev_enable',
                    'type'     => 'switch', 
                    'default'  => true,
                    'title'    => __('Service Next - Prev Post Enable / Disable', 'risehand'), 
                ),
                array(
                    'id'       => 'service_feature_image_enable',
                    'type'     => 'switch', 
                    'default'  => true,
                    'title'    => __('Service Feature Image Enable / Disable', 'risehand'), 
                ),
                array(
                    'id'       => 'service_relatedpost_enable',
                    'type'     => 'switch', 
                    'default'  => true,
                    'title'    => __('Related Post Enable / Disable', 'risehand'), 
                ),
                array(
                    'id'       => 'service_related_post_title',
                    'type'     => 'text', 
                    'default'  =>  __('Related Services', 'risehand'),
                    'title'    => __('Related Service Title', 'risehand'),
                    'required' => [ 'service_relatedpost_enable', '=', true ],
                ),
                array(
                    'id'       => 'service_related_post_count',
                    'type'     => 'text', 
                    'default'  =>  __('4', 'risehand'),
                    'title'    => __('Service Related Service Count', 'risehand'),
                    'required' => [ 'service_relatedpost_enable', '=', true ],
                ),
                array(
                    'id' => 'service_page_sections',
                    'type' => 'section',
                    'title' => __('Service Card Settings', 'risehand'),
                    'indent' => true ,
                ),
                array(
                    'id'       => 'service_icon_enable',
                    'type'     => 'switch', 
                    'default'  => true,
                    'title'    => __('Service Icon Enable / Disable', 'risehand'),
                    'desc'       => esc_html__( 'This is used to enable and disable  icon in service card', 'risehand'),
                ),
                array(
                    'id'       => 'service_excerpt_enable',
                    'type'     => 'switch', 
                    'default'  => true,
                    'title'    => __('Excerpt Enable / Disable', 'risehand'),
                    'desc'       => esc_html__( 'This is used to enable and disable excerpt in Service Card', 'risehand'),
                ), 
                array(
                    'id'       => 'service_excerpt_count',
                    'type'     => 'text', 
                    'default'  =>  __('10', 'risehand'),
                    'title'    => __('Excerpt Count', 'risehand'),
                ),
                array(
                    'id' => 'volunteer_page_sections',
                    'type' => 'section',
                    'title' => __('Volunteer Card Settings', 'risehand'),
                    'indent' => true ,
                ), 
                array(
                    'id'       => 'volunteer_excerpt_enable',
                    'type'     => 'switch', 
                    'default'  => true,
                    'title'    => __('Excerpt Enable / Disable', 'risehand'),
                    'desc'       => esc_html__( 'This is used to enable and disable excerpt in volunteer Card', 'risehand'),
                ), 
                array(
                    'id'       => 'volunteer_excerpt_count',
                    'type'     => 'text', 
                    'default'  =>  __('10', 'risehand'),
                    'title'    => __('Excerpt Count', 'risehand'),
                ), 
                array(
                    'id'       => 'volunteer_position_enable',
                    'type'     => 'switch', 
                    'default'  => true,
                    'title'    => __('Volunteer Position Enable / Disable', 'risehand'),
                    'desc'       => esc_html__( 'This is used to enable and disable Position in volunteer card', 'risehand'),
                ),
                array(
                    'id'       => 'volunteer_media_enable',
                    'type'     => 'switch', 
                    'default'  => true,
                    'title'    => __('Media Enable / Disable', 'risehand'),
                    'desc'       => esc_html__( 'This is used to enable and disable Media in volunteer card', 'risehand'),
                ), 
                array(
                    'id' => 'volunteer_singel_page_sections',
                    'type' => 'section',
                    'title' => __('Volunteer Single Settings', 'risehand'),
                    'indent' => true ,
                ),
                array(
                    'id'       => 'volunteer_share_disable',
                    'type'     => 'switch', 
                    'default'  => true,
                    'title'    => __('Volunteer Share Enable / Disable', 'risehand'), 
                ),
                array(
                    'id'       => 'volunteer_next_prev_enable',
                    'type'     => 'switch', 
                    'default'  => true,
                    'title'    => __('Volunteer Next - Prev Post Enable / Disable', 'risehand'), 
                ),
                array(
                    'id'       => 'volunteer_related_post_enable',
                    'type'     => 'switch', 
                    'default'  => true,
                    'title'    => __('Volunteer Related Post Enable / Disable', 'risehand'), 
                ),
                array(
                    'id'       => 'volunteer_related_post_title',
                    'type'     => 'text', 
                    'default'  =>  __('Related Volunteers', 'risehand'),
                    'title'    => __('Related Volunteer Title', 'risehand'),
                    'required' => [ 'volunteer_related_post_enable', '=', true ],
                ),
                array(
                    'id'       => 'volunteer_related_post_count',
                    'type'     => 'text', 
                    'default'  =>  __('4', 'risehand'),
                    'title'    => __('Volunteer Related Volunteer Count', 'risehand'),
                    'required' => [ 'volunteer_related_post_enable', '=', true ],
                ),
              
            )
        )
    );