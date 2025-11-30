<?php

declare(strict_types=1);

/**
 * @package Ascora_Core
 * @since 1.0
 */

defined('ABSPATH') || exit;
// Prevent direct access

$opt_name = 'ascora';

Redux::set_fields(
    $opt_name,
    'blog-meta',
    [
        [
            'id'        => 'blog_meta_switch',
            'type'      => 'switch',
            'title'     => esc_html__('Blog Meta', 'ascora-core'),
            'subtitle'  => esc_html__('Turn on to display post meta on blog posts. If set to "On", you can also control individual meta items below. If set to "Off" all meta items will be disabled.', 'ascora-core'),
            'default'   => true,
        ],
        [
            'id'        => 'blog_meta_author',
            'type'      => 'switch',
            'title'     => esc_html__('Post Meta Author', 'ascora-core'),
            'subtitle'  => esc_html__('Turn on to display the post meta author name.', 'ascora-core'),
            'default'   => true,
        ],
        [
            'id'        => 'blog_meta_date',
            'type'      => 'switch',
            'title'     => esc_html__('Post Meta Date', 'ascora-core'),
            'subtitle'  => esc_html__('Turn on to display the post meta Date.', 'ascora-core'),
            'default'   => true,
        ],
        [
            'id'        => 'blog_meta_category',
            'type'      => 'switch',
            'title'     => esc_html__('Post Meta Categories', 'ascora-core'),
            'subtitle'  => esc_html__('Turn on to display the post meta Categories.', 'ascora-core'),
            'default'   => true,
        ],
        [
            'id'        => 'blog_meta_comment',
            'type'      => 'switch',
            'title'     => esc_html__('Post Meta Comments', 'ascora-core'),
            'subtitle'  => esc_html__('Turn on to display the post meta Comments.', 'ascora-core'),
            'default'   => true,
        ],
        [
            'id'        => 'blog_meta_tags',
            'type'      => 'switch',
            'title'     => esc_html__('Post Meta Tags', 'ascora-core'),
            'subtitle'  => esc_html__('Turn on to display the post meta Tags.', 'ascora-core'),
            'default'   => false,
        ],
        [
            'id'        => 'blog_meta_font_size',
            'type'      => 'text',
            'title'     => esc_html__('Post Meta Font Size', 'ascora-core'),
            'subtitle'  => esc_html__('Controls the font size for meta data text. Enter value including CSS unit (px, em, rem), ex: 13px.', 'ascora-core'),
            'default'   => '13px',
        ],
        [
            'id'       => 'blog_meta_date_format',
            'type'     => 'text',
            'title'    => esc_html__('Date Format', 'ascora-core'),
            'subtitle' => sprintf(
                esc_html__('Controls the date format for date meta data. %1$s. Leave empty to use the default value from your %2$s', 'ascora-core'),
                '<a href="https://wordpress.org/support/article/formatting-date-and-time/" target="_blank" rel="noopener noreferrer">' . esc_html__('Formatting Date and Time', 'ascora-core') . '</a>',
                '<a href="' . esc_url(admin_url('options-general.php')) . '" target="_blank">' . esc_html__('WordPress Settings', 'ascora-core') . '</a>'
            ),
        ],
    ],
);
