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

//CHANGE POSTS NAME
add_action( 'init', 'change_post_object' );
function change_post_object() {
    $get_post_type = get_post_type_object('post');
    $labels = $get_post_type->labels;
        $labels->name = 'Notebook Posts';
        $labels->singular_name = 'Notebook Posts';
        $labels->add_new = 'Add New';
        $labels->add_new_item = 'Add Notebook Post';
        $labels->edit_item = 'Edit Post';
        $labels->new_item = 'Post';
        $labels->view_item = 'View Posts';
        $labels->search_items = 'Search Post';
        $labels->not_found = 'No Posts found';
        $labels->not_found_in_trash = 'No Posts found in Trash';
        $labels->all_items = 'All Notebook Posts';
        $labels->menu_name = 'Notebook Posts';
        $labels->name_admin_bar = 'Notebook Posts';
}

// REGISTER MENU AREAS
function register_header_menu() {
    register_nav_menu('header-menu',__( 'Header Menu', 'ferdio' ));
}
add_action( 'init', 'register_header_menu' );
function register_footer_menu() {
    register_nav_menu('footer-menu',__( 'Footer Menu', 'ferdio' ));
}
add_action( 'init', 'register_footer_menu' );

//IMAGE LAZY LOAD - low quality iamge placeholder
define( 'EWWW_IMAGE_OPTIMIZER_USE_LQIP', true );

//IMAGE SIZES
add_action( 'after_setup_theme', 'imagesize_theme_setup' );
function imagesize_theme_setup() {
    add_image_size( 'ferdio-small', 500 );
    add_image_size( 'ferdio-medium', 800 );
    add_image_size( 'ferdio-large', 1080 );
    add_image_size( 'ferdio-xtralarge', 2560 );
}