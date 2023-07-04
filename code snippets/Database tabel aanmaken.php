<?php
global $wpdb;
$table_name = $wpdb->prefix . 'autos';

// Haal de juiste sortering en karakter set op van de wordpress database
$charset_collate = $wpdb->get_charset_collate();

$sql = "CREATE TABLE $table_name (
   id mediumint(9) NOT NULL AUTO_INCREMENT,
   kenteken varchar(10) NOT NULL,
   merk varchar(60) NOT NULL,
   handelsbenaming varchar(60) NOT NULL,
   omschrijving varchar(255) NOT NULL,
   prijs decimal(10,2) NOT NULL,
   PRIMARY KEY  (id)
) $charset_collate;";

require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
dbDelta( $sql );
?>