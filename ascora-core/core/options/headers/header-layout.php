<?php

declare(strict_types=1);

/**
 * Ascora Header layout Options.
 *
 * @package Ascora
 */

defined('ABSPATH') || exit;
// Prevent direct access
if (class_exists('Ascora_WooCommerce')) {
    Redux::set_fields(
        $opt_name,
        'header-lay',
        [
            [
                'id'       => 'web_header_type',
                'type'     => 'button_set',
                'title'    => esc_html__('Website Header Type', 'ascora-core'),
                'options'  => [
                    'normal'      => esc_html__('Normal Header', 'ascora-core'),
                    'woocommerce' => esc_html__('Woocommerce Header', 'ascora-core'),
                ],
                'default'  => 'normal',
            ],
        ]
    );
}

Redux::set_fields(
    $opt_name,
    'header-lay',
    [
        [
            'id'       => 'header-layout',
            'type'     => 'image_select',
            'title'    => esc_html__('Header Layout Style', 'ascora-core'),
            'subtitle' => esc_html__('Choose your preferred header layout style.', 'ascora-core'),
            'options'  => [
                '1' => [
                    'alt' => 'Header Layout 1',
                    'img' => ASCORA_CORE_URL . 'core/options/headers/img/img1.png',
                ],
                '2' => [
                    'alt' => 'Header Layout 2',
                    'img' => ASCORA_CORE_URL . 'core/options/headers/img/img2.png',
                ],
                '3' => [
                    'alt' => 'Header Layout 3',
                    'img' => ASCORA_CORE_URL . 'core/options/headers/img/img3.png',
                ],
                '4' => [
                    'alt' => 'Header Layout 4',
                    'img' => ASCORA_CORE_URL . 'core/options/headers/img/img4.png',
                ],
                '5' => [
                    'alt' => 'Header Layout 5',
                    'img' => ASCORA_CORE_URL . 'core/options/headers/img/img5.png',
                ],
                '6' => [
                    'alt' => 'Header Layout 6',
                    'img' => ASCORA_CORE_URL . 'core/options/headers/img/img6.png',
                ],
            ],
            'default'  => '1',

            'required' => ['web_header_type', '=', 'normal'],
        ],
        [
            'id'       => 'header-tagline',
            'type'     => 'textarea',
            'required' => ['header-layout', '>=', '5'],
            'title'    => esc_html__('Tagline For Content', 'ascora-core'),
            'subtitle' => esc_html__('This content will display if you have "Tagline" selected for the Header Content 3 or 4 option above.', 'ascora-core'),
            'default'  => esc_html__('Insert Tagline Here...', 'ascora-core'),
        ],

    ],
);
