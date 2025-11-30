<?php

/**
 * The Header Of Ascora Theme
 * @package Ascora
 * @since 1.0.0
 */

// Prevent direct access.
if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

// সোশ্যাল শেয়ার ফাংশন
function ascora_social_share()
{
    global $post;

    if (!isset($post)) {
        return ''; // যদি পোস্ট না থাকে, তাহলে কিছুই রিটার্ন করবে না।
    }

    // পোস্টের তথ্য
    $post_url   = urlencode(get_permalink($post->ID));
    $post_title = urlencode(get_the_title($post->ID));
    $post_image = urlencode(get_the_post_thumbnail_url($post->ID, 'full'));

    // সোশ্যাল শেয়ার লিংক
    $facebook_url  = "https://www.facebook.com/sharer/sharer.php?u={$post_url}";
    $twitter_url   = "https://twitter.com/intent/tweet?text={$post_title}&url={$post_url}";
    $linkedin_url  = "https://www.linkedin.com/sharing/share-offsite/?url={$post_url}";
    $whatsapp_url  = "https://api.whatsapp.com/send?text={$post_title} - {$post_url}";
    $pinterest_url = "https://pinterest.com/pin/create/button/?url={$post_url}&media={$post_image}&description={$post_title}";
    $reddit_url    = "https://www.reddit.com/submit?url={$post_url}&title={$post_title}";
    $telegram_url  = "https://t.me/share/url?url={$post_url}&text={$post_title}";
    $vk_url        = "https://vk.com/share.php?url={$post_url}&title={$post_title}&image={$post_image}";
    $email_url     = "mailto:?subject={$post_title}&body={$post_url}";

    // HTML Structure
    $output = '<div class="social-share">';
    $output .= '<div class="share-social"><h2>Share This Story, Choose Your Platform!</h2></div>';
    $output .= '<div class="social-share-icon">';
    $output .= '<abbr title="Facebook"><a href="' . esc_url($facebook_url) . '" target="_blank" class="social-button facebook"><i class="fa-brands fa-facebook-f"></i></a></abbr>';
    $output .= '<abbr title="X"><a href="' . esc_url($twitter_url) . '" target="_blank" class="social-button twitter"><i class="fa-brands fa-x-twitter"></i></a></abbr>';
    $output .= '<abbr title="Linkedin"><a href="' . esc_url($linkedin_url) . '" target="_blank" class="social-button linkedin"><i class="fa-brands fa-linkedin-in"></i></a></abbr>';
    $output .= '<abbr title="Whatsapp"><a href="' . esc_url($whatsapp_url) . '" target="_blank" class="social-button whatsapp"><i class="fa-brands fa-whatsapp"></i></a></abbr>';
    $output .= '<abbr title="Pinterest"><a href="' . esc_url($pinterest_url) . '" target="_blank" class="social-button pinterest"><i class="fa-brands fa-pinterest"></i></a></abbr>';
    $output .= '<abbr title="Reddit"><a href="' . esc_url($reddit_url) . '" target="_blank" class="social-button reddit"><i class="fa-brands fa-reddit"></i></a></abbr>';
    $output .= '<abbr title="Telegram"><a href="' . esc_url($telegram_url) . '" target="_blank" class="social-button telegram"><i class="fa-brands fa-telegram"></i></a></abbr>';
    $output .= '<abbr title="VK"><a href="' . esc_url($vk_url) . '" target="_blank" class="social-button vk"><i class="fa-brands fa-vk"></i></a></abbr>';
    $output .= '<abbr title="Email"><a href="' . esc_url($email_url) . '" class="social-button email"><i class="fa-solid fa-envelope"></i></a></abbr>';
    $output .= '</div>';
    $output .= '</div>';

    return $output;
}

// Shortcode রেজিস্টার করা হচ্ছে
add_shortcode('social_share', 'ascora_social_share');
