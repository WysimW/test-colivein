<?php
/* Template Name: Nos Activités templates */
$bg_image_url = get_field('bg_url');

get_header(); ?>



<section class="page-description-section bg-colored">
    <?php if ($bg_image_url) : ?>
        <div class="bg-image" style="background-image: url(<?php echo $bg_image_url ?>);"></div>
    <?php endif; ?>
    <div class="container">
    <?php
        $block_post = get_post(244);
        echo '<h1>' . get_the_title($block_post) . '</h1>';
        echo do_blocks($block_post->post_content);
        ?>

    </div>
</section>
<section class="ourhouse-whychoseus-section bg-colored-verylight">
    <div class="container">
        <?php
        $block_post = get_post(197);
        echo '<h1>' . get_the_title($block_post) . '</h1>';
        echo do_blocks($block_post->post_content);
        ?>


        <ul class="d-flex flex-row flex-wrap align-items-center justify-content-center">
            <?php
            $args = array(
                'post_type' => 'live_together',
                'posts_per_page' => -1,
                'meta_key' => 'order',
                'orderby' => 'meta_value',
                'order' => 'ASC'
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    $titre = get_the_title() ? get_the_title() : get_field('title');
                    $description = get_the_content() ? get_the_content() : get_field('description');
                    $icone = get_field('icon');
                    $image = get_field('image');
            ?>
                    <li class="ouractivites-list-item">
                        <div class="d-flex flex-column activities-flex-small" >
                            <div class="d-flex flex-row activities-flex-small">
                                <div class="icon-listing-activities"><i aria-hidden="true" class="fas <?php echo $icone; ?>  fa-listing"></i></div>
                                <div class="list-text d-flex flex-column ">
                                    <span class="list-title"><?php echo $titre; ?></span>
                                    <span class="list-description"><?php echo $description; ?></span>
                                </div>
                            </div>
                            <img class="list-image" src="<?php echo $image; ?>">
                        </div>
                    </li>
            <?php
                }
                wp_reset_postdata();
            }
            ?>

        </ul>
    </div>
</section>

<!-- Third Our Houses Section - Messages -->
<section class="ouractivities-messages-section bg-white">
    <div class="container">

        <div>
            <div class="d-flex text-center ouractivities-message-block">
                <div>
                    <?php
                    $block_post = get_post(200);
                    echo '<h1>' . get_the_title($block_post) . '</h1>';
                    echo do_blocks($block_post->post_content);
                    ?>
                </div>
                <div>
                    <?php
                    $block_post = get_post(202);
                    echo '<h1>' . get_the_title($block_post) . '</h1>';
                    echo do_blocks($block_post->post_content);
                    ?>
                </div>

            </div>
            <div class="ouractivities-strong-endmessages">
            <?php
            $block_post = get_post(204);
            echo do_blocks($block_post->post_content);
            ?>
            </div>
        </div>

    </div>

</section>

<?php get_footer(); ?>