<?php
/*===============================
    Cookies
==============================*/ 
function risehand_cookies_scripts() { 
    $enable_cookies =  get_addons_risehand_option('enable_cookies');
    if($enable_cookies == true):
        wp_enqueue_style('risehand-cooks', RISEHAND_ADDONS_URL . 'includes/Extended/cookies/assets/cookies.css', array() , '8.0.1', 'all');
        wp_enqueue_script('risehand-cookies', RISEHAND_ADDONS_URL . 'includes/Extended/cookies/assets/cookies.js', array('jquery') , '4.0.1', true);
    endif;
} 
add_action( 'wp_enqueue_scripts', 'risehand_cookies_scripts' );
/*===============================
    Cookies Get Function
==============================*/ 
add_action( 'risehand_cookies_get', 'risehand_cookies' );
function risehand_cookies() {
 
$allowed_tags = wp_kses_allowed_html('post');  
$enable_cookies = get_addons_risehand_option('enable_cookies');
$cookies_description = get_addons_risehand_option('cookies_description');
$cookies_button_one = get_addons_risehand_option('cookies_button_one');
if($enable_cookies == true):
?>
<div id="cookie-notice" class="cookie-notice">
    <div class="inner_box">
    <div class="d-flex align-items-center">
    <?php if(!empty($cookies_description)): ?>
        <p><?php echo wp_kses($cookies_description , $allowed_tags); ?></p>
    <?php endif; ?>
    <?php if(!empty($cookies_button_one)): ?>
        <button id="accept-cookies"><?php echo esc_attr($cookies_button_one); ?></button>
    <?php endif; ?>
    </div>
    </div>
</div>
<?php
endif;
}