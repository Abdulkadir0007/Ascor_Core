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
<div class="header-layout-5">
    <div class="ascora-main-menu">
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

        <div class="menu-search flex-container-space-between">
            <div class="header-menu site-main-header">
                <nav class="main-menu dorpdown-menu">
                    <?php wp_nav_menu([
                    'theme_location' => 'main-menu',
                    'container'      => false,
                    'fallback_cb'    => 'default_menu'
                ]) ?>
                </nav>
            </div>
            <div class="ascora-menu-resm">
                <div class="header-search">
                    <h3 class="search-title">
                        <?php echo $ascora['header-tagline'] ?>
                    </h3>
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
                </div>
            </div>
        </div>
    </div>
</div>