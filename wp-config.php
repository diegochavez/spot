<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'volumens_wp962');

/** MySQL database username */
define('DB_USER', 'volumens_wp962');

/** MySQL database password */
define('DB_PASSWORD', '.r!cU0SP89');

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
define('AUTH_KEY',         'w2xi0ylf50mnob8kqbbjilcx6mg40jp6ounvsfdtivrqs54ofgffrngrl1re32rj');
define('SECURE_AUTH_KEY',  'zrtitygqde55qvf7fxtzjxilajophfeflpupyi580l0fe6galq6csbvhrcsiho8r');
define('LOGGED_IN_KEY',    'egsei16whv9snezcudbiebenski5wnskost8xuqiskii67zio8ribsq0hqthrjg5');
define('NONCE_KEY',        'mpi7kgxjmebvyours8fgatk93yniswcqnhh6zpmw1fa1ivqhg1drzqnzln57f7cm');
define('AUTH_SALT',        'gmnd3mroyj5ul4pzkepwphdraihffxktf1ft8vhly1nstod8el5xnac2rdrlsxbx');
define('SECURE_AUTH_SALT', 'yizl6pzuwmc6q3b0sx8j0e9sanbv1j6f6lrq5qf37crridf3mcvrdvjwwveeapzs');
define('LOGGED_IN_SALT',   '3jjb2clievtexuswx8sodti8nsy3g3qgrx79nsnfwjen4hzwr2zy2w5q59trn4r8');
define('NONCE_SALT',       'wq16ayk73vpzczocjru9ihhwqs8p3qtxfqqvpucc2ne8sr3ns9pj4fpdznqes8aw');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dvs_';

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
