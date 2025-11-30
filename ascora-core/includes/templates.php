<?php

/**
 * Add Template
 * 
 * @package Ascora Core
 * @since ascora 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; //
}

//Contact Template
add_action('after_setup_theme', function () {
    if (class_exists('Ascora_Theme_Setup')) {
        function ascora_core_contact_template($templates)
        {
            $templates['contact-template.php'] = esc_html__('Contact Page', 'ascora-core');
            return $templates;
        }
        add_filter('theme_page_templates', 'ascora_core_contact_template');

        function load_contact_template($template)
        {
            if (is_page_template('contact-template.php')) {
                $con_template_path = ASCORA_CORE_PATH . 'templates/contact-template.php';
                if (file_exists($con_template_path)) {
                    return $con_template_path;
                }
            }
            return $template;
        }
        add_filter('template_include', 'load_contact_template');
    };
});
