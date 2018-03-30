<?php
/**
* This code registers the stylesheets and scripts
*/
function the_scripts() {
	//CSS
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
	//wp_deregister_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'the_scripts' );

//Advanced Custom Fields - Include Options Page
if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array(
    'page_title'  => 'General Settings',
    'menu_title'  => 'Site Config',
    'menu_slug'   => 'redpine-general-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));
}

// Register Navigation Menus
register_nav_menus([
'primary_navigation' => __('Primary Navigation', 'nmc'),
]);

// Register custom navigation walker
//require_once('wp_navwalker.php');

function default_page_menu() {
   wp_list_pages('title_li=');
}

// Add Active Class To Navigation Menus
add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);
function special_nav_class($classes, $item) {
if (in_array('current-menu-item', $classes)) {
    if (is_single()) {
        $classes[] = 'active';
    } elseif (is_archive()) {
        $classes[] = 'active';
    } else {
        $classes[] = 'active ';
    }
}
return $classes;
}

add_image_size('gallery-thumbnail', 450, 450, array('center', 'center'));
?>