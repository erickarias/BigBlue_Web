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
define('DB_NAME', 'BBSS');

/** MySQL database username */
define('DB_USER', 'erick');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'yU7r[&@=#83?p-sorvBYi<a^`]mwVns9>>oK,K#5)P@X-#JLD76{tL:m~Sx#gRtq');
define('SECURE_AUTH_KEY',  ']u.YKA?7!VEI/[YkV7YJg<9yycKiO.CTd]L+*lHfZYqPqnL?@*tfVq|r:MzP_uMF');
define('LOGGED_IN_KEY',    'NspwFV/<}|<2]O-c-J&)=$Dlf0/(6=p}[b2^od2#K. dCSah&lvbQ>gW|x-TUT@2');
define('NONCE_KEY',        '-BO_IVk$`,6Dg.qT:XRgDZ:y9C}O}nsYntbPYGSr|SmR#$l3 X7K5rjHg4ZPpV/w');
define('AUTH_SALT',        'Jz~r[_%31$e=bIwQiE7UPhx]c8pg13:|RXPW`]6FDQg,P(7M4gozwZu*Z2 TGXCG');
define('SECURE_AUTH_SALT', 'vB}S/W}mHqIJ<tvBp@{kKM?&/UN9($e*9:g#fA&Fh-5J#~dp2<G$cN[7tgj+-ESf');
define('LOGGED_IN_SALT',   '?ynDn{GJhggti9+Wn(!!TfW%56,CAw@H#[|j,H8BF%8U^e^@>hgg!xr&b0Ow#Vx{');
define('NONCE_SALT',       '@sjAKpSNLIy7o!9p,X?o;-/;{Q9O~<G-#&KtsTTDFC9@x9/VWyk[-g!O?7PeB[gs');

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
