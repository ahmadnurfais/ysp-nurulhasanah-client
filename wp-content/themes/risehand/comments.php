<?php
/*
**  ==============================   
**  risehand Comment File
**  ==============================
**  if the current post is protected by a password and
**  the visitor has not yet entered the password we will
**  return early without loading the comments.
*/
if(post_password_required()):
	return;
endif;
?>
 <div class="sec_comments comment-form" id="comment">
        <div class="container_no">
            <div class="row justify-content-center">
                <div class="col-lg-12"> 
                    <?php  $args = array(
                            'label_submit'          =>  esc_html__( 'Post  comment', 'risehand' ),
                            'title_reply'           =>  esc_html__( 'Post a comment', 'risehand' ),
                            'comment_notes_before'  =>  '<div class="row"><div class="col-lg-12"><p class="title_para">'.esc_html__( 'Your email address will not be published.', 'risehand' ).'</p></div>',
                            'comment_field'         =>  '<div class="col-lg-12"><p class="comment-form-comment"><label for="comment">' . esc_html( 'Leave a Reply', 'risehand' ) . '</label><textarea placeholder="' . esc_attr__( 'Write your comment here...', 'risehand' ) . '" id="commenttextarea" name="comment"  rows="12" aria-required="true">' .'</textarea></p></div>'
                        );
                        comment_form( $args );
                    ?>
                    <?php // You can start editing here -- including this comment! ?>
                        <?php if(have_comments()): ?>
                            <div class="comment_box comments-area">
                                <div class="title_commnt">
                                    <div class="title_no_a_30 title_30 mb_25">
                                        <?php echo comments_popup_link( 
                                            esc_html__( '0 Comments', 'risehand' ), 
                                            esc_html__( '1 Comment', 'risehand' ),  
                                            esc_html__( '% Comments', 'risehand' ),
                                            esc_html__( 'Comments are Closed', 'risehand'),
                                        ); 
                                        ?>
                                    </div>
                                </div>
                            <?php if(get_comment_pages_count() > 1 && get_option( 'page_comments' )) : // Are there comments to navigate through? ?>
                                <nav id="comment-nav-above" class="navigation  comment-navigation" role="navigation">
                                        <div class="title_no_a_24">
                                            <?php esc_html_e( 'Comment navigation', 'risehand' ); ?>
                                        </div>
                                <!-- .nav-links -->
                                    <div class="nav-links">
                                        <div class="nav-previous">
                                            <?php previous_comments_link( esc_html__( 'Older Comments', 'risehand' ) ); ?>
                                        </div>
                                        <div class="nav-next">
                                            <?php next_comments_link( esc_html__( 'Newer Comments', 'risehand' ) ); ?>
                                        </div>
                                    </div>
                                <!-- .nav-links -->
                            </nav>
                        <!-- #comment-nav-above -->
                        <?php endif; // Check for comment navigation. ?>
                            <div class="comment_inner body_commnt">
                                <ol class="comment-list">
                                <?php
                                    wp_list_comments(array(
				                        'style'       => 'ol',
				                        'short_ping'  => true,
				                        'avatar_size' => 65,
				                        'callback'    => 'risehand_comment'
			                        ));
			                    ?>
                        </ol>
                        <!-- .comment-list -->
                    </div>
                    <?php if( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
                    <nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
                        <div class="title_no_a_24">
                            <?php esc_html_e( 'Comment navigation', 'risehand' ); ?>
                        </div>
                        <div class="nav-links">
                            <div class="nav-previous">
                                <?php previous_comments_link(esc_html__( 'Older Comments', 'risehand')); ?>
                            </div>
                            <div class="nav-next">
                                <?php next_comments_link( esc_html__( 'Newer Comments', 'risehand')); ?>
                            </div>
                        </div>
                        <!-- .nav-links -->
                    </nav>
                    <!-- #comment-nav-below -->
                    <?php endif; // Check for comment navigation. ?>
                <?php endif; // Check for have_comments(). ?>
                <?php    if(!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments' )): ?>
                    <p class="no-comments">
                        <?php esc_html_e( 'Comments are closed.', 'risehand' ); ?>
                    </p>
                </div>
            <?php endif; ?>
            </div>
        </div>   
    </div>
</div>      