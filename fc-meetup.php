<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * Dashboard. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           FC_Meetup
 *
 * @wordpress-plugin
 * Plugin Name:       FC Meetup
 * Plugin URI:        http://github.com/greenhornet79/fc-meetup
 * Description:       Pull in data about Fort Collins meetup groups using the Meetup API
 * Version:           1.0.0
 * Author:            Fort Collins WordPress Meetup
 * Author URI:        http://www.meetup.com/Fort-Collins-WordPress-Meetup/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       fc-meetup
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/class-fc-meetup-activator.php';

/**
 * The code that runs during plugin deactivation.
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/class-fc-meetup-deactivator.php';

/** This action is documented in includes/class-fc-meetup-activator.php */
register_activation_hook( __FILE__, array( 'FC_Meetup_Activator', 'activate' ) );

/** This action is documented in includes/class-fc-meetup-deactivator.php */
register_deactivation_hook( __FILE__, array( 'FC_Meetup_Deactivator', 'deactivate' ) );

/**
 * The core plugin class that is used to define internationalization,
 * dashboard-specific hooks, and public-facing site hooks.
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/class-fc-meetup.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_fc_meetup() {

	$plugin = new FC_Meetup();
	$plugin->run();

}
run_fc_meetup();
