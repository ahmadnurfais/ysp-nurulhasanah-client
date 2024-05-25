<?php
/*
** ============================== 
**  Get Plugin List 
** ==============================
*/
class Getrequiredpluigns {
	public function __construct() {
		add_action( 'tgmpa_register', array( $this, 'risehand_register_required_plugins' ) );
	}
	public function risehand_register_required_plugins() { 
        $plugins = array( 
            array(
                'name' => esc_html__('GiveWP', 'risehand') ,
                'slug' => 'give',
                'required' => true,
                'force_activation' => false,
                'force_deactivation' => false,
            ) , 
            array(
                'name' => esc_html__('Elementor', 'risehand') ,
                'slug' => 'elementor',
                'required' => true,
                'force_activation' => false,
                'force_deactivation' => false,
            ) , 
            array(
                'name' => esc_html__('A Wpbakery Builder', 'risehand') ,
                'slug' => 'js_composer',
                'source'   =>  'https://themepanthers.com/updatedplugin/js_composer.zip',
                'required' => true,
                'force_activation' => false,
                'force_deactivation' => false,
            ) , 
            array(
                'name' => esc_html__('A Risehand Addons', 'risehand') ,
                'slug' => 'risehand-addons',
                'source'  => get_template_directory() . '/includes/plugins/risehand-addons.zip',
                'required' => true,
                'force_activation' => false,
                'force_deactivation' => false,
            ) , 
            array(
				'name'               => esc_html__( 'A Contact Form 7', 'risehand' ),
				'slug'               => 'contact-form-7',
				'required'           => false,
				'force_activation'   => false,
				'force_deactivation' => false,
			),
            array(
                'name' => esc_html__('MC4WP: Mailchimp for WordPress', 'risehand') ,
                'slug' => 'mailchimp-for-wp',
                'required' => false,
                'force_activation' => false,
                'force_deactivation' => false,
            ),  
            array(
                'name' => esc_html__('Woocommerce', 'risehand') ,
                'slug' => 'woocommerce',
                'required' => false,
                'force_activation' => false,
                'force_deactivation' => false,
            ),  
            array(
                'name' => esc_html__('The Events Calendar', 'risehand') ,
                'slug' => 'the-events-calendar',
                'required' => false,
                'force_activation' => false,
                'force_deactivation' => false,
            ) , 
         );

     	$config = array(
            'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
            'default_path' => '',                      // Default absolute path to bundled plugins.
            'menu'         => 'tgmpa-install-plugins', // Menu slug.
            'parent_slug'  => 'themes.php',            // Parent menu slug.
            'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
            'has_notices'  => true,                    // Show admin notices or not.
            'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
            'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
            'is_automatic' => false,      
		);

		tgmpa( $plugins, $config );
	}
}
new Getrequiredpluigns();


 
