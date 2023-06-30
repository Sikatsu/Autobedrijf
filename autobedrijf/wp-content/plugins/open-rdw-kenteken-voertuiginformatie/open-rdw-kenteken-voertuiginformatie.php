<?php

/**
 * Plugin Name:       Open RDW kenteken voertuiginformatie
 * Plugin URI:        http://www.tussendoor.nl
 * Description:       Open RDW Kenteken voertuiginformatie for requesting and sending of vehicle information in WordPress.
 * Version:           2.1.0
 * Author:            Tussendoor internet & marketing
 * Author URI:        http://www.tussendoor.nl
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       Open RDW kenteken voertuiginformatie
 * Domain Path:       /languages
 * Tested up to:      6.0
 */

// If this file is called directly, abort.
if (! defined('WPINC')) {
    die;
}

define('ORK_PLUGIN_PATH', plugins_url('open-rdw-kenteken-voertuiginformatie'));

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-open-rdw-kenteken-voertuiginformatie-activator.php
 */
function activate_open_rdw_kenteken_voertuiginformatie()
{
    require_once plugin_dir_path(__FILE__) . 'includes/class-open-rdw-kenteken-voertuiginformatie-activator.php';
    open_rdw_kenteken_voertuiginformatie_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-open-rdw-kenteken-voertuiginformatie-deactivator.php
 */
function deactivate_open_rdw_kenteken_voertuiginformatie()
{
    require_once plugin_dir_path(__FILE__) . 'includes/class-open-rdw-kenteken-voertuiginformatie-deactivator.php';
    open_rdw_kenteken_voertuiginformatie_Deactivator::deactivate();
}

function redirect_after_activation($plugin)
{
    if ($plugin == plugin_basename(__FILE__)) {
        exit(wp_safe_redirect(admin_url('admin.php?page=open_data_rdw&tab=getting-started')));
    }
}

register_activation_hook(__FILE__, 'activate_open_rdw_kenteken_voertuiginformatie');
register_deactivation_hook(__FILE__, 'deactivate_open_rdw_kenteken_voertuiginformatie');
add_action('activated_plugin', 'redirect_after_activation');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-open-rdw-kenteken-voertuiginformatie.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    2.0.0
 */
function run_open_rdw_kenteken_voertuiginformatie()
{
    $plugin = new open_rdw_kenteken_voertuiginformatie();
    $plugin->run();
}
run_open_rdw_kenteken_voertuiginformatie();
