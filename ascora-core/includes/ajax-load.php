<?php
declare(strict_types=1);
/**
 * AJAX : Load-more posts (Button + Infinite Scroll)
 *
 * @package Ascora
 * @since 1.0.0
 */

defined('ABSPATH') || exit;

add_action('wp_ajax_nopriv_ascora_load_more_posts', 'ascora_load_more_posts');
add_action('wp_ajax_ascora_load_more_posts', 'ascora_load_more_posts');

function ascora_load_more_posts(): void
{
    check_ajax_referer('ascora_load_more_nonce', 'security');

    $paged = isset($_POST['page']) ? absint($_POST['page']) : 2;
    if ($paged < 2) {
        wp_send_json_success('');
    } // প্রথম পেজ স্কিপ

    $opts      = get_option('ascora', []);
    $btn_type  = $opts['blog_readmore_button_type'] ?? 'primary';
    $btn_class = $btn_type === 'animated' ? 'ascora' : 'primary';

    $loop = new WP_Query([
        'post_type'           => 'post',
        'post_status'         => 'publish',
        'paged'               => $paged,
        'ignore_sticky_posts' => true,
    ]);

    if (!$loop->have_posts()) {
        wp_send_json_success('No More Posts');
    }

    ob_start();
    while ($loop->have_posts()) : $loop->the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('blog-article'); ?>>
    <h2 class="post-title"><a
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
                        '&hellip;</p><p><a href="' . esc_url(get_the_permalink()) . '" class="' . esc_attr($btn_class) . '-button">' .
                        esc_html__('Read More', 'ascora') .
                        '</a>'
                    )
                );
        ?>
    </p>
</article>
<?php endwhile;

    wp_send_json_success(ob_get_clean());
    wp_die();
}
