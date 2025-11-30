<?php

declare(strict_types=1);

/**
 * Ascora Blog Page Options.
 *
 * @package Ascora
 */

defined('ABSPATH') || exit;
// Prevent direct access

$opt_name = 'ascora';

Redux::set_fields(
    $opt_name,
    'blog-post',
    [
        [
            'id'       => 'bread-layout',
            'type'     => 'switch',
            'title'    => esc_html__('Breadcrumb On Post Page', 'ascora-core'),
            'subtitle' => esc_html__('On/off Breadcrumb On Your Blog Page.', 'ascora-core'),
            'default'  => true,

        ],
        [
            'id'       => 'blog_sidebar_position',
            'type'     => 'button_set',
            'title'    => esc_html__('Sidebar Position', 'ascora-core'),
            'options'  => [
                'left'  => esc_html__('Left Sidebar', 'ascora-core'),
                'right' => esc_html__('Right Sidebar', 'ascora-core'),
                'none'  => esc_html__('No Sidebar', 'ascora-core'),
            ],
            'default'  => 'right',
        ],
        [
            'id'       => 'blm_side',
            'type'     => 'switch',
            'title'    => esc_html__('Sidebare show Blog Page in Mobail', 'ascora-core'),
            'subtitle' => esc_html__('On Off Sidebare Your blog page Sidebare  on Mobail.', 'ascora-core'),
            'default'  => true,
        ],
        [
            'id'       => 'blog_more_load_type',
            'type'     => 'button_set',
            'title'    => esc_html__('Pagination Type', 'ascora-core'),
            'subtitle' => esc_html__('Controls Post Pagination align On Blog page.', 'ascora-core'),
            'options'  => [
                '1' => esc_html__('Pagination', 'ascora-core'),
                '2' => esc_html__('Load More Button', 'ascora-core'),
                '3' => esc_html__('Infinite Scroll', 'ascora-core'),
            ],
            'default'  => 1,
        ],
        [
            'id'            => 'load_more_import',
            'type'          => 'info',
            'title'         => esc_html__('fotter widgets area background style.', 'ascora-core'),
            'subtitle'      => '',
            'required'      => ['blog_more_load_type', '=', '2'],
        ],
        [
            'id'            => 'load_more_font_size',
            'type'          => 'text',
            'title'         => esc_html__('Load More Button Font Size', 'ascora-core'),
            'subtitle'      => esc_html__('Control Button Font size. Enter value including CSS unit (px, em, rem), ex: 16px.', 'ascora-core'),
            'default'       => '16px',
            'required'      => ['blog_more_load_type', '=', '2'],
        ],
        [
            'id'            => 'load_more_button_padding',
            'type'          => 'spacing',
            'mode'          => 'padding',
            'units'         => 'px',
            'all'           => true,
            'display_units' => false,
            'title'         => esc_html__('Load More Button Padding', 'ascora-core'),
            'subtitle'      => esc_html__('Controls Button Padding.', 'ascora-core'),
            'required'      => ['blog_more_load_type', '=', '2'],
            'default'       => [
                'padding-top'       => '10px',
                'padding-bottom'    => '10px',
                'padding-left'      => '10px',
                'padding-right'     => '10px',
            ],
        ],
        [
            'id'            => 'load_more_button_width',
            'type'          => 'text',
            'title'         => esc_html__('Load More Button width', 'ascora-core'),
            'subtitle'      => esc_html__('Control Button border Redius. Enter value including CSS unit (px, em, rem), ex: 0px.', 'ascora-core'),
            'default'       => '100%',
            'required'      => ['blog_more_load_type', '=', '2'],
        ],
        [
            'id'            => 'load_more_button_readius',
            'type'          => 'text',
            'title'         => esc_html__('Load More Button Border Radius', 'ascora-core'),
            'subtitle'      => esc_html__('Control Button border Redius. Enter value including CSS unit (px, em, rem), ex: 0px.', 'ascora-core'),
            'default'       => '0px',
            'required'      => ['blog_more_load_type', '=', '2'],
        ],
        [
            'id'            => 'load_more_button_color',
            'type'          => 'color',
            'title'         => esc_html__('Load More Button Text Color', 'ascora-core'),
            'subtitle'      => esc_html__('Control Button Text Color.', 'ascora-core'),
            'default'       => '#fff',
            'transparent'   => false,
            'required'      => ['blog_more_load_type', '=', '2'],
        ],
        [
            'id'            => 'load_more_button_back',
            'type'          => 'color',
            'title'         => esc_html__('Load More Button Background Color', 'ascora-core'),
            'subtitle'      => esc_html__('Control Button Bckground Color.', 'ascora-core'),
            'default'       => '#1D1E5C',
            'transparent'   => false,
            'required'      => ['blog_more_load_type', '=', '2'],
        ],
        [
            'id'            => 'load_more_button_hover_color',
            'type'          => 'color',
            'title'         => esc_html__('Load More Button Hover Text Color', 'ascora-core'),
            'subtitle'      => esc_html__('Control Button Hover Text Color.', 'ascora-core'),
            'default'       => '#fff',
            'transparent'   => false,
            'required'      => ['blog_more_load_type', '=', '2'],
        ],
        [
            'id'            => 'load_more_button_hover_back',
            'type'          => 'color',
            'title'         => esc_html__('Load More Button Hover Background Color', 'ascora-core'),
            'subtitle'      => esc_html__('Control Button Hover Background Color.', 'ascora-core'),
            'default'       => '#292a71',
            'transparent'   => false,
            'required'      => ['blog_more_load_type', '=', '2'],
        ],
        [
            'id'       => 'blog_readmore_button_type',
            'type'     => 'button_set',
            'title'    => esc_html__('Submit Button Type', 'ascora-core'),
            'options'  => [
                'animated' => esc_html__('Animated', 'ascora-core'),
                'normal'   => esc_html__('Normal', 'ascora-core'),
            ],
            'default'  => 'animated',
            'desc'     => esc_html__('Choose between embedding a Google Map directly or using the Google Maps API.', 'ascora-core'),
        ],
    ],
);
