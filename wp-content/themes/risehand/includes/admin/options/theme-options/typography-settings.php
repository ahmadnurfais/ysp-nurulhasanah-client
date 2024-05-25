<?php
/*
====================
Typography Settings
====================
*/
Redux::setSection($opt_name, array(

    'title' => esc_html__('Typography Settings', 'risehand') ,
    'id' => 'typography_setting',
    'desc' => '',
    'icon' => 'el el-font',
    'fields' => array(

        array(
            'id'    => 'change_typo_type',
            'type'  => 'select',
            'title' => esc_html__( 'Typography Type' , 'risehand' ),
            'options'  => array(
                'typeone' => esc_html__( 'Type 1', 'risehand' ),
                'typetwo' => esc_html__( 'Type 2', 'risehand' ), 
            ),
            'default'  => 'typeone',
        ),
        array(
            'id' => 'font_familt_common',
            'type' => 'typography',
            'title' => esc_html__('Font Family Primary', 'risehand'),
            'google' => true,
            'color' => false,
            'font-backup' => true,
            'font-family' => true,
            'subsets' => true,
            'font-size' => false,
            'font-weight' => false,
            'font-style' => false,
            'line-height' => false,
            'text-align' => false,
            'units' => 'px',
            'default' => array(
             'font-family' => '', 
             ), 
             'required' => array('change_typo_type', '=', 'typeone'),
        ),
    
        array(
            'id' => 'font_familt_common_two',
            'type' => 'typography',
            'title' => esc_html__('Font Family Secondary', 'risehand'),
            'google' => true,
            'color' => false,
            'font-backup' => true,
            'font-family' => true,
            'subsets' => true,
            'font-size' => false,
            'font-weight' => false,
            'font-style' => false,
            'line-height' => false,
            'text-align' => false,
            'units' => 'px',
            'default' => array(
             'font-family' => '', 
             ),
             'required' => array('change_typo_type', '=', 'typeone'),
        ),

        array(
            'id' => 'font_familt_common_three',
            'type' => 'typography',
            'title' => esc_html__('Font Family Special', 'risehand'),
            'google' => true,
            'color' => false,
            'font-backup' => true,
            'font-family' => true,
            'subsets' => true,
            'font-size' => false,
            'font-weight' => false,
            'font-style' => false,
            'line-height' => false,
            'text-align' => false,
            'units' => 'px',
            'default' => array(
             'font-family' => '', 
             ),
            'required' => array('change_typo_type', '=', 'typeone'),
        ),
         
        array(
            'id' => 'h1_typography',
            'type' => 'typography',
            'title' => esc_html__('H1 Font Typography (Desktop)', 'risehand') ,
            'font-family' => true,
            'text-align' => true,
            'color' => false,
            'google' => true,
            'font-weight' => true,
            'font-style' => true,
            'subsets' => true,
            'font-backup' => true,
            'units' => 'px',
            'subtitle' => esc_html__('Apply options to customize the h1 heading font for the theme (Desktop)', 'risehand') ,
            'default' => array(
                'font-style' => '',
                'google' => true,
                'font-size' => ' ',
                'line-height' => ''
            ) ,
            'output' => array(
                'html body h1 , h1 , h1 a , .slider_box_V1 .title, .slider_box_V2 .title, .slider_box_V3 .title, .slider_box_V4 .title'
            ) ,
            'required' => array('change_typo_type', '=', 'typetwo'),
        ) , 
        array(
            'id' => 'h1_typography_mobile',
            'type' => 'typography',
            'title' => esc_html__('H1 Font Typography (Mobile)', 'risehand') ,
            'font-family' => false,
            'text-align' => false,
            'color' => false,
            'google' => false,
            'font-weight' => false,
            'font-style' => false,
            'subsets' => true,
            'font-backup' => false,
            'units' => 'px',
            'subtitle' => esc_html__('Apply options to customize the h1 heading font for the theme (Mobile)', 'risehand') ,
            'default' => array(
                'font-style' => '',
                'font-size' => ' ',
                'line-height' => ''
            ) ,
            'required' => array('change_typo_type', '=', 'typetwo'),
        ) ,

        // h2 custom fonts
      

        array(
            'id' => 'h2_typography',
            'type' => 'typography',
            'title' => esc_html__('H2 Font Typography (Desktop)', 'risehand') ,
            'font-family' => true,
            'text-align' => true,
            'color' => false,
            'google' => true,
            'font-weight' => true,
            'font-style' => true,
            'subsets' => true,
            'font-backup' => true,
            'units' => 'px',
            'subtitle' => esc_html__('Apply options to customize the h2 heading font for the theme (Desktop)', 'risehand') ,
            'default' => array(
                'color' => '',
                'font-style' => '',
                'google' => true,
                'font-size' => '',
                'line-height' => ''
            ) ,
            'required' => array('change_typo_type', '=', 'typetwo'),
            'output' => array(
                'body h2 , h2 , h2 a'
            ) ,
        ) ,
 

        array(
            'id' => 'h2_typography_mobile',
            'type' => 'typography',
            'title' => esc_html__('H2 Font Typography (Mobile)', 'risehand') ,
            'font-family' => false,
            'text-align' => false,
            'color' => false,
            'google' => false,
            'font-weight' => false,
            'font-style' => false,
            'subsets' => true,
            'font-backup' => false,
            'units' => 'px',
            'subtitle' => esc_html__('Apply options to customize the h2 heading font for the theme (Mobile)', 'risehand') ,
            'required' => array('change_typo_type', '=', 'typetwo'),
        ) ,
        // h3 custom fonts
      
        array(
            'id' => 'h3_typography',
            'type' => 'typography',
            'title' => esc_html__('H3 Font Typography (Desktop)', 'risehand') ,
            'font-family' => true,
            'text-align' => true,
            'color' => false,
            'google' => true,
            'font-weight' => true,
            'font-style' => true,
            'subsets' => true,
            'font-backup' => true,
            'units' => 'px',
            'subtitle' => esc_html__('Apply options to customize the h3 heading  for the theme (Desktop)', 'risehand') ,
            'default' => array(
                'font-style' => '',
                'google' => true,
                'font-size' => '',
                'line-height' => ''
            ) ,
            'required' => array('change_typo_type', '=', 'typetwo'),
            'output' => array(
                'body h3 , h3 , h3 a'
            ) ,
        ) ,
 
        array(
            'id' => 'h3_typography_mobile',
            'type' => 'typography',
            'title' => esc_html__('H3 Font Typography (Mobile)', 'risehand') ,
            'font-family' => false,
            'text-align' => false,
            'color' => false,
            'google' => false,
            'font-weight' => false,
            'font-style' => false,
            'subsets' => true,
            'font-backup' => false, 
            'units' => 'px',
            'subtitle' => esc_html__('Apply options to customize the h3 heading font for the theme (Mobile)', 'risehand') ,
            'default' => array(
                'font-style' => '',
                'font-size' => ' ',
                'line-height' => ''
            ) ,
            'required' => array('change_typo_type', '=', 'typetwo'),
        ) ,

        // h4 custom fonts
      
        array(
            'id' => 'h4_typography',
            'type' => 'typography',
            'title' => esc_html__('H4 Font Typography', 'risehand') ,
            'font-family' => true,
            'text-align' => true,
            'color' => false,
            'google' => true,
            'font-weight' => true,
            'font-style' => true,
            'subsets' => true,
            'font-backup' => true,
            'output' => array(
                'body h4 , h4 , h4 a'
            ) ,
            'units' => 'px',
            'subtitle' => esc_html__('Apply options to customize the h4 heading font for the theme', 'risehand') ,
            'default' => array(
                'font-style' => '',
                'google' => true,
                'font-size' => '',
                'line-height' => ''
            ) ,
            'required' => array('change_typo_type', '=', 'typetwo'),
        ) , 
        array(
            'id' => 'h4_typography_mobile',
            'type' => 'typography',
            'title' => esc_html__('H4 Font Typography (Mobile)', 'risehand') ,
            'font-family' => false,
            'text-align' => false,
            'color' => false,
            'google' => false,
            'font-weight' => false,
            'font-style' => false,
            'subsets' => true,
            'font-backup' => false, 
            'units' => 'px',
            'subtitle' => esc_html__('Apply options to customize the h4 heading font for the theme (Mobile)', 'risehand') ,
            'default' => array(
                'font-style' => '',
                'font-size' => ' ',
                'line-height' => ''
            ) ,
            'required' => array('change_typo_type', '=', 'typetwo'),
        ) ,
        // h5 custom fonts
       
        array(
            'id' => 'h5_typography',
            'type' => 'typography',
            'title' => esc_html__('H5 Font Typography', 'risehand') ,
            'font-family' => true,
            'text-align' => true,
            'color' => false,
            'google' => true,
            'font-weight' => true,
            'font-style' => true,
            'subsets' => true,
            'font-backup' => true,
            'output' => array(
                'body h5 , h5 , h5 a'
            ) ,
            'units' => 'px',
            'subtitle' => esc_html__('Apply options to customize the h5 heading font for the theme', 'risehand') ,
            'default' => array(
                'font-style' => '',
                'google' => true,
                'font-size' => '',
                'line-height' => ''
            ) ,
            'required' => array('change_typo_type', '=', 'typetwo'),
        ) ,
      
        array(
            'id' => 'h5_typography_mobile',
            'type' => 'typography',
            'title' => esc_html__('H5 Font Typography (Mobile)', 'risehand') ,
            'font-family' => false,
            'text-align' => false,
            'color' => false,
            'google' => false,
            'font-weight' => false,
            'font-style' => false,
            'subsets' => true,
            'font-backup' => false, 
            'units' => 'px',
            'subtitle' => esc_html__('Apply options to customize the h5 heading font for the theme (Mobile)', 'risehand') ,
            'default' => array(
                'font-style' => '',
                'font-size' => ' ',
                'line-height' => ''
            ) ,
            'required' => array('change_typo_type', '=', 'typetwo'),
        ) ,

        // h6 csutom fonts
   
        array(
            'id' => 'h6_typography',
            'type' => 'typography',
            'title' => esc_html__('H6 Font Typography', 'risehand') ,
            'font-family' => true,
            'text-align' => true,
            'color' => false,
            'google' => true,
            'font-weight' => true,
            'font-style' => true,
            'subsets' => true,
            'font-backup' => true,
            'output' => array(
                'body h6 , h6 , h6 a'
            ) ,
            'units' => 'px',
            'subtitle' => esc_html__('Apply options to customize the h6 heading font for the theme', 'risehand') ,
            'default' => array(
                'font-style' => '',
                'google' => true,
                'font-size' => '',
                'line-height' => ''
            ) ,
            'required' => array('change_typo_type', '=', 'typetwo'),
        ) ,
 
        array(
            'id' => 'h6_typography_mobile',
            'type' => 'typography',
            'title' => esc_html__('H6 Font Typography (Mobile)', 'risehand') ,
            'font-family' => false,
            'text-align' => false,
            'color' => false,
            'google' => false,
            'font-weight' => false,
            'font-style' => false,
            'subsets' => true,
            'font-backup' => false, 
            'units' => 'px',
            'subtitle' => esc_html__('Apply options to customize the h6 heading font for the theme (Mobile)', 'risehand') ,
            'default' => array(
                'font-style' => '',
                'font-size' => ' ',
                'line-height' => ''
            ) ,
            'required' => array('change_typo_type', '=', 'typetwo'),
        ) ,
      
        array(
            'id' => 'body_typography',
            'type' => 'typography',
            'title' => esc_html__('Body Font Typography', 'risehand') ,
            'font-family' => true,
            'text-align' => true,
            'color' => false,
            'google' => true,
            'font-weight' => true,
            'font-style' => true,
            'subsets' => true,
            'font-backup' => true,
            'units' => 'px',
            'subtitle' => esc_html__('Apply options to customize the body,paragraph font for the theme', 'risehand') ,
            'output' => array(
                'body , body p , body ul li , body ul li a ,  body ol li , body ol li a ,
                body table tr th , body table tr td , body code'
            ) , 
            'required' => array('change_typo_type', '=', 'typetwo'),
        ) ,

    ) ,
)); 