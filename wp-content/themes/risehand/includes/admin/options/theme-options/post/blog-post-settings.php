<?php
/*
====================
Blog Settings
====================
*/
Redux::setSection( $opt_name, array(
            'title'  => esc_html__( 'Blog  Settings', 'risehand' ),
            'id'     => 'post_settings_all',
            'desc'   => esc_html__( '', 'risehand' ),
           // 'subsection' => true,  Enable subsection
            'icon'   => 'el el-edit',
            'fields' => array(
                array(
                    'id' => 'blog_page_sections',
                    'type' => 'section',
                    'title' => __('Blog Card Settings', 'risehand'),
                    'indent' => true ,
                ),
                array(
                    'id'       => 'blog_cat_enable',
                    'type'     => 'switch', 
                    'default'  => true,
                    'title'    => __('Category Enable / Disable', 'risehand'),
                    'desc'       => esc_html__( 'This is used to enable and disable category in blog single', 'risehand'),
                ),
                array(
                    'id'       => 'blog_excerpt_enable',
                    'type'     => 'switch', 
                    'default'  => true,
                    'title'    => __('Excerpt Enable / Disable', 'risehand'),
                    'desc'       => esc_html__( 'This is used to enable and disable excerpt in Blog page', 'risehand'),
                ), 
                array(
                    'id'       => 'blog_excerpt_count',
                    'type'     => 'text', 
                    'default'  =>  __('10', 'risehand'),
                    'title'    => __('Excerpt Count', 'risehand'),
                ),
                array(
                    'id'       => 'blog_date_enable',
                    'type'     => 'switch', 
                    'default'  => true,
                    'title'    => __('Date Enable / Disable', 'risehand'),
                    'desc'       => esc_html__( 'This is used to enable and disable date in Blog page', 'risehand'),
                ),
                array(
                    'id'       => 'blog_comment_enable',
                    'type'     => 'switch', 
                    'default'  => true,
                    'title'    => __('Comment Enable / Disable', 'risehand'),
                    'desc'       => esc_html__( 'This is used to enable and disable comment in Blog Page', 'risehand'),
                ),
                array(
                    'id' => 'blog_singe_section',
                    'type' => 'section',
                    'title' => __('Blog Single Settings', 'risehand'),
                    'indent' => true ,
                ),
               
                array(
                    'id'       => 'feature_image_enable',
                    'type'     => 'switch', 
                    'default'  => true,
                    'title'    => __('Feature Image Enable / Disable', 'risehand'),
                    'desc'       => esc_html__( 'This is used to enable and disable Featured Image in blog single', 'risehand'),
                ),
                array(
                    'id'       => 'bcategory_enable',
                    'type'     => 'switch', 
                    'default'  => true,
                    'title'    => __('Category Enable / Disable', 'risehand'),
                    'desc'       => esc_html__( 'This is used to enable and disable Category in blog single', 'risehand'),
                ),
                array(
                    'id'       => 'blogmeta_enable',
                    'type'     => 'switch', 
                    'default'  => true,
                    'title'    => __('Date and Comment Enable / Disable', 'risehand'),
                    'desc'       => esc_html__( 'This is used to enable and disable data and comment meta in blog single', 'risehand'),
                ),
                array(
                    'id'       => 'tag_disable', 
                    'type'     => 'switch', 
                    'default'  => true,
                    'title'    => __('Tag Enable / Disable', 'risehand'),
                    'desc'       => esc_html__('This is used to enable and disable Tags in blog single', 'risehand'),
                ), 
                array(
                    'id'       => 'share_disable',
                    'type'     => 'switch', 
                    'default'  => false,
                    'title'    => __('Share Enable / Disable ', 'risehand'),
                    'desc'       => esc_html__( 'This is used to enable and disable Share in blog single', 'risehand'),
                ), 
                array(
                    'id'       => 'authour_detail_disable',
                    'type'     => 'switch', 
                    'default'  => false,
                    'title'    => __('Authour Details Enable / Disable ', 'risehand'),
                    'desc'       => esc_html__( 'This is used to enable and disable Authout details in blog single', 'risehand'),
                ), 
                array(
                    'id'       => 'next_prev_enable',
                    'type'     => 'switch', 
                    'default'  => false,
                    'title'    => __('Post Navigation Enable / Disable ', 'risehand'),
                    'desc'       => esc_html__( 'This is used to enable and disable Post Navigation in blog single', 'risehand'),
                ),
             
                array(
                    'id'       => 'relatedpost_enable',
                    'type'     => 'switch', 
                    'default'  => false,
                    'title'    => __('Related Post Enable / Disable ', 'risehand'),
                    'desc'       => esc_html__( 'This is used to enable and disable related post in blog single', 'risehand'),
                ),
                array(
                    'id'       => 'related_post_title',
                    'type'     => 'text', 
                    'default'  =>  __('Related Posts', 'risehand'),
                    'title'    => __('Related Post Title', 'risehand'),
                    'required' => [ 'relatedpost_enable', '=', true ],
                ),
                array(
                    'id'       => 'related_post_count',
                    'type'     => 'text', 
                    'default'  =>  __('4', 'risehand'),
                    'title'    => __('Related Post Count', 'risehand'),
                    'required' => [ 'relatedpost_enable', '=', true ],
                ),
            )
        )
    );