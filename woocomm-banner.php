<?php
/*
Plugin Name: WooCommerce Banner
Plugin URI: https://github.com/fabriziodeltufo
Description: Yellow / Red Header Banner for Limited Offer.
Version: 1.0.0
Contributors:
Author: Fabrizio Del Tufo
Author URI: https://github.com/fabriziodeltufo
License: GPLv2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wpbanner
Domain Path:  /languages
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
  die;
}

define( 'WPPLUGIN_URL', plugin_dir_url( __FILE__ ) );

include( plugin_dir_path( __FILE__ ) . 'includes/wpbanner-style.php');

include( plugin_dir_path( __FILE__ ) . 'includes/wpbanner-code.php');
