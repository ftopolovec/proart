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
define('DB_NAME', 'proart');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'godofwar');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'vl{=3PYiRq9.iRhq*RD~h?B5`U..U!o`]nlYS%onIpZMF!Z;A4Mn!b#UoO$FXC6f');
define('SECURE_AUTH_KEY',  '!wfa~ BH[|Eh*g&p(_7m5?j_x|*${N6VHP=C$J+>}*]eIUU5JugJE?+-F[UhH_Q(');
define('LOGGED_IN_KEY',    'Y(M|3#|$:A#Xn,%Zn#1tV9|@a`2&_9(s3Be#s-]Bnizw4<gUDt(7-6LqmYbb*@W:');
define('NONCE_KEY',        'PjXsmdN[~&5~ o!Y*CyEyX,j;%5l<L^G[muM^SWRDX@T%tgQ3rdbI]tuL*eI5]8D');
define('AUTH_SALT',        'Xkg|})9R+}tp(5 |,l=/Q~3|&%M~YpY#{^%-h2L~o=0JyEuKDcU)HjXk9YV6rd;|');
define('SECURE_AUTH_SALT', 'o-!,QDrVWz1ZL5J+h$4D1cJ.9d$/{wYX*)8bqI0Fs|q?m`.)]-G6y7,8*)n7|_V8');
define('LOGGED_IN_SALT',   'D>n4rcU+wJ~}K=O-`{,b6X3!3yf$0zQ94`8-HZY38bY|4~R`ofv(EeCl`O)/%_}M');
define('NONCE_SALT',       ';W;g|vJgDXkxfSWeydse]{[FMmGN)y}x5<xV/##$;jRzk</~3:o?X;o1|m)/)p?p');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'proart_';

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
