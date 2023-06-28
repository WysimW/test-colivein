   <?php
    $ourHouses = get_permalink('39');
    $ourActivities = get_permalink('42');
    $ourHistory = get_permalink('44');

    ?>

   <?php get_header('index'); ?>

   <!-- First index section  -- Welcome -->
   <section class="welcome-section-lg bg-colored-alpha">
       <div class="container">
           <?php
            $block_post = get_post(6);
            echo '<h1>' . get_the_title($block_post) . '</h1>';
            echo do_blocks($block_post->post_content);
            ?>
       </div>
   </section>
   </div>

   <section class="welcome-section-sm bg-colored">
       <div class="container">
           <div class="text-container">
               <?php
                $block_post = get_post(6);
                echo '<h1>' . get_the_title($block_post) . '</h1>';
                echo do_blocks($block_post->post_content);
                ?>
           </div>
       </div>
   </section>

   <!-- Second index section  -- House -->
   <?php
    $args = array(
        'post_type' => 'houses',
        'posts_per_page' => -1,
        'meta_key' => 'order',
        'orderby' => 'meta_value',
        'order' => 'ASC'
    );
    $query = new WP_Query($args);
    ?>
   <section class="house-section bg-colored">
       <div class="container">
           <!-- Intro text -- House section -->
           <div class="text-container">
               <?php
                $block_post = get_post(35);
                echo '<h1>' . get_the_title($block_post) . '</h1>';
                echo do_blocks($block_post->post_content);
                ?>
           </div>

           <!-- House cards -- House section -->
           <div class="card-container d-flex p-2 justify-content-between flex-wrap">
               <?php
                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                        $image = get_field('image');
                        $titre = get_field('title');
                ?>
                       <div class="card" style="width: 18rem;">
                           <img class="card-img-top" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                           <div class="card-body">
                               <p class="card-text"><?php echo $titre; ?></p>
                           </div>
                       </div>
               <?php
                    }
                    wp_reset_postdata();
                }
                ?>
           </div>

           <!-- Link Button -- House section -->
           <div class="d-flex justify-content-center">
               <a href="<?php echo $ourHouses; ?>">
               <button class="btn btn-primary btn-learn_more">
                   En savoir plus <i class="fas fa-long-arrow-alt-right"> </i>
               </button></a>
           </div>
       </div>
   </section>


   <!-- Third index section  -- Services -->
   <section class="service-section bg-colored-verylight">
       <div class="container">

           <!-- Activities part -->
           <div class="text-container">
               <?php
                $block_post = get_post(86);
                echo '<h1>' . get_the_title($block_post) . '</h1>';
                echo do_blocks($block_post->post_content);
                ?>

               <!-- list of activities -- Activities part -->
               <ul class="d-flex flex-wrap justify-content-between">

                   <!-- list item  -- Activities part-->
                   <?php
                    // WP_Query request arguments
                    $args = array(
                        'post_type' => 'activities',
                        'posts_per_page' => -1, // pour récupérer tous les posts
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
                            $titre = get_the_title() ? get_the_title() : get_field('title');
                            $description = get_the_content() ? get_the_content() : get_field('description');
                            $icone = get_field('icon');
                    ?>
                           <!-- HTML code with dynamic element -->
                           <li class="service-list-item d-flex flex-row">
                           <div class="icon-listing"><i aria-hidden="true" class="fas <?php echo $icone; ?> fa-listing"></i></div>

                               <div class="list-text d-flex flex-column ">
                                   <span class="list-title"><?php echo $titre; ?></span>
                                   <span class="list-description"><?php echo $description; ?></span>
                               </div>
                           </li>
                   <?php
                        }
                        /* Reset data */
                        wp_reset_postdata();
                    } else {
                        // No post
                    }
                    ?>
               </ul>

               <!-- Link Button -- Activities section -->
               <div class="d-flex justify-content-center">
                   <a href="<?php echo $ourActivities; ?>">
                   <button class="btn btn-primary btn-learn_more">
                       En savoir plus <i class="fas fa-long-arrow-alt-right"> </i>
                   </button></a>
               </div>
           </div>

           <!-- Services part -->
           <div class="text-container">
               <?php
                $block_post = get_post(89);
                echo '<h1>' . get_the_title($block_post) . '</h1>';
                echo do_blocks($block_post->post_content);
                ?>

               <!-- list of services -- Services part -->
               <ul class="d-flex flex-wrap justify-content-between">

                   <?php
                    // WP_Query request arguments
                    $args = array(
                        'post_type' => 'services',
                        'posts_per_page' => -1, // pour récupérer tous les posts
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
                            $titre = get_the_title() ? get_the_title() : get_field('title');
                            $description = get_the_content() ? get_the_content() : get_field('description');
                            $icone = get_field('icon');
                    ?>
                           <!-- HTML code with dynamic element -->
                           <li class="service-list-item d-flex flex-row">
                           <div class="icon-listing"><i aria-hidden="true" class="fas <?php echo $icone; ?> fa-listing"></i></div>

                               <div class="list-text d-flex flex-column ">
                                   <span class="list-title"><?php echo $titre; ?></span>
                                   <span class="list-description"><?php echo $description; ?></span>
                               </div>
                           </li>
                   <?php
                        }
                        /* Reset data */
                        wp_reset_postdata();
                    } else {
                        // No post
                    }
                    ?>
               </ul>

           </div>

           <!-- Offers part -->
           <div class="text-container">
               <?php
                $block_post = get_post(91);
                echo '<h1>' . get_the_title($block_post) . '</h1>';
                echo do_blocks($block_post->post_content);
                ?>
           </div>
       </div>
   </section>

   <!-- Fourth index section  -- Fondators -->
   <section class="fondators-section bg-colored-verylight">
       <div class="container">
           <?php
            $block_post = get_post(193);
            echo '<h1>' . get_the_title($block_post) . '</h1>';
            echo do_blocks($block_post->post_content);
            ?>

           <!-- Circles -- Fondators section-->

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

           <div class="d-flex justify-content-center">
                   <a href="<?php echo $ourHistory; ?>">
                   <button class="btn btn-primary">
                       Découvrir notre histoire <i class="fas fa-long-arrow-alt-right"> </i>
                   </button></a>
               </div>
   </section>

   <!-- Fifth index section  -- Partners -->
   <section class="partners-section bg-white">
       <div class="container">
           <?php
            $block_post = get_post(195);
            echo '<h1>' . get_the_title($block_post) . '</h1>';
            echo do_blocks($block_post->post_content);
            ?>

           <?php
            // WP_Query request arguments
            $args = array(
                'post_type' => 'partners',
                'posts_per_page' => -1,
                'meta_key' => 'order',
                'orderby' => 'meta_value',
                'order' => 'ASC'
            );

            $the_query = new WP_Query($args);

            if ($the_query->have_posts()) {
            ?>
               <ul class="d-flex justify-content-start logo-gallery flex-wrap">
                   <?php
                    while ($the_query->have_posts()) {
                        $the_query->the_post();
                        $logo = get_field('logo');
                        $partner_name = get_field('partner_name');
                    ?>
                       <li class="partners-list-item p-2">
                           <img class="partners-logo" src="<?php echo $logo['url']; ?>" alt="Logo de l'entreprise <?php echo $partner_name; ?>">
                       </li>
                   <?php
                    }
                    ?>
               </ul>
           <?php
                wp_reset_postdata();
            } else {
            }
            ?>
       </div>

   </section>


   <?php get_footer() ?>