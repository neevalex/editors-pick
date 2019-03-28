<?php

/**
 *
 * @link              https://neevalex.com
 * @since             1.0.0
 * @package           Editors_Pick
 *
 * @wordpress-plugin
 * Plugin Name:       Editors Pick
 * Plugin URI:        https://github.com/neevalex/editors-pick
 * Description:       This plugin adds a block with the "editors pick" product showcase anywhere you want, with a simple [editors_pick id=xx] shortcode.
 * Version:           1.0.0
 * Author:            NeevAlex
 * Author URI:        https://neevalex.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       editors-pick
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'EDITORS_PICK_VERSION', '1.0.0' );

require plugin_dir_path( __FILE__ ) . 'includes/class-editors-pick.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_editors_pick() {

	$plugin = new Editors_Pick();
	$plugin->run();

}

if  (!(class_exists('ACF'))) {
     add_action( 'admin_notices', 'acf_admin_notice__error' );
} else {run_editors_pick();}

