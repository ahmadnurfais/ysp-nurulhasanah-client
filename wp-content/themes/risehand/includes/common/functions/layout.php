<?php
/*
** ============================== 
** Risehand Layout
** ==============================
*/
/*
======================================
Display page header
======================================
*/
if(!function_exists('risehand_has_page_header')):
/*
** Check ifcurrent page has page header
** @return bool && get_post_meta(get_the_ID() , 'page_header_enable_disable', true))
*/
function risehand_has_page_header(){
        $page_header_options =  get_risehand_option('page_header_enable');
        if((is_page()  || is_singular(array('post' , 'service' , 'portfolio' , 'volunteer' , 'product'))) && get_post_meta(get_the_ID() , 'page_header_enable_disable', true)):
            return false;
        elseif(is_singular('mega_menu')):
            return false;
        elseif(is_singular('header')):
            return false; 
        elseif(is_singular('sticky_header')):
            return false;
        elseif(is_singular('footer')):
            return false;
        elseif(is_page_template('template-homepage.php')):
            return false;
        elseif(is_page_template('template-blog.php')):
            return false;
        elseif(is_singular('job_listing')):
            return false;  
        elseif(is_attachment()):
            return false;
        endif;
        return $page_header_options;
    }
endif;
/*
======================================
Display page header Image
======================================
*/
if(!function_exists('risehand_get_page_header_image')):
    /**
    * Get page header image URL
    * @return string
    */
    function risehand_get_page_header_image(){    
            if(!risehand_has_page_header()){
                return '';
            }
            if((is_page()  || is_singular(array('post' , 'service' , 'portfolio' , 'product')) || is_post_type_archive('product') || is_tax() || is_tag() || is_day() || is_year() || is_month()  || is_tax( 'product_cat') || is_tax('brand') || is_category())){
                $page_header_bgimages =  get_risehand_option('page_header_bg_image');
                if(get_post_meta(get_the_ID() , 'page_header_bg_image_showss', true) == true){
                    $page_pg_image = get_post_meta(get_the_ID() , 'page_header_bgimage', true);
                    $page_header_bgimages =  $page_pg_image['url'];
                }
            if(!empty($page_header_bgimages['url'])):
            ?>
            <div class="bakground_cover" style="background-image:url(<?php echo esc_url($page_header_bgimages['url']); ?>)"> 
          
            </div>
            <?php
        endif;  
    } 
    else{
        $page_header_blog = get_risehand_option('blog_page_header_bg_image');
        if(!empty($page_header_blog['url'])):
        ?>
        <div class="bakground_cover" style="background-image:url(<?php echo esc_url($page_header_blog['url']); ?>)"> 
        </div>
    <?php endif;   
    }  
}
endif;
/*
======================================
Display Columns
======================================
*/
if(!function_exists('risehand_get_layout')):
/*
**Get Column base on current page
** @return string
*/
function risehand_get_layout(){
    global  $post;  
    $risehand_layout = get_risehand_option('default_layouts' , 'right-sidebar'); 
    $events_layouts =  get_risehand_option('events_layouts' , 'no-sidebar') ; 
    $page_layouts =  get_risehand_option('page_layouts' , 'right-sidebar');
    $product_layouts =  get_risehand_option('product_layouts' , 'right-sidebar');
    $product_single_layouts = get_risehand_option('product_single_layouts' , 'right-sidebar');
    $service_layouts =  get_risehand_option('service_layouts' , 'no-sidebar') ;
    $donation_layouts =  get_risehand_option('donation_layouts' , 'no-sidebar') ; 
    $portfolio_layouts =  get_risehand_option('portfolio_layouts' , 'no-sidebar') ;
    if(is_singular() && get_post_meta(get_the_ID() , 'custom_layout', true)):
        $risehand_layout = get_post_meta(get_the_ID() , 'layout', true); 
    elseif(is_singular('service')):
        $risehand_layout = $service_layouts;
    elseif(is_singular('portfolio')):
        $risehand_layout = $portfolio_layouts;
    elseif(is_singular('tribe_events')):
        $risehand_layout = $events_layouts;
    elseif(is_singular('give_forms')):
        $risehand_layout = $donation_layouts;
    elseif(is_page()):
        $risehand_layout = $page_layouts;
    elseif(is_404()):
        $risehand_layout = 'no-sidebar';
    elseif(is_tax('product_cat') || is_post_type_archive('product')):
        $risehand_layout =  $product_layouts;
    elseif(is_singular('product')):
        $risehand_layout =  $product_single_layouts;
    elseif(is_singular('mega_menu')):
        $risehand_layout = 'no-sidebar';
    elseif(is_singular('header')):
        $risehand_layout = 'no-sidebar'; 
    elseif(is_singular('footer')):
        $risehand_layout = 'no-sidebar';
    elseif(class_exists('woocommerce')):
        if(is_cart() || is_checkout() || is_account_page()):
            $risehand_layout = 'no-sidebar';
        endif;
    endif; 
return $risehand_layout;
}
endif; 
/*
======================================
Display Columns
======================================
*/
if(!function_exists('risehand_get_content_columns')): 
function risehand_get_content_columns($risehand_layout = null){
    $risehand_layout = $risehand_layout ? $risehand_layout : risehand_get_layout();
    
    if('no-sidebar' == $risehand_layout){
        echo 'no_column';
    } else{
        echo ' col-lg-8 col-md-12 col-sm-12 col-xs-12';
     } 
   }
endif;
if(!function_exists('risehand_column_for_page')):
    function risehand_column_for_page(){
        if(is_active_sidebar('page-sidebar')):
            risehand_get_content_columns();
        elseif(!is_active_sidebar('page-sidebar')):
            echo esc_html('no_column no_sidebar', 'risehand');
        endif;
    }
endif;
if(!function_exists('risehand_column_for_blog')):
    function risehand_column_for_blog(){
        if(is_active_sidebar('sidebar-blog')):
            risehand_get_content_columns();
        elseif(!is_active_sidebar('sidebar-blog')):
            echo esc_html('no_column', 'risehand');
        endif;
    }
endif;
if (!function_exists('risehand_column_for_portfolio')):
    function risehand_column_for_portfolio(){
        if(is_active_sidebar('portfolio-sidebar')):
            risehand_get_content_columns();
        elseif(!is_active_sidebar('portfolio-sidebar')):
            echo esc_html('no_column no_sidebar', 'risehand');
        endif;
    }
endif;
if(!function_exists('risehand_column_for_service')):
    function risehand_column_for_service(){
        if(is_active_sidebar('service-sidebar')){
            risehand_get_content_columns();
        }
        elseif(!is_active_sidebar('service-sidebar') ){
            echo esc_html('col-lg-12 no_sidebar', 'risehand');
        }
    }
endif;
if (!function_exists('risehand_column_for_shop')):
    function risehand_column_for_shop(){
        if(is_active_sidebar('shop-sidebar')):
            risehand_get_content_columns();
        elseif(!is_active_sidebar('shop-sidebar')):
            echo esc_html('no_column no_sidebar', 'risehand');
        endif;
    }
endif;
if (!function_exists('risehand_column_for_shop_single')):
    function risehand_column_for_shop_single(){
        if(is_active_sidebar('shop-single-sidebar')):
            risehand_get_content_columns();
        elseif(!is_active_sidebar('shop-single-sidebar')):
            echo esc_html('no_column no_sidebar', 'risehand');
        endif;
    }
endif;
if (!function_exists('risehand_column_for_donation_single')):
    function risehand_column_for_donation_single(){
        if(is_active_sidebar('give-forms-sidebar')):
            risehand_get_content_columns();
        elseif(!is_active_sidebar('give-forms-sidebar')):
            echo esc_html('no_column no_sidebar', 'risehand');
        endif;
    }
endif;

if (!function_exists('risehand_column_for_events')):
    function risehand_column_for_events(){
        if(is_active_sidebar('events-sidebar')):
            risehand_get_content_columns();
        elseif(!is_active_sidebar('events-sidebar')):
            echo esc_html('no_column no_sidebar', 'risehand');
        endif;
    }
endif;