<?php

declare(strict_types=1);

/**
 * Ascora Form Styling Options.
 *
 * @package Ascora
 */

defined('ABSPATH') || exit;
// Prevent direct access
Redux::set_fields(
    $opt_name,
    'contacstyle',
    [
        [
            'id'     => 'stylecont-import',
            'type'   => 'info',
            'style'  => 'info',
            'notice' => false,
            'desc'   => wp_kses_post(__('<strong>IMPORTANT NOTE:</strong>  The options on this tab are only for the Contact Form Style that displays on the "Contact" page template.', 'ascora-core')),
        ],
        [
            'id'       => 'contact_form_info',
            'type'     => 'info',
            'title'    => esc_html__('Contact Form Input & Textarea Style', 'ascora-core'),
            'subtitle' => '',
        ],
        [
            'id'       => 'contact_form_font_size',
            'title'    => esc_html__('Input & Textarea Font Size', 'ascora-core'),
            'subtitle' => esc_html__('Controls the Input Font Size. Enter value including any valid CSS unit, ex: 16px.', 'ascora-core'),
            'type'     => 'text',
            'default'  => '16px',
        ],
        [
            'id'          => 'contact_form_input_color',
            'title'       => esc_html__('Input & Textarea Color', 'ascora-core'),
            'subtitle'    => esc_html__('Controls the Input  color.', 'ascora-core'),
            'type'        => 'color',
            'color_alpha' => true,
            'transparent' => false,
            'default'     => '#560bad',
        ],
        [
            'id'        => 'contact_form_input_background',
            'type'      => 'color_rgba',
            'title'     => 'Input & Textarea Background Color',
            'desc'      => 'The caption of this button may be changed to whatever you like!',
            'default'   => [
                'color'     => '#fff',
                'alpha'     => 1
            ],
        ],
        [
            'id'             => 'contact_form_input_padding',
            'type'           => 'spacing',
            'units'          => 'px',
            'display_units'  => false,
            'title'          => esc_html__('Input & Textarea Padding', 'ascora-core'),
            'subtitle'       => esc_html__('Controls Footer Padding.', 'ascora-core'),
            'default'        => [
                'padding-top'      => '12px',
                'padding-left'     => '10px',
                'padding-right'    => '10px',
                'padding-bottom'   => '12px',
            ],
        ],

        [
            'id'            => 'contact_form_input_border_width',
            'title'         => esc_html__('Input & Textarea Border Width', 'ascora-core'),
            'subtitle'      => esc_html__('Controls the Input Border Readius', 'ascora-core'),
            'type'          => 'slider',
            'min'           => 0,
            'max'           => 10,
            'default'       => 2,
            'display_value' => 'text',
        ],
        [
            'id'          => 'contact_form_input_border_color',
            'title'       => esc_html__('Input & Textarea Border Color', 'ascora-core'),
            'subtitle'    => esc_html__('Controls the Input  color.', 'ascora-core'),
            'type'        => 'color',
            'color_alpha' => true,
            'transparent' => false,
            'default'     => '#560bad',
        ],
        [
            'id'            => 'contact_form_input_border_radius',
            'title'         => esc_html__('Input & Textarea Border Radius', 'ascora-core'),
            'subtitle'      => esc_html__('Controls the Input Border Readius', 'ascora-core'),
            'type'          => 'slider',
            'min'           => 0,
            'max'           => 50,
            'default'       => 5,
            'display_value' => 'text',
        ],
        [
            'id'       => 'contact_form_lavel_info',
            'type'     => 'info',
            'title'    => esc_html__('Contact Form Input & Textarea Label Style Before Slide Up', 'ascora-core'),
            'subtitle' => '',
        ],
        [
            'id'       => 'contf_label_font_size',
            'title'    => esc_html__('Label Font Size', 'ascora-core'),
            'subtitle' => esc_html__('Controls the Input Font Size. Enter value including any valid CSS unit, ex: 16px.', 'ascora-core'),
            'type'     => 'text',
            'default'  => '16px',
        ],
        [
            'id'          => 'contf_label_color',
            'title'       => esc_html__('Label Color', 'ascora-core'),
            'subtitle'    => esc_html__('Controls the Input  color.', 'ascora-core'),
            'type'        => 'color',
            'color_alpha' => true,
            'transparent' => false,
            'default'     => '#999',
        ],
        [
            'id'        => 'contf_label_background',
            'type'      => 'color_rgba',
            'title'     => 'Label Background Color',
            'desc'      => 'The caption of this button may be changed to whatever you like!',
            'default'   => [
                'color'     => '#fff',
                'alpha'     => 1
            ],
        ],
        [
            'id'       => 'contact_form_lavel_after_info',
            'type'     => 'info',
            'title'    => esc_html__('Contact Form Input & Textarea Label Style After Slide Up', 'ascora-core'),
            'subtitle' => '',
        ],
        [
            'id'       => 'contf_after_label_font_size',
            'title'    => esc_html__('Label Font Size', 'ascora-core'),
            'subtitle' => esc_html__('Controls the Input Font Size. Enter value including any valid CSS unit, ex: 16px.', 'ascora-core'),
            'type'     => 'text',
            'default'  => '12px',
        ],
        [
            'id'          => 'contf_after_label_color',
            'title'       => esc_html__('Label Color', 'ascora-core'),
            'subtitle'    => esc_html__('Controls the Input  color.', 'ascora-core'),
            'type'        => 'color',
            'color_alpha' => true,
            'transparent' => false,
            'default'     => '#007bff',
        ],
        [
            'id'        => 'contf_after_label_background',
            'type'      => 'color_rgba',
            'title'     => 'Label Background Color',
            'desc'      => 'The caption of this button may be changed to whatever you like!',
            'default'   => [
                'color'     => '#fff',
                'alpha'     => 1
            ],
        ],
        [
            'id'       => 'contact_form_submit_info',
            'type'     => 'info',
            'title'    => esc_html__('Contact Form Submit Button', 'ascora-core'),
        ],
        [
            'id'       => 'swich_contact_form_submit',
            'type'     => 'button_set',
            'title'    => esc_html__('Submit Button Type', 'ascora-core'),
            'options'  => [
                'animated' => esc_html__('Animated', 'ascora-core'),
                'normal'   => esc_html__('Normal', 'ascora-core'),
            ],
            'default'  => 'animated',
            'desc'     => esc_html__('Choose between embedding a Google Map directly or using the Google Maps API.', 'ascora-core'),
        ],

    ]
);
