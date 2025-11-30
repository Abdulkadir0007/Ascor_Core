<?php

declare(strict_types=1);

/**
 * Ascora Hover Cover Styling Options.
 *
 * @package Ascora
 */

defined('ABSPATH') || exit;
// Prevent direct access
defined('ABSPATH') || exit;

Redux::set_fields(
    $opt_name,
    'hover_cover',
    [
        [
            'id'     => 'phover-import',
            'type'   => 'info',
            'style'  => 'info',
            'notice' => false,
            'desc'   => wp_kses_post(__('<strong>IMPORTANT NOTE:</strong> This tab is only for media hover cover options. This hover cover is for all websites.', 'ascora-core')),
        ],
        [
            'id'          => 'hovercover_back',
            'type'        => 'color',
            'title'       => esc_html__('Hover Cover Background Color', 'ascora-core'),
            'subtitle'    => esc_html__('Controls Hover Cover Background Color.', 'ascora-core'),
            'default'     => '#ff4caa',
            'transparent' => false,

        ],
        [
            'id'       => 'hovercover_opacity',
            'type'     => 'text',
            'title'    => esc_html__('Hover Cover Opacity', 'ascora-core'),
            'subtitle' => esc_html__('Controls Hover Cover Opacity,which is between 0 and 1 Ex: 0.85.', 'ascora-core'),
            'default'  => '0.85',

        ],
        [
            'id'       => 'hovercover_transition',
            'type'     => 'text',
            'title'    => esc_html__('Hover Cover Time', 'ascora-core'),
            'subtitle' => esc_html__('Controls Hover Cover Opacity। Here 1 is 1 second, ex: 0.3.', 'ascora-core'),
            'default'  => '0.3',

        ],
        [
            'id'       => 'hovercover_button_size',
            'type'     => 'text',
            'title'    => esc_html__('Hover Icon Size', 'ascora-core'),
            'subtitle' => esc_html__('Controls the Icon size. Enter value including CSS unit (px, em, rem), ex: 16px.', 'ascora-core'),
            'default'  => '16px',

        ],
        [
            'id'       => 'hovercover_title_size',
            'type'     => 'text',
            'title'    => esc_html__('Hover Cover Font Size', 'ascora-core'),
            'subtitle' => esc_html__('Controls the Font size. Enter value including CSS unit (px, em, rem), ex:24px.', 'ascora-core'),
            'default'  => '24px',

        ],
        [
            'id'       => 'hovercover_title_weight',
            'type'     => 'text',
            'title'    => esc_html__('Hover Cover Font Weight', 'ascora-core'),
            'subtitle' => esc_html__('Controls the Font Weight. Enter value including 100 to 900, ex:600.', 'ascora-core'),
            'default'  => '600',

        ],
        [
            'id'          => 'hovercover_title_color',
            'type'        => 'color',
            'title'       => esc_html__('Title & Icon Color.', 'ascora-core'),
            'subtitle'    => esc_html__('Controls the HoverCover Title & Icon Color', 'ascora-core'),
            'default'     => '#fff',
            'transparent' => false,

        ],
    ]
);
