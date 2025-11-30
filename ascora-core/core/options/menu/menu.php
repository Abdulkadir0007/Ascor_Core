<?php

declare(strict_types=1);

/**
 * Ascora Menu Options.
 *
 * @package Ascora
 */

defined('ABSPATH') || exit;
// Prevent direct access

Redux::set_fields(
    $opt_name,
    'main-menu',
    [
        [
            'id'               => 'menu_typography',
            'type'             => 'typography',
            'title'            => esc_html__('Menu Typography', 'ascora-core'),
            'subtitle'         => esc_html__('Customize the typography settings for the navigation menu.', 'ascora-core'),
            'text-transform'   => true,
            'text-align'       => false,
            'subsets'          => false,
            'default'          => [
                'color'          => '#333',
                'font-weight'    => '600',
                'font-family'    => 'Poppins',
                'google'         => true,
                'font-size'      => '18px',
                'line-height'    => '60px',
                'text-transform' => 'none',
            ],
            'select2'  => [
                'allowClear' => false,
            ],

            'font_family_clear' => false,
        ],
        [
            'id'            => 'menu_padding_right',
            'type'          => 'slider',
            'title'         => esc_html__('Menu Right Padding', 'ascora-core'),
            'subtitle'      => esc_html__('Set the right padding for the menu. Value in pixels.', 'ascora-core'),
            'default'       => 20,
            'min'           => 1,
            'step'          => 1,
            'max'           => 100,
            'display_value' => 'text',
        ],

        [
            'id'          => 'nav_active',
            'type'        => 'color',
            'title'       => esc_html__('Menu  Font Active / hover Color', 'ascora-core'),
            'subtitle'    => esc_html__('Controls the active color of the menu.', 'ascora-core'),
            'default'     => '#FF4CAA',
            'transparent' => false,
        ],
        [
            'id'       => 'menu-search',
            'type'     => 'switch',
            'title'    => esc_html__('Menu Search Icon', 'ascora-core'),
            'subtitle' => esc_html__('Turn on to display Menu Search Icon.', 'ascora-core'),
            'default'  => true,
        ],
        [
            'id'       => 'menu-not',
            'type'     => 'info',
            'title'    => esc_html__('Controls the color of the menu dropdown.', 'ascora-core'),
            'subtitle' => '',
        ],
        [
            'id'            => 'dropdown_width',
            'type'          => 'slider',
            'title'         => esc_html__('Dropdown Menu Width', 'ascora-core'),
            'subtitle'      => esc_html__('Controls the Dropdown Menu Width. In pixels.', 'ascora-core'),
            'default'       => 200,
            'min'           => 1,
            'step'          => 1,
            'max'           => 500,
            'display_value' => 'text',
        ],
        [
            'id'       => 'dropdown_font_size',
            'type'     => 'text',
            'title'    => esc_html__('Dropdown Menu Font size', 'ascora-core'),
            'subtitle' => esc_html__('Controls the font size for main menu dropdown text. Enter value including any valid CSS unit, ex: 15px.', 'ascora-core'),
            'default'  => '15px',
        ],
        [
            'id'          => 'dropdown_font_color',
            'type'        => 'color',
            'title'       => esc_html__('Dropdown Menu  Font Color', 'ascora-core'),
            'subtitle'    => esc_html__('Controls the font color of the menu dropdown.', 'ascora-core'),
            'default'     => '#333',
            'transparent' => false,
        ],
        [
            'id'          => 'dropdown_background_color',
            'type'        => 'color',
            'title'       => esc_html__('Dropdown Menu background Color', 'ascora-core'),
            'subtitle'    => esc_html__('Controls the background color of the menu dropdown.', 'ascora-core'),
            'default'     => '#e0d7d7',
            'transparent' => false,
        ],
        [
            'id'          => 'dropdown_font_font_color',
            'type'        => 'color',
            'title'       => esc_html__('Dropdown Menu Font Hover Color', 'ascora-core'),
            'subtitle'    => esc_html__('Controls the font hover color of the menu dropdown.', 'ascora-core'),
            'default'     => '#ffffff',
            'transparent' => false,
        ],
        [
            'id'          => 'dropdown_hover_background_color',
            'type'        => 'color',
            'title'       => esc_html__('Dropdown Menu Hover background Color', 'ascora-core'),
            'subtitle'    => esc_html__('Controls the Hover background color of the menu dropdown.', 'ascora-core'),
            'default'     => '#464780',
            'transparent' => false,
        ],

    ]
);
