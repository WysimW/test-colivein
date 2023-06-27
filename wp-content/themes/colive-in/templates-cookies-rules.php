<?php
/* Template Name: Politique de cookies templates */

get_header(); ?>

<section class="bg-colored-heavy">

    <div class="container">
    <?php
        $block_post = get_post(233);
        echo '<h1>' . get_the_title($block_post) . '</h1>';
        ?>


    </div>
</section>

<section class="bg-uncolored">

    <div class="container">
    <?php
        $block_post = get_post(233);
        echo do_blocks($block_post->post_content);
        ?>


    </div>
</section>

<?php get_footer(); ?>