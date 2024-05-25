<?php 
namespace Risehandaddons\Core;
class Functions{
	  /**
      * Instantiate the object.
      *
      * @since 1.0.0
      *
      * @return void
      */
      public function __construct() {
		add_shortcode('risehand-header', [$this, 'risehand_render_header']); 
		add_shortcode('risehand-sticky-header', [$this, 'risehand_render_header_sticky']); 
		add_shortcode('risehand-footer', [$this, 'risehand_render_footer']); 
		add_action('wp_enqueue_scripts', [$this,'addShortcodesCustomCss']); 
		add_shortcode('risehand-slider', [$this, 'risehand_render_slider']); 
	}
  /*
    ** ============================== 
    **   risehand Slider
    ** ==============================
    */ 
    public function risehand_render_slider($atts, $content = '') {
        $query_args = array(
            'p'         => $atts['id'],
            'post_type' => 'sliders',
        ); 
        $post_query = new \WP_Query($query_args); 
        if ($post_query->have_posts()) {
            while ($post_query->have_posts()) {
                $post_query->the_post(); 
                // Check if Elementor is active and if it's rendering
                if (class_exists('Elementor\Plugin')) {
                    // If in Elementor preview mode, output the builder content
                    echo \Elementor\Plugin::instance()->frontend->get_builder_content($atts['id']  , true );
                } elseif (class_exists('Vc_Base')) {
                    // Check if WPBakery Page Builder (VC) is active and output content
                    echo do_shortcode(get_the_content(null, false, $atts['id']));
                } 
                wp_reset_postdata(); 
                return; // Stop processing after outputting the content
            }
        } else {
            // Handle case when no posts match the criteria
            echo '<p>' . esc_html__('Sorry, no posts matched your criteria.', 'risehand-addons') . '</p>';
        }
    } 
/*
** ============================== 
**   Risehand Heqader
** ==============================
*/ 
public function risehand_render_header($atts, $content = '') {
	if (defined('ICL_SITEPRESS_VERSION')) {
		$post_id = apply_filters('wpml_object_id', $atts['id'], 'header', true);
	} elseif (function_exists('pll_get_post')) {
		// Check if Polylang is active
		$post_id = pll_get_post($atts['id'], pll_current_language());
	} else {
		// No translation plugins are active, use the provided ID
		$post_id = $atts['id'];
	}  
	$query_args = array(
		'p'         => $post_id,
		'post_type' => 'header',
	); 
	$post_query = new \WP_Query($query_args); 
	if ($post_query->have_posts()) {
		while ($post_query->have_posts()) {
			$post_query->the_post();
			// Check if Elementor plugin is active
			if ( class_exists( 'Elementor\Plugin' ) ) {
				// Elementor is active, proceed with using it
				$headerelementor = \Elementor\Plugin::instance();
				$header_elementor = $headerelementor->frontend->get_builder_content( $post_id  , true );
				if ( $header_elementor ) {
					echo do_shortcode( $header_elementor );
				} else {
					echo do_shortcode( get_the_content( null, false, $post_id ) );
				}
			} else {
				// Elementor is not active, handle the case accordingly
				echo do_shortcode( get_the_content( null, false, $post_id ) );
			}
 
            wp_reset_postdata(); 
			return; // Stop processing after outputting the content
		}
	} else {
		// Handle case when no posts match the criteria
		echo '<p>' . esc_html__('Sorry, no posts matched your criteria.', 'risehand-addons') . '</p>';
	} 

} 
/*
** ============================== 
**   Risehand Heqader
** ==============================
*/ 
public function risehand_render_header_sticky($atts, $content = '') {
	if (defined('ICL_SITEPRESS_VERSION')) {
		$sticky_post_id = apply_filters('wpml_object_id', $atts['id'], 'header', true);
	} elseif (function_exists('pll_get_post')) {
		// Check if Polylang is active
		$sticky_post_id = pll_get_post($atts['id'], pll_current_language());
	} else {
		// No translation plugins are active, use the provided ID
		$sticky_post_id = $atts['id'];
	}  
	$query_args = array(
		'p'         => $sticky_post_id,
		'post_type' => 'header',
	); 
	$post_query = new \WP_Query($query_args); 
	if ($post_query->have_posts()) {
		while ($post_query->have_posts()) {
			$post_query->the_post();
			// Check if Elementor plugin is active
			if ( class_exists( 'Elementor\Plugin' ) ) {
				// Elementor is active, proceed with using it
				$headerelementor = \Elementor\Plugin::instance();
				$header_elementor = $headerelementor->frontend->get_builder_content( $sticky_post_id  , true );
				if ( $header_elementor ) {
					echo do_shortcode( $header_elementor );
				} else {
					echo do_shortcode( get_the_content( null, false, $sticky_post_id ) );
				}
			} else {
				// Elementor is not active, handle the case accordingly
				echo do_shortcode( get_the_content( null, false, $sticky_post_id ) );
			}
 
            wp_reset_postdata(); 
			return; // Stop processing after outputting the content
		}
	} else {
		// Handle case when no posts match the criteria
		echo '<p>' . esc_html__('Sorry, no posts matched your criteria.', 'risehand-addons') . '</p>';
	} 

} 
/*
** ============================== 
**   Risehand Footer
** ==============================
*/ 
public function risehand_render_footer($atts, $content = '') { 
	  // Check if WPML is active
	  if (defined('ICL_SITEPRESS_VERSION')) {
        $post_id = apply_filters('wpml_object_id', $atts['id'], 'header', true);
    } elseif (function_exists('pll_get_post')) {
        // Check if Polylang is active
        $post_id = pll_get_post($atts['id'], pll_current_language());
    } else {
        // No translation plugins are active, use the provided ID
        $post_id = $atts['id'];
    }   
    $query_args = array(
        'p'         => $post_id,
        'post_type' => 'footer',
    ); 
    $post_query = new \WP_Query($query_args); 
    if ($post_query->have_posts()) {
        while ($post_query->have_posts()) {
            $post_query->the_post(); 
			// Check if Elementor plugin is active
			if ( class_exists( 'Elementor\Plugin' ) ) {
				// Elementor is active, proceed with using it
				$footerelementor = \Elementor\Plugin::instance();
				$footer_elementor = $footerelementor->frontend->get_builder_content( $post_id  , true );
				if ( $footer_elementor ) {
					echo do_shortcode( $footer_elementor );
				} else {
					echo do_shortcode( get_the_content( null, false, $post_id ) );
				}
			} else {
				// Elementor is not active, handle the case accordingly
				echo do_shortcode( get_the_content( null, false, $post_id ) );
			}
 	  
            wp_reset_postdata(); 
			return; // Stop processing after outputting the content
        }
    } else {
        // Handle case when no posts match the criteria
        echo '<p>' . esc_html__('Sorry, no posts matched your criteria.', 'risehand-addons') . '</p>';
    }
	
}
/*
** ============================== 
**   Risehand wpbakery inline css
** ==============================
*/ 
  public function addShortcodesCustomCss( $id = null ) { 
	//  header  
	$header_id =  get_addons_risehand_option('header_custom_style');
	if(get_post_meta(get_the_ID() , 'custom_header', true) && !is_post_type_archive('product') && !is_tax('product_cat') && !is_tax() && !is_tag()  && !is_category()):
		$header_id = get_post_meta(get_the_ID() , 'header_settings_meta', true);
	elseif(is_post_type_archive('product') || is_home() || is_tax('product_cat') || is_tax()|| is_tag() || is_category()):
		$header_id =  get_addons_risehand_option('header_archive_style'); 
	endif;  
	$risehand_getheader_css = array(
		'post_type'        => 'header',
	);
	$risehand_getheaderjscomposer_css = get_posts( $risehand_getheader_css );
	if(count($risehand_getheaderjscomposer_css) > 0) {
		foreach($risehand_getheaderjscomposer_css as $risehand_getheaderjscomposer){
			if($risehand_getheaderjscomposer->ID == $header_id){
			$risehand_getheaderjscomposer_out = get_post_meta ( $risehand_getheaderjscomposer->ID, '_wpb_shortcodes_custom_css', false );
		
				if(!empty($risehand_getheaderjscomposer_out)):
					wp_add_inline_style( 'risehand-style', $risehand_getheaderjscomposer_out[0] );
				endif;
			}
		}
	}
	//  header  for sticky 
	$sticky_header_select_field =  get_addons_risehand_option('header_sticky_custom_style');
    if(get_post_meta(get_the_ID() , 'sticky_custom_header', true) && !is_post_type_archive('product') && !is_tax('product_cat') && !is_tax() && !is_tag()  && !is_category()):
		$sticky_header_select_field = get_post_meta(get_the_ID() , 'sticky_header_settings_meta', true);
	elseif(is_post_type_archive('product')  || is_home()  || is_tax('product_cat') || is_tax()|| is_tag() || is_category()):
		$sticky_header_select_field =  get_addons_risehand_option('stickyheader_archive_style'); 
	endif; 
	$risehand_get_sticky_header_css = array(
		'post_type'        => 'header',
	);
	$risehand_ge_sitckytheaderjscomposer_css = get_posts( $risehand_get_sticky_header_css );
	if(count($risehand_ge_sitckytheaderjscomposer_css) > 0) {
		foreach($risehand_ge_sitckytheaderjscomposer_css as $risehand_getstickyheaderjscomposer){
			if($risehand_getstickyheaderjscomposer->ID == $sticky_header_select_field){
			$risehand_getstickyheaderjscomposer_out = get_post_meta ( $risehand_getstickyheaderjscomposer->ID, '_wpb_shortcodes_custom_css', false );
				if(!empty($risehand_getstickyheaderjscomposer_out)):
					wp_add_inline_style( 'risehand-style', $risehand_getstickyheaderjscomposer_out[0] );
				endif;
			}
		}
	}
	//  footer ;
	$footer_id = get_addons_risehand_option('footer_custom_style');
	if(get_post_meta(get_the_ID() , 'custom_footer', true)):
		  $footer_id = get_post_meta(get_the_ID() , 'footer_settings_meta', true);
	endif;
	$risehand_getfooter_css = array(
		'post_type'        => 'footer',
	);
	$risehand_getfooterjscomposer_css = get_posts( $risehand_getfooter_css );
	if(count($risehand_getfooterjscomposer_css) > 0) {
		foreach($risehand_getfooterjscomposer_css as $risehand_getfooterjscomposer){
			if($risehand_getfooterjscomposer->ID == $footer_id){
			$risehand_getfooterjscomposer_out = get_post_meta ( $risehand_getfooterjscomposer->ID, '_wpb_shortcodes_custom_css', false ); 
				if(!empty($risehand_getfooterjscomposer_out)):
					wp_add_inline_style( 'risehand-style', $risehand_getfooterjscomposer_out[0] );
				endif;
			}
		}
	}
	//  megamenu
	$risehand_mega_css = array(
		'post_type'        => 'mega_menu',
	);
	$risehand_getmegamenujscomposer_css = get_posts( $risehand_mega_css );
	if(count($risehand_getmegamenujscomposer_css) > 0) {
		foreach($risehand_getmegamenujscomposer_css as $risehand_getmegamenujscomposer){
		$risehand_getmegamenujscomposer_out = get_post_meta ( $risehand_getmegamenujscomposer->ID, '_wpb_shortcodes_custom_css', false );
			if(!empty($risehand_getmegamenujscomposer_out)):
				wp_add_inline_style( 'risehand-style', $risehand_getmegamenujscomposer_out[0] );
			endif;
		}
	}
	//  Sliders
	$risehand_mega_css = array(
		'post_type'        => 'sliders',
	);
	$risehand_getslidersjscomposer_css = get_posts( $risehand_mega_css );
	if(count($risehand_getslidersjscomposer_css) > 0) {
		foreach($risehand_getslidersjscomposer_css as $risehand_getslidersjscomposer){
		$risehand_getslidersjscomposer_out = get_post_meta ( $risehand_getslidersjscomposer->ID, '_wpb_shortcodes_custom_css', false );
			if(!empty($risehand_getslidersjscomposer_out)):
				wp_add_inline_style( 'risehand-style', $risehand_getslidersjscomposer_out[0] );
			endif;
		}
	}
} 
    
} 