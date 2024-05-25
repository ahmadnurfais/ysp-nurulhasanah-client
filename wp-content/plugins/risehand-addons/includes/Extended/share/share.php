<?php
/*
**==============================   
**risehand post share
**==============================
*/
add_action('risehand_theme_blog_share', 'risehand_share_options');
function risehand_share_options(){  ?>
<div class="social-icons single-share">
<h6> <?php echo esc_html__('Share This:' , 'risehand-addons');?>  </h6>
    <ul>
        <li>
            <button class="m_icon" data-toggle="tooltip" data-placement="right" title="facebook" data-sharer="facebook"
                data-title="<?php the_title(); ?>" data-url="<?php the_permalink(); ?>">
                <i class="risehand-facebook"></i>
            </button>
        </li>
        <li>
            <button class="m_icon" data-toggle="tooltip" data-placement="right" title="twitter" data-sharer="twitter"
                data-title="<?php the_title(); ?>" data-url="<?php the_permalink(); ?>">
                <i class="risehand-twitter"></i>
            </button>
        </li> 
        <li>
            <button class="m_icon" data-toggle="tooltip" data-placement="right" title="telegram" data-sharer="telegram"
                data-title="<?php the_title(); ?>" data-url="<?php the_permalink(); ?>" data-to="+44555-03564">
                <i class="risehand-telegram1"></i>
            </button>
        </li>
        <li>
            <button class="m_icon" data-toggle="tooltip" data-placement="right" title="skype" data-sharer="skype"
                data-url="<?php the_permalink(); ?>" data-title="<?php the_title(); ?>">
                <i class="risehand-skype1"></i>
            </button>
        </li>
        <li> 
            <button class="m_icon" data-sharer="reddit" data-url=""<?php the_permalink(); ?>"  data-title="<?php the_title(); ?>">
                <i class="risehand-reddit-circle"></i> 
            </button>
        </li>
        <li>
            <button class="m_icon" data-sharer="email" data-title="<?php the_title(); ?>" data-url="<?php the_permalink(); ?>">
                <i class="risehand-mail1"></i>  
            </button> 
        </li>
        <li>
            <button class="m_icon" data-sharer="linkedin" data-url="<?php the_permalink(); ?>" data-title="<?php the_title(); ?>">
                <i class="risehand-linkedin2"></i>
            </button>
        </li>
        <li>
            <button class="m_icon" data-sharer="whatsapp" data-title="<?php the_title(); ?>" data-url="<?php the_permalink(); ?>">
                <i class="risehand-whatsapp1"></i>
            </button>
        </li> 
               
    </ul>
</div>
<?php
}   
/*
**==================================
**risehand authour
** =================================
*/
add_action('risehand_theme_authour_details', 'risehand_authour_details');
function risehand_authour_details(){
?>
<div class="same_authour">
    <div class="image">
        <?php echo get_avatar( get_the_author_meta( 'ID' ), apply_filters( 'risehand-authour', 100 )); ?>
    </div>
    <div class="content">
        <h4 class="title_no_a_22">
            <?php the_author(); ?>
        </h4>
        <p>
            <?php the_author_meta('description') ?>
        </p>
    <div class="d-flex align-items-center authour-share">
        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="theme_btn">
            <?php echo esc_html_e('Read All Post' , 'risehand-addons'); ?>
        </a>   
        <ul>
            <li>
                <button class="m_icon" data-toggle="tooltip" data-placement="right" title="facebook" data-sharer="facebook"
                    data-title="<?php the_author(); ?>" data-url="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                    <i class="risehand-facebook"></i>
                </button>
            </li>
            <li>
                <button class="m_icon" data-toggle="tooltip" data-placement="right" title="twitter" data-sharer="twitter"
                    data-title="<?php the_author(); ?>" data-url="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                    <i class="risehand-twitter"></i>
                </button>
            </li> 
            <li>
                <button class="m_icon" data-toggle="tooltip" data-placement="right" title="telegram" data-sharer="telegram"
                    data-title="<?php the_author(); ?>" data-url="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" data-to="+44555-03564">
                    <i class="risehand-telegram1"></i>
                </button>
            </li>
            <li>
                <button class="m_icon" data-toggle="tooltip" data-placement="right" title="skype" data-sharer="skype"
                    data-url="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" data-title="<?php the_author(); ?>">
                    <i class="risehand-skype1"></i>
                </button>
            </li>
            <li> 
                <button class="m_icon" data-sharer="reddit" data-url=""<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"  data-title="<?php the_author(); ?>">
                    <i class="risehand-reddit-circle"></i> 
                </button>
            </li>
            <li>
                <button class="button" data-sharer="email" data-title="<?php the_author(); ?>" data-url="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                    <i class="risehand-mail1"></i>  
                </button> 
            </li>
            <li>
            <button class="button" data-sharer="linkedin" data-url="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" data-title="<?php the_author(); ?>">
                    <i class="risehand-linkedin2"></i>
                </button>
            </li>
            <li>
            <button class="button" data-sharer="whatsapp" data-title="<?php the_author(); ?>" data-url="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                    <i class="risehand-whatsapp1"></i>
                </button>
            </li> 
        </ul>
        </div>
 
    </div>
</div>

<?php
}
 