<?php
namespace Risehandaddons;
if (! defined('ABSPATH' )){
	die('-1');
}
class StartRisehand{
      /**
      * Instance
      *
      * @var $instance
      */
      private static $instance;
      /**
      * Initiator
      *
      * @since 1.0.0
      * @return object
      */
      public static function instance() {
        if ( ! isset( self::$instance ) ) {
          self::$instance = new self();
        }

        return self::$instance;
      }
      /**
      * Instantiate the object.
      *
      * @since 1.0.0
      *
      * @return void
      */
      public function __construct() {
        add_action('wp_enqueue_scripts', array($this, 'risehand_enqueue_scripts'));   
        add_action('elementor/elements/categories_registered', array($this, 'add_category' ) );  
      }
 	    /**
	      * Add  category
	      *
	      * @since 1.0.0
	      *
	      * @return void
	    */
	    public function add_category( $elements_manager ) {
        $elements_manager->add_category(
          '100',
          [
              'title'  => 'Risehand Headers',
              'icon' => 'font',
          ],
          1
        );
        $elements_manager->add_category(
          '101',
          [
            'title'  => 'Risehand Sliders',
            'icon' => 'font',
          ],
          2
        );
        $elements_manager->add_category(
          '102',
          [
              'title'  => 'Risehand Content',
              'icon' => 'font',
          ],
          3
        ); 
        $elements_manager->add_category(
          '103',
          [
              'title'  => 'Risehand Posts',
              'icon' => 'font',
          ],
          4
        );
      
        $elements_manager->add_category(
            '104',
            [
              'title'  => 'Risehand Footer',
              'icon' => 'font',
            ],
          5
        );
	    }
    /**
    * Get All ths scriptis and styles
    *
    * @return void
    */ 
    public function risehand_enqueue_scripts(){
      global $risehand_theme_mod;  
      $relatedpost_enable =   get_addons_risehand_option('relatedpost_enable');
     // $rtl_enable_all =   get_addons_risehand_option('rtl_enable_all');
        //if($rtl_enable_all == 'true' || is_rtl()):
         // wp_enqueue_style('risehand-bootstrap', RISEHAND_ADDONS_URL .'assets/css/bootstrap.rtl.min.css' , array() , time() , 'all');
       // else:
          wp_enqueue_style('risehand-bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css' , array() ,  time() ,'all');
       // endif;  
        if($relatedpost_enable == true && is_singular('post') || is_singular('events')){
          wp_enqueue_style('risehand-main-post', get_template_directory_uri().'/assets/css/scss/scss/blog.min.css' ); 
        }    
        wp_deregister_style('redux-extendify-styles');   
        wp_enqueue_style('risehand-icons', get_template_directory_uri() . '/assets/font/style.min.css', array(), '1.0.0'); 
        wp_enqueue_style( 'risehand-theme', get_template_directory_uri() . '/assets/css/scss/theme.min.css', array(), time());
        wp_enqueue_style( 'risehand-theme-widgets', RISEHAND_ADDONS_URL . 'assets/widgets-assets/all-theme.min.css', array(), time()); 
        if (class_exists('Vc_Manager')): 
          wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), time() );
          wp_enqueue_style( 'fontawesome-5', get_template_directory_uri() . '/assets/css/font-awesome-5.min.css', array(), time() );
          wp_enqueue_style( 'risehand-theme', get_template_directory_uri() . '/assets/css/scss/theme.min.css', array( 
            'fontawesome',
            'fontawesome-5', 
          ), '20181007'
        );
        endif; 
        if (class_exists('Tribe__Events__Main')) {
        wp_enqueue_style('risehand-events', get_template_directory_uri().'/assets/css/scss/events.css' , array() ,  time() ,'all');
        }
        
        if (class_exists('Give')) {
          wp_enqueue_style('risehand-giveform', get_template_directory_uri().'/assets/css/scss/give-form.min.css' , array() ,  time() ,'all');
        }
        wp_enqueue_style('risehand-style', get_template_directory_uri().'/style.css' , array() , time() , 'all' );     
        // jquery
        wp_enqueue_script('risehand-bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery') , time(), true);
        wp_enqueue_script('risehand-all', RISEHAND_ADDONS_URL . 'assets/js/all.min.js', array('jquery') , time(), true);  
        if(is_singular('post') || is_singular('events') || risehand_is_blog() || is_singular('service')  || is_singular('portfolio') || is_singular('volunteer') || is_singular('product')){
          wp_enqueue_script('risehand-share', RISEHAND_ADDONS_URL . 'assets/js/sharer.min.js', array('jquery') , time(), true);
        } 
        wp_enqueue_script('risehand-select-active', RISEHAND_ADDONS_URL . 'assets/js/select-active.js', array('jquery') , time(), true); 
        $split_enable =   get_addons_risehand_option('split_enable');
        if($split_enable ==  true){
          //wp_enqueue_script('risehand-gasp', RISEHAND_ADDONS_URL . 'assets/js/gsap.min.js', array('jquery') , time(), true); 
          wp_enqueue_script('risehand-split', RISEHAND_ADDONS_URL . 'assets/js/split-text.js', array('jquery') , time(), true); 
          //wp_enqueue_script('risehand-ScrollTrigger', RISEHAND_ADDONS_URL . 'assets/js/ScrollTrigger.js', array('jquery') , time(), true); 
          //wp_enqueue_script('risehand-split-active', RISEHAND_ADDONS_URL . 'assets/js/split-active.js', array('jquery') , time(), true); 
        }
        $smooth_scroll =   get_addons_risehand_option('smooth_scroll');
        if($smooth_scroll ==  true){ 
          wp_enqueue_script('risehand-smooth', RISEHAND_ADDONS_URL . 'assets/js/smoothscroll.js', array('jquery') , time(), true); 
        }
        wp_enqueue_script('risehand-cores', RISEHAND_ADDONS_URL . 'assets/js/risehand-core.min.js', array('jquery') , time() , true); 
    } 
      
}