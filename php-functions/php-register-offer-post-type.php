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
        $rewrite = array(
            'slug'                => 'oferta',
            'with_front'          => 'true',
            'pages'               => false,
            'feeds'               => true
        );

        $args = array(
            'label'               => __( 'offers', 'instytut-zdrowia' ),
            'description'         => __( 'Oferty instytuta zdrowia', 'instytut-zdrowia' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'revisions', 'custom-fields', ),
            'hierarchical'        => true,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => false,
            'show_in_admin_bar'   => false,
            'menu_position'       => 5,
            'can_export'          => true,
            'exclude_from_search' => true,
            'publicly_queryable'  => false,
            'show_in_rest'        => true,
            'menu_icon'           => 'dashicons-plus-alt',
            'has-archive'         => true,
            'rewrite'             => $rewrite,
            'taxonomies'          => array( 'offer_category'),
            'capability_type'     => 'page',
        );
         
        // Registering your Custom Post Type
        register_post_type( 'offers', $args );
     
    }
     
    /* Hook into the 'init' action so that the function
    * Containing our post type registration is not 
    * unnecessarily executed. 
    */
     
    add_action( 'init', 'post_type_offers', 0 );