<?php
/*
** ===================
** Risehand Footer
** Post type : Footer;
** version: 1.0;
** Authour : Steeltheme;
** ===================
*/
add_action('init' , 'footer_custom_post_type');   
function footer_custom_post_type() {
	register_post_type( 'footer',
		array(
			'labels' => array(
				'name' => esc_html_x('Footers', 'Post Type General Name', 'risehand-addons') ,
				'singular_name' => esc_html_x('Footers', 'Post Type General Name', 'risehand-addons') , 
				'add_new' =>  esc_html__('Add New', 'risehand-addons'),
				'add_new_item' =>   esc_html__('Add New Footer', 'risehand-addons'),
				'edit' => esc_html__('Edit', 'risehand-addons'),
				'edit_item' =>   esc_html__('Edit Footer', 'risehand-addons'),
				'new_item' =>   esc_html__('New Footer', 'risehand-addons'),
				'view' =>  esc_html__('View', 'risehand-addons'),
				'view_item' =>    esc_html__('View Footer', 'risehand-addons'),
				'search_items' =>   esc_html__('Search Footer', 'risehand-addons'),
				'not_found' =>   esc_html__('No Footer found', 'risehand-addons'),
				'not_found_in_trash' =>  esc_html__('No Footer found in Trash', 'risehand-addons'),
				'parent' =>  esc_html__('Parent Footer', 'risehand-addons')
			),
			'public' => true,
			'show_in_rest' => true,
			'menu_position' => 15,
			'supports' =>
			array( 'title', 
			'thumbnail' , 'editor' , 'page-attributes' ),
			'taxonomies' => array( '' ),
			'show_in_menu'        => 'risehand',
			'show_in_nav_menus'   => false,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-tagcloud',
			'has_archive' => false,
			'capability_type'    => 'post',
			'hierarchical'          => true,
		)
	);
} 