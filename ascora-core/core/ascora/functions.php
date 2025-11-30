<?php
declare(strict_types=1);
/**
 * Ascora Core : Sticky-header JS variable injector
 *
 * @package Ascora_Core
 * @since 1.0.0
 */

defined('ABSPATH') || exit;

if (!class_exists('Ascora_Sticky_Header')) :

    final class Ascora_Sticky_Header
    {
        /**
         * Bootstrap
         */
        public static function init(): void
        {
            add_action('wp_head', [__CLASS__, 'js'], 5);
        }

        /**
         * Output sticky-header flag for front-end JS
         */
        public static function js(): void
        {
            $opts = get_option('ascora', []);
            $on   = !empty($opts['sticky_header']);
            ?>
<script id="ascora-sticky-data">
    var stickyHeaderSettings = {
        isSticky: <?= $on ? 'true' : 'false'; ?>
    };
</script>
<?php
        }
    }

endif;

Ascora_Sticky_Header::init();
