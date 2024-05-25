<?php
/*
** ===================
** Risehand Header
** Post type : Header;
** version: 1.0;
** Authour : Steeltheme;
** ===================
*/
add_action('init', 'header_custom_post_type');   
function header_custom_post_type() {
	register_post_type( 'header',
		array(
			'labels' => array(
			'name' => esc_html_x('Headers', 'Post Type General Name', 'risehand-addons') ,
			'singular_name' => esc_html_x('Headers', 'Post Type General Name', 'risehand-addons') , 
			'add_new' =>  esc_html__('Add New', 'risehand-addons'),
			'add_new_item' =>   esc_html__('Add New Header', 'risehand-addons'),
			'edit' => esc_html__('Edit', 'risehand-addons'),
			'edit_item' =>   esc_html__('Edit Header', 'risehand-addons'),
			'new_item' =>   esc_html__('New Header', 'risehand-addons'),
			'view' =>  esc_html__('View', 'risehand-addons'),
			'view_item' =>    esc_html__('View Header', 'risehand-addons'),
			'search_items' =>   esc_html__('Search Header', 'risehand-addons'),
			'not_found' =>   esc_html__('No Header found', 'risehand-addons'),
			'not_found_in_trash' =>  esc_html__('No Header found in Trash', 'risehand-addons'),
			'parent' =>  esc_html__('Parent Header', 'risehand-addons')
			),
		
			'public' => true,
			'show_in_rest' => true,
			'menu_position' => 15,
			'rewrite'               => array('slug' => 'header'),
			'supports' =>
			array( 'title', 
			'thumbnail' , 'editor', 'page-attributes' ),
			'taxonomies' => array( '' ),
			'show_in_menu'        => 'risehand',
			'show_in_nav_menus'   => false,
			'menu_position'       => 4,
			'menu_icon'           => 'dashicons-heading',
			'has_archive' => false,
			'capability_type'    => 'post',
			'hierarchical'          => true,
		)
	);
} 

add_action('init', 'sliders_custom_post_type');  
function sliders_custom_post_type() {
	register_post_type( 'sliders',
		array(
			'labels' => array(
			'name' => esc_html_x('Sliders ', 'Post Type General Name', 'risehand-addons') ,
			'singular_name' => esc_html_x('Sliders', 'Post Type General Name', 'risehand-addons') , 
			'add_new' =>  esc_html__('Add New', 'risehand-addons'),
			'add_new_item' =>   esc_html__('Add New Sliders', 'risehand-addons'),
			'edit' => esc_html__('Edit', 'risehand-addons'),
			'edit_item' =>   esc_html__('Edit Sliders', 'risehand-addons'),
			'new_item' =>   esc_html__('New Sliders', 'risehand-addons'),
			'view' =>  esc_html__('View', 'risehand-addons'),
			'view_item' =>    esc_html__('View Sliders', 'risehand-addons'),
			'search_items' =>   esc_html__('Search Sliders', 'risehand-addons'),
			'not_found' =>   esc_html__('No Sliders found', 'risehand-addons'),
			'not_found_in_trash' =>  esc_html__('No Sliders found in Trash', 'risehand-addons'),
			'parent' =>  esc_html__('Parent Sliders', 'risehand-addons')
		),
		'public' => true,
		'show_in_rest' => true,
		'supports' => array( 'title', 'editor'),
		'taxonomies' => array( '' ),
		'show_in_menu'        => 'risehand',
		'show_in_nav_menus'   => true,
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-admin-generic',
		'has_archive' => false,
		'hierarchical'          => true,
		'capability_type'    => 'post',
		)
	);
}