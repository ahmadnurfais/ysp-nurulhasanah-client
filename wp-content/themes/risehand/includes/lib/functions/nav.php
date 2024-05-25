<?php
/*
** ============================== 
** Risehand Navigation File
** ==============================
*/
add_action('risehand_custom_pagination',   'risehand_numeric_posts_nav');
add_action('risehand_custom_pagination_width_img',   'risehand_no_image_nav_links');
function risehand_numeric_posts_nav() {
        if(is_singular()):
            return;
        endif;    
        global $wp_query;
        /** Stop execution ifthere's only 1 page */
        if($wp_query->max_num_pages <= 1 ):
            return;
        endif;    
        $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
        $max   = intval( $wp_query->max_num_pages );
        /** Add current page to the array */
        if($paged >= 1):
            $links[] = $paged;
        endif;    
        /** Add the pages around the current page to the array */
        if($paged >= 3){
            $links[] = $paged - 1;
            $links[] = $paged - 2;
        }
        if(( $paged + 2) <= $max ) {
            $links[] = $paged + 2;
            $links[] = $paged + 1;
        }
        echo '<div class="pagination-area"><nav><ul class="pagination">' . "\n";
        /** Previous Post Link */
        if( get_previous_posts_link()):
            printf( '<li class="prev_link page-item">%s</li>' . "\n", get_previous_posts_link('<i class="risehand-chevron-left"></i>') );
        endif;
        /** Link to first page, plus ellipses ifnecessary */
        if(!in_array(1, $links)):
            $class = 1 == $paged ? ' active ' : '';
     
            printf( '<li class="%s page-item"><a href="%s" class="page-link">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
     
            if(!in_array( 2, $links)):
                echo '<li class="page-item"><a class="page-link dot">…</a></li>';
            endif;
        endif;
        /** Link to current page, plus 2 pages in either direction ifnecessary */
        sort( $links );
        foreach ((array) $links as $link):
            $class = $paged == $link ? 'active ' : '';
            printf( '<li class="%spage-item"><a href="%s" class="page-link">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
        endforeach;
        /** Link to last page, plus ellipses ifnecessary */
        if(!in_array($max, $links)):
            if(!in_array( $max - 1, $links))
            echo '<li class="page-item"><a class="page-link dot">…</a></li>' . "\n";
            $class = $paged == $max ? ' active ' : '';
            printf( '<li class="%s page-item"><a href="%s" class="page-link">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
        endif;
        /** Next Post Link */
        if (get_next_posts_link()):
            printf( '<li class="next_link page-item">%s</li>' . "\n", get_next_posts_link('<i class="risehand-chevron-right"></i>') );
            echo '</ul></nav></div>' . "\n";
        endif;
    } 
     
function risehand_no_image_nav_links() {
$previous = get_previous_post();
$next = get_next_post();
if(is_singular('post') || is_singular('events') || is_singular('portfolio') || is_singular('volunteer') || is_singular('service')): ?> 
<div class="previouse_next_post entry-bottom<?php if($prev_post = get_previous_post()): ?> only_prev<?php endif; ?><?php if($next_post = get_next_post()): ?> only_next<?php endif; ?>">
    <?php if($prev_post = get_previous_post()): ?>
    <div class="prev_post  nav_post">
        <a href="<?php echo get_permalink( $prev_post->ID ); ?>" class="linked_prev_next">
            <?php if(!empty(get_the_post_thumbnail($prev_post->ID))): ?>
            <div class="image">
                <?php echo get_the_post_thumbnail( $prev_post->ID,  array(80,80));  ?>
            </div>
            <?php endif; ?>
            <div class="text">
                <div class="title_no_a_22 trim-2"><?php echo get_the_title($previous) ?></div> 
                <div class="down_content font_special">
                <span> 
                    <i class="risehand-calendar5"></i> <?php echo esc_html(get_the_date(get_option('date_format') , $prev_post->ID)); ?></span>
                    <small><i class="risehand-chevron-left"></i> <?php esc_html_e('Previous Post', 'risehand') ?> </small>
                </div>
            </div>
        </a>
    </div>
    <?php endif;  ?>
    <?php if($next_post = get_next_post()): ?>
    <div class="next_post  nav_post">
        <a href="<?php echo get_permalink( $next_post->ID ); ?>" class="linked_prev_next">
            <div class="text">
                <div class="title_no_a_22 trim-2"><?php echo get_the_title($next) ?></div>
                <div class="down_content font_special">
                    <span> <i class="risehand-calendar5"></i> <?php echo esc_html(get_the_date(get_option('date_format') , $next_post->ID)); ?></span>
                    <small><?php esc_html_e('Next Post', 'risehand'); ?> <i class="risehand-chevron-right"></i></small>
                </div>
            </div>
            <?php if(!empty(get_the_post_thumbnail($next_post->ID))): ?>
            <div class="image">
                <?php echo get_the_post_thumbnail( $next_post->ID,  array(80,80));  ?>
            </div>
            <?php endif; ?>
        </a>
    </div>
    <?php endif; ?>
</div>
<?php endif; 
} 

 