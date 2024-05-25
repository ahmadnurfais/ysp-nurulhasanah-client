<?php
/*
**============================== 
** Risehand Default Page Header
**==============================
*/ 
add_action('risehand_defalut_page_header',  'risehand_page_header');
function  risehand_page_header() {   
  if(!risehand_has_page_header()){
    return '';
  }
  if(is_page_template( 'template-empty.php' )   || is_singular('sliders') || is_page_template('template-homepage.php') || is_404() || is_singular('header') || is_singular('sticky_header') || is_singular('footer') || is_singular('mega_menu') || is_post_type_archive('product') || is_tax( 'product_cat')  || is_tax('brand') || is_singular('product')):
    return false;
  endif; 
  $page_header_alignment = get_risehand_option('page_header_alignment');
  $title_text = get_post_meta(get_the_ID() , 'page_header_title', true); 
  // blog single 
  $breadcrumb_enable =  get_risehand_option('breadcrumb_enable'); 
  ?>  
  <section class="page_header_default style_one page_header_<?php echo esc_attr($page_header_alignment); ?> <?php if(!empty($title_text)): ?> enabled_custom_title <?php endif; ?>">
    <div class="page_header_inner">
    <?php risehand_get_page_header_image(); ?>
        <div class="page_header_content">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="banner_title_inner">
                  <div class="pattern_mask_1"></div>
                  <div class="title">
                  <?php the_archive_title('<span class="main_tit">', '</span>'); ?>
                  <?php if(!empty($title_text)): ?>
                      <small class="extra_tit"> <?php echo  do_shortcode(wp_kses($title_text , wp_kses_allowed_html('post'))); ?> </small>
                  <?php endif; ?>
                  </div>
                  <?php if($breadcrumb_enable == true): ?> 
                    <?php do_action('risehand_custom_breadcrumb'); ?> 
                <?php endif; ?> 
                </div> 
              
              </div>
            </div>
         </div>
        </div>
      </div>
    </section>  
<?php  } 