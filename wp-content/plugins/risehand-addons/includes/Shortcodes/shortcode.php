<?php
/*
** ====================================
**  Risehand Search Popup
** ====================================
*/
add_action('risehand_search_popup_output', 'risehand_search_popup');
function risehand_search_popup() { 
    ?>
    <div id="search-popup" class="search-popup"> <div class="side-menu__block-overlay custom-cursor__overlay search_coursor"> <div class="cursor"></div> <div class="cursor-follower"></div> </div> <div class="sea_close_btn d_flex"><i class="risehand-cross1"></i></div> <div class="popup-inner"> <div class="search-form"> <form role="search" method="get" action="<?php echo esc_url(home_url( '/' )); ?>"> <input type="search" class="search" placeholder="<?php echo esc_attr__( 'Search...', 'risehand-addons' ); ?>" value="<?php echo get_search_query() ?>" name="s" title="Search" /> <button type="submit" class="sch_btn"> <i class="risehand-search1"></i></button> </form> </div> <?php $tag_outputs = get_tags(array('hide_empty' => true)); $get_the_categorys = get_categories(array( 'hide_empty' => true )); if(!empty($tag_outputs)): ?> <div class="tag_showcase"> <ul> <li class="title_no_a_18"><?php echo esc_html__('Tags : ' , 'risehand-addons'); ?></li> <?php foreach ($tag_outputs as $tag_output):?> <li> <a class="btn_default two" href="<?php echo get_term_link($tag_output); ?>"><?php echo esc_html('#' , 'risehand-addons');?> <?php echo esc_attr($tag_output->name); ?></a></li> <?php endforeach; ?> </ul> </div> <?php endif; ?> <?php if(!empty($get_the_categorys)): ?> <div class="category_showcase"> <ul> <li class="title_no_a_18"><?php echo esc_html__('Categories :' , 'risehand-addons'); ?></li> <?php foreach ($get_the_categorys as $get_the_category):?> <li> <a class="btn_default two" href="<?php echo get_term_link($get_the_category); ?>"><?php echo esc_html('#' , 'risehand-addons');?><?php echo esc_attr($get_the_category->name); ?></a><li> <?php endforeach; ?> </ul> </div> <?php endif; ?> </div> </div>
    <?php 
} 
/*
** ====================================
**  Risehand Blog Single  Share
** ====================================
*/
function risehand_share_options_one(){ ?>
<div class="share_socail d-flex align-items-center"> <div class="title"><?php echo esc_html__('Share News' , 'risehand-addons');?></div> <button class="m_icon" data-toggle="tooltip" data-placement="right" title="facebook" data-sharer="facebook" data-title="<?php the_title(); ?>" data-url="<?php the_permalink(); ?>"> <i class="fab fa-facebook-f"></i><small><?php echo esc_html__('Facebook' , 'risehand-addons');?></small> </button> <button class="m_icon" data-toggle="tooltip" data-placement="right" title="twitter" data-sharer="twitter" data-title="<?php the_title(); ?>" data-url="<?php the_permalink(); ?>"> <i class="fab fa-twitter"></i><small><?php echo esc_html__('Twitter' , 'risehand-addons');?></small> </button> <button class="m_icon" data-toggle="tooltip" data-placement="right" title="whatsapp" data-sharer="whatsapp" data-title="<?php the_title(); ?>" data-url="<?php the_permalink(); ?>"> <i class="fab fa-whatsapp"></i><small><?php echo esc_html__('Whatsapp' , 'risehand-addons');?></small> </button> <button class="m_icon" data-toggle="tooltip" data-placement="right" title="telegram" data-sharer="telegram" data-title="<?php the_title(); ?>" data-url="<?php the_permalink(); ?>" data-to="+44555-03564"> <i class="fab fa-telegram"></i><small><?php echo esc_html__('Telegram' , 'risehand-addons');?></small> </button> <button class="m_icon" data-toggle="tooltip" data-placement="right" title="skype" data-sharer="skype" data-url="<?php the_permalink(); ?>" data-title="<?php the_title(); ?>"> <i class="fab fa-skype"></i><small><?php echo esc_html__('Skype' , 'risehand-addons');?></small> </button></div>
<?php
}

/*
** ====================================
**  Risehand Blog Single Authour Share
** ====================================
*/
function risehand_share_options_authour(){ ?>
    <div class="share_socail d-flex align-items-center"> <button class="m_icon" data-toggle="tooltip" data-placement="right" title="facebook" data-sharer="facebook" data-title="<?php the_author(get_the_author_meta('ID')); ?>" data-url="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"> <i class="fab fa-facebook-f"></i> </button> <button class="m_icon" data-toggle="tooltip" data-placement="right" title="twitter" data-sharer="twitter" data-title="<?php the_author(get_the_author_meta('ID')); ?>" data-url="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"> <i class="fab fa-twitter"></i> </button> <button class="m_icon" data-toggle="tooltip" data-placement="right" title="whatsapp" data-sharer="whatsapp" data-title="<?php the_author(get_the_author_meta('ID')); ?>" data-url="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"> <i class="fab fa-whatsapp"></i> </button> <button class="m_icon" data-toggle="tooltip" data-placement="right" title="telegram" data-sharer="telegram" data-title="<?php the_author(get_the_author_meta('ID')); ?>" data-url="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" data-to="+44555-03564"> <i class="fab fa-telegram"></i> </button> <button class="m_icon" data-toggle="tooltip" data-placement="right" title="skype" data-sharer="skype" data-url="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" data-title="<?php the_author(get_the_author_meta('ID')); ?>"> <i class="fab fa-skype"></i> </button> </div>
    <?php
}  
/*
** ====================================
**  Risehand Elementor or wpbakery content
** ====================================
*/
// Define your custom function
function risehand_display_custom_content() {
    $post_id = get_the_ID(); 
    // Check if Elementor content exists
    $elementor_content = get_post_meta($post_id, '_elementor_post_meta_key', true); 
    // Check if WPBakery content exists
    $wpbakery_content = get_post_meta($post_id, '_wpb_post_custom', true); 
    // Display Elementor content if available, otherwise display WPBakery content
    if (!empty($elementor_content)) {
        // Display Elementor content
        echo do_shortcode($elementor_content);
    } elseif (!empty($wpbakery_content)) {
        // Display WPBakery content
        echo apply_filters('the_content', $wpbakery_content);
    }  
} 
// Create a custom action hook
add_action('get_risehand_display_custom_content', 'risehand_display_custom_content');

/*
** ====================================
**  Custom Post Type Slug
** ====================================
*/
 // Change custom post type service
 function service_team_post_type_slug( $args, $post_type ) {
    $slug_service = get_addons_risehand_option('slug_service');
    if ( 'service' === $post_type ) {
        $args['rewrite']['slug'] =   $slug_service; // Change to your desired slug
    }
    return $args;
}
add_filter( 'register_post_type_args', 'service_team_post_type_slug', 10, 2 );
function service_team_category_slug( $args, $taxonomy ) {
    $slug_service_cat = get_addons_risehand_option('slug_service_cat');
    if ( 'service_category' === $taxonomy ) {
        $args['rewrite']['slug'] = $slug_service_cat; // Change to your desired slug
    }
    return $args;
}
add_filter( 'register_taxonomy_args', 'service_team_category_slug', 10, 2 );
 // Change custom post type service end
 // Change custom post type portfolio
 function portfolio_team_post_type_slug( $args, $post_type ) {
    $slug_portfolio = get_addons_risehand_option('slug_portfolio');
    if ( 'portfolio' === $post_type ) {
        $args['rewrite']['slug'] =   $slug_portfolio; // Change to your desired slug
    }
    return $args;
}
add_filter( 'register_post_type_args', 'portfolio_team_post_type_slug', 10, 2 );
function portfolio_team_category_slug( $args, $taxonomy ) {
    $slug_portfolio_cat = get_addons_risehand_option('slug_portfolio_cat');
    if ( 'portfolio_category' === $taxonomy ) {
        $args['rewrite']['slug'] = $slug_portfolio_cat; // Change to your desired slug
    }
    return $args;
}
add_filter( 'register_taxonomy_args', 'portfolio_team_category_slug', 10, 2 );
 // Change custom post type portfolio end
  // Change custom post type volunteer
  function volunteer_team_post_type_slug( $args, $post_type ) {
    $slug_volunteer = get_addons_risehand_option('slug_volunteer');
    if ( 'volunteer' === $post_type ) {
        $args['rewrite']['slug'] =   $slug_volunteer; // Change to your desired slug
    }
    return $args;
}
add_filter( 'register_post_type_args', 'volunteer_team_post_type_slug', 10, 2 );
function volunteer_team_category_slug( $args, $taxonomy ) {
    $slug_volunteer_cat = get_addons_risehand_option('slug_volunteer_cat');
    if ( 'volunteer_category' === $taxonomy ) {
        $args['rewrite']['slug'] = $slug_volunteer_cat; // Change to your desired slug
    }
    return $args;
}
add_filter( 'register_taxonomy_args', 'volunteer_team_category_slug', 10, 2 );
 // Change custom post type volunteer end 
 
function events_location_slug( $args, $taxonomy ) {
    $slug_events_location = get_addons_risehand_option('slug_events_location');
    if ( 'tribe_events_cat' === $taxonomy ) {
        $args['rewrite']['slug'] = $slug_events_location; // Change to your desired slug
    }
    return $args;
}
add_filter( 'register_taxonomy_args', 'events_location_slug', 10, 2 );
 // Change custom post type events end

 
