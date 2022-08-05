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
            'slug'                  => 'oferta',
            'with_front'            => true,
            'pages'                 => false,
            'feeds'                 => true,
        );
        
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
            'has_archive'           => true,
            'rewrite'               => $rewrite,
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
    

    /**
 * Adds a custom field: "offers page"; on the "Settings > Reading" page.
 */
add_action( 'admin_init', function () {
    $id = 'page_for_offers';
    // add_settings_field( $id, $title, $callback, $page, $section = 'default', $args = array() )
    add_settings_field( $id, 'Strona offerty:', 'settings_field_page_for_offers', 'reading', 'default', array(
        'label_for' => 'field-' . $id, // A unique ID for the field. Optional.
        'class'     => 'row-' . $id,   // A unique class for the TR. Optional.
    ) );
} );

/**
 * Renders the custom "offers page" field.
 *
 * @param array $args
 */
function settings_field_page_for_offers( $args ) {
    $id = 'page_for_offers';
    wp_dropdown_pages( array(
        'name'              => $id,
        'show_option_none'  => '&mdash; Select &mdash;',
        'option_none_value' => '0',
        'selected'          => get_option( $id ),
    ) );
}

/**
 * Adds page_for_offers to the white-listed options, which are automatically
 * updated by WordPress.
 *
 * @param array $options
 */
add_filter( 'whitelist_options', function ( $options ) {
    $options['reading'][] = 'page_for_offers';

    return $options;
} );

/**
 * Filters the post states on the "Pages" edit page. Displays "offers Page"
 * after the post/page title, if the current page is the offers static page.
 *
 * @param array $states
 * @param WP_Post $post
 */
add_filter( 'display_post_states', function ( $states, $post ) {
    if ( intval( get_option( 'page_for_offers' ) ) === $post->ID ) {
        $states['page_for_offers'] = __( 'Strona Oferty' );
    }

    return $states;
}, 10, 2 );