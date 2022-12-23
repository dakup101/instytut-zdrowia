<?php
// Register Custom Taxonomy
function taxonomy_offer_category() {

	$labels = array(
		'name'                       => _x( 'Kategorie', 'Taxonomy General Name', 'iz-theme' ),
		'singular_name'              => _x( 'Kategoria', 'Taxonomy Singular Name', 'iz-theme' ),
		'menu_name'                  => __( 'Kategoria', 'iz-theme' ),
		'all_items'                  => __( 'Wszystkie kategorie', 'iz-theme' ),
		'parent_item'                => __( 'Kategoria nadrzędna', 'iz-theme' ),
		'parent_item_colon'          => __( 'Kategoria nadrzędna:', 'iz-theme' ),
		'new_item_name'              => __( 'Nowa kategoria', 'iz-theme' ),
		'add_new_item'               => __( 'Dodaj kategorię', 'iz-theme' ),
		'edit_item'                  => __( 'Edytuj kategorię', 'iz-theme' ),
		'update_item'                => __( 'Zaktualizuj kategorię', 'iz-theme' ),
		'view_item'                  => __( 'Zobacz', 'iz-theme' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'iz-theme' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'iz-theme' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'iz-theme' ),
		'popular_items'              => __( 'Popular Items', 'iz-theme' ),
		'search_items'               => __( 'Search Items', 'iz-theme' ),
		'not_found'                  => __( 'Not Found', 'iz-theme' ),
		'no_terms'                   => __( 'No items', 'iz-theme' ),
		'items_list'                 => __( 'Items list', 'iz-theme' ),
		'items_list_navigation'      => __( 'Items list navigation', 'iz-theme' ),
	);
	$rewrite = array(
		'slug'                       => 'kategoria-oferty',
		'with_front'                 => true,
		'hierarchical'               => true,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
        'query_var' => 'kategoria',
        'with_fron' => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'offer_category', array( 'offers' ), $args );

}
add_action( 'init', 'taxonomy_offer_category', 0 );