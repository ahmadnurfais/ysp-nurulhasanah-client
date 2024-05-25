<?php
/**
  * Blog Content
  * @package risehand WordPress theme
**/
$blog_column = ''; 
$column_count =  get_risehand_option('blog_layout_column');
if($column_count == 'two_column'){
    $blog_column = 'col-lg-6 col-md-6 col-sm-6 col-xs-12';
} 
elseif($column_count == 'three_column'){
    $blog_column = 'col-lg-4 col-md-6 col-sm-6 col-xs-12';
}
elseif($column_count == 'four_column'){
  $blog_column = 'col-lg-3 col-md-6 col-sm-6 col-xs-12';
}
else{ 
    $blog_column = 'col-lg-12';
} 
$blog_cat_enable = get_risehand_option('blog_cat_enable');
$blog_excerpt_enable = get_risehand_option('blog_excerpt_enable');
$blog_excerpt_count = get_risehand_option('blog_excerpt_count');
$blog_date_enable = get_risehand_option('blog_date_enable');
$the_excerpt = wp_trim_words(get_the_excerpt(), $blog_excerpt_count);  
$blog_comment_enable = get_risehand_option('blog_comment_enable');
?> 
<article <?php post_class($blog_column); ?>>
  <div class="blog-style_default <?php if(has_post_thumbnail()): ?> has_images<?php else: ?> no_images<?php endif; ?>" id="post-<?php esc_attr(the_ID()); ?>">
    <?php if(has_post_thumbnail()): ?>
            <div class="image-box img_obj_fit_center">
                <a href="<?php echo esc_url(get_permalink()); ?>" class="img_link">
                    <?php the_post_thumbnail('risehand-blog-image-570-570 trans'); ?>
                </a> 
            </div>
        <?php endif; ?>
    <div class="content_box"> 
        <?php if($blog_cat_enable == true): ?>
            <?php do_action('risehand_theme_blog_category'); ?>
        <?php endif; ?>
        <?php if($blog_date_enable == true || $blog_comment_enable == true): ?>
            <div class="d-flex">
                <?php if($blog_date_enable == true): ?>
                    <?php do_action('risehand_theme_blog_time'); ?> 
                <?php endif; ?> 
                <?php if($blog_comment_enable == true): ?>
                    <?php do_action('risehand_theme_blog_comments'); ?>
                <?php endif; ?> 
            </div> 
        <?php endif; ?> 
      <?php the_title( '<div class="title_32"><a href="'. esc_url(get_permalink()) .'" rel="bookmark" class="trim-2 mb_20">', '</a></div>' ); ?>
        <?php if(!empty($the_excerpt) && $blog_excerpt_enable == true): ?>
            <p class="des_cription mb_20"><?php echo esc_attr($the_excerpt); ?></p>
        <?php endif; ?>
        <?php if(!class_exists('Risehand_Addons')): ?>
            <p class="des_cription mb_20"><?php $mycontent = wp_trim_words(get_the_content(), 25); echo esc_html($mycontent); ?></p>
        <?php endif; ?>
      <div> 
        <a class="text_btn" href="<?php echo esc_url(get_permalink()); ?>">
            <small><?php echo esc_html__('Read more' , 'risehand'); ?></small>
        </a>
    </div>
    </div>
  </div>
</article>

  