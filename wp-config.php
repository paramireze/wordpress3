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
define('DB_NAME', 'wordpresstest');

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

/** Need more memory to make the world a happy place again */
define( 'WP_MEMORY_LIMIT', '256M' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'r+7+!sr;vPF}]Cj/o<kl/l~)fQ(0UM<>{SZ9OfTgd3r@**l{(4L]1AIg6r4S 84!');
define('SECURE_AUTH_KEY',  'YYg::yWO{69:X)Pd=RiK+,K!V~&?9bwBwAYTsz]l6l+8q~94*_WEAPtjveDT7ZA=');
define('LOGGED_IN_KEY',    'kO|+1Ey3X8+kk/v#XX@M7,+oF}dDKZV@ohad# CNtZvSR1pbOn+>T#OhQ.b&v%2B');
define('NONCE_KEY',        '*epuRVpOf5e:_;3&~gsxuiBU_e&`{pD3H)eI;xWSa@`-_(T;5t+{XJW%G@RrTwWG');
define('AUTH_SALT',        'oQWjgxPTd/cM1P!WbhIjOh48?CIat.7?$q&*ufNo0`X@}t|V,DC<6P0Yv%;E~bkg');
define('SECURE_AUTH_SALT', '/>@[/jBX)Ml~^:B>8av6hz&d;b%[#N*N !;p9Bc/)1ftxhIT#!f7O=AkgH_LkZ4=');
define('LOGGED_IN_SALT',   'i=-MX@7^@/7Qg>YX?yFEb!lt)(x8Du/(b|cB2{QMDF*Pnc+&71m!]Q}tz]j&4@!J');
define('NONCE_SALT',       'ysw!Cr9vAC3!Rv$o,/u@Wod<l_;jSFX,fD?*nxXrPV;BKbOe&3L72>F:qXR5d]V?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'hash_';

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
