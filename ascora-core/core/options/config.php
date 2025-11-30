<?php
// if (!class_exists('ascora_define_constants')) {
//     return; // Redux Framework ইনস্টল না থাকলে কিছুই করবে না
// }

// Redux Framework Unique Option Name
$opt_name = "ascora";
// Section: General Settings
// Redux::setSection($opt_name, array(
//     'title'  => esc_html__('General Settings', 'ascora-core'),
//     'id'     => 'general_settings',
//     'desc'   => esc_html__('Customize the core settings for Ascora.', 'ascora-core'),
//     'icon'   => 'el el-cog',
//     'fields' => array(
//         array(
//             'id'       => 'enable_custom_header',
//             'type'     => 'switch',
//             'title'    => esc_html__('Enable Custom Header', 'ascora-core'),
//             'default'  => true,
//         ),
//         array(
//             'id'       => 'custom_logo',
//             'type'     => 'media',
//             'title'    => esc_html__('Custom Logo', 'ascora-core'),
//             'desc'     => esc_html__('Upload a custom logo for your site.', 'ascora-core'),
//         ),
//     ),
// ));


add_action('after_setup_theme', function () {
    if (class_exists('Ascora_Theme_Setup')) {
        // require_once ASCORA_CORE_PATH . 'core/options/layout/layout.php';
        // require_once ASCORA_CORE_PATH . 'core/options/menu/menu.php';
        // require_once ASCORA_CORE_PATH . 'core/options/menu/mobail-menu.php';
        // require_once ASCORA_CORE_PATH . 'core/options/background/background.php';
        // require_once ASCORA_CORE_PATH . 'core/options/headers/header.php';
        // require_once ASCORA_CORE_PATH . 'core/options/headers/sticky-header.php';
        // require_once ASCORA_CORE_PATH . 'core/options/headers/header-style.php';
        // require_once ASCORA_CORE_PATH . 'core/options/headers/header-layout.php';
        // require_once ASCORA_CORE_PATH . 'core/options/color/color.php';
        // require_once ASCORA_CORE_PATH . 'core/options/extra/pagination.php';
        // require_once ASCORA_CORE_PATH . 'core/options/contact/contact.php';
        // require_once ASCORA_CORE_PATH . 'core/options/contact/g-maps.php';
        // require_once ASCORA_CORE_PATH . 'core/options/contact/contact-style.php';

    }
});
