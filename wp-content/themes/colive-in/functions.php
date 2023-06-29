<?php

function enqueue_my_stylesheets_and_scripts()
{
    wp_enqueue_style('reset', get_template_directory_uri() . '/assets/css/reset.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
    wp_enqueue_style('my-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('cookie-syle', get_template_directory_uri() . '/assets/css/cookie-popup.css');
    wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.15.3/css/all.css');
    wp_enqueue_style('google-fonts-1', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap');
    wp_enqueue_style('google-fonts-2', 'https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;700&display=swap');
    wp_enqueue_style('google-fonts-3', 'https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;700&family=Montserrat:wght@700&display=swap');

    wp_enqueue_script('cookie-popup', get_template_directory_uri() . '/assets/js/cookie-popup.js', array('jquery'), '1.0', true);
    wp_enqueue_script('burger-menu', get_template_directory_uri() . '/assets/js/burger-menu.js', array('jquery'), '1.0', true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'enqueue_my_stylesheets_and_scripts');

add_theme_support('admin-bar', array('callback' => '__return_false'));

add_theme_support('post-thumbnails');

function register_my_menu()
{
    register_nav_menu('primary', __('Primary Menu'));
}

add_action('init', 'register_my_menu');

function add_additional_class_on_li($classes, $item, $args)
{
    if (isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function register_my_menus()
{
    register_nav_menus(
        array(
            'footer' => __('Footer Menu'),
            'footer-2' => __('Footer Menu 2')
        )
    );
}
add_action('init', 'register_my_menus');

function add_menu_link($items, $args)
{

    if ($args->theme_location == 'primary') {
        $page = get_page_by_path('contact');
        $page_url = get_permalink($page->ID);
        $items .= '<li class="menu-item nav-item"><a href="' . $page_url . '" class="btn btn-primary btn-nav">Demande de brochure</a></li>';
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'add_menu_link', 10, 2);


require get_template_directory() . '/inc/cpt.php';
