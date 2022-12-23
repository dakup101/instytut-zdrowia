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

function wpa_course_post_link( $post_link, $id = 0 ){
    $post = get_post($id);  
    if ( is_object( $post ) ){
        $terms = wp_get_object_terms( $post->ID, 'offer_category' );
        if( $terms ){
            return str_replace( '%offer_category%' , $terms[0]->slug , $post_link );
        }
    }
    return $post_link;  
}
add_filter( 'post_type_link', 'wpa_course_post_link', 1, 3 );