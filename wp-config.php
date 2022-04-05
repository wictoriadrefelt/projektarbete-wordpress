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
define( 'DB_NAME', 'webshop1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'J48TR!qnz)EQB+l]jnfvPM1[<_IXqk/+x^X$u{e/ h2BK5xZAS+<O{/@UWhE[2;@' );
define( 'SECURE_AUTH_KEY',  '$uCv T{8GMy{.,37h?P|Fnxgi3ZT K(^@=e*N;2p6GeG`S p>AC09|x>?ze9iAuZ' );
define( 'LOGGED_IN_KEY',    'F?,gIWr`oB!+uko^po]k9[LdK.LsijxMAfAP%%QrLD.D.2.k{3D>-5e<t3w$w/vJ' );
define( 'NONCE_KEY',        'Xw 0ci#]UV7LHj2Nxir[|S9M26+|%L(HcdU dM S{p1o.pL!W=*AK|^_ocMLNt$5' );
define( 'AUTH_SALT',        'Kkr7_]){3mPWk&D68ej+HN9=J;[`2_a=AYwB!V}T  s- 7(z205k.o,g;tLL)HwE' );
define( 'SECURE_AUTH_SALT', '&4|/!9k$KqY@3h7yNtE24phL&qUHT9T{+A{jKC1QNlsSmw:XnRyyUEx]BOJwd(oh' );
define( 'LOGGED_IN_SALT',   'U}=4F=+[BlqA;.E4$EUr3 a]mvg;&$3?t0h}h kwpF>*b$Ie`mgKQZ(/o2T<|Jyy' );
define( 'NONCE_SALT',       'h;-9lAWlX;}}|4!]SVs(}1BV<:6Kz54N)Y0zp-Bha#LEXAYx1uZ@g./=GbN#5J?=' );

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
