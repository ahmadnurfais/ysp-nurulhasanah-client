<?php
/*
** ============================== 
**   Risehand Header File
** ==============================
*/
 
add_action('risehand_get_header', 'risehand_default_header');
function risehand_default_header() {
    if (is_page_template('template-empty.php') || is_404()  || is_singular('sliders') || is_singular('header') || is_singular('footer') || is_singular('mega_menu')) {
        return false;
    }   
    $header_sticky = get_risehand_option('header_sticky'); 
    $header_custom_enables = get_risehand_option('header_custom_enables'); 
    $header_id =  get_risehand_option('header_custom_style');
	if(get_post_meta(get_the_ID() , 'custom_header', true) && !is_post_type_archive('product') && !is_tax('product_cat') && !is_tax() && !is_tag()  && !is_category()):
		$header_id = get_post_meta(get_the_ID() , 'header_settings_meta', true);
	elseif(is_post_type_archive('product') || is_home() || is_tax('product_cat') || is_tax()|| is_tag() || is_category()):
		$header_id =  get_risehand_option('header_archive_style'); 
	endif; 
    $sticky_header_select_field =  get_risehand_option('header_sticky_custom_style');
    if(get_post_meta(get_the_ID() , 'sticky_custom_header', true) && !is_post_type_archive('product') && !is_tax('product_cat') && !is_tax() && !is_tag()  && !is_category()):
		$sticky_header_select_field = get_post_meta(get_the_ID() , 'sticky_header_settings_meta', true);
	elseif(is_post_type_archive('product')  || is_home()  || is_tax('product_cat') || is_tax()|| is_tag() || is_category()):
		$sticky_header_select_field =  get_risehand_option('stickyheader_archive_style'); 
	endif;
    if ($header_custom_enables == true) {  
    ?>
    <div class="header_area" id="header_contents">
    <?php echo do_shortcode('[risehand-header id="' . $header_id . '"]'); ?>
    </div> 
    <?php 
    if ($header_sticky == true || get_post_meta(get_the_ID() , 'sticky_custom_header', true)):
    ?>  
        <div class="sticky_header_area sticky_header_content" id="<?php echo esc_attr($sticky_header_select_field); ?>">
         <?php  echo do_shortcode('[risehand-sticky-header id="' . $sticky_header_select_field . '"]'); ?>
        </div>  
        <?php
        endif;
    } else {
        $blog_title = get_bloginfo('name');
        ?>
        <header class="default_header"  id="header_contents">
            <div class="auto-container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-3 col-md-8 col-sm-8 col-xs-8 logo_col">
                        <div class="logo_box">
                            <a href="<?php echo esc_url(home_url()); ?>" class="logo text">
                                <?php echo esc_attr($blog_title); ?>
                                <h2 class="site-description"><?php bloginfo('description'); ?></h2>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-4 col-sm-4 col-xs-4 men_col">
                        <div class="navbar_togglers hamburger_menu">
                           <i class="risehand-menu"></i>
                        </div>
                        <div class="navbar_content">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary',
                                'container' => false,
                                'menu_class' => 'navbar_nav',
                                'fallback_cb' => 'risehand_navwalker::fallback',
                                'walker' => new \risehand_navwalker(),
                            ));
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <?php
    }
}
?>
