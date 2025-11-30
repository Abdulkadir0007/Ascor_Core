<?php

declare(strict_types=1);
/**
 * Ascora Website Titlebare Options.
 *
 * @package Ascora
 * @since 1.0.0
 */

defined('ABSPATH') || exit;
// Prevent direct access

Redux::set_section(
    $opt_name,
    [
        'title'      => esc_html__('Website Title Aria', 'ascora-core'),
        'id'         => 'web-t',
        'subsection' => true,
        'fields'     => [
            [
                'id'     => 'web-import',
                'type'   => 'info',
                'style'  => 'info',
                'notice' => false,
                'desc'   => wp_kses_post(__('<strong>IMPORTANT NOTE:</strong> This option is only for the title area of ​​the website, which contains the website title description and searchbar.', 'ascora-core')),
            ],
            [
                'id'       => 'web_search',
                'type'     => 'switch',
                'title'    => esc_html__('Show Searchbare', 'ascora-core'),
                'subtitle' => esc_html__('Controls Searchbare On/off On Website Title Aria.', 'ascora-core'),
                'default'  => true,

            ],
            [
                'id'       => 'web_desc',
                'type'     => 'switch',
                'title'    => esc_html__('Show Website Descripton', 'ascora-core'),
                'subtitle' => esc_html__('Controls Website Descripton On/off On Website Title Aria.', 'ascora-core'),
                'default'  => true,

            ],
            [
                'id'               => 'web_title_typo',
                'type'             => 'typography',
                'title'            => esc_html__('Website Title Typography', 'ascora-core'),
                'subtitle'         => esc_html__('Controls Website Title Typography.', 'ascora-core'),
                'text-transform'   => true,
                'text-align'       => false,
                'subsets'          => false,
                'default'          => [
                    'color'         => '#1D1E5c',
                    'font-weight'   => '600',
                    'font-family'   => 'Poppins',
                    'google'        => true,
                    'font-size'     => '30px',
                    'line-height'   => '1.5',
                ],
                'line-height-unit' => '',
                'required'         => [ 'web_desc', '=', true ],
            ],
            [
                'id'               => 'web_desc_typo',
                'type'             => 'typography',
                'title'            => esc_html__('Website Descpription Typography', 'ascora-core'),
                'subtitle'         => esc_html__('Controls Website Descpription Typography.', 'ascora-core'),
                'text-transform'   => true,
                'margin-bottom'    => true,
                'text-align'       => false,
                'subsets'          => false,
                'default'          => [
                    'color'         => '#1D1E5c',
                    'font-weight'   => '600',
                    'font-family'   => 'Poppins',
                    'google'        => true,
                    'font-size'     => '24px',
                    'line-height'   => '1.5',
                ],
                'line-height-unit' => '',
                'required'         => [ 'web_desc', '=', true ],
            ],
            [
                'id'       => 'search-not',
                'type'     => 'info',
                'title'    => esc_html__('Style of search input.', 'ascora-core'),
                'subtitle' => '',
            ],

            [
                'id'       => 'search-background',
                'type'     => 'color',
                'title'    => esc_html__('Search Input Background', 'ascora-core'),
                'subtitle' => esc_html__('Control the search input background color.', 'ascora-core'),
                'default'  => '#F7F7F7',
            ],
            [
                'id'          => 'search-color',
                'type'        => 'color',
                'title'       => esc_html__('Search Input text Color', 'ascora-core'),
                'subtitle'    => esc_html__('Control the search input text color.', 'ascora-core'),
                'default'     => '#333',
                'transparent' => false,

            ],
            [
                'id'       => 'search-font',
                'type'     => 'text',
                'title'    => esc_html__('Search Input Font Size', 'ascora-core'),
                'subtitle' => esc_html__('Control the search input Font Size.', 'ascora-core'),
                'default'  => '17px',

            ],
            [
                'id'       => 'search-input-padding',
                'type'     => 'dimensions',
                'units'    => false,
                'title'    => __('Padding Option', 'ascora-core'),
                'subtitle' => __('Control the search input Padding.', 'ascora-core'),
                'default'  => [
                    'width'  => '10',
                    'height' => '10',
                ],
            ],
            [
                'id'          => 'search-bordre',
                'type'        => 'border',
                'all'         => true,
                'color_alpha' => true,
                'title'       => esc_html__('Search Input Border', 'ascora-core'),
                'subtitle'    => esc_html__('Control the search input Border.', 'ascora-core'),
                'default'     => [
                    'border-color'  => '#F7F7F7',
                    'border-style'  => 'solid',
                    'border-top'    => '1px',
                    'border-right'  => '1px',
                    'border-bottom' => '1px',
                    'border-left'   => '1px',
                ],
            ],

            [
                'id'       => 'search-button-not',
                'type'     => 'info',
                'title'    => esc_html__('Style of search input button.', 'ascora-core'),
                'subtitle' => '',
            ],
            [
                'id'          => 'search-button-background',
                'type'        => 'color',
                'title'       => esc_html__('Search button Background', 'ascora-core'),
                'subtitle'    => esc_html__('Control the search input Button background Color.', 'ascora-core'),
                'default'     => '#F252A7',
                'transparent' => false,
            ],
            [
                'id'          => 'search-button-color',
                'type'        => 'color',
                'title'       => esc_html__('Search button Color', 'ascora-core'),
                'subtitle'    => esc_html__('Control the search input Button text color.', 'ascora-core'),
                'default'     => '#fff',
                'transparent' => false,

            ],
            [
                'id'       => 'search-button-font',
                'type'     => 'text',
                'title'    => esc_html__('Search button Font Size', 'ascora-core'),
                'subtitle' => esc_html__('Control the search input Button Font size.Enter value including CSS unit (px, em, rem), ex: 17px .', 'ascora-core'),
                'default'  => '17px',

            ],
            [
                'id'       => 'search-button-padding',
                'type'     => 'dimensions',
                'units'    => false,
                'height'   => false,
                'title'    => __('Padding Option', 'ascora-core'),
                'subtitle' => __('Control the search input Button Padding Right/left.', 'ascora-core'),
                'default'  => [
                    'width' => '11',
                ],
            ],
            [
                'id'          => 'search-button-bordre',
                'type'        => 'border',
                'color_alpha' => true,
                'title'       => esc_html__('Search button Border', 'ascora-core'),
                'subtitle'    => esc_html__('Control the search input Button Border.', 'ascora-core'),
                'output'      => [ '.site-header' ],
                'default'     => [
                    'border-color'  => '#F252A7',
                    'border-style'  => 'solid',
                    'border-top'    => '1px',
                    'border-right'  => '1px',
                    'border-bottom' => '1px',
                    'border-left'   => '1px',
                ],
            ],
        ],
    ]
);
