<?php
function taxonomy_med_title() {
    // Add new "Locations" taxonomy to Posts
    register_taxonomy('med_title', 'doctors', array(
        // Hierarchical taxonomy (like categories)
        'hierarchical' => false,
        'show_admin_column' => true,
        // 'show_ui'                    => true,
        // 'show_in_quick_edit'         => false,
        // 'meta_box_cb'                => false,
        // This array of options controls the labels displayed in the WordPress Admin UI
        'labels' => array(
        'name' => _x( 'Tytuły naukowe', 'taxonomy general name' ),
        'singular_name' => _x( 'Tytuł naukowy', 'taxonomy singular name' ),
        'search_items' =>  __( 'Wyszukaj tytuły' ),
        'all_items' => __( 'Wszystkie tytuły' ),
        'edit_item' => __( 'Edytuj tytuł' ),
        'update_item' => __( 'Zaktualizuj tytuł' ),
        'add_new_item' => __( 'Dodaj tytuł naukowy' ),
        'new_item_name' => __( 'Tytuł naukowy' ),
        'menu_name' => __( 'Tytuły naukowe' ),
        ),
        // Control the slugs used for this taxonomy
        'rewrite' => array(
        'slug' => 'med_title', // This controls the base slug that will display before each term
        'with_front' => false, // Don't display the category base before "/locations/"
        'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
        ),
    ));
}
add_action( 'init', 'taxonomy_med_title', 0 );