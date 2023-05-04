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
define( 'DB_NAME', 'wordpress-course' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         ' s-|/-0l4*+x+^<t[]5^dX+LmjlmhcCTKV]Hod/(SrR/u_A~L_[ZN-f|WJf~2^)U');
define('SECURE_AUTH_KEY',  'S/5[;)Mux{Ib1-*%^;cu?+M| K[w7UzAJ%(MYK/z]))a^H?3*Zg*!JfZ5OVE@P;C');
define('LOGGED_IN_KEY',    '.%|6%qP?*]9O-X%k1$9Z)9Su?/?YK.0&_lFo`]*j%flq|_+z}m0J<MV8|DPHS1Oa');
define('NONCE_KEY',        'R0 |yRbImd}xECn!4^b?Grx5n]5r22.=Pt>|H%D0g<@.^)ku6@c^R|);&jf8hR0@');
define('AUTH_SALT',        'Nv; ?{+3;6eUD@,<|c&X!%.`uVEAa)&1,n-+qcr[C+gc9h-l1/6ob#5m$dVEtdhX');
define('SECURE_AUTH_SALT', 'uJw/p>9ZEGI$>I5%~S^f[+1?g5X9YAgM _PU.sTXL.,b)d +_HzqcQ!f`|][D:kX');
define('LOGGED_IN_SALT',   '4i @7:|`C5}@@3mNU>}Jb6dhbUXr()$nd#-,l(ws-beXacmUwfQq-_X]-^W-0%C#');
define('NONCE_SALT',       ',<`WV8XoNUDX}.~+6}|-X-zAe:zqCKJ0UbYEs-8m(MP 9MQxKha-t!xCak1yH#gE');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wordpress_course_';

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
