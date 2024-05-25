<?php
/*
====================
risehand Menu Option
====================
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} 
class risehand_Admin
{
    public function __construct()
    {
        // Register walker replacement
        add_action('wp_update_nav_menu_item', array($this, 'risehand_save_custom_fields'), 10, 3);
        add_action('wp_nav_menu_item_custom_fields', array($this, 'risehand_custom_menu_field'), 10, 4);
        if (is_admin()) {
            add_action('admin_enqueue_scripts', array($this, 'adminscripts'));
        }
    } 
    /*
    ==========================================
        admin js
    ==========================================
    */
    public function adminscripts()
    {
        global $pagenow;
        wp_enqueue_media();
        wp_enqueue_style('wp-color-picker');
        wp_enqueue_script('wp-color-picker');
        if ('nav-menus.php' == $pagenow) { 
            wp_enqueue_style('risehandicons', get_template_directory_uri() . '/assets/fonts/risehand/style.css', array(), '1.0.0', 'all'); 
            wp_enqueue_script('risehand-admin-menu', get_template_directory_uri() . '/includes/admin/dashboard/assets/js/admin-menu.js');
        }
    }

    /*
    ==========================================
        Save Fields
    ==========================================
    */
    public function risehand_save_custom_fields($menu_id, $menu_item_db_id, $args)
    {
        $risehand_fields = array(
            'show_as_megamenu',
            'show_icon',
            'show_bagde',
            'badge_item',
            'badge_color',
            'badge_bg_color',
            'megamenu_select',
            'image_type',
            'menu_image',
            'select_icon',
            'columnsizes', 
            'dropdown_positions',
            'desc_color',
            'icon_color',
            'menu_color',
            'disable_menu',
            'disable_menu_mobile',
        );

        foreach ($risehand_fields as $key) {
            $risehandvalue = isset($_REQUEST['menu-item-' . $key][$menu_item_db_id]) ? $_REQUEST['menu-item-' . $key][$menu_item_db_id] : '';
            update_post_meta($menu_item_db_id, 'risehand_menu_item_' . $key, $risehandvalue);
        }
    }

    /*
    ==========================================
        Custom Fields
    ==========================================
    */
    public function risehand_custom_menu_field($item_id, $item, $depth, $args)
    {
        $show_as_megamenu   = get_post_meta($item_id, 'risehand_menu_item_show_as_megamenu', true);
        $show_icon          = get_post_meta($item_id, 'risehand_menu_item_show_icon', true);
        $show_bagde         = get_post_meta($item_id, 'risehand_menu_item_show_bagde', true);
        $badge_item         = get_post_meta($item_id, 'risehand_menu_item_badge_item', true);
        $badge_color        = get_post_meta($item_id, 'risehand_menu_item_badge_color', true);
        $badge_bg_color     = get_post_meta($item_id, 'risehand_menu_item_badge_bg_color', true);
        $megamenu_select    = get_post_meta($item_id, 'risehand_menu_item_megamenu_select', true);
        $image_type         = get_post_meta($item_id, 'risehand_menu_item_image_type', true);
        $menu_image         = get_post_meta($item_id, 'risehand_menu_item_menu_image', true);
        $select_icon        = get_post_meta($item_id, 'risehand_menu_item_select_icon', true);
        $columnsizes        = get_post_meta($item_id, 'risehand_menu_item_columnsizes', true); 
        $dropdown_position      = get_post_meta($item_id, 'risehand_menu_item_dropdown_positions', true);
        $desc_color         = get_post_meta($item_id, 'risehand_menu_item_desc_color', true);
        $icon_color         = get_post_meta($item_id, 'risehand_menu_item_icon_color', true);
        $menu_color         = get_post_meta($item_id, 'risehand_menu_item_menu_color', true);
        $disable_menu       = get_post_meta($item_id, 'risehand_menu_item_disable_menu', true);
        $disable_menu_mobile = get_post_meta($item_id, 'risehand_menu_item_disable_menu_mobile', true);
        // enable disable
        $megamenu_hide_show = ($show_as_megamenu != 'enabled') ? 'hidden-field' : '';
        $notmegamenu_hide_show = ($show_as_megamenu == 'enabled') ? 'hidden-field' : '';
        $show_noimage_icon = ($show_icon != 'enabled') ? 'hidden-field' : '';
        $show_noicon_image = ($show_icon == 'enabled') ? 'hidden-field' : '';
        $badge_hide_show = ($show_bagde != 'enabled') ? 'hidden-field' : '';
        ?>
       	<div class="risehand_column_half_menu top_badge_megamenu_box">
			<p class="description-wide badgetext_desc risehand_same_call">

				<label for="label-menu-check-item-<?php echo esc_attr($item_id); ?>">
				<?php _e( 'Disable this Menu Item on Desktop', 'risehand' ); ?>
				<input type="checkbox" id="menu-item-<?php echo esc_attr($item_id); ?>" name="menu-item-disable_menu[<?php echo esc_attr($item_id); ?>]" class="menu-enable-oncheck" value="enabled" <?php checked($disable_menu,'enabled')?> />
				</label>
			</p>
			<p class="description-wide badgetext_desc risehand_same_call">
				<label for="label-menu-check-item-<?php echo esc_attr($item_id); ?>">
				<?php _e( 'Disable this Menu Item on Mobile', 'risehand' ); ?>
				<input type="checkbox" id="menu-item-<?php echo esc_attr($item_id); ?>" name="menu-item-disable_menu_mobile[<?php echo esc_attr($item_id); ?>]" class="menu-enable-oncheck" value="enabled" <?php checked($disable_menu_mobile,'enabled')?> />
				</label>
				</br>
			</p>
			<p class="description-wide badgetext_desc risehand_same_call">
		 
				<label for="label-badge-check-item-<?php echo esc_attr($item_id); ?>">
				<?php _e( 'Enable Badge', 'risehand' ); ?>
				<input type="checkbox" id="menu-item-<?php echo esc_attr($item_id); ?>" name="menu-item-show_bagde[<?php echo esc_attr($item_id); ?>]" class="badge-enable-oncheck" value="enabled" <?php checked($show_bagde,'enabled')?> />
				</label>
			</p>
			<p class="description description-wide badge_enabledisable_box badgetext_desc risehand_same_call <?php echo esc_attr($badge_hide_show);?>">
				<label class="description" for="menu-item-badge-text-<?php echo esc_attr( $item_id ); ?>"><?php esc_html_e( 'Badge', 'risehand' ); ?>
				<br>
				<input type="text" id="badge_item" name="menu-item-badge_item[<?php echo esc_attr($item_id); ?>]" class="widefat" value="<?php echo esc_attr($badge_item); ?>" placeholder="<?php esc_attr_e( 'HOT', 'risehand' ); ?>" />
				</label>
			</p>
			<div class="clearfix badge_colors  badge_enabledisable_box <?php echo esc_attr($badge_hide_show);?>">
			<p class="description-wide risehand_same_call">
				<label class="description" for="menu-item-badge-text-color-<?php echo esc_attr( $item_id ); ?>"><?php esc_html_e( 'Badge Text Color', 'risehand' ); ?>		</label>
				<br>
				<input type="text" id="badge_item_color" name="menu-item-badge_color[<?php echo esc_attr($item_id); ?>]" class="risehandmenubger-color-box" value="<?php echo esc_attr($badge_color); ?>" />
			</p>
			<p class="description-wide risehand_same_call">
				<label class="description" for="menu-item-badge-text-bg-<?php echo esc_attr( $item_id ); ?>"><?php esc_html_e( 'Badge Background Color', 'risehand' ); ?>			</label>	
				<br>
				<input type="text" id="badge_bg_color" name="menu-item-badge_bg_color[<?php echo esc_attr($item_id); ?>]" class="risehandmenubger-color-box" value="<?php echo esc_attr($badge_bg_color); ?>" />
			</p>
			</div>
			<?php if($item->menu_item_parent == '0' ): ?>
			<p class="description-wide  risehand_same_call badgetext_desc">
				<label for="menu-item-<?php echo esc_attr($item_id); ?>"><?php _e( 'Enable Mega Menu', 'risehand' ); ?> </label>
				<input type="checkbox" id="menu-item-<?php echo esc_attr($item_id); ?>" name="menu-item-show_as_megamenu[<?php echo esc_attr($item_id); ?>]" class="megamenu-enable-oncheck"  value="enabled" <?php checked($show_as_megamenu,'enabled')?> />
			</p>
			<p class="description-wide risehand_same_call megamenu_enabledisable_box  <?php echo esc_attr($megamenu_hide_show);?>">
				<label class="description"><?php esc_html_e( 'Megamenu Select', 'risehand' ); ?>
				<?php $pageslist = get_posts(
						array(
							'post_type'      => 'mega_menu',
							'posts_per_page' => -1,
						)
					);
				?>
				<select name="menu-item-megamenu_select[<?php echo esc_attr( $item_id ); ?>]" id="megamenu-select">
							<option value=""><?php esc_html_e( 'Select Template', 'risehand' ); ?></option>
							<?php if(!empty($pageslist)) {
								foreach ( $pageslist as $page ) {
									if ( ! empty( $megamenu_select ) && $megamenu_select == $page->ID ) {
										echo '<option selected value="' . $page->ID . '">' . $page->post_title . '</option>';
									} else {
										echo '<option value="' . $page->ID . '">' . $page->post_title . '</option>';
									}
								}
							}
						?>
						</select>
					</label>
				</p> 
			<?php endif; ?>
			<?php if($item->menu_item_parent == '0' ): ?>
				<ul>
					<li>
				<p class="description-wide risehand_same_call notmegamenu_enabledisable_box <?php echo esc_attr($notmegamenu_hide_show);?>">
					<label class="description"><?php esc_html_e( 'Dropdown Column', 'risehand' ); ?>
						<select id="menu-item-column-size-<?php echo esc_attr( $item_id ); ?>"  class="widefat risehand-menu-columnsize" name="menu-item-columnsizes[<?php echo esc_attr( $item_id ); ?>]">
							<option value="default" <?php selected( esc_attr( $columnsizes ), 'default', true); ?>><?php esc_html_e('Select Column', 'risehand'); ?></option>
							<option value="two_column" <?php selected( esc_attr( $columnsizes ), 'two_column', true); ?>><?php esc_html_e('Two Column', 'risehand'); ?></option>
							<option value="three_column" <?php selected( esc_attr( $columnsizes ), 'three_column', true); ?>><?php esc_html_e('Three Column', 'risehand'); ?></option>
							<option value="four_column" <?php selected( esc_attr( $columnsizes ), 'four_column', true); ?>><?php esc_html_e('Four Column', 'risehand'); ?></option>
							<option value="five_column" <?php selected( esc_attr( $columnsizes ), 'five_column', true); ?>><?php esc_html_e('Five Column', 'risehand'); ?></option>
							<option value="six_column" <?php selected( esc_attr( $columnsizes ), 'six_column', true); ?>><?php esc_html_e('Six Column', 'risehand'); ?></option>
							<option value="seven_column" <?php selected( esc_attr( $columnsizes ), 'seven_column', true); ?>><?php esc_html_e('Seven Column', 'risehand'); ?></option>
						</select>
					</label>
				</p> 
			</li>
				<li>
				<p class="description-wide risehand_same_call notmegamenu_enabledisable_box <?php echo esc_attr($notmegamenu_hide_show);?>">
					<label class="description"><?php esc_html_e( 'Dropdown Alignment', 'risehand' ); ?>
						<select id="menu-item-column-size-<?php echo esc_attr( $item_id ); ?>"  class="widefat risehand-menu-dropdown_positions" name="menu-item-dropdown_positions[<?php echo esc_attr( $item_id ); ?>]">
							<option value="noa" <?php selected( esc_attr( $columnsizes ), 'noa', true); ?>><?php esc_html_e('Select Align Type', 'risehand'); ?></option>
							<option value="fullwidth" <?php selected( esc_attr( $dropdown_position ), 'fullwidth', true); ?>><?php esc_html_e('Drop Down Full Width', 'risehand'); ?></option>
							<option value="alignleft" <?php selected( esc_attr( $dropdown_position ), 'alignleft', true); ?>><?php esc_html_e('Dropdown Align Left', 'risehand'); ?></option>
							<option value="alignright" <?php selected( esc_attr( $dropdown_position ), 'alignright', true); ?>><?php esc_html_e('Dropdown Align Right', 'risehand'); ?></option> 
						</select>
					</label>
				</p> 
				</li>
			</ul>
			<?php endif; ?>
			
			<?php // image or icon ?>
			<div class="admeniicon_entire_box">
			<p class="description-wide  risehand_same_call badgetext_desc">
				<label for="menu-item-<?php echo esc_attr($item_id); ?>"><?php _e( 'Enable Icon and disable Image option', 'risehand' ); ?> </label>
				<input type="checkbox" id="menu-item-<?php echo esc_attr($item_id); ?>" name="menu-item-show_icon[<?php echo esc_attr($item_id); ?>]" class="show-icon-enable-oncheck"  value="enabled" <?php checked($show_icon,'enabled')?> />
			</p> 
			<?php if($depth > 0 ): ?>
				<p class="description-wide risehand_same_call badgetext_desc no_showiconorimage <?php echo esc_attr($show_noicon_image); ?>">
					<label class="description"><?php esc_html_e( 'Image Style', 'risehand' ); ?></label>
					<select id="menu-item-image-type-<?php echo esc_attr( $item_id ); ?>"  class="widefat risehand-menu-image_type" name="menu-item-image_type[<?php echo esc_attr( $item_id ); ?>]">
						<option value="img_style_one" <?php selected( esc_attr( $image_type ), 'img_style_one', true); ?>><?php esc_html_e('Image Style One', 'risehand'); ?></option>
						<option value="img_style_two" <?php selected( esc_attr( $image_type ), 'img_style_two', true); ?>><?php esc_html_e('Image Style Two', 'risehand'); ?></option>
						<option value="img_style_three" <?php selected( esc_attr( $image_type ), 'img_style_three', true); ?>><?php esc_html_e('Image Style Three', 'risehand'); ?></option>
					</select>
				</p>
			<?php endif; ?>
			<?php // ============media============== ?>
			<?php // Get WordPress' media upload URL
				$upload_link = esc_url( get_upload_iframe_src( 'image', $item->ID ) );
				$your_img_src = wp_get_attachment_image_src( $menu_image, 'full' );
				$you_have_img = is_array( $your_img_src );
				?>
				<div class="description description-wide jt-bg-image-upload-wrapper  no_showiconorimage <?php echo esc_attr($show_noicon_image); ?>">
					<div class="custom-img-container">
						<?php if ( $you_have_img ) : ?>
							<img src="<?php echo esc_attr($your_img_src[0]) ?>" alt="menu-image" style="max-width:100%;" />
						<?php endif; ?>
					</div>

						<!-- Your add & remove image links -->
						<p class="hide-if-no-js">
							<a class="upload-custom-img <?php if ( $you_have_img  ) { echo 'hidden'; } ?>" 
							href="<?php echo esc_attr($upload_link) ?>">
								<?php echo esc_html__('Set custom image' , 'risehand'); ?>
							</a>
							<a class="delete-custom-img <?php if ( ! $you_have_img  ) { echo 'hidden'; } ?>" 
							href="#">
								<?php echo esc_html__('Remove this image' , 'risehand'); ?>
							</a>
						</p>
					<input class="risehand-img-menu-id" name="menu-item-menu_image[<?php echo esc_attr($item->ID); ?>]" type="hidden" value="<?php echo esc_attr( $menu_image ); ?>" />
				</div>
			<?php // ============media============== ?>
			<?php // icon  ?>
	<p class="description-wide risehand_same_call badgetext_desc showiconorimage <?php echo esc_attr($show_noimage_icon);?>">
        <label class="description"><?php esc_html_e('Enter the icon Class Name', 'risehand'); ?></label> 
			<input type="text" id="menu_select_icon<?php echo esc_attr($item_id); ?>" name="menu-item-select_icon[<?php echo esc_attr($item_id); ?>]" class="risehand-icon-box" value="<?php echo esc_attr($select_icon); ?>" />
        </select>
    </p>
	<p class="description-wide risehand_same_call badgetext_desc showiconorimage <?php echo esc_attr($show_noimage_icon);?>">
		<label class="description" for="menu-item-menu-icon-color-<?php echo esc_attr( $item_id ); ?>"><?php esc_html_e( 'Icon Color', 'risehand' ); ?>		</label>
		<br>
		<input type="text" id="menu_icon_color" name="menu-item-icon_color[<?php echo esc_attr($item_id); ?>]" class="risehandmenubger-color-box" value="<?php echo esc_attr($icon_color); ?>" />
	</p> 
	<?php // icon end ?>
	</div> 
 
		<ul>
		<li> 
		<p class="description-wide risehand_same_call badgetext_desc">
		<label class="description" for="menu-item-menu-desc-color-<?php echo esc_attr( $item_id ); ?>"><?php esc_html_e( 'Description Color', 'risehand' ); ?>		</label>
		<br>
		<input type="text" id="menu_desc_color" name="menu-item-desc_color[<?php echo esc_attr($item_id); ?>]" class="risehandmenubger-color-box" value="<?php echo esc_attr($desc_color); ?>" />
		</p> 
		</li>
		<li> 
		<p class="description-wide risehand_same_call badgetext_desc">
		<label class="description" for="menu-item-menu-menu-color-<?php echo esc_attr( $item_id ); ?>"><?php esc_html_e( 'Menu Color', 'risehand' ); ?>		</label>
		<br>
		<input type="text" id="menu_color" name="menu-item-menu_color[<?php echo esc_attr($item_id); ?>]" class="risehandmenubger-color-box" value="<?php echo esc_attr($menu_color); ?>" />
		</p> 
		</li>
			</ul>
		</div>
        <?php
    }
}

$obj_risehand_admin = new risehand_Admin();
