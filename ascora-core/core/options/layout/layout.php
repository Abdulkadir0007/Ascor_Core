<?php

declare(strict_types=1);

/**
 * Ascora Layout Options.
 *
 * @package Ascora
 */

defined('ABSPATH') || exit;

// Prevent direct access
$opt_name = 'ascora';

Redux::set_fields(
    $opt_name,
    'layout',
    [
        [
            'id'       => 'layout_switch',
            'type'     => 'button_set',
            'title'    => esc_html__('Layout', 'ascora-core'),
            'subtitle' => esc_html__('Controls the site layout.', 'ascora-core'),
            'options'  => [
                'wide'  => esc_html__('Wide', 'ascora-core'),
                'boxed' => esc_html__('Boxed', 'ascora-core'),
            ],
            'default'  => 'wide',
        ],
        [
            'id'       => 'layout_width',
            'type'     => 'text',
            'title'    => esc_html__('Site Width', 'ascora-core'),
            'subtitle' => esc_html__('Set the overall site width. Use a valid CSS unit (e.g., 1200px).', 'ascora-core'),
            'default'  => '1250px',
        ],
        [
            'id'            => 'layout_padding',
            'type'          => 'spacing',
            'mode'          => 'padding',
            'display_units' => false,
            'left'          => false,
            'right'         => false,
            'title'         => esc_html__('Page Content Padding', 'ascora-core'),
            'subtitle'      => esc_html__('Set the top and bottom padding for the page content in pixel.', 'ascora-core'),
            'default'       => [
                'padding-top'    => '30px',
                'padding-bottom' => '30px',
            ],
        ],
        [

            'id'       => 'bexed_shadow_style',
            'type'     => 'select',
            'title'    => esc_html__('Boxed Layout Shadow', 'ascora-core'),
            'subtitle' => esc_html__('Set the Boxed Layout Shadow Type according to your preference.', 'ascora-core'),
            'default'  => 'no_shadow',
            'options'  => [
                'no_shadow'     => esc_html__('No Shadow', 'ascora-core'),
                'light_shadow'  => esc_html__('Light Shadow', 'ascora-core'),
                'medium_shadow' => esc_html__('Medium Shadow', 'ascora-core'),
                'heard_shadow'  => esc_html__('Hard Shadow', 'ascora-core'),
            ],
            'select2'       => ['allowClear' => false],
            'required'      => ['layout_switch', '=', 'boxed'],
        ],
        [
            'id'            => 'boxed_margin',
            'type'          => 'spacing',
            'mode'          => 'margin',
            'display_units' => false,
            'left'          => false,
            'right'         => false,
            'title'         => esc_html__('Boxed Layout Top/Bottom Offset', 'ascora-core'),
            'subtitle'      => esc_html__('Adjust the top and bottom offset of the boxed layout.', 'ascora-core'),
            'required'      => ['layout_switch', '=', 'boxed'],
            'default'       => [
                'margin-top'    => '0',
                'margin-bottom' => '0',
            ],
        ],
    ]
);
