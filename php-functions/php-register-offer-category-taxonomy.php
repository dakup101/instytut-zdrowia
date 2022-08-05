<?php
function taxonomy_offer_category() {
    // Add new "Locations" taxonomy to Posts
    register_taxonomy('offer_category', 'offers', array(
        // Hierarchical taxonomy (like categories)
        'hierarchical' => false,
        'show_admin_column' => true,
        // 'show_ui'                    => true,
        // 'show_in_quick_edit'         => false,
        'meta_box_cb'                => false,
        // This array of options controls the labels displayed in the WordPress Admin UI
        'labels' => array(
        'name' => _x( 'Kategorie', 'taxonomy general name' ),
        'singular_name' => _x( 'Kategoria', 'taxonomy singular name' ),
        'search_items' =>  __( 'Wyszukaj kategorię' ),
        'all_items' => __( 'Wszystkie kategorie' ),
        'edit_item' => __( 'Edytuj kategorię' ),
        'update_item' => __( 'Zaktualizuj kategorię' ),
        'add_new_item' => __( 'Dodaj kategorię' ),
        'new_item_name' => __( 'Kategoria' ),
        'menu_name' => __( 'Kategorie' ),
        ),
        // Control the slugs used for this taxonomy
        'rewrite' => array(
        'slug' => 'offer_category', // This controls the base slug that will display before each term
        'with_front' => false, // Don't display the category base before "/locations/"
        'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
        ),
    ));
}
add_action( 'init', 'taxonomy_offer_category', 0 );