<?php 
 
$blog_column = 'col-lg-12';
$blog_cat_enable = get_risehand_option('blog_cat_enable');
$blog_excerpt_enable = get_risehand_option('blog_excerpt_enable');
$blog_excerpt_count = get_risehand_option('blog_excerpt_count');
$blog_date_enable = get_risehand_option('blog_date_enable');
$the_excerpt = wp_trim_words(get_the_excerpt(), $blog_excerpt_count);  
$blog_comment_enable = get_risehand_option('blog_comment_enable');
if (get_query_var('paged')) {       
    $paged = get_query_var('paged'); 
} elseif (get_query_var('page')) { 
    $paged = get_query_var('page'); 
} else { 
    $paged = 1; 
} 
$post = array('post', 'page', 'product', 'service', 'portfolio'); 
$args = array(
    'post_type' => $post,
    's' => get_search_query(),
    'paged' => $paged,
); 
$query = new WP_Query($args);
if ($query->have_posts()):
?>
<div class="search-form search_file text-center mb-30">
    <?php do_action('get_risehand_search'); ?>
</div>
<?php
while ($query->have_posts()):
    $query->the_post();  
    ?>
    <article <?php post_class($blog_column); ?>>
  <div class="blog-style_default no_images" id="post-<?php esc_attr(the_ID()); ?>"> 
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
<?php
endwhile;
?>
<div class="pagination-area text-center">
    <nav>
        <?php
        $pagination = 999999999;
        echo paginate_links(array(
            'base' => str_replace($pagination, '%#%', get_pagenum_link($pagination)),
            'format' => '?paged=%#%',
            'current' => max(0, $paged),
            'total' => $query->max_num_pages,
            'prev_text' => '<i class="fa fa-angle-left"></i>',
            'next_text' => '<i class="fa fa-angle-right"></i>',
            'type' => 'list', 
            'add_args' => false
        ));
        ?>
    </nav>
</div>
<?php else: ?>
    <section class="no-results not-found">
	<div class="header">
		<h1 class="page-title"><?php _e( 'Nothing Found', 'risehand' ); ?></h1>
	</div><!-- .page-header -->
	<div class="content">
		<?php if(is_home() && current_user_can('publish_posts')) : ?>
			<p><?php echo esc_html__( 'Ready to publish your first post?', 'risehand'); ?> <a href="<?php echo esc_url(admin_url( 'post-new.php' )); ?>"><?php echo esc_html__('Get started here','risehand'); ?></a></p>
		<?php elseif(is_search()) : ?>
			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'risehand'); ?></p>
			<?php get_search_form(); ?>
		<?php else : ?>
			<p><?php _e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'risehand'); ?></p>
			<?php get_search_form(); ?>
		<?php endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
<?php endif; ?>
<?php wp_reset_postdata(); ?>