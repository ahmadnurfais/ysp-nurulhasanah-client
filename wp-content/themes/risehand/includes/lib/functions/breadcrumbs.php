<?php
/*
** ============================== 
** risehand Breadcrumb File
** ==============================
*/
add_action('risehand_custom_breadcrumb',  'risehand_breadcrumb'); 
function risehand_breadcrumb() { 
global $post;
$showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
$delimiter = ''; // delimiter between crumbs
$showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
$before = '<li class="active">'; // tag before the current crumb
$after = '</li>'; // tag after the current crumb
$wp_the_query   = $GLOBALS['wp_the_query'];
$queried_object = $wp_the_query->get_queried_object();
$allowed_tags = wp_kses_allowed_html('post');
$homeLink = esc_url( home_url());
$bdhome= '';   
 
if (is_home() || is_front_page()) {
    if ($showOnHome == 1) {
        echo '<ul class="breadcrumb"><li><a href="' . $homeLink . '">' . esc_html__('Home', 'risehand') . '</a></li></ul>';
    }
} 
if (!is_front_page()) {
    echo '<ul class="breadcrumb d_flex m-auto"><li><a href="' . $homeLink . '">' . esc_html__('Home', 'risehand')  . '</a></li>'; 
    if (is_category()) {
        global $wp_query;
        $cat_obj = $wp_query->get_queried_object();
        $thisCat = $cat_obj->term_id;
        $thisCat = get_category($thisCat);
        $parentCat = get_category($thisCat->parent);

        if ($thisCat->parent != 0) {
            echo html_entity_decode(esc_html($before . get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' ') . $after));
        }

        echo html_entity_decode(esc_html($before . ' ' . single_cat_title('', false) . '' . $after));
    } elseif (is_search()) {
        echo html_entity_decode($before . esc_html__('Search results for "', 'risehand') . get_search_query() . '"' . $after);
    } elseif (is_day()) {
        echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> ' . $delimiter . ' ';
        echo '<li><a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time('F') . '</a></li> ' . $delimiter . ' ';
        echo html_entity_decode(esc_html($before . get_the_time('d') . $after));
    } elseif (is_month()) {
        echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> ' . $delimiter . ' ';
        echo html_entity_decode(esc_html($before . get_the_time('F') . $after));
    } elseif (is_year()) {
        echo html_entity_decode(esc_html($before . get_the_time('Y') . $after));
    } elseif (is_tag()) {
        echo html_entity_decode(esc_html($before . '"' . single_tag_title('', false) . '"' . $after));
    } elseif (is_author()) {
        global $author;
        $userdata = get_userdata($author);
        echo html_entity_decode(esc_html($before . '"' . $userdata->display_name . '"' . $after));
    } elseif (is_404()) {
        echo html_entity_decode($before . esc_html__('Error 404', 'risehand') . $after);
    } 
    elseif (is_page() && !$post->post_parent) {
        if ($showCurrent == 1) {
            echo html_entity_decode(esc_html($before . get_the_title() . $after));
        }
    } 
    elseif (is_page() && $post->post_parent) {
        $parent_id  = $post->post_parent;
        $breadcrumbs = array();

        while ($parent_id) {
            $page = get_page($parent_id);
            $breadcrumbs[] = '<li><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
            $parent_id  = $page->post_parent;
        }

        $breadcrumbs = array_reverse($breadcrumbs);

        foreach ($breadcrumbs as $crumb) {
            echo html_entity_decode(esc_html($crumb . ' ' . $delimiter . ' '));
        }

        if ($showCurrent == 1) {
            echo html_entity_decode(esc_html($before . get_the_title() . $after));
        }
    }
    elseif (is_singular('post')) {
        $cat = get_the_category();
        $cat = $cat[0];
        $cats = get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');

        if ($showCurrent == 0) {
            $cats = preg_replace("/^(.+)\s$delimiter\s$/", "$1", $cats);
        }

        echo '<li>' . $cats . '</li> ';

        if ($showCurrent == 1) {
            echo html_entity_decode(esc_html($before . get_the_title() . $after));
        }
    }
    
    elseif (is_singular('service') || is_singular('volunteer') || is_singular('portfolio')) {
        $post_type = get_post_type();
        $taxonomy = $post_type . '_category'; // Assuming the taxonomy is named after the post type
        
        // Get the categories for the current post
        $categories = get_the_terms(get_the_ID(), $taxonomy);
        
        if (!empty($categories)) {
        // Get the first category (assuming it's the most relevant one)
        $category = $categories[0];
        
        // Get the ancestors of the current category
        $ancestors = get_ancestors($category->term_id, $taxonomy);
        
        // Display the ancestors
        foreach ($ancestors as $ancestor_id) {
        $ancestor = get_term($ancestor_id, $taxonomy);
        echo '<li><a href="' . esc_url(get_term_link($ancestor)) . '">' . esc_html($ancestor->name) . '</a></li>';
        }
        
        // Display the current category
        echo '<li><a href="' . esc_url(get_term_link($category)) . '">' . esc_html($category->name) . '</a></li>';
        } else {
        // If no category is selected, display the default post type name
            if($post_type == 'service'){
                echo '<li>' . esc_html('Service' , 'risehand') . '</li>';
            }elseif ($post_type == 'portfolio'){
                echo '<li>' . esc_html('Portfolio' , 'risehand') . '</li>';
            }else{
                echo '<li>' . esc_html('Volunteer' , 'risehand') . '</li>';
            }
        }
        
        if ($showCurrent == 1) {
        echo '<li>' . get_the_title() . '</li>';
        }
        }
         elseif (is_tax('service_category') || is_tax('volunteer_category')|| is_tax('portfolio_category') || is_tax('give_category')) {
        // Set the variables for this section
        $term_object = get_term($queried_object);
        $taxonomy = $term_object->taxonomy;
        $term_id = $term_object->term_id;
        $term_name = $term_object->name;
        $term_parent = $term_object->parent;
        $taxonomy_object = get_taxonomy($taxonomy);
        $current_term_link = $before . $term_name . $after;
        $parent_term_string = '';
    
        // Define the $link variable
        $link = '<li><a href="%1$s">%2$s</a></li>';
    
        if (0 !== $term_parent) {
            // Get all the current term ancestors
            $parent_term_links = [];
            while ($term_parent) {
                $term = get_term($term_parent, $taxonomy);
                $parent_term_links[] = sprintf($link, esc_url(get_term_link($term)), $term->name);
                $term_parent = $term->parent;
            }
    
            $parent_term_links = array_reverse($parent_term_links);
            $parent_term_string = implode($parent_term_links);
        }
    
        if ($parent_term_string) {
            echo wp_kses($parent_term_string . $current_term_link, $allowed_tags);
        } else {
            echo wp_kses($current_term_link, $allowed_tags);
        }
    }
    // Events
    elseif(is_post_type_archive('tribe_events')){ 
        $tribe_events_name = get_risehand_option('tribe_events_name'); 
        echo '<li><a href="' . get_post_type_archive_link('tribe_events') . '">' . esc_attr($tribe_events_name) . '</a></li>';
    }
    // Events single
    elseif (is_singular('tribe_events')) {
        $post_type = get_post_type();
        if ($post_type === 'tribe_events') {
        // Get the event locations for the current post
        $event_locations = get_the_terms(get_the_ID(), 'tribe_events_cat');
        
        if (!empty($event_locations)) {
        // Sort the locations by term ID to ensure proper parent-child hierarchy
        usort($event_locations, function($a, $b) { return $a->term_id - $b->term_id; });
        
        // Get the first location which will be the child
        $location = $event_locations[0];
        
        // Get the parent locations for the current location
        $parent_locations = get_ancestors($location->term_id, 'tribe_events_cat');
        
        // Display parent locations with links
        if (!empty($parent_locations)) {
        foreach ($parent_locations as $parent_id) {
        $parent_location = get_term($parent_id, 'tribe_events_cat');
        echo '<li><a href="' . esc_url(get_term_link($parent_location)) . '">' . esc_html($parent_location->name) . '</a></li>';
        }
        }
        
        // Display the current location
        echo '<li><a href="' . esc_url(get_term_link($location)) . '">' . esc_html($location->name) . '</a></li>';
        } else {
        // If no location is selected, display the default 'Event' text
        echo '<li><span>' . esc_html__('Event', 'risehand') . '</span></li>';
        }
        }
        
        if ($showCurrent == 1) {
        echo html_entity_decode(esc_html($before . get_the_title() . $after));
        }
        }elseif(is_tax('tribe_events_cat')) {
        // Set the variables for this section
        $term_object = get_term($queried_object);
        $taxonomy = $term_object->taxonomy;
        $term_id = $term_object->term_id;
        $term_name = $term_object->name;
        $term_parent = $term_object->parent;
        $taxonomy_object = get_taxonomy($taxonomy);
        $current_term_link = $before . $term_name . $after;
        $parent_term_string = '';

        // Define the $link variable
        $link = '<li><a href="%1$s">%2$s</a></li>';

        if (0 !== $term_parent) {
            // Get all the current term ancestors
            $parent_term_links = [];
            while ($term_parent) {
                $term = get_term($term_parent, $taxonomy);
                $parent_term_links[] = sprintf($link, esc_url(get_term_link($term)), $term->name);
                $term_parent = $term->parent;
            }

            $parent_term_links = array_reverse($parent_term_links);
            $parent_term_string = implode($parent_term_links);
        }

        if ($parent_term_string) {
            echo wp_kses($parent_term_string . $current_term_link, $allowed_tags);
        } else {
            echo wp_kses($current_term_link, $allowed_tags);
        }
    }
    // product
    elseif (is_post_type_archive('product')) {
        $shop_page_id = wc_get_page_id('shop');
        $shop_page_name = get_the_title($shop_page_id);
        echo '<li>' . $shop_page_name . '</li>';
    } elseif (is_tax('product_cat') || is_tax('product_tag') || is_tax('brand')) {
        $queried_object = get_queried_object();
        $term_id = $queried_object->term_id;
        $taxonomy = $queried_object->taxonomy;
        $term_parents = get_ancestors($term_id, $taxonomy);
        $term_parents = array_reverse($term_parents); 
        foreach ($term_parents as $parent_id) {
            $parent_term = get_term($parent_id, $taxonomy);
            echo '<li class="active"><a href="' . get_term_link($parent_term) . '">' . $parent_term->name . '</a></li>';
        }

        echo '<li class="active">' . single_term_title('', false) . '</li>';
    } elseif (is_singular('product')) {
        $categories = get_the_terms($post->ID, 'product_cat');

        if (!is_wp_error($categories) && $categories) {
            $category = $categories[0];
            $category_parents = get_ancestors($category->term_id, 'product_cat');

            if (!is_wp_error($category_parents) && $category_parents) {
                $category_parents = array_reverse($category_parents);

                foreach ($category_parents as $parent_id) {
                    $parent = get_term($parent_id, 'product_cat');

                    if (!is_wp_error($parent)) {
                        echo '<li class="active"><a href="' . get_term_link($parent) . '">' . $parent->name . '</a></li>';
                    }
                }
            }

            echo '<li class="active"><a href="' . get_term_link($category) . '">' . $category->name . '</a></li>';
        }

        echo '<li class="active">' . esc_html(get_the_title()) . '</li>';
    } elseif (class_exists('Give')) {
        // Check if GiveWP plugin is active 
        if (is_singular('give_forms')) {
            // Breadcrumb for single GiveWP page
            echo '<li><a href="' . get_post_type_archive_link('give_forms') . '">' . esc_html__('Donation', 'risehand') . '</a></li>';

            if ($showCurrent == 1) {
                echo html_entity_decode(esc_html($before . get_the_title() . $after));
            }
        } elseif (is_post_type_archive('give_forms')) {
            // Breadcrumb for GiveWP archive
            echo '<li><a href="' . get_post_type_archive_link('give_forms') . '">' . esc_html__('Donation', 'risehand') . '</a></li>';
        }
    } elseif (is_attachment()) {
        $parent = get_post($post->post_parent);
        $cat = get_the_category($parent->ID);
        $cat = $cat;
        echo '<li><a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a></li> ' . $delimiter . ' ';

        if ($showCurrent == 1) {
            echo html_entity_decode(esc_html($before . get_the_title() . $after));
        }
    } 
   

    if (is_home()) {
        global $post;
        $page_for_posts_id = get_option('page_for_posts');
        echo '<li>';

        if ($page_for_posts_id) {
            $post = get_page($page_for_posts_id);

            setup_postdata($post);
            the_title();
            rewind_posts();
        }

        echo '</li>';
    }

    if (get_query_var('paged')) {
        if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) {
            echo '<li>' . esc_html__('Page', 'risehand') . '' . get_query_var('paged') . '</li> ';
        }
    }

    echo '</ul>';
}
 
} 