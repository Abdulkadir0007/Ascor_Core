<?php

declare(strict_types=1);

/**
 * Ascora Single Blog Page Options.
 *
 * @package Ascora
 */

defined('ABSPATH') || exit;
// Prevent direct access

Redux::set_fields(
    $opt_name,
    'blog-single',
    [
        [
            'id'       => 'single-pagination',
            'type'     => 'switch',
            'title'    => esc_html__('Pagination', 'ascora-core'),
            'subtitle' => esc_html__('On/Off Previews/Nex Post Pagination.', 'ascora-core'),
            'default'  => true,
        ],
        [
            'id'       => 'single_title_position',
            'type'     => 'button_set',
            'title'    => esc_html__('Post Title Position', 'ascora-core'),
            'subtitle' => esc_html__('Controls Post Title Position.', 'ascora-core'),
            'options'  => [
                'below'   => esc_html__('Below', 'ascora-core'),
                'above'   => esc_html__('Above', 'ascora-core'),
                'disable' => esc_html__('Disable', 'ascora-core'),
            ],
            'default'  => 'below', //
        ],

        [
            'id'       => 'single_meta_position',
            'type'     => 'button_set',
            'title'    => esc_html__('Meta Data Position', 'ascora-core'),
            'subtitle' => esc_html__('Controls Post Meta Data Position.', 'ascora-core'),
            'options'  => [
                'above-article' => 'Above Article',
                'below-title'   => 'Below Title',
            ],
            'required' => [
                ['single_title_position', '!=', 'disable'],
            ],
            'default'  => 'below-title',
        ],
        [
            'id'       => 'social-share',
            'type'     => 'switch',
            'title'    => esc_html__('Social Sharing Box', 'ascora-core'),
            'subtitle' => esc_html__('Turn on to display the social sharing box.', 'ascora-core'),
            'default'  => true,
        ],
        [
            'id'       => 'author_info',
            'type'     => 'switch',
            'title'    => esc_html__('Author Info', 'ascora-core'),
            'subtitle' => esc_html__('Controls Post Author Info.', 'ascora-core'),
            'default'  => true,
        ],
        [
            'id'       => 'author_related',
            'type'     => 'switch',
            'title'    => esc_html__('Related Post', 'ascora-core'),
            'subtitle' => esc_html__('Controls Post Author Related Post.', 'ascora-core'),
            'default'  => true,
        ],
        [
            'id'       => 'single_comment',
            'type'     => 'switch',
            'title'    => esc_html__('Comment', 'ascora-core'),
            'subtitle' => esc_html__('Controls On/Off Post Comment.', 'ascora-core'),
            'default'  => true,
        ],
    ],
);
