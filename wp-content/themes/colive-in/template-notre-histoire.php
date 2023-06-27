<?php
/* Template Name: Notre Histoire templates */
$bg_image_url = get_field('bg_url');
get_header();
?>



<section class="page-description-section our-history-message bg-colored-verylight">

    <?php if ($bg_image_url) : ?>
        <div class="bg-image" style="background-image: url(<?php echo $bg_image_url ?>);"></div>
    <?php endif; ?>
    <div class="container">
        <div class="fondators d-flex justify-content-center">

            <?php
            // WP_Query request arguments
            $args = array(
                'post_type' => 'fondators',
                'posts_per_page' => 2,
                'meta_key' => 'order',
                'orderby' => 'meta_value',
                'order' => 'ASC'
            );

            // WP_Query loop
            $the_query = new WP_Query($args);

            if ($the_query->have_posts()) {
                // at least one post find
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    $name = get_field('name');
                    $image = get_field('image');
                    $color = get_field('color');
            ?>
                    <!-- HTML code with dynamic element -->

                    <!-- Fondator Circles -->
                    <div class="outer-circle circle-color-<?php echo $color; ?>">
                        <h2 class="circle-title"><?php echo $name; ?></h2>
                        <div class="inner-circle">
                            <img src="<?php echo $image['url']; ?>" alt="photo du fondateur <?php echo $name; ?>">
                        </div>
                    </div>
            <?php
                }
                /* Reset data */
                wp_reset_postdata();
            } else {
                // No post
            }
            ?>


        </div>
        <?php
        $block_post = get_post(208);
        echo '<h1>' . get_the_title($block_post) . '</h1>';
        echo do_blocks($block_post->post_content);
        ?>

    </div>
</section>

<section class="bg-colored">
    <div class="container">
        <?php
        $block_post = get_post(210);
        echo '<h1>' . get_the_title($block_post) . '</h1>';
        echo do_blocks($block_post->post_content);
        ?>
    </div>


</section>

<section class="bg-white">
    <div class="container">
        <?php
        $block_post = get_post(212);
        echo do_blocks($block_post->post_content);
        ?>
    </div>


</section>

<?php get_footer(); ?>