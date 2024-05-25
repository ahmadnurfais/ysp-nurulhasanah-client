<?php
/*
====================
General Settings
====================
*/
Redux::setSection( $opt_name, array(
            'title'  => esc_html__( 'Performance Settings', 'risehand' ),
            'id'     => 'performance_settings',
            'desc'   => esc_html__( '', 'risehand' ),
            'icon'   => 'el el-wrench',
            'fields' => array(
                // elemntor
                array(
                    'id' => 'site_per',
                    'type' => 'section',
                    'title' => __('For Elementor (After complete all your work enable these option and again going to work disable this options)', 'risehand'),
                    'indent' => true ,
                ), 
                array(
                    'id'       => 'disable_font_awesome',
                    'type'     => 'switch',
                    'title'    => esc_html__( 'Remove fontawesome', 'risehand' ),
                    'description'    => esc_html__( 'Enabling this option will Remove Elementor fontawesome from loading.', 'risehand' ), 
                    'default'  => false,
                ), 
                array(
                    'id'       => 'disable_elementor_pro',
                    'type'     => 'switch',
                    'title'    => esc_html__( 'Remove Elementor pro script', 'risehand' ),
                    'description'    => esc_html__( 'By enabling this option, some features of Elementor may stop working.', 'risehand' ), 
                    'default'  => false,
                ),  
                array(
                    'id'       => 'disable_elementor_editor_script',
                    'type'     => 'switch',
                    'title'    => esc_html__( 'Remove Elementor editor script', 'risehand' ),
                    'description'    => esc_html__( 'By enabling this option, some features of Elementor may stop working on the backend.', 'risehand' ), 
                    'default'  => false,
                ), 
                array(
                    'id'       => 'disable_google_fonts',
                    'type'     => 'switch',
                    'title'    => esc_html__( 'Remove Google fonts', 'risehand' ),
                    'description'    => esc_html__( 'Enabling this option will Remove  Elementor Google fonts from loading.', 'risehand' ),
                    'default'  => false,
                ),  
                array(
                    'id'       => 'disable_icons',
                    'type'     => 'switch',
                    'title'    => esc_html__( 'Remove Icons', 'risehand' ),
                    'description'    => esc_html__( 'Enabling this option will Remove  Elementor icons from loading.', 'risehand' ), 
                    'default'  => false,
                ),  
                array(
                    'id'       => 'disable_animation',
                    'type'     => 'switch',
                    'title'    => esc_html__( 'Remove Animations', 'risehand' ),
                    'description'    => esc_html__( 'Enabling this option will Remove Elementor animations on your website.', 'risehand' ), 
                    'default'  => false,
                ),  
                array(
                    'id'       => 'disable_frontend_scripts',
                    'type'     => 'switch',
                    'title'    => esc_html__( 'Remove frontend script', 'risehand' ),
                    'description'    => esc_html__( 'Enabling this option will Remove Elementor fronend scripts (dialog, swiper, share link) from loading.', 'risehand' ), 
                    'default'  => false,
                ),   
                
                array(
                    'id' => 'site_pertwo',
                    'type' => 'section',
                    'title' => __('Other Settings - (After complete all your work enable these option and again going to work disable this options)', 'risehand'),
                    'indent' => true ,
                ), 
                array(
                    'id'       => 'disable_wp_block_library',
                    'type'     => 'switch',
                    'title'    => esc_html__( 'Remove Wp block library', 'risehand' ),
                    'description'    => esc_html__( 'This option will disable WP Block Library (Does not include single posts).', 'risehand' ),
                    'default'  => false,
                ),  
                array(
                    'id'       => 'disable_migrate_jquery',
                    'type'     => 'switch',
                    'title'    => esc_html__('Remove jQuery migrate', 'risehand' ),
                    'description'    => esc_html__( 'This option will Remove jQuery Migrate.', 'risehand' ),
                    'default'  => false,
                ),    
                array(
                    'id'       => 'disable_query_strings',
                    'type'     => 'switch',
                    'title'    => esc_html__('Remove query strings', 'risehand' ),
                    'description'    => esc_html__( 'This option will Remove styles and scripts query strings.', 'risehand' ),
                    'default'  => false,
                ),  
                array(
                    'id'       => 'disable_emoji',
                    'type'     => 'switch',
                    'title'    => esc_html__('Remove emoji', 'risehand' ),
                    'description'    => esc_html__( 'Enabling this option will Remove  WP emojis from loading.', 'risehand' ),
                    'default'  => false,
                ),  
                array(
                    'id'       => 'minify_html',
                    'type'     => 'switch',
                    'title'    => esc_html__( 'Minify Html Enable', 'risehand' ),
                    'description' =>  esc_html__( 'This option will minify HTML of your website.', 'risehand' ),
                    'default'  => false,
                ),
                // elemntor end
            ),
        ));