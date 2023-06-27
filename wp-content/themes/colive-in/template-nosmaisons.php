<?php
/* Template Name: Nos Maison templates */
$bg_image_url = get_field('bg_url');
get_header();
?>



<section class="page-description-section bg-colored">
    <?php if ($bg_image_url) : ?>
        <div class="bg-image" style="background-image: url(<?php echo $bg_image_url ?>);"></div>
    <?php endif; ?>
    <div class="container">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                the_content();
            endwhile;
        endif;
        ?>

    </div>
</section>
<section class="ourhouse-whychoseus-section bg-white">
    <div class="container">
        <?php
        $block_post = get_post(186);
        echo '<h1>' . get_the_title($block_post) . '</h1>';
        echo do_blocks($block_post->post_content);
        ?>

        <ul class="d-flex flex-column align-items-center">
            <?php
            $args = array(
                'post_type' => 'ourhouses-list',
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
            ?>
                    <li class="ourhouses-list-item d-flex flex-row">
                        <div class="icon-listing"><i aria-hidden="true" class="fas <?php echo $icone; ?>  fa-listing"></i></div>
                        <div class="list-text d-flex flex-column ">
                            <span class="list-title"><?php echo $titre; ?></span>
                            <span class="list-description"><?php echo $description; ?></span>
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

<!-- Third Our Houses Section - Brochure -->
<section class="ourhouse-brochure-section bg-white">
    <div class="container">
        <?php
        $block_post = get_post(184);
        echo '<h1>' . get_the_title($block_post) . '</h1>';
        echo do_blocks($block_post->post_content);
        ?>
    </div>


</section>

<?php get_footer(); ?>