<?php
/*
**==============================   
** Risehand Function
**==============================
*/
require get_template_directory() . '/includes/Risehand_Mobile_Detect.php';
// Mobile Detect callback
function risehand_isMobile() {
    if ( ! class_exists( 'Risehand_Mobile_Detect' ) ) {
        return false;
    }
    $detect = new Risehand_Mobile_Detect;
    $mobile = false;
    if( $detect->isMobile() || $detect->isTablet() ){
        $mobile = true;
    }
    return $mobile;
}
require get_template_directory() . '/includes/common/functions/theme-function.php';
 
 // ===================theme=======================
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;
// ============================== theme update ============================
if(class_exists('Risehand_update')):
    $myUpdateChecker = PucFactory::buildUpdateChecker(
        'https://themepanthers.com/updatedplugin/risehand/theme.json',
        __FILE__, //Full path to the main plugin file or functions.php.
        'risehand-theme-update'
    );
endif;
// ============================== theme update ============================ 
// Disable redirection after activating The Woocommerce
add_filter( 'woocommerce_prevent_automatic_wizard_redirect', '__return_true' );  
// Disable redirection after activating The Events Calendar plugin
function risehand_disable_events_calendar_activation_redirect() {
    delete_transient( '_tribe_events_activation_redirect' );
}
add_action( 'admin_init', 'risehand_disable_events_calendar_activation_redirect' );

// Disable WooCommerce Page Installation
add_filter( 'woocommerce_create_pages', '__return_false' );
 
 /**
 * Prevent GiveWP from creating pages on activation
 */
function prefix_disable_givewp_create_pages() {
    remove_action( 'admin_init', 'give_create_pages', -1 );
}
add_action( 'init', 'prefix_disable_givewp_create_pages', 1 );