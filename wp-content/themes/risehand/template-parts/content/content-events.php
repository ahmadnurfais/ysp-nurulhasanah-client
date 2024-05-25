<?php
/**
 * @package risehand WordPress theme
 */ 
$post_sub_title = get_post_meta(get_the_ID(), 'event_post_sub_title', true);
$share_disable =   get_risehand_option('event_share_disable');
$authour_detail_disable =   get_risehand_option('event_authour_detail_disable');
$next_prev_enable =  get_risehand_option('event_next_prev_enable');  
$feature_image_enable =   get_risehand_option('event_feature_image_enable');
$post_featured_image = get_post_meta(get_the_ID(), 'event_post_featured_image', true);
$relatedpost_enable =   get_risehand_option('event_relatedpost_enable');
$event_meta_enable =   get_risehand_option('event_meta_enable');
$events_timing = get_post_meta(get_the_ID(), 'events_timing', true);
$comment_class = "";
if (comments_open()){
    $comment_class = "has_comment";
}
?> 
<section id="post-<?php esc_attr(the_ID()); ?>" <?php esc_attr(post_class($comment_class)); ?>>
<div class="blog_single_details_outer  content-Sblog"> 
    <div class="single_content_upper">
    <?php if($event_meta_enable == true): ?>
        <div class="blog_meta">
            <ul>
                <li><?php do_action('get_risehand_event_location'); ?> </li>
                <li><i class="risehand-calendar-check"></i><?php echo esc_html__('Events On:' , 'risehand'); ?><?php echo esc_attr($events_timing); ?></li>
                <li><?php risehand_comments(); ?></li>
            </ul>
        </div> 
        <?php endif; ?> 
        <?php if($feature_image_enable == true || $post_featured_image == true) : ?>
            <?php if(has_post_thumbnail()) : ?>
                <div class="single_feature_image">
                    <?php the_post_thumbnail(array(770, 400)); ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>  
        <div class="post_single_content">
            <?php the_content(); ?>
            <div class="clearfix"></div>
            <?php wp_link_pages(); ?>
        </div>   
      
        <?php if($share_disable == true): ?>
          <?php do_action('risehand_theme_blog_share'); ?>
        <?php endif;?>  
    </div> 
    <?php if($authour_detail_disable == true) :
        do_action('risehand_theme_authour_details');
    endif; ?> 
    <?php if($next_prev_enable == true) : ?>
        <?php do_action('risehand_custom_pagination_width_img'); ?>
    <?php endif; ?> 
    </div> 
    <?php if($relatedpost_enable == true) :
    		do_action('risehand_get_related_post');
    endif; ?>
    <div class="single_content_lower">
        <?php
          // If comments are open or we have at least one comment, load up the comment template
          if (comments_open() || get_comments_number()) :
              comments_template();
          endif;
        ?>
    </div>  
</section>