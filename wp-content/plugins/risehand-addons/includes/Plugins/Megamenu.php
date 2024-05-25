<?php
/*
** ===================
** Risehand Mega Menu
** Post type : Mega Menu;
** version: 1.0;
** Authour : Steeltheme;
** ===================
*/

add_action('init', 'mega_menu_custom_post_type');  
function mega_menu_custom_post_type() {
	register_post_type( 'mega_menu',
		array(
			'labels' => array(
			'name' => esc_html_x('Mega Menus ', 'Post Type General Name', 'risehand-addons') ,
			'singular_name' => esc_html_x('Mega Menu', 'Post Type General Name', 'risehand-addons') , 
			'add_new' =>  esc_html__('Add New', 'risehand-addons'),
			'add_new_item' =>   esc_html__('Add New Mega Menu', 'risehand-addons'),
			'edit' => esc_html__('Edit', 'risehand-addons'),
			'edit_item' =>   esc_html__('Edit Mega Menu', 'risehand-addons'),
			'new_item' =>   esc_html__('New Mega Menu', 'risehand-addons'),
			'view' =>  esc_html__('View', 'risehand-addons'),
			'view_item' =>    esc_html__('View Mega Menu', 'risehand-addons'),
			'search_items' =>   esc_html__('Search Mega Menu', 'risehand-addons'),
			'not_found' =>   esc_html__('No Mega Menu found', 'risehand-addons'),
			'not_found_in_trash' =>  esc_html__('No Mega Menu found in Trash', 'risehand-addons'),
			'parent' =>  esc_html__('Parent Mega Menu', 'risehand-addons')
		),
		'public' => true,
		'show_in_rest' => true,
		'supports' =>
		array( 'title', 
		'thumbnail' , 'editor' , 'page-attributes'),
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