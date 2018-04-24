<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
//if($_SERVER['REMOTE_HOST'] == 'localhost'){
		
	define('DB_NAME', 'wattsweb_kirk');

	/** MySQL database username */
	define('DB_USER', 'root');

	/** MySQL database password */
	define('DB_PASSWORD', 'root');

	/** MySQL hostname */
	define('DB_HOST', 'localhost');

	/** Database Charset to use in creating database tables. */
	define('DB_CHARSET', 'utf8');

	/** The Database Collate type. Don't change this if in doubt. */
	define('DB_COLLATE', '');
// }
// else{

// 	define('DB_NAME', 'wattsweb_kirk');

// 	/** MySQL database username */
// 	define('DB_USER', 'wattsweb_kirk');

// 	/** MySQL database password */
// 	define('DB_PASSWORD', 'Dql8Y&55');

// 	/** MySQL hostname */
// 	define('DB_HOST', 'localhost');

// 	/** Database Charset to use in creating database tables. */
// 	define('DB_CHARSET', 'utf8');

// 	/** The Database Collate type. Don't change this if in doubt. */
// 	define('DB_COLLATE', '');
// }
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'e^Rxv+znYd+/WDq#WU!4$+5 U6Vo/L<`eimU:7Jg?XF%78,$aulCJfJrx^oa4M^{');
define('SECURE_AUTH_KEY',  'i84m!1q).))vmyv^`2Lt{Rmx+iO-(H-z6*ny]T~7Bo,D1i/}1--*$Sb1<t6h)W1?');
define('LOGGED_IN_KEY',    'S=:eA}j0Q,,5rpch_$FE9|y*vZ+,m0DloJY]|?mq@1}%r~<{0wbSa0|-UGtDXGFq');
define('NONCE_KEY',        'Jb:<>0? +5u6l@k+jD4ULvV)i{uJFTVR7!6|XSdu=5x&l@=$0m4>fyua6YGp%Gve');
define('AUTH_SALT',        'wMX4J^ +wfnjQ0z]T;IsJ(FlhEPqt* -x?]2:;OgvnHG@s|]-khnFE*7g{#u@(e9');
define('SECURE_AUTH_SALT', 'ix>cdEdnQ ]>w(-]c?Ak]aSUR!eJS3i9asl,HoUcj1%rbA9wkxH~RbGq%l>vL+rm');
define('LOGGED_IN_SALT',   '=jg?0Y3CG+F%kX7s*X[+PWa8UVjy|*%h)hGt+DYdGsN}W~6@ZzJr,y5q4`EQR%@Z');
define('NONCE_SALT',       'pQAz&bwWcH 6+AQfie#1~9A+V]OBS+t?VcRe|B+N5*Rh{-}okC,cCF+7pKvv`iAY');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
