<?php
function post_type_offers() {
 
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Oferty', 'Post Type General Name', 'instytut-zdrowia' ),
            'singular_name'       => _x( 'Oferta', 'Post Type Singular Name', 'instytut-zdrowia' ),
            'menu_name'           => __( 'Oferty', 'instytut-zdrowia' ),
            'all_items'           => __( 'Wszystkie oferty', 'instytut-zdrowia' ),
            'view_item'           => __( 'Wyświetlij ofertę', 'instytut-zdrowia' ),
            'add_new_item'        => __( 'Dodaj ofertę', 'instytut-zdrowia' ),
            'add_new'             => __( 'Dodaj ofertę', 'instytut-zdrowia' ),
            'edit_item'           => __( 'Edytuj ofertę', 'instytut-zdrowia' ),
            'update_item'         => __( 'Zaktualizuj ofertę', 'instytut-zdrowia' ),
            'search_items'        => __( 'Szukaj ofertę', 'instytut-zdrowia' ),
            'not_found'           => __( 'Nie znaleziono ofertę', 'instytut-zdrowia' ),
            'not_found_in_trash'  => __( 'Nie znaleziono ofertę w koszu', 'instytut-zdrowia' ),
        );
         
    // Set other options for Custom Post Type
        $args = array(
            'label'                 => __( 'Oferta', 'instytut-zdrowia' ),
            'description'           => __( 'Oferta Instytutu Zdrowia', 'instytut-zdrowia' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'thumbnail', 'revisions', 'custom-fields'),
            'taxonomies'            => array( 'offer-categories'),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => 'oferta',
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
            'menu_icon'           => 'dashicons-plus-alt',
        );
         
        // Registering your Custom Post Type
        register_post_type( 'offers', $args );
     
    }
     
    /* Hook into the 'init' action so that the function
    * Containing our post type registration is not 
    * unnecessarily executed. 
    */
     
    add_action( 'init', 'post_type_offers', 0 );
    