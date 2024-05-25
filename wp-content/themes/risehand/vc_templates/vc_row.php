<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

/**
 * Shortcode attributes
 * @var $atts
 * @var $el_class
 * @var $full_width
 * @var $full_height
 * @var $equal_height
 * @var $columns_placement
 * @var $content_placement
 * @var $parallax
 * @var $parallax_image
 * @var $css
 * @var $el_id
 * @var $video_bg
 * @var $video_bg_url
 * @var $video_bg_parallax
 * @var $parallax_speed_bg
 * @var $parallax_speed_video
 * @var $content - shortcode content
 * @var $css_animation
 * @var $height
 * Shortcode class
 * @var $this WPBakeryShortCode_VC_Row
 */
$el_class = $full_height = $parallax_speed_bg = $parallax_speed_video = $full_width = $equal_height = $rtl_reverse = $flex_row = $columns_placement = $content_placement = $parallax = $parallax_image = $css = $el_id = $video_bg = $video_bg_url = $video_bg_parallax = $css_animation = $height = $layout = 
$layout_padding = $layout_lap_padding = $layout_tab_padding = $layout_mobile_padding = $layout_border_width = $layout_border_style = $layout_border_color = $layout_background_color  = $layout_background_color = $layout_border_radius = $layout_box_shadow_color = '';
$disable_element = $z_index_select = $bg_positions = $bg_position_text = $bg_position_text_lap = $bg_position_text_tab = $bg_position_text_mob = $seclap_padding = $sectab_padding = $secmob_padding = $seclap_margin = $sectab_margin = $secmob_margin = $secmov_top = $secmov_top_lap = $secmov_top_tab = $secmov_top_mob = $secmov_bottom = $secmov_bottom_lap = $secmov_bottom_tab = $secmov_bottom_mob = $section_heights = $overlay_color = $overlay_z_index_select = ''; 
$output = $after_output = '';
$atts = vc_map_get_attributes( $this->getShortcode( 
    array(
		'section_heights' => '',
		'overlay_color' => '',
		'overlay_z_index_select' => '',
        'layout' => 'auto-container', 
        'layout_padding' => '' , 
		'layout_lap_padding' => '' , 
		'layout_tab_padding' => '' , 
		'layout_mobile_padding' => '' , 
        'layout_border_width'  => '' ,
        'layout_border_style'  => '' ,
        'layout_border_color'  => '' ,
        'layout_background_color'  => '' ,
		'layout_box_shadow'  => '' ,
        'layout_box_shadow_color'  => '' ,
		'layout_border_radius'   => '' ,
		'z_index_select'  => '' ,
		'bg_positions'  => '' ,
		'bg_position_text'  => '' ,
		'bg_position_text_lap'  => '' ,
		'bg_position_text_tab'  => '' ,
		'bg_position_text_mob'  => '' ,
		'seclap_padding' => '' , 
		'sectab_padding' => '' , 
		'secmob_padding' => '' ,  
		'seclap_margin' => '' , 
		'sectab_margin' => '' , 
		'secmob_margin' => '' , 
		'secmov_top' => '' , 
		'secmov_top_lap' => '' , 
		'secmov_top_tab' => '' , 
		'secmov_top_mob' => '' , 
		'secmov_bottom' => '' , 
		'secmov_bottom_lap' => '' , 
		'secmov_bottom_tab' => '' , 
		'secmov_bottom_mob' => '' , 
       ),
  ), $atts );
extract( $atts );
// Section Height 
$style_background_css = "";
$style_height_css = "";
$section_heights  = isset($atts['section_heights']) ? $atts['section_heights'] : '';
$section_heights_get = ! empty( $section_heights ) ? "height: $section_heights!important;" : ''; 
$overlay_color  = isset($atts['overlay_color']) ? $atts['overlay_color'] : '';
$overlay_color_get = ! empty( $overlay_color ) ? "background-color: $overlay_color!important;" : ''; 
$overlay_z_index_select  = isset($atts['overlay_z_index_select']) ? $atts['overlay_z_index_select'] : '';
$overlay_z_index_select_get = ! empty( $overlay_z_index_select ) ? "z-index: $overlay_z_index_select!important;" : ''; 

if(!empty($section_heights_get)):
	$style_height_css  = "$section_heights_get"; 
endif;
if(!empty($overlay_color_get) || !empty($overlay_z_index_select_get)):
	$style_background_css  = "$overlay_color_get $overlay_z_index_select_get"; 
endif;
// Define variables to avoid undefined key notices
$layout_padding = isset($atts['layout_padding']) ? $atts['layout_padding'] : '';
$layout_lap_padding = isset($atts['layout_lap_padding']) ? $atts['layout_lap_padding'] : '';
$layout_tab_padding = isset($atts['layout_tab_padding']) ? $atts['layout_tab_padding'] : '';
$layout_mobile_padding = isset($atts['layout_mobile_padding']) ? $atts['layout_mobile_padding'] : '';
$layout_border_width = isset($atts['layout_border_width']) ? $atts['layout_border_width'] : '';
$layout_border_style = isset($atts['layout_border_style']) ? $atts['layout_border_style'] : '';
$layout_border_color = isset($atts['layout_border_color']) ? $atts['layout_border_color'] : '';
$layout_background_color = isset($atts['layout_background_color']) ? $atts['layout_background_color'] : '';
$layout_border_radius = isset($atts['layout_border_radius']) ? $atts['layout_border_radius'] : '';
$layout_box_shadow = isset($atts['layout_box_shadow']) ? $atts['layout_box_shadow'] : '';
$layout_box_shadow_color = isset($atts['layout_box_shadow_color']) ? $atts['layout_box_shadow_color'] : '';
$z_index_select = isset($atts['z_index_select']) ? $atts['z_index_select'] : '';
$bg_position  = isset($atts['bg_positions']) ? $atts['bg_positions'] : '';
$bg_position_text  = isset($atts['bg_position_text']) ? $atts['bg_position_text'] : '';
$bg_position_text_lap  = isset($atts['bg_position_text_lap']) ? $atts['bg_position_text_lap'] : '';
$bg_position_text_tab  = isset($atts['bg_position_text_tab']) ? $atts['bg_position_text_tab'] : '';
$bg_position_text_mob  = isset($atts['bg_position_text_mob']) ? $atts['bg_position_text_mob'] : '';

$seclap_padding  = isset($atts['seclap_padding']) ? $atts['seclap_padding'] : '';
$sectab_padding  = isset($atts['sectab_padding']) ? $atts['sectab_padding'] : '';
$secmob_padding  = isset($atts['secmob_padding']) ? $atts['secmob_padding'] : '';
$seclap_margin  = isset($atts['seclap_margin']) ? $atts['seclap_margin'] : '';
$sectab_margin  = isset($atts['sectab_margin']) ? $atts['sectab_margin'] : '';
$secmob_margin  = isset($atts['secmob_margin']) ? $atts['secmob_margin'] : '';
$secmov_top  = isset($atts['secmov_top']) ? $atts['secmov_top'] : '';
$secmov_top_lap  = isset($atts['secmov_top_lap']) ? $atts['secmov_top_lap'] : '';
$secmov_top_tab  = isset($atts['secmov_top_tab']) ? $atts['secmov_top_tab'] : '';
$secmov_top_mob  = isset($atts['secmov_top_mob']) ? $atts['secmov_top_mob'] : '';
$secmov_bottom  = isset($atts['secmov_bottom']) ? $atts['secmov_bottom'] : '';
$secmov_bottom_lap  = isset($atts['secmov_bottom_lap']) ? $atts['secmov_bottom_lap'] : '';
$secmov_bottom_tab  = isset($atts['secmov_bottom_tab']) ? $atts['secmov_bottom_tab'] : '';
$secmov_bottom_mob  = isset($atts['secmov_bottom_mob']) ? $atts['secmov_bottom_mob'] : '';

// Variables for layout styles
$layout_padding_out = ! empty( $layout_padding ) ? "padding: $layout_padding!important;" : '';
$layout_lap_padding_out = ! empty( $layout_lap_padding ) ? "padding: $layout_lap_padding!important;" : '';
$layout_tab_padding_out = ! empty( $layout_tab_padding ) ? "padding: $layout_tab_padding!important;" : '';
$layout_mobile_padding_out = ! empty( $layout_mobile_padding ) ? "padding: $layout_mobile_padding!important;" : '';
$layout_border_width_out = ! empty( $layout_border_width ) ? "border-width: $layout_border_width!important;" : '';
$layout_border_style_out = ! empty( $layout_border_style ) ? "border-style: $layout_border_style!important;" : '';
$layout_border_color_out = ! empty( $layout_border_color ) ? "border-color: $layout_border_color!important;" : '';
$layout_background_color_out = ! empty( $layout_background_color ) ? "background-color: $layout_background_color!important;" : '';
$layout_border_radius_out = ! empty( $layout_border_radius ) ? "border-radius: $layout_border_radius!important;" : '';
$z_index_select_out = ! empty( $z_index_select ) ? "position:relative; z-index: $z_index_select!important;" : '';
if($bg_position == "custom"):
	$bg_position = '';
else:
	$bg_position = ! empty( $bg_position ) ? "background-position: $bg_position!important;" : '';
endif;
$bg_position_text = ! empty( $bg_position_text ) ? "background-position: $bg_position_text!important;" : '';
$bg_position_text_lap = ! empty( $bg_position_text_lap ) ? "background-position: $bg_position_text_lap!important;" : '';
$bg_position_text_tab = ! empty( $bg_position_text_tab ) ? "background-position: $bg_position_text_tab!important;" : '';
$bg_position_text_mob = ! empty( $bg_position_text_mob ) ? "background-position: $bg_position_text_mob!important;" : '';
$box_shadow_style = '';
if (!empty($layout_box_shadow) && !empty($layout_box_shadow_color)) {
	$box_shadow_style .= "box-shadow: $layout_box_shadow $layout_box_shadow_color;";
}

$seclap_padding = ! empty( $seclap_padding ) ? "padding: $seclap_padding!important;" : '';
$sectab_padding = ! empty( $sectab_padding ) ? "padding: $sectab_padding!important;" : '';
$secmob_padding = ! empty( $secmob_padding ) ? "padding: $secmob_padding!important;" : '';
$seclap_margin = ! empty( $seclap_margin ) ? "margin: $seclap_margin!important;" : '';
$sectab_margin = ! empty( $sectab_margin ) ? "margin: $sectab_margin!important;" : '';
$secmob_margin = ! empty( $secmob_margin ) ? "margin: $secmob_margin!important;" : '';
$secmov_top = ! empty( $secmov_top ) ? "top: $secmov_top!important;" : '';
$secmov_top_lap = ! empty( $secmov_top_lap ) ? "top: $secmov_top_lap!important;" : '';
$secmov_top_tab = ! empty( $secmov_top_tab ) ? "top: $secmov_top_tab!important;" : '';
$secmov_top_mob = ! empty( $secmov_top_mob ) ? "top: $secmov_top_mob!important;" : '';
$secmov_bottom = ! empty( $secmov_bottom ) ? "bottom: $secmov_bottom!important;" : ''; 
$secmov_bottom_lap = ! empty( $secmov_bottom_lap ) ? "bottom: $secmov_bottom_lap!important;" : '';
$secmov_bottom_tab = ! empty( $secmov_bottom_tab ) ? "bottom: $secmov_bottom_tab!important;" : '';
$secmov_bottom_mob = ! empty( $secmov_bottom_mob ) ? "bottom: $secmov_bottom_mob!important;" : '';
 
//================================================
// Get Bowtied Mod
//================================================
 
$columns_height = '';
$style_two_css  = '';
$style_two_lap_css  = '';
$style_two_tab_css  = '';
$style_three_css  = '';
$style_four_css  = '';
$style_five_css  = '';
$style_six_css  = '';
$style_seven_css  = '';
$style_eight_css  = '';
$style_nine_css  = '';
$style_ten_css  = '';
$height_class = "";
// css
if ($height != "") $height_class = ' min-height:'.$height.'; '; 
if(!empty($layout_padding_out) ||  !empty($layout_border_width_out) || !empty($layout_border_style_out) || !empty($layout_border_color_out) || !empty($layout_background_color_out) || !empty($layout_border_radius_out) || !empty($box_shadow_style)):
$style_two_css  = "$layout_padding_out $layout_border_width_out $layout_border_style_out $layout_border_color_out $layout_background_color_out $layout_border_radius_out $box_shadow_style";
endif;
if(!empty($layout_lap_padding_out)):
	$style_two_lap_css  = "$layout_lap_padding_out";
endif;
if(!empty($layout_tab_padding_out)):
	$style_two_tab_css  = "$layout_tab_padding_out";
endif;
if(!empty($layout_mobile_padding_out)):
	$style_three_css  = "$layout_mobile_padding_out";
endif;
if(!empty($bg_position)):
	$style_four_css  = "$bg_position";
endif;
if(!empty($bg_position_text)):
	$style_five_css  = "$bg_position_text";
endif;
if(!empty($z_index_select_out)):
	$style_six_css  = "$z_index_select_out";
endif;

if(!empty($secmov_top) || !empty($secmov_bottom)):
	$style_seven_css  = "$secmov_top $secmov_bottom";
endif;

if(!empty($secmob_padding) || !empty($secmob_margin) || !empty($secmov_top_mob) || !empty($secmov_bottom_mob) || !empty($bg_position_text_mob)):
	$style_eight_css  = "$secmob_padding $secmob_margin $secmov_top_mob $secmov_bottom_mob $bg_position_text_mob";
endif;

if(!empty($seclap_padding) || !empty($seclap_margin) || !empty($secmov_top_lap) || !empty($secmov_bottom_lap) || !empty($bg_position_text_lap)):
	$style_nine_css  = "$seclap_padding $seclap_margin $secmov_top_lap $secmov_bottom_lap $bg_position_text_lap";
endif;

if(!empty($sectab_padding) || !empty($sectab_margin)  || !empty($secmov_top_tab)  || !empty($secmov_bottom_tab) || !empty($bg_position_text_tab)):
	$style_ten_css  = "$sectab_padding $sectab_margin $secmov_top_tab $secmov_bottom_tab $bg_position_text_tab";
endif;

// height
$columns_height_class = " " . $columns_height;

//================================================
// /Get Bowtied Mod
//================================================

wp_enqueue_script( 'wpb_composer_front_js' );

$el_class = $this->getExtraClass( $el_class ) . $this->getCSSAnimation( $css_animation );

$css_classes = array(
	//'row', // Get Bowtied Mod
	$columns_height_class, // Get Bowtied Mod
	'vc_row',
	'wpb_row', //deprecated
	'vc_row-fluid',
	$el_class,
	vc_shortcode_custom_css_class( $css ),
);

if ( 'yes' === $disable_element ) {
	if ( vc_is_page_editable() ) {
		$css_classes[] = 'vc_hidden-lg vc_hidden-xs vc_hidden-sm vc_hidden-md';
	} else {
		return '';
	}
}

if ( vc_shortcode_custom_css_has_property( $css, array(
		'border',
		'background',
	) ) || $video_bg || $parallax
) {
	$css_classes[] = 'vc_row-has-fill';
}

if ( ! empty( $atts['gap'] ) ) {
	$css_classes[] = 'vc_column-gap-' . $atts['gap'];
}

$wrapper_attributes = array();
// build attributes for wrapper
if ( ! empty( $el_id ) ) {
	$wrapper_attributes[] = 'id="' . esc_attr( $el_id ) . '"';
}
if ( ! empty( $full_width ) ) {
	$wrapper_attributes[] = 'data-vc-full-width="true"';
	$wrapper_attributes[] = 'data-vc-full-width-init="false"';
	if ( 'stretch_row_content' === $full_width ) {
		$wrapper_attributes[] = 'data-vc-stretch-content="true"';
	} elseif ( 'stretch_row_content_no_spaces' === $full_width ) {
		$wrapper_attributes[] = 'data-vc-stretch-content="true"';
		$css_classes[] = 'vc_row-no-padding';
	}
	$after_output .= '<div class="vc_row-full-width vc_clearfix"></div>';
}

if ( ! empty( $full_height ) ) {
	$css_classes[] = 'vc_row-o-full-height';
	if ( ! empty( $columns_placement ) ) {
		$flex_row = true;
		$css_classes[] = 'vc_row-o-columns-' . $columns_placement;
		if ( 'stretch' === $columns_placement ) {
			$css_classes[] = 'vc_row-o-equal-height';
		}
	}
}

if ( ! empty( $equal_height ) ) {
	$flex_row = true;
	$css_classes[] = 'vc_row-o-equal-height';
}
if ( ! empty( $rtl_reverse ) ) {
	$flex_row = true;
	$css_classes[] = 'vc_rtl-columns-reverse';
}

$unique_id = uniqid();
$unique_id_two = uniqid();
//================================================
// Get Bowtied Mod
//================================================

if ( $columns_height == "adjust_cols_height" ) {
	$flex_row = true;
	$css_classes[] = ' vc_row-o-equal-height';
} 
//================================================
// /Get Bowtied Mod
//================================================

if ( ! empty( $content_placement ) ) {
	$flex_row = true;
	$css_classes[] = 'vc_row-o-content-' . $content_placement;
}

if ( ! empty( $flex_row ) ) {
	$css_classes[] = 'vc_row-flex';
}

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
 
$css_classes[] = 'rise_section_' . $unique_id_two;
if($section_heights != "auto"){
	$css_classes[] = 'vc_height_enabled';
}

if(!empty($overlay_color_get) || !empty($overlay_z_index_select_get)){
	$css_classes[] = 'vc_overlay';
}
 
$css_class = preg_replace( '/\s+/', ' ', apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, implode( ' ', array_filter( array_unique( $css_classes ) ) ), $this->settings['base'], $atts ) );
$wrapper_attributes[] = 'class="' . esc_attr( trim( $css_class ) ) . '"'; 
$output .= '<div '  . implode( ' ', $wrapper_attributes ) .'>'; 
if (!empty($style_two_css)) {
    $output .= '<style type="text/css" data-type="vc_shortcodes-custom"> .rise_container_'.$unique_id.'.common_container{' . $style_two_css . '}</style>';
}
if (!empty($style_four_css)) {
    $output .= '<style type="text/css" data-type="vc_shortcodes-custom"> .rise_section_'.$unique_id_two.'{' . $style_four_css . '}</style>';
} 
if (!empty($style_five_css) || !empty($style_six_css) || !empty($style_seven_css)) {
    $output .= '<style type="text/css" data-type="vc_shortcodes-custom"> .rise_section_'.$unique_id_two.'{' . $style_five_css . ' ' . $style_six_css . '  ' . $style_seven_css . '}</style>';
} 
if (!empty($style_two_lap_css)) {
    $output .= '<style type="text/css" data-type="vc_shortcodes-custom"> @media(max-width:1366px){.rise_container_'.$unique_id.'.common_container{' . $style_two_lap_css . '}}</style>';
} 
if (!empty($style_two_tab_css)) {
    $output .= '<style type="text/css" data-type="vc_shortcodes-custom"> @media(max-width:1200px){.rise_container_'.$unique_id.'.common_container{' . $style_two_tab_css . '}}</style>';
} 
if (!empty($style_three_css)) {
    $output .= '<style type="text/css" data-type="vc_shortcodes-custom"> @media(max-width:992px){.rise_container_'.$unique_id.'.common_container{' . $style_three_css . '}}</style>';
} 
if (!empty($style_eight_css)) {
    $output .= '<style type="text/css" data-type="vc_shortcodes-custom"> @media(max-width:992px){.rise_section_'.$unique_id_two.'{' . $style_eight_css . '}}</style>';
}
if (!empty($style_nine_css)) {
    $output .= '<style type="text/css" data-type="vc_shortcodes-custom"> @media(max-width:1366px){.rise_section_'.$unique_id_two.'{' . $style_nine_css . '}}</style>';
}
if (!empty($style_ten_css)) {
    $output .= '<style type="text/css" data-type="vc_shortcodes-custom"> @media(max-width:1200px){.rise_section_'.$unique_id_two.'{' . $style_ten_css . '}}</style>';
}
if (!empty($style_height_css)) {
    $output .= '<style type="text/css" data-type="vc_shortcodes-custom"> .rise_section_'.$unique_id_two.'{' . $style_height_css . '}</style>';
} 
if (!empty($style_background_css)) {
    $output .= '<style type="text/css" data-type="vc_shortcodes-custom"> .rise_section_'.$unique_id_two.' .vcoverlay_box{' . $style_background_css . '}</style>';
} 
if(!empty($overlay_color_get) || !empty($overlay_z_index_select_get)){
	$output .= '<div class="vcoverlay_box"></div>';
}
$output .= '<div class="'.$layout.' rise_container_'.$unique_id.' common_container clearfix">';
$output .= wpb_js_remove_wpautop( $content );
$output .= '</div>';
$output .= '</div>';
$output .= $after_output;
echo $output;