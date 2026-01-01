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
<div class="header-layout-2">
    <div class="ascora-row flex-container-space-between ascora-main-menu">

        <div class="header-menu site-main-header ascora-menu-search">
            <div class="dorpdown-menu flex-container-space-between">
                <nav class="main-menu search">
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
        <div class="ascora-menu-resm">
            <div class="logo">
                <div class="logo-img">
                    <?php if ($ascora['logo-img']['url']): ?>
                    <a href="<?php echo home_url(); ?>"><img
                            src="<?php print $ascora['logo-img']['url'] ?>"
                            alt="logo"></a>
                    <?php else: ?>
                    <a href="<?php echo home_url(); ?>">
                        <h2 class="logo-text">
                            <?php print $ascora['logo-text']; ?>
                        </h2>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>