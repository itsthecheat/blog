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
define('DB_NAME', 'blogdemo');

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
define('AUTH_KEY',         ' J/5*8QIzXm*vNcfv)qC9d026kY:Vkn/es{@5c1X :X5Gvk<aMdmP,ed 8r|:)?7');
define('SECURE_AUTH_KEY',  '?+xv8>9EQ?$KO:O*vWd&?RL9ZX)GO6iagu)MMoS0tC440r@XLr<[V0{TQnPoRT&}');
define('LOGGED_IN_KEY',    'vTn)G|lXyvlJ #{F:vcek)pY5b.Exm2K/M~6?-ZqKE(YwqCvV/;odVOAi^JC5nWS');
define('NONCE_KEY',        'Vye^Kc`B22>DrIC N0e<>#0 +so;2$:)T>/ZT>s61^9;>#)Cl1Wx3=3RW65cQ4(E');
define('AUTH_SALT',        'bH?lkO#+1_g0aV@6wR+X(Jq`c+6=Ff];QG)OWUN^b_GXY1neq]e[s6(E=9Rm[lrx');
define('SECURE_AUTH_SALT', 'hzwT 0kI{3_t<}Z){J<q=8N6|(-M21|y@z&MxHlluq3QhUC]3Hv5[<7rmz$I<cVB');
define('LOGGED_IN_SALT',   '~DwP+h,mqd-HKNkBcD?~d[XJ;5.u_lS-K33bibB<:S>@#KbqCEXYrF.bmx2P1nrn');
define('NONCE_SALT',       '73LWd8ZKqL|1YRZh)nSF@0w(%98jrbO1nS~]kBR2U#K*)H@~zl@%%ue7u1L`Nhw_');

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
