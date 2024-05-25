<?php
// vc param 
require_once RISEHAND_ADDONS_DIR . 'includes/vc-widgets/Vc-param/Visual-composer.php';
//======shortcodes=====
// header   
require_once RISEHAND_ADDONS_DIR . 'includes/vc-widgets/header/vc-header-v1.php'; 
require_once RISEHAND_ADDONS_DIR . 'includes/vc-widgets/header/vc-header-extra-items-v1.php';
require_once RISEHAND_ADDONS_DIR . 'includes/vc-widgets/header/vc-menu-v1.php';
// sliders  
require_once RISEHAND_ADDONS_DIR . 'includes/vc-widgets/slider/vc_slider_builder.php';
require_once RISEHAND_ADDONS_DIR . 'includes/vc-widgets/slider/vc_slider_v1.php';
require_once RISEHAND_ADDONS_DIR . 'includes/vc-widgets/slider/vc_slider_v2.php';
require_once RISEHAND_ADDONS_DIR . 'includes/vc-widgets/slider/vc_slider_v3.php';
require_once RISEHAND_ADDONS_DIR . 'includes/vc-widgets/slider/vc_slider_v4.php'; 
// Content 
require_once RISEHAND_ADDONS_DIR . 'includes/vc-widgets/content/empty-space.php'; 
require_once RISEHAND_ADDONS_DIR . 'includes/vc-widgets/content/vc-fun-facts-v1.php';
require_once RISEHAND_ADDONS_DIR . 'includes/vc-widgets/content/vc-price-plan-tab-v1.php'; 
require_once RISEHAND_ADDONS_DIR . 'includes/vc-widgets/content/vc-price-v1.php'; 
require_once RISEHAND_ADDONS_DIR . 'includes/vc-widgets/content/vc-faqs-v1.php'; 
require_once RISEHAND_ADDONS_DIR . 'includes/vc-widgets/content/vc-icon-box-v1.php';  
require_once RISEHAND_ADDONS_DIR . 'includes/vc-widgets/content/vc-testimonial-v1.php';   
require_once RISEHAND_ADDONS_DIR . 'includes/vc-widgets/content/vc-title-v1.php'; 
require_once RISEHAND_ADDONS_DIR . 'includes/vc-widgets/content/vc-list-v1.php';    
require_once RISEHAND_ADDONS_DIR . 'includes/vc-widgets/content/vc-client-logo-v1.php';  
require_once RISEHAND_ADDONS_DIR . 'includes/vc-widgets/content/vc-theme-button-v1.php';   
require_once RISEHAND_ADDONS_DIR . 'includes/vc-widgets/content/vc-tab-v1.php';   
require_once RISEHAND_ADDONS_DIR . 'includes/vc-widgets/content/vc-image-box-v1.php';   
require_once RISEHAND_ADDONS_DIR . 'includes/vc-widgets/content/vc-image-box-v2.php';      
require_once RISEHAND_ADDONS_DIR . 'includes/vc-widgets/content/vc-subscribe-v1.php';   
require_once RISEHAND_ADDONS_DIR . 'includes/vc-widgets/content/vc-contact-form-v1.php';   
require_once RISEHAND_ADDONS_DIR . 'includes/vc-widgets/content/vc-description-v1.php';  
require_once RISEHAND_ADDONS_DIR . 'includes/vc-widgets/content/vc-social-media-v1.php';  
require_once RISEHAND_ADDONS_DIR . 'includes/vc-widgets/content/vc-contact-box-v1.php';   
require_once RISEHAND_ADDONS_DIR . 'includes/vc-widgets/content/vc-progress-bar-v1.php';    
// Cutom Post
require_once RISEHAND_ADDONS_DIR . 'includes/vc-widgets/post/vc-blog-post-v1.php';
require_once RISEHAND_ADDONS_DIR . 'includes/vc-widgets/post/vc-events-post-v1.php'; 
require_once RISEHAND_ADDONS_DIR . 'includes/vc-widgets/post/vc-service-post-v1.php';
require_once RISEHAND_ADDONS_DIR . 'includes/vc-widgets/post/vc-portfolio-post-v1.php';
require_once RISEHAND_ADDONS_DIR . 'includes/vc-widgets/post/vc-portfolio-carousel-post-v1.php';  
require_once RISEHAND_ADDONS_DIR . 'includes/vc-widgets/post/vc-volunteer-post-v1.php';
if (class_exists('Give')) { 
    require_once RISEHAND_ADDONS_DIR . 'includes/vc-widgets/post/vc-donation-post-v1.php'; 
    require_once RISEHAND_ADDONS_DIR . 'includes/vc-widgets/post/vc-donation-post-carousel-v1.php';  
    require_once RISEHAND_ADDONS_DIR . 'includes/vc-widgets/post/vc-donation-form-v1.php';   
}
// Footer
require_once RISEHAND_ADDONS_DIR . 'includes/vc-widgets/footer/vc-recent-post-v1.php'; 
require_once RISEHAND_ADDONS_DIR . 'includes/vc-widgets/footer/vc-gallery-v1.php';  
// tempalte import 
require_once RISEHAND_ADDONS_DIR . 'includes/vc-widgets/Vc-param/template-import.php'; 
 
// Set default editor post types.
vc_set_default_editor_post_types(
    array(
        'page',
        'sliders',
        'post',
        'header' ,
        'footer' ,
        'mega_menu' ,
        'service' ,
        'portfolio' ,
        'volunteer' , 
        'give_forms',
        'tribe_events'
    )
);


 