<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'scroungr');

/** MySQL database username */
define('DB_USER', 'scroungr');

/** MySQL database password */
define('DB_PASSWORD', 'k-SH!097Pd');

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
define('AUTH_KEY',         '25fx4byqjurlh7mtlyotry6eas6hkjoivxkmcoocukafngwpi2utbncx1fz9dxak');
define('SECURE_AUTH_KEY',  'b0jnjjrdewjiegqka8kqtrlr8lsslrxxglevjkginhsnkhwgawfs0wc3z3atz6le');
define('LOGGED_IN_KEY',    'wglzqlcngw3q3rkgztmpg2rc6f5fufowzbhmfu9p0lsjx6vx1bt4lzmxggigqj6o');
define('NONCE_KEY',        'zqp2plkuyl9mlyfnrhmnasvfmkwsa8qxzpuhrmpa8osmlr6kz2rw3ipyrzqylymw');
define('AUTH_SALT',        'prbbl5ep0iryv06ile6vhypma9jjxxglcjv880gsexf7rfnqigckojnku8kcekbh');
define('SECURE_AUTH_SALT', 'lfbsie55qjnnx3cf5snrcjfrvtapkjgr65r2s2iopvr4d8tdrrsnn2cahzizam4x');
define('LOGGED_IN_SALT',   'vfrfbiq2608hvqbsvlme4szt6mmqdzzlq6smqogmcxyhtrewxmxgr9dyouaq6unw');
define('NONCE_SALT',       'nxgfnsxy01myi1vdvkxrimjicib4oflfk5xlu1evjbft88qozdrihdncikp8lsnx');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
