<?php

/**
 * The Header Of Ascora Theme
 * @package Ascora
 * @since 1.0.0
 */

// Prevent direct access.
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

function ascora_google_maps()
{
    global $ascora;
    // Get options from the theme settings
    $maps_type        = isset($ascora['maps_type']) ? $ascora['maps_type'] : 'embed';
    $maps_embed       = isset($ascora['maps_embed']) ? $ascora['maps_embed'] : 'nai';
    $maps_api_key     = isset($ascora['maps_api_key']) ? $ascora['maps_api_key'] : '';
    $maps_api_type    = isset($ascora['maps_api_type']) ? $ascora['maps_api_type'] : 'js';
    $maps_location    = isset($ascora['maps_location']) ? $ascora['maps_location'] : '24.32754545,90.6800366';
    $maps_zoom        = isset($ascora['maps_zoom']) ? intval($ascora['maps_zoom']) : 15;
    $maps_marker_title = isset($ascora['maps_marker_title']) ? sanitize_text_field($ascora['maps_marker_title']) : 'Our Location';
    $maps_style       = isset($ascora['maps_style']) ? $ascora['maps_style'] : '';

    // Validate location format
    $location_parts = explode(',', $maps_location);
    $lat = isset($location_parts[0]) ? floatval($location_parts[0]) : 24.32754545;
    $lng = isset($location_parts[1]) ? floatval($location_parts[1]) : 90.6800366;

    // Decode Google Maps style JSON safely
    $map_styles = !empty($maps_style) ? json_decode($maps_style, true) : null;

    // Start output buffering
    ob_start();

    // Display based on the selected map type
    if ($maps_type === 'embed') {
        // Embed type
        // var_dump($maps_embed);

        echo '<div class="maps-container">' . $maps_embed . '</div>';
    } elseif ($maps_type === 'api' && $maps_api_type === 'js') {
        // JavaScript API type
?>
        <div id="google-map" style="width:100%; height:400px;"></div>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=<?php echo esc_attr($maps_api_key); ?>&callback=initMap"></script>
        <script>
            function initMap() {
                var location = {
                    lat: <?php echo json_encode($lat); ?>,
                    lng: <?php echo json_encode($lng); ?>
                };

                var mapOptions = {
                    zoom: <?php echo json_encode($maps_zoom); ?>,
                    center: location
                };

                <?php if ($map_styles) : ?>
                    mapOptions.styles = <?php echo json_encode($map_styles); ?>;
                <?php endif; ?>

                var map = new google.maps.Map(document.getElementById('google-map'), mapOptions);

                new google.maps.Marker({
                    position: location,
                    map: map,
                    title: <?php echo json_encode($maps_marker_title); ?>
                });
            }
        </script>
    <?php
    } elseif ($maps_type === 'api' && $maps_api_type === 'embed') {
        // Embed API type
    ?>
        <iframe
            width="100%" height="450" style="border:0;" loading="lazy"
            src="https://www.google.com/maps/embed/v1/place?key=<?php echo esc_attr($maps_api_key); ?>&q=<?php echo urlencode($maps_location); ?>&zoom=<?php echo esc_attr($maps_zoom); ?>">
        </iframe>
<?php
    }

    // End output buffering and return the content
    return ob_get_clean();
}

add_shortcode('google-maps', 'ascora_google_maps');
