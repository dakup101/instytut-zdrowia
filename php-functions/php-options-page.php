<?php

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Ustawienia globalnych elementów motywu',
        'menu_title'	=> 'Elementy Globalne',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Ustawienia nagłówku strony',
        'menu_title'	=> 'Nagłówek',
        'parent_slug'	=> 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Ustawienia stopki strony',
        'menu_title'	=> 'Stopka',
        'parent_slug'	=> 'theme-general-settings',
    ));

}