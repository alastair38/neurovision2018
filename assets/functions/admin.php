<?php
// This file handles the admin area and functions - You can use this file to make changes to the dashboard.

/************* DASHBOARD WIDGETS *****************/
// Disable default dashboard widgets
function disable_default_dashboard_widgets() {

	remove_meta_box('dashboard_recent_comments', 'dashboard', 'core'); // Comments Widget
	remove_meta_box('dashboard_incoming_links', 'dashboard', 'core');  // Incoming Links Widget
	remove_meta_box('dashboard_plugins', 'dashboard', 'core');         // Plugins Widget
	//
	// remove_meta_box('dashboard_recent_drafts', 'dashboard', 'core');   // Recent Drafts Widget
	remove_meta_box('dashboard_primary', 'dashboard', 'core');         //
	remove_meta_box('dashboard_secondary', 'dashboard', 'core');       //
	// remove_meta_box('dashboard_right_now', 'dashboard', 'core');
	remove_meta_box('dashboard_quick_press', 'dashboard', 'core');
	// remove_meta_box('dashboard_activity', 'dashboard', 'core');

	// Removing plugin dashboard boxes
	remove_meta_box('yoast_db_widget', 'dashboard', 'normal');         // Yoast's SEO Plugin Widget

}

remove_action( 'welcome_panel', 'wp_welcome_panel' );

/*
For more information on creating Dashboard Widgets, view:
http://digwp.com/2010/10/customize-wordpress-dashboard/
*/

/**
 * Add a widget to the dashboard.
 *
 * This function is hooked into the 'wp_dashboard_setup' action below.
 */

// Calling all custom dashboard widgets
function charly_custom_dashboard_widgets() {

	/*
	Be sure to drop any other created Dashboard Widgets
	in this function and they will all load.
	*/
}
// removing the dashboard widgets
add_action('admin_menu', 'disable_default_dashboard_widgets');
// adding any custom widgets
add_action('wp_dashboard_setup', 'charly_custom_dashboard_widgets');

/************* CUSTOMIZE ADMIN *******************/
// Custom Backend Footer
function charly_custom_admin_footer() {
	_e('<span id="footer-thankyou">Developed by <a href="http://alastaircox.com" target="_blank">Alastair Cox</a></span>.', 'charlywp');
}

// adding it to the admin area
add_filter('admin_footer_text', 'charly_custom_admin_footer');


    /**
 * Redirect non-admins to the homepage after logging into the site.
 *
 * @since 	1.0
 */
function acme_login_redirect( $redirect_to, $request, $user  ) {
	return ( is_array( $user->roles ) && in_array( 'administrator', $user->roles ) ) ? admin_url() : site_url();
}
add_filter( 'login_redirect', 'acme_login_redirect', 10, 3 );

//
// function revcon_change_post_label() {
//     global $menu;
//     global $submenu;
//     $menu[5][0] = 'News + Blog';
//     $submenu['edit.php'][5][0] = 'All Content';
//     $submenu['edit.php'][10][0] = 'Add News';
//     $submenu['edit.php'][16][0] = 'Tags';
// }
// function revcon_change_post_object() {
//     global $wp_post_types;
//     $labels = &$wp_post_types['post']->labels;
//     $labels->name = 'News';
//     $labels->singular_name = 'News';
//     $labels->add_new = 'Add News';
//     $labels->add_new_item = 'Add News';
//     $labels->edit_item = 'Edit News';
//     $labels->new_item = 'News';
//     $labels->view_item = 'View News';
//     $labels->search_items = 'Search News';
//     $labels->not_found = 'No News found';
//     $labels->not_found_in_trash = 'No News found in Trash';
//     $labels->all_items = 'All News';
//     $labels->menu_name = 'News';
//     $labels->name_admin_bar = 'News';
// }
//
// add_action( 'admin_menu', 'revcon_change_post_label' );
// add_action( 'init', 'revcon_change_post_object' );
