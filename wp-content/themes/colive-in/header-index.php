<!DOCTYPE html>
<html lang="fr">
<?php
$theme_directory = get_template_directory_uri();
$page = get_page_by_path('contact');
$page_url = get_permalink($page->ID);
?>

<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Colive'In - Collocation pour sénior autonome</title>
</head>

<body class="d-flex flex-column">

    <!-- First index section -- Header -->
    <div class="video-container">
        <div class="video-overlay"></div>
        <video autoplay loop muted>
            <source src="https://colivein.com/wp-content/uploads/2022/10/colivein-hero-video.mp4" type="video/mp4">
            Votre navigateur ne supporte pas la vidéo.
        </video>

        <!-- Header section-->
        <header>
            <div class="container">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg align-items-center">
                    <div class="container-fluid">
                        <!-- Site logo -->
                        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><img class="nav-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt=""></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <div class="burger-cross-icon"><i class="fa fa-times"></i></div>
                            <!-- Internal link -->
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary', // Le nom de l'emplacement du menu que vous avez défini dans votre thème
                                'container' => false, // Ne met pas le menu dans un conteneur
                                'menu_class' => 'navbar-nav ms-auto align-items-center', // La classe pour la liste ul

                            ));
                            ?>

                            <a href="<?= $page_url; ?>" class="btn btn-primary btn-nav">Demande de brochure</a>

                        </div>
                    </div>
                </nav>
            </div>
        </header>