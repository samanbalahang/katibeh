<?php
/**
 * Plugin Name: Your Main Plugin
 * Description: Comprehensive plugin with custom post types and more
 * Version: 1.0
 * Author: Your Name
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Define plugin constants
define('YMP_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('YMP_PLUGIN_URL', value: plugin_dir_url(__FILE__));

class YourMainPlugin
{
    public function __construct()
    {
        $this->load_dependencies();
        $this->init_components();
    }

    private function load_dependencies()
    {
        // Load the custom post type class
        require_once YMP_PLUGIN_DIR . 'includes/class-custom-post-type.php';
        
        // Load other dependencies here
        // require_once YMP_PLUGIN_DIR . 'includes/other-class.php';
    }

    private function init_components()
    {
        // Initialize custom post type
        new CustomPostTypePlugin();
        
        // Initialize other components here
        // new OtherFeatureClass();
    }

    // Activation and deactivation hooks
    public static function activate()
    {
        // Flush rewrite rules on activation
        flush_rewrite_rules();
    }

    public static function deactivate()
    {
        // Clean up if needed
        flush_rewrite_rules();
    }
}

// Initialize the main plugin
new YourMainPlugin();

// Register activation and deactivation hooks
register_activation_hook(__FILE__, array('YourMainPlugin', 'activate'));
register_deactivation_hook(__FILE__, array('YourMainPlugin', 'deactivate'));