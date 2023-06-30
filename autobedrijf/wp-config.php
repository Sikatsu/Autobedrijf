<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'autobedrijf' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'u2MR|P(Xu$I |-C(o4):c8 ]}HvpPg/N|4 $}}A:-WFjN_>q@1a$[(}h,N/F1]PV' );
define( 'SECURE_AUTH_KEY',  '`NJ_#Y@1{0]}T)v=7Cub*T9tE0{(Elod,eR/Z:]j5Ta17*x8zQ8:_`oPod1<44Oo' );
define( 'LOGGED_IN_KEY',    'XO5i*F$d*w>R$@66&ROv|Vna*7Tay@Qf2rwU|g&85q:uR.5qgSnT ] A!3#JDR#<' );
define( 'NONCE_KEY',        'bh^:rk-s/;S=`J8q}+sa/7H+*8 AeBj<MJhp*uq!vEJ+=Jr87 J4XQZh=1W%F+fx' );
define( 'AUTH_SALT',        'z1)hcY%7asPX|DrFGztzN>k7[27#nSAZV<ZSx#9#[+&)Oj]x4-yM1DF,?|,Nv.Yk' );
define( 'SECURE_AUTH_SALT', 'jE-p/k&H#CD0!MGTaWni.i?,1@v56(?]%{!(k:SqFplD0Z9157f84ac<Dx6N_pRg' );
define( 'LOGGED_IN_SALT',   'a+0)gn?fwVpolp/AC2{ffDM>B%+1O]Dvl$Ra2W nR>TkqdN9U8P6pr$md@mkcDmU' );
define( 'NONCE_SALT',       '$g}Qe&;HAMV7M<|HGR_3^6]L;O@Y)Q?OiMTHur ]:@h5Rt1[{*lrc@%FhTWge@32' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */

/* Add any custom values between this line and the "stop editing" line. */



define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors', 0);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
