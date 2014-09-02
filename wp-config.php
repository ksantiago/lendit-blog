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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_lenditblog3');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'M8REi-$e:rNUm.7I~UPj+lhX0+1so*#W2k[NY9$%XfHhw2eC]c-7o04|a@ x07]b');
define('SECURE_AUTH_KEY',  'kMzY0@:j# 7tCW]c4u7Vj0(,5 {t+*Q~|%G|v7)2XE+yc4!H1a^}sv-1/^,A+fYS');
define('LOGGED_IN_KEY',    '}pR$M#9tw+=+>MSvj2#HDyT3G!GX.!>LWbc=zt},~/?TR2S8+$KI-+FiHc`)Ly[#');
define('NONCE_KEY',        'K:N6jA`$IF%Jp#8bx{3p1Of&^PC}=vYIv3su)I^T)3m9AeiDzb[3`x:|p+ueDUQE');
define('AUTH_SALT',        '.d3(x93lS~8U91%gtSpq@_`0/^wAz.q`+15P Po_vq-7D1ZoFuny81(&Y|[/>=Jv');
define('SECURE_AUTH_SALT', 'Hh^DQ%;Z&}?$B,YT} 6CFX=#oJrJW$sZexlA0rGQ|fzrxNvA*=H;4K|^x0q*<unR');
define('LOGGED_IN_SALT',   'rt`x-ME4YDYb/M(.QKr&>!2!{+iiQUQ+yC>-!(hI:3?ex@`>%63P?[JRvzdui-4?');
define('NONCE_SALT',       'p)+/Z!Pe7JD8]S_UG2IL|diBf>Y-*@i*i|xwWg&`2}OVG%yG;7!P+UH[Fisr+b-8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpli_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
