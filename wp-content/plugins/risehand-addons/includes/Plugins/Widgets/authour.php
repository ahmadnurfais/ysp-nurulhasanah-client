<?php 
// Function to register the custom author widget
function register_author_widget() {
    register_widget('Author_Widget');
}
add_action('widgets_init', 'register_author_widget');

// Custom author widget class
class Author_Widget extends WP_Widget {

    // Constructor
    function __construct() {
        parent::__construct(
            'author_widget',
            __('Risehand - Author Widget', 'risehand-addons'),
            array('description' => __('A widget to display information about the selected author.', 'risehand-addons'))
        ); 
  
    }
 
    // Widget output
    public function widget($args, $instance) {
        global $post;
        ?> 
      <style>
    <?php if (!empty($instance['background_color'])) : ?>
        .widget_author_widget {
            background: <?php echo esc_attr($instance['background_color']); ?>;
        }
    <?php else : ?>
        .widget_author_widget {
            background: var(--color-set-one-3);
        }
    <?php endif; ?>

    <?php if (!empty($instance['author_name_color'])) : ?>
        .widget_author_widget .title_26 a {
            color: <?php echo esc_attr($instance['author_name_color']); ?>;
        }
    <?php else : ?>
        .widget_author_widget .title_26 a {
            color: var(--color-white);
        }
    <?php endif; ?>

    <?php if (!empty($instance['author_designation_color'])) : ?>
        .widget_author_widget .font_special {
            color: <?php echo esc_attr($instance['author_designation_color']); ?>;
        }
    <?php else : ?>
        .widget_author_widget .font_special  {
            color: var(--color-set-one-2);
        }
    <?php endif; ?>
    

    <?php if (!empty($instance['content_color'])) : ?>
        .widget_author_widget p {
            color: <?php echo esc_attr($instance['content_color']); ?>;
        }
    <?php else : ?>
        .widget_author_widget p {
            color: rgba(var(--color-white-rgb), .5);
        }
    <?php endif; ?>

    <?php if (!empty($instance['media_background_color'])) : ?>
        .widget_author_widget .authour-share li button {
            background: <?php echo esc_attr($instance['media_background_color']); ?>;
        }
    <?php endif; ?>

    <?php if (!empty($instance['media_icon_color'])) : ?>
        .widget_author_widget .authour-share li button {
            color: <?php echo esc_attr($instance['media_icon_color']); ?>;
        }
    <?php endif; ?>
 
       .widget_author_widget{
            position: relative;
            padding:50px 30px!important;  
            text-align:center;
        }
        .widget_author_widget .authour-share {
            gap:.8rem;
            margin:unset;
            padding: 15px 0 0 0;
            flex-wrap:wrap;
            justify-content:center;
        }
        .widget_author_widget .author-avatar{ 
            margin:0px 0px 20px
        }
        .widget_author_widget .author-avatar img{
            height:150px;
            width:150px;
            margin:auto;
            border-radius:150px;
        }
        .widget_author_widget .authour-share li {
            padding: unset;
            margin:unset;
            list-style:none;
        }
        .widget_author_widget .authour-share li button{
            padding: 10px;
            margin:unset;
            border-radius:50px; 
         }
         .widget_author_widget .authour-share li button i{
            font-size:18px
         }
         .widget_author_widget .font_special{
            font-size:18px;
            margin-bottom:1rem;
            text-decoration:unset!important;
         }
        </style>
        <?php
        $author_id = $instance['author'];
        $author_designation = !empty($instance['author_designation']) ? esc_html($instance['author_designation']) : 'CEO & Founder';
        $custom_avatar = $instance['custom_avatar'];
        $author_name = get_the_author_meta('display_name', $author_id);
        $author_bio = get_the_author_meta('description', $author_id);
        // Get the Gravatar URL
        $gravatar_url = get_avatar(get_the_author_meta('ID'), apply_filters('risehand-authour', 100));
        // Use custom avatar if provided, else use Gravatar or default avatar
        $author_avatar = '';
        if (!empty($custom_avatar)) {
            $author_avatar = '<img src="' . esc_url($custom_avatar) . '" alt="' . esc_attr($author_name) . '" class="custom-avatar">';
        } else {
            $author_avatar = $gravatar_url;
        }
        echo $args['before_widget'];
        // Display author information
        echo '<div class="author-widget">';
        echo '<div class="author-avatar">' . $author_avatar . '</div>';
        echo '<div class="author-info">';
        echo '<div class="title_26 author-name"><a href="' . get_author_posts_url($author_id) . '" class="author-link">' . $author_name . '</a></div>';
        if(!empty($author_designation)):
        echo '<div class="font_special author-designation">' . $author_designation . '</div>';
        endif;
        echo '<p class="author-bio">' . $author_bio . '</p>';
        echo '</div>';
        echo '</div>';

        // Social share buttons
        if (!$instance['hide_media_icons']) {
            echo '<div>';
            echo '<ul class="d-flex align-items-center authour-share">';

            // Array of social media platforms and their icons
            $social_media_buttons = array(
                'facebook' => array('icon' => 'risehand-facebook', 'hide_option' => 'facebook_hide'),
                'twitter' => array('icon' => 'risehand-twitter', 'hide_option' => 'twitter_hide'),
                'telegram' => array('icon' => 'risehand-telegram1', 'hide_option' => 'telegram_hide'),
                'skype' => array('icon' => 'risehand-skype1', 'hide_option' => 'skype_hide'),
                'reddit' => array('icon' => 'risehand-reddit-circle', 'hide_option' => 'reddit_hide'),
                'email' => array('icon' => 'risehand-mail1', 'hide_option' => 'email_hide'),
                'linkedin' => array('icon' => 'risehand-linkedin2', 'hide_option' => 'linkedin_hide'),
                'whatsapp' => array('icon' => 'risehand-whatsapp1', 'hide_option' => 'whatsapp_hide'),
                // Add more social media platforms as needed
            );

            // Generate social media buttons based on enable/disable options
            foreach ($social_media_buttons as $platform => $data) {
                $hide_option = $data['hide_option'];
                if (!$instance[$hide_option]) {
                    echo '<li>';
                    echo '<button class="m_icon" data-toggle="tooltip" data-placement="right" title="' . $platform . '" data-sharer="' . $platform . '" data-title="' . $author_name . '" data-url="' . get_author_posts_url(get_the_author_meta('ID')) . '">';
                    echo '<i class="' . $data['icon'] . '"></i>';
                    echo '</button>';
                    echo '</li>';
                }
            }

            echo '</ul>';
            echo '</div>';
        }

        echo $args['after_widget'];
    }

    // Widget form in the admin
    public function form($instance) {
        $author = isset($instance['author']) ? $instance['author'] : '';
        $author_designation = isset($instance['author_designation']) ? $instance['author_designation'] : '';
        $custom_avatar = isset($instance['custom_avatar']) ? $instance['custom_avatar'] : '';
        $background_color = isset($instance['background_color']) ? $instance['background_color'] : '';
        $author_name_color = isset($instance['author_name_color']) ? $instance['author_name_color'] : '';
        $author_designation_color = isset($instance['author_designation_color']) ? $instance['author_designation_color'] : ''; 
        $content_color = isset($instance['content_color']) ? $instance['content_color'] : '';
        $media_background_color = isset($instance['media_background_color']) ? $instance['media_background_color'] : '';
        $media_icon_color = isset($instance['media_icon_color']) ? $instance['media_icon_color'] : '';
        $hide_media_icons = isset($instance['hide_media_icons']) ? $instance['hide_media_icons'] : false; 
        // Individual enable/disable options for each social media platform
        $facebook_hide = isset($instance['facebook_hide']) ? $instance['facebook_hide'] : false;
        $twitter_hide = isset($instance['twitter_hide']) ? $instance['twitter_hide'] : false;
        $telegram_hide = isset($instance['telegram_hide']) ? $instance['telegram_hide'] : false;
        $skype_hide = isset($instance['skype_hide']) ? $instance['skype_hide'] : false;
        $reddit_hide = isset($instance['reddit_hide']) ? $instance['reddit_hide'] : false;
        $email_hide = isset($instance['email_hide']) ? $instance['email_hide'] : false;
        $linkedin_hide = isset($instance['linkedin_hide']) ? $instance['linkedin_hide'] : false;
        $whatsapp_hide = isset($instance['whatsapp_hide']) ? $instance['whatsapp_hide'] : false; 
        // Get a list of all users
        $users = get_users(); 
        // Widget title
        ?>
        <!-- Select Author -->
        <p>
            <label for="<?php echo $this->get_field_id('author'); ?>"><?php _e('Select Author:', 'risehand-addons'); ?></label>
            <select class="widefat" id="<?php echo $this->get_field_id('author'); ?>" name="<?php echo $this->get_field_name('author'); ?>">
                <?php
                foreach ($users as $user) {
                    echo '<option value="' . esc_attr($user->ID) . '" ' . selected($author, $user->ID, false) . '>' . esc_html($user->display_name) . '</option>';
                }
                ?>
            </select>
        </p>

        <!-- Custom Avatar -->
        <?php $custom_avatar = !empty($instance['custom_avatar']) ? esc_url($instance['custom_avatar']) : ''; ?>
        <p> 
            <label for="<?= $this->get_field_id('custom_avatar'); ?>">Media URL</label>
            <?php if(!empty($custom_avatar)): ?>
            <span><img src="<?php echo esc_attr($custom_avatar); ?>" alt="img" style="width:100%;" /><span>
                <?php endif; ?>
            <input type="text" class="widefat" id="<?= $this->get_field_id('custom_avatar'); ?>" name="<?= $this->get_field_name('custom_avatar'); ?>" value="<?= esc_url($instance['custom_avatar']); ?>" style="margin-top:5px;" />
          
        </p>
        <!-- Custom Designation -->
        <p>
            <label for="<?php echo $this->get_field_id('author_designation'); ?>">
                <?php esc_html_e('Author Designation:', 'risehand-addons'); ?>
            </label>
            <input class="widefat" id="<?php echo $this->get_field_id('author_designation'); ?>" name="<?php echo $this->get_field_name('author_designation'); ?>" type="text" value="<?php echo $author_designation; ?>">
        </p>
  
        <!-- Background Color -->
        <p>
            <label for="<?php echo $this->get_field_id('background_color'); ?>"><?php _e('Background Color Code:', 'risehand-addons'); ?></label>
            <input class="widefat authour-color-picker" type="text" id="<?php echo $this->get_field_id('background_color'); ?>" name="<?php echo $this->get_field_name('background_color'); ?>" value="<?php echo esc_attr($background_color); ?>">
        </p>
        

        <!-- Author Name Color -->
        <p>
            <label for="<?php echo $this->get_field_id('author_name_color'); ?>"><?php _e('Author Name Color Code:', 'risehand-addons'); ?></label>
            <input class="widefat authour-color-picker" type="text" id="<?php echo $this->get_field_id('author_name_color'); ?>" name="<?php echo $this->get_field_name('author_name_color'); ?>" value="<?php echo esc_attr($author_name_color); ?>">
        </p>
        <!-- Author Designation Color -->
        <p>
            <label for="<?php echo $this->get_field_id('author_designation_color'); ?>"><?php _e('Author Name Designation Code:', 'risehand-addons'); ?></label>
            <input class="widefat authour-color-picker" type="text" id="<?php echo $this->get_field_id('author_designation_color'); ?>" name="<?php echo $this->get_field_name('author_designation_color'); ?>" value="<?php echo esc_attr($author_designation_color); ?>">
        </p> 
        <!-- Content Color -->
        <p>
            <label for="<?php echo $this->get_field_id('content_color'); ?>"><?php _e('Content Color Code:', 'risehand-addons'); ?></label>
            <input class="widefat authour-color-picker" type="text" id="<?php echo $this->get_field_id('content_color'); ?>" name="<?php echo $this->get_field_name('content_color'); ?>" value="<?php echo esc_attr($content_color); ?>">
        </p>

        <!-- Media Background Color -->
        <p>
            <label for="<?php echo $this->get_field_id('media_background_color'); ?>"><?php _e('Media Background Color Code:', 'risehand-addons'); ?></label>
            <input class="widefat authour-color-picker" type="text" id="<?php echo $this->get_field_id('media_background_color'); ?>" name="<?php echo $this->get_field_name('media_background_color'); ?>" value="<?php echo esc_attr($media_background_color); ?>">
        </p>

        <!-- Media Icon Color -->
        <p>
            <label for="<?php echo $this->get_field_id('media_icon_color'); ?>"><?php _e('Media Icon Color Code:', 'risehand-addons'); ?></label>
            <input class="widefat authour-color-picker" type="text" id="<?php echo $this->get_field_id('media_icon_color'); ?>" name="<?php echo $this->get_field_name('media_icon_color'); ?>" value="<?php echo esc_attr($media_icon_color); ?>">
        </p>

        <!-- Hide Media Icons Option -->
        <p>
            <input type="checkbox" id="<?php echo $this->get_field_id('hide_media_icons'); ?>" name="<?php echo $this->get_field_name('hide_media_icons'); ?>" <?php checked($hide_media_icons); ?>>
            <label for="<?php echo $this->get_field_id('hide_media_icons'); ?>"><?php _e('Hide Media Icons', 'risehand-addons'); ?></label>
        </p>

        <!-- Individual enable/disable options for each social media platform -->
        <p>
            <input type="checkbox" id="<?php echo $this->get_field_id('facebook_hide'); ?>" name="<?php echo $this->get_field_name('facebook_hide'); ?>" <?php checked($facebook_hide); ?>>
            <label for="<?php echo $this->get_field_id('facebook_hide'); ?>"><?php _e('Hide Facebook', 'risehand-addons'); ?></label>
        </p>

        <p>
            <input type="checkbox" id="<?php echo $this->get_field_id('twitter_hide'); ?>" name="<?php echo $this->get_field_name('twitter_hide'); ?>" <?php checked($twitter_hide); ?>>
            <label for="<?php echo $this->get_field_id('twitter_hide'); ?>"><?php _e('Hide Twitter', 'risehand-addons'); ?></label>
        </p>

        <p>
            <input type="checkbox" id="<?php echo $this->get_field_id('telegram_hide'); ?>" name="<?php echo $this->get_field_name('telegram_hide'); ?>" <?php checked($telegram_hide); ?>>
            <label for="<?php echo $this->get_field_id('telegram_hide'); ?>"><?php _e('Hide Telegram', 'risehand-addons'); ?></label>
        </p>

        <p>
            <input type="checkbox" id="<?php echo $this->get_field_id('skype_hide'); ?>" name="<?php echo $this->get_field_name('skype_hide'); ?>" <?php checked($skype_hide); ?>>
            <label for="<?php echo $this->get_field_id('skype_hide'); ?>"><?php _e('Hide Skype', 'risehand-addons'); ?></label>
        </p>

        <p>
            <input type="checkbox" id="<?php echo $this->get_field_id('reddit_hide'); ?>" name="<?php echo $this->get_field_name('reddit_hide'); ?>" <?php checked($reddit_hide); ?>>
            <label for="<?php echo $this->get_field_id('reddit_hide'); ?>"><?php _e('Hide Reddit', 'risehand-addons'); ?></label>
        </p>

        <p>
            <input type="checkbox" id="<?php echo $this->get_field_id('email_hide'); ?>" name="<?php echo $this->get_field_name('email_hide'); ?>" <?php checked($email_hide); ?>>
            <label for="<?php echo $this->get_field_id('email_hide'); ?>"><?php _e('Hide Email', 'risehand-addons'); ?></label>
        </p>

        <p>
            <input type="checkbox" id="<?php echo $this->get_field_id('linkedin_hide'); ?>" name="<?php echo $this->get_field_name('linkedin_hide'); ?>" <?php checked($linkedin_hide); ?>>
            <label for="<?php echo $this->get_field_id('linkedin_hide'); ?>"><?php _e('Hide LinkedIn', 'risehand-addons'); ?></label>
        </p>

        <p>
            <input type="checkbox" id="<?php echo $this->get_field_id('whatsapp_hide'); ?>" name="<?php echo $this->get_field_name('whatsapp_hide'); ?>" <?php checked($whatsapp_hide); ?>>
            <label for="<?php echo $this->get_field_id('whatsapp_hide'); ?>"><?php _e('Hide WhatsApp', 'risehand-addons'); ?></label>
        </p>
        <?php
    }

    // Update widget settings
    public function update($new_instance, $old_instance) {
        $instance = array();
      
        $instance['author'] = (isset($new_instance['author'])) ? intval($new_instance['author']) : 0;
        $instance['custom_avatar'] = (!empty($new_instance['custom_avatar'])) ? esc_url_raw($new_instance['custom_avatar']) : '';
        $instance['author_designation'] = (!empty($new_instance['author_designation'])) ? strip_tags($new_instance['author_designation']) : '';
            // Additional options
            $instance['background_color'] = sanitize_text_field($new_instance['background_color']);
            $instance['author_name_color'] = sanitize_text_field($new_instance['author_name_color']);
            $instance['author_designation_color'] = sanitize_text_field($new_instance['author_designation_color']);
            $instance['content_color'] = sanitize_text_field($new_instance['content_color']);
            $instance['media_background_color'] = sanitize_text_field($new_instance['media_background_color']);
            $instance['media_icon_color'] = sanitize_text_field($new_instance['media_icon_color']);
            $instance['hide_media_icons'] = isset($new_instance['hide_media_icons']) ? $new_instance['hide_media_icons'] : false;
    
            // Individual enable/disable options for each social media platform
            $instance['facebook_hide'] = isset($new_instance['facebook_hide']) ? $new_instance['facebook_hide'] : false;
            $instance['twitter_hide'] = isset($new_instance['twitter_hide']) ? $new_instance['twitter_hide'] : false;
            $instance['telegram_hide'] = isset($new_instance['telegram_hide']) ? $new_instance['telegram_hide'] : false;
            $instance['skype_hide'] = isset($new_instance['skype_hide']) ? $new_instance['skype_hide'] : false;
            $instance['reddit_hide'] = isset($new_instance['reddit_hide']) ? $new_instance['reddit_hide'] : false;
            $instance['email_hide'] = isset($new_instance['email_hide']) ? $new_instance['email_hide'] : false;
            $instance['linkedin_hide'] = isset($new_instance['linkedin_hide']) ? $new_instance['linkedin_hide'] : false;
            $instance['whatsapp_hide'] = isset($new_instance['whatsapp_hide']) ? $new_instance['whatsapp_hide'] : false;
        return $instance;
    }
}


function enqueue_author_widget_script() {
    wp_enqueue_script('author-widget-script', RISEHAND_ADDONS_URL . 'includes/Plugins/Widgets/authour.js', array('jquery', 'wp-color-picker', 'media-upload', 'thickbox'), '', true);

    // Pass variables to script
    wp_localize_script('author-widget-script', 'author_widget_vars', array(
        'choose_or_upload_media' => __('Choose or Upload Media', 'risehand-addons'),
        'select' => __('Select', 'risehand-addons')
    ));

    // Enqueue necessary scripts for media uploader
    wp_enqueue_media();
    wp_enqueue_script('thickbox');
}

add_action('admin_enqueue_scripts', 'enqueue_author_widget_script');

