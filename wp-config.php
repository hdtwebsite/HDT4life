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
define('DB_NAME', 'hdt');

/** MySQL database username */
define('DB_USER', 'hdt420');

/** MySQL database password */
define('DB_PASSWORD', 'hdt420');

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

define('AUTH_KEY',         'gHlTyJwj&k$,3l.w5K&.Ar_.ggeEDiC%G(8 N@%h?=yz^hMFU-19rA$6xmcH3TKU');
define('SECURE_AUTH_KEY',  'MB1+g^DXl+PbNxP7wYbl`jS$dk.?PCWkd:K[?_LMgskq1ly .VKGh18-:6KBF|fc');
define('LOGGED_IN_KEY',    'I7pn*+t+290%qevMO:z_ 3VjyE{]dmunLiEo$OL3=i{vZoESLK(sE]DOUzPuGQp{');
define('NONCE_KEY',        '{G_aA1 US_Wm4rAx(=[d7NwDA(@S,11N_a]d!P(V!W%2+zThZG|d2LDs>Vy2E$!{');
define('AUTH_SALT',        'b(M?XH-dUf{G>]^phZKCd+`$j[EMVX2-qo|c|U,1M+U>vMw;7SmQ53hx2G=HA^Z-');
define('SECURE_AUTH_SALT', '|r^7+AqDPjikM)^H8-KFt|XIMZy|3?j9T 566b-*4!0-}/6wdmBQy4A[Mt3V9kVk');
define('LOGGED_IN_SALT',   'hI3Qqf~WFppqY,q~ Gu.$!Ospa.Sg=(S~+K}FXNvMC,LH&M<bY(}eCnYc8EYe/;U');
define('NONCE_SALT',       '$S(z4m8va|BQ8&C7B%/*>Eq*2LU,M%=xA8J8fVL{M~J^C7a(ShnkhlOo:CtT)4(Z');

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
