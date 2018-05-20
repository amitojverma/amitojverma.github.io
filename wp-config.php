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
define('DB_NAME', 'test_db');

/** MySQL database username */
define('DB_USER', 'root');

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
define('AUTH_KEY',         'h/-!M`^&=ocq*5<1LOO@(Jh8EDI24-Xw#GO-c^*hJ$6 ,uf!VJJp[xHdc$qLGB5F');
define('SECURE_AUTH_KEY',  'B?s2:%7b9PRz^z)>T2L>N`?TAc7O]9};!`*I/8/U[}|}i[sUl1&WcHUt5;&How*q');
define('LOGGED_IN_KEY',    'BZeAcTP/9z]H}@Tp)+jC:@c;M-9:tkhAM[UI>k;YM!|[{3WdY/Tj&PPB@_%04@=)');
define('NONCE_KEY',        'A$6>,$InhUSN;RV`WrL7wvVC4jpZ*u,>uH,Io#A7G:mkYC?,4nJB}7!F^DHm$H9?');
define('AUTH_SALT',        'F^~^)6-VY=#c?,Y?(hcV0e0@WtY+93-hg}*ztIz: .9=8-P)yy|2(!1Wg&@5VGB3');
define('SECURE_AUTH_SALT', 'S4%/o3E_x~#M}XGfE,%D<tQnf+9E2nbh+@1<.LhjJ5YsGl{8ngYk{ HVsd`;AOtk');
define('LOGGED_IN_SALT',   '3c+Xd hu*]xFKyNx]0(g0PEB/{.=~^9QI4I^Pi{dS0;XO-li_5B6XB<k3 af^NJW');
define('NONCE_SALT',       '(5}MeJmvYAh1gw99xBNXbm,OwGrOJ+&EL[8yFMDR#J(R2=P[_.q}6sw^yw?Lb_tb');

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
