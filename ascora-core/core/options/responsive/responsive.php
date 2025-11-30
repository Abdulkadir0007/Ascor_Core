<?php

declare(strict_types=1);

/**
 * Websote Responsive Option
 * @package Ascora_core
 * @since 1.0
 */

defined('ABSPATH') || exit;
// Prevent direct access

Redux::set_fields(
    $opt_name,
    'responsive',
    [
        [
            'id'        => 'site_sidebar_breakpoint',
            'title'     => esc_html__('Sidebar Responsive Breakpoint', 'ascora-core'),
            'subtitle'  => esc_html__('Set the breakpoint at which the sidebar switches to the mobile layout (in pixels).', 'ascora-core'),
            'type'      => 'slider',
            'min'       => '0',
            'max'       => '2000',
            'default'   => '800',
        ],
        [
            'id'       => 'element_breakpoin',
            'type'     => 'info',
            'title'    => esc_html__('Element Responsive Breakpoints', 'ascora-core'),
        ],
        [
            'id'        => 'small_screen_breakpoint',
            'title'     => esc_html('Small Screen', 'ascora-core'),
            'subtitle'  => esc_html('Controls when the small screen options and visibility should take effect. In pixels.', 'ascora-core'),
            'type'      => 'slider',
            'min'       => '0',
            'max'       => '1024',
            'default'   => '760',
        ],
        [
            'id'        => 'medium_screen_breakpoint',
            'title'     => esc_html('Medium Screen', 'ascora-core'),
            'subtitle'  => esc_html('Controls when the Medium screen options and visibility should take effect. In pixels.', 'ascora-core'),
            'type'      => 'slider',
            'min'       => '0',
            'max'       => '1024',
            'default'   => '1024',
        ],
        [
            'id'         => 'larg_screen_breakpoint',
            'type'       => 'raw',
            'title'      => esc_html__('Large Screen', 'ascora-core'),
            'subtitle'   => esc_html__('Any screen larger than that which is defined as the medium screen will be counted as a large screen.', 'ascora-core'),
            'full_width' => false,
            'content'    => '<div style="background: #f5f5f5; padding: 7px 30px;display:inline-block; border: 1px solid #ddd; cursor: not-allowed;border-radius:4px">>1024</div>', // কাস্টম HTML
        ],
    ]
);
