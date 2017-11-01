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
define('DB_NAME', 'bmMidterm');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'lJiwQ[81q0nefZrqds,9j+&:(8#(s)XiK|&20jcG:At7s1(9_GI9f6j|d[J_m0ZF');
define('SECURE_AUTH_KEY',  'H.ZsidVrYEoHLA]{DZ,56duDa^vJ}61)C#r8Z$,X#&wok(WVIX=H:l)%PX%eAG?g');
define('LOGGED_IN_KEY',    'Jibu&|{LSMOXxPBKkxUUZ3*]6ZjdCMx3.56OF/).+PAqX#34*?z)!Tv3C<qJTw2a');
define('NONCE_KEY',        'lq,NALRKC5+%tg*^y$SAH$/6,Bm>=[AJ]Y)f9heE{}<1![Ojh!`s*8?haKDo{Dm$');
define('AUTH_SALT',        'HX_0!?M_az.:Bv*Z|1nk&v|TGTK6@Gw:Tc_7LH9@.I8+fZ0Z+h_1#/r5uY})54m-');
define('SECURE_AUTH_SALT', 'o+o/;x+o)dm:Z[@M]Y5*,q!VVsz5zW3sW+mKMFby_iWCH>/qF>nIu6V{J6];kR)K');
define('LOGGED_IN_SALT',   'B<*2-cVs3(U-z LZJ,~KtAMp]=H);EFKYNl]WV<~P=|_o)5R1[,k!F)a;^Z<#v 1');
define('NONCE_SALT',       'vMYP)Zuf&oR*5,l)x6,T~Gp-xs=*ch.Yd -:kyk|u2:!|3|bEB1y+g1EP[9(W!6d');

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
