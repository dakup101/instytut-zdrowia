<?php
function custom_post_type() {
 
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Lekarze', 'Post Type General Name', 'instytut-zdrowia' ),
            'singular_name'       => _x( 'Lekarz', 'Post Type Singular Name', 'instytut-zdrowia' ),
            'menu_name'           => __( 'Lekarze', 'instytut-zdrowia' ),
            'all_items'           => __( 'Wszystkie lekarze', 'instytut-zdrowia' ),
            'view_item'           => __( 'Wyświetlij lekarza', 'instytut-zdrowia' ),
            'add_new_item'        => __( 'Dodaj lekarza', 'instytut-zdrowia' ),
            'add_new'             => __( 'Dodaj lekarza', 'instytut-zdrowia' ),
            'edit_item'           => __( 'Edytuj lekarza', 'instytut-zdrowia' ),
            'update_item'         => __( 'Zaktualizuj lekarza', 'instytut-zdrowia' ),
            'search_items'        => __( 'Szukaj lekarza', 'instytut-zdrowia' ),
            'not_found'           => __( 'Nie znaleziono lekarza', 'instytut-zdrowia' ),
            'not_found_in_trash'  => __( 'Nie znaleziono lekarza w koszu', 'instytut-zdrowia' ),
        );
         
    // Set other options for Custom Post Type
         
        $args = array(
            'label'               => __( 'doctors', 'instytut-zdrowia' ),
            'description'         => __( 'Lekarze: zdjęcia i specjalizację', 'instytut-zdrowia' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'revisions', 'custom-fields', ),
            'hierarchical'        => false,
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
            'menu_icon'           => 'dashicons-insert',
             
            // This is where we add taxonomies to our CPT
            'taxonomies'          => array( 'department', 'med_title' ),
        );
         
        // Registering your Custom Post Type
        register_post_type( 'doctors', $args );
     
    }
     
    /* Hook into the 'init' action so that the function
    * Containing our post type registration is not 
    * unnecessarily executed. 
    */
     
    add_action( 'init', 'custom_post_type', 0 );