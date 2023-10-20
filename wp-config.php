<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'word' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ';O.XU5HGj/}z9n(X%=Y$<5v5S8*J51w4&$:<!6*]_OUK3:-B8%a=F.8H9Gul1kW~' );
define( 'SECURE_AUTH_KEY',  'X:Pe_x$w.u.#ydu@2g=g{T34Dt3f]NC2|=ko=(7wW5cI=4U{dh:DA^kR6m Kl/FM' );
define( 'LOGGED_IN_KEY',    '#1dzU(BU FKbTa{:<|{k/wnvd}a5@?WKHc,y*0I$o qgw)E:-wzM]e,SE|X0+][W' );
define( 'NONCE_KEY',        'w$CRUs*p:.g$7FRPdQjhBCkF #9 *gd-<ZR|&[qf8]`vE kYC4P1k][V(-45LVRX' );
define( 'AUTH_SALT',        'p?(Q)i^m)o:`DFcs7qY$=$X(uxQFyibCN=@](h/_6`itYH0xQs9C0XKj3kMVe;jB' );
define( 'SECURE_AUTH_SALT', 'fEyac)!tb,?~T`IzTFKVUo<Y`n(B{I Ty/XNtsEM]SRAJeCbqz4c6z<u+#I)Ra(J' );
define( 'LOGGED_IN_SALT',   'jFMW5vtsxTmQJ`_FZ2{M~P$U1eR>C5q<$>@k*6o]Y#p&|SdEDu!*8seij3@K@oyo' );
define( 'NONCE_SALT',       'PNtQ=ZG:5HxLrvy%Fz1$;xKl1Qthwv9=dA*k]X$60,]G-~j{ -x!-5R:#jwt5cpq' );

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
