<!DOCTYPE html>
<html lang="fr">

<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Colive'In - Collocation pour sénior autonome</title>
</head>

<body class="d-flex flex-column">

    <?php get_header('index'); ?>
    <!-- First index section  -- Welcome -->
    <section class="welcome-section-lg bg-colored-alpha">
        <div class="container">
            <?php $block_post = get_post(
                6

            );  // Remplacez 123 par l'ID de votre bloc réutilisable.
            echo do_blocks($block_post->post_content); ?>
        </div>
    </section>
    </div>

    <section class="welcome-section-sm bg-colored">
        <div class="container">
            <div class="text-container">
                <h1 class="h1">Bienvenue dans nos maisons partagées pour séniors autonomes</h1>
                <p>Chez Colive’in on vit en parfaite autonomie dans des maisons familiales typiques de leurs
                    régions,
                    proche
                    de toutes commodités (pharmacie, transport en commun…) <strong>regroupant 4 à 6 personnes par
                        affinités</strong>
                    souhaitant partager leur retraite sous le signe de la convivialité !</p>

                <p> Nous sommes convaincus que les relations humaines et le maintien de l’autonomie sont le ciment
                    d’une
                    retraite épanouie et dynamique.</p>
                <strong class="strong-together">Ensemble, vivons une seconde jeunesse ?</strong>
            </div>
        </div>
    </section>

    <!-- Second index section  -- House -->
    <section class="house-section bg-colored">
        <div class="container">
            <!-- Intro text -- House section -->
            <div class="text-container">
                <?php $block_post = get_post(35);  
                echo do_blocks($block_post->post_content); ?>
            </div>

            <!-- House cards -- House section -->
            <?php
            // Arguments pour WP_Query.
            $args = array(
                'category_name' => 'maisons', // Changez ceci en fonction du nom de votre catégorie.
                'posts_per_page' => 6, // Limite à 6 maisons.
                'orderby' => 'meta_value_num', // Ordonner par date de publication.
                'meta_key' => 'order_value', // Le nom du champ personnalisé.
                'order' => 'ASC', // Dans l'ordre descendant, donc le plus récent en premier.
            );

            // Crée une nouvelle requête.
            $maisons_query = new WP_Query($args);

            if ($maisons_query->have_posts()) :
            ?>
                <div class="card-container d-flex p-2 justify-content-between flex-wrap">
                    <?php
                    while ($maisons_query->have_posts()) : $maisons_query->the_post();
                    ?>
                        <div class="card" style="width: 18rem;">
                            <?php
                            if (has_post_thumbnail()) :
                                the_post_thumbnail('full', ['class' => 'card-img-top', 'alt' => 'description pour l\'image']);
                            endif;
                            ?>
                            <div class="card-body">
                                <p class="card-text"><?php the_title(); ?></p>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    ?>
                </div>
            <?php
            endif;

            // Réinitialise les données de post.
            wp_reset_postdata();
            ?>

            <!-- Link Button -- House section -->
            <div class="d-flex justify-content-center">
                <a href="<?php echo get_permalink( 39 ); ?>">
                <button class="btn btn-primary btn-learn_more">
                    En savoir plus <i class="fas fa-long-arrow-alt-right"> </i>
                </button></a>
            </div>
        </div>

    </section>

    <!-- Third index section  -- Services -->
    <section class="service-section bg-uncolored">
        <div class="container">

            <!-- Activities part -->
            <div class="text-container">
                <h1>Chez Colive'in tout est possible !</h1>
                <p> Colive’in et ses partenaires forment une équipe de confiance autour d’un projet commun : faire de
                    votre quotidien <strong> un moment de partage et de découverte</strong> à travers une multitude
                    d’activités.</p>

                <!-- list of activities #01 -- Activities part -->
                <ul class="d-flex flex-wrap justify-content-between">

                    <!-- list item #01 -- Activities part-->
                    <li class="service-list-item d-flex flex-row">
                        <i aria-hidden="true" class="fas fa-heart fa-listing"></i>

                        <div class="list-text d-flex flex-column ">
                            <span class="list-title">Bien-être</span>
                            <span class="list-description">Yoga, relaxation, expression corporelle...</span>
                        </div>
                    </li>

                    <!-- list item #02 -- Activities part -->
                    <li class="service-list-item d-flex flex-row">
                        <i aria-hidden="true" class="fas fa-heartbeat fa-listing"></i>

                        <div class="list-text d-flex flex-column ">
                            <span class="list-title">Sportives</span>
                            <span class="list-description">Cours individuel ou collectif, randonnée organisée...</span>
                        </div>
                    </li>

                    <!-- list item #03 -- Activities part-->
                    <li class="service-list-item d-flex flex-row">
                        <i aria-hidden="true" class="fas fa-hand-paper fa-listing"></i>

                        <div class="list-text d-flex flex-column ">
                            <span class="list-title">Manuelles</span>
                            <span class="list-description">Cours de cuisine, de poterie, d'informatique...</span>
                        </div>
                    </li>

                    <!-- list item #04 -- Activities part -->
                    <li class="service-list-item d-flex flex-row">
                        <i aria-hidden="true" class="fas fa-landmark fa-listing"></i>

                        <div class="list-text d-flex flex-column ">
                            <span class="list-title">Culturelle</span>
                            <span class="list-description">Voyage, visite de musée, sortie cinéma...</span>
                        </div>
                    </li>
                </ul>

                <!-- Link Button -- Activities section -->
                <div class="d-flex justify-content-center">
                    <a href="#"></a>
                    <button class="btn btn-primary btn-learn_more">
                        En savoir plus <i class="fas fa-long-arrow-alt-right"> </i>
                    </button>
                </div>
            </div>

            <!-- Services part -->
            <div class="text-container">
                <h1>Nos services sur mesure</h1>
                <p> L’ensemble des partenaires Colive’in seront à vos côtés pour vous accompagner au quotidien si vous
                    en avez besoin. Notre promesse : vous apportez une <strong>prise en charge de qualité</strong> et
                    une <strong>tranquillité d’esprit</strong> . Ces services peuvent bénéficier d’un crédit d’impôt.
                </p>

                <!-- list of services -- Services part -->
                <ul class="d-flex flex-wrap justify-content-between">

                    <!-- list item #01 -- Services part  -->
                    <li class="service-list-item d-flex flex-row">
                        <i aria-hidden="true" class="fas fa-broom fa-listing"></i>

                        <div class="list-text d-flex flex-column ">
                            <span class="list-title">Aide-ménagère</span>
                            <span class="list-description">Nettoyage, repassage, lessive</span>
                        </div>
                    </li>

                    <!-- list item #02 -- Services part  -->
                    <li class="service-list-item d-flex flex-row">
                        <i aria-hidden="true" class="fas fa-hands-helping fa-listing"></i>

                        <div class="list-text d-flex flex-column ">
                            <span class="list-title">Aide à l'autonomie</span>
                            <span class="list-description">Aide au lever et au coucher, aide à la toilette, présence de
                                nuit</span>
                        </div>
                    </li>

                    <!-- list item #03 -- Services part  -->
                    <li class="service-list-item d-flex flex-row">
                        <i aria-hidden="true" class="fas fa-book fa-listing"></i>

                        <div class="list-text d-flex flex-column ">
                            <span class="list-title">
                                Assistance administrative</span>
                            <span class="list-description">Gestion du courrier, classement des documents, démarches
                                administratives</span>
                        </div>
                    </li>

                    <!-- list item #04 -- Services part -->
                    <li class="service-list-item d-flex flex-row">
                        <i aria-hidden="true" class="fas fa-user-friends fa-listing"></i>

                        <div class="list-text d-flex flex-column ">
                            <span class="list-title">Accompagnement</span>
                            <span class="list-description">Courses, promenades, sorties culturelles</span>
                        </div>
                    </li>

                    <!-- list item #05 -- Services part  -->
                    <li class="service-list-item d-flex flex-row">
                        <i aria-hidden="true" class="fas fa-utensils fa-listing"></i>

                        <div class="list-text d-flex flex-column ">
                            <span class="list-title">Aide aux repas</span>
                            <span class="list-description">Courses et préparations des repas, aide à la prise des
                                repas</span>
                        </div>
                    </li>

                    <!-- list item #06 -- Services part -->
                    <li class="service-list-item d-flex flex-row">
                        <i aria-hidden="true" class="fas fa-syringe fa-listing"></i>

                        <div class="list-text d-flex flex-column ">
                            <span class="list-title">Coordination de soin</span>
                            <span class="list-description">Visite infirmier, rdv de santé...</span>
                        </div>
                    </li>
                </ul>

            </div>

            <!-- Offers part -->
            <div class="text-container">
                <h1>Découvrez les offres Colive'in</h1>
                <p> Notre mission : rendre la colocation pour séniors autonomes <strong>accessible à tous</strong> !
                </p>
                <img class="offers-img" src="assets/images/others/brochure.png" alt="Brochure présentant les différentes offres de Colive'in">
            </div>
        </div>
    </section>

    <!-- Fourth index section  -- Fondators -->
    <section class="fondators-section bg-uncolored">
        <div class="container">
            <h1>Les fondateurs</h1>

            <!-- Circles -- Fondators section-->
            <div class="fondators d-flex justify-content-center">

                <!-- First Circles -- Fondators section-->
                <div class="outer-circle circle-color-one">
                    <h2 class="circle-title">Tony</h2>
                    <div class="inner-circle">
                        <img src="assets/images/fondators/Tony.jpeg" alt="photo du fondateur Tony">
                    </div>
                </div>

                <!-- Second Circles -- Fondators section-->
                <div class="outer-circle circle-color-two">
                    <h2 class="circle-title">Enzo</h2>
                    <div class="inner-circle">
                        <img src="assets/images/fondators/Enzo.jpeg" alt="photo du fondateur Enzo">
                    </div>
                </div>

            </div>
            <div class="d-flex justify-content-center">
                <a href="#"></a>
                <button class="btn btn-primary">
                    Découvrir notre histoire <i class="fas fa-long-arrow-alt-right"> </i>
                </button>
            </div>
        </div>

    </section>

    <!-- Fifth index section  -- Partners -->
    <section class="partners-section bg-white">
        <div class="container">
            <h1>Ils nous font confiance</h1>

            <ul class="d-flex justify-content-start logo-gallery flex-wrap">
                <li class="partners-list-item p-2">
                    <img class="partners-logo" src="assets/images/partners/KOVAN-LOGO-VERT3.png" alt="Logo de l'entreprise Kovan">
                </li>
                <li class="partners-list-item p-2">
                    <img class="partners-logo" src="assets/images/partners/LOGO_MBS_RVB-1.png" alt="Logo de l'entreprise Kovan">
                </li>
                <li class="partners-list-item p-2">
                    <img class="partners-logo" src="assets/images/partners/superprof-logo.png" alt="Logo de l'entreprise Kovan">
                </li>
            </ul>



        </div>


    </section>

    <!-- Sixth index section  -- Join -->
    <section class="join-section bg-transparant">
        <div class="engagement-circle">
            <div class="engagement-circle-content">
                Profitez de 2 mois sans engagement
            </div>
        </div>
        <div class="container">

            <h1>Prêt(e) à nous rejoindre ?</h1>
            <div class="d-flex justify-content-center">
                <a href="#"></a>
                <button class="btn btn-primary">
                    Demande de brochure <i class="fas fa-long-arrow-alt-right"> </i>
                </button>
            </div>


        </div>


    </section>

    <?php get_footer() ?>
    
</body>

</html>