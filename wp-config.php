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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '&m$;k=S@CK-TVwaD^?uM|0Bf-R`ip_yMqE!7#/{`*#){hXyPeSBPy$QYmc34T|d%' );
define( 'SECURE_AUTH_KEY',  '=1?aBZxEq5KwXDZWGc~kGGBwF[O[QLy-i^g7*0u;*YeBY#Wl-^`e<[#,(j7e]Yrv' );
define( 'LOGGED_IN_KEY',    '6WUqF1Vs{:+!YiLOQ>S)E6io)u}BG`~Qo5<`h5FPU1J3yfpF,$h%-q}NSQ67_JJ/' );
define( 'NONCE_KEY',        'qt}r6x9Mjb:(;vrZG}Qr]whsiBpJd (z{n`_YY*BMJ{p~?G&1@p4:$::d;gg?P.z' );
define( 'AUTH_SALT',        'ikt48q6Y{7&yM/f}GBlNd0S@c2vb8j$86$+?A8{l;~`ZWA*5.I0Tr<[/zz8Ih9T9' );
define( 'SECURE_AUTH_SALT', '/@5BJ*R.=B8lHP.:[D}!7Yx~vB)+>E=<Ji/j1xjrh#[=<7$?p!TY[t]{hAo8>gJ!' );
define( 'LOGGED_IN_SALT',   ' ?]a}2*GfH&AT0Xt&v_.qwH@I$9+Yw^LP[<d1T~nr+h8~P{RPc[zxR!lcyPUt=0~' );
define( 'NONCE_SALT',       'E_/Z}8|C@ed5nk|v<?C&P*4vL:uEY`W/ZDuU_tV}3[_fmltzEnbz=:!%aGw~Kd=o' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
