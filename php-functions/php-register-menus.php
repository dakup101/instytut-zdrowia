<?php
if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {
 
    function mytheme_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Menu Główne', 'text_domain' ),
            'footer_menu_1'  => __( 'Menu Footer 1', 'text_domain' ),
            'footer_menu_2' => __( 'Menu Footer 2', 'text_domain' ),
        ) );
    }
    add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}