<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'ysp_nurulhasanah' );

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
define( 'AUTH_KEY',         'o^wgEmyyETA1-E A$2phAfr!SSY-_.7fB8C`J/hCH#J=}NxT@N<}Ey00|<=uPfoF' );
define( 'SECURE_AUTH_KEY',  'S8p/.(^1H@((~K1B3rUj`:HF+:mEZ_}7Z540HMi&4_<A3w;P|IO|.xGRWZW*Qtt0' );
define( 'LOGGED_IN_KEY',    '3`:>HjHo|:,[[22`rD!VA .oGWztzgGEF-C?hRJmFa5kAA3]iQiJ0hQ*wGry#_E~' );
define( 'NONCE_KEY',        'mu>VU~?oX6]0^wmXFM-,_q?@,-e`WR9V?^1ND|[Ov~DCi]8pT]u;#|{^@Ll a7/N' );
define( 'AUTH_SALT',        'j DYB=r,4W8orX2wR[wC/Ui<mXY</ I-Ig]ZTLDY6!NpK9WC!k!=a(`@l?J]JGEr' );
define( 'SECURE_AUTH_SALT', 'a=wvQY[l=;pR5Q<U*yB)qO^M=>*}~b~g<<3f*L-pD)9=^xCa[f6z5!HyYhFjEa_T' );
define( 'LOGGED_IN_SALT',   '_,ekpF>d:BWsHXn:XAp.JrRUh&tc-Sl(@z0KV:Scr+btYMIn.jEA;W{8C*jF`leD' );
define( 'NONCE_SALT',       '72S5Be@`n%=57!EN.5uug! |5DV!aNrO]~O^K<bf1o]k #[M@=(ET}sS.b/OqtBN' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_client';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
