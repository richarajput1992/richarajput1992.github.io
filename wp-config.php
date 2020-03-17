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
define('DB_NAME', 'i4286425_wp1');

/** MySQL database username */
define('DB_USER', 'i4286425_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'O[m4VPDuovbr5XU^v(]27*^3');

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
define('AUTH_KEY',         'rOAl0CciImrn3KkUjFE0BM332qZxUfjxhAMyp269MDXEk8e0LUX2Jo6DZyQSDR86');
define('SECURE_AUTH_KEY',  'rQa8MtXluhqSCT7lWsWcBAxurs61zkIEiBN9Ah8LkGlygHtSkjX7FQstcFAsjHoN');
define('LOGGED_IN_KEY',    'SIhM3P2f30WUd6AVFLx2KgBenlOqcAC2EbMswFTIlTP22Pei8CbiWU7kxGFyRrEl');
define('NONCE_KEY',        'yIKB35Y0HN4u5fFTnWMv7ImHz8ERN6sLeOzIftHXlhr4YnHw1AWWnG6UM3wSfR4N');
define('AUTH_SALT',        'ivJ3nxe2ZSt7m8lhpX3kb3yLY7u3PXhUYXY0vo8N54rvW1yexLLBPPv6f8b3cvjS');
define('SECURE_AUTH_SALT', '6C4gdEwOJTL8adDRRHfJRVYKuBdHrfAlOwAwadkl47C39BXvKpB8Gl0OotmN4TB9');
define('LOGGED_IN_SALT',   'AyTzTNQwgA5i6osLzgJMphDJXSKrMFQej8gXD4ATEq2H3g7PBEMRMH9LQHq9w5zM');
define('NONCE_SALT',       '6aUs5KpZmpWmdalehlzaSIosNHSIlxeMgDVI564aFeXghGsiFp3bbseQgVwLbTch');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
