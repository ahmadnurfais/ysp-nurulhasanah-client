<?php
/**
 * Plugin Name: Risehand Addons
 * Plugin URI: http://demo2.steelthemes.com/
 * Description: Extra Addons For Risehand theme. It was built for Risehand theme.
 * Version: 1.0.4
 * Author:  Steelthemes
 * Author URI: http://steelthemes.com
 * License: GPL2+
 * Text Domain: risehand-addons
 * Domain Path: /lang/
 */
if (! defined('ABSPATH' )){
	die('-1');
}
if (!defined('RISEHAND_ADDONS_DIR')){
  define('RISEHAND_ADDONS_DIR', plugin_dir_path( __FILE__ ));
}
if (!defined('RISEHAND_ADDONS_URL')){
  define('RISEHAND_ADDONS_URL', plugin_dir_url( __FILE__ ));
}
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;
 
require_once __DIR__ . '/vendor/autoload.php';
/**
* Main Risehand Addons Class
*
* The main class that initiates and runs the plugin.
*
* @since 1.0.0
*/
final class  Risehand_Addons {
     
    /**
     * Instance
     *
     * @since 1.0.0
     *
     * @access private
     * @static
     *
     * @var  Risehand_Addons The single instance of the class.
     */
    private static $_instance = null;

    /**
     * Instance
     *
     * Ensures only one instance of the class is loaded or can be loaded.
     *
     * @since 1.0.0
     *
     * @access public
     * @static
     *
     * @return  Risehand_Addons An instance of the class.
     */
    public static function instance() { 
        if ( is_null( self::$_instance ) ) {
        self::$_instance = new self();
        }
        return self::$_instance; 
    } 
    /**
     * Constructor
     *
     * @since 1.0.0
     *
     * @access public
     */
    public function __construct() {
          // Admin Notice to check wpbakery or elemntor is installed.
        add_action( 'admin_notices', [ $this, 'admin_notice_if_elementor_wpbakery_isactive' ] ); 
        $this->get_shortcodes();
        add_action( 'init', [ $this, 'i18n' ] );
        add_action( 'plugins_loaded', [ $this, 'on_plugins_loaded' ] );
        $this->add_Risehand_extra();
        add_filter( 'init', array( $this, 'enable_elementor_posttype_supports' )); 
        $this->update_theme_plugin();
        
    }
    public function update_theme_plugin() {
        require_once RISEHAND_ADDONS_DIR . '/update/plugin-update-checker.php';
        $myUpdateCheckers = PucFactory::buildUpdateChecker(
        'https://themepanthers.com/updatedplugin/risehand/plugin.json',
        __FILE__, //Full path to the main plugin file or functions.php.
        'nioland-plugin-addons'
        );
    } 
        
    /**
     * Initialize the plugin
     *
     * Load the plugin only after Elementor (and other plugins) are loaded.
     * Checks for basic plugin requirements, if one check fail don't continue,
     * if all check have passed load the files required to run the plugin.
     *
     * Fired by `plugins_loaded` action hook.
     *
     * @since 1.0.0
     *
     * @access public
    */
    public function init() {
        $this->i18n();
        // Register widgets 
        add_action( 'elementor/widgets/register', [ $this, 'register_widgets' ] ); 
    } 
    /**
    * Get All the wanted files
    *
    * @return void
    */
    public function add_Risehand_extra(){  
        require_once RISEHAND_ADDONS_DIR . 'update.php'; 
        require_once RISEHAND_ADDONS_DIR . 'includes/Plugins/Header.php';  
        require_once RISEHAND_ADDONS_DIR . 'includes/Plugins/Footer.php';  
        require_once RISEHAND_ADDONS_DIR . 'includes/Plugins/Megamenu.php';  
        require_once RISEHAND_ADDONS_DIR . 'includes/Plugins/Portfolio.php';  
        require_once RISEHAND_ADDONS_DIR . 'includes/Plugins/Service.php';  
        require_once RISEHAND_ADDONS_DIR . 'includes/Plugins/Volunteer.php';  
        require_once RISEHAND_ADDONS_DIR . 'includes/Extended/get-function.php';   
        require_once RISEHAND_ADDONS_DIR . 'includes/Shortcodes/Card.php'; 
        if (class_exists('Give')) { 
        require_once RISEHAND_ADDONS_DIR . 'includes/donation.php';  
        }
        require_once RISEHAND_ADDONS_DIR . 'includes/Shortcodes/shortcode.php';  
        require_once RISEHAND_ADDONS_DIR . 'includes/Plugins/Widgets/recent-post.php'; 
        require_once RISEHAND_ADDONS_DIR . 'includes/Plugins/Widgets/donation-posts.php';   
        require_once RISEHAND_ADDONS_DIR . 'includes/Plugins/Widgets/authour.php';  
        require_once RISEHAND_ADDONS_DIR . 'includes/Shortcodes/related-posts.php'; 
        if (class_exists('Vc_Manager')): 
            require_once RISEHAND_ADDONS_DIR . 'includes/vc-widgets/shortcodes.php'; 
        endif; 
        if (!class_exists('Redux' )){
            require_once RISEHAND_ADDONS_DIR . 'redux-framework/redux-framework.php';
            require_once RISEHAND_ADDONS_DIR . 'metabox/metaboxes.php';
        }  
        add_action('elementor/editor/before_enqueue_scripts', function() { 
            wp_enqueue_style('risehand-widgets-css', RISEHAND_ADDONS_URL . '/assets/css/elementor-steel.css', array() , '1.0.0', 'all'); 
        });
    }
    public function enable_elementor_posttype_supports() {
        $elementor_enable = get_option( 'elementor_cpt_support' );
        if ( ! $elementor_enable ) {
            $elementor_enable = array( 'page', 'post', 'product', 'header' , 'sliders', 'tribe_events' , 'sticky_header' , 'footer' , 'mega_menu' , 'service' , 'portfolio' , 'volunteer' );
            update_option( 'elementor_cpt_support', $elementor_enable );
        }  
        $elementor_options = get_option('elementor_css_print_method');
        $elementor_options_flx_container = get_option('elementor_experiment-container');
        // Update the 'elementor_css_print_method' option to 'internal'
        if ( ! $elementor_options ) {
        $elementor_options  = 'internal';
        // Save the updated options
        update_option('elementor_css_print_method', $elementor_options);
        }
        if(!$elementor_options_flx_container){
            $elementor_options_flx_container  = 'inactive';
            // Save the updated options
            update_option('elementor_experiment-container', $elementor_options_flx_container);
        }
    }
    public function on_plugins_loaded(){
        new Risehandaddons\StartRisehand();
        new Risehandaddons\Admin(); 
        if ($this->is_compatible()) {
            add_action('elementor/init', [$this, 'init']);
        }
    }  
    /*
    ** ============================== 
    **   get_shortcodes
    ** ==============================
    */ 
    public function get_shortcodes() {
        /*
        ** ============================== 
        **  Get function if theme not activated
        ** ==============================
        */  
        function get_addons_risehand_option($option_key, $default = '') {
            global $risehand_theme_mod; 
            if (isset($risehand_theme_mod[$option_key])) {
                return $risehand_theme_mod[$option_key];
            }  
            return $default;
        }
             
        /*
        ** ============================== 
        **   risehand_navmenu
        ** ==============================
        */ 
        if (!function_exists('risehand_navmenu')) {
            function risehand_navmenu() {
                $options = array();
                $nvmenus = wp_get_nav_menus();
                    if (!empty($nvmenus)) {
                        foreach ($nvmenus as $navigationmenu) {
                            if (isset($navigationmenu)) {
                                $options[''] = 'Select';
                                if (isset($navigationmenu->slug) && isset($navigationmenu->name)) {
                                    $options[$navigationmenu->name] = $navigationmenu->slug;
                                }
                            }
                        }
                    }
                
                return $options;
            }
        } 
        /*
        ** ============================== 
        **   risehand_navmenu
        ** ==============================
        */  
        if(!function_exists('get_risehand_icons')) {
        function get_risehand_icons() { 
                // scrape list of icons from fontawesome css 
                $pattern = '/\.((?:\w+(?:-)?)+):before\s*{\s*content/';
                $subject = file_get_contents(get_template_directory() . '/assets/font/style.css');
                preg_match_all($pattern, $subject, $matches, PREG_SET_ORDER);
                $icons = array();
                //fontawesome
                foreach($matches as $match)
                {
                    $icons[] = array('value' => ''.$match[1], 'label' => $match[1]);
                } 
                $icons = array_column($icons, 'label', 'value');
                //print_r($icons); exit('hellow');
                return $icons;
            }
        } 
        /*
        ** ============================== 
        **   risehand_contact_form_query
        ** ==============================
        */ 
        if (!function_exists('risehand_contact_form_query')) {
            function risehand_contact_form_query($post_type) {
                $post_list = get_posts(array(
                    'post_type' => $post_type,
                    'posts_per_page' => -1,
                ));
                $options = array('' => esc_html__('Select a form', 'risehand-addons')); // Add a default option

                if (!empty($post_list) && !is_wp_error($post_list)) {
                    foreach ($post_list as $post) {
                        $options[$post->post_title] = $post->ID;
                    }
                } 
                return $options;
            }
        }
        
        /*
        ** ============================== 
        ** risehand_get_product_categories
        ** ============================== 
        */
        
        if (!function_exists('risehand_get_product_categories')):
        function risehand_get_product_categories() {
            $options = array();
            $taxonomy = 'product_cat';
            if (!empty($taxonomy)) {
                $terms = get_terms(
                    array(
                        'parent' => 0,
                        'taxonomy' => $taxonomy,
                        'hide_empty' => false,
                        )
                    );
                    if (!empty($terms)) {
                        foreach ($terms as $term) {
                            if (isset($term)) {
                                $options[''] = 'Select';
                                if (isset($term->slug) && isset($term->name)) {
                                    $options[$term->slug] = $term->name;
                                }
                            }
                        }
                    }
                }
            return $options;
        }
        endif;
        /*
        ** ============================== 
        ** risehand_get_blog_categories
        ** ============================== 
        */
        
        if (!function_exists('risehand_get_blog_categories')):
        function risehand_get_blog_categories() {
            $options = array();
            $taxonomy = 'category';
            if (!empty($taxonomy)) {
                $terms = get_terms(
                    array(
                        'parent' => 0,
                        'taxonomy' => $taxonomy,
                        'hide_empty' => false,
                        )
                    );
                    if (!empty($terms)) {
                        foreach ($terms as $term) {
                            if (isset($term)) {
                                $options[''] = 'Select';
                                if (isset($term->slug) && isset($term->name)) {
                                    $options[$term->slug] = $term->name;
                                }
                            }
                        }
                    }
                }
            return $options;
        }
        endif; 
        
    } 
    /**
     * Load Textdomain
     *
     * Load plugin localization files.
     *
     * Fired by `init` action hook.
     *
     * @since 1.0.0
     *
     * @access public
     */
    public function i18n() {
    load_theme_textdomain( 'risehand-addons', get_template_directory() . '/lang' );
    } 
   /**
     * Compatibility Checks
     *
     * Checks if the installed version of Elementor meets the plugin's minimum requirement.
     * Checks if the installed PHP version meets the plugin's minimum requirement.
     *
     * @since 1.0.0
     *
     * @access public
     */
    public function is_compatible() {  
        return true;
    } 
     
    /**
     * Admin notice
     *
     * Warning when both Elementor and WPBakery Page Builder are activated.
     *
     * @since 1.0.0
     * @access public
     */
    public function admin_notice_if_elementor_wpbakery_isactive() {
        // Check if both Elementor and WPBakery Page Builder are activated
        if (is_plugin_active('elementor/elementor.php') && is_plugin_active('js_composer/js_composer.php')) {
            $message = esc_html__('Both Elementor and WPBakery Page Builder are activated. Please deactivate one of them.', 'elementor-test-addon');
            printf('<div class="notice notice-warning notice_risehand is-dismissible"><p>%1$s</p></div>', $message);
        }
    }
    /**
     * Include Files
     *
     * Load required plugin core files.
     *
     * @since 1.0.0
     *
     * @access public
    */ 
    public function register_widgets() {
        $widgets_manager = \Elementor\Plugin::instance()->widgets_manager;
        if(!is_singular('sliders')){
        $widgets_manager->register(new  Risehandaddons\Core\Widgets\Slider\Slider_v1());
        $widgets_manager->register(new  Risehandaddons\Core\Widgets\Slider\Slider_v2());
        $widgets_manager->register(new  Risehandaddons\Core\Widgets\Slider\Slider_v3());
        $widgets_manager->register(new  Risehandaddons\Core\Widgets\Slider\Slider_v4());
        $widgets_manager->register(new  Risehandaddons\Core\Widgets\Slider\Slider_builder());
        }
        //header
        $widgets_manager->register(new  Risehandaddons\Core\Widgets\Header\Header_v1());
        $widgets_manager->register(new  Risehandaddons\Core\Widgets\Header\Logo_v1());
        $widgets_manager->register(new  Risehandaddons\Core\Widgets\Header\Menu_v1()); 
        $widgets_manager->register(new  Risehandaddons\Core\Widgets\Header\Header_extra_items_v1());
        //Content 
        $widgets_manager->register(new  Risehandaddons\Core\Widgets\Content\Client_v1());
        $widgets_manager->register(new  Risehandaddons\Core\Widgets\Content\Contact_box_v1());
        $widgets_manager->register(new  Risehandaddons\Core\Widgets\Content\Contact_form_v1());
        $widgets_manager->register(new  Risehandaddons\Core\Widgets\Content\Title_v1());
        $widgets_manager->register(new  Risehandaddons\Core\Widgets\Content\Text_editor());
        $widgets_manager->register(new  Risehandaddons\Core\Widgets\Content\Theme_btn_v1()); 
        $widgets_manager->register(new  Risehandaddons\Core\Widgets\Content\Fun_facts());
        $widgets_manager->register(new  Risehandaddons\Core\Widgets\Content\Icon_box_v1());
        $widgets_manager->register(new  Risehandaddons\Core\Widgets\Content\Price_tab_v1());
        $widgets_manager->register(new  Risehandaddons\Core\Widgets\Content\Price_v1());
        
        $widgets_manager->register(new  Risehandaddons\Core\Widgets\Content\Image_box_v1());
        $widgets_manager->register(new  Risehandaddons\Core\Widgets\Content\Image_box_v2());
        $widgets_manager->register(new  Risehandaddons\Core\Widgets\Content\List_v1());
        $widgets_manager->register(new  Risehandaddons\Core\Widgets\Content\Progress_v1()); 
        $widgets_manager->register(new  Risehandaddons\Core\Widgets\Content\Social_media_v1());
        $widgets_manager->register(new  Risehandaddons\Core\Widgets\Content\Tab_with_content_v1()); 
        $widgets_manager->register(new  Risehandaddons\Core\Widgets\Content\Subscribe_v1()); 
        
        $widgets_manager->register(new  Risehandaddons\Core\Widgets\Content\Faqs_v1());
        $widgets_manager->register(new  Risehandaddons\Core\Widgets\Content\Testimonial_carousel_v1()); 
        //post
        $widgets_manager->register(new  Risehandaddons\Core\Widgets\Post\Blog_v1());  
        if (class_exists('Tribe__Events__Main')) {
        $widgets_manager->register(new  Risehandaddons\Core\Widgets\Post\Events_v1());   
        }
        if (class_exists('Give')) {
            $widgets_manager->register(new  Risehandaddons\Core\Widgets\Post\Donation_form_v1());
            $widgets_manager->register(new  Risehandaddons\Core\Widgets\Post\Donation_post_carousel_v1()); 
            $widgets_manager->register(new  Risehandaddons\Core\Widgets\Post\Donation_post_grid_v1());  
        }
        $widgets_manager->register(new  Risehandaddons\Core\Widgets\Post\Portfolio_post_v1());
        $widgets_manager->register(new  Risehandaddons\Core\Widgets\Post\Portfolio_carousel_v1());
        $widgets_manager->register(new  Risehandaddons\Core\Widgets\Post\Volunteer_v1());
        $widgets_manager->register(new  Risehandaddons\Core\Widgets\Post\Service_post_v1());
        $widgets_manager->register(new  Risehandaddons\Core\Widgets\Footer\Gallery_v1()); 
        $widgets_manager->register(new  Risehandaddons\Core\Widgets\Footer\Recent_post_v1()); 
    }
    
  
}
Risehand_Addons::instance();

