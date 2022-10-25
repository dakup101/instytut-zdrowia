<?php
add_theme_support( 'post-thumbnails' );

require_once(get_template_directory().'/php-functions/php-add-scripts-styles.php');
require_once(get_template_directory().'/php-functions/php-options-page.php');
require_once(get_template_directory().'/php-functions/php-remove-editor.php');
require_once(get_template_directory().'/php-functions/php-allow-svg.php');
require_once(get_template_directory().'/php-functions/php-register-menus.php');
require_once(get_template_directory().'/php-functions/php-register-doctors-post-type.php');
require_once(get_template_directory().'/php-functions/php-register-offer-post-type.php');
require_once(get_template_directory().'/php-functions/php-disable-comments.php');
require_once(get_template_directory().'/php-functions/php-register-med_title-taxonomy.php');
require_once(get_template_directory().'/php-functions/php-register-department-taxonomy.php');
require_once(get_template_directory().'/php-functions/php-register-offer-category-taxonomy.php');
require_once(get_template_directory().'/php-functions/php-specialists-ajax.php');


// Taxonomies by custom order

function set_the_terms_in_order ( $terms, $id, $taxonomy ) {
    $terms = wp_cache_get( $id, "{$taxonomy}_relationships_sorted" );
    if ( false === $terms ) {
        $terms = wp_get_object_terms( $id, $taxonomy, array( 'orderby' => 'term_order' ) );
        wp_cache_add($id, $terms, $taxonomy . '_relationships_sorted');
    }
    return $terms;
}
add_filter( 'get_the_terms', 'set_the_terms_in_order' , 10, 4 );

function do_the_terms_in_order () {
    global $wp_taxonomies;  //fixed missing semicolon
    // the following relates to tags, but you can add more lines like this for any taxonomy
    $wp_taxonomies['offer_category']->sort = true;
    $wp_taxonomies['offer_category']->args = array( 'orderby' => 'term_order' );    
}
add_action( 'init', 'do_the_terms_in_order');

function get_menu_item_children($menu_items, $parent_id){
    $children = array();
    foreach ($menu_items as $item){
        if ($item->menu_item_parent == $parent_id) {array_push($children, $item);}
    }
    return $children;
}

function menu_item_has_children($menu_items, $check_id){
    foreach ($menu_items as $item){
        if ($item->menu_item_parent == $check_id) {return true;}
    }
    return false;
}