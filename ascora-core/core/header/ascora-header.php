<?php

declare(strict_types=1);
/**
 * Header & Sub-header layout loader
 *
 * @package Ascora_Core
 * @since 1.0.0
 */

defined('ABSPATH') || exit;

/**
 * Load selected header layout
 */
add_action('header-layout', 'ascora_header_layout');
function ascora_header_layout(): void
{
    $opts      = get_option('ascora', []);
    $layout    = 'header-layout-' . ($opts['header-layout'] ?? '1');
    $file      = ASCORA_CORE_PATH . "templates/headers/{$layout}.php";

    if (is_readable($file)) {
        require $file;
    }
}

/**
 * Load selected sub-header layout
 */
add_action('sub-header', 'ascora_sub_header_layout');
function ascora_sub_header_layout(): void
{
    $opts = get_option('ascora', []);
    if (empty($opts['switch_hbdead'])) {
        return;
    }

    $layout = 'sub-header-' . ($opts['sub-header'] ?? '1');
    $file   = ASCORA_CORE_PATH . "templates/sub-header/{$layout}.php";

    if (is_readable($file)) {
        require $file;
    }
}
