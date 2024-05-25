<?php
 
/*
** ===================
** Risehand Service
** Post type : Service;
** version: 1.0;
** Authour : Steeltheme;
** ===================
*/
add_action('init', 'service_custom_post_type');  
add_action('init', 'service_custom_taxonomies'); 
function service_custom_post_type() {
	register_post_type( 'service',
		array(
		'labels' => array(
		'name' =>  esc_html_x('Service', 'Post Type General Name', 'risehand-addons') ,
		'singular_name' =>  esc_html_x('Service ', 'Post Type General Name', 'risehand-addons') ,
		'add_new' =>  esc_html_x('Add New', 'Post Type General Name', 'risehand-addons') ,
		'add_new_item' =>  esc_html_x('Add New Service', 'Post Type General Name', 'risehand-addons') ,
		'edit' =>  esc_html_x('Edit Service ', 'Post Type General Name', 'risehand-addons') ,
		'edit_item' =>  esc_html_x('Edit Service', 'Post Type General Name', 'risehand-addons') ,
		'new_item' =>  esc_html_x('New Service', 'Post Type General Name', 'risehand-addons') ,
		'view' =>  esc_html_x('View Service', 'Post Type General Name', 'risehand-addons') ,
		'view_item' =>  esc_html_x('View Service', 'Post Type General Name', 'risehand-addons') ,
		'search_items' =>    esc_html_x('Search Service', 'Post Type General Name', 'risehand-addons') ,
		'not_found' =>    esc_html_x('No Service found', 'Post Type General Name', 'risehand-addons') ,
		'not_found_in_trash' =>    esc_html_x('No Service found in Trash', 'Post Type General Name', 'risehand-addons') ,
		'parent' =>   esc_html_x('Parent Service', 'Post Type General Name', 'risehand-addons') ,
		),
		'public' => true,
		'show_in_rest' => true,
		'supports' => 	array( 'title',  'thumbnail' , 'editor' , 'page-attributes' , 'excerpt' , 'comments'),
		'taxonomies' => array( '' ),
		'show_in_nav_menus'   => true,
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-admin-site-alt3',
		'has_archive' => false,
		'capability_type'    => 'post',
		'hierarchical'          => true,
		)
	);
}
//add new taxonomy hierarchical
function service_custom_taxonomies() {
	$labels = array(
			'name' =>     esc_html_x('Service Categories', 'Post Type General Name', 'risehand-addons') ,
			'singular_name' =>    esc_html_x('Category', 'Post Type General Name', 'risehand-addons') ,
			'search_items' =>   esc_html_x('Search Category', 'Post Type General Name', 'risehand-addons') ,
			'all_items' =>    esc_html_x('All Category', 'Post Type General Name', 'risehand-addons') ,
			'parent_item' =>  esc_html_x('Parent Category', 'Post Type General Name', 'risehand-addons') ,
			'parent_item_colon' =>  esc_html_x('Parent Category:', 'Post Type General Name', 'risehand-addons') ,
			'edit_item' =>  esc_html_x('Edit Categoryo', 'Post Type General Name', 'risehand-addons') ,
			'update_item' =>  esc_html_x('Update Category', 'Post Type General Name', 'risehand-addons') ,
			'add_new_item' =>  esc_html_x('Add New  Category', 'Post Type General Name', 'risehand-addons') ,
			'new_item_name' =>  esc_html_x('New Category Name', 'Post Type General Name', 'risehand-addons') ,
			'menu_name' =>   esc_html_x('Categories', 'Post Type General Name', 'risehand-addons') 
		);
		$args = array(
			'hierarchical' => true,
			'labels' => $labels,
			'show_ui' => true,
			'show_admin_column' => true,
			'query_var' => true,
			'public'             => true,
			'publicly_queryable' => true,
			'show_in_rest' => true,
			'rewrite' => array( 'slug' => 'service_category' )
		);
	register_taxonomy('service_category', array('service'), $args);
}
//add new taxonomy NOT hierarchical
/*
** ============================== 
** risehand_get_service_categories
** ============================== 
*/
if (!function_exists('risehand_get_service_categories')):
    function risehand_get_service_categories() {
        $options = array();
            $taxonomy = 'service_category';
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
