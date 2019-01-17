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
define('DB_NAME', 'daddywork');

define('WP_MEMORY_LIMIT', '200M');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Ks-8^Lg+pm{fbyA<~0_IC#p>E;p@/VSJ#Si6:KD6(54_.+])c+|6g(Pk5OC|;jv,');
	define('SECURE_AUTH_KEY',  '{<T-pyq~dc<}*r}3,zxW8G-9yVO+mz)+|KIOXNZKfeooWi<K8VDYx>tQQ94Ig,]Z');
	define('LOGGED_IN_KEY',    '2++gT&#+QD&Z?}h.%HZhh!1}8t-1`.&|+->&e9l!}<3XP^j_>865O|7r5;p{}-PN');
	define('NONCE_KEY',        '>ws*jNti6,TUqnjd9|ag?5YVPw@so!+qK[S x(4}{J_*{xWxF3/Sw|SN.m o CbK');
	define('AUTH_SALT',        'Z1R3_$cq-irdRZ0}PHRgl|}lT9}4uHS)zGW)-0K(b9|e70yvXqpL5lJl_#aNd<!u');
	define('SECURE_AUTH_SALT', '6OM;1_(nsf,?(&3be77B>!Lm7>TH<Xtm|iR6gL<cDqVE`{+7ze^K{hy0-`hh8y|j');
	define('LOGGED_IN_SALT',   'Kh3Dj;:-3J<3)]-:^<]RO.{Mz_/sY-a>5MSc9/)8ggz&(E`u|69PoU8k_@y$O<t^');
	define('NONCE_SALT',       ']|TargW-c*uDR[ueHHxL/!|~{chYNwJYg]`e{-)nzIe5c1S_H=N^*ZN|0HJC&wo6');

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
