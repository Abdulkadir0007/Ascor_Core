<?php

declare(strict_types=1);

/**
 * Ascora Background Options.
 *
 * @package Ascora
 * @since 1.0.0
 */

defined('ABSPATH') || exit;
// Prevent direct access


Redux::set_fields(
    $opt_name,
    'backk',
    [
         [
                'id'     => 'foots-import',
                'type'   => 'info',
                'style'  => 'info',
                'notice' => false,
                'desc'   => wp_kses_post(__('<strong>IMPORTANT NOTE:</strong> This tab contains heading typography options. Additional typography options for specific areas can be found within other tabs. Example: For menu typography options go to the menu tab.', 'ascora-core')),
            ],
            [
                'id'       => 'opt-background',
                'type'     => 'background',

                'default'  => [
                    'background-color' => '#838483',
                ],
                'title'    => __('Body Background', 'Ascora-Core'),
                'subtitle' => __('Body background with image, color, etc.', 'ascora-core'),
            ],
        [
            'id'       => 'switch_bac_patt',
            'type'     => 'switch',
            'title'    => esc_html__('background Pattern Image', 'ascora-core'),
            'subtitle' => esc_html__('A preview of the selected image will appear underneath the select box.', 'Ascora-Core'),
            'default'  => false,
        ],
        [
            'id'       => 'background_pattarn',
            'type'     => 'image_select',
            'required' => ['switch_bac_patt', '=', true],
            'title'    => esc_html__('background Pattern Images', 'ascora-core'),
            'subtitle' => esc_html__('A preview of the selected image will appear underneath the select box.', 'ascora-core'),
            'options'  => [
                [
                    'alt' => 'pattern 1',
                    'img' => ASCORA_CORE_URL . '/assets/images/pattern/pattern0.png',
                ],
                [
                    'alt' => 'pattern 2',
                    'img' => ASCORA_CORE_URL . '/assets/images/pattern/pattern1.png',
                ],
                [
                    'alt' => 'pattern 3',
                    'img' => ASCORA_CORE_URL . '/assets/images/pattern/pattern2.png',
                ],
                [
                    'alt' => 'pattern 4',
                    'img' => ASCORA_CORE_URL . '/assets/images/pattern/pattern4.png',
                ],
                [
                    'alt' => 'pattern 5',
                    'img' => ASCORA_CORE_URL . '/assets/images/pattern/pattern5.png',
                ],
                [
                    'alt' => 'pattern 6',
                    'img' => ASCORA_CORE_URL . '/assets/images/pattern/pattern6.png',
                ],
                [
                    'alt' => 'pattern 7',
                    'img' => ASCORA_CORE_URL . '/assets/images/pattern/pattern7.png',
                ],
                [
                    'alt' => 'pattern 8',
                    'img' => ASCORA_CORE_URL . '/assets/images/pattern/pattern8.png',
                ],
                [
                    'alt' => 'pattern 9',
                    'img' => ASCORA_CORE_URL . '/assets/images/pattern/pattern9.png',
                ],
                [
                    'alt' => 'pattern 10',
                    'img' => ASCORA_CORE_URL . '/assets/images/pattern/pattern10.png',
                ],
                [
                    'alt' => 'pattern 11',
                    'img' => ASCORA_CORE_URL . '/assets/images/pattern/pattern11.png',
                ],
                [
                    'alt' => 'pattern 12',
                    'img' => ASCORA_CORE_URL . '/assets/images/pattern/pattern12.png',
                ],
                [
                    'alt' => 'pattern 13',
                    'img' => ASCORA_CORE_URL . '/assets/images/pattern/pattern13.png',
                ],
                [
                    'alt' => 'pattern 14',
                    'img' => ASCORA_CORE_URL . '/assets/images/pattern/pattern14.png',
                ],
                [
                    'alt' => 'pattern 15',
                    'img' => ASCORA_CORE_URL . '/assets/images/pattern/pattern15.png',
                ],
                [
                    'alt' => 'pattern 16',
                    'img' => ASCORA_CORE_URL . '/assets/images/pattern/pattern16.png',
                ],
                [
                    'alt' => 'pattern 17',
                    'img' => ASCORA_CORE_URL . '/assets/images/pattern/pattern17.png',
                ],
                [
                    'alt' => 'pattern 18',
                    'img' => ASCORA_CORE_URL . '/assets/images/pattern/pattern18.png',
                ],
                [
                    'alt' => 'pattern 19',
                    'img' => ASCORA_CORE_URL . '/assets/images/pattern/pattern19.png',
                ],
                [
                    'alt' => 'pattern 20',
                    'img' => ASCORA_CORE_URL . '/assets/images/pattern/pattern20.png',
                ],
                [
                    'alt' => 'pattern 21',
                    'img' => ASCORA_CORE_URL . '/assets/images/pattern/pattern21.png',
                ],
                [
                    'alt' => 'pattern 22',
                    'img' => ASCORA_CORE_URL . '/assets/images/pattern/pattern22.png',
                ],
                [
                    'alt' => 'pattern 23',
                    'img' => ASCORA_CORE_URL . '/assets/images/pattern/pattern23.png',
                ],
                [
                    'alt' => 'pattern 24',
                    'img' => ASCORA_CORE_URL . '/assets/images/pattern/pattern24.png',
                ],
                [
                    'alt' => 'pattern 25',
                    'img' => ASCORA_CORE_URL . '/assets/images/pattern/pattern3.png',
                ],
            ],
        ]
    ]
);
