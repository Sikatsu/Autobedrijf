<?php

/**
 * Fired during plugin activation
 * @see       http://www.tussendoor.nl
 * @since      2.0.0
 */
class open_rdw_kenteken_voertuiginformatie_Activator
{
    public static function activate()
    {
        deactivate_plugins('open-rdw-kenteken-voertuiginformatie-pro/open-rdw-kenteken-voertuiginformatie.php');
    }
}
