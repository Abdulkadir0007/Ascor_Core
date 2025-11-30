<?php

declare(strict_types=1);

/**
 * Ascora Breadcrumb Options.
 *
 * @package Ascora
 */

defined('ABSPATH') || exit;
// Prevent direct access

Redux::set_fields(
    $opt_name,
    'breadcrumb',
    [
        [
            'id'       => 'breadcrumb_separator',
            'type'     => 'text',
            'title'    => esc_html__('Breadcrumbs Separator', 'ascora-core'),
            'subtitle' => esc_html__('Write Your Breadcrumbs Separator Text,ex: "/".', 'ascora-core'),
            'default'  => ' / ',

        ],
        [
            'id'          => 'breadcrumb_font_color',
            'type'        => 'color',
            'title'       => esc_html__('Breadcrumbs Text Color', 'ascora-core'),
            'subtitle'    => esc_html__('Controls Breadcrumbs Text Color', 'ascora-core'),
            'default'     => '#1D1E5C',
            'transparent' => false,

        ],
        [
            'id'          => 'breadcrumb_font_hover_color',
            'type'        => 'color',
            'title'       => esc_html__('Breadcrumbs text Hover Color', 'ascora-core'),
            'subtitle'    => esc_html__('Breadcrumbs Text Hover Color', 'ascora-core'),
            'default'     => '#FF4CAA',
            'transparent' => false,

        ],
        [
            'id'       => 'breadcrumb_font_size',
            'type'     => 'text',
            'title'    => esc_html__('Breadcrumbs text Font Size', 'ascora-core'),
            'subtitle' => esc_html__('Controls the font size for the breadcrumbs text. Enter value including CSS unit (px, em, rem), ex: 16px.', 'ascora-core'),
            'default'  => '16px',

        ],
        [
            'id'        => 'switch_breadcrumb_mobile',
            'type'      => 'switch',
            'title'     => esc_html__('Breadcrumb On Mobaile', 'ascora-core'),
            'default'   => false,
        ],

    ],
);
