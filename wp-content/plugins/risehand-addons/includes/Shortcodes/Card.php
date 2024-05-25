<?php
/**
 *  Post cards file
 *
 * @package Risehand
 */
/*===============Portfolio Catefory Start=================*/
add_action('get_risehand_portfolio_cat', 'risehand_portfolio_cat'); 
function risehand_portfolio_cat() {
    $term_list = wp_get_post_terms(get_the_id(), 'portfolio_category', array("fields" => "all")); 
    if (!empty($term_list)) :
        ?>
        <p class="mb_0">
            <?php
            foreach ($term_list as $term) {
                $term_link = get_term_link($term);
                if (!is_wp_error($term_link)) {
                    echo '<a href="' . esc_url($term_link) . '">' . esc_html($term->name) . '</a>';
                    if ($term !== end($term_list)) {
                        echo ', ';
                    }
                }
            }
            ?>
        </p>
        <?php
    endif;
}

/*===============Portfolio Catefory Start=================*/
add_action('get_risehand_give_forms_category', 'risehand_give_forms_category'); 
function risehand_give_forms_category() {
    $term_list = wp_get_post_terms(get_the_id(), 'give_category', array("fields" => "all")); 
    if (!empty($term_list)) :
        ?>
        <p class="catdo">
            <?php
            foreach ($term_list as $term) {
                $term_link = get_term_link($term);
                if (!is_wp_error($term_link)) {
                    echo '<a href="' . esc_url($term_link) . '">' . esc_html($term->name) . '</a>';
                    if ($term !== end($term_list)) {
                        echo ', ';
                    }
                }
            }
            ?>
        </p>
        <?php
    endif;
} 
/*===============Portfolio Catefory End=================*/
/*===============Service Catefory Start=================*/
add_action('get_risehand_service_cat', 'risehand_service_cat'); 
function risehand_service_cat() {
    $term_list = wp_get_post_terms(get_the_id(), 'service_category', array("fields" => "all")); 
    if (!empty($term_list)) :
        ?>
        <p>
            <?php
            foreach ($term_list as $term) {
                $term_link = get_term_link($term);
                if (!is_wp_error($term_link)) {
                    echo '<a href="' . esc_url($term_link) . '">' . esc_html($term->name) . '</a>';
                    if ($term !== end($term_list)) {
                        echo ', ';
                    }
                }
            }
            ?>
        </p>
        <?php
    endif;
}
/*===============Service Catefory End=================*/
/*===============blog cards function Start=================*/
/*-------actions-------*/
add_action('get_risehand_blog_card_1' , 'risehand_blog_card_1');
add_action('get_risehand_blog_card_2' , 'risehand_blog_card_2');
add_action('get_risehand_blog_card_4' , 'risehand_blog_card_4');
add_action('get_risehand_blog_card_6' , 'risehand_blog_card_6');
add_action('get_risehand_blog_card_7' , 'risehand_blog_card_7');
/*------functions-------*/
/*------style 1 start-------*/
function risehand_blog_card_1(){ 
    $blog_cat_enable = get_addons_risehand_option('blog_cat_enable');
    $blog_excerpt_enable = get_addons_risehand_option('blog_excerpt_enable');
    $blog_excerpt_count = get_addons_risehand_option('blog_excerpt_count');
    $blog_date_enable = get_addons_risehand_option('blog_date_enable');
    $the_excerpt = wp_trim_words(get_the_excerpt(), $blog_excerpt_count);  
    $blog_comment_enable = get_addons_risehand_option('blog_comment_enable');
?>
<div class="blog-style_1 mb_40 <?php if(has_post_thumbnail()): ?>has_images<?php else: ?>no_images<?php endif; ?>"> <?php if (has_post_thumbnail()): ?> <div class="image-box img_obj_fit_center"> <a href="<?php echo esc_url(get_permalink()); ?>" class="img_link"> <?php the_post_thumbnail('risehand-image-370-270 trans'); ?> </a> </div> <?php endif; ?> <div class="content_box_outer"> <div class="content_box trans"> <?php if($blog_cat_enable == true): ?> <?php do_action('risehand_theme_blog_category'); ?> <?php endif; ?> <?php if($blog_date_enable == true || $blog_comment_enable == true): ?> <div class="d-flex"> <?php if($blog_date_enable == true): ?> <?php do_action('risehand_theme_blog_time'); ?> <?php endif; ?> <?php if($blog_comment_enable == true): ?> <?php do_action('risehand_theme_blog_comments'); ?> <?php endif; ?> </div> <?php endif; ?> <?php the_title( '<div class="title_22 mb_15"><a href="' . esc_url(get_permalink()) . '" class="trim-3">', '</a></div>' ); ?> <?php if(!empty($the_excerpt) && $blog_excerpt_enable == true): ?> <p class="mb_20 des_cription"><?php echo esc_attr($the_excerpt); ?></p> <?php endif; ?> <div> <a class="text_btn" href="<?php echo esc_url(get_permalink()); ?>"> <small><?php echo esc_html__('Read more' , 'risehand-addons'); ?></small> </a> </div> </div> </div></div>
<?php
}
/*------style 1 end-------*/
/*------style 2 start-------*/
function risehand_blog_card_2(){
    $blog_cat_enable = get_addons_risehand_option('blog_cat_enable');
    $blog_excerpt_enable = get_addons_risehand_option('blog_excerpt_enable');
    $blog_excerpt_count = get_addons_risehand_option('blog_excerpt_count');
    $blog_date_enable = get_addons_risehand_option('blog_date_enable');
    $the_excerpt = wp_trim_words(get_the_excerpt(), $blog_excerpt_count);  
    $blog_comment_enable = get_addons_risehand_option('blog_comment_enable');
    ?>
   <div class="blog-style_2 mb_40 <?php if(has_post_thumbnail()): ?>has_images d_flex align-items-center<?php else: ?>no_images<?php endif; ?>"> <?php if (has_post_thumbnail()): ?> <div class="image-box img_obj_fit_center"> <a href="<?php echo esc_url(get_permalink()); ?>" class="img_link"> <?php the_post_thumbnail('risehand-image-370-270 trans'); ?> </a> <?php if($blog_cat_enable == true): ?> <?php do_action('risehand_theme_blog_category'); ?> <?php endif; ?> </div> <?php endif; ?> <div class="content_box trans"> <?php if($blog_date_enable == true || $blog_comment_enable == true): ?> <div class="d-flex"> <?php if($blog_date_enable == true): ?> <?php do_action('risehand_theme_blog_time'); ?> <?php endif; ?> <?php if($blog_comment_enable == true): ?> <?php do_action('risehand_theme_blog_comments'); ?> <?php endif; ?> </div> <?php endif; ?> <?php the_title( '<div class="title_22 mb_15"><a href="' . esc_url(get_permalink()) . '" class="trim-3">', '</a></div>' ); ?> <?php if(!empty($the_excerpt) && $blog_excerpt_enable == true): ?> <p class="mb_20 des_cription"><?php echo esc_attr($the_excerpt); ?></p> <?php endif; ?> <div> <a class="text_btn" href="<?php echo esc_url(get_permalink()); ?>"> <small><?php echo esc_html__('Read more' , 'risehand-addons'); ?></small> </a> </div> </div> </div>
    <?php
}
/*------style 2 end =-------*/ 
/*------style 4 start-------*/
function risehand_blog_card_4(){
    $blog_cat_enable = get_addons_risehand_option('blog_cat_enable');
    $blog_excerpt_enable = get_addons_risehand_option('blog_excerpt_enable');
    $blog_excerpt_count = get_addons_risehand_option('blog_excerpt_count');
    $blog_date_enable = get_addons_risehand_option('blog_date_enable');
    $the_excerpt = wp_trim_words(get_the_excerpt(), $blog_excerpt_count);  
    $blog_comment_enable = get_addons_risehand_option('blog_comment_enable');
    ?>
   <div class="blog-style_4 trans mb_40 <?php if(has_post_thumbnail()): ?>has_images <?php else: ?>no_images<?php endif; ?>"> <?php if (has_post_thumbnail()): ?> <div class="image-box img_obj_fit_center"> <a href="<?php echo esc_url(get_permalink()); ?>" class="img_link"> <?php the_post_thumbnail('risehand-image-370-270 trans'); ?> </a> </div> <?php endif; ?> <div class="content_box trans"> <?php if($blog_cat_enable == true): ?> <?php do_action('risehand_theme_blog_category'); ?> <?php endif; ?> <?php if($blog_date_enable == true || $blog_comment_enable == true): ?> <div class="d-flex"> <?php if($blog_date_enable == true): ?> <?php do_action('risehand_theme_blog_time'); ?> <?php endif; ?> <?php if($blog_comment_enable == true): ?> <?php do_action('risehand_theme_blog_comments'); ?> <?php endif; ?> </div> <?php endif; ?> <?php the_title( '<div class="title_22 mb_10"><a href="' . esc_url(get_permalink()) . '" class="trim-3">', '</a></div>' ); ?> <?php if(!empty($the_excerpt) && $blog_excerpt_enable == true): ?> <p class="des_cription mb_15"><?php echo esc_attr($the_excerpt); ?></p> <?php endif; ?> <div> <a class="text_btn" href="<?php echo esc_url(get_permalink()); ?>"> <small><?php echo esc_html__('Read more' , 'risehand-addons'); ?></small> </a> </div> </div> </div>
    <?php
}
/*------style 4 end =-------*/

/*------style 6 start-------*/
function risehand_blog_card_6(){
    $blog_cat_enable = get_addons_risehand_option('blog_cat_enable');
    $blog_excerpt_enable = get_addons_risehand_option('blog_excerpt_enable');
    $blog_excerpt_count = get_addons_risehand_option('blog_excerpt_count');
    $blog_date_enable = get_addons_risehand_option('blog_date_enable');
    $the_excerpt = wp_trim_words(get_the_excerpt(), $blog_excerpt_count);  
    $blog_comment_enable = get_addons_risehand_option('blog_comment_enable');
    ?>
 <div class="blog-style_6 trans mb_40 <?php if(has_post_thumbnail()): ?>has_images <?php else: ?>no_images<?php endif; ?>"> <?php if (has_post_thumbnail()): ?> <div class="image-box img_obj_fit_center"> <a href="<?php echo esc_url(get_permalink()); ?>" class="img_link"> <?php the_post_thumbnail('risehand-image-370-270 trans'); ?> </a> <?php if($blog_cat_enable == true): ?> <?php do_action('risehand_theme_blog_category'); ?> <?php endif; ?> </div> <?php endif; ?> <div class="content_box trans"> <?php if($blog_date_enable == true || $blog_comment_enable == true): ?> <div class="d-flex"> <?php if($blog_date_enable == true): ?> <?php do_action('risehand_theme_blog_time'); ?> <?php endif; ?> <?php if($blog_comment_enable == true): ?> <?php do_action('risehand_theme_blog_comments'); ?> <?php endif; ?> </div> <?php endif; ?> <?php the_title( '<div class="title_22 mb_10"><a href="' . esc_url(get_permalink()) . '" class="trim-3">', '</a></div>' ); ?> <?php if(!empty($the_excerpt) && $blog_excerpt_enable == true): ?> <p class="des_cription mb_20"><?php echo esc_attr($the_excerpt); ?></p> <?php endif; ?> <div> <a class="text_btn" href="<?php echo esc_url(get_permalink()); ?>"> <small><?php echo esc_html__('Read more' , 'risehand-addons'); ?></small> </a> </div> </div> </div>
    <?php
}
/*------style 6 end =-------*/
/*------style 7 start-------*/
function risehand_blog_card_7(){
    $blog_cat_enable = get_addons_risehand_option('blog_cat_enable');
    $blog_excerpt_enable = get_addons_risehand_option('blog_excerpt_enable');
    $blog_excerpt_count = get_addons_risehand_option('blog_excerpt_count');
    $blog_date_enable = get_addons_risehand_option('blog_date_enable');
    $the_excerpt = wp_trim_words(get_the_excerpt(), $blog_excerpt_count);  
    $blog_comment_enable = get_addons_risehand_option('blog_comment_enable');
    ?>
   <div class="blog-style_7 trans mb_40 <?php if(has_post_thumbnail()): ?>has_images <?php else: ?>no_images<?php endif; ?>"> <?php if (has_post_thumbnail()): ?> <div class="image-box img_obj_fit_center"> <a href="<?php echo esc_url(get_permalink()); ?>" class="img_link"> <?php the_post_thumbnail('risehand-image-370-320 trans'); ?> </a> <?php if($blog_cat_enable == true): ?> <?php do_action('risehand_theme_blog_category'); ?> <?php endif; ?> </div> <?php endif; ?> <div class="content_box trans"> <?php if($blog_date_enable == true || $blog_comment_enable == true): ?> <div class="d-flex"> <?php if($blog_date_enable == true): ?> <?php do_action('risehand_theme_blog_time'); ?> <?php endif; ?> <?php if($blog_comment_enable == true): ?> <?php do_action('risehand_theme_blog_comments'); ?> <?php endif; ?> </div> <?php endif; ?> <?php the_title( '<div class="title_22 mb_0"><a href="' . esc_url(get_permalink()) . '" class="trim-3 mb_0">', '</a></div>' ); ?> <?php if(!empty($the_excerpt) && $blog_excerpt_enable == true): ?> <p class="des_cription mt_15 mb_0"><?php echo esc_attr($the_excerpt); ?></p> <?php endif; ?> <div class="mt_10"> <a class="text_btn trans" href="<?php echo esc_url(get_permalink()); ?>"> <small><?php echo esc_html__('Read more' , 'risehand-addons'); ?></small> </a> </div> </div> </div>
    <?php
}
/*------style 7 end =-------*/
/*===============blog cards function end=================*/



/*===============Service cards function start=================*/
/*-------actions-------*/
add_action('get_risehand_service_card_1' , 'risehand_service_card_1');
add_action('get_risehand_service_card_1_no_image' , 'risehand_service_card_1_no_image');
add_action('get_risehand_service_card_2_no_image' , 'risehand_service_card_2_no_image'); 
add_action('get_risehand_service_card_2' , 'risehand_service_card_2'); 
add_action('get_risehand_service_card_3' , 'risehand_service_card_3'); 
add_action('get_risehand_service_card_4' , 'risehand_service_card_4'); 
/*------functions-------*/
/*------style 1 start-------*/
function risehand_service_card_1(){ 
    global $post;
    $service_icon_enable = get_addons_risehand_option('service_icon_enable');
    $service_excerpt_enable = get_addons_risehand_option('service_excerpt_enable');
    $service_excerpt_count = get_addons_risehand_option('service_excerpt_count'); 
    $the_excerpt = wp_trim_words(get_the_excerpt(), $service_excerpt_count); 
    $service_icon_type = get_post_meta(get_the_ID() , 'service_icon_type', true);
    $ser_icon = get_post_meta(get_the_ID() , 'ser_icon', true);
    $ser_icon_img = get_post_meta(get_the_ID() , 'ser_icon_img', true);
?>
<div class="service-style_1 with_img mb_40 <?php if(has_post_thumbnail()): ?>has_images<?php else: ?>no_images<?php endif; ?>"> <?php if (has_post_thumbnail()): ?> <div class="image-box trans img_obj_fit_center"> <a href="<?php echo esc_url(get_permalink()); ?>" class="img_link trans"> <?php the_post_thumbnail('risehand-image-370-270 trans'); ?> </a> <?php the_title( '<h6 class="title_20 trans"><a href="' . esc_url(get_permalink()) . '" class="trim-3">', '</a></h6>' ); ?> </div> <?php endif; ?> <div class="content_box_outer"> <?php if($service_icon_enable == true): ?> <?php if($service_icon_type == 'image'): ?> <?php if(!empty($ser_icon_img['url'])): ?> <div class="icon trans"> <div class="spattern_bg mask_image" style="mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-1.png' ?>); -webkit-mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-1.png' ?>);"> </div> <img class="img-fluid" src="<?php echo esc_url($ser_icon_img['url']); ?>" alt="icon" /> </div> <?php endif; ?> <?php else: ?> <div class="icon trans"> <div class="spattern_bg mask_image" style="mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-1.png' ?>); -webkit-mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-1.png' ?>);"> </div> <i class="<?php echo esc_attr($ser_icon); ?> trans"></i> </div> <?php endif; ?> <?php endif; ?> <?php the_title( '<div class="title_no_a_24 mb_15">', '</div>' ); ?> <?php if(!empty($the_excerpt) && $service_excerpt_enable == true): ?> <p class="mb_25 des_cription"><?php echo esc_attr($the_excerpt); ?></p> <?php endif; ?> <div> <a class="text_btn trans" href="<?php echo esc_url(get_permalink()); ?>"> <small><?php echo esc_html__('Read more' , 'risehand-addons'); ?></small> </a> </div> </div></div>
<?php
}
function risehand_service_card_1_no_image(){ 
    global $post;
    $service_icon_enable = get_addons_risehand_option('service_icon_enable');
    $service_excerpt_enable = get_addons_risehand_option('service_excerpt_enable');
    $service_excerpt_count = get_addons_risehand_option('service_excerpt_count'); 
    $the_excerpt = wp_trim_words(get_the_excerpt(), $service_excerpt_count); 
    $service_icon_type = get_post_meta(get_the_ID() , 'service_icon_type', true);
    $ser_icon = get_post_meta(get_the_ID() , 'ser_icon', true);
    $ser_icon_img = get_post_meta(get_the_ID() , 'ser_icon_img', true);
?>
<div class="service-style_1 trans no_img mb_40"> <div class="content_box_outer"> <?php if($service_icon_enable == true): ?> <?php if($service_icon_type == 'image'): ?> <?php if(!empty($ser_icon_img['url'])): ?> <div class="icon trans"> <div class="spattern_bg mask_image" style="mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-1.png' ?>); -webkit-mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-1.png' ?>);"> </div> <img class="img-fluid" src="<?php echo esc_url($ser_icon_img['url']); ?>" alt="icon" /> </div> <?php endif; ?> <?php else: ?> <div class="icon trans"> <div class="spattern_bg mask_image" style="mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-1.png' ?>); -webkit-mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-1.png' ?>);"> </div> <i class="<?php echo esc_attr($ser_icon); ?> trans"></i> </div> <?php endif; ?> <?php endif; ?> <?php the_title( '<div class="title_22 trans mb_10"><a href="' . esc_url(get_permalink()) . '" class="trim-3">', '</a></div>' ); ?> <?php if(!empty($the_excerpt) && $service_excerpt_enable == true): ?> <p class="mb_25 des_cription"><?php echo esc_attr($the_excerpt); ?></p> <?php endif; ?> <div> <a class="text_btn trans" href="<?php echo esc_url(get_permalink()); ?>"> <small><?php echo esc_html__('Read more' , 'risehand-addons'); ?></small> </a> </div> </div></div>
<?php
}

/*------style 1 end-------*/
/*------style 2 start-------*/
function risehand_service_card_2(){
    global $post;
    $service_icon_enable = get_addons_risehand_option('service_icon_enable');
    $service_excerpt_enable = get_addons_risehand_option('service_excerpt_enable');
    $service_excerpt_count = get_addons_risehand_option('service_excerpt_count'); 
    $the_excerpt = wp_trim_words(get_the_excerpt(), $service_excerpt_count); 
    $service_icon_type = get_post_meta(get_the_ID() , 'service_icon_type', true);
    $ser_icon = get_post_meta(get_the_ID() , 'ser_icon', true);
    $ser_icon_img = get_post_meta(get_the_ID() , 'ser_icon_img', true);
?>
<div class="service-style_2 with_img trans mb_40 <?php if(has_post_thumbnail()): ?>has_images<?php else: ?>no_images<?php endif; ?>"> <?php if (has_post_thumbnail()): ?> <div class="image-box img_obj_fit_center"> <a href="<?php echo esc_url(get_permalink()); ?>" class="img_link"> <?php the_post_thumbnail('risehand-image-370-270 trans'); ?> </a> </div> <?php endif; ?> <div class="content_box_outer d_flex align-items-center"> <?php if($service_icon_enable == true): ?> <?php if($service_icon_type == 'image'): ?> <?php if(!empty($ser_icon_img['url'])): ?> <div class="icon trans"> <div class="spattern_bg mask_image" style="mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-1.png' ?>); -webkit-mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-1.png' ?>);"> </div> <img class="img-fluid" src="<?php echo esc_url($ser_icon_img['url']); ?>" alt="icon" /> </div> <?php endif; ?> <?php else: ?> <div class="icon trans"> <div class="spattern_bg mask_image" style="mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-1.png' ?>); -webkit-mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-1.png' ?>);"> </div> <i class="<?php echo esc_attr($ser_icon); ?> trans"></i> </div> <?php endif; ?> <?php endif; ?> <div class="content_box_in"> <?php the_title( '<div class="title_22 trans"><a href="' . esc_url(get_permalink()) . '" class="trim-3">', '</a></div>' ); ?> <?php if(!empty($the_excerpt) && $service_excerpt_enable == true): ?> <p class="mb_15 des_cription"><?php echo esc_attr($the_excerpt); ?></p> <?php endif; ?> <div> <a class="text_btn trans" href="<?php echo esc_url(get_permalink()); ?>"> <small><?php echo esc_html__('Read more' , 'risehand-addons'); ?></small> </a> </div> </div> </div></div>
    <?php
}
function risehand_service_card_2_no_image(){
    global $post;
    $service_icon_enable = get_addons_risehand_option('service_icon_enable');
    $service_excerpt_enable = get_addons_risehand_option('service_excerpt_enable');
    $service_excerpt_count = get_addons_risehand_option('service_excerpt_count'); 
    $the_excerpt = wp_trim_words(get_the_excerpt(), $service_excerpt_count); 
    $service_icon_type = get_post_meta(get_the_ID() , 'service_icon_type', true);
    $ser_icon = get_post_meta(get_the_ID() , 'ser_icon', true);
    $ser_icon_img = get_post_meta(get_the_ID() , 'ser_icon_img', true);
?>
<div class="service-style_2 no_img trans mb_40"> <div class="content_box_outer d_flex align-items-center"> <?php if($service_icon_enable == true): ?> <?php if($service_icon_type == 'image'): ?> <?php if(!empty($ser_icon_img['url'])): ?> <div class="icon trans"> <div class="spattern_bg mask_image" style="mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-1.png' ?>); -webkit-mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-1.png' ?>);"> </div> <img class="img-fluid" src="<?php echo esc_url($ser_icon_img['url']); ?>" alt="icon" /> </div> <?php endif; ?> <?php else: ?> <div class="icon trans"> <div class="spattern_bg mask_image" style="mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-1.png' ?>); -webkit-mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-1.png' ?>);"> </div> <i class="<?php echo esc_attr($ser_icon); ?> trans"></i> </div> <?php endif; ?> <?php endif; ?> <div class="content_box_in"> <?php the_title( '<div class="title_22 trans"><a href="' . esc_url(get_permalink()) . '" class="trim-3">', '</a></div>' ); ?> <?php if(!empty($the_excerpt) && $service_excerpt_enable == true): ?> <p class="mb_15 des_cription"><?php echo esc_attr($the_excerpt); ?></p> <?php endif; ?> <div> <a class="text_btn trans" href="<?php echo esc_url(get_permalink()); ?>"> <small><?php echo esc_html__('Read more' , 'risehand-addons'); ?></small> </a> </div> </div> </div></div>
    <?php
}
/*------style 2 end =-------*/ 
/*------style 3 start-------*/
function risehand_service_card_3(){
    global $post;
    $service_icon_enable = get_addons_risehand_option('service_icon_enable');
    $service_excerpt_enable = get_addons_risehand_option('service_excerpt_enable');
    $service_excerpt_count = get_addons_risehand_option('service_excerpt_count'); 
    $the_excerpt = wp_trim_words(get_the_excerpt(), $service_excerpt_count); 
    $service_icon_type = get_post_meta(get_the_ID() , 'service_icon_type', true);
    $ser_icon = get_post_meta(get_the_ID() , 'ser_icon', true);
    $ser_icon_img = get_post_meta(get_the_ID() , 'ser_icon_img', true);
?>
<div class="service-style_3 mb_40 <?php if(has_post_thumbnail()): ?>has_images<?php else: ?>no_images<?php endif; ?>"> <?php if (has_post_thumbnail()): ?> <div class="image-box img_obj_fit_center"> <a href="<?php echo esc_url(get_permalink()); ?>" class="img_link"> <?php the_post_thumbnail('risehand-image-370-270 trans'); ?> </a> <?php if($service_icon_enable == true): ?> <?php if($service_icon_type == 'image'): ?> <?php if(!empty($ser_icon_img['url'])): ?> <div class="icon trans"> <div class="spattern_bg mask_image" style="mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-1.png' ?>); -webkit-mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-1.png' ?>);"> </div> <img class="img-fluid" src="<?php echo esc_url($ser_icon_img['url']); ?>" alt="icon" /> </div> <?php endif; ?> <?php else: ?> <div class="icon trans"> <div class="spattern_bg mask_image" style="mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-1.png' ?>); -webkit-mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-1.png' ?>);"> </div> <i class="<?php echo esc_attr($ser_icon); ?> trans"></i> </div> <?php endif; ?> <?php endif; ?> </div> <?php endif; ?> <div class="content_box_outer"> <div class="content_box_in"> <?php the_title( '<div class="title_22 trans"><a href="' . esc_url(get_permalink()) . '" class="mb_0 trim-3">', '</a></div>' ); ?> <?php if(!empty($the_excerpt) && $service_excerpt_enable == true): ?> <p class="mt_15 mb_5 des_cription"><?php echo esc_attr($the_excerpt); ?></p> <?php endif; ?> </div> </div></div>
    <?php
}
/*------style 3 end =-------*/ 
/*------style 4 start-------*/
function risehand_service_card_4(){
    global $post;
    $service_icon_enable = get_addons_risehand_option('service_icon_enable');
    $service_excerpt_enable = get_addons_risehand_option('service_excerpt_enable');
    $service_excerpt_count = get_addons_risehand_option('service_excerpt_count'); 
    $the_excerpt = wp_trim_words(get_the_excerpt(), $service_excerpt_count); 
    $service_icon_type = get_post_meta(get_the_ID() , 'service_icon_type', true);
    $ser_icon = get_post_meta(get_the_ID() , 'ser_icon', true);
    $ser_icon_img = get_post_meta(get_the_ID() , 'ser_icon_img', true);
?>
<div class="service-style_4 d_flex mb_40 <?php if(has_post_thumbnail()): ?>has_images<?php else: ?>no_images<?php endif; ?>"> <?php if (has_post_thumbnail()): ?> <div class="image-box img_obj_fit_center"> <a href="<?php echo esc_url(get_permalink()); ?>" class="img_link"> <?php the_post_thumbnail('risehand-image-370-270 trans'); ?> </a> </div> <?php endif; ?> <div class="content_box_in"> <?php if($service_icon_enable == true): ?> <?php if($service_icon_type == 'image'): ?> <?php if(!empty($ser_icon_img['url'])): ?> <div class="icon trans"> <img class="img-fluid" src="<?php echo esc_url($ser_icon_img['url']); ?>" alt="icon" /> </div> <?php endif; ?> <?php else: ?> <div class="icon trans"> <i class="<?php echo esc_attr($ser_icon); ?> trans"></i> </div> <?php endif; ?> <?php endif; ?> <?php do_action('get_risehand_service_cat'); ?> <?php the_title( '<div class="title_22 mb_0 trans"><a href="' . esc_url(get_permalink()) . '" class="mb_0 trim-3">', '</a></div>' ); ?> <div> <?php if(!empty($the_excerpt) && $service_excerpt_enable == true): ?> <p class="mt_15 mb_0 mt_20 des_cription"><?php echo esc_attr($the_excerpt); ?></p> <?php endif; ?> <a class="theme_btn mt_25 trans" href="<?php echo esc_url(get_permalink()); ?>"> <?php echo esc_html__('Read more' , 'risehand-addons'); ?> <i class="risehand-chevrons-right"></i> </a> </div> </div> </div>
    <?php
}
/*------style 4 end =-------*/ 
/*===============Service cards function end=================*/ 
/*===============Portfolio cards function start=================*/
/*-------actions-------*/
add_action('get_risehand_portfolio_card_1' , 'risehand_portfolio_card_1');
add_action('get_risehand_portfolio_card_1_no_image' , 'risehand_portfolio_card_1_no_image');
add_action('get_risehand_portfolio_card_2_no_image' , 'risehand_portfolio_card_2_no_image'); 
add_action('get_risehand_portfolio_card_2' , 'risehand_portfolio_card_2'); 
add_action('get_risehand_portfolio_card_3' , 'risehand_portfolio_card_3'); 
add_action('get_risehand_portfolio_card_4' , 'risehand_portfolio_card_4'); 
add_action('get_risehand_portfolio_card_5' , 'risehand_portfolio_card_5'); 
/*------functions-------*/
/*------style 1 start-------*/
function risehand_portfolio_card_1(){ 
?>
<div class="portfolio-style_1 <?php if(has_post_thumbnail()): ?>has_images<?php else: ?>no_images<?php endif; ?>"> <?php if (has_post_thumbnail()): ?> <div class="image-box trans img_obj_fit_center"> <a href="<?php echo esc_url(get_permalink()); ?>" class="img_link trans"> <?php the_post_thumbnail('risehand-image-500-500 trans'); ?> </a> </div> <?php endif; ?> <div class="content_box_outer"> <div class="content_box_in trans"> <?php the_title( '<div class="title_22 trans"><a href="' . esc_url(get_permalink()) . '" class="mb_5 trim-3">', '</a></div>' ); ?> <?php do_action('get_risehand_portfolio_cat'); ?> </div> </div> </div>
<?php
}
/*------style 1 end-------*/

/*------style 2 start-------*/
function risehand_portfolio_card_2(){ 
?>
<div class="portfolio-style_2 <?php if(has_post_thumbnail()): ?>has_images<?php else: ?>no_images<?php endif; ?>"> <?php if (has_post_thumbnail()): ?> <div class="image-box trans img_obj_fit_center"> <a href="<?php echo esc_url(get_permalink()); ?>" class="img_link trans"> <?php the_post_thumbnail('risehand-image-500-500 trans'); ?> </a> </div> <?php endif; ?> <div class="content_box_outer"> <div class="content_box_in trans"> <?php do_action('get_risehand_portfolio_cat'); ?> <?php the_title( '<div class="title_22 trans"><a href="' . esc_url(get_permalink()) . '" class="mt_0 mb_0 trim-3">', '</a></div>' ); ?> <a href="<?php echo esc_url(get_permalink()); ?>" class="p_rd_more"><i class="risehand-arrow-right"></i></a> </div> </div> </div>
<?php
}
/*------style 2 end =-------*/ 

/*------style 3 start-------*/
function risehand_portfolio_card_3(){ 
?>
<div class="portfolio-style_3 <?php if(has_post_thumbnail()): ?>has_images<?php else: ?>no_images<?php endif; ?>"> <?php if (has_post_thumbnail()): ?> <div class="image-box trans img_obj_fit_center"> <a href="<?php echo esc_url(get_permalink()); ?>" class="img_link trans"> <?php the_post_thumbnail('risehand-image-500-500 trans'); ?> </a> </div> <?php endif; ?> <div class="content_box_outer trans"> <div class="content_box_in"> <?php the_title( '<div class="title_22 trans"><a href="' . esc_url(get_permalink()) . '" class="mt_0 mb_5 trim-3">', '</a></div>' ); ?> <?php do_action('get_risehand_portfolio_cat'); ?> <a href="<?php echo esc_url(get_permalink()); ?>" class="p_rd_more"><i class="risehand-chevrons-right"></i></a> </div> </div> </div>
<?php
}
/*------style 3 end =-------*/ 
/*------style 4 start-------*/
function risehand_portfolio_card_4(){
?>
<div class="portfolio-style_4 <?php if(has_post_thumbnail()): ?>has_images<?php else: ?>no_images<?php endif; ?>"> <?php if (has_post_thumbnail()): ?> <div class="image-box trans img_obj_fit_center"> <a href="<?php echo esc_url(get_permalink()); ?>" class="img_link trans"> <?php the_post_thumbnail('risehand-image-500-500 trans'); ?> </a> </div> <?php endif; ?> <div class="content_box_outer trans"> <a href="<?php echo esc_url(get_permalink()); ?>" class="p_rd_more"><i class="risehand-arrow-right"></i></a> <div class="content_box_in trans"> <?php the_title( '<div class="title_22 trans"><a href="' . esc_url(get_permalink()) . '" class="mt_0 mb_5 trim-3">', '</a></div>' ); ?> <?php do_action('get_risehand_portfolio_cat'); ?> </div> </div> </div>
<?php
}
/*------style 4 end =-------*/ 
/*------style 5 start-------*/
function risehand_portfolio_card_5(){  
?>
<div class="portfolio-style_5 <?php if(has_post_thumbnail()): ?>has_images<?php else: ?>no_images<?php endif; ?>"> <?php if (has_post_thumbnail()): ?> <div class="image-box trans img_obj_fit_center"> <a href="<?php echo esc_url(get_permalink()); ?>" class="img_link trans"> <?php the_post_thumbnail('risehand-image-500-500 trans'); ?> </a> </div> <?php endif; ?> <div class="content_box_outer d_flex align-items-center trans"> <div class="spattern_bg mask_image" style="mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-1.png' ?>); -webkit-mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-1.png' ?>);"> </div> <div class="content_box_in trans"> <?php the_title( '<div class="title_22 trans"><a href="' . esc_url(get_permalink()) . '" class="mt_0 mb_5 trim-3">', '</a></div>' ); ?> <?php do_action('get_risehand_portfolio_cat'); ?> </div> <a href="<?php echo esc_url(get_permalink()); ?>" class="p_rd_more"><i class="risehand-arrow-right"></i></a> </div> </div>
<?php
}
/*------style 5 end =-------*/ 
/*===============Portfolio cards function end=================*/

/*===============volunteer cards function Start=================*/
/*-------actions-------*/
add_action('get_risehand_volunteer_card_1' , 'risehand_volunteer_card_1'); 
/*------functions-------*/
/*------media meta-------*/
add_action('get_risehand_volunteer_media_meta' , 'risehand_volunteer_media_meta'); 
function risehand_volunteer_media_meta(){  
$v_media_one = get_post_meta(get_the_ID() , 'v_media_one', true);
$v_media_one_link = get_post_meta(get_the_ID() , 'v_media_one_link', true);
$v_media_two = get_post_meta(get_the_ID() , 'v_media_two', true);
$v_media_two_link = get_post_meta(get_the_ID() , 'v_media_two_link', true);
$v_media_three = get_post_meta(get_the_ID() , 'v_media_three', true);
$v_media_three_link = get_post_meta(get_the_ID() , 'v_media_three_link', true);
$v_media_four = get_post_meta(get_the_ID() , 'v_media_four', true);
$v_media_four_link = get_post_meta(get_the_ID() , 'v_media_four_link', true);  
?>
<div class="social-icons trans"> <ul> <?php if(!empty($v_media_one)): ?> <li class="trans"><a href="<?php echo esc_url($v_media_one_link); ?>" class="m_icon"><i class="<?php echo esc_attr($v_media_one); ?>"></i></a></li> <?php endif; ?> <?php if(!empty($v_media_two)): ?> <li class="trans"><a href="<?php echo esc_url($v_media_two_link); ?>" class="m_icon"><i class="<?php echo esc_attr($v_media_two); ?>"></i></a></li> <?php endif; ?> <?php if(!empty($v_media_three)): ?> <li class="trans"><a href="<?php echo esc_url($v_media_three_link); ?>" class="m_icon"><i class="<?php echo esc_attr($v_media_three); ?>"></i></a></li> <?php endif; ?> <?php if(!empty($v_media_four)): ?> <li class="trans"><a href="<?php echo esc_url($v_media_four_link); ?>" class="m_icon"><i class="<?php echo esc_attr($v_media_four); ?>"></i></a></li> <?php endif; ?> </ul></div>
<?php 
}
/*------style 1 start-------*/
function risehand_volunteer_card_1(){ 
global $post; 
$volunteer_excerpt_enable = get_addons_risehand_option('volunteer_excerpt_enable');
$volunteer_excerpt_count = get_addons_risehand_option('volunteer_excerpt_count'); 
$vthe_excerpt = wp_trim_words(get_the_excerpt(), $volunteer_excerpt_count);  
$volunteer_position_enable = get_addons_risehand_option('volunteer_position_enable'); 
$volunteer_media_enable = get_addons_risehand_option('volunteer_media_enable');  
// meta option
$volunteer_media_enable_meta = get_post_meta(get_the_ID() , 'v_media_enable', true); 
$volunteer_position = get_post_meta(get_the_ID() , 'volunteer_position', true); 
?>
<div class="volunteer-style_1 mb_40 <?php if(has_post_thumbnail()): ?>has_images<?php else: ?>no_images<?php endif; ?>"> <?php if (has_post_thumbnail()): ?> <div class="image-box trans img_obj_fit_center"> <div class="spattern_bg trans mask_image" style="mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/team-shape-1.png' ?>); -webkit-mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/team-shape-1.png' ?>);"> </div> <a href="<?php echo esc_url(get_permalink()); ?>" class="img_link trans"> <?php the_post_thumbnail('risehand-image-370-270 trans'); ?> </a> </div> <?php endif; ?> <div class="content_box"> <?php the_title( '<div class="title_22 trans"><a href="' . esc_url(get_permalink()) . '" class="mt_0 mb_5 trim-3">', '</a></div>' ); ?> <?php if($volunteer_position_enable == true && !empty($volunteer_position)): ?> <div class="font_special"><?php echo esc_attr($volunteer_position) ?></div> <?php endif; ?> <?php if(!empty($vthe_excerpt) && $volunteer_excerpt_enable == true): ?> <p class="mt_15 pb_0 mb_0 des_cription"><?php echo esc_attr($vthe_excerpt); ?></p> <?php endif; ?> <?php if($volunteer_media_enable_meta == true): do_action('get_risehand_volunteer_media_meta'); endif; ?> </div></div>
<?php
}
/*------style 1 end =-------*/ 
/*===============volunteer cards function end=================*/ 
/*===============Donation cards function Start=================*/
/*-------actions-------*/
add_action('get_risehand_donation_card_1' , 'risehand_donation_card_1');
add_action('get_risehand_donation_card_2' , 'risehand_donation_card_2'); 
/*------functions-------*/
/*------style 1 start-------*/
function risehand_donation_card_1(){  
    $form_id = get_the_ID(); 
    $risehand_givewp_updates = apply_filters( 'risehand_givewp_updates', $form_id );
    $show_goal = give_get_meta( $form_id, '_give_goal_option', true ); 
    $risehand_raised_donor_count = apply_filters( 'risehand_raised_donor_count', $form_id);
?>
  <div class="donation_box_one do_common_style mb_35 d_flex <?php if(has_post_thumbnail()): ?>has_images<?php else: ?>no_images<?php endif; ?>"> <?php if ( has_post_thumbnail() ) : ?> <div class="image-box trans img_obj_fit_center"> <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"> <?php the_post_thumbnail('risehand-image-grid-400-425 trans'); ?> </a> <?php do_action('get_risehand_give_forms_category'); ?> </div> <?php endif; ?> <div class="content"> <?php if ($show_goal != 'disabled'):?> <div class="donation_raises trans "> <?php do_action('risehand_get_donation_progressbar'); ?> <div class="goals_details d_flex"> <div class="trans"><span class="trans"><?php echo esc_html( $risehand_givewp_updates['actual'] ); ?></span> <?php echo esc_html__('Donated of' , 'risehand-addons'); ?> </div> <div class="trans"><span class="trans"><?php echo esc_html( $risehand_givewp_updates['goal'] ); ?></span> <?php echo esc_html__('Goals' , 'risehand-addons'); ?></div> </div> </div> <?php endif; ?> <div class="depth_content"> <?php the_title( '<div class="title_22 trim-3 mb_15"><a href="'. esc_url(get_permalink()) .'" rel="bookmark" class="mb_0">', '</a></div>' ); ?> <?php $excerpt = ''; if (has_excerpt()): ?> <p class="mt_15 desc_p"> <?php $excerpt = wp_strip_all_tags(wp_trim_words(get_the_excerpt(), 15)); echo esc_attr($excerpt); ?> </p> <?php endif; ?> <div class="goalsdetails d_flex"> <?php if ($show_goal != 'disabled'):?><div class="goal_received"> <span class="text"><?php esc_html_e( 'Goal', 'risehand-addons' ); ?></span><span class="result"><?php echo esc_html( $risehand_givewp_updates['goal'] ); ?></span> </div><?php endif; ?><div class="income_received"> <div class="incr"><span class="text"><?php esc_html_e( 'Raised', 'risehand-addons' ); ?></span> <span class="result"><?php echo esc_html( $risehand_givewp_updates['actual'] ); ?></span></div></div><div class="still_go"> <span class="text"><?php echo esc_html__('To Go ' , 'risehand-addons'); ?></span><small class="result"><?php do_action('rishand_get_fund_to_go'); ?></small> </div></div> </div> </div> </div>
<?php
}
/*------style 1 end-------*/ 
/*------style 2 start-------*/
function risehand_donation_card_2(){  
    $form_id = get_the_ID(); 
    $risehand_givewp_updates = apply_filters( 'risehand_givewp_updates', $form_id );
    $show_goal = give_get_meta( $form_id, '_give_goal_option', true ); 
    $risehand_raised_donor_count = apply_filters( 'risehand_raised_donor_count', $form_id);
?>
  <div class="donation_box_two do_common_style mb_35 d_flex <?php if(has_post_thumbnail()): ?>has_images<?php else: ?>no_images<?php endif; ?>"> <div class="up_content"> <?php do_action('get_risehand_give_forms_category'); ?> <?php the_title( '<div class="title_22 trim-3 mb_15"><a href="'. esc_url(get_permalink()) .'" rel="bookmark" class="mb_0">', '</a></div>' ); ?> </div> <?php if ( has_post_thumbnail() ) : ?> <div class="image-box trans img_obj_fit_center"> <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"> <?php the_post_thumbnail('risehand-image-grid-400-425 trans'); ?> </a> </div> <?php endif; ?> <div class="low_content"> <?php $excerpt = ''; if (has_excerpt()): ?> <p class="desc_p"> <?php $excerpt = wp_strip_all_tags(wp_trim_words(get_the_excerpt(), 15)); echo esc_attr($excerpt); ?> </p> <?php endif; ?> <?php if ($show_goal != 'disabled'):?> <div class="donation_raises trans "> <?php do_action('risehand_get_donation_progressbar'); ?> </div> <div class="goalsdetails d_flex"> <?php if ($show_goal != 'disabled'):?> <div class="goal_received"> <span class="text"><?php esc_html_e( 'Goal', 'risehand-addons' ); ?></span> <span class="result"><?php echo esc_html( $risehand_givewp_updates['goal'] ); ?></span> </div> <?php endif; ?> <div class="income_received"> <div class="incr"> <span class="text"><?php esc_html_e( 'Raised', 'risehand-addons' ); ?></span> <span class="result"><?php echo esc_html( $risehand_givewp_updates['actual'] ); ?></span> </div> </div> <div class="still_go"> <span class="text"><?php echo esc_html__('To Go ' , 'risehand-addons'); ?></span> <small class="result"><?php do_action('rishand_get_fund_to_go'); ?></small> </div> </div> <?php endif; ?> </div> </div>
<?php
}
/*------style 2 end-------*/ 
/*===============Donation cards function End=================*/


/*===============Archive Post Column Start=================*/
add_action('risehand_get_column_start_tag', 'risehand_archive_column_start_tag'); 
function risehand_archive_column_start_tag() {
    // Define column classes
    $column_classes = 'col-lg-6 col-md-6 col-sm-6 col-xs-12';

    // Output the column div
    echo '<div class="' . esc_attr($column_classes) . '">';
}
add_action('risehand_get_column_end_tag', 'risehand_archive_column_end_tag'); 
function risehand_archive_column_end_tag() { 
    // Output the column div
    echo '</div>';
}
/*===============Archive Post Column End=================*/
