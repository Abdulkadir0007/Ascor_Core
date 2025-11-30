<?php

declare(strict_types=1);

/**
 * Dynamic CSS For Options.
 *
 * @package Ascora
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access
}

//Ensure Ascora theme is active
// if (!class_exists('Ascora_Theme_Assets')) {
//     error_log('Not Found Ascora_Theme_Assets');
// }

function ascora_core_css()
{
    // Ensure ASCORA_CORE_PATH is defined
    if (!defined('ASCORA_CORE_PATH')) {
        return;
    }

    // Get the options
    $ascora = get_option('ascora');

    if (empty($ascora)) {
        return;
    }
    // Header Top

    $header_top_background_color = !isset($ascora['subheader_background_color']) ? '#fff' : esc_attr($ascora['subheader_background_color']);
    $subheader_background        = !isset($ascora['subheader_background']) ? '#006FD8' : esc_attr($ascora['subheader_background']);
    $header_top_border_color     = !isset($ascora['subheader_boder_color']) ? '#006FD8' : esc_attr($ascora['subheader_boder_color']);
    $subheader_text_color2       = !isset($ascora['subheader_text_color2']) ? '#333' : esc_attr($ascora['subheader_text_color2']);
    $subheader_text_color        = !isset($ascora['subheader_text_color']) ? '#333' : esc_attr($ascora['subheader_text_color']);
    $subheader_border_color2     = !isset($ascora['subheader_border_color2']) ? '#333' : esc_attr($ascora['subheader_border_color2']);

    $subheader_menuborder_color = !isset($ascora['subheader_menuborder_color']) ? '#fff' : esc_attr($ascora['subheader_menuborder_color']);
    $subheader_socail_icon      = !isset($ascora['subheader_socail_icon']) ? '#fff' : esc_attr($ascora['subheader_socail_icon']);
    $subheader_icon_color2      = !isset($ascora['subheader_icon_color2']) ? '#333' : esc_attr($ascora['subheader_icon_color2']);

    //Contact Page
    $gmaps_width  = !isset($ascora['maps_width']['width']) ? '100%' : $ascora['maps_width']['width'];
    $gmaps_height = !isset($ascora['maps_height']['height']) ? '450px' : $ascora['maps_height']['height'];
    $maps_margin  = !isset($ascora['maps_margin']['margin-top']) ? '450px' : $ascora['maps_margin']['margin-top'];
    //Contact Form

    $default_values = [
        'contact_form_font_size'            => '16px',
        'contf_label_font_size'             => '16px',
        'contf_after_label_font_size'       => '12px',
        'contact_form_input_color'          => '#560bad',
        'contact_form_input_border_color'   => '#560bad',
        'contf_label_color'                 => '#999',
        'contf_after_label_color'           => '#007bff',
        'contact_form_input_border_radius'  => 5,
        'contact_form_input_border_width'   => 2,
        'sticky_header_background'          => '#fff',
        'header_background'                 => '#fff',
        'sticky_header_menu'                => '#333333',
        'site_sidebar_breakpoint'           => '800px',
        // Animation Button
        'animated_button_font_size'         => '16px',
        'animated_button_radius'            => '8px',
        'animated_button_text_color'        => '#560bad',
        'animated_button_background_color'  => '#fff',
        'animated_button_hover_color'       => '#fff',
        'animated_button_hover_back'        => '#560bad',
        // Load More Button
        'load_more_font_size'               => '16px',
        'load_more_button_readius'          => '0',
        'load_more_button_color'            => '#fff',
        'load_more_button_back'             => '#1D1E5C',
        'load_more_button_hover_color'      => '#fff',
        'load_more_button_hover_back'       => '#292a71',
        'load_more_button_width'            => '#100%',
        // Primary Button
        'primary_button_font_size'          => '16px',
        'primary_button_border_radius'      => '5px',
        'primary_button_text_color'         => '#fff',
        'primary_button_background'         => '#1D1E5C',
        'primary_button_hover_color'        => '#fff',
        'primary_button_background_hover'   => '#292a71',
    ];

    $ascora_options = [];

    foreach ($default_values as $key => $default) {
        $ascora_options[$key] = (isset($ascora[$key]) && $ascora[$key] !== '')
            ? $ascora[$key]
            : $default;
    }
    $contact_form_font_size           = esc_attr($ascora_options['contact_form_font_size']);
    $contact_form_input_color         = esc_attr($ascora_options['contact_form_input_color']);
    $contact_form_input_background    = isset($ascora['contact_form_input_background']['rgba']) ? esc_attr($ascora['contact_form_input_background']['rgba']) : 'rgba(255,255,255,1)';
    $contact_form_input_border_color  = esc_attr($ascora_options['contact_form_input_border_color']);
    $contact_form_input_border_radius = esc_attr($ascora_options['contact_form_input_border_radius'] . 'px');
    $contact_form_input_border_width  = esc_attr($ascora_options['contact_form_input_border_width'] . 'px');

    $contact_form_input_padding = isset($ascora['contact_form_input_padding']) ? $ascora['contact_form_input_padding'] : [
        'padding-top'      => '12px',
        'padding-left'     => '10px',
        'padding-right'    => '10px',
        'padding-bottom'   => '12px',
    ];
    $padding_top                      = !empty($contact_form_input_padding['padding-top']) ? esc_attr($contact_form_input_padding['padding-top']) : '12px';
    $padding_right                    = !empty($contact_form_input_padding['padding-right']) ? esc_attr($contact_form_input_padding['padding-right']) : '10px';
    $padding_bottom                   = !empty($contact_form_input_padding['padding-bottom']) ? esc_attr($contact_form_input_padding['padding-bottom']) : '12px';
    $padding_left                     = !empty($contact_form_input_padding['padding-left']) ? esc_attr($contact_form_input_padding['padding-left']) : '10px';
    $contact_form_input_padding_value = "{$padding_top} {$padding_right} {$padding_bottom} {$padding_left}";
    //label
    $contf_label_background       = isset($ascora['contf_label_background']['rgba']) ? esc_attr($ascora['contf_label_background']['rgba']) : 'rgba(255,255,255,1)';
    $contf_after_label_background = isset($ascora['contf_after_label_background']['rgba']) ? esc_attr($ascora['contf_after_label_background']['rgba']) : 'rgba(255,255,255,1)';
    $contf_label_font_size        = esc_attr($ascora_options['contf_label_font_size']);
    $contf_after_label_font_size  = esc_attr($ascora_options['contf_after_label_font_size']);
    $contf_label_color            = esc_attr($ascora_options['contf_label_color']);
    $contf_after_label_color      = esc_attr($ascora_options['contf_after_label_color']);
    //Header Style
    $header_background = esc_attr($ascora_options['header_background']);

    // Sticky Header Style
    $sticky_header_background = esc_attr($ascora_options['sticky_header_background']);
    $sticky_header_menu_color = esc_attr($ascora_options['sticky_header_menu']);
    $sticky_header_padding    = isset($ascora['sticky_header_padding']) ? esc_attr($ascora['sticky_header_padding'] . 'px') : '10px';
    $sticky_tablet            = isset($ascora['sticky_header_tablet']) ? $ascora['sticky_header_tablet'] : false;
    $sticky_mobile            = isset($ascora['sticky_header_mobile']) ? $ascora['sticky_header_mobile'] : false;
    //Pattern Background
    $numof_pattern      = $ascora['background_pattarn'] ?? '';
    $background_pattern = ASCORA_CORE_URL . 'assets/images/pattern/pattern' . $numof_pattern . '.png';
    //Animation Button
    $animated_button_font_size        = esc_attr($ascora_options['animated_button_font_size']);
    $animated_button_radius           = esc_attr($ascora_options['animated_button_radius']);
    $animated_button_text_color       = esc_attr($ascora_options['animated_button_text_color']);
    $animated_button_background_color = esc_attr($ascora_options['animated_button_background_color']);
    $animated_button_hover_color      = esc_attr($ascora_options['animated_button_hover_color']);
    $animated_button_hover_back       = esc_attr($ascora_options['animated_button_hover_back']);
    $animated_button_padding          = isset($ascora['animated_button_padding']) ? $ascora['animated_button_padding'] : [
        'padding-top'      => '10px',
        'padding-left'     => '24px',
        'padding-right'    => '24px',
        'padding-bottom'   => '10px',
    ];
    $padding_top                   = !empty($animated_button_padding['padding-top']) ? esc_attr($animated_button_padding['padding-top']) : '12px';
    $padding_right                 = !empty($animated_button_padding['padding-right']) ? esc_attr($animated_button_padding['padding-right']) : '10px';
    $padding_bottom                = !empty($animated_button_padding['padding-bottom']) ? esc_attr($animated_button_padding['padding-bottom']) : '12px';
    $padding_left                  = !empty($animated_button_padding['padding-left']) ? esc_attr($animated_button_padding['padding-left']) : '10px';
    $animated_button_padding_value = "{$padding_top} {$padding_right} {$padding_bottom} {$padding_left}";
    //Load More Button
    $load_more_font_size          = esc_attr($ascora_options['load_more_font_size']);
    $load_more_button_readius     = esc_attr($ascora_options['load_more_button_readius']);
    $load_more_button_color       = esc_attr($ascora_options['load_more_button_color']);
    $load_more_button_back        = esc_attr($ascora_options['load_more_button_back']);
    $load_more_button_hover_color = esc_attr($ascora_options['load_more_button_hover_color']);
    $load_more_button_hover_back  = esc_attr($ascora_options['load_more_button_hover_back']);
    $load_more_button_width       = esc_attr($ascora_options['load_more_button_width']);
    $load_more_button_padding     = isset($ascora['load_more_button_padding']) ? $ascora['load_more_button_padding'] : [
        'padding-top'      => '10px',
        'padding-left'     => '24px',
        'padding-right'    => '24px',
        'padding-bottom'   => '10px',
    ];
    $padding_top                    = !empty($load_more_button_padding['padding-top']) ? esc_attr($load_more_button_padding['padding-top']) : '10px';
    $padding_right                  = !empty($load_more_button_padding['padding-right']) ? esc_attr($load_more_button_padding['padding-right']) : '10px';
    $padding_bottom                 = !empty($load_more_button_padding['padding-bottom']) ? esc_attr($load_more_button_padding['padding-bottom']) : '10px';
    $padding_left                   = !empty($load_more_button_padding['padding-left']) ? esc_attr($load_more_button_padding['padding-left']) : '10px';
    $load_more_button_padding_value = "{$padding_top} {$padding_right} {$padding_bottom} {$padding_left}";
    //Primary Button
    $primary_button_font_size        = esc_attr($ascora_options['primary_button_font_size']);
    $primary_button_border_radius    = esc_attr($ascora_options['primary_button_border_radius']);
    $primary_button_text_color       = esc_attr($ascora_options['primary_button_text_color']);
    $primary_button_background       = esc_attr($ascora_options['primary_button_background']);
    $primary_button_hover_color      = esc_attr($ascora_options['primary_button_hover_color']);
    $primary_button_background_hover = esc_attr($ascora_options['primary_button_background_hover']);
    $primary_button_padding          = isset($ascora['primary_button_padding']) ? $ascora['primary_button_padding'] : [
        'padding-top'      => '10px',
        'padding-left'     => '24px',
        'padding-right'    => '24px',
        'padding-bottom'   => '10px',
    ];
    $padding_top                  = !empty($primary_button_padding['padding-top']) ? esc_attr($primary_button_padding['padding-top']) : '10px';
    $padding_right                = !empty($primary_button_padding['padding-right']) ? esc_attr($primary_button_padding['padding-right']) : '10px';
    $padding_bottom               = !empty($primary_button_padding['padding-bottom']) ? esc_attr($primary_button_padding['padding-bottom']) : '10px';
    $padding_left                 = !empty($primary_button_padding['padding-left']) ? esc_attr($primary_button_padding['padding-left']) : '10px';
    $primary_button_padding_value = "{$padding_top} {$padding_right} {$padding_bottom} {$padding_left}";
    //Responsive
    $site_sidebar_breakpoint = esc_attr($ascora_options['site_sidebar_breakpoint'] . 'px');
    // Dynamic CSS content
    $css = "
    :root {
    /* Top Header CSS */
    --subheader_background:$subheader_background;
    --subheader_background_color:$header_top_background_color;
    --subheader_border_color:$header_top_border_color;
    --subheader_text_color2:$subheader_text_color2;
    --subheader_text_color:$subheader_text_color;
    --subheader_border_color2:$subheader_border_color2;
    --subheader_socail_icon:$subheader_socail_icon;
    --subheader_menuborder_color:$subheader_menuborder_color;
    /* Contact Page CSS */
    --gmaps_width:$gmaps_width;
    --gmaps_height:$gmaps_height;
    --gmaps_margin_top:$maps_margin;
    /* Contact Form Input */
    --contact_form_font_size:$contact_form_font_size;
    --contact_form_input_color:$contact_form_input_color;
    --contact_form_input_background:$contact_form_input_background;
    --contact_form_input_padding:$contact_form_input_padding_value;
    --contact_form_input_border_color:$contact_form_input_border_color;
    --contact_form_input_border_width:$contact_form_input_border_width;
    --contact_form_input_border_radius:$contact_form_input_border_radius;
    /* Contact Form Input */
    --contf_label_font_size:$contf_label_font_size;
    --contf_after_label_font_size:$contf_after_label_font_size;
    --contf_label_color:$contf_label_color;
    --contf_after_label_color:$contf_after_label_color;
    --contf_label_background:$contf_label_background;
    --contf_after_label_background:$contf_after_label_background;

    /* Header Style */
    --header_background:$header_background;
    /* Sticky Header Style */
    --sticky_header_background:$sticky_header_background;
    --sticky_header_menu_color:$sticky_header_menu_color;
    --sticky_header_padding:$sticky_header_padding;
    /* Anomation Buttonn Style */
    --animated_button_font_size:$animated_button_font_size;
    --animated_button_radius:$animated_button_radius;
    --animated_button_text_color:$animated_button_text_color;
    --animated_button_background_color:$animated_button_background_color;
    --animated_button_hover_color:$animated_button_hover_color;
    --animated_button_hover_back:$animated_button_hover_back;
    --animated_button_padding:$animated_button_padding_value;
    /* Load More Button */
    --load_more_font_size : $load_more_font_size;
    --load_more_button_readius : $load_more_button_readius;
    --load_more_button_color : $load_more_button_color;
    --load_more_button_back : $load_more_button_back;
    --load_more_button_hover_color : $load_more_button_hover_color;
    --load_more_button_hover_back : $load_more_button_hover_back;
    --load_more_button_width : $load_more_button_width;
    --load_more_button_padding:$load_more_button_padding_value;
    /* Primary Button */
    --primary_button_font_size : $primary_button_font_size;
    --primary_button_border_radius : $primary_button_border_radius;
    --primary_button_text_color : $primary_button_text_color;
    --primary_button_background : $primary_button_background;
    --primary_button_hover_color : $primary_button_hover_color;
    --primary_button_background_hover : $primary_button_background_hover;
    --primary_button_padding:$primary_button_padding_value;
    }
    ";
    if ($ascora['top_icon_color_switch'] == 'custom') {
        $css .= "
    nav.socail-icon ul li a{
      color: $subheader_icon_color2!important;
    }
        ";
    };
    if ($ascora['header_full_width'] == 1) {
        $css .= '
    header .container {
        max-width: 100%;
    }
        ';
    };
    if ($ascora['switch_header_shadow'] == 1) {
        $css .= '
.header {
  backdrop-filter: blur(10px); /* Blurry Effect */
  box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
}
.header.sticky-header{box-shadow:none;}
';
    };
    if ($ascora['sticky_header_shadow'] == 1) {
        $css .= '
        .header.sticky-header{
        box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
    }
        ';
    }
    if ($ascora['switch_bac_patt'] == 1) {
        $css .= "
        body{
        background-image:url($background_pattern);
    }
        ";
    }
    if (!$sticky_tablet) {
        $css .= '
      /* Tablet */
@media (min-width: 768px) and (max-width: 991px) {
  .sticky-header {
        position: static !important; /* Sticky effect বন্ধ হবে */
        box-shadow: none !important; /* Shadow সরিয়ে ফেলা */
        background: transparent !important; /* ব্যাকগ্রাউন্ড স্বচ্ছ করা */
    }
}
    ';
    }
    if (!$sticky_mobile) {
        $css .= '    
/* Mobile Large */
@media (max-width: 767px) {
   .sticky-header {
        position: static !important; /* Sticky effect বন্ধ হবে */
        box-shadow: none !important; /* Shadow সরিয়ে ফেলা */
        background: transparent !important; /* ব্যাকগ্রাউন্ড স্বচ্ছ করা */
    }
}
    ';
    }
    $css .= "@media (max-width: $site_sidebar_breakpoint){
    .blog-main .ascora-row{
    flex-direction:column;
}
    .page-main-section .ascora-row{
    flex-direction:column;
}}
    ";

    $css_file_path = ASCORA_CORE_PATH . 'assets/css/ascora-core.css';

    // Ensure the directory exists
    $css_dir = dirname($css_file_path);
    if (!file_exists($css_dir)) {
        wp_mkdir_p($css_dir);
    }

    // Write the CSS file
    $result = file_put_contents($css_file_path, $css);
    if ($result === false) {
        error_log('Failed to write CSS file: ' . $css_file_path . ' | Check permissions.');
    } else {
        error_log('CSS file updated successfully: ' . $css_file_path);
    }
}

// Hooks for Redux framework (শুধু যদি থিম অ্যাক্টিভ থাকে)
add_action('redux/options/ascora/saved', 'ascora_core_css'); // On saving options
add_action('redux/options/ascora/reset', 'ascora_core_css'); // On resetting all options
add_action('redux/options/ascora/section/reset', 'ascora_core_css'); // On section reset
