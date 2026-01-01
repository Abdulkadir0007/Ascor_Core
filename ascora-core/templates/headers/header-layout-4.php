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
?>
<div class="header-layout-4">
    <div class="ascora-main-menu">
        <div class="website-logo"> </div>
        <div class="ascora-menu-resm"></div>
        <div class="align-center">

            <div class="header-menu site-main-header">
                <div class="dorpdown-menu flex-container-space-between">
                    <nav class="main-menu search middle-logo">
                        <?php wp_nav_menu([
                    'theme_location' => 'main-menu',
                    'container'      => false,
                    'fallback_cb'    => 'default_menu'
                ]) ?>
                    </nav>


                    <div class="search-ascora">
                        <form id="search-form"
                            action="<?php echo esc_url(home_url('/')); ?>"
                            method="get">
                            <div class="search-container">
                                <button type="submit" id="search-button">
                                    <span id="search-icon" class="dashicons dashicons-search"></span>
                                </button>
                                <input type="text" name="s" required id="search-input"
                                    placeholder="<?php esc_attr_e('Search...', 'ascora-core'); ?>"
                                    value="<?php echo get_search_query(); ?>" />
                            </div>
                            <a class="close-search-form" href=""><i class="fa-solid fa-xmark"></i></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>