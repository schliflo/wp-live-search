<?php
/**
 *
 * @package   WP_Search
 * @author    Nick Haskins <email@nickhaskins.com>
 * @license   GPL-2.0+
 * @link      http://example.com
 * @copyright 2015 Your Name or Company Name
 *
 * Plugin Name:       WP Search
 * Plugin URI:        http://nickhaskins.com
 * Description:       Real-time client-side search using WP REST API and Backbone
 * Version:           0.1
 * GitHub Plugin URI: https://github.com/bearded-avenger/wp-live-search
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Set some constants
define('WP_SEARCH_VERSION', '0.0.1');
define('WP_SEARCH_DIR', plugin_dir_path( __FILE__ ));
define('WP_SEARCH_URL', plugins_url( '', __FILE__ ));

require_once( plugin_dir_path( __FILE__ ) . 'public/class-wp-search.php' );

register_activation_hook( __FILE__, array( 'WP_Search', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'WP_Search', 'deactivate' ) );

add_action( 'plugins_loaded', array( 'WP_Search', 'get_instance' ) );