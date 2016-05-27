<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'porkka');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'localhost');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'steel1992');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '?+4wxKa+ v3A-,D3CBm ji9szzM4ohqbiK`M7TdNy>c1mSusr%{PH2L^6keZyx7F');
define('SECURE_AUTH_KEY',  'C]yDmpm- *1kc8c6s-5LC:@K_FWvJP_*LMt~@c|hj_)1>Zm|/RS6|9yNt0E$X~Op');
define('LOGGED_IN_KEY',    '7Le,6Fhy9I{B?(#<0oOY_G6CmUa8Q%vK-++,F}nn2E(GB6!t_rSY!{)<-PP|rNW^');
define('NONCE_KEY',        'TG}{Iok$)tF<I;kW*i!q<k$P`+b]$|LU$RV%>O#Kx9mo7F6BmV +E`%m3X]T+7}$');
define('AUTH_SALT',        'hI^h8.@-8qm1<VmlB5[:6+}H%W1<L9+qw1p+m |p1tSQ0/}|`8UCvM6Vohkp[8mX');
define('SECURE_AUTH_SALT', 'azO&`Q IF>BC^<pO9qTaE_v!;k)1&h0|!B[g-/ePmw;eo,k/|FRW)UXh?*pQ$-`h');
define('LOGGED_IN_SALT',   'vgkm-$H;v+m517OO9,/QKc}t>Te%tAUOaS, iWys<]j,a[%8P7,~,g~_E>>i3HT2');
define('NONCE_SALT',       'c9JN`3iop5FmnD&nbyjpc(]VcgC+t)SJk*DGMs#Mi!*TzO]`<P.}92@>ZPcN_>cL');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
