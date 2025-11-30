<?php

declare(strict_types=1);

/**
 * Ascora Header Top Options.
 *
 * @package Ascora
 * @since 1.0.0
 */

defined('ABSPATH') || exit;
// Prevent direct access

$opt_name = 'ascora';

Redux::set_fields(
    $opt_name,
    'header-top',
    [
        [
            'id'       => 'switch_hbdead',
            'type'     => 'switch',
            'title'    => esc_html__('Header Top', 'ascora-core'),
            'subtitle' => esc_html__('Toggle to show or hide the header top section on your website.', 'ascora-core'),
            'default'  => false,
        ],
        [
            'id'       => 'sub-header',
            'type'     => 'image_select',
            'title'    => esc_html__('Header Top Style', 'ascora-core'),
            'subtitle' => esc_html__('Choose the style of the header top as per your preference.', 'ascora-core'),
            'required' => ['switch_hbdead', '=', true],
            'options'  => [
                '1' => [
                    'alt' => '1 Column',
                    'img' => ASCORA_CORE_URL . 'core/options/headers/img/sh-1.png',
                ],
                '2' => [
                    'alt' => '2 Column Left',
                    'img' => ASCORA_CORE_URL . 'core/options/headers/img/sh-2.png',
                ],

            ],
            'default'  => '2',
        ],
        [
            'id'       => 'sbheader_cont1',
            'type'     => 'select',
            'title'    => esc_html__('Left Site Content', 'ascora-core'),
            'subtitle' => esc_html__('Choose the content to display on the left side of your header top.', 'ascora-core'),
            'required' => ['switch_hbdead', '=', true],
            'options'  => [
                '1' => 'Contact Info',
                '2' => 'Socail Link',
                '3' => 'Navigation',
                '4' => 'Hide',
            ],
            'default'  => '3',
            'select2'  => ['allowClear' => false],
        ],
        [
            'id'       => 'sbheader_cont2',
            'type'     => 'select',
            'title'    => esc_html__('Right Site Content', 'ascora-core'),
            'subtitle' => esc_html__('Choose the content to display on the Right side of your header top.', 'ascora-core'),
            'required' => ['switch_hbdead', '=', true],
            'options'  => [
                '1' => 'Contact Info',
                '2' => 'Socail Link',
                '3' => 'Navigation',
                '4' => 'Hide',
            ],
            'default'  => '2',
            'select2'  => ['allowClear' => false],
        ],

        [
            'id'          => 'subheader_background',
            'type'        => 'color',
            'title'       => esc_html__('Background Color', 'ascora-core'),
            'subtitle'    => esc_html__('Set the background color for your header top.', 'ascora-core'),
            'required'    => ['sub-header', '=', '1'],
            'default'     => '#006FD8',
            'transparent' => false,
        ],
        [
            'id'          => 'subheader_text_color',
            'type'        => 'color',
            'title'       => esc_html__('Navigation and Content Color', 'ascora-core'),
            'subtitle'    => esc_html__('Set the color for the navigation and content in your header top.', 'ascora-core'),
            'required'    => ['sub-header', '=', '1'],
            'default'     => '#fff',
            'transparent' => false,
        ],
        [
            'id'          => 'subheader_socail_icon',
            'type'        => 'color',
            'title'       => esc_html__('Icon Color', 'ascora-core'),
            'subtitle'    => esc_html__('Set the color for the icons in your header top.', 'ascora-core'),
            'required'    => ['sub-header', '=', '1'],
            'default'     => '#fff',
            'transparent' => false,
        ],
        [
            'id'          => 'subheader_menuborder_color',
            'type'        => 'color',
            'title'       => esc_html__('Menu Border Color', 'ascora-core'),
            'subtitle'    => esc_html__('Set the border color for your header top menu.', 'ascora-core'),
            'required'    => ['sub-header', '=', '1'],
            'default'     => '#fff',
            'transparent' => false,
        ],

        [
            'id'          => 'subheader_background_color',
            'type'        => 'color',
            'title'       => esc_html__('Top Header Background Color', 'ascora-core'),
            'subtitle'    => esc_html__('Controls the background color of the top header.', 'ascora-core'),
            'required'    => ['sub-header', '=', '2'],
            'default'     => '#fff',
            'transparent' => false,
        ],
        [
            'id'          => 'subheader_boder_color',
            'type'        => 'color',
            'title'       => esc_html__('Top Header Border Color', 'ascora-core'),
            'subtitle'    => esc_html__('Controls the border color of the top header.', 'ascora-core'),
            'required'    => ['sub-header', '=', '2'],
            'default'     => '#006FD8',
            'transparent' => false,
        ],
        [
            'id'          => 'subheader_text_color2',
            'type'        => 'color',
            'title'       => esc_html__('Navigation and Content Color', 'ascora-core'),
            'subtitle'    => esc_html__('Controls the color of the navigation and content in the header top.', 'ascora-core'),
            'required'    => ['sub-header', '=', '2'],
            'default'     => '#333',
            'transparent' => false,
        ],
        [
            'id'       => 'top_icon_color_switch',
            'type'     => 'button_set',
            'title'    => esc_html__('Icon Color Style', 'ascora-core'),
            'subtitle' => esc_html__('Controls the color of social icons in the header top.', 'ascora-core'),
            'required' => ['sub-header', '=', '2'],
            'options'  => [
                'original'  => esc_html__('Original', 'ascora-core'),
                'custom'    => esc_html__('Custom', 'ascora-core'),  // corrected typo here
            ],
            'default'  => 'original',
        ],
        [
            'id'            => 'subheader_icon_color2',
            'type'          => 'color',
            'title'         => esc_html__('Icon Color', 'ascora-core'),
            'subtitle'      => esc_html__('Controls the color of social icons in the header top.', 'ascora-core'),
            'transparent'   => false,
            'required'      => ['top_icon_color_switch', '=', 'costom'],
            'default'       => '#333',
        ],
        [
            'id'          => 'subheader_border_color2',
            'type'        => 'color',
            'title'       => esc_html__('Top Header Menu Border Color', 'ascora-core'),
            'subtitle'    => esc_html__('Controls the border color of the top header menu.', 'ascora-core'),
            'required'    => ['sub-header', '=', '2'],
            'default'     => '#333',
            'transparent' => false,
        ],

        [
            'id'       => 'sub_contact',
            'type'     => 'text',
            'title'    => esc_html__('Contact Info One', 'ascora-core'),
            'subtitle' => esc_html__('Enter the first contact information to display in the header top.', 'ascora-core'),
            'required' => ['switch_hbdead', '=', true],
            'default'  => 'Call Us Today! 01333333333',
        ],
        [
            'id'       => 'sub_emial',
            'type'     => 'text',
            'title'    => esc_html__('Contact Info Two', 'ascora-core'),
            'subtitle' => esc_html__('Enter the second contact information to display in the header top.', 'ascora-core'),
            'required' => ['switch_hbdead', '=', true],
            'default'  => 'example@gmail.com',
        ],
    ],
);
