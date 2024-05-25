<?php
/*
 ** ==============================
 ** Dashboard
 ** ==============================
 */

class Risehand_Theme_Admin_Panel{
 
    public function __construct()
    {
        add_action("admin_menu", [$this, "add_admin_menu"]);
 
        add_action("admin_init", [$this, "register_settings"]);
        add_action( 'admin_notices', [$this,'display_admin_notice']); 
        add_action('template_redirect', [$this , 'check_maintenance_mode']);
        add_action('wp_enqueue_scripts', [$this , 'risehand_maintanance_scripts']); 
        add_action(
            "admin_notices",
            [$this, "display_header_admin_notice"],
            110
        );
        // Add styles and scripts for the admin panel
        add_action("admin_enqueue_scripts", [$this, "risehand_admin_scripts"]);  
    }
 
    public function add_admin_menu()
    {
        // Add a top-level menu item with a specific position
        add_menu_page(
            "Risehand", // Page title
            "Risehand", // Menu title
            "manage_options", // Capability required to access the menu item
            "risehand", // Menu slug
            [$this, "render_page"], // Callback function to render the page
            "dashicons-admin-settings", // Icon for the menu item
            2
        );
        // Add subpages
        add_submenu_page(
            "risehand",
            "Welcome",
            "Welcome",
            "manage_options",
            "risehand",
            [$this, "render_page"],
            0
        ); 
        
    }
    public function enqueue_admin_scripts()
    {
        $screen = get_current_screen();
        if (
            $screen->id === "toplevel_page_risehand" ||
            $screen->id === "theme_page_theme-system-status" ||
            $screen->id === "theme_page_theme-options" ||
            $screen->id === "theme_page_theme-plugins"
        ) {
            // Enqueue your CSS and JS files here for styling and functionality of the admin panel
            wp_enqueue_style(
                "admin-panel-style",
                get_template_directory_uri() . "/admin-panel.css"
            );
            wp_enqueue_script(
                "admin-panel-script",
                get_template_directory_uri() . "/admin-panel.js",
                ["jquery"],
                "1.0",
                true
            );
        }
    }
    public function add_single_tabs($tab_activate)
    {
        $navtabs["main"] = [
            "title" => esc_html__("Welcome", "risehand"),
            "link" => "admin.php?page=risehand",
        ];
        $navtabs["plugin"] = [
            "title" => esc_html__("Install Plugins", "risehand"),
            "link" => "themes.php?page=install-required-plugins",
        ];
        if (class_exists("OCDI_Plugin")) {
            $navtabs["oneclick"] = [
                "title" => esc_html__("Import Demo Content", "risehand"),
                "link" => "themes.php?page=one-click-demo-import",
            ];
        }
        $navtabs["menus"] = [
            "title" => esc_html__("Menu", "risehand"),
            "link" => "nav-menus.php",
        ];
        $navtabs["widgets"] = [
            "title" => esc_html__("Widgets", "risehand"),
            "link" => "widgets.php",
        ];
        if (class_exists("Risehand_Addons")) {
            $navtabs["header"] = [
                "title" => esc_html__("Create Header", "risehand"),
                "link" => "edit.php?post_type=header",
            ];
            $navtabs["footer"] = [
                "title" => esc_html__("Create Footer", "risehand"),
                "link" => "edit.php?post_type=footer",
            ];
            $navtabs["megamenu"] = [
                "title" => esc_html__("Create Megamenu", "risehand"),
                "link" => "edit.php?post_type=mega_menu",
            ];
            $navtabs["themeoptions"] = [
                "title" => esc_html__("Theme Options", "risehand"),
                "link" => "admin.php?page=risehand-theme-options",
            ];
        } 
        ?>
            <div class="nav-tab-wrapper admin_dashboad">
            <?php foreach ($navtabs as $key => $tab) {
                    if ($tab_activate == $key){ ?>
                    <span class="nav-tab nav-tab-active"><?php echo sprintf(__("%s", "risehand") , $tab["title"]); ?></span>
                   <?php }else{ ?>
                    <a href="<?php echo esc_url($tab["link"]); ?>" class="nav-tab"><?php echo sprintf(__("%s", "risehand") , $tab["title"]); ?></a>
                    <?php
                    }
                } ?>

            </div>
		<?php
    }
    public function render_page()
    {
        $this->add_single_tabs("main");
        do_action('risehand_get_welcome');
    }
    
    public function check_maintenance_mode() { 
        $enable_maintenance =  get_risehand_option('enable_maintenance');
        if ( $enable_maintenance == true && !current_user_can('manage_options')) {
            include(locate_template('/includes/admin/dashboard/maintenance-mode.php'));
            exit();
        }
    }
    public function register_settings()
    {
        // Register any settings you need for your theme options
    }
    public function display_header_admin_notice()
    {
        $screen = get_current_screen();
        if (class_exists("Risehand_Addons")) {
            // Check if the current screen is the header post type edit screen
            if ($screen && $screen->post_type === "header") {
                $this->add_single_tabs("header");
            }
            // Check if the current screen is the footer post type edit screen
            if ($screen && $screen->post_type === "footer") {
                $this->add_single_tabs("footer");
            }
            // Check if the current screen is the mega_menu post type edit screen
            if ($screen && $screen->post_type === "mega_menu") {
                $this->add_single_tabs("megamenu");
            }
            // Check if the current screen is the theme otpion post type edit screen
            if (
                isset($_GET["page"]) &&
                $_GET["page"] === "risehand-theme-options"
            ) {
                $this->add_single_tabs("themeoptions");
            }
        }
 
        if ($screen && $screen->base === "nav-menus") {
            $this->add_single_tabs("menus");
        }

        if ($screen && $screen->base === "widgets") {
            $this->add_single_tabs("widgets"); 
        }
        
        if ( $screen->id === 'appearance_page_install-required-plugins' ) {
            $this->add_single_tabs("plugin");
        }
        if (class_exists("OCDI_Plugin")) {
            // Check if the current screen is the one click post type edit screen
            if (
                isset($_GET["page"]) &&
                $_GET["page"] === "one-click-demo-import"
            ) {
                $this->add_single_tabs("oneclick");
            }
        }
    }

    public function risehand_admin_scripts()  { 
        wp_enqueue_style('risehand-meta-box', get_template_directory_uri().'/assets/css/metabox.css' );      
        wp_enqueue_style(
            "risehand-admin-style",
            get_template_directory_uri() .
                "/includes/admin/dashboard/assets/css/theme.css",
            [],
            "1.0.0",
            "all"
        );
        wp_enqueue_script(
            "risehand-admin",
            get_template_directory_uri() .
                "/includes/admin/dashboard/assets/js/admin.js",
            ["jquery"],
            "1.0",
            true
        );
    }
    public function risehand_maintanance_scripts()  {  
        $enable_maintenance_css =   get_risehand_option('enable_maintenance');
        if ( $enable_maintenance_css == true) {
            wp_enqueue_style(
                "risehand-admin-style",
                get_template_directory_uri() .
                    "/includes/admin/dashboard/assets/css/maintanance.css",
                [],
                "1.0.0",
                "all"
            );
        }
    }

    public function display_admin_notice() { 
        $admin_notice_enable =  get_risehand_option('enable_maintenance'); 
        $admin_dashboard_url = admin_url('admin.php?page=risehand'); 
        ?>
       <div class="admin-notice admin-notice-risehands notice notice-info is-dismissible <?php if($admin_notice_enable == false): ?> disable_copt_notice <?php  endif; ?>">
        <ul> 
            <li><?php echo esc_html('Before Import Demo Content Check the server configuration here' , 'risehand'); ?> <a target="_blank" href="<?php echo esc_url($admin_dashboard_url);?>"><?php echo esc_html('Click here...' , 'risehand'); ?></a></li>
            <li><?php echo esc_html('We are here to help you.For any issues please submit your ticket here' , 'risehand'); ?> <a target="_blank" href="https://steelthemes.ticksy.com/submit/#100019165"><?php echo esc_html('Get Support' , 'risehand'); ?></a></li>
            <li><?php echo esc_html('Looking for risehand Documentation' , 'risehand'); ?> <a target="_blank" href="https://themepanthers.com/documentation/risehand-documentation/"><?php echo esc_html('Click here' , 'risehand'); ?></a></li>
            </ul>
        <p><?php echo esc_html('Disable this notification totally go to risehand -> theme option ->  general settings ->  Disable Admin Notice => Switch Off' , 'risehand'); ?></p>
        </div> 
       <?php
    } 

}

// Create an instance of the admin panel class
new Risehand_Theme_Admin_Panel();
