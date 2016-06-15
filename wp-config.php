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
define('DB_NAME', 'coaching');

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
define('AUTH_KEY',         'D0&=Qha4EWZov,0ywcNQf8Kt1WPjP2?-e!tP#GZ_dJ`_H%`<r<g$w1e<9ip-J:c.');
define('SECURE_AUTH_KEY',  '~vi,L;7=]w=Ylih[15s[t`^*,5.4GG /!#]rcV^,}:L>=3g8&ZIw)3l`,tP;o0jn');
define('LOGGED_IN_KEY',    'ZN6A;U Zb7^# 1XsKVHs:K>i5@2b45, .>pQco[{V4|lY_`)l*5-X;ZLPt}7AG!P');
define('NONCE_KEY',        ';/><yd4ho<jk0V;1JqPp(iZ*DfhjEIHwSGQ}W,tZ3?{%#$.+iZkT[WE}KaaED8xW');
define('AUTH_SALT',        'p,TI!dhO8NQol%,s4TK<<KeBvXier(~wMj4h8cNHJKv9)3 Hn=-,SaZ 8cA] vyA');
define('SECURE_AUTH_SALT', '_;J_;7roQq:lKa_IHg`n3_5v[i|qf|J^GP&MNk0<U[TY-rp t@ynSD8]]<U*}s|$');
define('LOGGED_IN_SALT',   'EE<L%MT=*_qh^j3Yxkfr,zE09,_47?W^Tj?Fx0O^v:-fAazM~wd9#G.03urF&/Zf');
define('NONCE_SALT',       'e^./nbeJgI>T-qI2d%?ObE&ux,5Q9%(_.VHj2#]9OIw<(6nLKZe]#8#JP<gDn1_z');

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
