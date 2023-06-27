<?php
/* Template Name: Mentions légales templates */

get_header(); ?>

<section class="bg-colored-heavy">

    <div class="container">
    <?php
        $block_post = get_post(229);
        echo '<h1>' . get_the_title($block_post) . '</h1>';
        echo do_blocks($block_post->post_content);
        ?>


    </div>
</section>

<section class="bg-uncolored">

    <div class="container">
    <?php
        $block_post = get_post(231);
        echo do_blocks($block_post->post_content);
        ?>


    </div>
</section>

<?php get_footer(); ?>