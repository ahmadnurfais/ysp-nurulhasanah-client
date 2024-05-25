<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

/**
 * WPBakery Page Builder basic class.
 * @since 4.2
 */
class Risehand_Vc_Base {
	/**

	 * Load default object like shortcode parsing.
	 *
	 * @since  4.2
	 * @access public
	 */
	public function init() {
		
		if ( is_admin() ) {
			$this->initAdmin();
		} else {
			$this->initPage();
		}
		
	} 
	/**
	 * Build VC for frontend pages.
	 *
	 * @since  4.2
	 * @access public
	 */
	public function initPage() {
		
		remove_action( 'wp_head', array(
			$this,
			'addFrontCss',
		), 1000 );
		
	}



	/**
	 * Hooked class method by wp_footer WP action to output shortcodes css editor settings from page meta data.
	 *
	 * Method gets post meta value for page by key '_wpb_shortcodes_custom_css' and if it is not empty
	 * outputs css string wrapped into style tag.
	 *
	 * @param int $id
	 *
	 * @since  4.2
	 * @access public
	 *
	 */
	public function addShortcodesCustomCss( $id = null ) {
		if ( ! $id && is_singular() ) {
			$id = get_the_ID();
		}

		if ( $id ) {
			if ( 'true' === vc_get_param( 'preview' ) && wp_revisions_enabled( get_post( $id ) ) ) {
				$latest_revision = wp_get_post_revisions( $id );
				if ( ! empty( $latest_revision ) ) {
					$array_values = array_values( $latest_revision );
					$id = $array_values[0]->ID;
				}
			}
			$shortcodes_custom_css = get_metadata( 'post', $id, '_wpb_shortcodes_custom_css', true );
			$shortcodes_custom_css = apply_filters( 'vc_shortcodes_custom_css', $shortcodes_custom_css, $id );
			if ( ! empty( $shortcodes_custom_css ) ) {
				$shortcodes_custom_css = wp_strip_all_tags( $shortcodes_custom_css );
				echo '<style type="text/css" data-type="vc_shortcodes-custom-css">';
				echo  $shortcodes_custom_css;
				echo '</style>';
			}
		}
	}

	/**
	 * Add css styles for current page and elements design options added w\ editor.
	 */
	public function addFrontCss() {
 
		$this->addShortcodesCustomCss();
	}
 
 
}
