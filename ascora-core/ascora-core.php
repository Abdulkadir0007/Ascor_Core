<?php

/**
 * Plugin Name: Ascora Core
 * Plugin URI: https://abkadir.com/ascora-pro
 * Description: Unlock premium features and templates for the Ascora theme. Adds core features and functionality to the Ascora theme.Core functionalities for the Ascora theme, including pro features, custom templates, and extra options.
 * Version: 1.2.0
 * Author: Abdul Kadir
 * Author URI: https://abkadir.com
 * License: GPL2
 * Text Domain: ascora-core
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
global $ascora;
// Ensure Ascora theme is activated
add_action('admin_init', function () {
    if (!class_exists('Ascora_Theme_Setup')) {
        add_action('admin_notices', function () {
            $theme_link = admin_url('theme-install.php?search=Ascora');
            ?>
<div class="notice notice-error">
    <p><strong><?php esc_html_e('Ascora Core Plugin', 'ascora-core'); ?></strong>
        <?php esc_html_e('requires the Ascora theme to be installed and activated.', 'ascora-core'); ?>
        <a href="<?php echo esc_url($theme_link); ?>"
            class="button button-primary"><?php esc_html_e('Install Ascora Theme', 'ascora-core'); ?></a>
    </p>
</div>
<?php
        });

        return;
    }
});

// Define plugin constants
define('ASCORA_CORE_VERSION', '1.0.0');
define('ASCORA_CORE_PATH', plugin_dir_path(__FILE__));
define('ASCORA_CORE_URL', plugin_dir_url(__FILE__));

// Load text domain for translations
function ascora_core_load_textdomain()
{
    load_plugin_textdomain('ascora-core', false, dirname(plugin_basename(__FILE__)) . '/languages/');
}
add_action('plugins_loaded', 'ascora_core_load_textdomain');

// Include premium options & features
require_once ASCORA_CORE_PATH . 'includes/templates.php'; // Pro Features
require_once ASCORA_CORE_PATH . 'includes/author-related-post.php';
require_once ASCORA_CORE_PATH . 'includes/ajax-load.php'; // Pro Features
require_once ASCORA_CORE_PATH . 'includes/google-maps.php'; // Pro Features
require_once ASCORA_CORE_PATH . 'core/ascora/ascora-core-style.php'; // Pro Features
require_once ASCORA_CORE_PATH . 'core/ascora/functions.php'; // Pro Features

// Enqueue scripts and styles
function ascora_core_enqueue_scripts()
{
    global $ascora; // Redux গ্লোবাল ভেরিয়েবল

    // Redux
    $blog_more_load_type = isset($ascora['blog_more_load_type']) ? $ascora['blog_more_load_type'] : 1;
    wp_enqueue_style('ascora-core-style', ASCORA_CORE_URL . 'assets/css/style.css', [], ASCORA_CORE_VERSION);
    wp_enqueue_style('ascora-core-css', ASCORA_CORE_URL . 'assets/css/ascora-core.css', [], ASCORA_CORE_VERSION);
    wp_enqueue_script('ascora-core-script', ASCORA_CORE_URL . 'assets/js/script.js', ['jquery'], ASCORA_CORE_VERSION, true);
    wp_enqueue_script('ascora-infinite-scroll', ASCORA_CORE_URL . 'assets/js/infinite-scroll.js', ['jquery'], ASCORA_CORE_VERSION, true);
    // Localize script
    wp_localize_script('ascora-infinite-scroll', 'ascora_ajax', [
        'ajax_url'            => admin_url('admin-ajax.php'),
        'nonce'               => wp_create_nonce('ascora_load_more_nonce'),
        'blog_more_load_type' => $blog_more_load_type, // Redux অপশনের মান
    ]);
}
add_action('wp_enqueue_scripts', 'ascora_core_enqueue_scripts');

// Activation hook
function ascora_core_activate()
{
    // Add activation logic here
    flush_rewrite_rules(); // Flush rewrite rules for custom post types or taxonomies
}
register_activation_hook(__FILE__, 'ascora_core_activate');

// Deactivation hook
function ascora_core_deactivate()
{
    // Add deactivation logic here
    flush_rewrite_rules(); // Flush rewrite rules on deactivation
}
register_deactivation_hook(__FILE__, 'ascora_core_deactivate');

// Uninstall hook
function ascora_core_uninstall()
{
    delete_option('ascora_core_settings');
}
register_uninstall_hook(__FILE__, 'ascora_core_uninstall');

if (!class_exists('Ascora_Core')) {
    class Ascora_Core
    {
        public function __construct()
        {
            add_action('init', [$this, 'ascora_core_init']);
        }

        public function ascora_core_init()
        {
            // এখানে প্লাগিনের প্রো ফিচার লোড করবে
        }
    }


    new Ascora_Core();
}


function ascora_pass_logo_to_js()
{
    global $ascora; // Redux Global Array

    $logo_url = isset($ascora['logo-img']['url']) ? esc_url($ascora['logo-img']['url']) : '';

    wp_localize_script('ascora-main-js', 'ascoraData', [
        'home_url'  => home_url(),
        'logo_img'  => $logo_url,
        'site_name' => get_bloginfo('name'),
    ]);
}
add_action('wp_enqueue_scripts', 'ascora_pass_logo_to_js');


add_action('after_setup_theme', function () {
    if (class_exists('Ascora_Theme_Setup')) {
        require_once ASCORA_CORE_PATH . 'core/options/blog/blog-page.php';
        require_once ASCORA_CORE_PATH . 'core/options/blog/single-blog.php';
        require_once ASCORA_CORE_PATH . 'core/options/blog/blog-meta.php';
        require_once ASCORA_CORE_PATH . 'includes/ajax-load.php';
        require_once ASCORA_CORE_PATH . 'includes/socail-share.php';
        require_once ASCORA_CORE_PATH . 'core/options/layout/layout.php';
        require_once ASCORA_CORE_PATH . 'core/options/breadcrumb/breadcrumb.php';
        require_once ASCORA_CORE_PATH . 'core/options/responsive/responsive.php';
        require_once ASCORA_CORE_PATH . 'core/options/footer/footer-style.php';
        require_once ASCORA_CORE_PATH . 'core/options/menu/menu.php';
        require_once ASCORA_CORE_PATH . 'core/options/menu/mobail-menu.php';
        require_once ASCORA_CORE_PATH . 'core/options/background/background.php';
        require_once ASCORA_CORE_PATH . 'core/options/headers/header.php';
        require_once ASCORA_CORE_PATH . 'core/options/headers/sticky-header.php';
        require_once ASCORA_CORE_PATH . 'core/options/headers/header-style.php';
        require_once ASCORA_CORE_PATH . 'core/options/headers/header-layout.php';
        require_once ASCORA_CORE_PATH . 'core/options/color/color.php';
        require_once ASCORA_CORE_PATH . 'core/options/extra/pagination.php';
        require_once ASCORA_CORE_PATH . 'core/options/extra/button.php';
        require_once ASCORA_CORE_PATH . 'core/options/extra/animated.php';
        require_once ASCORA_CORE_PATH . 'core/options/extra/hover.php';
        require_once ASCORA_CORE_PATH . 'core/options/contact/contact.php';
        require_once ASCORA_CORE_PATH . 'core/options/contact/g-maps.php';
        require_once ASCORA_CORE_PATH . 'core/options/contact/contact-style.php';
        require_once ASCORA_CORE_PATH . 'core/options/custom-editor/custom-editor.php';
        require_once ASCORA_CORE_PATH . 'core/ascora/scripts.php';
        require_once ASCORA_CORE_PATH . 'core/header/ascora-header.php';
    }
});
?>