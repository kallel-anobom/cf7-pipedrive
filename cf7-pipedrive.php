<?php
/**
 * Sticky Popup main plugin file
 *
 * @package   Cf7_Pipedrive
 * @author    Lucas Healy <lucasbhealy@gmail.com>
 * @license   GPL-2.0+
 * @link      http://www.everythinghealy.com/cf7-pipedrive
 *
 * @wordpress-plugin
 * Plugin Name: 	CF7 Pipedrive Integration
 * Plugin URI: 		http://www.everythinghealy.com/cf7-pipedrive
 * Description: 	CF7 Pipedrive Integration is a minimal plugin that creates a Pipedrive Deal using the form information when a Contact form 7 form is successfully submitted. Enter your API key and the forms you want Deals submitted for and you're done.
 * Version: 			1.3
 * Author: 				Lucas Healy
 * Author URI: 		http://www.everythinghealy.com
 * Text Domain: 	cf7-pipedrive
 * License: 			GPL-2.0+
 * License URI:   http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'CF7_PIPEDRIVE_PLUGIN_SLUG', 'cf7_pipedrive' );
define( 'CF7_PIPEDRIVE_PLUGIN_BASENAME', plugin_basename( plugin_dir_path( __FILE__ ) . CF7_PIPEDRIVE_PLUGIN_SLUG . '.php' ) );

require_once plugin_dir_path( __FILE__ ) . 'class-cf7-pipedrive.php';
add_action( 'plugins_loaded', array( 'Cf7_Pipedrive', 'get_instance' ), 99999999 );