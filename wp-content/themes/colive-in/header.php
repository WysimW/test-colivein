<!DOCTYPE html>
<html lang="fr">

<head>
    <?php wp_head(); 
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Colive'In</title>

</head>

<body class="d-flex flex-column">

    <!-- Header -->
    <header class="bg-white">
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
                            'theme_location' => 'primary',
                            'container' => false, 
                            'menu_class' => 'navbar-nav ms-auto align-items-center', 
                        ));
                        ?>
                    </div>
                </div>
            </nav>
        </div>
    </header>