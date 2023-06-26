<?php 

function register_my_cpts() {
    // CPT 'Index elements' vide, utilisé juste pour le menu
    register_post_type( 'index_elements',
        array(
            'labels' => array(
                'name' => __( 'Index elements' ),
                'singular_name' => __( 'Index element' )
            ),
            'public' => true,
            'has_archive' => false,
            'capabilities' => array('create_posts' => 'do_not_allow',),
        )
    );

    register_post_type( 'ourhouses_elements',
        array(
            'labels' => array(
                'name' => __( 'Nos Maisons elements' ),
                'singular_name' => __( 'Nos Maisons element' )
            ),
            'public' => true,
            'has_archive' => false,
            'capabilities' => array('create_posts' => 'do_not_allow',),
        )
    );

}
add_action( 'init', 'register_my_cpts' );

function rearrange_my_admin_menu() {
    global $menu;
    global $submenu;

    // Enregistrer le CPT vide
    register_post_type('index_elements', [
        'label'           => 'Index elements',
        'show_ui'         => true,
        'show_in_menu'    => true,
        'query_var'       => true,
        'rewrite'         => ['slug' => 'index_elements'],
        'capability_type' => 'post',
        'has_archive'     => false,
        'hierarchical'    => false,
        'menu_position'   => null,
        'supports'        => [],
    ]);

    

    // Déplacer les CPT sous le nouveau menu
    $submenu['edit.php?post_type=index_elements'][] = $submenu['edit.php?post_type=houses'][5];
    $submenu['edit.php?post_type=index_elements'][] = $submenu['edit.php?post_type=services'][5];
    $submenu['edit.php?post_type=index_elements'][] = $submenu['edit.php?post_type=activities'][5];
    $submenu['edit.php?post_type=index_elements'][] = $submenu['edit.php?post_type=fondators'][5];
    $submenu['edit.php?post_type=index_elements'][] = $submenu['edit.php?post_type=partners'][5];
    
    // Déplacer les CPT sous le nouveau menu
    $submenu['edit.php?post_type=ourhouses_elements'][] = $submenu['edit.php?post_type=houses_block_content'][5];
    $submenu['edit.php?post_type=ourhouses_elements'][] = $submenu['edit.php?post_type=ourhouses-list'][5];


    // Supprimer les anciens éléments de menu
    remove_menu_page('edit.php?post_type=houses');
    remove_menu_page('edit.php?post_type=services');
    remove_menu_page('edit.php?post_type=activities');
    remove_menu_page('edit.php?post_type=fondators');
    remove_menu_page('edit.php?post_type=partners');
    remove_menu_page('edit.php?post_type=houses_block_content');
    remove_menu_page('edit.php?post_type=ourhouses-list');
}
add_action('admin_menu', 'rearrange_my_admin_menu');



?>