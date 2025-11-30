<?php
/**
 * Single post card for AJAX load-more
 *
 * @package Ascora
 * @since 1.0.0
 */

defined('ABSPATH') || exit;

$opts      = get_option('ascora', []);
$btn_type  = ($opts['blog_readmore_button_type'] ?? '') === 'animated' ? 'ascora' : 'primary';
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-article ajax-post'); ?>>
    <h2 class="post-title">
        <a
            href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>

    <?php if (has_post_thumbnail()) : ?>
    <div class="media">
        <div class="d-block">
            <?php the_post_thumbnail('full', ['class' => 'img-thumbnail']); ?>
        </div>
        <div class="hovercover">
            <a class="first-child"
                href="<?php echo esc_url(get_the_post_thumbnail_url(null, 'full')); ?>"
                data-lightbox="image-1">
                <div class="media-icon"><i class="fa-solid fa-magnifying-glass"></i></div>
            </a>
            <a href="<?php the_permalink(); ?>" class="last-child">
                <div class="media-icon"><i class="fa-solid fa-link"></i></div>
            </a>
            <h2 class="hovercover-title"><?php the_title(); ?></h2>
        </div>
    </div>
    <?php endif; ?>

    <?php do_action('ascora_blog_meta_core'); ?>

    <p>
        <?php
        echo wp_kses_post(
            wp_trim_words(
                get_the_content('', false),
                30,
                '&hellip;</p><p><a href="' . esc_url(get_the_permalink()) . '" class="' . esc_attr($btn_type) . '-button">' .
                esc_html__('Read More', 'ascora') .
                '</a>'
            )
        );
?>
    </p>
</article>