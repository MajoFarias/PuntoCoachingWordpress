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
define('DB_NAME', 'wordpress-coach');

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
define('AUTH_KEY',         '/45V:8jiu1+-VWQGb2nyA;_CQxXh%cwv%G(:_,Da$2lR)q[~=B*g+vy[RiVNx.kv');
define('SECURE_AUTH_KEY',  'yd*2#*yh?=:RL{IrBUX8<.(P2^[h$v8#FS&$#x+)3Y!itNaQf;){}GxDsZJ}AZg(');
define('LOGGED_IN_KEY',    'Gq_ ,sAXPb[4oWiv8qn^Gs%y4Lleg~T9Wf4P41*,#XPLi$7hF*MzbGJs>6m4=A^N');
define('NONCE_KEY',        '(bmc.Yz1Nk&Uis[}zb+YU+-d2jfZ0PVvXxiWDB5WYHbocYccR[2fy{fJ2BR# g*l');
define('AUTH_SALT',        'ytRx]$2O6$jL p)_wRc:dsny7/~@j[bu#R1A3kVD4;fo)?>W&)pg5U|qZr0$G#(y');
define('SECURE_AUTH_SALT', '~kB5Q6`$C@U!~EI/AD6r -j{C@Ej|*2BeU_ek3R>G8ZY9ybl^+49i*8LGx~i)u`L');
define('LOGGED_IN_SALT',   'NMBIY&I];~%h9NHD]Ncg%y,{n8&.7,,%?8][BuaCj|cZla>xdQ(.SDKI?8HoOOBA');
define('NONCE_SALT',       'd0CkUBd`IA%FwR2hp%xK*2&1@w|N.)cd+/z&5_-Y: :MT=v!Lc,JP4=p7<z&eOpu');

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
