<?php
/*
** ============================== 
**   risehand  Inline Css
** ==============================
*/
add_action('wp_enqueue_scripts', 'risehand_get_css' );
function risehand_get_css() { 
    $css = '';
    /*------=======pre_loader_background======------*/
    $preloader_enables = get_risehand_option('job_listing_style');
    $pre_loader_color_one = get_risehand_option('pre_loader_color_one');
    $pre_loader_color_two = get_risehand_option('pre_loader_color_two');
    $pre_loader_color_three = get_risehand_option('pre_loader_color_three');
    $pre_loader_color_four = get_risehand_option('pre_loader_color_four');
    $pre_loader_color_text = get_risehand_option('pre_loader_color_text');
    $pre_loader_color_text_one = get_risehand_option('pre_loader_color_text_one');
        if($preloader_enables  == true):
            if(!empty($pre_loader_color_one)):
                $pre_loader_color_one .= $pre_loader_color_one;
            endif; 
            if(!empty($pre_loader_color_two)):
                $pre_loader_color_two .= $pre_loader_color_two;
            endif; 
            if(!empty($pre_loader_color_three)):
                $pre_loader_color_three .= $pre_loader_color_three;
            endif; 
            if(!empty($pre_loader_color_four)):
                $pre_loader_color_four .= $pre_loader_color_four;
            endif; 
            if(!empty($pre_loader_color_text)):
                $pre_loader_color_text .= $pre_loader_color_text;
            endif;  
        endif; 
        // color one 
        if(!empty($pre_loader_color_one)):
            $css .= ':root   {--preloader-background-color:' . $pre_loader_color_one . '}';
        endif;
        // color two 
        if(!empty($pre_loader_color_three)):
            $css .= ':root   {--preloader-spinner-color:' . $pre_loader_color_three . '}';
        endif;
        // color three 
        if(!empty($pre_loader_color_two)):
            $css .= ':root   {--preloader-spinner-color-2:' . $pre_loader_color_two . '}';
        endif;
        // color four 
        if(!empty($pre_loader_color_two)):
            $css .= ':root   {--preloader-spinner-color-3:' . $pre_loader_color_two . '}';
        endif;
        // color text  
        if(!empty($pre_loader_color_text)):
            $css .= ':root   {--preloader-text-color:' . $pre_loader_color_text . '}';
        endif; 
        /*------=======theme color======------*/

            // theme color one
            $meta_theme_color_one = get_post_meta(get_the_ID() , 'meta_theme_color_one', true); 
            $theme_color_one = get_risehand_option('theme_color_one'); 
            if(!empty($meta_theme_color_one)):
                $theme_color_one = $meta_theme_color_one;
            endif;
            if(!empty($theme_color_one)):
            list($r, $g, $b) = sscanf($theme_color_one, "#%02x%02x%02x");
            $rgba_color = "$r, $g, $b"; // Adjust the opacity value as needed
            $css .= ':root   {
                --color-set-one-1:' . $theme_color_one . '; 
                --color-set-one-1-rgba:' . $rgba_color . '; 
            }';
            endif;
            // theme color one end
            // theme color Two
            $meta_theme_color_two = get_post_meta(get_the_ID() , 'meta_theme_color_two', true); 
            $theme_color_two = get_risehand_option('theme_color_two'); 
            if(!empty($meta_theme_color_two)):
                $theme_color_two = $meta_theme_color_two;
            endif;
            if(!empty($theme_color_two)):
                list($r, $g, $b) = sscanf($theme_color_two, "#%02x%02x%02x");
                $rgba_color_two = "$r, $g, $b"; // Adjust the opacity value as needed
                $css .= ':root   {
                    --color-set-one-2:' . $theme_color_two . ';  
                    --color-set-one-2-rgba:' . $rgba_color_two . ';
                }';
            endif;
            // theme color Two end
            // theme color Three 
            $theme_color_three = get_risehand_option('theme_color_three'); 
            $meta_theme_color_three = get_post_meta(get_the_ID() , 'meta_theme_color_three', true); 
            if(!empty($meta_theme_color_three)):
                $theme_color_three = $meta_theme_color_three;
            endif;
            list($r, $g, $b) = sscanf($theme_color_three, "#%02x%02x%02x");
            $rgba_color_three = "$r, $g, $b"; // Adjust the opacity value as needed
            if(!empty($theme_color_three)):
                $css .= ':root   {
                    --color-set-one-3:' . $theme_color_three . ';
                     --color-set-one-3rgba:' . $rgba_color_three . ';
                    }';
            endif;
            // theme color Three end  
            // theme background color one
            $theme_bgcolor_one =  get_risehand_option('theme_bgcolor_one');
            $meta_theme_bgcolor_one = get_post_meta(get_the_ID() , 'meta_theme_bgcolor_one', true); 
            if(!empty($meta_theme_bgcolor_one)):
                $theme_bgcolor_one = $meta_theme_bgcolor_one;
            endif;
            if(!empty($theme_bgcolor_one)):
                $css .= ':root   {--color-set-one-bg-1:' . $theme_bgcolor_one . '}';
            endif;
            // theme background color one end
            // theme background color two
            $theme_bgcolor_two = get_risehand_option('theme_bgcolor_two');
            $meta_theme_bgcolor_two = get_post_meta(get_the_ID() , 'meta_theme_bgcolor_two', true); 
            if(!empty($meta_theme_bgcolor_two)):
                $theme_bgcolor_two = $meta_theme_bgcolor_two;
            endif;
            if(!empty($theme_bgcolor_two)):
            $css .= ':root   {--color-set-one-bg-l-1 :' . $theme_bgcolor_two . ' , --color-set-one-bg-l-2 :' . $theme_bgcolor_two . ' --color-set-one-bg-l-3 :' . $theme_bgcolor_two . '}';
            endif;
            // theme background color two end  

            // theme border color one 
            $border_color = get_risehand_option('border_color');
            $meta_border_color = get_post_meta(get_the_ID() , 'meta_border_color', true); 
            if(!empty($meta_border_color)):
                $border_color = $meta_border_color;
            endif;
            if(!empty($border_color)):
                list($r, $g, $b) = sscanf($border_color, "#%02x%02x%02x");
                $border_color_rgba = "$r, $g, $b"; // Adjust the opacity value as needed
                $css .= ':root   {--color-set-one-bor-1:' . $border_color . ';
                    --color-set-one-bor-white-rgb:' . $border_color_rgba . '}'  ;
            endif;
            // theme border color one end
            // theme border color two
            $border_color_two = get_risehand_option('border_color_two');
            $meta_border_color_two = get_post_meta(get_the_ID() , 'meta_border_color_two', true); 
            if(!empty($meta_border_color_two)):
                $border_color_two = $meta_border_color_two;
            endif;
            if(!empty($border_color_two)):
            $css .= ':root   {--color-set-one-bor-2:' . $border_color_two . '}';
            endif;
            // theme border color two end 

            // theme heading color 
            $heading_color = get_risehand_option('heading_color'); 
            $meta_heading_color = get_post_meta(get_the_ID() , 'meta_heading_color', true); 
            if(!empty($meta_heading_color)):
                $heading_color = $meta_heading_color;
            endif;
            if(!empty($heading_color)):
                $css .= ':root   {--heading-color-one:' . $heading_color . '}';
            endif;
            // theme heading color end
            // theme description color 
            $description_color = get_risehand_option('description_color'); 
            $meta_description_color = get_post_meta(get_the_ID() , 'meta_description_color', true); 
            if(!empty($meta_description_color)):
                $description_color = $meta_description_color;
            endif;
            if(!empty($description_color)):
                $css .= ':root   {--content-color-one:' . $description_color . '}';
            endif;
            // theme description color end 
            // theme mobile menu color 
            $menu_color = get_risehand_option('menu_color');
            $meta_menu_color = get_post_meta(get_the_ID() , 'meta_menu_color', true); 
            if(!empty($meta_menu_color)):
                $menu_color = $meta_menu_color;
            endif;
            if(!empty($menu_color)):
                $css .= ':root   {--mobile-menu-color:' . $menu_color . '}';
            endif;
            // theme mobile menu color end
            // theme mobile active menu color 
            $menu_active_color = get_risehand_option('menu_active_color');
            $meta_menu_active_color = get_post_meta(get_the_ID() , 'meta_menu_active_color', true); 
            if(!empty($meta_menu_active_color)):
                $menu_active_color = $meta_menu_active_color;
            endif;
            if(!empty($menu_active_color)):
                $css .= ':root   {--mobile-menu-active-color:' . $menu_active_color . '}';
            endif;
            // theme mobile active color end 
             /*------=======pre_loader_background======------*/
            if(get_post_meta(get_the_ID() , 'body_style_enable', true) == true): 
                $padding_for_body = get_post_meta(get_the_ID() , 'padding_for_body', true);
                if(!empty($padding_for_body)):
                    $css .= 'body {padding:'.$padding_for_body.';}';
                endif;

                $padding_for_body_mb = get_post_meta(get_the_ID() , 'padding_for_body_mb', true);
                if(!empty($padding_for_body_mb)):
                    $css .= '@media(max-width:1024px){ body {padding:'.$padding_for_body_mb.';} }';
                endif;
               
                $body_bg_image = get_post_meta(get_the_ID() , 'body_bg_image', true);
                if(!empty($body_bg_image)):
                    $body_bg_imagecss =  $body_bg_image['url'];
                    $css .= 'body {background-image:url('.$body_bg_imagecss.'); background-size:cover; background-repeat:no-repeat;
                    background-position:center; }';
                endif;
                $body_bg_color = get_post_meta(get_the_ID() , 'body_bg_color', true);
                if(!empty($body_bg_color)):
                        $css .= 'body {background:'.$body_bg_color.'}';
                 endif;
            endif; 
            // layout 
            // theme mobile active menu color 
            $layout_width_enable = get_risehand_option('layout_width_enable');
            if($layout_width_enable == true): 
                $layout_width_controlss = get_risehand_option('layout_width_control') ;
                if(!empty($layout_width_controlss)):
                    $css .= '@media(min-width:1200px){.auto-container , .container {max-width:' . $layout_width_controlss . '}}';
                endif;
            endif; 
            // theme mobile active color end 
            // page header background color
            $pagheadebgcolor = get_risehand_option('pageheader_bg_color');
            if(get_post_meta(get_the_ID() , 'page_header_bgcolor_enable', true)){
                $pagheadebgcolor =   get_post_meta(get_the_ID() , 'page_header_bgcolor', true);
            }
            if(!empty($pagheadebgcolor)):
                $css .= '.page_header_default:before {background:'.$pagheadebgcolor.'}';
            endif;
            //  page header background color end

             // page header background color
             $pagheadeovercolor = get_risehand_option('pageheader_overlay_color');
             if(get_post_meta(get_the_ID() , 'page_header_bgcolor_enable', true)){
                 $pagheadeovercolor =   get_post_meta(get_the_ID() , 'page_header_bgovcolor', true);
             }
             if(!empty($pagheadeovercolor)):
                 $css .= '.page_header_default .bakground_cover:before {background:'.$pagheadeovercolor.'}';
             endif;
             //  page header background color end 
              // page header background color
              $pg_pattern_color = get_risehand_option('pageheader_pattern_color');
              if(get_post_meta(get_the_ID() , 'page_header_bgcolor_enable', true)){
                  $pg_pattern_color =   get_post_meta(get_the_ID() , 'pg_pattern_color', true);
              }
              if(!empty($pg_pattern_color)):
                  $css .= '.banner_title_inner .pattern_mask_1::before {background:'.$pg_pattern_color.'}';
              endif;
              //  page header background color end  
            // page headerpadding color
            $parpadgustom = get_risehand_option('page_header_padding');
            $page_header_padding_custom = get_post_meta(get_the_ID() , 'page_header_padding_custom', true);
            if(!empty($page_header_padding_custom)):
            $parpadgustom =  $page_header_padding_custom;
            endif;
            if(!empty($parpadgustom)):
                 $css .= '.page_header_default {padding:'.$parpadgustom.'}';
            endif;
            //  page headerpadding end
            // page header title color 
            $pageheader_title_color = get_risehand_option('pageheader_title_color');
            if(get_post_meta(get_the_ID() , 'page_header_title_enable', true)){
                $pageheader_title_color =   get_post_meta(get_the_ID() , 'page_header_titlecolor', true);
            }
            if(!empty($pageheader_title_color)):
                $css .= '.page_header_default .page_header_inner .banner_title_inner .title{color:'.$pageheader_title_color.'}';
            endif;
            //  page header title color end 
             // page header breadcrumb color 
            $pageheader_breadcrumb_color = get_risehand_option('pageheader_breadcrumb_color');
            if(get_post_meta(get_the_ID() , 'page_header_breadcrumb_enable', true)){
                $pageheader_breadcrumb_color =   get_post_meta(get_the_ID() , 'page_header_breadcolor', true);
            }
            if(!empty($pageheader_breadcrumb_color)):
                $css .= ' .breadcrumb li a , .breadcrumb li {color:'.$pageheader_breadcrumb_color.'}';
            endif;
            //  page header breadcrumb color end  
            // page header breadcrumb arrow color 
            $pageheader_breadcrumb_arrow_color = get_risehand_option('pageheader_breadcrumb_arrow_color');
            if(get_post_meta(get_the_ID() , 'page_header_breadcrumb_enable', true)){
                $pageheader_breadcrumb_arrow_color =   get_post_meta(get_the_ID() , 'page_header_breadarrcolor', true);
            }
            if(!empty($pageheader_breadcrumb_arrow_color)):
                $css .= ' .breadcrumb li:after {color:'.$pageheader_breadcrumb_arrow_color.'}';
            endif;
            //  page header breadcrumb arrow color end
            // search inline style
            $search_br_color = get_risehand_option('search_br_color');
            if(!empty($search_br_color)):
                $css .= ' .search-popup .search-form input[type=search] , .search-popup .post-categories li a {border-color:'.$search_br_color.'}';
            endif; 
            // image
            $image_size_enable = get_risehand_option('image_size_enable');
            if($image_size_enable == true):
                $pro_image_size = get_risehand_option('pro_image_size');  
                if(!empty($pro_image_size)):
                    $css .= '@media(min-width:768px){body .product-img-zoom img , .product-img-action-wrap  img , .product_style_five .product-img-inner a img ,
                        .product_grid_style_two .woocommerce-product-gallery__wrapper img {height:'.$pro_image_size.'; width:auto; margin-left:auto; margin-right:auto;}}';
                endif;
                $mdpro_image_size = get_risehand_option('mdpro_image_size');  
                if(!empty($mdpro_image_size)):
                    $css .= '@media(max-width:768px){body .product-img-zoom img ,  .product-img-action-wrap img , .product_style_five .product-img-inner a img ,
                        .product_grid_style_two .woocommerce-product-gallery__wrapper img {height:'.$mdpro_image_size.'; width:auto; margin-left:auto; margin-right:auto;}}';
                endif;
            endif;
            //  title
            $product_title_resize = get_risehand_option('product_title_resize');  
            if($product_title_resize == true):
                $text_over_flow_size = get_risehand_option('text_over_flow_size');  
                if(!empty($text_over_flow_size)):
                    $css .= '.product_card-one .content-wrap .title_20{ 
                        text-overflow: ellipsis;
                        white-space: initial;
                        display: -webkit-box;
                        -webkit-line-clamp: '.$text_over_flow_size.';
                        -webkit-box-orient: vertical; overflow:hidden;}';
                endif;
                $title_height = get_risehand_option('title_height');  
                if(!empty($title_height)):
                    $css .= '.product_card-one .content-wrap .title_20{ height: '.$title_height.'; }';
                endif;
            endif;

            //  word spacing
            $split_enable = get_risehand_option('split_enable');
            $word_spacing = get_risehand_option('word_spacing');
            if($split_enable == true): 
                if(!empty($word_spacing)):
                    $css .= '.title_all_box  .risehandsplit-active{  
                        word-spacing: '.$word_spacing.'px; 
                    }';
                endif;
            endif;

    wp_add_inline_style('risehand-style', $css);
}

