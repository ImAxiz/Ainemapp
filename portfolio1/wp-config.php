<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

define( 'ITSEC_ENCRYPTION_KEY', 'OjZ7bUI0S2ttMVEkU3RbfHdJZnQ/SDg2KXBmYVVGTCkjNzYwbj9vRzd0QlApallbb0gwLFk8LUB8WzJOVmdTbw==' );

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'd132392sd582084' );

/** Database username */
define( 'DB_USER', 'd132392sa529673' );

/** Database password */
define( 'DB_PASSWORD', 'B25x3wA95Jtc4D6PF' );

/** Database hostname */
define( 'DB_HOST', 'd132392.mysql.zonevs.eu' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '0J4XXvumwLUaK3RbRUGqLSZiQxM9VORcrIT0yFb9rRHh7w2xZObhvEyofeq9zjAh');
define('SECURE_AUTH_KEY',  'vgqnhkujHEpHuJf5Wu0HcnGpkiCMoW3TvwhaDzDC8un6RL5Qt1CYCc12bTiL5FFv');
define('LOGGED_IN_KEY',    'fuZQhcUUndRP0TXStJP54UpGFbI6TA0pGqiaR4bt2izhLZ4tPxgpu2JLNp5CWnb4');
define('NONCE_KEY',        'V1F6icQY01rWZPSGPxlAI3eFHiEPqlzGyKHzawUC68UE2fhijJsBCkr3FsXJuymi');
define('AUTH_SALT',        'FmN1ICijr8dTbXBN9IPn7fLoxhAmBb5pUbb2MwlSN8FVZyMxJBaXYxDvrlt7JtLF');
define('SECURE_AUTH_SALT', 'bu2W4dB3gv47r7LF6kQ09vjmbVtUcIFJz4kwSpdWMyUwSitcSkFoNYaCKWACtKCW');
define('LOGGED_IN_SALT',   'DAuwSi4w1aUS6Ain9RuUzoUcvdiU9SwwPy7ZPsY3tVkuPK75m6KAvZqP76w2w4Vi');
define('NONCE_SALT',       '9MHLcZmJe1SnvYXdFRRqvWM9XNqXlIoGvvoDE5xdCtWS5mgh2oDPxkOhde6LpqsE');

/**
 * Other customizations.
 */
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'uvpw_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
