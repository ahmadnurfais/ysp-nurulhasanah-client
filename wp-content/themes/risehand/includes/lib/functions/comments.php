<?php
/*
** ============================== 
** risehand Comment File 
** ==============================
*/
function risehand_comment($comment, $args, $depth) {
    if('div' === $args['style']):
        $tag       = 'div';
        $add_below = 'comment';
    else:
        $tag       = 'li';
        $add_below = 'div-comment';
    endif;?>
<<?php echo esc_attr($tag); ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?>
    id="comment-<?php comment_ID() ?>">
    <?php 
    if('div' != $args['style']): ?>
    <div id="div-comment-<?php comment_ID() ?>" class="comments-outer comment-list  clearfix">
        <div class="single-comment justify-content-between d-flex mb-40 item_commnt one clearfix"><?php
    endif;?>
            <div class="user justify-content-between">
                <div class="thumb text-center">
                    <?php if($args['avatar_size'] != 0):
                         echo get_avatar( $comment, $args['avatar_size'] ); 
                    endif;?>
                </div>
                <div class="comment-text">
                    <div class="desc">
                        <ul class="inner_text_ul">
                            <li class="d-inline-block">
                                <a href="#" class="font-heading text-brand"><?php comment_author(); ?></a>
                            </li>
                            <li class="d-inline-block datesss">
                                <span> <?php do_action('risehand_after_blogsetup_comment_timing');?> </span>
                            </li>
                        </ul>
                    </div>
                    <p class="content"><?php echo wp_kses_post(get_comment_text()); ?></p>
                    <div class="reply">
                    <?php comment_reply_link( array_merge($args, array(
                        'add_below' => $add_below, 
                        'depth'      => $depth,
                        'max_depth'  => $args['max_depth']
                        )
                    )); ?>
                    <?php edit_comment_link(esc_html__( 'Edit', 'risehand' ), '  ', '' ); ?>
                    </div>
                </div>
                <?php if('div' != $args['style']): ?>
            </div>
        </div>
    </div>
    <?php endif;
}
/*
** ===================================== 
**   risehand Ecommerce Custom Comment Form
** =====================================
*/
function risehand_comment_form( $fields ) {
	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );
    $fields['url'] = '<div class="col-sm-12"><p class="comment-form-url">    <label for="name">' . esc_html( 'Website Url', 'risehand' ) . '</label>
    <input id="url" name="url" placeholder="' . esc_attr__( 'ex. www.example.com', 'risehand' ) . '" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /> ' .
    '</p></div>';
    $fields['email'] = '<div class="col-lg-6 col-md-6 col-sm-12"><p class="comment-form-email">
    <label for="comment">' . esc_html__( 'Email address', 'risehand' ) . '</label>
	<input id="email" placeholder="' . esc_attr__( 'ex. john@mail.com', 'risehand' ) . '" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .'" size="30"' . $aria_req . ' />'  .'</p></div>';
    $fields['author'] = '<div class="col-lg-6 col-md-6 col-sm-12"><p class="comment-form-author">
    <label for="name">' . esc_html__( 'Full Name', 'risehand' ) . '</label>
    <input id="author" placeholder="' . esc_attr__( 'ex. John Doe', 'risehand' ) . '" name="author" type="text" value="' .
    esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />'.
    '</p></div>';                                               
    $fields['cookies'] = '<div class="col-sm-12"><p class="custom-control custom-checkbox">
    <input id="wp-comment-cookies-consent"  class="custom-control-input" name="wp-comment-cookies-consent" type="checkbox" value="">
    <label  class="custom-control-label pl-1 c-gray" for="wp-comment-cookies-consent">
    ' .  esc_html__('Save my name, and email in this browser for the next time I comment.', 'risehand' ) .'
    </label>
 </p></div></div>';
$fields['clear'] = '<div class="clearfix"></div>';
return $fields;
}
add_filter('comment_form_default_fields','risehand_comment_form'); 