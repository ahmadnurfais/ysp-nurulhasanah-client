<?php
/*
 *=================================
 * Theme Typogrophy
 * Contains Redux Option Output
 * @package risehand WordPress Theme
 *==================================
*/
/*--------------------------Enqueues front-end CSS for theme customization-----------------*/
add_action('wp_enqueue_scripts', 'risehand_typogrophy_css' );
function risehand_typogrophy_css(){ 
    $css = '';
    /*---typography-for-h1-desktop-*/ 
    $font_family_enable = get_risehand_option('change_typo_type');
    $font_familt_common = get_risehand_option('font_familt_common');
    $font_familt_common_two = get_risehand_option('font_familt_common_two');
    $font_familt_common_three = get_risehand_option('font_familt_common_three');
    // Check if font family is enabled
    if ($font_family_enable == 'typeone') {
        // Retrieve font families
        $font_family_main =  $font_familt_common['font-family'] ?  $font_familt_common['font-family']  : '';
        $font_family_text =  $font_familt_common_two['font-family'] ?  $font_familt_common_two['font-family']  : '';  
        $font_family_extra = $font_familt_common_three['font-family'] ?  $font_familt_common_three['font-family']  : '';  
        // Generate CSS variables if font families are not empty
        if (!empty($font_family_main)) {
            $css .= ':root {--font-family-main:' . $font_family_main . '}';
        }
        if (!empty($font_family_text)) {
            $css .= ':root {--font-family-text:' . $font_family_text . '}';
        }
        if (!empty($font_family_extra)) {
            $css .= ':root {--font-family-extra:' . $font_family_extra . '}';
        }
    } 
    
    /*---typography-for-h1-mobile-*/
    $change_typo_type = get_risehand_option('change_typo_type');
    $h1_typography_mobile = get_risehand_option('h1_typography_mobile'); 
    if($change_typo_type == "typetwo"){
        $mob_h1_font_sizecss = '';
        $mob_h1_font_size = $h1_typography_mobile['font-size'];
        $mob_h1_font_sizecss = $mob_h1_font_size ? 'font-size:' . $mob_h1_font_size . '!important; ' : '';
        if(!empty($mob_h1_font_sizecss)){
            $css .= '@media(max-width:768px){ body h1 , h1 , h1 a , .slider_box_V1 .title, .slider_box_V2 .title, .slider_box_V3 .title, .slider_box_V4 .title ' . ' {' . $mob_h1_font_sizecss . '}}';
        }
        $mob_h1_font_linehecss = '';
        $mob_h1_font_lheight= $h1_typography_mobile['line-height'];
        $mob_h1_font_linehecss = $mob_h1_font_lheight ? 'line-height:' . $mob_h1_font_lheight . '!important; ' : '';
        if(!empty($mob_h1_font_linehecss)){
            $css .= '@media(max-width:768px){ body h1 , h1 , h1 a , .slider_box_V1 .title, .slider_box_V2 .title, .slider_box_V3 .title, .slider_box_V4 .title ' . ' {' . $mob_h1_font_linehecss . '}}';
        }
    }
    /*---typography-for-h1-mobile-*/ 
    /*---typography-for-h2-mobile-*/ 
    $h2_typography_mobile = get_risehand_option('h2_typography_mobile'); 
    if($change_typo_type == "typetwo"){
        $mob_h2_font_sizecss = '';
        $mob_h2_font_size = $h2_typography_mobile['font-size'];
        $mob_h2_font_sizecss = $mob_h2_font_size ? 'font-size:' . $mob_h2_font_size . '!important; ' : '';
        if(!empty($mob_h2_font_sizecss)){
            $css .= '@media(max-width:768px){ body h2 , h2 , h2 a  ' . ' {' . $mob_h2_font_sizecss . '}}';
        } 
        $mob_h2_font_linehecss = '';
        $mob_h2_font_lheight= $h2_typography_mobile['line-height'];
        $mob_h2_font_lheight = $mob_h2_font_lheight ? 'line-height:' . $mob_h2_font_lheight . '!important; ' : '';
        if(!empty($mob_h2_font_linehecss)){
            $css .= '@media(max-width:768px){ body h2 , h2 , h2 a  ' . ' {' . $mob_h2_font_linehecss . '}}';
        }
    }
    /*---typography-for-h2-mobile-*/
   
    /*---typography-for-h3-mobile-*/ 
    $h3_typography_mobile = get_risehand_option('h3_typography_mobile'); 
    if($change_typo_type == "typetwo"){
        $mob_h3_font_sizecss = '';
        $mob_h3_font_size = $h3_typography_mobile['font-size'];
        $mob_h3_font_sizecss = $mob_h3_font_size ? 'font-size:' . $mob_h3_font_size . '!important; ' : '';
        if(!empty($mob_h3_font_sizecss)){
            $css .= '@media(max-width:768px){body h3 , h3 , h3 a  ' . ' {' . $mob_h3_font_size . '}}';
        }
        $mob_h3_font_linehecss = '';
        $mob_h3_font_lheight= $h3_typography_mobile['line-height'];
        $mob_h3_font_linehecss = $mob_h3_font_lheight ? 'line-height:' . $mob_h3_font_lheight . '!important; ' : '';
        if(!empty($mob_h3_font_linehecss)){
            $css .= '@media(max-width:768px){body h3 , h3 , h3 a  ' . ' {' . $mob_h3_font_linehecss . '}}';
        }
    }
    /*---typography-for-h3-mobile-*/
   
    /*---typography-for-h4-mobile-*/ 
    $h4_typography_mobile = get_risehand_option('h4_typography_mobile'); 
    if($change_typo_type == "typetwo"){
        $mob_h4_font_sizecss = '';
        $mob_h4_font_size = $h4_typography_mobile['font-size'];
        $mob_h4_font_sizecss = $mob_h4_font_size ? 'font-size:' . $mob_h4_font_size . '!important; ' : '';
        if(!empty($mob_h3_font_sizecss)){
            $css .= '@media(max-width:768px){body h4 , h4 , h4 a  ' . ' {' . $mob_h3_font_sizecss . '}}';
        }
        $mob_h4_font_linehecss = '';
        $mob_h4_font_lheight= $h4_typography_mobile['line-height'];
        $mob_h4_font_linehecss = $mob_h4_font_lheight ? 'line-height:' . $mob_h4_font_lheight . '!important; ' : '';
        if(!empty($mob_h4_font_linehecss)){
            $css .= '@media(max-width:768px){body h4 , h4 , h4 a  ' . ' {' . $mob_h4_font_linehecss . '}}';
        }
    }
    /*---typography-for-h4-mobile-*/
   
    /*---typography-for-h5-mobile-*/ 
    $h5_typography_mobile = get_risehand_option('h5_typography_mobile'); 
    if($change_typo_type == "typetwo"){
        $mob_h5_font_sizecss = '';
        $mob_h5_font_size = $h5_typography_mobile['font-size'];
        $mob_h5_font_sizecss = $mob_h5_font_size ? 'font-size:' . $mob_h5_font_size . '!important; ' : '';
        if(!empty($mob_h3_font_sizecss)){
            $css .= '@media(max-width:768px){body h5 , h5 , h5 a   ' . ' {' . $mob_h3_font_sizecss . '}}';
        }
        $mob_h5_font_linehecss = '';
        $mob_h5_font_lheight= $h5_typography_mobile['line-height'];
        $mob_h5_font_linehecss = $mob_h5_font_lheight ? 'line-height:' . $mob_h5_font_lheight . '!important; ' : '';
        if(!empty($mob_h5_font_linehecss)){
            $css .= '@media(max-width:768px){body h5 , h5 , h5 a  ' . ' {' . $mob_h5_font_linehecss . '}}';
        }
    }
    /*---typography-for-h5-mobile-*/
    
    /*---typography-for-h6-mobile-*/ 
    $h6_typography_mobile = get_risehand_option('h6_typography_mobile'); 
    if($change_typo_type == "typetwo"){
        $mob_h6_font_sizecss = '';
        $mob_h6_font_size = $h6_typography_mobile['font-size'];
        $mob_h6_font_sizecss = $mob_h6_font_size ? 'font-size:' . $mob_h6_font_size . '!important; ' : '';
        if(!empty($mob_h6_font_sizecss)){
            $css .= '@media(max-width:768px){body h6 , h6 , h6 a' . ' {' . $mob_h6_font_sizecss . '}}';
        }
        $mob_h6_font_linehecss = '';
        $mob_h6_font_lheight= $h6_typography_mobile['line-height'];
        $mob_h6_font_linehecss = $mob_h6_font_lheight ? 'line-height:' . $mob_h6_font_lheight . '!important; ' : '';
        if(!empty($mob_h6_font_linehecss)){
            $css .= '@media(max-width:768px){body h6 , h6 , h6 a   ' . ' {' . $mob_h6_font_linehecss . '}}';
        }
    }
    /*---typography-for-h6-mobile-*/
 
    wp_add_inline_style('risehand-style', $css);
}



