<?php

declare(strict_types=1);

/**
 * Ascora Footer Styling Options.
 *
 * @package Ascora
 */

defined('ABSPATH') || exit;
// Prevent direct access

Redux::set_fields(
    $opt_name,
    'footer_style',
    [
        [
            'id'       => 'footer-info',
            'type'     => 'info',
            'title'    => esc_html__('fotter widgets area background style.', 'ascora-core'),
            'subtitle' => '',
        ],
        [
            'id'       => 'footer_background',
            'type'     => 'background',
            'url'      => false,
            'default'  => [
                'background-color'      => '#0f172a',
                'background-position'   => 'center center',
                'background-size'       => 'cover',
                'background-attachment' => 'scroll',
                'background-repeat'     => 'no-repeat',
            ],
            'title'    => __('fotter widgets  Background', 'ascora-core'),
            'subtitle' => __('Controls fotter widgets  background with image, color, etc.', 'ascora-core'),
            'select2'  => ['allowClear' => false],
        ],
        [
            'id'               => 'footer_title',
            'type'             => 'typography',
            'title'            => esc_html__('Footer widgets Title Typography', 'ascora-core'),
            'subtitle'         => esc_html__('These settings control the typography of page title.', 'ascora-core'),
            'google'           => true,
            'font-backup'      => true,
            'all_styles'       => true,
            'text-transform'   => true,
            'text-align'       => false,
            'letter-spacing'   => true,
            'subsets'          => false,
            'default'          => [
                'color'          => '#fff',
                'font-family'    => 'Inter',
                'font-weight'    => '600',
                'google'         => true,
                'font-size'      => '27px',
                'line-height'    => '1.6',
                'letter-spacing' => '0.5px',
                'text-transform' => 'none',
                'font-backup'    => 'Arial, Helvetica, sans-serif',
            ],
            'select2'  => [
                'allowClear' => false,
            ],
            'line-height-unit'    => '',
            'font_family_clear'   => false,
        ],
        [
            'id'          => 'footer_text_color',
            'type'        => 'color',
            'title'       => esc_html__('Footer Text Color', 'ascora-core'),
            'subtitle'    => esc_html__('Controls Sub Footer Background Color.', 'ascora-core'),
            'transparent' => false,
            'default'     => '#fff',
        ],
        [
            'id'       => 'footer_text_size',
            'type'     => 'text',
            'title'    => esc_html__('Footer Text Size', 'ascora-core'),
            'subtitle' => esc_html__('Controls Sub Footer Text And Icon Size, ex: 16px.', 'ascora-core'),
            'default'  => '16px',
        ],
        [
            'id'             => 'footer_padding',
            'type'           => 'spacing',
            'units'          => ['px', 'em', 'rem'],
            'units_extended' => true,
            'title'          => esc_html__('Footer Padding', 'ascora-core'),
            'subtitle'       => esc_html__('Controls Footer Padding.', 'ascora-core'),
            'default'        => [
                'padding-top'      => '25px',
                'padding-left'     => '0',
                'padding-right'    => '0',
                'padding-bottom'   => '25px',
            ],
        ],
        [
            'id'       => 'sub_footer_style',
            'type'     => 'info',
            'title'    => esc_html__('Sub footer background style.', 'ascora-core'),
            'subtitle' => '',
        ],
        [
            'id'          => 'sub_footer_background',
            'type'        => 'color',
            'title'       => esc_html__('Sub Footer background Color', 'ascora-core'),
            'subtitle'    => esc_html__('Controls Sub Footer Background Color.', 'ascora-core'),
            'transparent' => false,
            'default'     => '#e2e8f0',
        ],
        [
            'id'          => 'sub_footer_text_color',
            'type'        => 'color',
            'title'       => esc_html__('Sub Footer text Color', 'ascora-core'),
            'subtitle'    => esc_html__('Controls Sub Footer Text Color.', 'ascora-core'),
            'transparent' => false,
            'default'     => '#1D1E5c',
        ],
        [
            'id'       => 'icon_color_switch',
            'type'     => 'button_set',
            'title'    => esc_html__('Layout', 'ascora-core'),
            'subtitle' => esc_html__('Controls the site layout.', 'ascora-core'),
            'options'  => [
                'original'  => esc_html__('Original', 'ascora-core'),
                'costom'    => esc_html__('Custom', 'ascora-core'),
            ],
            'default'  => 'original',
        ],
        [
            'id'            => 'sub_footer_icon',
            'type'          => 'color',
            'title'         => esc_html__('Sub Footer icon Color', 'ascora-core'),
            'subtitle'      => esc_html__('Controls Sub Footer icon Color.', 'ascora-core'),
            'transparent'   => false,
            'required'      => ['icon_color_switch', '=', 'costom'],
            'default'       => '#1D1E5c',
        ],
        [
            'id'       => 'sub_footer_text_size',
            'type'     => 'text',
            'title'    => esc_html__('Fub Footer Text & Icon Size', 'ascora-core'),
            'subtitle' => esc_html__('Controls Sub Footer Text And Icon Size, ex: 16px.', 'ascora-core'),
            'default'  => '16px',
        ],
        [
            'id'             => 'sub_footer_padding',
            'type'           => 'spacing',
            'title'          => esc_html__('Fub Footer Padding', 'ascora-core'),
            'subtitle'       => esc_html__('Controls Sub Footer Padding.', 'ascora-core'),
            'left'           => false,
            'right'          => false,
            'default'        => [
                'padding-top'    => '10px',
                'padding-bottom' => '10px',
            ],
            'units'          => ['px', 'em', 'rem'],
            'units_extended' => true,
        ],

    ],
);
