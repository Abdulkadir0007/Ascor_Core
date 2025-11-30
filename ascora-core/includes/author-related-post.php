<?php

/**
 * Author Related Post 
 * @package Ascora
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

function author_related_posts()
{
    global $ascora;
    $author_related = !isset($ascora['author_related']) ? true : $ascora['author_related'];

    if ($author_related) {
        // Get the current author ID
        $author_id = get_the_author_meta('ID');

        // Arguments for the query
        $args = array(
            'author'         => $author_id, // Filter by author ID
            'post_type'      => 'post',     // Post type (default: 'post')
            'posts_per_page' => 4,          // Number of related posts to show
            'post__not_in'   => array(get_the_ID()), // Exclude the current post
            'meta_query'     => array(
                array(
                    'key'     => '_thumbnail_id', // Check for thumbnail
                    'compare' => 'EXISTS',        // Only posts with a featured image
                )
            ),
        );

        // The Query
        $related_posts = new WP_Query($args);
        if ($related_posts->have_posts()) : ?>

            <div class="author-related-post">
                <div class="unflex-row">
                    <h3 class="related-title">Related Posts</h3>
                </div>
                <div class="ascora-row related-post-row">
                    <?php while ($related_posts->have_posts()): $related_posts->the_post(); ?>
                        <article class="related-post">
                            <div class="media">
                                <div class="d-block">
                                    <?php the_post_thumbnail('full', array('class' => 'img-thumbnail')); ?>
                                </div>
                                <div class="hovercover">
                                    <a class="first-child" href="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full') ?>" data-lightbox="image-1">
                                        <div class="media-icon"><i class="fa-solid fa-magnifying-glass"></i></div>
                                    </a>
                                    <a href="<?php the_permalink(); ?>" class="last-child">
                                        <div class="media-icon"><i class="fa-solid fa-link"></i></div>
                                    </a>
                                    <h2 class="hovercover-title"><?php the_title(); ?></h2>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>
            </div>
<?php
            wp_reset_postdata();
        endif;
    }
}

add_shortcode('author_related', 'author_related_posts');
