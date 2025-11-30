<?php

declare(strict_types=1);

/**
 * Ascora Google maps Options.
 *
 * @package Ascora
 * @since 1.0.0
 */

defined('ABSPATH') || exit;
// Prevent direct access

Redux::set_fields(
    $opt_name,
    'm-maps',
    [
        [
            'id'     => 'typo-import-maps',
            'type'   => 'info',
            'style'  => 'info',
            'notice' => false,
            'desc'   => wp_kses_post(__('<strong>IMPORTANT NOTE:</strong> The options on this tab are for the Google Map that displays on the "Contact" page template. The only option that controls the Google Map element is the Google Maps Embed and API Key.', 'ascora-core')),
        ],
        [
            'id'       => 'maps_type',
            'type'     => 'button_set',
            'title'    => esc_html__('Select Google Maps Type', 'ascora-core'),
            'options'  => [
                'embed' => esc_html__('Embed', 'ascora-core'),
                'api'   => esc_html__('API', 'ascora-core'),
            ],
            'default'  => 'embed',
            'desc'     => esc_html__('Choose between embedding a Google Map directly or using the Google Maps API.', 'ascora-core'),
        ],
        [
            'id'          => 'maps_embed',
            'type'        => 'textarea',
            'title'       => esc_html__('Google Maps Embed Code', 'ascora-core'),
            'subtitle'    => esc_html__('Paste your Google Maps Embed iframe here', 'ascora-core'),
            'placeholder' => esc_html__('Paste Google Maps iframe here', 'ascora-core'),
            'default'     => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14542.174911535873!2d90.6800366!3d24.32754545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375685fe8f3c2917%3A0xa3e93b4d22006458!2sPakundia!5e0!3m2!1sen!2sbd!4v1706108551660!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'required'    => ['maps_type', '=', 'embed'],
            'desc'        => esc_html__('Copy and paste the iframe code from Google Maps Embed.', 'ascora-core'),
        ],
        [
            'id'       => 'maps_api_key',
            'type'     => 'text',
            'title'    => esc_html__('Google Maps API Key', 'ascora-core'),
            'subtitle' => esc_html__('Enter your Google Maps API Key here', 'ascora-core'),
            'default'  => '',
            'required' => ['maps_type', '=', 'api'],
            'desc'     => esc_html__('Get your API key from the Google Cloud Console.', 'ascora-core'),
        ],
        [
            'id'       => 'maps_api_type',
            'type'     => 'button_set',
            'title'    => esc_html__('Select API Type', 'ascora-core'),
            'options'  => [
                'js'    => esc_html__('JavaScript API', 'ascora-core'),
                'embed' => esc_html__('Embed API', 'ascora-core'),
            ],
            'default'  => 'js',
            'required' => ['maps_type', '=', 'api'],
            'desc'     => esc_html__('Choose between using the JavaScript API or Embed API.', 'ascora-core'),
        ],
        [
            'id'       => 'maps_location',
            'type'     => 'text',
            'title'    => esc_html__('Location for API', 'ascora-core'),
            'subtitle' => esc_html__('Enter your location (latitude,longitude)', 'ascora-core'),
            'default'  => '24.32754545,90.6800366',
            'required' => ['maps_type', '=', 'api'],
            'desc'     => esc_html__('Enter the latitude and longitude of your location, separated by a comma.', 'ascora-core'),
        ],
        [
            'id'       => 'maps_zoom',
            'type'     => 'slider',
            'title'    => esc_html__('Map Zoom Level', 'ascora-core'),
            'subtitle' => esc_html__('Adjust the zoom level of the map', 'ascora-core'),
            'default'  => 15,
            'min'      => 1,
            'max'      => 20,
            'step'     => 1,
            'required' => ['maps_type', '=', 'api'],
            'desc'     => esc_html__('Set the zoom level for the map (1 = World, 20 = Street).', 'ascora-core'),
        ],
        [
            'id'       => 'maps_marker_title',
            'type'     => 'text',
            'title'    => esc_html__('Marker Title', 'ascora-core'),
            'subtitle' => esc_html__('Enter a title for the map marker', 'ascora-core'),
            'default'  => 'Our Location',
            'required' => ['maps_type', '=', 'api'],
            'desc'     => esc_html__('This text will appear when the user clicks on the marker.', 'ascora-core'),
        ],
        [
            'id'       => 'maps_style',
            'type'     => 'textarea',
            'title'    => esc_html__('Custom Map Style', 'ascora-core'),
            'subtitle' => esc_html__('Enter custom map styles in JSON format', 'ascora-core'),
            'default'  => '',
            'required' => ['maps_type', '=', 'api'],
            'desc'     => esc_html__('Use Google Maps Styling Wizard to generate custom styles.', 'ascora-core'),
        ],
        [
            'id'             => 'maps_width',
            'title'          => esc_html__('Maps Width', 'ascora-core'),
            'subtitle'       => esc_html__('Controls Your Maps Width', 'ascora-core'),
            'type'           => 'dimensions',
            'units'          => ['em', '%', 'px', 'rem'],
            'height'         => false,
            'units_extended' => 'true',
            'default'        => [
                'width' => '100%',
                'units' => '%',
            ],
        ],
        [
            'id'             => 'maps_height',
            'title'          => esc_html__('Maps Height', 'ascora-core'),
            'subtitle'       => esc_html__('Controls Your Maps Height', 'ascora-core'),
            'type'           => 'dimensions',
            'units'          => ['em', 'px', 'rem'],
            'width'          => false,
            'units_extended' => 'true',
            'default'        => [
                'height' => '450px',
                'units'  => 'px',
            ],
        ],
        [
            'id'             => 'maps_margin',
            'title'          => esc_html__('Margin Top', 'ascora-core'),
            'subtitle'       => esc_html__('Controls Your Google Maps Margin Top', 'ascora-core'),
            'type'           => 'spacing',
            'mode'           => 'margin',
            'units'          => ['em', 'px', '%', 'rem'],
            'units_extended' => true,
            'left'           => false,
            'bottom'         => false,
            'right'          => false,
            'default'        => [
                'margin-top' => '50px',
                'units'      => 'px',
            ],
        ],
    ],
);
