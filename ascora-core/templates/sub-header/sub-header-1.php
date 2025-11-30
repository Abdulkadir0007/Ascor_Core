<?php

/**
 * Ascora Sub Header 01.
 *
 * @package Ascora_Core
 * @since 1.0.0
 */

defined('ABSPATH') || exit;
// Prevent direct access


global $ascora;
?>
<div class="sub-header sub-header-1">
    <div class="container">
        <div class="ascora-row flex-container-space-between">
            <div class="sub-left-side">
                <?php if (!empty($ascora['sbheader_cont1'])): ?>
                <?php if ($ascora['sbheader_cont1'] == 1): ?>
                <div class="cont-info">
                    <?php if (!empty($ascora['sub_contact'])): ?>
                    <span><?php echo esc_html($ascora['sub_contact']); ?></span>
                    <span class="mx-2">|</span>
                    <?php endif; ?>

                    <?php if (!empty($ascora['sub_emial'])): ?>
                    <span><?php echo esc_html($ascora['sub_emial']); ?></span>
                    <?php endif; ?>
                </div>
                <?php elseif ($ascora['sbheader_cont1'] == 2): ?>
                <?php get_template_part('inc/templates/socail', 'icon'); ?>
                <?php elseif ($ascora['sbheader_cont1'] == 3): ?>
                <nav class="sub-header-menu">
                    <?php wp_nav_menu([
                                'theme_location' => 'top-menu',
                                'container'      => false,
                                'menu_id'        => 'nav',
                                'echo'           => true,
                            ]); ?>
                </nav>
                <?php endif; ?>
                <?php endif; ?>
            </div>
            <div class="sub-right-side">
                <?php if (!empty($ascora['sbheader_cont2'])): ?>
                <?php if ($ascora['sbheader_cont2'] == 1): ?>
                <div class="cont-info">
                    <?php if (!empty($ascora['sub_contact'])): ?>
                    <span><?php echo esc_html($ascora['sub_contact']); ?></span>
                    <span class="mx-2">|</span>
                    <?php endif; ?>

                    <?php if (!empty($ascora['sub_emial'])): ?>
                    <span><?php echo esc_html($ascora['sub_emial']); ?></span>
                    <?php endif; ?>
                </div>
                <?php elseif ($ascora['sbheader_cont2'] == 2): ?>
                <?php get_template_part('inc/templates/socail', 'icon'); ?>
                <?php elseif ($ascora['sbheader_cont2'] == 3): ?>
                <nav class="sub-header-menu">
                    <?php wp_nav_menu([
                                'theme_location' => 'top-menu',
                                'container'      => false,
                                'menu_id'        => 'nav',
                                'echo'           => true,
                            ]); ?>
                </nav>
                <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>