<?php

function enqueue_my_stylesheets_and_scripts() {
    // Ajouter les feuilles de style
    wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.css' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' );
    wp_enqueue_style( 'my-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.15.3/css/all.css' );
    wp_enqueue_style( 'google-fonts-1', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap' );
    wp_enqueue_style( 'google-fonts-2', 'https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;700&display=swap' );
    wp_enqueue_style( 'google-fonts-3', 'https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;700&family=Montserrat:wght@700&display=swap' );

    // Ajouter des scripts ici si vous en avez
    // wp_enqueue_script('nom-du-script', get_template_directory_uri() . '/chemin/vers/votre/script.js', array(), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'enqueue_my_stylesheets_and_scripts' );

add_theme_support( 'admin-bar', array( 'callback' => '__return_false' ) );

add_theme_support( 'post-thumbnails' );

?>