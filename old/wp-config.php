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
define('DB_NAME', 'kyle_wdps1');

/** MySQL database username */
define('DB_USER', 'kyle_wdps1');

/** MySQL database password */
define('DB_PASSWORD', 'v7lb7YfvsVmqT900');

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
define('AUTH_KEY',         '~miTl/-l@gc_y+YkOpa*L@w<qg7{j>|r<a+vel1bbn!v|Ccla}F:aHf/r&(}joz;');
define('SECURE_AUTH_KEY',  '$#*Se}O-YUw1vVj2I:+yB$pFyex6sf3c1F]sZ3KP}h>m8+cib<Xv.[k|]a%iGJwd');
define('LOGGED_IN_KEY',    'O E<gT>hAKCTS)%)!~e@ZbOAr*+i*Z<#Z`DYB.9N-9!u=.h$MTM@uxMUQM(dS(at');
define('NONCE_KEY',        'gC!D+DG>VEf1|UH4-=jq#hX<[]%8iwa|L<}k!e)UJh~wB17b9ekHYa;[5N5DSz5p');
define('AUTH_SALT',        ')}$~UL/JZ7PYGOs*gv(1zy${JN5r8I3d0i@o@U`@@ANz|mZB_3#3@tvyp2!lbUTe');
define('SECURE_AUTH_SALT', 'ir>zkOHwaaD0Yr}!m3sB{GWxr2)0n}`-h{jl4+VIl^Z{~rfrhxON2 QrG^9E4lJY');
define('LOGGED_IN_SALT',   '[5&Q/Slv6&scP>Vp2O]g,/-xd|B+GQ&uQCHcugie~7.tVn,^Bi,FInasB-Ti03|X');
define('NONCE_SALT',       '>6`CG+,3K{_&H8!>`2_=Z5Rl.b`7s!%f-&^uxD6:4vt$c)}s`>?+yDUd{@+BQi?m');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');