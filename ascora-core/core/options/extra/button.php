<?php

declare(strict_types=1);

/**
 * Ascora Button Styling Options.
 *
 * @package Ascora
 * @since 1.0.0
 */

defined('ABSPATH') || exit;
// Prevent direct access

Redux::set_fields(
    $opt_name,
    'normal_bitton',
    [
        [
            'id'     => 'primary_button_import',
            'type'   => 'info',
            'style'  => 'info',
            'notice' => false,
            'desc'   => wp_kses_post(__('<strong>IMPORTANT NOTE:</strong> This tab is only for website primary button options. This button is used by redmore to submit contact form and comments.', 'ascora-core')),
        ],
        [
            'id'       => 'primary_button_font_size',
            'type'     => 'text',
            'title'    => esc_html__('Button Font Size', 'ascora-core'),
            'subtitle' => esc_html__('Control Button Font size. Enter value including CSS unit (px, em, rem), ex: 16px.', 'ascora-core'),
            'default'  => '16px',

        ],
        [
            'id'            => 'primary_button_padding',
            'type'          => 'spacing',
            'mode'          => 'padding',
            'units'         => true,
            'display_units' => false,
            'title'         => esc_html__('Button Padding', 'ascora-core'),
            'subtitle'      => esc_html__('Controls Button Padding.', 'ascora-core'),
            'default'       => [
                'padding-top'    => '10px',
                'padding-right'  => '25px',
                'padding-bottom' => '10px',
                'padding-left'   => '25px',
            ],
        ],
        [
            'id'       => 'primary_button_border_radius',
            'type'     => 'text',
            'title'    => esc_html__('Button Border Radius', 'ascora-core'),
            'subtitle' => esc_html__('Control Button border Redius. Enter value including CSS unit (px, em, rem), ex: 0px.', 'ascora-core'),
            'default'  => '5px',

        ],
        [
            'id'          => 'primary_button_text_color',
            'type'        => 'color',
            'title'       => esc_html__('Button Text Color', 'ascora-core'),
            'subtitle'    => esc_html__('Control Button Text Color.', 'ascora-core'),
            'default'     => '#fff',
            'transparent' => false,

        ],
        [
            'id'          => 'primary_button_background',
            'type'        => 'color',
            'title'       => esc_html__('Button Background Color', 'ascora-core'),
            'subtitle'    => esc_html__('Control Button Bckground Color.', 'ascora-core'),
            'default'     => '#1D1E5c',
            'transparent' => false,

        ],
        [
            'id'          => 'primary_button_hover_color',
            'type'        => 'color',
            'title'       => esc_html__('Button Hover Text Color', 'ascora-core'),
            'subtitle'    => esc_html__('Control Button Hover Text Color.', 'ascora-core'),
            'default'     => '#fff',
            'transparent' => false,
        ],
        [
            'id'          => 'primary_button_background_hover',
            'type'        => 'color',
            'title'       => esc_html__('Button Hover Background Color', 'ascora-core'),
            'subtitle'    => esc_html__('Control Button Hover Background Color.', 'ascora-core'),
            'default'     => '#292a71',
            'transparent' => false,
        ],
    ]
);
