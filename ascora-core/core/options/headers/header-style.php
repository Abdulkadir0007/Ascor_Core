<?php

declare(strict_types=1);

/**
 * Ascora Header Styling Options.
 *
 * @package Ascora
 */

defined('ABSPATH') || exit;
// Prevent direct access


Redux::set_fields(
    $opt_name,
    'header-style',
    [
        [
            'id'          => 'header_background',
            'type'        => 'color',
            'title'       => esc_html__('Header Background Color', 'ascora-core'),
            'subtitle'    => esc_html__('Customize the background color of the header.', 'ascora-core'),
            'transparent' => false,
            'output'      => [
                // 'background-color'     => 'header .header',
            ],
            'default'     => '#fff',
        ],
        [
            'id'             => 'header_padding',
            'type'           => 'spacing',
            'units'          => 'px',
            'display_units'  => false,
            'title'          => esc_html__('Header Padding', 'ascora-core'),
            'subtitle'       => esc_html__('Adjust the padding for the header in pixels.', 'ascora-core'),
            'default'        => [
                'padding-top'      => '15px',
                'padding-left'     => '0',
                'padding-right'    => '0',
                'padding-bottom'   => '15px',
            ],
        ],
        [
            'id'       => 'switch_header_shadow',
            'title'    => esc_html__('Header Shadow', 'ascora-core'),
            'type'     => 'switch',
            'subtitle' => esc_html__('Enable or disable the header shadow effect on your website.', 'ascora-core'),
            'default'  => false,
        ],
        [
            'id'       => 'header_full_width',
            'title'    => esc_html__('Header Width 100%', 'ascora-core'),
            'type'     => 'switch',
            'subtitle' => esc_html__('If you switch on/off here, the header shadow will show/off on your website.', 'ascora-core'), // corrected typo here
            'default'  => false,
            'required' => ['layout_switch', '=', 'wide'],
        ]

    ],
);
