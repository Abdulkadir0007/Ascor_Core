<?php

/**
 * 
 * The Header Of Ascora Theme
 * @package Ascora
 * @since 1.0.0
 */
// Prevent direct access.
if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

global $ascora;
// $google_maps_data = get_option('ascora'); // Redux অপশন নাম
// $location = $google_maps_data['opt-google-maps'];

// if (!empty($location['latitude']) && !empty($location['longitude'])) {
//     $latitude = esc_attr($location['latitude']);
//     $longitude = esc_attr($location['longitude']);
//     $marker_info = esc_html($location['marker_info']);

//     return '<iframe
//         width="100%"
//         height="450"
//         frameborder="0"
//         style="border:0"
//         src="https://www.google.com/maps/embed/v1/place?key=YOUR_GOOGLE_MAPS_API_KEY&q=' . $latitude . ',' . $longitude . '"
//         allowfullscreen>
//     </iframe>';
//     echo '<p>' . $marker_info . '</p>';
// } else {
//     echo '<p>No location selected.</p>';
// }
