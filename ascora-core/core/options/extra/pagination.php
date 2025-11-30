<?php

declare(strict_types=1);

/**
 * Ascora Pagination Styling Options.
 *
 * @package Ascora
 * @since 1.0.0
 */

defined('ABSPATH') || exit;
// Prevent direct access


Redux::set_fields(
    $opt_name,
    'paginetion_id',
    [
        [
            'id'     => 'pagination-import',
            'type'   => 'info',
            'style'  => 'info',
            'notice' => false,
            'desc'   => wp_kses_post(__('<strong>IMPORTANT NOTE:</strong> This tab Only For Pagination options.This Pagination  is all website main Pagination,that showing blog,project,archive etc.', 'ascora-core')),
        ],
        [
            'id'       => 'pagination-align',
            'type'     => 'button_set',
            'title'    => esc_html__('Post Pagination align', 'ascora-core'),
            'subtitle' => esc_html__('Controls Post Pagination align On Blog page.', 'ascora-core'),
            'options'  => [
                '1' => 'Left',
                '2' => 'Center',
                '3' => 'Right',
            ],
            'default'  => 2,

        ],
        [
            'id'       => 'pagination_font',
            'type'     => 'text',
            'title'    => esc_html__('Pagination Font Size', 'ascora-core'),
            'subtitle' => esc_html__('Control the Pagination Font Size.Enter value including CSS unit (px, em, rem), ex: 16px .', 'ascora-core'),
            'default'  => '16px',

        ],
        [
            'id'          => 'pagination_text_color',
            'type'        => 'color',
            'title'       => esc_html__('Pagination Text Color', 'ascora-core'),
            'subtitle'    => esc_html__('Control the Pagination Font Color.', 'ascora-core'),
            'default'     => '#1D1E5c',
            'transparent' => false,

        ],
        [
            'id'          => 'pagination_active_color',
            'type'        => 'color',
            'title'       => esc_html__('Pagination Active & Hover Text Color', 'ascora-core'),
            'subtitle'    => esc_html__('Control the Pagination Active Hover Font Color.', 'ascora-core'),
            'default'     => '#FFf',
            'transparent' => false,
        ],
        [
            'id'          => 'pagination_active_hover',
            'type'        => 'color',
            'title'       => esc_html__('Pagination Active & Hover Background Color', 'ascora-core'),
            'subtitle'    => esc_html__('Control the Pagination Active Hover Background Color.', 'ascora-core'),
            'default'     => '#1D1E5c',
            'transparent' => false,
        ],

    ],
);
