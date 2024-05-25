<?php
 $form_id = get_the_ID(); 
 $risehand_givewp_updates = apply_filters( 'risehand_givewp_updates', $form_id );
 $show_goal = give_get_meta( $form_id, '_give_goal_option', true ); 
 $risehand_raised_donor_count = apply_filters( 'risehand_raised_donor_count', $form_id);
 $give_archive_column = get_risehand_option('give_archive_column');
?>
<div class="blog-wrapper <?php echo esc_attr($give_archive_column); ?>">
<div class="donation_box_one do_common_style mb_35 d_flex  <?php if(has_post_thumbnail()): ?>has_images<?php else: ?>no_images<?php endif; ?>">
         <?php if ( has_post_thumbnail() ) : ?>
             <div class="image-box trans img_obj_fit_center">
                 <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                     <?php the_post_thumbnail('risehand-image-grid-400-425 trans'); ?>
                 </a>
                 <?php do_action('get_risehand_give_forms_category'); ?>
             </div>
          <?php endif; ?> 
          <div class="content">
             <?php if ($show_goal != 'disabled'):?>
             <div class="donation_raises trans ">
                 <?php do_action('risehand_get_donation_progressbar'); ?>
                 <div class="goals_details d_flex">
                     <div class="trans"><span class="trans"><?php echo esc_html( $risehand_givewp_updates['actual'] ); ?></span> <?php echo esc_html__('Donated of' , 'risehand'); ?> </div>
                     <div class="trans"><span class="trans"><?php echo esc_html( $risehand_givewp_updates['goal'] ); ?></span> <?php echo esc_html__('Goals' , 'risehand'); ?></div> 
                 </div> 
             </div>
             <?php endif; ?>  
             <div class="depth_content"> 
             <?php the_title( '<div class="title_24 trim-2 mb_15"><a href="'. esc_url(get_permalink()) .'" rel="bookmark" class="mb_0">', '</a></div>' ); ?>
             <?php $excerpt = '';
              if (has_excerpt()): ?>
                 <p class="mt_15 desc_p">
                     <?php $excerpt = wp_strip_all_tags(wp_trim_words(get_the_excerpt(), 15));
                         echo esc_attr($excerpt);
                     ?>
                 </p>
             <?php endif; ?>  
             <?php
                    $settings_form = array(
                        'id' => $form_id,  // integer.
                        'show_title' => false, // boolean. 
                        'show_content' => 'none', //above, below, or none
                        'display_style' => 'button', //modal, button, and reveal
                        'show_goal' => false, // boolean.
                        'continue_button_title' => '' //string 
                    );  
                    echo give_get_donation_form( $settings_form ); 
                ?>
             <div class="goalsdetails d_flex">
                 <?php if ($show_goal != 'disabled'):?>
                     <div class="goal_received">
                         <span class="text"><?php esc_html_e( 'Goal', 'risehand' ); ?></span>
                         <span class="result"><?php echo esc_html( $risehand_givewp_updates['goal'] ); ?></span>
                     </div>
                 <?php endif; ?>
                 <div class="income_received"> 
                    <div class="incr"> 
                     <span class="text"><?php esc_html_e( 'Raised', 'risehand' ); ?></span>
                     <span class="result"><?php echo esc_html( $risehand_givewp_updates['actual'] ); ?></span>
                     </div>
                 </div>
                 <div class="still_go">
                     <span class="text"><?php echo esc_html__('To Go ' , 'risehand'); ?></span>
                     <small class="result"><?php do_action('rishand_get_fund_to_go'); ?></small>  
                 </div>
             </div>
             </div>
         </div>
     </div>
     </div>