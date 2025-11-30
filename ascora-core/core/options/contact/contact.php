<?php

declare(strict_types=1);

/**
 * Ascora Contact Form Options.
 *
 * @package Ascora
 */

defined('ABSPATH') || exit;
// Prevent direct access

Redux::set_fields(
    $opt_name,
    'contact',
    [
        [
            'id'     => 'cont-import',
            'type'   => 'info',
            'style'  => 'info',
            'notice' => false,
            'desc'   => wp_kses_post(__('<strong>IMPORTANT NOTE:</strong> The options on this tab are only for the contact form that displays on the "Contact" page template.', 'ascora-core')),
        ],
        [
            'id'       => 'bread_switch_con',
            'type'     => 'switch',
            'title'    => esc_html__('Breadcrumb On Contact Template', 'ascora-core'),
            'subtitle' => esc_html__('On/off Breadcrumb On Your Contact Template.', 'ascora-core'),
            'default'  => true,

        ],
        [
            'id'       => 'to-email',
            'type'     => 'text',
            'title'    => esc_html__('Email Address', 'ascora-core'),
            'subtitle' => esc_html__('Enter the email address the form should be sent to. This only works for the form on the contact page template.', 'ascora-core'),
            'validate' => 'email',
        ],
        [
            'id'          => 'switch-notice',
            'title'       => esc_html__('Contact messeg', 'ascora-core'),
            'subtitle'    => esc_html__('Contact messeg on/off For not Loget User', 'ascora-core'),
            'type'        => 'switch',
            'placeholder' => esc_html__('Switch Field', 'ascora-core'),
            'default'     => true,
        ],
        [
            'id'       => 'text-notice',
            'type'     => 'textarea',
            'required' => ['switch-notice', '=', true],
            'title'    => esc_html__('Contact messeg Text', 'ascora-core'),
            'subtitle' => esc_html__('Write Your Contact messeg Text.', 'ascora-core'),
            'default'  => esc_html__('By checking this box, you confirm that you have read and are agreeing to our terms of use regarding the storage of the data submitted through this form.', 'ascora-core'),
        ],
    ]
);
