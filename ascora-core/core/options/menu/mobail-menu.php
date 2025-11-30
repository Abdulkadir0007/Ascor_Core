<?php

declare(strict_types=1);

/**
 * Ascora Mobaile Menu Options.
 *
 * @package Ascora
 */

defined('ABSPATH') || exit;
// Prevent direct access

Redux::set_fields(
    $opt_name,
    'mobail-menu',
    [
        [

            'id'            => 'mobail-menu-brack',
            'type'          => 'slider',
            'title'         => esc_html__('Menu Breakpoint', 'ascora-core'),
            'subtitle'      => esc_html__('Set the screen width at which the menu switches to mobile layout. Value in pixels.', 'ascora-core'),
            'default'       => 1024,
            'min'           => 300,
            'step'          => 1,
            'max'           => 1600,
            'display_value' => 'text',
        ],
        [

            'id'       => 'mobail_menu_positions',
            'type'     => 'button_set',
            'title'    => esc_html__('Menu Slide', 'ascora-core'),
            'subtitle' => esc_html__('Select the direction from which the mobile menu should slide in.', 'ascora-core'),
            'default'  => 1,
            'options'  => [
                '1' => esc_html__('Left', 'ascora-core'),
                '2' => esc_html__('Right', 'ascora-core'),
                '3' => esc_html__('Top', 'ascora-core'),
                '4' => esc_html__('Bottom', 'ascora-core'),
            ],
        ],
        [

            'id'       => 'mobail_menu_label',
            'type'     => 'select',
            'title'    => esc_html__('Menu Label', 'ascora-core'),
            'subtitle' => esc_html__('Control the display style of menu labels.', 'ascora-core'),
            'default'  => 1,
            'options'  => [
                '1' => esc_html__('Over Lep', 'ascora-core'),
                '2' => esc_html__('Expand', 'ascora-core'),
                '3' => esc_html__('Normal', 'ascora-core'),
            ],
            'select2'  => ['allowClear' => false],
        ],
        [

            'id'       => 'mobail_menu_widths',
            'type'     => 'dimensions',
            'title'    => esc_html__('Menu Width', 'ascora-core'),
            'subtitle' => esc_html__('Set the width of the mobile menu (in pixels).', 'ascora-core'),
            'default'  => [
                'width' => '280',
            ],
            'height'   => false,
            'units'    => false,
            'required' => ['mobail_menu_positions', '<=', '2']


        ],
        [
            'id'             => 'Mobail_menu_text_typography',
            'type'           => 'typography',
            'title'          => esc_html__('Menu Text Typography', 'ascora-core'),
            'subtitle'       => esc_html__('Controls the typography settings for the mobile menu text.', 'ascora-core'),
            'text-transform' => true,
            'text-align'     => false,
            'line-height'    => false,
            'subsets'        => false,
            'default'        => [
                'color'            => '#fff',
                'font-weight'      => '400',
                'font-family'      => 'Poppins',
                'google'           => true,
                'font-size'        => '16px',
                'text-transform'   => 'none',
            ],
            'select2'  => [
                'allowClear' => false,
            ],

            'font_family_clear' => false,
        ],
        [

            'id'          => 'mobaile_menu_icon',
            'type'        => 'color',
            'title'       => esc_html__('Menu Icon Color', 'ascora-core'),
            'subtitle'    => esc_html__('Controls the color of the menu icon.', 'ascora-core'),
            'default'     => '#121A2D',
            'transparent' => false,
        ],
        [

            'id'          => 'mobile_menu_border_color',
            'type'        => 'color',
            'title'       => esc_html__('Menu Border Color', 'ascora-core'),
            'subtitle'    => esc_html__('Controls the color of the menu border.', 'ascora-core'),
            'default'     => '#006FD8',
            'transparent' => false,
        ],
        [

            'id'          => 'mobile_menu_background',
            'type'        => 'color',
            'title'       => esc_html__('Menu Background Color', 'ascora-core'),
            'subtitle'    => esc_html__('Controls the background color of the menu.', 'ascora-core'),
            'default'     => '#006FD8',
            'transparent' => false,
        ],
        [

            'id'          => 'mobile_menu_background_hover',
            'type'        => 'color',
            'title'       => esc_html__('Menu Background Hover Color', 'ascora-core'),
            'subtitle'    => esc_html__('Controls the background color of the menu on hover.', 'ascora-core'),
            'default'     => '#006FD8',
            'transparent' => false,
        ],
        [

            'id'          => 'mobile_menu_text_hover',
            'type'        => 'color',
            'title'       => esc_html__('Menu Text Hover/Active Color', 'ascora-core'),
            'subtitle'    => esc_html__('Controls the text color of the menu on hover and active states.', 'ascora-core'),
            'default'     => '#f78da7',
            'transparent' => false,
        ],
    ],
);
