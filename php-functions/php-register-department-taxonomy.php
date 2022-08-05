<?php
function taxonomy_department() {
    // Add new "Locations" taxonomy to Posts
    register_taxonomy('department', 'doctors', array(
        // Hierarchical taxonomy (like categories)
        'hierarchical' => false,
        'show_admin_column' => true,
        // 'show_ui' => true,
        // 'show_in_quick_edit' => false,
        'meta_box_cb' => false,
        // This array of options controls the labels displayed in the WordPress Admin UI
        'labels' => array(
        'name' => _x( 'Poradnie', 'taxonomy general name' ),
        'singular_name' => _x( 'Poradnia', 'taxonomy singular name' ),
        'search_items' =>  __( 'Wyszukaj poradnię' ),
        'all_items' => __( 'Wszystkie poradnie' ),
        'edit_item' => __( 'Edytuj poradnię' ),
        'update_item' => __( 'Zaktualizuj poradnię' ),
        'add_new_item' => __( 'Dodaj poradnię' ),
        'new_item_name' => __( 'Poradnia' ),
        'menu_name' => __( 'Poradnie' ),
        ),
        // Control the slugs used for this taxonomy
        'rewrite' => array(
        'slug' => 'department', // This controls the base slug that will display before each term
        'with_front' => false, // Don't display the category base before "/locations/"
        'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
        ),
    ));
}
add_action( 'init', 'taxonomy_department', 0 );