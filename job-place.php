<?php

/**
 * Plugin Name:       WP React Kit
 * Description:       A simple starter kit to work in WordPress plugin development using WordPress Rest API, WP-script and many more...
 * Requires at least: 5.8
 * Requires PHP:      7.4
 * Version:           0.8.0
 * Tested upto:       6.2.2
 * Author:            Maniruzzaman Akash<manirujjamanakash@gmail.com>
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       jobplace
 */


 add_action( 'admin_menu', 'jobplace_init_menu' );
/**
* Init Admin Menu.
*
* @return void
*/
function jobplace_init_menu() {
 add_menu_page( __( 'Job Place', 'jobplace'), __( 'Job Place', 'jobplace'),
'manage_options', 'jobplace', 'jobplace_admin_page', 'dashicons-admin-post', '2.1' );
}
/**
* Init Admin Page.
*
* @return void
*/
function jobplace_admin_page() {
 require_once plugin_dir_path( __FILE__ ) . 'templates/app.php';
}


 