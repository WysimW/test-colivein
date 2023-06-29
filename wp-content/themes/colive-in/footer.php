<?php 
$contact = get_permalink('49');
?>
      
      <!-- Footer section  -- Join -->
       <section class="join-section bg-transparant">
           <!-- Promotion message -- Footer join section -->
           <?php
            $args = array(
                'post_type' => 'footer',
                'title' => 'Promotion',
                'orderby' => 'date',
                'order' => 'DESC'
            );

            // Faire la requête
            $posts = get_posts($args);
            $post = $posts[0];

            // Si un ou plusieurs posts correspondent
            if (count($posts) > 0) {
            ?>
               <div class="engagement-circle">
                   <div class="engagement-circle-content">
                       <?php echo strip_tags($post->post_content); ?>
                   </div>
               </div>
           <?php
            }
            wp_reset_postdata();
            ?>
           <div class="container">

               <?php
                $args = array(
                    'post_type' => 'footer',
                    'title' => 'Join-us',
                    'orderby' => 'date',
                    'order' => 'DESC'
                );

                // Faire la requête
                $posts = get_posts($args);
                $post = $posts[0];

                // Si un ou plusieurs posts correspondent
                if (count($posts) > 0) {
                ?>
                   <h1> <?php echo strip_tags($post->post_content); ?></h1>
                   <div class="d-flex justify-content-center">
                       <a href="<?= $contact ?>">
                       <button class="btn btn-primary">
                           Demande de brochure <i class="fas fa-long-arrow-alt-right"> </i>
                       </button></a>
                   </div>
               <?php
                }
                wp_reset_postdata();
                ?>

           </div>


       </section>

       <!-- Last section  -- Footer -->
       <footer class="bg-colored-heavy">
           <div class="container footer-section">
               <ul class="footer-list">
                   <?php
                    $args = array(
                        'post_type' => 'footer',
                        'title' => 'Informations de Pieds de page',
                        'orderby' => 'date',
                        'order' => 'DESC'
                    );

                    // Faire la requête
                    $posts = get_posts($args);
                    $post = $posts[0];

                    if (count($posts) > 0) {

                        $logo_url = get_field('footer_logo');
                        $address = get_field('footer_address');
                        $city = get_field('footer_city');
                        $phone_number = get_field('footer_phone');
                        $footer_message = get_field('footer_message');
                    ?>
                       <li> <img class="footer-logo" src="<?php echo $logo_url; ?>" alt="Colive'in logo"> </li>
                       <li><?php echo $address; ?></li>
                       <li><?php echo $city; ?></li>
                       <li class="phone-number"><?php echo $phone_number; ?></li>
                       <li><?php echo $footer_message; ?></li>
                   <?php
                    }
                    wp_reset_postdata();
                    ?>
               </ul>

               <ul class="footer-list d-flex flex-column align-items-end">
                   <li class=""> Suivez-nous sur les réseaux sociaux : </li>
                   <li>
                       <ul class="d-flex justify-content-end">
                           <?php
                            // WP_Query request arguments
                            $args = array(
                                'post_type' => 'social-networks',
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
                                    $url = get_field('network_url');
                                    $icone = get_field('network_icon');
                            ?>
                                   <li>
                                       <a href="<?php echo $url; ?>">
                                           <div class="icon-circle">
                                               <div class="icon-circle-content">
                                                   <i class="fab <?php echo $icone; ?>"></i>
                                               </div>
                                           </div>
                                       </a>
                                   </li>

                           <?php
                                }
                                /* Reset data */
                                wp_reset_postdata();
                            } else {
                                // No post
                            } ?>

                       </ul>
                   </li>
                   <li class="ending">
                       <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer',
                            'menu_class' => 'footer-link-list d-flex justify-content-end',
                            'container' => false,
                            'depth' => 1,
                            'add_li_class'   => 'footer-list-item'

                        ));
                        ?>
                   </li>
                   <li>
                   <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer-2',
                            'menu_class' => 'footer-link-list d-flex justify-content-end',
                            'container' => false,
                            'depth' => 1,
                            'add_li_class'   => 'footer-list-item'

                        ));
                        ?>
                   </li>
               </ul>
           </div>
       </footer>

       <!-- Background Overlay -- Needed to bg image opacity -->
       <div class="bg-overlay"></div>

       <!-- Background Overlay 2 -- Needed to bg bg opacity in burger-menu-->
       <div class="bg-overlay-burger display-none"></div>

       <!-- Cookie consent Fixed Element -- Button -->
       <div class="cookie-consent-element">Gérer le consentement</div>

       <!-- Cookie consent Hidden Element  -- Popup #1 -->
       <div class="cookie-popup-element display-none">
           <div class="cookie-popup-grid-container">
               <h2 class="cookie-popup-title">Gérer le consentement aux cookies
               </h2>
               <div class="cookie-popup-cross-icon"><i class="fa fa-times"></i></div>
               <p class="cookie-popup-text">Pour offrir les meilleures expériences, nous utilisons des technologies telles
                   que les cookies pour stocker et/ou accéder aux informations des appareils. Le fait de consentir à ces
                   technologies nous permettra de traiter des données telles que le comportement de navigation ou les ID
                   uniques sur ce site. Le fait de ne pas consentir ou de retirer son consentement peut avoir un effet
                   négatif sur certaines caractéristiques et fonctions.</p>
               <button class="cookie-popup-button btn btn1 btn-secondary validate">Accepter</button>
               <button class="cookie-popup-button btn btn2 btn-secondary decline">Refuser</button>
               <button class="cookie-popup-button btn btn3 btn-secondary" id="preferencies">Voir les préférences</button>
               <a href="#" class="cookie-popup-link">Politique de cookies</a>
           </div>

       </div>

       <!-- Cookie consent Hidden Element  -- Popup #2 -->
       <div class="cookie-popup-element-two display-none">
           <div class="cookie-popup-grid-container-two">
               <h2 class="cookie-popup-title">Gérer le consentement aux cookies
               </h2>
               <div class="cookie-popup-cross-icon"><i class="fa fa-times"></i></div>
               <p class="cookie-popup-text">Pour offrir les meilleures expériences, nous utilisons des technologies telles
                   que les cookies pour stocker et/ou accéder aux informations des appareils. Le fait de consentir à ces
                   technologies nous permettra de traiter des données telles que le comportement de navigation ou les ID
                   uniques sur ce site. Le fait de ne pas consentir ou de retirer son consentement peut avoir un effet
                   négatif sur certaines caractéristiques et fonctions.</p>
               <div class="cookie-popup-function d-flex flex-wrap align-items-center">
                   <span class="cookie-popup-function-name flex-grow-1">Fonctionnel</span>
                   <span class="cookie-popup-function-state">Toujours activé</span>
                   <span class="functon-accordion-btn function-accordion-arrow accordion-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="18">
                           <path d="M224 416c-8.188 0-16.38-3.125-22.62-9.375l-192-192c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L224 338.8l169.4-169.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-192 192C240.4 412.9 232.2 416 224 416z"></path>
                       </svg></span>
                   <div class="accordion-content display-none">
                       <p>Le stockage ou l’accès technique est strictement nécessaire dans la finalité d’intérêt légitime
                           de permettre l’utilisation d’un service spécifique explicitement demandé par l’abonné ou
                           l’utilisateur, ou dans le seul but d’effectuer la transmission d’une communication sur un réseau
                           de communications électroniques.</p>
                   </div>

               </div>

               <div class="cookie-popup-stats d-flex flex-wrap align-items-center">
                   <span class="cookie-popup-function-name flex-grow-1">Statistiques</span>
                   <span class="cookie-popup-function-state">
                       <div class="form-check form-switch">
                           <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" size="40">
                       </div>
                   </span>
                   <span class="stats-accordion-btn stats-accordion-arrow accordion-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="18">
                           <path d="M224 416c-8.188 0-16.38-3.125-22.62-9.375l-192-192c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L224 338.8l169.4-169.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-192 192C240.4 412.9 232.2 416 224 416z"></path>
                       </svg></span>
                   <div class="accordion-content display-none">
                       <p>Le stockage ou l’accès technique qui est utilisé exclusivement dans des finalités statistiques anonymes. En l’absence d’une assignation à comparaître, d’une conformité volontaire de la part de votre fournisseur d’accès à internet ou d’enregistrements supplémentaires provenant d’une tierce partie, les informations stockées ou extraites à cette seule fin ne peuvent généralement pas être utilisées pour vous identifier.</p>
                   </div>

               </div>


               <div class="cookie-popup-market d-flex flex-wrap align-items-center">
                   <span class="cookie-popup-function-name flex-grow-1">Marketing</span>
                   <span class="cookie-popup-function-state">
                       <div class="form-check form-switch">
                           <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault2" size="40">
                       </div>
                   </span>
                   <span class="market-accordion-btn market-accordion-arrow accordion-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="18">
                           <path d="M224 416c-8.188 0-16.38-3.125-22.62-9.375l-192-192c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L224 338.8l169.4-169.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-192 192C240.4 412.9 232.2 416 224 416z"></path>
                       </svg></span>
                   <div class="accordion-content display-none">
                       <p>Le stockage ou l’accès technique est nécessaire pour créer des profils d’utilisateurs afin d’envoyer des publicités, ou pour suivre l’utilisateur sur un site web ou sur plusieurs sites web ayant des finalités marketing similaires.</p>
                   </div>

               </div>

               <button class="cookie-popup-button-two btn btn4 btn-secondary validate">Accepter</button>
               <button class="cookie-popup-button-two  btn btn5 btn-secondary decline">Refuser</button>
               <button class="cookie-popup-button-two  btn btn6 btn-secondary save">Enregistrer les préférences</button>
               <a href="#" class="cookie-popup-link-two">Politique de cookies</a>
           </div>


       </div>

       </body>

       </html>
       <?php wp_footer(); ?>