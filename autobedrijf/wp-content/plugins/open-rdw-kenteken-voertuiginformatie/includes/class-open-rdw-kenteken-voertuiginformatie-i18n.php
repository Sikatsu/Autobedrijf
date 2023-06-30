<?php

/**
 * Define the internationalization functionality
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 * @see       http://www.tussendoor.nl
 * @since      2.0.0
 */
class open_rdw_kenteken_voertuiginformatie_i18n
{
    /**
     * Load the plugin text domain for translation.
     *
     * @since    2.0.0
     */
    public function load_plugin_textdomain()
    {
        load_plugin_textdomain(
            'Open RDW kenteken voertuiginformatie',
            false,
            dirname(dirname(plugin_basename(__FILE__))) . '/languages/'
        );
    }
}
