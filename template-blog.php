<?php
/*
Template Name: Blog Template
*/
get_header();
$args = array(
    'post_type' => 'post'
);

$post_query = new WP_Query($args);

if ($post_query->have_posts()) {
    while ($post_query->have_posts()) {
        $post_query->the_post();
        ?>
        <article <?php post_class('card mb-4'); ?>>
            <h2 class="card-header"><?php the_title(); ?></h2>

            <?php if (has_post_thumbnail()) : ?>
                <div class="featured-image">
                    <?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
                </div>
            <?php endif; ?>

            <div class="card-body">
                <div class="post-content">
                    <?php the_content(); ?>
                </div>
            </div>

            <div class="card-footer">
                <div class="post-meta">
                    <p class="mb-0">Posted on <?php the_date(); ?> by <?php the_author(); ?></p>
                    <p class="mb-0">Categories: <?php the_category(', '); ?></p>
                </div>
            </div>
        </article>
        <?php
    }
    wp_reset_postdata(); // Reset post data to the main query
}
?>

<?php
get_footer();
?>
