<?php
/*
**==============================   
** risehand Blog
**==============================
*/
add_action('risehand_theme_blog_comments', 'risehand_comments');
add_action('risehand_theme_single_cat', 'risehand_single_cat');
add_action('risehand_theme_blog_time', 'risehand_blog_time');
add_action('risehand_theme_blog_category', 'risehand_blog_category');
add_action('risehand_theme_blog_tags_and_cat', 'risehand_tags_and_cat');
add_action('risehand_theme_blog_tags_and_catbefore', 'risehand_tags_and_cat_before_intsll_pg');
add_action('risehand_after_blogsetup_comment_timing', 'risehand_comment_timing'); 
/*
**=========================================
**risehand get-comments
**=========================================
*/
function risehand_single_cat(){ 
    $categories = get_the_category();
    if(!empty($categories)) {
        echo '<div class="category_showcase"><a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '" class=""btn_default one">' . esc_html( $categories[0]->name ) . '</a></div>';
    } 
}
/*
**=========================================
**risehand get-comments
**=========================================
*/
function risehand_comments(){ 
?>
<small class="comments"> <i class="risehand-bubble"></i>
    <?php echo comments_popup_link( 
        esc_html__( '0 Comments', 'risehand' ), 
        esc_html__( '1 Comment', 'risehand' ), 
        esc_html__( '% Comments', 'risehand' ),
        esc_html__( 'Comments are Closed', 'risehand' )
    ); 
?>
</small>
<?php   
}   
/*
**==============================   
** risehand risehand_blog_time
**==============================
*/
function risehand_blog_time(){
    $time_string = '<time class="date published font_special updated" datetime="%1$s"><i class="risehand-calendar5 mr-5"></i>%2$s</time>';
    if(get_the_time('U') !== get_the_modified_time('U')):
        $time_string = '<time class="date published font_special" datetime="%1$s"><i class="risehand-calendar5 mr-5"></i>%2$s</time>';
    endif;    
    $time_string = sprintf($time_string, esc_attr(get_the_date('c')) , esc_html(get_the_date(get_option('date_format'))));
    $posted_on = '<span class="date_tm">' . $time_string . '</span>';
    echo '' . $posted_on . '';
}   
/*
**===================================
** risehand risehand_blog_category
**===================================
*/
function risehand_blog_category(){
$categories = get_the_category();
    if(!empty($categories)) {
        echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '" class="cat_gry">' . esc_html( $categories[0]->name ) . '</a>';
    }
}   
/*
**==================================
** risehand tag category
** =================================
*/
function risehand_tags_and_cat(){
$tag_disable = get_risehand_option('tag_disable');
$category_enable = get_risehand_option('bcategory_enable'); 
$get_the_categorys = get_the_category();
$tag_outputs = get_the_tags(); 
if($tag_disable == true || $category_enable == true): ?>
<div
    class="tags_and_cat<?php if(!empty($tag_outputs) && $tag_disable == true):?> yes_tags<?php endif; ?> <?php  if(!empty($get_the_categorys) && $category_enable == true):?>yes_share<?php endif; ?>">
    <div class="d-flex">
        <?php  if($tag_disable == true): ?>
            <?php if(!empty($tag_outputs)): ?>
        <div class="left_one d-flex">
            <div class="title"><?php echo esc_html__('Tags' , 'risehand'); ?></div>
            <?php foreach ($tag_outputs as $tag_output):?>
            <a class="tags" href="<?php echo get_term_link($tag_output); ?>"><?php echo esc_html__('#' , 'risehand');?>
                <?php echo esc_attr($tag_output->name); ?></a>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
        <?php endif; ?>
        <?php if($category_enable == true): ?>
        <?php if(!empty($get_the_categorys)): ?>
        <div class="right_one d-flex">
            <div class="title"><?php echo esc_html__('Posted in' , 'risehand'); ?></div>
            <?php foreach ($get_the_categorys as $get_the_category):?>
            <a class="cats"
                href="<?php echo get_term_link($get_the_category); ?>">
                <?php echo esc_attr($get_the_category->name); ?></a>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>
<?php 
}   

/*
**==================================
**risehand tag cat before
** =================================
*/
function risehand_tags_and_cat_before_intsll_pg(){
$get_the_categorys = get_the_category(); 
$tag_outputs = get_the_tags(); ?>
<div
    class="tags_and_cat<?php if(!empty($tag_outputs)):?> yes_tags<?php endif; ?> <?php  if(!empty($get_the_categorys)):?>yes_share<?php endif; ?>">
    <div class="d-flex">
 
            <?php if(!empty($tag_outputs)): ?>
        <div class="left_one d-flex">
            <div class="title"><?php echo esc_html__('Tags' , 'risehand'); ?></div>
            <?php foreach ($tag_outputs as $tag_output):?>
            <a class="tags" href="<?php echo get_term_link($tag_output); ?>"><?php echo esc_html__('#' , 'risehand');?>
                <?php echo esc_attr($tag_output->name); ?></a>
            <?php endforeach; ?>
        </div>
    
        <?php endif; ?>
 
        <?php if(!empty($get_the_categorys)): ?>
        <div class="right_one d-flex">
            <div class="title"><?php echo esc_html__('Posted in' , 'risehand'); ?></div>
            <?php foreach ($get_the_categorys as $get_the_category):?>
            <a class="cats"
                href="<?php echo get_term_link($get_the_category); ?>">
                <?php echo esc_attr($get_the_category->name); ?></a>
            <?php endforeach; ?>
        </div>
      
        <?php endif; ?>
    </div>
</div>
 
<?php 
}  
/*
**================================   
**risehand Comment Timing
**================================
*/
function risehand_comment_timing() {
    $comment_date = get_comment_time('U');
    $dayscomment = round((date('U') - get_comment_time('U')) / (60*60*24));

    $deltacomment = time() - $comment_date;
    
    if ($deltacomment < 60) {
        echo esc_html('Less than a minute ago', 'risehand');
    } elseif ($deltacomment > 60 && $deltacomment < 120) {
        echo esc_html('About a minute ago', 'risehand');
    } elseif ($deltacomment > 120 && $deltacomment < (60*60)) {
        echo strval(round(($deltacomment/60), 0)) . ' minutes ago';
    } elseif ($deltacomment > (60*60) && $deltacomment < (120*60)) {
        echo esc_html('About an hour ago', 'risehand');
    } elseif ($deltacomment > (120*60) && $deltacomment < (24*60*60)) {
        echo strval(round(($deltacomment/3600), 0)) . ' hours ago';
    } else {
        echo get_comment_date();
    }
}  
/*
**==============================   
**  Post Single Style
**==============================
*/
function risehand_get_post_single() {
	$post_single = isset($_GET['post_single']) ? $_GET['post_single'] : '';
	return esc_html($post_single);
} 