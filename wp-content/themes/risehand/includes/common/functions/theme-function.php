<?php
/**
 * Risehand functions and definitions
 * @package risehand WordPress Theme
 * @version 1.0.0
**/ 
function risehand_setup(){
    if(!isset($content_width))
    $content_width = 840;
    /*---------- Make theme available for translation-----------*/
    load_theme_textdomain('risehand', get_template_directory() . '/lang');
    /*----------Add Theme Support-----------*/
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form'
    ));
    add_theme_support('title-tag');
    add_theme_support('post_format', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat']);
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links'); 
    /*----------woocommerce Theme Support-----------*/ 
    add_theme_support( 'woocommerce');
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
    /*----------editor-style-----------*/
    add_editor_style('assets/css/editor-style.css');
    add_theme_support( 'editor-styles' ); 
    // Load default block styles.
    add_theme_support( 'wp-block-styles' ); 
    // Add support for responsive embeds.
    add_theme_support( 'responsive-embeds' ); 
    add_theme_support( 'align-wide' ); 
    add_theme_support( 'align-full' );
    /*----------register_nav_menus-----------*/
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu (For Default And Mobile Header)', 'risehand') ,
    ));
    // Add custom image size with cropping
    add_image_size('risehand-blog-image-570-570', 570, 570, true);  
    add_image_size('risehand-image-grid-400-425', 400, 425, true ); 
    add_image_size('risehand-image-370-270', 370, 270, true);
    add_image_size('risehand-image-570-570', 570, 570, true);
    add_image_size('risehand-image-370-320', 370, 320, true);
    add_image_size('risehand-image-500-500', 500, 500, true); 
    add_image_size('risehand-image-100-100', 100, 100, true);   
    //  give wp
    
}
add_action('after_setup_theme', 'risehand_setup');
 // Add support for editor in GiveWP donation forms


/*
========================
Get Class for body Class
========================
*/
function risehand_body_classes($classes)
{
    global $post;  
    $header_sticky_enables = get_risehand_option('header_sticky_enables');
    $risehandrtlenableclsss = get_risehand_option('rtl_enable_all');
    // Add a class of layout
    $classes[] = risehand_get_layout();
    $classes[] = 'scrollbarcolor';
    // Adds a class of group-blog to blogs with more than 1 published author.
    if( !class_exists( 'Redux' ) ) {
        $classes[] = 'right-sidebar no_redux';
      }
    if (is_multi_author())
    {
        $classes[] = 'group-blog';
    }
    if (is_singular('page'))
    {
        $classes[] = 'page-' . $post->post_name;
    }
    // Adds a class of hfeed to non-singular pages.
    if (!is_singular())
    {
        $classes[] = 'hfeed';
    }
    if(empty(is_active_sidebar('sidebar-blog')) && is_home() && !is_front_page()){
        $classes[] = 'no_sidebar';
    }
    if(is_page() && empty(is_active_sidebar('page-sidebar'))){
      $classes[] = 'no_sidebar';
    }
    if(is_post_type_archive('service') || is_singular('service') && empty(is_active_sidebar('service-sidebar'))){
        $classes[] = 'no_sidebar';
    }
  
    if($header_sticky_enables == true){
        $classes[] = 'enabled_sticky_header ';
    }  
    if ((get_post_meta(get_the_ID() , 'rtl_enable_disable', true)) || ($risehandrtlenableclsss == true)){
        $classes[] = 'rtl_enable';
    }
    $smooth_scroll =   get_risehand_option('smooth_scroll');
    if($smooth_scroll ==  true){  
        $classes[] = 'risesmscroll';
    }

    return $classes;
}
add_filter('body_class', 'risehand_body_classes');
/*
========================
Helper function to retrieve Redux options
========================
*/
function get_risehand_option($option_key, $default = '') {
    global $risehand_theme_mod; 
    if (isset($risehand_theme_mod[$option_key])) {
        return $risehand_theme_mod[$option_key];
    }  
    return $default;
}
/*
** ============================== 
**  risehand_common_query
** ============================== 
*/
if(!function_exists('risehand_common_query')):
    function risehand_common_query($post_type){
        $post_list = get_posts(array(
            'post_type' => $post_type,
            'showposts' => -1,
        ));
        $posts = array();
        if (!empty($post_list) && !is_wp_error($post_list)) {
            foreach ($post_list as $post) {
                $options[$post->ID] = $post->post_title;
            }
            return $options;
        }
    }
endif; 
/*
** ============================== 
**  risehand_common_query
** ============================== 
*/
if (!function_exists('risehand_common_query_two')) {
    function risehand_common_query_two($post_type) {
        $post_list = get_posts(array(
            'post_type' => $post_type,
            'posts_per_page' => -1,
        ));
        $options = array();
        if (!empty($post_list) && !is_wp_error($post_list)) {
            foreach ($post_list as $post) {
                $options[$post->post_title] = $post->ID; // Assign post ID to the array value
            }
        }
        return $options;
    }
}

  /*
** ============================== 
** risehand Enqueue fonts
** ==============================
*/
function risehand_fonts_url() {
    $font_url = '';
    $Quicksand = _x( 'on', 'Quicksand font: on or off', 'risehand' );
    /* Translators: If there are characters in your language that are not
    * supported by Open Sans, translate this to 'off'. Do not translate
    * into your own language.
    */
    $Amatic = _x( 'on', 'Kalam font: on or off', 'risehand' );  

    $Nunitosans = _x( 'on', 'Nunito Sans font: on or off', 'risehand' );

    if ( 'off' !== $Quicksand || 'off' !== $Nunitosans || 'off' !== $Amatic ) {
    $font_families = array();
     
    if ( 'off' !== $Quicksand ) {
    $font_families[] = 'Quicksand:400,500,600,700';
    }
    if ( 'off' !== $Nunitosans ) {
        $font_families[] = 'Nunito Sans:300,400,500,600,700,800,900';
    }
    
    if ( 'off' !== $Amatic ) {
    $font_families[] = 'Kalam:400,700';
    }
    $query_args = array(
        'family' => urlencode( implode( '|', $font_families ) ),
        'subset' => urlencode( 'latin,latin-ext' ),
    );
    $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
    }
    return esc_url_raw( $fonts_url );
}
/*
** ============================== 
** risehand find blog archive pages
** ==============================
*/ 
function risehand_is_blog () {
    return ( is_archive() || is_author() || is_category() || is_home() || is_tag()) && 'post' == get_post_type();
}

/*
** ============================== 
** risehand Enque styles and scripts
** ==============================
*/ 
function risehand_enqueue_scripts_before_install_plugin(){
    wp_enqueue_style('risehand-bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css' , array() , time() , 'all');
    wp_enqueue_style('risehand-icons', get_template_directory_uri() . '/assets/font/style.min.css',  array() , time() , 'all');
    wp_enqueue_style('risehand-theme', get_template_directory_uri().'/assets/css/scss/theme.min.css' , array() , time() , 'all');
    if(is_singular('post') || is_singular('events')){
        wp_enqueue_style('risehand-single-post', get_template_directory_uri().'/assets/css/scss/scss/single/blog-single.min.css' );  
    }
    if(risehand_is_blog() || is_search() || is_category() || is_tag()){ 
        wp_enqueue_style('risehand-main-post', get_template_directory_uri().'/assets/css/scss/scss/blog.min.css' );   
    }  
    wp_enqueue_style('risehand-style', get_template_directory_uri().'/style.css' );   
    wp_enqueue_style( 'risehand-fonts', risehand_fonts_url(), array(), null ); 
    wp_enqueue_script('risehand-bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery') , time() , true);
    wp_enqueue_script('risehand-main', get_template_directory_uri() . '/assets/js/theme.min.js', array('jquery') , '1.0.0', true);
    if(is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    } 
}
add_action('wp_enqueue_scripts', 'risehand_enqueue_scripts_before_install_plugin');
 

/*
=========================
risehand back to top
========================
*/
function risehand_back_to_top(){ 
if(get_risehand_option('bactotop_enable') == true){
?> 
    <div class="prgoress_indicator">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
    </div>
<?php
}}
add_action('risehand_get_back_to_top', 'risehand_back_to_top'); 
/*
=========================
risehand preloader
========================
*/
function risehand_preloaders(){ 
    $preloaderimage = get_risehand_option('preloader_image');
    $get_pre_style  = ''; 
    $preloader_get_img  = $preloaderimage['url'];
    if(get_post_meta(get_the_ID() , 'preloader_custom_enable', true)){
        $preloader_get_img = get_post_meta(get_the_ID() , 'preloader_image', true);
        $preloader_get_img = $preloader_get_img ? wp_get_attachment_image_src($preloader_get_img, 'full') : wp_get_attachment_image_url(get_the_ID() , 'full'); 
        $preloader_get_img = $preloader_get_img[0];
    }
    $preloader_mg_get = $preloader_get_img ? 'background-image:url(' . $preloader_get_img . ')!important; ' : '';
    if(!empty($preloader_mg_get)):
        $get_pre_style  = "style=$preloader_mg_get";
    endif;
    ?>
    <div class="loader-wrap">
        <div class="preloader" <?php echo esc_attr($get_pre_style); ?>>
           
        </div>
        <div class="layer"> </div>      
        <?php if(empty($preloader_get_img)): ?>
        <div class="animation-preloader"> 
            <div class="spinner"></div>
        </div>
        <?php endif; ?>
    </div>
    <?php  
}
add_action('risehand_get_preloaders', 'risehand_preloaders');

 
/*
=========================
risehand Pattern
========================
*/
add_action('risehand_get_patterns', 'risehand_patterns');
function risehand_patterns() { 
    ?>
    <div class="single-pattern-box">
      <div class="pattern-1">
        <svg width="768" height="754" viewBox="0 0 768 754" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M383.203 542.646C374.003 712.646 143.703 754.146 29.7026 753.646C-208.297 707.646 -118.797 395.646 -157.297 331.646C-237.297 177.646 -274.297 43.6463 -68.7974 -216.354C136.703 -476.354 262.203 -253.354 489.203 -246.354C716.203 -239.354 741.703 -57.8537 761.703 0.646332C781.703 59.1463 751.703 200.146 631.703 200.146C346.203 202.646 383.203 487.146 383.203 542.646Z" fill="url(#paint0_linear_743_38919)"/>
        <defs>
        <linearGradient id="paint0_linear_743_38919" x1="-53.5" y1="-6.00196" x2="459.5" y2="423.498" gradientUnits="userSpaceOnUse">
        <stop stop-color="#B6FCFF"/>
        <stop offset="1" stop-color="#C8F8FB" stop-opacity="0"/>
        </linearGradient>
        </defs>
        </svg>
    </div>  
    <div class="pattern-2">
        <svg width="473" height="1156" viewBox="0 0 473 1156" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path opacity="0.6" d="M112.811 783.946C36.6655 937.956 217.662 1087.98 317.679 1143.73C548.751 1220.61 624.949 902.163 690.341 864.869C836.626 768.899 935.374 669.317 884.299 339.404C833.224 9.49005 612.945 143.699 410.815 37.9508C208.685 -67.7976 96.4763 79.2185 49.9994 120.796C3.52252 162.374 -40.0563 301.139 64.9636 360.295C313.585 503.235 140.298 735.147 112.811 783.946Z" fill="url(#paint0_linear_743_38920)"/>
        <defs>
        <linearGradient id="paint0_linear_743_38920" x1="816.676" y1="415.499" x2="-64.2351" y2="518.927" gradientUnits="userSpaceOnUse">
        <stop stop-color="#F9F3BF"/>
        <stop offset="1" stop-color="#FAF2C0" stop-opacity="0"/>
        </linearGradient>
        </defs>
        </svg>
    </div>     
</div>  
<?php
} 
/*
** ==============================  
**  risehand_the_archive_title
** ============================== 
*/

add_filter('get_the_archive_title', 'risehand_the_archive_title'); 
function risehand_the_archive_title($title){
if(is_search()):
    $title = sprintf(esc_html__('Search Results', 'risehand'));
    elseif(is_404()):
        $title = sprintf(esc_html__('Page Not Found', 'risehand'));
    elseif(is_page()):
        $title = get_the_title();
    elseif(is_single()):
        $title = get_the_title();
    elseif (is_home() && is_front_page()):
        $title = esc_html__('The Latest Posts', 'risehand');
    elseif (is_home() && !is_front_page()):
        $title = get_the_title(get_option('page_for_posts'));
    elseif(is_singular('product')):
        $title = get_the_title(get_the_ID());
    elseif(is_singular('tribe_events')):
        $title = get_the_title(get_the_ID());
    elseif(is_tax() || is_category()  || is_tag()):
        $title = single_term_title('', false);
    elseif(is_singular('post')):
        $title = get_the_title(get_the_ID());  
    elseif(is_post_type_archive('product')): 
        $product_name = get_risehand_option('product_name');
        $title = $product_name; 
    elseif(is_post_type_archive('tribe_events')): 
        $tribe_events_name = get_risehand_option('tribe_events_name');
        $title = $tribe_events_name; 
    elseif(is_post_type_archive('give_forms')): 
        $donation_name = get_risehand_option('donation_name');
        $title = $donation_name; 
    endif;
return $title;
}
 
/*
** ============================== 
**  remove html font
** ============================== 
*/
function risehand_remove_font_classes_from_html($output) {
    $output = preg_replace('/\bclass="(.*?)"/', '', $output);
    return $output;
}

add_filter('language_attributes', 'risehand_remove_font_classes_from_html'); 
/*
** ============================== 
**  remove src set
** ============================== 
*/
function risehand_remove_srcset_and_sizes($content) {
    $content = preg_replace('/(srcset=".*?")/', '', $content);
    $content = preg_replace('/(sizes=".*?")/', '', $content);
    return $content;
}
add_filter('the_content', 'risehand_remove_srcset_and_sizes'); 
/*
** ============================== 
**  Simple Serch
** ============================== 
*/
add_action('get_risehand_search',  'risehand_search'); 
function risehand_search() { ?>
<form role="search" method="get" action="<?php echo esc_url(home_url( '/' )); ?>">
    <input type="search" class="search" placeholder="<?php echo esc_attr__( 'Search...', 'risehand' ); ?>"
        value="<?php echo get_search_query() ?>" name="s" title="Search" />
    <button type="submit" class="sch_btn"> <i class="risehand-search"></i></button>
</form>
<?php 
} 
/*==============includeslude Walker file==============*/

require_once get_template_directory() . '/includes/Risehand_navwalker.php';
/*
==========================================
add_theme_support
==========================================
*/
function risehand_cat_meta_postbox_css(){
	wp_enqueue_style('meta-box-css', get_template_directory_uri().'/assets/css/metabox.css' );    
}
add_action('admin_enqueue_scripts', 'risehand_cat_meta_postbox_css');
/*
==========================================
Register widgetized area and update sidebar with default widgets. 
==========================================
*/
function risehand_register_sidebar(){
    $sidebars = array(
        'page-sidebar' => esc_html__('Page Sidebar', 'risehand') ,
        'sidebar-blog' => esc_html__('Blog Sidebar', 'risehand') ,
        'events-sidebar' => esc_html__('Events Sidebar', 'risehand') ,
        'portfolio-sidebar' => esc_html__('Portfolio Sidebar', 'risehand') ,
        'service-sidebar' => esc_html__('Service Sidebar', 'risehand') ,
        'shop-sidebar' => esc_html__('Shop Sidebar', 'risehand') ,
        'shop-single-sidebar' => esc_html__('Shop Single Sidebar', 'risehand') , 
    );
    // Register sidebars
    foreach ($sidebars as $id => $name) {
        register_sidebar(
            array(
                'name' => $name,
                'id' => $id,
                'description' => esc_html__('Add widgets here in order to display on pages', 'risehand') ,
                'before_widget' => '<div class="widgets_grid_box"><div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div> </div>',
                'before_title' => '<h4 class="widget-title">',
                'after_title' => '</h4>',
            ));
    }
}
add_action('widgets_init', 'risehand_register_sidebar'); 
/*
==========================================
  Post Query
==========================================
*/ 
if (!function_exists('risehand_default_query')) {
    function risehand_default_query($post_type){
    $post_list = get_posts(array(
        'post_type' => $post_type,
        'showposts' => -1,
    ));
    $posts = array();
        if(!empty($post_list) && !is_wp_error($post_list)) {
            foreach ($post_list as $post) {
                $options[$post->ID] = $post->post_title;
            }
            return $options;
        }
    }
}  
/*
==========================================
  Get All FIles
==========================================
*/ 
require_once get_template_directory() . "/includes/admin/dashboard/pluigns/class-tgm-plugin-activation.php";
require_once get_template_directory() . "/includes/admin/dashboard/pluigns/list-plugins.php";
require_once get_template_directory() . "/includes/admin/dashboard/menu/menu-option.php"; 
require_once get_template_directory() . '/includes/admin/dashboard/class-dashboard.php'; 
/*------ includes > common---------------*/ 
require get_template_directory() . '/includes/common/functions/layout.php'; 
/*------ templateparts > header---------------*/ 
require get_template_directory() . '/template-parts/content/blog-functions.php'; 
require get_template_directory() . '/template-parts/header/default-header.php';  
require get_template_directory() . '/template-parts/footer/default-footer.php';    
require get_template_directory() . '/template-parts/page-header/page-header.php';   
require get_template_directory() . '/template-parts/header/mobile-menu.php';
/*------includes > functions---------------*/
require get_template_directory() . '/includes/lib/functions/comments.php';
require get_template_directory() . '/includes/lib/functions/nav.php';
require get_template_directory() . '/includes/lib/functions/breadcrumbs.php'; 
/*------includes > Options---------------*/
if(!class_exists('Redux')){
    require get_template_directory() . '/template-parts/page-header/default-page-header.php';  
}
if(class_exists('Redux')){
    require get_template_directory() . '/includes/admin/options/config.php'; 
}
function custom_editor_settings() {
    $risehand_editor_mode = get_risehand_option('risehand_editor_mode');
    
    if ($risehand_editor_mode == "editor_two") {
        // Disable Gutenberg editor.
        add_filter('use_block_editor_for_post', '__return_false', 10);
        
        // Add Classic Editor styles back.
        add_filter('classic_editor_plugin_force_default_editor', '__return_true', 10);
    }
}
add_action('init', 'custom_editor_settings');
/*
==========================================
Woocommece File
==========================================
*/
if(class_exists('woocommerce')){
    require_once get_template_directory() . '/includes/woocommerce/action.php';
    require_once get_template_directory() . '/includes/woocommerce/card.php';
}
/*
==========================================
Disable Elementor Boarding
==========================================
*/
add_action('init', 'nioland_disable_elementor_onboarding_redirect');
function nioland_disable_elementor_onboarding_redirect() {
    delete_transient( 'elementor_activation_redirect' );
}
/*
==========================================
Merlin
==========================================
*/
require_once get_template_directory() . '/demo-import/class-merlin.php';
require_once get_template_directory() . '/demo-import/merlin-config.php';
require_once get_template_directory() . '/demo-import/merlin-filters.php';