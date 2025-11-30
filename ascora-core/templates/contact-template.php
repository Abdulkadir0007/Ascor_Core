<?php
/**
 * Template Name: Contact
 * Contact template.
 *
 * @package Ascora
 * @since 1.0.0
 */

defined('ABSPATH') || exit;

get_header();
?>

<div class="container contact-page">
    <?php if (! empty($ascora['bread_switch_con'])) : ?>
    <div class="ascora-row breadcrumb">
        <?php get_template_part('templates/breadcrumb/breadcrumb', 'page'); ?>
    </div>
    <?php endif ?>
    <div class="unflex-row">
        <div class="g-maps">
            <?php echo do_shortcode('[google-maps]'); ?>
        </div>
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                ?>
        <article class="contact-article">
            <?php if (has_post_thumbnail()) : ?>
            <div class="media">
                <div class="d-block">
                    <?php the_post_thumbnail('full', [ 'class' => 'img-thumbnail' ]); ?>
                </div>
                <div class="hovercover">
                    <a class="first-child"
                        href="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>"
                        data-lightbox="image-1">
                        <div class="media-icon"><i class="fa-solid fa-magnifying-glass"></i></div>
                    </a>
                    <a href="<?php the_permalink(); ?>"
                        class="last-child">
                        <div class="media-icon"><i class="fa-solid fa-link"></i></div>
                    </a>
                    <h2 class="hovercover-title">
                        <?php the_title(); ?></h2>
                </div>
            </div>
            <?php endif; ?>
            <?php the_content(); ?>
        </article>
        <?php
            endwhile;
        endif;
?>
        <?php include ASCORA_CORE_PATH . 'templates/contact-form.php'; ?>
    </div>
</div>
<?php get_footer(); ?>