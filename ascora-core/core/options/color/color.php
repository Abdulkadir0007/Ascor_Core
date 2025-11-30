<?php

declare(strict_types=1);


Redux::set_fields(
    $opt_name,
    'color',
    [
        [
            'id'       => 'primary_color',
            'type'     => 'color',
            'title'    => esc_html__('Primary Color', 'ascora-core'),
            'default'  => '#273c75',
        ],
        [
            'id'       => 'secondary_color',
            'type'     => 'color',
            'title'    => esc_html__('Secondary Color', 'ascora-core'),
            'default'  => '#f5f6fa',
        ],
        [
            'id'       => 'accent_color',
            'type'     => 'color',
            'title'    => esc_html__('Accent Color', 'ascora-core'),
            'default'  => '#e1b12c',
        ],
        [
            'id'       => 'text_color',
            'type'     => 'color',
            'title'    => esc_html__('Text Color', 'ascora-core'),
            'default'  => '#2f3640',
        ],
        [
            'id'       => 'link_color',
            'type'     => 'color',
            'title'    => esc_html__('Link Color', 'ascora-core'),
            'default'  => '#e1b12c',
        ],
        [
            'id'       => 'link_hover_color',
            'type'     => 'color',
            'title'    => esc_html__('Link Hover Color', 'ascora-core'),
            'default'  => '#f39c12',
        ],
        [
            'id'       => 'border_color',
            'type'     => 'color',
            'title'    => esc_html__('Border Color', 'ascora-core'),
            'default'  => '#dcdde1',
        ],
    ]
);
