<?php

declare(strict_types=1);

/**
 * Ascora sticky Header Options.
 *
 * @package Ascora
 */

defined('ABSPATH') || exit;

Redux::set_fields(
    $opt_name,
    'headr-sticky',
    [
        [
            'id'       => 'sticky_header',
            'type'     => 'switch',
            'title'    => esc_html__('Sticky Header', 'ascora-core'),
            'subtitle' => esc_html__('Enable or disable the sticky header on your website, which will keep the header visible while scrolling.', 'ascora-core'),
            'default'  => false,
        ],
        [
            'id'       => 'sticky_header_tablet',
            'type'     => 'switch',
            'title'    => esc_html__('Sticky Header on Tablets', 'ascora-core'),
            'subtitle' => esc_html__('Enable or disable the sticky header on tablets. When enabled, the header will remain fixed at the top while scrolling on tablet devices.', 'ascora-core'),
            'default'  => false,
            'required' => ['sticky_header', '=', true],
        ],
        [
            'id'       => 'sticky_header_mobile',
            'type'     => 'switch',
            'title'    => esc_html__('Sticky Header on Mobiles', 'ascora-core'),
            'subtitle' => esc_html__('Enable or disable the sticky header on mobile devices. When enabled, the header will remain fixed at the top of the screen while scrolling on mobile devices.', 'ascora-core'),
            'default'  => false,
            'required' => ['sticky_header', '=', true],
        ],
        [
            'id'       => 'sticky_header_shadow',
            'type'     => 'switch',
            'title'    => esc_html__('Sticky Header Shadow', 'ascora-core'),
            'subtitle' => esc_html__('Enable or disable the shadow effect for the sticky header. When enabled, a subtle shadow will appear beneath the sticky header as you scroll down.', 'ascora-core'),
            'default'  => false,
            'required' => ['sticky_header', '=', true],
        ],
        [
            'id'          => 'sticky_header_background',
            'type'        => 'color',
            'title'       => esc_html__('Sticky Header Background', 'ascora-core'),
            'subtitle'    => esc_html__('Select a background color for the sticky header.', 'ascora-core'),
            'transparent' => false,
            'output'      => [
                // 'background-color'     => '.header.sticky-header',
            ],
            'default'     => '#ffffff',
            'required'    => ['sticky_header', '=', true],
        ],
        [
            'id'            => 'sticky_header_padding',
            'type'          => 'slider',
            'title'         => esc_html__('Header Padding (Top & Bottom)', 'ascora-core'),
            'subtitle'      => esc_html__('Adjust the sticky header’s top and bottom padding (in pixels).', 'ascora-core'),
            'default'       => 10,
            'step'          => 1,
            'min'           => 0,
            'max'           => 50,
            'display_value' => 'text',
            'required'      => ['sticky_header', '=', true],
        ],
        [
            'id'          => 'sticky_header_menu',
            'type'        => 'color',
            'title'       => esc_html__('Sticky Header Menu Color', 'ascora-core'),
            'subtitle'    => esc_html__('Select a color for the sticky header menu items.', 'ascora-core'),
            'transparent' => false,
            'default'     => '#333333',
            'required'    => ['sticky_header', '=', true],
        ],
    ]
);
