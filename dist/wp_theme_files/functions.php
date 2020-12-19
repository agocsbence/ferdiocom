<?php
add_theme_support( 'post-thumbnails' );

//SET CUSTOM EXCERPT LENGTH
// function custom_excerpt_length( $length ) {
//     return 20;
// }
// add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/* Register Custom Navigation Walker */
// function register_navwalker(){
// 	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
// }
// add_action( 'after_setup_theme', 'register_navwalker' );

// ACF OPTIONS PAGE
// if( function_exists('acf_add_options_page') ) {
// 	acf_add_options_page();	
// }
// if( function_exists('acf_add_options_page') ) {
// 	acf_add_options_page( array(
// 		'page_title'	=>	'Főoldal mezők',
// 		'menu_title'	=>	'Főoldal mezők',
// 		'menu-slug'		=>	'fooldal-mezok',
// 		'capability'	=> 	'edit_posts',
// 		'parent_slug'	=>	'',
// 		'position'		=> 	1,
// 		'icon_url'		=> 	false,
// 	));	
// }

// REGISTER MENU AREAS
function register_header_menu() {
    register_nav_menu('header-menu',__( 'Header Menu', 'ferdio' ));
}
add_action( 'init', 'register_header_menu' );
function register_footer_menu() {
    register_nav_menu('footer-menu',__( 'Footer Menu', 'ferdio' ));
}
add_action( 'init', 'register_footer_menu' );