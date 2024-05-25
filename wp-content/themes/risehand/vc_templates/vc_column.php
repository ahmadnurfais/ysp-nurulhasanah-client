<?php

/* place this file in [your-theme]/vc_templates/ */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

/* This file modifies the vc_column output to accomodate the otional URL parameter */

/**
 * Shortcode attributes
 * @var $atts
 * @var $el_id
 * @var $el_class
 * @var $width
 * @var $css
 * @var $offset
 * @var $content - shortcode content
 * @var $css_animation
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Column $this
 */
$el_class = $el_id = $width = $parallax_speed_bg = $parallax_speed_video = $parallax = $parallax_image = $video_bg = $video_bg_url = $video_bg_parallax = $css = $offset = $css_animation 
= $column_lap_padding = $column_tab_padding = $column_mobile_padding = $column_lap_margin = $column_tab_margin = $column_mobile_margin = $cbg_positions = $cbg_position_text = $cbg_position_text_lap = $cbg_position_text_tab = $cbg_position_text_mob = $clayout_box_shadow =  $clayout_box_shadow_color =  $clayout_border_radius = $cz_index_select = '';
$output = '';
$atts = vc_map_get_attributes( $this->getShortcode( 
    array( 
		'column_lap_padding' => '' ,
		'column_tab_padding' => '' ,
		'column_mobile_padding' => '' ,
		'column_lap_margin' => '',
		'column_tab_margin' => '',
		'column_mobile_margin' => '',
		'cbg_positions'  => '' ,
		'cbg_position_text'  => '' ,
		'cbg_position_text_lap'  => '' ,
		'cbg_position_text_tab'  => '' ,
		'cbg_position_text_mob'  => '' ,
		'clayout_box_shadow'  => '' ,
        'clayout_box_shadow_color'  => '' ,
		'clayout_border_radius'   => '' ,
		'cz_index_select'   => '' ,
       ),
  ), $atts );

extract( $atts );


$cz_index_select = isset($atts['cz_index_select']) ? $atts['cz_index_select'] : '';
$cz_index_select_out = ! empty($cz_index_select) ? "position:relative; z-index: $cz_index_select;" : '';
$column_lap_padding = isset($atts['column_lap_padding']) ? $atts['column_lap_padding'] : '';
$column_tab_padding = isset($atts['column_tab_padding']) ? $atts['column_tab_padding'] : '';
$column_mobile_padding = isset($atts['column_mobile_padding']) ? $atts['column_mobile_padding'] : '';
$column_mobile_margin = isset($atts['column_mobile_margin']) ? $atts['column_mobile_margin'] : '';
$cbg_positions  = isset($atts['cbg_positions']) ? $atts['cbg_positions'] : '';
$cbg_position_text  = isset($atts['cbg_position_text']) ? $atts['cbg_position_text'] : '';
$cbg_position_text_lap  = isset($atts['cbg_position_text_lap']) ? $atts['cbg_position_text_lap'] : '';
$cbg_position_text_tab  = isset($atts['cbg_position_text_tab']) ? $atts['cbg_position_text_tab'] : '';
$cbg_position_text_mob  = isset($atts['cbg_position_text_mob']) ? $atts['cbg_position_text_mob'] : '';
$column_lap_padding_out = ! empty($column_lap_padding) ? "padding: $column_lap_padding!important;" : '';
$column_tab_padding_out = ! empty($column_tab_padding) ? "padding: $column_tab_padding!important;" : '';
$column_mobile_padding_out = ! empty($column_mobile_padding) ? "padding: $column_mobile_padding!important;" : '';
$column_lap_margin_out = ! empty($column_lap_margin) ? "margin: $column_lap_margin!important;" : '';
$column_tab_margin_out = ! empty($column_tab_margin) ? "margin: $column_tab_margin!important;" : '';
$column_mobile_margin_out = ! empty($column_mobile_margin) ? "margin: $column_mobile_margin!important;" : '';

if($cbg_positions == "custom"):
	$cbg_positions = '';
else:
	$cbg_positions = ! empty( $cbg_positions ) ? "background-position: $cbg_positions!important;" : '';
endif;
$style_column_css_one  =  '';
$style_column_css_two  =  '';
$cbg_position_text = ! empty( $cbg_position_text ) ? "background-position: $cbg_position_text!important;" : '';
$cbg_position_text_lap = ! empty( $cbg_position_text_lap ) ? "background-position: $cbg_position_text_lap!important;" : '';
$cbg_position_text_tab = ! empty( $cbg_position_text_tab ) ? "background-position: $cbg_position_text_tab!important;" : '';
$cbg_position_text_mob = ! empty( $cbg_position_text_mob ) ? "background-position: $cbg_position_text_mob!important;" : '';
if(!empty($cbg_positions)):
	$style_column_css_one  = "$cbg_positions";
endif;
if(!empty($cbg_position_text)):
	$style_column_css_two  = "$cbg_position_text";
endif;
$clayout_border_radius_out = ! empty( $clayout_border_radius ) ? "border-radius: $clayout_border_radius!important;" : '';
$clayout_border_radius = isset($atts['clayout_border_radius']) ? $atts['clayout_border_radius'] : '';
$clayout_box_shadow = isset($atts['clayout_box_shadow']) ? $atts['clayout_box_shadow'] : '';
$clayout_box_shadow_color = isset($atts['clayout_box_shadow_color']) ? $atts['clayout_box_shadow_color'] : '';
$box_shadow_style = '';
if (!empty($clayout_box_shadow) && !empty($clayout_box_shadow_color)) {
	$box_shadow_style .= "box-shadow: $clayout_box_shadow $clayout_box_shadow_color;";
}

$column_style = "";
if(!empty($column_mobile_padding_out) || !empty($column_mobile_margin_out) || !empty($cz_index_select_out) || !empty($cbg_position_text_mob)){
$column_style = "$column_mobile_padding_out $column_mobile_margin_out $cz_index_select_out $cbg_position_text_mob";
}

$column_style_two = "";
if(!empty($clayout_border_radius_out) || !empty($box_shadow_style)){
	$column_style_two = "$clayout_border_radius_out $box_shadow_style";
}

$column_lap_style = "";
if(!empty($column_lap_padding_out) || !empty($column_lap_margin_out)  || !empty($cbg_position_text_lap)){
	$column_lap_style = "$column_lap_padding_out $column_lap_margin_out $cbg_position_text_lap";
}
$column_tab_style = "";
if(!empty($column_tab_padding_out) || !empty($column_tab_margin_out)  || !empty($cbg_position_text_tab)){
	$column_tab_style = "$column_tab_padding_out $column_tab_margin_out $cbg_position_text_tab";
}

wp_enqueue_script( 'wpb_composer_front_js' );
$width = wpb_translateColumnWidthToSpan( $width );
$width = vc_column_offset_class_merge( $offset, $width );
$css_classes = array(
	$this->getExtraClass( $el_class ) . $this->getCSSAnimation( $css_animation ),
	'wpb_column',
	'vc_column_container',
	$width,
);

if ( vc_shortcode_custom_css_has_property( $css, array(
	'border',
	'background', 
) ) || $video_bg || $parallax 
) {
	$css_classes[] = 'vc_col-has-fill';
}
$cunique_id = uniqid(); 
if (
    vc_shortcode_custom_css_has_property($css, array('column_mobile_padding', 'column_mobile_margin' , 'cbg_positions' , 'cbg_position_text', 'clayout_border_radius', 'clayout_box_shadow', 'clayout_box_shadow_color')) ||
    !empty($column_mobile_padding) ||
    !empty($column_mobile_margin) ||  !empty($cbg_positions) ||  !empty($cbg_position_text)   ||  !empty($clayout_border_radius) ||  !empty($clayout_box_shadow)   ||  !empty($clayout_box_shadow_color) 
) {
    $css_classes[] = "rise_column_$cunique_id";
}
   

$wrapper_attributes = array();

$has_video_bg = ( ! empty( $video_bg ) && ! empty( $video_bg_url ) && vc_extract_youtube_id( $video_bg_url ) );

$parallax_speed = $parallax_speed_bg;
if ( $has_video_bg ) {
	$parallax = $video_bg_parallax;
	$parallax_speed = $parallax_speed_video;
	$parallax_image = $video_bg_url;
	$css_classes[] = 'vc_video-bg-container';
	wp_enqueue_script( 'vc_youtube_iframe_api_js' );
}

if ( ! empty( $parallax ) ) {
	wp_enqueue_script( 'vc_jquery_skrollr_js' );
	$wrapper_attributes[] = 'data-vc-parallax="' . esc_attr( $parallax_speed ) . '"'; // parallax speed
	$css_classes[] = 'vc_general vc_parallax vc_parallax-' . $parallax;
	if ( false !== strpos( $parallax, 'fade' ) ) {
		$css_classes[] = 'js-vc_parallax-o-fade';
		$wrapper_attributes[] = 'data-vc-parallax-o-fade="on"';
	} elseif ( false !== strpos( $parallax, 'fixed' ) ) {
		$css_classes[] = 'js-vc_parallax-o-fixed';
	}
}

if ( ! empty( $parallax_image ) ) {
	if ( $has_video_bg ) {
		$parallax_image_src = $parallax_image;
	} else {
		$parallax_image_id = preg_replace( '/[^\d]/', '', $parallax_image );
		$parallax_image_src = wp_get_attachment_image_src( $parallax_image_id, 'full' );
		if ( ! empty( $parallax_image_src[0] ) ) {
			$parallax_image_src = $parallax_image_src[0];
		}
	}
	$wrapper_attributes[] = 'data-vc-parallax-image="' . esc_attr( $parallax_image_src ) . '"';
}
if ( ! $parallax && $has_video_bg ) {
	$wrapper_attributes[] = 'data-vc-video-bg="' . esc_attr( $video_bg_url ) . '"';
}
 

$css_class = preg_replace( '/\s+/', ' ', apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, implode( ' ', array_filter( $css_classes ) ), $this->settings['base'], $atts ) );
$wrapper_attributes[] = 'class="' . esc_attr( trim( $css_class ) ) . '"';
if ( ! empty( $el_id ) ) {
	$wrapper_attributes[] = 'id="' . esc_attr( $el_id ) . '"';
}
$output .= '<div ' . implode( ' ', $wrapper_attributes ) . '>';
if (!empty($column_style)) {
    $output .= '<style type="text/css" data-type="vc_shortcodes-custom">@media(max-width:992px){.rise_column_'.$cunique_id.' > .vc_column-inner{' . $column_style . '}}</style>';
}
if (!empty($column_lap_style)) {
    $output .= '<style type="text/css" data-type="vc_shortcodes-custom">@media(max-width:1366px){.rise_column_'.$cunique_id.' > .vc_column-inner{' . $column_lap_style . '}}</style>';
}
if (!empty($column_tab_style)) {
    $output .= '<style type="text/css" data-type="vc_shortcodes-custom">@media(max-width:1200px){.rise_column_'.$cunique_id.' > .vc_column-inner{' . $column_tab_style . '}}</style>';
}
if (!empty($style_column_css_one)) {
    $output .= '<style type="text/css" data-type="vc_shortcodes-custom"> .rise_column_'.$cunique_id.' > .vc_column-inner{' . $style_column_css_one . '}</style>';
} 
if (!empty($style_column_css_two)) {
    $output .= '<style type="text/css" data-type="vc_shortcodes-custom"> .rise_column_'.$cunique_id.' > .vc_column-inner{' . $style_column_css_two . '}</style>';
} 
$innerColumnClass = 'vc_column-inner ' . esc_attr( trim( vc_shortcode_custom_css_class( $css ) ) );
$output .= '<div class="' . trim( $innerColumnClass ) . '">';
if (!empty($column_style_two)) {
    $output .= '<style type="text/css" data-type="vc_shortcodes-custom"> .rise_column_'.$cunique_id.' > .vc_column-inner{' . $column_style_two . '}</style>';
} 
$output .= '<div class="wpb_wrapper">';
$output .= wpb_js_remove_wpautop( $content );
$output .= '</div>';
$output .= '</div>';
$output .= '</div>';

echo  $output;