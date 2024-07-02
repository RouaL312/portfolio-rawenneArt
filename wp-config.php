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
define( 'DB_NAME', 'rawenneArt' );

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
define( 'AUTH_KEY',         'Jfc?(MK>&5um#bfbq5ICM8l>T/]6g,XoW0bY$SeGh!` =_CtSvaD?EdM[4 QVzE1' );
define( 'SECURE_AUTH_KEY',  'k|h2Qp74!E[+x#}I,M,8I=Y_U]F}m]b|@gR[^V<VW#4S_A,.lT;jv<ZY8+zQw(%!' );
define( 'LOGGED_IN_KEY',    '/Wej6~<<}QVOzYERW-6*:jy@kp e7O2MI&A8AP5O<8b7dSmQv4wb4M66O85:<`b;' );
define( 'NONCE_KEY',        'Zu0tjBW7>&Ur|[uW>-?IUnvf;U9wF|oMmM)UA_mL>c&)gd(6-.Qm]9b| G,<noF_' );
define( 'AUTH_SALT',        '@huH _d-q*);E5_tF6`l$kwVS{l&lmjMV@&|{@fD|0j+lA+ZZrT3Z#{xT8F>1AFN' );
define( 'SECURE_AUTH_SALT', 'qPcT9G1wTc(8j]8pe2;PAa2,6na?FCU3L6 T#9>o&gxu<`zOLZ>Mb cbufa:kBx:' );
define( 'LOGGED_IN_SALT',   'ZVT)rDl6|rCUm&Js0%POT(ToHkLz5aS9XRnk!}`Ft d+j~BF5NX;1_TdT~LrB3uB' );
define( 'NONCE_SALT',       '(VKw4xQLE*Osy?aX:i1wCDr0BV8>22b6`W, VLwBB>,@i/Q9SYe#TlDK?<*t@;k8' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
