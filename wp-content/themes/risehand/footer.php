<?php
/*
**==============================   
** Risehand Footer
**==============================
*/
?>
            </div>
          </div>
        </div>
      </div>
      <?php // cookies ?>
      <?php do_action('risehand_cookies_get'); ?>  
      <?php // cookies ?>
      <?php // mobile nav ?>
      <?php  do_action('risehand_get_mobile_menu');  ?>
      <?php // mobile nav ?>  
      <?php // top content ?>
      <?php do_action('risehand_get_back_to_top'); ?>
      </div> 
      <?php // top content ?> 
      <?php do_action('risehand_get_footer'); ?>  
      <?php // ================= CART =================== ?>
      <?php if(get_risehand_option('disable_mini_cart') == true):  
              if(class_exists('woocommerce')):
            $items_counts = is_object(WC()->cart ) ? WC()->cart->get_cart_contents_count() : ''; ?>
            <div class="mini-cart-icon">
            <i class="risehand-cart"></i>
                <span class="pro-count"> 
                    <?php if(!empty($items_counts)): ?>
                        <?php echo esc_attr($items_counts) ? esc_attr($items_counts) : '&nbsp;'; else: echo esc_html('0'); ?>
                    <?php endif; ?> 
                </span>
            </div>
            <?php endif; endif; ?>
        <?php  if(get_risehand_option('disable_mini_cart') == true): if(class_exists('woocommerce')): global  $woocommerce;  
        $cart = WC()->cart; ?>
        <div class="cart_box"> 
        <div class="overlay_box"></div>
                <div class="widget_shopping_carts">
                <div class="d-flex top_content alin-items-center"> 
                    <div class="box-cart-close"><i class="risehand-cross1"></i></div> 
                    <?php  if(!empty($cart)) { do_action('nioland_get_empty_cart'); } ?>
                 </div>
                    <div class="widget_shopping_cart_content">
                    <?php woocommerce_mini_cart(); ?>
                    </div>
                </div>
            </div>
            <?php endif; endif; ?>
        <?php // ================= CART END =================== ?>
    </div> 
    <!--page_wapper--> 
    <?php wp_footer(); ?>
  </body>
</html>