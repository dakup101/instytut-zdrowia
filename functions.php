<?php
add_theme_support( 'post-thumbnails' );

require_once(get_template_directory().'/php-functions/php-add-scripts-styles.php');
require_once(get_template_directory().'/php-functions/php-options-page.php');
require_once(get_template_directory().'/php-functions/php-remove-editor.php');
require_once(get_template_directory().'/php-functions/php-allow-svg.php');
require_once(get_template_directory().'/php-functions/php-register-menus.php');
require_once(get_template_directory().'/php-functions/php-register-doctors-post-type.php');
require_once(get_template_directory().'/php-functions/php-register-offer-category-taxonomy.php');
require_once(get_template_directory().'/php-functions/php-register-offer-post-type.php');
require_once(get_template_directory().'/php-functions/php-disable-comments.php');
require_once(get_template_directory().'/php-functions/php-register-med_title-taxonomy.php');
require_once(get_template_directory().'/php-functions/php-register-department-taxonomy.php');
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

function wp_get_menu_array($current_menu): array {
	$menu_name = $current_menu; //menu slug
	$locations = get_nav_menu_locations();
	$menu_obj = wp_get_nav_menu_object( $locations[ $menu_name ] );
	$array_menu = wp_get_nav_menu_items($menu_obj);
	$menu = array();
	foreach ($array_menu as $m) {
		if (empty($m->menu_item_parent)) {
			$menu[$m->ID] = array();
			$menu[$m->ID]['ID']      =   $m->ID;
			$menu[$m->ID]['title']       =   $m->title;
			$menu[$m->ID]['url']         =   $m->url;
			$menu[$m->ID]['children']    =   array();
		}
	}
	$submenu = array();
	foreach ($array_menu as $m) {
		if ($m->menu_item_parent) {
			$submenu[$m->ID] = array();
			$submenu[$m->ID]['ID']       =   $m->ID;
			$submenu[$m->ID]['title']    =   $m->title;
			$submenu[$m->ID]['url']  =   $m->url;
			$menu[$m->menu_item_parent]['children'][$m->ID] = $submenu[$m->ID];
		}
	}
	return array(
		'menus' => $menu,
		'submenus' => $submenu
	);
}