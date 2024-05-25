<?php
/**
 * @package risehand WordPress theme
 */ 
$share_disable =   get_risehand_option('service_share_disable'); 
$next_prev_enable =  get_risehand_option('service_next_prev_enable'); 
$feature_image_enable =   get_risehand_option('service_feature_image_enable'); 
$relatedpost_enable =   get_risehand_option('service_relatedpost_enable'); 
$comment_class = "";
if (comments_open()){
    $comment_class = "has_comment";
}
?>
<section id="post-<?php esc_attr(the_ID()); ?>" <?php esc_attr(post_class($comment_class)); ?>> 
    <?php if($feature_image_enable == true): ?>
        <?php if(has_post_thumbnail()) : ?>
            <div class="single_feature_image mb_30">
                <?php the_post_thumbnail(array(770, 400)); ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>
    <?php the_content(); ?> 
    <?php if($share_disable == true): ?>
          <?php do_action('risehand_theme_blog_share'); ?>
        <?php endif;?>  
    <?php if ($next_prev_enable == true) : ?>
        <?php do_action('risehand_custom_pagination_width_img'); ?>
    <?php endif; ?> 
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