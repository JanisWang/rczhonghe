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
define('DB_NAME', 'rczhwpnv_rczhcn');

/** MySQL database username */
define('DB_USER', 'rczhwpnv_rczhcn');

/** MySQL database password */
define('DB_PASSWORD', 'Pmp(1Sm11!');

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
define('AUTH_KEY',         '9ygulafe5rxdrxufqrjk3jgrvu6tdkyxbieq4uctclfcn3mqlofxcyyi1n4a225a');
define('SECURE_AUTH_KEY',  'ssrnlyxmpah9x6vx2piidhltt7bqhwvmoldygvtqgipmqxzguv0a5w8qn2coo0oq');
define('LOGGED_IN_KEY',    'y4vlwqbtztvh1aef7itckwjzwytoh72ogzp6db2cjeolvpz2enco35y3c2vfzrjt');
define('NONCE_KEY',        '8jzbnw4aiwlel7vqh5qea1nu71virvj3iqqafcmd2ci8hha0iz0wturofff9ftvv');
define('AUTH_SALT',        '604mj3qlwgpkkvlod6quzaemoolrbteq8qjtqmzzbyxb1yjvywglw4fwns0qonft');
define('SECURE_AUTH_SALT', 'fpllac1vmgpyu1h0iegndeugskzuvcwfoha7hvxz91zd8qyzu5vbi7in8xo3ppf6');
define('LOGGED_IN_SALT',   'g8qq0pq18p8rjgbsjnv4j8vxtdqvn7jddinjlsil7wvxmtgxdk2tww5gvku68x25');
define('NONCE_SALT',       'wgsiphram47a1avpf342qmxqtdvn3krwzk98ynkwkl7bucv3vkvwcvupqxmu4r8h');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpcaoj_';

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
