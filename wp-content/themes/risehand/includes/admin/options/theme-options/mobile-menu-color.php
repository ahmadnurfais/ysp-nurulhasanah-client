<?php
/*
=================================
Mobile Header Settings
==================================
*/
Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Mobile Menu Color Settings', 'risehand' ),
        'id'     => 'mobilemenu_color_settings',
        'desc'   => esc_html__( '', 'risehand' ),
     //   'subsection' => true, // Enable subsection
        'icon'   => 'el el-brush',
        'fields' => array(
            array(         
                'id'       => 'mob_m_bg',
                'type'     => 'background',
                'title'    => __('Mobile Menu Background', 'risehand'), 
                'output'    => array('.mobile_menu_box .menu-box'),
            ),   
            array(
                'id'       => 'mob_m_overlay_bg',
                'type'     => 'color',
                'title'    => __('Mobile Menu Overlay Background Color', 'risehand'),  
                'validate' => 'color', 
                'output'    => array('background' => '.mobile_menu_box .menu-backdrop'),
            ),
            array(
                'id'       => 'mob_m_colorone',
                'type'     => 'color',
                'title'    => __('Close Color', 'risehand'),  
                'validate' => 'color', 
                'output'    => array('color' =>'.mobile_menu_box .close-btn i.close'),
            ),
            array(
                'id'       => 'mob_m_coloronet',
                'type'     => 'color',
                'title'    => __('Close Background Color', 'risehand'),  
                'validate' => 'color', 
                'output'    => array('background' =>'.mobile_menu_box .close-btn i.close'),
            ),
            
         
            array(
                'id'       => 'mob_m_colorseven',
                'type'     => 'color',
                'title'    => __('Menu Color', 'risehand'),  
                'validate' => 'color', 
                'output'    => array('color' => '.mobile_menu_box .navigation_menu ul.navbar_nav > li > a , .mobile_menu_box .navigation_menu ul.navbar_nav > li ul li a'),
            ), 
            array(
                'id'       => 'mob_m_colorsevean',
                'type'     => 'color',
                'title'    => __('Menu Active / Hover Color', 'risehand'),  
                'validate' => 'color', 
                'output'    => array('color' => '.mobile_menu_box .navigation_menu ul.navbar_nav > li.active > a, .mobile_menu_box .navigation_menu ul.navbar_nav > li:hover > a')
            ),
            array(
                'id'       => 'menubrcolro',
                'type'     => 'color',
                'title'    => __('Menu border Color', 'risehand'),  
                'validate' => 'color', 
                'output'    => array('border-color' => '.mobile_menu_box .navigation_menu ul.navbar_nav > li '),
            ),
            
            array(
                'id'       => 'mob_m_colorei',
                'type'     => 'color',
                'title'    => __('Dropdown Arrow Color', 'risehand'),  
                'validate' => 'color', 
                'output'    => array('color' => '.mobile_menu_box .navigation_menu ul.navbar_nav  li .dropdown-btn'),
            ),
            array(
                'id'       => 'mob_m_coloreise',
                'type'     => 'color',
                'title'    => __('Dropdown Arrow Background Color', 'risehand'),  
                'validate' => 'color', 
                'output'    => array('background' => '.mobile_menu_box .navigation_menu ul.navbar_nav li .dropdown-btn  '),
                
            ),
            array(
                'id'       => 'mob_m_coloreisebr',
                'type'     => 'color',
                'title'    => __('Dropdown Arrow Border Color', 'risehand'),  
                'validate' => 'color', 
                'output'    => array('border-color' => '.mobile_menu_box .navigation_menu ul.navbar_nav li .dropdown-btn '),
            ),
            array(
                'id'       => 'mob_menu_droactc',
                'type'     => 'color',
                'title'    => __('Dropdown Arrow Active Color', 'risehand'),  
                'validate' => 'color', 
                'output'    => array('color' => '.mobile_menu_box .navigation_menu ul.navbar_nav li.current-menu-item > a '),
            ),
            array(
                'id'       => 'mob_menu_droact',
                'type'     => 'color',
                'title'    => __('Dropdown Arrow Active Background Color', 'risehand'),  
                'validate' => 'color', 
                'output'    => array('background' => '.mobile_menu_box .navigation_menu ul.navbar_nav > li.current-menu-item > .dropdown-btn , .mobile_menu_box .navigation_menu ul.navbar_nav > li:hover > .dropdown-btn , .mobile_menu_box .navigation_menu ul.navbar_nav > li  > ul  > li:hover > .dropdown-btn ,
                .mobile_menu_box .navigation_menu ul.navbar_nav > li  > ul  > li.current-menu-item > .dropdown-btn  , .mobile_menu_box .navigation_menu ul.navbar_nav > li  > ul  > li  > ul  > li:hover > .dropdown-btn ,
                .mobile_menu_box .navigation_menu ul.navbar_nav > li  > ul  > li  > ul  > li.current-menu-item > .dropdown-btn' ,
                'border-color' => '.mobile_menu_box .navigation_menu ul.navbar_nav > li.current-menu-item > .dropdown-btn  , .mobile_menu_box .navigation_menu ul.navbar_nav > li:hover > .dropdown-btn , .mobile_menu_box .navigation_menu ul.navbar_nav > li  > ul  > li:hover > .dropdown-btn ,
                .mobile_menu_box .navigation_menu ul.navbar_nav > li  > ul  > li.current-menu-item > .dropdown-btn  , .mobile_menu_box .navigation_menu ul.navbar_nav > li  > ul  > li  > ul  > li:hover > .dropdown-btn ,
                .mobile_menu_box .navigation_menu ul.navbar_nav > li  > ul  > li  > ul  > li.current-menu-item > .dropdown-btn'),
            ),
            
            

        )
    )
);


 