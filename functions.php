<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$understrap_includes = array(
	'/custom-post.php',                          // Load Editor functions.
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
	'/related-post.php'
);

foreach ( $understrap_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}


/**
 * 
 * Adding Redux Option Framework.
 *
 **/


 include_once('redux/ReduxCore/framework.php');
 include_once('redux/sample/config.php');

function addReduxStyle(){
wp_enqueue_style('redux', get_template_directory_uri()."/adminStyle.css" );
};

add_action('admin_enqueue_scripts', 'addReduxStyle'); 

/**
 * ACF Plugin and it's fields.
 */
require get_template_directory() . '/inc/acf-theme-field.php';


// Login Styles

function loginStyles(){
    wp_enqueue_style('login_styles', get_stylesheet_directory_uri().'/login/login.css' );
}
add_action('login_enqueue_scripts', 'loginStyles');
//  Add styles or Scripts

function carolinaspa_redirect_login(){
    return home_url();
}
add_filter('login_headerurl', 'carolinaspa_redirect_login');