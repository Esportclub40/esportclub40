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
define('DB_NAME', 'mickdau_wp951');

/** MySQL database username */
define('DB_USER', 'mickdau_wp951');

/** MySQL database password */
define('DB_PASSWORD', '9p!SB!V88x');

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
define('AUTH_KEY',         'rsjnlsoqk2chwdkchtdkv32jpnecxbg22vxwkxkrjcinqnibqxzrzrvfsx8x1r5l');
define('SECURE_AUTH_KEY',  'iqavoukrplxwjqfn0mus3wsa1nczp0geom3tawdocx9amt8ldjqent2e3ef2lej9');
define('LOGGED_IN_KEY',    'dkoihfbjxqduu5k8onops52jloslvtx44j051pzvcxqftvcvz8wtck56pfostdlj');
define('NONCE_KEY',        '6nqbcaeo0xrprrvro7ioc5nwf5gb9kbx5xhviigrkdmfciuukwz0eplu5kdebqsm');
define('AUTH_SALT',        'i62dicwfrnknheauhvvpqpkbli8lbc68v0hks4fmaav6lswu5souopsfeo0ijn7z');
define('SECURE_AUTH_SALT', 'gb7qy6hkitipvbdxly3xxh41dxgzta8rmq7ptowmyva8bfrdct1anriciwbd6ilj');
define('LOGGED_IN_SALT',   'koozrwptx7yxbilvaknny8bdjnwhxrcsobttlbypccfewlcdvyeisvyu5aqwifeg');
define('NONCE_SALT',       'jtm5dcwiug2exqkqmdofa56hvfjlaltc8fywps0vgf5u9xlp22pzwkye6kbvnruu');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wphw_';

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
