<?php

/**
 * Fired during plugin deactivation
 * @see       http://www.tussendoor.nl
 * @since      2.0.0
 */
class open_rdw_kenteken_voertuiginformatie_Deactivator
{
    /**
     * Deletes our saved admin notice so the user gets another notice for donation! :)
     *
     * @since    2.0.0
     */
    public static function deactivate()
    {
        delete_option('open-rdw-notice-dismissed');
    }
}
