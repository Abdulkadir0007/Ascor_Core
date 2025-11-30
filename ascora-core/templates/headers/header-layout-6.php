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
<div class="header-layout-6">

    <div class="logo-img text-center">
        <?php if (!empty($ascora['logo-img']['url'])): ?>
        <a href="<?php echo home_url(); ?>" class="logo-img"><img
                src="<?php echo esc_url($ascora['logo-img']['url']) ?>"
                alt="<?php bloginfo('name') ?>"></a>
        <?php else: ?>
        <a href="<?php echo home_url(); ?>">
            <h2 class="Web-logo">
                <?php echo esc_html($ascora['logo-text']); ?>
            </h2>
        </a>
        <?php endif; ?>
    </div>
    <div class="flex-container-space-between">
        <div class="header-search">
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
            </form>

            <h3 class="search-title align-self-center">
                <?php echo esc_html__($ascora['header-tagline']) ?>
            </h3>
        </div>
        <div class="header-menu">
            <nav class="main-menu right">
                <?php wp_nav_menu([
                    'theme_location' => 'main-menu',
                    'container'      => false,
                    'fallback_cb'    => 'default_menu'
                ]) ?>
            </nav>
        </div>
    </div>

</div>