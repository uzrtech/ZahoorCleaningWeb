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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u759108528_F5Ofr' );

/** Database username */
define( 'DB_USER', 'u759108528_REs2i' );

/** Database password */
define( 'DB_PASSWORD', 'hVnXf8hkVH' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'sU1{-J>1@VqRx[AoG!h,idyNL`a5|kh#JOcuo8pA|?Glm2Ov8>g~k4<tBNR&.Fti' );
define( 'SECURE_AUTH_KEY',   '1n]++nxpepE*oENT1koUK2Oaz:Lc*BR~zg<_3s--hLwwJO:}(1=cA%RoZ=:qU:9M' );
define( 'LOGGED_IN_KEY',     'bnTAV8MZ<-bvVm_>A3wV:+[;1#F;z7@faovH}h7FQT~%t%|D&]PY+x3#4T]1+o#g' );
define( 'NONCE_KEY',         'HqIi{9f`#+s]< ,zm=9FSB~L/s&IL#v_&D!@PK2tZF!aL6X;fn&dM<x ]1{%$F2z' );
define( 'AUTH_SALT',         'j zT(MUvx&$@4F*!gN`[6Q.qLKX)+-zSzu9-yrq9xly4/w eV+[>:-Ji0Qo;FEZT' );
define( 'SECURE_AUTH_SALT',  'p*F.#{/ID[89=,|N2-z{w-6EOgcT-2{l:UdI GXw]A(|USm%?U)wGvbL9+/Kg!XV' );
define( 'LOGGED_IN_SALT',    '*d%WsHd>(7+jC7c%CKIsph$-AyA=%>r`|Z3| xQ9X[S<F8LCHRax`^+Yn9Uf5#1s' );
define( 'NONCE_SALT',        'C`E^xB&sdPyYcY#!8[c}O@)~W]{J1!:xA/-p*(~C7SZH!5RS:due1D)<@;4,b-)J' );
define( 'WP_CACHE_KEY_SALT', 'cp4vo-c.]1Y#M3+DeCHj?xh%K5/[F?&NG5Z~JJ?ov/3IZWOW7pTOsf;n2:Bd[|~L' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '7171e4d3799a3aaa0a1fb2c91f51eb55' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
